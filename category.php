<?php
echo '<pre>';
print_r($_POST);
print_r($_FILES);


include("../config/config.php");

$message='';
if(isset($_SESSION['status']) && $_SESSION['status']!=''){
    $message= '<p>'.$_SESSION['status'].'</p>';
    unset($_SESSION['status']);
}
$roleHtml='';
$result = $conn->query("select * from category");
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){

        $id = $row['id'];
        $roleHtml .= '
        <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['detail'].'</td>
            <td><a href="category_manage.php?id='.$id.'">Edit</a> /<button>Delete</button> </td>
        </tr>';
    }
}

?>
<h2>Category</h2>
<?php echo $message?>
<a href="category_manage.php">Add New category</a>
<table border="1" style="width:100%">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php echo $roleHtml;?>
    </tbody>
</table>