<?php include'connect.php'; ?>

<?php
$Full_Name = $_POST['fname'];
$Phone_number = $_POST['pnumber'];
$Date_of_birth = $_POST['dob'];

//Inserting Values 

mysqli_query($db,"INSERT INTO table2 ( fname , pnumber , dob ) VALUES ('$Full_Name','$Phone_number' , '$Date_of_birth')");

if(mysqli_affected_rows($db) > 0){
	echo "<p> Successfully Registered :)</p>";
	header('location: index2.html');
} else{
	echo "Registration Failed :(";
	mysqli_error ($db);

}

?>
