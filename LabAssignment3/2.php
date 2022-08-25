<html>
	<head>
		<title>Lab 3-2 Switch</title>
	</head>
	<body>
		<?php
/*Write a program to demonstrate the  switch case*/	
			
			$today = date("D");
			switch($today){
				case "Sun":
					echo "Today is Sunday.";
					break;
				case "Mon":
					echo "Today is Monday.";
					break;
				case "Tue":
					echo "Today is Tuesday.";
					break;
				case "Wed":
					echo "Today is Wednesday.";
					break;
				case "Thu":
					echo "Today is Thursday.";
					break;
				case "Fri":
					echo "Today is Friday.";
					break;
				case "Sat":
					echo "Today is Saturday.";
					break;
				default:
					echo "No information available for that day.";
					break;
			}

		?>
	</body>
</html>