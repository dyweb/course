<?php
date_default_timezone_set('Asia/Shanghai');                         // Set timezone to UTC+8

// Fetch form data from query string
$name = empty($_GET['name']) ? '' : $_GET['name'];                  // Fetch ?name=xxx
$quantity = empty($_GET['quantity']) ? '' : $_GET['quantity'];      // Fetch ?quantity=xxx

// If the form is submitted
if ($name == '' || $quantity == '') {                               // Check $name and $quantity
    die('Name and quantity required');                              // Print error message and exit
}

// Process order result
$price = 3.00;                                                      // Define order price
$total_price = $quantity * $price;                                  // Calculate total price

// Output result
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
