<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "member";
   $db = mysqli_connect($hostname, $username, $password, $dbname);
    if (! $db)
    {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>