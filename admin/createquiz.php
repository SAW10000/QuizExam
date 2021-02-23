<?php
    session_start();
    if($_SESSION["email"]=="")
    {
        header('location:../index.php');
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
            <h2>START QUIZ</h2>   
            <!--
                Form
            -->
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <?php
                include('adminPhpService/createQuiz.php');
            ?>
                <form action="" method="POST" name="createQuizCategory" class="d-flex flex-column bd-highlight mb-3">

                    <input type="text" class="p-2 bd-highlight " name="title" id="title" placeholder="Enter Title of the Quiz" required>
                    <textarea class="p-2 bd-highlight " name="description" id="description" placeholder="Enter Quiz Description" rows="4" cols="5" required ></textarea>
                    <input type="number" class="p-2 bd-highlight " name="totalquestion" id="totalquestion" placeholder="Enter Number of Question" required>
                    <input type="number" class="p-2 bd-highlight " name="mpq" id="mpq" placeholder="Enter Marks per Question" required>
                    <button type="submit" name="createquiz" id="createquiz" class="p-2 bd-highlight btn btn-outline-light">Create Quiz</button>
                    
                </form>
            </div>
            <div class="col-md-2"></div>
        </main>
        <?php
            }else echo "<h1>Please login first .<a href='../index.php'>Go to Login page</a></h1>";
        ?>
        <!-- Footer Section -->

        <?php
            include("include/footer.php");
            $con->close();
        ?>
    </div>
    <script src="js/validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>

