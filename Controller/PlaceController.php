<?php 
    class PlaceController{
        private $id;
        private $name;
        private $location;
        private $distance;
        private $category;
        private $description;
        public function __construct() {
        }
        public function search($name)
        {
            include('./database/db.php');
            include_once('./Model/Place.php');
            $query = "select * from place where name like '%$name%'";
            $places=array();
    	    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
              while($row = $result->fetch_assoc()){
                    $place = new Place($row['id'],$row['name'],$row['location'],
                    $row['distance'],$row['category'],$row['description'],$row['imgUrl']);
                    $places[] = $place;
            }
              return $places;
        }
        public function getPlace($id)
        {
            include('../database/db.php');
            include_once('../Model/Place.php');
            $query = "select * from place where id = '$id'";
    	    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
            $row = $result->fetch_assoc();
            $place = new Place($row['id'],$row['name'],$row['location'],
            $row['distance'],$row['category'],$row['description'],$row['imgUrl']);
            return $place;
        }
        public function getPlaces()
        {
            include('./database/db.php');
            include_once('./Model/Place.php');
            $query = "select * from place";
            $places=array();
    	    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
              while($row = $result->fetch_assoc()){
                    $place = new Place($row['id'],$row['name'],$row['location'],
                    $row['distance'],$row['category'],$row['description'],$row['imgUrl']);
                    $places[] = $place;
            }
              return $places;
        }

        public function addPlace($place)
        {
            include('../database/db.php');
            $id = 0;
            $name = $place->getName();
            $location = $place->getLocation();
            $distance = $place->getDistance();
            $category = $place->getCategory();
            $description = $place->getDescription();
            $imgUrl = $place->getUrl();
            $query = "INSERT INTO place VALUES('$id','$name','$location','$distance','$category','$description','$imgUrl')";
            $mysqli->query($query);
            return "Successfully Added";
        }
        public function deletePlace($id)
        {
            include('../database/db.php');
            include_once('../Model/Place.php');
            $query = "delete from place where id = '$id'";
    	    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
            header('Location: place.php');
        }
        public function updatePlace($place)
        {
            include('../database/db.php');
            $id = $place->getId();
            $name = $place->getName();
            $location = $place->getLocation();
            $distance = $place->getDistance();
            $category = $place->getCategory();
            $description = $place->getDescription();
            $imgUrl = $place->getUrl();
            $query = "UPDATE place 
                           SET
                           name='$name',
                           location='$location',
                           distance='$distance',
                           category='$category', 
                           description='$description' 
                           WHERE id=$id";
            $mysqli->query($query);
            return "Successfully Updated";
        }
        public function getAllPlaces()
        {
            include('../database/db.php');
            include_once('../Model/Place.php');
            $query = "select * from place";
            $places=array();
    	    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
              while($row = $result->fetch_assoc()){
                    $place = new Place($row['id'],$row['name'],$row['location'],
                    $row['distance'],$row['category'],$row['description'],$row['imgUrl']);
                    $places[] = $place;
            }
              return $places;
        }
        public function searchAll($name)
        {
            include('../database/db.php');
            include_once('../Model/Place.php');
            $query = "select * from place where name like '%$name%'";
            $places=array();
    	    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
              while($row = $result->fetch_assoc()){
                    $place = new Place($row['id'],$row['name'],$row['location'],
                    $row['distance'],$row['category'],$row['description'],$row['imgUrl']);
                    $places[] = $place;
            }
              return $places;
        }
    }
?>