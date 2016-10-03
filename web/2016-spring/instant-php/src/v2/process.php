<?php
$areas = ['Area A', 'Area B', 'Area C', 'Area D'];      // Set area data with an array

if (empty($_POST['name'])) {                            // Check name value
    die('Name required');                               // Print error message and exit
}

if (!isset($_POST['quantity']) ||
    !is_array($_POST['quantity'])) {                    // Check quantity and ensure it's an array
    die('Quantity required');                           // Print error message and exit
}

$name = trim($_POST['name']);                           // Fetch name from form data and trim it
$quantities = $_POST['quantity'];                       // Fetch quantity array from form data
for ($i = 0; $i < count($areas); ++$i) {                // Iterate $areas array
    $quantities[$i] = intval($quantities[$i]);          // Fetch quantity[i] and convert it to an integer
    if ($quantities[$i] > 5 || $quantities[$i] < 0) {   // If quantity[i] is not in the range of [0, 5]
        die('Quantity should be between 0 and 5');      // Print error message and exit
    }
}

// Prepare data to store on our disk
$data = "Name: $name ";                                 // Set $data with "Name: xxx"
$data .= "Tickets: " . implode($quantities, ',');       // Append ticket info with turning $quantities into a string
$data .= PHP_EOL;                                       // Append EOL (usually "\n" in Linux) character

// Open data.txt and write our data to this file
$result = @file_put_contents('data.txt', $data, FILE_APPEND);
if ($result === false) {                                // If the writing operation failed
    $error = error_get_last();                          // Get last error
    echo $error['message'] . '<br>';                    // Print error message
    die('Failed to write data into data.txt');          // Print failure info and exit
}

// Render HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ticket Ordering</title>
</head>
<body>
    <h1>Ticket Ordering</h1>
    <p>Your order was created successfully.</p>
    <ul>
        <li>Name: <?= $name ?></li>
        <li>Tickets:
            <ul>
            <?php foreach ($areas as $i => $area): ?>
                <li><?= "$area: $quantities[$i] tickets" ?></li>
            <?php endforeach; ?>
            </ul>
        </li>
    </ul>
</body>
</html>
