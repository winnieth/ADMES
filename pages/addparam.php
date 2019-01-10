<?php

include "connectdb.php";


if (isset($_POST['addprm'])){

    if (!empty($_POST['param'])){
        $parameter = mysqli_escape_string($db,$_POST['param']);
        //echo "<hr>".$parameter ;
        
        $sql="INSERT INTO parameters (parameter_name,area_id,program_id) VALUES ('$parameter','$_SESSION[area]','$_SESSION[program]')";
        if (!$result= mysqli_query($db, $sql)){
            echo mysqli_error($db);
        }
        
        header('location: area_param2.php');

    }else{
        echo "input something";
    }
}




?>