<?php
include ("connectdb.php");

$id=$_POST['updateid'];
$n=$_POST['name'];
$l=$_POST['lastname'];
$u=$_POST['user'];
$p=$_POST['pass'];
$ut=$_POST['usertype'];
$up=$_POST['program'];



    $sql="UPDATE `users` SET `name` = '$n', `lastname` = '$l', `user` = '$u', `pass` = '$p', `utype`= '$ut',
                    `program_id`= '$up' WHERE `users`.`user_id` ='$id'";
    $result=mysqli_query($db, $sql);
    //echo $result;
   // echo "Update successful!-".$id;
   // echo "UPDATE 'students' SET 'student_id'='$stdn', 'lastname'='$l', 'firstname'='$f',
   // 'midname'='$m', 'address'='$a', 'course'='$c' WHERE 'students'.'std_id'='$id";
    header('Refresh: 1; URL = tables.php');
   //echo "update succes"
   


?>