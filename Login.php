<?php include './views/header.php'; ?>

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleet-management-system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform database connection and query to check user credentials
    $db = $conn;

    if ($db->connect_error) {
        die("Database connection failed: " . $db->connect_error);
    }

    $sql = "SELECT * FROM myusers WHERE email='$email' AND password='$password'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // User is authenticated
        $_SESSION['email'] = $email;
        
        
        // $_SESSION["email"]="ll402001049@my.richfield.ac.za";

        header("Location: index.php"); // Redirect to the Home page
    } else {
        // Authentication failed
        echo "<script>alert('Invalid username or password. Please try again.');</script>";
    }

    $db->close();
}
?>





<!-- Insert Page Code here -->
<div id="Main-Content" class="Bglogin">

    <div class="container">
        <h1 class="text-center mt-5">Login</h1>

        <div class="container">
            <form id="loginForm" method="post" action="login.php">

                <div class="row mt-3">
                    <div class="col-md-3">

                        <p>&nbsp;</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">

                            <input type="email" name="email" class="form-control" id="Email"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">

                            <input type="password" name="password" class="form-control" id="Password"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <p class="mt-2 alert alert-info">Enter a strong password</p>


                        <div class="col-12 text-center d-grid gap-2 col-6">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                            <div class="row mt-3 text-right">
                                <form class="row">
                                    <div class="col-auto">
                                        <label for="NoAccount" class="visually-hidden">Dont have an accpunt
                                            yet...</label>
                                        <input type="text" readonly class="form-control-plaintext" id="NoAccount"
                                            value="Dont have an account yet...">
                                    </div>
                                    <div class="col-auto">
                                        <a type="submit" href="register.php"
                                            class="btn btn-outline-secondary mb-3">Create Account</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
        </div>


    </div>
</div>

<!-- End of Page Code -->
<?php include './views/footer.php'; ?>