<?php
// Set timezone to UTC+8
date_default_timezone_set('Asia/Shanghai');

// Fetch form data from query string
// The old way
$name = empty($_GET['name']) ? '' : $_GET['name'];
$quantity = empty($_GET['quantity']) ? '' : $_GET['quantity'];

// The new way availbale in PHP 7
//$name = $_GET['name'] ?? '';
//$quantity = $_GET['quantity'] ?? '';

// If the form is submitted
if ($name != '' && $quantity != '') {
    // Output order result
    $price = 3.00;
    $total_price = $quantity * $price;
?>
    <h1>Ticket Ordering</h1>
    <p>Your order was created successfully.</p>
    <ul>
        <li>Name: <?php echo $name; ?></li>
        <li>Tickets: <?php echo $quantity; ?></li>
        <li>Amount: $<?php echo number_format($total_price, 2) ?></li>
        <li>Ordered at: <?php echo date('Y-m-d H:i:s') ?></li>
        <li>Order No: <?php echo sprintf('%010d', $quantity * 10 + 1) ?></li>
    </ul>
<?php } else { ?>
    <h1>Ticket Ordering</h1>
    <p>You are ordering tickets of the concert <em>Hello World</em>.</p>
    <form method="GET" action="order.php">
        <p>
            <label>Name</label>
            <input name="name" type="text" placeholder="Your Name">
        </p>
        <p>
            <label>Ticket Quantity</label>
            <input name="quantity" type="number" placeholder="Quantity" min="0" max="5" style="width: 100px;">
        </p>
        <button>Submit</button>
    </form>
<?php } ?>
