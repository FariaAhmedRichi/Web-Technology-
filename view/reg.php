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
            Name : <input type="text" name="name" required><br><br>
            Email :<input type="email" name="email" required><br><br>
            Gender: <input type="radio" name="gender" id="male">Male
                    <input type="radio" name="gender" id="female">Female<br><br>
            DOB : <input type="date" name="dob" required><br><br>
            Password : <input type="password" name="password" required><br><br>
            Confirm password : <input type="password" name="re_password" required><br><br>
            User type: <input type="text" name="user_type" required><br>
            <input type="submit" value="Submit" name="submit"><br><br>
            
</fieldset>
</form>
</body>
</html>


