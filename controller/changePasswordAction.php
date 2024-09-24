<?php

require '../model/db.php';


if (isset($_REQUEST['submit'])) {
    
    // Retrieve the form data
    $email=$_REQUEST['email'];
    $old_password = $_REQUEST['old_password'];
    $new_password = $_REQUEST['new_password'];
    $confirm_new_password = $_REQUEST['confirm_new_password'];

    // Validate that all fields are filled
    if (empty($old_password) || empty($new_password) || empty($confirm_new_password)) {
        echo "All fields are required!";
        exit();
    }

    // Validate that new password and confirm password match
    if ($new_password != $confirm_new_password) {
        echo "New passwords do not match!";
        exit();
    }

    // Check if the new password meets length requirements (e.g., 8 characters minimum)
    if (strlen($new_password) < 8) {
        echo "Password must be at least 8 characters long!";
        exit();
    }

    // Fetch the user's current password from the database
    $query = "SELECT password FROM sign_up WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password'];

        // Verify that the old password matches the current password in the database
        if ($old_password === $stored_password) {

            // Update the password in the database
            $query = "UPDATE sign_up SET password='$new_password' WHERE email='$email'";
            if (mysqli_query($conn, $query)) {
                echo "Password changed successfully!";
            } else {
                echo "Error updating password!";
            }

        } else {
            echo "Old password is incorrect!";
        }

    } else {
        echo "User not found!";
    }
}

?>
