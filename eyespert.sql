-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Agu 2019 pada 05.40
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eyespert`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `username`, `password`, `akses`) VALUES
(1, 'Muhammad Fawwaz Izzuddin', 'mfawwaz13@gmail.com', 'mfawwazi', '12345', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` varchar(4) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL,
  `belief` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `kode_gejala`, `nama_gejala`, `belief`) VALUES
(1, 'G01', 'Ada bayangan hitam yang menghalangi, dan ikut bergerak saat melirik', 0.25),
(2, 'G02', 'Ada bercak putih pada bagian hitam mata', 0.6),
(3, 'G03', 'Berat badan turun', 0.5),
(4, 'G04', 'Bulu mata tumbuh kearah bola mata', 0.8),
(5, 'G05', 'Keluar kotoran mata', 0.55),
(6, 'G06', 'Lapang pandang menyempit', 0.9),
(7, 'G07', 'Mata berair', 0.5),
(8, 'G08', 'Mata merah', 0.63),
(9, 'G09', 'Mata sulit membuka', 0.4),
(10, 'G10', 'Mata terasa sakit', 0.6),
(11, 'G11', 'Melihat benda seperti lebih kecil', 0.65),
(12, 'G12', 'Melihat garis lurus seperti bengkok', 0.75),
(13, 'G13', 'Memiliki riwayat diabetes melitus (kencing manis)', 0.45),
(14, 'G14', 'Memiliki riwayat hipotensi (tekanan darah rendah)', 0.1),
(15, 'G15', 'Memiliki riwayat keluarga glaukoma', 0.5),
(16, 'G16', 'Memiliki riwayat keluarga retinitis pigmentosa', 0.8),
(17, 'G17', 'Memiliki riwayat penggunaan lensa kontak', 0.5),
(18, 'G18', 'Memiliki riwayat trauma (ada benda masuk atau cairan kimia)', 0.5),
(19, 'G19', 'Merasa silau', 0.2),
(20, 'G20', 'Mual dan muntah-muntah\r\n', 0.8),
(21, 'G21', 'Muncul jaringan parut di kelopak mata\r\n', 0.85),
(22, 'G22', 'Penglihatan buram\r\n', 0.55),
(23, 'G23', 'Penglihatan buram mendadak\r\n', 0.5),
(24, 'G24', 'Penglihatan buram saat senja\r\n', 0.85),
(25, 'G25', 'Penglihatan buram secara perlahan\r\n', 0.5),
(26, 'G26', 'Penglihatan buram seperti melihat asap atau kabut\r\n', 0.65),
(27, 'G27', 'Penglihatan seperti ada yang menghalangi\r\n', 0.45),
(28, 'G28', 'Penglihatan tidak membaik dengan menggunakan kacamata\r\n', 0.65),
(29, 'G29', 'Penglihatan tunnel vision (seperti melihat dalam sedotan)\r\n', 0.85),
(30, 'G30', 'Penurunan persepsi sensorik perifer (pada anggota gerak)\r\n', 0.2),
(31, 'G31', 'Seperti melihat halo/pelangi saat melihat cahaya\r\n', 0.6),
(32, 'G32', 'Sering buang air kecil\r\n', 0.6),
(33, 'G33', 'Sering kesemutan, lapar, haus\r\n', 0.6),
(34, 'G34', 'Sering tersandung atau menabrak benda saat berjalan\r\n', 0.8),
(35, 'G35', 'Sulit mengenali orang lain\r\n', 0.72);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id` int(11) NOT NULL,
  `kode_gangguan` varchar(4) NOT NULL,
  `kode_gejala` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengetahuan`
--

INSERT INTO `pengetahuan` (`id`, `kode_gangguan`, `kode_gejala`) VALUES
(1, 'P01', 'G02'),
(2, 'P01', 'G19'),
(3, 'P01', 'G22'),
(4, 'P01', 'G25'),
(5, 'P01', 'G26'),
(6, 'P01', 'G28'),
(7, 'P02', 'G06'),
(8, 'P02', 'G08'),
(9, 'P02', 'G10'),
(10, 'P02', 'G13'),
(11, 'P02', 'G14'),
(12, 'P02', 'G15'),
(13, 'P02', 'G19'),
(14, 'P02', 'G20'),
(15, 'P02', 'G29'),
(16, 'P02', 'G31'),
(17, 'P02', 'G34'),
(18, 'P02', 'G35'),
(19, 'P03', 'G01'),
(20, 'P03', 'G11'),
(21, 'P03', 'G12'),
(22, 'P03', 'G27'),
(23, 'P03', 'G35'),
(24, 'P04', 'G03'),
(25, 'P04', 'G13'),
(26, 'P04', 'G23'),
(27, 'P04', 'G25'),
(28, 'P04', 'G26'),
(29, 'P04', 'G27'),
(30, 'P04', 'G30'),
(31, 'P04', 'G32'),
(32, 'P04', 'G33'),
(33, 'P05', 'G02'),
(34, 'P05', 'G05'),
(35, 'P05', 'G07'),
(36, 'P05', 'G08'),
(37, 'P05', 'G09'),
(38, 'P05', 'G10'),
(39, 'P05', 'G17'),
(40, 'P05', 'G18'),
(41, 'P05', 'G19'),
(42, 'P05', 'G22'),
(43, 'P06', 'G01'),
(44, 'P06', 'G04'),
(45, 'P06', 'G05'),
(46, 'P06', 'G08'),
(47, 'P06', 'G10'),
(48, 'P06', 'G19'),
(49, 'P06', 'G21'),
(50, 'P06', 'G22'),
(51, 'P07', 'G06'),
(52, 'P07', 'G16'),
(53, 'P07', 'G24'),
(54, 'P07', 'G34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_gangguan` int(11) NOT NULL,
  `kode_gangguan` varchar(4) NOT NULL,
  `nama_gangguan` varchar(100) NOT NULL,
  `penanganan` text NOT NULL,
  `pengertian` text NOT NULL,
  `tips` text NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_gangguan`, `kode_gangguan`, `nama_gangguan`, `penanganan`, `pengertian`, `tips`, `gambar`) VALUES
(1, 'P01', 'Katarak', 'Menggunakan kacamata, apabila penggunaan kacamata sudah tidak berpengaruh maka disarankan untuk melakukan operasi katarak', 'Katarak dapat didefinisikan sebagai segala jenis kekeruhan yang terjadi pada lensa mata', '- Hindari paparan sinar UV (namun katarak adalah penyakit degeneratif, menghindari paparan sinar UV hanya untuk memperlambat proses kekeruhan lensa)', 'Mata Katarak.png'),
(2, 'P02', 'Glaukoma', 'Konsumsi obat anti glaukoma, dan lakukan kontrol mata secara rutin. apabila kondisi semakin memburuk maka disarankan untuk melakukan operasi glaukoma', 'Glaukoma merupakan neuropati optik yang khas disertai terkait dengan penurunan lapang pandang akibat kerusakan papil nervus optikus, dimana tekanan intraokular merupakan faktor risiko penting', '- Melakukan screening apabila memiliki riwayat keluarga glaucoma/ diabetes melitus/ hipotensi', 'Mata Glaukoma.png'),
(3, 'P03', 'Degenerasi Makula', 'konsumsi antioksidan yang cukup, makan dengan nutrisi yang seimbang, kurangi dan mulailah berhenti merokok, penyuntikan obat, dan jika kondisi semakin buruk maka disarankan untuk melakukan operasi vitrektomi', 'Degenerasi makula adalah penyebab utama hilangnya penglihatan permanen pada pasien usia lanjut. Penyakit ini akan menghilangkan kemampuan penglihatan sentral kita, menghilangkan detail, dan membuat kita melihat garis lurus menjadi bergelombang.', '- Hindari faktor pemicu stress oxidative seperti rokok </br>\r\n- Hindari paparan sinar UV langsung', 'Mata Degenerasi.jpg'),
(4, 'P04', 'Retinopati Diabetik', 'Kontrol diabetes secara teratur, lakukan penyuntikan obat, laser retina, dan apabila kondisi semakin buruk maka disarankan untuk operasi vitrektomi', 'Retinopati diabetik dapat didefinisikan sebagai suatu mikroangiopati progresif yang ditandai oleh kerusakan dan sumbatan pembuluh darah halus yang meliputi arteriol pre-kapiler, kapiler-kapiler, dan vena retina', '- Pola hidup sehat </br>\r\n- kontrol gula darah </br>\r\n- olahraga teratur', 'Mata Retinopati.png'),
(5, 'P05', 'Keratitis', 'Gunakan obat tetes mata sesuai rekomendasi dokter, dan bila kondisi semakin memburuk disarankan untuk operasi tambal kornea atau cangkok kornea.', 'Keratitis merupakan kelainan akibat terjadinya infiltrate sel radang pada kornea yang akan mengakibatkan kornea menjadi keruh, biasanya diklasifikasikan dalam lapisan yang terinfeksi seperti keratitis superficial, intertitisial dan profunda ', '- Menjaga kebersihan / higienisitas diri </br>\r\n- Mengganti soft lens dan cairannya sesuai jadwal </br>\r\n- Menggunakan pelindung mata saat bekerja seperti mengelas </br>\r\n- Tidak menggunakan obat tetes sembarangan / tanpa rekomendasi dokter ', 'Mata Keratitis.jpg'),
(6, 'P06', 'Trakoma', 'Konsumsi obat anti trakoma, dan apabila kondisi semakin buruk maka disarankan untuk operasi rekonstruksi kelopak mata', 'Trakoma adalah konjungtivitas kronis yang disebabkan oleh infeksi bakteri Chlamydia trachomatis. Penyakit ini adalah salah satu penyebab kebutaan di seluruh dunia khususnya di bagian Afrika Utara, Timur Tengah, Australia dan Asia Tenggara. Penyakit ini biasanya terjadi pada anak-anak yang berusia antara 3-6 tahun. ', '-	Menjaga kebersihan/ higienisitas diri -	Penyediaan air bersih -	Cuci tangan', 'Mata Trakoma.jpg'),
(7, 'P07', 'Retinitis Pigmentosa', 'Lakukan rehabilitasi visual', 'Retinitis pigmentosa adalah suatu kemunduran (degenerasi) progresif pada retina yang mempengaruhi penglihatan pada tepi dan malam hari. Penyakit ini dapat mengakibatkan hilangnya penglihatan (buta) karena menyerang sel batang retina yang berfungsi mengatur penglihatan pada malam hari ', '- Screening keluarga apabila terdapat riwayat retinitis pigmentosa </br>\r\n- Konseling genetika', 'Mata Retinitis.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(4) NOT NULL,
  `nama_tentang` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `sip_npm` varchar(20) NOT NULL,
  `tt_lahir` varchar(50) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `nama_instansi` varchar(25) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `nama_tentang`, `jenis_kelamin`, `pekerjaan`, `sip_npm`, `tt_lahir`, `alamat_rumah`, `no_telp`, `nama_instansi`, `foto`) VALUES
(1, 'Grace Farinthska Natalia Sulaeman', 'Perempuan', 'Dokter Spesialis Mata', '4459618', 'Sidoarjo, 25 November', 'Hacienda Kota Wisata Cibubur Jakarta Timur', '081281250285', 'RS Mata Cicendo', 'GraceProfile.jpeg'),
(2, 'Muhammad Fawwaz Izzuddin', 'Laki-laki', 'Developer', '140810150040', 'Bandung, 13 November 1997', 'Jl. Cijawura Girang V No.90B Sekejati Bandung', '081395508982', 'Universitas Padjadjaran', 'FawwazProfile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`),
  ADD UNIQUE KEY `kode_gejala` (`kode_gejala`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penyakit_kode_gangguan` (`kode_gangguan`),
  ADD KEY `gejala_kode_gejala` (`kode_gejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_gangguan`),
  ADD UNIQUE KEY `kode_gangguan` (`kode_gangguan`),
  ADD UNIQUE KEY `kode_gangguan_2` (`kode_gangguan`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_gangguan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD CONSTRAINT `gejala_kode_gejala` FOREIGN KEY (`kode_gejala`) REFERENCES `gejala` (`kode_gejala`),
  ADD CONSTRAINT `penyakit_kode_gangguan` FOREIGN KEY (`kode_gangguan`) REFERENCES `penyakit` (`kode_gangguan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
