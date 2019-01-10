<?php
//display para options sa program
//make connection
$db = mysqli_connect('localhost','root','','registration');

if (!$db){
    die ("Connection failed". mysqli_connect_error());
}
$sql="SELECT * FROM program ";
$result = mysqli_query($db, $sql);
$rows = mysqli_num_rows($result);

if ($rows){
    while ($prog = mysqli_fetch_array($result)){
        echo "<option value='".$prog['program_id']."'>".$prog['program_name']."</option>";
    }
}
?>