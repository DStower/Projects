<?php
    abstract class Visa{
        public function visaPayment(){
            return "Perform a payment";
        }

        abstract public function getPayment(); // All classes marked abstract in the parent's class declaration must be defined by the child class
    }