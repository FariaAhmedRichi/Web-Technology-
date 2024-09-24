<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respond to Inquiries</title>
    <link rel="stylesheet" href="../assets/css/respond.css">
    <script src="../assets/js/respond.js"></script>
</head>
<body>

<header>
    <h2>Respond to Inquiries</h2>
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
    
    <article style="background-image: url('../assets/images/property-background.jpg'); background-size: cover;">
        <form method="post" action="../controller/respondAction.php" name="respondForm" onsubmit="return validateForm()"> 
            <fieldset>
                <h2>Respond to Inquiries</h2>
                
                <label for="inquiry_id">Inquiry ID:</label>
                <input type="text" name="inquiry_id" id="inquiry_id" required>

                <label for="agent_name">Agent Name:</label>
                <input type="text" name="agent_name" id="agent_name" required>

                <label for="client_name">Client Name:</label>
                <input type="text" name="client_name" id="client_name" required>

                <label for="response_message">Response Message:</label>
                <textarea name="response_message" id="response_message" required></textarea>

                <label for="response_date">Response Date:</label>
                <input type="date" name="response_date" id="response_date" required>

                <input type="submit" value="Send Response" name="submit">
            </fieldset>
        </form>
    </article>
</section>

<footer>
    <p>Footer</p>
</footer>

</body>
</html>
