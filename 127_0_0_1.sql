-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Mar 2022, 19:57:52
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--
CREATE DATABASE IF NOT EXISTS `proje` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `proje`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ders`
--

CREATE TABLE `ders` (
  `id` int(10) UNSIGNED NOT NULL,
  `adi` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `ders`
--

INSERT INTO `ders` (`id`, `adi`) VALUES
(1, 'Oyun Geliştirme'),
(2, 'Yapay Zeka '),
(3, 'Blockchain'),
(4, 'Veri Bilimi'),
(5, 'Robotik');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ders_anket`
--

CREATE TABLE `ders_anket` (
  `id` int(10) UNSIGNED NOT NULL,
  `eposta` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `ders_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `ders_anket`
--

INSERT INTO `ders_anket` (`id`, `eposta`, `ders_id`) VALUES
(1, 'elvan@gmail.com', 1),
(3, 'gizemsarikaya@gmail.com', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `film_secim`
--

CREATE TABLE `film_secim` (
  `id` int(10) UNSIGNED NOT NULL,
  `kisi` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `film` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `film_secim`
--

INSERT INTO `film_secim` (`id`, `kisi`, `film`) VALUES
(1, 'Arif İĞDE', 'Spider-Man'),
(2, 'Elvan DUMAN', 'Kaptan Fantastik'),
(3, 'Berkay DEMİRKOPARAN', 'GodFather'),
(4, 'Serhat ERYAŞAR', 'Prison Break');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ders`
--
ALTER TABLE `ders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ders_anket`
--
ALTER TABLE `ders_anket`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `eposta` (`eposta`);

--
-- Tablo için indeksler `film_secim`
--
ALTER TABLE `film_secim`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ders`
--
ALTER TABLE `ders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `ders_anket`
--
ALTER TABLE `ders_anket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `film_secim`
--
ALTER TABLE `film_secim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
