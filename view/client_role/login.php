<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <script src="../assets/js/login.js"></script> <!-- Link to the JS validation file -->
</head>
<body>

<form name="loginForm" method="post" action="../controller/loginAction.php" onsubmit="return validateLoginForm()">
    <fieldset>
        <h2>Login</h2>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="Login" name="login">
    </fieldset>
</form>

</body>
</html>
