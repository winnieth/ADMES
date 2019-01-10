<?php
include "connectdb.php";
$Status = $_GET['status'];

echo $Status;
$count=0;
session_start();
echo "Wala pa kasulod";
if (!empty($Status)){
    echo "Nakasulod na";
    $username = $_GET['username'];
    $password = $_GET['password'];
    if (!empty($username) && !empty($password)){
        echo "Naay sulod";
        
        $sql="SELECT * FROM users WHERE user='$username' AND pass='$password'";
        $result=mysqli_query($con, $sql); 
        while($row=mysqli_fetch_array($result)){ 
           $count = $count + 1 ;
        }
        echo "Count = $count";
        
        if ($count!=0){
            $_SESSION ['username'] = $username;
            echo "Naay sulod ang count";

            switch ($_SESSION['usertype']) {
                case 'admin':
                    header('Location:index.php?admin');
                    break;
                    
                case 'prog':
                    header('Location:pc_index.php?pr');
                    break;
                    
                case 'area':
                    header('Location:area_index.php?ar');
                    break;

                case 'accr':
                    header('Location:index.php?accr');
                    break;

                default:
                    echo "Switch not working!";
                    break;
                }
            
        }
        else{
            echo "Diri nisulod";
            header('Location: loginform.php?login=unset');
        }
    }else{
        header('Location: loginform.php?login=error!username&password=empty');
    }

}

?>