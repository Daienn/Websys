<!DOCTYPE html>

<html lang="en">
    <head>
        <!-- CSS -->
        <link rel="stylesheet" href="css/styles.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="bootstrap/animation.css"/>

        <!-- Bootstrap JS -->
        <script src="js/script.min.js"></script>
        <script src="js/carousel.js"></script>
        <script src="js/hoverAnimation.js"></script>
        <script src="js/bs-init.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no">
        <title>Endurance Fitness - Register</title>
    </head>

    <?php
    include 'nav.php';
    ?>

    <body>

        <section class="py-5">
            <div class="container py-5">
                <div class="row mb-4 mb-lg-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h1 class="display-1 fw-bold" style="color: rgb(0,192,163);">Register</h1>
                        <h2 class="fw-bold">Join the fitness revolution today and register for a healthier tomorrow</h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                    </svg></div>
                                <form action="process_register.php" method="post">
                                    <div class="mb-3"><input class="form-control" type="text" id="username" name="username" placeholder="Username" required></div>
                                    <div class="mb-3"><input class="form-control" type="email" id="email" name="email" placeholder="Email"></div>
                                    <div class="mb-3"><input class="form-control" type="password" id="pwd" name="pwd" placeholder="Password"></div>
                                    <div class="mb-3"><input class="form-control" type="password" id="pwd_confirm" name="pwd_confirm" placeholder="Confirm password"></div>                                
                                    <div class="mb-3"><button class="btn btn-primary shadow d-block w-100" type="submit">Register</button></div>
                                    <p class="text-muted">Already have an account?&nbsp;<a href="login.php">Log in</a></p>
                                </form>
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
