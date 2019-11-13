<?php

  $link = mysqli_connect("localhost", "root", "", "nits");
  if($_GET['id']==""){
    header("location: index.php");
  }
  else{
    $id= $_GET['id'];

    $query = "DELETE FROM marks WHERE id=$id";
    $result =mysqli_query($link, $query);
    if($result){
      header("location: index.php?error=deleted");
    }
    else{
      echo "some error occured";
    }

  }

?>
