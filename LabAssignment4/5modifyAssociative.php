<html>
	<head>
		<title>Lab 4-5</title>
	</head>
	<body>
		<?php
/*Write a php program to modify the value of associative array*/
			$age=array("Monica"=>26, "Ross"=>28);
			print "Associative array before modifying<br/>";
			foreach($age as $arr=>$a){
				print "Age of ".$arr." is: ".$a."<br/>";
			}
			$age["Ross"]=30;
			print "<br/>Associative array after modifying<br/>";
			foreach($age as $arr=>$a){
				print "Age of ".$arr." is ".$a."<br/>";
			}
		?>
	</body>
</html>