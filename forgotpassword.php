<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Karka-Products</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/karka-logo.png">


         <!-- font-family link  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

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
                <div class="auth-body card-body">
                    <!-- logo -->
                    <div class="text-center text-lg-left">
                        <a href="index.php">
                            <span><img src="assets/images/karka-logo.png" alt="" height="90"></span>
                        </a>
                    </div>
                     <!-- title-->
                     <h4 class="login-font">Forgot your password</h4>
                     <hr/>

                     <form action="#" class="mt-3">
                            <div class="form-group mb-2">
                                <h5 class="pb-2">Enter your email address below and well get you back on track</h5>
                                <label for="Email">Email</label>
                                <input class="form-control" type="email" id="forgot-password" required="" placeholder="your@gmail.com">
                            </div>
                            <div class="form-group mb-3 mt-3 text-center btn-style">
                                <button class="btn btn-block" type="submit"> Send </button>
                            </div>
                            <!-- social-->
                            <div class="issue-login">
                                <a href="login.php" class="text-muted">Back to login</a>
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
                        <p>HTML,CSS,JS,REACT</p>
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