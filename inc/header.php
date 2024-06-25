<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "blog");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./uploads/images.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Eagle+Lake&display=swap" rel="stylesheet">


<link rel="stylesheet" href="fonts/icomoon/style.css">
    <title>Makalatak</title>
    <link rel="stylesheet" href="./css/footer.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/index.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/animate.css">



</head>


<body>
<header>
    <nav class="navbar justify-content-between d-flex navbar-expand-lg navbar-white bg-white">
        <a class="ms-3 navbar-brand" href="#">Makalatak</a>
        
        <div class="collapse justify-content-end ms-auto navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto me-3">
                <li class="social-media order-lg-last">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </li>

                <li class="nav-item me-2 order-lg-last">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</header>








    
      
   
