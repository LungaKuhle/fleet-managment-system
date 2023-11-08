<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<?php include './views/header.php';?>
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
                    <form class="container row g-3">
                        <div class="col-md-6">
                            <label for="inputFullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="inputFullname">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="col-md-6">
                            <label for="inputId" class="form-label">Id number</label>
                            <input type="text" class="form-control" id="inputId">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPhone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="inputPhone">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAccountPayer" class="form-label">Account Payer</label>
                            <input type="text" class="form-control" id="inputAccountPayer">
                        </div>
                        <div class="col-md-6">
                            <label for="inputRide" class="form-label">Regular Ride User</label>
                            <input type="text" class="form-control" id="inputRide">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPasswordConfirm" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="inputPasswordConfirm">
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

