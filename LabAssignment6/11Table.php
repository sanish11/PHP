<html>
	<head>
		<title>Lab 6-11</title>
	</head>
	<body>
		<?php
			$con=mysqli_connect("localhost","root","","php_db");
			if(!$con){
				die('Sorry!Connection Failed'.mysqli_error($con));
			}
			
			$sql="CREATE TABLE login_info(
					username VARCHAR(30) NOT NULL,
					password VARCHAR(30) NOT NULL)";
			if(!mysqli_query($con,$sql)){
				echo "Error creating table: ".mysqli_error($con);
			}
			$sql="INSERT INTO login_info VALUES ('simnakarmi','webtech')";
			if(mysqli_query($con,$sql)){
				echo "<br/>Record inserted successfully";
			}
			else{
				echo "<br/>Error inserting record ".mysqli_error($con);
			}
			
			mysqli_close($con);
		?>
	</body>
</html>