-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jul-2020 às 07:02
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogup`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `id_usuario`, `titulo`, `link`, `created_at`, `updated_at`) VALUES
(33, 1, 'Cruzamento de informações: Aprenda como fazer! ', 'https://uplexis.com.br/blog/gestao/cruzamento-de-informacoes/', '2020-07-05 07:31:28', '2020-07-05 07:31:28'),
(34, 1, '7 estratégias para aplicar um programa de integridade na sua empresa ', 'https://uplexis.com.br/blog/compliance/estrategias-para-programa-de-integridade/', '2020-07-05 07:31:29', '2020-07-05 07:31:29'),
(35, 1, 'O que é uma Pessoa Politicamente Exposta? ', 'https://uplexis.com.br/blog/compliance/pessoa-politicamente-exposta/', '2020-07-05 07:31:29', '2020-07-05 07:31:29'),
(37, 1, 'Como ferramentas tecnológicas podem otimizar a recuperação de crédito? ', 'https://uplexis.com.br/blog/como-ferramentas-tecnologicas-podem-otimizar-a-recuperacao-de-credito/', '2020-07-05 07:35:49', '2020-07-05 07:35:49'),
(38, 1, 'O que esperar do compliance em 2020? ', 'https://uplexis.com.br/blog/o-que-esperar-do-compliance-em-2020/', '2020-07-05 07:35:49', '2020-07-05 07:35:49'),
(39, 1, 'Proteja o varejo eletrônico de fraudes com as nossas dicas ', 'https://uplexis.com.br/blog/proteja-o-varejo-eletronico-de-fraudes-com-as-nossas-dicas/', '2020-07-05 07:35:49', '2020-07-05 07:35:49'),
(40, 1, 'Como o BIG DATA pode ajudar nos processos de compliance em meios financeiros ', 'https://uplexis.com.br/blog/4876/', '2020-07-05 07:35:49', '2020-07-05 07:35:49'),
(41, 1, 'Dados ou informações: qual é mais importante para o processo decisório? ', 'https://uplexis.com.br/blog/gestao/dados-ou-informacoes-para-processo-decisorio/', '2020-07-05 07:35:50', '2020-07-05 07:35:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `senha`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$.HACLQR/eAo1YKB9MTfwRuKYJpw9Lk628Uzw681JGeubmKaPjgJu.', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artigos_id_usuario_foreign` (`id_usuario`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `artigos`
--
ALTER TABLE `artigos`
  ADD CONSTRAINT `artigos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
