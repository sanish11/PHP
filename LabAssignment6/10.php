<html>
	<head>
		<title>Lab 6-10</title>
	</head>
	<body>
		<?php
/*Make a form where there are several input field like Name, age , address, gender as radio
 button, DOB and all these data will be stored in database while clicking on Submit button.
 Assume your own detail for making a database.*/
 
			$name=$_POST['name'];
			$age=$_POST['age'];
			$address=$_POST['address'];
			$gender=$_POST['gender'];
			$dob=$_POST['dob'];
			$con=mysqli_connect("localhost","root","","php_db");
			if(!$con){
				die('Sorry!Connection Failed'.mysqli_error($con));
			}
			$sql="INSERT INTO students (name,age,address,gender,DOB) VALUES
				('$name','$age','$address','$gender','$dob')";
			if(mysqli_query($con,$sql)){
				echo "Record inserted successfully";
			}
			else{
				echo "Error inserting record ".mysqli_error($con);
			}
			mysqli_close($con);
		?>
	</body>
</html>