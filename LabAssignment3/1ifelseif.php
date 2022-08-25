<html>
	<head>
		<title>Lab 3-1 if else if</title>
	</head>
	<body>
		<?php
/*Write a program for if statement, if…else statement and if…elseif…..
else statement*/	
			
			$marks=80;
			
			print "Marks: $marks<br/>";
			print "Grade: ";
			if($marks<=100 && $marks>=80){
				print "A";
			}
			else if($marks<80 && $marks>=60){
				print "B";
			}
			else if($marks<60 && $marks>=50){
				print "C";
			}
			else if($marks<50 && $marks>=40){
				print "D";
			}
			else if($marks<40){
				print "F";
			}
			else{
				print "Invalid";
			}
		?>
	</body>
</html>