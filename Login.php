	<html>
	<body>

	<?php 
	echo "User Name : {$_POST["uname"]}"; ?><br />
	<?php echo "Password : {$_POST["psw"]}"; ?><br />
	<?php 
	if(isset($_POST['remember'])){
		echo"Password remember : {$_POST['remember']}";
	}
	?>

	</body>
	</html>