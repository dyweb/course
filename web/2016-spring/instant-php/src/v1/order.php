<?php
// Set timezone to UTC+8
date_default_timezone_set('Asia/Shanghai');

// Fetch form data from query string
$name = $_GET['name'];
$quantity = $_GET['quantity'];

// If the form is submitted
if ($name != '' && $quantity != '') {
    // Output order result
    $price = 3;
    $total_price = $quantity * $price;
    echo '<h1>Ticket Ordering</h1>';
    echo '<p>Dear <strong>' . $name .
            '</strong>, you have successfully ordered <strong>' . $quantity .
            '</strong> ticket(s) at <strong>' . date('Y-m-d H:i:s') . '</strong>';
    echo '  The total amount is <strong>$' . number_format($total_price, 2) . '</strong>.';
    echo '  Please pay your order as soon as possible.</p>';
    echo '<p>Your order number: ' . sprintf('%010d', $quantity * 10 + 1) . '</p>';
    exit;
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Ticket Ordering</title>
    <style>
        body, input {
            font-family: Calibri, Verdana, sans-serif;
            font-size: 20px;
        }
    </style>
</head>
<body>
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
</body>
</html>
