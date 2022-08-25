<html>
	<head>
		<title>Lab 5-4</title>
	</head>
	<body>
		<?php
/*Write a php program to demonstrate the function passing arguments by reference.*/
		function add(&$a){
            $a+=10;
        }
        $a=20;
        add($a);
        print "Value of a = $a";
		?>
	</body>
</html>