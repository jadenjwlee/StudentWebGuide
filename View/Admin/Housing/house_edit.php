<div id="main">
    <h1>Add House</h1>
    <form action="index.php" method="post" id="edit_house" enctype="multipart/form-data" >
        <input type="hidden" name="action" value="edit_house" />
        
        <input type="hidden" name="id" value="<?php echo $house->getId(); ?>" />
        <table>
            <tr>
                <th>Title:</th>
                <td><input type="input" name="title" value="<?php echo $house->getTitle(); ?>" /></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><input type="input" name="address"  value="<?php echo $house->getAddress(); ?>" /></td>
            </tr>
            <tr>
                <th>Name:</th>
                <td><input type="input" name="name"  value="<?php echo $house->getName(); ?>" /></td>
            </tr>
            <tr>
                <th>Tel:</th>
                <td><input type="input" name="tel"  value="<?php echo $house->getTel(); ?>" /></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="input" name="email"  value="<?php echo $house->getEmail(); ?>" /></td>
            </tr>
            <tr>
                <th>Google Map:</th>
                <td><input type="input" name="googlemap"  value="<?php echo $house->getGooglemap(); ?>" /></td>
            </tr>
            <tr>  
                <th>Occupancy Date:</th>
                <td><input type="input" name="occupancy_date"  value="<?php echo $house->getOccupancyDate(); ?>" /></td>
            </tr>
            <tr>
                <th>Status:</th>
                <td><input type="input" name="status"  value="<?php echo $house->getStatus(); ?>" /></td>
            </tr>
            <tr>
                <th>File::</th>
                <td><input type="file" name="image"  id="fileToUpload" /></td>
            </tr>
            <tr>
                <th>img:</th>
                <td><input type="input" name="img"  value="<?php echo $house->getImg(); ?>" />
                <input type="hidden" name="previmg"  value="<?php echo $house->getImg(); ?>" /></td>
            </tr>
            <tr>
                <th colspan="2">Description:</th>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea name="description"rows="4" cols="50"><?php echo $house->getDescription(); ?></textarea>
                </td>
            </tr>
        </table>

        <br />
        
        <label>&nbsp;</label>
        <input type="submit" value="Modify House" />
        <br /><br />
    </form>
    <p><a href="index.php?action=list_houses">View House List</a></p>

</div>
