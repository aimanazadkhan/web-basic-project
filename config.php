<?php

   $serverName = "localhost";
   $userName = "root";
   $password = "";
   $dbName = "project";

   $conn = mysqli_connect($serverName,$userName,$password,$dbName);

   if(!$conn){
    die("Connection Faield !!".mysqli_connect_error());
   }

   else{
    
   }