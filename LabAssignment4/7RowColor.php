<html>
	<head>
		<title>Lab 4-7</title>
	</head>
	<body>
		<?php
/*Write a php program to change the color of 10 columns alternatively.*/
			$color=array('black','white');
			$index=0;
			print "<table border='1'>";
			for($i=1;$i<=10;$i++){
				print "<tr><td bgcolor='$color[$index]'>$color[$index]</td></tr>";
				$index=1-$index;
			}
			print "</table>";
		?>
	</body>
</html>