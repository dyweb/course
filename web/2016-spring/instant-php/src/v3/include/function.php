<?php
if (!defined('MY_SITE')) {                                  // If "MY_SITE" constant is not defined
    die('This file has to be included in other pages.');
}

session_start();                                            // Enable session and create $_SESSION

/**
 * Redirect to the given path.
 * @param  string $path
 */
function redirect($path) {
    header("Location: $path");                              // Append redirect header to the response
}

/**
 * Create an example cart.
 */
function create_cart() {
    $_SESSION['cart'] = [                                   // The following lines are defining an array with several array items
        ['name' => 'Area A Ticket', 'quantity' => 1],       // Every item in the array is an array ['name' => x, 'quantity' => x]
        ['name' => 'Area B Ticket', 'quantity' => 2],       // Use ',' to separate each item in an array
        ['name' => 'Area C Ticket', 'quantity' => 3],
        ['name' => 'Area D Ticket', 'quantity' => 4]        // The ',' after the last item can be omitted
    ];
}

/**
 * Get the cart from user session.
 * @return array
 */
function get_cart() {
    // Create a new cart if no cart available
    if (!isset($_SESSION['cart'])) {
        create_cart();
    }

    // Return the cart fetched from user session
    return $_SESSION['cart'];
}

/**
 * Set the quantity of the given item in the cart.
 * @param string    $item_name
 * @param int       $quantity   If $quantity <= 0, the item will be
 *                              removed from the cart.
 */
function set_item_quantity($item_name, $quantity) {
    if ($quantity <= 0) {                               // If the quantity of the item is not positive
        remove_item($item_name);                        // Remove the item directly
        return;                                         // Exit function handling
    }

    foreach ($_SESSION['cart'] as &$item) {             // Iterate each item in the cart by reference
        if ($item['name'] === $item_name) {             // Look for the item with the given name
            $item['quantity'] = $quantity;              // Set the new quantity
            return;                                     // Exit function handling
        }
    }

    // If the item is not found, add it into the cart
    $_SESSION['cart'][] = [                             // $val[] = 1 is the same as array_push($val, 1)
        'name' => $item_name,
        'quantity' => $quantity
    ];
}

/**
 * Get the given item in the cart specified by item name.
 * @param  string       $item_name
 * @return array|null   If the item is not found, null will be returned.
 */
function get_item($item_name) {
    foreach ($_SESSION['cart'] as $item) {
        if ($item['name'] === $item_name) {
            return $item_name;                          // Return the item when found
        }
    }

    return null;                                        // Return null when not found
}

/**
 * Add a new item into the cart.
 * @param string $item_name
 */
function add_item($item_name) {
    if (get_item($item_name) !== null) {                // If the item exists in the cart
        return;                                         // Exit function handling
    }

    $_SESSION['cart'][] = [
        'name' => (string) $item_name,
        'quantity' => 1                                 // The quantity must be positive
    ];
}

/**
 * Remove an item from the cart.
 * @param string $item_name
 */
function remove_item($item_name) {
    foreach ($_SESSION['cart'] as $i => $item) {
        if ($item['name'] === $item_name) {
            unset($_SESSION['cart'][$i]);               // Remove the item from the cart
            return;
        }
    }
}

// No closing tag needed in pure php file
