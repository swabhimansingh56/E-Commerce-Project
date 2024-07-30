<?php
include 'includes/header.php';
include 'includes/db.php';

$id = $_GET['id'];
$product = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
$product = mysqli_fetch_assoc($product);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product['name'] ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1><?= $product['name'] ?></h1>
        <img src="images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
        <p>$<?= $product['price'] ?></p>
        <p><?= $product['description'] ?></p>
        <a href="cart.php?add=<?= $product['id'] ?>">Add to Cart</a>
    </div>
</body>
</html>
<?php include 'includes/footer.php'; ?>
