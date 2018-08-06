<?php

//make connection
$db = mysqli_connect('localhost','root','','registration');

if (!$db){
    die ("Connection failed". mysqli_connect_error());
}
$sql="SELECT * FROM usertype ";
$result = mysqli_query($db, $sql);
$rows = mysqli_num_rows($result);

if ($rows){
    while ($utype = mysqli_fetch_array($result)){
        echo "<option name=type>".$utype['usertype']."</option>";
    }
}
?>