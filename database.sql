CREATE DATABASE IF NOT EXISTS kitap_dukkani;

USE kitap_dukkani;

CREATE TABLE IF NOT EXISTS kitaplar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kitap_adi VARCHAR(255) NOT NULL,
    yazar VARCHAR(255) NOT NULL,
    barkod VARCHAR(100) NOT NULL UNIQUE,
    kategori VARCHAR(100) NOT NULL,
    raf_no VARCHAR(50) NOT NULL,
    olusturma_tarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO kitaplar 
(kitap_adi, yazar, barkod, kategori, raf_no)
VALUES
('Suç ve Ceza', 'Dostoyevski', '9786053606871', 'Roman', 'A-1'),
('Kürk Mantolu Madonna', 'Sabahattin Ali', '9789753638029', 'Roman', 'A-2'),
('Nutuk', 'Mustafa Kemal Atatürk', '9789751010988', 'Tarih', 'B-1');