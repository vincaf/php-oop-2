<?php
    include_once __DIR__ . '/Product.php';

    class Food extends Product{
        protected $material;
        protected $color;

        public function __construct($_name, $_price, $_category, $_material, $_color,){
            parent::__construct($_name, $_price, $_category);
            $this->material = $_material;
            $this->color = $_color;
        }

        public function getMaterial(){
            return $this->material;
        }

        public function getColor(){
            return $this->color;
        }

        public function setMaterial($_material){
            $this->material = $_material;
        }

        public function setColor($_color){
            $this->color = $_color;
        }
    }