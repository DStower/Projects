<?php
    class Dbh{
        private $host = "localhost";
        private $user = "root";
        private $pwd = "root";
        private $dbName = "";

        protected function connect(){
            // Data Source Name (dsn)
            try{
                $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
                $pdo = new PDO($dsn, $this->user, $this->pwd); 
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                echo "Connection failed: " . $e->getMessage();
            }
            return $pdo; 
        }
    }


