document.getElementById("registrationForm").addEventListener("submit", function(event) {
    var fullname = document.getElementById("inputFullname").value;
    var email = document.getElementById("inputEmail").value;
    var idNumber = document.getElementById("inputId").value;
    var phoneNumber = document.getElementById("inputPhone").value;
    var accountPayer = document.getElementById("inputAccountPayer").value;
    var rideUser = document.getElementById("inputRide").value;
    var password = document.getElementById("inputPassword").value;
    var confirmPassword = document.getElementById("inputPasswordConfirm").value;
    var rememberMe = document.getElementById("gridCheck").checked;

    // Basic validation: Check if fields are not empty
    if (fullname.trim() === "" || email.trim() === "" || idNumber.trim() === "" || phoneNumber.trim() === "" || 
        accountPayer.trim() === "" || rideUser.trim() === "" || password.trim() === "" || confirmPassword.trim() === "") {
        alert("All fields are required!");
        event.preventDefault();
    }
    // Validate email format
    else if (!isValidEmail(email)) {
        alert("Invalid email address!");
        event.preventDefault();
    }
    // Validate password strength
    else if (!isValidPassword(password)) {
        alert("Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, one digit, and one special character.");
        event.preventDefault();
    }
    // Validate password match
    else if (password !== confirmPassword) {
        alert("Passwords do not match!");
        event.preventDefault();
    }
    // Additional validation logic can be added here if needed
});

function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function isValidPassword(password) {
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    return passwordRegex.test(password);
}

  
