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
    
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $file_error = $_FILES['image']['error'];

    //validate file extension (ensures file is image)
    if ($_FILES['image']['type'] != 'image/jpeg' 
        && $_FILES['image']['type'] != 'image/jpg' 
        && $_FILES['image']['type'] != 'image/gif' 
        && $_FILES['image']['type'] != 'image/png') {

        echo "Please upload only Image file";
        exit();
    }

    //handles error
    if ($file_error > 0) {
        echo "Error : ";
        switch ($file_error) {
            case 1:
                echo "File exceeded upload_max_filesize";
                break;
            case 2:
                echo "File exceeded max_filesize";
                break;
            case 3:
                echo "File partially uploaded";
                break;
            case 4:
                echo "No file uploaded";
                break;
        }
    }

    //handle file size. Max size 5MB
    $max_file_size = 50000000;
    if ($file_size > $max_file_size) {
        echo "File size should not exceed 2mb";
        exit();
    }

    //tmp folder
    $t_name = $_FILES['image']['tmp_name'];
    //declaring the folder to be uploaded into
    $dir = "../../../Upload";
    //this is the path of the specific image uploaded
    //$path is to be inserted into db

    $filename = $_POST['img'].".jpg";
    $img_path = $dir . "/" . $filename;

    if ($img_path != ' ') {
        //validating the file being uploaded from tmp folder to $dir folder
        if (move_uploaded_file($t_name, $dir . "/" . $filename)) {
            //here we are storing the image name and file name to the db (not the path)
            echo 'Upload success.';
        } else {
            echo 'Upload failed.';
        }
    }
    
    ////////////////////////////////////////////////
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
        $house = new House('', $title, $address, $name, $tel, $email, 
                    $googlemap, $occupancy_date, $status, $img, $description);
        HouseDB::addHouse($house);

        // Display the House List page for the current category
        header("Location: .");
    }

} else if ($action == 'show_edit_form') {
    $house = HouseDB::getHousingById($id);

    include('house_edit.php');

    
} else if ($action == 'edit_house') {

    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $file_error = $_FILES['image']['error'];

    //validate file extension (ensures file is image)
    if ($_FILES['image']['type'] != 'image/jpeg' 
        && $_FILES['image']['type'] != 'image/jpg' 
        && $_FILES['image']['type'] != 'image/gif' 
        && $_FILES['image']['type'] != 'image/png') {

        echo "Please upload only Image file";
        exit();
    }

    //handles error
    if ($file_error > 0) {
        echo "Error : ";
        switch ($file_error) {
            case 1:
                echo "File exceeded upload_max_filesize";
                break;
            case 2:
                echo "File exceeded max_filesize";
                break;
            case 3:
                echo "File partially uploaded";
                break;
            case 4:
                echo "No file uploaded";
                break;
        }
    }

    //handle file size. Max size 5MB
    $max_file_size = 50000000;
    if ($file_size > $max_file_size) {
        echo "File size should not exceed 2mb";
        exit();
    }

    //tmp folder
    $t_name = $_FILES['image']['tmp_name'];
    //declaring the folder to be uploaded into
    $dir = "../../../Upload";
    //this is the path of the specific image uploaded
    //$path is to be inserted into db

    $filename = $_POST['img'].".jpg";
    $img_path = $dir . "/" . $filename;

    if ($img_path != ' ') {

        if (file_exists($dir . "/" .$_POST['previmg'].".jpg")) {
            unlink($dir . "/" .$_POST['previmg'].".jpg");
        }
        
        //validating the file being uploaded from tmp folder to $dir folder
        if (move_uploaded_file($t_name, $dir . "/" . $filename)) {
            //here we are storing the image name and file name to the db (not the path)
            echo 'Upload success.';
        } else {
            echo 'Upload failed.';
        }
    }
    
    //////////////////////////////////////////////////
    $id             = $_POST['id'];
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
        $house = new House($id, $title, $address, $name, $tel, $email, 
                    $googlemap, $occupancy_date, $status, $img, $description);
        HouseDB::updateHouse($house);

        // Display the House List page for the current category
        header("Location: .");
    }
}

?>