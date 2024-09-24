<?php
session_start(); // Start the session

if (isset($_POST['submit'])) {
    // Retrieve form data
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $price = htmlspecialchars($_POST['price']);
    $location = htmlspecialchars($_POST['location']);
    $property_type = htmlspecialchars($_POST['property_type']);

    // Create a property array
    $property = [
        'title' => $title,
        'description' => $description,
        'price' => $price,
        'location' => $location,
        'property_type' => $property_type,
        'image' => 'path/to/image.jpg' // Placeholder for image path
    ];

    // Store the property in session based on property type
    if (!isset($_SESSION['properties'])) {
        $_SESSION['properties'] = [];
    }
    $_SESSION['properties'][$property_type][] = $property;

    // Redirect back to the property listing page
    header("Location: ../view/propertyList.php");
    exit();
}
?>
