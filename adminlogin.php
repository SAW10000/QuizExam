<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Quiz Exam | Home</title>
</head>
<body>
    <div class="fluid">
        <?php
            include("include/header.php");
        ?>
        <!-- Header Section -->
        
        <main class="container">
            <h2>ADMIN LOGIN HERE TO SETUP QUIZ</h2>   
            <!--
                Form
            -->
            <div class="col-md-2">
            <?php
                include("phpService/alogin.php");
            ?>
            </div>
                <div class="col-md-6">
            <form action="" method="POST" name="login" class="d-flex flex-column bd-highlight mb-3">
                <input type="email" class="p-2 bd-highlight " name="email" id="email" placeholder="Enter Your Email" required>

                <input type="password" class="p-2 bd-highlight " name="password" id="password" placeholder="Enter Password" required>
                
                <button type="submit" name="login" id="login" class="p-2 bd-highlight btn btn-outline-light">LOGIN</button>
                <!-- <p class="registerLink">Don't Have account?  <a href="register.php" class="alert-link">Register here</a></p> -->
            </form>
            </div>
                <div class="col-md-2"></div>
        </main>
        <!-- Footer Section -->
        <?php
            include("include/footer.php");
        ?>
    </div>
    <script src="js/validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>