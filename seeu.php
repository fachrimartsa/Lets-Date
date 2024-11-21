<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>❤️</title>
    <link rel="stylesheet" href="css/seeu.css">
</head>
<body>
    <div class="summary-container">
        <h1>YEAYYY SEEUUUUUU</h1>
        <?php
        include "koneksi.php";
        
        if (!$con) {
            die("Koneksi Gagal: " . mysqli_connect_error());
        }

        // Query untuk mengambil data terbaru dari tabel ngedate berdasarkan waktu input
        $query = "SELECT waktu_kosong, waktu_berangkat, waktu_pulang 
                  FROM ngedate 
                  ORDER BY waktu_kosong DESC LIMIT 1"; // Pastikan 'id' adalah kolom primary key yang auto-increment

        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "<p>Waktu Kosong: <strong>" . htmlspecialchars($row['waktu_kosong']) . "</strong></p>";
            echo "<p>Waktu Berangkat: <strong>" . htmlspecialchars($row['waktu_berangkat']) . "</strong></p>";
            echo "<p>Waktu Pulang: <strong>" . htmlspecialchars($row['waktu_pulang']) . "</strong></p>";
        } else {
            echo "<h1>Kesimpulan</h1>";
            echo "<p>Tidak ada data kencan terbaru.</p>";
        }

        // Close connection
        mysqli_close($con);
        ?>

        <?php
        if (isset($_GET['image'])) {
            $chosenImage = htmlspecialchars($_GET['image']);
            echo "<h3><strong>$chosenImage</strong></h3>";
        } else {
            echo "<h1>Kesimpulan</h1>";
            echo "<p>Anda belum memilih tempat kencan.</p>";
        }
        ?>
    </div>
</body>
</html>
