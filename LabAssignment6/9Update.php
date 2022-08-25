<html>
	<head>
		<title>Update Record</title>
	</head>
	<body>
		<?php	
//Write a program to update a record from database.		
			$con=mysqli_connect("localhost","root","","php_db");
			if(!$con){
				die('Sorry!Connection Failed'.mysqli_error($con));
			}
			
			$sql="UPDATE student SET last_name='Green' WHERE s_id=4"; 
			if(mysqli_query($con,$sql)){
				echo "Record updated successfully";
			}
			else{
				echo "Record not updated ".mysqli_error($con);
			}
			mysqli_close($con);
		?>
	</body>
</html>