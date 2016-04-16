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
        <?php foreach ($cart->getItems() as $i => $item): ?>
            <li>Name: <?= $item['name'] ?></li>
            <li>Quantity:
                <input name="<?= "quantity[{$item['name']}]" ?>"
                    type="number"
                    value="<?= $item['quantity'] ?>">
            </li>
            <li>
                <a href="<?= 'remove_item.php?name=' . rawurlencode($item['name']) ?>">Remove</a>
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
