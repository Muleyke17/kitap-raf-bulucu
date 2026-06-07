<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitap Raf Bulucu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>📚 Kitap Raf Bulucu</h1>

    <p class="aciklama">
        Kitap adı veya barkod ile kitabın hangi rafta olduğunu öğrenin.
    </p>

    <div class="card">

        <h2>Kitap Ara</h2>

        <form action="ara.php" method="GET">

            <input
                type="text"
                name="arama"
                placeholder="Kitap adı veya barkod giriniz"
                required
            >

            <button type="submit">
                Ara
            </button>

        </form>

    </div>

    <div class="card">

        <h2>Yeni Kitap Ekle</h2>

        <form action="kitap-kaydet.php" method="POST">

            <input
                type="text"
                name="kitap_adi"
                placeholder="Kitap Adı"
                required
            >

            <input
                type="text"
                name="yazar"
                placeholder="Yazar"
                required
            >

            <input
                type="text"
                name="barkod"
                placeholder="Barkod"
                required
            >

            <input
                type="text"
                name="kategori"
                placeholder="Kategori"
                required
            >

            <input
                type="text"
                name="raf_no"
                placeholder="Raf Numarası (Örn: A-3)"
                required
            >

            <button type="submit">
                Kitap Ekle
            </button>

        </form>

    </div>
    <a href="listele.php">
    <button>Tüm Kitapları Görüntüle</button>
    </a>

</div>

</body>
</html>