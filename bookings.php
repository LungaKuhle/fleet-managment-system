
<?php include './views/header.php'; ?>



    <!-- Table Reservation Form -->
    <div id= "Main-Content">
        <div class="container mt-5">
        <section id="BOOK-A-RIDE" class="BOOK A RIDE">
        <div class="container" data-aos="fade-up">
            <div class="row">
    			<div class="col-md-8">
    				<h1 class="">BOOK A RIDE</h1>
    				<p class="my-5">Bootstrap table reservation form template design is created by using bootstrap where users can book online restaurant tables, food orders according to yourself.</p>
    			</div>
    		</div>

            <form action="" method="post" role="form">
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

              <button type="submit" class="btn btn-primary mt-3">APPROVE THE RIDE</button>
            </form>
        </div>
    </section>
        </div>
    </div>
    <!-- End Table Reservation Form -->
<!-- End of Page Code -->
<?php include './views/footer.php'; ?>