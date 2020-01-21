-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 11:15 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acme`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(10) UNSIGNED NOT NULL,
  `categoryName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Category classifications of inventory items';

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryName`) VALUES
(1, 'Cannon'),
(2, 'Explosive'),
(3, 'Misc'),
(4, 'Rocket'),
(5, 'Trap');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clientId` int(10) UNSIGNED NOT NULL,
  `clientFirstname` varchar(15) NOT NULL,
  `clientLastname` varchar(25) NOT NULL,
  `clientEmail` varchar(40) NOT NULL,
  `clientPassword` varchar(255) NOT NULL,
  `clientLevel` enum('1','2','3') NOT NULL DEFAULT '1',
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clientId`, `clientFirstname`, `clientLastname`, `clientEmail`, `clientPassword`, `clientLevel`, `comments`) VALUES
(2, 'Admin', 'User', 'admin@cit336.net', '$2y$10$vgOpehGtfwXetB6vFHJNnedwgbgUsjSoNX3NS/dcr9xnlyy7m1CsO', '3', ''),
(4, 'Betsey', 'Delorey', 'me@gmail.com', '$2y$10$F24JnarLLg80IPlIdgbE5.npsvjlAot7DjIIG870RqQoi.6W8u1SS', '1', ''),
(58, 'Adam', 'Ant', 'AA@gmail.com', '$2y$10$9rW2rbL9YmkMVLM/wHw82u7huWZGZ7y4hD9oFZUrRe4xlPB1s/Y1O', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imgId` int(10) UNSIGNED NOT NULL,
  `invId` int(10) UNSIGNED NOT NULL,
  `imgName` varchar(100) NOT NULL,
  `imgPath` varchar(150) NOT NULL,
  `imgDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imgId`, `invId`, `imgName`, `imgPath`, `imgDate`) VALUES
(131, 8, 'anvil.png', '/acme/images/products/anvil.png', '2018-03-27 14:17:12'),
(132, 8, 'anvil-tn.png', '/acme/images/products/anvil-tn.png', '2018-03-27 14:17:12'),
(133, 17, 'bomb.png', '/acme/images/products/bomb.png', '2018-03-27 14:19:24'),
(134, 17, 'bomb-tn.png', '/acme/images/products/bomb-tn.png', '2018-03-27 14:19:24'),
(135, 3, 'catapult.png', '/acme/images/products/catapult.png', '2018-03-27 14:19:37'),
(136, 3, 'catapult-tn.png', '/acme/images/products/catapult-tn.png', '2018-03-27 14:19:38'),
(137, 16, 'fence.png', '/acme/images/products/fence.png', '2018-03-27 14:20:16'),
(138, 16, 'fence-tn.png', '/acme/images/products/fence-tn.png', '2018-03-27 14:20:16'),
(139, 14, 'helmet.png', '/acme/images/products/helmet.png', '2018-03-27 14:20:30'),
(140, 14, 'helmet-tn.png', '/acme/images/products/helmet-tn.png', '2018-03-27 14:20:30'),
(141, 6, 'hole.png', '/acme/images/products/hole.png', '2018-03-27 14:20:51'),
(142, 6, 'hole-tn.png', '/acme/images/products/hole-tn.png', '2018-03-27 14:20:52'),
(143, 10, 'mallet.png', '/acme/images/products/mallet.png', '2018-03-27 14:21:12'),
(144, 10, 'mallet-tn.png', '/acme/images/products/mallet-tn.png', '2018-03-27 14:21:12'),
(145, 2, 'mortar.jpg', '/acme/images/products/mortar.jpg', '2018-03-27 14:21:24'),
(146, 2, 'mortar-tn.jpg', '/acme/images/products/mortar-tn.jpg', '2018-03-27 14:21:24'),
(147, 13, 'piano.jpg', '/acme/images/products/piano.jpg', '2018-03-27 14:21:42'),
(148, 13, 'piano-tn.jpg', '/acme/images/products/piano-tn.jpg', '2018-03-27 14:21:42'),
(149, 4, 'roadrunner.jpg', '/acme/images/products/roadrunner.jpg', '2018-03-27 14:21:55'),
(150, 4, 'roadrunner-tn.jpg', '/acme/images/products/roadrunner-tn.jpg', '2018-03-27 14:21:55'),
(151, 1, 'rocket.png', '/acme/images/products/rocket.png', '2018-03-27 14:22:13'),
(152, 1, 'rocket-tn.png', '/acme/images/products/rocket-tn.png', '2018-03-27 14:22:13'),
(153, 15, 'rope.jpg', '/acme/images/products/rope.jpg', '2018-03-27 14:22:26'),
(154, 15, 'rope-tn.jpg', '/acme/images/products/rope-tn.jpg', '2018-03-27 14:22:26'),
(155, 12, 'seed.jpg', '/acme/images/products/seed.jpg', '2018-03-27 14:22:40'),
(156, 12, 'seed-tn.jpg', '/acme/images/products/seed-tn.jpg', '2018-03-27 14:22:41'),
(157, 11, 'tnt.png', '/acme/images/products/tnt.png', '2018-03-27 14:23:01'),
(158, 11, 'tnt-tn.png', '/acme/images/products/tnt-tn.png', '2018-03-27 14:23:01'),
(159, 5, 'trap.jpg', '/acme/images/products/trap.jpg', '2018-03-27 14:23:20'),
(160, 5, 'trap-tn.jpg', '/acme/images/products/trap-tn.jpg', '2018-03-27 14:23:20'),
(161, 8, 'anvil2.jpg', '/acme/images/products/anvil2.jpg', '2018-03-27 14:24:32'),
(162, 8, 'anvil2-tn.jpg', '/acme/images/products/anvil2-tn.jpg', '2018-03-27 14:24:32'),
(163, 8, 'anvil3.jpg', '/acme/images/products/anvil3.jpg', '2018-03-27 14:24:55'),
(164, 8, 'anvil3-tn.jpg', '/acme/images/products/anvil3-tn.jpg', '2018-03-27 14:24:55'),
(165, 4, 'female2.jpg', '/acme/images/products/female2.jpg', '2018-03-27 14:25:29'),
(166, 4, 'female2-tn.jpg', '/acme/images/products/female2-tn.jpg', '2018-03-27 14:25:30'),
(167, 1, 'rocket2.jpg', '/acme/images/products/rocket2.jpg', '2018-03-27 14:26:15'),
(168, 1, 'rocket2-tn.jpg', '/acme/images/products/rocket2-tn.jpg', '2018-03-27 14:26:15'),
(169, 1, 'rocket3.jpg', '/acme/images/products/rocket3.jpg', '2018-03-27 14:27:02'),
(170, 1, 'rocket3-tn.jpg', '/acme/images/products/rocket3-tn.jpg', '2018-03-27 14:27:02'),
(171, 1, 'rocket4.jpg', '/acme/images/products/rocket4.jpg', '2018-03-27 14:27:23'),
(172, 1, 'rocket4-tn.jpg', '/acme/images/products/rocket4-tn.jpg', '2018-03-27 14:27:23'),
(173, 1, 'rocket5.jpg', '/acme/images/products/rocket5.jpg', '2018-03-27 14:27:49'),
(174, 1, 'rocket5-tn.jpg', '/acme/images/products/rocket5-tn.jpg', '2018-03-27 14:27:49'),
(175, 9, 'acmeband.jpg', '/acme/images/products/acmeband.jpg', '2018-03-27 14:31:52'),
(176, 9, 'acmeband-tn.jpg', '/acme/images/products/acmeband-tn.jpg', '2018-03-27 14:31:52'),
(177, 9, 'acmeband2.jpg', '/acme/images/products/acmeband2.jpg', '2018-03-27 14:32:27'),
(178, 9, 'acmeband2-tn.jpg', '/acme/images/products/acmeband2-tn.jpg', '2018-03-27 14:32:27'),
(179, 9, 'acmeband3.jpg', '/acme/images/products/acmeband3.jpg', '2018-03-27 14:32:54'),
(180, 9, 'acmeband3-tn.jpg', '/acme/images/products/acmeband3-tn.jpg', '2018-03-27 14:32:54'),
(181, 9, 'acmeband4.jpg', '/acme/images/products/acmeband4.jpg', '2018-03-27 14:33:23'),
(182, 9, 'acmeband4-tn.jpg', '/acme/images/products/acmeband4-tn.jpg', '2018-03-27 14:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `invId` int(10) UNSIGNED NOT NULL,
  `invName` varchar(50) NOT NULL DEFAULT '',
  `invDescription` text NOT NULL,
  `invImage` varchar(50) NOT NULL DEFAULT '',
  `invThumbnail` varchar(50) NOT NULL DEFAULT '',
  `invPrice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `invStock` smallint(6) NOT NULL DEFAULT '0',
  `invSize` smallint(6) NOT NULL DEFAULT '0',
  `invWeight` smallint(6) NOT NULL DEFAULT '0',
  `invLocation` varchar(35) NOT NULL DEFAULT '',
  `categoryId` int(10) UNSIGNED NOT NULL,
  `invVendor` varchar(20) NOT NULL DEFAULT '',
  `invStyle` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Acme Inc. Inventory Table';

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`invId`, `invName`, `invDescription`, `invImage`, `invThumbnail`, `invPrice`, `invStock`, `invSize`, `invWeight`, `invLocation`, `categoryId`, `invVendor`, `invStyle`) VALUES
(1, 'Rocket', 'Rocket for multiple purposes. This can be launched independently to deliver a payload or strapped on to help get you to where you want to be FAST!!! Really Fast!', '/acme/images/products/rocket.png', '/acme/images/products/rocket-tn.png', '1320.00', 5, 60, 90, 'California', 4, 'Goddard', 'metal'),
(2, 'Mortar', 'Our Mortar is very powerful. This cannon can launch a projectile or bomb 3 miles. Made of solid steel and mounted on cement or metal stands [not included].', '/acme/images/products/mortar.jpg', '/acme/images/products/mortar-tn.jpg', '1500.00', 26, 250, 750, 'San Jose', 1, 'Smith & Wesson', 'Metal'),
(3, 'Catapult', 'Our best wooden catapult. Ideal for hurling objects for up to 1000 yards. Payloads of up to 300 lbs.', '/acme/images/products/catapult.png', '/acme/images/products/catapult-tn.png', '2500.00', 4, 1569, 400, 'Cedar Point, IO', 1, 'Wooden Creations', 'Wood'),
(4, 'Female RoadRunner Cutout', 'This carbon fiber backed cutout of a female roadrunner is sure to catch the eye of any male roadrunner.', '/acme/images/products/roadrunner.jpg', '/acme/images/products/roadrunner-tn.jpg', '20.00', 500, 27, 2, 'San Jose', 5, 'Picture Perfect', 'Carbon Fiber'),
(5, 'Giant Mouse Trap', 'Our big mouse trap. This trap is multifunctional. It can be used to catch dogs, mountain lions, road runners or even muskrats. Must be staked for larger varmints [stakes not included] and baited with approptiate bait [sold seperately].\r\n', '/acme/images/products/trap.jpg', '/acme/images/products/trap-tn.jpg', '20.00', 34, 470, 28, 'Cedar Point, IO', 5, 'Rodent Control', 'Wood'),
(6, 'Instant Hole', 'Instant hole - Wonderful for creating the appearance of openings.', '/acme/images/products/hole.png', '/acme/images/products/hole-tn.png', '25.00', 269, 24, 2, 'San Jose', 3, 'Hidden Valley', 'Ether'),
(7, 'Koenigsegg CCX', 'This high performance car is sure to get you where you are going fast. It holds the production car land speed record at an amazing 250mph.', '/acme/images/products/no-image.png', '/acme/images/products/no-image.png', '500000.00', 1, 25000, 3000, 'San Jose', 3, 'Koenigsegg', 'Metal'),
(8, 'Anvil', 'hello', '/acme/images/products/anvil.png', '/acme/images/products/anvil-tn.png', '150.00', 15, 80, 50, 'San Jose', 5, 'Steel Made', 'Metal'),
(9, 'Monster Rubber Band', 'These are not tiny rubber bands. These are MONSTERS! These bands can stop a train locamotive or be used as a slingshot for cows. Only the best materials are used!', '/acme/images/products/acmeband3.jpg', '/acme/images/products/acmeband3-tn.jpg', '4.00', 4589, 75, 1, 'Cedar Point, IA', 3, 'Rubbermaid', 'Rubber'),
(10, 'Mallet', 'Ten pound mallet for bonking roadrunners on the head. Can also be used for bunny rabbits.', '/acme/images/products/mallet.png', '/acme/images/products/mallet-tn.png', '25.00', 100, 36, 10, 'Cedar Point, IA', 3, 'Wooden Creations', 'Wood'),
(11, 'TNT', 'The biggest bang for your buck with our nitro-based TNT. Price is per stick.', '/acme/images/products/tnt.png', '/acme/images/products/tnt-tn.png', '10.00', 1000, 25, 2, 'San Jose', 2, 'Nobel Enterprises', 'Plastic'),
(12, 'Roadrunner Bird Seed Mix', 'Our best varmint seed mix - varmints on two or four legs can\'t resist this mix. Contains meat, nuts, cereals and our own special ingredient. Guaranteed to bring them in. Can be used with our monster trap.', '/acme/images/products/seed.jpg', '/acme/images/products/seed-tn.jpg', '8.00', 150, 24, 3, 'San Jose', 5, 'Acme', 'Plastic'),
(13, 'Grand Piano', 'This grand piano is guaranteed to play well and smash anything beneath it if dropped from a height.', '/acme/images/products/piano.jpg', '/acme/images/products/piano-tn.jpg', '3500.00', 36, 500, 1200, 'Cedar Point, IA', 3, 'Wulitzer', 'Wood'),
(14, 'Crash Helmet', 'This carbon fiber and plastic helmet is the ultimate in protection for your head. comes in assorted colors.', '/acme/images/products/helmet.png', '/acme/images/products/helmet-tn.png', '100.00', 25, 48, 9, 'San Jose', 3, 'Suzuki', 'Carbon Fiber'),
(15, 'Nylon Rope', 'This nylon rope is ideal for all uses. Each rope is the highest quality nylon and comes in 100 foot lengths.', '/acme/images/products/rope.jpg', '/acme/images/products/rope-tn.jpg', '15.00', 200, 200, 6, 'San Jose', 3, 'Marina Sales', 'Nylon'),
(16, 'Sticky Fence', 'This fence is covered with Gorilla Glue and is guaranteed to stick to anything that touches it and is sure to hold it tight.', '/acme/images/products/fence.png', '/acme/images/products/fence-tn.png', '75.00', 15, 48, 2, 'San Jose', 3, 'Acme', 'Nylon'),
(17, 'Small Bomb', 'Bomb with a fuse - A little old fashioned, but highly effective. This bomb has the ability to devistate anything within 30 feet.', '/acme/images/products/bomb.png', '/acme/images/products/bomb-tn.png', '275.00', 58, 30, 12, 'San Jose', 2, 'Nobel Enterprises', 'Metal');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewId` int(10) UNSIGNED NOT NULL,
  `reviewText` text NOT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `invId` int(10) UNSIGNED NOT NULL,
  `clientId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewId`, `reviewText`, `reviewDate`, `invId`, `clientId`) VALUES
(4, 'That roadrunner will be dinner tonight for sure!', '2018-04-03 19:21:43', 2, 2),
(5, 'Lovely brown color and very heavy.', '2018-04-02 19:28:28', 2, 2),
(6, 'The loudest boom I\'ve ever heard!', '2018-03-04 20:33:19', 2, 2),
(8, 'Simply marvelous.  Great distance.', '2018-02-04 20:41:53', 2, 2),
(9, 'Great product!', '2018-01-04 20:42:29', 2, 2),
(16, 'Best price in town!', '2018-04-04 19:58:29', 2, 2),
(23, 'Reminds me of medieval times.  Now that&#39;s progress!', '2018-04-05 22:25:26', 3, 2),
(24, 'Smooth and shiny.  Very sleek looking.  Long wick.', '2018-04-05 22:26:15', 17, 2),
(28, 'Yaba-daba-doo time!', '2018-04-06 15:37:16', 2, 4),
(29, '**Incredible Value**', '2018-04-06 16:10:10', 2, 4),
(31, 'Fantastic range!', '2018-04-06 16:14:25', 2, 4),
(33, 'Yes an awesome cannon!', '2018-04-07 14:52:11', 17, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`clientId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imgId`),
  ADD KEY `invId` (`invId`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`invId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewId`),
  ADD KEY `FK_reviews_clients` (`clientId`),
  ADD KEY `FK_reviews_inventory` (`invId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `clientId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imgId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `invId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_inv_image` FOREIGN KEY (`invId`) REFERENCES `inventory` (`invId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `FK_reviews_clients` FOREIGN KEY (`clientId`) REFERENCES `clients` (`clientId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_reviews_inventory` FOREIGN KEY (`invId`) REFERENCES `inventory` (`invId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
