<?php
$conn = mysqli_connect('localhost', 'root', '','sample2');
if(isset($_POST['submit'])){
    
$target_Folder = 'folder/';
$target_Path = $target_Folder.basename( $_FILES['image']['name'] );

#$savepath = $target_Path.basename( $_FILES['image']['name'] );
    $file_name = $_FILES['image']['name'];

    if(file_exists('folder/'.$file_name))
    {
    //echo "That File Already Exist";
    //echo $file_name."jpg" ;
    }
    else
    {
//Check Connection
        if(mysqli_connect_errno())
        {
            echo "Failed to connect to database" .     mysqli_connect_errno();
        }

        $sql = "INSERT INTO `table_sample` (`id`, `image`, `path`) VALUES (NULL, '$file_name', '$target_Folder')";
        if (!$result = mysqli_query($conn,$sql))
        {
            die('Error: ' . mysqli_error($conn));
        }
        //echo "1 record added successfully in the database";
        echo '<br />';

        // Move the file into UPLOAD folder
        move_uploaded_file( $_FILES['image']['tmp_name'], $target_Path );

        $query = "SELECT id FROM `table_sample` WHERE `image` = '$file_name'";
        if(!$result = mysqli_query($conn, $query)){
            echo "<h1>ERRROR</h1>";
            die('Error: ' . mysqli_error($conn));
        }

        if(mysqli_num_rows($result) == 0){
            echo "<h6> id does not exist</h6>";
        }
        $id = mysqli_fetch_assoc($result);
        $resultid = $id['id'];
        header('location: blank.php');
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