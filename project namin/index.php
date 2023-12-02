<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reservation Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
    <section class="banner">
        <h2>BOOK YOUR TABLE NOW</h2>
        <div class="card-container">
            <div class="card-img">
                <!-- image here -->
            </div>

            <div class="card-content">
                <h3>Reservation</h3>
                <?php
                // Handle form submission
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Process form data here
                    $day = $_POST["days"];
                    $hour = $_POST["hours"];
                    $fullName = $_POST["full_name"];
                    $phoneNumber = $_POST["phone_number"];
                    $persons = $_POST["persons"];

                    // Perform additional processing or store data in a database
                }
                ?>

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-row">
                        <select name="days">
                            <!-- Options for days -->
                        </select>

                        <select name="hours">
                            <!-- Options for hours -->
                        </select>
                    </div>

                    <div class="form-row">
                        <input type="text" name="full_name" placeholder="Full Name" required>
                        <input type="tel" name="phone_number" placeholder="Phone Number" required>
                    </div>

                    <div class="form-row">
                        <input type="number" name="persons" placeholder="How Many Persons?" min="1" required>
                        <input type="submit" value="BOOK TABLE">
                    </div>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>
