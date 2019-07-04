<?php require('database.php') ; ?>
<?php

if (isset($_POST['btnsave'])) {
	$surname_box = $_POST['surname'];
	$firstname_box = $_POST['firstname'];
	$othername_box = $_POST['othername'];
	$dob_box = $_POST['date_of_birth'];
	if ($_POST['sex']) {
		$sex_box = $_POST['sex'];
	}
		
		// $sex_box =	$_POST['female'];
	$licence_box = $_POST['licence'];
	$state_box = $_POST['state'];
	$lga_box = $_POST['lga'];
	$country_box = $_POST['country_1'];

	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$per_address = $_POST['per_address'];
	$resident = $_POST['resident'];
	$car_model = $_POST['car_model'];
	$car_engine = $_POST['car_engine'];
	$plate_no = $_POST['plate_no'];
	$seaters = $_POST['seaters'];
	$route = $_POST['route'];
	// $former_driver = $_POST['former_driver'];
	$kin_surname = $_POST['kin_surname'];
	$kin_othername = $_POST['kin_othername'];
	$kin_phone = $_POST['kin_phone'];
	$kin_relation = $_POST['kin_relation'];
	$kin_email = $_POST['kin_email'];
	$kin_address = $_POST['kin_address'];

	$driver_id = "GIGM".rand(100,1000);
	$car_id = rand(100,1000);
	
$query = "INSERT INTO driver_info(driver_id,car_id,surname,firstname,othername,birthday,sex,licence,state,lga,nation,phone,email,perm_address,resid_address,car_model,engine,plate_no,seaters,route,kin_surname,kin_othername,kin_phone,kin_relation,kin_email,kin_address) 
			VALUES('$driver_id','$car_id','$surname_box', '$firstname_box', '$othername_box','$dob_box','$sex_box', '$licence_box','$state_box','$lga_box','$country_box','$phone','$email','$per_address','$resident','$car_model','$car_engine','$plate_no','$seaters','$route','$kin_surname','$kin_othername','$kin_phone','$kin_relation','$kin_email','$kin_address')";
			
			$result = mysqli_query($conn,$query);
			if($result){
				
				echo "<script> alert('saved sucessfully!!!')</script>";
				echo "<script> window.open('sidebar.php','_self')</script>";

			}else{
	 echo("Error description: " . mysqli_error($conn));
}
			
				
		}
		mysqli_close($conn);
?>