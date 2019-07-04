<?php 
require 'database.php';
session_start();

if (isset($_POST['username'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
    $qury = "SELECT * FROM login_customer where email='$username' and password ='$password' ";
 $result = mysqli_query($conn,$qury);
    if(mysqli_num_rows($result)>0){
        while($row = $result ->fetch_assoc()){
            $_SESSION['email'] = $row['surname'];
       
         echo "YES";
       }
    }else{
        echo "NO";
        echo("Error description: " . mysqli_error($conn));
    }
    }

 ?>