<?php
    include('../phpService/db.php');
    if(isset($_POST['title']))
    {
        if(!$con)
        {
            die("Failed to connect to server: "+mysqli_connect_error());
        }
        $title=$_POST['title'];
        $description=$_POST['description'];
        $totalquestion=$_POST['totalquestion'];
        $mpq=$_POST['mpq'];
        $sql="INSERT INTO `quizdb`.`category`(`title`,`description`,`totalquestion`,`mpq`) VALUES ('$title','$description','$totalquestion','$mpq')";
        if($con->query($sql)==true)
        {
            echo "<script>alert('Quiz Category Created');</script>";
        }
        else
        {
            echo "<script>alert('Error".mysqli_connect_error()."');</script>";
        }
    }
        
    
?>