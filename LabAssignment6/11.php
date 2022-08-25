<html>
	<head>
		<title>Lab 6-11</title>
	</head>
	<body>
		<?php
/*Make a form where there are several input field like Name, age , address, gender as radio
 button, DOB and all these data will be stored in database while clicking on Submit button.
 Assume your own detail for making a database.*/
 
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$con=mysqli_connect("localhost","root","","php_db");
			if(!$con){
				die('Sorry!Connection Failed'.mysqli_error($con));
			}
			$sql="SELECT * FROM login_info WHERE username='$username' AND password='$password'";
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)!=0){
				header("location:https://nccs.edu.np/index");
			}
			else{
				echo "Invalid username and password.";
			}
			mysqli_close($con);
		?>
	</body>
</html>