<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thumbnail Gallery - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item">
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4 text-center text-lg-left">Thumbnail Gallery</h1>

      <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
          <?php 
          $GLOBALS['img']= array();
            $conn = mysqli_connect('localhost', 'root', '','registration');
            if (!$conn){
              die ("Connection failed". mysqli_connect_error());
              }
              $sql="SELECT * FROM `benchmark_files` WHERE param_id='1' AND bnch_id='2' AND program_id='7' AND area_id='1'";
              $result = mysqli_query($conn, $sql);
              $GLOBALS['rows'] = mysqli_num_rows($result);

              if ($GLOBALS['rows']){
                  while ($image = mysqli_fetch_assoc($result)){
                  //echo "<img class='img-thumbnail' src=".$image['file_path'].=$image['file_name']." width='204' height='136'>";
                  array_push($GLOBALS['img'],$image['file_path'].$image['file_name']);
                  echo "<a data-toggle='modal' data-target='#myModal' class='d-block mb-2 h-20' >
                  <img class=' img-fluid img-thumbnail' src=".$image['file_path'].=$image['file_name']." alt='benchmark-files'>
                  </a>&ensp;
                  ";
                  }
              }
          ?>
        </div>

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
