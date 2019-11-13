<?php
include '../session.php';
error_reporting(0);
if($_SESSION['admin']){
  header("location: home.php");
}
else{
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
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="position: fixed;width: 100%;z-index: 3;border-bottom: 2px solid rgb(255,31,0);">
            <div class="container"><a class="navbar-brand" href="#"><i class="fa fa-gg-circle" style="color: rgb(255,77,0);"></i>&nbsp;NITS</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#"></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="edit.php">Edit</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php">Logout</a></li>
                        <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"></a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li>
                    </ul>
            </div>
    </div>
    </nav>
    </div>
    <div id="banner" class="col-md-6 col-12"></div>
    <div id="overlay"></div>
    <div id="form" class="col-md-3 col-12 offset-md-3" style="z-index: 3;">
        <form method="post" action="login.php">
            <h5 class="text-center" style="margin-bottom: 10px;">Admin Login</h5>
            <input class="form-control" type="text" placeholder="Username" name="user">
            <input class="form-control" type="text" placeholder="Passwrod" name="pass">
            <input class="form-control btn btn-primary" type="submit">
          </form>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php
}
?>
