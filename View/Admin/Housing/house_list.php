<script  src="../../JS/calendar.js"></script>
<script  src="../../JS/calendar_jquery.js"></script>

<h1>OFF-CAMPUS HOUSING</h1>
<br /><br />                
<form action="." method="GET">
<b>Date:</b>
<input type="date" id="event_date" name="occupancy_date" size="20" />
<b>Address:</b>
<input type="text" id="address" name="address" size="20" />
<input type="submit" value="Submit" name="submit"></p>
</form>

 <?php

echo "<br />";
echo '<table class="table" border=1>';
?>
<tr>
    <th>Title</th>
    <th>Address</th>
    <th>Name</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>    
</tr>

<?php
//Display toprecipe list data
foreach ($houses as $house) :
    echo "<tr>";
    echo "<td>";
?>
    <a href="?action=show_detail_form&id=<?php echo $house->getId() ?>" >
<?php
    echo substr($house->getTitle(),0,30);
    echo "</a>";
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
?>
    <td><form action="." method="post"
                          id="edit_house_form">
                    <input type="hidden" name="action"
                           value="show_edit_form" />
                    <input type="hidden" name="id"
                           value="<?php echo $house->getId(); ?>" />
                    <input type="submit" value="Edit" />
    </form></td>
    <td><form action="." method="post"
                          id="delete_house_form">
                    <input type="hidden" name="action"
                           value="delete_house" />
                    <input type="hidden" name="id"
                           value="<?php echo $house->getId(); ?>" />
                    <input type="submit" value="Delete" />
    </form></td>
<?php
    echo "</tr>";
endforeach;
echo "</table>";

?>
<p><a href="?action=show_add_form">Add House</a></p>
