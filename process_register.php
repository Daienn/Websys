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
        <main class="container">
            <?php
            $email = $pwd = $pwd_confirm = $errorMsg = "";
            $success = true;

// Validate Username       
            if (empty($_POST['username'])) {
                $errorMsg .= "Username is required. <br>";
                $success = false;
            } else {
                $username = sanitize_input($_POST["username"]);
            }

// Validate email
            if (empty($_POST["email"])) {
                $errorMsg .= "Email is required.<br>";
                $success = false;
            } else {
                $email = sanitize_input($_POST["email"]);
                // Additional check to make sure email address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errorMsg .= "Invalid email format.<br>";
                    $success = false;
                }
            }

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

            if ($success) {
                // Hash the password using the PHP function password_hash()
                $pwd_hashed = password_hash($pwd, PASSWORD_DEFAULT);
                saveMemberToDB();
            }

            // Insert the data into the database or perform other necessary actions here
            if ($success) {
                echo "<h4>Your registration is successful!<br></h4>";
                echo '<a class="btn btn-outline-success" type="button" href="index.php">Log In</a>';

//                echo "<p>First Name: " . $fname . "</p>";
//                echo "<p>Last Name: " . $lname . "</p>";
//                echo "<p>Email: " . $email . "</p>";
            } else {
                echo "<h4>The following input errors were detected:</h4>";
                echo "<p>" . $errorMsg . "</p>";
                echo '<a class="btn btn-outline-danger mb-2" type="button" href="index.php">Return to Sign Up</a>';
            }

// Helper function that checks input for malicious or unwanted content
            function sanitize_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            /*
             * Helper function to write the member data to the DB
             */

            function saveMemberToDB() {
                global $username, $email, $pwd_hashed, $errorMsg, $success;
// Create database connection.
                $config = parse_ini_file('../../private/db-config.ini');
                $conn = new mysqli($config['servername'], $config['username'],
                        $config['password'], $config['dbname']);
// Check connection
                if ($conn->connect_error) {
                    $errorMsg = "Connection failed: " . $conn->connect_error;
                    $success = false;
                } else {
// Prepare the statement:
                    $stmt = $conn->prepare("INSERT INTO gym_members (email, password, username) VALUES (?, ?, ?)");
// Bind & execute the query statement:
                    $stmt->bind_param("sss", $email, $pwd_hashed, $username);
                    if (!$stmt->execute()) {
                        $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                        $success = false;
                    }
                    $stmt->close();
                }
                $conn->close();
            }
            ?>
        </main>
        <?php
        include "footer.php";
        ?>
    </body>
</html>