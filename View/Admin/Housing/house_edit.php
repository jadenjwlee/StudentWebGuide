<div id="main">
    <h1>Add House</h1>
    <form action="index.php" method="post" id="edit_house" enctype="multipart/form-data" >
        <input type="hidden" name="action" value="edit_house" />
        
        <input type="hidden" name="id" value="<?php echo $house->getId(); ?>" />
        <table>
            <tr>
                <th>Title:</th>
                <td><input type="input" name="title" value="<?php echo $house->getTitle(); ?>" size="100"/></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><input type="input" name="address"  value="<?php echo $house->getAddress(); ?>"  size="100"/></td>
            </tr>
            <tr>
                <th>Name:</th>
                <td><input type="input" name="name"  value="<?php echo $house->getName(); ?>"  size="100"/></td>
            </tr>
            <tr>
                <th>Tel:</th>
                <td><input type="input" name="tel"  value="<?php echo $house->getTel(); ?>"  size="100"/></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="input" name="email"  value="<?php echo $house->getEmail(); ?>"  size="100"/></td>
            </tr>
            <input type="hidden" name="googlemap"  value="<?php echo $house->getGooglemap(); ?>" />
            <tr>  
                <th>Occupancy Date:</th>
                <td><input type="input" name="occupancy_date"  value="<?php echo $house->getOccupancyDate(); ?>"  size="100"/></td>
            </tr>
            <input type="hidden" name="status"  value="<?php echo $house->getStatus(); ?>" />
            <tr>
                <th>File::</th>
                <td><input type="file" name="image"  id="fileToUpload"  size="100"/></td>
            </tr>
            <tr>
                <th>img:</th>
                <td><input type="input" name="img"  value="<?php echo $house->getImg(); ?>"  size="100"/>
                <input type="hidden" name="previmg"  value="<?php echo $house->getImg(); ?>" /></td>
            </tr>
            <tr>
                <th colspan="2">Description:</th>
            </tr>
            <tr>
                <td colspan="2">
                        <textarea class="ckeditor" cols="80" id="editor1" name="description" rows="10">
                        <?php echo $house->getDescription(); ?>
			</textarea>
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
