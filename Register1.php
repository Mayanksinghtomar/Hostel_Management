<html>
<body>

<?php echo "Registration Number : {$_POST["regno"]}"; ?><br />

<?php echo "Name : {$_POST["name"]}"; ?><br />

<?php echo"Gender: {$_POST["gender"]}";?><br />

<?php echo "Date of Birth : {$_POST["bday"]}"; ?><br />

<?php echo "Branch : {$_POST["branch"]}"; ?><br />

<?php echo "Course : {$_POST["course"]}"; ?><br />

<?php echo "Semester : {$_POST["sem"]}"; ?><br />

<?php echo "Email : {$_POST["email"]}"; ?><br />

<?php echo "Password : {$_POST["password"]}"; ?><br />

<?php echo "Re-Password : {$_POST["rpassword"]}"; ?><br />


<?php
$hobby = $_POST['hobby'];
echo "Hobbies : ";
foreach ($hobby as $key => $value){
	echo $value."," ;
}?><br />

<?php echo "Contact No. : {$_POST["contact"]}"; ?><br />
<?php echo "Address : {$_POST["address"]}"; ?><br />

</body>
</html>