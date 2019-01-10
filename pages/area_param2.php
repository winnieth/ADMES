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

            <div class="row">
                <div class="col-sm-2">
                    
                    <h5> <br>
                    <?php session_start();
                      echo "Username: ".$_SESSION ['username']."<br>";
                      echo " ".$_SESSION ['usertype'] ."<br>";
                      //echo "utype ".$_SESSION ['utype'] ."<br>";
                      echo " ".$_SESSION ['program-desc'] ."<br>";
                      echo "Area: ".$_SESSION ['area'] ."<br>";
 
                    ?></h5>
                </div>
                <div class="col-sm">
                    <h2> AACCUP DOCUMENT MANAGEMENT AND EVALUATION SYSTEM</h2>
                    <h4>Area Coordinator</h4>
                   
                    
                </div>    
            </div>
               
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                   
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                      
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
                            <a href="area_index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Accreditation Files</a>
                        </li>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <!--Search bar-->
                <div class="row">
                    <div class="col-sm-5">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <h4><?php 
                            include "connectdb.php";
                            //echo $_SESSION['area']; 
                            $q="SELECT * FROM areas WHERE area_id=".$_SESSION['area'];
                            $r=mysqli_query($db,$q);
                            $f= $r -> fetch_array();
                            echo $f['area_name']."&emsp;".$f['description'];
                ?></h4>
            <hr>
            
            <!-- add parameter input box
                <form action="addparam.php" method="post">
                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="Add parameter" name="param">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="addprm">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </span>
                        </div>
                </form>
            <?php include "addparam.php" ?> -->
            <?php   

            //echo $_SESSION['area'];
                $area_id = $_SESSION['area'];
                $sql2="SELECT * FROM parameters WHERE area_id='$area_id'";
                $result2 = mysqli_query($db,$sql2);
                $rows= mysqli_num_rows($result2);

                if ($rows){
                   
                    for ($x=0; $x<$rows; $x++){
                        $prm=mysqli_fetch_assoc($result2);
                        $p=0;
                        echo"<div ><b><a href='#".$prm['param_id']."' >".$prm['parameter_name']."</b></a>
                                <div>
                            
                                <div id='".$prm['param_id']."' '>
                        ";
                        $_SESSION['param']=$prm['param_id'];

                        $prm_id = $prm['param_id'];
                       // $sql3 ="SELECT benchmark.file_name,benchmark.bnch_id, benchmark.bnch_desc, parameters.param_id  FROM benchmark
                       // LEFT JOIN parameters ON benchmark.param_id = parameters.param_id WHERE parameters.param_id = '$prm_id' ";

                       $sql7="SELECT * FROM classification";
                       $result7= mysqli_query($db,$sql7);
                       $rows7= mysqli_num_rows($result7);
                       for($c=1; $c <=$rows7; $c++){
                           $clss= mysqli_fetch_array($result7);
                           // print niya ang classification
                           echo "<b>".$clss['class']."</b><br>";


                       //$sql3 ="SELECT benchmark.*,benchmark_files.file_name,benchmark_files.file_path as path,parameters.param_id  FROM benchmark
                       //LEFT JOIN parameters ON benchmark.param_id = parameters.param_id LEFT JOIN benchmark_files ON benchmark.bnch_id = benchmark_files.bnch_id WHERE parameters.param_id = '$prm_id' ";
                       $sql3 ="SELECT benchmark.*,benchmark.bnch_id, benchmark.bnch_desc, parameters.param_id,benchmark_rating.rating_scale  FROM benchmark
                       LEFT JOIN parameters ON benchmark.param_id = parameters.param_id 
                       LEFT JOIN benchmark_rating ON benchmark.bnch_id = benchmark_rating.benchmark_id
                       WHERE parameters.param_id= '$prm[param_id]' AND benchmark.class_id='$c'";
                        if (!$result3= mysqli_query($db,$sql3)){
                            echo mysqli_error($db);
                        }
                        $rows2= mysqli_num_rows($result3);

                        if($rows2){
                            $benchcCounter = 0;
                            $benchTotal = 0;

                            for($b=0; $b<$rows2; $b++){
                                $bnch=mysqli_fetch_array($result3);

                                if ($bnch['has_sub']==1){

                                    echo "&emsp;&emsp;&ensp;<a>".$bnch['bnch_desc']."</a><br>";
                                    $sql4="SELECT * FROM sub_benchmark WHERE bnch_id= '$bnch[bnch_id]'";
                                    $result4=mysqli_query($db, $sql4);
                                    $rows3=mysqli_num_rows($result4);

                                    if ($rows3){

                                    for ($s=0; $s < $rows3; $s++){

                                        $sub=mysqli_fetch_array($result4);

                                        $sql9="SELECT * FROM `benchmark_files` WHERE area_id='".$area_id."' AND param_id='".$prm_id."' AND bnch_id='".$bnch['bnch_id']."' AND program_id='".$_SESSION['program']."'";
                                        $result9=mysqli_query($db,$sql9);
                                        $rows9=mysqli_num_rows($result9);
                                        echo "&emsp;";

                                        echo "&emsp; &emsp;<span class='label label-success' data-toggle='tooltip' title='Number of Uploaded Files'>".$rows9."</span>
                                        <a href='bnchimg.php?param_id=".$prm_id."&bench_id=".$bnch['bnch_id']."&sbench_id=".$sub['sbench_id']."&is_sub=1' >
                                        
                                        ".$sub['sbench_desc']."</a><br>";
                                        }

                                    }
                                    
                                
                                }
                                else{
                                $sql8="SELECT * FROM `benchmark_files` WHERE area_id='".$area_id."' AND param_id='".$prm_id."' AND bnch_id='".$bnch['bnch_id']."' AND program_id='".$_SESSION['program']."'";
                                $result8=mysqli_query($db,$sql8);
                                $rows8=mysqli_num_rows($result8);
                                echo "&emsp;<span class='label label-success' data-toggle='tooltip' title='Number of Uploaded Files'>".$rows8."</span>
                                <a href='bnchimg.php?param_id=".$prm_id."&bench_id=".$bnch['bnch_id']."' '>".$bnch['bnch_desc']."</a><br>";
                                //echo "hahai".$prm_id;
                                //echo "<form action='bnchimg.php' method='GET'><input type='hidden' name='p' value="$prm['param_id']">
                                //                        <input type='hidden' name='b' value='".$bnch['bnch_id']."'></form>";
                                //echo $bnch['bnch_desc'];
                                $sql5="SELECT * FROM `benchmark_files` 
                                LEFT JOIN benchmark ON benchmark.bnch_id = benchmark_files.bnch_id 
                                WHERE benchmark_files.file_name IS NOT NULL AND benchmark_files.bnch_id=".$bnch['bnch_id'];
                                $result5=mysqli_query($db, $sql5);
                                $rows5= mysqli_num_rows($result5);
                            //    if($bnch['file_name'] != ""){
                            //        $benchcCounter++;
                            //    }
                            //    $benchTotal++;
                            //   echo "sdfghj".$rows5;
                                $_SESSION['bench']= $bnch['bnch_id'];
                                }
                                
                            }
                            //echo $benchcCounter."/".$benchTotal;
                            //echo "<br>".($benchcCounter/$benchTotal)*100;
                            //echo $_SESSION['param'];
                            //echo $_SESSION['bench'];
                            
                           /* echo "&emsp;
                            <a class='media' href='#".$x."' data-toggle=''>Add benchmark</a>
                                <div class'media-body collapse'>
                                    <div id='".$x."' class='collapse'>
                                        <form action='add_b.php' method='post'>
                                            <div class='input-group'>
                                                <input type='text' class='form-control' placeholder='Add benchmark' name='bnch'>
                                                <span class='input-group-btn'>
                                                    <input type='hidden' name='parameter' value='".$prm['param_id']."'></input>                                                
                                                    <button class='btn btn-default' type='submit' name='addb'>
                                                        <i class='fa fa-plus'></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            
                        
                                <br>
                            ";  
                        */
                        }else{
                            //---------------- Add on first ----------------//
                
                         echo   "<form action='add_b.php' method='post'>
                            <div class='input-group'>
                                <input type='text' class='form-control' placeholder='Add benchmark' name='bnch' required>
                                <span class='input-group-btn'>
                                    <input type='hidden' name='parameter' value='".$prm['param_id']."'></input>
                                    <button class='btn btn-default' type='submit' name='addb'>
                                        <i class='fa fa-plus'></i>
                                    </button>
                                </span>
                            </div>
                        </form>";


                        }
                            
                    }
                        echo "
                        </div>
                        </div>
                        </div> <br>";

                    }// end for loop
                    
                }

            ?>

        
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
