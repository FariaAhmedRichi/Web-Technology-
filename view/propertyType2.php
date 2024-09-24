<?php
session_start();
$property_type = 'house'; // Change this according to the type you want to display
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($property_type); ?> Listings</title>
    <link rel="stylesheet" href="../assets/css/propertyList.css"> 
</head>
<body>

<header>
    <h2><?php echo ucfirst($property_type); ?> Listings</h2>
</header>

<section>
    <nav>
        <ul>
            <li><a href="propertyType.php">Property Type 1</a></li>
            <li><a href="propertyType.php">Property Type 2</a></li>
            <li><a href="propertyType.php">Property Type 3</a></li>
            <li><a href="propertyType.php">Property Type 4</a></li>
        </ul>
    </nav>

    <article>
        <?php
        // Check if properties are set for the selected type
        if (isset($_SESSION['properties'][$property_type])) {
            foreach ($_SESSION['properties'][$property_type] as $property) {
                echo "<div class='property'>";
                echo "<h3>" . htmlspecialchars($property['title']) . "</h3>";
                echo "<p><strong>Description:</strong> " . htmlspecialchars($property['description']) . "</p>";
                echo "<p><strong>Price:</strong> $" . htmlspecialchars($property['price']) . "</p>";
                echo "<p><strong>Location:</strong> " . htmlspecialchars($property['location']) . "</p>";
                echo "<img src='" . $property['image'] . "' alt='Property Image' style='width:200px;height:auto;'>";
                echo "</div>";
            }
        } else {
            echo "<p>No properties listed under this type.</p>";
        }
        ?>
    </article>
</section>

<footer>
    <p>Footer</p>
</footer>

</body>
</html>
