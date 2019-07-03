<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $url = $_SERVER['REQUEST_URI'];

    $sql = "UPDATE user SET email='$email', username='$username', password='$pass' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}

?>