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
        <main class="container">
            <?php
            $errorMsg = "";
            $success = true;
            $email = $_POST['email'];
            authenticateUser();
//            if ($success) {
//                echo "<h1>Successful</h1>";
//            }
            // Insert the data into the database or perform other necessary actions here
            if ($success) {
                echo "<h4>Login Successful!<br></h4>";
                echo "<h5>Welcome back, $username .</h3>";
                echo '<a class="btn btn-outline-success" type="button" href="index.php">Return to Home</a>';

//                echo "<p>First Name: " . $fname . "</p>";
//                echo "<p>Last Name: " . $lname . "</p>";
//                echo "<p>Email: " . $email . "</p>";
            } else {
                echo "<h4>The following input errors were detected:</h4>";
                echo "<p>" . $errorMsg . "</p>";
                echo '<a class="btn btn-outline-danger mb-2" type="button" href="login.php">Return to Log in</a>';
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

            function authenticateUser() {
                global $email, $pwd_hashed, $errorMsg, $success, $username;
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
                    $stmt = $conn->prepare("SELECT * FROM gym_members WHERE
email=?");
// Bind & execute the query statement:
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if ($result->num_rows > 0) {
// Note that email field is unique, so should only have
// one row in the result set.
                        $row = $result->fetch_assoc();
//                        $fname = $row["fname"];
//                        $lname = $row["lname"];
                        $username = $row["username"];
                        $pwd_hashed = $row["password"];
// Check if the password matches:
                        if (!password_verify($_POST["pwd"], $pwd_hashed)) {
// Don't be too specific with the error message - hackers don't
// need to know which one they got right or wrong. :)
                            $errorMsg = "Email not found or password doesn't match...BLABLABLA";
                            $success = false;
                        }
                    } else {
                        $errorMsg = "Email not found or password doesn't match...";
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