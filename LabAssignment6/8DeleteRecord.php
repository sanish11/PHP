<html>
	<head>
		<title>Delete Record</title>
	</head>
	<body>
		<?php			
//Write a program to delete a record form database.
			$con=mysqli_connect("localhost","root","","php_db");
			if(!$con){
				die('Sorry!Connection Failed'.mysqli_error($con));
			}
			
			$sql="DELETE FROM student WHERE s_id=5"; 
			if(mysqli_query($con,$sql)){
				echo "Record Deleted successfully";
			}
			else{
				echo "Record not deleted ".mysqli_error($con);
			}
			mysqli_close($con);
		?>
	</body>
</html>