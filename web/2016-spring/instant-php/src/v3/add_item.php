<?php
define('MY_SITE', 1);                       // Define MY_SITE constant
require 'include/function.php';             // Load "include/function.php" file

// Form Validation
if (empty($_POST['name'])) {
    die('Name required');
}

// Fetch name
$name = trim($_POST['name']);

// Check duplicate item
if (get_item($name) !== null) {
    die('Item exists');
}

// Add it to the cart
add_item($name);

// Redirect to cart page
redirect('cart.php');

// No closing tag needed in pure php file
