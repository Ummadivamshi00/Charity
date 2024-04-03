<?php include'connect.php'; ?>

<?php
$Name = $_POST['name'];
$CVV = $_POST['cvv'];
$Card_Number = $_POST['cnumber'];
$Select_Amount = $_POST['payment'];
$Card_Details = $_POST['months'];


mysqli_query($db "INSERT INTO Table3( name, cvv, cnumber, payment, months) VALUES ('$Name','$CVV','$Card_Number','$Select_Amount','$Card_Details')");

if(mysqli_affected_rows($db) > 0){
	echo "<p> Donation Made Successfully :)</p>";
	header('location: index2.html');
} else{
	echo "Donation Failed :(";
	mysqli_error ($db);

}

?>
