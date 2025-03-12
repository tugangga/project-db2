/*
SQLyog Ultimate v10.42 
MySQL - 8.0.30 : Database - toko-online
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`toko-online` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `toko-online`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `kode` char(8) NOT NULL,
  `barang` varchar(100) NOT NULL,
  `jenis` char(20) NOT NULL,
  `hbeli` int NOT NULL DEFAULT '0',
  `hjual` int NOT NULL DEFAULT '0',
  `qtyawal` int NOT NULL DEFAULT '0',
  `qtybeli` int NOT NULL DEFAULT '0',
  `qtyjual` int NOT NULL DEFAULT '0',
  `qtyakhir` int NOT NULL DEFAULT '0',
  `gambar` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `barang` */

insert  into `barang`(`kode`,`barang`,`jenis`,`hbeli`,`hjual`,`qtyawal`,`qtybeli`,`qtyjual`,`qtyakhir`,`gambar`) values ('1001','aaa','bbb',100,200,1,2,3,4,'4dfd208d05f1761d2547f2f2ec84d38667670a09.png'),('1003','Sabun','MCK',2000,3000,10,0,0,10,''),('1004','Pasta Gigi','MCK',10000,15000,10,0,0,10,'4dfd208d05f1761d2547f2f2ec84d38667670a09.png'),('1005','Shampoo','MCK',25000,35000,10,0,0,10,'4dfd208d05f1761d2547f2f2ec84d38667670a09.png'),('1006','Handuk','MCK',100000,150000,10,0,0,10,'4dfd208d05f1761d2547f2f2ec84d38667670a09.png'),('2002','asdas','asfa',1000,2000,2,3,5,4,'4dfd208d05f1761d2547f2f2ec84d38667670a09.png');

/*Table structure for table `keranjang` */

DROP TABLE IF EXISTS `keranjang`;

CREATE TABLE `keranjang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `kode` char(8) NOT NULL,
  `qty` int NOT NULL DEFAULT '1',
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `keranjang` */

insert  into `keranjang`(`id`,`username`,`kode`,`qty`,`tanggal`) values (1,'admin','1003',1,'2025-03-12 12:54:10'),(2,'admin','1001',1,'2025-03-12 12:54:13'),(3,'admin','1004',1,'2025-03-12 12:54:16'),(4,'admin','2002',1,'2025-03-12 12:55:02'),(5,'admin','1001',1,'2025-03-12 12:55:18'),(6,'admin','1001',1,'2025-03-12 12:55:20'),(7,'admin','2002',1,'2025-03-12 13:04:15');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
