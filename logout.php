<?php

include '../session.php';
 session_destroy();
 header("location: Admin/index.php?error=Logged Out");

 ?>
