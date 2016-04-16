<?php
define('MY_SITE', 1);                       // Define MY_SITE constant
require 'include/function.php';             // Load "include/function.php" file

// Form Validation
if (empty($_POST['name'])) {
    die('Name required');
}

// Fetch name and add it to the cart
$name = trim($_POST['name']);
add_item($name);

// Redirect to cart page
redirect('cart.php');

// No closing tag needed in pure php file
