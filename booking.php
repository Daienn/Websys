<!DOCTYPE html>

<html lang="en">
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="bootstrap/styles.min.css"/>

        <!-- Bootstrap JS -->
        <script src="js/script.min.js"></script>
        <script src="js/bs-init.js"></script>
        <script src="js/calendar.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no">
        <title>Endurance Fitness - Booking</title>
    </head>

    <?php
    include 'nav.php';
    ?>

    <body>

        <section class="py-5">
            <section>
                <div class="container">
                    <div class="row mb-5" style="margin-top: -60px;">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h1 class="display-5 fw-bold" style="color: rgb(0,192,163);">Book Now</h1>
                            <h2 class="fw-bold" style="font-size: 23px;">Fill in the form to secure your slot</h2>
                        </div>
                    </div>
                    <form action="process_booking.php" class="p-3 p-xl-4" method="post">
<?php
// Get the selected month and year, or use the current month and year if not set
if (isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];
} else {
    $month = date('m');
    $year = date('Y');
}

// Output the month and year as a heading
echo '<h3>' . date('F Y', strtotime("$year-$month-01")) . '</h3>';

// Output the month and year selection form
echo '<form>';
echo '<label for="month">Month:</label>';
echo '<select id="month" name="month">';
for ($i = 1; $i <= 12; $i++) {
    $selected = ($i == $month) ? ' selected' : '';
    echo '<option value="' . $i . '"' . $selected . '>' . date('F', strtotime("2017-$i-01")) . '</option>';
}
echo '</select>';

echo '<label for="year">Year:</label>';
echo '<select id="year" name="year">';
for ($i = date('Y'); $i >= 2017; $i--) {
    $selected = ($i == $year) ? ' selected' : '';
    echo '<option value="' . $i . '"' . $selected . '>' . $i . '</option>';
}
echo '</select>';

echo '<input type="submit" value="Go">';
echo '</form>';

// Output the calendar table
echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Sun</th>';
echo '<th>Mon</th>';
echo '<th>Tue</th>';
echo '<th>Wed</th>';
echo '<th>Thu</th>';
echo '<th>Fri</th>';
echo '<th>Sat</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

// Get the number of days in the month
$numDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);

// Get the first day of the month
$firstDay = new DateTime("$year-$month-01");
$dayOfWeek = $firstDay->format('w');

// Output the days of the month
echo '<tr>';
for ($j = 0; $j < $dayOfWeek; $j++) {
    echo '<td></td>';
}
for ($j = 1; $j <= $numDays; $j++) {
    echo '<td class="calendar-day" id="day-' . $j . '" data-date="' . $year . '-' . $month . '-' . $j . '">' . $j . '</td>';
    $dayOfWeek++;
    if ($dayOfWeek == 7 && $j != $numDays) {
        echo '</tr><tr>';
        $dayOfWeek = 0;
    }
}
for ($j = $dayOfWeek; $j < 7; $j++) {
    echo '<td></td>';
}

echo '</tr>';
echo '</tbody>';
echo '</table>';
?>
<script>
  // Get the current date
  var currentDate = moment();

  // Set the text of the #calendar-month element to the current month and year
  document.getElementById("calendar-month").textContent = currentDate.format("DD MMMM YYYY");
</script>

                        <div class="row">
                            <div class="col-md-6">
                                <form class="p-3 p-xl-4" method="post">
<div class="mb-3"><input class="border rounded-pill form-control" type="text" id="fname" name="fname" placeholder="First Name">
                                </div>
                                <div class="mb-3"><input class="border rounded-pill form-control" type="email" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <div class="border rounded-pill form-control">

                                        <label for="locationselect-select">Location:</label>

                                        <select name="location" id="location-select">
                                            <option value="">--Please choose an option--</option>
                                            <option value="Kallang">Kallang</option>
                                            <option value="Bishan">Bishan</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                            <div class="col-md-6">
                            <form class="p-3 p-xl-4" method="post">
                                <div class="mb-3" style="margin-bottom: 16px;">
                                    <input class="border rounded-pill form-control" type="text" id="name-2" name="Last Name" placeholder="Last Name">
                                </div>
                                <div style="margin-bottom: 16px;">
                                    <input class="border rounded-pill form-control" type="tel" name="Mobile Number" placeholder="Mobile No.">
                                </div>
                                <div class="mb-3">
<input type="text" class="form-control" id="date" name="date" placeholder="Select a date" required>

                                </div>
                            </form>
                        </div>

                        </div>
                        <div class="col-md-6 d-flex justify-content-center w-100">
                            <div class="mb-3">
                                <button class="btn btn-primary text-center" type="submit">Submit Booking</button>
                            </div>
                        </div>

                </div>
            </section>
<script>
    const calendarDays = document.querySelectorAll('.calendar-day');
    const bookingDateInput = document.querySelector('#date');

    calendarDays.forEach(calendarDay => {
        calendarDay.addEventListener('click', () => {
            const date = calendarDay.dataset.date;
            bookingDateInput.value = date;
        });
    });
</script>
            <?php
            include 'footer.php';
            ?>
    </body>
</html>
