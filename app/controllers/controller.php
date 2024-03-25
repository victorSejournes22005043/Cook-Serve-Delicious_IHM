<?php
require_once '../models/MenuModel.php';

// Create a new instance of the MenuModel
$menuModel = new MenuModel();

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    // Validate inputs (not implemented in this example)
    // Add the menu item to the database
    $menuModel->createMenuItem($name, $price);
}

// Get all menu items
$menuItems = $menuModel->getAllMenuItems();

// Load the view
include '../views/view.php';
?>
