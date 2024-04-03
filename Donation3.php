<?php include'connect.php'; ?>

<?php
$Name = $_POST['name'];
$CVV = $_POST['cvv'];
$CardNumber = $_POST['cnumber'];	
$EnterAmount = $_POST['samount'];
$EnterMonth = $_POST['months'];
$Enteryear = $_POST['year'];

mysqli_query($db "INSERT INTO table3 ( name, cvv, cnumber, samount, months, year) VALUES 
('$Name','$CVV','$CardNumber','$EnterAmount','$EnterMonth','$EnterYear')");

if(mysqli_affected_rows($db) > 0){
	echo "<p> Donation Made Successfully :)</p>";
	header('location: index2.html');
} else{
	echo "Donation Failed :(";
	mysqli_error ($db);

}

?>
