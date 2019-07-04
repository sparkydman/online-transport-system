<?php 
require 'database.php';
if(isset($_POST['route'])){
// $terminal = $_POST['terminal'];
$route = $_POST['route'];
// $hiace = $_POST['hiace'];
// $sienna = $_POST['sienna'];
// $sprinter = $_POST['sprinter'];

$sql = "SELECT * FROM destination where id = $route";
$myData = mysqli_query($conn,$sql);
if($myData){
while($record = $myData->fetch_assoc()){
	
	$data["hiace"] = $record["hiace"];
	$data["sienna"] = $record["sienna"];
	$data["sprinter"] = $record["sprinter"];
}

}
echo json_encode($data);
}

 ?>
