<?php
if (isset($_POST['submitTanggal'])) {
    $waktu_kosong = $_POST['waktuKosong'];
    $waktu_berangkat = $_POST['waktuBerangkat'];
    $waktu_pulang = $_POST['waktuPulang'];
    
    include "koneksi.php";

    if (!$con) {
        die("Koneksi Gagal: " . mysqli_connect_error());
    }

    // Insert query with corrected variables
    $insert = mysqli_query($con, "INSERT INTO ngedate (waktu_kosong, waktu_berangkat, waktu_pulang) 
                                  VALUES ('$waktu_kosong', '$waktu_berangkat', '$waktu_pulang')");

    if ($insert) {
        echo "<script>
        window.location.href = 'destinasi.php';
        </script>";
        
    } else {
        echo "<script>alert('Data Gagal Disimpan.'); 
        window.history.go(-1);</script>";
    }

    // Close the connection after insertion
    mysqli_close($con);
}
?>