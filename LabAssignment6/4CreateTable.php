<html>
	<head>
		<title>Create Table</title>
	</head>
	<body>
		<?php			
			$con=mysqli_connect("localhost","root","","php_db");
			if(!$con){
				die('Sorry!Connection Failed'.mysqli_error($con));
			}
			
			$sql="CREATE TABLE student(
					s_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					first_name VARCHAR(30) NOT NULL,
					last_name VARCHAR(30) NOT NULL,
					phone VARCHAR(15),
					email VARCHAR(50),
					reg_date TIMESTAMP)";
			if(mysqli_query($con,$sql)){
				echo "Table created successfully";
			}
			else{
				echo "Error creating table: ".mysqli_error($con);
			}
			mysqli_close($con);
		?>
	</body>
</html>