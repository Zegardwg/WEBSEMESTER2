<?php
require 'koneksi.php';

if (isset($_POST['login'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pass_user = $_POST['pass_user'];

    $query = "SELECT * FROM user 
            WHERE nama = '$nama' AND email = '$email' AND pass_user = '$pass_user'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script type='text/javascript'>
                alert('Anda Berhasil Login');
                window.location.href='Utama.php';
            </script>";
    } else {
        $query_email = "SELECT * FROM user 
                      WHERE nama = '$nama' AND email = '$email'";
        $result_email = mysqli_query($koneksi, $query_email);

        if (mysqli_num_rows($result_email) == 0) {
            echo "<script type='text/javascript'>
                    alert('Email Anda Salah. Silahkan Coba Login Kembali');
                    window.location.href='login.php';
                </script>";
        } else {
            $query_pass = "SELECT * FROM user 
                          WHERE nama = '$nama' AND email = '$email' AND pass_user = '$pass_user'";
            $result_pass = mysqli_query($koneksi, $query_pass);

            if (mysqli_num_rows($result_pass) == 0) {
                echo "<script type='text/javascript'>
                        alert('Password Anda Salah. Silahkan Coba Login Kembali');
                        window.location.href='login.php';
                    </script>";
            }
        }
    }
}
?>