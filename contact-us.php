<?php include './views/header.php';?>
<link rel="stylesheet" href="css/style.css">

<!-- Insert Page Code here -->
<div id="Main-Content">
    <div class="container mt-5">
        <h1 class="mb-5">Contact Us </h1>

        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <img src="img/Contact-Us.jpg" class="img img-fluid" alt="">

                   
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Address:</h3>
                            <table>
                                <tr>
                                    <td width="30" valign="top">
                                        <span style="color:red;">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </span>
                                    </td>
                                    <td>
                                        birchlegh taxi management system <br>
                                        No 1269 gardon hood road/street <br>
                                        Centurion <br>
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



                            </p>
                        </div>
                        <div class="col-md-6">
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
</div>

<!-- End of Page Code -->
<?php include './views/footer.php';?>