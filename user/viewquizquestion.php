<?php
    session_start();
    if($_SESSION["uname"]=="")
    {
        header('location:../index.php');
    }
    $userid=$_SESSION["id"];
    // echo $userid;
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

if($_SESSION["uname"]) {
    include('include/header.php');
?>

<main class="container">
            <h2>START QUIZ</h2>   
            <!--
                Form
            -->
            <div class="col-md-2">
            <?php      
            $categoryid=$_GET['id'];
                include('userPhpService/submitAnswer.php');
            ?>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <form action="" method="POST">
                        <?php
                        
                            include('userPhpService/viewQuizQuestion.php');
                        ?>
                        <?php 
                        $question=1;
                            while($row=mysqli_fetch_array($result))
                            {
                                
                        ?>
                        <div class="card">
                            <div class="card-header">
                                Question <?php echo $question; ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row["question"]; ?></h5>
                                <p class="card-text">
                            
                                    <input class="form-check-input" type="radio" name="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" value="a" required>
                                    <label class="form-check-label" for="<?php echo $row['id']; ?>">
                                        <?php echo $row['option1']; ?>
                                    </label>
                                    <br/><br/>
                                    <input class="form-check-input" type="radio" name="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" value="b" required>
                                    <label class="form-check-label" for="<?php echo $row['id']; ?>">
                                        <?php echo $row['option2']; ?>
                                    </label>
                                    <br/><br/>
                                    <input class="form-check-input" type="radio" name="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" value="c" required>
                                    <label class="form-check-label" for="<?php echo $row['id']; ?>">
                                        <?php echo $row['option3']; ?>
                                    </label>
                                    <br/><br/>
                                    <input class="form-check-input" type="radio" name="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" value="d" required>
                                    <label class="form-check-label" for="<?php echo $row['id']; ?>">
                                        <?php echo $row['option4']; ?>
                                    </label>
                                    <br/><br/>
                            
                                </p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>
                        <?php
                        $question++;
                            }
                        ?>
                         <button class="btn btn-info" type="submit" name="submitAnswer" id="submitAnswer" class="p-2 bd-highlight btn btn-outline-light">Submit Quiz</button>
                    </form>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>

