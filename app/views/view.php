<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery Service</title>
</head>
<body>
<h1>Menu Items</h1>
<ul>
    <?php foreach ($menuItems as $menuItem): ?>
        <li><?php echo $menuItem['name']; ?> - $<?php echo $menuItem['price']; ?></li>
    <?php endforeach; ?>
</ul>

<h2>Create New Menu Item</h2>
<form action="../controllers/controller.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="price">Price:</label>
    <input type="text" id="price" name="price">
    <input type="submit" value="Create Menu Item">
</form>
</body>
</html>
<?php
