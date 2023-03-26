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
        <title>Endurance Fitness - Payment</title>
    </head>
    
    <?php
    include 'nav.php';
    ?>
    <?php
// Include PayPal PHP SDK
    require_once 'vendor/autoload.php';

// Include Configuration file
    include_once 'config.php';
    ?>

    <body>
        <div class="container">
            <h1>Payment Success!</h1>
            <p>Thank you for your payment.</p>
            
            <?php
            echo $_GET['PayerID'];
            echo $_GET['amt'];
            echo $_GET['st'];
            echo $_GET['payer_email'];

            // Update member status to 'paid'
            $user_id = $_SESSION["user_id"];
            $stmt = $conn->prepare("UPDATE gym_members SET member_status='paid' WHERE member_id=?");
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            ?>

            <a href="booking.php" class="btn btn-success">Make Booking</a>
        </div>
        
        <?php
        include 'footer.php';
        ?>
        
    </body>