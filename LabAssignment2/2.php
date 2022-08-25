<html>
	<head>
		<title>2-2 Arithmetical Operators</title>
	</head>
	<body>
		<?php
//Write an individual program for all the arithmetical operators (+, -, *, /, %, ++, --).

			$a=60;
			$b=30;
			print "Value of a = $a<br/>";
			print "Value of b = $b<br/>";
			$sum=$a+$b;
			print "Sum = $sum<br/>";
			$dif=$a-$b;
			print "Difference = $dif<br/>";
			$mul=$a*$b;
			print "Multiplication = $mul<br/>";
			$div = $a/$b;
			print "Division = $div<br/>";
			$rem = $a%$b;
			print "Remainder = $rem<br/>";
			
			print "<br/>Value of a before post increment: $a<br/>";
			$a++;
			print "Value of a after post increment: $a<br/>";
			
			print "<br/>Value of a before pre increment: $a<br/>";
			++$a;
			print "Value of a after pre increment: $a<br/>";
			
			print "<br/>Value of b before post decrement: $b<br/>";
			$b--;
			print "Value of b after post decrement: $b<br/>";
			
			print "<br/>Value of b before pre decrement: $b<br/>";
			--$b;
			print "Value of b after pre decrement: $b<br/>";
			
		?>
	</body>
</html>