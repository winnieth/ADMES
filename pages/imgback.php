<?php

session_start();

//echo "ssss".$_SESSION['program'];
$conn = mysqli_connect('localhost', 'root', '','registration');
if(isset($_POST['submit'])){
    
$target_Folder = 'folder/';
$target_Path = $target_Folder.basename( $_FILES['image']['name'] );

#$savepath = $target_Path.basename( $_FILES['image']['name'] );
    $file_name = $_FILES['image']['name'];

    $sql1="SELECT * FROM benchmark_files WHERE file_name=".$file_name;
    $result1=mysqli_query($conn, $sql1);
    //$ftch=$result1->fetch_array(); 

    if(file_exists('folder/'.$file_name)&&$result1==true)
    {
    echo "The file has already been uploaded!";
    //echo $file_name."jpg" ;
    }
    else
    {
//Check Connection
        if(mysqli_connect_errno())
        {
            echo "Failed to connect to database" .     mysqli_connect_errno();
        }
        $param_id = $_POST['param_id'];
        $bench_id = $_POST['bench_id']; //----------------------->>>
        $program_id = $_SESSION['program'];
        $area_id = $_SESSION['area'];
        $sql = "INSERT INTO `benchmark_files` (`file_id`, `file_name`,`file_path`,`area_id`,`program_id`,`bnch_id`,`param_id`) 
                VALUES (NULL, '$file_name', '$target_Folder','$_SESSION[area]','$_SESSION[program]','$bench_id','$param_id')";
        if (!$result = mysqli_query($conn,$sql))
        {
            die('Error: ' . mysqli_error($conn));
        }
       /* $sql2 = "UPDATE `tbl_benchmarks` SET `file_name`='$file_name',`path`='$target_Folder' 
                WHERE bnch_id = '$_SESSION[bench] && param_id='$_SESSION[param]'";
                if (!$result = mysqli_query($conn,$sql))
                {
                    die('Error: ' . mysqli_error($conn));
                }

                */
        //echo "1 record added successfully in the database";
        echo '<br />';

        // Move the file into UPLOAD folder
        move_uploaded_file( $_FILES['image']['tmp_name'], $target_Path );

        $query = "SELECT file_id FROM `benchmark_files` WHERE `file_name` = '$file_name'";
        if(!$result = mysqli_query($conn, $query)){
            echo "<h1>ERRROR</h1>";
            die('Error: ' . mysqli_error($conn));
        }

        if(mysqli_num_rows($result) == 0){
            echo "<h6> id does not exist</h6>";
        }
        $id = mysqli_fetch_assoc($result);

        $_SESSION['param']="";
        $_SESSION['bench']="";
        header('location: bnchimg.php?param_id='.$param_id."&bench_id=".$bench_id);
        //echo "id = ".$resultid;
        //echo "</br></br>File Uploaded <br />";
        //echo 'File Successfully Uploaded to:&nbsp;' . $target_Path;
        //echo '<br />';  
        //echo 'File Name:&nbsp;' . $_FILES['image']['name'];
        //echo'<br />';
        //echo 'File Type:&nbsp;' . $_FILES['image']['type'];
        //echo'<br />';
        //echo 'File Size:&nbsp;' . $_FILES['image']['size'];
        //echo "<img src= '".$target_Folder.$file_name."'>";

        
    }
}
?>