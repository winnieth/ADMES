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

      <div id="wrapper" style=" background-color: #a5c3cf" >

            <div class="row">
			 <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          
                <div class="col-sm-2">
                    <img src="default-user.png" class="img-circle" width="100" height="100">
                    <h5> <br>
                    <?php session_start();
                    
                     echo "Username: ".$_SESSION ['username']."<br>";
                     echo " ".$_SESSION ['usertype'] ."<br>";
                     //echo "utype ".$_SESSION ['utype'] ."<br>";
                     echo " ".$_SESSION ['program-desc'] ."<br>";
                     //echo "area ".$_SESSION ['area'] ."<br>";
                    ?>
                    </h5>
                </div>
                <div class="col-sm">
                   <h2>AACCUP DOCUMENT MANAGEMENT AND EVALUATION SYSTEM FOR BUKSU</h2>
                    <h4>Program Coordinator</h4>
                </div>    
            </div>
               
            <ul class="nav navbar-top-links navbar-right">
                
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> About</a>
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
                        <li>
                            <a href="pc_index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                            <!-- /.nav-second-level -->
                  
                        <li>
                            <a href="pr_addac.php"><i class="fa fa-table fa-fw"></i> Registered Users</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tasks fa-1x"></i> Areas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <?php
                                        
                                    ?>
                                    <a href="pc_areal.php?area=1" >Area I
                                        
                                    </a>
                                </li>
                                    
                                <li>
                                    <?php
                                        
                                    ?>
                                    <a href="pc_areal.php?area=2">Area II</a>
                                </li>
                                <li>
                                    <?php
                                        
                                    ?>
                                    <a href="pc_areal.php?area=3">Area III</a>
                                </li>
                                <li>
                                    <?php
                                        
                                    ?>
                                    <a href="pc_areal.php?area=4">Area IV</a>
                                </li>
                                <li>
                                    <?php
                                        
                                    ?>
                                    <a href="pc_areal.php?area=5">Area V</a>
                                </li>
                                <li>
                                <?php
                                        
                                    ?>
                                    <a href="pc_areal.php?area=6">Area VI</a>
                                </li>
                                <li>
                                <?php
                                        
                                    ?>
                                    <a href="pc_areal.php?area=7">Area VII</a>
                                </li>
                                <li>
                                <?php
                                       
                                    ?>
                                    <a href="pc_areal.php?area=8">Area VIII</a>
                                </li>
                                <li>
                                <?php
                                       
                                    ?>
                                    <a href="pc_areal.php?area=9">Area IX</a>
                                </li>
                                <li>
                                <?php
                                        
                                    ?>
                                    <a href="pc_areal.php?area=10">Area X</a>
                                </li>
                            </ul>
                        </li>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper" style=" background-color: #eee">
            <div class="row">
                <div class="col-sm-5">
                    <div class="input-group custom-search-form">
                                  
                    </div>
                    <?php
                        include "connectdb.php";

                    //loop for 10 areas
                    for ($i=1; $i<=10; $i++){ 
                        //echo $_SESSION['area']; 
                        $q="SELECT * FROM areas WHERE area_id=".$i;
                        $r=mysqli_query($db,$q);
                        $f= $r -> fetch_array();
                        echo "<h4>".$f['area_name']."&emsp;".$f['description']."</h4>";
                        echo "<hr>";

                        $sql2="SELECT * FROM parameters WHERE area_id=".$i;
                        $result2= mysqli_query($db,$sql2);
                        $rows= mysqli_num_rows($result2);

                        if ($rows){
                        
                            while ($prm=mysqli_fetch_assoc($result2)){

                                
                                echo"<div class='media'><a href='#".$prm['param_id']."' data-toggle='collapse'>".$prm['parameter_name']."</a>
                                <div>
                                <div class'media-body collapse'>";

                                $prm_id = $prm['param_id'];


                            $sql3 ="SELECT benchmark.*,benchmark_files.file_name,benchmark_files.file_path as path,parameters.param_id  FROM benchmark
                            LEFT JOIN parameters ON benchmark.param_id = parameters.param_id LEFT JOIN benchmark_files ON benchmark.bnch_id = benchmark_files.bnch_id WHERE parameters.param_id = '$prm_id' ";

                                if (!$result3= mysqli_query($db,$sql3)){
                                    echo mysqli_error($db);
                                }
                                $rows2= mysqli_num_rows($result3);

                                if($rows2){
                                    $benchcCounter = 0;
                                    $benchTotal = 0;
                                    while($bnch=mysqli_fetch_array($result3)){
                                        //echo "&emsp;<a href='bnchimg.php'>".$bnch['bnch_desc']."</a><br>";
                                        //echo $bnch['bnch_desc'];
                                        if($bnch['file_name'] != ""){
                                            $benchcCounter++;
                                        }
                                        $benchTotal++;
                                    }
                                    echo $benchcCounter."/".$benchTotal;
                                    $percent = ($benchcCounter/$benchTotal)*100;
                                    $total = 100 - intval($percent);
                                    echo "<br>".intval($percent)." %";
                                    
                                    echo "<div class='progress mb-2'>
                                        <div class='progress-bar bg-success' role='progressbar' style='width: ".intval($percent)."' aria-valuenow='".intval($percent)."' aria-valuemin='0' aria-valuemax='100'>".intval($percent)."</div>
                                </div><br><br>
                                    ";
                                }
                                        
                                
                            }// end while
                            
                        }

                    }
  
                ?>
                </div>

            </div>
         
          
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
