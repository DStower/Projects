<?php
    class BuyProduct extends Visa{
        public function getPayment(){ // Method must be defined because class inherits from a abstract class that contains abstract method getPayment()
            return $this->visaPayment();
        }
    }