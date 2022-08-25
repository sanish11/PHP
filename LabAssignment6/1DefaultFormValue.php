<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<?php
/*Write a program to set the default values in a form.*/
			$default=$_POST;
			$email=$_POST['email'];
			$password=$_POST['password'];
			
			$flag=0;
			
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$m1="Email must be in validate format.";
				$flag=1;
			}
			
			if(strlen($password)<6){
				$m2="Password must contain atleast 6 characters.";
				$flag=1;
			}
			
			if($flag==0){
				print "You have successfully submitted the form.<br/>";
			}
			else{
				print '<h1>Form</h1>';
				print '<form method="post" action="$_SERVER[PHP_SELF]">';
						
					print 'Email:<br/><input type="text" name="email" value="'.htmlentities($default['email']).'"><br/>';
					if(isset($m1)){
						print "<font color='red'>$m1</font><br/>";
					}
					print 'Password:<br/><input type="password" name="password" value="'.htmlentities($default['password']).'"><br/>';
					if(isset($m2)){
						print "<font color='red'>$m2</font><br/>";
					}
					
					print'<br/>
					<input type="submit" value="Submit"><br/>
				</form>';
			}
		?>
	</body>
</html>