<!DOCTYPE html>

<html lang="en">
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="bootstrap/styles.min.css"/>

        <!-- Bootstrap JS -->
        <script src="js/script.min.js"></script>
        <script src="js/bs-init.js"></script>
        <script src="js/calendar.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no">
        <title>Endurance Fitness - Booking</title>
    </head>

    <?php
    include 'nav.php';
    ?>

    <body>

        <section class="py-5">
            <section>
                <div class="container">
                    <div class="row mb-5" style="margin-top: -60px;">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h1 class="display-5 fw-bold" style="color: rgb(0,192,163);">Book Now</h1>
                            <h2 class="fw-bold" style="font-size: 23px;">Fill in the form to secure your slot</h2>
                        </div>
                    </div>
                    <form action="process_booking.php" class="p-3 p-xl-4" method="post">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3"><input class="border rounded-pill form-control" type="text" id="fname" name="fname" placeholder="First Name">
                                </div>
                                <div class="mb-3"><input class="border rounded-pill form-control" type="email" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <div class="border rounded-pill form-control">

                                        <label for="locationselect-select">Location:</label>

                                        <select name="location" id="location-select">
                                            <option value="">--Please choose an option--</option>
                                            <option value="Kallang">Kallang</option>
                                            <option value="Bishan">Bishan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3" style="margin-bottom: 16px;">
                                    <input class="border rounded-pill form-control" type="text" id="lname" name="lname" placeholder="Last Name">
                                </div>
                                <div style="margin-bottom: 16px;">
                                    <input class="border rounded-pill form-control" type="tel" id="mobile_number" name="mobile_number" placeholder="Mobile No.">
                                </div>
                                <div class="mb-3">
                                    <input class="border rounded-pill form-control" id="date" name="date" type="date">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 d-flex justify-content-center w-100">
                            <div class="mb-3">
                                <button class="btn btn-primary text-center" type="submit">Submit Booking</button>
                            </div>
                        </div>
                    </form>

                </div>
            </section>

            <?php
            include 'footer.php';
            ?>
    </body>
</html>
