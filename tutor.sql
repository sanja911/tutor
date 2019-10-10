-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Okt 2019 pada 08.26
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ambil_mapel`
--

CREATE TABLE `ambil_mapel` (
  `id` varchar(20) NOT NULL,
  `id_mapel` int(10) DEFAULT NULL,
  `id_user` varchar(10) NOT NULL,
  `mapel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ambil_mapel`
--

INSERT INTO `ambil_mapel` (`id`, `id_mapel`, `id_user`, `mapel`) VALUES
('0002', 2, 'T002', 'Basis Data'),
('0003', 1, 'T001', 'Data Mining'),
('0004', 2, 'T001', 'Basis Data'),
('0005', 2, 'T003', 'Basis Data');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ambil_tutor`
--

CREATE TABLE `ambil_tutor` (
  `id` varchar(20) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `id_tutor` varchar(10) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ambil_tutor`
--

INSERT INTO `ambil_tutor` (`id`, `id_user`, `id_tutor`, `id_mapel`, `id_kelas`) VALUES
('0005', 'U003', 'T001', 1, 'DM1'),
('0006', 'U002', 'T001', 1, 'DM1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `angket`
--

CREATE TABLE `angket` (
  `id_soal` int(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `jawaban` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `angket`
--

INSERT INTO `angket` (`id_soal`, `id_user`, `jawaban`) VALUES
(1, 'T002', 'SS'),
(2, 'T002', 'SS'),
(3, 'T002', 'SS'),
(4, 'T002', 'STS'),
(5, 'T002', 'SS'),
(6, 'T002', 'SS'),
(7, 'T002', 'S'),
(8, 'T002', 'S'),
(9, 'T002', 'S'),
(10, 'T002', 'S'),
(11, 'T002', 'S'),
(12, 'T002', 'SS'),
(13, 'T002', 'SS'),
(14, 'T002', 'S'),
(15, 'T002', 'S'),
(16, 'T002', 'S'),
(17, 'T002', 'S'),
(18, 'T002', 'SS'),
(19, 'T002', 'SS'),
(20, 'T002', 'S'),
(21, 'T002', 'S'),
(22, 'T002', 'SS'),
(23, 'T002', 'R'),
(24, 'T002', 'R'),
(25, 'T002', 'R'),
(26, 'T002', 'R'),
(27, 'T002', 'R'),
(28, 'T002', 'TS'),
(29, 'T002', 'TS'),
(30, 'T002', 'S'),
(31, 'T002', 'S'),
(32, 'T002', 'SS'),
(33, 'T002', 'SS'),
(34, 'T002', 'SS'),
(35, 'T002', 'SS'),
(1, 'T001', 'SS'),
(2, 'T001', 'SS'),
(3, 'T001', 'R'),
(4, 'T001', 'STS'),
(5, 'T001', 'SS'),
(6, 'T001', 'S'),
(7, 'T001', 'STS'),
(8, 'T001', 'S'),
(9, 'T001', 'S'),
(10, 'T001', 'SS'),
(11, 'T001', 'R'),
(12, 'T001', 'S'),
(13, 'T001', 'S'),
(14, 'T001', 'S'),
(15, 'T001', 'SS'),
(16, 'T001', 'SS'),
(17, 'T001', 'SS'),
(18, 'T001', 'SS'),
(19, 'T001', 'SS'),
(20, 'T001', 'SS'),
(21, 'T001', 'SS'),
(22, 'T001', 'SS'),
(23, 'T001', 'SS'),
(24, 'T001', 'SS'),
(25, 'T001', 'SS'),
(26, 'T001', 'SS'),
(27, 'T001', 'SS'),
(28, 'T001', 'SS'),
(29, 'T001', 'SS'),
(30, 'T001', 'SS'),
(31, 'T001', 'SS'),
(32, 'T001', 'SS'),
(33, 'T001', 'SS'),
(34, 'T001', 'SS'),
(35, 'T001', 'SS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id_materi` varchar(10) NOT NULL,
  `berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`id_materi`, `berkas`) VALUES
('0001', '0ABSTRACT 4.docx'),
('0001', '1abstract 3.docx'),
('0001', '0'),
('0001', '0Analisis Algoritma c.45.docx'),
('0001', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id_user` varchar(10) NOT NULL,
  `SS` int(11) NOT NULL,
  `S` int(11) NOT NULL,
  `R` int(11) NOT NULL,
  `TS` int(11) NOT NULL,
  `STS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id_user`, `SS`, `S`, `R`, `TS`, `STS`) VALUES
('T002', 14, 13, 5, 2, 1),
('T001', 25, 6, 2, 0, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` varchar(10) NOT NULL,
  `id_kelas` varchar(20) NOT NULL,
  `id_tutor` varchar(10) NOT NULL,
  `id_mapel` varchar(10) NOT NULL,
  `kuota` int(10) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `id_kelas`, `id_tutor`, `id_mapel`, `kuota`, `status`) VALUES
('0004', 'BASDA2', 'T002', '2', 32, '<font color=green>Dikonfirmasi<font>'),
('0003', 'DM1', 'T001', '1', 2, '<font color=green>Dikonfirmasi<font>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_user` varchar(10) NOT NULL,
  `umur` int(10) NOT NULL,
  `jenis_kel` varchar(2) NOT NULL,
  `lama_mengajar` int(10) NOT NULL,
  `alamat` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `awal` date NOT NULL,
  `akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_user`, `umur`, `jenis_kel`, `lama_mengajar`, `alamat`, `link`, `awal`, `akhir`) VALUES
('T001', 23, 'L', 12, 'Jln.Pesantren Al-Hidayah\r\nkecamatan sukorejo', 'sanja.com', '2000-12-12', '2012-12-12'),
('T002', 23, 'L', 15, 'Jln.Pesantren Al-Hidayah\r\nkecamatan sukorejo', 'www.tutor.com', '2000-12-12', '2015-12-12'),
('T003', 22, 'L', 15, 'asdasdasdasdadasdasd', '', '2000-12-12', '2015-12-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`) VALUES
(1, 'Data Mining'),
(2, 'Basis Data');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_tutor`
--

CREATE TABLE `materi_tutor` (
  `id_materi` varchar(10) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `id_mapel` varchar(10) NOT NULL,
  `id_tutor` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `materi` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi_tutor`
--

INSERT INTO `materi_tutor` (`id_materi`, `id_kelas`, `id_mapel`, `id_tutor`, `judul`, `materi`, `file`) VALUES
('0001', 'BASDA12', '2', 'T002', 'sadsadad', '<blockquote>\r\n<p><br />\r\n<strong>sasa sasas </strong></p>\r\n</blockquote>\r\n\r\n<pre>\r\n<strong>sdsadasd </strong><strong>asdadasasd</strong><strong>sadada </strong></pre>\r\n', '0'),
('0002', 'BASDA2', '2', 'T002', 'sadsadad', '<p>qwewqeqwe <span dir=\"ltr\">sadasdasd &quot; asdasd</span></p>\r\n', '0'),
('0003', 'BASDA2', '2', 'T002', 'BASDA12', '<p>asdasdasd</p>\r\n', '0laporan.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `pesan`, `tujuan`, `status`) VALUES
('K005', 'User T002 sedang menunggu tanggapan anda untuk kelas baru', 'ADM', 'SEND'),
('K006', 'User T002 sedang menunggu tanggapan anda untuk kelas baru', 'ADM', 'SEND');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pernyataan`
--

CREATE TABLE `pernyataan` (
  `id` int(10) NOT NULL,
  `pernyataan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pernyataan`
--

INSERT INTO `pernyataan` (`id`, `pernyataan`) VALUES
(1, 'Ketika ada murid yang tidak dimengerti saya mencoba menjawabnya'),
(2, 'Saya merasa mampu mengerjakan suatu hal dengan baik.'),
(3, 'Saya mudah bergaul dengan orang baru atau murid'),
(4, 'Saya merasa memiliki kelebihan yang bisa untuk dikembangkan.'),
(5, 'Saya selalu merasa bahagia dalam mendidik.'),
(6, 'Saya bisa menjaga komitmen dalam mengajar'),
(7, 'Saya yakin dapat mengajar dengan baik'),
(8, 'Saya dapat menyelesaikan tiap masalah mengajar.'),
(9, 'Saya menyukai tantangan dalam mengajar.'),
(10, 'Saya termasuk pandai dalam mengajar.'),
(11, 'Saya berusaha mengembangkan bakat yang saya miliki.'),
(12, 'Saya merasa mempunyai fisik yang menunjang penampilan.'),
(13, 'Saya merasa mempunyai prestasi belajar yang baik '),
(14, 'Saya aktif dalam kegiatan organisasi'),
(15, 'Saya mempunyai kemauan yang kuat dalam mengajar'),
(16, 'Saya menganggap bahwa semua masalah pasti ada jalan keluarnya.'),
(17, 'Saya berusaha tegar dan tabah dalam menghadapi cobaan mengajar'),
(18, 'Saya pernah menjadi pengajar '),
(19, 'Saya berusaha menyelesaikan tugas tanpa bantuan orang lain.'),
(20, 'Saya suka mempelajari hal-hal baru untuk menambah wawasan.'),
(21, 'Saya merasa kelebihan yang saya punya dibutuhkan oleh orang lain.'),
(22, 'Saya berusaha bertanggung jawab terhadap apa yang saya lakukan.'),
(23, 'Saya menyukai kegiatan sosial.'),
(24, 'Saya berusaha santai untuk mengurangi ketegangan saat mengajar'),
(25, 'Saya merasa optimis dengan apa yang saya ajarkan'),
(26, 'Saya suka mengerjakan tugas-tugas.'),
(27, 'Saya mudah  untuk menghilangkan trouma dalam mengajar'),
(28, 'Saya merasa bayangan kegagalan menghantui diri saya.'),
(29, 'Saya merasa mempunyai pendirian yang teguh'),
(30, 'Saya siap dalam mengajar'),
(31, 'Saya merasa mempunyai daya tarik.'),
(32, 'Saya merasa mampu dalam bekerja berkelompok'),
(33, 'Saya mudah bergaul'),
(34, 'Saya percaya diri didepan umum'),
(35, 'Saya memiliki sikap yang sangat baik\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan`
--

CREATE TABLE `pilihan` (
  `id` int(11) NOT NULL,
  `pilihan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pilihan`
--

INSERT INTO `pilihan` (`id`, `pilihan`) VALUES
(1, 'SS'),
(2, 'S'),
(3, 'R'),
(4, 'TS'),
(5, 'STS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` varchar(20) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `prestasi` varchar(100) NOT NULL,
  `nama_pres` varchar(20) NOT NULL,
  `lulusan` varchar(10) NOT NULL,
  `nama_univ` varchar(30) NOT NULL,
  `universitas` varchar(100) NOT NULL,
  `qualifikasi` varchar(100) NOT NULL,
  `file` text NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id`, `id_user`, `prestasi`, `nama_pres`, `lulusan`, `nama_univ`, `universitas`, `qualifikasi`, `file`, `file1`, `file2`, `status`) VALUES
('P001', 'T002', 'luar negeri', 'Akademik', 'S1', 'UMM', 'luar negeri', 'tersertifikasi', 'image.png', '', '', '<font color=green>Dikonfirmasi<font>'),
('P002', 'T001', 'luar negeri', 'Gajel', 'S1', 'UGM', 'luar negeri', 'tersertifikasi', 'chair3.jpg', 'chair4.jpg', 'chair2.jpg', '<font color=green>Dikonfirmasi<font>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kel` enum('L','P') NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `akses` enum('Tutor','Siswa','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `email`, `tempat_lahir`, `tgl_lahir`, `jenis_kel`, `password`, `foto`, `akses`) VALUES
('ADM', 'administrator', 'admin', 'admin@admin.com', 'pasuruan', '2019-04-01', 'L', 'admin', '', 'Admin'),
('T001', 'sanja maulana', 'sanja96', 'avi.sanja@gmail.com', 'pasuruan', '1996-12-11', 'L', 'sanja', '12299172_1672845569651629_7719121632367886286_n.jpg', 'Tutor'),
('T002', 'sanja maulana', 'sanja', 'avi.sanja@gmail.com', 'pasuruan', '1996-12-12', 'L', 'sanja', '108-512.png', 'Tutor'),
('T003', 'sanja avi', 'sanja89', 'avi.sanja@gmail.com', 'pasuruan', '1996-12-12', 'L', 'sanja', '0056a5df5641136.jpg', 'Tutor'),
('U001', 'sanja maulana', 'sanja1', 'avi.sanja@gmail.com', 'pasuruan', '1991-12-12', 'L', 'sanja', '', 'Siswa'),
('U002', 'sanja maulana', 'sanja12', 'avi.sanja@gmail.com', 'pasuruan', '1991-12-12', 'L', 'sanja', 'stealth-mode-sticker_470x.png', 'Siswa'),
('U003', 'sanja avi', 'sanja0', 'avi.sanja@gmail.com', 'pasuruan', '1996-12-12', 'L', 'sanja', '0056a5df5641136.jpg', 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambil_mapel`
--
ALTER TABLE `ambil_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ambil_tutor`
--
ALTER TABLE `ambil_tutor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `materi_tutor`
--
ALTER TABLE `materi_tutor`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pernyataan`
--
ALTER TABLE `pernyataan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pernyataan`
--
ALTER TABLE `pernyataan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
