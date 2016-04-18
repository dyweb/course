<?php
define('MY_SITE', 1);                       // Define MY_SITE constant
require 'include/function.php';             // Load "include/function.php" file

// Form Validation
if (empty($_GET['name'])) {
    die('Name required');
}

// Fetch name and remove it from the cart
$name = trim($_GET['name']);
remove_item($name);

// Redirect to cart page
redirect('cart.php');

// No closing tag needed in pure php file
