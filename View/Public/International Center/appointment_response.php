<?php 

	//Get user input
	$id = $_POST['id'];
	$name = $_POST['name'];
	$date = $_POST['date'];
	$email = $_POST['email'];


	//validate user input
	if(empty($id) || empty($name) || empty($date) || empty($email)){
		print '<script type = "text/javascript">';
		print 'alert("Please enter a valid text!")';
		print '</script>';
	}
	else{
		//if valid, store it into database
		require_once('../../../Controller/DatabaseConn.php');

		$db = Database::getDB();

		$query = "INSERT INTO appointment
								(id, name, email, time)
						 VALUES
						 		('$id', '$name', '$email', '$date')";
		$db -> exec($query);

		print '<script type = "text/javascript">';
		print 'alert("You have success book an appointment, we will email you once assign an instructor")';
		print '</script>';
	
		include ('International_center.php');
	}


?>