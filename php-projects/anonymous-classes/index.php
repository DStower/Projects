<?php
    // Regular Class

    include_once "classes/simpleclass.class.php";

    $obj = new SimpleClass();
    $obj->helloWorld();

    // Anonymous Class

    $newObj = new class(){
        public function helloWorld(){
            echo "Hello World!";
        }
    };

    $newObj->helloWorld();