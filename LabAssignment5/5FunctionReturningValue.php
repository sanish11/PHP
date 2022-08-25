<html>
	<head>
		<title>Lab 5-5</title>
	</head>
	<body>
		<?php
/*Write a php program to demonstrate the function returning value.*/
		function add($a,$b){
            $sum=$a+$b;
            return $sum;
        }
        $result=add(6,10);
        print "Sum = $result";
		?>
	</body>
</html>