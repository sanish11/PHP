<html>
	<head>
		<title>Connection</title>
	</head>
	<body>
		<?php			
//Write a program to create a connection to the server.
			$con = mysqli_connect("localhost","root","");
			if(!$con){
				die('Sorry!Connection Failed '.mysqli_error($con));
			}
			else{
				echo "Successful to connect.";
			}
		?>
	</body>
</html>