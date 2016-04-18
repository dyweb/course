<?php
// Load class loader
require_once 'include/autoload.php';

// Declare the component to use
use Dy\Component\Cart;

// Create a Cart instance
$cart = new Cart();

// Form Validation
if (empty($_POST['name']) || empty(trim($_POST['name']))) {
    die('Name required');
}

// Fetch name
$name = trim($_POST['name']);

// Check duplicate item
if ($cart->getItem($name) !== null) {
    die('Item exists');
}

// Add it to the cart
$cart->addItem($name);

// Redirect to cart page
header('Location: cart.php');
