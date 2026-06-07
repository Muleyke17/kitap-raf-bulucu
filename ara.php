<?php

include 'db.php';

$arama = $_GET['arama'];

$sql = "SELECT * FROM kitaplar
WHERE kitap_adi LIKE '%$arama%'
OR barkod LIKE '%$arama%'";

$sonuc = $baglanti->query($sql);

?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Arama Sonucu</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Arama Sonuçları</h1>

<?php

if($sonuc->num_rows > 0)
{
    while($kitap = $sonuc->fetch_assoc())
    {
        echo "<div class='card'>";

        echo "<h2>".$kitap['kitap_adi']."</h2>";

        echo "<p>Yazar: ".$kitap['yazar']."</p>";

        echo "<p>Barkod: ".$kitap['barkod']."</p>";

        echo "<p>Kategori: ".$kitap['kategori']."</p>";

        echo "<p><strong>Raf:</strong> ".$kitap['raf_no']."</p>";

        echo "</div>";
    }
}
else
{
    echo "<div class='card'>";
    echo "<h2>Kitap bulunamadı</h2>";
    echo "</div>";
}

?>

<br>

<a href="index.php">Ana Sayfaya Dön</a>

</div>

</body>
</html>