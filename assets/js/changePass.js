function validateOldPassword(oldPassword) {
  if (oldPassword.trim() === "") {
      return false;
  }
  return true;
}

function validateNewPassword(newPassword) {
  if (newPassword.trim() === "" || newPassword.length < 8 || newPassword.length > 32) {
      return false; // New password should be between 8 and 32 characters
  }
  return true;
}

function validateConfirmPassword(newPassword, confirmPassword) {
  if (confirmPassword.trim() === "" || newPassword !== confirmPassword) {
      return false; // Confirm password should match the new password
  }
  return true;
}

function validateChangePasswordForm() {
  var oldPassword = document.forms["changePasswordForm"]["old_password"].value;
  var newPassword = document.forms["changePasswordForm"]["new_password"].value;
  var confirmPassword = document.forms["changePasswordForm"]["confirm_new_password"].value;

  if (!validateOldPassword(oldPassword)) {
      alert("Please enter your old password.");
      return false;
  }

  if (!validateNewPassword(newPassword)) {
      alert("Please enter a valid new password (8-32 characters).");
      return false;
  }

  if (!validateConfirmPassword(newPassword, confirmPassword)) {
      alert("New password and confirm password do not match.");
      return false;
  }

  return true;
}
