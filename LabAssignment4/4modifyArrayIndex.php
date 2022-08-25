<html>
	<head>
		<title>Lab 4-4</title>
	</head>
	<body>
		<?php
/*Write a php program to modify the element of an array which index is 3*/
			$a=array(1,3,5,7,9);
			print "Array before modifying<br/>";
			for($i=0;$i<5;$i++){
				print "$a[$i] ";
			}
			print "<br/>Array after modifying<br/>";
			for($i=0;$i<5;$i++){
				if($i==2){
					$a[$i]=50;
				}
				print "$a[$i] ";
			}
		?>
	</body>
</html>