create database dbProdutos;

use dbProdutos;

CREATE TABLE `tbProdutos` (
  `codigo` int NOT NULL primary key auto_increment,
  `imagem` longblob NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `quantidade` int NOT NULL,
  `valor` real NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;