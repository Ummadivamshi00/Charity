<?php include'connect.php'; ?>

<?php
$Name = $_POST['name'];
$CVV = $_POST['cvv'];
$Card_Number = $_POST['cnumber'];
$Select_Amount = $_POST['samount'];
$Card_Details = $_POST['cdetails'];


mysqli_query($db "INSERT INTO Table3( name, cvv, cnumber, samount, cdetails) VALUES ()")