document.getElementById("changePasswordForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent the default form submission

  // Get input values
  let old_password = document.getElementById("old_password").value;
  let new_password = document.getElementById("new_password").value;
  let confirm_new_password = document.getElementById("confirm_new_password").value;

  // Password regex for validation
  let passwordRegex = /^[a-zA-Z0-9!@#$%^&*]{6,}$/;

  // Validate passwords
  if (!passwordRegex.test(old_password) || !passwordRegex.test(new_password)) {
      alert("Invalid password. Password must be at least 6 characters long and may include letters, numbers, and special characters.");
      return;
  }
  if (new_password !== confirm_new_password) {
      alert("New passwords do not match. Please try again.");
      return;
  }

  // Create a new XMLHttpRequest
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "../controller/change_password.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  // Define what happens on successful data submission
  xhr.onload = function() {
      // Display server response in the message div
      document.getElementById("changePasswordMessage").innerHTML = this.responseText;
  };

  // Send the request with encoded data
  xhr.send("old_password=" + encodeURIComponent(old_password) + "&new_password=" + encodeURIComponent(new_password));
});
