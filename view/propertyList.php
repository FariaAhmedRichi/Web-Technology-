<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listings</title>
    <link rel="stylesheet" href="../assets/css/propertyList.css"> 
    <script src="../assets/js/propertyList.js"></script>
</head>
<body>

<header>
    <h2>Property Listings</h2>
</header>

<section>
<nav>
    <ul>
        <li><a href="../view/propertyType.php?type=apartment">Property Type 1 (Apartment)</a></li>
        <li><a href="../view/propertyType2.php?type=house">Property Type 2 (House)</a></li>
        <li><a href="../view/propertyType3.php?type=condo">Property Type 3 (Condo)</a></li>
        <li><a href="../view/propertyType4.php?type=land">Property Type 4 (Land)</a></li>
    </ul>
</nav>

    
<article>
    <form method="post" action="../controller/propertyAction.php" enctype="multipart/form-data"> 
        <fieldset>
            <h2>Property Listing</h2>
            
            <label for="title">Property Title:</label>
            <input type="text" name="title" id="title" required>

            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea>

            <label for="price">Price ($):</label>
            <input type="number" name="price" id="price" required>

            <label for="location">Location:</label>
            <input type="text" name="location" id="location" required>

            <label for="property_type">Property Type:</label>
            <select name="property_type" id="property_type" required>
                <option value="apartment">Apartment</option>
                <option value="house">House</option>
                <option value="condo">Condo</option>
                <option value="land">Land</option>
            </select>

            <label for="image">Upload Image:</label>
            <input type="file" name="image" id="image" accept="image/*" required>

            <input type="submit" value="List Property" name="submit">
        </fieldset>
    </form>
</article>


</section>

<footer>
    <p>Footer</p>
</footer>

</body>
</html>
