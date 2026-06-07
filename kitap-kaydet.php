<?php

include 'db.php';

$kitap_adi = $_POST['kitap_adi'];
$yazar = $_POST['yazar'];
$barkod = $_POST['barkod'];
$kategori = $_POST['kategori'];
$raf_no = $_POST['raf_no'];

$sql = "INSERT INTO kitaplar
(kitap_adi,yazar,barkod,kategori,raf_no)
VALUES
('$kitap_adi','$yazar','$barkod','$kategori','$raf_no')";

if($baglanti->query($sql))
{
    echo "Kitap başarıyla eklendi.<br><br>";
    echo "<a href='index.php'>Ana Sayfa</a>";
}
else
{
    echo "Hata : " . $baglanti->error;
}
?>