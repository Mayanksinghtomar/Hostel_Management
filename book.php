	<?php
	session_start();
	?>
	<html>
	<body>
	<div style="margin-top:50px">
	<?php

	$checkin = $_POST["checkin"];
	$checkout = $_POST["checkout"];
	$name = $_POST["name"];
	$contact = $_POST["contact"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "hostel";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$query = " INSERT INTO book_room
	VALUES ('$checkin', '$checkout' ,'$name' ,'$contact')";

	if (mysqli_query($conn, $query)) {
	    
		
	} else {
	    echo "Error: " . $query . "<br>" . mysqli_error($conn);
	}
	 
	mysqli_close($conn);
	?>
	<table border="3" align = "center">
	<tr>
	<td style="padding:10px 20px" colspan="2"><h3><strong>SSN College of Engineering, OMR, Kalavakkam, Tamil Nadu 603110</strong></h3></td>
	</tr>
	<tr>
	<td style="padding:10px 20px">Booking Date:</td>
	<td style="padding:10px 80px"><?php echo $checkin;?></td>
	</tr>
	<tr>
	<td style="padding:10px 20px">Leaving Date:</td>
	<td style="padding:10px 80px"><?php echo $checkout;?></td>
	</tr>
	<tr>
	<td style="padding:10px 20px">Name:</td>
	<td style="padding:10px 80px"><?php echo $name;?></td>
	</tr>
	<tr>
	<td style="padding:10px 20px">Contact:</td>
	<td style="padding:10px 80px"><?php echo $contact;?></td>
	</tr>
	<tr>
	<td style="padding:10px 20px" colspan="2"><h3><strong>Your Room Is Booked.</strong></h3></td>
	</tr>
	</table>
	</body>
	</html>