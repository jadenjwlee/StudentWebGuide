<div id="main">
    <h1>House Detail</h1>
        <label>Title:</label>
        <?php echo $house->getTitle(); ?>
        <br />

        <label>Address:</label>
        <?php echo $house->getAddress(); ?>
        <br />

        <label>Name:</label>
        <?php echo $house->getName(); ?>
        <br />

        <label>Tel:</label>
        <?php echo $house->getTel(); ?>
        <br />

        <label>Email:</label>
        <?php echo $house->getEmail(); ?>
        <br />

        <label>Google Map:</label>
        <?php echo $house->getGooglemap(); ?>
        <br />
        
        <label>Occupancy Date:</label>
        <?php echo $house->getOccupancyDate(); ?>
        <br />

        <label>Status:</label>
        <?php echo $house->getStatus(); ?>
        <br />

        <label>img:</label>
        <?php echo $house->getImg(); ?>
        <br />
        
        <label>Description:</label>
        <?php echo $house->getDescription(); ?>
        <br />
        
    <p><a href="index.php?action=list_houses">View House List</a></p>

</div>
