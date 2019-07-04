

<?php
   include("database.php");
   if(isset($_POST['id'])){
   $id=$_POST['id'];
   $result=mysqli_query($conn,"SELECT*FROM destination WHERE city_id='$id'");
   while($row=$result->fetch_array()){?>
    <option value="<?php echo $row['id'];?>"><?php echo $row['route'];?></option>
   
   <?php }} 

    if(isset($_POST['id4'])){
   $id=$_POST['id4'];
   $result=mysqli_query($conn,"SELECT*FROM destination WHERE city_id='$id'");
   while($row=$result->fetch_array()){?>
    <option value="<?php echo $row['route'];?>"><?php echo $row['route'];?></option>
   
   <?php }} 

   if(isset($_POST['id1'])){
   $id2=$_POST['id1'];
   $result=mysqli_query($conn,"SELECT*FROM lga WHERE state_id='$id2'");
   while($row=$result->fetch_array()){?>
    <option value="<?php echo $row['lga'];?>"><?php echo $row['lga'];?></option>
   
   <?php }} 

  //     if(isset($_POST['save'])){
  //  $id=$_POST['save'];
  //  $result=mysqli_query($conn,"SELECT * FROM destination WHERE city_id='$id'");
  //  $rows = array();
  //  while($row=$result->fetch_array()){
  //  $rows[] = $row;

                              
  //   }
  //   echo json_encode($rows);
  // }
   if(isset($_POST['id2'])){
   $id=$_POST['id2'];
   $result=mysqli_query($conn,"SELECT*FROM destination WHERE city_id='$id'");
   while($row=$result->fetch_array()){?>
    <option value="<?php echo $row['id'];?>"><?php echo $row['route'];?></option>
   
   <?php }} 

    if(isset($_POST['id3'])){
   $id=$_POST['id3'];
   $data[] = array();
   $result=mysqli_query($conn,"SELECT*FROM destination where city_id = '$id'");
   if($result ->num_rows > 0){
   while($row=$result->fetch_assoc()){
    $data["route"] = $row["route"];
    $data["hiace"] = $row["hiace"];
    $data["sienna"] = $row["sienna"];
    $data["sprinter"] = $row["sprinter"];
   
   }
 }
   echo json_encode($data);
 } 


 if ($_POST['hiace']) {
   // $hiace = $_POST['hiace'];
   // $sienna = $_POST['sienna'];
   // $sprinter = $_POST['sprinter'];
   $UpdateQuery = "UPDATE destination SET hiace='$_POST[hiace]', sienna='$_POST[sienna]',sprinter='$_POST[sprinter]' WHERE id='$_POST[hidden]'";               
mysqli_query($conn,$UpdateQuery);
 }
   ?>

