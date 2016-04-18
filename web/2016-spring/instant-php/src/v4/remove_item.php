<?php
// Load class loader
require_once 'include/autoload.php';

// Declare the component to use
use Dy\Component\Cart;

// Create a Cart instance
$cart = new Cart();

// Form Validation
if (empty($_GET['name'])) {
    die('Name required');
}

// Fetch name and remove it from the cart
$name = trim($_GET['name']);
$cart->removeItem($name);

// Redirect to cart page
header('Location: cart.php');
