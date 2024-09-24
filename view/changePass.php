<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../assets/css/changePass.css">
</head>
<body>

<script src="../assets/js/reg.js"></script>
<form name="changePasswordForm" onsubmit="return validateChangePasswordForm()" method="post" action="../controller/changePasswordAction.php">
        <fieldset>
            <h2>Change Password</h2>
            
          
        <input type="email" name="email" placeholder="Email" required><br>
        <label for="old_password">Old Password</label>
        <input type="password" name="old_password" id="old_password" required><br><br>
        
        <label for="new_password">New Password</label>
        <input type="password" name="new_password" id="new_password" required><br><br>
        
        <label for="confirm_new_password">Confirm Password</label>
        <input type="password" name="confirm_new_password" id="confirm_new_password" required><br><br>
        
            
        <input type="submit" value="Change Password" name="submit"><br><br>
            
        </fieldset>
</form>
</body>
</html>
