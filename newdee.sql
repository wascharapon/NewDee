-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 06:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdee`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `order_id` int(255) NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `pass` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`order_id`, `id`, `pass`, `status`) VALUES
(1, 'admin', 'pass', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(254) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `text`) VALUES
(3, 'admin', 'HELLO'),
(4, 'member', 'ABCD'),
(5, 'TEST', '153789');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `category` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `subject`, `body`, `category`, `photo`, `date`) VALUES
(52, 'ลือหึ่ง GTA 6 จะมีตัวเอกของเกมเป็นผู้หญิง!?', '<p style=\"text-align:center\">ข่าวลือของ<a href=\"http://game.sanook.com/flashgame\" target=\"_blank\" title=\"เกม\">เกม</a>&nbsp;<strong><a href=\"http://www.sanook.com/game/1085009/\" target=\"_blank\" title=\"Grand Theft Auto 6\">Grand Theft Auto 6</a></strong>&nbsp;หรือ&nbsp;<strong>GTA 6</strong>&nbsp;ถูกพูดถึงมาตั้งแต่การวางจำหน่ายของ&nbsp;Red Dead Redemption 2 ในปี 2018 ด้วยความที่ขึ้นแท่นเป็น<a href=\"http://game.sanook.com/flashgame\" target=\"_blank\" title=\"เกม\">เกม</a>&nbsp;Open World ที่ได้รับความนิยมมากที่สุด จึงทำให้มีข่าวลือจากความคาดหวังของแฟน<a href=\"http://game.sanook.com/flashgame\" target=\"_blank\" title=\"เกม\">เกม</a>ออกมามากมาย และบางข่าวลือนั้นก็ได้ถูกปัดตกไป แต่ก็มีข่าวลือบางอย่างที่ยังคงมีการพูดถึงกันเป็นระยะๆ ซึ่งหนึ่งในเรื่องที่น่าสนใจคือตัวเอกของ<a href=\"http://game.sanook.com/flashgame\" target=\"_blank\" title=\"เกม\">เกม</a>คนต่อไปจะเป็นอย่างไร?</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s.isanook.com/ga/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2dhLzAvdWQvMjE3LzEwODgwMzMvZ3RhXzZfZmVtYWxlX3J1bW9yXzEuanBn.jpg\" style=\"height:410px; width:728px\" /></p>\r\n\r\n<p style=\"text-align:center\">ที่ผ่านมานั้น&nbsp;Grand Theft Auto ได้ดำเนินเรื่องโดยมีตัวละครชายเป็นตัวเอกของเกมมาโดยตลอด และก็มีตัวละครหลายคนที่แฟนๆ ต่างชื่นชอบและจดจำกันได้ดี ไม่ว่าจะเป็น&nbsp;Tommy Vercetti จาก&nbsp;Grand Theft Auto: Vice City, CJ หรือ Carl Johnson จาก Grand Theft Auto: San Andreas, Niko Bellic จาก Grand Theft Auto IV, และล่าสุดใน&nbsp;Grand Theft Auto V ที่มีตัวละครเอกถึงสามคนอย่าง&nbsp;Michael De Santa, Franklin Clinton, และ Trevor Philips ซึ่งการที่มีตัวละครของเกมเป็นผู้ชายนั้น ก็ดูจะเข้ากับเนื้อหาของเกมที่มีเรื่องราวของการโจรกรรม และเต็มไปด้วยความรุนแรงและเพศสภาพเป็นอย่างดี</p>\r\n\r\n<p style=\"text-align:center\">ทว่า ผู้ปล่อยข่าวลือล่าสุดที่ใช้ชื่อว่า LongSensation ซึ่งเคยปล่อยข่าวลือเกี่ยวกับเกม Call of Duty ได้ถูกต้องมาแล้ว ก็ได้เผยแพร่โพสต์ใน Twitter สร้างความประหลาดใจว่า&nbsp;Grand Theft Auto 6 จะเป็นครั้งแรกในประวัติศาสตร์ของเกม ที่มีตัวละครเอกของเกมเป็น&nbsp;<strong>ผู้หญิง</strong></p>\r\n\r\n<p style=\"text-align:center\">ตัวละครหญิงใน GTA นั้นไม่ใช่ว่าจะไม่มีซะทีเดียว เพียงแต่ยังไม่ถึงกับมีใครที่มีบทบาทโดดเด่นถึงขั้นเป็นตัวเอกของเกมจริงๆ และทำให้ตัวเกมนั้นดูจะเข้ากับการดำเนินเรื่องด้วยตัวเอกชาย ในการทำกิจกรรมหรือการพบเจอเหตุการณ์ต่างๆ ในเกมมาตลอด จึงน่าสนใจว่าถ้าหาก GTA 6 จะดำเนินเรื่องด้วยตัวเอกหญิงจริงๆ จะเป็นอย่างไร แล้วเธอจะสามารถเล่นได้โดยเข้ากับสภาพแวดล้อมของเกม หรือสามารถเทียบเคียงกับตัวเอกชายคนอื่นๆ ที่ผ่านมาทั้งหมดได้รึเปล่า&nbsp;ซึ่งไม่แน่ว่าในเกมภาคใหม่นั้นอาจจะสามารถเลือกเพศของตัวละครได้ หรืออาจจะมีตัวเอกหลายคนในการดำเนินเรื่องแบบ GTAV ก็เป็นได้</p>\r\n\r\n<p style=\"text-align:center\">ปัจจุบัน&nbsp;<strong>Grand Theft Auto V</strong>&nbsp;ได้วางจำหน่ายบนเครื่อง PlayStation 3, PlayStation 4, Xbox 360, Xbox One และ PC มานานถึง 7-8 ปีแล้ว และกำลังจะวางจำหน่ายบนเครื่องเกมคอนโซลรุ่นใหม่อย่าง PlayStation 5 และ Xbox Series X อีกครั้งภายในปี 2021 นี้ด้วย ซึ่งเรียกได้ว่าตอนนี้ก็ยังเป็นเกมที่ได้รับความนิยม และสามารถทำยอดขายได้อยู่เรื่อยๆ จึงคาดว่าเราอาจจะยังไม่ได้เห็นเกมภาคใหม่กันไปอีกสักพักหนึ่ง เพราะตอนนี้ทาง Rockstar&nbsp;<a href=\"http://game.sanook.com/flashgame\" target=\"_blank\" title=\"Game\">Game</a>s คงไม่ต้องรีบร้อนทำเกม Open World ที่ไม่สมบูรณ์ออกมาขาย และไปเน้นที่คุณภาพของเกมให้มากที่สุดดีกว่า อย่างไรแฟนเกมทุกคนก็รอคอยกันได้อยู่แล้ว</p>\r\n', 'เกมส์', '1610603289.jpg', '2021-01-14'),
(53, '(18+) งานดี! Honey Select 2 ประกาศเตรียมลง Steam', '<p style=\"text-align:center\">Illusion หรือค่าย<a href=\"http://game.sanook.com/flashgame\" target=\"_blank\" title=\"เกม\">เกม</a>ลวงตาตามชื่อเรียกของคนไทย ประกาศเตรียมนำ<a href=\"http://game.sanook.com/flashgame\" target=\"_blank\" title=\"เกม\">เกม</a>สำหรับผู้ใหญ่&nbsp;<strong>Honey Select 2</strong>&nbsp;มาวางขายบน Steam ซึ่งการวางจำหน่ายในครั้งนี้ นอกจากจะทำให้ผู้เล่นได้ซื้อ<a href=\"http://game.sanook.com/flashgame\" target=\"_blank\" title=\"เกม\">เกม</a>ในราคาที่ถูกลงแล้ว ตัว<a href=\"http://game.sanook.com/flashgame\" target=\"_blank\" title=\"เกม\">เกม</a>ยังเป็นเวอร์ชั่นภาษาอังกฤษอีกด้วย</p>\r\n\r\n<p style=\"text-align:center\">ตัวเกม Honey Select 2 เป็นเกมภาคต่อจากภาคแรก ที่ผู้เล่นจะสามารถเข้าไปร่วมสัมพันธ์กับสาวๆ ในสนามบันเทิงได้ โดยตัวเกมภาคสองจะเป็นการอัพเกรดภาพจากเกมภาคแรกแต่วิธีการเล่นนั้นยังเหมือนเดิม และยังคงจุดเด่นที่สามารถสร้างตัวละครแบบไหนก็ได้ ตัวเกมยังมาพร้อมกับ Studio NEO หรือโปรแกรมที่ผู้เล่นสามารถเอาตัวละครมาสร้างทำภาพนิ่งหรือคลิปได้ด้วยตนเอง</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s.isanook.com/ga/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2dhLzAvdWQvMjE3LzEwODgxMDUvaG9uZXlzZWxlY3QoMykucG5n.png\" style=\"height:400px; width:728px\" /></p>\r\n\r\n<p style=\"text-align:center\">ทั้งนี้ ทาง Illusion ยังไม่ได้ประกาศว่าตัวเกมที่จะเอามาวางจำหน่ายนั้นจะเป็นภาค Liido DX ซึ่งเป็นภาคอัพเกรดจากภาคหลัก รวมไปถึงจะนำ DLC มาวางขายด้วยหรือไม่ แต่ตามหลัก สามารถซื้อ DLC จากเว็บญี่ปุ่นก็เอามาใช้ได้เลย</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s.isanook.com/ga/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2dhLzAvdWQvMjE3LzEwODgxMDUvaG9uZXlzZWxlY3QoNykucG5n.png\" style=\"height:397px; width:728px\" /></p>\r\n\r\n<p style=\"text-align:center\">ปัจจุบัน เกมสำหรับผู้ใหญ่ของ Illusion ที่วางจำหน่ายบน Steam นั้นมี 3 เกม ได้แก่ AI＊Shoujo/AI＊, VR Kanojo และ Koikatsu Party ซึ่งทันทีที่เกมวางจำหน่าย ผู้เล่นชาวไทยจจะซื้อเกมนี้ได้ถูกกว่าเดิมครึ่งนึงเลยทีเดียว</p>\r\n', 'เกมส์', '1610603351.jpg', '2021-01-14'),
(54, 'เปิดตัวการ์ดจอ GeForce RTX 3060 รุ่น RAM 12GB พร้อมขาย ก.พ. นี้', '<p style=\"text-align:center\">ก่อนหน้านี้ทาง Nvidia ได้มีการเปิดตัว GeForce RTX 3060 รุ่น Ti ล่าสุด ภายในงาน&nbsp;<strong>CES2021</strong>&nbsp;ก็ได้มีการเปิดตัวการ์ดจอ&nbsp;<strong>GeForce RTX 3060</strong>&nbsp;รุ่นแรม 12GB ออกมา โดยเป็นรุ่นเวอร์ชั่นสำหรับเดสก์ท็อปนั่นเอง</p>\r\n\r\n<p style=\"text-align:center\"><iframe height=\"393\" src=\"https://www.youtube.com/embed/B1Ix2LKDjYg\" width=\"700\"></iframe></p>\r\n\r\n<p style=\"text-align:center\">ตามรายงานนั้น GeForce RTX 3060 รุ่นแรม 12GB จะมี 13 TFLOPs single, 25 TFLOPs ใน Raytracing และดันได้ถึง 101 Tensor-FLOPS ใน AI-related operations.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s.isanook.com/ga/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2dhLzAvdWQvMjE3LzEwODgxMjEvZ2Vmb3JjZS1ydHgtMzA2MCgyKS5qcGc=.jpg\" style=\"height:326px; width:728px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s.isanook.com/ga/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2dhLzAvdWQvMjE3LzEwODgxMjEvZ2Vmb3JjZS1ydHgtMzA2MCg0KS5qcGc=.jpg\" style=\"height:217px; width:728px\" /></p>\r\n\r\n<p style=\"text-align:center\">ทาง Nvidia ได้ออกมาเปิดเผยว่า&nbsp; GeForce RTX 3060 รุ่นนี้จะทำงานได้ดีกว่า 2 เท่า และประสิทธิภาพ ray tracing เป็น 10 เท่า หากเทียบกับ GeForce GTX 1060 และด้วยแรม 12GB DDR6 จะทำให้การประมวลผลของ<a href=\"http://game.sanook.com/flashgame\" target=\"_blank\" title=\"เกม\">เกม</a>ขนาดใหญ่ทำออกมาได้ดีมาก</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s.isanook.com/ga/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2dhLzAvdWQvMjE3LzEwODgxMjEvZ2Vmb3JjZS1ydHgtMzA2MCgzKS5qcGc=.jpg\" style=\"height:364px; width:728px\" /></p>\r\n\r\n<p style=\"text-align:center\">GeForce RTX 3060 รุ่นแรม 12GB จะพร้อมขายในราคา 329 ดอลลาร์&nbsp;(ประมาณ 9,870 บาท) โดยจะเริ่มวางขายในเดือนกุมภาพันธ์นี้</p>\r\n', 'ไอที', '1610603474.jpg', '2021-01-14'),
(55, 'เตรียมตัวไว้! รายละเอียดการสั่งจองเครื่อง PlayStation 5 ในไทย 22 มกราคมนี้', '<p>นับถอยหลังอีกเพียงไม่ถึง 10 วัน! ชาว<a href=\"http://game.sanook.com/flashgame\" target=\"_blank\" title=\"เกม\">เกม</a>คอนโซลในประเทศไทยก็จะได้สัมผัสกับเครื่อง<a href=\"http://game.sanook.com/flashgame\" target=\"_blank\" title=\"เกม\">เกม</a>รุ่นใหม่ที่รอคอยมานานอย่าง&nbsp;<strong><a href=\"http://www.sanook.com/game/1088033/\" target=\"_blank\" title=\"PlayStation 5\">PlayStation 5</a></strong>&nbsp;กันแล้ว ซึ่งในตอนนี้ได้มีการประกาศออกมาอย่างเป็นทางการแล้วว่าทาง&nbsp;<strong>Sony Store Thailand</strong>&nbsp;จะทำการเปิดให้สั่งซื้อเครื่องล่วงหน้ากันได้วันที่ 22 มกราคมนี้ จากนั้นจึงจะทำการจัดส่งเครื่องให้กับผู้ที่สั่งซื้อไว้แล้วตั้งแต่วันที่ 5 กุมภาพันธ์ เป็นต้นไป ซึ่งรายละเอียดการสั่งซื้อเครื่อง&nbsp;PS5 Standard และ&nbsp;PS5 Digital Edition จะมีขั้นตอนและเงื่อนไขการสั่งซื้ออย่างไรบ้าง สามารถดูจากรายละเอียดที่ทาง Sony Thailand ได้ชี้แจงให้ทราบกันได้เลย</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s.isanook.com/ga/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2dhLzAvdWQvMjE3LzEwODgxNjEvcHM1X3RoYWlsYW5kX3ByZW9kZXJfMS5qcGc=.jpg\" style=\"height:410px; width:728px\" /></p>\r\n\r\n<p><strong>รายละเอียดการจองสั่งซื้อล่วงหน้า PS5 (Pre-Order)</strong></p>\r\n\r\n<p>ผ่านทางช่องทางออนไลน์ Sony Store Online&nbsp;<a href=\"https://store.sony.co.th/collections/playstation-5?fbclid=IwAR1O7AAqlxTmcarMtA0n_OWY9Zv9U5FxU9rmR4k9KI1BZQH-kg9KuKwj5NY\" rel=\"nofollow noopener\" tabindex=\"0\" target=\"_blank\">https://store.sony.co.th/collections/playstation-5</a></p>\r\n\r\n<p>*ทางบริษัทขอสงวนสิทธิ์ในการรับจองคิวก่อน</p>\r\n\r\n<p>ทางบริษัท โซนี่ ไทย จะเปิดให้จองสั่งซื้อล่วงหน้าในวันศุกร์ที่ 22 มกราคม พ.ศ. 2564 เวลา 11:00 น. เป็นต้นไป</p>\r\n\r\n<p>ณ ช่องทางออนไลน์ โดยสินค้าที่เปิดจองสั่งซื้อล่วงหน้าได้มีตามรายการต่อไปนี้</p>\r\n\r\n<ol>\r\n	<li>คอนโซล&nbsp;<strong>PlayStation 5</strong>&nbsp;รุ่นมีช่องอ่านแผ่น Ultra HD Blu-ray ราคาวางจำหน่าย 16,990 บาท</li>\r\n	<li>คอนโซล&nbsp;<strong>PlayStation 5 Digital Edition</strong>&nbsp;ราคาวางจำหน่าย 13,990 บาท</li>\r\n	<li>คอนโทรลเลอร์ไร้สาย DualSense (เฉพาะตัวคอนโทรลเลอร์) ราคาวางจำหน่าย 2,390 บาท</li>\r\n	<li>ชุดหูฟังไร้สาย PULSE 3D ราคาวางจำหน่าย 3,490 บาท</li>\r\n	<li>กล้อง HD ราคาวางจำหน่าย 2,090 บาท</li>\r\n	<li>รีโมตสื่อ ควบคุมการเล่นภาพยนตร์ และบริการสตรีมมิ่งต่างๆ ราคาวางจำหน่าย 1,090 บาท</li>\r\n	<li>แท่นชาร์จ DualSense ราคาวางจำหน่าย 1,090 บาท</li>\r\n</ol>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s.isanook.com/ga/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2dhLzAvdWQvMjE3LzEwODgxNjEvcHM1X3RoYWlsYW5kX3ByZW9kZXJfMi5qcGc=.jpg\" style=\"height:410px; width:728px\" /></p>\r\n\r\n<p><strong>ขั้นตอนการสั่งซื้อล่วงหน้า (พรีออร์เดอร์)</strong>:</p>\r\n\r\n<ol>\r\n	<li>การซื้อสินค้าล่วงหน้า (พรีออร์เดอร์) เริ่มตั้งแต่วันที่ 22 มกราคม 2564 เวลา 11.00 น. (เวลาประเทศไทย) เป็นต้นไป และบริษัทฯ จะ<strong>เริ่มจัดส่งสินค้าให้ลูกค้าในวันที่ 5 กุมภาพันธ์ 2564 เป็นต้นไป</strong></li>\r\n	<li>ลูกค้าสามารถซื้อสินค้าได้จากเว็บไซต์ Sony Store Online&nbsp;<a href=\"https://store.sony.co.th/?fbclid=IwAR10mnrmp03i6_D917g785mSfNcaoLDijjn2v3eJjGoXeKRuuxgZ-F0RvjM\" rel=\"nofollow noopener\" tabindex=\"0\" target=\"_blank\">https://store.sony.co.th/</a>&nbsp;โดยจะต้องลงทะเบียนก่อนสั่งซื้อ และต้องชำระเงินเต็มจำนวน ณ เวลาที่ซื้อ ทั้งนี้ บริษัทฯ จะขายสินค้าให้ตามลำดับการได้รับชำระเงิน โดยธุรกรรมการซื้อขายจะสมบูรณ์ต่อเมื่อลูกค้าได้รับคำตอบรับการสั่งซื้อและการยืนยันการรับชำระเงินจากบริษัทฯ แล้วเท่านั้น</li>\r\n	<li>ลูกค้าแต่ละท่าน<strong>สามารถซื้อ PlayStation 5 หรือ PlayStation 5 Digital Edition ได้เพียงคนละหนึ่งอย่าง และจำนวนคนละหนึ่งเครื่องเท่านั้น</strong>&nbsp;ลูกค้าไม่สามารถซื้อ PlayStation 5 และ PlayStation 5 Digital Edition ไปพร้อมกันได้ แต่ลูกค้าสามารถซื้ออุปกรณ์เสริม ได้แก่ คอนโทรลเลอร์ หูฟัง กล้อง รีโมต และแท่นชาร์จได้โดยไม่จำกัดจำนวน</li>\r\n	<li>สามารถดูรายละเอียดเกี่ยวกับวิธีการสั่งซื้อ การชำระเงิน และการจัดส่งสินค้าผ่านโซนี่ สโตร์ ออนไลน์ ได้ที่เว็บไซต์&nbsp;<a href=\"https://store.sony.co.th/pages/online-shopping-faq?fbclid=IwAR2DvC4YzqK-BhoSYv6RmykheFgI1xqCrUIEqfJT2T_mu2begDlq9FWkhfg\" rel=\"nofollow noopener\" tabindex=\"0\" target=\"_blank\">https://store.sony.co.th/pages/online-shopping-faq</a></li>\r\n</ol>\r\n', 'ไอที', '1610603579.jpg', '2021-01-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
