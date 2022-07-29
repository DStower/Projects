<?php
    // Scope Resolution Operator (::) used to access static, constant, and overridden properties or methods of a class

    class FirstClass{
        //Properties
        const EXAMPLE = "You can't change this!";

        // Methods
        public static function test(){
            $testing = "This is a test!";
            return $testing;
        }
    }

   // $a = FirstClass::test(); // Accessing a constant outside of the class
   // echo $a;

    class SecondClass extends FirstClass{
        //Properties
        public static $staticProperty = "A static property!";

        // Methods
        public static function anotherTest(){
            echo parent::EXAMPLE; // self, parent, static are used to access properties or methods from inside the class definition
            echo self::$staticProperty;
        }
    }

    $b = SecondClass::anotherTest(); // Accessing a aesthetic method outside of the class from another class
    echo $b;