<?php
require '../model/db.php'; // Include your database connection file

if (isset($_POST['submit'])) {
    // Retrieve the form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $location = $_POST['location'];
    $property_type = $_POST['property_type'];

    // Prepare the SQL query to insert the property listing
    $query = "INSERT INTO property_list (title, description, price, location, property_type) 
              VALUES ('$title', '$description', '$price', '$location', '$property_type')";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        echo "Property listed successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
