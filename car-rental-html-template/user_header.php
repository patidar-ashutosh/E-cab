<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ROYAL CARS - Car Rental HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-5.1.3-dist/" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Royal Cars</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index" class="nav-item nav-link active">Home</a>

                        <?php
                            if(isset($_SESSION['driver']))
                            {
                        ?>
                        <a href="order" class="nav-item nav-link">order</a>
                        <?php
                            }
                            else if(isset($_SESSION['user']))
                            {
                        ?>
                        <a href="cars" class="nav-item nav-link">Book Car</a>
                        <?php
                            }
                        ?>

                        <?php
                            if(isset($_SESSION['user']))
                            {
                        ?>
                        <a href="booking_history" class="nav-item nav-link">Booking Histroy</a>
                        <?php
                            }
                        ?>

                        <a href="about" class="nav-item nav-link">About</a>
                        <a href="contact" class="nav-item nav-link">Contact</a>

                     <!-- account -->
                     <?php
                            if(isset($_SESSION['user']))
                            {
                        ?>
                        <?php
                            }
                            elseif(isset($_SESSION['driver']))
                            {
                        ?>
                        <?php
                            }                            
                            else
                            {
                        ?>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="user_register" class="dropdown-item">I Am Passenger</a>
                                <a href="driver_register" class="dropdown-item">I Am Driver</a>
                            </div>
                        </div>
                        <?php
                            }
                        ?>

                        <!-- my profile -->

                        <?php
                            if(isset($_SESSION['driver']))
                            {
                        ?>
                        <div class="nav-item dropdown">
                            <a href="profile" class="nav-link">My Profile</a>
                        </div>
                        <?php
                            }
                            else if(isset($_SESSION['user']))
                            {
                        ?>
                        <a href="my_profile" class="nav-item nav-link">My Profile</a>
                        <?php
                            }
                        ?>

                        <!-- user logout -->
                        <?php
                            if(isset($_SESSION['user']))
                            {
                        ?>
                        <div class="nav-item dropdown">
                            <a href="logout" class="nav-link">Logout</a>
                        </div>
                        <?php
                            }
                        ?>
                        
                        <!-- driver logout -->
                        <?php
                            if(isset($_SESSION['driver']))
                            {
                        ?>
                        <div class="nav-item dropdown">
                            <a href="driver_logout" class="nav-link">Logout</a>
                        </div>
                        <?php
                            }
                        ?>



                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->