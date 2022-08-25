<html>
	<head>
		<title>Lab 5-5</title>
	</head>
	<body>
		<?php
/*Write a php program to validate the form.*/
		
		$name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $default=$_POST;
        $flag=0;
        if(strlen($name)==0){
            $m1="Please enter your name.";
            $flag=1;
        }
        if(strlen($name)<3){
            $m2="Name must be atleast 3 character.";
            $flag=1;
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $m3="Email must be in validate form.";
            $flag=1;
        }
        if(!preg_match("/98[0-9]{8}/",$phone)){
            $m4="Contact number must contain 10 digit and must start from 98";
            $flag=1;
        }
        if($flag==0){
            print "Form submitted succesfully";
        }else{
            print '<form action="$_SERVER[PHP_SELF]" method="POST">
            Name: <input type="text" name="name"  value="'.htmlentities($default['name']).'">';
            if(isset($m1))
                print "<font color='red'> $m1 </font>";
            if(isset($m2))
                print "<font color='red'> $m2 </font>";
            print '<br/><br/>Email: <input type="text" name="email" value="'.htmlentities($default['email']).'">';
            if(isset($m3))
                print "<font color='red'> $m3 </font>";
            print '<br/><br/>Phone: <input type="text" name="phone" value="'.htmlentities($default['phone']).'">';
            if(isset($m4))
                print "<font color='red'> $m4 <br/></font>";
            print '<br/><br/><input type="submit" value="Submit">
            </form>';
        }
		?>
	</body>
</html>