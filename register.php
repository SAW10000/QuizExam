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
            <h2>Register Here</h2>   
            <!--
                Form
            -->
            <div class="row">
                <div class="col-md-2"><?php
                include("phpService/register.php");
                ?></div>
                <div class="col-md-6">
                    <form action="" method="POST" name="register" class="d-flex flex-column bd-highlight mb-3">

                        <input type="uname" class="p-2 bd-highlight " name="uname" id="uname" placeholder="Enter Your Name" required  oninput="ValidateName(document.register.uname)">
                        <span id="invalidName" class="badge bg-danger">Invalid Name</span>
                        <span id="validName" class="badge bg-success"><i class="bi bi-check-circle"></i></span>

                        <input type="email" class="p-2 bd-highlight " name="email" id="email" placeholder="Enter Your Email" required oninput="ValidateEmail(document.register.email)">

                        <span id="invalidEmail" class="badge bg-danger">Invalid Email Address</span>
                        <span id="validEmail" class="badge bg-success"><i class="bi bi-check-circle"></i></span>

                        <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">+91</span>
                        <input type="number" class="p-2 bd-highlight form-control" aria-describedby="basic-addon1" name="phone" id="phone" placeholder="Enter Phone Number" required oninput="ValidatePhone(document.register.phone)">
                        </div>

                        <span id="invalidPhone" class="badge bg-danger">Invalid Phone Number</span>
                        <span id="validPhone" class="badge bg-success"><i class="bi bi-check-circle"></i></span>

                        <input type="password" class="p-2 bd-highlight " name="password" id="password" placeholder="Enter Password" required oninput="ValidatePassword()">
                        <input type="password" class="p-2 bd-highlight " name="password1" id="password1" placeholder="Confirm Password" required oninput="ValidatePassword()">
                        <span id="invalidPwd" class="badge bg-danger">Password did not matched</span>
                        <span id="validPwd" class="badge bg-success"><i class="bi bi-check-circle"></i></span>

                        <textarea class="p-2 bd-highlight " name="address" id="address" placeholder="Enter Your Address" rows="4" cols="5" required ></textarea>
                        
                        <button type="submit" name="register" id="register" class="p-2 bd-highlight btn btn-outline-light">Register</button>
                        <p class="registerLink">Already Have Account?  <a href="index.php" class="alert-link">Login here</a></p>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
            
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