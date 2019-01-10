<?php
include "connectdb.php";

$GLOBALS['id']=$_GET['delete'];

//echo $GLOBALS['id'];

$sql="DELETE FROM `users` WHERE `users`.`user_id` =".$id;
$result=mysqli_query($db,$sql);

header('Location: tables.php');
?>