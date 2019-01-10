<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<?php 
        $GLOBALS['img']= array();
        $counter=0;
          $conn = mysqli_connect('localhost', 'root', '','sample2');
          if (!$conn){
            die ("Connection failed". mysqli_connect_error());
            }
            $sql="SELECT * FROM table_sample ";
            $result = mysqli_query($conn, $sql);
            $GLOBALS['rows'] = mysqli_num_rows($result);
            
            if ($GLOBALS['rows']){
                while ($image = mysqli_fetch_array($result)){
                    array_push($GLOBALS['img'],$image['path'].$image['image']);
                echo "<a data-toggle='modal' data-target='#myModal'>
                <img class=' img-responsive' src=".$image['path'].=$image['image']." width='150px' height='130px'>
                </a>&ensp;
                ";

                
                }
            }
?>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
          
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php  
                        for ($x = 0; $x<=$GLOBALS['rows']; $x++){
                            if ($x==0){
                                echo "<li data-target='#myCarousel' data-slide-to='0' class='active'></li>";
                            }else{
                                echo "<li data-target='#myCarousel' data-slide-to=".$x."></li>";
                            }
                        }
                    ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                        for ($x = 0; $x<$GLOBALS['rows']; $x++){
                            if ($x==0){
                                echo " <div class='item active'>
                                        <img src='".$GLOBALS['img'][$x]."' >
                                        </div>";
                            }else{
                                echo " <div class='item'>
                                <img src='".$GLOBALS['img'][$x]."' >
                                </div>";
                            }
                        }

                    ?>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
          
        </div>
      
    </div>
  </div>
  
</div>


</body>
<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript 
<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>-->

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
</html>