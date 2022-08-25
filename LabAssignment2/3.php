<html>
	<head>
		<title>2-3 Comparison Operator</title>
	</head>
	<body>
		<?php
//Write an individual program for all the comparison operators (==, !=, <, >, >=, <=).
	
			$a = 50;
			$b = 60;
			print "a = $a <br/>b = $b";
			print "<br/>";
			if($a==$b){
				print "$a is equal to $b";
				print "<br/>";
			}
			else{
				print "$a is not equal to $b<br/>";
			}
			
			if($a!=$b){
				print "$a is not equal to $b";
				print "<br/>";
			}
			else{
				print "$a is equal to $b<br/>";
			}
			if($a<$b){
				print "$a is less than $b";
				print "<br/>";
			}
			else{
				print "$a is not less than $b<br/>";
			}
			if($a>$b){
				print "$a is greater than $b";
				print "<br/>";
			}
			else{
				print "$a is not greater than $b";
				print "<br/>";
			}
			if($a>=$b){
				print "$a is greater than equal to $b";
				print "<br/>";
			}
			else{
				print "$a is not greater than equal to $b";
				print "<br/>";
			}
			if($a<=$b){
				print "$a is less than equal to $b";
				print "<br/>";
			}
			else{
				print "$a is not less than equal to $b";
				print "<br/>";
			}
		?>
	</body>
</html>