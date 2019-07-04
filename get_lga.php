
<?php
   include("database.php");
   if(isset($_POST['id'])){
   $id=$_POST['id'];
   $result=mysqli_query($conn,"SELECT*FROM destination WHERE city='$id'");
   while($row=$result->fetch_array()){?>
    <option value="<?php echo $row['id'];?>"><?php echo $row['route'];?></option>
   
   <?php }} 

   ?>