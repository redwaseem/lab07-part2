<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
    if (isset($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
        echo "<p>First name: $firstname</p>";
    }

    if (isset($_POST["lastname"])) {
        $lastname = $_POST["lastname"];
        echo "<p>Last name: $lastname</p>";
    }
    ?>
</body>
</html>