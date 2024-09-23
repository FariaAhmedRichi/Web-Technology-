document.getElementById("registerForm").addEventListener("submit", function(event) {
  event.preventDefault();

  let username = document.getElementById("username").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let confirmPassword = document.getElementById("confirm_password").value;

  // Regular expressions for validation
  let usernameRegex = /^[a-zA-Z0-9]{3,}$/; // Minimum 3 alphanumeric characters
  let emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; // Simple email format
  let passwordRegex = /^[a-zA-Z0-9!@#$%^&*]{6,}$/; // Minimum 6 characters, can include special characters

  // Validate username
  if (!usernameRegex.test(username)) {
      alert("Invalid username. Must be at least 3 characters long and contain only alphanumeric characters.");
      return;
  }
  
  // Validate email
  if (!emailRegex.test(email)) {
      alert("Invalid email format.");
      return;
  }
  
  // Validate password and confirm password
  if (password !== confirmPassword) {
      alert("Passwords do not match.");
      return;
  }
  
  if (!passwordRegex.test(password)) {
      alert("Invalid password. Must be at least 6 characters long and can include special characters.");
      return;
  }

  // Send data to server using AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "../controller/register.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function() {
      document.getElementById("registerMessage").innerHTML = this.responseText;
  };
  xhr.send("username=" + encodeURIComponent(username) + "&email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password));
});
