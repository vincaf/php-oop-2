<?php
    include_once __DIR__ . '/Product.php';

    class Food extends Product{
        protected $expirationDate;
        protected $ingredients;

        public function __construct($_name, $_price, $_category, $_expirationDate, $_ingredients,){
            parent::__construct($_name, $_price, $_category);
            $this->expirationDate = $_expirationDate;
            $this->ingredients = $_ingredients;
        }

        public function getExpirationDate(){
            return $this->expirationDate;
        }

        public function getIngredients(){
            return $this->ingredients;
        }

        public function setExpirationDate($_expirationDate){
            $this->expirationDate = $_expirationDate;
        }

        public function setIngredients($_ingredients){
            $this->ingredients = $_ingredients;
        }
    }