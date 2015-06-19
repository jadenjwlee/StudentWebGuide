<div id="main">
    <h1>Add House</h1>
    <form action="index.php" method="post" id="edit_house" enctype="multipart/form-data" >
        <input type="hidden" name="action" value="edit_house" />
        
        <input type="hidden" name="id" value="<?php echo $house->getId(); ?>" />

        <label>Title:</label>
        <input type="input" name="title" value="<?php echo $house->getTitle(); ?>" />
        <br />

        <label>Address:</label>
        <input type="input" name="address"  value="<?php echo $house->getAddress(); ?>" />
        <br />

        <label>Name:</label>
        <input type="input" name="name"  value="<?php echo $house->getName(); ?>" />
        <br />

        <label>Tel:</label>
        <input type="input" name="tel"  value="<?php echo $house->getTel(); ?>" />
        <br />

        <label>Email:</label>
        <input type="input" name="email"  value="<?php echo $house->getEmail(); ?>" />
        <br />

        <label>Google Map:</label>
        <input type="input" name="googlemap"  value="<?php echo $house->getGooglemap(); ?>" />
        <br />
        
        <label>Occupancy Date:</label>
        <input type="input" name="occupancy_date"  value="<?php echo $house->getOccupancyDate(); ?>" />
        <br />

        <label>Status:</label>
        <input type="input" name="status"  value="<?php echo $house->getStatus(); ?>" />
        <br />

        <label>File::</label>
        <input type="file" name="image"  id="fileToUpload" />
        <br />        

        <label>img:</label>
        <input type="input" name="img"  value="<?php echo $house->getImg(); ?>" />
        <input type="hidden" name="previmg"  value="<?php echo $house->getImg(); ?>" />
        <br />
        
        <label>Description:</label>
        <input type="input" name="description"  value="<?php echo $house->getDescription(); ?>" />
        <br />
        
        <label>&nbsp;</label>
        <input type="submit" value="Modify House" />
        <br />
    </form>
    <p><a href="index.php?action=list_houses">View House List</a></p>

</div>
