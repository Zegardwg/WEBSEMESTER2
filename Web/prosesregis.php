<?php
    //error_reporting(0);
    include 'koneksi.php';

    if (isset ($_POST['register'])) {
        $nisn = $_POST['nisn'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $sekolah = $_POST['sekolah'];
        $pass_user = $_POST['pass_user'];

        $query = "INSERT INTO user (nisn, email, no_hp, nama, tgl_lahir, jk, sekolah, pass_user) VALUES ('$nisn', '$email', '$no_hp','$nama','$tgl_lahir','$jk','$sekolah', '$pass_user')";

        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die ("Query gagal dijalankan : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        } else {
            echo  "<script>alert('Data Berhasil Ditambah');window.location.href='Utama.php'</script>";
        }
    }
?>