<html>
	<head>
		<title>Record Insertion</title>
	</head>
	<body>
		<?php			
			$con=mysqli_connect("localhost","root","","php_db");
			if(!$con){
				die('Sorry!Connection Failed'.mysqli_error($con));
			}
			
			$sql="INSERT INTO Student(first_name,last_name,phone,email) VALUES
					('Ram','Shrestha','9876543210','ramshrestha@gmail.com')";
			if(mysqli_query($con,$sql)){
				echo "Data Inserted successfully";
			}
			else{
				echo "Error inserting data ".mysqli_error($con);
			}
			mysqli_close($con);
		?>
	</body>
</html>