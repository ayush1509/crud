<?php
$servername = "localhost";
$username = "root";
$password = "tiger";
$dbname = "register";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID, firstname,lastname,email,gender,phoneno,city FROM  register";
$result = $conn->query($sql);
?>

<html>
<head>
<title>Data</title>
</head>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>gender</th>
<th>phoneno</th>
<th>city</th>
</tr>
</html>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo "<tr>" ;
		
		echo "<td>" .$row['ID']."</td>";
		
		echo "<td>" .$row['firstname']."</td>";
		
		echo "<td>" .$row['lastname']."</td>";
		
		echo "<td>" .$row['email']."</td>";
		
		echo "<td>" .$row['gender']."</td>";
		
		echo "<td>" .$row['phoneno']."</td>";
		
		echo "<td>" .$row['city']."</td>";
		
		echo "<td><a href='update.php?&in=$row[ID]&fn=$row[firstname]&ln=$row[lastname]&en=$row[email]&gn=$row[gender]&pn=$row[phoneno]&cn=$row[city]'>Edit</a></td>" ;
		
		echo "<td><a href='delete.php?in=$row[ID]'>Delete</a></td>";
		
    }
} else {
    echo "0 results";
}
$conn->close();

?>















