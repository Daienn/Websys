<!--WEBSYS PROJECT-->
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
    <body>
        <?php
        include "nav.php";
        ?>
        <?php
        $email = $_GET["email"];
        $reset_token = $_GET["reset_token"];

//$connection = mysqli_connect("localhost", "root", "", "classicmodels");
// Create database connection.
        $config = parse_ini_file('../../private/db-config.ini');
        $connection = new mysqli($config['servername'], $config['username'],
                $config['password'], $config['dbname']);

        $sql = "SELECT * FROM gym_members WHERE email = '$email'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_object($result);
            if ($user->reset_token == $reset_token) {
                ?>
                <!--                <form method="POST" action="new-password.php">
                                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                                    <input type="hidden" name="reset_token" value="<?php echo $reset_token; ?>">
                
                                    <input type="password" name="new_password" placeholder="Enter new password">
                                    <input type="submit" value="Change password">
                                </form>-->
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <h2 class="fw-bold">Please enter your new password</h2>                                        
                                <form action="new-password.php" method="post">
                                    <div class="mb-3"><input class="form-control" type="hidden" name="email" value="<?php echo $email; ?>"></div>
                                    <div class="mb-3"><input class="form-control" type="hidden" name="reset_token" value="<?php echo $reset_token; ?>"></div>


                                    <div class="mb-3"><input required class="form-control" type="password" id="pwd" name="pwd" placeholder="Enter new password"></div>
                                    <div class="mb-3"><input required class="form-control" type="password" id="pwd_confirm" name="pwd_confirm" placeholder="Confirm Password"></div>

                                    <div class="mb-3"><button class="btn btn-primary shadow d-block w-100" type="submit">Change Password</button></div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                echo "Recovery email has been expired";
            }
        } else {
            echo "Email does not exists";
        }
        ?>
        <?php
        include "footer.php";
        ?>
    </body>
</html>