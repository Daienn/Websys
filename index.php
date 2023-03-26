<!DOCTYPE html>

<html lang="en">
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="bootstrap/styles.min.css"/>

        <!-- Bootstrap JS -->
        <script src="js/script.min.js"></script>
        <script src="js/carousel.js"></script>
        <script src="js/hoverAnimation.js"></script>
        <script src="js/bs-init.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no">
        <title>Endurance Fitness - Home</title>
    </head>

    <?php
    include 'nav.php';
    ?>
    
    <!-- Header Carousel -->
    <header class="placeholder bg-dark" style="min-width: 100%;">
        <div id="carousel-1" class="carousel slide d-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 d-block" src="img/gym1.jpg" alt="Slide Image" /></div>
                <div class="carousel-item">
                    <img class="img-fluid w-100 d-block" src="img/gym2-2.jpg" alt="Slide Image" /></div>
                <div class="carousel-item">
                    <img class="w-100 d-block" src="img/gym3.jpg" alt="Slide Image" /></div>
                <div class="carousel-item">
                    <img class="w-100 d-block d-flex" src="img/gym4.jpg" alt="Slide Image" /></div>
                <div class="carousel-item">
                    <img class="w-100 d-block d-flex" src="img/gym5.jpg" alt="Slide Image" /></div>
            </div>
            <div>
                <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span></a>
            </div>
            <ol class="carousel-indicators">
                <li class="active" data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="3"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="4"></li>
            </ol>
        </div>
    </header>

    <body>
        <section class="py-5">
            <div class="container text-center py-5" style="margin-bottom: -45px;">
                <p data-bss-hover-animate="pulse" class="mb-4" style="font-size: 2.5rem;">
                    <strong>Welcome to Endurance Fitness, Your Ultimate Fitness Destination!&nbsp;</strong>
                    <br>
                    <span style="color: rgb(224, 224, 224); background-color: transparent;">💪🏼</span>
                    <strong>
                        <span style="color: rgb(0, 126, 230);">✨</span>
                    </strong>
                </p>
            </div>
        </section>

        <section>
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h1 class="display-5 fw-bold align-content-stretch" style="color: rgb(0,192,163);font-size: 35px;">#EndureAndConquer</h1>
                    <h2 class="fw-bold" style="font-family: Inter, sans-serif;font-size: 23px;">Unleash your inner athlete and conquer your fitness goals at Endurance Gym</h2>
                </div>
            </div>
            <div class="container py-5" style="margin-bottom: 0px;">
                <div class="mx-auto" style="max-width: 900px;">
                    <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-center">
                        <div class="col mb-4">
                            <div class="card bg-primary-light">
                                <div class="card-body text-center px-4 py-5 px-md-5">
                                    <p class="fw-bold text-primary card-text mb-2">About Us</p>
                                    <h5 class="fw-bold card-title mb-3">Find out more about our roots and Endurance Gym team</h5>
                                    <a class="btn btn-primary btn-sm" role="button" href="about_us.php">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card bg-secondary-light">
                                <div class="card-body text-center px-4 py-5 px-md-5">
                                    <p class="fw-bold text-secondary card-text mb-2">Our Membership Plans</p>
                                    <h5 class="fw-bold card-title mb-3">Find out more about the different plans and benefits we provide</h5>
                                    <a class="btn btn-secondary btn-sm" role="button" href="rates.php">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card bg-info-light">
                                <div class="card-body text-center px-4 py-5 px-md-5">
                                    <p class="fw-bold text-info card-text mb-2">Our Locations</p>
                                    <h5 class="fw-bold card-title mb-3">Find the nearest Endurance Gym to you</h5>
                                    <a class="btn btn-info btn-sm" role="button" href="location.php">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 mt-5" style="margin-top: 29px;">
            <div class="container py-5" style="margin-top: -145px;">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2 class="fw-bold" style="color: rgb(0,192,163);">
                            <strong>Reviews</strong>
                        </h2>
                        <h3 class="fw-bold">
                            <strong>What People Say About us</strong>
                        </h3>
                        <p class="text-muted" style="margin-bottom: 0px;">See what our members have to say</p>
                        <p class="text-muted">
                            <strong>REAL reviews, REAL results.</strong>
                        </p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 d-sm-flex justify-content-sm-center">
                    <div class="col mb-4">
                        <div class="d-flex flex-column align-items-center align-items-sm-start">
                            <p class="bg-dark border rounded border-dark p-4">"I started going to this gym regularly a few months ago and I am absolutely loving it! The staff are friendly and helpful, the equipment is top-notch, and the facilities are always clean and well-maintained. Highly recommend it!"</p>
                            <div class="d-flex">
                                <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="img/LL.jpg">
                                <div>
                                    <p class="fw-bold text-primary mb-0 pt-sm-0 mt-sm-2">Siah Li Ling</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="d-flex flex-column align-items-center align-items-sm-start">
                            <p class="bg-dark border rounded border-dark p-4">"I have been to several gyms in the past, but none compare to this one. The atmosphere is always positive and energetic, which really motivates me to achieve my fitness goals!"</p>
                            <div class="d-flex">
                                <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="img/DY.jpg">
                                <div>
                                    <p class="fw-bold text-primary mb-0 mt-sm-2">David Yap</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="d-flex flex-column align-items-center align-items-sm-start">
                            <p class="bg-dark border rounded border-dark p-4">"Loving this gym so far! The equipment are good and the trainers are knowledgeable and supportive. Highly recommend Endurance Gym to anyone looking to improve their fitness!"</p>
                            <div class="d-flex">
                                <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="img/VP.jpg">
                                <div>
                                    <p class="fw-bold text-primary mb-0 mt-sm-2">Vanessa Poch</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include 'footer.php';
        ?>

    </body>
</html>
