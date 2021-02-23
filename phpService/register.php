<?php

$insert = false;
if(isset($_POST['uname'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    $name = mysqli_real_escape_string($con,$_POST['uname']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $password=md5($_POST['password1']);
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $sqlcheck="SELECT * FROM `quizdb`.`usertbl` WHERE `email`='$email' AND `phone`='$phone'";
    $result=mysqli_query($con,$sqlcheck);
    if(mysqli_num_rows($result)>0)
    {
        echo "<script>alert('Email or Phone already Exist');</script>";
    }
    else
    {
        $sql = "INSERT INTO `quizdb`.`usertbl` (`username`, `email`, `phone`, `password`, `address`) VALUES ('$name', '$email', '$phone', '$password', '$address')";

        if($con->query($sql) == true){
            $insert = true;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }
    }
        
    $con->close();
}
?>