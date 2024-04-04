<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery Service</title>
</head>
<body>
<h1>Menus</h1>
<?php if (!empty($createdMenus)): ?>
    <?php foreach ($createdMenus as $menu): ?>
        <h2><?php echo $menu['name']; ?></h2>
        <h2><?php echo $menu['price']; ?>€</h2>
        <ul>
            <?php foreach ($menu['foods'] as $food): ?>
                <li><?php echo $food; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
<?php else: ?>
    <p>No menus available.</p>
<?php endif; ?>

<h2>Create a New Menu</h2>
<form action="../controllers/controller.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="price">Price:</label>
    <input type="text" id="price" name="price">
    <br><br>
    <select name="food1" id="food1">
        <option value="pizza">Pizza</option>
        <option value="ramen">Ramen</option>
        <option value="tenders">Tenders</option>
        <option value="raclette">Raclette</option>
    </select>
    <select name="food2" id="food2">
        <option value="pizza">Pizza</option>
        <option value="ramen">Ramen</option>
        <option value="tenders">Tenders</option>
        <option value="raclette">Raclette</option>
    </select>
    <select name="food3" id="food3">
        <option value="pizza">Pizza</option>
        <option value="ramen">Ramen</option>
        <option value="tenders">Tenders</option>
        <option value="raclette">Raclette</option>
    </select>
    <script>console.log("test1");</script>
    <input type="submit" value="Create Menu">
</form>
</body>
</html>
