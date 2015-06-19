<?php
class HouseDB {

    public static function getHousing($occupancy_date, $address) {
        $db = Database::getDB();
        
        if( $occupancy_date != "" ){
            $query = "SELECT * FROM housing where ( (DATE_FORMAT(occupancy_date, '%m/%d/%Y') = '$occupancy_date' ) or (DATE_FORMAT(occupancy_date, '%Y-%m-%d') = '$occupancy_date' ))";
            if( $address != "" ){
                $query = "SELECT * FROM housing where ( (DATE_FORMAT(occupancy_date, '%m/%d/%Y') = '$occupancy_date' ) or (DATE_FORMAT(occupancy_date, '%Y-%m-%d') = '$occupancy_date' )) AND address like '%$address%' ";
            }
        }else{
            if( $address != "" ){
                $query = "SELECT * FROM housing where address like '%$address%' ";
            }else{
                $query = "SELECT * FROM housing";
            }
        }

        $result = $db->query($query);
        $houses = array();

        foreach ($result as $row) {
            $house = new House(
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
            $houses[] = $house;
        }
        return $houses;
    }

    public static function getHousingById($id) {
        $db = Database::getDB();
        
        $query = "SELECT * FROM housing where id = $id";

        $results = $db->query($query);
        $result = $results->fetch();

        $house = new House(
                                   $result['id'],
                                   $result['title'],
                                   $result['address'],
                                   $result['name'],
                                   $result['tel'],
                                   $result['email'],
                                   $result['googlemap'],
                                   $result['occupancy_date'],
                                   $result['status'],
                                   $result['img'],
                                   $result['description']
                    );

        return $house;
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
        $occupancy_date = $house->getOccupancyDate();
        $status         = $house->getStatus();
        $img            = $house->getImg();
        $description    = $house->getDescription();
       
        $query =
            "INSERT INTO housing
                 (title, address, name, tel, email, googlemap, occupancy_date, status, img, description)
             VALUES
                 ('$title', '$address', '$name', '$tel', '$email', '$googlemap', '$occupancy_date', '$status', '$img', '$description' )";

        $row_count = $db->exec($query);
        return $row_count;
    }

    public static function updateHouse($house) {
        $db = Database::getDB();

        $id             = $house->getId();
        $title          = $house->getTitle();
        $address        = $house->getAddress();
        $name           = $house->getName();
        $tel            = $house->getTel();
        $email          = $house->getEmail();
        $googlemap      = $house->getGooglemap();
        $occupancy_date = $house->getOccupancyDate();
        $status         = $house->getStatus();
        $img            = $house->getImg();
        $description    = $house->getDescription();
        
        $query = "UPDATE housing SET "
                . "title           = '$title' "
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