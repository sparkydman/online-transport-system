<?php 
require 'database.php';
session_start();

if(isset($_POST['btn_register'])){
	$surname = $conn->escape_string($_POST['surname']);
	$othername = $conn->escape_string($_POST['othername']);
	$email = $conn->escape_string($_POST['customeremail']);
	$phone = $conn->escape_string($_POST['customerphone']);
	$address = $conn->escape_string($_POST['customeraddress']);
	$password = $conn->escape_string($_POST['password']);
	$confirmpassword = $conn->escape_string($_POST['confirmpassword']);

	

	if($password == $confirmpassword){
		$qle = mysqli_query($conn, "SELECT * from customerinfo where email ='$email'");
		if($qle ->num_rows > 0){
			echo ("<SCRIPT LANGUAGE='JavaScript'>

            window.alert('email already exist')
            window.location.href='index.php'
            </SCRIPT>");
	
		
	
}else{
	$qury = mysqli_query($conn,"INSERT into customerinfo(surname,othername,email,password,address,phone) values ('$surname','$othername','$email','$phone','$address','$password')");
		if($qury){
			$qury1 = mysqli_query($conn,"SELECT id from customerinfo where email = '$email' ");
			if($qury1){
				$row = $qury1->fetch_assoc();
				$_SESSION['user_id'] = $row['id'];
			$_SESSION['loggin'] = 1;
		header('location:index.php');
		}else{
echo "error: ".mysqli_error($conn);
		}
		}else{
echo "error: ".mysqli_error($conn);
		}
	}
}else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
		            window.alert('Password did not match')
            window.location.href='index.php'
            </SCRIPT>");
}

}

if (isset($_POST['btn_login'])) {
	$username = $conn->escape_string($_POST['username']);
	$password = $conn->escape_string($_POST['loginpassword']);
	$qury = mysqli_query($conn,"SELECT * FROM customerinfo where email='$username' and password ='$password' limit 1");

	if($qury->num_rows>0){
		while($row =$qury->fetch_assoc()){
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['loggin'] = 1;
			header('location:index.php');
		}
		
		
	}else{
		$qury = mysqli_query($conn,"SELECT * FROM admin where username ='$username' and password ='$password' limit 1");
		if($qury->num_rows>0){
		while($row =$qury->fetch_assoc()){
			$_SESSION['login_admin']='yes';
		header('location:sidebar.php');
		}

		
	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		
            window.alert('Wrong Email or Password')
            window.location.href='index.php'
            </SCRIPT>");
	}
	}
}
 ?>