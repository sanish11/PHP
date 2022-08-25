<html>
	<head>
		<title>Lab 4-6</title>
	</head>
	<body>
		<?php
/*Write a php program to change the color of 10 columns alternatively.*/
			$color=array('black','white');
			$index=0;
			print "<table border='1'><tr>";
			for($i=1;$i<=10;$i++){
				print "<td bgcolor='$color[$index]'>$color[$index]</td>";
				$index=1-$index;
			}
			print "</tr></table>";
		?>
	</body>
</html>