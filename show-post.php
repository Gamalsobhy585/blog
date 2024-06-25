<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./uploads/images.png" type="image/png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Eagle+Lake&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">


<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="./css/footer.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/animate.css">

<link rel="stylesheet" href="./css/index.css">


<style>
  .fredericka-the-great-regular {
  font-family: "Fredericka the Great", serif;
  font-weight: 400;
  font-style: normal;
}
.eagle-lake-regular {
    font-family: "Eagle Lake", serif;
    font-weight: 400;
    font-style: normal;
  }
  .fredericka-the-great-regular {
  font-family: "Fredericka the Great", serif;
  font-weight: 400;
  font-style: normal;
}


  </style>

</head>
<body>
<header>
    <nav class="navbar justify-content-between d-flex navbar-expand-lg navbar-white bg-white">
        <a class="ms-3 navbar-brand" href="./index.php">Makalatak</a>
        
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
<?php
if(isset($_GET['id']) and $_GET['id'] !=''){
    $id = $_GET['id'];
}
else{
    $id=1;
}
$conn = mysqli_connect("localhost", "root", "", "blog");

$query="SELECT title,body FROM posts WHERE id = $id ";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) == 0){
    http_response_code(404);
}
else{
    $post = mysqli_fetch_assoc($result);

}



?>
<div class="container-fluid pt-4">
    <div class="row">
        <?php if(isset($post)) : ?>
        <div class="col-md-10 offset-md-1">
            <div class="d-flex justify-content-between border-bottom mb-5">
                <div class="fredericka-the-great-regular">
                <h3 class="fredericka-the-great-regular "><?=$post['title'];?></h3>
                </div>
                <div><a href="index.php" class="text-decoration-none ">Back</a></div>
            </div>
<div class="eagle-lake-regular">
<?=$post['body'];?>
</div>
</div>
</div>
<?php else: ?>

    <div class="no-post-message fw-bolder align-items-center flex-column  h1 d-flex justify-content-center text-black w-100 " >

No Post Found
<img class="img-fluid mt-5" src="./uploads/download.png" alt="">
    </div>
    <div class=" back-btn  "><a href="index.php" class=" w-100  start-100 position-relative  back-btn btn btn-primary text-decoration-none ">Back</a></div>

    </div>

<?php endif; ?>

  
</div>
