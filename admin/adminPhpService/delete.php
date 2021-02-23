<?php
    include('../phpService/db.php');
    if(isset($_POST['delete']))
    {
        if(!$con)
        {
            die("Failed to connect to server: "+mysqli_connect_error());
        }
        $id=$_POST['id'];
        
        $sql="DELETE FROM `quizdb`.`questiontbl` WHERE `id`='$id'";
        if($con->query($sql)==true)
        {
            echo "<script>alert('Question Deleted Successfully!');</script>";
            header("Refresh:0");
        }
        else
        {
            echo "<script>alert('Error".mysqli_connect_error()."');</script>";
        }
    }
        
    
?>