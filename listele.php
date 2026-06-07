<?php

include 'db.php';

$sql = "SELECT * FROM kitaplar ORDER BY id DESC";
$sonuc = $baglanti->query($sql);

?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Kitap Listesi</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>📚 Tüm Kitaplar</h1>

<?php

while($kitap = $sonuc->fetch_assoc())
{
    echo "<div class='card'>";

    echo "<h2>".$kitap['kitap_adi']."</h2>";

    echo "<p><b>Yazar:</b> ".$kitap['yazar']."</p>";

    echo "<p><b>Barkod:</b> ".$kitap['barkod']."</p>";

    echo "<p><b>Kategori:</b> ".$kitap['kategori']."</p>";

    echo "<p><b>Raf:</b> ".$kitap['raf_no']."</p>";

    echo "<a href='sil.php?id=".$kitap['id']."' onclick=\"return confirm('Bu kitabı silmek istediğine emin misin?')\">";
echo "<button>Sil</button>";
echo "</a>";

    echo "</div>";
}

?>

<a href="index.php">Ana Sayfa</a>

</div>

</body>
</html>