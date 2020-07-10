create database correiodobem3;
use correiodobem3;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `correiodobem2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
-- 

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL auto_increment,
  `matricula` char(10) NOT NULL unique,
  `nome` varchar(50) NOT NULL unique,
  `email` varchar(50) NOT NULL unique,
  `senha` varchar(32) NOT NULL,
  primary key (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `matricula`, `nome`, `email`, `senha`) VALUES
(15, '2018451356', 'Tim Berners-Lee', 'admin1@gmail.com', '5e8667a439c68f5145dd2fcbecf02209'),
(16, '2019645135', 'JoÃ£o Manoel Lummertz Scheffer', 'admin2@gmail.com', '5e8667a439c68f5145dd2fcbecf02209'),
(17, '1998121345', 'JoÃ£o Gabriel de Souza Moro', 'admin3@gmail.com', '5e8667a439c68f5145dd2fcbecf02209');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--


CREATE TABLE `usuario` (
  `id` int(11) NOT NULL auto_increment,
  `matricula` char(10) NOT NULL unique,
  `nome` varchar(50) NOT NULL unique,
  `email` varchar(50) NOT NULL unique,
  `senha` varchar(32) NOT NULL,
  primary key (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
