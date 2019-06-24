<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$username1 = $_POST["uname"];
$password1 = $_POST["psw"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Hostel";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT Password FROM Registration where Registration_No ='$username1'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {    
    while($row = mysqli_fetch_assoc($result)) {
		if($password1==$row["Password"]){
		$_SESSION["uname"] = $username1;				
		header('Location:hi1.php');
	}
        else{		
		$_SESSION["wpass"] = "*Please enter correct Password.";
		header('Location:Home12.php');
	    }			
    }
} 
else {
	$_SESSION["wpass"] = "*Please enter correct Username or Password.";
	header('Location:Home12.php');
} 
mysqli_close($conn);
?> 
</body>
</html>