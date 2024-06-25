<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "blog");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$errors = [];

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = trim(htmlspecialchars($_POST['title']));
    $body = trim(htmlspecialchars($_POST['body']));

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
        $stmt = $conn->prepare("UPDATE posts SET title = ?, body = ? WHERE id = ?");
        $stmt->bind_param("ssi", $title, $body, $id);


        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['errors'][] = "Error: " . $stmt->error;
            header("Location: edit-post.php?id=$id");
                        exit();
        }

        $stmt->close();
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: edit-post.php?id=$id");
                exit();
    }
}

mysqli_close($conn);
?>
