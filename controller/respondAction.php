<?php
require '../model/db.php'; // Include your database connection file

// Function to sanitize input data
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if (isset($_POST['submit'])) {
    // Retrieve and sanitize the form data
    $inquiry_id = sanitizeInput($_POST['inquiry_id']);
    $agent_name = sanitizeInput($_POST['agent_name']);
    $client_name = sanitizeInput($_POST['client_name']);
    $response_message = sanitizeInput($_POST['response_message']);
    $response_date = sanitizeInput($_POST['response_date']);

    // Initialize an array to store errors
    $errors = [];

    // Validate the form inputs
    if (empty($inquiry_id)) {
        $errors[] = "Inquiry ID is required.";
    }

    if (empty($agent_name)) {
        $errors[] = "Agent name is required.";
    }

    if (empty($client_name)) {
        $errors[] = "Client name is required.";
    }

    if (empty($response_message)) {
        $errors[] = "Response message is required.";
    }

    if (empty($response_date)) {
        $errors[] = "Response date is required.";
    } elseif (!DateTime::createFromFormat('Y-m-d', $response_date)) {
        $errors[] = "Response date format is invalid.";
    }

    // Check if there are any errors
    if (count($errors) > 0) {
        // Display the errors
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        // Prepare and execute the query to insert the response
        $query = "INSERT INTO inquiries_responses (inquiry_id, agent_name, client_name, response_message, response_date) 
                  VALUES ('$inquiry_id', '$agent_name', '$client_name', '$response_message', '$response_date')";
        if (mysqli_query($conn, $query)) {
            echo "<p style='color: green;'>Response sent successfully!</p>";
        } else {
            echo "<p style='color: red;'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
}
?>
