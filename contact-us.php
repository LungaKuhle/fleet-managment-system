<?php include './views/header.php'; ?>
<link rel="stylesheet" href="css/style.css">

<!-- Insert Page Code here -->
<div id="Main-Content">
    <div class="container mt-5">
        <h1 class="mb-5">Contact Us </h1>

        <div class="container">

            <div class="row d-flex align-items-center">

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Address:</h3>
                            <table>
                                <tr>
                                    <td width="30" valign="top">
                                        <span style="color:red;">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </span>
                                    </td>
                                    <td>
                                        Birchlegh Taxi Management System <br>
                                        No. 1269 Gardon Hood Road/Street Centurion <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa-solid fa-phone"></i>
                                    </td>
                                    <td>
                                        Tel: (012) 745 8113 <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa-solid fa-fax"></i>
                                    </td>
                                    <td>
                                        Fax: (011) 262 2334 <br>
                                    </td>
                                </tr>
                            </table>



                        </div>

                    </div>

                </div>
                <div class="col-md-4 ">
                    <img src="img/Contact-Us.jpg" class="align-middle img img-fluid" alt="">


                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form role="form" action="#" method="post" class="center">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-2">
                                    <input name="fullname" type="text" class="form-control" id="input_name"
                                        placeholder="Name...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-2">
                                    <input name="email" type="email" class="form-control" id="input_email"
                                        placeholder="Email...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group m-2">
                                    <textarea name="message" rows="3" class="form-control" id="input_message"
                                        placeholder="Message..."></textarea><br>
                                    <button type="submit" class="btn btn-primary pull-right">SEND</button>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<!-- End of Page Code -->
<?php include './views/footer.php'; ?>