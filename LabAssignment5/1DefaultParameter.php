<html>
	<head>
		<title>Lab 5-1</title>
	</head>
	<body>
		<?php
/*Write a php program to demonstrate the function with default parameters.*/
			function addNum($a=4,$b=6){
				$sum=$a+$b;
				print "$a+$b=$sum<br/>";
			}
			addNum();
			addNum(1);
			addNum(2,3);
		?>
	</body>
</html>