<html>
	<head>
		<title>Multiple Insertion</title>
	</head>
	<body>
		<?php			
			$con=mysqli_connect("localhost","root","","php_db");
			if(!$con){
				die('Sorry!Connection Failed'.mysqli_error($con));
			}
			
			$sql="INSERT INTO Student(first_name,last_name,phone,email) VALUES
					('Sita','Shrestha','9812345670','shresthasita@gmail.com'),
					('Gita','Thapa','9823456710','gitathapa@gmail.com')";

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