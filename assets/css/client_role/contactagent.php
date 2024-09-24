<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Agent</title>
    <link rel="stylesheet" href="../assets/css/contactagent.css"> <!-- Link to CSS for styling -->
</head>
<body>

<header>
    <h2>Contact Our Agent</h2>
</header>

<section>
    <form method="post" action="../controller/contactAgentAction.php"> 
        <fieldset>
            <legend>Get in Touch</legend>

            <label for="name">Your Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Your Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="phone">Your Phone Number:</label>
            <input type="tel" name="phone" id="phone" required>

            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="5" required></textarea>

            <input type="submit" value="Send Message" name="submit">
        </fieldset>
    </form>
</section>

<footer>
    <p>Footer Content</p>
</footer>

</body>
</html>
