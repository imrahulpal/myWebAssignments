<?php 
    include("../../config/config.php");
    include("header.php");


     //add
     $title='';
     $description='';
     if(isset($_GET['id']) && $_GET['id']>0){
         // edit
         $result = $conn->query("select * from employee where id=".$_GET['id']);
         if($result->num_rows > 0){
             $row = $result->fetch_assoc();
             $title=$row['name'];
             $email=$row['email'];
         }
     }




?>
<h2>Employee Manage</h2>
<form method="POST" action="../admin/callback/employee.php" enctype="multipart/form-data">
<input type="text" name="name">
<input type="email" name="email">
<input type="password" name="password">
<input type="submit">
</form>
<?php 
    include("footer.php");
?>