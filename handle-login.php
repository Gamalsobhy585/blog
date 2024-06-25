<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "blog");

if (!$conn) {
    die("Connection failed. Please try again later.");
}

if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $errors = [];

    // Validate email
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    } elseif (strlen($email) > 255) {
        $errors[] = "Email must be <= 255 characters.";
    }

    // Validate password
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    if (empty($errors)) {
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['isLogin'] = true;
                $_SESSION['userEmail'] = $user['email'];
                header("Location: index.php");
                exit();
            } else {
                $_SESSION['errors'] = ["Invalid password."];
            }
        } else {
            $_SESSION['errors'] = ["Invalid email or password."];
        }
    } else {
        $_SESSION['errors'] = $errors;
    }

    header("Location: login.php");
    exit();
}
?>
