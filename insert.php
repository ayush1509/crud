<?php
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$phoneno = $_POST['phoneno'];
$city = $_POST['city'];


if ((!empty($id)) || (!empty($firstname)) || (!empty($lastname)) ||(!empty($email)) ||(!empty($password)) ||(!empty($address)) ||(!empty($gender)) ||(!empty($phoneno)) ||(!empty($city))){
	$host = "localhost" ;
	$dbusername = "root" ;
	$dbpassword = "tiger" ;
	$dbname = "register" ;
	
	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);	
	if (mysqli_connect_error()){
	die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else {
		$SELECT = "SELECT id From register Where id = ? Limit 1" ;
		$INSERT = "INSERT Into register (id,firstname,lastname,email,password,address,gender,phoneno,city) values(?,?,?,?,?,?,?,?,?)";
		
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->bind_result($id);
		$stmt->store_result();
		$rnum = $stmt->num_rows ;
		
		if ($rnum==0){
			$stmt->close();
			
			$stmt = $conn->prepare($INSERT);
			
			$stmt->bind_param("issssssis",$id,$firstname,$lastname,$email,$password,$address,$gender,$phoneno,$city);
			$stmt->execute();
			echo "new record successfully inserted" ;
		}
		else {
			echo "someone already have same id" ;
		}
			$stmt->close();
			$conn->close();
	}

	
}
else {
	echo "All fields are required" ;
	die();
}
?>