<!DOCTYPE html>

<html>
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
        <title>Endurance Fitness - Forget Password</title>
    </head>
    
    <?php
    include "nav.php";
    ?>
    <body>
    <section class="py-5">
            <div class="container">
                <div class="row mb-5" style="margin-top: -60px;">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h1 class="display-5 fw-bold" style="color: rgb(0,192,163);">Forget Password</h1>
                        <h2 class="fw-bold" style="font-size: 23px;">Enter your registered email address</h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div>
                            <form class="p-3 p-xl-4" method="POST" action="send-recovery-mail.php">
                                <div class="mb-3">
                                    <input class="border rounded-pill form-control" type="email" name="email" placeholder="Email">
                                </div>
                                <div>
                                    <button class="btn btn-primary shadow d-block w-100" type="submit">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php
        include "footer.php";
        ?>
    </body>
</html>