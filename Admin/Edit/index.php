<?php

include '../../session.php';

if(!$_SESSION['admin']){
  header("location: ../index.php?error=Login first");
}


 ?>


<style>
  td, th{
    padding: 3px 10px;
    border: 1px solid black;
  }

</Style>

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

<body style="text-align: center;">
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
    <div class="contact-clean" style="height: 100vh;position: fixed;width: 100%;">
        <form method="get" action="" style="margin-top: 150px;">
            <h6 class="text-center">Enter The Schoolar Id to edit</h6>
            <div class="form-group" >
              <input class="form-control is-invalid" type="text" name="id" placeholder="Schoolar id" style="height: 30px;">
            </div>
            <div class="form-group">
              <button class="btn btn-primary form-control" type="submit" style="height: 30px;font-size: 12px;padding: 0;">SEARCH</button>
            </div>
        </form>
        <div id="tab">
        <?php
$link = mysqli_connect("localhost", "root", "", "nits");
error_reporting(0);

if($_GET['error']!=""){
  echo "<script>alert('".$_GET['error']."')</script>";
}



if($_GET['id']!=""){
  $id = $_GET['id'];
  $query = "SELECT * FROM marks WHERE Sch_Id = '$id' ";
  $result = mysqli_query($link, $query) or die(mysqli_error($link));
  $num = mysqli_num_rows($result);

  if($num==0){
    echo "<br>No Available Data";
  }
  else{
    echo "<table>";
    echo "<tr><th>Semester</th><th>Schoolar Id</th></tr>";
    while($row=mysqli_fetch_array($result)){


      echo "<tr>";

      echo "<td>".$row['Semester']."</td>";

      echo "<td>".$row['Sch_Id']."</td>";

      echo "<td>".$row['Subject1']." </td>";
      echo "<td> ".$row['Grade1']."</td>";
      echo "<td>".$row['Mark1']."</td>";


      echo "<td>spi ".$row['SPI']."</td>";

      echo "<td>CGPA ".$row['CGPA']."</td>";

      echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a><td>";
      echo "<td><a style='color: red' href='delete.php?id=".$row['id']."'>Delete</a><td>";

      echo "</tr>";

    }
    echo "</tabble>";
  }

}


?>
</div>



    </div>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
