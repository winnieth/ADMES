<?php
include "connectdb.php";
$Status = $_GET['status'];
$logintype = $_GET['logintype'];

$userType;
echo "Status = $Status\n";
$count=0;
session_start();
if (!empty($Status)){
    $username = $_GET['username'];
    $password = $_GET['password'];
    if (!empty($username) && !empty($password)){
        
        //$sql="SELECT * FROM users WHERE user='$username' AND pass='$password'";
        $sql = "SELECT * FROM users LEFT JOIN usertype ON users.utype = usertype.utype_id LEFT JOIN program ON users.program_id=program.program_id WHERE user = '".$username."' AND pass = '".$password."' ";
        $result=mysqli_query($db, $sql); 



        while($row = mysqli_fetch_array($result)){ 

            $userType = $row['usertype'];
            echo $userType;
            $count = $count + 1 ;

            
           $_SESSION['username'] = $username;
           $_SESSION['usertype'] = $userType;
           $_SESSION['name']= $row['name'];
           $_SESSION['last']= $row['lastname'];
           $_SESSION['utype'] = $row['utype_id'];
           $_SESSION['program'] =  $row['program_id'];
           $_SESSION['program-desc'] = $row ['program_name'];
           $_SESSION['area'] =  $row['area_id'];


        }
        echo "Count = $count\n";
        
        if ($count!=0){
        
            echo "Naay sulod ang count";
            echo "Login Type=$logintype";

            

            if($userType == 'Admin') {
                header('Location: index.html?admin');
            } elseif ($userType == 'Program Coordinator') {
                header('Location: pc_index.php?pr');
            } elseif ($userType == 'Area Coordinator') {
                header('Location:area_index.php?ar');
            } elseif ($userType == 'Accreditor') {
                header('Location:accr_a1.php?accr');
            } else {
                echo "Switch not working!";
            } 

        }
        else{
            echo "Diri nisulod";
            //header('Location: loginform.php?logintype='.$logintype);
        }
    }else{
        header('Location: loginform.php?login=error!username&password=empty&logintype='.$logintype);
        echo "please try again!";
    }

}

?>