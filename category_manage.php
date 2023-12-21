<?php 
    //include("header.php");
    include("../config/config.php");
    include("header.php");

    //add
    $title='';
    $description='';
    if(isset($_GET['id']) && $_GET['id']>0){
        // edit
        $result = $conn->query("select * from category where id=".$_GET['id']);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $title=$row['name'];
            $description=$row['description'];
        }
    }
?>
<h2>category Manage</h2>
<form method="POST" action="callback/category.php" enctype="multipart/form-data">
<input type="text" name="title" value="<?php echo $title;?>" required>
<textarea name="description"><?php echo $description;?></textarea>
<input type="submit">
</form>
<?php 
    include("footer.php");
?>

</body>
</html>