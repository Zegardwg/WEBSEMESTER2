<?php
include 'koneksi.php'; 

if (isset($_POST['register'])) {
    $nisn = $_POST['nisn'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $sekolah = $_POST['sekolah'];
    $pass_user = $_POST['pass_user'];

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $path = "image/" . $foto;

        if (move_uploaded_file($tmp, $path)) {
            $query = "INSERT INTO user (nisn, email, no_hp, nama, tgl_lahir, jk, sekolah, pass_user, foto) 
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($koneksi, $query);

            if ($stmt) {
                // Bind parameter ke prepared statement
                mysqli_stmt_bind_param($stmt, "sssssssss", $nisn, $email, $no_hp, $nama, $tgl_lahir, $jk, $sekolah, $pass_user, $foto);

                // Eksekusi prepared statement
                $execute = mysqli_stmt_execute($stmt);

                if ($execute) {
                    echo "<script>alert('Data Berhasil Ditambah'); window.location.href='Home.php';</script>";
                } else {
                    die("Query gagal dijalankan: " . mysqli_stmt_error($stmt));
                }

                // Tutup statement
                mysqli_stmt_close($stmt);
            } else {
                die("Error dalam persiapan statement: " . mysqli_error($koneksi));
            }
        } else {
            die("Gagal mengunggah file.");
        }
    } else {
        // Debugging untuk mengetahui penyebab masalah
        if (isset($_FILES['foto'])) {
            $error_message = "Error code: " . $_FILES['foto']['error'];
            die("Tidak ada file yang diunggah atau ada kesalahan dalam unggahan. " . $error_message);
        } else {
            die("File 'foto' tidak ditemukan dalam array \$_FILES.");
        }
    }
}
?>
