<?php 
    class Adminstrator{
        private $id;
        private $name;
        private $email;
        private $password;
        private $phone;
        private $address;
        public function __construct($id,$name,$email,$password,$phone,$address) {
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->phone = $phone;
            $this->address = $address;
        }
        public function getId()
        {
            return $this->id;
        }
        public function getName()
        {
            return $this->name;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getPassword()
        {
            return $this->password;
        }
        public function getPhone()
        {
            return $this->phone;
        }
        public function getAddress()
        {
            return $this->address;
        }
    }
?>