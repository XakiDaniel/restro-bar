CREATE DATABASE restaurante;

CREATE TABLE `pratos` (
  `codigo` varchar(30) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `calorias` int(11) DEFAULT NULL,
  `destaque` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;