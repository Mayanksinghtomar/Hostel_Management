<html>
<body>
<?php

$regno = $_POST["regno"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$bday = $_POST["bday"];
$branch = $_POST["branch"];
$email = $_POST["email"];
$password1 = $_POST["password"];

$hobbies = $_POST['hobby'];
$hobb = "";
foreach ($hobbies as $hobby1){
	$hobb.= $hobby1.",";
}
$contact = $_POST["contact"];
$address = $_POST["address"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$query = " INSERT INTO Registration
VALUES ('$regno', '$name' ,'$gender' ,'$bday' ,'$branch','$email', '$password1','$hobb','$contact' ,'$address' )";

if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
	header('Location:Home1.html');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);
?>

</body>
</html>