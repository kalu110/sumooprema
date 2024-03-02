-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2024 at 01:16 PM
-- Server version: 10.6.17-MariaDB-log
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sumoopre_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `column` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `column`, `created_at`, `updated_at`) VALUES
(1, 'Ostalo', '', NULL, NULL),
(5, 'Motorna Testera', ',Snaga,Tezina', '2024-02-27 12:21:51', '2024-02-27 12:21:51'),
(7, 'Motorna Kosačica', ',Snaga,Tezina,Sirina Kosnje', '2024-02-27 12:26:15', '2024-02-27 12:26:15'),
(11, 'Električna Motorna Testera', ',Snaga,Tezina,Elektricna', '2024-02-27 14:20:35', '2024-02-27 14:20:35'),
(12, 'Električna Kosačica', ',Tezina,Elektricna,Sirina Kosnje', '2024-02-27 14:37:25', '2024-02-27 14:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fish`
--

CREATE TABLE `fish` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `kol` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fish`
--

INSERT INTO `fish` (`id`, `name`, `kol`, `created_at`, `updated_at`) VALUES
(1, 'Pastrmka', '450', '2024-02-06 09:34:09', '2024-02-06 09:34:45'),
(2, 'Saran', '700', '2024-02-06 09:34:15', '2024-02-06 09:34:15'),
(3, 'Tolstolobik', '200', '2024-02-06 09:34:22', '2024-02-06 09:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `name` text NOT NULL,
  `src` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `id_product`, `name`, `src`, `created_at`, `updated_at`) VALUES
(1, 1, ',blog6.jpg', 'asdasd', '2024-02-04 18:31:37', '2024-02-04 18:31:37'),
(2, 1, ',intel.jpg', 'asdasd', '2024-02-05 21:01:33', '2024-02-05 21:01:33'),
(3, 2, ',AMDINTEL.png', 'asdasd', '2024-02-05 21:01:49', '2024-02-05 21:01:49'),
(4, 3, ',glavnaSlikaProcesor.gif', 'asdasd', '2024-02-05 21:03:16', '2024-02-05 21:03:16'),
(5, 3, ',asd.jfif', 'asdasd', '2024-02-05 21:05:18', '2024-02-05 21:05:18'),
(6, 3, ',wre.jfif', 'asdasd', '2024-02-05 21:11:41', '2024-02-05 21:11:41'),
(7, 3, ',wre.jpg', 'asdasd', '2024-02-05 21:18:49', '2024-02-05 21:18:49'),
(8, 4, ',are.jfif', 'asdasd', '2024-02-05 21:19:09', '2024-02-05 21:19:09'),
(9, 4, ',are.jfif', 'asdasd', '2024-02-05 21:19:18', '2024-02-05 21:19:18'),
(10, 5, ',der.jfif', 'asdasd', '2024-02-05 21:23:34', '2024-02-05 21:23:34'),
(11, 6, ',982990.jpg', 'asdasd', '2024-02-06 09:22:10', '2024-02-06 09:22:10'),
(12, 7, ',Screenshot 2023-08-30 211724.png', 'asdasd', '2024-02-06 09:23:31', '2024-02-06 09:23:31'),
(13, 8, ',are.jfif,der.jfif,asd.jfif', 'asdasd', '2024-02-06 13:40:44', '2024-02-06 13:40:44'),
(14, 9, ',RM248.jfif', 'asdasd', '2024-02-27 12:40:23', '2024-02-27 12:40:23'),
(15, 2, ',ms-170.jpg', 'asdasd', '2024-02-27 13:19:38', '2024-02-27 13:19:38'),
(16, 3, ',ms-180.jpg', 'asdasd', '2024-02-27 13:22:52', '2024-02-27 13:22:52'),
(17, 4, ',ms-230.jpg', 'asdasd', '2024-02-27 13:24:56', '2024-02-27 13:24:56'),
(18, 5, ',ms-210.jpg', 'asdasd', '2024-02-27 13:26:34', '2024-02-27 13:26:34'),
(19, 6, ',ms-250.jpg', 'asdasd', '2024-02-27 13:27:42', '2024-02-27 13:27:42'),
(20, 7, ',ms-194-t.jpg', 'asdasd', '2024-02-27 13:30:21', '2024-02-27 13:30:21'),
(21, 8, ',ms-260.png', 'asdasd', '2024-02-27 13:33:30', '2024-02-27 13:33:30'),
(22, 9, ',ms-271.jpg', 'asdasd', '2024-02-27 13:34:16', '2024-02-27 13:34:16'),
(23, 10, ',ms-291.jpg', 'asdasd', '2024-02-27 13:35:52', '2024-02-27 13:35:52'),
(24, 11, ',ms-310.jpg', 'asdasd', '2024-02-27 13:36:55', '2024-02-27 13:36:55'),
(25, 12, ',ms-382.jpg', 'asdasd', '2024-02-27 13:38:16', '2024-02-27 13:38:16'),
(26, 13, ',ms-361.jpg', 'asdasd', '2024-02-27 13:39:23', '2024-02-27 13:39:23'),
(27, 14, ',ms-362-c-m.jpg', 'asdasd', '2024-02-27 13:40:25', '2024-02-27 13:40:25'),
(28, 15, ',ms-651.jpg', 'asdasd', '2024-02-27 13:41:38', '2024-02-27 13:41:38'),
(29, 16, ',ms-462.jpg', 'asdasd', '2024-02-27 13:43:29', '2024-02-27 13:43:29'),
(30, 17, ',ms-661.jpg', 'asdasd', '2024-02-27 13:44:31', '2024-02-27 13:44:31'),
(31, 18, ',ms-500i.jpg', 'asdasd', '2024-02-27 13:45:15', '2024-02-27 13:45:15'),
(32, 19, ',ms-462-c-m-r.jpg', 'asdasd', '2024-02-27 13:48:49', '2024-02-27 13:48:49'),
(33, 20, ',ms-881.jpg', 'asdasd', '2024-02-27 13:49:38', '2024-02-27 13:49:38'),
(34, 20, ',rm-248.jpg', 'asdasd', '2024-02-27 14:02:13', '2024-02-27 14:02:13'),
(35, 21, ',rm-248-t.jpg', 'asdasd', '2024-02-27 14:03:26', '2024-02-27 14:03:26'),
(36, 22, ',rm-448-tx.jpg', 'asdasd', '2024-02-27 14:06:34', '2024-02-27 14:06:34'),
(37, 23, ',rm-253-t.jpg', 'asdasd', '2024-02-27 14:08:15', '2024-02-27 14:08:15'),
(38, 24, ',rm-545-v.jpg', 'asdasd', '2024-02-27 14:09:07', '2024-02-27 14:09:07'),
(39, 25, ',rm-650-v.jpg', 'asdasd', '2024-02-27 14:09:49', '2024-02-27 14:09:49'),
(40, 26, ',mse-170.jpg', 'asdasd', '2024-02-27 14:22:42', '2024-02-27 14:22:42'),
(41, 26, ',mse-170.jpg', 'asdasd', '2024-02-27 14:25:55', '2024-02-27 14:25:55'),
(42, 26, ',mse-170.jpg', 'asdasd', '2024-02-27 14:26:06', '2024-02-27 14:26:06'),
(43, 26, ',mse-170.jpg', 'asdasd', '2024-02-27 14:27:57', '2024-02-27 14:27:57'),
(44, 27, ',mse-190-c-b.jpg', 'asdasd', '2024-02-27 14:29:33', '2024-02-27 14:29:33'),
(45, 28, ',mse-250.jpg', 'asdasd', '2024-02-27 14:30:10', '2024-02-27 14:30:10'),
(46, 29, ',rme-235.jpg', 'asdasd', '2024-02-27 14:38:11', '2024-02-27 14:38:11'),
(47, 30, ',rme-443.jpg', 'asdasd', '2024-02-27 14:38:54', '2024-02-27 14:38:54'),
(48, 30, ',rme-235.jpg', 'asdasd', '2024-02-27 14:40:04', '2024-02-27 14:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2023_06_03_152056_create_categories_table', 1),
(18, '2023_06_03_152638_create_products_table', 1),
(19, '2023_09_13_165004_create_images_table', 1),
(20, '2023_11_25_161529_reservations', 1),
(21, '2023_11_27_142032_fish_controller', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `brend` text NOT NULL,
  `images` text NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `zapremina0cm3` varchar(255) DEFAULT NULL,
  `snaga` varchar(255) DEFAULT NULL,
  `tezina` varchar(255) DEFAULT NULL,
  `napon` varchar(255) DEFAULT NULL,
  `aku0tehnologija` varchar(255) DEFAULT NULL,
  `Trajanje0baterije` varchar(25) DEFAULT NULL,
  `Elektricna` varchar(20) DEFAULT NULL,
  `rezna0dubina` varchar(255) DEFAULT NULL,
  `optimalna0povrsina0travnjaka` varchar(255) DEFAULT NULL,
  `sirina0kosnje` varchar(255) DEFAULT NULL,
  `visina0kosnje` varchar(255) DEFAULT NULL,
  `jacina0zvucnog0pritiska` varchar(255) DEFAULT NULL,
  `radni0pritisak` varchar(255) DEFAULT NULL,
  `maks0pritisak` varchar(255) DEFAULT NULL,
  `maks0temperatura0vode` varchar(255) DEFAULT NULL,
  `kolicina0usisanog0zraka` varchar(255) DEFAULT NULL,
  `duzina0usisnog0creva` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `brend`, `images`, `description`, `price`, `zapremina0cm3`, `snaga`, `tezina`, `napon`, `aku0tehnologija`, `Trajanje0baterije`, `Elektricna`, `rezna0dubina`, `optimalna0povrsina0travnjaka`, `sirina0kosnje`, `visina0kosnje`, `jacina0zvucnog0pritiska`, `radni0pritisak`, `maks0pritisak`, `maks0temperatura0vode`, `kolicina0usisanog0zraka`, `duzina0usisnog0creva`, `created_at`, `updated_at`) VALUES
(14, 'MS 170', 'Motorna Testera', 'Stihl', ',ms-170.jpg', 'Benzinska motorna testera MS 170 je osnovni model testere idealan za privatne korisnike za piljenje ogrevnog drveta. Može se koristiti za jednostavno i efikasno sečenje drveta u sopstvenom vrtu. Upravljanje benzinskom motornom testerom je olakšano sa kombinovanom polugom. Osnovne funkcije poput pokretanja i zaustavljanja mogu se lako izvesti jednom rukom, desna ruka uvijek ostaje na ručki.\r\n\r\nPraktična benzinska motorna testera za piljenje ogrevnog drveta\r\nJednostavan rad zahvaljujući kombinovanoj kontrolnoj ručici\r\nOsnovni model za privatne korisnike i obrtnike', 499.00, NULL, '1,2', '4,1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:19:38', '2024-02-27 13:19:38'),
(15, 'MS 180', 'Motorna Testera', 'Stihl', ',ms-180.jpg', 'Snažna i lagana benzinska motorna pila STIHL MS 180 impresionira kada su u pitanju zahtjevi privatnih korisnika, posebno kod piljenja drva za ogrev, kao i za rad u zanatskim radionicama. Zbog svoje male težine od 4,1 kg, ova motorna pila na benzin je okretna i olakšava duge intervale rada. Osim toga, dužina vodilice je 35 cm za piljenje debljih grana. Sa ovom benzinskom motornom testerom dobro ste opremljeni za sve poslove koji se moraju obaviti u bašti i na okućnici.', 589.00, NULL, '1,4', '4,1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:22:52', '2024-02-27 13:22:52'),
(16, 'MS 230', 'Motorna Testera', 'Stihl', ',ms-230.jpg', 'Motorna testera STIHL MS 230 je veoma dobar izbor za rezanje ogrevnog drveta. Kompaktan dizajn i visoka efikasnost sečenja omogućavaju vam da efikasno radite u sopstvenoj bašti ili šumi. Ova motorna testera za obradu drveta je takođe veoma popularna u zanatskim radionicama. \r\n\r\nZahvaljujući svom snažnom motoru od 2,0 kW (2,7 KS), benzinska motorna testera STIHL MS 230 je posebno pogodna za testerisanje drva za ogrev. Da biste radili što efikasnije, motorna testera je opremljena poklopcem rezervoara za gorivo koji se može otvoriti bez potrebe za dodatnim alatom. Da bi zaštitio vaše mišiće i zglobove, STIHL sistem protiv vibracija štiti mišiće i zglobove prilikom rada i rukovanja ovom motornom testerom. Ovo je robustan i moćan model motorne testere sa veoma dobrim omjerom snage i težine, Za privatne korisnike i obrtnike\r\n\r\nSnažna i robusna benzinska motorna testera za piljenje ogrevnog drveta\r\n\r\nDugi servisni intervali zahvaljujući dugotrajnom sistemu za filtriranje vazduha \r\n\r\nBočno zatezanje lanca', 950.00, NULL, '2,0', '4,6', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:24:56', '2024-02-27 13:24:56'),
(17, 'MS 210', 'Motorna Testera', 'Stihl', ',ms-210.jpg', 'Dobro za piljenje ogrevnog drveta. STIHL sistem protiv vibracija, bočno zatezanje lanca, prelazak na letnji/zimski režim za efikasan rad u svim uslovima, poklopac rezervoara za gorivo se otvara bez potrebe za dodatnim alatima, što pojednostavljuje punjenje goriva. 3/8\"-PM3 za dobru snagu rezanja.\r\n\r\nSTIHL MS 210 benzinska motorna testera je dobar izbor ako želite da piljete drva za ogrev ili zanate. Kompaktan dizajn čini STIHL MS 210 lakim za rukovanje i rad. STIHL MS 210 ima snagu od 1,6 kW (2,2 KS) i dobre performanse rezanja sa STIHL lancem 3/8\'\' PM3.\r\n\r\nUz mogućnost prebacivanja iz ljetnog u zimski režim, sa STIHL MS 210 možete raditi bez prekida, čak i pri niskim temperaturama i istovremeno visokoj vlažnosti. Osim toga, ova motorna pila ima zaključavanje magacina bez alata i zatezanje bočnog lanca.\r\nPoklopci rezervoara se otvaraju bez potrebe za dodatnim alatom, što pojednostavljuje punjenje gorivom i mazivom\r\n\r\nJednostavna operacija jednom rukom \r\n\r\nKompaktna benzinska motorna testera za pravljenje ogrevnog drveta\r\n\r\nZa privatne korisnike i obrtnike', 798.00, NULL, '1,6', '4,4', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:26:34', '2024-02-27 13:26:34'),
(18, 'MS 250', 'Motorna Testera', 'Stihl', ',ms-250.jpg', 'Robusna i moćna motorna pila sa vrlo dobrim omjerom snage i težine. STIHL antivibracioni sistem, zatvaranje rezervoara za gas. Idealno za izradu ogrevnog drveta i obradu drveta. Pogodan za sječu manjih stabala.\r\nSa novim dizajnom STIHL vodiča Light 04, 3/8\"P, 1,3 mm, 40 cm.', 1050.00, NULL, '2,3', '4,6', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:27:42', '2024-02-27 13:27:42'),
(19, 'MS 194 T', 'Motorna Testera', 'Stihl', ',ms-194-t.jpg', 'STIHL MS 194 T benzinska motorna pila je moćna profesionalna pila za njegu drveća i jednako je impresivna kada je u pitanju njega drveća kao i za uklanjanje mrtvog drveta ili rezanje debla i izdanaka. Stručnjaci za negu drveća mogu efikasno obavljati radne zadatke sa ovom benzinskom motornom testerom. Kompaktan dizajn STIHL motorne testere MS 194 T i njena mala težina omogućavaju vam da radite efikasno čak i u skučenim prostorima. \r\nili sečenje izdanaka i stabljika. Sa lancem pile 1/4\" PM3 za fino sečenje. Bolje performanse rezanja sa novim 2-MIX motorom. Snažni STIHL 2-MIX motor osigurava visoke performanse rezanja uz nisku potrošnju goriva. STIHL 1/4\" PM3 lanac pile omogućava fino sečenje i precizan rad.Sistem STIHL Ematic takođe pomaže da se vodilica i lanac ciljano snabdevaju uljem, što omogućava efikasan rad i uštedu ulja Praktična preklopna kuka se koristi za pričvršćivanje kabla za nošenje kada spuštanje motorne testere. \r\n\r\nJedna od mnogih prednosti ove benzinske motorne testere za negu drveća je STIHL sistem protiv vibracija, koji minimizira vibracije motora i priključka i na taj način štiti mišiće i zglobove tokom rada i rukovanja.\r\n\r\nUPOZORENJE: Ovu specijalnu motornu testeru treba da koriste samo profesionalci obučeni za negu drveća. Upotreba bez odgovarajuće obuke može dovesti do ozbiljnih povreda.', 1200.00, NULL, '1,4', '3,5', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:30:21', '2024-02-27 13:30:21'),
(20, 'MS 260', 'Motorna Testera', 'Stihl', ',ms-260.png', 'Pogodan za radove na prorjeđivanju, za sečenje malih sastojina i za obaranje srednjih sastojina. STIHL sistem protiv vibracija, zatezač bočnog lanca, dekompresijski ventil, STIHL ElastoStart i poklopac rezervoara za gas.', 1399.00, NULL, '2,6', '4,8', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:33:30', '2024-02-27 13:33:30'),
(21, 'MS 271', 'Motorna Testera', 'Stihl', ',ms-271.jpg', 'Za sečenje ogrevnog drveta. Sistem filtracije zraka sa predodvajanjem za duži vijek trajanja filtera, poklopac rezervoara za plin za sigurno i lako punjenje, brz pristup servisu zahvaljujući jednodijelnom poklopcu motora.', 1306.00, NULL, '2,6', '5,6', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:34:16', '2024-02-27 13:34:16'),
(22, 'MS 291', 'Motorna Testera', 'Stihl', ',ms-291.jpg', 'Snažna i robusna motorna pila za svestranu upotrebu, vrlo dobra za rezanje drva za ogrjev. Sistem za filtriranje vazduha sa prethodnim odvajanjem za duži životni vek filtera, poklopac rezervoara za gas za lako i sigurno punjenje, kao i lanac testere 3/8\"-RM3 za još bolje performanse rezanja. Brz pristup servisu zahvaljujući jednodelnom poklopcu motora.', 1432.00, NULL, '2,8', '5,6', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:35:52', '2024-02-27 13:35:52'),
(23, 'MS 310', 'Motorna Testera', 'Stihl', ',ms-310.jpg', 'Dobro za obaranje u srednje jakim sastojinama. STIHL sistem protiv vibracija, bočni zatezač lanca, poklopac rezervoara za gas. Dugi servisni intervali zahvaljujući dugotrajnom sistemu za filtriranje vazduha\r\nSa novim dizajnom STIHL vodilice Light 04, 3/8\", 1,6 mm, 45 cm.', 1379.00, NULL, '3,2', '5,9', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:36:55', '2024-02-27 13:36:55'),
(24, 'MS 382', 'Motorna Testera', 'Stihl', ',ms-382.jpg', 'Snažna benzinska motorna pila za rad u slabim i srednje jakim plantažama\r\nBočni zatezač lanca za lako i sigurno zatezanje lanca \r\nPoklopac rezervoara za gorivo bez alata za lako i sigurno punjenje.\r\nDužina vodilice 45 cm.', 1635.00, NULL, '3,9', '6,2', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:38:16', '2024-02-27 13:38:16'),
(25, 'MS 361', 'Motorna Testera', 'Stihl', ',ms-361.jpg', 'Dizajniran za dinamičko ubrzanje i visoke okretaje, s vrlo dobrim omjerom snage i težine. STIHL sistem protiv vibracija,\r\nzatezač bočnog lanca, dekompresijski ventil, STIHL Elastostart, kompenzator i poklopac rezervoara za gorivo. \r\nDužina vodilice 45 cm.', 1642.00, NULL, '3,5', '5,6', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:39:23', '2024-02-27 13:39:23'),
(26, 'MS 362 CM', 'Motorna Testera', 'Stihl', ',ms-362-c-m.jpg', 'Moderna i moćna pila od 3,5 kW sa 2-MIX motorom i M-Tronic sistemom. Elektronski kontrolisano doziranje goriva, koje se automatski prilagođava uslovima okoline. Na taj način motorna pila uvijek postiže optimalne performanse motora. Sistem filtriranja HD2. Do 20% manja potrošnja goriva i 50% manje emisije u poređenju sa dvotaktnim motorima bez 2-MIX tehnologije. Veoma efikasan za sve radove u srednje jakim zasadima.', 2200.00, NULL, '3,5', '5,6', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:40:25', '2024-02-27 13:40:25'),
(27, 'MS 651', 'Motorna Testera', 'Stihl', ',ms-651.jpg', 'Zapremina cm 3	91.1\r\nSnaga kW / KS	5.0 / 6.8\r\nTežina (kg)	7,4\r\nOdnos snage i mase kg/kW	1.5\r\nNivo zvučnog pritiska dB (A)	107\r\nNivo zvučne snage dB (A)	119\r\nNivo vibracije lijevo/desno m/s 2	6.9 / 5.6\r\nSTIHL lanac Oliomatic (korak)	3/8\"\r\nSTHIL lanac Oliomatic (tip)	Rapid Super (RS)', 2425.00, NULL, '5,0', '7,4', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:41:38', '2024-02-27 13:41:38'),
(28, 'MS 462', 'Motorna Testera', 'Stihl', ',ms-462.jpg', 'Zapremina cm 3	72.2\r\nSnaga kW / KS	4.4 / 6.0\r\nTežina (kg)	6.0\r\nOdnos snage i mase kg/kW	1,4\r\nNivo zvučnog pritiska dB (A)	108\r\nIzmjereni nivo zvučne snage dB (A)	119\r\nNivo vibracije lijevo/desno m/s 2	4.8 / 3.6\r\nSTIHL lanac Oilomatic (korak)	3/8\"\r\nSTIHL lanac Oilomatic (tip)	RS', 2450.00, NULL, '4,4', '6,0', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:43:29', '2024-02-27 13:43:29'),
(29, 'MS 661', 'Motorna Testera', 'Stihl', ',ms-661.jpg', 'Zapremina cm 3	91.1\r\nSnaga kW / KS	5.4 / 7.3\r\nTežina (kg)	7,4\r\nOdnos snage i mase kg/kW	1,4\r\nNivo zvučnog pritiska dB (A)	105\r\nNivo zvučne snage dB (A)	118\r\nNivo vibracije lijevo/desno m/s 2	6.9 / 5.6\r\nSTHIL lanac Oilomatic (korak)	3/8\"\r\nSTIHL lanac Oilomatic (tip)	Rapid Super (RS)', 2795.00, NULL, '5,4', '7,4', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:44:31', '2024-02-27 13:44:31'),
(30, 'MS 500i', 'Motorna Testera', 'Stihl', ',ms-500i.jpg', 'Prva motorna testera na svetu sa elektronskim ubrizgavanjem goriva je konačno stigla! Sa motornom testerom MS 500i, STIHL je započeo novu eru u razvoju električnih alata. Revolucionarna tehnologija oličena u konceptu STIHL Injection znači briljantno ubrzanje, veliku snagu pogonskog uređaja i proporcionalno smanjenu težinu uređaja. Lanac ove motorne testere može da ubrza od 0 do 100 km/h za samo 0,25 sekundi. Odnos snage i težine koji nudi ova pila je 1,24 kg/kW, što je čini jedinstvenom i izuzetnom na svjetskom tržištu. Pogonski uređaj sa kontrolisanom analizom pritiska i temperature u motoru garantuje optimalno doziranje goriva. Ova motorna testera garantuje optimalan start bez obzira na temperaturu motora ili okoline, kao i bez obzira na nadmorsku visinu. Savršeno izbalansiran uređaj posebno je razvijen za profesionalni rad u jakim plantažama. Idealan za rezanje i obradu tvrdog drveta zahvaljujući laganom dizajnu i odličnom ubrzanju. Optimizovane kandže, HD2 filter sa dobrim performansama filtera, matica koja ne staje na poklopac lančanika i poklopac filtera, visokoefikasna pumpa za ulje sa regulacijom zapremine, poklopac rezervoara za gorivo za sigurno i lako punjenje', 2998.00, NULL, '5', '6,2', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:45:15', '2024-02-27 13:45:15'),
(31, 'MS 462 C-M R', 'Motorna Testera', 'Stihl', ',ms-462-c-m-r.jpg', 'Za upotrebu u spašavanju i gašenju požara. Dodatna ručka za brzo i jednostavno podešavanje dubine rezanja, M-Tronic za optimalnu snagu motora, velika ručka za povlačenje kao i dekompresijski ventil za lako i sigurno pokretanje testere, specijalni lanac sa oklopom od tvrdog i otpornog metala. Sistem filtracije sa HD2 filterom za duži vijek trajanja filtera i bolju efikasnost filtracije. Velika ručka za paljenje kao i dekompresijski ventil za lako i sigurno pokretanje, specijalni lanac pile sa reznim zupcima sa oklopom od tvrdog i otpornog metala.\r\n\r\nZapremina cm 3	72.2\r\nSnaga kW / KS	4,4 / 6\r\nTežina (kg)	6.5\r\nOdnos snage i mase kg/kW	1.5\r\nNivo zvučnog pritiska dB (A)	108\r\nNivo zvučne snage dB (A)	119\r\nNivo vibracije lijevo/desno m/s 2	3.3 / 2.7\r\nSTHIL lanac Oilomatic (korak)	3/8\"\r\nCO2	697 g/kWh', 3683.00, NULL, '4,4', '6,5', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:48:49', '2024-02-27 13:48:49'),
(32, 'MS 881', 'Motorna Testera', 'Stihl', ',ms-881.jpg', 'Najjača serijski proizvedena motorna pila na svijetu! Zbog svojih visokih performansi, idealan je za profesionalnu sječu i obradu velikih stabala. STIHL 2-MIX motor za visoke performanse rezanja, veliku snagu i istovremeno efikasnu potrošnju goriva. Zahvaljujući funkciji stop dugmeta, pila se može odmah pokrenuti u bilo koje vrijeme, HD2 filter osigurava dug vijek trajanja filtera. Labava matica na poklopcu lančanika pojednostavljuje promenu lanca testere, preklopni poklopac rezervoara za gorivo za lako i brzo punjenje rezervoara.\r\n\r\nZapremina cm 3	121.6\r\nSnaga kW / KS	6,,4 / 8,7\r\nTežina (kg)	9,9\r\nOdnos snage i mase kg/kW	1.5\r\nNivo zvučnog pritiska dB (A)	106\r\nNivo zvučne snage dB (A)	118\r\nNivo vibracije lijevo/desno m/s 2	8.9 / 8.9\r\nSTHIL lanac Oilomatic (korak)	.404\"\r\nSTIHL lanac Oilomatic (tip)	Rapid Super (RS)', 4210.00, NULL, '6,4', '9,9', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 13:49:38', '2024-02-27 13:49:38'),
(33, 'RM 248', 'Motorna Kosačica', 'Stihl', ',rm-248.jpg', 'STIHL motorna kosilica RM 248 za košnju malih do srednje velikih travnatih površina. Ovaj praktični ulazni model kosilice posebno je okretan i jednostavan za korištenje zahvaljujući sklopivoj ručki. Jednostavno centralno podešavanje visine otkosa u 7 razina omogućava košnju trave u rasponu od 25 do 75 mm iznimno finog i preciznog reza. Velika zapremnina košare od 55 litara omogućava dugotrajan rad bez potrebe za brojnim pauzama za pražnjenje košare za travu.', 752.00, NULL, '2,1', '26', NULL, NULL, '', '', NULL, NULL, '46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 14:02:13', '2024-02-27 14:02:13'),
(34, 'RM 248 T', 'Motorna Kosačica', 'Stihl', ',rm-248-t.jpg', 'STIHL kosilica RM 248 T za košnju srednje velikih travnatih površina. Ovaj praktični ulazni model kosilice s jednom brzinom pogonskog uređaja posebno je okretan i jednostavan za korištenje bez puno napora. Sa sklopivom upravljačkom ručkom za lakše i udobnije manevriranja uređajem. Jednostavno centralno podešavanje visine otkosa u 7 razina omogućava košnju trave u rasponu od 25 do 75 mm iznimno finog i preciznog reza. Velika zapremnina košare od 55 litara omogućava dugotrajan rad bez potrebe za brojnim pauzama za pražnjenje košare za travu.', 916.00, NULL, '2,1', '28', NULL, NULL, '', '', NULL, NULL, '46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 14:03:26', '2024-02-27 14:03:26'),
(35, 'RM 448 TX', 'Motorna Kosačica', 'Stihl', ',rm-448-tx.jpg', 'STIHL RM 448 TX benzinska kosilica znatno olakšava uređenje i njegu travnjaka srednje veličine. Sa širinom košnje od 46 cm i centralnim podešavanjem visine košnje u šest nivoa od 25 do 75 mm visine, vaš je idealan partner kada je u pitanju košenje i njega travnjaka. Ovaj model impresionira promišljenim detaljima: posebno mekana obloga na upravljačkoj ručki (Super-Softgriff) omogućava udoban rad uređaja, a prostrana korpa za pokošenu travu od 55 litara produžava intervale košnje. Korpa je sklopiva, što znatno olakšava pražnjenje, a opremljena je i indikatorom punjenja. Kosilica RM 448 TX opremljena je snažnim i pouzdanim motorom i 1-brzinskim pogonom na točkove i savršena je kombinacija koja omogućava lako i udobno košenje. Dodavanjem seta za malčiranje (usitnjavanje strništa prilikom košenja), ova benzinska kosilica se može pretvoriti u višenamjensku kosilicu i ne morate prazniti korpu za travu, strnjište se tokom košenja izlijeva na travu i tako je \"hrani\" .', 1115.00, NULL, '2,1', '27', NULL, NULL, '', '', NULL, NULL, '46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 14:06:34', '2024-02-27 14:06:34'),
(36, 'RM 253 T', 'Motorna Kosačica', 'Stihl', ',rm-253-t.jpg', 'Kosilica STIHL RM 253 T je moćna i okretna kosilica, dizajnirana za košenje srednjih i velikih travnatih površina. Jednostavno centralno podešavanje visine košenja u 7 nivoa omogućava košenje trave u rasponu od 25 do 75 mm sa izuzetno finim i preciznim rezom. Zahvaljujući pogonu i košu za košnju zapremine 55 litara, ovaj uređaj omogućava duže radne intervale bez većeg zamora. Snažan motor garantuje uočljive i stabilne performanse.', 1395.00, NULL, '2,1', '29', NULL, NULL, '', '', NULL, NULL, '51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 14:08:15', '2024-02-27 14:08:15'),
(37, 'RM 545 V', 'Motorna Kosačica', 'Stihl', ',rm-545-v.jpg', 'Snažan motor opremljen sistemom za pokretanje ReadyStart, postavljen na lagano i robusno kućište od jakog i elastičnog polimera. Vario pogon omogućava postepeno ubrzanje, što štedi pogonski sistem kosilice i povećava udobnost tokom rada. Upravljačka ručka kosilice je podesiva po visini u tri nivoa. Centralno podešavanje visine košnje u 7 nivoa omogućava precizan rez. Odlične radne performanse kod košenja travnjaka do 1200 kvadratnih metara, uz mogućnost dodavanja seta za brušenje otkosa. Opremljen velikom korpom za travu kapaciteta 60 litara sa indikatorom punjenja.', 1755.00, NULL, '2,6', '29', NULL, NULL, '', '', NULL, NULL, '43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 14:09:07', '2024-02-27 14:09:07'),
(38, 'RM 650 V', 'Motorna Kosačica', 'Stihl', ',rm-650-v.jpg', 'Benzinsku kosilicu STIHL RM 650 odlikuju brojne pažljivo osmišljene karakteristike koje služe većoj udobnosti tokom rada, kao i operativnoj funkcionalnosti. Snažna benzinska kosilica sa širinom košenja od 48 cm za velike površine travnjaka. Multifunkcionalni nož za rezanje, sakupljanje otkosa i malčiranje (sjeckanje otkosa). Centralno podešavanje visine otkosa u 7 nivoa u rasponu od 25-85 mm. udoban mono upravljač sa izuzetno mekom ručkom i Vario pogonom za ugodan i efikasan rad. Sklopiva korpa za travu zapremine 70 l sa prikazom stanja napunjenosti.', 2155.00, NULL, '2,6', '46', NULL, NULL, '', '', NULL, NULL, '48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 14:09:49', '2024-02-27 14:09:49'),
(39, 'MSE 170', 'Električna Motorna Testera', 'Stihl', ',mse-170.jpg', 'Nazivni napon V	230\r\nSnaga KW	1.7\r\nTežina (kg)	4.2\r\nNivo zvučnog pritiska dB (A)	92\r\nNivo zvučne snage dB (A)	103\r\nNivo vibracije lijevo/desno m/s 2	2.9 / 3.4\r\nDužina kabla (m)	0.4\r\nSTHIL lanac Oilomatic (korak)	3/8\"P\r\nSTIHL lanac Oilomatic (tip)	Picco Micro Mini 3 (PMM3)', 645.00, NULL, '1,7', '4,2', NULL, NULL, NULL, 'Da', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 14:27:57', '2024-02-27 14:27:57'),
(40, 'MSE 190 CB', 'Električna Motorna Testera', 'Stihl', ',mse-190-c-b.jpg', 'Napon V	230\r\nSnaga KW	1.9\r\nTežina (kg)	4,5\r\nNivo zvučnog pritiska dB	92\r\nNivo zvučne snage dB	103\r\nNivo vibracije lijevo/desno m/s 2	2.9 / 3.4\r\nDužina kabla m	4.0\r\nSTHIL lanac Oilomatic (korak)	3/8\"P\r\nSTIHL lanac Oilomatic (tip)	Picco Micro 3 (PM3)', 744.00, NULL, '1,9', '4,5', NULL, NULL, NULL, 'Da', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 14:29:33', '2024-02-27 14:29:33'),
(41, 'MSE 250', 'Električna Motorna Testera', 'Stihl', ',mse-250.jpg', 'Napon V	230\r\nSnaga KW	2.5\r\nTežina (kg)	5,7\r\nNivo zvučnog pritiska dB (A)	94\r\nNivo zvučne snage dB (A)	105\r\nNivo vibracije lijevo/desno m/s 2	3.1 / 4.1\r\nSTHIL lanac Oilomatic (korak)	3/8\"\r\nSTIHL lanac Oilomatic (tip)	Rapid Super (RS3)', 1112.00, NULL, '2,5', '5,7', NULL, NULL, NULL, 'Da', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 14:30:10', '2024-02-27 14:30:10'),
(43, 'RME 443', 'Električna Kosačica', 'Stihl', ',rme-443.jpg', 'Električna kosilica STIHL RME 443 izvrsna je u zadacima košenja i uređenja travnjaka. Komšije će biti iznenađene njenim tihim radom. Ova kompaktna mašina opremljena je odličnim setom točkova tako da je upravljanje kosilicom lako, stabilno i jednostavno. Kablovski osigurač integrisan u mašinu sprečava neželjeno izvlačenje utikača uređaja iz utičnice produžnog kabla. Visina košenja se podešava centralno i moguće je izabrati jedan od šest nivoa. Sklopiva korpa za košnju zapremine 55 litara izrađena je od visokokvalitetnog polimernog materijala i znatno olakšava košenje. Vađenje i pražnjenje korpe je izuzetno jednostavno, a opremljena je i indikatorom pune korpe. Korpa je opremljena setom usmjeravajućih lamela, koje usmjeravaju mlaz zraka iz kosilice prema donjoj strani korpe. Na taj način se čestice otkosa i uskovitlana prašina zadržavaju u korpi. Upravljačka ručka se lako i brzo oslobađa pomoću Quick-Fix stezaljki, čineći kosilicu brzim i lakim za sklapanje za skladištenje i transport. Ukoliko želite da vratite vlagu i mineralne materije iz pokošene trave u tlo, ovu kosilicu možete opremiti dodatnim setom za usitnjavanje strništa (malčiranje). Ovaj dodatak omogućava rezanje sječiva trave na male segmente koji između njih padaju na tlo i štite ga od isušivanja.', 825.00, NULL, NULL, '19', NULL, NULL, NULL, 'Da', NULL, NULL, '41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 14:38:54', '2024-02-27 14:38:54'),
(44, 'RME 235', 'Električna Kosačica', 'Stihl', ',rme-235.jpg', 'Ova tiha i okretna električna kosilica idealna je za košenje manjih travnjaka u područjima osjetljivim na buku. Ova kosilica je izuzetno upravljiva i laka za upotrebu zahvaljujući svojoj laganoj, ali robusnoj konstrukciji. Visina reza na ovoj spravi može se podesiti u 5 nivoa, i to vrlo jednostavno jednom polugom. Na ovaj način se postiže vrlo ujednačen efekat košnje, a time i lijep izgled travnjaka. Korpa za sakupljanje otpada opremljena je indikatorom napunjenosti koji će Vas na vrijeme obavijestiti kada je pravo vrijeme za pražnjenje korpe. Sklopiva upravljačka ručka je podesiva prema visini korisnika, a sam uređaj je lako prenosiv pomoću integrirane transportne ručke. Preklapanjem kontrolne ručke smanjuju se dimenzije uređaja, što omogućava lak transport i skladištenje uz uštedu prostora.', 350.00, NULL, NULL, '13', NULL, NULL, NULL, 'Da', NULL, NULL, '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 14:40:04', '2024-02-27 14:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `products` text NOT NULL,
  `ukupnasuma` double NOT NULL,
  `napomena` text DEFAULT NULL,
  `stanjePorudzbine` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `address`, `phone`, `products`, `ukupnasuma`, `napomena`, `stanjePorudzbine`, `created_at`, `updated_at`) VALUES
(1, 'Luka Eric', 'lukaeric8@gmail.com', 'Svetog Save 162, Zvornik', '064 537 54 25', '12rew x 1 x 213 KM        Ostalo        213 KM        &        wer x 1 x 2343 KM        Ostalo        2343 KM        &', 2556, NULL, 'POSLATO', '2024-02-05 21:32:20', '2024-02-05 21:45:33'),
(2, 'Luka Eric', 'lukaeric8@gmail.com', 'Svetog Save 162, Zvornik', '064 537 54 25', 'wer x 1 x 2343 KM        Ostalo        2343 KM        &        Marko x 1 x 234 KM        Ostalo        234 KM        &', 2577, NULL, 'OTKAZANO', '2024-02-05 21:42:53', '2024-02-05 21:44:25'),
(3, 'Luka Eric', 'lukaeric8@gmail.com', 'Svetog Save 162, Zvornik', '064 537 54 25', 'luka x 1 x 123 KM        Ostalo        123 KM        &', 123, NULL, 'OTKAZANO', '2024-02-05 21:56:06', '2024-02-05 21:56:32'),
(4, 'Luka Eric', 'lukaeric8@gmail.com', 'Svetog Save 162, Zvornik', '064 537 54 25', 'wer x 1 x 2343 KM        Ostalo        2343 KM        &        Marko Jana x 1 x 342 KM        Ostalo        342 KM        &', 2685, NULL, 'OTKAZANO', '2024-02-06 09:29:02', '2024-02-06 09:29:57'),
(5, 'Luka Eric', 'lukaeric8@gmail.com', 'Svetog Save 162, Zvornik', '064 537 54 25', 'Polovan Kulić x 1 x 300 KM        Ostalo        300 KM        &', 300, NULL, 'POSLATO', '2024-02-06 09:30:40', '2024-02-06 09:33:19'),
(6, 'Luka Eric', 'lukaeric8@gmail.com', 'Svetog Save 162, Zvornik', '064 537 54 25', '12rew x 1 x 213 KM        Ostalo        213 KM        &        luka x 1 x 123 KM        Ostalo        123 KM        &', 336, 'Ovo zelim jako!', NULL, '2024-02-06 09:37:42', '2024-02-06 09:37:42'),
(7, 'Nikola', 'nkulic12@gmail.com', 'Trsic bb', '065861789', 'MS 210 x 1 x 798 KM        Motorna Testera        798 KM        &        MS 194 T x 1 x 1200 KM        Motorna Testera        1200 KM        &', 1998, NULL, 'POSLATO', '2024-02-27 16:05:20', '2024-02-27 16:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `address`, `phone`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 'Meterize 22, Karakaj, Zvornik', '066 216 990', '$2y$10$ND2kgn8c2R.38p56YJzwouwzXdnOeMdtLmj9g9L3kOO26bKugXKS2', 1, NULL, '2024-02-04 17:51:03', '2024-02-04 17:51:03'),
(2, 'Luka Eric', 'lukaeric8@gmail.com', NULL, 'Svetog Save 162, Zvornik', '064 537 54 25', '$2y$10$KocvdXtl4a16YK86KkzGGOjJjLntu1eTglXXBs4CFOfpOCrAqMlOO', 0, NULL, '2024-02-05 21:07:10', '2024-02-05 21:07:10'),
(3, 'Nikola', 'nkulic12@gmail.com', NULL, 'Trsic bb', '065861789', '$2y$10$AqixZWiYmx0XxqM6gSDN0O5QJqZzgxvNF9Jl/uICGZMAcg93B6f1i', 0, NULL, '2024-02-27 16:03:29', '2024-02-27 16:03:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fish`
--
ALTER TABLE `fish`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
