<?php
define('MY_SITE', 1);                       // Define MY_SITE constant
require 'include/function.php';             // Load "include/function.php" file

// Form Validation
if (!isset($_POST['quantity']) || !is_array($_POST['quantity'])) {
    die('Invalid request');
}

$items = $_POST['quantity'];
// Iterate each item and update quanity
foreach ($items as $name => $quantity) {
    set_item_quantity((string) $name, $quantity);
}

// Redirect to cart page
redirect('cart.php');

// No closing tag needed in pure php file
