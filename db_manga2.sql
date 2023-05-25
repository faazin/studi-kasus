-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Bulan Mei 2023 pada 01.04
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_manga2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Comedy'),
(4, 'Drama'),
(5, 'Fantasy'),
(6, 'Shounen'),
(7, 'Mystery'),
(8, 'Supernatural'),
(9, 'Psychological'),
(10, 'Thriller'),
(11, 'Sci-Fi'),
(12, 'Seinen'),
(13, 'Superhero'),
(14, 'School'),
(15, 'Magic'),
(16, 'Horror'),
(17, 'Romance'),
(18, 'Magical Girl'),
(19, 'Martial Arts'),
(20, 'Superpower'),
(21, 'Virtual Reality'),
(22, 'Demons'),
(23, 'Harem'),
(24, 'Music'),
(25, 'Isekai'),
(26, 'Psychological'),
(27, 'Military');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manga`
--

CREATE TABLE `manga` (
  `id` int(11) NOT NULL,
  `manga_title` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `start_year` int(11) DEFAULT NULL,
  `end_year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `manga`
--

INSERT INTO `manga` (`id`, `manga_title`, `author`, `gambar`, `start_year`, `end_year`) VALUES
(1, 'One Piece', 'Eiichiro Oda', 'one piece.jpg', 1997, NULL),
(2, 'Attack on Titan', 'Hajime Isayama', 'attack on titan.jpg', 2009, 2021),
(3, 'Death Note', 'Tsugumi Ohba', 'death note.jpg', 2003, 2006),
(4, 'Bleach', 'Tite Kubo', 'bleach.jpg', 2001, 2016),
(5, 'One Punch Man', 'ONE', 'opm.jpg', 2012, NULL),
(6, 'My Hero Academia', 'Kohei Horikoshi', 'mha.jpg', 2014, NULL),
(7, 'Fullmetal Alchemist', 'Hiromu Arakawa', 'fma.jpg', 2001, 2010),
(8, 'Hunter x Hunter', 'Yoshihiro Togashi', 'hxh.jpg', 1998, NULL),
(9, 'Fairy Tail', 'Hiro Mashima', 'fairy tail.jpg', 2006, 2017),
(10, 'Tokyo Ghoul', 'Sui Ishida', 'tokyo ghoul.jpg', 2011, 2014),
(11, 'Sailor Moon', 'Naoko Takeuchi', 'sailor moon.jpg', 1992, 1997),
(12, 'Naruto: Shippuden', 'Masashi Kishimoto', 'naruto.jpg', 2007, 2017),
(13, 'Sword Art Online', 'Reki Kawahara', 'sao.jpg', 2009, NULL),
(14, 'Blue Exorcist', 'Kazue Kato', 'blue exorcist.jpg', 2009, NULL),
(15, 'Akame ga Kill!', 'Takahiro', 'akame ga kill.jpg', 2010, 2017),
(16, 'Nisekoi', 'Naoshi Komi', 'nisekoi.jpg', 2011, 2016),
(17, 'A Silent Voice', 'Yoshitoki Ōima', 'a silent voice.jpg', 2013, 2014),
(18, 'Your Lie in April', 'Naoshi Arakawa', 'your lie in april.jpg\r\n', 2011, 2015),
(19, 'Re:Zero − Starting Life in Another World', 'Tappei Nagatsuki', 're zero.jpg', 2014, NULL),
(20, 'The Rising of the Shield Hero', 'Aneko Yusagi', 'tate no yusha.jpg', 2013, NULL),
(21, 'That Time I Got Reincarnated as a Slime', 'Fuse', 'tensei shitara.jpg', 2013, NULL),
(22, 'Overlord', 'Kugane Maruyama', 'overlord.jpg', 2010, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `manga_genre`
--

CREATE TABLE `manga_genre` (
  `manga_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `manga_genre`
--

INSERT INTO `manga_genre` (`manga_id`, `genre_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(2, 1),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(4, 1),
(4, 2),
(4, 8),
(5, 1),
(5, 3),
(5, 6),
(5, 11),
(5, 12),
(5, 13),
(6, 1),
(6, 3),
(6, 6),
(6, 13),
(6, 14),
(7, 1),
(7, 2),
(7, 4),
(7, 5),
(7, 6),
(8, 1),
(8, 2),
(8, 5),
(8, 6),
(8, 8),
(9, 1),
(9, 2),
(9, 3),
(9, 5),
(9, 6),
(9, 15),
(10, 1),
(10, 4),
(10, 7),
(10, 8),
(10, 16),
(11, 2),
(11, 11),
(11, 17),
(11, 18),
(12, 1),
(12, 2),
(12, 6),
(12, 19),
(12, 20),
(13, 1),
(13, 2),
(13, 5),
(13, 17),
(13, 21),
(14, 1),
(14, 5),
(14, 6),
(14, 8),
(14, 22),
(15, 1),
(15, 2),
(15, 4),
(15, 5),
(15, 6),
(16, 1),
(16, 6),
(16, 14),
(16, 17),
(16, 23),
(17, 3),
(17, 6),
(17, 14),
(17, 17),
(17, 23),
(18, 4),
(18, 6),
(18, 14),
(18, 17),
(19, 4),
(19, 5),
(19, 19),
(19, 24),
(19, 25),
(19, 26),
(20, 1),
(20, 2),
(20, 4),
(20, 5),
(20, 25),
(21, 2),
(21, 3),
(21, 11),
(21, 22),
(21, 25),
(22, 1),
(22, 2),
(22, 4),
(22, 5),
(22, 25);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indeks untuk tabel `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `manga_genre`
--
ALTER TABLE `manga_genre`
  ADD PRIMARY KEY (`manga_id`,`genre_id`),
  ADD KEY `manga_genre_ibfk_2` (`genre_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `manga`
--
ALTER TABLE `manga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `manga_genre`
--
ALTER TABLE `manga_genre`
  ADD CONSTRAINT `manga_genre_ibfk_1` FOREIGN KEY (`manga_id`) REFERENCES `manga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manga_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
