-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2019 pada 06.34
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u492825399_smk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', '$2y$10$IKdpwKanKT.dHYTz8MEc7eQKo9l1c1MdIA/R3hWRwcv0SauASELXS', 'Erick Simamora');

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(5) NOT NULL,
  `adminid` int(5) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `shorten` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `adminid`, `created`, `modified`, `title`, `image`, `article`, `link`, `shorten`) VALUES
(1, 1, '2019-09-10 13:59:25', '2019-09-10 13:59:25', 'Peran Guru Dalam Pendidikan', '1_1568098765_5d7749cdb4161_20190910065925_n.jpg', '<div>Pematangsiantar, 2019 Aug 27 - Pengertian guru dalam pendidikan adalah tenaga profesional dengan tugas utama mendidik, mengajar, membimbing, mengarahkan, melatih, menilai dan mengevaluasi peserta didik pada pendidikan anak usia dini jalur pendidikan formal, pendidikan dasar dan pendidikan menengah (Undang Undang Nomor 14 tahun 2005, tentang Guru dan Dosen). Oleh karena itu, guru wajib memiliki kualifkasi akademik, kompetensi, sertifkat pendidik, sehat jasmani dan rohani, serta memiliki kemampuan untuk mewujudkan tujuan pendidikan nasional. </div><div><span xss=removed><br></span></div><div><span xss=removed>Guru atau pendidik secara sederhana dapat diartikan sebagai orang yang memberikan ilmu pengetahuan kepada anak didik. Karena tugasnya itulah, ia dapat menambah kewibawaannya dan keberadaan guru sangat diperlukan masyarakat. Dengan demikian, guru harus mampu menjaga kepercayaan masyarakat yang diberikan kepadanya, dengan itu juga guru diposisikan sebagai sosok yang disebut memiliki wewenang terhadap para muridnya. Info Bimtek Pusdiklat Pemendagri Untuk Pengembangan SDM</span></div><div><br></div><div><b>Peran Guru Dalam Pendidikan</b></div><div>Guru mempunyai tugas ganda yang luas, baik di sekolah, di keluarga maupun di masyarakat. Guru yang baik dan efektif ialah guru yang dapat memainkan semua perannya dengan baik. Menurut Armstrong dalam bukunya Secondary Education (1983) peranan guru ada 6 yaitu: </div><div><span xss=removed><br></span></div><div><span xss=removed><b>1. Guru sebagai instruktur</b></span></div><div><span xss=removed>Tanggungjawab instruksional guru ialah berlangsungnya interaksi belajar mengajar. Guru harus mampu menciptakan situasi dan kondisi belajar yang kondusif.</span><br></div><div><br></div><div><b>2. Guru sebagai manajer</b></div><div><span xss=removed>Dalam menjalankan tugas kesehariannya, guru sebagai pendidik dalam proses belajar-mengajar sangat dituntut kemampuannya dalam merencanakan, mengorganisasikan, melaksanakan dan mengawasi semua kegiatannya. Dengan demikian guru juga sebagai manajer bertanggung jawab untuk mengatur semua tugas-tugasnya dalam mendidik anak di kelas. </span><span xss=removed>Artinya semua komponen sekecil apapun yang ada di kelas harus diatur sedemikian rupa, karena ia berlangsung sebagai sebuah sistem, sehingga ia harus hati-hati dalam menyiapkan materi ajar, sarana prasarana, metode, pengaturan siswa di kelas dan lain sebagainya. Keberhasilan memanejemen semua komponen-komponen tersebut akan membuahkan keberhasilan, dan sebaliknya.</span></div><div><br></div><div><b>3. Guru sebagai pembimbing</b></div><div><span xss=removed>Dalam keseluruhan proses pendidikan, guru merupakan faktor utama. Sehubungan dengan perannya sebagai pembimbing, seorang guru harus:</span><br></div><div><br></div><div>a. Mengumpulkan data tentang siswa.</div><div>b. Mengamati tingkah laku siswa dalam situasi sehari-hari.</div><div>c. Mengenal para siswa yang memerlukan bantuan khusus.</div><div>d. Mengadakan pertemuan atau hubungan dengan orang tua siswa, baik secara individu maupun secara kelompok, untuk e. memperoleh saling pengertian tentang perkembangan pendidikan anaknya.</div><div>f. Bekerjasama dengan masyarakat dan lembaga-lembaga lainnya untuk membantu memecahkan masalah siswa.</div><div>g. Membuat catatan pribadi siswa.</div><div>h. Menyelenggarakan bimbingan kelompok atau individu.</div><div><br></div><div><b>4. Guru sebagai evaluator</b></div><div><span xss=removed>Penilaian merupakan suatu keharusan bagi seorang guru, untuk mengukur seberapa jauh ketercapaian tujuan pembelajaran. Seorang guru dalam menjalankan tugas kesehariannya, yaitu mendidik, tidak akan luput dari penilaian, baik aspek kognitif, psikomotor maupun afektif. Ketiga aspek ini dapat terwujud dengan baik jika seorang guru selama menjalankan tugasnya melakukan penilaian dengan baik.</span><br></div><div><br></div><div><b>5. Guru sebagai anggota organisasi profesi</b></div><div><span xss=removed>Tujuan utama dari organisasi profesi, adalah membantu para guru untuk meningkatkan profesinya, karena bagaimanapun juga persoalan pendidikan yang begitu kompleks tidak akan bisa diselesaikan dengan beberapa guru tanpa melalui organisasi profesi. Dengan ini peranan dan tanggung jawab guru akan semakin jelas dan terarah.</span><br></div><div><br></div><div><b>6. Guru sebagai spesialis hubungan masyarakat</b></div><div><span xss=removed>Guru harus mampu memainkan peran sebagai spesialis hubungan masyarakat, terutama dalam bekerja sama dengan orang tua siswa dan komite sekolah. Pandangan-pandangan masyarakat yang bersifat positif dan bersifat negatif terhadap sekolah cenderung tergantung pada bagaimana masyarakat tersebut memandang sekolah. Oleh karena itu, para guru harus tetap menjaga hubungan yang terbuka dan positif dengan para orangtua siswa di mana anak-anak mereka bersekolah.</span><br></div>', 'peran-guru-dalam-pendidikan', 'XhNB4L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(5) NOT NULL,
  `articleid` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `link` varchar(255) NOT NULL,
  `ipaddress` varchar(20) NOT NULL,
  `see` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `articleid`, `name`, `email`, `comment`, `created`, `link`, `ipaddress`, `see`) VALUES
(1, 1, 'Erwindo', 'erwindoq@gmail.com', 'Hahahaha', '2019-09-25 19:45:28', 'peran-guru-dalam-pendidikan', '::1', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `about` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `ipaddress` varchar(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `see` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `lead` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(5) NOT NULL,
  `link` varchar(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(200) NOT NULL,
  `tampilkan` tinyint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `link`, `title`, `image`, `description`, `tampilkan`, `date`) VALUES
(1, 'wL4VQmdclsg', 'Pendalaman Iman untuk siswa dan siswi agama Kristen', '1_1569303039_5d89a9ff1bf74_20190924073039_n.jpeg', 'Pematangsiantar melaksanakan Pendalaman Iman dengan pengkhotbah Pdt. Jojor. Rajagukguk, S.Th. dengan keyboard menambah semangat untuk mendengarkan firman Tuhan', 1, '2019-09-24'),
(2, 'P9ECuQDp8ij', 'Pionering dan Juara 3 Semaphore', '1_1569303059_5d89aa13bd344_20190924073059_n.jpeg', 'Team Pramuka dari SMA/SMK Pelita menjuarai Pionering - Semaphore dan mendapatkan Juara 3', 1, '2019-09-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT '$2y$10$lA1I4yKbm.5EVtbcC.uVxO3WRRNkjxiHYK1OLL3HkOtfI6DOchmQC',
  `nama` varchar(40) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` enum('0','L','P') NOT NULL DEFAULT '0',
  `agama` varchar(15) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `wali` enum('Y','T') NOT NULL DEFAULT 'T',
  `kelas` enum('0','X','XI','XII') NOT NULL,
  `jurusan` enum('0','RPL','TKJ','AK','AP') NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT '300x400.png',
  `masuk` year(4) NOT NULL,
  `keluar` year(4) NOT NULL,
  `status` enum('aktif','tidak') NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `histories`
--

CREATE TABLE `histories` (
  `id` int(5) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `histories`
--

INSERT INTO `histories` (`id`, `description`, `content`, `modified`) VALUES
(1, 'Sejarah pendirian Yayasan Perguruan Pelita Pematangsiantar', '<h2><span xss=\"removed\">Sejarah Pendirian Yayasan</span></h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eros leo, pharetra sit amet dictum ac, porta ultricies diam. Nullam tellus erat, dignissim non tempus a, vestibulum nec sem. Maecenas a nunc at eros fringilla mollis quis et neque. Ut fermentum ornare tincidunt. Vivamus odio ante, pellentesque eget venenatis nec, vestibulum et orci. Vivamus consequat nulla vitae sapien rutrum, hendrerit lacinia elit lacinia. Nunc vitae consectetur enim. Vestibulum ultrices consequat libero ut venenatis. Phasellus eu commodo sem, eget euismod nisl. In hac habitasse platea dictumst. Fusce blandit ut augue in elementum. Vestibulum facilisis libero ut risus tempus rutrum. Ut eu luctus eros. Donec ut metus ac sapien auctor placerat. Nullam sed velit eget risus efficitur porta vel quis libero.</p>', '2019-09-08 09:03:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `impressium`
--

CREATE TABLE `impressium` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `impressium`
--

INSERT INTO `impressium` (`id`, `name`, `image`, `content`, `modified`) VALUES
(1, 'Rita Roulina Sitanggang S.Pd.', '1_1568096103_5d773f67de616_20190910081503_n.png', '<p>Dengan mengucapkan segala puji syukur ke hadirat Tuhan Yang Maha Esa, disertai rasa syukur karena dengan bimbingan, rahmat, dan karunia-Nya lah akhirnya Website sekolah ini dapat kami perbaharui dengan domain <a href=\"https://smk.yppelitasiantar.sch.id\" target=\"_blank\">https://smk.yppelitasiantar.sch.id</a>.</p><p>Selamat datang di Website resmi SMK Swasta PELITA Pematangsiantar. Dalam perkembangan era globalisasi dan pesatnya kemajuan teknologi dan informasi ini, tidak dapat dipungkiri bahwa keberadaan sebuah website untuk dunia pendidikan khususnya sekolah, sangatlah penting. Media website dapat digunakan sebagai penyedia sarana dalam menyebarluaskan informasi dan perkembangan terkini dari sekolah. Disamping itu, website juga dapat menjadi ajang promosi sekolah yang cukup efektif. Berbagai kegiatan kemajuan sekolah dapat disampaikan dan di upload, disertai data maupun gambar yang relevan, sehingga masyarakat dapat mengetahui prestasi-prestasi yang telah berhasil diraih oleh SMK Swasta PELITA Pematangsiantar. Sebagai media pembelajaran, website sekolah dapat juga sebagai sarana untuk memuat blog dan e-learning yang dibuat oleh guru-guru. Di dalam blog tersebut guru dapat menuliskan berbagai artikel tentang pembelajaran atau materi penting mata pelajaran yang terkait dengan kegiatan pembelajaran di kelas. Dan dengan e-learning guru dapat memberikan tugas mandiri kepada peserta didik sehingga akan menunjang sarana kegiatan pembelajaran dengan berbasis Teknologi dan Informasi.</p><p>Website juga dapat dijadikan sarana komunikasi antara sekolah dengan para alumni. Bahkan alumni dapat memanfaatkan website sekolah untuk koordinasi dan konsolidasi, sehingga terbentuk ikatan alumni yang semakin solid. Sekolah menyadari bahwa alumni merupakan salah satu potensi yang apabila digali dan dikelola dengan baik dan benar akan mampu memberikan kontribusi yang sangat besar dan positif kepada sekolah. Oleh karena itu, saya sangat berharap, melalui website ini, himpunan alumni SMK Swasta PELITA semakin kuat, sehingga pada waktunya nanti dapat memberikan kontribusi yang sangat besar bagi kemajuan sekolah tercinta ini.</p><p>Akhir kata \"Tak ada gading yang tak retak\" segala sesuatu pasti memiliki kekurangan atau kelemahan masing-masing baik dalam bentuk tulisan maupun penyajian pada website SMK Swasta PELITA Pematangsiantar. Oleh Karena itu, kami akan terus belajar dan meng-update diri, sehingga mutu dan kualitas dari tampilan serta isi website kami akan terus berkembang. Kepada tim pembuat dan pengelola website sekolah, kami mengharapkan agar terus senantiasa mengembangkan website dengan semangat dan pantang menyerah.</p><p>Terima kasih atas kerjasamanya, maju terus untuk mencapai SMK Swasta PELITA Pematangsiantar yang lebih berkualitas dan sukses dalam mencerdaskan kehidupan anak Bangsa Indonesia.</p>', '2019-09-10 06:15:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(5) NOT NULL,
  `teachersid` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `lastmod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `teachersid`, `name`, `image`, `description`, `lastmod`, `link`) VALUES
(1, 1, 'Rekayasa Perangkat Lunak', '', '<p><span xss=removed>Rekayasa Perangkat Lunak adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembanganan perangkat lunak dan manajemen kualitas.</span><br></p>', '2019-09-25 18:45:25', 'rekayasa-perangkat-lunak'),
(2, 1, 'Teknik Komputer dan Jaringan', '', '<p><span xss=\"removed\">Teknik Komputer dan Jaringan merupakan ilmu berbasis Teknologi Informasi dan Komunikasi terkait kemampuan algoritma, dan pemrograman komputer, perakitan komputer, perakitan jaringan komputer, dan pengoperasian perangkat lunak, dan internet.</span><br></p>', '2019-09-25 18:45:20', 'teknik-komputer-dan-jaringan'),
(3, 1, 'Akuntansi', '', '<p><span xss=removed>Akuntansi adalah pengukuran, penjabaran, atau pemberian kepastian mengenai informasi yang akan membantu manajer, investor, otoritas pajak dan pembuat keputusan lain untuk membuat alokasi sumber daya keputusan di dalam perusahaan, organisasi non-profit, dan lembaga pemerintah.</span></p>', '2019-09-25 18:45:33', 'akuntansi'),
(4, 1, 'Administrasi Perkantoran', '', 'Manajemen administrasi perkantoran merupakan bagian dari manajemen yang memberikan informasi layanan bidang administrasi yang diperlukan untuk melaksanakan kegiatan secara efektif dan memberi dampak kelancaran pada bidang lainnya.', '2019-09-25 18:45:40', 'administrasi-perkantoran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logomotto`
--

CREATE TABLE `logomotto` (
  `id` int(5) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `logomotto`
--

INSERT INTO `logomotto` (`id`, `description`, `image`, `content`, `modified`) VALUES
(1, 'Makna dari Logo dan Motto SMK Pelita Pematangsiantar', '', '<h2>Selamat datang</h2>\r\n\r\n<p>Nam in sollicitudin turpis. Integer in sapien ac dui volutpat interdum quis et dolor. Proin id mi faucibus, facilisis urna id, egestas tortor. Aliquam elementum pharetra accumsan. Sed ullamcorper lorem at mi dignissim, quis mollis massa mattis. Proin lorem urna, lobortis at turpis et, pharetra interdum neque. Vivamus urna velit, molestie sed tortor sed, tincidunt tempor metus.</p>\r\n\r\n<h2>Makna logo</h2>\r\n\r\n<p>Donec quis dui dolor. Sed a turpis id elit aliquet accumsan. Phasellus augue diam, ultrices sagittis tempor non, tincidunt in neque. Vestibulum nec scelerisque elit. Nunc aliquet lectus vel enim venenatis efficitur. Phasellus quis varius risus, a rutrum ligula. Praesent quis ex in velit fermentum condimentum. Fusce congue, tellus vel ultrices pretium, sapien libero maximus augue, eu porttitor lacus risus non lorem. Donec sed lorem sed ante pellentesque semper vel non odio. Integer eu lorem eu tellus iaculis eleifend ac in metus. Cras hendrerit dictum imperdiet.</p>\r\n\r\n<h2>Motto</h2>\r\n\r\n<p>Nam in sollicitudin turpis. Integer in sapien ac dui volutpat interdum quis et dolor. Proin id mi faucibus, facilisis urna id, egestas tortor. Aliquam elementum pharetra accumsan. Sed ullamcorper lorem at mi dignissim, quis mollis massa mattis. Proin lorem urna, lobortis at turpis et, pharetra interdum neque. Vivamus urna velit, molestie sed tortor sed, tincidunt tempor metus.</p>', '2019-09-26 05:38:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roster`
--

CREATE TABLE `roster` (
  `id` int(5) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `les` int(2) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `jurusan` enum('rpl','tkj','ak','ap') NOT NULL,
  `kelas` enum('x','xi','xii') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT '$2y$10$lA1I4yKbm.5EVtbcC.uVxO3WRRNkjxiHYK1OLL3HkOtfI6DOchmQC',
  `nama` varchar(40) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` enum('0','L','P') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `telepon_ortu` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelas` enum('0','X','XI','XII') NOT NULL,
  `jurusan` enum('RPL','TKJ','AK','AP') NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT '300x400.png',
  `bio` varchar(100) NOT NULL DEFAULT 'Saya siswa SMK Pelita Pematangsiantar',
  `masuk` year(4) NOT NULL,
  `lulus` year(4) NOT NULL,
  `status` enum('aktif','prakerin','alumni','keluar') NOT NULL DEFAULT 'aktif',
  `aktif` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`id`, `image`, `description`, `content`, `modified`) VALUES
(1, '1_1567936299_5d74cf2b385cf_20190908115139_n.JPG', 'Struktur Organisasi SMK Pelita Pematangsiantar', '<p><span xss=removed>Struktur Organisasi SMK Pelita Pematangsiantar</span></p>', '2019-09-08 09:51:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `testimoni` text NOT NULL,
  `stambuk` year(4) NOT NULL,
  `whois` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `testimoni`, `stambuk`, `whois`) VALUES
(3, 'Erwindo Sianipar', 'Selama saya bersekolah di sini saya diberi bekal ilmu, attitude, akhlak dan senantiasa memupuk motivasi saya sebagai siswa untuk terus menggapai cita-cita. Kini saya telah menjadi seorang mahasiswa aktif dan telah bekerja sebagai software engineer sekaligus web developer dari website ini, terima kasih SMK Pelita.', 2018, 'Software Engineer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(5) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visimisi`
--

INSERT INTO `visimisi` (`id`, `description`, `content`, `modified`) VALUES
(1, 'Visi dan Misi SMK Pelita Pematangsiantar dalam dunia pendidikan', '<h2>Visi dan Misi SMK Pelita</h2>\r\n\r\n<p>Morbi ut nisl odio. In sed est molestie, consequat tortor quis, rhoncus nunc. Donec vitae tellus in risus luctus pulvinar at sed dui. Cras nec viverra eros. Integer efficitur orci id orci pharetra, a consectetur odio sodales. Curabitur faucibus bibendum magna eget efficitur. Donec maximus sapien nulla, id tempus est lobortis in.</p>\r\n\r\n<h2>Visi</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eros leo, pharetra sit amet dictum ac, porta ultricies diam. Nullam tellus erat, dignissim non tempus a, vestibulum nec sem. Maecenas a nunc at eros fringilla mollis quis et neque. Ut fermentum ornare tincidunt. Vivamus odio ante, pellentesque eget venenatis nec, vestibulum et orci. Vivamus consequat nulla vitae sapien rutrum, hendrerit lacinia elit lacinia. Nunc vitae consectetur enim. Vestibulum ultrices consequat libero ut venenatis. Phasellus eu commodo sem, eget euismod nisl. In hac habitasse platea dictumst. Fusce blandit ut augue in elementum. Vestibulum facilisis libero ut risus tempus rutrum. Ut eu luctus eros. Donec ut metus ac sapien auctor placerat. Nullam sed velit eget risus efficitur porta vel quis libero.</p>\r\n\r\n<h2>Misi</h2>\r\n\r\n<p>Sed feugiat dignissim consectetur. Aenean non ipsum sit amet arcu scelerisque lobortis. Curabitur auctor turpis in lorem congue, at iaculis odio vestibulum. Nam vel turpis blandit, placerat nulla id, hendrerit justo. Nulla sit amet urna neque. Nullam sagittis magna sit amet porttitor malesuada. In ultricies dictum pellentesque. Nullam tincidunt in magna et ultricies. Praesent euismod, est eget tempor suscipit, nisl erat venenatis neque, a vestibulum ex nulla vel urna. Fusce placerat mauris ut velit commodo aliquam. Praesent venenatis eget felis at eleifend. In eleifend nisi metus, sit amet sollicitudin dolor laoreet sit amet. Donec ultrices sollicitudin commodo. Nullam placerat tempor ultricies. Vestibulum tincidunt id enim euismod euismod. Sed et metus sit amet sem fermentum placerat non et odio.</p>\r\n\r\n<h2>Akhir kata</h2>\r\n\r\n<p>Donec quis dui dolor. Sed a turpis id elit aliquet accumsan. Phasellus augue diam, ultrices sagittis tempor non, tincidunt in neque. Vestibulum nec scelerisque elit. Nunc aliquet lectus vel enim venenatis efficitur. Phasellus quis varius risus, a rutrum ligula. Praesent quis ex in velit fermentum condimentum. Fusce congue, tellus vel ultrices pretium, sapien libero maximus augue, eu porttitor lacus risus non lorem. Donec sed lorem sed ante pellentesque semper vel non odio. Integer eu lorem eu tellus iaculis eleifend ac in metus. Cras hendrerit dictum imperdiet.</p>', '2019-09-26 05:38:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `yayasan`
--

CREATE TABLE `yayasan` (
  `id` int(5) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `yayasan`
--

INSERT INTO `yayasan` (`id`, `description`, `content`, `modified`) VALUES
(1, 'Selamat datang di website SMK Pelita', '<h3>Selamat datang di website SMK Pelita Pematangsiantar</h3>\r\n\r\n<p>Morbi ut nisl odio. In sed est molestie, consequat tortor quis, rhoncus nunc. Donec vitae tellus in risus luctus pulvinar at sed dui. Cras nec viverra eros. Integer efficitur orci id orci pharetra, a consectetur odio sodales. Curabitur faucibus bibendum magna eget efficitur. Donec maximus sapien nulla, id tempus est lobortis in.</p>', '2019-09-26 05:39:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indeks untuk tabel `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `impressium`
--
ALTER TABLE `impressium`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logomotto`
--
ALTER TABLE `logomotto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roster`
--
ALTER TABLE `roster`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indeks untuk tabel `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `yayasan`
--
ALTER TABLE `yayasan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `histories`
--
ALTER TABLE `histories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `impressium`
--
ALTER TABLE `impressium`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `logomotto`
--
ALTER TABLE `logomotto`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roster`
--
ALTER TABLE `roster`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `yayasan`
--
ALTER TABLE `yayasan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
