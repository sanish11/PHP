<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5-6</title>
</head>
<body>
    <?php
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $default=$_POST;
        print '<form action="$_SERVER[PHP_SELF]" method="POST">
        Name: <input type="text" name="name"  value="'.htmlentities($default['name']).'"><br/><br/>
        Email: <input type="text" name="email" value="'.htmlentities($default['email']).'"><br/><br/>
        Phone: <input type="text" name="phone" value="'.htmlentities($default['phone']).'"><br/><br/>
        <input type="submit" value="Submit">
    </form>';
    ?>
</body>
</html>