<?php

   try { 
      $host = "localhost";
      $user = "root";
      $pass = "";
      $database = "databaseit";

   $conn = mysqli_connect($host, $user, $pass, $database);



   } catch (Exception $e) {
      echo "Error". $e->getMessage();


   }
   



