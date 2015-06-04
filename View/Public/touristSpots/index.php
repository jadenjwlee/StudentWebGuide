<html>
<head>
	<title>Tourist Spots</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript" ></script>
    <link rel="stylesheet" type="text/css" href="../../style/main.css" />
</head>
<body>
	<?php
		include "../Home/header.php";
	?>
	
	<?php
		$xml=simplexml_load_file("http://gilltejinder.com/places.xml");
	?>
<div class="names">
		<?php
			foreach ($xml->children() as $places) {
				# code...
				echo "<div id='name'>";				
				echo "<img id='images' src='../../image/a.jpeg' alt='pic' />";
				echo "<a href ='http://".$places->Row['N']."' target='_blank'>".$places->Row['F'].'</a>';				
				echo "</div>";				
			}
		?>	
</div>
	<?php
		include "../Home/footer.php";
	?>
</body>
</html>