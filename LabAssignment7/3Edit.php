<html>
	<head>
		<title>Edit Date and Time</title>
	</head>
	<body>
		<?php
//3.Write a program to edit the date and time of server.
			echo "The date is: ".date("Y-m-d h:i:s a");
			$d=mktime(16,8,00,03,31,22);
			echo "<br/>Edited date is: ".date("Y-m-d h:i:s a",$d);
		?>
	</body>
</html>