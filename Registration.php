<?php
// Database connection parameters
$servername = "localhost";
$username = "username";
$password = "";
$database = "registration_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the registration form
$username = $_POST['inputusername'];
$Email = $_POST['inputemail'];
$Password = password_hash($_POST['inputpassword'], PASSWORD_BCRYPT); // Hash the password for security
$IdNumber = $_POST['inputid'];
$PhoneNumber = $_POST['inputphonenumber'];
$AccountPayer = $_POST['inputaccountpayer'];
$RegularRideUser = $_POST['inputride'];

// SQL query to insert data into the 'users' table
$sql = "INSERT INTO users (username,IdNumber,PhoneNumber,AccountPayer,RegularRideUser, Email, Password) VALUES ('$username','$IdNumber','$PhoneNumber','$AccountPayer','$RegularRideUser', '$Email', '$Password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!"; // You can redirect to a success page if desired
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
