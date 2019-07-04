<?php 
include 'database.php';
session_start();

	if (isset($_POST['motoid'])) {
	$motoid = $_POST['motoid'];
	
	$route = $_POST['route'];
	
	$income = $_POST['income'];
	$expenses = $_POST['expenses'];

	$net = $income - $expenses;
	$sql = mysqli_query($conn,"UPDATE available set status = 2, expenditure = expenditure + '$expenses', net = net + '$net' where motoid = '$motoid' and route = '$route' and status = 1 limit 1");

if($sql){
	echo "Cleared";
}else{
	echo "Error: ".mysqli_error($conn);
}
}



 ?>