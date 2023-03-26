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
    <?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
    require 'vendor/autoload.php';

//$connection = mysqli_connect("localhost", "root", "", "classicmodels");1
// Create database connection.
    $config = parse_ini_file('../../private/db-config.ini');
    $connection = new mysqli($config['servername'], $config['username'],
            $config['password'], $config['dbname']);
    $email = $_POST["email"];

    $sql = "SELECT * FROM gym_members WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        $reset_token = time() . md5($email);

        $sql = "UPDATE gym_members SET reset_token='$reset_token' WHERE email='$email'";
        mysqli_query($connection, $sql);

        $message = "<p>Please click the link below to reset your password</p>";
        $message = "<p>If Google Chrome does not work, please copy the link address and try it on Microsoft Edge.</p>";
        $message .= "<a href='http://35.212.241.120/WEBProject/reset-password.php?email=$email&reset_token=$reset_token'>";
        $message .= "Reset password";
        $message .= "</a>";

        send_mail($email, "Reset password", $message);
    } else {
        echo "Email does not exists";
    }

    function send_mail($to, $subject, $message) {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = 'khx07602@gmail.com';                     // SMTP username
            $mail->Password = 'gzvowvuzqklhexsg';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('khx07602@gmail.com', 'EnduranceFitness@gmail.com');
            //Recipients
            $mail->addAddress($to);

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send(); ?>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center d-flex flex-column align-items-center">
                            <h2 class="fw-bold">Message has been sent</h2>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } catch (Exception $e) {
            ?>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center d-flex flex-column align-items-center">
                            <h2 class="fw-bold">Message could not be sent. Mailer Error: <?php{$mail->ErrorInfo}?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
    <?php
    include "footer.php";
    ?>
</body>
</html>