<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>❤️</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>YEEEAAAYYYY</h1>
    
    <div style="display: flex; justify-content: center; align-items: center; gap: 20px; margin-top: 20px;">
        <!-- Gambar cowok di sebelah kiri -->
        <img src="img/cowo.png" alt="Cowo" style="width: 270px; height: auto;">
        
        <!-- Form di tengah -->
        <form action="db.php" method="post" style="background-color: #fff0f5; padding: 20px; border-radius: 15px; box-shadow: 0px 0px 10px rgba(255, 182, 193, 0.5);">
            <label for="dateTime">Waktu Kosong</label>
            <input type="date" name="waktuKosong" id="waktuKosong" required>
            <label for="timeDate">Berangkat</label>
            <input type="time" name="waktuBerangkat" id="waktuBerangkat" required>
            <label for="timeDate2">Pulang</label>
            <input type="time" name="waktuPulang" id="waktuPulang" required>
            <button type="submit" name="submitTanggal">Submit</button>
        </form>
        
        <!-- Gambar cewek di sebelah kanan -->
        <img src="img/cewe.png" alt="Cewe" style="width: 300px; height: auto;">
    </div>
    
    <!-- Ikon hati di bawah -->
    <div style="display: flex; justify-content: center; margin-top: 20px;">
        <div class="love" style="margin-right: 200px">❤️</div>
        <div class="love" style="margin-left: 200px">❤️</div>
    </div>
</body>
</html>
