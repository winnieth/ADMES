<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AACCUP DMES</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS 
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"></a>
            </div>
            <!-- /.navbar-header -->
                    <h2> AACCUP DOCUMENT MANAGEMENT AND EVALUATION SYSTEM</h2>
                    <?php session_start();?>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>coordinator</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                     
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                     
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Uploaded File
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Request for a File
                                    <span class="pull-right text-muted small">10 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                       
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Areas<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Area I</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#">Area II</a>
                                    </li>
                                    <li>
                                        <a href="#">Area III</a>
                                    </li>
                                    <li>
                                        <a href="#">Area IV</a>
                                    </li>
                                    <li>
                                        <a href="#">Area V</a>
                                    </li>
                                    <li>
                                        <a href="#">Area VI</a>
                                    </li>
                                    <li>
                                        <a href="#">Area VII</a>
                                    </li>
                                    <li>
                                        <a href="#">Area VIII</a>
                                    </li>
                                    <li>
                                        <a href="#">Area IX</a>
                                    </li>
                                    <li>
                                        <a href="#">Area X</a>
                                    </li>
                                </ul>
                            </a>
                        </li>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <h4><?php 
                            include "connectdb.php";
                            //echo $_SESSION['area']; 
                            $q="SELECT * FROM areas WHERE area_id=".$_SESSION['area'];
                            $r=mysqli_query($db,$q);
                            $f= $r -> fetch_array();
                            echo $f['area_name']."&emsp;".$f['description'];
                ?></h4>    
                
                    <h3 class="page-header">
                    <?php
                        //session_start();
                        include "connectdb.php";
                        //echo $_GET['param_id']."-".$_GET['bench_id']."-".$_SESSION['area']."-".$_SESSION['program'];
                        
                        $sql="SELECT * FROM `benchmark` INNER JOIN parameters on benchmark.param_id=parameters.param_id 
                        WHERE benchmark.area_id=".$_SESSION['area']." AND benchmark.param_id=".$_GET['param_id']." AND benchmark.bnch_id=".$_GET['bench_id'];
                        $result1= mysqli_query($db,$sql);
                        $rows= $result1 -> fetch_array();
                        //echo $rows;
                        echo $rows['parameter_name']."<br>";
                        echo "<h4>".$rows['bnch_desc']."</h4>";
                        ?>

                    </h3>
                </div>
            </div>

            <?php //include("imgback.php");?>
          <?php 

        $GLOBALS['img']= array();
          $conn = mysqli_connect('localhost', 'root', '','registration');
          if (!$conn){
            die ("Connection failed". mysqli_connect_error());
            }
            $sql="SELECT * FROM `benchmark_files` WHERE param_id='$_GET[param_id]' AND bnch_id='$_GET[bench_id]' AND program_id='$_SESSION[program]' AND area_id='$_SESSION[area]'";
            $result = mysqli_query($conn, $sql);
            $GLOBALS['rows'] = mysqli_num_rows($result);

            if ($GLOBALS['rows']){
                while ($image = mysqli_fetch_assoc($result)){
                //echo "<img class='img-thumbnail' src=".$image['file_path'].=$image['file_name']." width='204' height='136'>";
                array_push($GLOBALS['img'],$image['file_path'].$image['file_name']);
                echo "<a data-toggle='modal' data-target='#myModal'>
                <img class=' img-responsive' src=".$image['file_path'].=$image['file_name']." width='204px' height='136px'>
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
    

                      <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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

</body>

</html>
