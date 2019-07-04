
<?php 
require 'database.php';
session_start();
if(isset($_POST['manifest'])){
	$destination = $_SESSION['destination'];
	$surname = $conn->escape_string($_POST['surname']);
	$othername = $conn->escape_string($_POST['othername']);
	$email = $conn->escape_string($_POST['customeremail']);
	$phone = $conn->escape_string($_POST['customerphone']);
	$address = $conn->escape_string($_POST['customeraddress']);
	$nextkinname = $conn->escape_string($_POST['nextkinname']);
	$nextkinPhone = $conn->escape_string($_POST['nextkinPhone']);
	$nextkinAddress = $conn->escape_string($_POST['nextkinAddress']);
	$bus_id = $_SESSION['bus_id'];
	$destination =$_SESSION['destination'];
	$seater = $_SESSION['seater'];
	$bus = $_SESSION['bus'];
	$income = 0;
	$refcode = $_POST['ref'];
	$_SESSION['refcode'] = $refcode;
	

	switch ($bus) {
		case 'Hiace':
			$income = $_SESSION['incomehiace'];
			break;
		case 'Sienna':
		$income = $_SESSION['incomesienna'];
		break;
		case 'Sprinter':
			$income = $_SESSION['incomesprinter'];
			break;
	// 	default:
	// 		break;
	}
			// echo $address;

		
	$qury = "INSERT into customer(surname,othername,email,address,phone,nextkinname,nextkinphone,nextkinaddress,destination,seats,bus,price,refcode,bus_id) values ('$surname','$othername','$email','$phone','$address','$nextkinname','$nextkinPhone','$nextkinAddress','$destination','$seater','$bus','$income','$refcode','$bus_id')";
	$result = mysqli_query($conn,$qury);
	if($result){

		header('location:thanks.php');
}else{
	 echo("Error description: " . mysqli_error($conn));
}
}
mysqli_close($conn);
 ?>
