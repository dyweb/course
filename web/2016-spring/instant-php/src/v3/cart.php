<?php
define('MY_SITE', 1);               // Define MY_SITE constant
require 'include/function.php';     // Load "include/function.php" file

$cart = get_cart();                 // Get the cart from an external defined function
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Cart</title>
</head>
<body>
    <h1>My Cart</h1>
    <p>Here is your cart.</p>

    <!-- Cart Info -->
    <form method="POST" action="save_cart.php">
        <ul>
        <?php foreach ($cart as $i => $item): ?>
            <li>Name: <?= $item['name'] ?></li>
            <li>Quantity:
                <input name="<?= "quantity[{$item['name']}]" ?>"
                    type="number"
                    value="<?= $item['quantity'] ?>">
            </li>
            <li>
                <a href="<?= 'delete_item.php?name=' . urlencode($item['name']) ?>">Remove</a>
            </li>
        <?php endforeach; ?>
        </ul>
        <button>Save</button>
    </form>

    <!-- Add Item Form -->
    <form method="POST" action="add_item.php">
        <h3>Add new item</h3>
        <p>
            <label>Name</label>
            <input name="name" placeholder="Name">
            <button>Add</button>
        </p>
    </form>
</body>
</html>
