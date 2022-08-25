<html>
	<head>
		<title>Chess Board</title>
	</head>
	<body>
		<?php
			//chess board with 1-64 numbers
			/**/
			$n=1;
			
			print "<table border='1' cellspacing='0' height='500px' width='500px'>";
			for($i=1;$i<=8;$i++)
			{
				print "<tr align='center'>";
				if($i%2==0) // i = even
				{
					for($j=1;$j<=8;$j++)
					{
						if($j%2==0) // j = even
						{
							print "<td bgcolor='black'><font color='white'>$n</font></td>";
						}
						else
						{
							print "<td bgcolor='white'><font color='black'>$n</font></td>";
						}
						$n++;
					}
				}
				else // i = odd
				{
					for($j=1;$j<=8;$j++)
					{
						if($j%2==0) //j = even
						{
							print "<td bgcolor='white'><font color='black'>$n</font></td>";
						}	
						else // j = odd
						{
							print "<td bgcolor='black'><font color='white'>$n</font></td>";
						}
						$n++;
					}
				}
				print "</tr>";
			}
			print "</table>";
		?>
	</body>
</html>