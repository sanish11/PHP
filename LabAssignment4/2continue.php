<html>
	<head>
		<title>Lab 4-2</title>
	</head>
	<body>
		<?php
/*Write a php program to demonstrate the continue statement*/
			for($i=1;$i<=5;$i++){
				if($i==2){
					continue;
				}
				else{
					print "$i<br/>";
				}
			}
		?>
	</body>
</html>