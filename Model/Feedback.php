<?php 
    class Feedback{
        private $id;
        private $name;
        private $email;
        private $subject;
        private $message;
        public function __construct($id,$name,$email,$subject,$message) {
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->subject = $subject;
            $this->message = $message;
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
        public function getSubject()
        {
            return $this->subject;
        }
        public function getMessage()
        {
            return $this->message;
        }
    }
?>