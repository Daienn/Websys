<?php

$name = $email = $last_name = $mobile_number = $location = $date = $errorMsg = "";
$success = true;

// Retrieve the form data
$name = $_POST['fname'];
$email = $_POST['email'];
$last_name = $_POST['lname'];
$mobile_number = $_POST['mobile_number'];
$location = $_POST['location'];
$date = $_POST['date'];

// Connect to the database
// Create database connection.
$config = parse_ini_file('../../private/db-config.ini');
$conn = new mysqli($config['servername'], $config['username'],
        $config['password'], $config['dbname']);

// Check connection
if ($conn->connect_error) {
    $errorMsg = "Connection failed: " . $conn->connect_error;
    $success = false;
}

// Insert the form data into the database
$sql = "INSERT INTO gym_bookings (name, last_name, mobile_number, location, date, email)
            VALUES ('$name', '$last_name', '$mobile_number', '$location', '$date', '$email')";

if (mysqli_query($conn, $sql)) {
    echo 'Booking successfully added to the database.';
} else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

?>