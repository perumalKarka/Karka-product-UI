<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Karka-Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">


    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- third party css -->
    <link href="assets/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body class="auth-fluid-pages pb-0">

    <div class="auth-fluid auth-fluid-img">
        <div class="auth-fluid-form-box auth-form-box-size">
            <div class="align-items-center d-flex h-100">
                <div class="card-body card-body-size">
                    <!-- logo -->
                    <div class="auth-brand text-center text-lg-left">
                        <a href="index.php">
                            <span><img src="assets/images/gsmmaster-logo-blue.png" alt="" height="50"></span>
                        </a>
                    </div>
                     <!-- title-->
                     <h4 class="login-font">Signup</h4>
                     <hr/>

                     <form action="#" class="mt-4">
                        <div class="form-group mb-2">
                            <label for="username">User Name</label>
                            <input class="form-control" type="text" id="username" required="" placeholder="Enter your username">
                        </div>
                        <div class="form-group mb-2">
                            <label for="useremail">Email</label>
                            <input class="form-control" type="email" id="useremail" required="" placeholder="Enter your email">
                        </div>
                        <div class="form-group mb-2">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                        </div>
                        <div class="form-group mb-3 text-center btn-style">
                            <button class="btn btn-block" type="submit"> Signup </button>
                        </div>
                        <!-- social-->
                        <div class="issue-login">
                            <p class="text-muted">Already have account? <a href="login.php">Login</a></p> 
                        </div>
                    </form>
                </div>   
            </div>
        </div>
        <div class="auth-fluid-right text-center auth-bg-img">
            <div id="carouselExampleIndicators" class="carousel slide carousel-relative" data-ride="carousel" data-intervel="false" data-pass="hover">
                <div class="carousel-inner carousel-width">
                    <div class="carousel-item active">
                        <h4>Fullstack Developer</h4>
                        <p>Front End Developer & Back End Developer</p>
                    </div>
                    <div class="carousel-item">
                        <h4>Front End Developer</h4>
                        <p>HTML,CSS,JS,REACT,NOTEJS</p>
                    </div>
                    <div class="carousel-item">
                        <h4>Back End Developer</h4>
                        <p>PHP FRAMEWORK,PYTHON</p>
                    </div>
                </div>
                <div class="carousel-indicators carousel-indicators-btn">
                    <button type="button" data-target="#carouselExampleIndicators" data-slide-to="0" class="active" ></button>
                    <button type="button" data-target="#carouselExampleIndicators" data-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-target="#carouselExampleIndicators" data-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </div>
        <!-- end auth-fluid-->
</body>
     <!-- App js -->
     <script src="assets/js/app.min.js"></script>
</html>