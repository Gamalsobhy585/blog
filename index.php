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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">


<link rel="stylesheet" href="fonts/icomoon/style.css">
    <title>Makalatak</title>
    <link rel="stylesheet" href="./css/footer.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/animate.css">

<link rel="stylesheet" href="./css/index.css">


<style>
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
function truncateText($text, $maxLength = 100, $postId) {
    if (strlen($text) <= $maxLength) {
        return htmlspecialchars($text);
    }

    $truncated = substr($text, 0, $maxLength) . '... ';
    $seeMoreLink = '<a href="show-post.php?id=' . $postId . '">See more</a>';
    return htmlspecialchars($truncated) . $seeMoreLink;
}
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "blog");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM posts";
$result = mysqli_query($conn, $query);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<div class="container mt-3 d-flex align-items-center justify-content-end ">
    <a class="btn btn-success" href="create-post.php">Add a New Post</a>
</div>
<div class="container ">
    <div class="row">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-4">
                <div class="card my-4">
                    <div class="card-body">
                        <h5 class="fredericka-the-great-regular card-title"><?php echo htmlspecialchars($post['title']); ?></h5>
                        <p class="card-text eagle-lake-regular"><?php echo truncateText($post['body'], 100, $post['id']); ?></p>
                        <a href="edit-post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="delete-post.php?id=<?php echo $post['id']; ?>" class="btn btn-danger" onclick="confirmDelete(event, <?php echo $post['id']; ?>)">Delete</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
        </div>

        <footer class="footer-59391">
      
      <div class="container">

        
        <div class="row ">
          <div class="col-md-4">
            <div class="site-logo">
            <a  href="./index.php">Makalatak</a>
            </div>
          </div>
          <div class="col-md-8 text-md-right">
            <ul class="list-unstyled social-icons">
              <li><a href="#" class="fb"><span class="fa-brands fa-facebook"></span></a></li>
              <li><a href="#" class="tw"><span class="fa-brands fa-twitter"></span></a></li>
              <li><a href="#" class="in"><span class="fa-brands fa-instagram"></span></a></li>
              <li><a href="#" class="be"><span class="fa-brands fa-dribbble"></span></a></li>
            </ul>
          </div>
        </div>

        <div class="row ">
        
         
        </div>
        <div class="row">
          <div class="col ">
            <div class="copyright">
              <p><small>Copyright 2024. All Rights Reserved.</small></p>
            </div>
          </div>
        </div>
      
    </div>
  </footer>


  <script src="./js/index.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
  <script src="./js/popper.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/main.js"></script>
  <script src="./js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>

</body>
</html>