<?php
    /* View: Show/Retrieve information from the database */
    class UsersView extends Users{
        public function showUsers($name){
            $results = $this->getUser($name);
            echo "Full name: " . $results[0]['users_firstname'] . " " . $results[0]['users_lastname'] . "<br>";
            echo "Date of birth: " . $results[0]['users_dateofbirth'];
        }
    }