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
            <li><a href="#">Property Type 1</a></li>
            <li><a href="#">Property Type 2</a></li>
            <li><a href="#">Property Type 3</a></li>
            <li><a href="#">Property Type 4</a></li>
        </ul>
    </nav>
    
    <article>
        <form method="post" action="../controller/propertyAction.php"> 
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
