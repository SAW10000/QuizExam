<?php
    include('../phpService/db.php');
    if(!$con)
    {
        die("Failed to connect to server: "+mysqli_connect_error());
    }
    $sql="SELECT * FROM `quizdb`.`questiontbl` WHERE `categoryid`='$categoryid' AND`isactive`=1";
    $result=mysqli_query($con,$sql);
    
?>