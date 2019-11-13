<?php
include '../session.php';

$link = mysqli_connect("localhost", "root", "", "nits");
$usr=mysqli_escape_string($link, $_POST{'user'});
$pass = mysqli_escape_string($link, $_POST['pass']);
$password = md5($pass);

$query = "SELECT *  FROM admin_table WHERE Admin = '$usr'";
$result  =mysqli_query($link, $query) or die(mysqli_error($link));

$num = mysqli_num_rows($result);

if($num==0){
  header("location: index.php?error=Wrong Username");
}
else{
  $row = mysqli_fetch_array($result);
  if($row['password']!=$password){

      header("location: index.php?error=Wrong password");
  }
  else{
    $_SESSION['admin']=true;
    header("location: index.php");
  }
}


?>
