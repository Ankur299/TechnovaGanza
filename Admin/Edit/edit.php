<?php

include '../../session.php';

if(!$_SESSION['admin']){
  header("location: ../index.php?error=Login first");
}


$link = mysqli_connect("localhost", "root", "", "nits");

error_reporting(0);

if($_GET['error']!=""){
  echo "<script>alert('".$_GET['error']."')</script>";
}

if($_GET['id']==""){
  header("location: index.php");
}
else{
  $id= $_GET['id'];
  $query = "SELECT * FROM marks WHERE id= $id";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result);

 ?>


 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <title>technoganja.com</title>
     <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
     <link rel="stylesheet" href="../../assets/css/Contact-Form-Clean.css">
     <link rel="stylesheet" href="../../assets/css/Login-Form-Clean.css">
     <link rel="stylesheet" href="../../assets/css/Login-Form-Dark.css">
     <link rel="stylesheet" href="../../assets/css/Navigation-Clean.css">
     <link rel="stylesheet" href="../../assets/css/styles.css">
 </head>

 <body>
     <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="position: fixed;width: 100%;z-index: 3;border-bottom: 2px solid rgb(255,31,0);">
         <div class="container"><a class="navbar-brand" href="#"><i class="fa fa-gg-circle" style="color: rgb(255,77,0);"></i>&nbsp;NITS</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
             <div
                 class="collapse navbar-collapse" id="navcol-1">
                 <ul class="nav navbar-nav ml-auto">
                     <li class="nav-item" role="presentation"><a class="nav-link active" href="#"></a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Edit</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" href="../logout.php">Logout</a></li>

                 </ul>
         </div>
         </div>
     </nav>
     <div class="contact-clean" style="height: 100vh;position: fixed;overflow-y: scroll; width: 100%;">
         <form method="post" action="edited.php" style="margin-top: 20px; ">
               <h6 class="text-center"><?php echo $row['Sch_Id']; ?></h6>

             <input type="hidden" name="id" value="<?php echo $id;?>">
             Semester: <input class="form-control"  type="text" name="sem" value="<?php echo $row['Semester']; ?>"><br>
             Subject1: <input class="form-control" type="text" name="sub1" value="<?php echo $row['Subject1']; ?>"><br>
             Mark for  Subject1: <input class="form-control" type="text" name="m1" value="<?php echo $row['Mark1']; ?>"><br>
             Grade for subject1: <input class="form-control" type="text" name="g1" value="<?php echo $row['Grade1']; ?>"><br>
             Total Marks: <input class="form-control" type="text" name="tm" value="<?php echo $row['totalMark']; ?>"><br>
             SPI: <input class="form-control" type="text" name="spi" value="<?php echo $row['SPI']; ?>"><br>
             CGPA: <input class="form-control" type="text" name="cgpa" value="<?php echo $row['CGPA']; ?>"><br>


            <div class="form-group"><button class="btn btn-primary form-control" type="submit" style="height: 30px;font-size: 12px;padding: 0;">UPDATE</button></div>
         </form>
     </div>
     <script src="../../assets/js/jquery.min.js"></script>
     <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
 </body>

 </html>


  <form method="post" action="edited.php">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    Semester: <input type="text" name="sem" value="<?php echo $row['Semester']; ?>"><br>
    Subject1: <input type="text" name="sub1" value="<?php echo $row['Subject1']; ?>"><br>
    Mark for  Subject1: <input type="text" name="m1" value="<?php echo $row['Mark1']; ?>"><br>
    Grade for subject1: <input type="text" name="g1" value="<?php echo $row['Grade1']; ?>"><br>
    Total Marks: <input type="text" name="tm" value="<?php echo $row['totalMark']; ?>"><br>
    SPI: <input type="text" name="spi" value="<?php echo $row['SPI']; ?>"><br>
    CGPA: <input type="text" name="cgpa" value="<?php echo $row['CGPA']; ?>"><br>
    <input type="submit" value="UPDATE">
  </form>



<?php  } ?>
