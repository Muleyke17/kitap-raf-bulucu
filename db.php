<?php

$baglanti = new mysqli(
    "localhost",
    "root",
    "",
    "kitap_dukkani"
);

if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
}

$baglanti->set_charset("utf8");
?>