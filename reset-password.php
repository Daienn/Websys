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
        <title>Endurance Fitness - Reset Password</title>
    </head>

    <?php
    include 'nav.php';
    ?>
    
    <body>
        
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
                <section class="py-5">
                            <div class="container">
                                <div class="row mb-5" style="margin-top: -60px;">
                                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                                        <h1 class="display-5 fw-bold" style="color: rgb(0,192,163);">Reset Password</h1>
                                        <h2 class="fw-bold" style="font-size: 23px;">Enter and confirm your new password</h2>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-6 col-xl-4">
                                        <div>
                                            <form class="p-3 p-xl-4" action="new-password.php" method="post">
                                                <div class="mb-3">
                                                    <input class="form-control" type="hidden" name="email" value="<?php echo $email; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <input class="form-control" type="hidden" name="reset_token" value="<?php echo $reset_token; ?>">
                                                </div>

                                                <div>
                                                    <input class="border rounded-pill required form-control" type="password" id="pwd" name="pwd" style="margin-bottom: 20px;" placeholder="Enter new password" required />
                                                </div>
                                                <div>
                                                    <input class="border rounded-pill required form-control" type="password" id="pwd_confirm" name="pwd_confirm" style="margin-bottom: 20px;"  placeholder="Confirm password" required />
                                                </div>
                                                <div>
                                                    <button class="btn btn-primary shadow d-block w-100" type="submit">Change Password</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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