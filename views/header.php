<!-- Header code and doc start -->
<?php





?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">





  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img width="50" height="auto" class="img img-fluid img-round"
          src="img/go-taxi.jpg" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="mx-auto collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About-us.php">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact-Us.php">CONTACT US </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="Dashboard.php">Dashboard</a>
          </li> -->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              SERVICES
              <!-- <link rel="BOOKINGS.html" href="styles.css"> -->
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="bookings.php">BOOKINGS</a>
              <a class="dropdown-item" href="payments.php">PAYMENTS</a>


            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="routes.php">Routes</a>
          </li>

        </ul>
      </div>
      <?php
      if (isset($_SESSION['email'])) {
        echo '  <div class="collapse navbar-collapse justify-content-end" ;id="collapsibleNavbar">';
        echo ' <ul class="navbar-nav">';
        echo '   <li class="nav-item">';
        echo '      <a class="nav-link" href="logout.php">Sign Out</a>';
        echo '    </li>';

        echo '   </ul>';

        echo '   </div>';
      } else if (!isset($_SESSION['email'])){
        echo '  <div class="collapse navbar-collapse justify-content-end" ;id="collapsibleNavbar">';
        echo ' <ul class="navbar-nav">';
        echo '   <li class="nav-item">';
        echo '      <a class="nav-link" href="login.php">Login</a>';
        echo '    </li>';

        echo '   </ul>';

        echo '   </div>';
      }
      ?>
      <!-- <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="login.php">logout</a>
          </li>

        </ul>

      </div> -->
    </div>
  </nav>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Close the dropdown if the user clicks outside of it
      window.addEventListener('click', function (event) {
        const dropdowns = document.getElementsByClassName('dropdown-content');
        for (let i = 0; i < dropdowns.length; i++) {
          const openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show') && !openDropdown.parentElement.contains(event.target)) {
            openDropdown.classList.remove('show');
          }
        }
      });
    });
  </script>