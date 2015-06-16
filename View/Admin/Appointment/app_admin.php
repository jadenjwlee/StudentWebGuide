<?php 
	
	if(isset($_POST['action'])) {
		$action = $_POST['action'];
	} else{
		//First time when page load, assgin 'list_appointment' to $action
		$action = 'list_appointment';
	}

	if($action = 'list_appointment'){

	}



	//Get database connection
	require_once('../../../Controller/DatabaseConn.php');
	$db = Database::getDB();

	//Get appointment table
	$query = 'SELECT * FROM appointment';
	$result = $db -> query($query);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../../style/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../style/admin_layout.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../JS/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="admin.php">
					Inter Student Web Guide - Administrator
				</a>
			</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
			<form class="navbar-form navbar-left" method="GET" role="search">
				<div class="form-group">
					<input type="text" name="q" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Account
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="../../Public/Home/home.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="#">Home</a></li>
				<li class="active"><a href="../Appointment/app_admin.php">Appointment</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
		</div>
		<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Appointment for International Center
                </div>
                <div class="panel-body">
                	<div class="row col-md-6 col-md-offset-2 custyle">
    					<table id="app_table" class="table table-striped custab">
    						<thead>
        						<tr>
        							<th>Student Number</th>
            						<th>Name</th>
            						<th>Email</th>
            						<th>Time</th>
            						<th>Instructors</th>
            						<th class="text-center">Action</th>
        						</tr>
    						</thead>
    							<?php foreach($result as $results) : ?>
					            <tr>
					            	<td><?php echo $results['id']; ?></td>
					                <td><?php echo $results['name']; ?></td>
					                <td><?php echo $results['email']; ?></td>
					                <td><?php echo $results['time']; ?></td>
					                <td><?php echo $results['instructor']; ?></td>
					                <td class="text-center">
					                	<a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
					                	
					                	<a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
					            </tr>
					        	<?php endforeach; ?>
					    </table>
    				</div>
                </div>
            </div>
		</div>
		<footer class="pull-left footer">
			<p class="col-md-12">
				<hr class="divider">
				Copyright &COPY; 2015 Humber Student Web Guide
			</p>
		</footer>
	</div>

</body>
</html>