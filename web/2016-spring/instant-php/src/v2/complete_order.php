<?php
// Set area data
$areas = ['Area A', 'Area B', 'Area C', 'Area D'];
$is_posted = strtoupper($_SERVER['REQUEST_METHOD']) == 'POST';
if ($is_posted) {
    // Check name value
    if (empty($_POST['name'])) {
        die('Name required');
    }
    // Check quantity value (quantity[0], quantity[1], ...)
    if (!isset($_POST['quantity']) || !is_array($_POST['quantity'])) {
        die('Quantity required');
    }

    // Validate form data
    $name = trim($_POST['name']);
    $quantities = $_POST['quantity'];
    for ($i = 0; $i < count($areas); ++$i) {
        $quantities[$i] = intval($quantities[$i]);
        if ($quantities[$i] > 5 || $quantities[$i] < 0) {
            die('Quantity should be between 0 and 5');
        }
    }

    // Store data in data.txt
    $data = "Name: $name Tickets: " . implode($quantities, ',') . PHP_EOL;
    file_put_contents('data.txt', $data, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ticket Ordering</title>
</head>
<body>
    <h1>Ticket Ordering</h1>
    <?php if ($is_posted): ?>
        <p>Your order was created successfully.</p>
        <ul>
            <li>Name: <?= $name ?></li>
            <li>Tickets:
                <ul>
                <?php foreach ($areas as $i => $area): ?>
                    <li><?= "$area: $quantities[$i] tickets" ?></li>
                <?php endforeach; ?>
                </ul>
            </li>
        </ul>
    <?php else: ?>
        <p>You are ordering tickets of the concert <em>Hello World</em>.</p>
        <form method="POST" action="complete_order.php">
            <p>
                <label>Name</label>
                <input name="name" type="text" placeholder="Your Name">
            </p>
            <?php foreach ($areas as $i => $area) { ?>
            <p>
                <?php echo $area; ?><br>
                <label>Quantity</label>
                <input name="<?php echo "quantity[$i]"; ?>" type="number" placeholder="Quantity" min="0" max="5" style="width: 100px;">
            </p>
            <?php } ?>
            <button>Submit</button>
        </form>
    <?php endif; ?>
</body>
</html>
