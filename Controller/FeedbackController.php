<?php 
    class FeedbackController{
        private $id;
        private $name;
        private $email;
        private $subject;
        private $message;
        public function __construct() {
        }
        public function getFeedback()
        {
            include('../database/db.php');
            include('../Model/Feedback.php');
            $query = "select * from feedback";
            $feedbacks=array();
    	    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
              while($row = $result->fetch_assoc()){
                    $feedback = new Feedback($row['id'],$row['name'],$row['email'],
                    $row['subject'],$row['message']);
                    $feedbacks[] = $feedback;
            }
              return $feedbacks;
        }

        public function addFeedback($feedback)
        {
            include('../database/db.php');
            $id = 0;
            $name = $feedback->getName();
            $email = $feedback->getEmail();
            $subject = $feedback->getSubject();
            $message = $feedback->getMessage();
            $query = "INSERT INTO feedback VALUES('$id','$name','$email','$subject','$message')";
            $mysqli->query($query);
            return "Feedback Sent Succefully";
        }
    }
?>