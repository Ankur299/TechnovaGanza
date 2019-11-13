<?php

include '../session.php';
 session_destroy();
 header("location: index.php?error=Logged Out");

 ?>
