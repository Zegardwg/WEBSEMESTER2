<?php
session_start();

// Hapus semua data session
session_unset();

// Hapus session
session_destroy();

// Menggunakan JavaScript untuk konfirmasi dan PHP untuk pengalihan
echo "<script type='text/javascript'>
    if (confirm('Apakah Anda yakin akan keluar?')) {
        window.location.href='http://localhost/Web/Utama.php';
    } else {
        window.location.href='http://localhost/Web/Home.php'; // Kembali ke halaman home jika batal
    }
</script>";
?>
