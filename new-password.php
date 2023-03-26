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
        <title>Endurance Fitness - New Password</title>
    </head>
    
    
    <?php
    include "nav.php";
    ?>
    <?php
    $pwd = $pwd_confirm = $errorMsg = "";
    $success = true;

    $email = $_POST["email"];
    $reset_token = $_POST["reset_token"];
    $new_password = $_POST["pwd"];

//$connection = mysqli_connect("localhost", "root", "", "classicmodels");
// Create database connection.
    $config = parse_ini_file('../../private/db-config.ini');
    $connection = new mysqli($config['servername'], $config['username'],
            $config['password'], $config['dbname']);

// Validate password
    if (empty($_POST["pwd"])) {
        $errorMsg .= "Password is required.<br>";
        $success = false;
    } else {
        $pwd = $_POST["pwd"];
    }

// Validate confirm password
    if (empty($_POST["pwd_confirm"])) {
        $errorMsg .= "Confirm password is required.<br>";
        $success = false;
    } else {
        $pwd_confirm = $_POST["pwd_confirm"];
        if ($pwd != $pwd_confirm) {
            $errorMsg .= "Passwords do not match.<br>";
            $success = false;
        }
    }


    if (!$success) {
        // Display error message(s) and exit
        echo $errorMsg;
        exit();
    }

    $sql = "SELECT * FROM gym_members WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_object($result);
        if ($user->reset_token == $reset_token) {
            $sql = "UPDATE gym_members SET reset_token='', password='$new_password' WHERE email='$email'";
            mysqli_query($connection, $sql);
            ?>
    
            <section class="py-5">
                <div class="container">
                    <div class="row mb-5" style="margin-top: -60px;">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h1 class="display-5 fw-bold" style="color: rgb(0,192,163);">Password changed successfully</h1>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        } else {
            ?>
            <section class="py-5">
                <div class="container">
                    <div class="row mb-5" style="margin-top: -60px;">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h1 class="display-5 fw-bold text-warning">Recovery email has expired</h1>
                        </div>
                    </div>
                </div>
            </section>
            <?php
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