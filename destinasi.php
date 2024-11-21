<?php
if (isset($_GET['image'])) {
    $chosenImage = htmlspecialchars($_GET['image']);
    echo "<h1>Anda memilih: $chosenImage</h1>";
} else {
    echo "";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>❤️</title>
    <link rel="stylesheet" href="css/destinasi.css">
    <script>
        function goToSeeU(imageAlt) {
            // Redirect ke seeu.php dengan parameter alt gambar
            window.location.href = "seeu.php?image=" + encodeURIComponent(imageAlt);
        }
    </script>
</head>
<body>
    <h1>MAUUU KEMANAA KITAAA NANTI</h1>
    <div class="container1">
        <div class="card">
            <img src="img/cafe.jpg" alt="Date Place 1" onclick="goToSeeU('Caffe Date')">
        </div>
        <div class="card">
            <img src="img/bioskop.png" alt="Date Place 2" onclick="goToSeeU('Movie Date')">
        </div>
        <div class="card">
            <img src="img/museum.jpg" alt="Date Place 3" onclick="goToSeeU('Museum Date')">
        </div>
    </div>
    <div class="container2">
        <div class="card">
            <img src="img/taman.jpg" alt="Date Place 4" onclick="goToSeeU('Park Date')">
        </div>
        <div class="card">
            <img src="img/timezone.jpg" alt="Date Place 5" onclick="goToSeeU('TimeZone Date')">
        </div>
        <div class="card">
            <img src="img/dinner.jpg" alt="Date Place 6" onclick="goToSeeU('Dinner Date')">
        </div>
    </div>
</body>
</html>
