<?php

// Include database connection
require '../model/db.php';

// Start session to handle error messages and login state

// Check if form is submitted
if (isset($_POST['login'])) {
    
    // Retrieve and sanitize the form data
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Array to store validation errors
    $errors = [];

    // Validate email and password inputs
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // Check if there are validation errors
    if (!empty($errors)) {
        // Store errors in session and redirect back to the login form
        $_SESSION['errors'] = $errors;
        header("Location: ../view/login.php"); // Adjust the path as needed
        exit();
    }

    // If validation passes, check the credentials in the database
    $query = "SELECT * FROM login WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the user data
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if ($password == $user['password']) {
            // Successful login, set session variables
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['email'] = $user['email'];

            // Redirect to dashboard or home page
            header("Location: ../view/dashboard.php"); // Adjust the path as needed
            exit();
        } else {
            // Incorrect password
            $errors[] = "Invalid email or password.";
        }
    } else {
        // Email not found in the database
        $errors[] = "Invalid email or password.";
    }

    // If errors exist, redirect back to login form with error messages
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: ../view/login.php"); // Adjust the path as needed
        exit();
    }
}
?>
