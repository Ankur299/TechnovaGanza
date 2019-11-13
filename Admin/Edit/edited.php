<?php

  $link = mysqli_connect("localhost", "root", "", "nits");
  $id = $_POST['id'];
  $semester = $_POST['sem'];
  $sub1 = mysqli_escape_string($link, $_POST['sub1']);
  $m1 = $_POST['m1'];
  $g1 = $_POST['g1'];
  $tm = $_POST['tm'];
  $spi =  $_POST['spi'];
  $cgpa = $_POST['cgpa'];

  $query = "UPDATE marks SET Semester = '$semester', Subject1 = '$sub1', Mark1 = '$m1', Grade1='$g1', totalMark = '$tm', SPI='$spi', CGPA = '$cgpa' WHERE id  ='$id' ";
  $result = mysqli_query($link, $query) or die(mysqli_query($link));
  if($result){
    header("location: edit.php?id=".$id."&error=updated");
  }
  else{
    echo "some unknown error occured";
  }


?>
