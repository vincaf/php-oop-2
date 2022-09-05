<?php 
    include_once __DIR__ . '/User.php';

    class RegisteredUser extends User{
        protected $username;
        protected $password;
        protected $discount = 20;

        /**
         * Create a new istance of a User object
         * 
         * @param [string] $_usurname
         * @param [string] $_password
         * @param [string] $_name
         * @param [string] $_surname
         * @param [string] $_address
         * 
         */

        public function __construct($_username, $_password, $_name, $_surname, $_address){
            parent::__construct($_name, $_surname, $_address);
            $this->username = $_username;
            $this->password = $_password;
        }

        public function getUsername(){
            return $this->username;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setUsername($_username){
            $this->username = $_username;
        }

        public function setPassword($_password){
            $this->password = $_password;
        }
    }