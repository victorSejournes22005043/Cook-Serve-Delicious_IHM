<?php
require_once '../models/MenuModel.php';

// Create a new instance of the MenuModel
$menuModel = new MenuModel();

// Process form submission for creating a new menu item
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $foods = array($_POST['food1'], $_POST['food2'], $_POST['food3']);

    // Assuming you have a function in MenuModel to handle menu creation
    $createdMenu = $menuModel->createMenu($name, $price, $foods);
}

// Fetch all menus
$createdMenus = $menuModel->getAllMenus();

// Load the view
include '../views/view.php';
?>
