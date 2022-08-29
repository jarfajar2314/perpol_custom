-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Agu 2022 pada 00.33
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `email_admin`, `username_admin`, `password_admin`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', '$2y$10$zIWqaoCr5vnLNt.e16EiuOf.GlFY.MLAu/5vz8B2pGUzOySUSPkf6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `url_buku` varchar(80) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penulis_buku` varchar(50) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `kategori_buku` varchar(50) NOT NULL,
  `jml_halaman` int(11) NOT NULL,
  `deskripsi_buku` text NOT NULL,
  `foto_buku` varchar(80) NOT NULL,
  `link_buku` text NOT NULL,
  `tgl_input_buku` timestamp NOT NULL DEFAULT current_timestamp(),
  `jml_bintang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `url_buku`, `judul_buku`, `penulis_buku`, `jumlah_buku`, `kategori_buku`, `jml_halaman`, `deskripsi_buku`, `foto_buku`, `link_buku`, `tgl_input_buku`, `jml_bintang`) VALUES
(1574354406, 'cinta-itu-1574354406', 'Cinta Itu', 'Penjaga Hati', 1, 'Novel', 500, 'Sebuah kejutan. Tentu saja. Wanita yang ternyata Ruben cintai, yang dikiranya masih single, ternyata sudah memiliki anak.', 'ca98e88c10573edaaf34fd0e2caf5052.jpg', 'https://drive.google.com/file/d/1-BR36-XRNyqa-vWh3Tv7fmMFQRVPkH4r/preview', '2019-11-21 08:50:17', 4),
(1574384411, 'si-juki-cari-kerja-1574384411', 'Si Juki Cari Kerja', 'Faza Meonk', 3, 'Komik', 70, 'Setelah lulus SMA, Juki adalah bocah nyentrik yang ngakunya nggak menyukai hal mainstream,memutuskan untuk langsung bekerja. Dengan keterampilan seadanya, kelakuan nyeleneh, dan teman-teman yang ajaib, Juki memulai petualangannya.', 'c212b49cef88cd6d45fab9c06bfe47cf.jpg', 'https://drive.google.com/file/d/1Ate6kQem3dSXYVFVrY9p4Z3kZ2KE2kRm/preview', '2019-11-21 08:50:17', 2),
(1574412815, 'pacarmu-belum-tentu-jodohmu-1574412815', 'Pacarmu Belum Tentu Jodohmu', 'Muhammad Syafi\'ie El-Bantanie', 3, 'Buku', 800, 'Pacaran bagi kebanyakan remaja mungkin mengasyikkan. Tapi tahukah kamu? Islam itu tidak mengenal pacaran, Bro/Sist. Karena pacaran merupakan perbuatan yang mendekati zina. Lebih banyak mudharat daripada manfaatnya.', '3384e272e06883de198ad2ed2df0b575.jpg', 'https://drive.google.com/file/d/1kZWKlmLtnOQY-7vvvzaYPIv9Wsa5KMlq/preview', '2019-11-22 08:53:35', 0),
(1574508313, 'tes-buku-1574508313', 'Tes Buku', 'Tes Penulis', 5, 'Buku', 45, 'deskripsi buku', 'cf401573c78e71de1cb82f5c9b6b6041.jpeg', 'https://drive.google.com/file/d/1zDioBz8u0aqaEa7Mw7OnEe3-GHhJCfNf/preview', '2019-11-23 11:25:14', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengembalian`
--

CREATE TABLE `tb_pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_buku_pengembalian` int(11) NOT NULL,
  `id_user_pengembalian` int(11) NOT NULL,
  `tgl_pengembalian` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengembalian`
--

INSERT INTO `tb_pengembalian` (`id_pengembalian`, `id_buku_pengembalian`, `id_user_pengembalian`, `tgl_pengembalian`) VALUES
(1, 1574384411, 2, '2019-11-23 00:59:29'),
(2, 1574354406, 1, '2019-11-23 06:19:13'),
(3, 1574384411, 1, '2019-11-23 06:21:42'),
(4, 1574354406, 1, '2019-11-23 06:22:39'),
(5, 1574354406, 1, '2019-11-23 10:07:32'),
(6, 0, 2, '2022-06-30 00:12:43'),
(7, 0, 2, '2022-06-30 00:12:50'),
(8, 0, 2, '2022-06-30 00:12:58'),
(9, 0, 2, '2022-06-30 00:18:50'),
(10, 1574412815, 2, '2022-07-24 12:21:21'),
(11, 1574508313, 2, '2022-07-24 12:21:25'),
(12, 1574508313, 2, '2022-07-24 12:26:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pinjaman`
--

CREATE TABLE `tb_pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `tgl_pinjam_buku` timestamp NOT NULL DEFAULT current_timestamp(),
  `tgl_kembali_pinjaman` date NOT NULL,
  `id_buku_pinjaman` int(11) NOT NULL,
  `id_user_pinjaman` int(11) NOT NULL,
  `jml_pinjam` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pinjaman`
--

INSERT INTO `tb_pinjaman` (`id_pinjaman`, `tgl_pinjam_buku`, `tgl_kembali_pinjaman`, `id_buku_pinjaman`, `id_user_pinjaman`, `jml_pinjam`, `status`) VALUES
(12163, '2019-11-22 17:00:00', '2019-11-26', 1574384411, 1, 1, 'Belum dikembalikan'),
(2125733109, '2022-07-24 12:26:48', '2022-07-27', 1574354406, 2, 1, '');

--
-- Trigger `tb_pinjaman`
--
DELIMITER $$
CREATE TRIGGER `TG_PINJAM` AFTER INSERT ON `tb_pinjaman` FOR EACH ROW BEGIN
 UPDATE tb_buku SET jumlah_buku=jumlah_buku-NEW.jml_pinjam
 WHERE id_buku=NEW.id_buku_pinjaman;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ratings`
--

CREATE TABLE `tb_ratings` (
  `id_rating` int(11) NOT NULL,
  `id_buku_rating` int(11) NOT NULL,
  `id_user_rating` int(11) NOT NULL,
  `jml_rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ratings`
--

INSERT INTO `tb_ratings` (`id_rating`, `id_buku_rating`, `id_user_rating`, `jml_rating`) VALUES
(1, 1574508313, 2, 2),
(2, 1574384411, 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sumbang_buku`
--

CREATE TABLE `tb_sumbang_buku` (
  `subu_id` int(11) NOT NULL,
  `subu_penyumbang` varchar(255) NOT NULL,
  `subu_jml` varchar(255) NOT NULL,
  `subu_tgl` date NOT NULL,
  `subu_status` varchar(255) NOT NULL,
  `subu_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `subu_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subu_email` varchar(255) DEFAULT NULL,
  `subu_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sumbang_buku`
--

INSERT INTO `tb_sumbang_buku` (`subu_id`, `subu_penyumbang`, `subu_jml`, `subu_tgl`, `subu_status`, `subu_created`, `subu_updated`, `subu_email`, `subu_telp`) VALUES
(7281, 'Miryana', '32 Buku', '2022-06-30', 'Diterima', '2022-06-30 00:57:06', '2022-07-02 09:18:48', 'miryana@gmail.com', '08567903473');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_token`
--

CREATE TABLE `tb_token` (
  `id_token` int(11) NOT NULL,
  `email_user_token` varchar(50) NOT NULL,
  `token_user` text NOT NULL,
  `token_dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` text NOT NULL,
  `akun_dibuat` int(11) NOT NULL,
  `status_user` int(11) NOT NULL,
  `foto_profil` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email_user`, `password_user`, `akun_dibuat`, `status_user`, `foto_profil`) VALUES
(1, 'Ahmad Adha', 'ahmadadha19@gmail.com', '$2y$10$fTyfBTYZ.WxYulZZEQUqZu02O4tfYmD5Q6Lf4YURNmg3ISxFlh4ga', 1574403976, 1, ''),
(2, 'Firman', 'firman@gmail.com', '$2y$10$4pN9WoDn.dAfApCyFmiYT.avbIlUTc.qM5mRXzpPVf/Ll/4XC38o.', 1574432689, 1, '7b23187e7f44f20bde26d24c4c34e7b4.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `tb_pengembalian`
--
ALTER TABLE `tb_pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indeks untuk tabel `tb_pinjaman`
--
ALTER TABLE `tb_pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- Indeks untuk tabel `tb_ratings`
--
ALTER TABLE `tb_ratings`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indeks untuk tabel `tb_sumbang_buku`
--
ALTER TABLE `tb_sumbang_buku`
  ADD PRIMARY KEY (`subu_id`);

--
-- Indeks untuk tabel `tb_token`
--
ALTER TABLE `tb_token`
  ADD PRIMARY KEY (`id_token`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pengembalian`
--
ALTER TABLE `tb_pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_ratings`
--
ALTER TABLE `tb_ratings`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_token`
--
ALTER TABLE `tb_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
