<?php
    class Product{
        protected $name;
        protected $price;
        protected $category;

        public function __construct($_name, $_price, $_category){
            $this->name = $_name;
            $this->price = $_price;
            $this->category = $_category;
        }

        public function getName(){
            return $this->name;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getCategory(){
            return $this->category;
        }

        public function setName($_name){
            $this->name = $_name;
        }

        public function setPrice($_price){
            $this->price = $_price;
        }

        public function setCategory($_category){
            $this->category = $_category;
        }
    }