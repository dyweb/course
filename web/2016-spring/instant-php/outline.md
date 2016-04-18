# Guideline of Instant PHP

- What is PHP?
  - Personal Homepage Processor
  - PHP: Hypertext Preprocessor
  - The best programming language in the world
- Why to use PHP?
  - Server logic
  - Easy & fast
- Environment
  - 5 min XAMPP Configure
  - Vagrant
  - PHP Built-in Server
- Our Goal
  - Ticket Order System
- First Try: Order Page `order.php`
    - Form Element
    - Form Controls
    - Receive Form Data (GET Version)
        - `$_GET`
        - URL
        - Query String
    - Handle Form Data
        - Use variables to store
        - Weak types
        - Concancate string (`.`)
        - Format result (`date`, `number_format`, `sprintf`)
    - Show Order Result
- Next Try: Complete Order Page `complete_order.php`
    - `$_GET` or `$_POST`
        - HTTP Verbs
    - Display repeated items
        - Array / `foreach`
        - `<?=` tag
        - Parsed object syntax in string `"$obj"`
    - Safer Handling
        - Validation
            - `===`, `<=>` (PHP 7 only)
            - `??` operator (PHP 7 only)
            - `is_xxx()`, `xxxval()`, `trim`
            - `filter_var()`, `preg_match()` (Leave it in a homework)
            - `isset`
    - Store & Read Data
        - `@` operator
        - `file_get_contents`, `file_put_contents`
        - `fopen`, `fwrite`, `fclose` (Leave it in a homework)
        - serialization
            - `explode`, `implode`
            - `serialize`, `unserialize` (Leave it in a homework)
        - `$_FILE`, file_handling (Leave it in a homework)
- Third Try: Cart Page
    - Multiple pages
        - Page redirect
            - `header('Location: xxx.php')`
    - Split code & logic
        - `function`, scope
            - type declaration (PHP 7 only)
            - strict types (PHP 7 only)
        - External files: `require`
        - Split logic & view: `include`
            - PHP Template
            - Heredoc, Nowdoc
        - `define`, `const`
    - Store user status
        - Cookie / LocalStorage
        - Session, `$_SESSION`
            - Manage session
            - `NULL`, `isset`, `unset`, `empty`
        - Associative Array
            - Advanced `foreach`
            - Array & Reference (Leave it in a homework)
- Another Try: Wrap cart into a component
    - Code Style: PSR-0, PSR-2
    - Class & Namespace: PSR-4
        - `__construct`
        - Inheritance `public`, `protected`, `private`
        - `$this`
    - Package Manager: PEAR & Composer
    - Exception
        - PHP Error Handling
        - PHP Exception Handling
        - SPL Exception Wrappers
    - SPL (Standard PHP Libraries)
    - Use component in our project
- Assignment:
    - (Easy) Single page `todo.php`
        - (Medium) With image upload
    - (Medium) [Array & Reference] The output of the following code looks strange. Try to figure out why.
```php
<?php
$array = ['a', 'b', 'c', 'd'];
$array2 = [1, 2, 3, 4];
foreach ($array as &$item) {
    echo $item . PHP_EOL;
}

foreach ($array2 as $item) {
    echo $item . PHP_EOL;
}

echo implode($array, ',') . PHP_EOL;    // Outputs a,b,c,4
echo implode($array2, ',') . PHP_EOL;   // Outputs 1,2,3,4
```
    - (Medium) Login page `index.php`, `private.php`, `login.php`, `logout.php`
    - (Hard) Implement an event registering site
        - Split logic & view
        - Suggested structure
            - `register.php`
            - `event.php`
            - `libraries/functions.php`
            - `libraries/Event.php`
            - `libraries/File.php`
            - `views/register_form.php`
            - `views/register_duplicate.php`
            - `views/register_success.php`
            - `views/event_detail.php`
            - `views/event_register_result.php`
            - `views/event_exit_success.php`
