<?php 
    class AccountController{
        private $id;
        private $name;
        private $email;
        private $password;
        private $phone;
        private $address;
        public function __construct() {
        }
        public function login($email,$password){
            include('../database/db.php');
            include('../Model/Adminstrator.php');
            $query = "select * from admin where email = '$email' and password='$password'";
            $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
            $row = $result->fetch_assoc();
            if($row){
                header('Location: ./place.php');
            }
            return "Invalid email/password";
        }
        public function getAdminstrators()
        {
            include('../database/db.php');
            include('../Model/Adminstrator.php');
            $query = "select * from admin";
            $adminstrators=array();
    	    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
              while($row = $result->fetch_assoc()){
                    $adminstrator = new Adminstrator($row['id'],$row['name'],$row['email'],
                    $row['password'],$row['phone'],$row['address']);
                    $adminstrators[] = $adminstrator;
            }
              return $adminstrators;
        }

        public function addAdminstrator($adminstrator)
        {
            include('../database/db.php');
            $id = 0;
            $name = $adminstrator->getName();
            $email = $adminstrator->getEmail();
            $password = $adminstrator->getPassword();
            $phone = $adminstrator->getPhone();
            $address = $adminstrator->getAddress();
            $query = "INSERT INTO admin VALUES('$id','$name','$email','$password','$phone','$address')";
            $mysqli->query($query);
            return "Successfully Added";
        }
        public function deleteAdminstrator($id){
            include('../database/db.php');
            include_once('../Model/Adminstrator.php');
            $query = "delete from admin where id = '$id'";
    	    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
            header('Location: admins.php');
        }
    }
?>