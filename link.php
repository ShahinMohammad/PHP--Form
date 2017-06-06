
<?php 
 $frist_name = isset($_GET['first_name']) ? $_GET['first_name'] : 'Shahin' ;
 $last_name	= isset($_GET['last_name']) ? $_GET['last_name'] :'Mohammad';
 $email = isset($_GET['email']) ? $_GET['email'] : 'shahin@gmail.com';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
</head>
<body>
	Frist Name: <?php echo $frist_name; ?> <br>
	Last Name : <?php echo $last_name; ?> <br>
	Email : <?php echo $email;?>	
	<br>

	<a href="index.php">Go Back</a>
</body>
</html>