<html>
	<head>
		<title>Lab 6-10 Table</title>
	</head>
	<body>
		<?php
/*Make a form where there are several input field like Name, age , address, gender as radio
 button, DOB and all these data will be stored in database while clicking on Submit button.
 Assume your own detail for making a database.*/
 
			$con=mysqli_connect("localhost","root","","php_db");
			if(!$con){
				die('Sorry!Connection Failed'.mysqli_error($con));
			}
			$sql="CREATE TABLE students(
					s_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					name VARCHAR(50),
					age INT,
					address VARCHAR(30),
					gender  VARCHAr(10),
					DOB date)";
			if(mysqli_query($con,$sql)){
				echo "Table created successfully";
			}
			else{
				echo "Table not created successfully ".mysqli_error($con);
			}
			mysqli_close($con);
		?>
	</body>
</html>