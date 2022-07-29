<?php
    // Parent class
    abstract class Water{
        public $name; // Properties

        public function __construct($name){ // Constructor (Initializer)
            $this->name = $name;
        }

        abstract public function intro() : string;
    }

    // Child Classes
    class Ocean extends Water{
        public function intro() : string{
            return "I'm the largest body of water! I'm an $this->name";
        }
    }

    class Lake extends Water{
        public function intro() : string{
            return "I'm big too! I'm an $this->name";
        }
    }

    class River extends Water{
        public function intro() : string{
            return "I am narrow and go on for miles! I'm an $this->name";
        }
    }

    // Create Objects from the child classes
    $ocean = new Ocean("Atlantic");
    echo $ocean->name;
    echo "<br>";

    $lake = new Lake("Michigan");
    echo $lake->name;
    echo "<br>";

    $river = new River("Mississippi");
    echo $river->name;
    echo "<br>";