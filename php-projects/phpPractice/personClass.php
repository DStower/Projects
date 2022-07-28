<?php
    class Person{
        // Properties and Methods goes here
        public $name;
        public $eyeColor;

        function __contruct($name, $eyeColor){
            $this->name = $name;
            $this->eyeColor = $eyeColor;
        }

        function setName($name){
            $this->name = $name;
        }

        function getName(){
            return $this->name;
        }

    }