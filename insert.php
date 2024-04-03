<?php include'connect.php'; ?>

<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

//Inserting Values 

mysqli_query($db,"INSERT INTO table1 ( username, password, email) VALUES ('$username','$password' , '$email')");

if(mysqli_affected_rows($db) >
	echo "<p> Successfully Registered :)</p>";
	header('location: index2.html');
} else{ 0){
	echo "Registration Failed :(";
	mysqli_error ($db);

}

?>
