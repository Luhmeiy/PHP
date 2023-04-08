-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 20-Nov-2020 às 03:28
-- Versão do servidor: 10.4.11-MariaDB
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
-- Banco de dados: `id15248224_cyberpunk`
--
CREATE DATABASE IF NOT EXISTS `id15248224_cyberpunk` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id15248224_cyberpunk`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `abilities`
--

CREATE TABLE `abilities` (
  `cd_ab` int(11) NOT NULL,
  `nm_ab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_ab` varchar(999) COLLATE utf8_unicode_ci NOT NULL,
  `cat_ab` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `desc_ab` varchar(999) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `abilities`
--

INSERT INTO `abilities` (`cd_ab`, `nm_ab`, `img_ab`, `cat_ab`, `desc_ab`) VALUES
(1, 'Primeiros Socorros', 'https://i.pinimg.com/564x/de/41/6e/de416e1bcf847b6ac6bfe893a0f90e04.jpg', '1', 'Quando o usuário injeta o conteúdo de Primeiros Socorros em seu corpo, o conteúdo cura a maioria de seus ferimentos. Os Primeiros Socorros também podem ser usados pelo usuário em outros agentes para curá-los.'),
(2, 'Estação de Suporte', 'https://media.sketchfab.com/models/5667da354ff648c3ac29c75b168c133c/thumbnails/20265e422d164b2e83f349d8bc5299a3/dfd0623a36104fa5bb382ced74e386f8.jpeg', '1', 'A Estação de Suporte cura as pessoas em seu raio de ação.'),
(3, 'Sticky Bomb', 'https://pbs.twimg.com/media/D_nbqlRU8AERmAO?format=jpg&name=small', '2', 'A Sticky Bomb permite que o jogador dispare uma bomba com ponta adesiva que se fixa a qualquer superfície (incluindo inimigos). É detonada manualmente e causa dano explosivo em um raio.'),
(4, 'Torreta', 'https://i.pinimg.com/564x/be/e6/05/bee6058ad78ade9f3110a7d39c33d5d0.jpg', '2', 'A Torreta é uma arma automatizada em miniatura montada em um tripé que, após um pequeno espaço de tempo, abre rajadas de fogo balístico contra os alvos próximos. A Torreta pode ser lançada a distância, fornecendo uma vantagem tática ao jogador, ou implantada próxima ao jogador, fornecendo cobertura para inimigos que surgirem por trás ou pelos lados.'),
(5, 'Mina Perseguidora', 'https://i.pinimg.com/564x/14/89/2f/14892fd432187a102c7891480fc0aa4a.jpg', '2', 'Uma pequena mina arredondada que perseguira o alvo mais próximo da área em que cair. Uma vez próxima ao alvo, a mina irá detonar imediatamente.'),
(6, 'Escudo Balístico', 'https://i.pinimg.com/originals/4d/84/95/4d8495f336bc281e8d1ee3c61099ebea.jpg', '3', 'A habilidade tem foco na proteção do jogador, mas também permitindo que ele possa atirar seja pelo lado ou por cima do escudo. '),
(7, 'Escudo Portátil', 'https://steamuserimages-a.akamaihd.net/ugc/451859178965821744/E3E11659CDD3887A5AD71917F4415D5CBDF0265A/', '3', 'Escudo que é colocado no chão e que tem uma poderosa resistência. Consegue proteger até dois jogadores ao mesmo tempo.'),
(8, 'Firefly', 'https://d1fs8ljxwyzba6.cloudfront.net/assets/article/2019/03/12/the-division-2-firefly-skill-mods_feature.jpg', '4', 'Ao contrário de outras habilidades, os Fireflies não focam automaticamente nos alvos: o agente deve designar um alvo via retículo HUD antes de lançar. Uma vez que os alvos desejados são travados, o drone irá acelerar brevemente em um caminho reto, rastreando os inimigos e enviando as informações para o jogador. São difíceis de descobrir, mas inimigos mais atentos podem descobri-los e abate-los.'),
(9, 'Isca', 'https://i.pinimg.com/originals/ff/2b/51/ff2b51e1168cec3ecf84afc1753d5515.png', '4', 'Tem como função atrair a atenção de inimigos, ficando assim exposto para a mira do jogador, facilitando assim a sua missão. Inimigos utilizando modificadores de visão vão enxergar uma réplica do jogador onde a Isca for jogada.'),
(10, 'Armadilha (Atordoadora)', 'https://vignette.wikia.nocookie.net/thedivision/images/0/01/Jakub-mrowczynski-trap-skill-4-min.jpg/revision/latest?cb=20200527071604', '4', 'Uma vez lançado, ele se separa em várias pequenas armadilhas, criando algo semelhante a um campo minado, que choca e atordoa os inimigos, caso eles pisem ou se aproximem deles.'),
(11, 'Armadilha (Explosiva)', 'https://cdn.holdtoreset.com/wp-content/uploads/2020/09/21153815/Shrapnel-Trap-Skill-Variant-in-The-Division-2-scaled.jpg', '4', 'Uma vez lançada, divide-se em várias pequenas armadilhas, que explodem e causam grandes quantidades de dano aos inimigos, caso eles pisem neles.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enemy`
--

CREATE TABLE `enemy` (
  `cd_enemy` int(11) NOT NULL,
  `nm_enemy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_enemy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_enemy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `txt_enemy` varchar(999) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `enemy`
--

INSERT INTO `enemy` (`cd_enemy`, `nm_enemy`, `img_enemy`, `cat_enemy`, `txt_enemy`) VALUES
(1, 'BigBoy', 'https://i.pinimg.com/564x/83/60/d3/8360d31d5458544c543688f28395c71d.jpg', 'Tanque', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inv_gun`
--

CREATE TABLE `inv_gun` (
  `cd_inv_gun` int(11) NOT NULL,
  `id_gun` int(11) NOT NULL,
  `id_user_gun` int(11) NOT NULL,
  `active_gun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `inv_gun`
--

INSERT INTO `inv_gun` (`cd_inv_gun`, `id_gun`, `id_user_gun`, `active_gun`) VALUES
(1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `cd_gun` int(11) NOT NULL,
  `nm_gun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_gun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_gun` int(11) NOT NULL,
  `subcat_gun` int(11) NOT NULL,
  `min_dmg_gun` int(255) NOT NULL,
  `max_dmg_gun` int(255) NOT NULL,
  `range_gun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rare_gun` int(5) NOT NULL,
  `price` int(100) NOT NULL,
  `txt_gun` varchar(999) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`cd_gun`, `nm_gun`, `img_gun`, `cat_gun`, `subcat_gun`, `min_dmg_gun`, `max_dmg_gun`, `range_gun`, `rare_gun`, `price`, `txt_gun`) VALUES
(1, 'Metralhadora Leve', '', 2, 2, 0, 0, '0', 0, 100, 'A'),
(2, 'Pistola Elétrica', '', 3, 5, 0, 0, '0', 0, 0, 'A'),
(3, 'Pistola Mecânica', '', 3, 5, 0, 0, '0', 0, 0, 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `cd_role` int(11) NOT NULL,
  `nm_role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `txt_role` varchar(999) COLLATE utf8_unicode_ci NOT NULL,
  `id_cat` int(255) NOT NULL,
  `cat_role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`cd_role`, `nm_role`, `img_role`, `txt_role`, `id_cat`, `cat_role`) VALUES
(1, 'Metaleiro', 'https://www.r2pg.com.br/wp-content/uploads/silver-1024x576.jpg', 'Classe voltada para a agregação a curto prazo de massas.', 1, 'Utilidade'),
(2, 'Solos', 'https://i0.wp.com/rtalsoriangames.com/wp-content/uploads/2019/07/Solo.png?resize=700%2C476&ssl=1', 'Tipicamente desertores, carregam armamento pesado, sendo praticamente um exército de um homem só. São ciberneticamente melhorados.', 1, 'Tanque'),
(3, 'Netrunners', 'https://kanto.legiaodosherois.com.br/w760-h398-gnw-cfill-q80/wp-content/uploads/2017/08/legiao_dA639lYyNvKS4zpx0CBWJTULHeg1VMfPZkoru7mXGb.jpg.jpeg', 'Ao invés de viver no mundo real, passam a maior parte de seu tempo na NET. Conseguem manipular informações como ninguém. São especializados na quebra de segurança.', 1, 'Utilidade'),
(4, 'Influencer', 'https://www.r2pg.com.br/wp-content/uploads/media-2.jpg', 'Utiliza sua influência para atrair pessoas para o movimento anti-corporações. Tal ação demora muito para ser feita, porém a relação criada é mais estável.', 1, 'Utilidade'),
(5, 'Techies', 'https://www.r2pg.com.br/wp-content/uploads/cyberpunk_2077_screenshot_03_3840.0.jpg', 'Os techies normalmente têm as estatísticas mais altas do grupo e conseguem construir praticamente qualquer tipo de bugigangas tecnológicas. ', 1, 'Suporte'),
(6, 'Cães', 'https://www.r2pg.com.br/wp-content/uploads/Fixer-2.jpg', 'Tem contatos ilegais com o submundo. Conseguem praticamente tudo de tudo em pouquíssimo tempo. Adquirir informações é apenas uma de suas maiores habilidades. Lidar com clientes não passa de uma brincadeira.', 3, 'Utilidade/DPS'),
(7, 'Nômades', 'https://www.r2pg.com.br/wp-content/uploads/jpg-1.jpg', 'A moto e o rifle são seus principais companheiros (as vezes seus únicos). Vagueiam pela cidade, sempre fugindo do rastro da lei, na maior velocidade possível. ', 3, 'Suporte/DPS'),
(8, 'Lawmen', 'https://www.r2pg.com.br/wp-content/uploads/lawman-1.jpg', 'Os Lawmen são uma força tática, de armadura poderosa e armas pesadas, pronta para aniquilar qualquer que seja o problema. São muito bons com explosivos, mas péssimos quando o assunto é perseguição.', 2, 'Tanque'),
(9, 'Execs', 'https://www.r2pg.com.br/wp-content/uploads/execs-1.jpg', 'Assassinos carentes de piedade, são utilizados pelas corporações para missões onde o alvo deve ser assassinado sem causar reboliço. ', 2, 'DPS'),
(10, 'Runners', 'https://cdn.wccftech.com/wp-content/uploads/2018/06/Cyberpunk-2077_2018_06-12-18_017.jpg', 'Diferente dos Lawmen, os Runners são uma força tática leve, feita para perseguições. Utilizam armaduras feitas de metal que os permitem voar. Carregam, em geral, metralhadoras leves. Os líderes carregam metralhadoras também, porém com balas perfurantes.', 2, 'Suporte'),
(11, 'Ronins', 'https://cdnb.artstation.com/p/assets/images/images/011/212/073/medium/benjamin-goutte-img-20180607-183349-386.jpg?1528390166', 'Percorrendo as ruas de Rio de Março com uma espada em suas mãos e um desejo de sangue insaciável em sua mente, o Ronin navega pelas sombras sem nunca ser visto. O brilho do neon as vezes cruza com sua lamina, ou a superfície polida de seu arco, mas isso apenas realça o aspecto de sombra que eles portam.', 3, 'DPS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sheet`
--

CREATE TABLE `sheet` (
  `cd_sheet` int(11) NOT NULL,
  `nm_sheet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_sheet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_sheet_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sheet`
--

INSERT INTO `sheet` (`cd_sheet`, `nm_sheet`, `img_sheet`, `id_role`, `id_sheet_user`) VALUES
(1, 'Rottaisu', 'Rottaisu', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `steet`
--

CREATE TABLE `steet` (
  `cd_stt_sheet` int(11) NOT NULL,
  `id_stt_sheet` int(11) NOT NULL,
  `nm_stt_sheet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vl_stt_sheet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `steet`
--

INSERT INTO `steet` (`cd_stt_sheet`, `id_stt_sheet`, `nm_stt_sheet`, `vl_stt_sheet`) VALUES
(55, 2, 'Inteligência', 5),
(56, 2, 'Força', 0),
(57, 2, 'Agilidade', 0),
(58, 2, 'Constituição', 0),
(59, 2, 'Charme', 0),
(60, 2, 'Sorte', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `stts`
--

CREATE TABLE `stts` (
  `cd_stt` int(11) NOT NULL,
  `nm_stt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_stt_user` int(11) NOT NULL,
  `vl_stt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `stts`
--

INSERT INTO `stts` (`cd_stt`, `nm_stt`, `id_stt_user`, `vl_stt`) VALUES
(1, 'Inteligência', 1, 5),
(2, 'Força', 1, 0),
(3, 'Agilidade', 1, 0),
(4, 'Constituição', 1, 0),
(5, 'Charme', 1, 0),
(6, 'Sorte', 1, 0);

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
(1, 'a@a', 'aa', 'aa'),
(2, 'Medeiros.luizhenrique@yahoo.com.br', 'Luiz Henrique Medeiros dos Santos', '0617e46a8c4fe3d5aa0b211de9a2357d'),
(3, 'aa@a', 'aa', '4124bc0a9335c27f086f24ba207a4912'),
(4, 'rafael.hungriaa@gmail.com', 'Café Quentinho', '2f3e9eccc22ee583cf7bad86c751d865');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `abilities`
--
ALTER TABLE `abilities`
  ADD PRIMARY KEY (`cd_ab`);

--
-- Índices para tabela `enemy`
--
ALTER TABLE `enemy`
  ADD PRIMARY KEY (`cd_enemy`);

--
-- Índices para tabela `inv_gun`
--
ALTER TABLE `inv_gun`
  ADD PRIMARY KEY (`cd_inv_gun`);

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`cd_gun`);

--
-- Índices para tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`cd_role`);

--
-- Índices para tabela `sheet`
--
ALTER TABLE `sheet`
  ADD PRIMARY KEY (`cd_sheet`);

--
-- Índices para tabela `steet`
--
ALTER TABLE `steet`
  ADD PRIMARY KEY (`cd_stt_sheet`);

--
-- Índices para tabela `stts`
--
ALTER TABLE `stts`
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
-- AUTO_INCREMENT de tabela `abilities`
--
ALTER TABLE `abilities`
  MODIFY `cd_ab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `enemy`
--
ALTER TABLE `enemy`
  MODIFY `cd_enemy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `inv_gun`
--
ALTER TABLE `inv_gun`
  MODIFY `cd_inv_gun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `cd_gun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `roles`
--
ALTER TABLE `roles`
  MODIFY `cd_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `sheet`
--
ALTER TABLE `sheet`
  MODIFY `cd_sheet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `steet`
--
ALTER TABLE `steet`
  MODIFY `cd_stt_sheet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de tabela `stts`
--
ALTER TABLE `stts`
  MODIFY `cd_stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `cd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
