<?php include "../Home/header.php";  ?>  
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

$poccupancy_date = "";
$paddress = "";
if(isset($_GET['occupancy_date'])){
    $poccupancy_date = $_GET['occupancy_date'];
}

if(isset($_GET['address'])){
    $paddress = $_GET['address'];
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else if(isset($_POST['id'])){
    $id = $_POST['id'];
}
if ($action == 'list_houses') {
    $houses = HouseDB::getHousing($poccupancy_date, $paddress);

    // Display the house list
    include('house_list.php');

    
}else if ($action == 'show_detail_form') {
    $house = HouseDB::getHousingById($id);

    // Display the house list
    include('house_detail.php');
    
}

?>
<?php include "../Home/footer.php";  ?>  
