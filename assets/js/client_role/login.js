function validateEmail(email) {
    if (email.trim() === "") {
        return false; 
    }

    var atIndex = email.indexOf("@");
    var dotIndex = email.lastIndexOf(".");
    if (atIndex < 1 || dotIndex < atIndex + 2 || dotIndex + 2 >= email.length) {
        return false;
    }

    return true;
}

function validatePassword(password) {
    if (password.trim() === "") {
        return false;
    }
    
    if (password.length < 8 || password.length > 32) {
        return false;
    }

    return true;
}

function validateLoginForm() {
    var email = document.forms["loginForm"]["email"].value;
    var password = document.forms["loginForm"]["password"].value;

    if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    if (!validatePassword(password)) {
        alert("Please enter a valid password (8-32 characters).");
        return false;
    }

    return true;
}
