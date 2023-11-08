<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

     include './views/header.php';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fleet-management-system";

    $conn = new mysqli($servername, $username, $password, $dbname); // database connection


    if (isset($_POST['register_btn'])) {
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $userId = $_POST["idNumber"];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirmPassword'];
        $accountPayer = $_POST['accountPayer'];
        $ride = $_POST['ride']; // regular ride




        function processForm($name, $email, $userId, $password, $confirm_password, $accountPayer, $ride)
        {
            if (empty($name) || empty($email) || empty($userId) || empty($password) || empty($confirm_password) || empty($accountPayer) || empty($ride)) {
                return "Fill in the missing values";
            } else if (strlen($password) < 8 || !preg_match("/[A-Za-z]+/", $password) || !preg_match("/\d+/", $password)) {
                return "Password must be at least 8 characters long and include letters and numbers";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return "Invalid email address";
            } elseif ($password != $confirm_password) {
                return "Password confirmation incorrect";
            } else if (!is_numeric($userId)) {
                return "User ID must be a numeric value";
            } else {
                return "Registeration succesful";
            }
        }




        $result = processForm($name, $email, $userId, $password, $confirm_password, $accountPayer, $ride);
        echo "<script>alert('$result');</script>";

        if ($result == "Registeration succesful") {


            $stmt = $conn->prepare("INSERT INTO MyUsers (fullname, email, userID, accountPayer,rideUser,password,confirmPassword) VALUES ( ?, ?, ?, ?, ?, ?, ?)");

            // Bind the parameters to the statement
            $stmt->bind_param("sssssss", $name, $email, $userId, $accountPayer, $ride, $password, $confirm_password);

            $stmt->execute();

            echo "<script>New records created successfully<script>";

            // Close the statement and the connection
            $stmt->close();
            $conn->close();
            header ("Location: index.php"); exit;
        
        }
        
    }
        

        
        

?>
<link rel="stylesheet" href="css/style.css">
<link rel="javascript" href="registerScript.js">
<link rel="javascript" href="Registration.php">
</head>
<body>
    


<!-- Insert Page Code here -->

<script src="register.php"></script>

<div id="Main-Content" class="Bglogin">
  <div id="Bglogin">
  <div class="container mt-5">
        <h1 class="text-center">Registration</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-2"><p>&nbsp;</p></div>
                <div class="col-md-8">
                    <form class="container row g-3" action="register.php" method="post">
                        <div class="col-md-6">
                            <label for="inputFullname" class="form-label">Full Name</label>
                            <input type="text" name="fullname" class="form-control" id="inputFullname">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="col-md-6">
                            <label for="inputId" class="form-label">Id number</label>
                            <input type="text" name="idNumber" class="form-control" id="inputId">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPhone" class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="inputPhone">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAccountPayer" class="form-label">Account Payer</label>
                            <input type="text" name="accountPayer" class="form-control" id="inputAccountPayer">
                        </div>
                        <div class="col-md-6">
                            <label for="inputRide" class="form-label">Regular Ride User</label>
                            <input type="text" name="ride" class="form-control" id="inputRide">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPasswordConfirm" class="form-label">Confirm Password</label>
                            <input type="password" name="confirmPassword" class="form-control" id="inputPasswordConfirm">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col-12 text-center d-grid gap-2 col-6">
                            <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
                        </div>

                        <div class="col-auto">
                            <label for="NoAccount" class="visually-hidden">Already have an account...</label>
                            <input type="text" readonly class="form-control-plaintext" id="NoAccount"
                                value="Already have an account...">
                        </div>
                        <div class="col-auto">
                            <a type="submit" href="login.php" class="btn btn-outline-secondary mb-3">Login</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"><p>&nbsp;</p></div>
            </div>
        </div>
        

    </div>
  </div>
</div>
</body>
</html>
<!-- End of Page Code -->

