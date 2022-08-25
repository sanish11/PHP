<html>
	<head>
		<title>2-4 Logical Operator</title>
	</head>
	<body>
		<?php
/*Write an individual program for all the logical operators 
(&&, ||, AND, OR, !)*/

			$n=15;
			print "number =  $n <br/>";
			if($n>5 && $n<30){
				print "$n lies between the numbers 5 and 30";
				print "<br/>";
			}
			else{
				print "$n does not lie between the numbers 5 and 30";
				print "<br/>";
			}
			if($n==20 || $n<50){
				print "$n is equal to 20 or less than 50";
				print "<br/>";
			}
			else{
				print "$n is not equal to 20 nor less than 50";
				print "<br/>";
			}
			if($n>5 AND $n<30){
				print "$n lies between the numbers 5 and 30";
				print "<br/>";
			}
			else{
				print "$n does not lie between the numbers 5 and 30";
				print "<br/>";
			}
			if($n==20 OR $n<50){
				print "$n is equal to 20 or less than 50";
				print "<br/>";
			}
			else{
				print "$n is not equal to 20 nor less than 50";
				print "<br/>";
			}
			if(!($n==20)){
				print "$n is not equal to 20";
				print "<br/>";
			}
			else{
				print "$n is equal to 20";
				print "<br/>";
			}
		?>
	</body>
</html>