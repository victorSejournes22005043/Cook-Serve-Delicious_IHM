<?php
class MenuModel {
    private $menus = array();

    public function createMenu($name, $price, $foods) {
        // Assuming you have a function in MenuModel to handle menu creation
        $newMenu = array(
            'name' => $name,
            'price' => $price,
            'foods' => $foods
        );

        // Add the new menu to the internal array
        $this->menus[] = $newMenu;

        // Placeholder return statement
        return $newMenu;
    }

    public function getAllMenus() {
        // Return all menus stored in the internal array
        return $this->menus;
    }
}
?>
