-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2013 at 04:24 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pendaftaranbpw`
--

-- --------------------------------------------------------

--
-- Table structure for table `ciri`
--

CREATE TABLE IF NOT EXISTS `ciri` (
  `id_ciri` int(11) NOT NULL AUTO_INCREMENT,
  `id_jamaah` int(11) NOT NULL,
  `muka` varchar(50) NOT NULL,
  `rambut` varchar(50) NOT NULL,
  `alis` varchar(50) NOT NULL,
  `hidung` varchar(50) NOT NULL,
  `tanda_lain` varchar(50) NOT NULL,
  `gol_darah` varchar(3) NOT NULL,
  `tinggi` varchar(50) NOT NULL,
  `berat` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ciri`),
  KEY `id_jamaah` (`id_jamaah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jamaah`
--

CREATE TABLE IF NOT EXISTS `jamaah` (
  `id_jamaah` int(11) NOT NULL AUTO_INCREMENT,
  `id_paket` int(11) NOT NULL,
  `id_kl` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bin` varchar(100) NOT NULL,
  `kel` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `alamat_ktp` varchar(50) NOT NULL,
  `no_rumah` varchar(50) NOT NULL,
  `rt` varchar(50) NOT NULL,
  `rw` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `prof` varchar(50) NOT NULL,
  `pos_ktp` varchar(20) NOT NULL,
  `no_paspor` varchar(50) NOT NULL,
  `tempat_paspor` varchar(50) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `pos` varchar(50) NOT NULL,
  `tlp` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `cara_bayar` varchar(50) NOT NULL,
  `mahram` varchar(50) NOT NULL,
  `hub` varchar(50) NOT NULL,
  `muka` varchar(50) NOT NULL,
  `rambut` varchar(50) NOT NULL,
  `alis` varchar(50) NOT NULL,
  `hidung` varchar(50) NOT NULL,
  `tanda_lain` varchar(50) NOT NULL,
  `gol_darah` varchar(50) NOT NULL,
  `tinggi` varchar(50) NOT NULL,
  `berat` varchar(50) NOT NULL,
  `baju` varchar(59) NOT NULL,
  PRIMARY KEY (`id_jamaah`),
  KEY `id_user` (`id_kl`),
  KEY `id_paket` (`id_paket`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `jamaah`
--

INSERT INTO `jamaah` (`id_jamaah`, `id_paket`, `id_kl`, `harga`, `nama`, `bin`, `kel`, `tempat_lahir`, `tgl_lahir`, `no_ktp`, `alamat_ktp`, `no_rumah`, `rt`, `rw`, `desa`, `kec`, `kab`, `prof`, `pos_ktp`, `no_paspor`, `tempat_paspor`, `alamat_rumah`, `pos`, `tlp`, `hp`, `pendidikan`, `pekerjaan`, `pembayaran`, `cara_bayar`, `mahram`, `hub`, `muka`, `rambut`, `alis`, `hidung`, `tanda_lain`, `gol_darah`, `tinggi`, `berat`, `baju`) VALUES
(1, 14, 6, 16000000, 'AISYAH DULHAMIT OTON', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 14, 6, 16000000, 'ANTON NASIHIN SUHANDI', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', 's 123467', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 14, 6, 16000000, 'LINDAWATI HASIRIN SIMAN', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 14, 6, 16000000, 'KARLI GUNAWAN KOMARUDIN', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 14, 6, 16000000, 'ENDANG ERNING WAHYUWINANTI', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 14, 6, 16000000, 'DJAYA KUSUMA YUSUF SUWANDANATA', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 14, 6, 16000000, 'MUTHIA MAULANI AMIN', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 14, 6, 16000000, 'MASDIAH HASIRIN SIMAN', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 14, 6, 16000000, 'SUTRINI YATNO KARTODIREDJO', '', '', 'JAKARTA TIMUR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 14, 6, 16000000, 'AMINAH REMIN RINAN', '', '', 'DEPOK', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 14, 6, 16000000, 'DANDY DAMARIO HARTONO', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 14, 6, 16000000, 'EKO HARTONO HARTOYO', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 14, 6, 16000000, 'IDA FARIDA DARWI', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 14, 6, 16000000, 'DEWI CHOIRIYAH HASIRIN', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 14, 6, 16000000, 'CHIKITA ALIKA RHAMADANI', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 14, 5, 16000000, 'ASMARANI ROSALBA AMIN', '', '', 'DEPOK', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 14, 3, 16000000, 'SUBAR HASAN BIN HASAN', '', '', 'PADANG', '', '', '', '', '', '', '', '', '', '', '', 'A 89867', 'Bogor', '', '', '', '', '', '', 16000000, 'Tunai', '', '', '', '', '', '', '', '', '', '', ''),
(18, 14, 3, 18000000, 'MIRA KISWATI GUNAWAN', '', '', 'SURAKARTA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 18000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 14, 3, 16000000, 'ENUNG FATIMAH UWAS', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 14, 3, 16000000, 'ELVIRA JANUATI MARDI', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 14, 3, 16000000, 'ALMARNIM TANJUNG JAMMALUDDIN', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 18, 3, 0, 'RATU TAZKIA MUTMAINAH', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 14, 3, 16000000, 'NELMAWATI RUSTAM JANA', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 14, 3, 16000000, 'NURSIAM MALIK MAHRI', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 14, 5, 18000000, 'SARI HANDAYANI HAMDANI', '', '', 'KARAWANG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 17000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 14, 5, 18000000, 'WIDYA KURNIA PUTRI', '', '', 'KARAWANG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 17000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 14, 5, 16000000, 'INDRIANTI CAHYANINGRUM INDARTO', '', '', 'JAKARTA TIMUR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 14, 5, 16000000, 'NURIKA PRANAWATI ISKANDAR', '', '', 'JAKARTA PUSAT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 14, 5, 16000000, 'ATANG ZAINUDIN ADI WIJAYA', '', '', 'BEKASI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14500000, '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 14, 5, 16000000, 'AI HARTATI SUHANA', '', '', 'BEKASI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14500000, '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 14, 5, 16000000, 'SETIA TEGUH WIRAWAN', '', '', 'JAKARTA SELATAN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14500000, '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 14, 5, 16000000, 'SHAVIRA PUTRI VIRISSYA', '', '', 'JAKARTA SELATAN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14500000, '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 14, 5, 16000000, 'NADHIVA PUTRI APRILIA', '', '', 'JAKARTA SELATAN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14500000, '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 14, 5, 16000000, 'NURANI ASLI MANUHIR', '', '', 'JAKARTA SELATAN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14500000, '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 14, 5, 16000000, 'DERI NOVITA FIRDY', '', '', 'JAKARTA SELATAN ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14500000, '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 14, 7, 16000000, 'MISKANAH DJAENADIN SOEBONO', '', '', 'JEMBER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 14, 7, 16000000, 'ENDANG TRI MURDANINGSIH', '', '', 'JEMBER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 14, 7, 16000000, 'RIDWAN ABDUL MUKTY ABDUSSALAM', '', '', 'JEMBER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 14, 7, 16000000, 'ANDIKA ARIF RAHMANSYAH', '', '', 'JAKARTA TIMUR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 14, 7, 16000000, 'MUKANAH MUNTRI SONO', '', '', 'BLITAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 14, 7, 16000000, 'EMY SULASTRI SAAD KARTODIHARDJO', '', '', 'BLITAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 14, 7, 16000000, 'SUPINAH TOHA SAKUR', '', '', 'BLITAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 14, 7, 16000000, 'ZAHIDA IDIAWATI SUWARDI', '', '', 'JAKARTA PUSAT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 14, 8, 16000000, 'BUDIONO SUPADI KADIMIN', '', '', 'MADIUN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 14, 8, 16000000, 'MAREM SOMO WIJOYO', '', '', 'MADIUN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 14, 8, 16000000, 'SUPENI SALAM MARTO SENTONO', '', '', 'MADIUN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 14, 9, 18000000, 'ARIF HERLAMBANG SUUD', '', '', 'MALANG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 14, 9, 18000000, 'LESTARI WAHYUNINGSIH ANWAR', '', '', 'MALANG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 14, 9, 18000000, 'ISTIONO AHMAD SUNANDAR', '', '', 'MALANG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 14, 9, 18000000, 'ENDAH DWI ANDAYANI', '', '', 'MALANG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 14, 9, 18000000, 'JOKO SISWANTORO PAIJO SISWOJO', '', '', 'SURABAYA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 14, 9, 18000000, 'DIAN RACHMA PUSPITARINI', '', '', 'SURABAYA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 14, 9, 18000000, 'MUHAMMAD YUSUF NOORHAJIYANTO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 14, 9, 18000000, 'DINARESTU RIAWANESTI BASOEKI', '', '', 'SURABAYA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 14, 9, 16000000, 'AGUS AHMAD FADOLI', '', '', 'JEMBER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 14, 9, 16000000, 'ASMONO DJONTONO TOREDJO', '', '', 'BLITAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(57, 14, 9, 16000000, 'RATRI PUJI ASTUTI', '', '', 'JEMBER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(58, 14, 9, 16000000, 'SUBAKIR KASIDI SOREDJO', '', '', 'BLITAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 14, 9, 16000000, 'SUTRISMI TRISMI WAHYUNINGTYAS', '', '', 'BLITAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 14, 9, 16000000, 'PRACAHYO WIBOWO TAUFIK', '', '', 'SUKABUMI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 14, 9, 16000000, 'SULISTYO RINI UTAMI', '', '', 'SUKABUMI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 14, 3, 16000000, 'IWAN SUWANDI ABDULLAH', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(63, 18, 3, 20250000, 'TAAT MUDIJONO USMAN', '', '', 'DEPOK', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(64, 18, 3, 20250000, 'INAH OMAYAH SAIMIN', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(65, 18, 3, 1, 'BAINAR NURUIK BINTI NURUIK', '', '', 'PADANG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '', '', '', '', '', '', '', '', '', '', ''),
(66, 18, 3, 1, 'ANWAR KASAD BIN KASAD', '', '', 'PADANG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '', '', '', '', '', '', '', '', '', '', ''),
(67, 14, 7, 16000000, 'DESTRICA MAELENAWATI SOEKARNO DATU', '', '', 'JEMBER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(68, 14, 3, 16000000, 'TRIO TAUFIK EDWIN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(69, 14, 3, 16000000, 'SOPIAN TSAURI USMAN', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(70, 14, 7, 16250000, 'TJATUR KUSTRIANI SAINI', '', '', 'MALANG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15250000, '', '', '', '', '', '', '', '', '', '', '', ''),
(71, 14, 7, 16250000, 'SUSY KUSPAMBUDI ANDAINI', '', '', 'MALANG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15250000, '', '', '', '', '', '', '', '', '', '', '', ''),
(72, 14, 7, 16250000, 'SETIA RAHAYU LUBIS', '', '', 'BLITAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(73, 14, 7, 16250000, 'MIRA ERNAWATI SUJITO DJUNOMO', '', '', 'BLITAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(74, 14, 3, 16000000, 'NGATIYAH ADMAN MADJAIDI', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(75, 14, 3, 18000000, 'DWI HERTEDDY SUPADI', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(76, 14, 3, 18000000, 'RISKA DWI RAHMA', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(77, 18, 3, 21250000, 'AGUSON ROSANO SOEBAGYO', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 18, 3, 21250000, 'SILVY AGTRIARINY ACHMAD', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(79, 18, 3, 21250000, 'Etjun Djamalijah Adis', '', '', 'JEMBER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 14, 3, 16000000, 'HARUN MUHAMMAD SUEB', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(81, 14, 3, 16000000, 'IING NAHAWI YAMAN', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(82, 14, 3, 16000000, 'EUIS SUSILAWATI SUEB', '', '', 'BOGOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(83, 18, 3, 21250000, 'SUPENO EFFENDI ABDULLAH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(84, 18, 3, 21250000, 'IDA WIDIARTI EFFENDI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(85, 18, 3, 21250000, 'AGUS TRI RAHARJO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(86, 18, 9, 22250000, 'ASEP KADARISMAN KUDZIYANTO', '', '', 'TASIKMALAYA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(87, 18, 9, 22250000, 'TETY HERYANTI ENDANG APANDI', '', '', 'TASIKMALAYA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(88, 18, 9, 22250000, 'VIRGIYANTY MAKMOEN MARZOEKI', '', '', 'TASIKMALAYA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(89, 18, 9, 22250000, 'HAVID ABDUL LATIF', '', '', 'JAKARTA TIMUR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(90, 18, 9, 20150000, 'YENI NURAENI MAHPUD', '', '', 'JAKARTA TIMUR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(91, 18, 9, 20150000, 'Hafidz 6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(92, 18, 9, 20150000, 'Hafidz 7', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(93, 18, 9, 20150000, 'Hafidz 8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(94, 18, 9, 20150000, 'Hafidz AN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(95, 18, 9, 20150000, 'Hafidz 10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(96, 18, 9, 20150000, 'Hafidz 11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(97, 18, 9, 20150000, 'Hafidz 12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(98, 18, 9, 20150000, 'Hafidz 13', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(99, 18, 9, 20150000, 'Hafidz 14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', ''),
(100, 18, 9, 20150000, 'Hafidz 15', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10000000, '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kelengkapan`
--

CREATE TABLE IF NOT EXISTS `kelengkapan` (
  `id_kelengkapan` int(11) NOT NULL AUTO_INCREMENT,
  `id_jamaah` int(11) NOT NULL,
  `visa` varchar(50) NOT NULL,
  `buku_k` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `poto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kelengkapan`),
  KEY `id_jamaah` (`id_jamaah`),
  KEY `id_jamaah_2` (`id_jamaah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kelengkapan`
--

INSERT INTO `kelengkapan` (`id_kelengkapan`, `id_jamaah`, `visa`, `buku_k`, `ktp`, `npwp`, `kk`, `poto`) VALUES
(1, 17, '', 'Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `kl`
--

CREATE TABLE IF NOT EXISTS `kl` (
  `id_kl` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nama_kl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kl`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `kl`
--

INSERT INTO `kl` (`id_kl`, `id_user`, `nama_kl`, `alamat`) VALUES
(3, 3, 'BPW', 'Bogor'),
(5, 9, 'AN', 'Depok'),
(6, 8, 'Al-Nur', 'Jakarta'),
(7, 10, 'Kediri', 'Kediri'),
(8, 11, 'Magetan dua', 'Magetan'),
(9, 12, 'Ngawi', 'Ngawi'),
(10, 13, 'RWNG', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` int(11) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(50) NOT NULL,
  `jumlah_max` int(11) NOT NULL,
  `jadwal_awal` varchar(50) NOT NULL,
  `jadwal_akhir` varchar(50) NOT NULL,
  `harga_qrd` int(11) NOT NULL,
  `harga_tpl` int(11) NOT NULL,
  `harga_dbl` int(11) NOT NULL,
  `ket` text NOT NULL,
  `blokir` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `jumlah_max`, `jadwal_awal`, `jadwal_akhir`, `harga_qrd`, `harga_tpl`, `harga_dbl`, `ket`, `blokir`) VALUES
(14, 'EB 16-23 feb', 100, '16 Februari 2013', '23 Februari 2013', 16000000, 17000000, 18000000, 'EB, pembayaran dimuka\r\n', 'N'),
(18, 'NORMAL 16-23 Feb', 100, '16 Februari 2013', '24 Februari 2013', 20250000, 21250000, 22250000, 'Normal\r\n', 'Y'),
(19, '16 Maret group 2', 100, '16 Maret 2013', '23 Maret 2013', 20000000, 22000000, 25000000, 'berangkat tanggal 16 Maret\r\n', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_telp` varchar(20) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'kl',
  `blokir` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `no_telp`, `kota`, `level`, `blokir`) VALUES
(1, 'admin@phitechno.com', '21232f297a57a5a743894a0e4a801fc3', 'nama admin', '123456789109', 'Bogor', 'admin', 'N'),
(2, 'manager@phitechno.com', '1d0258c2440a8d19e716292b231e3190', 'nama manager', '123456789109', 'Magetan', 'manager', 'N'),
(3, 'bpw@al-utsmaniyah-tours.com', 'b4a33bee3337726c86b51d03c4c846d1', 'Bpk. Memed', '987654345678', 'Bogor', 'bpw', 'N'),
(8, 'al-nur@gmail.com', 'e6eea34fb193f786b830bc219b80dac2', 'Al-Nur', '-', 'Jakarta', 'kl', 'N'),
(9, 'an@gmail.com', '18b049cc8d8535787929df716f9f4e68', 'AN(Asma Nadia)', '-', 'Jakarta', 'kl', 'N'),
(10, 'kediri@gmail.com', '86852441e277983bf4dc58b8b878f56a', 'kediri', '-', 'Kediri', 'kl', 'N'),
(11, 'magetan2@gmail.com', '4d6615aa91fbc5b0cc070729bf558012', 'Magetan 2', '-', 'Magetan', 'kl', 'N'),
(12, 'ngawi@gmail.com', '13726b8ecd3847edd133075611c82dc5', 'Ngawi', '-', 'Ngawi', 'kl', 'N'),
(13, 'rawamangun@gmail.com', '88530ddc93aa5cd6fc3d81dfb1d81dac', 'Rawamangun', '-', 'Jakarta', 'kl', 'N'),
(14, 'farid.rosyidin@al-utsmaniyah-tours.com', 'a1d12da42d4302e53d510954344ad164', 'Farid', '-', 'Bogor', 'bpw', 'N');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jamaah`
--
ALTER TABLE `jamaah`
  ADD CONSTRAINT `jamaah_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jamaah_ibfk_3` FOREIGN KEY (`id_kl`) REFERENCES `kl` (`id_kl`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelengkapan`
--
ALTER TABLE `kelengkapan`
  ADD CONSTRAINT `kelengkapan_ibfk_1` FOREIGN KEY (`id_jamaah`) REFERENCES `jamaah` (`id_jamaah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kl`
--
ALTER TABLE `kl`
  ADD CONSTRAINT `kl_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
