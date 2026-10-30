CREATE DATABASE modul_6;
USE modul_6;

CREATE TABLE `pengguna` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(100),
  `password` VARCHAR(100),
  PRIMARY KEY (`id`)
);
