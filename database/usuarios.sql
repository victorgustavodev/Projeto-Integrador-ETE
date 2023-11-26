-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Nov-2023 às 15:30
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `floricultura`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha_usuario` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recuperar_senha` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha_usuario`, `recuperar_senha`, `created`) VALUES
(47, 'Williane', 'williane010201@gmail.com', '$2y$10$102JOiKCNPDic9bHwrWSpe0WIJ0jMNS.0fPnBBRCnpiYMCSP7Kxq6', 'NULL', '2023-11-26'),
(46, 'williane', 'williane010201@gmail.com', '$2y$10$rZSTFWxu73ZCGDcK8IR92O1aM4acrrqq7mmWSp6.ygsKDiMKVY0n2', 'NULL', '2023-11-25'),
(45, 'williane', 'williane010201@gmail.com', '$2y$10$VMHo0QO.UAuW8KROPlC8uO5ZJodPFghYRz9t/BsTQrPNJvQhYtBdG', NULL, '2023-11-25'),
(44, 'williane', 'williane010201@gmail.com', '$2y$10$mf89vivpBA54PyGNTUwjJuGrSisTZic8PVoYYGvxY4Mp/YkqoOdUe', '$2y$10$AaLcoWSiv9X5JsybIroQm.dWwtWvUiG11XuLMVqRRjBcg.2oH8zd6', '2023-11-25'),
(43, 'williane', 'williane@gmail.com', '$2y$10$F9XrBvur9pzMFm65gBzFNumAPi5j10sksfYdvfitxjFWUhYO6QfLq', NULL, '2023-11-25'),
(42, 'williane', 'williane@gmail.com', '$2y$10$.cbrtjuCbq3Ayze5X08KWujbseX9turB8m8q4doOqydTrTvSQ7mIu', NULL, '2023-11-25'),
(40, 'williane', 'williane@gmail.com', '$2y$10$UnOKQq1ZwhKUNUm7KtLRPeszMtulSrXl2sNkdu6dgdPochWb.3BbS', NULL, '2023-11-25'),
(41, 'williane', 'williane@gmail.com', '$2y$10$y/bDz1CX/uq3979tJ5wvbOq03E3I5Z0xLLu626VbslR2aLKrgzaRG', NULL, '2023-11-25'),
(39, 'williane', 'williane@gmail.com', '$2y$10$dEZoLHyhcIaRRoZJNh8yiuZ7vNXWriK9jo6SudbT1Iauma.D01cPu', NULL, '2023-11-25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
