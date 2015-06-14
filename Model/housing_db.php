<?php
class HouseDB {

    public static function getHousing($condition) {
        $db = Database::getDB();
        
        if( $condition != "" ){
            $query = "SELECT * FROM housing where DATE_FORMAT(occupancy_date, '%m/%d/%Y') = '$condition' ";
        }else{
            $query = "SELECT * FROM housing";
        }
        
        $result = $db->query($query);
        $vinesports = array();

        foreach ($result as $row) {
            $vinesport = new House(
                                   $row['id'],
                                   $row['title'],
                                   $row['address'],
                                   $row['name'],
                                   $row['tel'],
                                   $row['email'],
                                   $row['googlemap'],
                                   $row['occupancy_date'],
                                   $row['status'],
                                   $row['img'],
                                   $row['description']
                    );
            $vinesports[] = $vinesport;
        }
        return $vinesports;
    }
    
    public static function deleteHouse($id) {
        $db = Database::getDB();
        $query = "DELETE FROM housing
                  WHERE id = '$id'";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public static function addHouse($house) {
        $db = Database::getDB();

        $id             = $house->getId();
        $title          = $house->getTitle();
        $address        = $house->getAddress();
        $name           = $house->getName();
        $tel            = $house->getTel();
        $email          = $house->getEmail();
        $googlemap      = $house->getGooglemap();
        $occupancy_date = $house->getOccupancy_date();
        $status         = $house->getStatus();
        $img            = $house->getImg();
        $description    = $house->getDescription();
       
        $query =
            "INSERT INTO volunteer
                 (title, address, name, tel, email, googlemap, occupancy_date, status, img, description)
             VALUES
                 ('$title', '$address', '$name', '$tel', '$email', '$googlemap', '$occupancy_date', '$status', '$img', '$description' )";

        $row_count = $db->exec($query);
        return $row_count;
    }

    public static function updateTopRecipes($house) {
        $db = Database::getDB();

        $title          = $house->getTitle();
        $address        = $house->getAddress();
        $name           = $house->getName();
        $tel            = $house->getTel();
        $email          = $house->getEmail();
        $googlemap      = $house->getGooglemap();
        $occupancy_date = $house->getOccupancy_date();
        $status         = $house->getStatus();
        $img            = $house->getImg();
        $description    = $house->getDescription();
        
        $query = "UPDATE top_recipes SET "
                . ",title           = '$title' "
                . ",address         = '$address' "
                . ",name            = '$name' "
                . ",tel             = '$tel' "
                . ",email           = '$email' "
                . ",googlemap       = '$googlemap' "
                . ",occupancy_date  = '$occupancy_date' "
                . ",status          = '$status' "
                . ",img             = '$img' "
                . ",description     = '$description' "
                . "WHERE id         = '$id'";
        
        $row_count = $db->exec($query);
        return $row_count;
    }

}
?>