<html>
	<head>
		<title>Create Database</title>
	</head>
	<body>
		<?php			
//Write a program to create a database.
			$con=mysqli_connect("localhost","root","");
			if(!$con){
				die('Sorry!Connection Failed'.mysqli_error($con));
			}
			
			$sql="CREATE DATABASE php_db";
			if(mysqli_query($con,$sql)){
				echo "Database created successfully";
			}
			else{
				echo "Error creating database: ".mysqli_error($con);
			}
			mysqli_close($con);
		?>
	</body>
</html>