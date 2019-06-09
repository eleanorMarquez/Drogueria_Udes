<?php
    session_start();
    if ($_SESSION['login']) {
      Session_destroy();
      header("Location:../index.php");
    }else {
      header("Location:../index.php");
    }
 ?>
