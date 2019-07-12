<?php 
    class Place{
        private $id;
        private $name;
        private $location;
        private $distance;
        private $category;
        private $description;
        private $imgUrl;
        public function __construct($id,$name,$location,$distance,$category,$description,$imgUrl) {
            $this->id = $id;
            $this->name = $name;
            $this->location = $location;
            $this->distance = $distance;
            $this->category = $category;
            $this->description = $description;
            $this->imgUrl = $imgUrl;
        }
        public function getId()
        {
            return $this->id;
        }
        public function getName()
        {
            return $this->name;
        }
        public function getLocation()
        {
            return $this->location;
        }
        public function getDistance()
        {
            return $this->distance;
        }
        public function getCategory()
        {
            return $this->category;
        }
        public function getDescription()
        {
            return $this->description;
        }
        public function getUrl()
        {
            return $this->imgUrl;
        }
    }
?>