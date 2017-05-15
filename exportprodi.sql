/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.21-MariaDB : Database - sbmptn
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sbmptn` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sbmptn`;

/*Table structure for table `peserta` */

DROP TABLE IF EXISTS `peserta`;

CREATE TABLE `peserta` (
  `peserta_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `peserta_foto_path` varchar(400) NOT NULL,
  `peserta_nama_asli` varchar(200) NOT NULL,
  `peserta_nama_lju` varchar(50) NOT NULL,
  `peserta_nisn` char(10) NOT NULL,
  `peserta_alamat_tetap` varchar(200) DEFAULT NULL,
  `peserta_provinsi` varchar(100) DEFAULT NULL,
  `peserta_kota` varchar(100) DEFAULT NULL,
  `peserta_kode_pos` varchar(10) DEFAULT NULL,
  `peserta_telepon` varchar(12) DEFAULT NULL,
  `peserta_email` varchar(50) NOT NULL,
  `peserta_provinsi_lahir` varchar(100) DEFAULT NULL,
  `peserta_kota_lahir` varchar(100) DEFAULT NULL,
  `peserta_tanggal_lahir` date NOT NULL,
  `peserta_jenis_kelamin` varchar(6) NOT NULL,
  `peserta_agama` varchar(10) DEFAULT NULL,
  `peserta_kewarganegaraan` varchar(20) NOT NULL,
  `peserta_nama_ayah` varchar(200) DEFAULT NULL,
  `peserta_nama_ibu` varchar(200) DEFAULT NULL,
  `peserta_prodi1` varchar(100) NOT NULL,
  `peserta_univ1` varchar(100) NOT NULL,
  `peserta_prodi2` varchar(100) DEFAULT NULL,
  `peserta_univ2` varchar(100) DEFAULT NULL,
  `peserta_prodi3` varchar(100) DEFAULT NULL,
  `peserta_univ3` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`peserta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `peserta` */

insert  into `peserta`(`peserta_id`,`peserta_foto_path`,`peserta_nama_asli`,`peserta_nama_lju`,`peserta_nisn`,`peserta_alamat_tetap`,`peserta_provinsi`,`peserta_kota`,`peserta_kode_pos`,`peserta_telepon`,`peserta_email`,`peserta_provinsi_lahir`,`peserta_kota_lahir`,`peserta_tanggal_lahir`,`peserta_jenis_kelamin`,`peserta_agama`,`peserta_kewarganegaraan`,`peserta_nama_ayah`,`peserta_nama_ibu`,`peserta_prodi1`,`peserta_univ1`,`peserta_prodi2`,`peserta_univ2`,`peserta_prodi3`,`peserta_univ3`) values 
(1,'uploads/','hw','hw','5115','sby','jatim','sby','60111','0853','hendry@gmail.com','jatim','ponorogo','1996-10-24','male','Katolik','indo','ayah','ibu','TC','ITS','TC','ITS','TC','ITS'),
(2,'1494835919wt.jpg','111','1','1','1','1','1','1','1','hendrywiranto24@gmail.com','1','1','0001-01-01','male','Katolik','1','1','1','Teknik Fisika','Institut Pertanian Bogor','Teknik Kelautan','Institut Pertanian Bogor','Teknik Fisika','Universitas Indonesia'),
(3,'uploads/1494836005pome_then_now.png','3','3','3','3','3','3','3','3','hendry15@mhs.if.its.ac.id','3','3','0003-03-03','male','Katolik','3','3','3','Teknik Informatika','Institut Pertanian Bogor','Teknik Industri','Institut Teknologi Sepuluh Nopember Surabaya','Teknik Kelautan','Institut Pertanian Bogor');

/* Procedure structure for procedure `sp_daftar` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_daftar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_daftar`(
	p_foto_path varchar(400),
	p_nama_asli varchar(200),
	p_nama_lju varchar(50),
	p_nisn char(10),
	p_alamat_tetap varchar(200),
	p_provinsi varchar(100),
	p_kota varchar(100),
	p_kode_pos varchar(10),
	p_telepon varchar(12),
	p_email varchar(50),
	p_provinsi_lahir varchar(100),
	p_kota_lahir varchar(100),
	p_tanggal_lahir date,
	p_jenis_kelamin varchar(16),
	p_agama varchar(10),
	p_kewarganegaraan varchar(20),
	p_nama_ayah varchar(200),
	p_nama_ibu varchar(200),
	p_prodi1 varchar(100),
	p_univ1 varchar(100),
	p_prodi2 varchar(100),
	p_univ2 varchar(100),
	p_prodi3 varchar(100),
	p_univ3 varchar(100)
    )
BEGIN
	IF NOT EXISTS(SELECT 1 FROM peserta WHERE p_email = peserta_email) THEN
		INSERT INTO peserta (
			`peserta_foto_path`,
			`peserta_nama_asli`,
			`peserta_nama_lju`,
			`peserta_nisn`,
			`peserta_alamat_tetap`,
			`peserta_provinsi`,
			`peserta_kota`,
			`peserta_kode_pos`,
			`peserta_telepon`,
			`peserta_email`,
			`peserta_provinsi_lahir`,
			`peserta_kota_lahir`,
			`peserta_tanggal_lahir`,
			`peserta_jenis_kelamin`,
			`peserta_agama`,
			`peserta_kewarganegaraan`,
			`peserta_nama_ayah`,
			`peserta_nama_ibu`,
			`peserta_prodi1`,
			`peserta_univ1`,
			`peserta_prodi2`,
			`peserta_univ2`,
			`peserta_prodi3`,
			`peserta_univ3`
		)
		VALUES (
			p_foto_path,
			p_nama_asli,
			p_nama_lju,
			p_nisn,
			p_alamat_tetap ,
			p_provinsi,
			p_kota,
			p_kode_pos,
			p_telepon,
			p_email,
			p_provinsi_lahir,
			p_kota_lahir,
			p_tanggal_lahir,
			p_jenis_kelamin,
			p_agama,
			p_kewarganegaraan,
			p_nama_ayah,
			p_nama_ibu,
			p_prodi1,
			p_univ1,
			p_prodi2,
			p_univ2,
			p_prodi3,
			p_univ3
		);
		SELECT 0, 'Pendaftaran sukses !';
	ELSE
		SELECT -1, 'Pendaftaran gagal ! Email sudah dipakai';
	END IF;
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
