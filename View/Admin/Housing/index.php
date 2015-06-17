<?php
require("../../../Model/database.php");
require("../../../Model/housing.php");
require("../../../Model/housing_db.php");

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_houses';
}

$condition = "";
if(isset($_GET['$occupancy_date'])){
    $category_parm = $_GET['$occupancy_date'];
    $condition = $category_parm;
}


if ($action == 'list_houses') {
    $houses = HouseDB::getHousing($condition);

    // Display the house list
    include('house_list.php');
} else if ($action == 'delete_house') {
    // Get the IDs
    $id = $_POST['id'];

    // Delete the house
    HouseDB::deleteHouse($id);

    // Display the House List page for the current category
    header("Location: .");
} else if ($action == 'show_add_form') {
    include('house_add.php');
} else if ($action == 'add_house') {
    
    $title          = $_POST['title'];
    $address        = $_POST['address'];
    $name           = $_POST['name'];
    $tel            = $_POST['tel'];
    $email          = $_POST['email'];
    $googlemap      = $_POST['googlemap'];
    $occupancy_date = $_POST['occupancy_date'];
    $status         = $_POST['status'];
    $img            = $_POST['img'];
    $description    = $_POST['description'];

    
    // Validate the inputs
    if (empty($title) || empty($address) || empty($name)) {
        $error = "Invalid house data. Check all fields and try again.";
    } else {
        $house = new House($id, $title, $address, $anme, $tel, $email, $googlemap, $occupancy_date
                            ,$status, $img, $description);
        HouseDB::addHouse($house);

        // Display the House List page for the current category
        header("Location: .");
    }
}
?>