-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 16-Nov-2020 às 00:35
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id14991490_tcc`
--
CREATE DATABASE IF NOT EXISTS `id14991490_tcc` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id14991490_tcc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cart`
--

CREATE TABLE `cart` (
  `cd_cart` int(11) NOT NULL,
  `prod` int(11) NOT NULL,
  `cart_user` int(255) NOT NULL,
  `qnt_cart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cart`
--

INSERT INTO `cart` (`cd_cart`, `prod`, `cart_user`, `qnt_cart`) VALUES
(1, 28, 49, 2),
(57, 30, 13, 2),
(59, 1, 43, 6),
(62, 2, 43, 2),
(64, 3, 43, 17),
(87, 2, 49, 2),
(90, 1, 13, 2),
(94, 2, 44, 1),
(95, 1, 44, 3),
(98, 3, 52, 1),
(99, 4, 43, 8),
(100, 7, 52, 3),
(101, 2, 13, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comment`
--

CREATE TABLE `comment` (
  `cd_com` int(11) NOT NULL,
  `desc_com` varchar(2555) NOT NULL,
  `id_user` int(11) NOT NULL,
  `avaliacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comment`
--

INSERT INTO `comment` (`cd_com`, `desc_com`, `id_user`, `avaliacao`) VALUES
(1, 'Produto legal', 1, 20),
(2, 'Muito legal', 1, 40);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comprados`
--

CREATE TABLE `comprados` (
  `cd_compra` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `comment` varchar(2555) NOT NULL,
  `id_prod_com` int(11) NOT NULL,
  `qnt_compra_com` int(11) NOT NULL,
  `endereço` varchar(255) NOT NULL,
  `endereco_num` int(11) NOT NULL,
  `cod_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comprados`
--

INSERT INTO `comprados` (`cd_compra`, `nome`, `telefone`, `comment`, `id_prod_com`, `qnt_compra_com`, `endereço`, `endereco_num`, `cod_compra`) VALUES
(1, 'Jucelino', '99999', 'Tira o picles', 1, 2, 'Rua Sua Mãe', 123, 1),
(2, 'Jucelina', '99999', 'Coloca mais picles', 28, 1, 'Rua Seu Pai', 123, 0),
(3, 'asas', 'asdas', 'sbnkjbscdfhjbashkdbiabs', 19, 2, '1', 0, 0),
(4, 'Adega', '22334457', 'Tira o marcador de página, pfv.', 15, 3, 'Cuba', 427, 0),
(5, 'Jucelino', '99999', 'Tira o picles', 5, 10, 'Rua Sua Mãe', 123, 1),
(6, 'Jucelino', '99999', 'Tira o picles', 12, 2, 'Rua Sua Mãe', 123, 1),
(7, 'Jucelino', '99999', 'Tira o picles', 3, 2, 'Rua Sua Mãe', 123, 1),
(8, 'Jucelino', '99999', 'Tira o picles', 9, 2, 'Rua Sua Mãe', 123, 1),
(9, 'Jucelino', '99999', 'Tira o picles', 10, 2, 'Rua Sua Mãe', 123, 1),
(10, 'Jucelino', '99999', 'Tira o picles', 16, 2, 'Rua Sua Mãe', 123, 1),
(11, 'Jucelino', '99999', 'Tira o picles', 20, 2, 'Rua Sua Mãe', 123, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact`
--

CREATE TABLE `contact` (
  `msg_id` int(255) NOT NULL,
  `user_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `msg_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `email`
--

CREATE TABLE `email` (
  `cd_mail` int(11) NOT NULL,
  `nm_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `email`
--

INSERT INTO `email` (`cd_mail`, `nm_mail`, `email`, `telefone`, `mensagem`) VALUES
(5, 'Luiz Henrique Santos', 'Medeiros.luizhenrique@yahoo.co', '13981343264', 'asssssssssssss'),
(6, 'Luiz Henrique Santos', 'Medeiros.luizhenrique@yahoo.co', '13981343264', 'asssssssssssss');

-- --------------------------------------------------------

--
-- Estrutura da tabela `shopin`
--

CREATE TABLE `shopin` (
  `cd_shop` int(11) NOT NULL,
  `nm_shop` varchar(255) NOT NULL,
  `vl_shop` varchar(255) NOT NULL,
  `desc_shop` varchar(2555) NOT NULL,
  `img_shop` varchar(255) NOT NULL,
  `id_stt` int(11) NOT NULL,
  `qnt_comprada` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `shopin`
--

INSERT INTO `shopin` (`cd_shop`, `nm_shop`, `vl_shop`, `desc_shop`, `img_shop`, `id_stt`, `qnt_comprada`) VALUES
(1, 'Heineken', '12.50', '330ml. Teor alcoólico: 5%', 'https://www.confianca.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/8/7/875759_1.jpg', 1, 0),
(2, 'Eisenbahn', '11.40', '355ml. Teor alcoólico: 8%', 'https://images.rappi.com.br/products/2094185163-1580168345838.png?d=500x500', 1, 0),
(3, 'Budweiser', '10.60', '330ml. Teor alcoólico: 5%', 'https://images.rappi.com.br/products/2093087945-1587770642544.png?d=500x500&e=webp', 1, 0),
(4, 'Original', '16.70', '600ml. Teor alcoólico: 5%', 'https://cdn.shopify.com/s/files/1/0010/3150/3987/products/Cerveja_Original_600_ml_Garrafa_2x_047fffe6-5836-459a-a4bd-538e163b7ed8_large.png?v=1598544363?nocache=0.5943970666266978', 1, 1),
(5, 'Johnnie Walker Black Label', '145,00', '1L. Teor alcoólico: 40%', 'https://www.emporioaugusta.com.br/loja/image/cache/catalog/data/Whisky/blacklabel-1024x1024.png', 1, 0),
(6, 'Johnnie Walker Red Label', '112,50', '1L. Teor alcoólico: 40%', 'https://superprix.vteximg.com.br/arquivos/ids/168231-600-600/Whisky-Johnnie-Walker-Red-Label-1l.jpg?v=636093990471100000', 1, 0),
(7, 'Jack Daniels', '160,00', '1L. Teor alcoólico: 40%', 'https://emporiofreicaneca.com.br/wp-content/uploads/2018/11/jack-daniels.png', 1, 0),
(8, 'Jameson', '157,00', '1L. Teor alcoólico: 40%', 'https://cdn.shopify.com/s/files/1/0343/7389/products/Ecommerce-Fortis-Original-Packshot_2048x.png?v=1553548858', 1, 0),
(9, 'Jim Beam', '122,59', '1L. Teor alcoólico: 40%', 'https://emporiofreicaneca.com.br/wp-content/uploads/2020/05/Whiskey-Jim-Beam-White-Bourbon-1L.png', 1, 0),
(10, 'Amarula', '115,90', '750ml. Teor alcoólico: 17%', 'https://cdn.shopify.com/s/files/1/2141/9909/products/AmarulaCream750ml_1024x.png?v=1592832378', 1, 0),
(11, 'Jägermeister', '95,40', '700ml. Teor alcoólico: 35%', 'https://media.danmurphys.com.au/dmo/product/844-1.png', 1, 0),
(12, 'Cointreau', '119,93', '700ml. Teor alcoólico: 40%', 'https://www.paodeacucar.com/img/uploads/1/153/571153.png', 1, 0),
(13, 'Ypióca', '19,90', '965ml. Teor alcoólico: 38%', 'https://emporiofreicaneca.com.br/wp-content/uploads/2020/09/Cachaca-Ypioca-Ouro-Sem-Palha-965ml.png', 1, 0),
(14, 'José Cuervo Ouro', '103,60', '750ml. Teor Alcoólico: 40%', 'https://manosdoces.vteximg.com.br/arquivos/ids/526450_2', 1, 0),
(15, 'Absolut Vodka', '82,90', '1L. Teor Alcoólico: 40%', 'https://static.wixstatic.com/media/3b8732_d34bee1688de4cc4afd6a9b48c988de0~mv2.png/v1/fill/w_950,h_950,al_c/3b8732_d34bee1688de4cc4afd6a9b48c988de0~mv2.png', 1, 0),
(16, 'Smirnoff', '40,99', '998ml. Teor Alcoólico: 37,5%', 'https://static.clubeextra.com.br/img/uploads/1/309/590309.png?imtype=imgProductDetail&size=sm', 1, 0),
(17, 'Água Mineral', '2,50', '500ml. Teor Alcoólica: ', 'https://trimais.vteximg.com.br/arquivos/ids/983571-195-195/foto_original.jpg?v=637175540277100000imtype=imgProductDetail&size=sm', 1, 0),
(18, 'Água com Gás', '2.90', '500ml', 'https://static.carrefour.com.br/medias/sys_master/images/images/hc6/h28/h00/h00/13985117241374.jpg', 1, 0),
(19, 'Coca Cola', '5.60', '350ml', 'https://trimais.vteximg.com.br/arquivos/ids/970793-410-410/foto_original.jpg?v=637135150340070000', 1, 0),
(20, 'Coca Cola Zero', '8.60', '350ml', 'https://www.saiderabrasil.com.br/images/produtos/produto-20190408132126.png', 1, 0),
(21, 'Guaraná Antárctica', '5.00', '350ml', 'https://cdn.shopify.com/s/files/1/0010/3150/3987/products/guarananormal_350-450x450_large.png?v=1597686128?nocache=0.9941292644944042', 1, 0),
(22, 'H2OH!', '6.49', '500ml', 'https://emporiodacerveja.vtexassets.com/arquivos/ids/167393-800-auto?width=800&height=auto&aspect=true', 1, 0),
(23, 'Schweppes Citrus', '5.89', '350ml', 'https://trimais.vteximg.com.br/arquivos/ids/996435-1000-1000/foto_original.jpg?v=637310325771970000', 1, 0),
(24, 'Schweppes Tônica', '5.85', '350ml', 'https://distribuidorahideal.com.br/457/refri-schweppes-tonica-350ml-c-06.jpg', 1, 0),
(25, 'Red Bull', '8.49', '250ml', 'https://superprix.vteximg.com.br/arquivos/ids/175259-600-600/Bebida-Energetica-Red-Bull-250ml.png?v=636299404178930000', 1, 0),
(26, 'Porção Batata Frita', '12.50', '600g', 'https://parentelanches.com.br/wp-content/uploads/2019/02/porc%CC%A7a%CC%83o-batata-frita-png.png', 2, 0),
(27, 'Meia Porção Batata Frita', '10.50', '300g', 'https://www.nicepng.com/png/full/315-3155740_batata-frita-poro-de-batata-frita-png.png', 2, 0),
(28, 'Porção Mini Pastel', '10.00', '12 unidades', 'https://shoppingcerrado.vteximg.com.br/arquivos/ids/158009-1000-1000/image-2f01532e5fe64a409e315dbeb8c9a4f7.jpg?v=637045757145670000', 2, 0),
(29, 'X Tudão do Barrica', '32.50', 'Pão, carne de boi 150g, queijo, bacon, presunto, omelete, cebola, linguiça defumada, catupiry, alface, tomate, milho, batata, molho barbecue.', 'https://images.rappi.com.br/products/2097201322-1582821928279.png?d=128x90', 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `stt`
--

CREATE TABLE `stt` (
  `cd_stt` int(255) NOT NULL,
  `nm_stt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `stt`
--

INSERT INTO `stt` (`cd_stt`, `nm_stt`) VALUES
(1, 'Bebida'),
(2, 'Comida');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `cd_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nm_user` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`cd_user`, `email`, `nm_user`, `senha`) VALUES
(1, 'blablabla@gmail.com', 'Bla', 'Blabla1'),
(3, 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '0cc175b9c0f1b6a831c399e269772661'),
(4, 'a@a', 'aa', 'aa'),
(6, '0ab51dba31f34dfef13fbb64af750eaf', '79af87723dc295f95bdb277a61189a2a', '79af87723dc295f95bdb277a61189a2a'),
(7, 'b51c01ae3849dba83efee52298cfe582', 'd9d7dbddc29177b121a6aa1bb09d15fd', 'd9d7dbddc29177b121a6aa1bb09d15fd'),
(8, '66f4dee099469e7d079f78b2fd818494', 'fe8432b9c18e6b9ce36aa1a222cab401', 'fe8432b9c18e6b9ce36aa1a222cab401'),
(9, '8555ad1cfb30c2d6182feccc9048304b', '47bce5c74f589f4867dbd57e9ca9f808', '47bce5c74f589f4867dbd57e9ca9f808'),
(13, 'Barrica123@gmail.com', 'Barrica123', 'd537e0a5a0bc07e8c2f0f0b0a178de0b'),
(43, 'Medeiros.luizhenrique@yahoo.com.br', 'Luiz Henrique Medeiros dos Santos', '0617e46a8c4fe3d5aa0b211de9a2357d'),
(44, 'kenzosuzuki0306@gmail.com', '鈴木', 'b9f53df120b80d59db999023f7fc4c3b'),
(48, 'a@aa', 'aaa', 'd41d8cd98f00b204e9800998ecf8427e'),
(49, 'negociocelso@gmail.com', 'Celso Negocio', '253a81d5cdfde8e06b8e9419acf95835'),
(50, 'penispenis@e', 'cc', 'd41d8cd98f00b204e9800998ecf8427e'),
(51, 'cesar.barrichello@hotmail.com', 'xdxd', 'd41d8cd98f00b204e9800998ecf8427e'),
(52, 'cesar.barrichello123@gmail.com', 'AguiaBranca Br', '93a0972c4cc0eec5966540be68cff40e'),
(53, 'celso@celso', 'ceruso', 'd41d8cd98f00b204e9800998ecf8427e'),
(54, 'aaaa@a', 'aaaa', 'd41d8cd98f00b204e9800998ecf8427e'),
(55, 'aaaaa@a', 'aaaa', 'd41d8cd98f00b204e9800998ecf8427e'),
(56, '4@4', '4', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cd_cart`);

--
-- Índices para tabela `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cd_com`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `comprados`
--
ALTER TABLE `comprados`
  ADD PRIMARY KEY (`cd_compra`);

--
-- Índices para tabela `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`msg_id`);

--
-- Índices para tabela `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`cd_mail`);

--
-- Índices para tabela `shopin`
--
ALTER TABLE `shopin`
  ADD PRIMARY KEY (`cd_shop`),
  ADD KEY `id_stt` (`id_stt`);

--
-- Índices para tabela `stt`
--
ALTER TABLE `stt`
  ADD PRIMARY KEY (`cd_stt`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cd_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cart`
--
ALTER TABLE `cart`
  MODIFY `cd_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de tabela `comment`
--
ALTER TABLE `comment`
  MODIFY `cd_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `comprados`
--
ALTER TABLE `comprados`
  MODIFY `cd_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `contact`
--
ALTER TABLE `contact`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `email`
--
ALTER TABLE `email`
  MODIFY `cd_mail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `shopin`
--
ALTER TABLE `shopin`
  MODIFY `cd_shop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `stt`
--
ALTER TABLE `stt`
  MODIFY `cd_stt` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `cd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`cd_user`);

--
-- Limitadores para a tabela `shopin`
--
ALTER TABLE `shopin`
  ADD CONSTRAINT `shopin_ibfk_1` FOREIGN KEY (`id_stt`) REFERENCES `stt` (`cd_stt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
