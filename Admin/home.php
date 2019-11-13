<?php

include '../session.php';

if(!$_SESSION['admin']){
  header("location: index.php?error=Login first");
}


 ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>technoganja.com</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="position: fixed;width: 100%;z-index: 3;border-bottom: 2px solid rgb(255,31,0);">
        <div class="container"><a class="navbar-brand" href="#"><i class="fa fa-gg-circle" style="color: rgb(255,77,0);"></i>&nbsp;NITS</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#"></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="edit">Edit</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php">Logout</a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="login-clean" style="position: fixed;width: 100%;height: 100vh;">
        <form mehtod="post" id="export_excel" style="margin-top: 120px;">
            <h2 class="sr-only">Login Form</h2>
            <h5 class="text-center" style="margin-bottom: 23px;">Upload Result&nbsp;</h5>
            <div class="form-group"><input class="form-control" type="text" name="semester" placeholder="Semester"></div>
            <div class="form-group"><input type="file" name="excel_file" id="excel_file" /></div>

        </form>

               <div id="result" style="color: red; text-align: center; margin-top: 10px">
               </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<script>
$(document).ready(function(){
     $('#excel_file').change(function(){
          $('#export_excel').submit();
     });
     $('#export_excel').on('submit', function(event){
          event.preventDefault();
          $.ajax({
               url:"export.php",
               method:"POST",
               data:new FormData(this),
               contentType:false,
               processData:false,
               success:function(data){
                    $('#result').html(data);
                    $('#excel_file').val('');
               }
          });
     });
});
</script>
