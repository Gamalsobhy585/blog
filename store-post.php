<?php
session_start();

// Establishing database connection
$conn = mysqli_connect("localhost", "root", "", "blog");

// Check if connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$errors = [];

if (isset($_POST['submit'])) {
    $title = trim(htmlspecialchars($_POST['title']));
    $body = trim(htmlspecialchars($_POST['body']));

    // Validation
    if (empty($title)) {
        $errors[] = "Title is required";
    } elseif (!is_string($title)) {
        $errors[] = "Title must be a string";
    } elseif (strlen($title) > 255) {
        $errors[] = "Title must be <= 255 characters";
    }

    if (empty($body)) {
        $errors[] = "Body is required";
    } elseif (!is_string($body)) {
        $errors[] = "Body must be a string";
    }

    if (empty($errors)) {
        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO posts (title, body, user_id) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $title, $body, $user_id);

        // Assuming a fixed user_id for simplicity. Replace 1 with the actual user ID.
        $user_id = 1;

        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            // Display detailed error message for debugging
            $_SESSION['errors'][] = "Error: " . $stmt->error;
            header("Location: create-post.php");
            exit();
        }

        $stmt->close();
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: create-post.php");
        exit();
    }
}

// Close the database connection
mysqli_close($conn);
?>
