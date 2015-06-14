<?php include "../Home/header.php";  ?>  
<?php
require("../../../Model/database.php");
require("../../../Model/housing.php");
require("../../../Model/housing_db.php");

$condition = "";

// Get the current category
if(isset($_GET['$occupancy_date'])){
    $category_parm = $_GET['$occupancy_date'];
    $condition = $category_parm;
}

?>

<script  src="../../JS/calendar.js"></script>
<script  src="../../JS/calendar_jquery.js"></script>

<h1>OFF-CAMPUS HOUSING</h1>
<br /><br />                
<form action="housing.php" method="GET">
<b>Date:</b>
<input type="date" id="event_date" name="$occupancy_date" size="20" />
<input type="submit" value="Submit" name="submit"></p>
</form>

<?php

$houses = HouseDB::getHousing($condition);


echo "<br />";
echo '<table class="table" border=1>';
?>
<tr>
    <th>Title</th>
    <th>Address</th>
    <th>Name</th>
    <th>Email</th>
</tr>

<?php
//Display toprecipe list data
foreach ($houses as $house) :
    echo "<tr>";
    echo "<td>";
    echo substr($house->getTitle(),0,30);
    echo "</td>";
    echo "<td>";
    echo substr($house->getAddress(),0,30);
    echo "</td>";
    echo "<td>";
    echo $house->getName();
    echo "</td>";
    echo "<td>";
    echo $house->getEmail();
    echo "</td>";
    echo "</tr>";
endforeach;
echo "</table>";

?>
<?php include "../Home/footer.php";  ?>  
