<?php 
require 'database.php';
  

    if(isset($_POST['route'])){

       $route = $_POST['route'];
		$hiace = $_POST['hiace'];
		$sienna = $_POST['sienna'];
		$sprinter = $_POST['sprinter'];
		$message ='';
     $query = mysqli_multi_query($conn,"UPDATE destination set  hiace = '$hiace', sienna = '$sienna' ,sprinter = '$sprinter' where id = '$route' ");
      if($query){
      	
$message .= 'Updated';
      }else{
        $message .= mysqli_error($conn);
      }

echo $message;
}

 ?>