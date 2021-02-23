<?php
session_start();
if(isset($_POST['email']))
{
    include('db.php');
    if(!$con)
    {
        die("Connection to this database failed due to:"+ mysqli_connect_error());
    }   
    
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $sqlemailcheck="SELECT * FROM `quizdb`.`usertbl` WHERE `email`='$email'";
    $result=mysqli_query($con,$sqlemailcheck);
    if(mysqli_num_rows($result)>0)
    {
        $sqlpasscheck="SELECT * FROM `quizdb`.`usertbl` WHERE `email`='$email' AND `password`='$password'";
        $result=mysqli_query($con,$sqlpasscheck);
        $row=mysqli_fetch_array($result);
        if(mysqli_num_rows($result)>0)
        {
            $_SESSION['id']=$row['id'];
            $_SESSION['uname']=$row['username'];
            if(isset($_SESSION['id']))
            {
                header('location:user/index.php');
            }
            
        }
        else
        {
            echo "<script>alert('Wrong Password');</script>";
        }
    }
    else{
        echo "<script>alert('Wrong Email ID or this email is not registered!');</script>";

    }
    $con->close();
}



?>