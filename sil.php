<?php

include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM kitaplar WHERE id = $id";

if($baglanti->query($sql))
{
    header("Location: listele.php");
}
else
{
    echo "Silme hatası: " . $baglanti->error;
}

?>