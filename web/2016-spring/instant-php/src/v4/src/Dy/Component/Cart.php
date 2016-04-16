<?php

namespace Dy\Component;

/**
 * Class Cart
 * Simple Cart Component
 *
 * @package Dy\Component\Cart
 * @author ComMouse
 */
class Cart
{
    /**
     * Key of cart in $_SESSION
     * @var string
     */
    private $cartKey;

    /**
     * Constructor of the class.
     * This method will be called once an new instance is initialized.
     *
     * @param string $cartKey Key of cart in $_SESSION
     */
    public function __construct($cartKey = 'cart')
    {
        $this->cartKey = $cartKey;
        session_start();
    }

    /**
     * Get the cart from user session.
     * @return array
     */
    public function getItems() {
        // Create a new cart if no cart available
        if (!isset($_SESSION[$this->cartKey])) {
            $this->createCart();
        }

        // Return the cart fetched from user session
        return $_SESSION[$this->cartKey];
    }

    /**
     * Set the quantity of the given item in the cart.
     * @param string    $itemName
     * @param int       $quantity   If $quantity <= 0, the item will be
     *                              removed from the cart.
     */
    public function setItemQuantity($itemName, $quantity) {
        if ($quantity <= 0) {                               // If the quantity of the item is not positive
            $this->removeItem($itemName);                   // Remove the item directly
            return;                                         // Exit function handling
        }

        foreach ($_SESSION[$this->cartKey] as &$item) {     // Iterate each item in the cart by reference
            if ($item['name'] === $itemName) {              // Look for the item with the given name
                $item['quantity'] = $quantity;              // Set the new quantity
                return;                                     // Exit function handling
            }
        }

        // If the item is not found, add it into the cart
        $this->addItem($itemName);
    }

    /**
     * Get the given item in the cart specified by item name.
     * @param  string       $itemName
     * @return array|null   If the item is not found, null will be returned.
     */
    public function getItem($itemName) {
        foreach ($_SESSION[$this->cartKey] as $item) {
            if ($item['name'] === $itemName) {
                return $itemName;                           // Return the item when found
            }
        }

        return null;                                        // Return null when not found
    }

    /**
     * Add a new item into the cart.
     * @param string $itemName
     */
    public function addItem($itemName) {
        if ($this->getItem($itemName) !== null) {           // If the item exists in the cart
            return;                                         // Exit function handling
        }

        $_SESSION[$this->cartKey][] = [
            'name' => (string) $itemName,
            'quantity' => 1                                 // The quantity must be positive
        ];
    }

    /**
     * Remove an item from the cart.
     * @param string $itemName
     */
    public function removeItem($itemName) {
        foreach ($_SESSION[$this->cartKey] as $i => $item) {
            if ($item['name'] === $itemName) {
                unset($_SESSION[$this->cartKey][$i]);       // Remove the item from the cart
                return;
            }
        }
    }

    /**
     * Create an example cart.
     */
    private function createCart()
    {
        $_SESSION['cart'] = [                               // The following lines are defining an array with several array items
            ['name' => 'Area A Ticket', 'quantity' => 1],   // Every item in the array is an array ['name' => x, 'quantity' => x]
            ['name' => 'Area B Ticket', 'quantity' => 2],   // Use ',' to separate each item in an array
            ['name' => 'Area C Ticket', 'quantity' => 3],
            ['name' => 'Area D Ticket', 'quantity' => 4]    // The ',' after the last item can be omitted
        ];
    }
}
