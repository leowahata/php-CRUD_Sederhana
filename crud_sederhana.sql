/* Create Database and Table */
create database crud_sederhana;

use crud_sederhana;

CREATE TABLE `pengguna`(
  `id` int (11) NOT NULL auto_increment,
  `nama` varchar (100),
  `email` varchar (100),
  `telpon` varchar (15),
  PRIMARY KEY (`id`)
);
