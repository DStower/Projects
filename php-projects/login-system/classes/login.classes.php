<?php

    class Login extends Dbh{
        protected function getUser($uid, $pwd){
            $stmt = $this->connect()->prepare('SELECT user_pwd FROM user WHERE user_uid = ? OR user_email = ?;');

            if(!$stmt->execute([$uid, $pwd])){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPwd = password_verify($pwd, $pwdHashed[0]["user_pwd"]);

            if($checkPwd == false){
                $stmt = null;
                header("location: ../index.php?error=wrongpassword");
                exit();
            }
            elseif($checkPwd == true){
                $stmt = $this->connect()->prepare('SELECT * FROM user WHERE user_uid = ? OR user_email = ? AND user_pwd = ?;');

                if(!$stmt->execute([$uid, $uid, $pwd])){
                    $stmt = null;
                    header("location: ../index.php?error=stmtfailed");
                    exit();
                }

                if($stmt->rowCount() == 0){
                    $stmt = null;
                    header("location: ../index.php?error=usernotfound");
                    exit();
                }

                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

                session_start();
                $_SESSION["userid"] = $user[0]["user_id"];
                $_SESSION["useruid"] = $user[0]["user_uid"];
            }

            $stmt = null;
        }
    }