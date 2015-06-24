<div id="main">
    <h1>Add House</h1>
    <form action="index.php" method="post" id="add_house_form" enctype="multipart/form-data" >
        <input type="hidden" name="action" value="add_house" />

    <table>
    <tr>
        <th>Title:</th>
        <td><input type="input" name="title" /></td>
    </tr>
    <tr>				
        <th>Address:</th>
    	<td><input type="input" name="address" /></td>
    </tr>
    <tr>				
        <th>Name:</th>
        <td><input type="input" name="name" /></td>
    </tr>
    <tr>				
        <th>Tel:</th>
        <td><input type="input" name="tel" /></td>
    </tr>
    <tr>				
        <th>Email:</th>
        <td><input type="input" name="email" /></td>
    </tr>
    <tr>				
        <th>Google Map:</th>
        <td><input type="input" name="googlemap" /></td>
    </tr>
    <tr>				
        <th>Occupancy Date:</th>
        <td><input type="input" name="occupancy_date" /></td>
    </tr>
    <tr>				
        <th>Status:</th>
        <td><input type="input" name="status" /></td>
    </tr>
    <tr>				
        <th>File::</th>
        <td><input type="file" name="image"  id="fileToUpload" /></td>
    </tr>
    <tr>				
        <th>img:</th>
        <td><input type="input" name="img" /></td>
    </tr>
    <tr>
        <th colspan="2">Description:</th>
    </tr>
    <tr>
        <td colspan="2">
            <textarea class="ckeditor" cols="80" id="editor1" name="description" rows="10">
            </textarea>
        </td>
    </tr>
    </table>				
    
    <br />
        
    <label>&nbsp;</label>
    <input type="submit" value="Add House" />
    <br /><br />
        
    </form>
    <p><a href="index.php?action=list_houses">View House List</a></p>

</div>
