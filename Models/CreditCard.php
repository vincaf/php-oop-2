<?php 
    include_once __DIR__ . '/User.php';

    class CreditCard extends User{
        protected $cardNumber;
        protected $expirationDate;
        protected $cvv;

        /**
         * Create a new istance of a User object
         * 
         * @param [int] $_cardNumber
         * @param [int] $_expirationDate
         * @param [int] $_cvv
         * 
         */

        public function __construct($_cardNumber, $_expirationDate, $_cvv){
            $this->cardNumber = $_cardNumber;
            $this->setExpirationDate($_expirationDate);
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
            try{
                if($_expirationDate > date('Y-m-d')){
                    $this->expirationDate = $_expirationDate;
                } else {
                    throw new Exception('La data di scadenza non è corretta o la carta è scaduta');
                }
            } catch (Exception $e){
                echo "Exception: " . $e->getMessage();
            }
        }

        public function setCvv($_cvv){
            $this->cvv = $_cvv;
        }
    }