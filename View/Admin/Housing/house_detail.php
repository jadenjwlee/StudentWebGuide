<div id="main">
    <h1>House Detail</h1>

    <ul>
    <li style="display:inline; float:left; margin-right:8px;">
        <iframe class="map" width="325" height="250" frameborder="1" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $house->getAddress(); ?>&amp;aq=&amp;sspn=0.111915,0.295601&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo $house->getAddress(); ?>&amp;t=m&amp;z=12&amp;output=embed" w></iframe>
    </li>
    <li style="display:inline; float:top; margin-right:8px;">
        <img src="../../../Upload/<?php echo $house->getImg(); ?>.jpg" width="325" height="250" >
    </li>
    <br /><br />
    <div>
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
        <pre>
        <?php echo $house->getDescription(); ?>
        </pre>
        <br />
        
    <p><a href="index.php?action=list_houses">View House List</a></p>
    </div>
</div>