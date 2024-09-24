<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Search</title>
    <link rel="stylesheet" href="../assets/css/property_search.css"> 
    <script src="../assets/js/propertySearch.js"></script>
</head>
<body>

<header>
    <h2>Property Search</h2>
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
        <form method="post" action="../controller/propertySearchAction.php"> 
            <fieldset>
                <h2>Search Properties</h2>
                
                <label for="search_term">Search Term:</label>
                <input type="text" name="search_term" id="search_term" required>

                <label for="min_price">Min Price ($):</label>
                <input type="number" name="min_price" id="min_price">

                <label for="max_price">Max Price ($):</label>
                <input type="number" name="max_price" id="max_price">

                <label for="location">Location:</label>
                <input type="text" name="location" id="location">

                <label for="property_type">Property Type:</label>
                <select name="property_type" id="property_type">
                    <option value="">--Select Type--</option>
                    <option value="apartment">Apartment</option>
                    <option value="house">House</option>
                    <option value="condo">Condo</option>
                    <option value="land">Land</option>
                </select>

                <input type="submit" value="Search" name="search">
            </fieldset>
        </form>
    </article>
</section>

<footer>
    <p>Footer</p>
</footer>

</body>
</html>
