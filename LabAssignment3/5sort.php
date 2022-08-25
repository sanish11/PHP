<html>
	<head>
		<title>Lab 3-5 sort</title>
	</head>
	<body>
		<?php
/*Write an individual program for sort(), rsort(), assort(), arsort(),
 ksort() and krsort()*/	
			/*$fruits=array("Apple", "Banana","Mango","Guava");
			$length=count($fruits);
			print "Before sorting:<br/>";
			for($x=0;$x<$length;$x++)
			{
				echo $fruits[$x];
				echo "<br/>";
			}
			sort($fruits);
			print "<br/>After sorting: <br/>";
			for($x=0;$x<$length;$x++)
			{
				echo $fruits[$x];
				echo "<br/>";
			}
			
			$fruits=array("Apple", "Banana","Mango","Guava");
			$length=count($fruits);
			print "Before sorting:<br/>";
			for($x=0;$x<$length;$x++)
			{
				echo $fruits[$x];
				echo "<br/>";
			}
			rsort($fruits);
			print "<br/>After sorting: <br/>";
			for($x=0;$x<$length;$x++)
			{
				echo $fruits[$x];
				echo "<br/>";
			}
			
			
			$age=array("Peter"=>"22", "Steve"=>"80","Sam"=>"35");
			asort($age);
			print "Asort:<br/>";
			foreach($age as $x=>$x_value)
			{
				echo "key=".$x.", value=".$x_value;
				echo "<br>";
			}
			arsort($age);
			print "Arsort:<br/>";
			foreach($age as $x=>$x_value)
			{
				echo "key=".$x.", value=".$x_value;
				echo "<br>";
			}
*/

			$age=array("Peter"=>"22", "Steve"=>"80","Anthony"=>"35");
			ksort($age);
			print "Ksort:<br/>";
			foreach($age as $n=>$n_value)
			{
				echo "key=".$n.", value=".$n_value;
				echo "<br>";
			}
			krsort($age);
			print "Krsort:<br/>";
			foreach($age as $n=>$n_value)
			{
				echo "key=".$n.", value=".$n_value;
				echo "<br>";
			}
		
		?>
	</body>
</html>