<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proses</title>

    <link href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/mystyle.css">
    <script type="text/javascript" src="/assets/bootstrap-4.3.1-dist/bootstrap.min.js"></script>
  </head>
  <body>
    <?php 
       require_once("koneksi.php");
       $email = $_POST['email'];
       $username = $_POST['username'];
       $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
       $sql = "SELECT * FROM user WHERE email = '$email'";
       $query = $db->query($sql);
       if($query->num_rows != 0) {
         echo "<div align='center' style='margin-top: 150px' class='pull-right'><h1>Email telah digunakan! </h1><p><h5>Klik untuk <a href='login.php' class='btn btn-primary'>Masuk</a></h5></div>";
       } else {
         if(!$email || !$username || !$pass) {
           echo "<div align='center' style='margin-top: 150px' class='pull-right'><h1>Masih ada data yang kosong! </h1><p><h5>Klik <a href='daftar.php'>Kembali</a></h5>";
         } else {
           $data = "INSERT INTO user VALUES (NULL, '$email', '$username', '$pass')";

           $simpan = $db->query($data);
           if($simpan) {
             echo "<div align='center' style='margin-top: 150px' class='pull-right'><h1>Anda Telah Menjadi Member, </h1> <h5><p>Klik untuk<a href='login.php' class='btn btn-primary'>Masuk</a></h5></div>";
           } else {
             echo "<div align='center'style='margin-top: 150px' class='pull-right'><h1>Proses Gagal! </h1> <p><h5>Klik untuk <a href='daftar.php'>Kembali</a></h5></div>";
           }
         }
       }
    ?>
  </body>
</html>
