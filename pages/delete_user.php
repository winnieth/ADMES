<?php

$id=$_GET['delete'];

$sql="DELETE FROM `users` WHERE `users`.`user_id` =".$id;
$result=mysqli_query($db,$sql);

header('Location: admin.php');
?>