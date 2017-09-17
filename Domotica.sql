-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 19-Maio-2017 às 16:51
-- Versão do servidor: 5.5.54-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Domotica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Tabela_Sensor`
--

CREATE TABLE IF NOT EXISTS `Tabela_Sensor` (
`IdSensor` int(11) NOT NULL,
  `HoraLeitura` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DataLeitura` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Sensor` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `User`
--

CREATE TABLE IF NOT EXISTS `User` (
`idUser` int(11) NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `login` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `User`
--

INSERT INTO `User` (`idUser`, `email`, `senha`, `login`) VALUES
(1, 'administrador@domotica.com', '123456', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Tabela_Sensor`
--
ALTER TABLE `Tabela_Sensor`
 ADD PRIMARY KEY (`IdSensor`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Tabela_Sensor`
--
ALTER TABLE `Tabela_Sensor`
MODIFY `IdSensor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
