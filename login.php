<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login </title>
	<link rel="shortcut icon" href="./uploads/images.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="./css/util.css">
	<link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="stylesheet" type="text/css" href="./css/loginanimate.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/hamburgers.min.css">
	<link rel="stylesheet" href="./css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="./css/style.css">

	<link rel="stylesheet" href="./css/animate.css">

</head>
<body>
<header>
        <nav class="navbar  justify-content-between d-flex navbar-expand-lg navbar-white bg-white">
            <a class="ms-3 navbar-brand" href="#">Makalatak</a>
           
            <div class="collapse  justify-content-end ms-auto navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto me-3">
                   
                    <li class="social-media order-lg-last">
		    		<p class="mb-0 d-flex">
        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-facebook"><i class="sr-only">Facebook</i></span></a>
        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-twitter"><i class="sr-only">Twitter</i></span></a>
        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-instagram"><i class="sr-only">Instagram</i></span></a>
        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
    </p>
</li>

                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>
	<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
        <form method="POST" action="handle-login.php" class="login100-form validate-form">
        <span class="login100-form-title p-b-26">
            Welcome to Makalatak
        </span>
        <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
            <input class="input100" type="text" name="email" placeholder="Email" required>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Password" required>
        </div>
        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button type="submit" name="submit" class="login100-form-btn">
                    Login
                </button>
            </div>
        </div>
        <?php
        if (isset($_SESSION['errors'])) {
            echo '<div class="errors">';
            foreach ($_SESSION['errors'] as $error) {
                echo '<p>' . htmlspecialchars($error) . '</p>';
            }
            echo '</div>';
            unset($_SESSION['errors']);
        }
        ?>
    </form>>
        </div>
    </div>
</div>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
