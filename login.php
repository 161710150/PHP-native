<?php
// Memulai session.
session_start();

// Jika ditemukan session, maka user akan otomatis dialihkan ke halaman admin.
if (isset($_SESSION['username'])) {
    header("location: index.php");
}

// Include koneksi database.
require_once "koneksi.php";

// Jika tombol login ditekan, maka akan mengirimkan variabel yang berisi username dan password.
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $userpass = $_POST['password']; // password yang di inputkan oleh user lewat form login.

    // Query ke database.
    $sql = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

    list($id, $email, $username, $password) = mysqli_fetch_array($sql);

    // Jika data ditemukan dalam database, maka akan melakukan validasi dengan password_verify.
    if (mysqli_num_rows($sql) > 0) {

        /*
            Validasi login dengan password_verify
            $userpass -----> diambil dari password yang diinputkan user lewat form login
            $password -----> diambil dari password dalam database
        */
        if (password_verify($userpass, $password)) {

            // Buat session baru.
            session_start();
            $_SESSION['id']       = $id;
            $_SESSION['email']    = $email;
            $_SESSION['username'] = $username;

            // Jika login berhasil, user akan diarahkan ke halaman admin.
            header("location: index.php");
            die();
        } else {
            echo '<script language="javascript">
                    window.alert("LOGIN GAGAL! Silakan coba lagi");
                    window.location.href="./";
                  </script>';
        }
    } else {
       echo '<script language="javascript">
                window.alert("LOGIN GAGAL! Silakan coba lagi");
                window.location.href="./";
             </script>';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Masuk</title>

        <link href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/assets/css/mystyle.css">
        <script type="text/javascript" src="/assets/bootstrap-4.3.1-dist/bootstrap.min.js"></script>        
    </head>
    <body>
        <div class="row pull-right">
            <div class="m-auto">
                <div class="card mt-5">
                    <center>
                        <div class="card-body">
                            <form action="" method="post">
                                <h3>Masuk Member</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Example@gmail.com" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <input class="tombol-submit" name="login" type="submit" value="Masuk"> <input type="reset" class="tombol-batal" value="Batal">
                                <p style="margin-top: 20px;">
                                Belum Menjadi Member ? <a href="daftar.php"><b>Daftar</b></a>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>