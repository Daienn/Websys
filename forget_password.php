<html>
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
        <title>Endurance Fitness - Login</title>
    </head>
    <?php
    include "nav.php";
    ?>
    <body>

        <form method="POST" action="send-recovery-mail.php">

        <p class="text-center" style="font-size: 30px;padding: 40px;">
            <strong>Please enter your email to reset your password</strong>
            <label class="form-label d-lg-flex justify-content-lg-center" style="font-size: 20px;padding: 30px;padding-bottom: 30px;">
                <strong>Email: </strong>
                <input class="d-lg-flex justify-content-center align-items-center justify-content-lg-center" type="email" name="email" />
            </label>
            <button class="btn btn-primary text-center" type="submit">Reset Password</button>
        </p>
        </form>



        <?php
        include "footer.php";
        ?>
    </body>
</html>