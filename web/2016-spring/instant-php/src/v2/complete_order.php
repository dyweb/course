<?php
$areas = ['Area A', 'Area B', 'Area C', 'Area D'];      // Set area data with an array
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ticket Ordering</title>
</head>
<body>
    <h1>Ticket Ordering</h1>
    <p>You are ordering tickets of the concert <em>Hello World</em>.</p>
    <form method="POST" action="process.php">
        <p>
            <label>Name</label>
            <input name="name" type="text" placeholder="Your Name">
        </p>
        <?php foreach ($areas as $i => $area): ?>
        <p>
            <?= $area ?><br>
            <label>Quantity</label>
            <input name="<?= "quantity[$i]" ?>" type="number" placeholder="Quantity" min="0" max="5" style="width: 100px;">
        </p>
        <?php endforeach; ?>
        <button>Submit</button>
    </form>
</body>
</html>
