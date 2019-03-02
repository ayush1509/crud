<html>
<head>
	<title>Update Form</title>
</head>
<body>
<form action="" method="GET">
	<table>
		<tr>
			<td>
				FirstName :
			</td>
			<td>
				<input type="text" name="fn" value="<?php echo $_GET['fn'];?>"/>
			</td>
		</tr>
		
		<tr>
			<td>
				LastName :
			</td>
			<td>
				<input type="text" name="ln" value="<?php echo $_GET['ln'];?> "/>
				<input type="hidden" name="id" value="<?php echo $_GET['in'];?> "/>
			</td>
		</tr>
		<tr>
		<tr>
			<td>
				Email :
			</td>
			<td>
				<input type="mail" name="en" value="<?php echo $_GET['en'];?>"/>
			</td>
		</tr>
		<tr>
			<td>
				Gender :
			</td>
			<td>
				<input type="radio" name="gn" value="m" checked/>Male
				<input type="radio" name="gn" value="f" />FeMale
			</td>
		</tr>
		
		<tr>
			<td>
				Phone no :
			</td>
			<td>
				<select>
					<option>+91</option>
				</select>
				<input type="Phone" name="pn" value="<?php echo $_GET['pn'];?>"/>
			</td>
		</tr>
		<tr>
			<td>
				City :
			</td>
			<td>
				<select name="city" required>
					<option selected hidden value="">Select City</option>
					<option>Meerut</option>
					<option>Delhi</option>
					<option>Ghaziabad</option>
					<option>Mumbai</option
				</select>
			</td>
		</tr>
		<tr>
		<td>
			<input type="submit" name = "submit" value="Update"/>
		</td>
		</tr>
		
	</table>
</form>
<?php
if(isset($_GET['submit']))
{	
	$r = $_GET['fn'];
	$l = $_GET['ln'];
	$e = $_GET['en'];
	$g = $_GET['gn'];
	$c = $_GET['city'];
	$p = $_GET['pn'];
	$i = $_GET['id'];
	$query = "UPDATE register SET firstname='$r' ,lastname='$l',email='$e',gender='$g',city='$c',phoneno='$p' WHERE ID = '$i'" ;
	$host = "localhost" ;
	$dbusername = "root" ;
	$dbpassword = "tiger" ;
	$dbname = "register" ;
	
	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);	
	$data = mysqli_query($conn,$query);
	if($data)
	{
		echo "record updated" ;
	}
	else {
		echo "record not updated" ;
	}
	
}

else
{
	echo "click on update";
}
?>
</body>
</html>




















