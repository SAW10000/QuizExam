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
    $categoryid=$_GET['id'];
    $title=$_GET['title'];
   
?>

<main class="container">
            <div class="row">
                <div class="col-md-8"><h2><?php echo $title; ?></h2> </div>
                <div class="col-md-2">
                
               
                <a href="addquestion.php?categoryid=<?php echo $categoryid; ?>" class="btn btn-success" name="addquestion">Add Quesition</a>
                
                </div>
            </div>
              
            <!--
                Form
            -->
            <div class="col-md-2"> <?php
            $categoryid=$_GET['id'];

                include('adminPhpService/displayQuiz.php');
                include('adminPhpService/hide.php');
                include('adminPhpService/delete.php');
            ?></div>
            <div class="col-md-8">
            <?php 
            $number=1;
                while($row=mysqli_fetch_array($result))
                {
            ?>
            
            
            <div class="card">
                <h5 class="card-header">Question:<?php echo $number; ?></h5>
                <div class="card-body"><?php echo $row['question']; ?></h5>
                    <p class="card-text">
                    <ol class="abcd">
                        <li><?php echo $row['option1']; ?></li>
                        <li><?php echo $row['option2']; ?></li>
                        <li><?php echo $row['option3']; ?></li>
                        <li><?php echo $row['option4']; ?></li>
                    </ol>
                    Correct Option: <?php echo $row['correctoption']; ?>
                    </p>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <a href="#" class="btn btn-primary">Edit</a>
                        <button type="submit" name="hide" class="btn btn-warning">Hide</button>
                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
                   
                
            <?php
                $number++;
                }
            ?>
                
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
    <script>
        hide(){
            
             alert('hello');
        
        // $.ajax
        //     ({
        //     type: "POST",
        //     url: "businesslogic/registration.php",
        //     data: { "fname": fname, "lname": lname, "mobile": mobile, "email": email, "password": password },
        //     success: function (data) {
        //         alert(data);
        //     }
        //     });
        }
        </script>
</body>
</html>

