<?php
// Load class loader
require_once 'include/autoload.php';

// Declare the component to use
use Dy\Component\Cart;

// Create a Cart instance
$cart = new Cart();

// Form Validation
if (!isset($_POST['quantity']) || !is_array($_POST['quantity'])) {
    die('Invalid request');
}

$items = $_POST['quantity'];
// Iterate each item and update quanity
foreach ($items as $name => $quantity) {
    $cart->setItemQuantity((string) $name, $quantity);
}

// Redirect to cart page
header('Location: cart.php');
