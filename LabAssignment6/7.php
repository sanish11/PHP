<html>
	<head>
		<title>Lab 6-7</title>
	</head>
	<body>
		<?php
/*Write a program to insert multiple records in the database using prepare statement.*/
			$con=mysqli_connect("localhost","root","","php_db");
			if(!$con){
				die('Sorry!Connection Failed'.mysqli_error($con));
			}
			$sql=$con->prepare("INSERT INTO student(first_name,last_name,phone,email) VALUES
			(?,?,?,?)");
			$sql->bind_param("ssss",$fname,$lname,$phone,$email);
			
			$fname="Lucy";
			$lname="Shah";
			$phone="9874123650";
			$email="belucy@gmail.com";
			$sql->execute();

			$fname="Hari";
			$lname="Basnet";
			$phone="9852367410";
			$email="harib@gmail.com";
			$sql->execute();

			echo "Record inserted successfully";
			$sql->close();
			$con->close();
		?>
	</body>
</html>