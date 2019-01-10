<?php

//make connection
$db = mysqli_connect('localhost','root','','registration');

if (!$db){
    die ("Connection failed". mysqli_connect_error());
}
$sql="SELECT * FROM users ";

$result = mysqli_query($db, $sql);

$rows = mysqli_num_rows($result);


if ($rows){
    while ($usersdata = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$usersdata['name']."</td>";
        echo "<td>".$usersdata['lastname']."</td>";
        echo "<td>".$usersdata['user']."</td>";

        $sql2="SELECT * FROM usertype WHERE utype_id='".$usersdata['utype']."'";
        $result2 = mysqli_query($db, $sql2);
        $udtype = mysqli_fetch_array($result2);

        echo "<td>".$udtype['usertype']."</td>";
        echo "</tr>";
    }
}
?>