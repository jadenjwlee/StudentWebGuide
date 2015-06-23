<?php

	$student_id = $_POST['student_id'];
	
	//Get result from database useing id
	require_once('../../../Controller/DatabaseConn.php');
	$db = Database::getDB();
	$query = "SELECT * FROM appointment WHERE id = '$student_id'";

	$detail = $db -> query($query);
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
                    <strong>Appointment for International Center</strong>
                </div>
                <div class="panel-body">
                	<form action="update.php" method="post">
                	<?php foreach($detail as $details) : ?>
                	<input type="hidden" name="student_id" value="<?php echo $details['id']; ?>">
                	<input type="hidden" name="email" value="<?php echo $details['email']; ?>">
                    <div class="panel-body form-horizontal payment-form">
	                    <div class="form-group">
	                        <label for="id" class="col-sm-3 control-label">Student ID</label>
	                        <label class="col-sm-3 control-label"><?php echo $details['id']; ?></label>
	                    </div>
	                    <div class="form-group">
	                        <label for="name" class="col-sm-3 control-label">Name</label>
	                        <label class="col-sm-3 control-label"><?php echo $details['name']; ?></label>
	                    </div> 
	                    <div class="form-group">
	                        <label for="name" class="col-sm-3 control-label">Email</label>
	                        <label class="col-sm-3 control-label"><?php echo $details['email']; ?></label>
	                    </div>
	                    <div class="form-group">
	                        <label for="name" class="col-sm-3 control-label">Date</label>
	                        <label class="col-sm-3 control-label"><?php echo $details['time']; ?></label>
	                    </div> 
	                    <div class="form-group">
	                        <label for="instructor" class="col-sm-3 control-label">Instructor</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" id="date" name="instructor">
	                        </div>
	                    </div>
	                    <div class="form-group">
                        	<div class="col-sm-12 text-right">
                            	<input type="submit" class="btn btn-default preview-add-button" name="submit" value="Assign" />
                        	</div>
                    	</div>   
	                </div>
                	<?php endforeach; ?>
                	</form>
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