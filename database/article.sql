-- MySQL dump 10.13  Distrib 8.0.19, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: crud_ex
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.8-MariaDB-1:10.4.8+maria~bionic

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_FK` (`category_id`),
  KEY `users_FK` (`user_id`),
  CONSTRAINT `categories_FK` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  CONSTRAINT `users_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'A-droid-implementasi-penggunaan-A-rest-sebagai-layanan-sisi-server','A-droid implementasi penggunaan A-rest sebagai layanan sisi server','<p>Melanjutkan postingan sebelumnya sebut saja&nbsp;<a href=\"https://aasumitro.id/blog/rest-apis-dengan-slim-micro-framework\">a-rest&nbsp;</a>yang membahas meengenai REST API sederhana yang di kembangkan menggunakan Slim Microframework 3 dan libs pendukung lainnya tak lengkap memang jika hanya aplikasi dari sisi servernya atau bahasa kerennya Backend yang dipublish, tentu untuk memperlengkap dibutuhkan pengimplementasian pada sisi clientnya baik web app ataupun mobile app.</p>\r\n\r\n<p>untuk itu dikesempatan kali ini saya ingin membagi kode sumber aplikasi android sederhana yang mengimlementasikan a-rest sebagai layanan pertukaran data yang di tulis menggunakan bahasa pemrogramman Kotlin semoga bisa menjadi bahan pertimabangan pembelajaran untuk teman-teman,&nbsp; aplikasi android ini terdapat 2 versi yakni :</p>\r\n\r\n<p>- versi code buram :&nbsp;<a href=\"https://github.com/aasumitro/a-droid\">https://github.com/aasumitro/a-droid</a><br />\r\nuntuk versi kode buram merupakan kumpulan kode-kode awal pengembangan yang kemudian menjadi dasar pengembangan ke tahap selajutnya yakni versi clean code.</p>\r\n\r\n<p>- versi clean code :&nbsp;<a href=\"https://github.com/aasumitro/a-droid-cc\">https://github.com/aasumitro/a-droid-cc</a><br />\r\npada versi clean code ini kode dasar yang sebelumnya ditata kembali menjadi sebuah kesatuan sesuai dengan konsep Clean Code itu sendiri agar mudah dibaca, mudah dalam proses pemeliharaan, serta mudah dilakukan proses pengujian, versi clean code ini mengusung arsitektur komponen MVVM (Model View ViewModel) dan Reactive programming.</p>\r\n\r\n<p>next episode - setelah ke android mungkin selajutnya ke bagian webnya yang kemungkinan besar akan di tulis atau dibangun dengan bahasa pemrograman JavaScript (bahasa yang agak susah saya mengerti :v) atau mungkin kotlin(to JavaScript) #lol</p>\r\n\r\n<p>kode terkait - a-dash :&nbsp;<a href=\"https://github.com/aasumitro/a-dash\">https://github.com/aasumitro/a-dash</a>&nbsp;(CI)<br />\r\nversi dashboardnya si a-droid yang nantinya dilain kesempatan akan coba rubah dari framework PHP CodeIgniter ke salah satu Framework JS</p>\r\n',10,4,1584091221,1584099822),(2,'CodeIgniter-with-Nginx-on-Ubuntu-Server','CodeIgniter with Nginx on Ubuntu Server','<p>Sudah lama sekali saya tidak mendengar soal CodeIgniter, tapi masalah error&nbsp;<strong>404 Not Found</strong>&nbsp;yang&nbsp;<a href=\"https://servernesia.com/1493/instalasi-lemp-debian-8/#comment-7454\">dilaporkan</a>&nbsp;mas Ryuuu membuat saya agak nostalgia. Haha.&nbsp;&nbsp;Saat membaca pertanyaannya saya cuma terpikir, ini pasti ada urusannya dengan rewrite rule Nginx karena urlnya tidak ditemukan.</p>\r\n\r\n<p>Setahu saya kita perlu menambahkan kode ini pada konfigurasi&nbsp;<a href=\"https://servernesia.com/1499/lokasi-virtual-host-nginx/\">virtual host Nginx</a>:</p>\r\n\r\n<pre>\r\n<code>location / {\r\n                try_files $uri $uri/ /index.php;\r\n        }</code></pre>\r\n\r\n<p>Pastikan dalam konfigurasi CI-nya juga sudah sesuai:</p>\r\n\r\n<pre>\r\n<code>nano /system/application/config/config.php</code></pre>\r\n\r\n<p>Adaptasikan saja:</p>\r\n\r\n<pre>\r\n<code>$config[&#39;base_url&#39;] = &quot;http://nama_domain.com/&quot;;\r\n$config[&#39;index_page&#39;]       = &quot;&quot;;\r\n$config[&#39;uri_protocol&#39;]     = &quot;REQUEST_URI&quot;;</code></pre>\r\n\r\n<p>Setelah itu restart Nginx.</p>\r\n',10,3,1584091221,1584099974);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (3,'Web Application','Web Application Development Category'),(4,'Mobile Application','Mobile Application Development Category');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-13 20:06:56
