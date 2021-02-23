<header>
            <nav class="navbar navbar-light bg-light navbar-expand-lg">
                <div class="container-fluid d-flex ">
                    <a class="navbar-brand" href="index.php">Welcome To Quiz Exam</a>
                    <div class="collapse navbar-collapse flex-shrink-1 " id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Quiz
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="createquiz.php">Add Quiz</a></li>
                                <li><a class="dropdown-item" href="quizlist.php">View All Quiz</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=".footer">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                        </ul>
                        <span class="navbar-text">
                            Hello <?php echo $_SESSION["uname"]; ?>
                        </span>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>  
        </header>