-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 03:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nrp` char(9) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(20, '202306951', 'Purcell Hefner', 'phefner3@rambler.ru', 'Voronezh State Medical Academy', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(21, '695466878', 'Sherill Gebhardt', 'sgebhardt4@cnet.com', 'University of Mining and Geology \"St. Ivan Rils\"', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(22, '149776668', 'Ludovico Klessmann', 'lklessmann5@independent.co.uk', 'Kalamazoo College', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(24, '000278166', 'Merrel Shinton', 'mshinton7@gnu.org', 'Pontificia Università Lateranense', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(25, '470128927', 'Harri Bulcroft', 'hbulcroft8@e-recht24.de', 'University of Kordofan', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(26, '600670591', 'Otha Yuryatin', 'oyuryatin9@fema.gov', 'University of Maribor', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(27, '438517259', 'Adolf Petrov', 'apetrova@economist.com', 'Pontifcia Universitas Lateranensis', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(30, '172682639', 'Kitti Grisbrook', 'kgrisbrookd@t-online.de', 'St. Petersburg State Marine Technical University', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(31, '205108756', 'Ignaz Sperling', 'isperlinge@goo.gl', 'Whittier College', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(32, '112615500', 'Gerardo Baldung', 'gbaldungf@usnews.com', 'Brexgata University Academy', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(33, '533164845', 'Sileas Dumbell', 'sdumbellg@yelp.com', 'Ecole Nationale Supérieure d\'Electronique et de Radioelectricite de Grenoble', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(34, '098761057', 'Kendal Budge', 'kbudgeh@wired.com', 'Universidad Popular Autonóma del Estado de Puebla', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(35, '739933244', 'Arty Dunbleton', 'adunbletoni@washingtonpost.com', 'Kyoto Gakuen University', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(36, '522262057', 'Malvin Swanbourne', 'mswanbournej@unicef.org', 'Stevens Institute of Technology', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(37, '155775970', 'Anton Lineen', 'alineenk@cdbaby.com', 'Arellano University', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(38, '888396364', 'Fernanda Brockwell', 'fbrockwelll@nhs.uk', 'Araullo University', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(39, '378621359', 'Holt Hallgate', 'hhallgatem@yahoo.co.jp', 'Kursk State Technical University', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(40, '416654818', 'Claudelle Canet', 'ccanetn@yahoo.co.jp', 'Volgograd State Technical University', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(41, '991450077', 'Bettye Dowry', 'bdowryo@imgur.com', 'Universiti Sains Malaysia', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(42, '384054378', 'Morgen Figurski', 'mfigurskip@va.gov', 'Universidade Cidade de São Paulo', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(43, '707726624', 'Salomo Rocks', 'srocksq@unblog.fr', 'Fachhochschule Lausitz', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(44, '596245755', 'Nolie Lott', 'nlottr@devhub.com', 'Ecole Nationale Supérieure de Chimie de Rennes', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(45, '757973245', 'Larine Claque', 'lclaques@yolasite.com', 'Petroleum University of Technology', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(46, '326102861', 'Faustina Irving', 'firvingt@trellian.com', 'Megatrend University of Applied Sciences', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(47, '405431978', 'Vilma Powelee', 'vpoweleeu@barnesandnoble.com', 'Upper Nile University', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(48, '459622123', 'Skell Freire', 'sfreirev@weebly.com', 'University of Pecs', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(49, '903153778', 'Antoine Deering', 'adeeringw@businesswire.com', 'Urmia University of Medical Sciences', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(50, '449439960', 'Debera Creavin', 'dcreavinx@dagondesign.com', 'Institut Sains & Teknologi Akprind', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(51, '239632385', 'Nester Keems', 'nkeemsy@ucoz.ru', 'California State University, Fullerton', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(52, '507615537', 'Dulce Gadman', 'dgadmanz@unc.edu', 'International School of New Media, University of Lübeck', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(53, '590976394', 'Giffard Rolles', 'grolles10@cam.ac.uk', 'UCSI University', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(54, '765162637', 'Sherlocke Olyfat', 'solyfat11@amazon.de', 'Kwansei Gakuin University', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(55, '174274378', 'Hermione Gilders', 'hgilders12@google.co.jp', 'University of El Imam El Mahdi University', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(56, '105241523', 'Geno Lamb', 'glamb13@google.pl', 'Al Rafidain University College', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(57, '586623843', 'Jaquith Rubinow', 'jrubinow14@php.net', 'National Chiao Tung University', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(58, '925111788', 'Yank Gartrell', 'ygartrell15@ted.com', 'Konkan Agricultural University', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(59, '667928846', 'Aleksandr Lydden', 'alydden16@hostgator.com', 'Sahmyook University', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(60, '411871321', 'Ainslie Macenzy', 'amacenzy17@bing.com', 'Fuji University', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(61, '004430543', 'Golda Sandy', 'gsandy18@constantcontact.com', 'Concordia University, Irvine', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(62, '768912553', 'Hyacinthe Lindeman', 'hlindeman19@uiuc.edu', 'Danish University of Education', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(63, '551214826', 'Kasper Edginton', 'kedginton1a@macromedia.com', 'Universidad del Valle de Toluca', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(64, '540619575', 'Sigfrid Child', 'schild1b@yale.edu', 'Takushoku University', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(65, '525191113', 'Preston Valentetti', 'pvalentetti1c@cnn.com', 'Bowling Green State University, Firelands', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(66, '924689120', 'Kinnie Wenger', 'kwenger1d@vinaora.com', 'Muthesius-Hochschule, Fachhochschule für Kunst und Gestaltung', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(67, '554423120', 'Teena Cockley', 'tcockley1e@nasa.gov', 'Hanzehogeschool Groningen', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(68, '404002952', 'Howey Fagan', 'hfagan1f@vkontakte.ru', 'Technische Universität Chemnitz', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(69, '974991640', 'Loreen Twatt', 'ltwatt1g@npr.org', 'Bodo Regional University', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(70, '304957524', 'Zack Warke', 'zwarke1h@house.gov', 'El Colegio de México', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(71, '798195119', 'Jacquetta Husthwaite', 'jhusthwaite1i@wikia.com', 'Western Oregon University', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(72, '798983282', 'Yale Blackater', 'yblackater1j@joomla.org', 'Technological University (Myitkyina) ', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(73, '766339445', 'Bent Tilby', 'btilby1k@businessweek.com', 'Fukuoka Women\'s University', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(74, '333457605', 'Lionello Ovenden', 'lovenden1l@so-net.ne.jp', 'Sahand University of Technology', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(75, '639231540', 'Andreas Murrum', 'amurrum1m@furl.net', 'Darul Takzim Institute of Technology', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(76, '634728738', 'Munmro De Rechter', 'mde1n@ibm.com', 'St. Petersburg State Academy for Engineering Economics (ENGECON)', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(77, '737063869', 'Torre Minors', 'tminors1o@blinklist.com', 'Fachhochschule Schmalkalden', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(78, '561811159', 'Beaufort Cramer', 'bcramer1p@bloomberg.com', 'Institut Supérieur de Management et de Technologie (MATCI)', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(79, '976565616', 'Kordula Borthe', 'kborthe1q@washington.edu', 'Hubert Kairuki Memorial University', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(80, '238335241', 'Aurthur McCorrie', 'amccorrie1r@sohu.com', 'Universidad Isaac Newton', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(81, '754641126', 'Iseabal Forrestor', 'iforrestor1s@hc360.com', 'University of Wamia and Masuria in Olsztyn', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(82, '698844318', 'Hugues Riccio', 'hriccio1t@jiathis.com', 'Escuela de Ingeniería de Antioquia', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(83, '159926073', 'Ardys Giottini', 'agiottini1u@edublogs.org', 'Voronezh State Academy of Technology', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(84, '744044844', 'Linc Vickarman', 'lvickarman1v@skype.com', 'Al-Birony University', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(85, '560063890', 'Ignazio Stienham', 'istienham1w@amazon.co.uk', 'Institute of Commonwealth Studies, University of London', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(86, '547776554', 'Bogart Yewdale', 'byewdale1x@wsj.com', 'Universidade São Judas Tadeu', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(87, '163157894', 'Hollie Mathivet', 'hmathivet1y@aol.com', 'Perm State Technical University', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(88, '882190815', 'Kaile MacLeese', 'kmacleese1z@jigsy.com', 'Örebro University', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(89, '942322748', 'Jobi Gurdon', 'jgurdon20@xrea.com', 'Institut National Supérieur de Formation Agro-Alimentaire', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(90, '631894373', 'Jeane Chaplain', 'jchaplain21@yale.edu', 'Universidad Tecnológica Nacional', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(91, '342459370', 'Kip Rock', 'krock22@ucoz.com', 'Semera University', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(92, '860691157', 'Dwayne Gascoigne', 'dgascoigne23@cnbc.com', 'University College of Gävle', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(93, '935436946', 'Tuckie Farraway', 'tfarraway24@state.tx.us', 'Haramaya University', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(94, '394109196', 'Harriott Lindfors', 'hlindfors25@nydailynews.com', 'Ecole Supérieure de Commerce de Dijon', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(95, '065164589', 'Franklyn Phillipson', 'fphillipson26@privacy.gov.au', 'Penza State University', 'http://dummyimage.com/50x50.png/dddddd/000000'),
(96, '849705761', 'Decca Stagge', 'dstagge27@theatlantic.com', 'Universidad Politécnica de Cartagena', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(97, '663563088', 'Gifford Skillern', 'gskillern28@devhub.com', 'University of the District of Columbia', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(98, '909570383', 'Carroll Schimank', 'cschimank29@upenn.edu', 'Bergen University College', 'http://dummyimage.com/50x50.png/5fa2dd/ffffff'),
(99, '651469221', 'Husein Dillamore', 'hdillamore2a@chron.com', 'Daneshestan Institute of Higher Education', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(100, '047082670', 'Brion Baty', 'bbaty2b@altervista.org', 'Babasaheb Bhimrao Ambedkar University', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(101, '132848678', 'Levy Dahl', 'ldahl2c@unblog.fr', 'University \"Titu Maiorescu\"', 'http://dummyimage.com/50x50.png/ff4444/ffffff'),
(102, '598532827', 'Giuditta Ropars', 'gropars2d@google.pl', 'Spelman College', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(103, '098914134', 'Tommy Bohlmann', 'tbohlmann2e@indiegogo.com', 'Ecole Nationale Supérieure d\'Agronomie et des Industries Alimentaires', 'http://dummyimage.com/50x50.png/cc0000/ffffff'),
(104, '421621768', 'Rosalinda Braitling', 'rbraitling2f@theglobeandmail.com', 'Mae Fah Luang University ', 'http://dummyimage.com/50x50.png/dddddd/000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'rndio', '$2y$10$cad9HFYcQv6L6vJO8wwaNuHKfzXoK.SioCXFAk0Wvq3c0Pn4sAy4O'),
(2, 'admin', '$2y$10$6x2Run.gS7n31LaSjkhzDeYjLhnbm94EEIJEBYf/K74Xo77.Gj97K'),
(3, 'ggwp', '$2y$10$fkqkUAoIzz7Nr6nRQZa4tOW65YpStstNmADPUDtivbiiqaMBbRvga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1117;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
