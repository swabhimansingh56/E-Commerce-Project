<?php
include 'includes/header.php';
include 'includes/db.php';

$products = mysqli_query($conn, "SELECT * FROM products");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Our E-commerce Website</h1>
        <div class="products">
            <?php while ($row = mysqli_fetch_assoc($products)): ?>
                <div class="product">
                    <img src="images/<?= $row['image'] ?>" alt="<?= $row['name'] ?>">
                    <h2><?= $row['name'] ?></h2>
                    <p>$<?= $row['price'] ?></p>
                    <a href="product.php?id=<?= $row['id'] ?>">View Product</a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>
<?php include 'includes/footer.php'; ?>
