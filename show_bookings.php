<!DOCTYPE html>
<html>
<head>
  <title>Booking Results</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    tr:hover {
      background-color: #f5f5f5;
    }
    
    .no-results {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>
<?php

// Create database connection.
$config = parse_ini_file('../../private/db-config.ini');
$conn = new mysqli($config['servername'], $config['username'],
        $config['password'], $config['dbname']);

// Query database for rows with the given email
$email = $_GET['email']; // Assuming email is passed in the URL
    $sql = "SELECT * FROM gym_bookings WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Last Name</th><th>Email</th><th>Mobile Number</th><th>Location</th><th>Date</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["mobile_number"] . "</td><td>" . $row["location"] . "</td><td>" . $row["date"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
?>
</body>
</html>