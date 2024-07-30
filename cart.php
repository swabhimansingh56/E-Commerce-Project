<?php
include 'includes/header.php';
include 'includes/db.php';
include 'includes/functions.php';

if (isset($_GET['add'])) {
    $id = $_GET['add'];
    add_to_cart($id);
}

$cart_items = get_cart_items();
$total_price = calculate_total_price($cart_items);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Your Shopping Cart</h1>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart_items as $item): ?>
                    <tr>
                        <td><?= $item['name'] ?></td>
                        <td>$<?= $item['price'] ?></td>
                        <td><?= $item['quantity'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p>Total Price: $<?= $total_price ?></p>
        <a href="checkout.php">Checkout</a>
    </div>
</body>
</html>
<?php include 'includes/footer.php'; ?>
