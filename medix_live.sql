-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2020 at 12:27 PM
-- Server version: 5.7.29-0ubuntu0.16.04.1
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medix_live`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(91) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ps_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_id` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `homephone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` int(10) DEFAULT NULL,
  `district` int(10) DEFAULT NULL,
  `zone` int(10) DEFAULT NULL,
  `division` int(10) DEFAULT NULL,
  `school` int(10) DEFAULT NULL,
  `role_id` int(10) DEFAULT NULL,
  `inRecycle` int(3) NOT NULL DEFAULT '0',
  `status` int(2) DEFAULT NULL,
  `emp_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` text COLLATE utf8mb4_unicode_ci,
  `creator_id` int(100) DEFAULT NULL,
  `creator_role_id` int(10) DEFAULT NULL,
  `updated_by` text COLLATE utf8mb4_unicode_ci,
  `updater_id` text COLLATE utf8mb4_unicode_ci,
  `updater_role_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `lname`, `username`, `email`, `nic`, `mobile`, `address`, `profile_img`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `last name`, `ps_number`, `reg_id`, `gender`, `dob`, `homephone`, `province`, `district`, `zone`, `division`, `school`, `role_id`, `inRecycle`, `status`, `emp_id`, `created_by`, `creator_id`, `creator_role_id`, `updated_by`, `updater_id`, `updater_role_id`) VALUES
(1, 'Shantha Perera', NULL, 'medix', 'yasirukulinda@gmail.com', '961143934v', '0754077569', 'test, test', '1410280948.jpg', NULL, '$2y$10$FRz3pEPnzTqZGWP9SLNAvu.FegQjkaRPgJjE2VNrJisBettoTKGim', 'MBY44aMv7zIMvPv5X7FToNRTGlaRqn5lW7GQMHMwuhsPE9Nk9PyC4aAPqJhx', NULL, '2020-04-26 03:15:50', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 'yasiru', NULL, 'yasi', 'test@gmail.com', '', '', '', '', NULL, '$2y$10$FRz3pEPnzTqZGWP9SLNAvu.FegQjkaRPgJjE2VNrJisBettoTKGim', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 'CEBTU', NULL, 'Technicians Union', 'kyasiru@outllook.com', '198629810037', '0716876975', '209, Atulugama, Bandaragama', '159627934.jpg', NULL, '$2y$10$WUbdohD4DiqaWukuRWIpbeyzvw2mQup/M5CDKWJ2KJ5UgJ9IDiQEC', 'zuOXf4fOXxregdLCAW0efQq3fuDuERovHMkRZU668bFtlrMxROtCGAvtUQN9', '2019-06-30 08:10:38', '2019-07-23 10:33:42', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(32, 'CTSU', NULL, 'ctsuadmin', 'yasirukulinda1234@gmail.com', '1293456893849', '0764532789', 'test, test', '1940566316.png', NULL, '$2y$10$O3TdCk53oRSMfa42d6QWr.BvdTYEGGea4kOM/DlEO3wcUp2lwsyCi', 'OggH1HyYWRXRm8auoMWgYlFDSz4QtnepZZNPkuWqN689EoNlue4Y3dxNJwSH', '2020-01-15 00:03:22', '2020-02-20 06:28:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'gayan', 'sanjeewa', 'gayan', 'sadfgh@gmail.cm', '741852852v', '1252125211', 'sdf', NULL, NULL, '$2y$10$SlzI0GgembigmaJp.h8wEuTnaFH66sACUJOfwZ1NHm4kPgknE/abW', NULL, '2020-02-01 00:08:27', '2020-03-09 22:49:50', NULL, '741', '7412', 'male', '2020-02-05', '3322112232', 399, 402, 402, NULL, NULL, 5, 0, 1, '4552', 'CTSU ', 32, NULL, 'test test ', '1', 1),
(64, 'kamani', 'nimmi', 'kamani', 'chaminisansa4459@gmail.com', '585856965v', '441440000', 'rathnapura, peaffffff', '1140242037.jpg', NULL, '$2y$10$3CruXflvrH6fX4hkDTtPkeFV0ng5hzY1TkJ/roVoiz7F84JI/XrvG', NULL, '2020-02-09 01:55:52', '2020-04-10 23:40:47', NULL, '8525896', '665235', 'male', '2020-02-06', '8855445522', 399, NULL, NULL, NULL, NULL, 3, 0, 0, '777441', 'CTSU ', 32, NULL, 'Shantha Perera ', '1', 1),
(65, 'dineth', 'sanjeewa', 'dima', 'chaminisansdddd@gmail.com', '669966336v', '8877887788', 'rathnapura, peaffffff', '2107383726.jpg', NULL, '$2y$10$fkYZ3A2qv8LNk/zj4QdW9e5KLHLIOGcs85WiHD1LnRvMdVIqTSlZK', NULL, '2020-02-09 01:57:15', NULL, NULL, '445522', '774411', 'male', '2020-02-06', '9966885599', 396, NULL, NULL, NULL, NULL, 3, 0, 1, '44414', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(66, 'kasun', 'sanjeewa', 'nuwani', 'chaminisansnmnmn@gmail.com', '232323265v', '6636956566', 'rathnapura, peaffffff', '480955090.jpg', NULL, '$2y$10$5UNDP9eT0fvEoYRbaA/yHuFVPBJP7gDiCewm8U/h9utcdaSXl/MT.', NULL, '2020-02-09 01:58:31', NULL, NULL, '565656', '66558', 'male', '2020-01-30', '6633225566', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '63659', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(67, 'yasith', 'sanjeewa', 'yasith', 'chaminisansala59@gmail.com', '878454854v', '6665555655', 'rathnapura, peaffffff', '712160741.jpg', NULL, '$2y$10$AYETf2Y4l2SILu6No78JIeO.zfXcYbm4EHU4TMwm0jXhqh16KVIFC', NULL, '2020-02-09 02:02:40', NULL, NULL, '9898566', '9996666', 'male', '2020-02-03', '8855444585', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '232655653', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(68, 'yamuna', 'chanchali', 'yamuna', 'chaminisaniii5@gmail.com', '555555554v', '0011220011', 'rathnapura, peaffffff', '1199173138.jpg', NULL, '$2y$10$dpH3t4g.hYs6iDOt6H0nmOWpE60oOlx73kfSighDnzRHZKvJjsvWK', NULL, '2020-02-09 02:04:45', NULL, NULL, '86565', '447414', 'male', '2020-02-19', '1100220011', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '454554', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(69, 'aaa', 'thakshi', 'aaa', 'chaminisansaldsdsa59@gmail.com', '66544478v', '6655448742', 'rathnapura, peaffffff', NULL, NULL, '$2y$10$WSn0H2ArelT.b060x8moxe3959S/BCrBufCa9R7JWBjggWxb5U1i6', NULL, '2020-02-09 02:07:01', NULL, NULL, '663652', '665523', 'male', '2020-02-13', '9966998855', 397, NULL, NULL, NULL, NULL, 3, 0, 1, '332320', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(70, 'bbb', 'nayana', 'bbb', 'chaminisansalss66@gmail.com', '565654545112v', '5656232565', 'rathnapura, peaffffff', '2012540286.jpg', NULL, '$2y$10$Xe42/FjMd6GEirKQPqr/buDKIm/LqjkCUXoaeU24I75xtaj477lVK', NULL, '2020-02-09 02:07:59', NULL, NULL, '87845484', '22323', 'male', '2020-02-19', '9999666526', 398, NULL, NULL, NULL, NULL, 3, 0, 1, '65656895', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(71, 'ccc', 'sanjeewa', 'ccc', 'chaminisansabb549@gmail.com', '888554574v', '6656985665', 'rathnapura, peaffffff', '1208966829.jpg', NULL, '$2y$10$3E.sSOlwDQtGOp6gFfvCdu9s62WPQ5iRwEWkyU6s5ycBjirO/Fb1S', NULL, '2020-02-09 02:09:07', NULL, NULL, '515412', '6565656', 'male', '2020-01-28', '8878898855', 397, NULL, NULL, NULL, NULL, 3, 0, 1, '7516546565', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(72, 'ddd', 'thakshi', 'ddd', 'chaminisansalvv5@gmail.com', '32025412v', '5548474556', 'rathnapura, peaffffff', '785619217.jpg', NULL, '$2y$10$lvMhvR3JmCCnZwGlnLgehuU9yRQl1EaROxUk8TE3/VDGXaOF21Mc.', NULL, '2020-02-09 02:10:15', NULL, NULL, '52652362', '333220', 'male', '2020-02-21', '4455887744', 398, NULL, NULL, NULL, NULL, 3, 0, 1, '68598658', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(73, 'eee', 'nimmi', 'eee', 'chaminisansalss56@gmail.com', '001122332v', '6655889968', 'rathnapura, peaffffff', '743543792.jpg', NULL, '$2y$10$KdLEFFRP67vqOE85ZhTdZODDnuHa//nNfHmcaWQHvAcNcJxIkkMDm', NULL, '2020-02-09 02:11:21', NULL, NULL, '020210', '6565', 'male', '2020-02-04', '7858745874', 397, NULL, NULL, NULL, NULL, 3, 0, 1, '33212', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(74, 'fff', 'nimmi', 'fff', 'chaminisansalcc56@gmail.com', '054585420v', '3325652541', 'rathnapura, peaffffff', '585744609.jpg', NULL, '$2y$10$08tfExzlXOgrLhC8Fmo/xu74bNdm99FZsdv.2pc7OBrLk/q0l7ugC', NULL, '2020-02-09 02:12:33', NULL, NULL, '42020', '65654878', 'male', '2020-02-05', '00444111102', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '232562', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(75, 'ggg', 'sanjeewa', 'ggg', 'chaminisanshh6@gmail.com', '0212021020v', '021156120', 'rathnapura, peaffffff', '2136522770.jpg', NULL, '$2y$10$x9iVCsA6PQSOTKMyZ9f3rOsx6L9ailevDcMSYNLbXxcn3NtX6uYNK', NULL, '2020-02-09 02:20:57', NULL, NULL, '1254220', '22220110', 'male', '2020-02-12', '852074109', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '8789845', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(76, 'hhh', 'nayana', 'hhh', 'chaminisa2356b9@gmail.com', '879845542', '3365265254', 'rathnapura, peaffffff', '235762424.jpg', NULL, '$2y$10$Y3ZrLXRu/hQs9M2us50ecuSus5nqVN4Q64qNN7CYDNfobs3KtY/sq', NULL, '2020-02-09 02:24:01', NULL, NULL, '652854', '3320', 'male', '2020-02-14', '2211145555', 396, NULL, NULL, NULL, NULL, 3, 0, 1, '002028985', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(77, 'iii', 'sanjeewa', 'iii', 'chaminisansan529@gmail.com', '6554848745', '3232566512', 'rathnapura, peaffffff', '693105288.jpg', NULL, '$2y$10$3Q5YNlA5aE43a/sODQmIeOPczeGAabfO7mgYPjgZXyA42KH81kR9O', NULL, '2020-02-09 02:25:31', NULL, NULL, '323562', '56523', 'male', '2020-02-20', '8548545454', 398, NULL, NULL, NULL, NULL, 3, 0, 1, '202012', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(78, 'jjj', 'sanjeewa', 'jjj', 'chaminisansavcvc233@gmail.com', '8544110', '5556888888', 'rathnapura, peaffffff', '1053868149.jpg', NULL, '$2y$10$iaTZvxmJeYqqUcWUFqzjNeja0xw4E9YmiG8ghLgR8tP4ggFPBYNca', NULL, '2020-02-09 02:27:14', NULL, NULL, '8745120', '6352220', 'male', '2020-02-21', '8859858745', 397, NULL, NULL, NULL, NULL, 3, 0, 1, '023021', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(79, 'kkk', 'nayana', 'kkk', 'chaminisansvv9@gmail.com', '68956895', '6588565544', 'rathnapura, peaffffff', '1552805178.jpg', NULL, '$2y$10$00taE4gJUm.v4rziYGVTN.gY.uXAP/UNfPziou3ODBAMosRGlqAya', NULL, '2020-02-09 02:29:08', NULL, NULL, '65668956', '658956', 'male', '2020-02-14', '7788554574', 397, NULL, NULL, NULL, NULL, 3, 0, 1, '899656', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(80, 'mmm', 'sanjeewa', 'mmm', 'chaminisanbn5454@gmail.com', '898898855', '656564646', 'rathnapura, peaffffff', '529430867.jpg', NULL, '$2y$10$/E8.m6R.Yu.Z2Y9/63crIuMpq9cfCMvjNBfKf17ymJRjCs05YBPQi', NULL, '2020-02-09 02:31:36', NULL, NULL, '321254', '6562356', 'male', '2020-02-03', '787878454', 398, NULL, NULL, NULL, NULL, 3, 0, 1, '789564', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(81, 'nnn', 'thakshi', 'nnn', 'chaminisa656@gmail.com', '74587485', '6986895666', 'rathnapura, peaffffff', '2085646040.jpg', NULL, '$2y$10$hgHptv0Ql2Yw.aOVpjj2gOOKMCRBcswxWYrXLjKgbSeLscZwajtbG', NULL, '2020-02-09 02:33:07', NULL, NULL, '6589562', '65686', 'male', '2020-02-20', '8578547854', 396, NULL, NULL, NULL, NULL, 3, 0, 1, '487455', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(82, 'ppp', 'thakshi', 'ppp', 'chaminisansala41dd59@gmail.com', '320232012', '8986568956', 'rathnapura, peaffffff', '1321030660.jpg', NULL, '$2y$10$K6RRx6VyjcVMeh2DVjNjBO7aXhrNJMedVPgEz0enp5iearCQ/nARW', NULL, '2020-02-09 02:34:18', NULL, NULL, '69856', '663652', 'male', '2020-02-13', '884555555', 396, NULL, NULL, NULL, NULL, 3, 0, 1, '77410', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(83, 'qqq', 'nisa', 'qqq', 'chaminisansalss45@gmail.com', '8989854874', '668989856', 'rathnapura, peaffffff', '1702585222.jpg', NULL, '$2y$10$7p9kdz1aDy2SRDhTd7MVLO7GipyvnEy.n/X5XzYQyd1yA4fkqwanK', NULL, '2020-02-09 02:35:35', NULL, NULL, '78787874', '4545566454', 'male', '2020-01-30', '568598568', 395, NULL, NULL, NULL, NULL, 3, 0, 1, '3696566', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(84, 'rrr', 'nayana', 'rrr', 'chaminisaff565@gmail.com', '356589856', '7874547844', 'rathnapura, peaffffff', NULL, NULL, '$2y$10$6A0v/YFYIt9eTuVyeoxOteZme5jQr6x0..n8CWp2jYD2EB5encEu2', NULL, '2020-02-09 02:36:34', NULL, NULL, '7897456', '88878874', 'male', '2020-02-11', '3205241120', 398, NULL, NULL, NULL, NULL, 3, 0, 1, '6689565', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(85, 'sss', 'nayana', 'sss', 'chaminisa963x@gmail.com', '35689565', '665874855', 'rathnapura, peaffffff', '476054145.jpg', NULL, '$2y$10$LJkOSSbaNlOYVI3DadIaw.C4PKBikzrviYbfH8esLcs/0lPXsSUOe', NULL, '2020-02-09 02:38:07', NULL, NULL, '44578454', '663565', 'male', '2020-02-15', '778855444', 398, NULL, NULL, NULL, NULL, 3, 0, 1, '369985985', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(86, 'ttt', 'thakshi', 'ttt', 'chaminisafsfs56@gmail.com', '78745605121', '9898565985', 'rathnapura, peaffffff', '298840341.jpg', NULL, '$2y$10$jscM0hgu201mca7HWkoE6uVUP/NL9bHYdlqJA4S5y89k6wNVdsdTq', NULL, '2020-02-09 02:39:12', NULL, NULL, '5451012', '356896', 'male', '2020-02-12', '8587845785', 398, NULL, NULL, NULL, NULL, 3, 0, 1, '2032325', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(87, 'uuu', 'nimmi', 'uuu', 'chamini6565232cc@gmail.com', '7787454521', '8989874526', 'rathnapura, peaffffff', '266348510.jpg', NULL, '$2y$10$2LlwhSFTqJX.TkNxDG2fRufC2f2V.zPnesrGvqXSLTlNGkMjF314i', NULL, '2020-02-09 02:40:20', NULL, NULL, '3214566', '78451554', 'male', '2020-02-07', '6569898565', 396, NULL, NULL, NULL, NULL, 3, 0, 1, '65895689', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(88, 'vvv', 'thakshi', 'vvv', 'chaminisanedaa33@gmail.com', '7884513212', '898956565', 'rathnapura, peaffffff', '2128222425.jpg', NULL, '$2y$10$2YMRgG5/.UejzQnBq5gQMem91VIp8hh51bnsnGEuKqQnVa4WKXDYC', NULL, '2020-02-09 02:42:07', NULL, NULL, '78794564651', '77744852', 'male', '2020-01-29', '8784541221', 396, NULL, NULL, NULL, NULL, 3, 0, 1, '8956465465', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(89, 'www', 'thakshi', 'www', 'chaminisan33622@gmail.com', '77484555', '874875455', 'rathnapura, peaffffff', '952730561.jpg', NULL, '$2y$10$R1C.A8/xl3SiHcM25S2u5e5yuAnnXioTlN/j.Cpv87wSI/7eKqmFW', NULL, '2020-02-09 02:43:42', NULL, NULL, '3256522', '6565899', 'male', '2020-02-22', '666666665', 397, NULL, NULL, NULL, NULL, 3, 0, 1, '989887', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(90, 'xxx', 'nimmi', 'xxx', 'chaminisaxx21@gmail.com', '6598956556', '6655899658', 'rathnapura, peaffffff', '113675897.jpg', NULL, '$2y$10$GntII1tTv0AIy2/miZIIv.2hEtMIsduc8EYtDzXhqqME397eECsM2', NULL, '2020-02-09 02:44:41', NULL, NULL, '5478745', '0100100', 'male', '2020-02-11', '6658574852', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '65894', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(91, 'yyy', 'nayana', 'yyy', 'chaminisabnbb85@gmail.com', '874512454', '8988977442', 'rathnapura, peaffffff', '746656939.jpg', NULL, '$2y$10$meAlYnlvY9vf7vfWsMXSoei7NI7etN0tKzJf7Zi5IyD.YkvS9O2yq', NULL, '2020-02-09 02:46:12', NULL, NULL, '15487', '6989565', 'male', '2020-02-13', '7874545454', 400, NULL, NULL, NULL, NULL, 3, 0, 1, '898888', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(92, 'zzz', 'sanjeewa', 'zzz', 'chaminisanmnm59@gmail.com', '88978454665', '9856996666', 'rathnapura, peaffffff', '930103458.jpg', NULL, '$2y$10$1o3b.DzAFf2rZxdjvxiAYeeo0irG6Qb7GIR/MDQ40I38KD7gf25Gi', NULL, '2020-02-09 02:47:14', NULL, NULL, '65895623', '898562623', 'male', '2020-02-20', '3235656898', 397, NULL, NULL, NULL, NULL, 3, 0, 1, '36598956', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(93, 'gfgg', 'sanjeewa', 'fcf', 'chaminisankk5559@gmail.com', '988565633', '3202326556', 'rathnapura, peaffffff', '1864396586.jpg', NULL, '$2y$10$8IgJ/3Z/ttqEPa4CkBetAecWvKOW421jRZsp02uRPfM3EPGTO.PZ.', NULL, '2020-02-09 02:48:43', NULL, NULL, '78745', '897778', 'male', '2020-02-15', '7898545555', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '323666', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(94, 'aaaa', 'nayana', 'bbbb', 'chaminisancfcv852@gmail.com', '787545121', '7878787254', 'rathnapura, peaffffff', '398371317.jpg', NULL, '$2y$10$RUqs6C2zznAxxWQuKk2R9O.kZ/hQX6BhWRGI0WXhX1WczDcwcDZmu', NULL, '2020-02-09 02:49:55', NULL, NULL, '369855', '6856464', 'male', '2020-02-29', '8785454544', 396, NULL, NULL, NULL, NULL, 3, 0, 1, '789752', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(95, 'cccc', 'nayana', 'cccc', 'chaminisanfff65@gmail.com', '44242424', '3689555554', 'rathnapura, peaffffff', '1113056811.jpg', NULL, '$2y$10$HQeWhICDpDcqxEN.yJlLK.CxEy/32zW9h95ERuu1sftlEz.QxntVG', NULL, '2020-02-09 02:51:12', NULL, NULL, '124442121', '5448745', 'male', '2020-02-28', '7778845455', 397, NULL, NULL, NULL, NULL, 3, 0, 1, '12010010', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(96, 'dddd', 'thakshi', 'dddd', 'chaminisansala11111159@gmail.com', '77777777788', '5665656566', 'rathnapura, peaffffff', '1389866889.jpg', NULL, '$2y$10$L/HC/PWfauKgckNyoX7xxOcyaxTHE3vlZQtCe6s6VEn76bLjw6L/O', NULL, '2020-02-09 02:52:35', NULL, NULL, '444444455555555', '56454', 'male', '2020-02-15', '8899958564', 394, NULL, NULL, NULL, NULL, 3, 0, 1, '632010000000000', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(97, 'eeee', 'sanjeewa', 'eeee', 'chaminisansnnnnnnala59@gmail.com', '333333322222222', '7877454555', 'rathnapura, peaffffff', '1154186811.jpg', NULL, '$2y$10$ipV.O3gXbdVVFxwN9RYJKO8M4Y6BUZ2SPvTdgNxpqHOwkwXDdMhDm', NULL, '2020-02-09 02:53:43', NULL, NULL, '98565666', '0002120', 'male', '2020-02-11', '3300232323', 395, NULL, NULL, NULL, NULL, 3, 0, 1, '874512', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(98, 'ffff', 'thakshi', 'ffff', 'chaminisanasssssa@gmail.com', '4444444442222', '424222242', 'rathnapura, peaffffff', '1365981688.jpg', NULL, '$2y$10$llJRYAP4bXlt5NgRCnFjCOdmxI2VUBTSTS/mIgZYdAy3K7uvyxjWa', NULL, '2020-02-09 02:54:48', NULL, NULL, '44444444222222', '02200000', 'male', '2020-01-28', '422222422', 398, NULL, NULL, NULL, NULL, 3, 0, 1, '01121221', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(99, 'gggg', 'thakshi', 'gggg', 'chaminisanscfdfala59@gmail.com', '11111111000', '555454545', 'rathnapura, peaffffff', NULL, NULL, '$2y$10$KcL6up3g1cZDfUyJmZDtrOEgaYldhK7gYUhXHlxyyoFUoQMZBhsTi', NULL, '2020-02-09 02:56:44', NULL, NULL, '10000000', '874551', 'male', '2020-02-27', '454545755', 397, NULL, NULL, NULL, NULL, 3, 0, 1, '1011000000', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(100, 'hhhh', 'sanjeewa', 'hhhh', 'chaminisansala59kj@gmail.com', '787875455', '5655986555', 'rathnapura, peaffffff', '1919141256.jpg', NULL, '$2y$10$ylTve.L8rHQoUgsJ849ABORh1Sv/JLMeqqpP8W.MbBaAazOaIebGG', NULL, '2020-02-09 02:57:55', NULL, NULL, '9889889888', '8999999', 'male', '2020-02-19', '0032325555', 398, NULL, NULL, NULL, NULL, 3, 0, 1, '0002212000', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(101, 'iiii', 'nayana', 'iiii', 'chaminisans5545454ala59@gmail.com', '1121145455', '6659899999', 'rathnapura, peaffffff', NULL, NULL, '$2y$10$JlVlq7OWQxiyas00nC.vMOWTsCUB.QQ4jJFCwy36qj1gMtFvwvy/G', NULL, '2020-02-09 02:59:14', NULL, NULL, '7887844', '7894522', 'male', '2020-02-18', '5566859856', 397, NULL, NULL, NULL, NULL, 3, 0, 1, '3256444', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(102, 'iiii', 'nayana', 'iiii', 'chaminifg5454ala59@gmail.com', '112114545532121', '0011558899', 'rathnapura, peaffffff', NULL, NULL, '$2y$10$S/bLcaLgbz.aeaX7wn79a.J2.Wd31TsmSIQGvsTg8hn2W16LGbzUi', NULL, '2020-02-09 03:00:04', NULL, NULL, '7887844021210', '789452265565', 'male', '2020-02-18', '9966558899', 397, NULL, NULL, NULL, NULL, 3, 0, 1, '325644454454', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(103, 'jjjj', 'thakshi', 'jjjj', 'chaminisansala88859@gmail.com', '3535333', '5333355553', 'rathnapura, peaffffff', '940835078.jpg', NULL, '$2y$10$GtLO9H.7HaT1az7gE7GK4uWB0dU50imRG7kf6AoGF7JG30aqTXTJm', NULL, '2020-02-09 03:01:16', NULL, NULL, '23232333', '5435333', 'male', '2020-02-26', '5533553206', 397, NULL, NULL, NULL, NULL, 3, 0, 1, '0000012', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(104, 'kkkk', 'sanjeewa', 'kkkk', 'chaminisansdsdsala59@gmail.com', '4522222424', '445454545', 'rathnapura, peaffffff', '1128309352.jpg', NULL, '$2y$10$atLjSVTq9ewIdRxoXwRiEekWTBZPP1f.326tYxiTQebC.ojMv6dui', NULL, '2020-02-09 03:02:35', NULL, NULL, '5757575', '02154676', 'male', '2020-02-13', '755557755', 396, NULL, NULL, NULL, NULL, 3, 0, 1, '457575', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(105, 'mmmm', 'nimmi', 'mmmm', 'chaminisfddansala59@gmail.com', '777777899', '8989855556', 'rathnapura, peaffffff', '759229034.jpg', NULL, '$2y$10$4U2e3QV89DsTs198uC9AwOcY7UcXfdIZWblp/IAQqLskKBcdO2Q1W', NULL, '2020-02-09 03:03:49', NULL, NULL, '3333355556', '544445544', 'male', '2020-02-10', '8889655658', 396, NULL, NULL, NULL, NULL, 3, 0, 1, '000002222', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(106, 'nnnn', 'thakshi', 'nnnn', 'chaminisasdnsala59@gmail.com', '11111555555', '4444445555', 'rathnapura, peaffffff', '441183830.jpg', NULL, '$2y$10$nCEKOyDlAFreek38bwhTKOhnYVzbrehQM8zKaUKrEb0dGVBRSAp.a', NULL, '2020-02-09 03:44:32', NULL, NULL, '66666665', '0000021111', 'male', '2020-02-12', '6665554452', 398, NULL, NULL, NULL, NULL, 3, 0, 1, '78888888444', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(107, 'hhhh', 'thakshi', 'hhhh', 'chaminisa525nsala59@gmail.com', '48756985214', '5658596859', 'rathnapura, peaffffff', '2110099267.jpg', NULL, '$2y$10$Gyp4vDd0WiqkDnNRtY8iH.HiPMdvvx92Y6C6HyJoV5TEOZNaj/zzG', NULL, '2020-02-10 23:07:45', NULL, NULL, '58965', '021457412', 'male', '2020-01-30', '3547895263', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '78895', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(108, 'hhhh', 'thakshi', 'hhhh', 'chamghgh525nsal@gmail.com', '48756985214v', '5650006859', 'rathnapura, peaffffff', NULL, NULL, '$2y$10$5IxscOnDINqd2bSiCJhR9eSQDfN5yiBbg5TseMEQVpFHOSf6vWhsm', NULL, '2020-02-10 23:09:15', NULL, NULL, '587454444', '0214574120000787', 'male', '2020-01-30', '3500095263', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '788950202214', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(109, 'nbbb', 'sanjeewa', 'nbbb', 'chamibbbbsala59@gmail.com', '020221545487', '5658784541', 'rathnapura, peaffffff', '170049575.jpg', NULL, '$2y$10$PYKipvHGfYCTv/UC0QAn1eCKf8k1DgV1Lba7f5PpuX8xhOGmR7Q5W', NULL, '2020-02-10 23:10:29', NULL, NULL, '14147474', '656562323232', 'male', '2020-02-21', '9988774455', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '89895656565', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(110, 'tttt', 'nisa', 'tttt', 'chaxxxxsansala59@gmail.com', '33336666', '447744886', 'rathnapura, peaffffff', '1682865069.jpg', NULL, '$2y$10$ktWkH6KLSbtMQztf/55/IeoA3HSJzv1lLwOKFKeCPipK4jw.eU3xC', NULL, '2020-02-10 23:11:47', NULL, NULL, '22225555', '452155412', 'male', '2020-02-28', '5566223311', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '875549855', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(111, 'pppp', 'nimmi', 'pppp', 'chaminisa11111nsala59@gmail.com', '88885555', '444488877', 'rathnapura, peaffffff', '909159682.jpg', NULL, '$2y$10$jsusPucsoo0H0XMsR4yDHurpmNE8KEjSk6yg.s3PvcZmy4mzcYV6u', NULL, '2020-02-10 23:12:59', NULL, NULL, '11119999', '55545555', 'male', '2020-02-22', '666655554', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '777441111', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(112, 'kkkk', 'sanjeewa', 'kkkk', 'c111444isansala59@gmail.com', '369369', '265999', 'rathnapura, peaffffff', '443839685.jpg', NULL, '$2y$10$.sPaEUhU5VteMCrc3KffQOEaWrFYEUcf6mXcV7XK8ZTxppMyNseZ.', NULL, '2020-02-10 23:14:17', NULL, NULL, '0147', '89989898', 'male', '2020-02-19', '78777778', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '0147014', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(113, 'uuuu', 'nimmi', 'uuuu', 'chaminmmmsala59@gmail.com', '777755552', '121122121', 'rathnapura, peaffffff', '1544239520.jpg', NULL, '$2y$10$ucQFAbOxHrsqk/LboUCRD.vKwYBAps0znsxu.sNPKHDfkonuBo9XO', NULL, '2020-02-10 23:15:26', NULL, NULL, '22255558', '55557777', 'male', '2020-02-14', '223322333', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '6655566', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(114, 'wwww', 'thakshi', 'wwww', 'cha1010100ansala59@gmail.com', '11110000', '002200110', 'rathnapura, peaffffff', NULL, NULL, '$2y$10$0GXvrDMKvdLkhX1vKW5y/uA9PrkWYpaDhvfKsrlPNr3TdOLCnWnM6', NULL, '2020-02-10 23:16:55', NULL, NULL, '00001111', '2111211111', 'male', '2020-02-22', '001100220', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '2322200000', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(115, 'rrrr', 'nimmi', 'rrrr', 'chami0000033666nisansala59@gmail.com', '22220000', '44440000', 'rathnapura, peaffffff', NULL, NULL, '$2y$10$LVl00coOKGW/XfQZvX61fe5J4gRcxntZxVeQAS8Tdd2WGT82Nqb.i', NULL, '2020-02-10 23:18:27', NULL, NULL, '00002222', '666660000', 'male', '2020-02-18', '00004444', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '99966666', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(116, 'qqqq', 'sanjeewa', 'qqqq', 'chamini1478@gmail.com', '66669999', '111155555', 'rathnapura, peaffffff', '1879439838.jpg', NULL, '$2y$10$xDrf/wHKoZbihx/ZARMGRONV3ZGy1ZMg7nMv9KuVzG0pf5dXs1WBq', NULL, '2020-02-10 23:42:41', NULL, NULL, '33336666', '4445555', 'male', '2020-02-20', '5555511111', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '66663333', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(117, 'aaaa', 'nisa', 'aaaa', 'chaminisa01020@gmail.com', '3333300000', '000022222', 'rathnapura, peaffffff', '555469632.jpg', NULL, '$2y$10$.oJNyUr0pa9TSt0GG9SLLe68Z0MR43CfIWjXiOY7N2xvF1otLVK7m', NULL, '2020-02-10 23:44:11', NULL, NULL, '44443333', '88881111', 'male', '2020-02-21', '2222200000', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '33334444', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(118, '333330000', 'gggg', 'gggg', 'chamini3300@gmail.com', '8885555', '555885588', 'rathnapura, peaffffff', '1008734880.jpg', NULL, '$2y$10$xqcqezyRdLJ13Fsk/IIF6e6LoTCDFUq2fulDC.3.w2cwRwLJC5K9m', NULL, '2020-02-10 23:46:03', NULL, NULL, '889966', '000003333', 'male', '2020-02-07', '885588555', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '669988', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(119, '777744444', 'iiii', 'iiii', 'chaminimmmm@gmail.com', '777779999', '222233333', 'rathnapura, peaffffff', '489981068.jpg', NULL, '$2y$10$19.dga9mm6UgCyGx7ON.e.qBfbz7JR0rkNtN3ccEKYNM.ifgzA1KG', NULL, '2020-02-10 23:47:39', NULL, NULL, '888886666', '444447777', 'male', '2020-02-07', '333332222', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '666688888', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(120, 'yyyy', 'nisa', 'yyyy', 'chaminiqqaa@gmail.com', '999988888', '7777111122', 'rathnapura, peaffffff', '309995198.jpg', NULL, '$2y$10$lRlToVRbSuL12qwqKk.KO.7TA7mO9JiyUClM83PIO.lesE2D0JvUS', NULL, '2020-02-10 23:55:59', NULL, NULL, '77774444', '03003333', 'male', '2020-02-07', '2221111444', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '68688888', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(121, 'mmmm', 'nayana', 'mmmm', 'chaminimnmnmnm@gmail.com', '7777774444', '0000445555', 'rathnapura, peaffffff', '273975248.jpg', NULL, '$2y$10$ILQh7Rp8LunYQaCmCE45SuYale9dWBrUKvoAOpGPThCLh4Fhaizv2', NULL, '2020-02-11 00:00:13', NULL, NULL, '0000022222', '66665555', 'male', '2020-02-26', '55555440000', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '555566666', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(122, 'eeee', 'thakshi', 'eeee', 'chaminisa22445005@gmail.com', '98988999', '822828282', 'rathnapura, peaffffff', NULL, NULL, '$2y$10$noSrVyF6gHQsNh7KUK0dTOUKlZ05e1JjNdpLw.lwTpgPRbc6fhwWO', NULL, '2020-02-11 00:02:25', NULL, NULL, '78879888', '08000022222', 'male', '2020-02-22', '889999888', 399, NULL, NULL, NULL, NULL, 3, 0, 1, '666633330000', 'CTSU ', 32, NULL, NULL, NULL, NULL),
(139, 'Test', 'agent', 'test1', 'yasirukulinda409504905940590@gmail.com', '243493049034903940', '07540459059049', 'test, test', '665521898.jpg', NULL, '$2y$10$G0Ml/X.0QXvsIKaqhTPImu9FDBPMunbm6wbI8chxDt3/ibXwgJxl2', NULL, '2020-03-09 21:53:34', '2020-03-09 22:23:11', NULL, '2434039093059405', '2300940909305', 'male', '2020-03-12', '339503950395093', 394, 399, NULL, NULL, NULL, 4, 1, 1, '23903940395095', 'test test ', 1, 1, 'test test ', '1', 1),
(144, 'yasiru', 'liyanage', 'yasiru', 'yasirukulinda548504808@gmail.com', '4394399808508', '075407756789', 'test, test', '991494609.png', NULL, '$2y$10$phWyJFpuhdLmZvpZowCB0.G8jDbo9G/dmH1Ph0phznwSFyiKWEEkm', NULL, '2020-04-03 22:21:17', NULL, NULL, 'nopsnumber', 'MEDIX/DA/4222076697', 'male', '2020-04-05', '0345678956', 399, 402, 495, 683, 1288, 7, 1, 1, 'noempid', 'test test ', 1, 1, NULL, NULL, NULL),
(146, 'Danushka', 'Lakmal', 'ctsuadminm', 'admin@gmail.com', '945240423V', '0702398025', 'ad1, ad2', NULL, NULL, '$2y$10$FBCpRaKFQhodzTZ6zqDmjefBLYWQ/KgC4T7AryqkM2ZZgS64lkCwq', NULL, '2020-04-09 00:58:18', NULL, NULL, '34543545', NULL, 'male', '2020-04-01', '0112564206', 394, 399, NULL, NULL, NULL, 4, 0, 1, '3785085', 'Shantha Perera ', 1, 1, NULL, NULL, NULL),
(147, 'Danushka', 'Lakmal', 'yasi123', 'danushkalakml2uu@gmail.com', '940721105V', '0711234567', 'ad1, ad2', NULL, NULL, '$2y$10$7ovQWMlAXWEMb1iCjgeQ9u.dNMf1UmbTS/IdLVCr0H4rXwsdliJhW', 'fwRHxw5zzu7vUgzxZGzXb6VmHN62uZlZiZ9AlrhWem96q1c5U98wKcWXuU3e', '2020-04-09 02:53:28', NULL, NULL, NULL, 'MEDIX/HA/1599295761', 'male', '2020-04-01', '0112564247', 399, 402, 493, 687, NULL, 6, 0, 1, NULL, 'Shantha Perera ', 1, 1, NULL, NULL, NULL),
(148, 'mangala', 'kumari', 'mangala', 'jbupashantha@gmail.com', '842052107v', '0701779177', 'No.03, Near Court, New Town, Embilipitiya.', NULL, NULL, '$2y$10$IgykxzGUUhZYaeFebdooYuF5Gb7ZwiHGLLYBigB1itByPdMDz1rba', NULL, '2020-04-09 03:15:00', '2020-04-11 03:17:33', NULL, NULL, 'MEDIX/HA/1766118796', 'male', '1984-07-24', NULL, 399, 402, 495, 688, NULL, 6, 0, 1, NULL, 'Shantha Perera ', 1, 1, 'Shantha Perera ', '1', 1),
(149, 'Director', 'Embilipitiya', 'samantha', 'embhospital@gmail.com', '222222222v', '0707905606', 'District Genaral Hospital, Embilipituya.', NULL, NULL, '$2y$10$kv8nihLzrvEsr75HNVTTg.rDkzLt2i57WbOES/iOBr08cHGDvUL1O', NULL, '2020-04-12 02:14:00', NULL, NULL, NULL, 'MEDIX/HA/2257509967', 'female', '2020-01-01', '0472230261', 399, 402, 495, 688, NULL, 6, 0, 1, NULL, 'Shantha Perera ', 1, 1, NULL, NULL, NULL),
(150, 'test', 'departmentagent', 'testdepuser', 'yasirukulinda7878898989@gmail.com', '33434350454080', '07540777899', 'test, test', '1298346205.png', NULL, '$2y$10$n2A4P7xoRm77I15xswK8w./cU4bUobuJeidTRyfBvJXdY0LugEBHS', NULL, '2020-04-13 05:13:04', '2020-04-19 02:11:11', NULL, 'nopsnumber', 'MEDIX/DA/553420230', 'male', '2020-04-10', '767676767678', 399, 402, 493, 687, 1290, 7, 0, 1, 'noempid', 'Danushka Lakmal', 147, 6, 'Danushka Lakmal', '147', 6),
(151, 'a', 'b', 'pramudiravi', 'pramudiravi@gmail.com', '2222333v', '1111111', 'dgh emb', NULL, NULL, '$2y$10$hIiCoNic9/EKh68GVCisweX8ZGJYt94dpfdzTt.fczkYQMa2Ah5wK', NULL, '2020-04-14 01:24:47', NULL, NULL, 'nopsnumber', 'MEDIX/DA/3433865708', 'male', '1981-01-07', '1113344', 399, 402, 495, 688, 1288, 7, 1, 1, 'noempid', 'Director Embilipitiya', 149, 6, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inRecycle` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `covid_assessd_patients`
--

CREATE TABLE `covid_assessd_patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_no` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `patientreport` text COLLATE utf8mb4_unicode_ci,
  `patient_state_onhospital` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_results` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_result_decission` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_from` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_province` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_district` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_hospitaltype` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_hospital` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_type` int(5) NOT NULL DEFAULT '0',
  `patient_department` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patent_state_a_a_d` text COLLATE utf8mb4_unicode_ci,
  `interviewed_at` date DEFAULT NULL,
  `inRecycle` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `covid_assessd_patients`
--

INSERT INTO `covid_assessd_patients` (`id`, `patient_no`, `name`, `nic`, `address`, `phone`, `dob`, `gender`, `profile_img`, `patientreport`, `patient_state_onhospital`, `patient_results`, `patient_result_decission`, `details_from`, `interview_status`, `patient_province`, `patient_district`, `patient_hospitaltype`, `patient_hospital`, `reg_type`, `patient_department`, `patent_state_a_a_d`, `interviewed_at`, `inRecycle`, `created_at`, `updated_at`) VALUES
(21, 'MEDIX/CAP/1798353788', 'Jayawardhanage Buddhika Upashantha', '842052106v', 'No.03, Near Court, New Town, Embilipitiya.', '0772991827', '1984-07-23', 'male', 'patient_avatar.jpg', NULL, '1', '100', 'covid19positive', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-08', 0, '2020-04-07 22:50:43', '2020-04-26 03:14:02'),
(25, 'MEDIX/CAP/236486217', 'Dammika arunashantha', '901530564v', 'No.16c, Dadayamkanda. Omalpe', '0770604515', '1990-06-01', 'male', 'patient_avatar.jpg', NULL, '1', '52.94117647058824', 'selfquarantine', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-09', 0, '2020-04-09 00:39:29', NULL),
(26, 'MEDIX/CAP/3515091593', 'test test', '68798989899090', 'test, test', '0754077899', '2020-04-10', 'male', 'patient_avatar.jpg', NULL, '1', '70.58823529411765', 'covid19positive', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-09', 0, '2020-04-09 02:05:51', NULL),
(27, 'MEDIX/CAP/3380686370', 'Dammika arunashantha', '901530564v', 'No.03, Near Court, New Town, Embilipitiya.', '0770604515', '1984-07-23', 'male', 'patient_avatar.jpg', NULL, '1', '41.17647058823529', 'OPD', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-09', 0, '2020-04-09 03:29:34', NULL),
(28, 'MEDIX/CAP/1346836732', 'dammika', '842052107v', 'no.3 embilipitiya', '0772991827', '1984-02-04', 'male', 'patient_avatar.jpg', NULL, '1', '100', 'covid19positive', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-09', 0, '2020-04-09 03:49:31', NULL),
(29, 'MEDIX/CAP/3738509374', 'Buddhika Upashantha', '901530564v', 'No.03, Near Court, New Town, Embilipitiya.', '0770604515', '1984-07-24', 'male', 'patient_avatar.jpg', NULL, '1', '41.17647058823529', 'OPD', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-09', 0, '2020-04-09 04:54:31', NULL),
(33, 'MEDIX/CAP/336894555', 'saranga', '1512566125545v', 'fjrhfjk.njghrhr.mewjj', '055556626666', '2015-04-05', 'male', 'patient_avatar.jpg', NULL, '1', '64.70588235294117', 'covid19positive', '1', '1', '399', '402', '495', '688', 0, '1288', NULL, '2020-04-12', 1, '2020-04-12 09:48:10', '2020-04-17 12:51:49'),
(34, 'MEDIX/CAP/1748814893', 'Asanka', '254555121455v', 'jhyhn, jgjttj, kjtetj', '014544545665', '1958-01-02', 'female', 'patient_avatar.jpg', NULL, '1', '47.05882352941176', 'OPD', '1', '1', '399', '402', '495', '688', 0, '1288', NULL, '2020-04-12', 0, '2020-04-12 09:52:15', NULL),
(35, 'MEDIX/CAP/789367435', 'J.D.Shantha', '901256833V', '16A, embilipitiya, New town.', '0715872569', '1971-10-04', 'male', 'patient_avatar.jpg', NULL, '1', '64.70588235294117', 'covid19positive', '1', '1', '399', '402', '495', '688', 0, '1288', NULL, '2020-04-14', 0, '2020-04-14 07:26:41', NULL),
(36, 'MEDIX/CAP/2211926593', 'Mamgala', '849256301V', '16A, embilipitiya, New town.', '0772211938', '1984-07-23', 'male', 'patient_avatar.jpg', NULL, '1', '47.05882352941176', 'OPD', '1', '1', '399', '402', '495', '688', 0, '1288', NULL, '2020-04-14', 0, '2020-04-14 07:32:54', NULL),
(37, 'MEDIX/CAP/1724793461', 'test test', '65676767678687878', 'test, test', '0754077569', '2020-04-16', 'male', '1615096305.png', NULL, '1', '41.17647058823529', 'OPD', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-19', 0, '2020-04-19 02:34:52', NULL),
(38, 'MEDIX/CAP/2575554858', 'new', '89483989489', 'test, test', '0754077569', '2020-04-15', 'male', '1255357424.png', NULL, '1', '47.05882352941176', 'OPD', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-19', 0, '2020-04-19 02:53:02', NULL),
(67, 'MEDIX/CAP/630414782', 'test test', '6567676767868899', 'test, test', '07540775689', '2020-04-21', 'male', 'patient_avatar.jpg', NULL, '1', '35.294117647058826', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-20', 0, '2020-04-20 00:30:43', NULL),
(68, 'MEDIX/CAP/630414782', 'test test', '6567676767868899', 'test, test', '07540775689', '2020-04-21', 'male', 'patient_avatar.jpg', NULL, '1', '35.294117647058826', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-20', 0, '2020-04-20 00:32:35', NULL),
(69, 'MEDIX/CAP/630414782', 'test test', '6567676767868899', 'test, test', '07540775689', '2020-04-21', 'male', 'patient_avatar.jpg', NULL, '1', '35.294117647058826', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-20', 0, '2020-04-20 00:43:03', NULL),
(70, 'MEDIX/CAP/630414782', 'test test', '6567676767868899', 'test, test', '07540775689', '2020-04-21', 'male', 'patient_avatar.jpg', NULL, '1', '35.294117647058826', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-20', 0, '2020-04-20 00:43:30', NULL),
(71, 'MEDIX/CAP/630414782', 'test test', '6567676767868899', 'test, test', '07540775689', '2020-04-21', 'male', 'patient_avatar.jpg', NULL, '1', '35.294117647058826', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-20', 0, '2020-04-20 00:43:54', NULL),
(72, 'MEDIX/CAP/630414782', 'test test', '6567676767868899', 'test, test', '07540775689', '2020-04-21', 'male', 'patient_avatar.jpg', NULL, '1', '35.294117647058826', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-20', 0, '2020-04-20 00:44:24', NULL),
(73, 'MEDIX/CAP/630414782', 'test test', '6567676767868899', 'test, test', '07540775689', '2020-04-21', 'male', 'patient_avatar.jpg', NULL, '1', '35.294117647058826', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-20', 0, '2020-04-20 00:48:12', NULL),
(150, 'MEDIX/CAP/1090564677', 'test test', '961143934v', 'test, test', '0754077569', '2020-04-06', 'male', 'patient_avatar.jpg', 'patient-2020-04-21-05-covid-assessd-.pdf', '1', '31', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-20 23:21:38', NULL),
(151, 'MEDIX/CAP/1090564677', 'test test', '961143934v', 'test, test', '0754077569', '2020-04-06', 'male', 'patient_avatar.jpg', 'patient-2020-04-21-05-covid-assessd-.pdf', '1', '31', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-20 23:21:46', NULL),
(152, 'MEDIX/CAP/1090564677', 'test test', '961143934v', 'test, test', '0754077569', '2020-04-06', 'male', 'patient_avatar.jpg', 'patient-2020-04-21-05-covid-assessd-.pdf', '1', '31', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-20 23:22:37', NULL),
(153, 'MEDIX/CAP/1090564677', 'test test', '961143934v', 'test, test', '0754077569', '2020-04-06', 'male', 'patient_avatar.jpg', 'patient-2020-04-21-05-covid-assessd-.pdf', '1', '31', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-20 23:23:23', NULL),
(157, 'MEDIX/CAP/2045647570', 'test test', '961143934v', 'test, test', '0754077569', '2020-04-14', 'male', 'patient_avatar.jpg', 'patient-2020-04-21-05-covid-assessd-.pdf', '1', '31', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-21 00:18:57', NULL),
(158, 'MEDIX/CAP/94196766', 'test test', '961143934v', 'test, test', '0754077569', '2020-04-14', 'male', 'patient_avatar.jpg', 'patient-2020-04-21-05-covid-assessd-.pdf', '1', '34', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-21 00:20:22', NULL),
(159, 'MEDIX/CAP/3865935936', 'test test', '961143934v', 'test, test', '0754077569', '2020-04-15', 'male', 'patient_avatar.jpg', 'patient-159-2020-04-21-05-covid-assessd-.pdf', '1', '55', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-21 00:26:26', NULL),
(160, 'MEDIX/CAP/2706403899', 'test test', '96114393489v', 'test, test', '0754077569', '2020-04-14', 'male', 'patient_avatar.jpg', 'patient-160-2020-04-21-06-covid-assessd-.pdf', '1', '62', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-21 00:29:49', NULL),
(161, 'MEDIX/CAP/771362452', 'test test', '961143934v', 'test, test', '0754077569', '2020-04-07', 'male', '247327641.png', 'patient-161-2020-04-21-06-covid-assessd-.pdf', '1', '55', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-21 00:33:52', NULL),
(163, 'MEDIX/CAP/4056150025', 'test test', '96114393489v', 'test, test', '0754077569', '2020-04-08', 'male', '737539484.png', 'patient-163-2020-04-21-06-covid-assessd-.pdf', '1', '34', 'OPD', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-21 00:53:03', NULL),
(164, 'MEDIX/CAP/2342906513', 'test test', '96114393489909v', 'test, test', '0754077569899', '2020-04-15', 'male', '67499320.png', 'patient-164-2020-04-21-06-covid-assessd-.pdf', '1', '76', 'covid19positive', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-21 00:58:57', NULL),
(166, 'MEDIX/CAP/3334631851', 'test test', '9611439346778v', 'test, test', '075407756967', '2020-04-06', 'female', '669121406.png', 'patient-166-2020-04-21-06-covid-assessd-.pdf', '1', '55', 'selfquarantine', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-21 01:07:35', NULL),
(167, 'MEDIX/CAP/3399006030', 'test test', '8687989898989', 'test, test', '0754077569789', '2020-04-22', 'male', '1081646194.png', 'patient-167-2020-04-21-06-covid-assessd-.pdf', '1', '55', 'selfquarantine', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-21 01:12:46', NULL),
(168, 'MEDIX/CAP/997403898', 'test test', '96114393456767v', 'test, test', '0754077569', '2020-04-15', 'male', '465982770.png', 'patient-168-2020-04-21-06-covid-assessd-.pdf', '1', '38', 'OPD', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-21 01:17:19', NULL),
(181, 'MEDIX/CAP/172842493', 'test test', '961143934789v', 'test, test', '0754077569', '2020-04-15', 'male', 'patient_avatar.jpg', 'patient-181-2020-04-21-07-covid-assessd-.pdf', '1', '76', 'covid19positive', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-21 02:15:02', NULL),
(182, 'MEDIX/CAP/3322484816', 'Dinesh Hopitigala', '901143934V', 'CIS WORLD, No. 16A, Watapotha Road, Nivitigala.', '772666779', '2000-01-01', 'male', 'patient_avatar.jpg', 'patient-182-2020-04-21-09-covid-assessd-.pdf', '1', '71', 'covid19positive', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-21', 0, '2020-04-21 04:01:18', NULL),
(183, 'MEDIX/CAP/4192872837', 'test test', '961143934v', 'test, test', '0754077569', '2020-04-14', 'male', 'patient_avatar.jpg', 'patient-183-2020-04-21-03-covid-assessd-.pdf', '1', '93', 'covid19positive', '1', '1', '399', '402', '493', '687', 0, '1290', NULL, '2020-04-21', 0, '2020-04-21 10:03:14', NULL),
(185, 'MEDIX/CAP/3168334620', 'test test', '9611439345678', 'test, test', '0754077569', '2020-04-12', 'male', 'patient_avatar.jpg', 'patient-185-2020-04-22-04-covid-assessd-.pdf', '1', '38', 'OPD', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-22', 0, '2020-04-21 23:09:43', NULL),
(194, 'MEDIX/CAP/3628266468', 'aaa', '2222333v', '56, Beechwood Avenue, Cornhill', '+447405344868', '2020-11-11', 'male', 'patient_avatar.jpg', 'patient-194-2020-04-23-01-covid-assessd-.pdf', '1', '100', 'covid19positive', '1', '1', '399', '402', '495', '688', 0, '1288', NULL, '2020-04-23', 0, '2020-04-23 08:12:54', NULL),
(195, 'MEDIX/CAP/2320617416', 'dammika', '842052107v', 'nhb', '0772991827', '2017-12-22', 'male', 'patient_avatar.jpg', 'patient-195-2020-04-23-01-covid-assessd-.pdf', '1', '17', 'normal', '1', '1', '399', '402', '495', '683', 0, '1288', NULL, '2020-04-23', 0, '2020-04-23 08:13:20', NULL),
(202, 'MEDIX/CAP/1248806784', 'yasiru', '961143934v', NULL, '0754077569', NULL, NULL, 'patient_avatar.jpg', 'patient-202-2020-04-23-07-covid-assessd-.pdf', NULL, '0', 'normal', NULL, '1', NULL, NULL, NULL, '687', 1, NULL, NULL, '2020-04-23', 0, '2020-04-23 13:32:32', NULL),
(203, 'MEDIX/CAP/904211520', 'yasiru', '6567676767868', NULL, '0754077569', NULL, NULL, 'patient_avatar.jpg', 'patient-203-2020-04-23-07-covid-assessd-.pdf', NULL, '0', 'normal', NULL, '1', NULL, NULL, NULL, '687', 1, NULL, NULL, '2020-04-23', 0, '2020-04-23 14:00:54', NULL),
(204, 'MEDIX/CAP/2416387600', 'test test', '961143934v', NULL, '0754077569', NULL, NULL, 'patient_avatar.jpg', 'patient-204-2020-04-24-01-covid-assessd-.pdf', NULL, '0', 'normal', NULL, '1', NULL, NULL, NULL, '687', 1, NULL, NULL, '2020-04-24', 0, '2020-04-23 20:20:03', NULL),
(208, 'MEDIX/CAP/3255613442', 'yasiru', '961143934v', NULL, '0754077569', NULL, NULL, 'patient_avatar.jpg', 'patient-208-2020-04-24-02-covid-assessd-.pdf', NULL, '0', 'normal', NULL, '1', NULL, NULL, NULL, '687', 1, NULL, NULL, '2020-04-24', 0, '2020-04-23 21:07:18', NULL),
(209, 'MEDIX/CAP/2289887430', 'yasiru', '961143934v', NULL, '0754077569', NULL, NULL, 'patient_avatar.jpg', 'patient-209-2020-04-24-02-covid-assessd-.pdf', NULL, '0', 'normal', NULL, '1', NULL, NULL, NULL, '687', 1, NULL, NULL, '2020-04-24', 0, '2020-04-23 21:20:32', NULL),
(210, 'MEDIX/CAP/32445541', 'yasiru', '961143934v', NULL, '0754077569', NULL, NULL, 'patient_avatar.jpg', 'patient-210-2020-04-24-03-covid-assessd-.pdf', NULL, '0', 'normal', NULL, '1', NULL, NULL, NULL, '687', 1, NULL, NULL, '2020-04-24', 0, '2020-04-23 21:40:42', NULL),
(222, 'MEDIX/CAP/81959605', 'yasiru', '961143934v', NULL, '0754077569', NULL, NULL, 'patient_avatar.jpg', 'patient-222-2020-04-24-05-covid-assessd-.pdf', NULL, '45', 'OPD', NULL, '1', NULL, NULL, NULL, '687', 1, NULL, NULL, '2020-04-24', 0, '2020-04-23 23:48:28', NULL),
(371, 'MEDIX/CAP/4117597949', 'gggg', '12235542336', NULL, '0812365478', NULL, NULL, 'patient_avatar.jpg', NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, '695', 1, NULL, NULL, '2020-04-28', 0, '2020-04-27 22:51:28', NULL),
(372, 'MEDIX/CAP/4117597949', 'gggg', '12235542336', NULL, '0812365478', NULL, NULL, 'patient_avatar.jpg', NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, '695', 1, NULL, NULL, '2020-04-28', 0, '2020-04-27 22:59:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `covid_decession_factors`
--

CREATE TABLE `covid_decession_factors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `decission_factor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` text COLLATE utf8mb4_unicode_ci,
  `inRecycle` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `covid_decession_factors`
--

INSERT INTO `covid_decession_factors` (`id`, `decission_factor`, `percentage`, `inRecycle`, `created_at`, `updated_at`) VALUES
(1, 'covid19positive', '60', 0, NULL, '2020-04-20 10:19:23'),
(2, 'normal', '30', 0, NULL, '2020-04-20 10:19:39'),
(3, 'Self quarantine', '50', 0, NULL, '2020-04-20 10:19:53'),
(4, 'OPD', '40', 0, NULL, '2020-04-20 10:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `covid_questions`
--

CREATE TABLE `covid_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_si` text COLLATE utf8mb4_unicode_ci,
  `question_en` text COLLATE utf8mb4_unicode_ci,
  `question_ta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inRecycle` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `covid_questions`
--

INSERT INTO `covid_questions` (`id`, `question_si`, `question_en`, `question_ta`, `marks`, `inRecycle`, `created_at`, `updated_at`) VALUES
(2, 'ඔබට උණ තිබේද?', 'Do you have a fever?', 'உங்களுக்கு காய்ச்சல் இருக்கிறதா?', NULL, 1, '2020-04-07 22:15:53', NULL),
(3, 'ඔබට කැස්ස තිබේද?', 'Do you have a cough?', 'உங்களுக்கு இருமல் இருக்கிறதா?', '10', 0, '2020-04-07 22:16:05', '2020-04-19 08:21:06'),
(4, 'ඔබට උගුරේ වේදනාවක් තිබේද?', 'Do you have a sore throat?', 'உங்களுக்கு தொண்டை புண் இருக்கிறதா?', '10', 0, '2020-04-07 22:16:17', '2020-04-19 08:21:16'),
(5, 'ඔබට ශරීරයේ රිදීම් හා වේදනා තිබේද?', 'Do you have body aches and pains?', 'உங்களுக்கு உடல் வலிகள் மற்றும் வலிகள் உள்ளதா?', '5', 0, '2020-04-07 22:16:33', '2020-04-19 08:21:28'),
(6, 'ඔබට හුස්ම ගැනීමේ අපහසුතා තිබේද?', 'Do you have trouble breathing?', 'உங்களுக்கு சுவாசிப்பதில் சிக்கல் இருக்கிறதா?', '10', 0, '2020-04-07 22:17:34', '2020-04-19 08:21:39'),
(7, 'ඔබට පපුව තද ගතිය වේදනාව තිබේද?', 'Do you have chest pains?', 'உங்களுக்கு மார்பு வலி இருக்கிறதா?', '10', 0, '2020-04-07 22:19:03', '2020-04-19 08:21:52'),
(8, 'ඔබට හිසේ කැක්කුම තිබේද?', 'Do you have headaches?', 'உங்களுக்கு தலைவலி இருக்கிறதா?', '5', 0, '2020-04-07 22:19:52', '2020-04-19 08:22:05'),
(9, 'ඔබට වමනය / ඔක්කාරය තිබේද?', 'Do you have vomiting / nausea?', 'உங்களுக்கு வாந்தி / குமட்டல் இருக்கிறதா?', '5', 0, '2020-04-07 22:20:23', '2020-04-19 08:22:20'),
(10, 'ඔබට පාචනය / අජීර්ණය තිබේද?', 'Do you have diarrhea / heartburn?', 'உங்களுக்கு வயிற்றுப்போக்கு / நெஞ்செரிச்சல் இருக்கிறதா?', '10', 0, '2020-04-07 22:20:55', '2020-04-19 08:22:32'),
(11, 'ඔබට ගඳ සුවඳ දැනීමේ වෙනසක් තිබේද?', 'Do you have a difference in smell?', 'உங்களுக்கு வாசனையில் வித்தியாசம் இருக்கிறதா?', '8', 0, '2020-04-07 22:21:24', '2020-04-19 08:22:59'),
(12, 'ඔබට රස දැනීමේ අඩුවක්  තිබේද?', 'Do you have a lack of taste?', 'உங்களுக்கு சுவை குறைவு இருக்கிறதா?', '8', 0, '2020-04-07 22:21:59', '2020-04-19 08:23:14'),
(13, 'ඔබගේ සමීපතමයකු ඉහත රෝග ලක්ෂණ පෙන්නුම් කරයිද?', 'Does someone close to you show the above symptoms?', 'உங்களுக்கு நெருக்கமான யாராவது மேற்கண்ட அறிகுறிகளைக் காட்டுகிறார்களா?', '10', 0, '2020-04-07 22:22:28', '2020-04-19 08:23:25'),
(14, 'ඔබේ සමීපතමයකු නිරෝධායනය වී තිබේද?', 'Has one of your close friend been quarantined?', 'உங்கள் நெருங்கிய நண்பர் ஒருவர் தனிமைப்படுத்தப்பட்டாரா?', '10', 0, '2020-04-07 22:23:03', '2020-04-19 08:23:36'),
(15, 'ඔබ කොරෝනා රෝගය තහවුරු කල හෝ සැක කරන අයෙකු සමඟ ඇසුරක් පවත්වා තිබේද?', 'Have you had a relationship with someone who confirmed or suspected corona virus?', 'கொரோனா வைரஸை உறுதிப்படுத்திய அல்லது சந்தேகித்த ஒருவருடன் நீங்கள் உறவு வைத்திருக்கிறீர்களா?', '10', 0, '2020-04-07 22:24:01', '2020-04-19 08:23:51'),
(16, 'ඔබ විදේශිකයකු හෝ විදේශයක සිට පැමිණි අයෙකු සමඟ ඇසුරක් පවත්වා තිබේද?', 'Have you had a relationship with a foreigner or a person who came from a foreign country?', 'நீங்கள் ஒரு வெளிநாட்டவர் அல்லது ஒரு வெளிநாட்டிலிருந்து வந்த ஒரு நபருடன் உறவு வைத்திருக்கிறீர்களா?', '10', 0, '2020-04-07 22:24:30', '2020-04-19 08:24:04'),
(17, 'ඔබ මෑතකදී විදේශයක සංචාරය කලෙහිද?', 'Have you traveled abroad recently?', 'நீங்கள் சமீபத்தில் வெளிநாடு சென்றிருக்கிறீர்களா?', '10', 0, '2020-04-07 22:25:01', '2020-04-19 08:24:18'),
(18, 'ඔබ මෑතකදී ලංකාව තුල  සංචාරය කලෙහිද?', 'Have you visited Sri Lanka recently?', 'நீங்கள் சமீபத்தில் இலங்கைக்கு விஜயம் செய்தீர்களா?', '5', 0, '2020-04-07 22:25:32', '2020-04-19 08:24:28'),
(19, 'ඔබ සංචාරක ශේෂ්ත්‍රයට අදාල රැකියාවක් කරන්නේද?', 'Do you work in tourism?', 'நீங்கள் சுற்றுலாவில் வேலை செய்கிறீர்களா?', '10', 0, '2020-04-07 22:26:10', '2020-04-19 08:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `depos`
--

CREATE TABLE `depos` (
  `id` int(11) NOT NULL,
  `placename` varchar(100) DEFAULT NULL,
  `v_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depos`
--

INSERT INTO `depos` (`id`, `placename`, `v_count`, `created_at`, `updated_at`) VALUES
(1275, 'Area Electrical  Engineer  Katugastota', 1, '2019-11-14 18:30:00', NULL),
(1276, 'Area Electrical Engineer Dambulla', 0, '2019-11-14 18:30:00', NULL),
(1277, 'Area Electrical  Engineer   Kekirawa', 0, '2019-11-14 18:30:00', NULL),
(1278, 'Area Electrical  Engineer  Kurunegala', 0, '2019-11-14 18:30:00', NULL),
(1279, 'Nikawaratiya Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1280, 'Pothuhara  Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1281, 'Gokaralla Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1282, 'Hakmana  Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1283, 'Beliatha Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1284, 'Tangalle Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1285, 'Chief Engineer (Randenigala,Rantambe Power Station)', 2, '2019-11-14 18:30:00', NULL),
(1286, 'Electrical Engineer - Udawalawe Power Station', 0, '2019-11-14 18:30:00', NULL),
(1287, 'Project Director (Uma Oya Hydro Power Project)', 0, '2019-11-14 18:30:00', NULL),
(1288, 'Chief Engineer -  Samanalawewa  Power Station', 2, '2019-11-14 18:30:00', NULL),
(1289, 'Ja-Ela Maintenance Unit', 1, '2019-11-14 18:30:00', NULL),
(1290, 'Area Electrical  Engineer  Gampaha', 0, '2019-11-14 18:30:00', NULL),
(1291, 'Area Electrical  Engineer  Ruwanwella', 1, '2019-11-14 18:30:00', NULL),
(1292, 'Area Electrical  Engineer  Kegalla', 0, '2019-11-14 18:30:00', NULL),
(1293, 'Area Electrical  Engineer  Veyangoda', 0, '2019-11-14 18:30:00', NULL),
(1294, 'Electrical  Engineer  - Canyon Power Station', 2, '2019-11-14 18:30:00', NULL),
(1295, 'Electrical  Engineer  - Samanala Power Station', 2, '2019-11-14 18:30:00', NULL),
(1296, 'Chief Engineer  - Laxapana Power Station', 9, '2019-11-14 18:30:00', NULL),
(1297, 'Project Director (Broadland Hydropower Project)', 0, '2019-11-14 18:30:00', NULL),
(1298, 'Chief Engineer  ( Sapugaskanda Power Station )', 0, '2019-11-14 18:30:00', NULL),
(1299, 'Chief Engineer (Operation & Maintenance) - Galle', 4, '2019-11-14 18:30:00', NULL),
(1300, 'Chief Engineer (Energy Management) - Southern Province', 0, '2019-11-14 18:30:00', NULL),
(1301, 'Deputy General Manager (Southern  Province)', 0, '2019-11-14 18:30:00', NULL),
(1302, 'Colombo West - Depot II', 2, '2019-11-14 18:30:00', NULL),
(1303, 'Area Electrical  Engineer  Matara', 0, '2019-11-14 18:30:00', NULL),
(1304, 'Akkaraipaththu  Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1305, 'Manager (Investigation)', 0, '2019-11-14 18:30:00', NULL),
(1306, 'Electrical Engineer (Planning) - EP', 0, '2019-11-14 18:30:00', NULL),
(1307, 'Area Electrical  Engineer   Ampara', 2, '2019-11-14 18:30:00', NULL),
(1308, 'Deputy General Manager (Project & Heavy Maint.) - R 3', 2, '2019-11-14 18:30:00', NULL),
(1309, 'Chief Engineer (Power Plant)- Assets Mgt.  & Centralised Services', 3, '2019-11-14 18:30:00', NULL),
(1310, 'Area Electrical  Engineer Ginigathhena', 1, '2019-11-14 18:30:00', NULL),
(1311, 'Area Electrical  Engineer  Nawalapitiya', 2, '2019-11-14 18:30:00', NULL),
(1312, 'Area Electrical  Engineer  Peradeniya', 0, '2019-11-14 18:30:00', NULL),
(1313, 'Horana  Consumer Service Centre', 2, '2019-11-14 18:30:00', NULL),
(1314, 'Chief  Engineer  (Construction) - WPS II', 3, '2019-11-14 18:30:00', NULL),
(1315, 'Area Electrical  Engineer  Kalutara', 0, '2019-11-14 18:30:00', NULL),
(1316, 'Area Electrical  Engineer  Bandaragama', 1, '2019-11-14 18:30:00', NULL),
(1317, 'Cinnamon Gardens', 1, '2019-11-14 18:30:00', NULL),
(1318, 'Area Electrical  Engineer  Ratnapura', 0, '2019-11-14 18:30:00', NULL),
(1319, 'Kuruwita Consumer Service Centre', 3, '2019-11-14 18:30:00', NULL),
(1320, 'Area Electrical  Engineer  Ratnapura', 0, '2019-11-14 18:30:00', NULL),
(1321, 'Electrical  Engineer  - Wimalasurendra Power Station', 2, '2019-11-14 18:30:00', NULL),
(1322, 'Colombo South  Depot II', 2, '2019-11-14 18:30:00', NULL),
(1323, 'Area Electrical Engineer    Horana', 1, '2019-11-14 18:30:00', NULL),
(1324, 'Chief Engineer (PHM) - R1', 7, '2019-11-14 18:30:00', NULL),
(1325, 'Nawalapitiya  Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1326, 'Kuruduwatta Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1327, 'Gampola  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1328, 'Rathmalana Consumer Service Centre', 2, '2019-11-14 18:30:00', NULL),
(1329, 'Pannipitiya Consumer Service Centre', 3, '2019-11-14 18:30:00', NULL),
(1330, 'Electrical Engineer (Construction) - Colombo City', 1, '2019-11-14 18:30:00', NULL),
(1331, 'Cheif Engineer  (Operation) - Colombo City', 1, '2019-11-14 18:30:00', NULL),
(1332, 'Ratnapura Town  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1333, 'Chief  Engineer (Distribution & Maintenance) - WPS II', 2, '2019-11-14 18:30:00', NULL),
(1334, 'Chief Engineer   -  Kukuleganga Power Station', 2, '2019-11-14 18:30:00', NULL),
(1335, 'Electrical Engineer (Construction) - Trincomalee Site', 1, '2019-11-14 18:30:00', NULL),
(1336, 'Area Electrical  Engineer   Trincomalee', 0, '2019-11-14 18:30:00', NULL),
(1337, 'Trincomalee Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1338, 'Store Keeper (Provincial) - EP', 0, '2019-11-14 18:30:00', NULL),
(1339, 'Chief  Engineer  (Commercial) - WPS II', 1, '2019-11-14 18:30:00', NULL),
(1340, 'Thulhiriya Grid Substation', 0, '2019-11-14 18:30:00', NULL),
(1341, 'Rambukkana Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1342, 'Ampara Consumer Service Centre', 2, '2019-11-14 18:30:00', NULL),
(1343, 'Electrical Engineer (Construction) - Ampara Site', 0, '2019-11-14 18:30:00', NULL),
(1344, 'Ehaliyagoda  Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1345, 'Kiriella Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1346, 'Chief Engineer    Homagama', 1, '2019-11-14 18:30:00', NULL),
(1347, 'Hanwella Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1348, 'Padukka Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1349, 'Seethawaka Grid Substation', 0, '2019-11-14 18:30:00', NULL),
(1350, 'Kosgama Grid Substation', 0, '2019-11-14 18:30:00', NULL),
(1351, 'Rathnapura Grid Substation', 0, '2019-11-14 18:30:00', NULL),
(1352, 'Mallawapitiya Grid  Substation', 0, '2019-11-14 18:30:00', NULL),
(1353, 'Colombo North  - Depot I', 1, '2019-11-14 18:30:00', NULL),
(1354, 'Mawanella Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1355, 'Kegalla Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1356, 'Dippitiya Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1357, 'Deputy General Manager  (Communication) - Transmission', 2, '2019-11-14 18:30:00', NULL),
(1358, 'Chief Engineer (Sapugaskanda Power Station)', 9, '2019-11-14 18:30:00', NULL),
(1359, 'Electrical Engineer (Nilambe Power Station)', 3, '2019-11-14 18:30:00', NULL),
(1360, 'CE (Central Workshop & Garage)', 1, '2019-11-14 18:30:00', NULL),
(1361, 'Deputy General Manager (Project & Heavy Maint.) - R 4', 2, '2019-11-14 18:30:00', NULL),
(1362, 'Kalubowila Consumer Service Centre', 2, '2019-11-14 18:30:00', NULL),
(1363, 'Electrical Engineer (Government Installation)', 0, '2019-11-14 18:30:00', NULL),
(1364, 'Chief Engineer  (Kelanitissa Power Station)', 5, '2019-11-14 18:30:00', NULL),
(1365, 'Chief Engineer (Distribution & Maintenance) - WPS 1', 4, '2019-11-14 18:30:00', NULL),
(1366, 'Area Electrical  Engineer  Rathmalana', 1, '2019-11-14 18:30:00', NULL),
(1367, 'Electrical  Engineer   -   Inginiyagala Power Station', 2, '2019-11-14 18:30:00', NULL),
(1368, 'Kalumunai Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1369, 'Inginiyagala Consumer Service Centre', 2, '2019-11-14 18:30:00', NULL),
(1370, 'Ragama Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1371, 'Kirillawala   Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1372, 'Mawaramandiya  Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1373, 'Delgoda  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1374, 'Area Electrical  Engineer  Kundasale', 0, '2019-11-14 18:30:00', NULL),
(1375, 'Chief Engineer (Ukuwela Power Station)', 5, '2019-11-14 18:30:00', NULL),
(1376, 'Chief Engineer (Operation & Maintenance) - Anuradhapura', 3, '2019-11-14 18:30:00', NULL),
(1377, 'Chief Engineer (Protection Development) - Transmission Design and Envirnment', 0, '2019-11-14 18:30:00', NULL),
(1378, 'Deputy General Manager (Asset  Management - Thermal  Electrical)', 0, '2019-11-14 18:30:00', NULL),
(1379, 'Power Plant Manager (Lakvijaya Complex) - Gen', 15, '2019-11-14 18:30:00', NULL),
(1380, 'Old A\'pura Grid Substation', 2, '2019-11-14 18:30:00', NULL),
(1381, 'Anuradhapura City  Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1382, 'Mihintale Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1383, 'Chief Engineer (Distribution & Maintenance) - Southern Province', 2, '2019-11-14 18:30:00', NULL),
(1384, 'Electrical  Engineer (System Planing) - Southern Province', 0, '2019-11-14 18:30:00', NULL),
(1385, 'Weligama Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1386, 'Chief Engineer (Distribution Maintenance) - Sabaragamuwa Province', 5, '2019-11-14 18:30:00', NULL),
(1387, 'Area Electrical  Engineer Tangalle', 1, '2019-11-14 18:30:00', NULL),
(1388, 'Sooriyawewa  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1389, 'Welivita Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1390, 'Galle Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1391, 'High Tension Maintenance - Primary Sub Maintenance', 1, '2019-11-14 18:30:00', NULL),
(1392, 'Electrical  Engineer  (Meter Lab    R - 3)', 0, '2019-11-14 18:30:00', NULL),
(1393, 'Area Electrical Engineer  Avissawella', 3, '2019-11-14 18:30:00', NULL),
(1394, 'Kahawatta   Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1395, 'Opanayaka Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1396, 'Avissawella Consumer Service Centre', 2, '2019-11-14 18:30:00', NULL),
(1397, 'Homagama  Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1398, 'Mirigama Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1399, 'Elpitiya Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1400, 'Area Electrical Engineer Baddegama', 0, '2019-11-14 18:30:00', NULL),
(1401, 'Chief Engineer (Project & Heavy Maintenance) - Central Zone', 1, '2019-11-14 18:30:00', NULL),
(1402, 'Chief Engineer (Victoria Power Station)', 0, '2019-11-14 18:30:00', NULL),
(1403, 'Chief  Engineer (Distribution & Maintenance) - CP', 3, '2019-11-14 18:30:00', NULL),
(1404, 'Electrical  Engineer   - Bowatenna Power Station', 0, '2019-11-14 18:30:00', NULL),
(1405, 'Chief Engineer (Construction) - WPS 1', 2, '2019-11-14 18:30:00', NULL),
(1406, 'Dehiwala Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1407, 'Bolawatta   Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1408, 'Nittambuwa Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1409, 'CE (Barge Mounted Power Station)', 0, '2019-11-14 18:30:00', NULL),
(1410, 'Galgamuwa Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1411, 'Nochchiyagama Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1412, 'Chief Engnieer (Uthuru Janani Power Plant)', 0, '2019-11-14 18:30:00', NULL),
(1413, 'Chief Engineer (Kelanitissa Combined Cycle Power Station)', 4, '2019-11-14 18:30:00', NULL),
(1414, 'Kesbewa Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1415, 'Kuliyapitiya Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1416, 'Alawwa Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1417, 'Narammala Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1418, 'Boralasgamuwa Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1419, 'Rideegama Consumer Service Centre', 2, '2019-11-14 18:30:00', NULL),
(1420, 'Area Electrical  Engineer    Kandy  Municipal Limits', 1, '2019-11-14 18:30:00', NULL),
(1421, 'Chief Engineer (Distribution Maintenance-South) - CP', 0, '2019-11-14 18:30:00', NULL),
(1422, 'Electrical Engineer( Lifts ) - Assets Managemet & Centralised Services', 0, '2019-11-14 18:30:00', NULL),
(1423, 'Bandaragama Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1424, 'Chief Engineer (Construction) - Southern Province', 2, '2019-11-14 18:30:00', NULL),
(1425, 'Gonapeenuwela Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1426, 'Matara Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1427, 'Matara Grid Substation', 0, '2019-11-14 18:30:00', NULL),
(1428, 'Chief Engineer(Protection Development) - Tr', 1, '2019-11-14 18:30:00', NULL),
(1429, 'Habaraduwa Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1430, 'Chief Engineer (Construction) - Sabaragamuwa Province', 3, '2019-11-14 18:30:00', NULL),
(1431, 'Godakawela  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1432, 'Area Electrical  Engineer  Embilipitiya', 0, '2019-11-14 18:30:00', NULL),
(1433, 'Deraniyagala  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1434, 'Nivithigala Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1435, 'Chief Engineer (Distribution Maintenance) - WPN', 5, '2019-11-14 18:30:00', NULL),
(1436, 'Chief Engineer (Construction) - WPN', 1, '2019-11-14 18:30:00', NULL),
(1437, 'Area Electrical  Engineer  Divulapitiya', 0, '2019-11-14 18:30:00', NULL),
(1438, 'Hettipola Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1439, 'Madampe Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1440, 'Deputy General Manager (North - Western Province)', 0, '2019-11-14 18:30:00', NULL),
(1441, 'Chief Engineer (Operation Maintenance) - Colombo South', 4, '2019-11-14 18:30:00', NULL),
(1442, 'Nugawela  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1443, 'Wariyapola Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1444, 'Ratnapura Eastern  Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1445, 'Kiribathkumbura Grid Substation', 0, '2019-11-14 18:30:00', NULL),
(1446, 'Chief Engineer (Maintenance) - Colombo City', 0, '2019-11-14 18:30:00', NULL),
(1447, 'Area Electrical  Engineer  Kuliyapitiya', 0, '2019-11-14 18:30:00', NULL),
(1448, 'Electrical Engineer-  Hambantota Wind Power Station', 0, '2019-11-14 18:30:00', NULL),
(1449, 'Protection - Operation & Maintenance', 1, '2019-11-14 18:30:00', NULL),
(1450, 'Chief Engineer (Project & Heavy Maintenance) - West Zone', 4, '2019-11-14 18:30:00', NULL),
(1451, 'Hiripitiya Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1452, 'Area Electrical  Engineer   Kahawatta', 1, '2019-11-14 18:30:00', NULL),
(1453, 'Chief Engineer (Energy Management) - WPN', 2, '2019-11-14 18:30:00', NULL),
(1454, 'Katunayake   Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1455, 'Mathugama Grid Substation', 0, '2019-11-14 18:30:00', NULL),
(1456, 'Talangama Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1457, 'Chief Engineer  - Randenigala , Rantambe Power Station', 0, '2019-11-14 18:30:00', NULL),
(1458, 'Ampara Grid Substation', 0, '2019-11-14 18:30:00', NULL),
(1459, 'Akuressa Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1460, 'Akuressa Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1461, 'Akuressa Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1462, 'Chief Engineer (Upper Kotmale)', 4, '2019-11-14 18:30:00', NULL),
(1463, 'Chief Engineer   - Kotmale Power Station', 0, '2019-11-14 18:30:00', NULL),
(1464, 'AMU - Kekirawa', 1, '2019-11-14 18:30:00', NULL),
(1465, 'Chief Engineer (Distribution & Maintenance) - NWP', 2, '2019-11-14 18:30:00', NULL),
(1466, 'Thulhiriya   Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1467, 'Moranthota Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1468, 'Electrical  Engineer  (Meter Lab - R 4)', 3, '2019-11-14 18:30:00', NULL),
(1469, 'Electrical  Engineer  - Nilambe Power Station', 0, '2019-11-14 18:30:00', NULL),
(1470, 'Wattegama Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1471, 'Chief Engineer  - Ukuwela Power Station', 0, '2019-11-14 18:30:00', NULL),
(1472, 'Area Electrical Engineer Galagedara', 1, '2019-11-14 18:30:00', NULL),
(1473, 'Area Electrical  Engineer  Matale', 1, '2019-11-14 18:30:00', NULL),
(1474, 'Energy Management - CP', 1, '2019-11-14 18:30:00', NULL),
(1475, 'Rathmalana Grid Substation', 0, '2019-11-14 18:30:00', NULL),
(1476, 'Panadura Grid Substation', 0, '2019-11-14 18:30:00', NULL),
(1477, 'Area Electrical  Engineer  Kelaniya', 1, '2019-11-14 18:30:00', NULL),
(1478, 'Electrical Engineer (Meter Lab) - Kiribathgoda', 1, '2019-11-14 18:30:00', NULL),
(1479, 'Chief Engineer  ( Kelanitissa Combined Cycle Power Station )', 0, '2019-11-14 18:30:00', NULL),
(1480, 'Chief Engineer   - Laxapana Project', 0, '2019-11-14 18:30:00', NULL),
(1481, 'Deputy General Manager (Asset  Management  - Hydro Electrical)', 0, '2019-11-14 18:30:00', NULL),
(1482, 'Mahawa   Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1483, 'Project Director (Moragolla Hydro Power Project)', 0, '2019-11-14 18:30:00', NULL),
(1484, 'Akurana Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1485, 'Chief Engineer (Distribution Maintaince) - EP', 0, '2019-11-14 18:30:00', NULL),
(1486, 'Madawachchiya  Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1487, 'Badulla Area Maintenance unit', 1, '2019-11-14 18:30:00', NULL),
(1488, 'Electrical Engineer (Planning) - Uva Province', 0, '2019-11-14 18:30:00', NULL),
(1489, 'Bibile Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1490, 'Thanamalwila Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1491, 'Chief  Engineer  (Construction) - UVA', 2, '2019-11-14 18:30:00', NULL),
(1492, 'Hali - Ela Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1493, 'Store Keeper (Provincial Stores) - Uva', 0, '2019-11-14 18:30:00', NULL),
(1494, 'Chief Engineer (Kotmale Power Station)', 0, '2019-11-14 18:30:00', NULL),
(1495, 'Area Electrical Engineer Narammala', 1, '2019-11-14 18:30:00', NULL),
(1496, 'Giriulla Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1497, 'Pasyala  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1498, 'Giriulla Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1499, 'Welimada  Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1500, 'Embilipitiya Grid Substation', 0, '2019-11-14 18:30:00', NULL),
(1501, 'Hambantota Grid Substation', 1, '2019-11-14 18:30:00', NULL),
(1502, 'Kirindiwela Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1503, 'Chief Engineer (Commercial) - WPN', 1, '2019-11-14 18:30:00', NULL),
(1504, 'Arangala Malabe Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1505, 'Embilipitiya  Consumer Service Centre', 2, '2019-11-14 18:30:00', NULL),
(1506, 'Angunakolapelessa  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1507, 'Diyatalawa Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1508, 'Kurunegala City Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1509, 'EE (Energy Management) - WPS1', 2, '2019-11-14 18:30:00', NULL),
(1510, 'Area Electrical  Engineer  Negombo', 0, '2019-11-14 18:30:00', NULL),
(1511, 'Chief Engineer (Distribution & Maintenance) - NCP', 1, '2019-11-14 18:30:00', NULL),
(1512, 'Project Manager (C.E. & N.E.I - 220 kV Transmission Inf. Project - P3)', 3, '2019-11-14 18:30:00', NULL),
(1513, 'Parliamentry Complex Depot', 0, '2019-11-14 18:30:00', NULL),
(1514, 'Project Manager (C.E. & N.E.I - 132 kV Transmission Inf. Project - P2)', 1, '2019-11-14 18:30:00', NULL),
(1515, 'Wanduramba Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1516, 'Area Electrical  Engineer Galle', 0, '2019-11-14 18:30:00', NULL),
(1517, 'Area Electrical  Engineer  Ambalangoda', 1, '2019-11-14 18:30:00', NULL),
(1518, 'Balangoda  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1519, 'Electrical Engineer (Bowatenna Power Station)', 1, '2019-11-14 18:30:00', NULL),
(1520, 'Pallepola Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1521, 'Naula  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1522, 'Matale  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1523, 'Beruwala Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1524, 'Area Electrical  Engineer  Ehaliyagoda', 0, '2019-11-14 18:30:00', NULL),
(1525, 'Deputy General Manager (Laxapana Complex)', 1, '2019-11-14 18:30:00', NULL),
(1526, 'Chief  Engineer   - Colombo South', 0, '2019-11-14 18:30:00', NULL),
(1527, 'Chief Engineer  - Colombo West', 0, '2019-11-14 18:30:00', NULL),
(1528, 'Thawalatenna  Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1529, 'Dehiattakandiya  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1530, 'Project Manager (Green Power Dev. & Energy Eff. Imp Project-Tranche 1)', 1, '2019-11-14 18:30:00', NULL),
(1531, 'Mathugama  Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1532, 'Agalawatta Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1533, 'Kekirawa Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1534, 'Thambuththegama Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1535, 'Principal (Training Centre ) - Castlereagh', 1, '2019-11-14 18:30:00', NULL),
(1536, 'Chief Engineer (Operation Maintenance) - Colombo North', 1, '2019-11-14 18:30:00', NULL),
(1537, 'Mahiyanganaya Grid Substation', 1, '2019-11-14 18:30:00', NULL),
(1538, 'Rikillagaskada Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1539, 'Chief Engineer (Construction) - NCP', 1, '2019-11-14 18:30:00', NULL),
(1540, 'Uva Paranagama Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1541, 'Madampe Grid Substation', 0, '2019-11-14 18:30:00', NULL),
(1542, 'Bandarawela   Consumer Service Centre', 1, '2019-11-14 18:30:00', NULL),
(1543, 'Project Manager (New Kelani Bridge Project)', 1, '2019-11-14 18:30:00', NULL),
(1544, 'Deniyaya  Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1545, 'Area Electrical  Engineer   Minneriya', 0, '2019-11-14 18:30:00', NULL),
(1546, 'Manampitiya Consumer Service Centre', 0, '2019-11-14 18:30:00', NULL),
(1547, 'Chief Engineer (Construction) - CP', 1, '2019-11-14 18:30:00', NULL),
(1548, 'Store Keeper (Provincial Stores) - CP', 0, '2019-11-14 18:30:00', NULL),
(1549, 'Mallawapitiya Grid Substation', 1, '2019-11-14 18:30:00', NULL),
(1550, 'Pallekela Grid Substation', 1, '2019-11-14 18:30:00', NULL),
(1551, 'Area Electrical  Engineer  Badulla', 0, '2019-11-14 18:30:00', NULL),
(1552, 'Chief Engineer (Commercial) - Sabaragamuwa Province', 0, '2019-11-14 18:30:00', NULL),
(1553, 'PD (TL&SS)', 0, '2019-11-14 18:30:00', NULL),
(1554, 'Madolkelle CSC', 1, '2019-11-14 18:30:00', NULL),
(1555, 'Store Keeper  Opanayaka', 0, '2019-11-14 18:30:00', NULL),
(1556, 'Chief Engineer (Operation & Maintenance) - Kandy', 1, '2019-11-14 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'LINSMEN (special)', '2019-07-09 14:44:39', '2019-07-25 03:39:39'),
(2, 'LINSMEN', '2019-07-09 14:45:01', '2019-07-09 14:48:32'),
(3, 'ELECTRIC FITTER', '2019-07-09 14:45:23', '2019-07-09 14:49:01'),
(4, 'ARTIFICER', '2019-07-09 14:45:54', '2019-07-09 14:49:38'),
(5, 'STS (N2)', '2019-07-09 14:46:19', '2019-07-09 14:50:05'),
(6, 'TM (N4)', '2019-07-09 14:46:57', NULL),
(7, 'JTM (N5)', '2019-07-09 14:47:20', NULL),
(8, 'TJTM (N6)', '2019-07-09 14:47:58', NULL),
(9, 'President', '2019-07-26 08:25:17', NULL),
(10, 'Co-Secretary', '2019-07-26 08:25:36', NULL),
(11, 'Cheef Organizar', '2019-07-26 08:25:53', NULL),
(12, 'Treasurer', '2019-07-26 08:26:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `placename` varchar(100) DEFAULT NULL,
  `p_id` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `z_count` int(100) DEFAULT NULL,
  `div_count` int(100) DEFAULT NULL,
  `s_count` int(100) DEFAULT NULL,
  `t_count` int(100) DEFAULT NULL,
  `d_a_count` int(100) NOT NULL DEFAULT '0',
  `z_a_count` int(100) NOT NULL DEFAULT '0',
  `div_a_count` int(100) NOT NULL DEFAULT '0',
  `s_a_count` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `placename`, `p_id`, `created_at`, `updated_at`, `z_count`, `div_count`, `s_count`, `t_count`, `d_a_count`, `z_a_count`, `div_a_count`, `s_a_count`) VALUES
(398, 'Colombo District', 402, '2019-12-17 03:44:14', '2020-02-09 23:20:15', 5, 16, 0, 1, 0, 1, 0, 0),
(399, 'Ampara District', 394, '2019-12-17 03:44:27', '2020-02-09 23:20:38', 7, 5, 0, 0, 2, 1, 1, 0),
(400, 'Kandy District', 395, '2019-12-17 03:50:10', '2020-02-09 23:21:04', 4, 21, 0, 0, 0, 0, 0, 0),
(401, 'Kalutara District', 402, '2019-12-17 05:56:38', '2020-02-09 23:21:32', 4, 7, 0, 0, 0, 1, 0, 0),
(402, 'Rathnapura District', 399, '2019-12-18 23:16:04', '2020-02-09 23:22:01', 10, 15, 4, 4, 1, 2, 3, 3),
(403, 'Kurunegala Dictrict', 398, '2020-02-10 00:14:31', NULL, 3, 13, 0, NULL, 0, 0, 0, 0),
(404, 'Puttalama District', 398, '2020-02-10 00:15:14', NULL, 5, 6, 0, NULL, 0, 0, 0, 0),
(405, 'Anuradhapura  District', 396, '2020-02-10 00:15:51', NULL, 5, 19, 0, NULL, 0, 0, 0, 0),
(406, 'Polonnaruwa District', 396, '2020-02-10 00:16:25', NULL, 4, 4, 0, NULL, 0, 0, 0, 0),
(407, 'Galle District', 400, '2020-02-10 00:16:57', NULL, 4, 7, 0, NULL, 0, 0, 0, 0),
(408, 'Mathara District', 400, '2020-02-10 00:17:22', NULL, 4, 6, 0, NULL, 0, 0, 0, 0),
(409, 'Hambanthota District', 400, '2020-02-10 00:17:56', NULL, 2, 3, 0, NULL, 0, 0, 0, 0),
(410, 'Badulla District', 401, '2020-02-10 00:18:38', NULL, 4, 6, 0, NULL, 0, 0, 0, 0),
(411, 'Monaragala District', 401, '2020-02-10 00:19:07', NULL, 3, 5, 0, NULL, 0, 0, 0, 0),
(412, 'Kegall District', 399, '2020-02-10 00:19:47', NULL, 4, 10, 0, NULL, 0, 0, 0, 0),
(413, 'Gampaha District', 402, '2020-02-10 00:20:19', NULL, 5, 12, 0, NULL, 0, 0, 0, 0),
(414, 'Matale District', 395, '2020-02-10 00:20:48', NULL, 2, 2, 0, NULL, 0, 0, 0, 0),
(415, 'Nuwara - Eliya District', 395, '2020-02-10 00:21:22', NULL, 3, 4, 0, NULL, 0, 0, 0, 0),
(416, 'Trincomalee District', 394, '2020-02-10 00:22:04', NULL, 3, 5, 0, NULL, 0, 0, 0, 0),
(417, 'Batticaloa District', 394, '2020-02-10 00:22:50', NULL, 4, 9, 0, NULL, 0, 0, 0, 0),
(418, 'Jaffna District', 397, '2020-02-10 00:23:27', NULL, 3, 5, 0, NULL, 0, 0, 0, 0),
(419, 'Kilinochi District', 397, '2020-02-10 00:26:41', NULL, 2, 3, 0, NULL, 0, 0, 0, 0),
(420, 'Mullaitheevu District', 397, '2020-02-10 00:27:09', NULL, 3, 6, 0, NULL, 0, 0, 0, 0),
(421, 'Vavuniya District', 397, '2020-02-10 00:27:39', NULL, 2, 2, 0, NULL, 0, 0, 0, 0),
(422, 'Mannnar District', 397, '2020-02-10 00:28:06', NULL, 1, 1, 0, NULL, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(11) NOT NULL,
  `placename` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `p_id` int(10) DEFAULT NULL,
  `d_id` int(10) DEFAULT NULL,
  `z_id` int(10) DEFAULT NULL,
  `s_count` int(100) DEFAULT NULL,
  `t_count` int(100) DEFAULT NULL,
  `div_a_count` int(100) NOT NULL DEFAULT '0',
  `s_a_count` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `placename`, `created_at`, `updated_at`, `p_id`, `d_id`, `z_id`, `s_count`, `t_count`, `div_a_count`, `s_a_count`) VALUES
(687, 'Teaching Hospital Ratnapura', '2020-04-08 00:55:10', NULL, 399, 402, 493, 2, 1, 1, 1),
(688, 'District General Hospital Embilipitiya', '2020-04-08 00:56:48', NULL, 399, 402, 495, 2, 1, 2, 1),
(689, 'Base Hospital Type A - Dickoya', '2020-04-08 00:58:06', NULL, 399, 402, 496, 0, NULL, 0, 0),
(690, 'Base Hospital Type B - Pimbura', '2020-04-08 00:59:56', NULL, 399, 402, 497, 0, NULL, 0, 0),
(691, 'Base Hospital Type B - Kalawana', '2020-04-08 01:00:26', NULL, 399, 402, 497, 0, NULL, 0, 0),
(692, 'Base Hospital Type B - Balangoda', '2020-04-08 01:00:50', NULL, 399, 402, 497, 0, NULL, 0, 0),
(693, 'Base Hospital Type B - Kahawatta', '2020-04-08 01:01:20', NULL, 399, 402, 497, 0, NULL, 0, 0),
(694, 'Divisional Hospital Type A - Eheliyagoda', '2020-04-08 01:02:06', NULL, 399, 402, 498, 0, NULL, 0, 0),
(695, 'Divisional Hospital Type A - Kolonna', '2020-04-08 01:02:39', NULL, 399, 402, 498, 0, NULL, 0, 0),
(696, 'Divisional Hospital Type A - Rakwana', '2020-04-08 01:03:10', NULL, 399, 402, 498, 0, NULL, 0, 0),
(697, 'Divisional Hospital Type A - Godakawela', '2020-04-08 01:03:37', NULL, 399, 402, 498, 0, NULL, 0, 0),
(698, 'Divisional Hospital Type A - Kaltota', '2020-04-08 01:04:05', NULL, 399, 402, 498, 0, NULL, 0, 0),
(699, 'Divisional Hospital Type A - Nivithigala', '2020-04-08 01:04:32', NULL, 399, 402, 498, 0, NULL, 0, 0),
(700, 'Divisional Hospital Type A - Pallebedda', '2020-04-08 01:04:52', NULL, 399, 402, 498, 0, NULL, 0, 0),
(701, 'Divisional Hospital Type A - Kiriella', '2020-04-08 01:05:14', NULL, 399, 402, 498, 0, NULL, 0, 0),
(702, 'District General Hospital Kegalle', '2020-04-08 01:12:15', NULL, 399, 412, 503, 0, NULL, 0, 0),
(703, 'Base Hospital Type B - Karawanella', '2020-04-08 01:14:17', NULL, 399, 412, 504, 0, NULL, 0, 0),
(704, 'Base Hospital Type B - Mawanella', '2020-04-08 01:14:39', NULL, 399, 412, 504, 0, NULL, 0, 0),
(705, 'Base Hospital Type B - Warakapola', '2020-04-08 01:15:03', NULL, 399, 412, 504, 0, NULL, 0, 0),
(706, 'Divisional Hospital Type A - Aranayake', '2020-04-08 01:16:21', NULL, 399, 412, 505, 0, NULL, 0, 0),
(707, 'Divisional Hospital Type A - Deraniyagala', '2020-04-08 01:16:42', NULL, 399, 412, 505, 0, NULL, 0, 0),
(708, 'Divisional Hospital Type A - Kitulgala', '2020-04-08 01:17:08', NULL, 399, 412, 505, 0, NULL, 0, 0),
(709, 'Divisional Hospital Type A - Rambukkana', '2020-04-08 01:17:42', NULL, 399, 412, 505, 0, NULL, 0, 0),
(710, 'Divisional Hospital Type A - Undugoda', '2020-04-08 01:19:56', NULL, 399, 412, 505, 0, NULL, 0, 0),
(711, 'Divisional Hospital Type A - Hemmathaga', '2020-04-08 01:23:09', NULL, 399, 412, 505, 0, NULL, 0, 0),
(712, 'Base Hospital Type A - Akkaraipattu', '2020-04-08 01:42:45', NULL, 394, 399, 507, 0, NULL, 0, 0),
(713, 'Base Hospital Type A - Sammanturai', '2020-04-08 01:43:15', NULL, 394, 399, 507, 0, NULL, 0, 0),
(714, 'Base Hospital Type B - Dehiattakandya', '2020-04-08 01:43:48', NULL, 394, 399, 508, 0, NULL, 0, 0),
(715, 'Base Hospital Type B - Pottuvil', '2020-04-08 01:44:30', NULL, 394, 399, 508, 0, NULL, 0, 0),
(716, 'Base Hospital Type B - Nintavur', '2020-04-08 01:44:49', NULL, 394, 399, 508, 0, NULL, 0, 0),
(717, 'District General Hospital Trincomalee', '2020-04-08 02:06:45', NULL, 394, 416, 513, 0, NULL, 0, 0),
(718, 'Base Hospital Type A - Kanthalai', '2020-04-08 02:07:12', NULL, 394, 416, 514, 0, NULL, 0, 0),
(719, 'Base Hospital Type B - Kinniya', '2020-04-08 02:07:35', NULL, 394, 416, 515, 0, NULL, 0, 0),
(720, 'Base Hospital Type B - Muthur', '2020-04-08 02:08:01', NULL, 394, 416, 515, 0, NULL, 0, 0),
(721, 'Base Hospital Type B - Pulmoddai', '2020-04-08 02:08:38', NULL, 394, 416, 515, 0, NULL, 0, 0),
(722, 'Teaching Hospital Batticaloa', '2020-04-08 02:13:35', NULL, 394, 417, 516, 0, NULL, 0, 0),
(723, 'Base Hospital Type A - Kalawanchikudi', '2020-04-08 02:14:00', NULL, 394, 417, 517, 0, NULL, 0, 0),
(724, 'Base Hospital Type A - Kalmunai North', '2020-04-08 02:14:37', NULL, 394, 417, 517, 0, NULL, 0, 0),
(725, 'Base Hospital Type A - Kalmunai South (Asrof Memorial)', '2020-04-08 02:15:13', NULL, 394, 417, 517, 0, NULL, 0, 0),
(726, 'Base Hospital Type A - Valachchenai', '2020-04-08 02:15:45', NULL, 394, 417, 517, 0, NULL, 0, 0),
(727, 'Base Hospital Type B - Kattankudi', '2020-04-08 02:16:17', NULL, 394, 417, 518, 0, NULL, 0, 0),
(728, 'Base Hospital Type B - Eravur', '2020-04-08 02:16:48', NULL, 394, 417, 518, 0, NULL, 0, 0),
(729, 'Divisional Hospital Type A - Arayampathy', '2020-04-08 02:17:24', NULL, 394, 417, 519, 0, NULL, 0, 0),
(730, 'Divisional Hospital Type A - Periyakallar', '2020-04-08 02:17:50', NULL, 394, 417, 519, 0, NULL, 0, 0),
(731, 'Teaching Hospital Peradeniya', '2020-04-08 02:25:03', NULL, 395, 400, 520, 0, NULL, 0, 0),
(732, 'Teaching Hospital Kandy', '2020-04-08 02:25:51', NULL, 395, 400, 520, 0, NULL, 0, 0),
(733, 'District General Hospital Nawalapitiya', '2020-04-08 02:26:21', NULL, 395, 400, 521, 0, NULL, 0, 0),
(734, 'Base Hospital Type B - Teldeniya', '2020-04-08 02:26:58', NULL, 395, 400, 522, 0, NULL, 0, 0),
(735, 'Base Hospital Type B - Gampola', '2020-04-08 02:27:22', NULL, 395, 400, 522, 0, NULL, 0, 0),
(736, 'Divisional Hospital Type A - Akurana', '2020-04-08 02:32:01', NULL, 395, 400, 523, 0, NULL, 0, 0),
(737, 'Divisional Hospital Type A - Ankumbura', '2020-04-08 02:32:27', NULL, 395, 400, 523, 0, NULL, 0, 0),
(738, 'Divisional Hospital Type A - Deltota', '2020-04-08 02:32:52', NULL, 395, 400, 523, 0, NULL, 0, 0),
(739, 'Divisional Hospital Type A - Dolosgabe', '2020-04-08 02:33:16', NULL, 395, 400, 523, 0, NULL, 0, 0),
(740, 'Divisional Hospital Type A - Galadedara', '2020-04-08 02:33:41', NULL, 395, 400, 523, 0, NULL, 0, 0),
(741, 'Divisional Hospital Type A - Hasalake', '2020-04-08 02:34:05', NULL, 395, 400, 523, 0, NULL, 0, 0),
(742, 'Divisional Hospital Type A - Kadugannawa', '2020-04-08 02:34:33', NULL, 395, 400, 523, 0, NULL, 0, 0),
(743, 'Divisional Hospital Type A - Katugastota', '2020-04-08 02:34:59', NULL, 395, 400, 523, 0, NULL, 0, 0),
(744, 'Divisional Hospital Type A - Madulkele', '2020-04-08 02:35:21', NULL, 395, 400, 523, 0, NULL, 0, 0),
(745, 'Divisional Hospital Type A - Menikhinna', '2020-04-08 02:35:45', NULL, 395, 400, 523, 0, NULL, 0, 0),
(746, 'Divisional Hospital Type A - Pussellawa', '2020-04-08 02:36:09', NULL, 395, 400, 523, 0, NULL, 0, 0),
(747, 'Divisional Hospital Type A - Thittapajjila', '2020-04-08 02:36:33', NULL, 395, 400, 523, 0, NULL, 0, 0),
(748, 'Divisional Hospital Type A - Udadumbara', '2020-04-08 02:37:03', NULL, 395, 400, 523, 0, NULL, 0, 0),
(749, 'Divisional Hospital Type A - Wattegama', '2020-04-08 02:37:27', NULL, 395, 400, 523, 0, NULL, 0, 0),
(750, 'Divisional Hospital Type A - Mampitiya', '2020-04-08 02:37:51', NULL, 395, 400, 523, 0, NULL, 0, 0),
(751, 'Divisional Hospital Type A - Marassana', '2020-04-08 02:38:13', NULL, 395, 400, 523, 0, NULL, 0, 0),
(752, 'District General Hospital Matale', '2020-04-08 02:40:50', NULL, 395, 414, 524, 0, NULL, 0, 0),
(753, 'Base Hospital Type A - Dambulla', '2020-04-08 02:41:11', NULL, 395, 414, 525, 0, NULL, 0, 0),
(754, 'District General Hospital Nuwara Eliya', '2020-04-08 02:44:16', NULL, 395, 415, 526, 0, NULL, 0, 0),
(755, 'Base Hospital Type B - Rikillagaskada', '2020-04-08 02:44:42', NULL, 395, 415, 527, 0, NULL, 0, 0),
(756, 'Divisional Hospital Type A - Maskeliya', '2020-04-08 02:45:03', NULL, 395, 415, 528, 0, NULL, 0, 0),
(757, 'Divisional Hospital Type A - Walapane', '2020-04-08 02:45:36', NULL, 395, 415, 528, 0, NULL, 0, 0),
(758, 'Teaching Hospital Anuradhapura', '2020-04-08 02:51:46', NULL, 396, 405, 529, 0, NULL, 0, 0),
(759, 'Base Hospital Type A - Thambuttegama', '2020-04-08 02:52:22', NULL, 396, 405, 530, 0, NULL, 0, 0),
(760, 'Base Hospital Type B - Kabilithigollawa', '2020-04-08 02:52:55', NULL, 396, 405, 531, 0, NULL, 0, 0),
(761, 'Base Hospital Type B - Padaviya', '2020-04-08 02:53:20', NULL, 396, 405, 531, 0, NULL, 0, 0),
(762, 'Divisional Hospital Type A - Kekirawa', '2020-04-08 02:53:46', NULL, 396, 405, 532, 0, NULL, 0, 0),
(763, 'Divisional Hospital Type A - Medawachchiya', '2020-04-08 02:54:16', NULL, 396, 405, 532, 0, NULL, 0, 0),
(764, 'Divisional Hospital Type A - Nochchiyagama', '2020-04-08 02:55:26', NULL, 396, 405, 532, 0, NULL, 0, 0),
(765, 'Divisional Hospital Type A - Kahatagasdigiliya', '2020-04-08 02:55:56', NULL, 396, 405, 532, 0, NULL, 0, 0),
(766, 'Divisional Hospital Type B - Lahugala', '2020-04-08 02:56:24', NULL, 396, 405, 533, 0, NULL, 0, 0),
(767, 'Divisional Hospital Type B - Galenbindunuwewa', '2020-04-08 02:56:49', NULL, 396, 405, 533, 0, NULL, 0, 0),
(768, 'Divisional Hospital Type B - Galnewa', '2020-04-08 02:57:14', NULL, 396, 405, 533, 0, NULL, 0, 0),
(769, 'Divisional Hospital Type B - Horowpathana', '2020-04-08 02:57:39', NULL, 396, 405, 533, 0, NULL, 0, 0),
(770, 'Divisional Hospital Type B - Huruluwewa', '2020-04-08 02:58:02', NULL, 396, 405, 533, 0, NULL, 0, 0),
(771, 'Divisional Hospital Type B - Mihintale', '2020-04-08 02:58:28', NULL, 396, 405, 533, 0, NULL, 0, 0),
(772, 'Divisional Hospital Type B - Talawa', '2020-04-08 02:58:49', NULL, 396, 405, 533, 0, NULL, 0, 0),
(773, 'Divisional Hospital Type B - Tantirimale', '2020-04-08 02:59:11', NULL, 396, 405, 533, 0, NULL, 0, 0),
(774, 'Divisional Hospital Type B - Elyapattuwa', '2020-04-08 02:59:37', NULL, 396, 405, 533, 0, NULL, 0, 0),
(775, 'Divisional Hospital Type B - Eppawala', '2020-04-08 03:00:01', NULL, 396, 405, 533, 0, NULL, 0, 0),
(776, 'Divisional Hospital Type B - Madankadawala', '2020-04-08 03:00:31', NULL, 396, 405, 533, 0, NULL, 0, 0),
(777, 'District General Hospital Polonnaruwa', '2020-04-08 03:03:37', NULL, 396, 406, 534, 0, NULL, 0, 0),
(778, 'Base Hospital Type A - Medirigiriya', '2020-04-08 03:04:05', NULL, 396, 406, 535, 0, NULL, 0, 0),
(779, 'Base Hospital Type B - Welikanda', '2020-04-08 03:04:29', NULL, 396, 406, 536, 0, NULL, 0, 0),
(780, 'Divisional Hospital Type A - Hingurakgoda', '2020-04-08 03:04:55', NULL, 396, 406, 537, 0, NULL, 0, 0),
(781, 'Teaching Hospital Jaffna', '2020-04-08 03:07:16', NULL, 397, 418, 538, 0, NULL, 0, 0),
(782, 'Base Hospital Type A - Telippalai', '2020-04-08 03:07:43', NULL, 397, 418, 539, 0, NULL, 0, 0),
(783, 'Base Hospital Type A - Point Pedro', '2020-04-08 03:08:07', NULL, 397, 418, 539, 0, NULL, 0, 0),
(784, 'Base Hospital Type B - Chavakachcheri', '2020-04-08 03:09:16', NULL, 397, 418, 540, 0, NULL, 0, 0),
(785, 'Base Hospital Type B - Kayts', '2020-04-08 03:09:48', NULL, 397, 418, 540, 0, NULL, 0, 0),
(786, 'District General Hospital Kilinochchi', '2020-04-08 03:11:58', NULL, 397, 419, 541, 0, NULL, 0, 0),
(787, 'Base Hospital Type B - Thirukkovil', '2020-04-08 03:12:22', NULL, 397, 419, 542, 0, NULL, 0, 0),
(788, 'Base Hospital Type B - Mulangavil', '2020-04-08 03:12:47', NULL, 397, 419, 542, 0, NULL, 0, 0),
(789, 'District General Hospital Mulativu', '2020-04-08 03:16:13', NULL, 397, 420, 543, 0, NULL, 0, 0),
(790, 'Base Hospital Type B - Mankulam', '2020-04-08 03:16:44', NULL, 397, 420, 544, 0, NULL, 0, 0),
(791, 'Divisional Hospital Type A - Puthukkudiyiruppu', '2020-04-08 03:17:11', NULL, 397, 420, 545, 0, NULL, 0, 0),
(792, 'Divisional Hospital Type A - Mallavi', '2020-04-08 03:17:35', NULL, 397, 420, 545, 0, NULL, 0, 0),
(793, 'Divisional Hospital Type A - Naddankandal', '2020-04-08 03:17:59', NULL, 397, 420, 545, 0, NULL, 0, 0),
(794, 'Divisional Hospital Type A - Sampathnuwara', '2020-04-08 03:18:23', NULL, 397, 420, 545, 0, NULL, 0, 0),
(795, 'District General Hospital Vavuniya', '2020-04-08 03:20:17', NULL, 397, 421, 546, 0, NULL, 0, 0),
(796, 'Base Hospital Type B - Cheddikulam', '2020-04-08 03:20:47', NULL, 397, 421, 547, 0, NULL, 0, 0),
(797, 'District General Hospital Mannar', '2020-04-08 03:22:22', NULL, 397, 422, 548, 0, NULL, 0, 0),
(798, 'Provincial General Hospital Kurunegala', '2020-04-08 03:28:09', NULL, 398, 403, 549, 0, NULL, 0, 0),
(799, 'Base Hospital Type B - Dambadeniya', '2020-04-08 03:28:33', NULL, 398, 403, 550, 0, NULL, 0, 0),
(800, 'Base Hospital Type B - Galgamuwa', '2020-04-08 03:29:11', NULL, 398, 403, 550, 0, NULL, 0, 0),
(801, 'Base Hospital Type B - Nikaweratiya', '2020-04-08 03:29:42', NULL, 398, 403, 550, 0, NULL, 0, 0),
(802, 'Divisional Hospital Type A - Gokarella', '2020-04-08 03:30:20', NULL, 398, 403, 551, 0, NULL, 0, 0),
(803, 'Divisional Hospital Type A - Hiripitiya', '2020-04-08 03:30:59', NULL, 398, 403, 551, 0, NULL, 0, 0),
(804, 'Divisional Hospital Type A - Maho', '2020-04-08 03:32:19', NULL, 398, 403, 551, 0, NULL, 0, 0),
(805, 'Divisional Hospital Type A - Mawathagama', '2020-04-08 03:32:52', NULL, 398, 403, 551, 0, NULL, 0, 0),
(806, 'Divisional Hospital Type A - Polpitigama', '2020-04-08 03:33:16', NULL, 398, 403, 551, 0, NULL, 0, 0),
(807, 'Divisional Hospital Type A - Sandalankawa', '2020-04-08 03:33:40', NULL, 398, 403, 551, 0, NULL, 0, 0),
(808, 'Divisional Hospital Type A - Wariyapola', '2020-04-08 03:34:06', NULL, 398, 403, 551, 0, NULL, 0, 0),
(809, 'Divisional Hospital Type A - Alawwa', '2020-04-08 03:34:39', NULL, 398, 403, 551, 0, NULL, 0, 0),
(810, 'Divisional Hospital Type A - Ridigama', '2020-04-08 03:35:10', NULL, 398, 403, 551, 0, NULL, 0, 0),
(811, 'Teaching Hospital Kuliyapitiya', '2020-04-08 03:39:36', NULL, 398, 404, 552, 0, NULL, 0, 0),
(812, 'District General Hospital Chilaw', '2020-04-08 03:40:49', NULL, 398, 404, 553, 0, NULL, 0, 0),
(813, 'Base Hospital Type A - Puttalum', '2020-04-08 03:41:22', NULL, 398, 404, 554, 0, NULL, 0, 0),
(814, 'Base Hospital Type B - Marawila', '2020-04-08 03:43:04', NULL, 398, 404, 556, 0, NULL, 0, 0),
(815, 'Base Hospital Type B - Anamaduwa', '2020-04-08 03:43:34', NULL, 398, 404, 556, 0, NULL, 0, 0),
(816, 'Divisional Hospital Type A - Dankotuwa', '2020-04-08 03:44:09', NULL, 398, 404, 555, 0, NULL, 0, 0),
(817, 'Teaching Hospital Karapitiya', '2020-04-08 03:49:56', NULL, 400, 407, 557, 0, NULL, 0, 0),
(818, 'Teaching Hospital Mahamodara', '2020-04-08 03:50:26', NULL, 400, 407, 557, 0, NULL, 0, 0),
(819, 'Base Hospital Type A - Balapitiya', '2020-04-08 03:50:52', NULL, 400, 407, 558, 0, NULL, 0, 0),
(820, 'Base Hospital Type A - Elpitiya', '2020-04-08 03:51:25', NULL, 400, 407, 558, 0, NULL, 0, 0),
(821, 'Base Hospital Type B - Udugama', '2020-04-08 03:52:05', NULL, 400, 407, 559, 0, NULL, 0, 0),
(822, 'Divisional Hospital Type A - Ambalangoda', '2020-04-08 03:52:44', NULL, 400, 407, 560, 0, NULL, 0, 0),
(823, 'Divisional Hospital Type A - Baddegama', '2020-04-08 03:53:33', NULL, 400, 407, 560, 0, NULL, 0, 0),
(824, 'District General Hospital Matara', '2020-04-08 03:58:10', NULL, 400, 408, 561, 0, NULL, 0, 0),
(825, 'Base Hospital Type A - Tangalle', '2020-04-08 03:58:35', NULL, 400, 408, 562, 0, NULL, 0, 0),
(826, 'Base Hospital Type A - Kamburupitiya', '2020-04-08 03:59:05', NULL, 400, 408, 562, 0, NULL, 0, 0),
(827, 'Base Hospital Type B - Deniyaya', '2020-04-08 03:59:31', NULL, 400, 408, 563, 0, NULL, 0, 0),
(828, 'Divisional Hospital Type A - Akuressa', '2020-04-08 04:00:00', NULL, 400, 408, 564, 0, NULL, 0, 0),
(829, 'Divisional Hospital Type A - Mawarala', '2020-04-08 04:00:35', NULL, 400, 408, 564, 0, NULL, 0, 0),
(830, 'District General Hospital Hambantota', '2020-04-08 04:02:49', NULL, 400, 409, 565, 0, NULL, 0, 0),
(831, 'Base Hospital Type B - Tissamaharama', '2020-04-08 04:03:15', NULL, 400, 409, 566, 0, NULL, 0, 0),
(832, 'Base Hospital Type B - Walasmulla', '2020-04-08 04:03:40', NULL, 400, 409, 566, 0, NULL, 0, 0),
(833, 'Provincial General Hospital Badulla', '2020-04-08 04:06:20', NULL, 401, 410, 567, 0, NULL, 0, 0),
(834, 'Base Hospital Type A - Diyatalawa', '2020-04-08 04:06:47', NULL, 401, 410, 568, 0, NULL, 0, 0),
(835, 'Base Hospital Type A - Mahiyangana', '2020-04-08 04:07:20', NULL, 401, 410, 568, 0, NULL, 0, 0),
(836, 'Base Hospital Type B - Welimada', '2020-04-08 04:08:51', NULL, 401, 410, 570, 0, NULL, 0, 0),
(837, 'Divisional Hospital Type A - Bandarawela', '2020-04-08 04:09:18', NULL, 401, 410, 569, 0, NULL, 0, 0),
(838, 'Divisional Hospital Type A - Passara', '2020-04-08 04:09:52', NULL, 401, 410, 569, 0, NULL, 0, 0),
(839, 'District General Hospital Monaragala', '2020-04-08 04:12:58', NULL, 401, 411, 571, 0, NULL, 0, 0),
(840, 'Base Hospital Type B - Bibile', '2020-04-08 04:13:23', NULL, 401, 411, 572, 0, NULL, 0, 0),
(841, 'Base Hospital Type B - Siyambalanduwa', '2020-04-08 04:13:55', NULL, 401, 411, 572, 0, NULL, 0, 0),
(842, 'Base Hospital Type B - Wallawaya', '2020-04-08 04:14:21', NULL, 401, 411, 572, 0, NULL, 0, 0),
(843, 'Divisional Hospital Type A - Buttala', '2020-04-08 04:14:49', NULL, 401, 411, 573, 0, NULL, 0, 0),
(844, 'National Cancer Institute Maharagama', '2020-04-08 05:34:26', NULL, 402, 398, 574, NULL, NULL, 0, 0),
(845, 'National Eye Hospital Colombo', '2020-04-08 05:35:05', NULL, 402, 398, 574, NULL, NULL, 0, 0),
(846, 'Castle Street Hospital for Women', '2020-04-08 05:35:41', NULL, 402, 398, 574, NULL, NULL, 0, 0),
(847, 'De Soysa Hospital for Women', '2020-04-08 05:36:22', NULL, 402, 398, 574, NULL, NULL, 0, 0),
(848, 'Teaching Hospital Colombo North Ragama', '2020-04-08 05:36:54', NULL, 402, 398, 574, NULL, NULL, 0, 0),
(849, 'Teaching Hospital - Dental Institute', '2020-04-08 05:37:29', NULL, 402, 398, 574, NULL, NULL, 0, 0),
(850, 'Teaching Hospital - Lady Ridgeway Hospital for Children', '2020-04-08 05:38:06', NULL, 402, 398, 574, NULL, NULL, 0, 0),
(851, 'National Institute of Mental Health', '2020-04-08 05:38:46', NULL, 402, 398, 574, NULL, NULL, 0, 0),
(852, 'Teaching Hospital - Welisara', '2020-04-08 05:39:16', NULL, 402, 398, 574, NULL, NULL, 0, 0),
(853, 'Teaching Hospital Colombo South Kalubowila', '2020-04-08 05:39:58', NULL, 402, 398, 574, NULL, NULL, 0, 0),
(854, 'National Hospital of Sri Lanka', '2020-04-08 05:41:16', NULL, 402, 398, 577, NULL, NULL, 0, 0),
(855, 'Base Hospital Type A - Homagama', '2020-04-08 05:41:57', NULL, 402, 398, 575, NULL, NULL, 0, 0),
(856, 'Base Hospital Type A - Angoda', '2020-04-08 05:42:26', NULL, 402, 398, 575, NULL, NULL, 0, 0),
(857, 'Base Hospital Type A - Awissawella', '2020-04-08 05:42:52', NULL, 402, 398, 575, NULL, NULL, 0, 0),
(858, 'Base Hospital Type B - Mulleriyawa', '2020-04-08 05:44:15', NULL, 402, 398, 578, NULL, NULL, 0, 0),
(859, 'Divisional Hospital Type A - Wetara', '2020-04-08 05:44:44', NULL, 402, 398, 576, NULL, NULL, 0, 0),
(860, 'District General Hospital Kalutara', '2020-04-08 05:48:29', NULL, 402, 401, 579, NULL, NULL, 0, 0),
(861, 'Base Hospital Type A - Panadura', '2020-04-08 05:49:07', NULL, 402, 401, 580, NULL, NULL, 0, 0),
(862, 'Base Hospital Type A - Horana', '2020-04-08 05:49:34', NULL, 402, 401, 580, NULL, NULL, 0, 0),
(863, 'Base Hospital Type A - Dharga Town', '2020-04-08 05:50:07', NULL, 402, 401, 580, NULL, NULL, 0, 0),
(864, 'Base Hospital Type B - Beruwala', '2020-04-08 05:50:36', NULL, 402, 401, 581, NULL, NULL, 0, 0),
(865, 'Divisional Hospital Type A - Ingiriya', '2020-04-08 05:51:07', NULL, 402, 401, 582, NULL, NULL, 0, 0),
(866, 'Divisional Hospital Type A - Matugama', '2020-04-08 05:51:42', NULL, 402, 401, 582, NULL, NULL, 0, 0),
(867, 'Rehabilitation Hospital', '2020-04-08 05:57:39', NULL, 402, 413, 584, NULL, NULL, 0, 0),
(868, 'District General Hospital Gampaha', '2020-04-08 05:58:52', NULL, 402, 413, 583, NULL, NULL, 0, 0),
(869, 'District General Hospital Negombo', '2020-04-08 05:59:42', NULL, 402, 413, 583, NULL, NULL, 0, 0),
(870, 'Base Hospital Type A - Wathupitiwala', '2020-04-08 06:00:22', NULL, 402, 413, 585, NULL, NULL, 0, 0),
(871, 'Base Hospital Type B - Kirobathgoda', '2020-04-08 06:00:49', NULL, 402, 413, 586, NULL, NULL, 0, 0),
(872, 'Base Hospital Type B - Mirigama', '2020-04-08 06:01:17', NULL, 402, 413, 586, NULL, NULL, 0, 0),
(873, 'Divisional Hospital Type A - Divulapitiya', '2020-04-08 06:01:47', NULL, 402, 413, 587, NULL, NULL, 0, 0),
(875, 'Divisional Hospital Type A - Kandana', '2020-04-08 06:03:40', NULL, 402, 413, 587, NULL, NULL, 0, 0),
(876, 'Divisional Hospital Type A - Wijaya Kumarathunga', '2020-04-08 06:04:54', NULL, 402, 413, 587, NULL, NULL, 0, 0),
(877, 'Divisional Hospital Type A - Minuwangoda', '2020-04-08 06:05:23', NULL, 402, 413, 587, NULL, NULL, 0, 0),
(878, 'Divisional Hospital Type A - Dompe', '2020-04-08 06:06:10', NULL, 402, 413, 587, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `fileattachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inRecycle` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `name`, `description`, `fileattachment`, `inRecycle`, `created_at`, `updated_at`) VALUES
(1003, 'Cebtu Community Group Memebers Report', 'This report shows cebtu community group members info', '222627256.xlsx', 1, '2019-11-28 21:17:12', '2019-11-29 05:31:44'),
(1004, 'test 2', 'test new word 5', '282631987.xlsx', 1, '2019-11-28 22:26:26', '2020-02-19 00:30:51'),
(1005, 'test', 'This report shows cebtu community group members info', '1482457913.docx', 1, '2019-11-28 22:43:43', NULL),
(1006, 'test', 'This report shows cebtu community group members info', '2139983528.pdf', 1, '2019-11-28 22:47:18', NULL),
(1007, 'test', 'This report shows cebtu community group members info', 'Channa Jagath Bandara  Weerasinghe-weerasinghe mudiyanselage-Detail-report-2019-11-29-04-291141279058.docx', 1, '2019-11-28 22:48:58', '2019-11-28 23:35:27'),
(1011, 'test', 'This report shows cebtu community group members info', 'test new 2.docx162495577.docx', 0, '2019-11-28 23:13:48', '2019-11-28 23:17:24'),
(1013, 'Kosala Abeysinghe', 'This report shows cebtu community group members info', 'Milinda Karunarathna-karunarathna-Detail-report-2019-11-29-05-091731237162.docx', 0, '2019-11-28 23:39:36', NULL),
(1014, 'CSC Mathugama Members', 'CSC Mathugama  Members Report', 'Members-atCSC Mathugama-2019-11-29-01-34267192498.docx', 0, '2019-11-29 08:06:08', NULL),
(1015, 'test report', 'test report', 'Members-atCSC Mathugama-2019-11-29-01-342671924981928967032.docx', 0, '2019-11-29 08:07:16', NULL),
(1016, 'yasiru', 'test', 'Members-atCSC Mathugama-2019-11-29-01-342671924981205280886.docx', 1, '2019-11-29 08:41:28', NULL),
(1017, 'test', 'This report shows cebtu community group members info', 'Members-atCSC Mathugama-2019-11-29-01-342671924982091012834.docx', 1, '2019-11-29 08:41:39', NULL),
(1018, 'download 1', 'download 1', 'dummy934071393.pdf', 1, '2020-01-31 22:47:06', NULL),
(1019, 'download 2', 'download 2', 'dummy178063413.pdf', 1, '2020-01-31 22:49:23', NULL),
(1020, 'download 3', 'download 3', 'dummy1669171160.pdf', 1, '2020-01-31 22:49:45', NULL),
(1021, 'download 4', 'download 4', 'dummy260313127.pdf', 1, '2020-02-03 00:29:00', NULL),
(1022, 'download 4', 'download 4', 'dummy65110512.pdf', 0, '2020-02-03 00:29:00', NULL),
(1023, 'download 5', 'download 5', 'dummy1007852044.pdf', 0, '2020-02-03 00:29:24', NULL),
(1024, 'download 6', 'download 6 6', 'dummy418624148.pdf', 0, '2020-02-03 00:29:50', '2020-02-24 23:06:07'),
(1025, 'download 7', 'download 7', 'dummy1029610901.pdf', 0, '2020-02-03 00:30:10', NULL),
(1026, 'download 8', 'download 8', 'dummy1175520314.pdf', 0, '2020-02-03 00:30:33', NULL),
(1027, 'download 9', 'download 9', 'dummy1125632408.pdf', 0, '2020-02-03 00:30:57', NULL),
(1028, 'download 10', 'download 10', 'dummy1981823578.pdf', 0, '2020-02-03 00:31:14', NULL),
(1029, 'download 11', 'download 11', 'dummy1556201469.pdf', 0, '2020-02-03 00:31:36', NULL),
(1030, 'download 12', 'download 12', 'dummy2079243786.pdf', 0, '2020-02-03 00:31:56', NULL),
(1031, 'download 13', 'download 13', 'dummy1230163678.pdf', 0, '2020-02-03 00:32:16', NULL),
(1033, 'test ddd', 'download 3', 'samplemeberslistformat693329181.xlsx', 0, '2020-03-07 07:02:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `header_title` text,
  `short_desc` mediumtext,
  `long_desc` longtext,
  `orgnizer` text,
  `contactno` text,
  `main_image` text,
  `gallery_img` text,
  `video` text,
  `e_date` date DEFAULT NULL,
  `e_time` text,
  `e_venue` text,
  `inRecycle` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `header_title`, `short_desc`, `long_desc`, `orgnizer`, `contactno`, `main_image`, `gallery_img`, `video`, `e_date`, `e_time`, `e_venue`, `inRecycle`, `created_at`, `updated_at`) VALUES
(34, 'Teachers and Principals launch strike; academic activities in schools islandwide hampered', 'The Teachers and Principals trade union today (February 26) launched trade union action by applying for sick leave, citing several demands including salary anomalies. Due to this, academic activities in several schools were hampered.', 'The Teachers and Principals trade union today (February 26) launched trade union action by applying for sick leave, citing several demands including salary anomalies. Due to this, academic activities in several schools were hampered.', 'Ceylon Teachers Service Union', '0112075313', '1888390550.jpg', '', 'https://www.youtube.com/watch?v=9J1iEqAau7g', '2020-02-27', '04:07', 'Ministry Of Education in Sri Lanka', 0, '2020-02-27 05:07:50', '2020-02-28 00:09:47');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `groupname` text,
  `inRecycle` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_members`
--

CREATE TABLE `group_members` (
  `group_id` int(11) NOT NULL,
  `member_id` varchar(200) NOT NULL,
  `member_name` text,
  `member_mobile` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_members`
--

INSERT INTO `group_members` (`group_id`, `member_id`, `member_name`, `member_mobile`, `created_at`, `updated_at`) VALUES
(2, '3', 'Indu', '94754077569', '2019-07-05 09:35:09', NULL),
(2, '5', 'Supun', '94714770713', '2019-07-07 23:00:41', NULL),
(2, '6', 'Dinesh', '94772666779', '2019-07-07 23:00:56', NULL),
(4, '3', 'Indu', '94754077569', '2019-07-05 09:42:40', NULL),
(6, '15', 'dilhani', '0712953196', '2019-07-10 06:25:47', NULL),
(7, '15', 'dilhanii', '0712953196', '2019-07-10 06:38:42', NULL),
(7, '18', 'chamara', '0704770713', '2019-07-10 10:19:49', NULL),
(9, '19', 'dilhani', '0712953196', '2019-07-11 06:18:13', NULL),
(9, '22', 'amali', '0711251006', '2019-07-11 06:18:24', NULL),
(11, '11', 'yasiru', '0754077569', '2019-07-12 05:06:11', NULL),
(11, '111', 'Kosala Abeysinghe', '0716876975', '2019-07-17 14:24:01', NULL),
(11, '12', 'Dinesh Hopitigala', '0772666779', '2019-07-12 02:42:19', NULL),
(11, '14', 'kosala', '0716876975', '2019-07-12 02:43:05', NULL),
(11, '258947', 'amali', '0711251006', '2019-07-30 06:31:28', NULL),
(11, '5487', 'Dilhani', '0712953196', '2019-07-30 06:29:04', NULL),
(12, '258947', 'amali', '0711251006', '2019-07-30 06:37:09', NULL),
(12, '40', 'Amali', '0711251006', '2019-07-17 05:58:18', NULL),
(12, '5487', 'Dilhani', '0712953196', '2019-07-30 06:36:55', NULL),
(12, '698', 'Milinda Karunarathna', '0713568111', '2019-07-17 14:22:28', NULL),
(12, '96', 'dilhani', '0712953196', '2019-07-17 05:57:31', NULL),
(13, '258947', 'amali', '0711251006', '2019-07-30 06:39:02', NULL),
(13, '5487', 'Dilhani', '0712953196', '2019-07-30 06:38:46', NULL),
(13, '96', 'dilhani', '0712953196', '2019-07-17 06:55:04', NULL),
(14, '2158963', 'dilhani', '0712953196', '2019-07-30 07:31:06', NULL),
(15, '2158963', 'dilhani', '0712953196', '2019-07-31 03:37:09', NULL),
(15, '45871', 'amali', '0711251006', '2019-07-31 03:36:46', NULL),
(16, '07534567890', 'user4', '0754077569', '2020-01-07 08:35:18', NULL),
(16, '100', 'dilhani', '0712953196', '2019-07-20 03:12:33', NULL),
(16, '250', 'chamara', '0714770713', '2019-07-20 04:03:09', NULL),
(16, '673071007v', 'Malgahagamage Priyantha Lakshman', '0713863963', '2020-03-05 18:34:49', NULL),
(17, '07534567890', 'user4', '0754077569', '2020-01-07 08:46:54', NULL),
(17, '673071007v', 'Malgahagamage Priyantha Lakshman', '0713863963', '2020-03-05 18:33:25', NULL),
(17, '896887878787878', 'yasiru', '07540778999', '2020-03-07 06:22:59', NULL),
(17, '955643143v', 'chamini', '0702024556', '2020-03-07 06:26:54', NULL),
(18, '1111', 'saman', '0711251006', '2019-07-22 06:58:24', NULL),
(18, '556', 'dilhani', '0712953196', '2019-07-22 07:32:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `msg_body` longtext NOT NULL,
  `recivername` text,
  `mobile_number` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `msg_body`, `recivername`, `mobile_number`, `created_at`) VALUES
(38, 'this is test', NULL, '94754077569', '2019-07-07 20:50:50'),
(39, 'this is test', NULL, '94754077569', '2019-07-07 21:01:03'),
(40, 'this is test', NULL, '94754077569', '2019-07-07 21:03:36'),
(41, 'this is test', NULL, '94754077569', '2019-07-07 21:05:34'),
(42, 'this is test', NULL, '94754077569', '2019-07-07 21:06:34'),
(43, 'this is test', NULL, '94754077569', '2019-07-07 21:14:16'),
(44, 'this is test', NULL, '94754077569', '2019-07-07 21:16:42'),
(45, 'this is test', NULL, '94754077569', '2019-07-07 21:17:04'),
(46, 'Welcome To CEBTU This is test', NULL, '94772666779', '2019-07-07 21:34:20'),
(47, 'Alert! CEBTU system is now on test run', NULL, 'sent to all', '2019-07-07 22:43:04'),
(48, 'Alert! CEBTU system is now on test run', NULL, 'sent to all', '2019-07-07 22:46:09'),
(49, 'Alert! CEBTU system is now on test run 2', NULL, 'sent to all', '2019-07-07 22:49:13'),
(50, 'Alert! CEBTU system is now on test run 2', NULL, 'sent to all', '2019-07-07 22:50:44'),
(51, 'this is test group message', NULL, 'sent to groups', '2019-07-08 01:10:19'),
(52, 'this is test group message', NULL, 'sent to groups', '2019-07-08 01:11:58'),
(53, 'this is test group message', NULL, 'sent to groups', '2019-07-08 01:16:30'),
(54, 'this is test group messge 2', NULL, 'sent to groups', '2019-07-08 01:28:35'),
(55, 'this is test', NULL, 'sent to all', '2019-07-09 10:00:01'),
(56, 'cebtu', NULL, 'sent to all', '2019-07-09 15:12:28'),
(57, 'cebtu', NULL, 'sent to groups', '2019-07-09 15:13:24'),
(58, 'test', NULL, '0712953196', '2019-07-10 06:35:08'),
(59, 'test new', NULL, 'sent to groups', '2019-07-10 06:36:21'),
(60, 'test new', NULL, 'sent to groups', '2019-07-10 06:43:00'),
(61, 'test', NULL, 'sent to groups', '2019-07-10 07:47:41'),
(62, 'twst msg', NULL, 'sent to all', '2019-07-10 08:04:32'),
(63, '2588', NULL, 'sent to groups', '2019-07-10 10:20:14'),
(64, 'test2', NULL, '0712953196', '2019-07-11 06:00:54'),
(65, 'test2', NULL, '0711251006', '2019-07-11 06:07:03'),
(66, 'hh', NULL, '0712953196', '2019-07-11 06:08:34'),
(67, 'test', NULL, '0712953196', '2019-07-11 06:10:02'),
(68, 'test', NULL, '0712953196', '2019-07-11 06:11:03'),
(69, 'test all', NULL, 'sent to all', '2019-07-11 06:15:43'),
(70, 'group', NULL, 'sent to groups', '2019-07-11 06:19:13'),
(71, 'cebtu', NULL, 'sent to groups', '2019-07-12 01:30:35'),
(72, 'test', NULL, 'sent to groups', '2019-07-12 02:43:21'),
(73, 'this is test messege for last error', NULL, 'sent to groups', '2019-07-12 02:49:37'),
(74, 'test', NULL, 'sent to groups', '2019-07-12 02:57:30'),
(75, 'this is test multiple group messege', NULL, 'sent to groups', '2019-07-17 02:57:31'),
(76, 'Welcome to CEBTU Online System This is test messsage  thank you', NULL, 'sent to all', '2019-07-17 02:59:09'),
(77, 'this is test mesage', NULL, 'sent to all', '2019-07-17 03:14:44'),
(78, 'Welcome to CEBTU Online System This is test messsage  thank you', NULL, 'sent to all', '2019-07-17 03:15:22'),
(79, 'test', NULL, '0712953196,0711251006', '2019-07-17 05:52:26'),
(80, 'test single', NULL, '0712953196', '2019-07-17 05:55:35'),
(81, 'selected test msg', NULL, '0712953196,0711251006', '2019-07-17 06:06:58'),
(82, 'Testing test', NULL, '0712953196', '2019-07-17 07:46:29'),
(83, 'cebtu', NULL, '0716876975', '2019-07-17 13:39:03'),
(84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', NULL, 'sent to all', '2019-07-17 15:25:05'),
(85, 'this is test message after update', NULL, '0716876975', '2019-07-17 15:40:58'),
(86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', NULL, 'sent to all', '2019-07-17 15:41:45'),
(87, 'Welcome to CEBTU Online System This is test messsage  after latest updtate multiple messge by select user section thank you', NULL, '0716876975,0715324936,0712747570,0717197928,0718041508,0716810139', '2019-07-17 15:42:57'),
(88, 'Welcome to CEBTU Online System This is test messsage after latest update group msg section  thank you', NULL, 'sent to groups', '2019-07-17 15:43:48'),
(89, 'this is test', NULL, 'sent to groups', '2019-07-17 15:49:42'),
(90, 'cebtu', NULL, '0716876975', '2019-07-17 15:52:54'),
(91, 'test dinesh', NULL, 'sent to groups', '2019-07-17 15:56:50'),
(92, 'test dinesh', NULL, 'sent to groups', '2019-07-17 15:56:52'),
(93, 'test dinesh', NULL, 'sent to groups', '2019-07-17 15:56:59'),
(94, 'cebtu', NULL, 'sent to groups', '2019-07-17 15:59:47'),
(95, 'test dinesh', NULL, 'sent to groups', '2019-07-17 16:03:48'),
(96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:36:15'),
(97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:36:36'),
(98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:36:39'),
(99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:36:51'),
(100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:36:53'),
(101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:37:33'),
(102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:37:53'),
(103, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:37:56'),
(104, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:06'),
(105, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:08'),
(106, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:10'),
(107, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:16'),
(108, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:18'),
(109, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:20'),
(110, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:27'),
(111, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:29'),
(112, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:31'),
(113, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:37'),
(114, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:39'),
(115, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:41'),
(116, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:47'),
(117, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:49'),
(118, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', NULL, 'sent to groups', '2019-07-17 18:38:50'),
(119, 'CEBTU', NULL, 'sent to groups', '2019-07-17 18:40:16'),
(120, 'test new 20', NULL, '0712953196', '2019-07-20 03:11:23'),
(121, 'test 20', NULL, '0704770713', '2019-07-20 03:57:00'),
(122, 'test 20', NULL, '0714770713', '2019-07-20 03:58:42'),
(123, 'test 20 selected', NULL, '0712953196', '2019-07-20 04:00:36'),
(124, 'test 20 selected new', NULL, '0712953196', '2019-07-20 04:17:03'),
(125, 'selectdno2', NULL, ',0714770713', '2019-07-20 04:19:35'),
(126, 'test20selected', NULL, '0712953196', '2019-07-20 05:00:39'),
(127, 'test20', NULL, '0714770713,0711251006', '2019-07-20 05:04:06'),
(128, 'select', NULL, '', '2019-07-20 05:17:31'),
(129, 'this is test message bu check error', NULL, 'sent to groups', '2019-07-20 05:28:10'),
(130, 'this is test messege', NULL, ',0715324936', '2019-07-20 05:29:23'),
(131, 'this is test', NULL, 'sent to groups', '2019-07-20 05:32:49'),
(132, 'test20group', NULL, 'sent to groups', '2019-07-20 05:33:41'),
(133, 'selected test', NULL, '0712953196,0714770713', '2019-07-20 05:35:28'),
(134, 'select 2 page', NULL, '0712953196', '2019-07-20 05:37:55'),
(135, 'selected', NULL, '0712953196', '2019-07-20 06:31:50'),
(136, 'this is test', NULL, '0714770713', '2019-07-20 06:48:17'),
(137, 'this is test', NULL, '0712953196,0714770713', '2019-07-20 06:55:32'),
(138, 'select no', NULL, '0712953196,0714770713', '2019-07-20 07:01:24'),
(139, 'cebtubt', NULL, '0716876975', '2019-07-22 05:15:54'),
(140, 'final test', NULL, '0712953196', '2019-07-30 06:28:13'),
(141, 'test', NULL, 'sent to groups', '2019-07-30 06:33:59'),
(142, 'hhhh', NULL, 'sent to groups', '2019-07-30 06:39:29'),
(143, 'single test', NULL, '0711251006', '2019-07-31 03:35:11'),
(144, 'test31', NULL, 'sent to groups', '2019-07-31 03:38:39'),
(145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', NULL, 'sent to groups', '2019-07-31 15:32:32'),
(146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', NULL, 'sent to groups', '2019-07-31 15:32:41'),
(147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', NULL, 'sent to groups', '2019-07-31 15:33:16'),
(148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', NULL, 'sent to groups', '2019-08-01 00:51:44'),
(149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', NULL, 'sent to groups', '2019-08-01 01:09:02'),
(150, 'test', NULL, 'sent toWesternmembers', '2020-01-14 12:44:14'),
(151, 'test', NULL, 'sent toWesternmembers', '2020-01-14 12:46:40'),
(152, 'test', NULL, 'sent toWesternmembers', '2020-01-14 12:48:09'),
(153, 'test', NULL, 'sent toWesternmembers', '2020-01-14 12:49:55'),
(154, 'mkd karanne', NULL, '0173863963', '2020-02-12 02:19:00'),
(155, 'mkd karanne', NULL, '0713863963', '2020-02-12 03:16:48'),
(156, 'trade union', NULL, '0713863963', '2020-02-18 03:59:27'),
(157, 'trade union', NULL, '0713863963', '2020-02-18 04:29:09'),
(158, 'hhhhhhhhhhh', NULL, '0702024556', '2020-02-23 23:17:33'),
(159, 'GOOD Morning', NULL, '0713863963', '2020-02-27 00:51:20'),
(160, 'GOOD Morning', NULL, '0713863963', '2020-02-27 01:04:11'),
(161, 'hi', NULL, '0702024556', '2020-03-03 23:17:15'),
(162, 'hi', NULL, '0702024556', '2020-03-03 23:17:15'),
(163, 'test', NULL, '0713863963', '2020-03-05 17:03:18'),
(164, 'test', NULL, '0713863963', '2020-03-05 17:05:39'),
(165, 'test', NULL, '0702024556', '2020-03-07 03:58:37'),
(166, 'hii..', NULL, 'sent to all', '2020-03-07 06:23:46'),
(167, 'test', NULL, 'sent to groups', '2020-03-07 06:30:22'),
(168, 'test message', NULL, 'sent to all', '2020-03-07 06:35:37'),
(169, 'test ctsu', NULL, '0702024556', '2020-03-07 06:39:33'),
(170, 'kahara', NULL, '0702024556', '2020-03-07 06:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `message_templates`
--

CREATE TABLE `message_templates` (
  `template_id` int(11) NOT NULL,
  `template_title` longtext,
  `template_body` longtext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_26_045924_create_admins_table', 1),
(4, '2019_06_27_234204_create_roles_table', 2),
(5, '2019_06_27_234302_create_role_admins_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `header_title` text,
  `long_desc` text,
  `main_image` text,
  `gallery_img` text,
  `video` text,
  `newstag` text,
  `inRecycle` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `header_title`, `long_desc`, `main_image`, `gallery_img`, `video`, `newstag`, `inRecycle`, `created_at`, `updated_at`) VALUES
(18, 'ctsu', 'test', '908027579.jpg', '', NULL, 'Government', 0, '2020-02-27 23:01:45', '2020-02-27 23:30:33'),
(19, 'ctsu', 'test', '1983284662.jpg', '', NULL, 'Community', 0, '2020-02-27 23:42:31', NULL),
(20, 'ctsu', 'test', '734796025.jpg', '', NULL, 'Community', 1, '2020-02-27 23:43:25', NULL),
(21, 'ctsu', 'test', '170369779.jpg', '', NULL, 'Community', 0, '2020-02-27 23:44:08', NULL),
(22, 'ctsu', 'test', '1212999990.jpg', '', NULL, 'Community', 0, '2020-02-27 23:44:47', NULL),
(23, 'Teachers and Principals launch strike; academic activities in schools islandwide hampered', 'The Teachers and Principals trade union today (February 26) launched trade union action by applying for sick leave, citing several demands including salary anomalies. Due to this, academic activities in several schools were hampered.', '1422498184.png', '', 'https://www.youtube.com/watch?v=9J1iEqAau7g', 'Community', 0, '2020-02-27 23:46:00', '2020-02-28 00:26:16'),
(24, 'Teachers and Principals launch strike; academic activities in schools islandwide hampered', 'The Teachers and Principals trade union today (February 26) launched trade union action by applying for sick leave, citing several demands including salary anomalies. Due to this, academic activities in several schools were hampered.', '332757144.jpg', '', 'https://www.youtube.com/watch?v=UBEM09ior0Q', 'Government', 0, '2020-02-28 00:04:21', '2020-02-28 00:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('gayan88chinthaka@gmail.com', '$2y$10$G9ShGW6D6kV.1m2LzP3dgu5GinOKs.VkmyDhjHdBoTZi3v1XgSTx2', '2019-07-31 13:13:52'),
('Sanjeewaonline81@gmail.com', '$2y$10$Eijg6FuNc/HvF4nIS0BxDecavB.aAbmMI1bKDIPOC2W14ahgrgxGG', '2019-08-02 06:02:59'),
('sujeewejayalath@gmail.com', '$2y$10$1EJPIAnNesY5.CzNf.XPQemc0R22srEbFAQzqC39j0b/BTrMXMvrW', '2019-08-16 15:10:44'),
('yasirukulinda@gmail.com', '$2y$10$7hPmPJhHyDdDsumKAv68ZeYJKFRZfdvQzjjn68VCS//VpNia.3.5i', '2019-11-29 23:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `placename` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `d_count` int(100) DEFAULT NULL,
  `z_count` int(100) DEFAULT NULL,
  `div_count` int(100) DEFAULT NULL,
  `s_count` int(100) DEFAULT NULL,
  `t_count` int(100) DEFAULT NULL,
  `p_a_count` int(100) DEFAULT NULL,
  `d_a_count` int(100) DEFAULT NULL,
  `z_a_count` int(100) DEFAULT NULL,
  `div_a_count` int(100) DEFAULT NULL,
  `s_a_count` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `placename`, `created_at`, `updated_at`, `d_count`, `z_count`, `div_count`, `s_count`, `t_count`, `p_a_count`, `d_a_count`, `z_a_count`, `div_a_count`, `s_a_count`) VALUES
(394, 'Eastern Province', '2019-12-16 00:25:36', '2020-02-09 23:23:01', 3, 14, 19, 0, NULL, 1, 2, 0, 1, NULL),
(395, 'Central Province', '2019-12-16 07:26:50', '2020-02-09 23:23:18', 3, 9, 27, 0, NULL, 2, NULL, NULL, NULL, NULL),
(396, 'North Central Province', '2019-12-16 07:27:57', '2020-02-09 23:23:42', 2, 9, 23, 0, NULL, 9, NULL, NULL, NULL, NULL),
(397, 'Northern Province', '2019-12-16 07:28:46', '2020-02-09 23:24:11', 5, 11, 17, 0, NULL, 12, NULL, NULL, NULL, NULL),
(398, 'North Western Province', '2019-12-16 07:29:12', '2020-02-09 23:24:35', 2, 8, 19, 0, NULL, 10, NULL, NULL, NULL, NULL),
(399, 'Sabaragamuwa Province', '2019-12-16 07:30:14', '2020-02-09 23:24:59', 2, 14, 25, 4, 4, 24, 1, 1, 3, 3),
(400, 'Southern Province', '2019-12-16 07:30:41', '2020-02-09 23:25:22', 3, 10, 16, 0, NULL, 1, NULL, NULL, NULL, NULL),
(401, 'Uva Province', '2019-12-16 07:31:04', '2020-02-09 23:25:39', 2, 7, 11, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(402, 'Western Province', '2019-12-16 07:32:30', '2020-02-09 23:26:25', 3, 14, 35, 0, 1, -1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register_pending_users`
--

CREATE TABLE `register_pending_users` (
  `reg_id` varchar(20) NOT NULL,
  `nic` varchar(20) DEFAULT NULL,
  `isregistered` tinyint(4) NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_pending_users`
--

INSERT INTO `register_pending_users` (`reg_id`, `nic`, `isregistered`, `updated_at`, `created_at`) VALUES
('1243434534', '896887878787878', 1, '2020-02-29 12:57:08', '2020-02-29 12:57:08'),
('3535454', '68688787787979', 1, '2020-01-06 11:57:51', '2020-01-06 11:57:51'),
('76656755', '7879787878', 1, '2020-01-06 11:57:51', '2020-01-06 11:57:51'),
('CTSU/CJY/2001', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2002', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2003', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2004', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2005', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2006', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2007', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2008', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2009', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2010', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2011', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2012', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2013', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2014', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2015', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2016', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2017', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2018', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2019', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2020', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2021', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2022', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2023', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2024', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2025', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2026', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2027', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2028', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2029', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2030', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2031', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2032', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2033', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2034', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2035', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2036', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2037', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2038', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2039', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2040', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2041', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2042', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2043', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2044', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2045', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2046', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2047', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2048', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2049', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2050', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2051', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2052', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2053', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2054', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2055', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2056', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2057', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2058', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2059', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2060', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2061', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2062', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2063', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2064', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2065', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2066', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2067', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2068', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2069', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2070', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2071', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2072', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2073', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2074', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2075', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2076', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2077', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2078', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2079', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2080', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2081', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2082', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2083', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2084', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2085', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2086', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2087', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2088', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2089', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2090', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2091', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2092', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2093', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2094', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2095', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2096', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2097', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2098', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2099', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2100', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2101', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2102', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2103', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2104', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2105', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2106', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2107', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2108', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2109', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2110', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2111', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2112', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2113', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2114', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2115', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2116', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2117', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2118', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2119', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2120', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2121', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2122', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2123', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2124', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2125', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2126', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2127', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2128', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2129', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2130', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2131', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2132', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2133', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2134', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2135', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2136', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2137', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2138', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2139', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2140', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2141', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2142', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2143', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2144', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2145', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2146', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2147', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2148', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2149', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2150', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2151', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2152', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2153', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2154', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2155', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2156', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2157', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2158', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2159', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2160', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2161', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2162', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2163', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2164', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2165', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2166', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2167', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2168', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2169', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2170', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2171', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2172', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2173', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2174', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2175', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2176', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2177', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2178', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2179', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2180', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2181', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2182', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2183', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2184', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2185', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2186', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2187', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2188', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2189', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2190', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2191', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2192', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2193', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2194', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2195', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2196', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2197', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2198', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2199', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2200', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2201', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2202', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2203', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2204', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2205', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2206', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2207', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2208', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2209', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2210', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2211', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2212', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2213', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2214', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2215', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2216', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2217', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2218', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2219', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2220', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2221', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2222', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2223', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2224', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2225', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2226', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2227', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2228', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2229', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2230', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2231', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2232', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2233', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2234', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2235', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2236', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2237', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2238', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2239', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2240', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2241', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2242', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2243', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2244', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2245', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2246', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2247', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2248', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2249', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2250', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2251', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2252', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2253', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2254', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2255', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2256', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2257', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2258', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2259', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2260', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2261', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2262', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2263', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2264', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2265', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2266', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2267', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2268', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2269', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2270', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2271', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2272', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2273', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2274', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2275', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2276', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2277', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2278', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2279', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2280', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2281', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2282', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2283', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2284', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2285', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2286', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2287', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2288', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2289', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2290', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2291', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2292', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2293', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2294', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2295', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2296', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2297', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2298', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2299', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2300', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2301', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2302', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2303', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2304', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2305', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2306', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2307', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2308', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2309', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2310', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2311', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2312', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2313', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2314', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2315', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2316', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2317', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2318', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2319', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2320', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2321', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2322', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2323', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2324', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2325', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2326', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2327', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2328', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2329', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2330', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2331', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2332', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2333', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2334', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2335', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2336', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2337', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2338', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2339', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2340', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2341', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2342', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2343', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2344', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2345', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2346', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2347', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2348', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2349', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2350', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2351', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2352', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2353', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2354', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2355', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2356', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2357', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2358', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2359', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2360', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2361', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2362', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2363', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2364', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2365', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2366', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2367', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2368', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2369', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2370', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2371', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2372', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2373', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2374', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2375', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2376', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2377', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2378', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2379', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2380', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2381', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2382', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2383', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2384', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2385', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2386', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2387', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2388', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2389', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2390', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2391', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2392', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2393', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2394', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2395', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2396', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2397', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2398', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2399', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2400', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2401', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2402', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2403', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2404', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2405', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2406', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2407', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2408', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2409', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2410', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2411', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2412', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2413', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2414', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2415', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2416', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2417', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2418', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2419', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2420', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2421', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2422', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2423', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2424', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2425', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2426', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2427', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2428', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2429', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2430', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2431', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2432', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2433', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2434', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2435', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2436', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2437', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2438', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2439', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2440', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2441', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2442', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2443', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2444', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2445', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2446', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2447', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2448', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2449', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2450', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2451', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2452', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2453', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2454', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2455', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2456', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2457', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2458', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2459', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2460', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2461', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2462', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2463', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2464', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2465', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2466', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2467', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2468', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2469', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2470', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2471', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2472', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2473', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2474', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2475', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2476', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2477', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2478', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2479', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2480', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2481', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2482', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2483', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2484', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2485', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2486', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2487', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2488', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2489', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2490', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2491', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2492', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2493', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2494', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2495', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2496', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2497', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2498', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2499', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2500', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2501', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2502', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2503', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2504', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2505', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2506', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2507', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2508', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2509', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2510', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2511', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2512', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2513', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2514', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2515', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2516', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2517', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2518', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2519', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2520', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2521', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2522', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2523', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2524', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2525', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2526', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2527', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2528', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2529', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2530', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2531', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2532', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2533', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2534', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2535', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2536', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2537', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2538', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2539', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2540', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2541', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2542', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2543', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2544', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2545', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2546', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2547', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2548', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2549', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2550', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2551', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2552', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2553', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2554', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2555', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2556', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2557', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2558', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2559', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2560', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2561', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2562', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2563', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2564', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2565', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2566', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2567', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2568', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2569', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2570', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2571', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2572', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2573', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2574', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2575', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2576', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2577', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2578', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2579', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2580', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2581', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2582', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2583', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2584', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2585', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2586', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2587', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2588', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2589', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2590', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2591', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2592', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2593', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2594', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2595', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2596', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2597', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2598', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2599', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2600', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2601', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2602', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2603', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2604', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2605', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2606', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2607', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2608', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2609', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2610', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2611', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2612', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2613', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2614', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2615', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2616', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2617', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2618', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2619', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2620', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2621', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2622', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2623', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2624', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2625', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2626', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2627', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2628', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2629', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2630', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2631', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2632', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2633', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2634', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2635', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2636', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2637', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2638', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2639', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2640', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2641', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2642', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2643', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2644', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2645', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2646', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2647', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2648', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2649', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2650', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2651', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2652', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2653', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2654', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2655', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2656', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2657', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2658', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2659', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2660', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2661', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2662', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2663', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2664', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2665', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2666', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2667', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2668', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2669', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2670', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2671', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2672', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2673', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2674', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2675', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2676', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2677', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2678', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2679', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2680', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2681', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2682', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2683', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2684', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2685', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2686', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2687', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2688', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2689', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36');
INSERT INTO `register_pending_users` (`reg_id`, `nic`, `isregistered`, `updated_at`, `created_at`) VALUES
('CTSU/CJY/2690', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2691', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2692', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2693', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2694', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2695', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2696', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2697', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2698', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2699', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2700', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2701', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2702', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2703', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2704', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2705', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2706', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2707', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2708', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2709', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2710', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2711', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2712', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2713', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2714', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2715', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2716', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2717', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2718', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2719', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2720', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2721', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2722', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2723', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2724', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2725', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2726', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2727', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2728', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2729', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2730', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2731', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2732', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2733', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2734', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2735', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2736', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2737', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2738', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2739', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2740', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2741', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2742', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2743', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2744', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2745', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2746', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2747', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2748', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2749', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2750', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2751', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2752', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2753', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2754', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2755', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2756', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2757', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2758', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2759', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2760', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2761', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2762', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2763', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2764', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2765', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2766', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2767', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2768', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2769', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2770', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2771', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2772', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2773', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2774', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2775', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2776', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2777', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2778', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2779', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2780', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2781', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2782', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2783', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2784', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2785', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2786', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2787', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2788', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2789', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2790', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2791', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2792', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2793', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2794', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2795', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2796', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2797', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2798', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2799', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2800', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2801', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2802', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2803', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2804', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2805', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2806', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2807', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2808', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2809', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2810', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2811', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2812', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2813', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2814', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2815', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2816', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2817', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2818', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2819', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2820', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2821', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2822', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2823', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2824', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2825', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2826', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2827', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2828', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2829', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2830', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2831', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2832', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2833', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2834', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2835', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2836', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2837', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2838', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2839', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2840', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2841', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2842', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2843', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2844', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2845', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2846', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2847', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2848', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2849', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2850', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2851', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2852', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2853', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2854', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2855', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2856', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2857', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2858', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2859', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2860', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2861', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2862', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2863', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2864', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2865', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2866', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2867', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2868', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2869', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2870', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2871', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2872', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2873', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2874', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2875', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2876', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2877', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2878', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2879', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2880', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2881', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2882', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2883', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2884', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2885', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2886', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2887', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2888', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2889', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2890', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2891', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2892', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2893', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2894', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2895', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2896', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2897', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2898', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2899', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2900', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2901', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2902', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2903', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2904', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2905', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2906', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2907', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2908', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2909', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2910', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2911', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2912', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2913', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2914', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2915', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2916', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2917', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2918', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2919', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2920', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2921', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2922', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2923', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2924', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2925', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2926', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2927', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2928', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2929', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2930', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2931', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2932', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2933', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2934', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2935', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2936', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2937', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2938', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2939', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2940', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2941', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2942', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2943', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2944', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2945', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2946', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2947', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2948', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2949', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2950', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2951', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2952', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2953', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2954', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2955', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2956', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2957', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2958', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2959', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2960', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2961', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2962', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2963', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2964', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2965', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2966', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2967', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2968', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2969', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2970', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2971', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2972', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2973', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2974', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2975', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2976', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2977', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2978', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2979', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2980', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2981', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2982', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2983', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2984', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2985', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2986', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2987', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2988', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2989', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2990', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2991', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2992', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2993', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2994', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2995', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2996', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2997', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2998', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/2999', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36'),
('CTSU/CJY/3000', NULL, 0, '2020-03-04 07:07:36', '2020-03-04 07:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'editor', NULL, NULL),
(3, 'provincial_agent', NULL, NULL),
(4, 'district_agent', NULL, NULL),
(5, 'zonal_agent', NULL, NULL),
(6, 'division_agent', NULL, NULL),
(7, 'school_agent', NULL, NULL),
(8, 'super_admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_admins`
--

CREATE TABLE `role_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_admins`
--

INSERT INTO `role_admins` (`id`, `role_id`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 3, NULL, NULL),
(3, 1, 4, NULL, '2019-11-30 03:03:52'),
(4, 2, 5, NULL, '2019-11-30 03:07:51'),
(12, 4, 18, NULL, NULL),
(14, 4, 21, NULL, NULL),
(25, 1, 32, NULL, NULL),
(55, 5, 62, NULL, NULL),
(57, 3, 64, NULL, NULL),
(58, 3, 65, NULL, NULL),
(59, 3, 66, NULL, NULL),
(60, 3, 67, NULL, NULL),
(61, 3, 68, NULL, NULL),
(62, 3, 69, NULL, NULL),
(63, 3, 70, NULL, NULL),
(64, 3, 71, NULL, NULL),
(65, 3, 72, NULL, NULL),
(66, 3, 73, NULL, NULL),
(67, 3, 74, NULL, NULL),
(68, 3, 75, NULL, NULL),
(69, 3, 76, NULL, NULL),
(70, 3, 77, NULL, NULL),
(71, 3, 78, NULL, NULL),
(72, 3, 79, NULL, NULL),
(73, 3, 80, NULL, NULL),
(74, 3, 81, NULL, NULL),
(75, 3, 82, NULL, NULL),
(76, 3, 83, NULL, NULL),
(77, 3, 84, NULL, NULL),
(78, 3, 85, NULL, NULL),
(79, 3, 86, NULL, NULL),
(80, 3, 87, NULL, NULL),
(81, 3, 88, NULL, NULL),
(82, 3, 89, NULL, NULL),
(83, 3, 90, NULL, NULL),
(84, 3, 91, NULL, NULL),
(85, 3, 92, NULL, NULL),
(86, 3, 93, NULL, NULL),
(87, 3, 94, NULL, NULL),
(88, 3, 95, NULL, NULL),
(89, 3, 96, NULL, NULL),
(90, 3, 97, NULL, NULL),
(91, 3, 98, NULL, NULL),
(92, 3, 99, NULL, NULL),
(93, 3, 100, NULL, NULL),
(94, 3, 101, NULL, NULL),
(95, 3, 102, NULL, NULL),
(96, 3, 103, NULL, NULL),
(97, 3, 104, NULL, NULL),
(98, 3, 105, NULL, NULL),
(99, 3, 106, NULL, NULL),
(100, 3, 107, NULL, NULL),
(101, 3, 108, NULL, NULL),
(102, 3, 109, NULL, NULL),
(103, 3, 110, NULL, NULL),
(104, 3, 111, NULL, NULL),
(105, 3, 112, NULL, NULL),
(106, 3, 113, NULL, NULL),
(107, 3, 114, NULL, NULL),
(108, 3, 115, NULL, NULL),
(109, 3, 116, NULL, NULL),
(110, 3, 117, NULL, NULL),
(111, 3, 118, NULL, NULL),
(112, 3, 119, NULL, NULL),
(113, 3, 120, NULL, NULL),
(114, 3, 121, NULL, NULL),
(115, 3, 122, NULL, NULL),
(132, 4, 139, NULL, NULL),
(135, 6, 142, NULL, NULL),
(137, 7, 144, NULL, NULL),
(139, 4, 146, NULL, NULL),
(140, 6, 147, NULL, NULL),
(141, 6, 148, NULL, NULL),
(142, 6, 149, NULL, NULL),
(143, 7, 150, NULL, NULL),
(144, 7, 151, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `placename` varchar(100) DEFAULT NULL,
  `p_id` int(10) DEFAULT NULL,
  `d_id` int(10) DEFAULT NULL,
  `z_id` int(10) DEFAULT NULL,
  `div_id` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `t_count` int(100) DEFAULT NULL,
  `s_a_count` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `placename`, `p_id`, `d_id`, `z_id`, `div_id`, `created_at`, `updated_at`, `t_count`, `s_a_count`) VALUES
(1288, 'OPD-Ambilipitya', 399, 402, 495, 688, '2020-04-03 08:42:08', '2020-04-08 05:28:21', 2, 2),
(1290, 'OPD-Ambilipitiya', 399, 402, 493, 687, '2020-04-13 03:09:00', NULL, 1, 1),
(1292, 'ETU - Embilipitiya', 399, 402, 495, 688, '2020-04-14 22:03:31', NULL, NULL, 0),
(1293, 'test Department', 399, 402, 493, 687, '2020-04-14 22:31:48', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sentmesseges`
--

CREATE TABLE `sentmesseges` (
  `member_id` varchar(191) NOT NULL,
  `msg_id` int(11) NOT NULL,
  `msg_body` longtext,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sentmesseges`
--

INSERT INTO `sentmesseges` (`member_id`, `msg_id`, `msg_body`, `created_at`) VALUES
('0000345', 153, 'test', '2020-01-14 12:49:55'),
('0000790', 153, 'test', '2020-01-14 12:49:55'),
('1', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('1', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('1', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('1', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('1', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('1', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('1', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('1', 129, 'this is test message bu check error', '2019-07-20 05:28:10'),
('1', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('1', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('1', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('1', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('1', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('10', 56, 'cebtu', '2019-07-09 15:12:28'),
('100', 120, 'test new 20', '2019-07-20 03:11:23'),
('1000', 123, 'test 20 selected', '2019-07-20 04:00:36'),
('1000', 124, 'test 20 selected new', '2019-07-20 04:17:03'),
('101', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('101', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('101', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('101', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('101', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('102', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('102', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('102', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('102', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('102', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('10203', 161, 'hi', '2020-03-03 23:17:15'),
('103', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('103', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('103', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('103', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('103', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('104', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('104', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('104', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('104', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('104', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('105', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('105', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('105', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('105', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('105', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('106', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('106', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('106', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('106', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('106', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('107', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('107', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('107', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('107', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('107', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('108', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('108', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('108', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('108', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('108', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('109', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('109', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('109', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('109', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('109', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('11', 75, 'this is test multiple group messege', '2019-07-17 02:57:31'),
('11', 88, 'Welcome to CEBTU Online System This is test messsage after latest update group msg section  thank you', '2019-07-17 15:43:48'),
('11', 141, 'test', '2019-07-30 06:33:59'),
('110', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('110', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('110', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('110', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('110', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('111', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('111', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('111', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('111', 83, 'cebtu', '2019-07-17 13:39:03'),
('111', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('111', 85, 'this is test message after update', '2019-07-17 15:40:58'),
('111', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('111', 87, 'Welcome to CEBTU Online System This is test messsage  after latest updtate multiple messge by select user section thank you', '2019-07-17 15:42:57'),
('111', 88, 'Welcome to CEBTU Online System This is test messsage after latest update group msg section  thank you', '2019-07-17 15:43:48'),
('111', 89, 'this is test', '2019-07-17 15:49:42'),
('111', 90, 'cebtu', '2019-07-17 15:52:54'),
('111', 91, 'test dinesh', '2019-07-17 15:56:50'),
('111', 92, 'test dinesh', '2019-07-17 15:56:52'),
('111', 93, 'test dinesh', '2019-07-17 15:56:59'),
('111', 94, 'cebtu', '2019-07-17 15:59:47'),
('111', 95, 'test dinesh', '2019-07-17 16:03:48'),
('111', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('111', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('111', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('111', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('111', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('111', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('111', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('111', 103, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:56'),
('111', 104, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:06'),
('111', 105, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:08'),
('111', 106, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:10'),
('111', 107, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:16'),
('111', 108, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:18'),
('111', 109, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:20'),
('111', 110, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:27'),
('111', 111, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:29'),
('111', 112, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:31'),
('111', 113, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:37'),
('111', 114, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:39'),
('111', 115, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:41'),
('111', 116, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:47'),
('111', 117, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:49'),
('111', 118, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:50'),
('111', 119, 'CEBTU', '2019-07-17 18:40:16'),
('111', 129, 'this is test message bu check error', '2019-07-20 05:28:10'),
('111', 130, 'this is test messege', '2019-07-20 05:29:23'),
('111', 139, 'cebtubt', '2019-07-22 05:15:54'),
('111', 141, 'test', '2019-07-30 06:33:59'),
('111', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('111', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('111', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('111', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('111', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('112', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('112', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('112', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('112', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('112', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('113', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('113', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('113', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('113', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('113', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('1132332323', 152, 'test', '2020-01-14 12:48:09'),
('1132332323', 153, 'test', '2020-01-14 12:49:55'),
('114', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('114', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('114', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('114', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('114', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('115', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('115', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('115', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('115', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('115', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('116', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('116', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('116', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('116', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('116', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('116', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('116', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('116', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('116', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('116', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('116', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('116', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('116', 129, 'this is test message bu check error', '2019-07-20 05:28:10'),
('116', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('116', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('116', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('116', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('116', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('117', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('117', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('117', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('117', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('117', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('118', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('118', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('118', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('118', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('118', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('118', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('118', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('118', 129, 'this is test message bu check error', '2019-07-20 05:28:10'),
('118', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('118', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('118', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('118', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('118', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('12', 74, 'test', '2019-07-12 02:57:30'),
('12', 75, 'this is test multiple group messege', '2019-07-17 02:57:31'),
('12', 88, 'Welcome to CEBTU Online System This is test messsage after latest update group msg section  thank you', '2019-07-17 15:43:48'),
('12', 141, 'test', '2019-07-30 06:33:59'),
('1204', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('1204', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('1204', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('1204', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('1204', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('1204', 87, 'Welcome to CEBTU Online System This is test messsage  after latest updtate multiple messge by select user section thank you', '2019-07-17 15:42:57'),
('1204', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('1204', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('1204', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('1204', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('1204', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('1204', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('1204', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('1204', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('1204', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('1204', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('1231', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('1231', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('1231', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('1231', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('1231', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('1231', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('1231', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('1231', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('1231', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('1231', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('1231', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('1231', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('124567478967', 166, 'hii..', '2020-03-07 06:23:46'),
('124567478967', 168, 'test message', '2020-03-07 06:35:37'),
('126', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('126', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('126', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('126', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('126', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('126', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('126', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('126', 129, 'this is test message bu check error', '2019-07-20 05:28:10'),
('126', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('126', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('126', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('126', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('126', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('1268', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('1268', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('1268', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('1268', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('1268', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('1268', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('1268', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('1268', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('1268', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('1268', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('1268', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('1268', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('1268', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('1268', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('1268', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('1268', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('1268', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('1276', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('1276', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('1276', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('1276', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('1276', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('1276', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('1276', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('1276', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('1276', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('1276', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('1276', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('1276', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('13', 56, 'cebtu', '2019-07-09 15:12:28'),
('133', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('133', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('133', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('133', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('133', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('133', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('133', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('133', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('133', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('133', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('133', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('133', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('14', 56, 'cebtu', '2019-07-09 15:12:28'),
('14', 74, 'test', '2019-07-12 02:57:30'),
('14', 75, 'this is test multiple group messege', '2019-07-17 02:57:31'),
('14', 88, 'Welcome to CEBTU Online System This is test messsage after latest update group msg section  thank you', '2019-07-17 15:43:48'),
('14', 141, 'test', '2019-07-30 06:33:59'),
('15', 58, 'test', '2019-07-10 06:35:08'),
('15', 62, 'twst msg', '2019-07-10 08:04:32'),
('150', 125, 'selectdno2', '2019-07-20 04:19:35'),
('164', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('164', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('164', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('164', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('164', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('164', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('164', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('164', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('164', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('164', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('164', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('164', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('17', 62, 'twst msg', '2019-07-10 08:04:32'),
('1730', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('1730', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('1730', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('1730', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('1730', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('1730', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('1730', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('1730', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('1730', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('1730', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('1730', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('1730', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('19', 68, 'test', '2019-07-11 06:11:03'),
('19', 69, 'test all', '2019-07-11 06:15:43'),
('1975', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('1975', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('1975', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('1975', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('1975', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('1975', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('1975', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('1975', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('1975', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('1975', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('1975', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('1975', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('1975', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('1975', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('1975', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('1975', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('1975', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('2158963', 144, 'test31', '2019-07-31 03:38:39'),
('22', 64, 'test2', '2019-07-11 06:00:54'),
('22', 69, 'test all', '2019-07-11 06:15:43'),
('229', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('229', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('229', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('229', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('229', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('229', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('229', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('229', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('229', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('229', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('229', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('229', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('229', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('229', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('229', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('229', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('229', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('230', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('230', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('230', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('230', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('230', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('230', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('230', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('230', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('230', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51');
INSERT INTO `sentmesseges` (`member_id`, `msg_id`, `msg_body`, `created_at`) VALUES
('230', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('230', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('230', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('230', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('230', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('230', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('230', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('230', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('250', 121, 'test 20', '2019-07-20 03:57:00'),
('250', 122, 'test 20', '2019-07-20 03:58:42'),
('250', 125, 'selectdno2', '2019-07-20 04:19:35'),
('253', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('253', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('253', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('253', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('253', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('254', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('254', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('254', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('254', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('254', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('255', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('255', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('255', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('255', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('255', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('255', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('255', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('255', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('255', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('255', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('255', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('255', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('255', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('255', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('255', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('255', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('255', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('256', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('256', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('256', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('256', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('256', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('257', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('257', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('257', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('257', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('257', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('258', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('258', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('258', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('258', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('258', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('258947', 142, 'hhhh', '2019-07-30 06:39:29'),
('3', 48, 'Alert! CEBTU system is now on test run', '2019-07-07 22:46:09'),
('3', 49, 'Alert! CEBTU system is now on test run 2', '2019-07-07 22:49:13'),
('3', 50, 'Alert! CEBTU system is now on test run 2', '2019-07-07 22:50:44'),
('3', 53, 'this is test group message', '2019-07-08 01:16:30'),
('3', 54, 'this is test group messge 2', '2019-07-08 01:28:35'),
('3', 55, 'this is test', '2019-07-09 10:00:01'),
('30921', 156, 'trade union', '2020-02-18 03:59:27'),
('30921', 160, 'GOOD Morning', '2020-02-27 01:04:11'),
('30921', 163, 'test', '2020-03-05 17:03:18'),
('30921', 164, 'test', '2020-03-05 17:05:39'),
('30921', 166, 'hii..', '2020-03-07 06:23:46'),
('30921', 168, 'test message', '2020-03-07 06:35:37'),
('314', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('314', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('314', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('314', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('314', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('314', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('314', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('314', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('314', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('314', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('314', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('314', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('345', 152, 'test', '2020-01-14 12:48:09'),
('3535454', 153, 'test', '2020-01-14 12:49:55'),
('37850165455', 166, 'hii..', '2020-03-07 06:23:46'),
('37850165455', 168, 'test message', '2020-03-07 06:35:37'),
('385', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('385', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('385', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('385', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('385', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('385', 87, 'Welcome to CEBTU Online System This is test messsage  after latest updtate multiple messge by select user section thank you', '2019-07-17 15:42:57'),
('385', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('385', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('385', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('385', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('385', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('385', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('385', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('385', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('385', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('385', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('385', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('385', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('388', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('388', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('388', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('388', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('388', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('388', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('388', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('388', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('388', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('388', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('388', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('388', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('4', 46, 'Welcome To CEBTU This is test', '2019-07-07 21:34:20'),
('4', 48, 'Alert! CEBTU system is now on test run', '2019-07-07 22:46:09'),
('4', 49, 'Alert! CEBTU system is now on test run 2', '2019-07-07 22:49:13'),
('4', 50, 'Alert! CEBTU system is now on test run 2', '2019-07-07 22:50:44'),
('4', 55, 'this is test', '2019-07-09 10:00:01'),
('40', 79, 'test', '2019-07-17 05:52:26'),
('40', 81, 'selected test msg', '2019-07-17 06:06:58'),
('407', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('407', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('407', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('407', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('407', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('407', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('407', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('407', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('407', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('407', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('407', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('407', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('45', 65, 'test2', '2019-07-11 06:07:03'),
('451', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('451', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('451', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('451', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('451', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('453', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('453', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('453', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('453', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('453', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('45871', 143, 'single test', '2019-07-31 03:35:11'),
('45871', 144, 'test31', '2019-07-31 03:38:39'),
('473', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('473', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('473', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('473', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('473', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('474', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('474', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('474', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('474', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('474', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('475', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('475', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('475', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('475', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('475', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('476', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('476', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('476', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('476', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('476', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('488', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('488', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('488', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('488', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('488', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('5', 45, 'this is test', '2019-07-07 21:17:04'),
('5', 48, 'Alert! CEBTU system is now on test run', '2019-07-07 22:46:09'),
('5', 49, 'Alert! CEBTU system is now on test run 2', '2019-07-07 22:49:13'),
('5', 50, 'Alert! CEBTU system is now on test run 2', '2019-07-07 22:50:44'),
('5', 53, 'this is test group message', '2019-07-08 01:16:30'),
('5', 54, 'this is test group messge 2', '2019-07-08 01:28:35'),
('5', 55, 'this is test', '2019-07-09 10:00:01'),
('500', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('500', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('500', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('500', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('500', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('500', 87, 'Welcome to CEBTU Online System This is test messsage  after latest updtate multiple messge by select user section thank you', '2019-07-17 15:42:57'),
('500', 91, 'test dinesh', '2019-07-17 15:56:50'),
('500', 92, 'test dinesh', '2019-07-17 15:56:52'),
('500', 93, 'test dinesh', '2019-07-17 15:56:59'),
('500', 94, 'cebtu', '2019-07-17 15:59:47'),
('500', 95, 'test dinesh', '2019-07-17 16:03:48'),
('500', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('500', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('500', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('500', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('500', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('500', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('500', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('500', 130, 'this is test messege', '2019-07-20 05:29:23'),
('500', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('500', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('500', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('500', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('500', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('510', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('510', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('510', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('510', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('510', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('510', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('510', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('510', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('510', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('510', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('510', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('510', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('510', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('510', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('510', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('510', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('510', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('5487', 140, 'final test', '2019-07-30 06:28:13'),
('5487', 141, 'test', '2019-07-30 06:33:59'),
('5487', 142, 'hhhh', '2019-07-30 06:39:29'),
('555', 126, 'test20selected', '2019-07-20 05:00:39'),
('555', 128, 'select', '2019-07-20 05:17:31'),
('555', 131, 'this is test', '2019-07-20 05:32:49'),
('555', 132, 'test20group', '2019-07-20 05:33:41'),
('555', 133, 'selected test', '2019-07-20 05:35:28'),
('555', 134, 'select 2 page', '2019-07-20 05:37:55'),
('555', 135, 'selected', '2019-07-20 06:31:50'),
('555', 137, 'this is test', '2019-07-20 06:55:32'),
('555', 138, 'select no', '2019-07-20 07:01:24'),
('561', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('561', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('561', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('561', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('561', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('561', 87, 'Welcome to CEBTU Online System This is test messsage  after latest updtate multiple messge by select user section thank you', '2019-07-17 15:42:57'),
('561', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('561', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('561', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('561', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('561', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('561', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('561', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('561', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('561', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('561', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('561', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('561', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('581', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('581', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('581', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('581', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('581', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('581', 87, 'Welcome to CEBTU Online System This is test messsage  after latest updtate multiple messge by select user section thank you', '2019-07-17 15:42:57'),
('581', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('581', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('581', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('581', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('581', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('581', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('581', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('581', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('581', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('581', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('581', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('581', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('58596', 158, 'hhhhhhhhhhh', '2020-02-23 23:17:33'),
('6', 48, 'Alert! CEBTU system is now on test run', '2019-07-07 22:46:09'),
('6', 49, 'Alert! CEBTU system is now on test run 2', '2019-07-07 22:49:13'),
('6', 50, 'Alert! CEBTU system is now on test run 2', '2019-07-07 22:50:44'),
('6', 53, 'this is test group message', '2019-07-08 01:16:30'),
('6', 54, 'this is test group messge 2', '2019-07-08 01:28:35'),
('6', 55, 'this is test', '2019-07-09 10:00:01'),
('636', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('636', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('636', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('636', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('636', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('636', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('636', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('636', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('636', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('636', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('636', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('636', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('636', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('636', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('636', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('636', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('636', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('654123', 165, 'test', '2020-03-07 03:58:37'),
('654123', 166, 'hii..', '2020-03-07 06:23:46'),
('654123', 168, 'test message', '2020-03-07 06:35:37'),
('654123', 169, 'test ctsu', '2020-03-07 06:39:33'),
('654123', 170, 'kahara', '2020-03-07 06:42:43'),
('666', 127, 'test20', '2019-07-20 05:04:06'),
('673071007v', 154, 'mkd karanne', '2020-02-12 02:19:00'),
('673071007v', 155, 'mkd karanne', '2020-02-12 03:16:48'),
('673071007v', 159, 'GOOD Morning', '2020-02-27 00:51:20'),
('674', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('674', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('674', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('674', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('674', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('674', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('674', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('674', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('674', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('674', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('674', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('674', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('698', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('698', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('698', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('698', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('698', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('698', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('698', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('698', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('698', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('698', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('698', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('698', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('698', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('698', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('698', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('698', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('698', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('771', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('771', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('771', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('771', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('771', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('771', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('771', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('771', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('771', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('771', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('771', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('771', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('777', 127, 'test20', '2019-07-20 05:04:06'),
('777', 131, 'this is test', '2019-07-20 05:32:49'),
('777', 132, 'test20group', '2019-07-20 05:33:41'),
('790', 151, 'test', '2020-01-14 12:46:40'),
('790', 152, 'test', '2020-01-14 12:48:09'),
('8', 56, 'cebtu', '2019-07-09 15:12:28'),
('863', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('863', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('863', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('863', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('863', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('863', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('863', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('863', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('863', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('863', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('863', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('863', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('875', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('875', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('875', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('875', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('875', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('875', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33');
INSERT INTO `sentmesseges` (`member_id`, `msg_id`, `msg_body`, `created_at`) VALUES
('875', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('875', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('875', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('875', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('875', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('875', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('88', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('88', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('88', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('88', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('88', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('887', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('887', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('887', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('887', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('887', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('887', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('887', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('887', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('887', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('887', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('887', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('887', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('887', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('887', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('887', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('887', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('887', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('9', 56, 'cebtu', '2019-07-09 15:12:28'),
('90909000', 152, 'test', '2020-01-14 12:48:09'),
('90909000', 153, 'test', '2020-01-14 12:49:55'),
('943', 76, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 02:59:09'),
('943', 77, 'this is test mesage', '2019-07-17 03:14:44'),
('943', 78, 'Welcome to CEBTU Online System This is test messsage  thank you', '2019-07-17 03:15:22'),
('943', 84, 'Welcome to CEBTU Online System This is test messsage after new updates  thank you', '2019-07-17 15:25:05'),
('943', 86, 'Welcome to CEBTU Online System This is test messsage after next update  thank you', '2019-07-17 15:41:45'),
('943', 96, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
('943', 97, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
('943', 98, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
('943', 99, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
('943', 100, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
('943', 101, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
('943', 102, 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
('943', 145, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
('943', 146, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
('943', 147, '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
('943', 148, '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
('943', 149, '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
('96', 79, 'test', '2019-07-17 05:52:26'),
('96', 80, 'test single', '2019-07-17 05:55:35'),
('96', 81, 'selected test msg', '2019-07-17 06:06:58'),
('96', 82, 'Testing test', '2019-07-17 07:46:29'),
('96', 142, 'hhhh', '2019-07-30 06:39:29'),
('982022460V', 157, 'trade union', '2020-02-18 04:29:09'),
('999', 133, 'selected test', '2019-07-20 05:35:28'),
('999', 136, 'this is test', '2019-07-20 06:48:17'),
('999', 137, 'this is test', '2019-07-20 06:55:32'),
('999', 138, 'select no', '2019-07-20 07:01:24'),
('EMP00345678', 153, 'test', '2020-01-14 12:49:55'),
('EMP005678', 153, 'test', '2020-01-14 12:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `sent_group_messeges`
--

CREATE TABLE `sent_group_messeges` (
  `group_id` int(11) NOT NULL,
  `msg_id` int(11) NOT NULL,
  `group_name` text,
  `msg_body` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sent_group_messeges`
--

INSERT INTO `sent_group_messeges` (`group_id`, `msg_id`, `group_name`, `msg_body`, `created_at`) VALUES
(4, 75, 'Member Dstric', 'this is test multiple group messege', '2019-07-17 02:57:31'),
(10, 73, 'cebtu commity', 'this is test messege for last error', '2019-07-12 02:49:37'),
(10, 88, 'cebtu commity', 'Welcome to CEBTU Online System This is test messsage after latest update group msg section  thank you', '2019-07-17 15:43:48'),
(10, 89, 'cebtu commity', 'this is test', '2019-07-17 15:49:42'),
(10, 91, 'cebtu commity', 'test dinesh', '2019-07-17 15:56:50'),
(10, 92, 'cebtu commity', 'test dinesh', '2019-07-17 15:56:52'),
(10, 93, 'cebtu commity', 'test dinesh', '2019-07-17 15:56:59'),
(10, 94, 'cebtu commity', 'cebtu', '2019-07-17 15:59:47'),
(10, 95, 'cebtu commity', 'test dinesh', '2019-07-17 16:03:48'),
(10, 96, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:15'),
(10, 97, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:36'),
(10, 98, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:39'),
(10, 99, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:51'),
(10, 100, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:36:53'),
(10, 101, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:33'),
(10, 102, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:53'),
(10, 103, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:37:56'),
(10, 104, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:06'),
(10, 105, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:08'),
(10, 106, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:10'),
(10, 107, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:16'),
(10, 108, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:18'),
(10, 109, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:20'),
(10, 110, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:27'),
(10, 111, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:29'),
(10, 112, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:31'),
(10, 113, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:37'),
(10, 114, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:39'),
(10, 115, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:41'),
(10, 116, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:47'),
(10, 117, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:49'),
(10, 118, 'cebtu commity', 'Apa Sangamaye Pradana Nilathala Sadaha Ayadum Kirimata Kamathi Karaka Sabhikayin 2019.07.30 ta Pera Sangamaye Lipinayata Ayadumpatha Yomu Karanna - CEBTU', '2019-07-17 18:38:50'),
(10, 119, 'cebtu commity', 'CEBTU', '2019-07-17 18:40:16'),
(10, 129, 'cebtu commity', 'this is test message bu check error', '2019-07-20 05:28:10'),
(10, 145, 'cebtu community', '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:32'),
(10, 146, 'cebtu community', '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:32:41'),
(10, 147, 'cebtu community', '(COMMITTE ONLY ) Apa Sangamaye Warshika Maha Sammelanaya Dina 7.00 Am Ta Colombo Nawa nagara Shalawata Pamininena Lesa Oben Illa Sitimu - CEBTU', '2019-07-31 15:33:16'),
(10, 148, 'cebtu community', '(COMMITTE ONLY) Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahodarayage Mawa Hadisiye Abawappraththawiya - CEBTU', '2019-08-01 00:51:44'),
(10, 149, 'cebtu community', '(COMMITTE) Niwaradi Kirimai -  Abawappraththawi Atte Apa Sangamaye Maddiyama Karaka Sabhika Ranga Iresh Sahorayage Mawa Nowana Bawath Ee  Mathara Sewaya karana Ranga jayasinghe Sahosarayage Mawai -CEBTU', '2019-08-01 01:09:02'),
(11, 74, 'test', 'test', '2019-07-12 02:57:30'),
(11, 75, 'test', 'this is test multiple group messege', '2019-07-17 02:57:31'),
(11, 88, 'test', 'Welcome to CEBTU Online System This is test messsage after latest update group msg section  thank you', '2019-07-17 15:43:48'),
(11, 141, 'test', 'test', '2019-07-30 06:33:59'),
(13, 142, 'testtt', 'hhhh', '2019-07-30 06:39:29'),
(15, 144, 'test31', 'test31', '2019-07-31 03:38:39'),
(17, 131, 'test20', 'this is test', '2019-07-20 05:32:49'),
(17, 132, 'test20', 'test20group', '2019-07-20 05:33:41'),
(17, 167, 'Test CTSU  2', 'test', '2020-03-07 06:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `nic` varchar(191) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `homephone` varchar(191) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` text,
  `photo` text,
  `fblink` text,
  `twlink` text,
  `linkedinlink` text,
  `instalink` text,
  `email` text,
  `inRecycle` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `position`, `phone`, `nic`, `gender`, `homephone`, `dob`, `address`, `photo`, `fblink`, `twlink`, `linkedinlink`, `instalink`, `email`, `inRecycle`, `created_at`, `updated_at`) VALUES
(11, 'nayani nadeeka', 'nbnjnjmnm', '0232102200', '859856254v', 'male', '8985874999', '2020-02-04', 'rathnapura, peaffffff', '344410367.jpg', 'chaminisansala10maicom', 'df/fdjj', 'sfssf/frerjjn', 'dvfd/fefjj', 'chaminis5s0ala10@gmail.com', 0, '2020-02-01 04:26:43', '2020-02-24 04:46:19'),
(12, 'nuwani thakshi', 'djhgdb', '0302020102', '452541542v', 'female', '1020302010', '2020-02-18', 'nuwara', '1994204529.jpg', 'djndjhdjdj', 'jnsdhbdd/ddd', 'jndjhjd/ddd', 'njdbjdd/dd', 'jbhdghgh@gmai.com', 0, '2020-02-01 04:31:26', NULL),
(13, 'gayan diruksha', 'jhsgjjsh', '8748596857', '858595857v', 'male', '1458457845', '2020-02-21', 'hvdgwsh', '990087471.jpg', 'sbhfssf', 'uhfiehfhfhf', 'sdftebyhfj', 'iuyytr', 'kjuyudwu@gmail.com', 0, '2020-02-01 04:33:00', NULL),
(14, 'dinithi tharu', 'jdbhjd', '5698562561', '369896369v', 'female', '8547854125', '2020-02-10', 'dgergrh', '1826091022.jpg', 'gregethtfhjj', 'kjjhgffd', 'gdftdhydg', 'iuytghytg', 'jhudtt@gmail.com', 0, '2020-02-01 04:34:30', NULL),
(15, 'chamini', 'hfytgd', '6359856955', 'nisha', 'female', '0101454454', '2020-02-18', 'ujhtgrf', '1965257142.jpg', 'kjuhji', 'yrtfgyehdtg', 'iuyhtgf', 'hfytdg', 'hgftdb', 0, '2020-02-01 04:35:40', NULL),
(16, 'chathu nimmi', 'hgftdg', '2012652412', '652569856v', 'female', '6859852451', '2020-02-18', 'iujdhgys', '751949951.jpg', 'schdgtye', 'ujhyggft', 'dhcgfbf', 'njhgfbvgd', 'hdgyugu@gmail.com', 0, '2020-02-01 04:37:32', NULL),
(17, 'nadee raj', 'jghfcjhgf', '2120232012', '748596548v', 'female', '6585698569', '2020-02-12', 'gampaha', '141294985.jpg', 'facebkmm', 'twittwreb', 'kjuyfgbf', 'instraafns', 'ggggg@gmail.com', 0, '2020-02-01 04:39:04', NULL),
(18, 'yasith prema', 'hjgjh', '8587458745', '654147548v', 'male', '5425874587', '2020-02-04', 'jkdfnjb', '397984058.jpg', 'yttyfytfyf', 'jhjfghghgv', 'ujhkjhkhughuygy@ghhg', 'uyik', 'uhjhnjh', 0, '2020-02-01 04:45:44', NULL),
(19, 'yamuna chanchali', 'ascvvc', '2023254152', '858585858v', 'female', '3256235210', '2020-02-14', 'fgggkjhg', '355879813.jpg', 'wertyuiiuy', 'rfvbgtyhn', 'gfdssert', 'asdfgas', 'dfgh@gmail.com', 0, '2020-02-01 05:23:01', NULL),
(20, 'diniithi kasunika', 'scv', '2120120120', '745898574v', 'female', '0236523023', '2020-02-12', 'sdfgh', '1838778276.jpg', 'ertyui', 'nbvdd', 'qqqsdf', 'ygcfffff', 'qwerrr@gmail.com', 0, '2020-02-01 05:25:24', NULL),
(21, 'gimhani', 'rreee', '9996663333', '220000000v', 'male', '3333666999', '2020-02-18', 'rathnapura, peaffffff', NULL, 'chabbmini/hhh', 'hfhf/fff', 'ddcc/ccc', 'eefff/fff', 'hdhhdh9999@gmail.com', 0, '2020-02-11 06:07:14', NULL),
(22, 'gayani', 'tvtvtv', '0000111144', '775588855', 'male', '4411110000', '2020-02-15', 'hdhdhdd/gfgfgf', NULL, 'tete/yeye', 'ututu/nnncc', 'wwws/sssss', 'sss/dddw', 'aazxx@gmail.com', 0, '2020-02-11 06:13:36', NULL),
(23, 'nimmi', 'bbhhh', '006655223', '000088999', 'male', '3322558877', '2020-02-19', 'rathnapura, peaffffff', NULL, 'chaminisansjjnn5544@gmail.com', 'hhnn', 'yyyyyyyyy', 'jjjjjjjjjjjjjjj', 'hhhhhb@gmail.com', 0, '2020-02-11 06:46:03', NULL),
(24, 'chamini', 'hgvhg', '0011558899', '5556662223', 'male', '7788556622', '2020-02-20', 'rathnapura, peaffffff', NULL, 'chaminisansala88999hbhb', 'gggggg/gfvvs', 'cvbn/cvbn', 'dfgh/cvbn', 'chaminisansala88999@gmail.com', 0, '2020-02-17 04:42:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subname` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `t_count` int(200) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subname`, `created_at`, `updated_at`, `t_count`) VALUES
(2, 'English O/L', '2020-01-07 23:51:04', '2020-01-07 23:52:25', 1),
(3, 'Doctor', '2020-04-03 03:17:28', NULL, 2),
(4, 'Nurse', '2020-04-03 03:17:46', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `training_collages`
--

CREATE TABLE `training_collages` (
  `id` int(11) NOT NULL,
  `placename` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transfer_cycle`
--

CREATE TABLE `transfer_cycle` (
  `c_id` int(30) NOT NULL,
  `started_at` text,
  `ended_at` text,
  `t_p_c` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `c_state` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer_cycle`
--

INSERT INTO `transfer_cycle` (`c_id`, `started_at`, `ended_at`, `t_p_c`, `created_at`, `c_state`) VALUES
(21, 'Area Electrical  Engineer  Katugastota', 'Nikawaratiya Consumer Service Centre', 9, '2019-11-27 23:28:46', 1),
(22, 'Nikawaratiya Consumer Service Centre', 'Nikawaratiya Consumer Service Centre', 9, '2019-11-27 23:41:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_cycles_info`
--

CREATE TABLE `transfer_cycles_info` (
  `ci_id` int(10) NOT NULL,
  `emp_no` varchar(30) DEFAULT NULL,
  `t_ref_id` int(100) DEFAULT NULL,
  `c_id` int(100) DEFAULT NULL,
  `t_order` int(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `t_from` text,
  `t_to` text,
  `t_reason` text,
  `s_reason` text,
  `t_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer_cycles_info`
--

INSERT INTO `transfer_cycles_info` (`ci_id`, `emp_no`, `t_ref_id`, `c_id`, `t_order`, `name`, `t_from`, `t_to`, `t_reason`, `s_reason`, `t_date`) VALUES
(31, '032026', 2455, 21, 1, 'Mr. A.K.K.M.G. SENARATH BANDARA', 'Area Electrical  Engineer  Katugastota', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Service Completion and Circular Instruction', 'test', '2019-11-27 23:28:46'),
(32, '038910', 2518, 21, 2, 'Mr. D.M.H.D. Disanayake', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Chief Engineer (Ukuwela Power Station)', NULL, 'test', '2019-11-27 23:29:14'),
(33, '039362', 2538, 21, 3, 'Mr. K.G.L.B. Wijerathne', 'Chief Engineer (Ukuwela Power Station)', 'Area Electrical  Engineer  Katugastota', NULL, 'test', '2019-11-27 23:29:53'),
(34, '029211', 2456, 22, 1, 'Mr. T.G. SILVA.', 'Nikawaratiya Consumer Service Centre', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Service Completion and Circular Instruction', 'test transfer', '2019-11-27 23:41:07'),
(35, '038923', 2519, 22, 2, 'Mr. A.T.D. De Silva', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Chief Engineer  - Laxapana Power Station', NULL, 'test', '2019-11-27 23:41:50'),
(36, '036085', 2475, 22, 3, 'Mr. U.R.S. Wikcramasingha', 'Chief Engineer  - Laxapana Power Station', 'Electrical  Engineer  - Samanala Power Station', 'Service Completion and Circular Instruction', 'according his working time transfered to 1 preference', '2019-11-27 23:44:48'),
(37, '034000', 2462, 22, 4, 'Mr. M.A.W.L. Kumarasingha', 'Electrical  Engineer  - Samanala Power Station', 'Chief Engineer  - Laxapana Power Station', 'Service Completion and Circular Instruction', 'according to  his working time', '2019-11-27 23:46:37'),
(38, '036204', 2488, 22, 5, 'Mr. I.A.S.R Ilangakoon', 'Chief Engineer  - Laxapana Power Station', 'Electrical  Engineer  - Wimalasurendra Power Station', 'Service Completion and Circular Instruction', 'transfered to his 1st prefrence according to his working period', '2019-11-27 23:47:51'),
(39, '037299', 2483, 22, 6, 'Mr. R.M.O Achalan', 'Electrical  Engineer  - Wimalasurendra Power Station', 'Electrical  Engineer  - Canyon Power Station', 'Service Completion and Circular Instruction', 'transfered to 1st prefrence according his work period', '2019-11-27 23:49:19'),
(40, '036115', 2461, 22, 7, 'Mr. M.A.P. Kumara', 'Electrical  Engineer  - Canyon Power Station', 'Electrical  Engineer  - Samanala Power Station', 'Service Completion and Circular Instruction', 'transfred to  his 1st preference according his  work period', '2019-11-27 23:50:30'),
(41, '041341', 2616, 22, 8, 'Mr. G.J.V.H. Suren', 'Electrical  Engineer  - Samanala Power Station', 'Chief Engineer  - Laxapana Power Station', 'To facilitate education of children,', 'transfered to his 1st preference', '2019-11-27 23:55:19'),
(42, '040839', 2603, 22, 9, 'Mr. W.R.C.S. Widanarathna', 'Chief Engineer  - Laxapana Power Station', 'Nikawaratiya Consumer Service Centre', 'Service Completion and Circular Instruction', 'no vacancies in his preferences', '2019-11-27 23:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `transfer_request_list`
--

CREATE TABLE `transfer_request_list` (
  `t_ref_id` int(100) NOT NULL,
  `emp_id` varchar(30) NOT NULL,
  `ref_id` int(10) DEFAULT NULL,
  `name` text,
  `dob` text,
  `p_w_s` longtext,
  `m_s` text,
  `r_d_f_p_w_s` text,
  `years` int(10) DEFAULT NULL,
  `p_1` text,
  `p_2` text,
  `p_3` text,
  `r_f_t` text,
  `address` text,
  `t_state` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer_request_list`
--

INSERT INTO `transfer_request_list` (`t_ref_id`, `emp_id`, `ref_id`, `name`, `dob`, `p_w_s`, `m_s`, `r_d_f_p_w_s`, `years`, `p_1`, `p_2`, `p_3`, `r_f_t`, `address`, `t_state`, `created_at`, `updated_at`) VALUES
(2455, '032026', 1, 'Mr. A.K.K.M.G. SENARATH BANDARA', '1970-01-01', 'Area Electrical  Engineer  Katugastota', 'Married', '1970-01-01', 19, 'Area Electrical Engineer Dambulla', 'Area Electrical  Engineer   Kekirawa', 'Area Electrical  Engineer  Kurunegala', 'Service Completion and Circular Instruction', 'NO: 207/A PENALABADA NAULA', 1, '2019-11-27 18:30:00', NULL),
(2456, '029211', 2, 'Mr. T.G. SILVA.', '1970-01-01', 'Nikawaratiya Consumer Service Centre', 'Married', '1970-01-01', 18, 'Pothuhara  Consumer Service Centre', 'Gokaralla Consumer Service Centre', NULL, 'Service Completion and Circular Instruction', ' PALLEGETTUWANA, DAMBULLA ROAD,', 1, '2019-11-27 18:30:00', NULL),
(2457, '026333', 3, 'Mr. R.B. PUNCHIBANDA', '1970-01-01', 'Hakmana  Consumer Service Centre', 'Married', '1970-01-01', 17, 'Beliatha Consumer Service Centre', 'Tangalle Consumer Service Centre', NULL, 'Service Completion and Circular Instruction', 'Thannpita, Kirinda, Puhulwella.', 0, '2019-11-27 18:30:00', NULL),
(2458, '031933', 4, 'Mr. M.A. RANJITH', '1970-01-01', 'Chief Engineer (Randenigala,Rantambe Power Station)', 'Married', '1970-01-01', 14, 'Electrical Engineer - Udawalawe Power Station', 'Project Director (Uma Oya Hydro Power Project)', 'Chief Engineer -  Samanalawewa  Power Station', NULL, '106/1 Before Bored ', 0, '2019-11-27 18:30:00', NULL),
(2459, '034603', 5, 'Mr. W.A.P. KUSUMTHILAKA', '1970-01-01', 'Ja-Ela Maintenance Unit', 'Married', '1970-01-01', 13, 'Area Electrical  Engineer  Gampaha', NULL, NULL, NULL, 'NO 208  NIWANDAWA', 0, '2019-11-27 18:30:00', NULL),
(2460, '034381', 6, 'Mr. N.G.I.P. PIYADASA', '1970-01-01', 'Area Electrical  Engineer  Ruwanwella', 'Unmarried', '1970-01-01', 13, 'Area Electrical  Engineer  Kegalla', 'Area Electrical  Engineer  Veyangoda', NULL, NULL, 'C70, MAHINKANDA, DIHIOWITA.', 0, '2019-11-27 18:30:00', NULL),
(2461, '036115', 7, 'Mr. M.A.P. Kumara', '1970-01-01', 'Electrical  Engineer  - Canyon Power Station', 'Married', '1970-01-01', 13, 'Electrical  Engineer  - Samanala Power Station', 'Chief Engineer  - Laxapana Power Station', NULL, 'Service Completion and Circular Instruction', ' Aberdeen 2 ', 1, '2019-11-27 18:30:00', NULL),
(2462, '034000', 8, 'Mr. M.A.W.L. Kumarasingha', '1970-01-01', 'Electrical  Engineer  - Samanala Power Station', 'Married', '1970-01-01', 13, 'Chief Engineer  - Laxapana Power Station', 'Project Director (Broadland Hydropower Project)', 'Chief Engineer  ( Sapugaskanda Power Station )', 'Service Completion and Circular Instruction', 'No: 04, Badupola, Ginigathhena.', 1, '2019-11-27 18:30:00', NULL),
(2463, '033805', 9, 'Mr. N.R.K. THABREW', '1970-01-01', 'Chief Engineer (Operation & Maintenance) - Galle', 'Married', '1970-01-01', 13, 'Chief Engineer (Energy Management) - Southern Province', 'Deputy General Manager (Southern  Province)', NULL, 'Service Completion and Circular Instruction', '21/2 Kandegoda Patumaga Wiharagoda', 0, '2019-11-27 18:30:00', NULL),
(2464, '033692', 10, 'Mr. W.A.K.C.U. KUMARA', '1970-01-01', 'Colombo West - Depot II', 'Married', '1970-01-01', 13, 'Area Electrical  Engineer  Matara', NULL, NULL, 'Travelling Distance, As per the circular requirement,', 'NO 59  1/1, KONAYA KORATUWA, SEENIPALLA, MULATIYANA,', 0, '2019-11-27 18:30:00', NULL),
(2465, '034721', 11, 'Mr. P. Suthakaran', '1970-01-01', 'Akkaraipaththu  Consumer Service Centre', 'Married', '1970-01-01', 13, 'Manager (Investigation)', 'Electrical Engineer (Planning) - EP', 'Area Electrical  Engineer   Ampara', 'Any other,', ' Main street Thampaddai-02', 0, '2019-11-27 18:30:00', NULL),
(2466, '019750', 12, 'Mr. N.T.W.L. Pinthu', '1970-01-01', 'Deputy General Manager (Project & Heavy Maint.) - R 3', 'Married', '1970-01-01', 13, 'Chief Engineer (Power Plant)- Assets Mgt.  & Centralised Services', NULL, NULL, 'Service Completion and Circular Instruction', '273/1/C, Sudharshana Mawatha, Malambe.', 0, '2019-11-27 18:30:00', NULL),
(2467, '032028', 13, 'Mr. A.L.G. KAMALSIRI', '1970-01-01', 'Area Electrical  Engineer Ginigathhena', 'Married', '1970-01-01', 12, 'Area Electrical  Engineer  Nawalapitiya', 'Area Electrical  Engineer  Peradeniya', NULL, 'Service Completion and Circular Instruction', '\"NILWALA\" ADIYADENIYA RAMBUKPITIYA', 0, '2019-11-27 18:30:00', NULL),
(2468, '035131', 14, 'Mr. L.S.K. DE SILVA', '1970-01-01', 'Horana  Consumer Service Centre', 'Married', '1970-01-01', 12, 'Chief  Engineer  (Construction) - WPS II', 'Area Electrical  Engineer  Kalutara', 'Area Electrical  Engineer  Bandaragama', 'Service Completion and Circular Instruction', 'No. 215, Walpita Rd., Ballapitiya Horana', 0, '2019-11-27 18:30:00', NULL),
(2469, '034340', 15, 'Mr. R.H.C. KITHSIRI', '1970-01-01', 'Cinnamon Gardens', 'Married', '1970-01-01', 12, 'Area Electrical  Engineer  Ratnapura', 'Kuruwita Consumer Service Centre', 'Area Electrical  Engineer  Ratnapura', 'ill health of parents (dependents),', '57/51 POLHENGODA RATHNAPURA', 0, '2019-11-27 18:30:00', NULL),
(2470, '036073', 16, 'Mr. N.G. Weerarathna', '1970-01-01', 'Electrical  Engineer  - Canyon Power Station', 'Married', '1970-01-01', 12, 'Electrical  Engineer  - Wimalasurendra Power Station', NULL, NULL, 'Service Completion and Circular Instruction', ' Kiriwaneliya ', 0, '2019-11-27 18:30:00', NULL),
(2471, '035308', 17, 'Mr. R.P.D. SUJEEWA', '1970-01-01', 'Colombo South  Depot II', 'Married', '1970-01-01', 12, 'Project Director (Uma Oya Hydro Power Project)', NULL, NULL, 'Service Completion and Circular Instruction', 'KOTTEGODA UDAGAMA SPRINGVALI', 0, '2019-11-27 18:30:00', NULL),
(2472, '027145', 18, 'Mr. D. JAYAWEERA', '1970-01-01', 'Area Electrical Engineer    Horana', 'Married', '1970-01-01', 11, 'Area Electrical  Engineer  Bandaragama', NULL, NULL, 'Service Completion and Circular Instruction', 'No.347/1, 11th Lane, Dikhenapura, Munagama,', 0, '2019-11-27 18:30:00', NULL),
(2473, '035444', 19, 'Mr. A.M.S.J. Atthanayake', '1970-01-01', 'Chief Engineer (PHM) - R1', 'Married', '1970-01-01', 11, 'Nawalapitiya  Consumer Service Centre', 'Kuruduwatta Consumer Service Centre', 'Gampola  Consumer Service Centre', 'To facilitate education of children, Travelling Distance,', 'No.133 Rambukpitiya Nawalapitiya', 0, '2019-11-27 18:30:00', NULL),
(2474, '035434', 20, 'Mr. M.R.N.K. COSTHA', '1970-01-01', 'Rathmalana Consumer Service Centre', 'Married', '1970-01-01', 11, 'Pannipitiya Consumer Service Centre', NULL, NULL, 'Traveling Problems', '371/2, ANGAMPITIYA, PADDUKKA.', 0, '2019-11-27 18:30:00', NULL),
(2475, '036085', 21, 'Mr. U.R.S. Wikcramasingha', '1970-01-01', 'Chief Engineer  - Laxapana Power Station', 'Married', '1970-01-01', 11, 'Electrical  Engineer  - Samanala Power Station', 'Electrical  Engineer  - Wimalasurendra Power Station', 'Electrical  Engineer  - Canyon Power Station', 'Service Completion and Circular Instruction', 'Q 43 Building Side ', 1, '2019-11-27 18:30:00', NULL),
(2476, '035791', 22, 'Mr. M.C. JAYAWICKRAMA', '1970-01-01', 'Electrical Engineer (Construction) - Colombo City', 'Married', '1970-01-01', 11, 'Chief Engineer (Power Plant)- Assets Mgt.  & Centralised Services', NULL, NULL, 'Service Completion and Circular Instruction', ' MADELAGAMA JANAPADHAYA UDAHAWPE', 0, '2019-11-27 18:30:00', NULL),
(2477, '035776', 23, 'Mr. R.A.K.G.L. THILAKARATHNA', '1970-01-01', 'Cheif Engineer  (Operation) - Colombo City', 'Married', '1970-01-01', 11, 'Ratnapura Town  Consumer Service Centre', NULL, NULL, 'Service Completion and Circular Instruction', 'NO 281/11 5TH LANE MIHIDUGAMA', 0, '2019-11-27 18:30:00', NULL),
(2478, '035678', 24, 'Mr. W.A.P.C. WEERASINGHE', '1970-01-01', 'Chief  Engineer (Distribution & Maintenance) - WPS II', 'Married', '1970-01-01', 11, 'Chief Engineer   -  Kukuleganga Power Station', 'Electrical Engineer - Udawalawe Power Station', 'Electrical  Engineer  - Samanala Power Station', 'Service Completion and Circular Instruction', 'No.C106/1 Poththakumbura Ehaliyagoda', 0, '2019-11-27 18:30:00', NULL),
(2479, '035921', 25, 'Mr. P.M. Dinesh Udayanga', '1970-01-01', 'Electrical Engineer (Construction) - Trincomalee Site', 'Married', '1970-01-01', 11, 'Area Electrical  Engineer   Trincomalee', 'Trincomalee Consumer Service Centre', 'Store Keeper (Provincial) - EP', 'To work in a different exposure,', 'No. 520/A, Mihindupura, Trincomalee', 0, '2019-11-27 18:30:00', NULL),
(2480, '035938', 26, 'Mr. M.K.D. GUNATHILAKE', '1970-01-01', 'Chief  Engineer  (Commercial) - WPS II', 'Married', '1970-01-01', 11, 'Thulhiriya Grid Substation', 'Rambukkana Consumer Service Centre', NULL, NULL, '20 Galapitamada Road Thunthota', 0, '2019-11-27 18:30:00', NULL),
(2481, '035407', 27, 'Mr. D.M.B. Jeevathpriya Gemunu Kumara', '1970-01-01', 'Ampara Consumer Service Centre', 'Married', '1970-01-01', 11, 'Electrical Engineer (Construction) - Ampara Site', NULL, NULL, 'Service Completion and Circular Instruction', '1/B 38,  Namal Oya,', 0, '2019-11-27 18:30:00', NULL),
(2482, '030970', 28, 'Mr. R.L RAJAPAKSA', '1970-01-01', 'Kuruwita Consumer Service Centre', 'Married', '1970-01-01', 10, 'Ratnapura Town  Consumer Service Centre', 'Ehaliyagoda  Consumer Service Centre', 'Kiriella Consumer Service Centre', 'Service Completion and Circular Instruction', '06, GANEGODA, RATHNAPURA.', 0, '2019-11-27 18:30:00', NULL),
(2483, '037299', 29, 'Mr. R.M.O Achalan', '1970-01-01', 'Electrical  Engineer  - Wimalasurendra Power Station', 'Married', '1970-01-01', 10, 'Electrical  Engineer  - Canyon Power Station', NULL, NULL, 'Service Completion and Circular Instruction', 'No: 12 Keselgamu Kanda ', 1, '2019-11-27 18:30:00', NULL),
(2484, '036189', 30, 'Mr. H.K. CHATHURANGA', '1970-01-01', 'Horana  Consumer Service Centre', 'Married', '1970-01-01', 10, 'Chief Engineer    Homagama', 'Hanwella Consumer Service Centre', 'Padukka Consumer Service Centre', 'Travelling Distance, Any other,', '44 Beliattawila Kanawala', 0, '2019-11-27 18:30:00', NULL),
(2485, '036235', 31, 'Mr. S.H. Handrison', '1970-01-01', 'Chief Engineer (PHM) - R1', 'Unmarried', '1970-01-01', 10, 'Seethawaka Grid Substation', 'Kosgama Grid Substation', 'Rathnapura Grid Substation', NULL, 'No.27/F Old Railway Rd Getahettha', 0, '2019-11-27 18:30:00', NULL),
(2486, '036296', 32, 'Mr. D.A.C.P. Dassanayake', '1970-01-01', 'Chief Engineer (PHM) - R1', 'Married', '1970-01-01', 10, 'Thulhiriya Grid Substation', 'Area Electrical  Engineer  Kurunegala', 'Mallawapitiya Grid  Substation', 'Service Completion and Circular Instruction', ' Opatha Alawwa', 0, '2019-11-27 18:30:00', NULL),
(2487, '036257', 33, 'Mr. M.G.N.B. MEEGAHAPITIYA', '1970-01-01', 'Colombo North  - Depot I', 'Married', '1970-01-01', 10, 'Mawanella Consumer Service Centre', 'Kegalla Consumer Service Centre', 'Dippitiya Consumer Service Centre', 'Any other,', ' Meegahpitiya Gedara UDATTAWA', 0, '2019-11-27 18:30:00', NULL),
(2488, '036204', 34, 'Mr. I.A.S.R Ilangakoon', '1970-01-01', 'Chief Engineer  - Laxapana Power Station', 'Unmarried', '1970-01-01', 10, 'Electrical  Engineer  - Wimalasurendra Power Station', 'Electrical  Engineer  - Canyon Power Station', 'Electrical  Engineer  - Samanala Power Station', 'Service Completion and Circular Instruction', '215/1 Weralugasthenna ', 1, '2019-11-27 18:30:00', NULL),
(2489, '036329', 35, 'Mr. B.G.M. THARAKA', '1970-01-01', 'Deputy General Manager  (Communication) - Transmission', 'Married', '1970-01-01', 10, 'Chief Engineer  ( Sapugaskanda Power Station )', 'Chief Engineer (Sapugaskanda Power Station)', 'Chief Engineer  ( Sapugaskanda Power Station )', 'Any other,', 'No: 40 Karapincha Road Heedellana', 0, '2019-11-27 18:30:00', NULL),
(2490, '035457', 36, 'Mr. R.K.A.C.B. Jayasinge', '1970-01-01', 'Electrical Engineer (Nilambe Power Station)', 'Married', '1970-01-01', 10, 'CE (Central Workshop & Garage)', 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, NULL, '96/1 Doluwa Menikdewela', 0, '2019-11-27 18:30:00', NULL),
(2491, '035982', 37, 'Mr. D.A. KARUNARATHNA', '1970-01-01', 'Deputy General Manager (Project & Heavy Maint.) - R 4', 'Unmarried', '1970-01-01', 10, 'Kalubowila Consumer Service Centre', 'Electrical Engineer (Government Installation)', 'Chief Engineer  (Kelanitissa Power Station)', 'ill health of parents (dependents),', '172/3, Sri Saranathissa Mawatha, Kahathuduwa,', 0, '2019-11-27 18:30:00', NULL),
(2492, '036449', 38, 'Mr. M.P.T. MADUSHANKA', '1970-01-01', 'Chief Engineer (Distribution & Maintenance) - WPS 1', 'Married', '1970-01-01', 10, 'Area Electrical  Engineer  Rathmalana', 'Area Electrical  Engineer  Bandaragama', 'Area Electrical Engineer    Horana', 'Service Completion and Circular Instruction', '390/B RERUKANA GOVI JANAPADAYA', 0, '2019-11-27 18:30:00', NULL),
(2493, '035701', 39, 'Mr. K.S.C. Diyathilaka', '1970-01-01', 'Electrical  Engineer   -   Inginiyagala Power Station', 'Married', '1970-01-01', 9, 'Ampara Consumer Service Centre', 'Kalumunai Consumer Service Centre', 'Inginiyagala Consumer Service Centre', NULL, '27, Samagipura, Hingurana,', 0, '2019-11-27 18:30:00', NULL),
(2494, '037300', 40, 'Mr. R.D. MAHESH GUNARATHNE', '1970-01-01', 'Ragama Consumer Service Centre', 'Unmarried', '1970-01-01', 9, 'Kirillawala   Consumer Service Centre', 'Mawaramandiya  Consumer Service Centre', 'Delgoda  Consumer Service Centre', NULL, '328 WEBADA SOUTH ', 0, '2019-11-27 18:30:00', NULL),
(2495, '037318', 41, 'Mr. B.G.N.K. RATHNASIRI', '1970-01-01', 'Mawaramandiya  Consumer Service Centre', 'Unmarried', '1970-01-01', 9, 'Area Electrical  Engineer  Katugastota', 'Area Electrical  Engineer  Kundasale', 'Chief Engineer (Ukuwela Power Station)', NULL, '17/3 MEEGAMMANA NORTH (7 TH BLOCK), WATTEGAMA', 0, '2019-11-27 18:30:00', NULL),
(2496, '037280', 42, 'Mr. A.A.A. RANGANA', '1970-01-01', 'Chief Engineer (Operation & Maintenance) - Anuradhapura', 'Married', '1970-01-01', 9, 'Chief Engineer (Protection Development) - Transmission Design and Envirnment', 'Deputy General Manager  (Communication) - Transmission', NULL, 'Service Completion and Circular Instruction', '25/36 ARADHANAKANDA WATTA ', 0, '2019-11-27 18:30:00', NULL),
(2497, '037272', 43, 'Mr. P.R.N. THARAKA', '1970-01-01', 'Deputy General Manager  (Communication) - Transmission', 'Unmarried', '1970-01-01', 9, 'Chief Engineer  ( Sapugaskanda Power Station )', 'Deputy General Manager (Asset  Management - Thermal  Electrical)', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Service Completion and Circular Instruction', '16/B pahala weediya watta ', 0, '2019-11-27 18:30:00', NULL),
(2498, '037308', 44, 'Mr. S. BOPAGE', '1970-01-01', 'Old A\'pura Grid Substation', 'Married', '1970-01-01', 9, 'Anuradhapura City  Consumer Service Centre', 'Mihintale Consumer Service Centre', NULL, 'ill health of parents (dependents), Travelling Distance, As per the circular requirement, Any other,', ' Karanagollewa Pihimbiyagollewa', 0, '2019-11-27 18:30:00', NULL),
(2499, '037285', 45, 'Mr. K. ANUSHA SANJAYA', '1970-01-01', 'Chief Engineer (Distribution & Maintenance) - Southern Province', 'Married', '1970-01-01', 9, 'Chief Engineer (Energy Management) - Southern Province', 'Electrical  Engineer (System Planing) - Southern Province', 'Weligama Consumer Service Centre', 'Service Completion and Circular Instruction', 'SANJAYA YONWATTA, LANUMODARA,', 0, '2019-11-27 18:30:00', NULL),
(2500, '037640', 46, 'Mr. A.V. SURAWEERA', '1970-01-01', 'Chief Engineer (Distribution Maintenance) - Sabaragamuwa Province', 'Unmarried', '1970-01-01', 9, 'Area Electrical  Engineer Tangalle', 'Sooriyawewa  Consumer Service Centre', NULL, 'ill health of parents (dependents),', 'Suraweera House Near Water Board, New Town Ebilipitiya', 0, '2019-11-27 18:30:00', NULL),
(2501, '037550', 47, 'Mr. M.H. Jeewantha', '1970-01-01', 'Deputy General Manager (Project & Heavy Maint.) - R 3', 'Married', '1970-01-01', 9, 'Pannipitiya Consumer Service Centre', 'Welivita Consumer Service Centre', 'Padukka Consumer Service Centre', 'ill health of parents (dependents), Travelling Distance, To work in a different exposure, Any other,', '207/C Walpita Batawala', 0, '2019-11-27 18:30:00', NULL),
(2502, '037617', 48, 'Mr. H.K. THUSITHA KUMARA', '1970-01-01', 'Galle Consumer Service Centre', 'Married', '1970-01-01', 9, 'Chief Engineer (Energy Management) - Southern Province', NULL, NULL, 'Service Completion and Circular Instruction', ' KIRINAUDAYA WATTA, THALGAMPALA,', 0, '2019-11-27 18:30:00', NULL),
(2503, '037601', 49, 'Mr. Y.H.S. PRIYANJITH', '1970-01-01', 'High Tension Maintenance - Primary Sub Maintenance', 'Married', '1970-01-01', 9, 'Chief Engineer  ( Sapugaskanda Power Station )', 'Electrical  Engineer  (Meter Lab    R - 3)', 'Electrical  Engineer  - Samanala Power Station', 'Service Completion and Circular Instruction', 'NO 187/1 A, WIPULAGNANA MW, (2ND LANE),', 0, '2019-11-27 18:30:00', NULL),
(2504, '037588', 50, 'Mr. P.M.D. MADHUSHANKA', '1970-01-01', 'Area Electrical Engineer  Avissawella', 'Married', '1970-01-01', 9, 'Kahawatta   Consumer Service Centre', 'Opanayaka Consumer Service Centre', 'Electrical Engineer - Udawalawe Power Station', NULL, 'NO.358B/4, HOREPOLA GODAKAWELA', 0, '2019-11-27 18:30:00', NULL),
(2505, '036300', 51, 'Mr. D. Chandima Kumara Somarathna', '1970-01-01', 'Ampara Consumer Service Centre', 'Unmarried', '1970-01-01', 9, 'Electrical Engineer (Construction) - Ampara Site', NULL, NULL, 'Service Completion and Circular Instruction', '20/26/03,  Kumarigama,', 0, '2019-11-27 18:30:00', NULL),
(2506, '037904', 52, 'Mr. S.A. GIHAN CHATHURANGA', '1970-01-01', 'Kalubowila Consumer Service Centre', 'Married', '1970-01-01', 9, 'Rathmalana Consumer Service Centre', NULL, NULL, 'Service Completion and Circular Instruction', 'NO.38E, CEB quartes,Wishnu Kowila Rd, Nadimala', 0, '2019-11-27 18:30:00', NULL),
(2507, '026059', 53, 'Mr. W.B PIYARATHNA', '1970-01-01', 'Kalubowila Consumer Service Centre', 'Married', '1970-01-01', 8, 'Area Electrical  Engineer  Rathmalana', NULL, NULL, 'Service Completion and Circular Instruction', 'NO:43/158 WAIDYA ROAD, DEHIWALA.', 0, '2019-11-27 18:30:00', NULL),
(2508, '036332', 54, 'Mr. Y. SIRIMAL', '1970-01-01', 'Area Electrical  Engineer  Rathmalana', 'Married', '1970-01-01', 8, 'Avissawella Consumer Service Centre', 'Homagama  Consumer Service Centre', NULL, 'Personnel matters', '36/1A, SOUTH ADAWIKANDA, ERATHNA, KURUWITA.', 0, '2019-11-27 18:30:00', NULL),
(2509, '038907', 55, 'Mr. T.A.P.C.K. Thennakoon', '1970-01-01', 'Chief Engineer (PHM) - R1', 'Married', '1970-01-01', 8, 'Mirigama Consumer Service Centre', NULL, NULL, 'Service Completion and Circular Instruction', 'No.120/B/2 Purana Meerigama Meerigama', 0, '2019-11-27 18:30:00', NULL),
(2510, '038942', 56, 'Mr. G.W.S. Thushara', '1970-01-01', 'Elpitiya Consumer Service Centre', 'Married', '1970-01-01', 8, 'Area Electrical Engineer Baddegama', NULL, NULL, NULL, '50/5 Maha Pansala Road ', 0, '2019-11-27 18:30:00', NULL),
(2511, '038917', 57, 'Mr. M.G.K.I. Aberathne', '1970-01-01', 'Chief Engineer (Project & Heavy Maintenance) - Central Zone', 'Unmarried', '1970-01-01', 8, 'Chief Engineer (Ukuwela Power Station)', 'Chief Engineer (Victoria Power Station)', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Any other,', 'No :51/2 Naapana Menikhinna', 0, '2019-11-27 18:30:00', NULL),
(2512, '038918', 58, 'Mr. R.M.G.P.N. KUMARA', '1970-01-01', 'Chief  Engineer (Distribution & Maintenance) - CP', 'Married', '1970-01-01', 8, 'Electrical  Engineer   - Bowatenna Power Station', NULL, NULL, 'ill health of parents (dependents), Travelling Distance,', 'NO: 68/5/B WEERAGOLLAYAYA POLA PARA', 0, '2019-11-27 18:30:00', NULL),
(2513, '038939', 59, 'Mr. P V S A Nuwan', '1970-01-01', 'Chief Engineer (Construction) - WPS 1', 'Unmarried', '1970-01-01', 8, 'Chief Engineer  (Kelanitissa Power Station)', 'CE (Central Workshop & Garage)', 'Dehiwala Consumer Service Centre', 'Service Completion and Circular Instruction', 'No 275/1 Pansala Waththa Walliwala', 0, '2019-11-27 18:30:00', NULL),
(2514, '038922', 60, 'Mr. T.C. DE SILVA', '1970-01-01', 'Bolawatta   Consumer Service Centre', 'Married', '1970-01-01', 8, 'Nittambuwa Consumer Service Centre', NULL, NULL, NULL, 'NO 169/A GALWALA ROAD AKARAGAMA', 0, '2019-11-27 18:30:00', NULL),
(2515, '038905', 61, 'Mr. D.M.S.K Dissanayake', '1970-01-01', 'Chief Engineer (Sapugaskanda Power Station)', 'Unmarried', '1970-01-01', 8, 'Chief Engineer  (Kelanitissa Power Station)', 'CE (Barge Mounted Power Station)', NULL, NULL, '591/1 Pahathgama ', 0, '2019-11-27 18:30:00', NULL),
(2516, '038947', 62, 'Mr. A.M Paranamanna', '1970-01-01', 'Chief Engineer (Sapugaskanda Power Station)', 'Unmarried', '1970-01-01', 8, 'Chief Engineer  (Kelanitissa Power Station)', 'CE (Barge Mounted Power Station)', NULL, NULL, '208/3  Makola South', 0, '2019-11-27 18:30:00', NULL),
(2517, '038958', 63, 'Mr. J.A.D.G Shalindra', '1970-01-01', 'Chief Engineer  (Kelanitissa Power Station)', 'Unmarried', '1970-01-01', 8, 'CE (Barge Mounted Power Station)', 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, NULL, '203  Annasikotuwa', 0, '2019-11-27 18:30:00', NULL),
(2518, '038910', 64, 'Mr. D.M.H.D. Disanayake', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Married', '1970-01-01', 8, 'Galgamuwa Consumer Service Centre', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Nochchiyagama Consumer Service Centre', NULL, ' Rajanganaya ,Wam iwra Yaya1 Saliya Ashokapura', 1, '2019-11-27 18:30:00', NULL),
(2519, '038923', 65, 'Mr. A.T.D. De Silva', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Unmarried', '1970-01-01', 8, 'Electrical  Engineer  - Samanala Power Station', NULL, NULL, NULL, 'No.237 Kurunegala Para Senakudrippuwa, Puttalam', 1, '2019-11-27 18:30:00', NULL),
(2520, '038926', 66, 'Mr. T.H.N.G. Amaraweera', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Married', '1970-01-01', 8, 'Chief Engnieer (Uthuru Janani Power Plant)', NULL, NULL, NULL, 'No.168/2 Gabbela Udispattuwa', 0, '2019-11-27 18:30:00', NULL),
(2521, '038930', 67, 'Mr. D.M.C.N Munasinghe', '1970-01-01', 'Chief Engineer (Kelanitissa Combined Cycle Power Station)', 'Married', '1970-01-01', 8, 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, NULL, NULL, '571 Sudharma Road Wanawasala', 0, '2019-11-27 18:30:00', NULL),
(2522, '038938', 68, 'Mr. W.P.K. SANDYANAYAKE', '1970-01-01', 'Colombo South  Depot II', 'Married', '1970-01-01', 8, 'Homagama  Consumer Service Centre', 'Kesbewa Consumer Service Centre', NULL, 'Service Completion and Circular Instruction', 'NO 24 AMBAGAMUWA ', 0, '2019-11-27 18:30:00', NULL),
(2523, '038911', 69, 'Mr. S.G. Jayawickrama', '1970-01-01', 'Anuradhapura City  Consumer Service Centre', 'Married', '1970-01-01', 8, 'Area Electrical  Engineer   Kekirawa', NULL, NULL, NULL, 'Ashokaramapara  Perimiyankulama', 0, '2019-11-27 18:30:00', NULL),
(2524, '038916', 70, 'Mr. C.U.K. CHANDRASENA', '1970-01-01', 'Chief Engineer (Operation & Maintenance) - Anuradhapura', 'Married', '1970-01-01', 8, 'Mihintale Consumer Service Centre', NULL, NULL, 'Service Completion and Circular Instruction', ' SCHOOL LANE VAHAMALGOLLAWA', 0, '2019-11-27 18:30:00', NULL),
(2525, '039384', 71, 'Mr. M.S. RATHNAKUMARA', '1970-01-01', 'Kuliyapitiya Consumer Service Centre', 'Unmarried', '1970-01-01', 7, 'Alawwa Consumer Service Centre', 'Narammala Consumer Service Centre', NULL, 'ill health of parents (dependents),', 'A 70/2, RAHAL EAST, HEMMATHAGAMA,', 0, '2019-11-27 18:30:00', NULL),
(2526, '039352', 72, 'Mr. S.A.N Dileepa', '1970-01-01', 'Chief Engineer  (Kelanitissa Power Station)', 'Married', '1970-01-01', 7, 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, NULL, '107(231) U.E. Perera Mawatha ', 0, '2019-11-27 18:30:00', NULL),
(2527, '039355', 73, 'Mr. P.S.K Pieris', '1970-01-01', 'Chief Engineer  (Kelanitissa Power Station)', 'Married', '1970-01-01', 7, 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, NULL, NULL, 'Ranmuthu Muthuwadiya Road Raddoluwa', 0, '2019-11-27 18:30:00', NULL),
(2528, '039340', 74, 'Mr. H.K.P. FERNANDO', '1970-01-01', 'Chief Engineer (Construction) - WPS 1', 'Unmarried', '1970-01-01', 7, 'Kesbewa Consumer Service Centre', 'Boralasgamuwa Consumer Service Centre', NULL, 'Prefer to learn other field', 'No 2/5 Kithalandaluwa 1 st Lane', 0, '2019-11-27 18:30:00', NULL),
(2529, '039412', 75, 'Mr. K.M.C.M Gunathilaka', '1970-01-01', 'Chief Engineer (Sapugaskanda Power Station)', 'Unmarried', '1970-01-01', 7, 'Chief Engineer  (Kelanitissa Power Station)', 'CE (Barge Mounted Power Station)', NULL, NULL, '502/5/B/1 Royal Garden Ihala Kosgama', 0, '2019-11-27 18:30:00', NULL),
(2530, '039419', 76, 'Mr. H.G.A.U. GUNASEKARA.', '1970-01-01', 'Pothuhara  Consumer Service Centre', 'Unmarried', '1970-01-01', 7, 'Mawanella Consumer Service Centre', NULL, NULL, 'Travelling Distance,', 'G: 34/3  PUWAKDENIYA,', 0, '2019-11-27 18:30:00', NULL),
(2531, '039323', 77, 'Mr. B.H.M.R. KUMARA.', '1970-01-01', 'Rideegama Consumer Service Centre', 'Married', '1970-01-01', 7, 'Area Electrical  Engineer    Kandy  Municipal Limits', 'Chief Engineer (Distribution Maintenance-South) - CP', NULL, 'Service Completion and Circular Instruction', 'NO:04 , MALWATHTHAPITIYA , WATTAPPOLA ,', 0, '2019-11-27 18:30:00', NULL),
(2532, '039345', 78, 'Mr. W. A. S. G. Senevirathne', '1970-01-01', 'Chief Engineer (Power Plant)- Assets Mgt.  & Centralised Services', 'Unmarried', '1970-01-01', 7, 'Electrical Engineer( Lifts ) - Assets Managemet & Centralised Services', 'Electrical  Engineer  (Meter Lab    R - 3)', 'Manager (Investigation)', 'Service Completion and Circular Instruction', 'NO.128/1 AKARAWITA KOSGAMA', 0, '2019-11-27 18:30:00', NULL),
(2533, '039438', 79, 'Mr. B. A.  M. S. Abeyrathna', '1970-01-01', 'Chief Engineer (Power Plant)- Assets Mgt.  & Centralised Services', 'Unmarried', '1970-01-01', 7, 'Kuruwita Consumer Service Centre', 'Ratnapura Town  Consumer Service Centre', NULL, 'ill health of parents (dependents),', ' DEMALA PORUWA KARANGODA', 0, '2019-11-27 18:30:00', NULL),
(2534, '039428', 80, 'Mr. D.M.G KOLITHA', '1970-01-01', 'Bandaragama Consumer Service Centre', 'Married', '1970-01-01', 7, 'Kesbewa Consumer Service Centre', 'Boralasgamuwa Consumer Service Centre', 'Rathmalana Consumer Service Centre', 'Service Completion and Circular Instruction', '\'Kalani Hotel\',Karawita, Uda Karawita, Rathnapura.', 0, '2019-11-27 18:30:00', NULL),
(2535, '039326', 81, 'Mr. R.P. DILANTHA PRADEEP', '1970-01-01', 'Chief Engineer (Construction) - Southern Province', 'Married', '1970-01-01', 7, 'Gonapeenuwela Consumer Service Centre', NULL, NULL, 'Service Completion and Circular Instruction', 'NO . 147 , NEW CITY, HALPATOTA, BADDEGAMA.', 0, '2019-11-27 18:30:00', NULL),
(2536, '039351', 82, 'Mr. A.D. HEWANAYAKA', '1970-01-01', 'Chief Engineer (Distribution & Maintenance) - Southern Province', 'Married', '1970-01-01', 7, 'Weligama Consumer Service Centre', 'Matara Consumer Service Centre', 'Matara Grid Substation', 'Service Completion and Circular Instruction', '03, \"SAMARA\" SRI RATHNAPALA MAWATHA NUPE,', 0, '2019-11-27 18:30:00', NULL),
(2537, '039346', 83, 'Mr. P.D.J. PRASANNA', '1970-01-01', 'Chief Engineer(Protection Development) - Tr', 'Married', '1970-01-01', 7, 'Inginiyagala Consumer Service Centre', 'Electrical  Engineer   -   Inginiyagala Power Station', 'Area Electrical  Engineer   Ampara', 'ill health of parents (dependents), To facilitate education of children,', 'T12 River Place ', 0, '2019-11-27 18:30:00', NULL),
(2538, '039362', 84, 'Mr. K.G.L.B. Wijerathne', '1970-01-01', 'Chief Engineer (Ukuwela Power Station)', 'Married', '1970-01-01', 7, 'Electrical  Engineer   - Bowatenna Power Station', NULL, NULL, NULL, '134 Dodamgas Yaya Pallepola', 1, '2019-11-27 18:30:00', NULL),
(2539, '039421', 85, 'Mr. M.M.A.C. LAKSHITHA', '1970-01-01', 'Chief Engineer (Construction) - Southern Province', 'Married', '1970-01-01', 7, 'Habaraduwa Consumer Service Centre', 'Area Electrical Engineer Baddegama', NULL, 'Service Completion and Circular Instruction', '202/3, WELTER FREDAN GANEGODA AKMEENA.', 0, '2019-11-27 18:30:00', NULL),
(2540, '039341', 86, 'Mr. N.A.D.C. SRINATH', '1970-01-01', 'Old A\'pura Grid Substation', 'Married', '1970-01-01', 7, 'Chief Engineer (Operation & Maintenance) - Anuradhapura', 'Mihintale Consumer Service Centre', NULL, 'Service Completion and Circular Instruction', '88Km Kanuwa Anuradhapura Road Mihinthale', 0, '2019-11-27 18:30:00', NULL),
(2541, '039416', 87, 'Mr. M.M.A.P. Munasinghe', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Married', '1970-01-01', 7, 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, NULL, NULL, '75/3 Kosgahamulawatta, Pahaladiyadora Kuliyapitiya', 0, '2019-11-27 18:30:00', NULL),
(2542, '039431', 88, 'Mr. K.A.N. GUNAWARDANA', '1970-01-01', 'Pannipitiya Consumer Service Centre', 'Married', '1970-01-01', 7, 'Ratnapura Town  Consumer Service Centre', 'Kahawatta   Consumer Service Centre', NULL, 'Travelling Distance,', 'No.396/1, Udathula Rd., Iddamalgoda, Pelmadulla', 0, '2019-11-27 18:30:00', NULL),
(2543, '039393', 89, 'Mr. D PUSHPAKUMARA', '1970-01-01', 'Chief Engineer (Construction) - Sabaragamuwa Province', 'Married', '1970-01-01', 7, 'Godakawela  Consumer Service Centre', 'Kahawatta   Consumer Service Centre', 'Electrical Engineer - Udawalawe Power Station', 'Service Completion and Circular Instruction', '228 Speel Junction Habaraluwewa', 0, '2019-11-27 18:30:00', NULL),
(2544, '039403', 90, 'Mr. M.V.S CHANDRASIRI', '1970-01-01', 'Chief Engineer (Construction) - Sabaragamuwa Province', 'Married', '1970-01-01', 7, 'Chief Engineer (Construction) - Sabaragamuwa Province', 'Area Electrical  Engineer  Embilipitiya', 'Godakawela  Consumer Service Centre', 'Any other,', '251/k/1 Rathnayaka waththa Ranvala Rd', 0, '2019-11-27 18:30:00', NULL),
(2545, '017334', 91, 'Mr. A.A.S.P. DIAS', '1970-01-01', 'Chief Engineer (Distribution Maintenance) - Sabaragamuwa Province', 'Married', '1970-01-01', 7, 'Deraniyagala  Consumer Service Centre', 'Ehaliyagoda  Consumer Service Centre', 'Avissawella Consumer Service Centre', NULL, '578/60 SRI PUNCHASARA PUWAKPITIYA', 0, '2019-11-27 18:30:00', NULL),
(2546, '035783', 92, 'Mr. R.J. WIJAYAWARDHANA.', '1970-01-01', 'Nivithigala Consumer Service Centre', 'Married', '1970-01-01', 7, NULL, NULL, NULL, NULL, '80/21 Baddegethara mawatha Kospalavinna', 0, '2019-11-27 18:30:00', NULL),
(2547, '039859', 93, 'Mr. K.K.S. WIJESINGHE', '1970-01-01', 'Chief Engineer (Distribution Maintenance) - WPN', 'Married', '1970-01-01', 7, 'Area Electrical  Engineer  Veyangoda', 'Chief Engineer (Construction) - WPN', 'Area Electrical  Engineer  Divulapitiya', NULL, '581/5 AMBA SEWANA NAMBADALUWA', 0, '2019-11-27 18:30:00', NULL),
(2548, '039843', 94, 'Mr. R.M.W.P. RANABAHU', '1970-01-01', 'Hettipola Consumer Service Centre', 'Unmarried', '1970-01-01', 7, 'Narammala Consumer Service Centre', 'Madampe Consumer Service Centre', 'Deputy General Manager (North - Western Province)', 'Service Completion and Circular Instruction', ' KONNGODA YAKWILA', 0, '2019-11-27 18:30:00', NULL),
(2549, '039853', 95, 'Mr. G.D. MADUSHAN', '1970-01-01', 'Chief Engineer (Operation Maintenance) - Colombo South', 'Unmarried', '1970-01-01', 7, 'Manager (Investigation)', NULL, NULL, 'Service Completion and Circular Instruction', 'NO.141/2 HIRIPITIYA ', 0, '2019-11-27 18:30:00', NULL),
(2550, '039361', 96, 'Mr. D.M.B.S Dissanayaka', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Married', '1970-01-01', 7, 'Chief Engineer  ( Sapugaskanda Power Station )', 'Chief Engineer  ( Sapugaskanda Power Station )', 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, 'No.111, Udaihagama, Maduwela, Harispaththuwa', 0, '2019-11-27 18:30:00', NULL),
(2551, '039838', 97, 'Mr. R.D.R. RAJAPAKSHA', '1970-01-01', 'Rideegama Consumer Service Centre', 'Married', '1970-01-01', 7, 'Nugawela  Consumer Service Centre', 'Wariyapola Consumer Service Centre', 'Area Electrical  Engineer    Kandy  Municipal Limits', 'Service Completion and Circular Instruction', '\"RUWAN SEWANA\" , UDAMARAKADA , ', 0, '2019-11-27 18:30:00', NULL),
(2552, '039861', 98, 'Mr. N.R.J.D. Premathilaka', '1970-01-01', 'Inginiyagala Consumer Service Centre', 'Married', '1970-01-01', 7, 'Electrical  Engineer   -   Inginiyagala Power Station', NULL, NULL, 'Career Development,', 'No.30/A/150/1, Koknahara, ', 0, '2019-11-27 18:30:00', NULL),
(2553, '037623', 99, 'Mr. K.A.L SAMPATH', '1970-01-01', 'Ratnapura Eastern  Consumer Service Centre', 'Unmarried', '1970-01-01', 7, 'Kuruwita Consumer Service Centre', NULL, NULL, 'Service Completion and Circular Instruction', '45 WELAMBARA WATHA KAHANGAMA', 0, '2019-11-27 18:30:00', NULL),
(2554, '039320', 100, 'Mr. R.C.P. PERERA', '1970-01-01', 'Chief  Engineer (Distribution & Maintenance) - WPS II', 'Married', '1970-01-01', 7, 'Padukka Consumer Service Centre', 'Hanwella Consumer Service Centre', 'Homagama  Consumer Service Centre', 'Service Completion and Circular Instruction', 'No.524/25 Kotigalahena Galagedera, Padukka', 0, '2019-11-27 18:30:00', NULL),
(2555, '039848', 101, 'Mr. W.S.D. PREMARATHNA', '1970-01-01', 'Chief  Engineer  (Construction) - WPS II', 'Married', '1970-01-01', 7, 'Chief Engineer (Distribution Maintenance) - Sabaragamuwa Province', 'Area Electrical  Engineer  Ratnapura', 'Chief Engineer (Construction) - Sabaragamuwa Province', 'For looking after mother & Completed service period\nattach  Latter', ' HALKANDALIYA Niwithigala', 0, '2019-11-27 18:30:00', NULL),
(2556, '040171', 102, 'Mr. K.D.S.T. THILAKARATHNA', '1970-01-01', 'Chief Engineer (Distribution Maintenance) - WPN', 'Married', '1970-01-01', 7, 'Ragama Consumer Service Centre', 'Area Electrical  Engineer  Gampaha', 'Kiriella Consumer Service Centre', NULL, 'No : 712/C Narangodapaluwa ', 0, '2019-11-27 18:30:00', NULL),
(2557, '040137', 103, 'Mr. W.D.C. Dissanayake', '1970-01-01', 'Chief Engineer (PHM) - R1', 'Married', '1970-01-01', 7, 'Thulhiriya Grid Substation', 'Kiribathkumbura Grid Substation', 'Pothuhara  Consumer Service Centre', 'To work in a different exposure,', 'Namanndiya, Dunukewala Hiriwadunna', 0, '2019-11-27 18:30:00', NULL),
(2558, '040134', 104, 'Mr. R.C. Wijethilake', '1970-01-01', 'Chief Engineer (Distribution & Maintenance) - WPS 1', 'Married', '1970-01-01', 7, 'Area Electrical  Engineer  Kalutara', 'Area Electrical  Engineer  Bandaragama', NULL, 'Service Completion and Circular Instruction', 'No.230, Adikarigoda, Kalutara South.', 0, '2019-11-27 18:30:00', NULL),
(2559, '040117', 105, 'Mr. A.W.E.H. WIJERATHNE', '1970-01-01', 'Chief Engineer (Distribution & Maintenance) - WPS 1', 'Married', '1970-01-01', 7, 'Cheif Engineer  (Operation) - Colombo City', 'Chief Engineer (Maintenance) - Colombo City', 'Area Electrical  Engineer  Rathmalana', 'Service Completion and Circular Instruction', '54/6, Colombo Estate Avissawella', 0, '2019-11-27 18:30:00', NULL),
(2560, '040180', 106, 'Mr. S.J.C.D. Palihena', '1970-01-01', 'Chief Engineer (Sapugaskanda Power Station)', 'Married', '1970-01-01', 7, 'Chief Engineer  (Kelanitissa Power Station)', 'Chief Engineer (Power Plant)- Assets Mgt.  & Centralised Services', NULL, NULL, '650/7 Tunada heena Korathota', 0, '2019-11-27 18:30:00', NULL),
(2561, '040175', 107, 'Mr. R.P.S.S.K. Ranasingha', '1970-01-01', 'Chief Engineer (Sapugaskanda Power Station)', 'Married', '1970-01-01', 7, 'CE (Barge Mounted Power Station)', 'Power Plant Manager (Lakvijaya Complex) - Gen', NULL, NULL, 'No: 26/1 Ranissawala ', 0, '2019-11-27 18:30:00', NULL),
(2562, '040118', 108, 'Mr. P.V.R.S Vithanage', '1970-01-01', 'Chief Engineer (Kelanitissa Combined Cycle Power Station)', 'Married', '1970-01-01', 7, 'Chief Engineer  ( Sapugaskanda Power Station )', 'Chief Engineer  (Kelanitissa Power Station)', NULL, NULL, '37 Mahamangala Road Paanthiya', 0, '2019-11-27 18:30:00', NULL),
(2563, '040109', 109, 'Mr. A.A.A.P Somarathna', '1970-01-01', 'Chief Engineer (Kelanitissa Combined Cycle Power Station)', 'Married', '1970-01-01', 7, 'Chief Engineer  ( Sapugaskanda Power Station )', 'Chief Engineer  (Kelanitissa Power Station)', NULL, NULL, 'G 28/3 Narandeniya Arandara', 0, '2019-11-27 18:30:00', NULL),
(2564, '040135', 110, 'Mr. R.M.A. Kumara', '1970-01-01', 'Chief Engineer (PHM) - R1', 'Married', '1970-01-01', 7, 'Deputy General Manager (North - Western Province)', 'Narammala Consumer Service Centre', 'Area Electrical  Engineer  Kuliyapitiya', 'Service Completion and Circular Instruction', '520/14 Subharathi Pura II Step ,', 0, '2019-11-27 18:30:00', NULL),
(2565, '040153', 111, 'Mr. K.C.D. Fernando', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Married', '1970-01-01', 7, 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Chief Engineer  ( Sapugaskanda Power Station )', 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, '62/A Rajakathaluwa Arachchikattuwa', 0, '2019-11-27 18:30:00', NULL),
(2566, '040123', 112, 'Mr. H.M.Y.D. Bandara', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Married', '1970-01-01', 7, 'Matara Consumer Service Centre', 'Area Electrical  Engineer  Matara', 'Electrical Engineer-  Hambantota Wind Power Station', NULL, 'No:34 Rajawatta, Vehalgoda Devinuwara', 0, '2019-11-27 18:30:00', NULL),
(2567, '037587', 113, 'Mr. D.M.V. GUNAWANSHA', '1970-01-01', 'Protection - Operation & Maintenance', 'Married', '1970-01-01', 7, 'Area Electrical  Engineer  Ratnapura', NULL, NULL, 'Service Completion and Circular Instruction', 'NO 47.E DEVIPAHALA ', 0, '2019-11-27 18:30:00', NULL),
(2568, '040393', 114, 'Mr. N.M.P.M.H.B Nawarathna', '1970-01-01', 'Chief Engineer (Sapugaskanda Power Station)', 'Unmarried', '1970-01-01', 7, 'Chief Engineer  (Kelanitissa Power Station)', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Chief Engineer (Power Plant)- Assets Mgt.  & Centralised Services', NULL, 'No: 36 Bibiligamuwa ', 0, '2019-11-27 18:30:00', NULL),
(2569, '040390', 115, 'Mr. R.P.H.N. Ranasingha', '1970-01-01', 'Chief Engineer (Project & Heavy Maintenance) - West Zone', 'Married', '1970-01-01', 7, 'Chief Engineer (Distribution Maintenance) - WPN', 'Area Electrical  Engineer  Veyangoda', 'Area Electrical  Engineer  Divulapitiya', NULL, 'No :188 Aliwalapalla Walgammulla', 0, '2019-11-27 18:30:00', NULL),
(2570, '040394', 116, 'Mr. A.G.D.K.C Wejerathne', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Unmarried', '1970-01-01', 7, 'Chief Engnieer (Uthuru Janani Power Plant)', NULL, NULL, NULL, ' Muriyakadawala Galenbidunu Wewa', 0, '2019-11-27 18:30:00', NULL),
(2571, '040403', 117, 'Mr. J.D.C. JAYAWARDHANA.', '1970-01-01', 'Hiripitiya Consumer Service Centre', 'Married', '1970-01-01', 7, 'Gokaralla Consumer Service Centre', NULL, NULL, 'Service Completion and Circular Instruction', ' KANUGOLLA , ', 0, '2019-11-27 18:30:00', NULL),
(2572, '035897', 118, 'Mr. W.A.S. WEERAWARDHANA.', '1970-01-01', 'Kuruwita Consumer Service Centre', 'Married', '1970-01-01', 7, 'Ratnapura Eastern  Consumer Service Centre', 'Area Electrical Engineer  Avissawella', 'Area Electrical  Engineer   Kahawatta', 'Service Completion and Circular Instruction', 'Akkara 100 Nilminipura Hidellana', 0, '2019-11-27 18:30:00', NULL),
(2573, '032698', 119, 'Mr. B. A. CHAMINDA', '1970-01-01', 'Pannipitiya Consumer Service Centre', 'Married', '1970-01-01', 7, 'Kesbewa Consumer Service Centre', NULL, NULL, 'Service Completion and Circular Instruction', 'No.22, Pragathi Pura Madiwela Kotte', 0, '2019-11-27 18:30:00', NULL),
(2574, '040577', 120, 'Mr. G.A.S. RANASINGHE', '1970-01-01', 'Chief Engineer (Energy Management) - WPN', 'Unmarried', '1970-01-01', 7, 'Chief Engineer (Construction) - WPN', 'Chief Engineer (Distribution Maintenance) - WPN', NULL, NULL, 'NO 189/1  KUDAGAMMANA', 0, '2019-11-27 18:30:00', NULL),
(2575, '040578', 121, 'Mr. K.P.S.P KARUNANAYAKA', '1970-01-01', 'Chief Engineer (Energy Management) - WPN', 'Unmarried', '1970-01-01', 7, 'Chief Engineer (Distribution Maintenance) - WPN', 'Area Electrical  Engineer  Veyangoda', 'Area Electrical  Engineer  Divulapitiya', NULL, 'NO 70  ESSALLA', 0, '2019-11-27 18:30:00', NULL),
(2576, '040606', 122, 'Mr. A.M.N. UPATHISSA', '1970-01-01', 'Katunayake   Consumer Service Centre', 'Married', '1970-01-01', 7, 'Nikawaratiya Consumer Service Centre', 'Wariyapola Consumer Service Centre', NULL, NULL, 'Janahitha House Puththlam Rd., ', 0, '2019-11-27 18:30:00', NULL),
(2577, '040593', 123, 'Mr. W.A. CHANDIMA PRASANNA', '1970-01-01', 'Rathmalana Consumer Service Centre', 'Married', '1970-01-01', 7, 'Mathugama Grid Substation', NULL, NULL, 'Service Completion and Circular Instruction', 'Kadangoda, Dodangoda Kaluthara South.', 0, '2019-11-27 18:30:00', NULL),
(2578, '040594', 124, 'Mr. U.S.P. Gunarathne', '1970-01-01', 'Talangama Consumer Service Centre', 'Married', '1970-01-01', 7, 'Area Electrical  Engineer  Kegalla', NULL, NULL, 'Attached a document', '64/1 Bodirajarama Road Diulpitiya', 0, '2019-11-27 18:30:00', NULL),
(2579, '040575', 125, 'Mr. H.M.P.K. GUNASEKERA', '1970-01-01', 'Chief Engineer (Operation Maintenance) - Colombo South', 'Married', '1970-01-01', 7, 'Chief Engineer  - Randenigala , Rantambe Power Station', 'Chief Engineer   -  Kukuleganga Power Station', 'Ampara Grid Substation', 'Travelling Distance, As per the circular requirement, To work in a different exposure, Career Development,', 'No.23/48/1, Galahitiyagoda, Uhana,', 0, '2019-11-27 18:30:00', NULL),
(2580, '040597', 126, 'Mr. H.I.A.D.L. Kularathne', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Unmarried', '1970-01-01', 7, 'Chief Engineer  ( Sapugaskanda Power Station )', 'Chief Engineer  ( Sapugaskanda Power Station )', 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, 'No.253/2 Galhenawatta Meegahawatta, Delgoda', 0, '2019-11-27 18:30:00', NULL),
(2581, '040579', 127, 'Mr. H.D.S. Nirmal', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Married', '1970-01-01', 7, 'Akuressa Consumer Service Centre', 'Akuressa Consumer Service Centre', 'Akuressa Consumer Service Centre', NULL, '29 B/1 Wattege watte Paraduuwa, Akuressa', 0, '2019-11-27 18:30:00', NULL),
(2582, '040576', 128, 'Mr. K.A.G.C Kumara', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Married', '1970-01-01', 7, 'Chief Engineer (Upper Kotmale)', NULL, NULL, NULL, 'No.72/A/1 Gallangawatta Palle Aludeniya', 0, '2019-11-27 18:30:00', NULL),
(2583, '040590', 129, 'Mr. K.G.C.S.K. Karunarathne', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Married', '1970-01-01', 7, 'Chief Engineer   - Kotmale Power Station', 'Power Plant Manager (Lakvijaya Complex) - Gen', NULL, NULL, '137/5 Old School Road Aluviharaya, Matale', 0, '2019-11-27 18:30:00', NULL),
(2584, '040600', 130, 'Mr. S.G.M.N Korasagalla', '1970-01-01', 'AMU - Kekirawa', 'Married', '1970-01-01', 7, 'Anuradhapura City  Consumer Service Centre', 'Mihintale Consumer Service Centre', NULL, NULL, ' Korasagallawaththa ', 0, '2019-11-27 18:30:00', NULL),
(2585, '040581', 131, 'Mr. R.P.N.P. CHANDRASIRI', '1970-01-01', 'Chief Engineer (Distribution & Maintenance) - NWP', 'Married', '1970-01-01', 7, 'Thulhiriya   Consumer Service Centre', 'Rambukkana Consumer Service Centre', 'Moranthota Consumer Service Centre', 'Service Completion and Circular Instruction', 'NO 369/1 RAJAGUNE METAKUMBURA', 0, '2019-11-27 18:30:00', NULL),
(2586, '037647', 132, 'Mr. A.T.S. AMARASINGHE', '1970-01-01', 'Kuruwita Consumer Service Centre', 'Unmarried', '1970-01-01', 7, 'Area Electrical  Engineer  Ratnapura', NULL, NULL, 'Any other,', '55 PIYAL SEWANA GOROKGODA', 0, '2019-11-27 18:30:00', NULL),
(2587, '040121', 134, 'Mr. S.D.R.M Gunasena', '1970-01-01', 'Electrical  Engineer  (Meter Lab - R 4)', 'Married', '1970-01-01', 6, 'Deputy General Manager (Project & Heavy Maint.) - R 4', NULL, NULL, 'Service Completion and Circular Instruction', ' Kiwulawaththa Bombuwala', 0, '2019-11-27 18:30:00', NULL),
(2588, '037536', 135, 'Mr. T. Gamage', '1970-01-01', 'Area Electrical  Engineer Tangalle', 'Married', '1970-01-01', 6, 'Hakmana  Consumer Service Centre', NULL, NULL, 'Service Completion and Circular Instruction', 'NO:84, POTHTHEWELA, HAKMANA', 0, '2019-11-27 18:30:00', NULL),
(2589, '037652', 136, 'Mr. T.K. WELIKETIYA', '1970-01-01', 'Area Electrical  Engineer    Kandy  Municipal Limits', 'Unmarried', '1970-01-01', 6, 'Manager (Investigation)', NULL, NULL, 'ill health of parents (dependents),', 'NO:32 KANDEMEEYA HATHARALIYADDA', 0, '2019-11-27 18:30:00', NULL),
(2590, '035297', 137, 'Mr. K.K S.C.R Perera', '1970-01-01', 'Chief Engineer (Distribution Maintenance) - Sabaragamuwa Province', 'Married', '1970-01-01', 6, 'Godakawela  Consumer Service Centre', NULL, NULL, 'To facilitate education of children, As per the circular requirement,', '23/A GALAHITIYA GODAKAWELLA', 0, '2019-11-27 18:30:00', NULL),
(2591, '036307', 138, 'Mr. D.M.A.G.B. Dissanayake', '1970-01-01', 'Electrical  Engineer   -   Inginiyagala Power Station', 'Married', '1970-01-01', 6, 'Area Electrical  Engineer   Ampara', NULL, NULL, NULL, '33/17, Gonagolla, Ampara.', 0, '2019-11-27 18:30:00', NULL),
(2592, '037604', 139, 'Mr. D.N. Thilakaratne', '1970-01-01', 'Opanayaka Consumer Service Centre', 'Unmarried', '1970-01-01', 6, 'Area Electrical  Engineer Tangalle', NULL, NULL, 'Any other,', '407/A  PALLEGAMA', 0, '2019-11-27 18:30:00', NULL),
(2593, '035356', 140, 'Mr. M.M.H. Sanjeewa', '1970-01-01', 'Electrical Engineer (Nilambe Power Station)', 'Married', '1970-01-01', 6, 'Chief Engineer -  Samanalawewa  Power Station', 'Electrical  Engineer  - Nilambe Power Station', NULL, NULL, '137 Dekida Nawalapitiya', 0, '2019-11-27 18:30:00', NULL),
(2594, '036266', 141, 'Mr. R.A.J.R. GUNASEKERA', '1970-01-01', 'Avissawella Consumer Service Centre', 'Married', '1970-01-01', 6, 'Ehaliyagoda  Consumer Service Centre', 'Ratnapura Town  Consumer Service Centre', 'Area Electrical  Engineer  Ratnapura', 'To lookafter children & elderly parents', 'No. 80, Udukada Kuruwita ', 0, '2019-11-27 18:30:00', NULL),
(2595, '036076', 142, 'Mr. R.P.K.P.P.K. RANASINGHE', '1970-01-01', 'Wattegama Consumer Service Centre', 'Married', '1970-01-01', 6, 'Chief Engineer  - Ukuwela Power Station', NULL, NULL, 'Private matter', '3/10 KADUWELA UKUWELA', 0, '2019-11-27 18:30:00', NULL),
(2596, '032027', 143, 'Mr. K.M.D. THUSITHA KUMARA', '1970-01-01', 'Area Electrical Engineer Galagedara', 'Married', '1970-01-01', 6, 'Area Electrical  Engineer  Katugastota', 'Area Electrical  Engineer    Kandy  Municipal Limits', 'Area Electrical  Engineer  Matale', 'Service Completion and Circular Instruction', 'NO:75 GODAHENA DOLAPIHILLE', 0, '2019-11-27 18:30:00', NULL),
(2597, '040826', 144, 'Mr. G.M.T. PUSHPAKUMARA', '1970-01-01', 'Chief Engineer (Distribution Maintenance) - WPN', 'Unmarried', '1970-01-01', 6, 'Area Electrical  Engineer  Rathmalana', 'Chief Engineer    Homagama', NULL, 'Travelling Distance, As per the circular requirement,', '520 USWATTA RD., WERAHERA', 0, '2019-11-27 18:30:00', NULL),
(2598, '040837', 145, 'Mr. U.A.D.B JAYARATHNE', '1970-01-01', 'Energy Management - CP', 'Married', '1970-01-01', 6, 'Electrical  Engineer  - Nilambe Power Station', 'Chief Engineer  - Ukuwela Power Station', NULL, 'Service Completion and Circular Instruction', 'BULUDANDAWATTE ATHULGAMA THALATHUOYA', 0, '2019-11-27 18:30:00', NULL),
(2599, '034164', 146, 'Mr. P.N. PRIYANKARA', '1970-01-01', 'Homagama  Consumer Service Centre', 'Married', '1970-01-01', 6, 'Rathmalana Grid Substation', 'Panadura Grid Substation', NULL, 'Service Completion and Circular Instruction', 'No. 35/2/A Hedigama Piliyandala', 0, '2019-11-27 18:30:00', NULL),
(2600, '041155', 147, 'Mr. D.S.R. VITHARANAGE', '1970-01-01', 'Area Electrical  Engineer  Kelaniya', 'Married', '1970-01-01', 6, 'Electrical Engineer (Meter Lab) - Kiribathgoda', NULL, NULL, NULL, 'No : 146/2,B, Gonahena, ', 0, '2019-11-27 18:30:00', NULL),
(2601, '040828', 148, 'Mr. W.A.A.J.R Weerasekara', '1970-01-01', 'Chief Engineer (Sapugaskanda Power Station)', 'Married', '1970-01-01', 6, 'Chief Engineer  (Kelanitissa Power Station)', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'CE (Barge Mounted Power Station)', NULL, '61/9 Station Road Lakshapathiya', 0, '2019-11-27 18:30:00', NULL),
(2602, '040851', 149, 'Mr. M.D.A.K Kularathna', '1970-01-01', 'Chief Engineer  (Kelanitissa Power Station)', 'Unmarried', '1970-01-01', 6, 'Chief Engineer  ( Sapugaskanda Power Station )', 'CE (Barge Mounted Power Station)', 'Chief Engineer  ( Kelanitissa Combined Cycle Power Station )', NULL, ' Mudannagoda Gonagalapura', 0, '2019-11-27 18:30:00', NULL),
(2603, '040839', 150, 'Mr. W.R.C.S. Widanarathna', '1970-01-01', 'Chief Engineer  - Laxapana Power Station', 'Married', '1970-01-01', 6, 'Chief Engineer   - Laxapana Project', 'Deputy General Manager (Asset  Management  - Hydro Electrical)', NULL, 'Service Completion and Circular Instruction', 'No: 420/1 Udabage ', 1, '2019-11-27 18:30:00', NULL),
(2604, '040830', 151, 'Mr. K.G.A.P. Chaminda', '1970-01-01', 'Chief Engineer  - Laxapana Power Station', 'Married', '1970-01-01', 6, 'Electrical  Engineer  - Samanala Power Station', NULL, NULL, 'Service Completion and Circular Instruction', 'No: 294 Sndunpaya ', 0, '2019-11-27 18:30:00', NULL),
(2605, '037571', 152, 'Mr. B. LANKATHILAKA', '1970-01-01', 'Ehaliyagoda  Consumer Service Centre', 'Married', '1970-01-01', 6, 'Deraniyagala  Consumer Service Centre', 'Avissawella Consumer Service Centre', NULL, NULL, '200C GAGABADA ERATHNA', 0, '2019-11-27 18:30:00', NULL),
(2606, '039385', 153, 'Mr. E.D.B.L. Edirisingha', '1970-01-01', 'Area Electrical  Engineer   Ampara', 'Married', '1970-01-01', 6, 'Electrical Engineer (Construction) - Ampara Site', 'Electrical  Engineer   -   Inginiyagala Power Station', NULL, 'Service Completion and Circular Instruction', '23/5/1/1  Galahitiyagoda,', 0, '2019-11-27 18:30:00', NULL),
(2607, '034201', 154, 'Mr. P.B Dayarathna', '1970-01-01', 'Chief Engineer (Sapugaskanda Power Station)', 'Married', '1970-01-01', 6, 'Chief Engineer  (Kelanitissa Power Station)', 'CE (Barge Mounted Power Station)', NULL, NULL, '4205/B Blumendal Road Kotahena', 0, '2019-11-27 18:30:00', NULL);
INSERT INTO `transfer_request_list` (`t_ref_id`, `emp_id`, `ref_id`, `name`, `dob`, `p_w_s`, `m_s`, `r_d_f_p_w_s`, `years`, `p_1`, `p_2`, `p_3`, `r_f_t`, `address`, `t_state`, `created_at`, `updated_at`) VALUES
(2608, '038928', 155, 'Mr. V.S.T. Karunarathna', '1970-01-01', 'Chief Engineer  - Laxapana Power Station', 'Married', '1970-01-01', 6, 'Electrical  Engineer  - Samanala Power Station', 'Electrical  Engineer  - Canyon Power Station', 'Electrical  Engineer  - Wimalasurendra Power Station', 'Service Completion and Circular Instruction', 'No: 16 Bambaragala Koththallena', 0, '2019-11-27 18:30:00', NULL),
(2609, '037491', 156, 'Mr. H.M.S.A.B. HERATH.', '1970-01-01', 'Gokaralla Consumer Service Centre', 'Married', '1970-01-01', 6, 'Hiripitiya Consumer Service Centre', 'Galgamuwa Consumer Service Centre', 'Mahawa   Consumer Service Centre', 'ill health of parents (dependents), To facilitate education of children,', ' NEAR THE \"BO SEWANA\" HERATHGAMA,', 0, '2019-11-27 18:30:00', NULL),
(2610, '037586', 157, 'Mr. M.P.P. MAPATUNA', '1970-01-01', 'Chief  Engineer  (Construction) - WPS II', 'Married', '1970-01-01', 6, 'Padukka Consumer Service Centre', 'Chief Engineer    Homagama', NULL, 'Service Completion and Circular Instruction', 'No.130/3 Udumulla Padukka', 0, '2019-11-27 18:30:00', NULL),
(2611, '038906', 158, 'Mr. P.A.M. MADURANGA', '1970-01-01', 'Chief Engineer (Operation Maintenance) - Colombo South', 'Married', '1970-01-01', 6, 'Electrical  Engineer  - Samanala Power Station', NULL, NULL, 'Service Completion and Circular Instruction', '56/D/05 2 nd Lane,Saman College Rd Dehigahapitiya', 0, '2019-11-27 18:30:00', NULL),
(2612, '037696', 159, 'Mr. N.S. HETTIARACHCHI', '1970-01-01', 'Nawalapitiya  Consumer Service Centre', 'Married', '1970-01-01', 6, 'Chief  Engineer (Distribution & Maintenance) - CP', 'Area Electrical  Engineer  Peradeniya', 'Project Director (Moragolla Hydro Power Project)', 'Service Completion and Circular Instruction', 'NO: 1006 ETHGALA GAMPOLA', 0, '2019-11-27 18:30:00', NULL),
(2613, '041327', 160, 'Mr. I.K. Devapriya', '1970-01-01', 'Chief Engineer  (Kelanitissa Power Station)', 'Married', '1970-01-01', 6, 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, NULL, NULL, '24 Senanayakapura Godagama', 0, '2019-11-27 18:30:00', NULL),
(2614, '041319', 161, 'Mr. R.M.P. DHANUSHKA', '1970-01-01', 'Area Electrical  Engineer  Matale', 'Unmarried', '1970-01-01', 6, 'Area Electrical  Engineer  Katugastota', 'Akurana Consumer Service Centre', 'Wattegama Consumer Service Centre', 'Service Completion and Circular Instruction', '110/A NIYANGODA KUMBUREGAMA', 0, '2019-11-27 18:30:00', NULL),
(2615, '036339', 162, 'Mr. M.D.U.M. WIMALACHANDRA', '1970-01-01', 'Chief Engineer    Homagama', 'Married', '1970-01-01', 6, 'Hanwella Consumer Service Centre', NULL, NULL, 'Service Completion and Circular Instruction', '2 nd Lane, Imagira janapadaya Ingiriya ', 0, '2019-11-27 18:30:00', NULL),
(2616, '041341', 163, 'Mr. G.J.V.H. Suren', '1970-01-01', 'Electrical  Engineer  - Samanala Power Station', 'Married', '1970-01-01', 6, 'Chief Engineer  - Laxapana Power Station', NULL, NULL, 'To facilitate education of children,', ' Pathanahena, Post Mile 4,', 1, '2019-11-27 18:30:00', NULL),
(2617, '039382', 164, 'Mr. B.D.H.P.K. Bombuwela', '1970-01-01', 'Inginiyagala Consumer Service Centre', 'Married', '1970-01-01', 6, 'Electrical  Engineer   -   Inginiyagala Power Station', 'Chief Engineer (Distribution Maintaince) - EP', NULL, 'ill health of parents (dependents), To facilitate education of children,', '4/45A,  Usbima,', 0, '2019-11-27 18:30:00', NULL),
(2618, '037574', 165, 'Mr. W.S.P.K. Herath', '1970-01-01', 'Madawachchiya  Consumer Service Centre', 'Married', '1970-01-01', 6, 'Area Electrical  Engineer   Kekirawa', NULL, NULL, NULL, 'Ethakada  Medawachchiya', 0, '2019-11-27 18:30:00', NULL),
(2619, '038929', 166, 'Mr. M.P.K. Sandaruwan', '1970-01-01', 'Chief Engineer  - Laxapana Power Station', 'Married', '1970-01-01', 6, 'Chief Engineer  (Kelanitissa Power Station)', 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, 'Service Completion and Circular Instruction', 'J 46/1 waldeniya ', 0, '2019-11-27 18:30:00', NULL),
(2620, '035937', 167, 'Mr. W.W.A.G. Sampath', '1970-01-01', 'Chief Engineer  - Laxapana Power Station', 'Married', '1970-01-01', 6, 'Electrical  Engineer  - Samanala Power Station', 'Electrical  Engineer  - Wimalasurendra Power Station', 'Electrical  Engineer  - Canyon Power Station', 'Service Completion and Circular Instruction', '261 06th Mile Post ', 0, '2019-11-27 18:30:00', NULL),
(2621, '040833', 168, 'Mr. R.M.K.P. Rathnayake', '1970-01-01', 'Badulla Area Maintenance unit', 'Unmarried', '1970-01-01', 6, 'Electrical Engineer (Planning) - Uva Province', 'Bibile Consumer Service Centre', 'Thanamalwila Consumer Service Centre', 'Service Completion and Circular Instruction', ' Goradiyawaka, Vineethagama,', 0, '2019-11-27 18:30:00', NULL),
(2622, '040832', 169, 'Mr. B.M. Shantha Kumara', '1970-01-01', 'Chief  Engineer  (Construction) - UVA', 'Unmarried', '1970-01-01', 6, 'Electrical Engineer (Planning) - Uva Province', 'Hali - Ela Consumer Service Centre', 'Store Keeper (Provincial Stores) - Uva', 'Service Completion and Circular Instruction', ' Kahatagolla Anthuduwawela', 0, '2019-11-27 18:30:00', NULL),
(2623, '040607', 170, 'Mr. L.P.S.S KUMARA', '1970-01-01', 'Chief Engineer (Distribution Maintenance) - WPN', 'Unmarried', '1970-01-01', 6, 'Area Electrical  Engineer  Gampaha', 'Area Electrical  Engineer  Veyangoda', NULL, 'Service Completion and Circular Instruction', '99 KERAGALA ', 0, '2019-11-27 18:30:00', NULL),
(2624, '035442', 171, 'Mr. R.G.A.S. Amarasinghe', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Married', '1970-01-01', 6, 'Chief Engineer  - Ukuwela Power Station', 'Chief Engineer (Kotmale Power Station)', NULL, NULL, '112/3A Gangodapitiya Kahapathwala', 0, '2019-11-27 18:30:00', NULL),
(2625, '036202', 172, 'Mr. K P S PATHIRANA', '1970-01-01', 'Chief Engineer (Distribution Maintenance) - Sabaragamuwa Province', 'Married', '1970-01-01', 6, 'Avissawella Consumer Service Centre', 'Ehaliyagoda  Consumer Service Centre', 'Kuruwita Consumer Service Centre', NULL, '368 Galgomuwa Karangoda', 0, '2019-11-27 18:30:00', NULL),
(2626, '039413', 173, 'Mr. B.M.N. JAYASINGHA', '1970-01-01', 'Area Electrical Engineer Narammala', 'Unmarried', '1970-01-01', 5, 'Padukka Consumer Service Centre', NULL, NULL, 'Travelling Distance,', 'NO 203/1/C DUNKALAHENA HEWAHINNA', 0, '2019-11-27 18:30:00', NULL),
(2627, '035390', 174, 'Mr. B. W. A. J. M. Senevirathna', '1970-01-01', 'Chief Engineer  - Laxapana Power Station', 'Married', '1970-01-01', 5, 'Chief Engineer   - Kotmale Power Station', 'Electrical  Engineer  - Samanala Power Station', 'Electrical  Engineer  - Wimalasurendra Power Station', 'Service Completion and Circular Instruction', 'No;6 Bauwagama Janapadaya ', 0, '2019-11-27 18:30:00', NULL),
(2628, '039330', 175, 'Mr. U.R.I.DE SILVA', '1970-01-01', 'Giriulla Consumer Service Centre', 'Unmarried', '1970-01-01', 5, 'Pasyala  Consumer Service Centre', 'Mirigama Consumer Service Centre', 'Giriulla Consumer Service Centre', 'Service Completion and Circular Instruction', 'NO B95/1 GASNAWA THOLANGAMUWA', 0, '2019-11-27 18:30:00', NULL),
(2629, '040831', 176, 'Mr. D.M. Thusitha Lakmal', '1970-01-01', 'Welimada  Consumer Service Centre', 'Married', '1970-01-01', 5, 'Electrical Engineer (Planning) - Uva Province', 'Chief Engineer  - Randenigala , Rantambe Power Station', NULL, 'To facilitate education of children,', '58/1 Kirimadupitiya Vinethagama', 0, '2019-11-27 18:30:00', NULL),
(2630, '037594', 177, 'Mr. H.V.G.S NELSON', '1970-01-01', 'Chief Engineer (Operation & Maintenance) - Galle', 'Married', '1970-01-01', 5, 'Embilipitiya Grid Substation', 'Hambantota Grid Substation', 'Electrical Engineer - Udawalawe Power Station', 'Service Completion and Circular Instruction', 'No1750 Prime City Park Udagama', 0, '2019-11-27 18:30:00', NULL),
(2631, '041975', 178, 'Mr. A.M.M.S. ATHTHANAYAKA', '1970-01-01', 'Kirindiwela Consumer Service Centre', 'Unmarried', '1970-01-01', 5, NULL, 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, NULL, '23/1 IHALAGAMA ', 0, '2019-11-27 18:30:00', NULL),
(2632, '041991', 179, 'Mr. C.P. RATHNASIRI', '1970-01-01', 'Chief Engineer (Commercial) - WPN', 'Married', '1970-01-01', 5, 'Electrical Engineer (Meter Lab) - Kiribathgoda', NULL, NULL, NULL, 'NO 138/A  NATHUDUWA', 0, '2019-11-27 18:30:00', NULL),
(2633, '036088', 180, 'Mr. P.G.G.S.L. Ariyarathne', '1970-01-01', 'Chief Engineer (Ukuwela Power Station)', 'Unmarried', '1970-01-01', 5, 'Electrical  Engineer   - Bowatenna Power Station', NULL, NULL, NULL, '15/4 Debburuwela Raithalawela, Ukuwela', 0, '2019-11-27 18:30:00', NULL),
(2634, '037603', 181, 'Mr. K.L.K. Dinesh Kumara', '1970-01-01', 'Area Electrical  Engineer   Ampara', 'Married', '1970-01-01', 5, 'Electrical Engineer (Construction) - Ampara Site', NULL, NULL, 'Service Completion and Circular Instruction', 'C/193/06 uhana road ', 0, '2019-11-27 18:30:00', NULL),
(2635, '033646', 182, 'Mr. H.U.N. SANJEEWA', '1970-01-01', 'Pannipitiya Consumer Service Centre', 'Unmarried', '1970-01-01', 5, 'Arangala Malabe Consumer Service Centre', 'Hanwella Consumer Service Centre', NULL, 'Service Completion and Circular Instruction', ' Mahagedara Waththa Arakawila, Handapangoda.', 0, '2019-11-27 18:30:00', NULL),
(2636, '031463', 183, 'Mr. P.D.P.S. Kumara', '1970-01-01', 'Area Electrical Engineer  Avissawella', 'Married', '1970-01-01', 5, 'Kuruwita Consumer Service Centre', 'Area Electrical  Engineer  Ratnapura', NULL, 'To facilitate education of children,', 'No. B-12, Niwasa 500 Kiriwandala Puwakpitiya, Avissawella.', 0, '2019-11-27 18:30:00', NULL),
(2637, '040587', 184, 'Mr. U.G.L.J.P. Udamalwatta', '1970-01-01', 'Chief Engineer (Sapugaskanda Power Station)', 'Married', '1970-01-01', 5, 'Chief Engineer  (Kelanitissa Power Station)', NULL, NULL, NULL, 'No.11/25 A II Lane ,Ranasinghe Rd Hiripitiya', 0, '2019-11-27 18:30:00', NULL),
(2638, '036249', 185, 'Mr. S.N. SAMARAKOON', '1970-01-01', 'Embilipitiya  Consumer Service Centre', 'Married', '1970-01-01', 5, 'Area Electrical  Engineer Tangalle', 'Angunakolapelessa  Consumer Service Centre', 'Electrical Engineer - Udawalawe Power Station', 'Service Completion and Circular Instruction', '63 PUSWALPITIYA ', 0, '2019-11-27 18:30:00', NULL),
(2639, '041977', 186, 'Mr. H.M.O.I. Udayanga', '1970-01-01', 'Diyatalawa Consumer Service Centre', 'Unmarried', '1970-01-01', 5, 'Hali - Ela Consumer Service Centre', 'Project Director (Uma Oya Hydro Power Project)', NULL, NULL, '\"Asiri Niwasa\" Helabedda Kumbura Kebillawela South', 0, '2019-11-27 18:30:00', NULL),
(2640, '037542', 187, 'Mr. R.G.J.P.K. Jayasisnghe', '1970-01-01', 'Chief Engineer (Ukuwela Power Station)', 'Married', '1970-01-01', 5, 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, NULL, NULL, '113  Kandagama,', 0, '2019-11-27 18:30:00', NULL),
(2641, '036238', 188, 'Mr. T.M.S.D. Dissanayaka', '1970-01-01', 'Kurunegala City Consumer Service Centre', 'Married', '1970-01-01', 5, 'Manager (Investigation)', NULL, NULL, 'To facilitate education of children, Travelling Distance,', ' WERELLAWATTA KADULAWA', 0, '2019-11-27 18:30:00', NULL),
(2642, '039357', 189, 'Mr. P.A.M. Weerasinghe', '1970-01-01', 'EE (Energy Management) - WPS1', 'Unmarried', '1970-01-01', 5, 'Kesbewa Consumer Service Centre', 'Boralasgamuwa Consumer Service Centre', 'Pannipitiya Consumer Service Centre', 'Service Completion and Circular Instruction', 'No 169 Welipotha Narawelpitiya East', 0, '2019-11-27 18:30:00', NULL),
(2643, '039327', 190, 'Mr. H.P.N.A Priyantha', '1970-01-01', 'Chief Engineer (Project & Heavy Maintenance) - West Zone', 'Married', '1970-01-01', 5, 'Area Electrical  Engineer  Negombo', 'Area Electrical  Engineer  Divulapitiya', 'Area Electrical  Engineer  Veyangoda', 'To facilitate education of children,', '55 Galmukalana Dunagaha', 0, '2019-11-27 18:30:00', NULL),
(2644, '040148', 191, 'Mr. M.A.D.J. Udayanga', '1970-01-01', 'Chief Engineer   -  Kukuleganga Power Station', 'Married', '1970-01-01', 5, 'Chief Engineer  ( Sapugaskanda Power Station )', 'Electrical Engineer - Udawalawe Power Station', 'Project Director (Uma Oya Hydro Power Project)', NULL, 'Thuththiripitiya (North), Nivithigala. ', 0, '2019-11-27 18:30:00', NULL),
(2645, '037636', 192, 'Mr. M.T.S. WICKRAMASINGHE', '1970-01-01', 'Chief Engineer (Operation & Maintenance) - Galle', 'Unmarried', '1970-01-01', 5, 'Chief Engineer   -  Kukuleganga Power Station', 'Electrical Engineer - Udawalawe Power Station', 'Chief Engineer (Sapugaskanda Power Station)', 'Travelling Distance, Any other,', ' BARENDUWA LELLOPITIYA', 0, '2019-11-27 18:30:00', NULL),
(2646, '037584', 193, 'Mr. W.M.S.I. WEERASOORIYA', '1970-01-01', 'Area Electrical  Engineer   Kahawatta', 'Married', '1970-01-01', 5, 'Godakawela  Consumer Service Centre', NULL, NULL, 'Service Completion and Circular Instruction', ' MARAGALA HIRAMADAGAMA', 0, '2019-11-27 18:30:00', NULL),
(2647, '036432', 194, 'Mr. M.H.M.N.T. Bandara', '1970-01-01', 'Hali - Ela Consumer Service Centre', 'Married', '1970-01-01', 5, 'Electrical Engineer (Planning) - Uva Province', 'Diyatalawa Consumer Service Centre', NULL, 'Service Completion and Circular Instruction', ' Hapugas Arawa Gawarawela', 0, '2019-11-27 18:30:00', NULL),
(2648, '036390', 195, 'Mr. W.G.K. SOORIYA KUMARA', '1970-01-01', 'Chief  Engineer (Distribution & Maintenance) - CP', 'Unmarried', '1970-01-01', 5, 'Chief Engineer (Distribution & Maintenance) - NCP', NULL, NULL, 'Service Completion and Circular Instruction', 'WETAKEDENIYA GAMPOLA ', 0, '2019-11-27 18:30:00', NULL),
(2649, '039356', 196, 'Mr.  M.G.G.D. GAMAGE', '1970-01-01', 'Project Manager (C.E. & N.E.I - 220 kV Transmission Inf. Project - P3)', 'Unmarried', '1970-01-01', 5, 'Area Electrical  Engineer  Embilipitiya', 'Area Electrical  Engineer   Kahawatta', NULL, 'Travelling Distance, Any other,', '187/A 4, Maddegama, Godakawela.', 0, '2019-11-27 18:30:00', NULL),
(2650, '039865', 197, 'Mr. B.A.G. PRASAD', '1970-01-01', 'Electrical  Engineer  (Meter Lab - R 4)', 'Married', '1970-01-01', 5, 'Chief Engineer (Sapugaskanda Power Station)', 'Parliamentry Complex Depot', NULL, 'Service Completion and Circular Instruction', '44/41, Sri Indrajothi Road, ', 0, '2019-11-27 18:30:00', NULL),
(2651, '040112', 198, 'Mr.  L.K.S.Perera', '1970-01-01', 'Project Manager (C.E. & N.E.I - 132 kV Transmission Inf. Project - P2)', 'Married', '1970-01-01', 5, 'Electrical  Engineer  - Samanala Power Station', 'Chief Engineer  - Laxapana Power Station', NULL, 'ill health of parents (dependents), Travelling Distance, Any other,', 'No.15 A, Polpitiya , Pitawela.', 0, '2019-11-27 18:30:00', NULL),
(2652, '039347', 199, 'Mr. S.W.S. Chamara', '1970-01-01', 'EE (Energy Management) - WPS1', 'Unmarried', '1970-01-01', 5, 'Area Electrical Engineer    Horana', NULL, NULL, 'Service Completion and Circular Instruction', 'No 533/10 Gorakawathura Aegalooya', 0, '2019-11-27 18:30:00', NULL),
(2653, '040165', 200, 'Mr. E.C. Sampath', '1970-01-01', 'Wanduramba Consumer Service Centre', 'Unmarried', '1970-01-01', 5, 'Area Electrical  Engineer Galle', NULL, NULL, 'Service Completion and Circular Instruction', 'Bandula, Kudagala, Elpitiya.', 0, '2019-11-27 18:30:00', NULL),
(2654, '036212', 201, 'Mr. G.D. ARUNA PRADEEP RANAWEERA', '1970-01-01', 'Gonapeenuwela Consumer Service Centre', 'Married', '1970-01-01', 5, 'Area Electrical  Engineer  Ambalangoda', NULL, NULL, 'Service Completion and Circular Instruction', 'D 16/A, DIKDENIYA, PARAKADUWA.', 0, '2019-11-27 18:30:00', NULL),
(2655, '039439', 202, 'Mr. U.G.J.P JAYATHISSA', '1970-01-01', 'Chief Engineer (Construction) - Sabaragamuwa Province', 'Married', '1970-01-01', 4, 'Opanayaka Consumer Service Centre', 'Kahawatta   Consumer Service Centre', 'Balangoda  Consumer Service Centre', 'ill health of parents (dependents),', 'WATAWANKUBURA UDAGAMA AKARELLA', 0, '2019-11-27 18:30:00', NULL),
(2656, '036096', 203, 'Mr. H.G.S.K. Sirisena', '1970-01-01', 'Electrical Engineer (Nilambe Power Station)', 'Married', '1970-01-01', 4, 'Electrical Engineer (Bowatenna Power Station)', NULL, NULL, NULL, '26, Dodanwattha Tenna Pallegama,Panwila', 0, '2019-11-27 18:30:00', NULL),
(2657, '034723', 204, 'Mr. G.P.A.G.W.K. PRIYADARSHANA', '1970-01-01', 'Chief Engineer (Distribution & Maintenance) - NWP', 'Married', '1970-01-01', 4, 'Pallepola Consumer Service Centre', 'Naula  Consumer Service Centre', 'Matale  Consumer Service Centre', 'ill health of parents (dependents),', 'NO 65/1, MAHA WELA, MATHALE,', 0, '2019-11-27 18:30:00', NULL),
(2658, '034403', 205, 'Mr. S.W.T.M.N. KUMARA', '1970-01-01', 'Beruwala Consumer Service Centre', 'Married', '1970-01-01', 4, 'Kuruwita Consumer Service Centre', 'Area Electrical  Engineer  Ratnapura', NULL, 'Personal metter', '261/3 Malwala Road Rathnapura', 0, '2019-11-27 18:30:00', NULL),
(2659, '040159', 206, 'Mr. A.M.U. de Silva', '1970-01-01', 'Area Electrical  Engineer  Ambalangoda', 'Unmarried', '1970-01-01', 4, 'Area Electrical Engineer Baddegama', NULL, NULL, 'Service Completion and Circular Instruction', '1/12 KEPUELA RD., HEPPUMULLA', 0, '2019-11-27 18:30:00', NULL),
(2660, '038924', 207, 'Mr. N.G.A Sandaruwan', '1970-01-01', 'Electrical Engineer (Meter Lab) - Kiribathgoda', 'Married', '1970-01-01', 4, 'Electrical  Engineer  - Canyon Power Station', 'Chief Engineer (Upper Kotmale)', NULL, 'ill health of parents (dependents), Travelling Distance, To ease economic distress,', 'No :14 Halgolla  1 Hapugasthalawa', 0, '2019-11-27 18:30:00', NULL),
(2661, '037562', 208, 'Mr. A.G.W.C. Senevirathna', '1970-01-01', 'Chief Engineer (Kelanitissa Combined Cycle Power Station)', 'Unmarried', '1970-01-01', 4, 'Chief Engineer  ( Sapugaskanda Power Station )', 'Chief Engineer  (Kelanitissa Power Station)', NULL, NULL, '109  Thalawitiya', 0, '2019-11-27 18:30:00', NULL),
(2662, '036269', 209, 'Mr. M.A.C.W GUNAWARDANA', '1970-01-01', 'Chief Engineer (PHM) - R1', 'Unmarried', '1970-01-01', 4, 'Area Electrical  Engineer  Ehaliyagoda', 'Area Electrical  Engineer   Kahawatta', 'Area Electrical  Engineer  Embilipitiya', NULL, '59/10 1st Lane Mihindugama', 0, '2019-11-27 18:30:00', NULL),
(2663, '036129', 210, 'Mr. A.A.G. Premadasa', '1970-01-01', 'Electrical Engineer (Bowatenna Power Station)', 'Married', '1970-01-01', 4, 'Chief Engineer  - Ukuwela Power Station', NULL, NULL, NULL, '7C, Walawwaththa, Wehigala Road, kaduwela,', 0, '2019-11-27 18:30:00', NULL),
(2664, '034356', 211, 'Mr. W.N.M. Anura Dayarathne', '1970-01-01', 'Chief  Engineer  (Construction) - UVA', 'Married', '1970-01-01', 4, 'Godakawela  Consumer Service Centre', 'Embilipitiya  Consumer Service Centre', NULL, 'Any other,', ' Dematagala Colambage Ara', 0, '2019-11-27 18:30:00', NULL),
(2665, '034726', 212, 'Mr. K.W.H. KUMARA', '1970-01-01', 'Chief Engineer (Distribution & Maintenance) - NCP', 'Married', '1970-01-01', 4, 'Electrical  Engineer   - Bowatenna Power Station', NULL, NULL, NULL, '538 A, Pathkolagolla, ', 0, '2019-11-27 18:30:00', NULL),
(2666, '033910', 213, 'Mr. U.D.A.J. WIMALASENA', '1970-01-01', 'Colombo West - Depot II', 'Married', '1970-01-01', 4, 'Avissawella Consumer Service Centre', NULL, NULL, 'To facilitate education of children, Travelling Distance,', '653/F, KORANAGODA, ELPITIYA,', 0, '2019-11-27 18:30:00', NULL),
(2667, '034359', 214, 'Mr. V.P. GUNARATNE', '1970-01-01', 'Chief Engineer (Distribution Maintenance) - Sabaragamuwa Province', 'Married', '1970-01-01', 4, 'Embilipitiya  Consumer Service Centre', 'Area Electrical  Engineer  Embilipitiya', 'Area Electrical  Engineer Tangalle', 'To facilitate education of children,', '52/2 KUMBUGODA ARA EMILIPITIYA', 0, '2019-11-27 18:30:00', NULL),
(2668, '018502', 215, 'Mr. M.A.T. Rathnaweera', '1970-01-01', 'Area Electrical  Engineer  Nawalapitiya', 'Married', '1970-01-01', 4, 'Deputy General Manager (Laxapana Complex)', NULL, NULL, 'Due to the sickness of Spouse & helpful to staying at home to newly Constructing works.', 'NO:12 UDABAGE LAXAPANA', 0, '2019-11-27 18:30:00', NULL),
(2669, '037629', 216, 'Mr. H.M.A.N. BANDARA', '1970-01-01', 'Chief Engineer  - Laxapana Power Station', 'Married', '1970-01-01', 4, 'Electrical  Engineer  - Samanala Power Station', 'Chief Engineer   - Kotmale Power Station', 'Electrical  Engineer  - Wimalasurendra Power Station', 'Service Completion and Circular Instruction', '51 Gampola Road ', 0, '2019-11-27 18:30:00', NULL),
(2670, '034343', 217, 'Mr. H.S.B. SIRISENA', '1970-01-01', 'Embilipitiya  Consumer Service Centre', 'Married', '1970-01-01', 4, 'Area Electrical  Engineer Tangalle', 'Angunakolapelessa  Consumer Service Centre', NULL, 'Service Completion and Circular Instruction', 'JAYASEWANA THORAKOLAYAYA MULADIYAWA', 0, '2019-11-27 18:30:00', NULL),
(2671, '039337', 218, 'Mr. M.K. Manjula Prasanna', '1970-01-01', 'Chief Engineer (Distribution Maintenance) - WPN', 'Married', '1970-01-01', 4, 'Chief  Engineer   - Colombo South', 'Chief Engineer  - Colombo West', 'Cheif Engineer  (Operation) - Colombo City', NULL, '2A 3 LANE NAWAGAMPURA', 0, '2019-11-27 18:30:00', NULL),
(2672, '028191', 219, 'Mr. G.H. PRINS', '1970-01-01', 'Thawalatenna  Consumer Service Centre', 'Married', '1970-01-01', 4, 'Area Electrical  Engineer    Kandy  Municipal Limits', NULL, NULL, NULL, '\"MALLIKA NIVASA\" NO: 158, MATALE ROAD', 0, '2019-11-27 18:30:00', NULL),
(2673, '036399', 220, 'Mr. B.S.B Dodamwala', '1970-01-01', 'Chief Engineer (Ukuwela Power Station)', 'Married', '1970-01-01', 4, 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, NULL, NULL, '304 SRIMATH KUDARATHWATTA MAWATHA ', 0, '2019-11-27 18:30:00', NULL),
(2674, '028345', 221, 'Mr. K.G. Piyarathna', '1970-01-01', 'Electrical  Engineer  - Wimalasurendra Power Station', 'Married', '1970-01-01', 4, 'Electrical  Engineer  - Canyon Power Station', NULL, NULL, 'ill health of parents (dependents),', ' Seethagagula Thenna Rikorton', 0, '2019-11-27 18:30:00', NULL),
(2675, '033953', 222, 'Mr. S. Weerasingha', '1970-01-01', 'Area Electrical  Engineer  Nawalapitiya', 'Unmarried', '1970-01-01', 4, 'Electrical  Engineer  - Wimalasurendra Power Station', 'Electrical  Engineer  - Canyon Power Station', NULL, 'personal matter', ' DEWANI SETHAPUMA LAXAPANA', 0, '2019-11-27 18:30:00', NULL),
(2676, '039857', 224, 'Mr. B.G.S.H. BANDARA', '1970-01-01', 'Chief Engineer (Operation Maintenance) - Colombo South', 'Unmarried', '1970-01-01', 4, 'Dehiattakandiya  Consumer Service Centre', NULL, NULL, 'Service Completion and Circular Instruction', 'NO.38 MUWAGAMMANA ', 0, '2019-11-27 18:30:00', NULL),
(2677, '040410', 225, 'Mr. T.A.K Priyashantha', '1970-01-01', 'Electrical  Engineer  (Meter Lab - R 4)', 'Married', '1970-01-01', 4, 'Kesbewa Consumer Service Centre', 'Parliamentry Complex Depot', NULL, 'Service Completion and Circular Instruction', '190/30/B, Narthanagala, Munagama,', 0, '2019-11-27 18:30:00', NULL),
(2678, '039858', 226, 'Mr.  Jothimuni Dadallage Nisal Sanjeewa', '1970-01-01', 'Project Manager (Green Power Dev. & Energy Eff. Imp Project-Tranche 1)', 'Unmarried', '1970-01-01', 4, 'Mathugama  Consumer Service Centre', 'Agalawatta Consumer Service Centre', 'Beruwala Consumer Service Centre', 'ill health of parents (dependents), Travelling Distance,', 'Jayalath, Galathara, Iththapana.', 0, '2019-11-27 18:30:00', NULL),
(2679, '039424', 227, 'Mr.  G.G.P.S.Abeysundara', '1970-01-01', 'Project Manager (C.E. & N.E.I - 220 kV Transmission Inf. Project - P3)', 'Married', '1970-01-01', 3, 'Power Plant Manager (Lakvijaya Complex) - Gen', NULL, NULL, 'Travelling Distance, Education Purpose,', 'No.210, Yaya 02,Udaragama, New town,', 0, '2019-11-27 18:30:00', NULL),
(2680, '035292', 228, 'Mr.  M.D.T.P. Samarasinghe', '1970-01-01', 'Project Manager (C.E. & N.E.I - 220 kV Transmission Inf. Project - P3)', 'Married', '1970-01-01', 3, 'Area Electrical Engineer  Avissawella', 'Area Electrical  Engineer  Ehaliyagoda', 'Area Electrical  Engineer  Ratnapura', NULL, ' Gallen Vithara Mw Kadangoda', 0, '2019-11-27 18:30:00', NULL),
(2681, '036123', 229, 'Mr. R.M.P.A RATHNAYAKE.', '1970-01-01', 'Mahawa   Consumer Service Centre', 'Married', '1970-01-01', 3, 'Area Electrical  Engineer   Kekirawa', 'Kekirawa Consumer Service Centre', 'Thambuththegama Consumer Service Centre', 'Any other,', ' DEWANA PALUGASWEWA , KALAKARAMBEWA ,', 0, '2019-11-27 18:30:00', NULL),
(2682, '033996', 230, 'Mr. P.K.S. Kumara', '1970-01-01', 'Principal (Training Centre ) - Castlereagh', 'Married', '1970-01-01', 3, 'Chief Engineer  - Laxapana Power Station', 'Electrical  Engineer  - Wimalasurendra Power Station', 'Electrical  Engineer  - Canyon Power Station', 'Travelling Distance, Any other,', ' Post Mile 2 ', 0, '2019-11-27 18:30:00', NULL),
(2683, '034410', 231, 'Mr. L.G. PRANGHARATNE', '1970-01-01', 'Avissawella Consumer Service Centre', 'Married', '1970-01-01', 3, 'Ehaliyagoda  Consumer Service Centre', NULL, NULL, 'Service Completion and Circular Instruction', 'No .207/2,  Kaluadura Hewainna Awissawella', 0, '2019-11-27 18:30:00', NULL),
(2684, '034020', 232, 'Mr. M.G.S. Jayasena', '1970-01-01', 'Chief Engineer (Operation Maintenance) - Colombo North', 'Married', '1970-01-01', 3, 'Chief Engineer (Upper Kotmale)', 'Electrical Engineer (Nilambe Power Station)', 'Chief Engineer   - Kotmale Power Station', 'ill health of parents (dependents), Any other,', ' YATIPIYANGALA ATABAGE', 0, '2019-11-27 18:30:00', NULL),
(2685, '034592', 233, 'Mr. A.A.A PREMALAL', '1970-01-01', 'Chief Engineer (Construction) - WPN', 'Married', '1970-01-01', 3, 'Area Electrical  Engineer  Gampaha', NULL, NULL, 'To facilitate education of children,', '254 KIRIGALDENIYA ROAD MEDDEGAMA', 0, '2019-11-27 18:30:00', NULL),
(2686, '037627', 234, 'Mr. L.P. Eranda Sameera', '1970-01-01', 'Mahiyanganaya Grid Substation', 'Married', '1970-01-01', 3, 'Electrical  Engineer   -   Inginiyagala Power Station', 'Inginiyagala Consumer Service Centre', 'Area Electrical  Engineer   Ampara', 'ill health of parents (dependents), To facilitate education of children, Travelling Distance, To ease economic distress,', '22/114/1 7/3  ELA Uhana', 0, '2019-11-27 18:30:00', NULL),
(2687, '035966', 235, 'Mr. U.K.W.K. GUNATHUNGA', '1970-01-01', 'Rikillagaskada Consumer Service Centre', 'Married', '1970-01-01', 3, 'Electrical Engineer - Udawalawe Power Station', NULL, NULL, 'ill health of parents (dependents), Travelling Distance,', 'No 25 Delwalkanda Ranwala', 0, '2019-11-27 18:30:00', NULL),
(2688, '034457', 236, 'Mr. S. Ranaweera', '1970-01-01', 'Chief Engineer (Construction) - NCP', 'Married', '1970-01-01', 3, 'Mihintale Consumer Service Centre', NULL, NULL, NULL, ' Pahala Kudapattiya Kahatagasdigiliya', 0, '2019-11-27 18:30:00', NULL),
(2689, '036330', 237, 'Mr. N.D.G Krishantha', '1970-01-01', 'Chief Engineer   -  Kukuleganga Power Station', 'Married', '1970-01-01', 3, 'Chief Engineer (Sapugaskanda Power Station)', NULL, NULL, NULL, '34 B, Niralgama, Rathnapura.', 0, '2019-11-27 18:30:00', NULL),
(2690, '035729', 238, 'Mr. W.S.A. GUNASENA', '1970-01-01', 'Mathugama  Consumer Service Centre', 'Married', '1970-01-01', 2, 'Opanayaka Consumer Service Centre', 'Ratnapura Town  Consumer Service Centre', 'Nivithigala Consumer Service Centre', 'Attached', ' PELANDA KANDA MADOLA', 0, '2019-11-27 18:30:00', NULL),
(2691, '039371', 239, 'Mr. K.H.G.R. Senevirathna', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Married', '1970-01-01', 2, 'Electrical  Engineer   -   Inginiyagala Power Station', 'Electrical  Engineer   -   Inginiyagala Power Station', 'Ampara Grid Substation', NULL, 'No.75/2A/01 13th Tracks Pahalakanda', 0, '2019-11-27 18:30:00', NULL),
(2692, '038933', 240, 'Mr. M.G.R.B. Dharmasiri', '1970-01-01', 'Chief Engineer (Upper Kotmale)', 'Married', '1970-01-01', 2, 'Electrical  Engineer  - Samanala Power Station', 'Electrical  Engineer  - Canyon Power Station', 'Deputy General Manager (Laxapana Complex)', NULL, ' Aberdeen 2 ', 0, '2019-11-27 18:30:00', NULL),
(2693, '039363', 241, 'Mr. T.K.N.C. De Silva', '1970-01-01', 'Chief  Engineer (Distribution & Maintenance) - CP', 'Married', '1970-01-01', 2, 'Electrical  Engineer   - Bowatenna Power Station', 'Chief Engineer  - Ukuwela Power Station', 'Chief Engineer   - Kotmale Power Station', 'Education Purpose,', '125/A M.C.ROAD MATALE', 0, '2019-11-27 18:30:00', NULL),
(2694, '035178', 242, 'Mr. J.K.M. Susantha', '1970-01-01', 'Area Electrical  Engineer  Bandaragama', 'Married', '1970-01-01', 2, 'Chief Engineer   -  Kukuleganga Power Station', NULL, NULL, NULL, 'No112 b,Dabara, meewanapalana Horana.', 0, '2019-11-27 18:30:00', NULL),
(2695, '035166', 243, 'Mr. K.S. Ranasingha', '1970-01-01', 'Power Plant Manager (Lakvijaya Complex) - Gen', 'Married', '1970-01-01', 2, 'Chief Engineer   -  Kukuleganga Power Station', 'Chief Engineer   -  Kukuleganga Power Station', 'Chief Engineer (Sapugaskanda Power Station)', NULL, 'Kaluwalatenna, Kelinkanda, Agalawatta.', 0, '2019-11-27 18:30:00', NULL),
(2696, '037622', 244, 'Mr. H.M.S.K Jayawardana', '1970-01-01', 'Area Electrical Engineer  Avissawella', 'Married', '1970-01-01', 2, 'Ratnapura Town  Consumer Service Centre', 'Opanayaka Consumer Service Centre', 'Kuruwita Consumer Service Centre', NULL, 'No 53/17, Angammana Rd Ratnapura', 0, '2019-11-27 18:30:00', NULL),
(2697, '036231', 245, 'Mr. A.R.L.U. Ramanayake', '1970-01-01', 'Chief Engineer -  Samanalawewa  Power Station', 'Married', '1970-01-01', 2, 'Uva Paranagama Consumer Service Centre', 'Balangoda  Consumer Service Centre', 'Diyatalawa Consumer Service Centre', NULL, '124, Aluthnuwara, Imbulpe,', 0, '2019-11-27 18:30:00', NULL),
(2698, '039426', 246, 'Mr. M.N.S. SUMANADASA', '1970-01-01', 'Chief Engineer (Operation & Maintenance) - Anuradhapura', 'Married', '1970-01-01', 2, 'Electrical  Engineer   - Bowatenna Power Station', 'Chief Engineer (Ukuwela Power Station)', 'Madampe Grid Substation', 'Service Completion and Circular Instruction', '398/1 Udahipanpola Thuththiripitigama', 0, '2019-11-27 18:30:00', NULL),
(2699, '036109', 247, 'Mr. W.M.C. Walpita', '1970-01-01', 'Uva Paranagama Consumer Service Centre', 'Married', '1970-01-01', 2, 'Electrical  Engineer  - Samanala Power Station', 'Balangoda  Consumer Service Centre', 'Electrical Engineer - Udawalawe Power Station', 'ill health of parents (dependents), Travelling Distance,', 'Moragoda Gedera Morahala Balangoda', 0, '2019-11-27 18:30:00', NULL),
(2700, '036223', 248, 'Mr. D.M.U.T Disanayeke', '1970-01-01', 'Chief Engineer (Upper Kotmale)', 'Married', '1970-01-01', 2, 'Chief Engineer   - Kotmale Power Station', NULL, NULL, NULL, ' WELIMADA ROAD OHIYA', 0, '2019-11-27 18:30:00', NULL),
(2701, '035795', 249, 'Mr. H.M.C.D. Ranathunga', '1970-01-01', 'Bandarawela   Consumer Service Centre', 'Married', '1970-01-01', 2, 'Area Electrical  Engineer  Embilipitiya', 'Area Electrical  Engineer   Kahawatta', 'Area Electrical  Engineer  Ratnapura', 'Any other,', ' Ranwalayaya Ranwala', 0, '2019-11-27 18:30:00', NULL),
(2702, '037643', 250, 'Mr. P.K.G.K.K. Abesiri', '1970-01-01', 'Chief Engineer (Upper Kotmale)', 'Unmarried', '1970-01-01', 2, 'Energy Management - CP', NULL, NULL, NULL, '27 Alawathugoda Rd Pujapitiya', 0, '2019-11-27 18:30:00', NULL),
(2703, '035707', 251, 'Mr.  NIRMALAN', '1970-01-01', 'Project Manager (New Kelani Bridge Project)', 'Married', '1970-01-01', 2, 'Deputy General Manager (Southern  Province)', 'Chief Engineer  (Kelanitissa Power Station)', NULL, 'Any other,', 'NO:225/16 Fergusion Road ', 0, '2019-11-27 18:30:00', NULL),
(2704, '039332', 252, 'Mr. K.M.S.A. BANDARA.', '1970-01-01', 'Chief Engineer (Randenigala,Rantambe Power Station)', 'Married', '1970-01-01', 1, 'Deputy General Manager (Laxapana Complex)', NULL, NULL, NULL, 'NO: 10 , KOHUKUMBURA , NANNAPURAWA ,', 0, '2019-11-27 18:30:00', NULL),
(2705, '035304', 253, 'Mr. A.W.N. SANJAYA', '1970-01-01', 'Chief Engineer -  Samanalawewa  Power Station', 'Married', '1970-01-01', 1, 'Area Electrical  Engineer  Embilipitiya', 'Area Electrical  Engineer   Kahawatta', 'Deniyaya  Consumer Service Centre', NULL, 'Deniyaya Road, Rakwana. ', 0, '2019-11-27 18:30:00', NULL),
(2706, '033621', 254, 'Mr. H.G.L.C. Kumara', '1970-01-01', 'Kekirawa Consumer Service Centre', 'Married', '1970-01-01', 1, 'Area Electrical  Engineer   Minneriya', 'Manampitiya Consumer Service Centre', NULL, NULL, 'No.574 Jayanthipura ', 0, '2019-11-27 18:30:00', NULL),
(2707, '033788', 255, 'Mr. M.M.M.U. DHARMASEKARA', '1970-01-01', 'Chief Engineer (Construction) - CP', 'Married', '1970-01-01', 1, 'Electrical  Engineer   - Bowatenna Power Station', 'Electrical  Engineer  - Nilambe Power Station', 'Store Keeper (Provincial Stores) - CP', NULL, '74, Siriniwasa, Mapamadulla Kulugammana', 0, '2019-11-27 18:30:00', NULL),
(2708, '042124', 256, 'Mr. N.A.J.P. Bandara', '1970-01-01', 'Chief Engineer (Project & Heavy Maintenance) - West Zone', 'Married', '1970-01-01', 1, 'Area Electrical  Engineer   Ampara', 'Ampara Consumer Service Centre', 'Area Electrical  Engineer   Ampara', 'Any other,', '34/29/02 Rajagala Thenna ', 0, '2019-11-27 18:30:00', NULL),
(2709, '040155', 257, 'Mr. S.D.R.R. Dilrukshana', '1970-01-01', 'Mallawapitiya Grid Substation', 'Unmarried', '1970-01-01', 1, 'Chief Engineer   - Kotmale Power Station', 'Area Electrical  Engineer   Ampara', 'Electrical  Engineer  - Samanala Power Station', 'To work in a different exposure, Career Development,', 'B/185 Udagama Aranayake', 0, '2019-11-27 18:30:00', NULL),
(2710, '038919', 258, 'Mr. S.P.T.S. Rathnasiri', '1970-01-01', 'Pallekela Grid Substation', 'Unmarried', '1970-01-01', 1, 'Area Electrical  Engineer  Badulla', 'Electrical Engineer (Planning) - Uva Province', 'Chief Engineer  - Randenigala , Rantambe Power Station', 'Travelling Distance, Any other,', '35 Bandarapura, Passara Para,', 0, '2019-11-27 18:30:00', NULL),
(2711, '033687', 259, 'Mr. G.W.S.V. PERERA', '1970-01-01', 'Chief Engineer (Distribution & Maintenance) - WPS 1', 'Married', '1970-01-01', 1, 'Chief Engineer    Homagama', NULL, NULL, 'Due to personnel matters.', '6/B/1, SUWARNA PEDESA, KIRIGAMPAMUNUWA', 0, '2019-11-27 18:30:00', NULL),
(2712, '035133', 260, 'Mr. A.N.B.G. ROSHAN KUMARA', '1970-01-01', 'Chief Engineer (Upper Kotmale)', 'Married', '1970-01-01', 1, 'Chief Engineer   - Kotmale Power Station', NULL, NULL, NULL, '44 NEW TOWN KOTMALE', 0, '2019-11-27 18:30:00', NULL),
(2713, '037543', 261, 'Mr. S.I.K. KULARATHNA', '1970-01-01', 'Chief Engineer (Ukuwela Power Station)', 'Unmarried', '1970-01-01', 1, 'Area Electrical  Engineer    Kandy  Municipal Limits', 'Area Electrical  Engineer  Matale', NULL, NULL, 'NO: 135 REDBANAGAMA ', 0, '2019-11-27 18:30:00', NULL),
(2714, '037561', 262, 'Mr. N.W.G. PUSHPAKUMARA', '1970-01-01', 'Hambantota Grid Substation', 'Married', '1970-01-01', 1, 'Electrical Engineer - Udawalawe Power Station', 'Godakawela  Consumer Service Centre', 'Chief Engineer (Commercial) - Sabaragamuwa Province', 'Travelling Distance, As per the circular requirement, Any other,', '324/B PALLEGAMA ', 0, '2019-11-27 18:30:00', NULL),
(2715, '037537', 263, 'Mr. D.P.C.D. Balasooriya', '1970-01-01', 'Deputy General Manager (Laxapana Complex)', 'Married', '1970-01-01', 1, 'Chief Engineer  ( Sapugaskanda Power Station )', NULL, NULL, 'Career Development,', '23/12, Ginigathena Road, ', 0, '2019-11-27 18:30:00', NULL),
(2716, '019005', 264, 'Mr. K.S. JAYAKODI', '1970-01-01', 'Deputy General Manager (Project & Heavy Maint.) - R 4', 'Married', '1970-01-01', 1, 'Bandaragama Consumer Service Centre', 'PD (TL&SS)', NULL, 'Any other,', '289/1,SUWADEWWA, SUDUWELLA RD WEKADA,', 0, '2019-11-27 18:30:00', NULL),
(2717, '038925', 265, 'Mr. U.M.U.K. Karanarathne', '1970-01-01', 'Chief Engineer (Project & Heavy Maintenance) - West Zone', 'Married', '1970-01-01', 0, 'Electrical  Engineer  - Samanala Power Station', 'Electrical  Engineer  - Wimalasurendra Power Station', NULL, 'ill health of employee, ill health of parents (dependents),', ' Ambathalawa Ginigathhena', 0, '2019-11-27 18:30:00', NULL),
(2718, '033979', 266, 'Mr. P. R. Keerthipala', '1970-01-01', 'Chief  Engineer  (Construction) - WPS II', 'Married', '1970-01-01', 0, 'Electrical  Engineer  - Samanala Power Station', 'Electrical  Engineer  - Wimalasurendra Power Station', 'Chief Engineer  - Laxapana Power Station', 'ill health of employee,', ' Morathotiyawaththa Morahenagama', 0, '2019-11-27 18:30:00', NULL),
(2719, '039328', 267, 'Mr. E.V.S Silva', '1970-01-01', 'Chief Engineer (Power Plant)- Assets Mgt.  & Centralised Services', 'Married', '1970-01-01', 0, 'CE (Barge Mounted Power Station)', 'Chief Engineer  ( Sapugaskanda Power Station )', 'Chief Engineer  (Kelanitissa Power Station)', 'To work in a different exposure, Any other,', '86/C Sanwaka juwam Mawatha Mahabage', 0, '2019-11-27 18:30:00', NULL),
(2720, '039381', 268, 'Mr. W.A. Wasantha Kumara Weerasooriya', '1970-01-01', 'Madolkelle CSC', 'Married', '1970-01-01', 0, 'Chief Engineer (Distribution Maintaince) - EP', 'Area Electrical  Engineer   Ampara', NULL, 'private matter', '2/51C,  Paragahakale,', 0, '2019-11-27 18:30:00', NULL),
(2721, '036215', 269, 'Mr. H.C.N.P. SIRISENA', '1970-01-01', 'Chief Engineer (Operation & Maintenance) - Galle', 'Married', '1970-01-01', 0, 'Electrical Engineer - Udawalawe Power Station', 'Store Keeper  Opanayaka', 'Balangoda  Consumer Service Centre', 'Service Completion and Circular Instruction', ' Pabadeniya Morahala', 0, '2019-11-27 18:30:00', NULL),
(2722, '039370', 270, 'Mr. T.M.P.M. Thennakoon', '1970-01-01', 'Thambuththegama Consumer Service Centre', 'Married', '1970-01-01', 0, 'Chief Engnieer (Uthuru Janani Power Plant)', 'Chief Engineer (Sapugaskanda Power Station)', 'Power Plant Manager (Lakvijaya Complex) - Gen', NULL, 'No.367, 3rd Phrase, Stage II', 0, '2019-11-27 18:30:00', NULL),
(2723, '037660', 271, 'Mr. K.W.S.K. WEERASINGHE', '1970-01-01', 'CE (Central Workshop & Garage)', 'Married', '1970-01-01', 0, 'Area Electrical  Engineer  Kelaniya', NULL, NULL, 'Any other,', '2/9 Sirisewana Pelena', 0, '2019-11-27 18:30:00', NULL),
(2724, '036133', 272, 'Mr. H.M.V. Bandara', '1970-01-01', 'Chief Engineer (Operation & Maintenance) - Kandy', 'Married', '1970-01-01', 0, 'Electrical  Engineer   - Bowatenna Power Station', NULL, NULL, NULL, '149/5 Dumbukola Katudeniya', 0, '2019-11-27 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ps_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trainee_state` int(3) DEFAULT NULL,
  `t_collage` text COLLATE utf8mb4_unicode_ci,
  `t_year` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_dep` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` int(10) DEFAULT NULL,
  `district` int(10) DEFAULT NULL,
  `zone` int(10) DEFAULT NULL,
  `division` int(10) DEFAULT NULL,
  `school` int(10) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `homephone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` int(11) DEFAULT NULL,
  `inRecycle` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `otp_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isverified` tinyint(4) NOT NULL DEFAULT '0',
  `sub_code` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `status`, `admin`, `username`, `email`, `nic`, `dob`, `mobile`, `address`, `profile_img`, `reg_id`, `ps_number`, `emp_id`, `trainee_state`, `t_collage`, `t_year`, `t_dep`, `province`, `district`, `zone`, `division`, `school`, `email_verified_at`, `password`, `homephone`, `gender`, `designation`, `inRecycle`, `remember_token`, `created_at`, `updated_at`, `otp_code`, `isverified`, `sub_code`) VALUES
(1097, 'Sameera Perera', 'user', 1, 0, 'medixuser', 'testtest457567@gmail.com', '688789889V', '2020-04-10', '0754788899', 'test test', '604948329.jpg', 'MEDIX/U/708252826', 'nopsnumber', 'noempid', NULL, NULL, NULL, NULL, 399, 402, 495, 683, 1288, NULL, '$2y$10$3077.kLQpaQcvSp7bbSIueKgDFZFqVg4nYxESO0aXA9DVwzODBaNq', '7676667667', 'male', NULL, 0, NULL, '2020-04-03 10:24:46', '2020-04-26 03:12:34', '$2y$10$N401OBIzzoRQf6BWHRESFujz6mUu2oMtqdxu4LMdkvlXW6VZSM/we', 0, '3'),
(1098, 'test', 'user 2', 1, 0, 'testuseryasi', 'yasirukulinda23232@gmail.com', '30409439439', '2020-04-04', '3445454545', 'tes test', NULL, 'MEDIX/U/2478102134', 'nopsnumber', 'noempid', NULL, NULL, NULL, NULL, 399, 402, 495, 683, 3, NULL, '$2y$10$GgmomnGjn4oufHxIGRpXGeGfSLCBox3ImGQ4zJtwF0J/NdCe67yya', '34354554545', 'male', NULL, 0, NULL, '2020-04-03 10:47:36', NULL, '$2y$10$Z2VGNbfiadx.2vYl.MLVoelU9lg5kKW6Llq5Cq6tdmpLYwrLABZdi', 0, NULL),
(1099, 'Buddhika', 'upashantha', 1, 0, 'buddhika', 'buddhikaupashantha@gmail.com', '842052106v', '1984-07-23', '0772991827', 'No.03, Near Court, New Town, Embilipitiya.', NULL, 'MEDIX/U/3853250590', 'nopsnumber', NULL, NULL, NULL, NULL, NULL, 399, 402, 495, 688, 1288, NULL, '$2y$10$WuhUTtVIaMaVNykrnbBQJej8HooEYIDgT6PlgUpVZH6FJNRbcJRsa', '0472230068', 'male', NULL, 0, NULL, '2020-04-08 05:31:28', '2020-04-12 02:25:29', '$2y$10$6tGRG6pYHCByRcq9.f9AAOiKbggO2Na7qwAKUeyc3UcXXjZWpN8e6', 0, '2'),
(1100, 'yasiru', 'test', 1, 0, 'useryasi', 'yasirukulinda677@gmail.com', '34459496968', '2020-04-15', '0754077568', 'test, test', NULL, 'MEDIX/U/3769059012', NULL, NULL, NULL, NULL, NULL, NULL, 399, 402, 493, 687, 1290, NULL, '$2y$10$AP9zBTMyBFx8zlL11bTDIOvKSN6OXCtChRmFhehkw1qkfKw08m5sO', '44594886959', 'male', NULL, 0, NULL, '2020-04-21 09:55:19', NULL, '$2y$10$PkUlM9f6ct8sevU4U3SMiOOhDxzJcJpZqtk.X4w.jq7RHBApwJWjq', 0, '3');

-- --------------------------------------------------------

--
-- Table structure for table `workplaces`
--

CREATE TABLE `workplaces` (
  `id` int(11) NOT NULL,
  `placename` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workplaces`
--

INSERT INTO `workplaces` (`id`, `placename`, `created_at`, `updated_at`) VALUES
(2, 'CSC Kalutara', '2019-07-04 23:37:58', '2019-07-25 04:03:29'),
(3, 'Investigation', '2019-07-11 15:13:28', NULL),
(5, 'CSC Mathugama', '2019-07-11 15:15:38', NULL),
(6, 'CSC Beruwala', '2019-07-12 01:38:19', NULL),
(7, 'CSC Panadura', '2019-07-12 01:38:57', NULL),
(8, 'CSC Pulltion', '2019-07-12 01:39:25', NULL),
(9, 'CSC Agalawaththa', '2019-07-12 01:39:53', NULL),
(10, 'CSC Rathmalana', '2019-07-12 01:40:21', NULL),
(11, 'CSC Boralesgamuwa', '2019-07-12 01:40:49', NULL),
(12, 'CSC Kesbewa', '2019-07-12 01:41:05', NULL),
(13, 'CSC Dehiwala', '2019-07-12 01:42:25', NULL),
(14, 'CSC Kalubowila', '2019-07-12 01:42:45', NULL),
(16, 'Distribution & Maintenance (wps 1)', '2019-07-12 01:48:20', NULL),
(17, 'Construction (wps 1)', '2019-07-12 01:49:25', NULL),
(18, 'Project & Highway Maintenance (R 4)', '2019-07-12 01:52:15', NULL),
(19, 'Commercel (wps 1)', '2019-07-12 01:54:07', NULL),
(20, 'Energy Management (wps 1)', '2019-07-12 01:55:30', NULL),
(21, 'Chief Engineer Rathmalana', '2019-07-12 01:57:17', NULL),
(22, 'Area Maintenance Unit Kalutara', '2019-07-12 02:03:14', NULL),
(23, 'Lakvijaya Power Station', '2019-07-12 11:35:12', NULL),
(24, 'Sapugaskanda Power Station', '2019-07-12 11:35:51', NULL),
(25, 'Kelanitissa Power Station', '2019-07-12 11:37:00', NULL),
(26, 'Ukuwela Power Station', '2019-07-12 11:38:39', NULL),
(27, 'CSC Vavuniyawa', '2019-07-12 11:39:12', NULL),
(28, 'CSC Inginiyagala', '2019-07-12 11:39:32', NULL),
(29, 'CSC Borella', '2019-07-12 11:40:09', NULL),
(30, 'CSC Bibile', '2019-07-12 11:40:51', NULL),
(31, 'Project & Highway Maintenance (R 3)', '2019-07-12 11:41:07', NULL),
(32, 'Project & Highway Maintenance (R 2)', '2019-07-12 11:41:18', NULL),
(33, 'Distribution & Maintenance (NCP)', '2019-07-12 11:41:53', NULL),
(34, 'Distribution & Maintenance (South)', '2019-07-12 11:42:30', NULL),
(35, 'Kukulegaga Power Station', '2019-07-12 11:43:17', NULL),
(36, 'Samanalawewa Power Station', '2019-07-12 11:43:45', NULL),
(37, 'CSC Hiripitiya', '2019-07-12 11:44:25', NULL),
(38, 'CSC Nivithigala', '2019-07-12 11:45:47', NULL),
(39, 'CSC Eheliyagoda', '2019-07-12 11:46:04', NULL),
(40, 'CSC Kuruwita', '2019-07-12 11:46:30', NULL),
(41, 'CSC Kiriella', '2019-07-12 11:46:52', NULL),
(42, 'Area Maintenance Unit Rathmalana', '2019-07-12 11:47:33', NULL),
(43, 'Area Maintenance Unit Eheliyagoda', '2019-07-12 11:47:53', NULL),
(44, 'CSC Rathnapura Town', '2019-07-12 11:50:04', NULL),
(45, 'CSC Malwala', '2019-07-12 11:50:23', NULL),
(46, 'CSC Kalawana', '2019-07-12 11:50:47', NULL),
(47, 'Area Maintenance Unit Rathnapura', '2019-07-12 11:51:12', NULL),
(48, 'CSC Udawalawa', '2019-07-12 11:51:50', NULL),
(49, 'CSC Balawinna', '2019-07-12 11:52:21', NULL),
(50, 'CSC Kolonna', '2019-07-12 11:52:41', NULL),
(51, 'CSC Embilipitiya', '2019-07-12 11:53:00', NULL),
(52, 'CSC Kahawatta', '2019-07-12 11:53:50', NULL),
(53, 'CSC Opanayaka', '2019-07-12 11:54:53', NULL),
(54, 'CSC Balangoda', '2019-07-12 11:55:11', NULL),
(55, 'CSC Godakawela (Balavinna)', '2019-07-12 11:56:43', NULL),
(56, 'Area Maintenance Unit Embilipitiya', '2019-07-12 11:57:06', NULL),
(57, 'Area Maintenance Unit Kahawatta', '2019-07-12 11:57:37', NULL),
(58, 'Commercel (Sabaragamuwa)', '2019-07-12 11:58:02', NULL),
(59, 'Energy Management (Sabaragamuwa)', '2019-07-12 11:58:22', NULL),
(60, 'Distribution & Maintenance (Sabaragamuwa)', '2019-07-12 11:58:41', NULL),
(61, 'Construction (Sabaragamuwa)', '2019-07-12 11:59:03', NULL),
(62, 'Commercel (CP)', '2019-07-12 12:00:40', NULL),
(63, 'Chunnakkam Power Station', '2019-07-12 16:39:48', NULL),
(64, 'Meter Lab (R 3)', '2019-07-12 17:24:57', NULL),
(65, 'Sivil Asset', '2019-07-12 18:21:34', NULL),
(70, 'EE RATHMALANA', '2019-07-22 03:47:20', NULL),
(71, 'Commercel & Coppretiwe (R 3)', '2019-07-22 05:01:12', NULL),
(73, 'Energy Management (R 3)', '2019-07-22 05:05:29', NULL),
(78, 'CSC Chilaw', '2019-07-23 09:29:20', NULL),
(79, 'CSC Keeriyankalliya', '2019-07-23 09:29:56', NULL),
(80, 'CSC Madampe', '2019-07-23 09:30:19', NULL),
(81, 'EE Chilaw', '2019-07-23 09:31:29', NULL),
(83, 'CSC Kuliyapitiya', '2019-07-23 09:34:07', NULL),
(84, 'CSC Panduwasnuwara', '2019-07-23 09:34:33', NULL),
(85, 'CSC Pannala', '2019-07-23 09:35:00', NULL),
(86, 'EE Kuliyapitiya', '2019-07-23 09:35:36', NULL),
(87, 'Area Maintenance Unit Kuliyapitiya', '2019-07-23 09:35:55', NULL),
(88, 'Area Maintenance Unit Chilaw', '2019-07-23 09:36:38', NULL),
(89, 'CSC Gokarella', '2019-07-23 09:37:40', NULL),
(90, 'CSC Mallawapitiya', '2019-07-23 09:38:15', NULL),
(91, 'CSC Pothuhera', '2019-07-23 09:38:43', NULL),
(92, 'CSC Kurunegala Town', '2019-07-23 09:39:42', NULL),
(93, 'EE Kurunegala', '2019-07-23 09:40:24', NULL),
(94, 'Area Maintenance Unit Kurunegala', '2019-07-23 09:40:34', NULL),
(95, 'CSC Narammala', '2019-07-23 09:41:16', NULL),
(96, 'EE Narammala', '2019-07-23 09:41:28', NULL),
(97, 'Area Maintenance Unit Narammala', '2019-07-23 09:41:38', NULL),
(98, 'CSC Giriulla', '2019-07-23 09:42:03', NULL),
(99, 'CSC Alawwa', '2019-07-23 09:42:20', NULL),
(100, 'CSC Puttalam', '2019-07-23 09:42:47', NULL),
(101, 'Area Maintenance Unit Puttalam', '2019-07-23 09:42:58', NULL),
(102, 'EE Puttalam', '2019-07-23 09:43:30', NULL),
(103, 'CSC Anamaduwa', '2019-07-23 09:43:48', NULL),
(104, 'CSC Norochcholai', '2019-07-23 09:44:18', NULL),
(105, 'CSC Wariyapola', '2019-07-23 09:44:50', NULL),
(106, 'Area Maintenance Unit Wariyapola', '2019-07-23 09:45:03', NULL),
(107, 'EE Wariyapola', '2019-07-23 09:45:14', NULL),
(108, 'CSC Maho', '2019-07-23 09:45:29', NULL),
(109, 'CSC Galgamuwa', '2019-07-23 09:45:46', NULL),
(111, 'CSC Wennappuwa', '2019-07-23 09:46:35', NULL),
(112, 'Area Maintenance Unit Wennappuwa', '2019-07-23 09:46:44', NULL),
(113, 'EE Wennappuwa', '2019-07-23 09:46:57', NULL),
(114, 'CSC Nattandiya', '2019-07-23 09:47:19', NULL),
(115, 'CSC Bolawatta', '2019-07-23 09:47:57', NULL),
(116, 'Distribution & Maintenance (NWP)', '2019-07-23 09:50:08', NULL),
(117, 'Construction (NWP)', '2019-07-23 09:50:27', NULL),
(118, 'Energy Management (NWP)', '2019-07-23 09:50:41', NULL),
(119, 'Commercel (NWP)', '2019-07-23 09:51:03', NULL),
(120, 'CSC Kelaniya', '2019-07-24 05:15:59', NULL),
(121, 'CSC Delgoda', '2019-07-24 05:16:49', NULL),
(122, 'CSC Mawaramandiya', '2019-07-24 05:17:30', NULL),
(123, 'CSC Kiriellawala', '2019-07-24 05:18:23', NULL),
(124, 'EE Kelaniya', '2019-07-24 05:18:47', NULL),
(125, 'Area Maintenance Unit Kelaniya', '2019-07-24 05:19:51', NULL),
(126, 'CSC Gampaha', '2019-07-24 05:20:23', NULL),
(127, 'CSC Yakkala', '2019-07-24 05:21:11', NULL),
(128, 'CSC Ganemulla', '2019-07-24 05:22:15', NULL),
(129, 'EE Gampaha', '2019-07-24 05:22:37', NULL),
(130, 'Area Maintenance Unit Gampaha', '2019-07-24 05:23:00', NULL),
(131, 'CSC Weyangoda', '2019-07-24 05:24:31', NULL),
(132, 'CSC Nittabuwa', '2019-07-24 05:24:53', NULL),
(134, 'CSC Pasyala', '2019-07-24 05:25:43', NULL),
(135, 'Area Maintenance Unit weyangoda', '2019-07-24 05:33:25', NULL),
(136, 'EE weyangoda', '2019-07-24 05:33:44', NULL),
(137, 'CSC Diulapitiya', '2019-07-24 05:34:19', NULL),
(138, 'CSC Mirigama', '2019-07-24 05:35:01', NULL),
(139, 'CSC  Dunagaha', '2019-07-24 05:36:06', NULL),
(140, 'Area Maintenance Unit Diulapitiya', '2019-07-24 05:36:28', NULL),
(141, 'EE Diulapitiya', '2019-07-24 05:36:52', NULL),
(142, 'CSC Gampaha 2', '2019-07-24 05:37:58', NULL),
(143, 'CSC kirindiwela 1', '2019-07-24 05:41:04', '2019-07-24 05:47:41'),
(144, 'CSC kirindiwela 2', '2019-07-24 05:41:30', '2019-07-24 05:48:05'),
(145, 'CSC Ja - Ela', '2019-07-24 05:44:47', NULL),
(146, 'CSC Waththala', '2019-07-24 05:45:19', NULL),
(147, 'EE Ja - Ela', '2019-07-24 05:45:40', NULL),
(148, 'CSC Ragama', '2019-07-24 05:45:59', NULL),
(149, 'CSC Ja - Ela 2', '2019-07-24 05:46:15', NULL),
(150, 'CSC Negombo', '2019-07-24 05:48:40', NULL),
(151, 'CSC Katunayaka', '2019-07-24 05:49:22', NULL),
(152, 'CSC Minuwangoda', '2019-07-24 05:50:05', NULL),
(153, 'Distribution & Maintenance (WPN)', '2019-07-24 05:51:32', NULL),
(154, 'Construction (WPN)', '2019-07-24 05:51:55', NULL),
(155, 'Energy Management (WPN)', '2019-07-24 05:52:12', NULL),
(156, 'Commercel (WPN)', '2019-07-24 05:52:34', NULL),
(157, 'Area Maintenance Unit Negombo', '2019-07-24 05:53:24', NULL),
(158, 'EE Negombo', '2019-07-24 05:53:46', NULL),
(159, 'CSC Akkaraipattu', '2019-07-25 07:22:34', NULL),
(160, 'CSC Ampara', '2019-07-25 07:23:25', NULL),
(161, 'CSC Dihiattakandiya', '2019-07-25 07:23:52', NULL),
(162, 'CSC Potuvil', '2019-07-25 07:24:43', NULL),
(163, 'CSC Siyamdlanduwa', '2019-07-25 07:25:18', NULL),
(164, 'CSC Weeragoda', '2019-07-25 07:25:39', NULL),
(165, 'CSC Mahaoya', '2019-07-25 07:26:01', NULL),
(166, 'Area Maintenance Unit Ampara', '2019-07-25 07:26:51', NULL),
(167, 'EE Ampara', '2019-07-25 07:27:04', NULL),
(168, 'CSC Batticaloa Town', '2019-07-25 07:28:12', NULL),
(169, 'CSC Valaichanai', '2019-07-25 07:28:37', NULL),
(170, 'CSC Kattankudy', '2019-07-25 07:29:05', NULL),
(171, 'CSC Kalawanchikudy', '2019-07-25 07:29:33', NULL),
(172, 'CSC Eravur', '2019-07-25 07:30:14', NULL),
(173, 'Area Maintenance Unit Batticaloa', '2019-07-25 07:30:46', NULL),
(174, 'EE Batticaloa', '2019-07-25 07:30:58', NULL),
(175, 'CSC Sammanthurai', '2019-07-25 07:31:46', NULL),
(176, 'CSC Ninthavur', '2019-07-25 07:32:09', NULL),
(177, 'CSC Kalmunai', '2019-07-25 07:32:33', NULL),
(178, 'Area Maintenance Unit Kalmunai', '2019-07-25 07:32:47', NULL),
(179, 'EE Kalmunai', '2019-07-25 07:33:01', NULL),
(180, 'CSC Trincomalee', '2019-07-25 07:33:36', NULL),
(181, 'CSC Kanthale', '2019-07-25 07:34:02', NULL),
(182, 'CSC Muthur', '2019-07-25 07:34:26', NULL),
(183, 'CSC Kinniya', '2019-07-25 07:34:56', NULL),
(184, 'Area Maintenance Unit Trincomalee', '2019-07-25 07:35:47', NULL),
(185, 'EE Trincomalee', '2019-07-25 07:36:00', NULL),
(186, 'Distribution & Maintenance (EP)', '2019-07-25 07:36:50', NULL),
(187, 'Commercel (EP)', '2019-07-25 07:37:06', NULL),
(188, 'Energy Management (EP)', '2019-07-25 07:37:19', NULL),
(189, 'Construction (EP)', '2019-07-25 07:37:34', NULL),
(190, 'CSC Dehiaththakandiya', '2019-07-26 11:32:52', NULL),
(191, 'CSC  Thalangama', '2019-07-31 03:58:46', NULL),
(192, 'CSC Malabe', '2019-07-31 03:59:20', NULL),
(193, 'CSC  Weliwita', '2019-07-31 04:00:02', NULL),
(194, 'EE Ambalangoda', '2019-07-31 04:14:29', NULL),
(195, 'Area Maintenance Unit Ambalangoda', '2019-07-31 04:15:08', NULL),
(196, 'CSC Ambalangoda', '2019-07-31 04:15:21', NULL),
(197, 'CSC Seenigoda', '2019-07-31 04:16:51', NULL),
(198, 'CSC Elpitiya', '2019-07-31 04:17:59', NULL),
(199, 'CSC Induruwa', '2019-07-31 04:19:12', NULL),
(200, 'Area Maintenance Unit Baddegama', '2019-07-31 04:20:17', NULL),
(201, 'EE Baddegama', '2019-07-31 04:20:34', NULL),
(202, 'CSC Baddegama', '2019-07-31 04:20:51', NULL),
(203, 'CSC Gonapinuwala', '2019-07-31 04:21:58', NULL),
(204, 'CSC Wanduramba', '2019-07-31 04:23:03', NULL),
(205, 'Area Maintenance Unit Galle', '2019-07-31 04:24:02', NULL),
(206, 'EE Galle', '2019-07-31 04:24:21', NULL),
(207, 'CSC Galle', '2019-07-31 04:24:37', NULL),
(208, 'CSC Imaduwa', '2019-07-31 04:25:17', NULL),
(209, 'CSC Habaraduwa', '2019-07-31 04:26:37', NULL),
(210, 'EE Akuressa', '2019-07-31 04:27:36', NULL),
(211, 'Area Maintenance Unit Akuressa', '2019-07-31 04:28:06', NULL),
(212, 'CSC Akuressa', '2019-07-31 04:28:20', NULL),
(213, 'CSC Weligama', '2019-07-31 04:29:10', NULL),
(214, 'CSC Deniyaya', '2019-07-31 04:29:56', NULL),
(215, 'Area Maintenance Unit Matara', '2019-07-31 04:30:57', NULL),
(216, 'EE Matara', '2019-07-31 04:31:16', NULL),
(217, 'CSC Matara', '2019-07-31 04:31:28', NULL),
(218, 'CSC Kamburupitiya', '2019-07-31 04:32:25', NULL),
(219, 'CSC Hakmana', '2019-07-31 04:33:20', NULL),
(220, 'CSC Hiththatiya', '2019-07-31 04:35:01', NULL),
(221, 'CSC Dikwella', '2019-07-31 04:35:44', NULL),
(222, 'Area Maintenance Unit Thangalla', '2019-07-31 04:36:50', NULL),
(223, 'EE Thangalla', '2019-07-31 04:37:01', NULL),
(224, 'CSC Thangalla', '2019-07-31 04:37:14', NULL),
(225, 'CSC Middeniya', '2019-07-31 04:38:30', NULL),
(226, 'CSC Walasmulla', '2019-07-31 04:39:06', NULL),
(227, 'CSC Weeraketiya', '2019-07-31 04:39:51', NULL),
(228, 'CSC Angunukolapelessa', '2019-07-31 04:42:11', NULL),
(229, 'Area Maintenance Unit Hambantota', '2019-07-31 04:43:08', NULL),
(230, 'EE Hambantota', '2019-07-31 04:43:24', NULL),
(231, 'CSC Hambantota', '2019-07-31 04:43:36', NULL),
(232, 'CSC Sooriyawewa', '2019-07-31 04:45:06', NULL),
(233, 'CSC Thissamaharamaya', '2019-07-31 04:46:11', NULL),
(234, 'CSC Kataragama', '2019-07-31 04:46:43', NULL),
(235, 'Commercel (South)', '2019-07-31 04:47:50', NULL),
(236, 'Construction (South)', '2019-07-31 04:48:53', NULL),
(237, 'Energy Management (South)', '2019-07-31 04:49:12', NULL),
(238, 'CSC Agunukolapelessa', '2019-07-31 09:13:34', NULL),
(239, 'Project', '2019-08-02 03:37:58', NULL),
(240, 'CSC Monaragala', '2019-08-06 03:24:11', NULL),
(241, 'CSC Wellawaya', '2019-08-06 03:25:49', NULL),
(242, 'CSC Dambagalla', '2019-08-06 03:26:23', NULL),
(243, 'CSC Thanamalwila', '2019-08-06 03:26:57', NULL),
(244, 'CSC Diyathalawa', '2019-08-06 03:27:24', NULL),
(245, 'CSC Bandarawela', '2019-08-06 03:27:58', NULL),
(246, 'CSC Welimada', '2019-08-06 03:28:25', NULL),
(247, 'CSC Uva Paranagama', '2019-08-06 03:29:00', NULL),
(248, 'CSC Badulla', '2019-08-06 03:29:39', NULL),
(249, 'CSC Haliela', '2019-08-06 03:30:06', NULL),
(251, 'CSC Passara', '2019-08-06 03:31:06', NULL),
(252, 'CSC Mahiyangana', '2019-08-06 03:31:46', NULL),
(253, 'CSC Kandakeltiya', '2019-08-06 03:32:36', NULL),
(254, 'CSC Ridiyamaliyadda', '2019-08-06 03:33:19', NULL),
(256, 'EE Monaragala', '2019-08-06 03:34:50', NULL),
(257, 'EE Diyathalawa', '2019-08-06 03:35:14', NULL),
(258, 'EE Badulla', '2019-08-06 03:35:37', NULL),
(259, 'Area Maintenance Unit Monaragala', '2019-08-06 03:36:35', NULL),
(260, 'Area Maintenance Unit Badulla', '2019-08-06 03:37:04', NULL),
(261, 'Area Maintenance Unit Diyathalawa', '2019-08-06 03:37:34', NULL),
(262, 'Commercel (Uva)', '2019-08-06 03:38:02', NULL),
(263, 'Energy Management (Uva)', '2019-08-06 03:38:25', NULL),
(264, 'Distribution & Maintenance (Uva)', '2019-08-06 03:38:48', NULL),
(265, 'Construction (Uva)', '2019-08-06 03:39:06', NULL),
(266, 'Kelanitissa Combin Power Station', '2019-08-07 05:31:52', '2019-08-07 06:59:44'),
(267, 'Barge Mount', '2019-08-07 05:32:23', NULL),
(268, 'Area Maintenance Unit Dehiwala', '2019-08-07 16:43:16', NULL),
(269, 'EE Dehiwala', '2019-08-07 16:44:54', NULL),
(270, 'Meter Lab (R 4)', '2019-08-07 16:45:14', NULL),
(271, 'Energy Management (R 4)', '2019-08-07 16:46:23', NULL),
(272, 'Colombo South Zone', '2019-08-07 16:51:06', NULL),
(273, 'Colombo North Zone', '2019-08-07 16:51:27', NULL),
(274, 'Colombo West Zone', '2019-08-07 16:51:47', NULL),
(275, 'Anuradhapura Zone', '2019-08-07 16:52:06', NULL),
(276, 'Kandy Zone', '2019-08-07 16:52:22', NULL),
(277, 'Galle Zone', '2019-08-07 16:52:35', NULL),
(278, 'CSC Chavakachcheri', '2019-08-07 16:58:30', NULL),
(279, 'CSC Chunnakam', '2019-08-07 16:58:51', NULL),
(280, 'CSC Point Pedro', '2019-08-07 16:59:50', NULL),
(281, 'CSC Vaddukoddai', '2019-08-07 17:00:19', NULL),
(282, 'CSC Velanai', '2019-08-07 17:00:49', NULL),
(283, 'CSC Jaffna (Suburb)', '2019-08-07 17:01:28', NULL),
(284, 'CSC Jaffna (City)', '2019-08-07 17:01:51', NULL),
(285, 'EE Jaffna', '2019-08-07 17:03:27', NULL),
(286, 'Area Maintenance Unit Jaffna', '2019-08-07 17:03:42', NULL),
(287, 'Commercel (North)', '2019-08-07 17:03:59', NULL),
(288, 'Energy Management (Jaffna)', '2019-08-07 17:04:13', NULL),
(289, 'Construction (North)', '2019-08-07 17:04:38', NULL),
(290, 'Distribution & Maintenance (North)', '2019-08-07 17:04:58', NULL),
(291, 'CSC Mankulam', '2019-08-07 17:05:50', NULL),
(292, 'CSC Mullaithivu', '2019-08-07 17:06:16', NULL),
(293, 'CSC kilinochchi', '2019-08-07 17:09:13', NULL),
(294, 'EE kilinochchi', '2019-08-07 17:09:31', NULL),
(295, 'Area Maintenance Unit kilinochchi', '2019-08-07 17:10:15', NULL),
(296, 'CSC Madhu', '2019-08-07 17:13:44', NULL),
(297, 'CSC Mannar', '2019-08-07 17:14:07', NULL),
(298, 'CSC Vavuniya', '2019-08-07 17:14:38', NULL),
(299, 'EE Vavuniya', '2019-08-07 17:15:03', NULL),
(300, 'Area Maintenance Unit Vavuniya', '2019-08-07 17:15:18', NULL),
(301, 'Planning & Development (Uva)', '2019-08-07 17:17:58', NULL),
(302, 'Planning & Development (North)', '2019-08-07 17:18:18', NULL),
(303, 'Planning & Development (Estern)', '2019-08-07 17:19:10', NULL),
(304, 'Planning & Development (Wps 1)', '2019-08-07 17:19:30', NULL),
(305, 'Planning & Development (Wps 2)', '2019-08-07 17:20:17', NULL),
(306, 'Planning & Development (south)', '2019-08-07 17:20:51', NULL),
(307, 'Planning & Development (Centerl)', '2019-08-07 17:21:18', NULL),
(308, 'Planning & Development (R 3)', '2019-08-07 17:21:37', NULL),
(309, 'Udawalawa Power Station', '2019-08-21 09:15:45', NULL),
(310, 'Iginiyagala Power Station', '2019-08-21 09:17:02', NULL),
(311, 'Commercel (Centerl)', '2019-08-21 15:45:27', NULL),
(312, 'Energy Management (Central)', '2019-08-21 15:46:29', NULL),
(313, 'Construction (Central)', '2019-08-21 15:46:50', NULL),
(314, 'Distribution & Maintenance (Central)', '2019-08-21 15:47:06', NULL),
(315, 'Planning & Development Unit (Central)', '2019-08-21 15:48:19', NULL),
(316, 'Area Maintenance Unit Dambulla', '2019-08-21 15:49:22', NULL),
(317, 'EE Dambulla', '2019-08-21 15:49:38', NULL),
(318, 'CSC Dambulla', '2019-08-21 15:49:55', NULL),
(319, 'CSC Naula', '2019-08-21 15:50:29', NULL),
(320, 'CSC Pallepola', '2019-08-21 15:51:01', NULL),
(321, 'EE Galagedara', '2019-08-21 15:51:58', NULL),
(322, 'Area Maintenance Unit Galagedara', '2019-08-21 15:52:21', NULL),
(323, 'CSC Galagedara', '2019-08-21 15:52:47', NULL),
(324, 'CSC Hatharaliyadda', '2019-08-21 15:53:18', NULL),
(325, 'CSC Nugewela', '2019-08-21 15:53:46', NULL),
(326, 'CSC Pujapitiya', '2019-08-21 15:54:19', NULL),
(327, 'Area Maintenance Unit Ginigathhena', '2019-08-21 15:54:53', NULL),
(328, 'EE Ginigathhena', '2019-08-21 15:55:28', NULL),
(329, 'Area Maintenance Unitr Ginigathhena', '2019-08-21 15:55:48', NULL),
(330, 'CSC Ginigathhena', '2019-08-21 15:56:00', NULL),
(331, 'CSC Maskeliya', '2019-08-21 15:56:24', NULL),
(332, 'CSC Hatton', '2019-08-21 15:56:42', NULL),
(333, 'CSC Norton Bridge', '2019-08-21 15:57:10', NULL),
(334, 'EE Kandy City', '2019-08-21 15:57:39', NULL),
(335, 'Area Maintenance Unit Kandy City', '2019-08-21 15:57:53', NULL),
(336, 'CSC Kandy City', '2019-08-21 15:58:04', NULL),
(337, 'CSC North', '2019-08-21 15:58:53', NULL),
(338, 'CSC Central', '2019-08-21 15:59:17', NULL),
(339, 'CSC South', '2019-08-21 15:59:41', NULL),
(340, 'CSC East.', '2019-08-21 16:00:07', NULL),
(341, 'CSC Operations', '2019-08-21 16:00:44', NULL),
(342, 'EE Katugastota', '2019-08-21 16:02:11', NULL),
(343, 'Area Maintenance Unit Katugastota', '2019-08-21 16:02:28', NULL),
(344, 'CSC Katugastota', '2019-08-21 16:02:41', NULL),
(345, 'CSC Wattegama', '2019-08-21 16:03:13', NULL),
(346, 'CSC Akurana', '2019-08-21 16:03:41', NULL),
(347, 'CSC Madulkele', '2019-08-21 16:04:05', NULL),
(348, 'EE Kegalle', '2019-08-21 16:05:36', NULL),
(349, 'Area Maintenance Unit Kegalle', '2019-08-21 16:06:05', NULL),
(350, 'CSC Kegalle', '2019-08-21 16:06:41', NULL),
(351, 'CSC Thulhiriya', '2019-08-21 16:07:08', NULL),
(352, 'CSC Rambukkana', '2019-08-21 16:07:31', NULL),
(353, 'CSC Moronthota', '2019-08-21 16:07:53', NULL),
(354, 'EE Kundasale', '2019-08-21 16:08:24', NULL),
(355, 'Area Maintenance Unit Kundasale', '2019-08-21 16:08:39', NULL),
(356, 'CSC Kundasale', '2019-08-21 16:08:54', NULL),
(357, 'CSC Dumbara', '2019-08-21 16:09:21', NULL),
(358, 'CSC Hasalaka', '2019-08-21 16:09:44', NULL),
(359, 'CSC Karalliyadda', '2019-08-21 16:10:15', NULL),
(360, 'CSC Ududumbara', '2019-08-21 16:10:51', NULL),
(361, 'Area Maintenance Unit Matale', '2019-08-21 16:11:28', NULL),
(362, 'EE Matale', '2019-08-21 16:11:42', NULL),
(363, 'CSC Matale', '2019-08-21 16:12:01', NULL),
(364, 'CSC Weragama', '2019-08-21 16:12:32', NULL),
(365, 'Area Maintenance Unit Mawanella', '2019-08-21 16:13:08', NULL),
(366, 'EE Mawanella', '2019-08-21 16:13:24', NULL),
(367, 'CSC Mawanella', '2019-08-21 16:13:38', NULL),
(368, 'CSC Dippitiya', '2019-08-21 16:14:02', NULL),
(369, 'CSC Hemmathagama', '2019-08-21 16:14:34', NULL),
(370, 'EE Nawalapitiya', '2019-08-21 16:15:08', NULL),
(371, 'Area Maintenance Unit Nawalapitiya', '2019-08-21 16:15:19', NULL),
(372, 'CSC Nawalapitiya', '2019-08-21 16:16:03', NULL),
(373, 'CSC Gampola', '2019-08-21 16:16:28', NULL),
(374, 'CSC Kurunduwatte', '2019-08-21 16:16:55', NULL),
(375, 'EE Nuwara Eliya', '2019-08-21 16:17:36', NULL),
(376, 'Area Maintenance Unit Nuwara Eliya', '2019-08-21 16:18:12', NULL),
(377, 'CSC Nuwara Eliya', '2019-08-21 16:18:42', NULL),
(378, 'CSC Rikillagaskada', '2019-08-21 16:19:27', NULL),
(379, 'CSC Thawalantenna', '2019-08-21 16:19:48', NULL),
(380, 'CSC Lindula', '2019-08-21 16:20:26', NULL),
(381, 'CSC Walapane', '2019-08-21 16:20:51', NULL),
(382, 'EE Peradeniya', '2019-08-21 16:21:14', NULL),
(383, 'Area Maintenance Unit Peradeniya', '2019-08-21 16:21:29', NULL),
(384, 'CSC Peradeniya', '2019-08-21 16:21:39', NULL),
(385, 'CSC Ampitiya', '2019-08-21 16:22:11', NULL),
(386, 'CSC Yatinuwara', '2019-08-21 16:22:42', NULL),
(387, 'CSC Eriyagama', '2019-08-21 16:23:09', NULL),
(388, 'AC List', '2019-09-02 03:29:10', NULL),
(389, 'Power Plant', '2019-09-02 03:29:28', NULL),
(390, 'Aniyakanda Garaj', '2019-09-02 03:30:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` int(11) NOT NULL,
  `placename` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `p_id` int(10) NOT NULL,
  `d_id` int(10) NOT NULL,
  `div_count` int(10) DEFAULT NULL,
  `s_count` int(10) DEFAULT NULL,
  `t_count` int(10) DEFAULT NULL,
  `z_a_count` int(100) NOT NULL DEFAULT '0',
  `div_a_count` int(100) NOT NULL DEFAULT '0',
  `s_a_count` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `placename`, `created_at`, `updated_at`, `p_id`, `d_id`, `div_count`, `s_count`, `t_count`, `z_a_count`, `div_a_count`, `s_a_count`) VALUES
(492, 'RA / National Hospital', '2020-04-03 00:11:19', '2020-04-08 01:33:48', 399, 402, 0, 0, NULL, 0, 0, 0),
(493, 'RA / Teaching Hospital', '2020-04-03 00:12:13', '2020-04-08 01:34:08', 399, 402, 1, 2, 1, 0, 1, 1),
(494, 'RA / Provincial General Hospital', '2020-04-03 00:12:54', '2020-04-08 01:34:27', 399, 402, NULL, 0, NULL, 0, 0, 0),
(495, 'RA / District General Hospital', '2020-04-03 00:14:05', '2020-04-08 01:34:47', 399, 402, 1, 2, 3, 0, 2, 2),
(496, 'RA / Base Hospital Type A', '2020-04-03 00:15:12', '2020-04-08 01:35:17', 399, 402, 1, 0, NULL, 0, 0, 0),
(497, 'RA / Base Hospital Type B', '2020-04-03 00:16:48', '2020-04-08 01:35:57', 399, 402, 4, 0, NULL, 0, 0, 0),
(498, 'RA / Divisiona Hodspital Type A', '2020-04-03 00:20:06', '2020-04-08 01:36:18', 399, 402, 8, 0, NULL, 0, 0, 0),
(499, 'RA / Divisonal Hospital Type B', '2020-04-03 00:22:48', '2020-04-08 01:36:49', 399, 402, NULL, 0, NULL, 0, 0, 0),
(500, 'RA / Divisional Hospital  Type  C', '2020-04-03 00:23:40', '2020-04-08 01:37:09', 399, 402, NULL, 0, NULL, 0, 0, 0),
(501, 'RA / Primary Medical Care Units', '2020-04-03 00:24:42', '2020-04-08 01:37:27', 399, 402, NULL, 0, NULL, 0, 0, 0),
(502, 'National Hospital of Sri Lanka', '2020-04-08 01:09:20', NULL, 399, 412, NULL, 0, NULL, 0, 0, 0),
(503, 'KE / District General Hospital', '2020-04-08 01:11:43', '2020-04-08 01:38:28', 399, 412, 1, 0, NULL, 0, 0, 0),
(504, 'KE / Base Hospital Type B', '2020-04-08 01:13:46', '2020-04-08 01:38:46', 399, 412, 3, 0, NULL, 0, 0, 0),
(505, 'KE / Divisional Hospital Type A', '2020-04-08 01:15:59', '2020-04-08 01:39:09', 399, 412, 6, 0, NULL, 0, 0, 0),
(506, 'AM / District General Hospital', '2020-04-08 01:32:54', NULL, 394, 399, NULL, 0, NULL, 0, 0, 0),
(507, 'AM / Base Hospitals - Type A', '2020-04-08 01:40:03', NULL, 394, 399, 2, 0, NULL, 0, 0, 0),
(508, 'AM / Base Hospitals - Type B', '2020-04-08 01:40:29', NULL, 394, 399, 3, 0, NULL, 0, 0, 0),
(509, 'AM / Divisional Hospitals - Type A', '2020-04-08 01:40:55', NULL, 394, 399, NULL, 0, NULL, 0, 0, 0),
(510, 'AM / Divisional Hospitals - Type B', '2020-04-08 01:41:14', NULL, 394, 399, NULL, 0, NULL, 0, 0, 0),
(511, 'AM / Divisional Hospitals - Type C', '2020-04-08 01:41:32', NULL, 394, 399, NULL, 0, NULL, 0, 0, 0),
(512, 'AM / Primary Medical Care Units', '2020-04-08 01:41:54', NULL, 394, 399, NULL, 0, NULL, 0, 0, 0),
(513, 'TR / District General Hospital', '2020-04-08 02:04:17', NULL, 394, 416, 1, 0, NULL, 0, 0, 0),
(514, 'TR / Base Hospital Type A', '2020-04-08 02:04:54', NULL, 394, 416, 1, 0, NULL, 0, 0, 0),
(515, 'TR / Base Hospital Type B', '2020-04-08 02:05:38', NULL, 394, 416, 3, 0, NULL, 0, 0, 0),
(516, 'BA / Teaching Hospital', '2020-04-08 02:10:45', NULL, 394, 417, 1, 0, NULL, 0, 0, 0),
(517, 'BA / Base Hospital Type A', '2020-04-08 02:11:29', NULL, 394, 417, 4, 0, NULL, 0, 0, 0),
(518, 'BA / Base Hospital Type B', '2020-04-08 02:12:08', NULL, 394, 417, 2, 0, NULL, 0, 0, 0),
(519, 'BA / Divisional Hospital Type A', '2020-04-08 02:12:53', NULL, 394, 417, 2, 0, NULL, 0, 0, 0),
(520, 'KA / Teaching Hospital', '2020-04-08 02:21:27', NULL, 395, 400, 2, 0, NULL, 0, 0, 0),
(521, 'KA / District General Hospital', '2020-04-08 02:22:29', NULL, 395, 400, 1, 0, NULL, 0, 0, 0),
(522, 'KA / Base Hospital Type B', '2020-04-08 02:23:03', NULL, 395, 400, 2, 0, NULL, 0, 0, 0),
(523, 'KA / Divisional Hospital Type A', '2020-04-08 02:23:42', NULL, 395, 400, 16, 0, NULL, 0, 0, 0),
(524, 'MA / District General Hospital', '2020-04-08 02:39:27', NULL, 395, 414, 1, 0, NULL, 0, 0, 0),
(525, 'MA / Base Hospital Type A', '2020-04-08 02:40:05', NULL, 395, 414, 1, 0, NULL, 0, 0, 0),
(526, 'NU / District General Hospital', '2020-04-08 02:42:23', NULL, 395, 415, 1, 0, NULL, 0, 0, 0),
(527, 'NU / Base Hospital Type B', '2020-04-08 02:42:57', NULL, 395, 415, 1, 0, NULL, 0, 0, 0),
(528, 'NU / Divisional Hospital Type A', '2020-04-08 02:43:27', NULL, 395, 415, 2, 0, NULL, 0, 0, 0),
(529, 'AN / Teaching Hospital', '2020-04-08 02:46:50', NULL, 396, 405, 1, 0, NULL, 0, 0, 0),
(530, 'AN / Base Hospital Type A', '2020-04-08 02:47:33', NULL, 396, 405, 1, 0, NULL, 0, 0, 0),
(531, 'AN / Base Hospital Type B', '2020-04-08 02:48:03', NULL, 396, 405, 2, 0, NULL, 0, 0, 0),
(532, 'AN / Divisional Hospital Type A', '2020-04-08 02:48:35', NULL, 396, 405, 4, 0, NULL, 0, 0, 0),
(533, 'AN / Divisional Hospital Type B', '2020-04-08 02:49:14', NULL, 396, 405, 11, 0, NULL, 0, 0, 0),
(534, 'PO / District General Hospital', '2020-04-08 03:01:30', NULL, 396, 406, 1, 0, NULL, 0, 0, 0),
(535, 'PO / Base Hospital Type A', '2020-04-08 03:01:56', NULL, 396, 406, 1, 0, NULL, 0, 0, 0),
(536, 'PO / Base Hospital Type B', '2020-04-08 03:02:19', NULL, 396, 406, 1, 0, NULL, 0, 0, 0),
(537, 'PO / Divisional Hospital Type A', '2020-04-08 03:02:50', NULL, 396, 406, 1, 0, NULL, 0, 0, 0),
(538, 'JA / Teaching Hospital', '2020-04-08 03:05:51', NULL, 397, 418, 1, 0, NULL, 0, 0, 0),
(539, 'JA / Base Hospital Type A', '2020-04-08 03:06:15', NULL, 397, 418, 2, 0, NULL, 0, 0, 0),
(540, 'JA / Base Hospital Type B', '2020-04-08 03:06:39', NULL, 397, 418, 2, 0, NULL, 0, 0, 0),
(541, 'KI / District General Hospital', '2020-04-08 03:10:48', NULL, 397, 419, 1, 0, NULL, 0, 0, 0),
(542, 'KI / Base Hospital Type B', '2020-04-08 03:11:21', NULL, 397, 419, 2, 0, NULL, 0, 0, 0),
(543, 'MU / District General Hospital', '2020-04-08 03:13:43', NULL, 397, 420, 1, 0, NULL, 0, 0, 0),
(544, 'MU / Base Hospital Type B', '2020-04-08 03:14:13', NULL, 397, 420, 1, 0, NULL, 0, 0, 0),
(545, 'MU / Divisional Hospital Type A', '2020-04-08 03:14:39', NULL, 397, 420, 4, 0, NULL, 0, 0, 0),
(546, 'VA / District General Hospital', '2020-04-08 03:19:15', NULL, 397, 421, 1, 0, NULL, 0, 0, 0),
(547, 'VA / Base Hospital Type B', '2020-04-08 03:19:39', NULL, 397, 421, 1, 0, NULL, 0, 0, 0),
(548, 'MAN / District General Hospital', '2020-04-08 03:21:51', NULL, 397, 422, 1, 0, NULL, 0, 0, 0),
(549, 'KG / Provincial General Hospital', '2020-04-08 03:26:18', NULL, 398, 403, 1, 0, NULL, 0, 0, 0),
(550, 'KG / Base Hospital Type B', '2020-04-08 03:26:52', NULL, 398, 403, 3, 0, NULL, 0, 0, 0),
(551, 'KG / Divisional Hospital Type A', '2020-04-08 03:27:23', NULL, 398, 403, 9, 0, NULL, 0, 0, 0),
(552, 'PX / Teaching Hospital', '2020-04-08 03:37:23', NULL, 398, 404, 1, 0, NULL, 0, 0, 0),
(553, 'PX / District General Hospital', '2020-04-08 03:37:49', NULL, 398, 404, 1, 0, NULL, 0, 0, 0),
(554, 'PX / Base Hospital Type A', '2020-04-08 03:38:18', NULL, 398, 404, 1, 0, NULL, 0, 0, 0),
(555, 'PX / Divisional Hospital Type A', '2020-04-08 03:38:49', NULL, 398, 404, 1, 0, NULL, 0, 0, 0),
(556, 'PX / Base Hospital Type B', '2020-04-08 03:42:32', NULL, 398, 404, 2, 0, NULL, 0, 0, 0),
(557, 'GL / Teaching Hospital', '2020-04-08 03:46:46', NULL, 400, 407, 2, 0, NULL, 0, 0, 0),
(558, 'GL / Base Hospital Type A', '2020-04-08 03:47:23', NULL, 400, 407, 2, 0, NULL, 0, 0, 0),
(559, 'GL / Base Hospital Type B', '2020-04-08 03:47:55', NULL, 400, 407, 1, 0, NULL, 0, 0, 0),
(560, 'GL / Divisional Hospital Type A', '2020-04-08 03:48:26', NULL, 400, 407, 2, 0, NULL, 0, 0, 0),
(561, 'MH / District General Hospital', '2020-04-08 03:55:34', NULL, 400, 408, 1, 0, NULL, 0, 0, 0),
(562, 'MH / Base Hospital Type A', '2020-04-08 03:56:21', NULL, 400, 408, 2, 0, NULL, 0, 0, 0),
(563, 'MH / Base Hospital Type B', '2020-04-08 03:56:52', NULL, 400, 408, 1, 0, NULL, 0, 0, 0),
(564, 'MH /Divisional Hospital Type A', '2020-04-08 03:57:23', NULL, 400, 408, 2, 0, NULL, 0, 0, 0),
(565, 'HB / District General Hospital', '2020-04-08 04:01:32', NULL, 400, 409, 1, 0, NULL, 0, 0, 0),
(566, 'HB / Base Hospital Type B', '2020-04-08 04:02:09', NULL, 400, 409, 2, 0, NULL, 0, 0, 0),
(567, 'BD / Provincial General Hospital', '2020-04-08 04:04:48', NULL, 401, 410, 1, 0, NULL, 0, 0, 0),
(568, 'BD / Base Hospital Type A', '2020-04-08 04:05:21', NULL, 401, 410, 2, 0, NULL, 0, 0, 0),
(569, 'BD / Divisional Hospital Type A', '2020-04-08 04:05:46', NULL, 401, 410, 2, 0, NULL, 0, 0, 0),
(570, 'BD / Base Hospital Type B', '2020-04-08 04:08:20', NULL, 401, 410, 1, 0, NULL, 0, 0, 0),
(571, 'MJ / District General Hospital', '2020-04-08 04:11:13', NULL, 401, 411, 1, 0, NULL, 0, 0, 0),
(572, 'MJ / Base Hospital Type B', '2020-04-08 04:11:47', NULL, 401, 411, 3, 0, NULL, 0, 0, 0),
(573, 'MJ / Divisional Hospital Type A', '2020-04-08 04:12:20', NULL, 401, 411, 1, 0, NULL, 0, 0, 0),
(574, 'CO / Teaching Hospital', '2020-04-08 05:15:37', NULL, 402, 398, 10, 0, NULL, 0, 0, 0),
(575, 'CO / Base Hospital Type A', '2020-04-08 05:17:32', NULL, 402, 398, 3, 0, NULL, 0, 0, 0),
(576, 'CO / Divisional Hospital Type A', '2020-04-08 05:32:43', NULL, 402, 398, 1, 0, NULL, 0, 0, 0),
(577, 'CO / National Hospital of Sri Lanka', '2020-04-08 05:40:44', NULL, 402, 398, 1, 0, NULL, 0, 0, 0),
(578, 'CO / Base Hospital Type B', '2020-04-08 05:43:38', NULL, 402, 398, 1, 0, NULL, 0, 0, 0),
(579, 'KT / District General Hospital', '2020-04-08 05:45:49', NULL, 402, 401, 1, 0, NULL, 0, 0, 0),
(580, 'KT / Base Hospital Type A', '2020-04-08 05:46:24', NULL, 402, 401, 3, 0, NULL, 0, 0, 0),
(581, 'KT / Base Hospital Type B', '2020-04-08 05:46:55', NULL, 402, 401, 1, 0, NULL, 0, 0, 0),
(582, 'KT / Divisional Hospital Type A', '2020-04-08 05:47:26', NULL, 402, 401, 2, 0, NULL, 0, 0, 0),
(583, 'GQ / District General Hospital', '2020-04-08 05:53:12', NULL, 402, 413, 2, 0, NULL, 0, 0, 0),
(584, 'GQ / Teaching Hospital', '2020-04-08 05:54:10', NULL, 402, 413, 1, 0, NULL, 0, 0, 0),
(585, 'GQ / Base Hospital Type A', '2020-04-08 05:55:00', NULL, 402, 413, 1, 0, NULL, 0, 0, 0),
(586, 'GQ / Base Hospital Type B', '2020-04-08 05:55:24', NULL, 402, 413, 3, 0, NULL, 0, 0, 0),
(587, 'GQ / Divisional Hospital Type A', '2020-04-08 05:55:54', NULL, 402, 413, 5, 0, NULL, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `covid_assessd_patients`
--
ALTER TABLE `covid_assessd_patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covid_decession_factors`
--
ALTER TABLE `covid_decession_factors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covid_questions`
--
ALTER TABLE `covid_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depos`
--
ALTER TABLE `depos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designation` (`designation`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `placename` (`placename`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `placename` (`placename`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_members`
--
ALTER TABLE `group_members`
  ADD PRIMARY KEY (`group_id`,`member_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `message_templates`
--
ALTER TABLE `message_templates`
  ADD PRIMARY KEY (`template_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `placename` (`placename`);

--
-- Indexes for table `register_pending_users`
--
ALTER TABLE `register_pending_users`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_admins`
--
ALTER TABLE `role_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `placename` (`placename`);

--
-- Indexes for table `sentmesseges`
--
ALTER TABLE `sentmesseges`
  ADD PRIMARY KEY (`member_id`,`msg_id`);

--
-- Indexes for table `sent_group_messeges`
--
ALTER TABLE `sent_group_messeges`
  ADD PRIMARY KEY (`group_id`,`msg_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `placename` (`subname`);

--
-- Indexes for table `training_collages`
--
ALTER TABLE `training_collages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `placename` (`placename`);

--
-- Indexes for table `transfer_cycle`
--
ALTER TABLE `transfer_cycle`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `transfer_cycles_info`
--
ALTER TABLE `transfer_cycles_info`
  ADD PRIMARY KEY (`ci_id`);

--
-- Indexes for table `transfer_request_list`
--
ALTER TABLE `transfer_request_list`
  ADD PRIMARY KEY (`t_ref_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `reg_id` (`reg_id`,`ps_number`,`emp_id`);

--
-- Indexes for table `workplaces`
--
ALTER TABLE `workplaces`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `placename` (`placename`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `placename` (`placename`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `covid_assessd_patients`
--
ALTER TABLE `covid_assessd_patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=373;

--
-- AUTO_INCREMENT for table `covid_decession_factors`
--
ALTER TABLE `covid_decession_factors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `covid_questions`
--
ALTER TABLE `covid_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `depos`
--
ALTER TABLE `depos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1557;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=423;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=879;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1035;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role_admins`
--
ALTER TABLE `role_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1294;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `training_collages`
--
ALTER TABLE `training_collages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfer_cycle`
--
ALTER TABLE `transfer_cycle`
  MODIFY `c_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `transfer_cycles_info`
--
ALTER TABLE `transfer_cycles_info`
  MODIFY `ci_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `transfer_request_list`
--
ALTER TABLE `transfer_request_list`
  MODIFY `t_ref_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2725;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1101;

--
-- AUTO_INCREMENT for table `workplaces`
--
ALTER TABLE `workplaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=588;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
