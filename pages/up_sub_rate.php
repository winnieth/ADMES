<?php
include "connectdb.php";

if (isset($_POST['rate'])){
    $rating = $_POST['scale'];
    $benchid = $_POST['benchmark'];
    $sub_bench_id = $_POST['sub_bench_id'];
    echo $rating;

    $sql4 = "UPDATE `sub_benchmark` SET `rating` = $rating WHERE `sub_benchmark`.`sbench_id` = " . $sub_bench_id;
    //echo $sql4;
    $result4 = mysqli_query($db, $sql4);

    header ('Location: accr_a1.php');
}

?>