<?php
    /* Controller: Insert/Add/Update/Delete information to the database */
    class UsersContr extends Users{
        public function createUser($users_id, $firstname, $lastname, $dob){
            $this->setUser($users_id, $firstname, $lastname, $dob);
        }
    }