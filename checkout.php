<?php
include 'includes/header.php';
include 'includes/db.php';
include 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $payment = $_POST['payment'];
    process_order($name, $address, $payment);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Checkout</h1>
        <form action="checkout.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>
            <label for="payment">Payment Method</label>
            <select name="payment" id="payment" required>
                <option value="credit_card">Credit Card</option>
                <option value="paypal">PayPal</option>
            </select>
            <button type="submit">Place Order</button>
        </form>
    </div>
</body>
</html>
<?php include 'includes/footer.php'; ?>
