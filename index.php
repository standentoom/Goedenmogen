


	<?php 
	date_default_timezone_set("Europe/Amsterdam");
	
	if (date("H")<= 12) {
		$background = "morgen";
		echo "<h1> Goede morgen </h1><br>";
		
	}
	
	else if(date("H")<= 18){
		$background = "middag";
		echo "<h1> Goede middag </h1><br>";
	}

	else if (date("H")<= 6){
		$background = "nacht";
		echo "<h1> Goede nacht </h1><br>";
	}

	else{
		$background = "avond";
		echo "<h1> Goede avond </h1><br>";
	}

	
	
	echo "<h2>De tijd is " . date("H:i:s</h2>");

	 $page = $_SERVER['PHP_SELF'];
 	$sec = "1";
 	header("Refresh: $sec; url=$page");
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Goede dag</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="<?php echo $background;?>">
	
	
</body>
</html>
