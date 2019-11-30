-- phpMyAdmin SQL Dump
-- version 2.8.0.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 30, 2019 at 08:33 PM
-- Server version: 5.0.20
-- PHP Version: 5.1.2
-- 
-- Database: `spm_`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `pertanyaan`
-- 

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(6) NOT NULL auto_increment,
  `pertanyaan` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_pertanyaan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=22 ;

-- 
-- Dumping data for table `pertanyaan`
-- 

INSERT INTO `pertanyaan` VALUES (1, 'Tersedia satuan pendidikan dalam jarak yang terjangkau dengan berjalan kaki yaitu maksimal 3 km untuk SD/MI dan 5 km untuk SMP/MTs dan kelompok permukiman di daerah terpencil');
INSERT INTO `pertanyaan` VALUES (2, 'Jumlah Peserta didik dalam setiap rombongan belajar untuk SD/MI tidak melebihi 32 orang. Untuk SMP/MTs tidak melebihi 36 orang untuk setiap rombongan belajar tersedia 1 ( satu ruang kelas yang dilengkapi dengan meja dan kursi yang cukup untuk peserta didik dan guru, serta papan tulis');
INSERT INTO `pertanyaan` VALUES (3, 'Di setiap SMP dan MTs tersedia ruangan laboratorium IPA yang dilengkapi dengan meja dan kursi yang cukup untuk 36 perserta didik dan minimal satu set peralatan praktek IPA demonstrasi dan eksperimen peserta didik');
INSERT INTO `pertanyaan` VALUES (4, 'Di setiap SD/MI dan SMP/MTs tersedia satu ruang guru yang di lengkapi dangan meja dan kursi untuk setiap orang guru, kepala sekolah dan staf kependidikan lainnya; dan di setiap SMP/MTs tersedia ruang kepala sekolah yang terpisah dari ruang guru');
INSERT INTO `pertanyaan` VALUES (5, 'Di setiap SMP/MTs tersedia 1 (satu) orng guru untuk setiap Mata Pelajaran dan untuk daerah khusus tersedia satu orang guru untuk setiap rumpun mata pelajaran');
INSERT INTO `pertanyaan` VALUES (6, 'Di setiap SMP/MTs tersedia guru dengan kualifikasi akademik s-1 atau D-lV sebanyak 70% dan separuh diantaranya (35% dari keseluruhan guru) telah memiliki sertifikat pendidik, untuk daerah khusus masing-masing sebanyak 40% dan 20%');
INSERT INTO `pertanyaan` VALUES (7, 'Di setiap SMP/MTs tersdia guru dengan kualifikasi akademik S-1 atau D-lV dan telah memiliki sertifikat pendidikan masing-masing satu orang untuk mata pelajaran Matematika, IPA, Bahasa indonesia, Bahasa inggris dan PKn');
INSERT INTO `pertanyaan` VALUES (8, 'Di setiap kabupaten/kota semua kepala SMP/MTs berkualifikasi Akademik S-1 atau D-IV dan telah memiliki sertifikat pendidik');
INSERT INTO `pertanyaan` VALUES (9, 'Kunjungan pengawas ke satuan pendidikan di lakukan satu kali setiap bulan dan setiap kunjungan di lakukan selama 3 jam untuk melakukan supervisi dan pembinaan');
INSERT INTO `pertanyaan` VALUES (10, 'Setiap SMP/MTs menyediakan buku teks mata pelajaran (bahasa indonesia, IPA, IPS, dan PKn)yang sudah di tetepkan kelayaknnya oleh pemerintah ');
INSERT INTO `pertanyaan` VALUES (11, 'Setiap SMP/MTs menyediakan buku teks yang sudah di tetepkan kelayaknnya oleh pemerintah mencakup semua mata pelajaran dengan perbandingan satu set untuk setiap peserta didik');
INSERT INTO `pertanyaan` VALUES (12, 'Setiap SMP/MTs telah menyediakan buku pengayaan dan referensi ');
INSERT INTO `pertanyaan` VALUES (13, 'Setiap guru tetap bekerja 37,5 jam per minggu di satuan pendidikan, termasuk merencanakan pembelajaran, melaksanakan pembelajaran, menilai hasil pembelajaran, membimbing peserta didik, dan melaksanakan tugas tambahan');
INSERT INTO `pertanyaan` VALUES (14, 'Satuan pendidikan menyelenggarakn proses pembelajaran selama 34 minggu pertahun dengan kegiatan pembelajaran sebagai brkt:');
INSERT INTO `pertanyaan` VALUES (15, 'Setiap guru yang menerapkan Rencana Pelaksanaan Pembelajaran ( RPP ) yang di susun  berdasarkan silabus untuk setiap mata pelajaran yang diampunya');
INSERT INTO `pertanyaan` VALUES (16, 'Setiap guru yang menerapkan Rencana Pelaksanaan Pembelajaran ( RPP ) yang di susun  berdasarkan silabus untuk setiap mata pelajaran yang diampunya');
INSERT INTO `pertanyaan` VALUES (17, 'Setiap guru mengembangkan dan menerapkan progam penilaian untuk membantu meningkatkan kemampuan belajaran pesertan didik');
INSERT INTO `pertanyaan` VALUES (18, 'Kepala sekolah melakukan supervisi kelas dan memeberikan umpan balin kepada guru dua kali dalam setiap semester');
INSERT INTO `pertanyaan` VALUES (19, 'Setiap guru menyampaikan laporan hasil evaluasi mata pelajaran serta hasil penilaian setiap peserta didik kepada kepala sekolah pada akhir semester dalam bentuk laporan hasil prestasi belajaran peserta didik');
INSERT INTO `pertanyaan` VALUES (20, 'Kepala Sekolah atau Madrasah menyampaikan Laporan hasil Ulangan Akhir Semester (UAS) dan Ulangan Kenaikan Kelas (UKK) serta Ujian Akhir (US/UN) kepada orang tua peserta didik dan menyampaikan rekapitulasinya Kepada Dinas Pendidikan Kabupaten/Kota atau Kantor Kemenang Kab/kota pada setiap akhir semester');
INSERT INTO `pertanyaan` VALUES (21, 'Satuan Pendidikan yang telahmemiliki Rencana Kerja');

-- --------------------------------------------------------

-- 
-- Table structure for table `sekolah`
-- 

CREATE TABLE `sekolah` (
  `id_sekolah` int(6) NOT NULL auto_increment,
  `sekolah` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_sekolah`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=38 ;

-- 
-- Dumping data for table `sekolah`
-- 

INSERT INTO `sekolah` VALUES (1, 'SMP NEGERI 1 BANJARBARU');
INSERT INTO `sekolah` VALUES (2, 'SMP NEGERI 2 BANJARBARU');
INSERT INTO `sekolah` VALUES (3, 'SMP NEGERI 3 BANJARBARU');
INSERT INTO `sekolah` VALUES (4, 'SMP NEGERI 4 BANJARBARU');
INSERT INTO `sekolah` VALUES (5, 'SMP NEGERI 5 BANJARBARU');
INSERT INTO `sekolah` VALUES (6, 'SMP NEGERI 6 BANJARBARU');
INSERT INTO `sekolah` VALUES (7, 'SMP NEGERI 8 BANJARBARU');
INSERT INTO `sekolah` VALUES (8, 'SMP NEGERI 9 BANJARBARU');
INSERT INTO `sekolah` VALUES (9, 'SMP NEGERI 10 BANJARBARU');
INSERT INTO `sekolah` VALUES (10, 'SMP NEGERI 11 BANJARBARU');
INSERT INTO `sekolah` VALUES (11, 'SMP NEGERI 12 BANJARBARU');
INSERT INTO `sekolah` VALUES (12, 'SMP NEGERI 13 BANJARBARU');
INSERT INTO `sekolah` VALUES (13, 'SMP NEGERI 14 BANJARBARU');
INSERT INTO `sekolah` VALUES (14, 'SMP NEGERI 15 BANJARBARU');
INSERT INTO `sekolah` VALUES (15, 'SMP PLUS CITRA MADINATUL ILMI');
INSERT INTO `sekolah` VALUES (16, 'SMPS AL MANSHUR');
INSERT INTO `sekolah` VALUES (17, 'SMPS MUHAMMADIYAH');
INSERT INTO `sekolah` VALUES (18, 'SMPS QARDHAN HASANA');
INSERT INTO `sekolah` VALUES (19, 'SMPS SANJAYA');
INSERT INTO `sekolah` VALUES (20, 'SMP BOARDING SCHOOL HIDAYATUL QURAN');
INSERT INTO `sekolah` VALUES (21, 'SMP IT ANIC');
INSERT INTO `sekolah` VALUES (22, 'SMP IT ARRAHMAN');
INSERT INTO `sekolah` VALUES (23, 'SMP IT ROBBANI');
INSERT INTO `sekolah` VALUES (24, 'SMP IT AL AZHAR 47');
INSERT INTO `sekolah` VALUES (25, 'MTS IHYA ULUMUDDIN');
INSERT INTO `sekolah` VALUES (26, 'MTS AL FALAH PUTERA');
INSERT INTO `sekolah` VALUES (27, 'MTS DARUL ILMI');
INSERT INTO `sekolah` VALUES (28, 'MTS NURUL MAAD');
INSERT INTO `sekolah` VALUES (29, 'MTS AL FALAH PUTERI');
INSERT INTO `sekolah` VALUES (30, 'MTS MIFTAHUL KHAIRIYAH');
INSERT INTO `sekolah` VALUES (31, 'MTS NURUL HIKMAH');
INSERT INTO `sekolah` VALUES (32, 'MTS MIFTAHUL AULA');
INSERT INTO `sekolah` VALUES (33, 'MTS MISBAHUL MUNIR');
INSERT INTO `sekolah` VALUES (34, 'MTS ULUMUL QURAN AL MADANI');
INSERT INTO `sekolah` VALUES (35, 'MTS WARATSATUL FUQAHA');
INSERT INTO `sekolah` VALUES (36, 'MTS DAARUL IHSAN');
INSERT INTO `sekolah` VALUES (37, 'MTSS WALISONGO');

-- --------------------------------------------------------

-- 
-- Table structure for table `spm`
-- 

CREATE TABLE `spm` (
  `id_spm` int(6) NOT NULL auto_increment,
  `id_sekolah` varchar(6) collate latin1_general_ci NOT NULL,
  `id_periode` varchar(6) collate latin1_general_ci NOT NULL,
  `tahun` varchar(6) collate latin1_general_ci NOT NULL,
  `q1` varchar(5) collate latin1_general_ci NOT NULL,
  `q2` varchar(5) collate latin1_general_ci NOT NULL,
  `q3` varchar(5) collate latin1_general_ci NOT NULL,
  `q4` varchar(5) collate latin1_general_ci NOT NULL,
  `q5` varchar(5) collate latin1_general_ci NOT NULL,
  `q6` varchar(5) collate latin1_general_ci NOT NULL,
  `q7` varchar(5) collate latin1_general_ci NOT NULL,
  `q8` varchar(5) collate latin1_general_ci NOT NULL,
  `q9` varchar(5) collate latin1_general_ci NOT NULL,
  `q10` varchar(5) collate latin1_general_ci NOT NULL,
  `q11` varchar(5) collate latin1_general_ci NOT NULL,
  `q12` varchar(5) collate latin1_general_ci NOT NULL,
  `q13` varchar(5) collate latin1_general_ci NOT NULL,
  `q14` varchar(5) collate latin1_general_ci NOT NULL,
  `q15` varchar(5) collate latin1_general_ci NOT NULL,
  `q16` varchar(5) collate latin1_general_ci NOT NULL,
  `q17` varchar(5) collate latin1_general_ci NOT NULL,
  `q18` varchar(5) collate latin1_general_ci NOT NULL,
  `q19` varchar(5) collate latin1_general_ci NOT NULL,
  `q20` varchar(5) collate latin1_general_ci NOT NULL,
  `q21` varchar(5) collate latin1_general_ci NOT NULL,
  `unix` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_input` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_spm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=44 ;

-- 
-- Dumping data for table `spm`
-- 

INSERT INTO `spm` VALUES (6, '1', '1', '2019', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2XqaGJjTgQ4y', '30-11-2019');
INSERT INTO `spm` VALUES (7, '1', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'y4FFH8p5NfK2', '30-11-2019');
INSERT INTO `spm` VALUES (5, '2', '1', '2019', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '4teOqOC1UScM', '30-11-2019');
INSERT INTO `spm` VALUES (8, '2', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'm56YqhbgVNpz', '30-11-2019');
INSERT INTO `spm` VALUES (9, '3', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'EPAQNMjXMb7z', '30-11-2019');
INSERT INTO `spm` VALUES (10, '4', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '56j4b62hd5r0', '30-11-2019');
INSERT INTO `spm` VALUES (11, '5', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'rz1mVfi3gqPg', '30-11-2019');
INSERT INTO `spm` VALUES (12, '6', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'L91hdqRLFTn7', '30-11-2019');
INSERT INTO `spm` VALUES (13, '7', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'ZX7zbxjhmKF1', '30-11-2019');
INSERT INTO `spm` VALUES (14, '8', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '4fJi5zymi6f7', '30-11-2019');
INSERT INTO `spm` VALUES (15, '9', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'DKDk65Vb597S', '30-11-2019');
INSERT INTO `spm` VALUES (16, '10', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '6Y3Ip8P61RX9', '30-11-2019');
INSERT INTO `spm` VALUES (17, '11', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'AURO82yDItS9', '30-11-2019');
INSERT INTO `spm` VALUES (18, '12', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Z6JTjphVLW2N', '30-11-2019');
INSERT INTO `spm` VALUES (19, '13', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Be0er73joks0', '30-11-2019');
INSERT INTO `spm` VALUES (20, '14', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2BSLobXY1eEj', '30-11-2019');
INSERT INTO `spm` VALUES (21, '26', '0', '2019', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '3LnsMQRZ8pga', '30-11-2019');
INSERT INTO `spm` VALUES (22, '29', '1', '2019', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'yVa754QHtp1L', '30-11-2019');
INSERT INTO `spm` VALUES (23, '16', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '28B797X9Zpz9', '30-11-2019');
INSERT INTO `spm` VALUES (24, '15', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'kOEx2Y1xksX6', '30-11-2019');
INSERT INTO `spm` VALUES (25, '35', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Wj14jNSJ3h1U', '30-11-2019');
INSERT INTO `spm` VALUES (26, '17', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'qcFP388bkQZS', '30-11-2019');
INSERT INTO `spm` VALUES (27, '18', '0', '2019', '1', '1', '1', '1', '1', '0', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '7jM4qxxAGMAA', '30-11-2019');
INSERT INTO `spm` VALUES (28, '34', '1', '2019', '1', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', 'AgX39L4RcVGx', '30-11-2019');
INSERT INTO `spm` VALUES (29, '19', '1', '2019', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11DE2QBCn1Z1', '30-11-2019');
INSERT INTO `spm` VALUES (30, '20', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'VE50zg0T6gm1', '30-11-2019');
INSERT INTO `spm` VALUES (31, '33', '1', '2019', '1', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', 'PRmqIXYxVmP7', '30-11-2019');
INSERT INTO `spm` VALUES (32, '32', '1', '2019', '1', '1', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'UqqGhBuD27g2', '30-11-2019');
INSERT INTO `spm` VALUES (33, '21', '0', '2019', '1', '1', '0', '0', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'dCB66b6i7T9E', '30-11-2019');
INSERT INTO `spm` VALUES (34, '31', '0', '2019', '1', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'PfmyHgKUs7MI', '30-11-2019');
INSERT INTO `spm` VALUES (35, '30', '0', '2019', '1', '1', '1', '0', '0', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '548vI19F2Ohr', '30-11-2019');
INSERT INTO `spm` VALUES (36, '28', '1', '2019', '1', '1', '0', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'YDJPW8eL57P8', '30-11-2019');
INSERT INTO `spm` VALUES (37, '25', '0', '2019', '1', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'p2N984zDson2', '30-11-2019');
INSERT INTO `spm` VALUES (38, '22', '0', '2019', '1', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'XmP7Gjm9trC7', '30-11-2019');
INSERT INTO `spm` VALUES (39, '27', '0', '2019', '1', '1', '0', '1', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'yiSji4MfK675', '30-11-2019');
INSERT INTO `spm` VALUES (40, '23', '0', '2019', '1', '1', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'jJO8hni6Wcp8', '30-11-2019');
INSERT INTO `spm` VALUES (41, '24', '1', '2019', '1', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'gU19bHBcBvS9', '30-11-2019');
INSERT INTO `spm` VALUES (42, '37', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'yD9Vg8kD722T', '30-11-2019');
INSERT INTO `spm` VALUES (43, '36', '0', '2019', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'fB4G7Qevr7No', '30-11-2019');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(10) NOT NULL auto_increment,
  `nama` varchar(30) NOT NULL,
  `pswd` varchar(1000) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pertanyaan` varchar(1000) NOT NULL,
  `jawaban` varchar(1000) NOT NULL,
  `key_forgot` varchar(1000) NOT NULL,
  `lokasi_ad` varchar(200) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `id_skpd` varchar(15) NOT NULL,
  `tgl` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (2, 'Luki Dwi Janarko', '3351374649a3645cf743feafeb13c2df', 'luki_dije@yahoo.co.id', 'Siapa Nama Ayah Anda?', 'Daud Cahyono', '355cbd736f3abd59f59ce53a118b6d9b-luki_dije@yahoo.co.id-7540', 'files/12012016f9018fedbf7b107af381029aae766684.jpg', 'Admin', '', '12-Jan-2016 01:49:58');
INSERT INTO `users` VALUES (52, 'SMPS QARDHAN HASANA', 'c4ca4238a0b923820dcc509a6f75849b', 'qardhan', '-', '-', '-', 'files/fb8fdcca7d4e0abeed1bc346c41c0927.jpg', 'Admin Sekolah', '18', '30-11-2019, 7:14 pm');
INSERT INTO `users` VALUES (51, 'SMPS MUHAMMADIYAH', 'c4ca4238a0b923820dcc509a6f75849b', 'muhammadiyah', '-', '-', '-', 'files/5d76835a8a54569ba984df0d9080d8f5.jpg', 'Admin Sekolah', '17', '30-11-2019, 7:14 pm');
INSERT INTO `users` VALUES (49, 'SMP PLUS CITRA', 'c4ca4238a0b923820dcc509a6f75849b', 'smp plus', '-', '-', '-', 'files/61fa5d236c0b6faffb18753dc31c0a03.jpg', 'Admin Sekolah', '15', '30-11-2019, 7:12 pm');
INSERT INTO `users` VALUES (50, 'SMPS AL MANSHUR', 'c4ca4238a0b923820dcc509a6f75849b', 'smps al manshur', '-', '-', '-', 'files/bcd33cecf6416bdef4bf61afac3830df.jpg', 'Admin Sekolah', '16', '30-11-2019, 7:12 pm');
INSERT INTO `users` VALUES (48, 'SMP 15 BJB', 'c4ca4238a0b923820dcc509a6f75849b', 'smp 15', '-', '-', '-', 'files/ef04f9286e7072bace388248557ebc4a.jpg', 'Admin Sekolah', '14', '30-11-2019, 7:11 pm');
INSERT INTO `users` VALUES (47, 'SMP 14 BJB', 'c4ca4238a0b923820dcc509a6f75849b', 'smp 14', '-', '-', '-', 'files/473c8f5bb605b98f5bc43dd04cb96c33.jpg', 'Admin Sekolah', '13', '30-11-2019, 7:10 pm');
INSERT INTO `users` VALUES (45, 'SMP 12 BJB', 'c4ca4238a0b923820dcc509a6f75849b', 'smp 12', '-', '-', '-', 'files/d050f3c78015f869fed8185d57168692.jpg', 'Admin Sekolah', '11', '30-11-2019, 7:09 pm');
INSERT INTO `users` VALUES (46, 'SMP 13 BJB', 'c4ca4238a0b923820dcc509a6f75849b', 'smp 13', '-', '-', '-', 'files/7ec8b588fce196507c5781d64637b15b.jpg', 'Admin Sekolah', '12', '30-11-2019, 7:09 pm');
INSERT INTO `users` VALUES (43, 'SMPP 10 BJB', 'c4ca4238a0b923820dcc509a6f75849b', 'smp 10', '-', '-', '-', 'files/a5f9cf54a780c5556f622ccd2d3e9075.jpg', 'Admin Sekolah', '9', '30-11-2019, 7:08 pm');
INSERT INTO `users` VALUES (41, 'SMP 8 BJB', 'c4ca4238a0b923820dcc509a6f75849b', 'smp 8', '-', '-', '-', 'files/ec83598b3f8cb248937a4f770a5497b8.jpg', 'Admin Sekolah', '7', '30-11-2019, 7:06 pm');
INSERT INTO `users` VALUES (42, 'SMP 9 BJB', 'c4ca4238a0b923820dcc509a6f75849b', 'smp 9', '-', '-', '-', 'files/fe1e8743908099b44a7899de411813e9.jpg', 'Admin Sekolah', '8', '30-11-2019, 7:07 pm');
INSERT INTO `users` VALUES (40, 'SMP 6 BJB', 'c4ca4238a0b923820dcc509a6f75849b', 'smp 6', '-', '-', '-', 'files/d821e204981f511288feba59a1a7d194.jpg', 'Admin Sekolah', '6', '30-11-2019, 7:06 pm');
INSERT INTO `users` VALUES (39, 'SMP 5 BJB', 'c4ca4238a0b923820dcc509a6f75849b', 'smp 5', '-', '-', '-', 'files/eea3c1739f5610eb6548b6d0cd31f21c.jpg', 'Admin Sekolah', '5', '30-11-2019, 7:05 pm');
INSERT INTO `users` VALUES (44, 'SMP 11 BJB', 'c4ca4238a0b923820dcc509a6f75849b', 'smp 11', '-', '-', '-', 'files/732ed40d3ad1c402d1f4391fb6dd683c.jpg', 'Admin Sekolah', '10', '30-11-2019, 7:08 pm');
INSERT INTO `users` VALUES (38, 'SMP 4 BJB', 'c4ca4238a0b923820dcc509a6f75849b', 'smp 4', '-', '-', '-', 'files/05eedca20dfd18a7b2f61314552f5643.jpg', 'Admin Sekolah', '4', '30-11-2019, 7:05 pm');
INSERT INTO `users` VALUES (36, 'SYAIDAH', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '-', '-', '-', 'files/0504bdc4357022ce5ac4cf0d221e0ddb.jpg', 'Admin', '-', '30-11-2019, 2:39 pm');
INSERT INTO `users` VALUES (37, 'SMP 3 BJB', 'c4ca4238a0b923820dcc509a6f75849b', 'smp 3', '-', '-', '-', 'files/04372d70150401565d3a4a6475116d0d.jpg', 'Admin Sekolah', '3', '30-11-2019, 7:04 pm');
INSERT INTO `users` VALUES (35, 'SMP 2', 'c4ca4238a0b923820dcc509a6f75849b', 'smp 2', '-', '-', '-', 'files/f5f218c92ec416f739456ecda432bb97.jpg', 'Admin Sekolah', '2', '30-11-2019, 1:41 pm');
INSERT INTO `users` VALUES (34, 'Luki Dwi Janarko', 'c4ca4238a0b923820dcc509a6f75849b', 'luki', '-', '-', '-', 'files/602114e8d7ef17f672bc374a8fca2717.jpg', 'Admin Sekolah', '1', '30-11-2019, 5:17 am');
INSERT INTO `users` VALUES (53, 'SMPS SANJAYA', 'c4ca4238a0b923820dcc509a6f75849b', 'sanjaya', '-', '-', '-', 'files/ef56f3a3ce629fe117545dee6d2dba9c.jpg', 'Admin Sekolah', '19', '30-11-2019, 7:15 pm');
INSERT INTO `users` VALUES (54, 'SMP BOARDING', 'c4ca4238a0b923820dcc509a6f75849b', 'boarding', '-', '-', '-', 'files/944e1dab73e2f2cf69a83e1dc5a641c2.jpg', 'Admin Sekolah', '20', '30-11-2019, 7:15 pm');
INSERT INTO `users` VALUES (55, 'SMP IT ANIC', 'c4ca4238a0b923820dcc509a6f75849b', 'it anic', '-', '-', '-', 'files/ede33cd91c3e02d8067227f89bacfede.jpg', 'Admin Sekolah', '21', '30-11-2019, 7:16 pm');
INSERT INTO `users` VALUES (56, 'SMP IT ARRAHMAN', 'c4ca4238a0b923820dcc509a6f75849b', 'arrahman', '-', '-', '-', 'files/e851863d649ac379dff9ba00dc653b5a.jpg', 'Admin Sekolah', '22', '30-11-2019, 7:16 pm');
INSERT INTO `users` VALUES (57, 'SMP IT ROBBANI', 'c4ca4238a0b923820dcc509a6f75849b', 'robbani', '-', '-', '-', 'files/da69979e8e1516032c9a3002f7cbfeef.jpg', 'Admin Sekolah', '23', '30-11-2019, 7:17 pm');
INSERT INTO `users` VALUES (58, 'SMP IT AL AZHAR', 'c4ca4238a0b923820dcc509a6f75849b', 'al azhar', '-', '-', '-', 'files/827880f952bcf264a8aab9d163e26e29.jpg', 'Admin Sekolah', '24', '30-11-2019, 7:17 pm');
INSERT INTO `users` VALUES (59, 'MTS IHYA ULUMUDDIN', 'c4ca4238a0b923820dcc509a6f75849b', 'ihya', '-', '-', '-', 'files/377a5728fe0a757fb0ce884f83fb9ebd.jpg', 'Admin Sekolah', '25', '30-11-2019, 7:20 pm');
INSERT INTO `users` VALUES (60, 'MTS AL FALAH PUTERA', 'c4ca4238a0b923820dcc509a6f75849b', 'al falah putera', '-', '-', '-', 'files/d2d7de6db3acc71ea2175d3121df7e34.jpg', 'Admin Sekolah', '26', '30-11-2019, 7:20 pm');
INSERT INTO `users` VALUES (61, 'MTS DARUL ILMI', 'c4ca4238a0b923820dcc509a6f75849b', 'darul', '-', '-', '-', 'files/28b71f6caae9f0d3ab102740b271ad6d.jpg', 'Admin Sekolah', '27', '30-11-2019, 7:21 pm');
INSERT INTO `users` VALUES (62, 'MTS NURUL MAAD', 'c4ca4238a0b923820dcc509a6f75849b', 'nurul maad', '-', '-', '-', 'files/ac96c001d1abf582bf3029c29294828c.jpg', 'Admin Sekolah', '28', '30-11-2019, 7:21 pm');
INSERT INTO `users` VALUES (63, 'MTS AL FALAH PUTERI', 'c4ca4238a0b923820dcc509a6f75849b', 'al falah puteri', '-', '-', '-', 'files/db1f722766e8367a743154e23a3aa811.jpg', 'Admin Sekolah', '29', '30-11-2019, 7:22 pm');
INSERT INTO `users` VALUES (64, 'MTS MIFTAHUL KHAIRIYAH', 'c4ca4238a0b923820dcc509a6f75849b', 'miftahul khairiyah', '-', '-', '-', 'files/ca1887384853a125d98db83ea30104e9.jpg', 'Admin Sekolah', '30', '30-11-2019, 7:23 pm');
INSERT INTO `users` VALUES (65, 'MTS NURUL HIKMAH', 'c4ca4238a0b923820dcc509a6f75849b', 'nurul hikmah', '-', '-', '-', 'files/90a5845f6d7c76e7e36ef4a227d75c50.jpg', 'Admin Sekolah', '31', '30-11-2019, 7:23 pm');
INSERT INTO `users` VALUES (66, 'MTS MIFTAHUL AULA', 'c4ca4238a0b923820dcc509a6f75849b', 'miftahul aula', '-', '-', '-', 'files/5fc41b82830cf506c7d3392f1b3f99b8.jpg', 'Admin Sekolah', '32', '30-11-2019, 7:24 pm');
INSERT INTO `users` VALUES (67, 'MTS MISBAHUL MUNIR', 'c4ca4238a0b923820dcc509a6f75849b', 'misbahul munir', '-', '-', '-', 'files/915fa1597fe0a8c2cad1fb6c7861a852.jpg', 'Admin Sekolah', '33', '30-11-2019, 7:25 pm');
INSERT INTO `users` VALUES (68, 'MTS ULUMUL QURAN AL MADANI', 'c4ca4238a0b923820dcc509a6f75849b', 'ulumul quran', '-', '-', '-', 'files/938ca084e525636c3c340df9cd813cda.jpg', 'Admin Sekolah', '34', '30-11-2019, 7:25 pm');
INSERT INTO `users` VALUES (69, 'MTS WARATSATUL FUQAHA', 'c4ca4238a0b923820dcc509a6f75849b', 'waratsatul', '-', '-', '-', 'files/b40b59347f58ed3e43d9a9e697ed3661.jpg', 'Admin Sekolah', '35', '30-11-2019, 7:26 pm');
INSERT INTO `users` VALUES (70, 'MTS DAARUL IHSAN', 'c4ca4238a0b923820dcc509a6f75849b', 'daarul', '-', '-', '-', 'files/68f65b52c10679236fd4d0044393c5f9.jpg', 'Admin Sekolah', '36', '30-11-2019, 7:26 pm');
INSERT INTO `users` VALUES (71, 'MTSS WALISONGO', 'c4ca4238a0b923820dcc509a6f75849b', 'walisongo', '-', '-', '-', 'files/f9be7f9ee8fff932796f1cdaaae83ba8.jpg', 'Admin Sekolah', '37', '30-11-2019, 7:27 pm');
