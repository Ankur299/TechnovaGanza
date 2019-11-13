<?php

include '../session.php';

if(!$_SESSION['admin']){
  header("location: index.php?error=Login first");
}


 //export.php
 if(!empty($_FILES["excel_file"]))
 {
      $connect = mysqli_connect("localhost", "root", "", "nits");
      $file_array = explode(".", $_FILES["excel_file"]["name"]);



      if($file_array[1] == "xls" || $file_array[1]=="xlsx")
      {
           include("../PHPExcel-1.8/Classes/PHPExcel/IOFactory.php");

           $object = PHPExcel_IOFactory::load($_FILES["excel_file"]["tmp_name"]);
           foreach($object->getWorksheetIterator() as $worksheet)
           {

                $highestRow = $worksheet->getHighestRow();

                $semester = $_POST['semester'];
                $subject1 = $worksheet->getCellByColumnAndRow(1, 1);


                for($row=2; $row<=$highestRow; $row++)
                {
                    $sch_id = $worksheet->getCellByColumnAndRow(0, $row);
                     $mark1 = $worksheet->getCellByColumnAndRow(2, $row);
                     $grade1 = $worksheet->getCellByColumnAndRow(1, $row);
                     $totatlmark = $worksheet->getCellByColumnAndRow(3, $row);
                     $spi = $worksheet->getCellByColumnAndRow(4, $row);
                     $cgpa = $worksheet->getCellByColumnAndRow(5, $row);
                     $query = "INSERT INTO marks (Semester, Sch_Id, Subject1, Grade1, Mark1, totalMark, SPI, CGPA ) VALUES ('$semester', '$sch_id', '$subject1', '$grade1', '$mark1', '$totatlmark', '$spi', '$cgpa')";
                     mysqli_query($connect, $query) or die(mysqli_query($connect, $query));

          }
        }

        echo "UPDATED";
      }
      else
      {
           echo '<label class="text-danger">Invalid File</label>';
      }
 }
 else{
   echo "some erro";
 }
 ?>
