<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./uploads/images.png" type="image/png">
    <title>Create a New Post</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/animate.css">

<link rel="stylesheet" href="./css/index.css">


<style>
  .fredericka-the-great-regular {
  font-family: "Fredericka the Great", serif;
  font-weight: 400;
  font-style: normal;
}
.footer-59391{
        position: absolute !important;
  width: 100% !important;
  bottom: 0 !important;
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
<div class="container mt-5">
    <h3 class="mb-4 text-underlined">Add a New Post</h3>

    <?php if (isset($_SESSION['errors'])) { ?>
        <div class="alert alert-danger">
            <?php foreach ($_SESSION['errors'] as $error) { ?>
                <p><?= $error; ?></p>
            <?php } ?>
        </div>
        <?php unset($_SESSION['errors']); // Clear errors after displaying ?>
    <?php } ?>

    <form action="store-post.php" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" rows="5" placeholder="Enter body"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <a href="index.php" class="btn btn-secondary ml-2">Back</a>
    </form>
</div>






  <script src="./js/index.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
  <script src="./js/popper.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/main.js"></script>
  <script src="./js/index.js"></script>

</body>
</html>
