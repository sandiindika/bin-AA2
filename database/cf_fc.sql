-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 12:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cf_fc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `kode_user` varchar(6) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `user` varchar(16) NOT NULL,
  `pass` varchar(16) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`kode_user`, `nama_user`, `user`, `pass`, `level`) VALUES
('U001', 'Achmad Abdulloh', 'admin', 'admin', 'admin'),
('U002', 'Achmad Abdulloh', 'ahmad', 'ahmad', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa`
--

CREATE TABLE `tb_diagnosa` (
  `kode_diagnosa` varchar(16) NOT NULL,
  `nama_diagnosa` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `referensi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosa`
--

INSERT INTO `tb_diagnosa` (`kode_diagnosa`, `nama_diagnosa`, `keterangan`, `referensi`) VALUES
('P001', 'Mola Hidatidosa', 'Sebagian besar penderita hamil anggur akan mengalami keguguran spontan. Keguguran tersebut biasanya ditandai dengan keluarnya jaringan berbentuk gumpalan-gumpalan yang menyerupai sekumpulan buah anggur.\r\n\r\nJika tidak mengalami keguguran, dokter akan melakukan tindakan penanganan secepatnya guna mencegah terjadinya komplikasi yang lebih buruk. Tindakan yang dapat dilakukan dokter kandungan antara lain:\r\n\r\n1. Kuret\r\nPada prosedur kuret, dokter akan melebarkan serviks dan mengangkat jaringan abnormal dengan alat khusus. Prosedur ini merupakan pilihan paling baik jika penderita berencana untuk hamil kembali.\r\n\r\n2. Histerektomi\r\nHisterektomi adalah operasi untuk mengangkat rahim. Prosedur ini hanya dilakukan pada pasien yang tidak berencana hamil lagi atau berisiko tinggi mengalami penyakit berbahaya gestational trophoblastic neoplasia.', 'https://www.alodokter.com/hamil-anggur'),
('P002', 'Hiperemesis Gravidarum', 'Penderita hiperemesis gravidarum perlu menjalani perawatan di rumah sakit. Pengobatan yang diberikan ditentukan berdasarkan tingkat keparahan gejala dan kondisi kesehatan ibu hamil secara keseluruhan.\r\n\r\nPengobatan bertujuan untuk menghentikan mual dan muntah, mengganti cairan dan elektrolit yang hilang akibat muntah berlebihan, memenuhi kebutuhan nutrisi, dan mengembalikan nafsu makan.\r\n\r\nBeberapa obat yang dapat diberikan oleh dokter adalah:\r\n\r\nObat antimual, seperti promethazine,\r\nVitamin B1 atau tiamin,\r\nPyridoxine atau vitamin B6, dan\r\nSuplemen vitamin dan nutrisi.\r\n\r\nJika hiperemesis gravidarum menyebabkan ibu hamil tidak mampu menelan cairan atau makanan sama sekali, dokter akan memberikan obat dan nutrisi melalui infus. Selain melalui infus, ibu hamil juga dapat menerima asupan makanan melalui selang makan.', 'https://www.alodokter.com/hiperemsis-gravidarum'),
('P003', 'Blighted Ovum', '1. Kuret:\r\nDilatasi dan kuretase (kuret) dilakukan dengan membuka leher rahim (serviks), kemudian mengangkat kantong kehamilan yang kosong dari dalam rahim. Prosedur ini juga dapat dilakukan untuk mengetahui penyebab keguguran, dengan melakukan pemeriksaan jaringan yang diangkat di laboratorium.\r\n\r\n2. Obat-obatan:\r\nObat-obatan, seperti misoprostol, juga dapat digunakan sebagai pilihan pengobatan. Baik kuret ataupun obat-obatan dapat menimbulkan efek samping berupa nyeri atau kram perut. Jika dibandingkan dengan kuret, penggunaan obat-obatan dapat menyebabkan perdarahan yang lebih berat pada pasien.\r\n\r\nPasien juga bisa memilih untuk menunggu dan membiarkan kandungannya gugur secara alami dalam hitungan minggu. Meski begitu, proses ini tetap harus diawasi oleh dokter agar dipastikan tidak ada sisa jaringan kehamilan yang tertinggal di dalam rahim.', 'https://www.alodokter.com/blighted-ovum'),
('P004', 'Preeklamsia', 'Preeklamsia dapat teratasi jika janin dilahirkan atau dengan menangani gejala yang dialami ibu hamil sampai kondisinya siap untuk melahirkan. Beberapa penanganan yang dapat dilakukan yaitu:\r\n\r\n1. Pemberian obat-obatan,\r\nSejumlah obat-obatan yang dapat diresepkan untuk menangani preeklamsia adalah:\r\n\r\nAntihipertensi, seperti metildopa, untuk menurunkan tekanan darah.\r\nKortikosteroid, untuk mempercepat perkembangan paru-paru janin.\r\nMgSO4, untuk mencegah komplikasi kejang pada ibu hamil.\r\n\r\n2. Perawatan di rumah sakit,\r\nBila preeklamsia yang dialami ibu hamil cukup berat atau makin parah, perawatan di rumah sakit diperlukan agar kondisinya tetap terpantau. Selama perawatan, dokter akan melakukan tes darah, NST, dan USG secara rutin.\r\n\r\n3. Perawatan setelah melahirkan,\r\nSetelah melahirkan, pemantauan kondisi ibu dan bayi tetap perlu dilakukan. Umumnya, pasien perlu menjalani rawat inap beberapa hari setelah melahirkan. Pasien juga tetap perlu mengonsumsi obat antihipertensi yang diresepkan oleh dokter dan melakukan kontrol rutin selama 6 minggu setelah melahirkan.', 'https://www.alodokter.com/preeklamsia'),
('P005', 'Solusio Plasenta', 'Penanganan solusio plasenta tergantung pada kondisi janin dan ibu hamil, usia kehamilan, dan tingkat keparahan solusio plasenta. Jika solusio plasenta terjadi saat usia kehamilan belum mencapai 34 minggu, dokter kandungan akan meminta ibu hamil dirawat di rumah sakit agar kondisinya bisa diamati secara saksama. Jika detak jantung janin normal dan perdarahan pada ibu hamil berhenti, berarti solusio plasenta tidak terlalu parah dan ibu bisa pulang. Meski demikian, dokter umumnya akan memberikan suntikan kortikosteroid untuk mempercepat perkembangan paru-paru janin. Jika solusio plasenta terjadi saat usia kehamilan sudah lebih dari 34 minggu, dokter akan mengupayakan proses persalinan yang tidak membahayakan ibu dan bayinya. Bila solusio plasenta tidak parah, ibu hamil masih dapat melahirkan normal. Namun, jika tidak memungkinkan, dokter akan melakukan operasi caesar. Selama persalinan, ibu hamil yang mengalami perdarahan hebat mungkin perlu dibantu dengan transfusi darah. Hal ini dilakukan untuk mencegah ibu hamil syok atau mengalami kekurangan darah.', 'https://www.alodokter.com/solusio-plasenta'),
('P006', 'Kehamilan Ektopik', 'Tergantung pada perkembangan kehamilan dan lokasi menempelnya sel telur, dokter dapat menangani kehamilan ektopik dengan obat-obatan atau operasi.\r\n\r\n1. Obat suntik,\r\nSuntik methotrexate dapat diberikan untuk menghentikan kehamilan ektopik tahap awal. Setelah pemberian suntikan, dokter akan memantau kadar hormon hCG dalam darah tiap 2–3 hari hingga kadarnya menurun. Menurunnya kadar hCG menandakan kehamilan sudah tidak lagi berkembang.\r\n2. Operasi laparoskopi,\r\nKehamilan ektopik bisa merusak tuba falopi dan jaringan sekitarnya. Jika salah satu atau kedua tuba falopi rusak, dokter akan melakukan operasi laparoskopi untuk mengangkat tupa falopi tersebut.\r\n\r\nNamun, bila memungkinkan, bagian tuba falopi tersebut cukup diperbaiki tanpa harus diangkat. Hal ini dilakukan untuk meningkatkan peluang hamil di kemudian hari.\r\n3. Operasi laparotomi,\r\nPada pasien kehamilan ektopik yang mengalami perdarahan berat, dokter akan melakukan tindakan darurat berupa operasi laparotomi. Operasi ini dilakukan dengan membuat sayatan besar di perut sebagai jalan untuk mengangkat janin dan memperbaiki tuba falopi yang pecah.\r\n\r\nSetelah pengobatan, dokter akan menyarankan pasien memberi jeda waktu 3 bulan sebelum merencanakan kehamilan berikutnya. Tujuannya adalah agar rahim pulih sempurna dan mengurangi risiko kehamilan ektopik terjadi lagi.', 'https://www.alodokter.com/kehamilan-ektopik'),
('P007', 'Eklamsia', 'Kejang pada eklampsia merupakan kondisi gawat darurat yang mengancam nyawa ibu dan bayi. Oleh karena itu, persalinan adalah pengobatan utama yang dapat dilakukan untuk mengobati eklampsia. Sementara itu, pertolongan pertama pada gejala eklampsia adalah memutus kejang menggunakan obat-obatan.\r\n\r\n1. Obat-obatan Antikonvulsan (anti kejang): Magnesium sulfat suntikan pelan dalam intravena. Magnesium sulfat dapat merelaksasi otot-otot yang kejang. Pemberian magnesium sulfat dilakukan dengan suntikan intravena pelan untuk memutus kejang, kemudian dilakukan terapi pemeliharaan dengan magnesium sulfat infus selama 24 jam walaupun sudah tidak kejang untuk menghindari kejang berulang.\r\n2. Lorazepam atau Diazepam dapat diberikan apabila terdapat kontraindikasi dari magnesium sulfat.\r\n3. Phenitoin dapat diberikan jika mengalami kejang berulang walaupun sudah diberikan magnesium sulfat.\r\n4. Obat-obatan anti hipertensi harus sesegera mungkin setelah magnesium sulfat diberikan jika tensi diatas 160/110 mmHg. Target tekanan darah adalah 140–160/90–110 mmHg. Obat-obatan hipertensi yang dapat digunakan adalah labetalol atau nifedipin.\r\n5. Obat-obatan diuretik seperti furosemid dapat diberikan apabila terdapat cairan pada paru (edema pulmo).', 'https://www.halodoc.com/kesehatan/eklampsia'),
('P008', 'Plasenta Previa', 'Tidak ada perawatan medis atau tindakan bedah yang dapat mengatasi masalah plasenta previa. Namun, ada beberapa pilihan untuk mengelola perdarahan yang disebabkan oleh penyakit ini.\r\n\r\nTata laksana perdarahan tergantung pada berbagai faktor, termasuk:\r\n\r\nJumlah perdarahan.\r\n1. Apakah pendarahan telah berhenti.\r\n2. Usia kehamilan.\r\n3. Kondisi kesehatan ibu.\r\n4. Kesehatan bayi.\r\n5. Posisi plasenta dan bayi.\r\n\r\nLalu, jika plasenta previa tidak hilang selama kehamilan, perawatan yang bisa dilakukan adalah membantu kelahiran agar bisa sedekat mungkin dengan tanggal taksiran kelahiran. Hampir semua perempuan dengan plasenta previa yang belum terselesaikan membutuhkan kelahiran dengan cara seksio cesarean (operasi caesar).', 'https://www.halodoc.com/kesehatan/plasenta-previa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `kode_gejala` varchar(16) NOT NULL,
  `nama_gejala` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`kode_gejala`, `nama_gejala`, `keterangan`) VALUES
('G001', 'Merasa mual', 'Mual berlebihan atau mual sangat parah dan berkepanjangan'),
('G002', 'Muntah', 'Muntah berlebihan atau muntah sangat parah dan berkepanjangan'),
('G003', 'Pendarahan dalam tiga bulan pertama kehamilan', 'Perdarahan pada trimester pertama, yang terkadang mirip dengan perdarahan implantasi'),
('G004', 'Perut terlihat membesar melebihi usia kehamilan', 'Peningkatan ukuran perut yang lebih cepat'),
('G005', 'Keluarnya cairan berwana kecoklatan', 'Ditemukan kista atau gumpalan-gumpalan seperti anggur keluar dari vagina'),
('G006', 'Nyeri pada panggul', 'Mengalami nyeri parah pada panggul atau tulang panggul'),
('G007', 'Tidak ada detak jantung atau gerakan janin', 'Tidak ditemukan rangsangan gerak dari janin atau kandungan'),
('G008', 'Anemia', 'Sering merasa pusing atau anemia yang terjadi selama masa kehamilan'),
('G009', 'Berat badan menurun', 'Penurunan berat badan secara drastis'),
('G010', 'Dehidrasi', 'Dehidrasi akibat muntah yang berlebihan'),
('G011', 'Jantung berdebar', 'Sering merasa jantung berdebar yang berlebihan'),
('G012', 'Konstipasi atau sembelit', 'Kondisi yang ditandai dengan sulit buang air besar (BAB) atau frekuensi BAB yang lebih sedikit daripada biasanya'),
('G013', 'Mengeluarkan air liur secara berlebihan', 'Produksi air liur yang berlebih'),
('G014', 'Pusing', 'Kepala terasa berputar atau merasa akan pingsan'),
('G015', 'Sakit kepala', 'Rasa nyeri berlebih pada kepala'),
('G016', 'Sangat sensitif terhadap bau', 'Selama masa kehamilan menjadi sangat sensitif terhadap aroma atau bau dan terasa menyengat'),
('G017', 'Kehilangan nafsu makan', 'Hilangnya nafsu makan akibat kondisi mual dan muntah yang berlebih'),
('G018', 'Hipotensi atau tekanan darah rendah', 'Tekanan darah rendah yang berakibat pada sering merasa pusing dan lemas'),
('G020', 'Hasil tes kehamilan positif', 'Menunjukkan tanda positif hamil saat dilakukan pengecekan menggunakan test pack'),
('G021', 'Nyeri pada bagian payudara', 'Payudara mengeras atau bengkak dan terasa nyeri'),
('G022', 'Muncul bercak flek cokelat', 'Flek atau perdarahan dari vagina yang mengarah pada keguguran'),
('G023', 'Nyeri pada bagian perut', 'Rasa nyeri dan kram pada perut'),
('G024', 'Pendarahan dari vagina', 'Keluar darah dari vagina dengan volume yang bertambah banyak'),
('G025', 'Tekanan darah tinggi atau hipertensi', 'Tekanan darah tinggi biasanya berkembang secara perlahan'),
('G026', 'Gangguan penglihatan', 'Gangguan penglihatan, seperti pandangan kabur atau sensitif terhadap cahaya'),
('G027', 'Nyeri pada bagian perut kanan atas', 'Nyeri di ulu hati atau perut kanan atas'),
('G028', 'Produksi urine menurun', 'Frekuensi buang air kecil dan volume urine menurun'),
('G029', 'Sesak napas', 'Sering sesak napas dengan frekuensi sedang hingga tinggi'),
('G030', 'Pembengkakan pada kaki', 'Bengkak pada kaki maupun tungkai kaki'),
('G031', 'Pembengkakan pada tangan', 'Bengkak pada tangan'),
('G032', 'Pembengkakan pada wajah', 'Bengkak pada wajah atau beberapa bagian sekitar wajah'),
('G033', 'Pendarahan ringan', 'Perdarahan ringan yang sesekali terjadi dari vagina'),
('G034', 'Nyeri pada punggung', 'Nyeri punggung yang datang secara tiba-tiba'),
('G035', 'Nyeri pada rahim', 'Kontraksi rahim yang terjadi terus menerus atau kejang rahim (tetanik)'),
('G036', 'Cairan ketuban sangat sedikit', 'Volume air ketuban sangat sedikit'),
('G037', 'Nyeri pada bahu', 'Nyeri hebat di bagian bahu'),
('G038', 'Nyeri pada leher', 'Nyeri hebat di bagian leher'),
('G039', 'Sering merasa lemas', 'Sering lemas yang membuat tubuh menjadi lemah'),
('G040', 'Pingsan karena lemas', 'Merasa lemas dan lemas hingga pingsan'),
('G041', 'Berat badan naik secara drastis', 'Penambahan berat badan yang berlebihan selama kehamilan, lebih dari 1 kg per minggu'),
('G042', 'Kejang', 'Kejang yang diawalnya kedutan atau kejang pada otot-otot wajah dan kemudian menyebar ke seluruh tubuh'),
('G043', 'Pendarahan dari vagina pada akhir trimester kedua atau trimester ketiga', 'Perdarahan tanpa rasa nyeri pada kehamilan trimester kedua atau ketiga'),
('G044', 'Rasa nyeri atau kram pada perut atau punggung', 'kram atau perasaan tidak nyaman di punggung atau perut');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsultasi`
--

CREATE TABLE `tb_konsultasi` (
  `ID` int(11) NOT NULL,
  `kode_gejala` varchar(16) DEFAULT NULL,
  `jawaban` varchar(6) DEFAULT 'Tidak'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsultasi`
--

INSERT INTO `tb_konsultasi` (`ID`, `kode_gejala`, `jawaban`) VALUES
(1, 'G001', 'Ya'),
(2, 'G002', 'Ya'),
(3, 'G003', 'Tidak'),
(4, 'G004', 'Tidak'),
(5, 'G009', 'Tidak'),
(6, 'G010', 'Tidak'),
(7, 'G020', 'Ya'),
(8, 'G021', 'Tidak'),
(9, 'G022', 'Tidak'),
(10, 'G014', 'Ya'),
(11, 'G015', 'Ya'),
(12, 'G025', 'Ya'),
(13, 'G026', 'Ya'),
(14, 'G027', 'Ya'),
(15, 'G028', 'Ya'),
(16, 'G029', 'Ya'),
(17, 'G030', 'Ya'),
(18, 'G031', 'Ya'),
(19, 'G032', 'Ya'),
(20, 'G023', 'Tidak'),
(21, 'G033', 'Tidak'),
(22, 'G040', 'Tidak'),
(23, 'G008', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_relasi`
--

CREATE TABLE `tb_relasi` (
  `ID` int(11) NOT NULL,
  `kode_diagnosa` varchar(16) DEFAULT NULL,
  `kode_gejala` varchar(16) DEFAULT NULL,
  `cf` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_relasi`
--

INSERT INTO `tb_relasi` (`ID`, `kode_diagnosa`, `kode_gejala`, `cf`) VALUES
(65, 'P001', 'G001', 0.8),
(66, 'P001', 'G002', 0.6),
(67, 'P001', 'G003', 0.6),
(68, 'P001', 'G004', 0.6),
(69, 'P001', 'G005', 0.4),
(70, 'P001', 'G006', 0.4),
(71, 'P001', 'G007', 0.8),
(72, 'P001', 'G008', 0.4),
(73, 'P002', 'G001', 0.6),
(74, 'P002', 'G002', 0.8),
(75, 'P002', 'G009', 0.4),
(76, 'P002', 'G010', 0.6),
(77, 'P002', 'G011', 0.4),
(78, 'P002', 'G012', 0.6),
(79, 'P002', 'G013', 0.6),
(80, 'P002', 'G014', 0.8),
(81, 'P002', 'G015', 0.4),
(82, 'P002', 'G016', 0.4),
(83, 'P002', 'G017', 0.4),
(84, 'P002', 'G018', 0.6),
(86, 'P003', 'G020', 0.6),
(87, 'P003', 'G021', 0.4),
(88, 'P003', 'G001', 0.6),
(89, 'P003', 'G002', 0.4),
(90, 'P003', 'G022', 0.6),
(91, 'P003', 'G023', 0.4),
(92, 'P003', 'G024', 0.6),
(93, 'P004', 'G025', 1),
(94, 'P004', 'G015', 0.6),
(95, 'P004', 'G026', 0.4),
(96, 'P004', 'G027', 0.4),
(97, 'P004', 'G001', 0.6),
(98, 'P004', 'G002', 0.4),
(99, 'P004', 'G014', 0.6),
(100, 'P004', 'G028', 0.4),
(101, 'P004', 'G029', 0.6),
(102, 'P004', 'G030', 0.6),
(103, 'P004', 'G031', 0.6),
(104, 'P004', 'G032', 0.6),
(105, 'P005', 'G033', 0.8),
(106, 'P005', 'G023', 0.4),
(107, 'P005', 'G034', 0.4),
(108, 'P005', 'G035', 0.6),
(109, 'P005', 'G036', 0.4),
(110, 'P006', 'G001', 0.6),
(111, 'P006', 'G002', 0.6),
(112, 'P006', 'G021', 0.4),
(113, 'P006', 'G006', 0.6),
(114, 'P006', 'G023', 0.4),
(115, 'P006', 'G037', 0.4),
(116, 'P006', 'G038', 0.4),
(117, 'P006', 'G024', 0.4),
(118, 'P006', 'G033', 0.4),
(119, 'P006', 'G014', 0.6),
(120, 'P006', 'G039', 0.6),
(121, 'P006', 'G040', 0.4),
(122, 'P007', 'G015', 0.8),
(123, 'P007', 'G025', 0.6),
(124, 'P007', 'G041', 0.6),
(125, 'P007', 'G001', 0.6),
(126, 'P007', 'G002', 0.4),
(127, 'P007', 'G026', 0.6),
(128, 'P007', 'G023', 0.4),
(129, 'P007', 'G027', 0.6),
(130, 'P007', 'G030', 0.6),
(131, 'P007', 'G031', 0.6),
(132, 'P007', 'G032', 0.4),
(133, 'P007', 'G028', 0.4),
(134, 'P007', 'G042', 0.8),
(135, 'P007', 'G040', 0.4),
(136, 'P008', 'G043', 1),
(137, 'P008', 'G044', 0.4),
(138, 'P008', 'G004', 0.6),
(139, 'P008', 'G029', 0.6),
(140, 'P008', 'G014', 0.6),
(141, 'P008', 'G018', 0.4),
(142, 'P008', 'G008', 0.6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD PRIMARY KEY (`kode_diagnosa`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
