<?php
class MenuModel {
    public function getAllMenuItems() {
        // Mael j'espère que la base de donné que tu cook va être délicieuse
        $menuItems = array(
            array("id" => 1, "name" => "Pizza", "price" => 10),
            array("id" => 2, "name" => "Burger", "price" => 8),
            array("id" => 3, "name" => "Salad", "price" => 6)
        );
        return $menuItems;
    }

    public function createMenuItem($name, $price) {
        // Placeholder function to add a new menu item to the database
        // You would replace this with actual database insertion
        // For simplicity, we are not including database interaction in this example
        return true;
    }
}
?>
