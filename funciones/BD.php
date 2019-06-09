<?php
    $mysqli = new mysqli('localhost','root','','drogueria_udes');
    if ($mysqli->connect_error) {
      echo $error = $mysqli->connect_error;
    }
 ?>
