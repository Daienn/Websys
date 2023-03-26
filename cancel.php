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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no">
        <title>Endurance Fitness - PayPal Payment Status</title>
    </head>

    <?php
    include 'nav.php';
    ?>
    <body>
        <div class="card" style="margin-bottom: 30px;">
            <div class="card-body">
                <h1 class="display-5 fw-bold text-center text-warning align-content-stretch" style="font-size: 35px;">Transaction Cancelled</h1>
                <h2 class="fw-bold text-center" style="font-family: Inter, sans-serif;font-size: 23px;">Your PayPal transaction has been cancelled!</h2>
            </div>
            <div style="text-align: center;">
                <a class="btn btn-primary" role="button" href="rates.php">Back to Products</a>
            </div>
        </div>

        <?php
        include 'footer.php';
        ?> 

    </body>
</html>