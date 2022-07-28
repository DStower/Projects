<?php
    /* Model: Only class that actually interacts with the database */
    class Users extends Dbh{
        protected function getUser($name){
            $sql = "SELECT * FROM users WHERE users_firstname = ?;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name]);

            $results = $stmt->fetchALL();
            return $results;
        }

        protected function setUser($users_id, $firstname, $lastname, $dob){
            $sql = "INSERT INTO users(users_id, users_firstname, users_lastname, users_dateofbirth) VALUES (?, ?, ?, ?);";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$users_id, $firstname, $lastname, $dob]);
        }
    }