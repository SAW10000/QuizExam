<?php
    session_start();
    if($_SESSION["email"]=="")
    {
        header('location:../adminlogin.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <title>Quiz Exam | Home</title>
</head>
<body>
<div class="fluid">
<?php

if($_SESSION["email"]) {
    include('include/header.php');
?>

<main class="container">
            <h2>Admin Dashboard</h2>   
            <!--
                Form
            -->
            <div class="col-md-2"></div>
            <div class="col-md-8">
               
            </div>
            <div class="col-md-2"></div>
        </main>
        <?php
            }else echo "<h1>Please login first .<a href='../index.php'>Go to Login page</a></h1>";
        ?>
        <!-- Footer Section -->

        <?php
            include("include/footer.php");
        ?>
    </div>
    <script src="js/validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>

