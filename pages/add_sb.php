<?php
include "connectdb.php";

if (isset($_POST['addsb'])) {
    $sbench = $_POST['sbnch'];
    $benchm = $_POST['benchmark'];
    $parameter = $_POST['parameter'];

    if (!empty($_POST['sbnch'])){
        $sbench = mysqli_escape_string($db,$_POST['sbnch']);
       // echo "<hr>".$bench ;
        
        $sql="INSERT INTO sub_benchmark (sbnch_desc, bnch_id, param_id) VALUES ('$sbench','benchm','$parameter')";
        if (!$result= mysqli_query($db, $sql)){
            echo mysqli_error($db);
        }

       // unset($_POST['addb']);
       header ('Location: area_param2.php');
    
    }else{
        echo "input something";
    }
}


?>