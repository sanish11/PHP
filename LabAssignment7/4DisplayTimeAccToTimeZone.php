<html>
	<head>
		<title>Time</title>
	</head>
	<body>
		<?php
//4.Write a program to display the time according to the time zone.
			date_default_timezone_set("Asia/Kathmandu");
			echo "The time of kathmandu is: ".date("h:i:s a");
		?>
	</body>
</html>