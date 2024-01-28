<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = $_POST["card-number"];
    $expiry_date = $_POST["expiry-date"];
    $cvv = $_POST["cvv"];
    $name_on_card = $_POST["name-on-card"];
    $license_number = $_POST["license-number"];

    if (empty($card_number) || empty($expiry_date) || empty($cvv) || empty($name_on_card) || empty($license_number)) {
        header("Location: process_payment.php?error=empty_fields");
        exit();
    } else {
        header("Location: index.html");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Car Rental System</title>
    <link rel="stylesheet" href="payment.css">
</head>

<body>
    <div class="container">
        <h2>Payment</h2>
        <p>Please provide your payment details to complete the rental process.</p>
        <form id="payment-form" method="post">
            <div class="form-group">
                <label for="card-number">Card Number:</label>
                <input type="text" id="card-number" name="card-number" required>
            </div>
            <div class="form-group">
                <label for="expiry-date">Expiry Date:</label>
                <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <div class="form-group">
                <label for="name-on-card">Name on Card:</label>
                <input type="text" id="name-on-card" name="name-on-card" required>
            </div>
            <div class="form-group">
                <label for="license-number">License Number:</label>
                <input type="text" id="license-number" name="license-number" required>
            </div>
            <button type="submit" class="btn">Pay Now</button>
        </form>
    </div>
</body>

</html>