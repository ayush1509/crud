<?php

$i = $_GET['in'];
$query = "DELETE FROM register WHERE ID = '$i'" ;
$host = "localhost" ;
$dbusername = "root" ;
$dbpassword = "tiger" ;
$dbname = "register" ;
	
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
$data = mysqli_query($conn,$query);
if($data)
{
	echo "Record deleted " ;
}
else {
	echo "deletion failed" ;
}
?>