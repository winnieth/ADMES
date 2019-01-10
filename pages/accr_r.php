<?php
include "connectdb.php";

if (isset($_POST['rate'])){
    $rating = $_POST['scale'];
    $benchid = $_POST['benchmark'];
    echo $rating;

    $sql4 = "INSERT INTO benchmark_rating (benchmark_id, rating_scale)
            VALUES ('$benchid','$rating')";
    $result4 = mysqli_query($db, $sql4);

    header ('Location: accr_a1.php');
}
?>