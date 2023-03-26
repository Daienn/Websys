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
        <title>Endurance Fitness - Send Recovery Email</title>
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
            <div class="card-body">
                <h1 class="display-5 fw-bold text-center align-content-stretch" style="font-size: 35px;color: rgb(0,192,163);">Message has been sent</h1>
            </div>
            <?php
        } catch (Exception $e) {
            ?>
                    <div class="card-body">
                        <h1 class="display-5 fw-bold text-center text-warning align-content-stretch" style="font-size: 35px;">Message could not be sent</h1>
                            <h2 class="fw-bold text-center" style="font-family: Inter, sans-serif; font-size: 23px;">Mailer Error: <?php{$mail->ErrorInfo}?></h2>
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