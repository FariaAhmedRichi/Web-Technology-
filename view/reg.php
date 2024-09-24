<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../assets/css/reg.css">
    
</head>
<body>

<script src="../assets/js/reg.js"></script>
 <form method='post' action='../controller/regAction.php'>
        <fieldset>
        <h2>Registration</h2>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        Gender: <input type="radio" name="gender" id="male">Male
        <input type="radio" name="gender" id="female">Female<br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <label for="re_password">Confirm Password:</label>
        <input type="password" name="re_password" id="re_password" required>

        <label for="user_type">User Type:</label>
        <input type="text" name="user_type" id="user_type" required>
    

        <input type="submit" value="Submit" name="submit">
            
</fieldset>
</form>
</body>
</html>


