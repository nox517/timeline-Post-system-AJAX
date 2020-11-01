<?php

include_once("db.php");


$requestType = $_REQUEST['requestType'];
$user = $_REQUEST['user'];
$postText = $_REQUEST['postText'];
$id = $_REQUEST['id'];

if($requestType != ''){
    if($requestType == 'add'){
        $insert = "INSERT INTO posts (user,postText) VALUES ('$user', '$postText')";
        $run = mysqli_query($conn, $insert);
    }else if($requestType == 'delete'){
        $deleteQuery = "DELETE FROM posts WHERE id = $id";
        $run = mysqli_query($conn, $deleteQuery);
    }else if($requestType == 'edit'){
        $updateQuery = "UPDATE posts SET postText = '$postText' WHERE id = '$id'";
        $run = mysqli_query($conn, $updateQuery);
    }
}

$select = "SELECT * FROM posts ORDER BY id DESC";

$query = mysqli_query($conn, $select);

while($row = mysqli_fetch_assoc($query)){
?>

<div class="card-panel post">
    <i title="Delete" class="small material-icons right" onclick="post('delete', <?php echo $row['id'] ?>)">delete</i>
    <i title="Edit" class="edit small material-icons right" data-id= "<?php echo $row['id'] ?>">edit</i>
    <h5><?php echo $row['user'] ?></h5>
    <small><i class="tiny material-icons time">query_builder</i><?php echo $row['time'] ?></small>
    <p><?php echo $row['postText']?></p>
</div>

<?php
}

?>