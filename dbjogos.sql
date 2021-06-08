create database dbjogos;

use dbjogos;

CREATE TABLE `tbjogos` (
  `codJogo` int NOT NULL primary key auto_increment,
  `imagem` longblob NOT NULL,
  `nomeJogo` varchar(200) NOT NULL,
  `generoJogo` varchar(100) NOT NULL,
  `dataLanc` datetime NOT NULL,
  `precoJogo` real NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

