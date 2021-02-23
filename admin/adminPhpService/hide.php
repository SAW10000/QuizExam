<?php
    include('../phpService/db.php');
    if(isset($_POST['hide']))
    {
        if(!$con)
        {
            die("Failed to connect to server: "+mysqli_connect_error());
        }
        $id=$_POST['id'];
        
        $sql="UPDATE `quizdb`.`questiontbl` SET `isactive`=0 WHERE `id`='$id'";
        if($con->query($sql)==true)
        {
            echo "<script>alert('Question Hide Successfully!');</script>";
            header("Refresh:0");
        }
        else
        {
            echo "<script>alert('Error".mysqli_connect_error()."');</script>";
        }
    }
        
    
?>