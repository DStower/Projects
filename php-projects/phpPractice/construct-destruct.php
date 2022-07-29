<?php
    class Animal{
        // Properties
        public $name;
        public $sound;

        // Constructor (Initializer)
        public function __construct($name, $sound){
            $this->name = $name;
            $this->sound = $sound;
        }

        public function __destruct(){
            echo "The animal is a $this->name and it sounds like $this->sound";
        }
    }

    $animal = new Animal("Dog", "Woof");