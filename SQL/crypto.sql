-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 02:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `upload_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `description`, `image_path`, `upload_date`) VALUES
(7, 'new new New cryptocurrency to mine for free: Top 10 projects', 'In the early days of crypto, mining felt like an adventure for many, a hands-on way to dive in and start earning. Since this is a complex process that requires expensive and energy-intensive equipment, crypto mining on phones is becoming increasingly popular.\r\n\r\nIn this article, we’ll take a look at free mining and figure out which new free mining cryptocurrency is the best pick.\r\n\r\nWith the growing buzz around digital currencies, you’ll find a ton of Android apps that allow you to mine cryptocurrency from your phone. They seem like an easy way to earn some rewards, but it’s smart to dig into how effective they are and what kind of returns you can count on. And of course, deciding what to mine.', 'uploads/1733515109_tt (1).jpg', '2024-12-07 01:58:29'),
(8, 'ClostriX Review: Discover Powerful Crypto Trends and Secure More Trading Gains', 'Disclosure: This article does not represent investment advice. The content and materials featured on this page are for educational purposes only.\r\n\r\nClostriX simplifies crypto trading with AI-driven tools, helping users identify profitable opportunities while managing risk effortlessly.\r\n\r\nTable of Contents\r\n\r\nOverview\r\n\r\nAbout ClostriX\r\n\r\nBenefits of using ClostriX\r\n\r\nKey features of ClostriX\r\n\r\nHow Clostrix works\r\n\r\nWho is ClostriX for?\r\n\r\nPublic review and verdict\r\n\r\nConclusion\r\n\r\nClostriX identifies crypto coins that are about to explode and alerts users to their ideal entry and exit points. It also protects users from their emotions by showing them the best and worst times to trade. Interested users can claim the special Clostrix early-adopter membership and secure a discounted price for life.', 'uploads/1733515142_tt (2).jpg', '2024-12-07 01:59:02'),
(9, 'btc Bitcoin Energy Consumption Index Eyes ATH, Here’s Its Implication', 'With the surge in the price of Bitcoin (BTC), the demand for the coin has grown significantly, placing enormous pressure on mining activities. At the same time, there has been an intense use of energy from national grids to meet this demand. According to a report from S&P Global insight, the Bitcoin Energy Consumption Index is close to breaching its All-Time High (ATH).', 'uploads/1733515170_tt (3).jpg', '2024-12-07 01:59:30'),
(10, 'Sui, Fantom Soar as Whales Buy More Bitcoin, What About New Altcoin BEST Token?', 'Sui and Fantom are soaring right now.\r\n\r\nThese cryptos are suddenly hot again, and some are pointing to renewed interest in the altcoin market as the reason.\r\n\r\nBitcoin whales are also getting in on the action, which could set the stage for big price swings in the year’s final weeks.\r\n\r\nIn the middle of all this, the new Best Wallet token has hit $2.5 million in presale – positioning itself as a high-potential play for 2025.', 'uploads/1733515194_tt (4).jpg', '2024-12-07 01:59:54'),
(11, 'Czech Republic exempts three-year old Bitcoin from capital tax gains', 'The Czech Republic Parliament reportedly passed a law that would exempt Bitcoin held for more than three years from capital tax gains, placing it on the same level as stocks.\r\n\r\nAccording to a video by Braiins mining’s Chief of Propaganda, Kristian Csepcsar, the Czech Republic Parliament has unanimously agreed to exempt capital gains tax on Bitcoin Bitcoin\r\nbtc\r\n2.94%\r\nBitcoin held for more than three years. Previously, capital gains that came from owning Bitcoin was subject to a 21% corporate income tax.', 'uploads/1733515222_tt (5).jpg', '2024-12-07 02:00:22'),
(12, 'US gov told banks to suppress crypto, Coinbase documents show', 'These communications, brought to light by Coinbase, highlight how regulatory ambiguity has fueled tension between crypto firms and federal banking authorities.\r\n\r\nThe documents, obtained through a legal challenge by Coinbase and released on Friday, include letters instructing banks to pause all activities related to cryptocurrencies. \r\n\r\n“We respectfully ask that you pause all crypto asset-related activity,” the documents read. \r\n\r\nThese FDIC directives reportedly delayed or halted banks’ plans to offer crypto services until they could address unclear compliance requirements. ', 'uploads/1733515250_tt (6).jpg', '2024-12-07 02:00:50'),
(13, 'Ripple targeting year-end RLUSD stablecoin launch: report', 'Ripple is pushing to launch its U.S. dollar-pegged stablecoin, RLUSD, by the end of 2024, though regulatory approvals and the holiday season could cause delays.\r\n\r\nThis sentiment comes from Ripple CTO David Schwartz. Speaking at The Block’s Emergence conference in Prague, Schwartz expressed optimism despite challenges.\r\n\r\n“I’m very hopeful it will happen this year, but once you start running into Christmas and New Year’s, people are gone,” he said, according to The Block.\r\n\r\nRLUSD was initially announced in April and will operate on both the XRP XRP\r\nxrp\r\n0.99%\r\nXRP Ledger and Ethereum Ethereum\r\neth\r\n6.39%\r\nEthereum. Testing began in August, and Ripple has partnered with exchanges Uphold, Bitstamp, and Bitso, alongside market makers B2C2 and Keyrock, to ensure liquidity.', 'uploads/1733515286_tt (1).jpg', '2024-12-07 02:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `submitted_at`, `comments`) VALUES
(4, 'Junaet Islam ', 'junaetsany@gmail.com', 'mail@gfh', 'qewde', '2024-12-01 03:16:48', NULL),
(7, 'Junaet', 'junaetsany@gmail.com', 'bitcoin', 'lorem10', '2024-12-06 13:41:56', NULL),
(9, 'Junaet', 'junaetpro@gmail.com', 'bitcoin', 'lorem', '2024-12-06 13:45:29', NULL),
(10, 'sany', 'junaetsany@gmail.com', 'bitcoin', 'fghfdghfhb', '2024-12-06 13:49:57', NULL),
(11, 'fgbfgb', 'fgbgf@..gh', 'ghnghn', 'ghnghn', '2024-12-06 13:54:45', NULL),
(12, 'risan', 'r@g.com', 'ghnghn', 'aaaaaaaaaaaaaaaaaaaaa', '2024-12-06 13:55:24', NULL),
(13, 'risan', 'gggggggg@.com', 'ggggggggggggg', 'gggggggggggg', '2024-12-06 13:58:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(11) NOT NULL,
  `Photo` blob DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Salary` decimal(10,2) NOT NULL,
  `Address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `Photo`, `Name`, `Designation`, `Salary`, `Address`) VALUES
(4, 0x656d706c6f7965655f70686f746f732f313733333633363931395f6a756e616574202832292e706e67, 'Junaet', 'Developer', 30000.00, 'Araihazar'),
(5, 0x656d706c6f7965655f70686f746f732f313733333633363938325f342e706e67, 'Nazin', 'Designer', 28000.00, 'Jatrabari'),
(6, 0x656d706c6f7965655f70686f746f732f313733333633363939395f322e706e67, 'shamim', 'Designer', 28000.00, 'Jatrabari'),
(7, 0x656d706c6f7965655f70686f746f732f313733333633373034365f322e706e67, 'Sakline', 'Content Writer', 25000.00, 'Koril'),
(8, 0x656d706c6f7965655f70686f746f732f313733333633373036365f362e706e67, 'Habib', 'Content Writer', 25000.00, 'Koril');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
