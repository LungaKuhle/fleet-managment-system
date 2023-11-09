 <?php include './views/header.php';


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleet-management-system";

$conn = new mysqli($servername, $username, $password, $dbname); // database connection

// Validation
function processForm($name, $email, $phone, $numberPeople, $message)
{
    if (empty($name) || empty($email) || empty($phone) || empty($numberPeople) || empty($message)) {
        return "Fill in the missing values";
    } else if (!is_numeric($phone)) {
        return "Phone numbers must be numeric";
    } else {
        return "Ride approved. Thank you for booking!";
    }
}

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $time = $_POST['time'];
    $numberPeople = $_POST['people'];
    $message = $_POST['message'];

    $result = processForm($name, $email, $phone, $numberPeople, $message);

    echo " <script> alert('$result') </script>";

    if ($result == "Ride approved. Thank you for booking!") {
        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, number_of_people, message) VALUES (?, ?, ?, ?, ?)");

        // Bind the parameters to the statement
        $stmt->bind_param("ssiis", $name, $email, $phone, $numberPeople, $message);

        $stmt->execute();

        // Create a report file for the booking
        $reportFolder = "booking_reports";
        if (!is_dir($reportFolder)) {
            // Create the folder if it doesn't exist
            mkdir($reportFolder);
        }

        // Create a report file for the booking
        $reportFilename = "booking_reports/booking_" . $conn->insert_id . ".txt"; // Use the booking ID as part of the filename
        $reportContent = "Booking Details:\nName: $name\nEmail: $email\nPhone: $phone\nTime: $time\nNumber of People: $numberPeople\nMessage: $message";

        file_put_contents($reportFilename, $reportContent);

        // Close the statement and the connection
        $stmt->close();
        $conn->close();
    }
}
?>


<!-- Table Reservation Form -->
<div id="Main-Content">
    <div class="container mt-5">
        <section id="BOOK-A-RIDE" class="BOOK A RIDE">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="">BOOK A RIDE</h1>
                        <p class="my-5">Bootstrap table reservation form template design is created by using bootstrap where users can book online restaurant tables, food orders according to yourself.</p>
                    </div>
                </div>

                <form action="Bookings1.php" method="post" role="form">
                    <div class="form-row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="date" name="date" class="form-control" id="date" placeholder="Date">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="time" class="form-control" name="time" id="time" placeholder="Time">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="number" class="form-control" min="0" name="people" id="people" placeholder="No. of people">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Things to take note of Eg. luggage..."></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary mt-3">APPROVE THE RIDE</button>
                </form>
            </div>
        </section>
    </div>
</div>
<!-- End Table Reservation Form -->
<!-- End of Page Code -->
<!-- <?php include './views/footer.php'; ?> -->