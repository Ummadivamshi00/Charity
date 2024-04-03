<?php include'connect.php'; ?>

<?php

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM table1 WHERE username='$username' AND password='$password' LIMIT 1";
 $result = mysqli_query($db,$sql);

 if(mysqli_num_rows($result) == 1){
 	echo "Logged In Successfully";
 	header('location: index2.html');
 } else{
 	echo "User_Name or Password Didn't match";
 }
 ?>
