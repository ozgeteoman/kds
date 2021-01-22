-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Oca 2021, 18:00:21
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `organik_pazari`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_sifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_email`, `admin_sifre`) VALUES
(1, 'ozgeteoman@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adresler`
--

CREATE TABLE `adresler` (
  `adres_id` int(11) NOT NULL,
  `adres_ad` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `adresler`
--

INSERT INTO `adresler` (`adres_id`, `adres_ad`) VALUES
(1, 'Cumhuriyet mahallesi,kıbrıs sokak no:11 '),
(2, 'Atatürk mahallesi,paşasokak no:11 '),
(3, 'İstanbul mahallesi,acıbadem sokak no:11 '),
(4, 'Gören Mahallesi 120 Sokak No:54'),
(5, 'Büyükdere Mahallesi Selim Sokak No: 12/4'),
(6, 'Menderes Mahallesi Zafer Cd. No:36'),
(7, 'Dumlupınar Mahallesi Albay Cd. No:23/7'),
(8, 'Gül Mahallesi İnci Sokak No: 45'),
(9, 'Demir Mahallesi Sevim Cd. No: 56/7'),
(10, 'Hürriyet Mahallesi Meşe Sk No:65/7');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cinsiyetler`
--

CREATE TABLE `cinsiyetler` (
  `cinsiyet_id` int(11) NOT NULL,
  `cinsiyet` varchar(15) NOT NULL,
  `cinsiyet_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `cinsiyetler`
--

INSERT INTO `cinsiyetler` (`cinsiyet_id`, `cinsiyet`, `cinsiyet_num`) VALUES
(1, 'Erkek', 1),
(2, 'Kadın', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `guncellenen_urun`
--

CREATE TABLE `guncellenen_urun` (
  `urun_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` float NOT NULL,
  `stok` int(11) NOT NULL,
  `tarih` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `guncellenen_urun`
--

INSERT INTO `guncellenen_urun` (`urun_ad`, `fiyat`, `stok`, `tarih`) VALUES
('nar', 12, 10, '2019-05-19'),
('domates', 12, 5, '2019-05-19'),
('kiraz', 10, 100, '2019-05-19'),
('erik', 12, 6, '2019-05-27'),
('kuru fasulye', 12, 30, '2019-05-27'),
('sogan', 5, 60, '2019-05-27'),
('marul', 5, 11, '2019-05-27'),
('biber', 2, 50, '2021-01-06'),
('biber', 5, 50, '2021-01-06'),
('biber', 4, 50, '2021-01-06'),
('biber', 4, 2, '2021-01-06'),
('patates', 2, 40, '2021-01-06'),
('biber', 5, 2, '2021-01-06'),
('patates', 2, 2, '2021-01-06'),
('biberr', 5, 2, '2021-01-06'),
('biberr', 7, 4, '2021-01-06'),
('kuru fasulye', 15, 100, '2021-01-10'),
('kuru fasulye', 15, 123, '2021-01-10'),
('kuru fasulye', 15, 123, '2021-01-10'),
('kuru fasulye', 15, 123, '2021-01-10'),
('kuru fasulye', 15, 123, '2021-01-10'),
('kuru fasulye', 15, 123, '2021-01-10'),
('yumurta', 2, 300, '2021-01-10'),
('yumurta', 2, 3, '2021-01-10'),
('yumurta', 2, 0, '2021-01-10'),
('yumurta', 2, 0, '2021-01-10'),
('muz', 5, 14, '2021-01-11'),
('muz', 12, 1, '2021-01-11'),
('muz', 12, 67, '2021-01-11'),
('mandalina', 2, 30, '2021-01-11'),
('mandalina', 2, 30, '2021-01-11'),
('süt', 5, 50, '2021-01-13'),
('biber', 10, 4, '2021-01-13'),
('kuru fasulye', 15, 123, '2021-01-13'),
('kutu süt(lt)', 5, 50, '2021-01-14'),
('keçi sütü', 10, 50, '2021-01-14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilceler`
--

CREATE TABLE `ilceler` (
  `ilce_id` int(11) NOT NULL,
  `ilce_ad` varchar(255) NOT NULL,
  `il_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ilceler`
--

INSERT INTO `ilceler` (`ilce_id`, `ilce_ad`, `il_no`) VALUES
(1, 'Abana', 37),
(2, 'Acıgöl', 50),
(3, 'Acıpayam', 20),
(4, 'Adaklı', 12),
(5, 'Adalar', 34),
(6, 'Adapazarı', 54),
(7, 'Adıyaman', 2),
(8, 'Adilcevaz', 13),
(9, 'Afşin', 46),
(10, 'Afyonkarahisar', 3),
(11, 'Ağaçören', 68),
(12, 'Ağın', 23),
(13, 'Ağlasun', 15),
(14, 'Ağlı', 37),
(15, 'Ağrı', 4),
(16, 'Ahırlı', 42),
(17, 'Ahlat', 13),
(18, 'Ahmetli', 45),
(19, 'Akçaabat', 61),
(20, 'Akçadağ', 44),
(21, 'Akçakale', 63),
(22, 'Akçakent', 40),
(23, 'Akçakoca', 81),
(24, 'Akdağmadeni', 66),
(25, 'Akdeniz', 33),
(26, 'Akhisar', 45),
(27, 'Akıncılar', 58),
(28, 'Akkışla', 38),
(29, 'Akkuş', 52),
(30, 'Akören', 42),
(31, 'Akpınar', 40),
(32, 'Aksaray', 68),
(33, 'Akseki', 7),
(34, 'Aksu', 7),
(35, 'Aksu', 32),
(36, 'Akşehir', 42),
(37, 'Akyaka', 36),
(38, 'Akyazı', 54),
(39, 'Akyurt', 6),
(40, 'Alaca', 19),
(41, 'Alacakaya', 23),
(42, 'Alaçam', 55),
(43, 'Aladağ', 1),
(44, 'Alanya', 7),
(45, 'Alaplı', 67),
(46, 'Alaşehir', 45),
(47, 'Aliağa', 35),
(48, 'Almus', 60),
(49, 'Alpu', 26),
(50, 'Altıeylül', 10),
(51, 'Altındağ', 6),
(52, 'Altınekin', 42),
(53, 'Altınordu', 52),
(54, 'Altınova', 77),
(55, 'Altınözü', 31),
(56, 'Altıntaş', 43),
(57, 'Altınyayla', 15),
(58, 'Altınyayla', 58),
(59, 'Altunhisar', 51),
(60, 'Alucra', 28),
(61, 'Amasra', 74),
(62, 'Amasya', 5),
(63, 'Anamur', 33),
(64, 'Andırın', 46),
(65, 'Antakya', 31),
(66, 'Araban', 27),
(67, 'Araç', 37),
(68, 'Araklı', 61),
(69, 'Aralık', 76),
(70, 'Arapgir', 44),
(71, 'Ardahan', 75),
(72, 'Ardanuç', 8),
(73, 'Ardeşen', 53),
(74, 'Arguvan', 44),
(75, 'Arhavi', 8),
(76, 'Arıcak', 23),
(77, 'Arifiye', 54),
(78, 'Armutlu', 77),
(79, 'Arnavutköy', 34),
(80, 'Arpaçay', 36),
(81, 'Arsin', 61),
(82, 'Arsuz', 31),
(83, 'Artova', 60),
(84, 'Artuklu', 47),
(85, 'Artvin', 8),
(86, 'Asarcık', 55),
(87, 'Aslanapa', 43),
(88, 'Aşkale', 25),
(89, 'Atabey', 32),
(90, 'Atakum', 55),
(91, 'Ataşehir', 34),
(92, 'Atkaracalar', 18),
(93, 'Avanos', 50),
(94, 'Avcılar', 34),
(95, 'Ayancık', 57),
(96, 'Ayaş', 6),
(97, 'Aybastı', 52),
(98, 'Aydıncık', 33),
(99, 'Aydıncık', 66),
(100, 'Aydıntepe', 69),
(101, 'Kadıköy', 34),
(102, 'Esenler', 34),
(103, 'Karşıyaka', 35),
(104, 'Urla', 35),
(105, 'Bergama', 35),
(106, 'Bornova ', 35),
(107, 'Menderes', 35),
(108, 'Narlıdere', 35);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iller`
--

CREATE TABLE `iller` (
  `il_id` int(11) NOT NULL,
  `il_adi` varchar(255) NOT NULL,
  `plaka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iller`
--

INSERT INTO `iller` (`il_id`, `il_adi`, `plaka`) VALUES
(1, 'Adana', 1),
(2, 'Adıyaman', 2),
(3, 'Afyon', 3),
(4, 'Ağrı', 4),
(5, 'Amasya', 5),
(6, 'Ankara', 6),
(7, 'Antalya', 7),
(8, 'Artvin', 8),
(9, 'Aydın', 9),
(10, 'Balıkesir', 10),
(11, 'Bilecik', 11),
(12, 'Bingöl', 12),
(13, 'Bitlis', 13),
(14, 'Bolu', 14),
(15, 'Burdur', 15),
(16, 'Bursa', 16),
(17, 'Çanakkale', 17),
(18, 'Çankırı', 18),
(19, 'Çorum', 19),
(20, 'Denizli', 20),
(21, 'Diyarbakır', 21),
(22, 'Edirne', 22),
(23, 'Elâzığ', 23),
(24, 'Erzincan', 24),
(25, 'Erzurum', 25),
(26, 'Eskişehir', 26),
(27, 'Gaziantep', 27),
(28, 'Giresun', 28),
(29, 'Gümüşhane', 29),
(30, 'Hakkâri', 30),
(31, 'Hatay', 31),
(32, 'Isparta', 32),
(33, 'Mersin', 33),
(34, 'İstanbul', 34),
(35, 'İzmir', 35),
(36, 'Kars', 36),
(37, 'Kastamonu', 37),
(38, 'Kayseri', 38),
(39, 'Kırklareli', 39),
(40, 'Kırşehir', 40),
(41, 'Kocaeli', 41),
(42, 'Konya', 42),
(43, 'Kütahya', 43),
(44, 'Malatya', 44),
(45, 'Manisa', 45),
(46, 'Kahramanmaraş', 46),
(47, 'Mardin', 47),
(48, 'Muğla', 48),
(49, 'Muş', 49),
(50, 'Nevşehir', 50),
(51, 'Niğde', 51),
(52, 'Ordu', 52),
(53, 'Rize', 53),
(54, 'Sakarya', 54),
(55, 'Samsun', 55),
(56, 'Siirt', 56),
(57, 'Sinop', 57),
(58, 'Sivas', 58),
(59, 'Tekirdağ', 59),
(60, 'Tokat', 60),
(61, 'Trabzon', 61),
(62, 'Tunceli', 62),
(63, 'Şanlıurfa', 63),
(64, 'Uşak', 64),
(65, 'Van', 65),
(66, 'Yozgat', 66),
(67, 'Zonguldak', 67),
(68, 'Aksaray', 68),
(69, 'Bayburt', 69),
(70, 'Karaman', 70),
(71, 'Kırıkkale', 71),
(72, 'Batman', 72),
(73, 'Şırnak', 73),
(74, 'Bartın', 74),
(75, 'Ardahan', 75),
(76, 'Iğdır', 76),
(77, 'Yalova', 77),
(78, 'Karabük', 78),
(79, 'Kilis', 79),
(80, 'Osmaniye', 80),
(81, 'Düzce', 81);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_adi`) VALUES
(1, 'sebze'),
(2, 'meyve'),
(3, 'kuru_baklagil'),
(4, 'kahvaltılık');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

CREATE TABLE `musteriler` (
  `musteri_id` int(11) NOT NULL,
  `ad_soyad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  `e_posta` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` int(11) DEFAULT NULL,
  `dogum_tarihi` date DEFAULT NULL,
  `parola` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `il_id` int(11) NOT NULL,
  `ilce_adi` int(11) NOT NULL,
  `cinsiyet` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`musteri_id`, `ad_soyad`, `telefon`, `e_posta`, `adres`, `dogum_tarihi`, `parola`, `il_id`, `ilce_adi`, `cinsiyet`) VALUES
(2, 'Özde Acarkan', '545857693', 'ozdeacarkan@Hotmail.com', 1, '1986-08-25', '58542', 1, 1, 2),
(3, 'Oğuzcan Çağır', '5414596321', 'oguzcancagir@hotmail.com', 2, '1975-10-04', '69854', 1, 29, 1),
(4, 'Tuğçe Demiroğlu', '5354569874', 'tugcedemiroglu@Hotmail.com', 1, '1993-04-12', '1987-09-25', 3, 59, 2),
(5, 'Buse Elçin', '5457419837', 'buseelcin@hotmail.com', 1, '1986-03-18', '35798', 4, 53, 2),
(6, 'Osman Karaca', '5248936541', 'osmankaraca@hotmail.com', 2, '1970-02-25', '574129', 6, 28, 1),
(7, 'Barış Sancar', '5469872513', 'baris_sancar@Hotmail.com', 3, '1985-09-05', '965241', 7, 1, 1),
(50, 'Uğur Ali', '5489632514', 'ugurali@gmail.com', 9, '1985-02-14', '25639', 34, 102, 1),
(51, 'Gökay Bağış', '5489634145', 'gokaybagis35@gmail.com', 10, '1976-12-26', '136597', 35, 104, 1),
(52, 'Bensu Baran', '5698741253', 'bensubaran@gmail.com', 8, '1987-03-24', '354789', 35, 108, 2),
(53, 'Dilara Okay', '5469857412', 'okaydilara@gmail.com', 4, '1984-07-24', '654893', 34, 101, 2),
(54, 'Melike Koçan', '5469871235', 'melikekosan@hotmail.com', 1, '1991-05-16', '25364', 34, 101, 2),
(55, 'Seda Ak', '5621478952', 'sedaak@gmail.com', 5, '1984-11-25', '125469', 35, 104, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odemeler`
--

CREATE TABLE `odemeler` (
  `odeme_id` int(11) NOT NULL,
  `calisanlar` int(11) DEFAULT NULL,
  `depo_kira` int(11) DEFAULT NULL,
  `araclar` int(11) DEFAULT NULL,
  `fatura` int(11) DEFAULT NULL,
  `odeme_tarihi` date DEFAULT NULL,
  `toplam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `odemeler`
--

INSERT INTO `odemeler` (`odeme_id`, `calisanlar`, `depo_kira`, `araclar`, `fatura`, `odeme_tarihi`, `toplam`) VALUES
(1, 2000, 1000, 300, 450, '2019-09-01', 3750),
(2, 2000, 1000, 250, 500, '2018-10-01', 3750),
(3, 2000, 1000, 360, 400, '2017-11-01', 3760),
(4, 2000, 1000, 350, 370, '2016-12-01', 3720),
(9, 2000, 1000, 120, 200, '2021-01-01', 3320),
(10, 1900, 850, 210, 452, '2020-10-01', 3662),
(11, 1800, 800, 250, 420, '2019-12-01', 3270),
(12, 1800, 800, 240, 200, '2019-11-01', 3040),
(13, 1800, 800, 320, 100, '2019-10-01', 3020),
(14, 1900, 850, 260, 300, '2020-11-01', 3310),
(15, 1900, 850, 250, 400, '2020-12-01', 3400),
(16, 1700, 750, 450, 300, '2017-01-01', 3200),
(17, 1700, 750, 450, 300, '2017-01-01', 3200),
(18, 1500, 650, 250, 380, '2016-01-02', 2780);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `silinen_urun`
--

CREATE TABLE `silinen_urun` (
  `urun_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` float NOT NULL,
  `tarih` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `silinen_urun`
--

INSERT INTO `silinen_urun` (`urun_ad`, `fiyat`, `tarih`) VALUES
('kabak', 5, '2019-05-19'),
('nohut', 10, '2019-05-19'),
('maydonoz', 3, '2019-05-19'),
('krokan', 65, '2019-05-20'),
('ıspanak', 3, '2019-05-20'),
('lahana', 4, '2019-05-20'),
('nar', 8, '2019-05-27'),
('a', 7, '2021-01-10'),
('süt', 5, '2021-01-10'),
('yumurta', 12, '2021-01-10'),
('hıyar', 0, '2021-01-11'),
('muz', 67, '2021-01-11'),
('süt', 5, '2021-01-13'),
('keçi sütü', 10, '2021-01-14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `siparis_id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `miktar` float NOT NULL,
  `birim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `birim_fiyat` decimal(15,2) NOT NULL,
  `siparis_tarihi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`siparis_id`, `musteri_id`, `urun_id`, `miktar`, `birim`, `birim_fiyat`, `siparis_tarihi`) VALUES
(1, 1, 1, 4, 'kg', '2.00', '2020-12-10'),
(2, 1, 9, 2, 'kg', '3.00', '2020-07-21'),
(3, 6, 11, 4, 'kg', '10.00', '2020-03-25'),
(4, 4, 14, 3, 'kg', '14.00', '2020-09-16'),
(5, 2, 14, 50, 'adet', '2.00', '2020-12-03'),
(6, 5, 6, 4, 'kg', '3.50', '2020-09-20'),
(7, 6, 1, 5, 'kg', '2.00', '2020-12-11'),
(8, 10, 5, 30, 'kg', '2.20', '2020-07-07'),
(9, 9, 17, 2, 'kg', '80.00', '2019-09-19'),
(10, 3, 2, 60, 'kg', '2.00', '2019-11-14'),
(151, 48, 10, 2, 'kg', '10.00', '2021-01-12'),
(152, 48, 10, 2, 'kg', '10.00', '2021-01-12'),
(153, 52, 12, 5, 'kg', '20.00', '2021-01-13'),
(154, 51, 13, 1, 'kg', '35.00', '2021-01-14'),
(155, 50, 10, 5, 'kg', '10.00', '2020-01-25'),
(156, 50, 10, 5, 'kg', '10.00', '2020-01-25'),
(157, 52, 6, 5, 'kg', '3.50', '2020-12-12'),
(158, 52, 2, 5, 'kg', '2.00', '2020-05-14'),
(159, 52, 15, 5, 'adet', '5.00', '2020-09-16'),
(160, 54, 5, 50, 'kg', '2.20', '2020-07-05'),
(161, 5, 9, 60, 'kg', '5.00', '2020-09-12'),
(162, 4, 1, 40, 'kg', '3.00', '2020-06-30'),
(163, 53, 9, 30, 'kg', '5.00', '2019-08-25'),
(164, 4, 12, 12, 'kg', '20.00', '2019-04-12'),
(165, 7, 4, 50, 'kg', '10.00', '2018-02-15'),
(166, 51, 11, 150, 'adet', '2.00', '2018-06-15'),
(167, 7, 16, 3, 'lt', '5.00', '2018-02-16'),
(168, 55, 17, 5, 'lt', '10.00', '2018-04-29');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_kayit`
--

CREATE TABLE `urun_kayit` (
  `urun_id` int(11) NOT NULL,
  `urun_ad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `fiyat` float DEFAULT NULL,
  `birim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun_kayit`
--

INSERT INTO `urun_kayit` (`urun_id`, `urun_ad`, `kategori_id`, `fiyat`, `birim`, `stok`) VALUES
(1, 'biber', 1, 3, 'kg', 4),
(2, 'patates', 1, 2, 'kg', 4),
(3, 'kuru fasulye', 3, 14, 'kg', 123),
(4, 'nohut', 3, 10, 'kg', 90),
(5, 'domates', 1, 2.2, 'kg', 25),
(6, 'portakal', 2, 3.5, 'kg', 11),
(7, 'mandalina', 2, 2, 'kg', 30),
(8, 'muz', 2, 6, 'kg', 50),
(9, 'üzüm', 2, 5, 'kg', 40),
(10, 'nar', 2, 10, 'kg', 10),
(11, 'yumurta', 4, 2, 'adet', 150),
(12, 'biber salçası', 4, 20, 'kg', 15),
(13, 'süzme peynir', 4, 35, 'kg', 10),
(16, 'inek sütü', 4, 5, 'lt', 50),
(17, 'keçi sütü', 4, 10, 'lt', 50);

--
-- Tetikleyiciler `urun_kayit`
--
DELIMITER $$
CREATE TRIGGER `guncellenen_urun` BEFORE UPDATE ON `urun_kayit` FOR EACH ROW INSERT INTO `guncellenen_urun`(`urun_ad`, `fiyat`, `stok`, `tarih`) VALUES (old.urun_ad,old.fiyat,old.stok,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `silinen_urun` BEFORE DELETE ON `urun_kayit` FOR EACH ROW INSERT INTO `silinen_urun`(`urun_ad`, `fiyat`, `tarih`) VALUES (old.urun_ad,old.fiyat,now())
$$
DELIMITER ;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `adresler`
--
ALTER TABLE `adresler`
  ADD PRIMARY KEY (`adres_id`);

--
-- Tablo için indeksler `cinsiyetler`
--
ALTER TABLE `cinsiyetler`
  ADD PRIMARY KEY (`cinsiyet_id`);

--
-- Tablo için indeksler `ilceler`
--
ALTER TABLE `ilceler`
  ADD PRIMARY KEY (`ilce_id`);

--
-- Tablo için indeksler `iller`
--
ALTER TABLE `iller`
  ADD PRIMARY KEY (`il_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `musteriler`
--
ALTER TABLE `musteriler`
  ADD PRIMARY KEY (`musteri_id`),
  ADD KEY `il_id` (`il_id`);

--
-- Tablo için indeksler `odemeler`
--
ALTER TABLE `odemeler`
  ADD PRIMARY KEY (`odeme_id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`siparis_id`),
  ADD KEY `musteri_id` (`musteri_id`),
  ADD KEY `urun_id` (`urun_id`);

--
-- Tablo için indeksler `urun_kayit`
--
ALTER TABLE `urun_kayit`
  ADD PRIMARY KEY (`urun_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `adresler`
--
ALTER TABLE `adresler`
  MODIFY `adres_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `cinsiyetler`
--
ALTER TABLE `cinsiyetler`
  MODIFY `cinsiyet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `ilceler`
--
ALTER TABLE `ilceler`
  MODIFY `ilce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Tablo için AUTO_INCREMENT değeri `iller`
--
ALTER TABLE `iller`
  MODIFY `il_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `musteriler`
--
ALTER TABLE `musteriler`
  MODIFY `musteri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Tablo için AUTO_INCREMENT değeri `odemeler`
--
ALTER TABLE `odemeler`
  MODIFY `odeme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- Tablo için AUTO_INCREMENT değeri `urun_kayit`
--
ALTER TABLE `urun_kayit`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `musteriler`
--
ALTER TABLE `musteriler`
  ADD CONSTRAINT `musteriler_ibfk_1` FOREIGN KEY (`il_id`) REFERENCES `iller` (`il_id`);

--
-- Tablo kısıtlamaları `urun_kayit`
--
ALTER TABLE `urun_kayit`
  ADD CONSTRAINT `xzv` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
