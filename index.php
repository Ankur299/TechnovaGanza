<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>NITS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <style>
    @media (max-width: 767px) {
      .x {
        margin-top: 550px !important;
    right: 0 !important;
      }
    }

    </style>
</head>

<body style="background: whitesmoke;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="position: fixed;width: 100%;z-index: 3;border-bottom: 2px solid rgb(255,31,0);">
        <div class="container"><a class="navbar-brand" href="#"><i class="fa fa-gg-circle" style="color: rgb(255,77,0);"></i>&nbsp;NITS</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#"></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link"></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link"></a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>


    <?php
      $connect = mysqli_connect("localhost", "root", "", "nits");
      error_reporting(0);

      if($_GET['id']!=""){
        $id=$_GET['id'];
        $query = "SELECT * FROM marks WHERE Sch_Id = '$id' ORDER BY id DESC";
        $result= mysqli_query($connect, $query) or die(mysqli_error($connect));
        $num = mysqli_num_rows($result);

        if($num==0){
          $output =  "No Data Found";
        }
        else{
            for($i=0; $i<$num; $i++){
            $row = mysqli_fetch_array($result);
            $output .= "<br><b>".$row['Semester']." Semester</b><br>";
            $output .= "<b>".$row['Sch_Id']."</b><br>";
            $output .=  "<b>".$row['Subject1']."</b> : ".$row['Grade1'];

            $output .=  "<BR><b>SPI</b> : ".$row['SPI'];
            $output .= "<hr>";

          }
          $output .=  "<br><b>CGPA</b> : ".$row['CGPA'];




        }


      }


    ?>

    <div class="login-dark col-md-6 col-12" style="background: whitesmoke;position: fixed;">
        <form method="get" style="margin-top: -100px;">
            <h2 class="sr-only">Login Form</h2>
            <h5 class="text-center">Search Result</h5>
            <div class="form-group"><input class="form-control" type="text" name="id" placeholder="Schoolar id"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Check</button></div>
        </form>
    </div>
    <div class="col-md-6 col-12 x" style="background: white; position: fixed; right: 20px ;margin-top: 100px; padding: 10px; ">
      <?php echo $output; ?>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
