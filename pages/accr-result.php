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
    <style>
        .td,.th{ overflow:auto }
    </style>
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
					<h2>&emsp;&emsp;&emsp; <b>AACCUP DOCUMENT MANAGEMENT AND EVALUATION SYSTEM</b></h2>
                    
                    <?php session_start();
                     echo "&emsp;&emsp;&emsp;username ".$_SESSION ['username']."&emsp;&emsp;&emsp;<br>";
                     echo "&emsp;&emsp;&emsp;usertype ".$_SESSION ['usertype'] ."&emsp;&emsp;&emsp;<br>";
                     //echo "&emsp;&emsp;&emsp;utype ".$_SESSION ['utype'] ."&emsp;&emsp;&emsp;<br>";
                     echo "&emsp;&emsp;&emsp;program ".$_SESSION ['program'] ."&emsp;&emsp;&emsp;<br>";
                     echo "&emsp;&emsp;&emsp;area ".$_SESSION ['area'] ."&emsp;&emsp;&emsp;<br>";
                    ?></h5>

            <ul class="nav navbar-top-links navbar-right">



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

        <!--    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
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
            </div>-->
        </nav>
        <div id="page-wrapper" style="margin-left:100px; margin-right:100px;">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                                include "connectdb.php";

 
                                $q="SELECT * FROM areas 
                                WHERE area_id='$_SESSION[area]'";
                                $res = mysqli_query($db,$q);
                                $rws = mysqli_fetch_assoc($res);

                                $q1="SELECT * FROM program WHERE program_id=".$_SESSION['program'];
                                $rs= mysqli_query($db,$q1);
                                $f= $rs -> fetch_array();
                                
                                echo "Program: ".$f['program_name'];
                                echo "<br>Accreditor: ".$_SESSION['name']." ".$_SESSION['last'];
                                
                                echo "<h3 class='page-header text-center'>";
                                echo "$rws[area_name]: $rws[description]";
                                echo "</h3>";
                                ?>
                    <div class="table text-center" style="overflow-x:auto">
                            
                                
                            
                        <table class="table-bordered">
                            
                            <tr> 
                                <th colspan="9" class="text-center">RATING SCALE</th>
                            </tr>
                            <tr>
                                <th class="text-center" >NA</th>
                                <th class="text-center" >0</th>
                                <th class="text-center" >1</th>
                                <th class="text-center" >2</th>
                                <th class="text-center" >3</th>
                                <th class="text-center" >4</th>
                                <th colspan="3" class="text-center" >5</th>
                            </tr>
                            <tr>
                                <th class="text-center" >-</th>
                                <th class="text-center" >-</th>
                                <th class="text-center" >Poor</th>
                                <th class="text-center" >Fair</th>
                                <th class="text-center" >Satisfactory</th>
                                <th class="text-center" >Very Satisfactory</th>
                                <th colspan="3" class="text-center" >Excellent</th>
                            </tr>
                            <tr>
                                <td class="text-center" ><i>Not Applicable</i></td>
                                <td class="text-center" ><i>Missing</i></td>
                                <td class="text-center" ><i>Criterion is met minimally in some respect, but much improvement is needed to overcome weaknesses</i></td>
                                <td class="text-center" ><i>Criterion is met in most respects, but some improvement is needed to oevercome weaknesses</i></td>
                                <td class="text-center" ><i>Criterion is met in all respects</i></td>
                                <td class="text-center" ><i>Criterion is fully met in all respects, at a level that demonstrates good practice</i></td>
                                <td colspan="3" class="text-center" ><i>Criterion is fully met with substantial number of good practices, at a level that provides a model for others</i></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                
                                <td><i>(75% lesser than the standards)</i></td>
                                <td><i>(50% lesser than the standards)</i></td>
                                <td><i>(100% compliance with the standards)</i></td>
                                <td><i>(50% greater than the standards)</i></td>
                                <td colspan="3" ><i>(75% greater than the standards)</i></td>
                            </tr>
    </table>
    
     <div style="overflow-x:auto"></div>                                                
<?php 
error_reporting(0);

include "connectdb.php";

$sql2="SELECT * FROM parameters";
$result2= mysqli_query($db,$sql2);
$rows= mysqli_num_rows($result2);

echo "";
$_SESSION['pm']=0;
if ($rows){
   
    for ($x=0; $x<$rows; $x++){
echo "<table class='table-bordered'>
                            <tr>
                                <th  class='text-center'>Indicators</th>
                                <th></th>
                                <th class='text-center'>Item Rating (IR)</th>
                                <th Class='text-center'>System-Implementation-Outcome Mean (SIOM)</th>
                                
                            </tr>
                            ";

        $prm=mysqli_fetch_assoc($result2);
        $am;
        $pmc=0;
        $counter=0;
        $total=0;
        $pm=0;
        $_SESSION['adddb'] = $prm['param_id'];
        $p=0;
          

        //echo ang parameter
        echo"<tr>";
        echo"<td  class='text-left'><b>".$prm['parameter_name']."</b></td><br>";
        echo "<td></td><td></td><td></td>";
        //echo"<td></td><td></td><td rowspan='13' >PM =</td> </tr>";
        //echo "PM=".array_sum($GLOBALS['pm'])/count($GLOBALS['pm']);
//echo "</th></tr>";

        $prm_id = $prm['param_id'];
    /*    $sql3 ="SELECT benchmark.bnch_id, benchmark.bnch_desc, parameters.param_id  FROM benchmark
        LEFT JOIN parameters ON benchmark.param_id = parameters.param_id WHERE parameters.param_id='$prm[param_id]'";
    */
    $sql7="SELECT * FROM classification";
    $result7= mysqli_query($db,$sql7);
    $rows7= mysqli_num_rows($result7);
    for($c=1; $c <=$rows7; $c++){
        $clss= mysqli_fetch_array($result7);
        // print niya ang classification
        echo"<tr style='background-color: #f2f2f2'>";
        echo "<td  class='text-left'><b>&emsp;".$clss['class']."</b></td></b>";
        
        

        $sql8="SELECT ROUND( AVG(rating_scale),2 ) as 'siom' FROM benchmark_rating
                LEFT JOIN benchmark ON benchmark.bnch_id=benchmark_rating.benchmark_id
                LEFT JOIN classification ON benchmark.class_id=classification.class_id
                WHERE benchmark.class_id=$c AND benchmark.param_id=".$prm['param_id'];
        $result8=mysqli_query($db,$sql8);
        $rows8=$result8 ->fetch_assoc();

        //echo "&emsp;Siom =".$rows8['siom']."<br>";
        echo "<td></td><td></td><td><b>".$rows8['siom']."</b></td></tr>";
        $total +=$rows8['siom'];
        $counter++;
        //echo"<td></td><td rowspan='12'>Siom =".$rows8['siom']."</td></tr>";


    $sql3 ="SELECT benchmark.*,benchmark.bnch_id, benchmark.bnch_desc, parameters.param_id,benchmark_rating.rating_scale  FROM benchmark
            LEFT JOIN parameters ON benchmark.param_id = parameters.param_id 
            LEFT JOIN benchmark_rating ON benchmark.bnch_id = benchmark_rating.benchmark_id
            WHERE parameters.param_id= '$prm[param_id]' AND benchmark.class_id='$c'";

        if (!$result3= mysqli_query($db,$sql3)){
            echo mysqli_error($db);
        }
        $rows2= mysqli_num_rows($result3);

       
        //loop pra sa benchmark
        if($rows2){
            for($b=0; $b<$rows2; $b++){
                $bnch=mysqli_fetch_array($result3);
                //print_r($bnch);
                if ($bnch['has_sub']==1){
                    //bench mark nga naay sub

                    //echo "<tr><td>";
                    $sql5="SELECT ROUND( AVG(rating),2 ) as 'ave' FROM `sub_benchmark` WHERE bnch_id = " . $bnch['bnch_id'];
                        $result5=mysqli_query($db, $sql5);
                        $rows5=$result5 -> fetch_assoc();

                        //echo "Ave: " . $rows5['ave'];
                    echo"<tr>";
                    echo "<td class='text-left'>&emsp;&emsp;".$bnch['bnch_desc']."</td>"; // print ang benchmark na naay sub
                    echo "<td></td><td><strong>".$rows5['ave']."</strong></td><td></td>";
                    echo"</tr>";
                    //echo "&emsp; <br>";
                   // echo"IR rating: ".$rows5['ave']."<br>";

                    $sql4="SELECT * FROM sub_benchmark WHERE bnch_id= '$bnch[bnch_id]'";
                    //echo "gggggg " . $bnch['bnch_id'];
                    $result4=mysqli_query($db, $sql4);
                    $rows3=mysqli_num_rows($result4);

                    if ($rows3){

                        for ($s=0; $s < $rows3; $s++){
                            ///sub
                            
                            $sub=mysqli_fetch_array($result4);
                            echo"<tr>";
                            echo "<td  class='text-left'>&emsp;&emsp;&emsp;&emsp;".$sub['sbench_desc']."";
                            echo "</td>";
                            //echo "ggggg-> " .$bnch['rating_scale'];
                            


                            $sql6="SELECT `sbench_id`, `rating` FROM `sub_benchmark` WHERE sbench_desc = " . "\"" .$sub['sbench_desc'] . "\"";
                            //echo $sql6;
                            $result6=mysqli_query($db, $sql6);
                            $rows6=$result6 -> fetch_assoc();

                                if($rows6['rating']==0){
                                    //echo "walai pai rating";
                                    echo"<td>
                                    &emsp;&emsp;rating : N/A 
                                    <span class='col-lg-8 pull-right'> 
                                    <form action='up_sub_rate.php' method='POST'>Rating
                                    <select class='custom-select' name='scale'>
                                            <option class='list-group-item' value='null'>N/A</option>
                                            <option class='list-group-item' value='0'>0</option>
                                            <option class='list-group-item' value='1'>1</option>
                                            <option class='list-group-item' value='2'>2</option>
                                            <option class='list-group-item' value='3'>3</option>
                                            <option class='list-group-item' value='4'>4</option>
                                            <option class='list-group-item' value='5'>5</option>
                                    </select>
                                    <input type='hidden' name='benchmark' value='".$bnch['bnch_id']."'></input>
                                    <input type='hidden' name='sub_bench_id' value='".$rows6['sbench_id']."'></input>
                                    <button type='submit' class='btn btn-xs' name='rate'>Submit</button>
                                    </form>
                                    </span>
                                    </td>
                                    ";
                                }else{
                                    echo"
                                    <td>
                                    &emsp;".$rows6['rating']."<br>
                                    </td><td></td><td></td>
                                    ";
                                    //echo"<td></td><td></td><td></td>";
                                    echo"</tr>";
                                }
                                
                                
                            //echo "</td></tr>";
                        }//end sa for loop sa sub-benchmark

                    }
                }else{

                    //Walai sub 

                    //echo "<tr><td>";
                    echo "<tr><td  class='text-left'>&emsp;&emsp;".$bnch['bnch_desc']."</td>";
                    echo"<td></td><td><strong>".$bnch['rating_scale']."</strong></td><td></td>";
                    
                    //echo "</td>";
                    //echo "<td>";
                    if($bnch['rating_scale']==""){
                        echo"
                    rating : N/A 
                    <span class='col-lg-8 pull-right'> 
                    <form action='accr_r.php' method='POST'>Rating
                    <select class='custom-select-sm' name='scale'>
                            <option class='list-group-item' value='null'>N/A</option>
                            <option class='list-group-item' value='0'>0</option>
                            <option class='list-group-item' value='1'>1</option>
                            <option class='list-group-item' value='2'>2</option>
                            <option class='list-group-item' value='3'>3</option>
                            <option class='list-group-item' value='4'>4</option>
                            <option class='list-group-item' value='5'>5</option>
                    </select>
                    <input type='hidden' name='benchmark' value='".$bnch['bnch_id']."'></input>
                    <button type='submit' class='btn btn-xs' name='rate'>Submit</button>
                    </form>
                    </span>
                        
                    ";
                    echo "<td></td><td></td><td></td>";
                    }else{
                        //echo"
                        //IR rating : ".$bnch['rating_scale']."
                        //";
                    }
                    
                    
                    echo "</tr><tr></tr>";
                    
                }
                
                //echo $bnch['bnch_desc'];
               
                
            }
            echo "&emsp;
        ";
        /**if (isset($_POST['addb'])){

            if (!empty($_POST['bnch'])){
                $bench = mysqli_escape_string($db,$_POST['bnch']);
               // echo "<hr>".$bench ;
                
                $sql="INSERT INTO benchmark (bnch_desc,param_id) VALUES ('$bench','$prm[param_id]')";
                if (!$result= mysqli_query($db, $sql)){
                    echo mysqli_error($db);
                }

               // unset($_POST['addb']);
            
            }else{
                //echo "input something";
            }
            
        }  
        
        }else{
            //---------------- Add on first ----------------//
          /*  if (isset($_POST['addb'])){

                if (!empty($_POST['bnch'])){
                    $bench = mysqli_escape_string($db,$_POST['bnch']);
                   // echo "<hr>".$bench ;
                    
                    $sql="INSERT INTO benchmark (bnch_desc,param_id) VALUES ('$bench','$prm[param_id]')";
                    if (!$result= mysqli_query($db, $sql)){
                        echo mysqli_error($db);
                    }
                
                }else{
                    echo "input something";
                }
            }  

            echo "&emsp;
        <a class='media' href='#".$p."' data-toggle='collapse'>add benchmark</a>
            <div class'media-body collapse'>
                <div id='".$p."' class='collapse'>
                    <form action='area_param2.php' method='post'>
                        <div class='input-group'>
                            <input type='text' class='form-control' placeholder='Add parameter' name='bnch'>
                            <span class='input-group-btn'>
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

        }
        
        //echo "<div class='table-responsive' >
        //<table class='table' >
       // </div>
       // </div>
       // </div> ";
       //echo "<tr><td>hhhhh</td></tr>";
    }//end sa for loop sa classification


    $pm=$total/$counter;
    echo "<tr><td colspan='4'></td></tr>";
    echo "<tr><td >";
    echo "<strong>Total Parameter Mean: </strong></td><td colspan='3'><strong>".$pm."</strong>";
    echo "</td></tr>";
    
    echo "</table>";
    $am = $am + $pm;
    //echo $am;
    //echo "<table><td><strong>Area Mean</strong></td><strong></strong><td></table>";
    ////////////////////////////////////////////////////////////
    }// end while

    echo "<hr>";
    //echo "<table class='table-bordered table-responsive'><tr><td class='text-center'><h4>Area Mean</h4></td>";
    //$am = $am + $pm;
    //echo "<td><strong>".$am."</strong></td></tr></table>";
    
}

    echo "<h4>Area Mean : ".$am."</h4><hr>";
//$pm=$total/$counter;
//echo "<h1>counter: ".$counter."pm: ".$pm."</h1>";
?>
</table>

<hr>
</div>
                    </div>
                    
                </div>
                <button class="btn btn-default btn-block" onclick="printPage()">
Save Rating Result as a PDF
</button>
<hr>
            </div>

<!--<input type="button" value="Save A Copy of Rating as a PDF" onclick="printPage()" />
-->
</div>
                      <!-- /.row -->
                      
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script>
    function printPage() {
        window.print();
        }
    </script>
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
