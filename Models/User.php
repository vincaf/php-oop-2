<?php
    class User{

        protected $name;
        protected $surname;
        protected $address;
        protected $cart = [];
        protected $discount = 0;

        public function __construct($_name, $_surname, $_address){
            $this->name = $_name;
            $this->surname = $_surname;
            $this->address = $_address;
        }

        public function getName(){
            return $this->name;
        }

        public function getSurname(){
            return $this->surname;
        }

        public function getAddress(){
            return $this->address;
        }

        public function setName($_name){
            $this->name = $_name;
        }

        public function setSurname($_surname){
            $this->surname = $_surname;
        }

        public function setAddress($_address){
            $this->address = $_address;
        }

        public function getCart(){
            return $this->cart;
        }

        public function addItemsToCart($item){
            $this->cart[] = $item;
        }

        public function getDiscount(){
            return $this->discount;
        }

        public function setDiscount($_discount){
            $this->discount = $_discount;
        }
    }