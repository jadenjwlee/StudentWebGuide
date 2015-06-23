<?php

	//Get user input
	$student_id = $_POST['student_id'];
	$instructor = $_POST['instructor'];
	$email = $_POST['email'];
	//$email = "derrickchen0915@gmail.com";

	//Get database connection
	require_once('../../../Controller/DatabaseConn.php');
	$db = Database::getDB();

	//Set update query
	$query = "UPDATE appointment SET instructor = '$instructor' WHERE id = '$student_id'";
	$db -> exec($query);

	//Send email
	$msg = "Your appointment has been tracked, '$instructor' will be your instructor at International Center";
	$subject = "appointment for Humber International Center";
	$headers = "From: Student Web Guide";
	mail($email, $subject, $msg, $headers);

	print '<script type = "text/javascript">';
	print 'alert("Update successful")';
	print '</script>';

	include ('app_admin.php');
?>