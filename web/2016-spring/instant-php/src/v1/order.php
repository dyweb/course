<?php
// Set timezone to UTC+8
date_default_timezone_set('Asia/Shanghai');

// Fetch form data from query string
$name = empty($_GET['name']) ? '' : $_GET['name'];  // The old way
$quantity = $_GET['quantity'] ?? '';                // The new way availbale in PHP 7

// If the form is submitted
if ($name != '' && $quantity != '') {
    // Output order result
    $price = 3;
    $total_price = $quantity * $price;
    echo '<h1>Ticket Ordering</h1>';
    echo '<p>Your order was created successfully.</p>';
    echo '<ul>';
    echo '    <li>Name: ' . $name . '</li>';
    echo '    <li>Tickets: ' . $quantity . '</li>';
    echo '    <li>Amount: $' . number_format($total_price, 2) . '</li>';
    echo '    <li>Ordered at: ' . date('Y-m-d H:i:s') . '</li>';
    echo '    <li>Order No: ' . sprintf('%010d', $quantity * 10 + 1) . '</li>';
    echo '</ul>';
} else {
    echo '<h1>Ticket Ordering</h1>';
    echo '<p>You are ordering tickets of the concert <em>Hello World</em>.</p>';
    echo '<form method="GET" action="order.php">';
    echo '    <p>';
    echo '        <label>Name</label>';
    echo '        <input name="name" type="text" placeholder="Your Name">';
    echo '    </p>';
    echo '    <p>';
    echo '        <label>Ticket Quantity</label>';
    echo '        <input name="quantity" type="number" placeholder="Quantity" min="0" max="5" style="width: 100px;">';
    echo '    </p>';
    echo '    <button>Submit</button>';
    echo '</form>';
}
