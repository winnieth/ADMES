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
                    <img src="default-user.png" class="img-circle" width="100" height="100">
                    <h5>
                    <?php session_start();
                    
                    


                    echo "Username: ".$_SESSION ['username']."<br>";
                    echo " ".$_SESSION ['usertype'] ."<br>";
                    //echo "utype ".$_SESSION ['utype'] ."<br>";
                    echo " ".$_SESSION ['program-desc'] ."<br>";
                    echo "Area : ".$_SESSION ['area'] ."<br>";

                    ?>
                    </h5>
                </div>
                <div class="col-sm">
                    <h2> AACCUP DOCUMENT MANAGEMENT AND EVALUATION SYSTEM</h2>
                    <h4>Area Coordinator</h4>
                </div>    
            </div>
               
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
        
                <!-- /.dropdown -->
                <li class="dropdown">
                   
                    
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
                        <li>
                            <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="area_param2.php"><i class="fa fa-edit fa-fw"></i> Accreditation Files</a>
                        </li>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-sm-5">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div><hr>
                    <h4><?php 
                            include "connectdb.php";
                            //echo $_SESSION['area']; 
                            $q="SELECT * FROM areas WHERE area_id=".$_SESSION['area'];
                            $r=mysqli_query($db,$q);
                            $f= $r -> fetch_array();
                            echo $f['area_name']."&emsp;".$f['description'];

                            
                ?></h4>
                    <hr>
                    <?php 
include "connectdb.php";

$sql2="SELECT * FROM parameters WHERE area_id=".$_SESSION['area'];
$result2= mysqli_query($db,$sql2);
$rows= mysqli_num_rows($result2);

if ($rows){
   
    while ($prm=mysqli_fetch_assoc($result2)){

        
        echo"<div class='media'><a href='#".$prm['param_id']."' data-toggle='collapse'>".$prm['parameter_name']."</a>
        <div>
        <div class'media-body collapse'>";

        $prm_id = $prm['param_id'];
       // $sql3 ="SELECT benchmark.file_name,benchmark.bnch_id, benchmark.bnch_desc, parameters.param_id  FROM benchmark
       // LEFT JOIN parameters ON benchmark.param_id = parameters.param_id WHERE parameters.param_id = '$prm_id' ";

       $sql3 ="SELECT benchmark.*,benchmark_files.file_name,benchmark_files.file_path as path,parameters.param_id  FROM benchmark
       LEFT JOIN parameters ON benchmark.param_id = parameters.param_id LEFT JOIN benchmark_files ON benchmark.bnch_id = benchmark_files.bnch_id WHERE parameters.param_id = '$prm_id' AND benchmark.area_id='".$_SESSION['area']."'";

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
        </div>
            ";
        }
                
        
    }// end while
    
}

?>
                </div>
            </div>
         <hr>
        

        
        
        
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
