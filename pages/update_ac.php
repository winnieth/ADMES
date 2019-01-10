<?php
include ("connectdb.php");
session_start();

$id=$_POST['updateid'];
$n=$_POST['name'];
$l=$_POST['lastname'];
$u=$_POST['user'];
$p=$_POST['pass'];
$ar=$_POST['area'];




    $sql="UPDATE `users` SET `name` = '$n', `lastname` = '$l', `user` = '$u', `pass` = '$p', `program_id` = '$_SESSION[program]',
                    `area_id`= '$ar' WHERE `users`.`user_id` ='$id'";
    $result=mysqli_query($db, $sql);
    //echo $result;
   // echo "Update successful!-".$id;
   // echo "UPDATE 'students' SET 'student_id'='$stdn', 'lastname'='$l', 'firstname'='$f',
   // 'midname'='$m', 'address'='$a', 'course'='$c' WHERE 'students'.'std_id'='$id";
    header('Refresh: 1; URL = pr_addac.php');
   //echo "update succes"
   


?>