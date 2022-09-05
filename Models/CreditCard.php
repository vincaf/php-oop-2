<?php
    class CreditCard{
        protected $cardNumber;
        protected $expirationDate;
        protected $cvv;

        /**
         * Create a new istance of a User object
         * 
         * @param [string] $_cardNumber
         * @param [string] $_expirationDate
         * @param [string] $_cvv
         * 
         */

        public function __construct($_cardNumber, $_expirationDate, $_cvv){
            $this->cardNumber = $_cardNumber;
            $this->expirationDate = $_expirationDate;
            $this->cvv = $_cvv;
        }

        public function getCardNumber(){
            return $this->cardNumber;
        }

        public function getExpirationDate(){
            return $this->expirationDate;
        }

        public function getCvv(){
            return $this->cvv;
        }

        public function setCardNumber($_cardNumber){
            $this->cardNumber = $_cardNumber;
        }

        public function setExpirationDate($_expirationDate){
            $this->expirationDate = $_expirationDate;
        }

        public function setCvv($_cvv){
            $this->cvv = $_cvv;
        }
    }