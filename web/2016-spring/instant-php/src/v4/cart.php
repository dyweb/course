<?php
// Load class loader
require_once 'include/autoload.php';

// Declare the component to use
use Dy\Component\Cart;

// Create a Cart instance
$cart = new Cart();

// Render content in view/cart.php
include 'view/cart.php';
