-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2017 at 09:32 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartoes`
--

CREATE TABLE `cartoes` (
  `id` int(11) NOT NULL,
  `titular` varchar(255) NOT NULL,
  `tipo_cartao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `endereco` varchar(255) NOT NULL,
  `data_nasc` varchar(255) DEFAULT NULL,
  `uf` text NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `bairro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `telefone`, `cnpj`, `email`, `endereco`, `data_nasc`, `uf`, `cidade`, `cep`, `bairro`) VALUES
(1, 'Wellissondoks', '4736428748', '10148323901', 'welleh10@gmail.com', 'Condominio Jardim America, 205', '18/01/1996', 'SC', 'Mafra', '89300-000', 'Jardim America'),
(2, 'Joao', '4736422348', '12345678901', 'joao@gmail.com', 'Saturnino Olinto, 205', '01/01/2001', 'PR', 'RIo Negro', '83880-000', 'Centro'),
(5, 'Amanda B.', '4797875478', '12332112301', 'amanda@hotmail.com', 'Rua Antonio Nunes, 205', '27/09/1997', 'SC', 'Mafra', '89300-000', 'Jardim America'),
(8, 'Joaozinho ', '4736422348', '12345678901', 'joao@gmail.com', 'Saturnino Olinto, 205', '01/01/2001', 'PR', 'RIo Negro', '83880-000', 'Centro'),
(9, 'Joaozao', '4736422348', '12345678901', 'joao@gmail.com', 'Saturnino Olinto, 205', '01/01/2001', 'PR', 'RIo Negro', '83880-000', 'Centro'),
(10, 'Joao', '4736422348', '12345678901', 'joao@gmail.com', 'Saturnino Olinto, 205', '01/01/2001', 'PR', 'RIo Negro', '83880-000', 'Centro'),
(11, 'zsfasd', '4736428748', '10148323901', 'welleh10@gmail.com', 'Condominio Jardim America, 205', '18/01/1996', 'SC', 'Mafra', '89300-000', 'Jardim America');

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_promocao` int(11) NOT NULL,
  `id_cartao` int(11) NOT NULL,
  `subtotal` decimal(11,3) NOT NULL,
  `data_hora` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pedidosItens`
--

CREATE TABLE `pedidosItens` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `valor_unitario` decimal(11,2) NOT NULL,
  `quantidade` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `valor_venda` decimal(11,2) NOT NULL,
  `observacoes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `descricao`, `valor_venda`, `observacoes`) VALUES
(2, 'Teclado USBZAO', '35.00', 'Teclado teste'),
(3, 'Notebook222', '62.50', 'observacoes'),
(5, 'Teste insercao', '25.60', 'OKOKOK'),
(6, 'OK', '50.00', 'asdfsdf'),
(7, 'ok', '233.00', 'asdf'),
(8, '123', '123.00', '123'),
(9, 'HOJE', '50.00', '220'),
(10, 'Copo de agua', '50.00', 'asdfsdf'),
(11, 'um', '20.00', 'dois'),
(12, '234', '2344.00', 'asdf'),
(13, 'oI', '50.00', '500');

-- --------------------------------------------------------

--
-- Table structure for table `promocoes`
--

CREATE TABLE `promocoes` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `desconto` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartoes`
--
ALTER TABLE `cartoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidosItens`
--
ALTER TABLE `pedidosItens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocoes`
--
ALTER TABLE `promocoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartoes`
--
ALTER TABLE `cartoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pedidosItens`
--
ALTER TABLE `pedidosItens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `promocoes`
--
ALTER TABLE `promocoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `id_cartao_fk` FOREIGN KEY (`id`) REFERENCES `cartoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_cliente_fk` FOREIGN KEY (`id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_promocao_fk` FOREIGN KEY (`id`) REFERENCES `promocoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `promocoes`
--
ALTER TABLE `promocoes`
  ADD CONSTRAINT `id_produto_fk` FOREIGN KEY (`id`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
