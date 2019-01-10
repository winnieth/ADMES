<?php
include "connectdb.php";

if (isset($_POST['addb'])){
    
    //$bench = $_POST['bnch'];
    $parameter = $_POST['parameter'];

    if (!empty($_POST['bnch'])){
        $bench = mysqli_escape_string($db,$_POST['bnch']);
       // echo "<hr>".$bench ;
      
        $area = $_SESSION['area'];
        $sql="INSERT INTO tbl_benchmarks (bnch_desc,param_id, area_id) VALUES ('$bench','$parameter','$area')";
        if (!$result= mysqli_query($db, $sql)){
            echo mysqli_error($db);
        }
       // echo $area;
       // unset($_POST['addb']);
       header ('Location: area_param2.php');
    
    }else{
        echo "input something";
    }
    
}



?>