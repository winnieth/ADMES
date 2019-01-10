<?php
//display para options sa program
//make connection
$db = mysqli_connect('localhost','root','','registration');

if (!$db){
    die ("Connection failed". mysqli_connect_error());
}
$sql="SELECT * FROM areas ";
$result = mysqli_query($db, $sql);
$rows = mysqli_num_rows($result);

if ($rows){
    while ($area = mysqli_fetch_array($result)){
        echo "<option value='".$area['area_id']."'>".$area['area_name']." - ".$area['description']."</option>";
    }
}
?>