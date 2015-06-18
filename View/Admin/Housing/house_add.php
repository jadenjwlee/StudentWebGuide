<div id="main">
    <h1>Add House</h1>
    <form action="index.php" method="post" id="add_house_form">
        <input type="hidden" name="action" value="add_house" />

        <label>Title:</label>
        <input type="input" name="title" />
        <br />

        <label>Address:</label>
        <input type="input" name="address" />
        <br />

        <label>Name:</label>
        <input type="input" name="name" />
        <br />

        <label>Tel:</label>
        <input type="input" name="tel" />
        <br />

        <label>Email:</label>
        <input type="input" name="email" />
        <br />

        <label>Google Map:</label>
        <input type="input" name="googlemap" />
        <br />
        
        <label>Occupancy Date:</label>
        <input type="input" name="occupancy_date" />
        <br />

        <label>Status:</label>
        <input type="input" name="status" />
        <br />

        <label>img:</label>
        <input type="input" name="img" />
        <br />
        
        <label>Description:</label>
        <input type="input" name="description" />
        <br />
        
        <label>&nbsp;</label>
        <input type="submit" value="Add House" />
        <br />
    </form>
    <p><a href="index.php?action=list_houses">View House List</a></p>

</div>
