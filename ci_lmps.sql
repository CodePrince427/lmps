-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2017 at 03:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_lmps`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `agent_cell` varchar(255) NOT NULL,
  `agent_pic` varchar(255) NOT NULL,
  `agent_sms` varchar(255) DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `agent_id`, `agent_name`, `agent_cell`, `agent_pic`, `agent_sms`) VALUES
(5, 5, 'Eric Frahlich', '(978)479-7649', 'user1.jpg', 'on'),
(69, 69, 'Lillian Montalto', '(978)815-6300', '3631973LM Current Photo.jpg', 'on'),
(70, 70, 'Wayne Altavilla', '(978)375-4465', '9eb4f40New Pic Wayne.jpeg', 'on'),
(71, 71, 'Bob Bohlen', '(978)809-4462', '30b601fBob-2012-New1.jpg', 'on'),
(72, 72, 'Cheryl Eggerts', '(978)905-0979', '13115c8Cheryl New.JPG', 'on'),
(73, 73, 'Ana Fultz-Desouza', '(978)809-6048', 'c0a99efAna Head shot.jpg', 'on'),
(74, 74, 'Matt Hurchik', '(978)886-8632', '8b2dd04matt biz card pix.jpg', 'on'),
(75, 75, 'Todd Koss', '(978)873-3072', 'a694ce2New.JPG', 'on'),
(76, 76, 'Mindaugas Maciulis', '(978)944-8881', 'ab6ad881x1 FS Min pix.jpg', 'on'),
(77, 77, 'Aldo Mansi', '(617)449-8990', '1e0ec53DSCN9316.JPG', 'on'),
(78, 78, 'Taylor Martel', '(978)880-1884', '023f463Taylor Business Card.JPG', 'on'),
(79, 79, 'Kerrie Myers', '(978)223-7343', '2a16177Kerries new business photo 11-20-15.jpg', 'on'),
(80, 80, 'Tyler Richards', '(978)973-3433', '6371a56TYLER 9-18-14.jpg', 'on'),
(81, 81, 'Charles Santiago', '(978)337-3421', '6ad810fBio 2 resize 12-28-15.jpg', 'on'),
(82, 82, 'Zhuoming Sun', '(978)689-5416', '5fedffdBUSINESS CARD PIC.jpg', 'on'),
(83, 83, 'Mei Zhou', '(978)413-6688', '282eaa6MeiZhou_w1.jpg', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `closing_steps`
--

CREATE TABLE `closing_steps` (
  `id` int(11) NOT NULL,
  `step_no` int(11) NOT NULL,
  `step_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `closing_steps`
--

INSERT INTO `closing_steps` (`id`, `step_no`, `step_name`, `content`, `video`) VALUES
(1, 1, 'The Preparation2', '<h3>The Preparation</h3><p>During the preparation stage, the listing department will collect all the signed documents from your agent. It is essential for you to sign all the required documents, and returned them to your agent as soon as you can.&nbsp;</p>\n\n<ul>\n	<li>Collecting Signed Documents from your agent</li>\n	<li>Scheduling the Sign Installation</li>\n	<li>Preparing sign riders</li>\n	<li>Sign Installed</li>\n	<li>Inventory Tracking</li>\n</ul>\n', 'https://www.youtube.com/embed/J2gXxxQij_8'),
(2, 2, 'File Creation2', '<h3>File Creation</h3><p>During the File Set Up stage, our Listing Department will collect all the signed documents from your agent. It is essential for you to sign all the required documents, and return&nbsp;them to your agent as soon as you can.&nbsp;</p>\n\n<p><strong>Here are some of the files that you may see while listing your home:</strong></p>\n\n<p style=\"text-align:center\">&nbsp;</p>\n\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:center\">Agency Disclosure</td>\n			<td style=\"text-align:center\">Contingent Status Request Form</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Inclusions Exclusions Form</td>\n			<td style=\"text-align:center\">Utility Costs</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Non-MLS Listing Form</td>\n			<td style=\"text-align:center\">Delayed Listing Form</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Notice of Dual Agency</td>\n			<td style=\"text-align:center\">Credit Faxback Form</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Offer Presentation</td>\n			<td style=\"text-align:center\">Statement of Property Condition</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Sellers Disclosure</td>\n			<td style=\"text-align:center\">VIF Form</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Deferral of Showings</td>\n			<td style=\"text-align:center\">Exclusive Right to Sell Agreement</td>\n		</tr>\n	</tbody>\n</table>\n\n<p style=\"text-align:center\">&nbsp;</p>\n', 'https://www.youtube.com/embed/LidFOnEStOg'),
(3, 3, 'Pre-Listing Checklists2', '<h3>Pre-Listing Checklists</h3><p>The Pre-Listing Checklists are essential to list your home with 100% accuracy. Our Listing Department has dozens of checklists with dozens of items on each checklist dedicated to making the listing of your home our&nbsp;top priority.</p>\n\n<p><strong>Here are just a few of the checklist tasks our Listing Department completes:</strong></p>\n\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:550px\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:center\">Take Measurements</td>\n			<td style=\"text-align:center\">Take Pictures</td>\n			<td style=\"text-align:center\">Install Lock Box</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Make Copies of Keys</td>\n			<td style=\"text-align:center\">Return Original Keys</td>\n			<td style=\"text-align:center\">Test Key Copies</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Create Offline MLS</td>\n			<td style=\"text-align:center\">Create Visual Tour</td>\n			<td style=\"text-align:center\">Schedule Sign Installation</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Create Feature Sheet</td>\n			<td style=\"text-align:center\">Secure Domain Name</td>\n			<td style=\"text-align:center\">Set Picture Appointment</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Enter Listing Info in CRMs</td>\n			<td style=\"text-align:center\">Confirm Showing Instructions</td>\n			<td style=\"text-align:center\">Assign Key Number</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Forward Domain Name</td>\n			<td style=\"text-align:center\">Attach Docs to MLS Listing</td>\n			<td style=\"text-align:center\">Confirm Sign Preferences</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Schedule Broker Caravan</td>\n			<td style=\"text-align:center\">Create Draft Feature Sheets</td>\n			<td style=\"text-align:center\">Make Listing Live</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Enter HOA/MGT Co Info</td>\n			<td style=\"text-align:center\">Download Property Pictures</td>\n			<td style=\"text-align:center\">Download GIS Map</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n', 'https://www.youtube.com/embed/dAVSYhzNt1w'),
(4, 4, 'Sign Installation2', '<h3>Sign Installation</h3><p>During the Sign Installation Step, our sign guy, Louis, will install a sign on your property in the location you chose.&nbsp;</p>\n', 'https://www.youtube.com/embed/5yVqW963Qzc'),
(5, 5, 'Feature Sheets2', '<h3>Feature Sheets</h3><p>Our Marketing and Listing Specialists are currently designing your Feature Sheets and Marketing Materials. Upon completion, the feature sheet drafts will be sent to you for your review for accuracy.&nbsp;</p>\n', 'https://www.youtube.com/embed/EjXM43CeUKA'),
(6, 6, 'Open Houses2', '<h3>Open Houses</h3><p>Congratulations! Your property is live on MLS and is being seen by all the local realtors! It is just a matter of time before your property sells! We are currently scheduling open houses for buyers and their agents to stop by and check out the interior of your property.&nbsp;</p>\n\n<p><img alt=\"\" src=\"https://images-na.ssl-images-amazon.com/images/I/71wDZ-6tXZL._AC_UL320_SR276,320_.jpg\" style=\"height:151px; width:130px\" /></p>\n', 'https://www.youtube.com/embed/AdyzC0TwwVs'),
(7, 7, 'You Received an Offer2', '<h3>You Received an Offer</h3><p>Congratulations! You received an offer on your listing! Should you choose to accept the offer, your file will be transferred over to Pam Garcia at our Closing Department, who will handle the rest of your transaction.&nbsp;</p>\n\n<p><img alt=\"\" src=\"https://rdcnewsadvice.wpengine.com/wp-content/uploads/2013/12/real_estate_purchase_offer.jpg\" style=\"height:260px; width:400px\" /></p>\n', 'https://www.youtube.com/embed/TIK4CiEMdIA');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `process` varchar(255) NOT NULL,
  `step_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `seller_id`, `code`, `address`, `city`, `state`, `zipcode`, `price`, `process`, `step_id`, `agent_id`) VALUES
(66, 94, '4C85058', 'Lot 1 Sorrento Circle, Andover, MA 01810', 'Andover', 'MA', '01810', '729900', 'Listing Process', 5, 69),
(67, 85, '6996A50', '2 Clark Road, Andover, MA 01810', 'Andover', 'MA', '01810', '329900', 'Listing Process', 5, 69),
(68, 86, '05C0595', '24 Muirfield, Andover, MA 01810', 'Andover', 'MA', '01810', '1200000', 'Listing Process', 5, 69),
(75, 90, '6C4664E', 'street', 'city', 'state', '3478', ' 347800', 'Listing Process', 3, 83);

-- --------------------------------------------------------

--
-- Table structure for table `listing_gallery`
--

CREATE TABLE `listing_gallery` (
  `id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_gallery`
--

INSERT INTO `listing_gallery` (`id`, `listing_id`, `pic`) VALUES
(30, 66, '75f7414P1040903.JPG'),
(31, 66, 'a7c464cP1040904.JPG'),
(43, 67, '857e4a05.JPG'),
(59, 67, 'p4.JPG'),
(60, 66, '7248d9ebe2793c3.JPG'),
(61, 66, '2298f69e4f6ed711.JPG'),
(66, 75, '08ac0f51338205153_Wallace_Hill_Road_Townsend_MA (24 of 69).jpg'),
(67, 75, '8421a8c22a9296153_Wallace_Hill_Road_Townsend_MA (22 of 69).jpg'),
(68, 75, 'b4a28dda3d1259153_Wallace_Hill_Road_Townsend_MA (23 of 69).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `listing_pdfs`
--

CREATE TABLE `listing_pdfs` (
  `id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_pdfs`
--

INSERT INTO `listing_pdfs` (`id`, `listing_id`, `pdf`) VALUES
(1, 66, 'test-file.pdf'),
(22, 66, 'a0c9ef6DEED Lot 1 Sorrento 1-22-17.pdf'),
(23, 67, 'Utility Costs (NOTES) 5 Lee 6-2-17.pdf'),
(25, 67, 'ERTLA Signed 5 Lee 6-2-17.pdf'),
(26, 66, '86ecb8e3b442a3Non MLS Signed 2 Clark 4-29-17.pdf'),
(32, 75, 'Non MLS Signed 2 Clark 4-29-17.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `listing_pics`
--

CREATE TABLE `listing_pics` (
  `id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `pics` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_pics`
--

INSERT INTO `listing_pics` (`id`, `listing_id`, `pics`) VALUES
(32, 66, 'da0a1a5P1040917.JPG'),
(33, 67, '98e2d0dphoto (1).jpeg'),
(34, 68, '52d281bNEW MLS PIC.png'),
(37, 75, 'f3c10f2be2793c3.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `listing_steps`
--

CREATE TABLE `listing_steps` (
  `id` int(11) NOT NULL,
  `step_no` int(11) NOT NULL,
  `step_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_steps`
--

INSERT INTO `listing_steps` (`id`, `step_no`, `step_name`, `content`, `video`) VALUES
(1, 1, 'The Preparation', '<h3>The Preparation</h3><p>During the preparation stage, the listing department will collect all the signed documents from your agent. It is essential for you to sign all the required documents, and returned them to your agent as soon as you can.&nbsp;</p>\n\n<ul>\n	<li>Collecting Signed Documents from your agent</li>\n	<li>Scheduling the Sign Installation</li>\n	<li>Preparing sign riders</li>\n	<li>Sign Installed</li>\n	<li>Inventory Tracking</li>\n</ul>\n', 'https://www.youtube.com/embed/J2gXxxQij_8'),
(2, 2, 'File Creation', '<h3>File Creation</h3><p>During the File Set Up stage, our Listing Department will collect all the signed documents from your agent. It is essential for you to sign all the required documents, and return&nbsp;them to your agent as soon as you can.&nbsp;</p>\n\n<p><strong>Here are some of the files that you may see while listing your home:</strong></p>\n\n<p style=\"text-align:center\">&nbsp;</p>\n\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:center\">Agency Disclosure</td>\n			<td style=\"text-align:center\">Contingent Status Request Form</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Inclusions Exclusions Form</td>\n			<td style=\"text-align:center\">Utility Costs</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Non-MLS Listing Form</td>\n			<td style=\"text-align:center\">Delayed Listing Form</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Notice of Dual Agency</td>\n			<td style=\"text-align:center\">Credit Faxback Form</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Offer Presentation</td>\n			<td style=\"text-align:center\">Statement of Property Condition</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Sellers Disclosure</td>\n			<td style=\"text-align:center\">VIF Form</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Deferral of Showings</td>\n			<td style=\"text-align:center\">Exclusive Right to Sell Agreement</td>\n		</tr>\n	</tbody>\n</table>\n\n<p style=\"text-align:center\">&nbsp;</p>\n', 'https://www.youtube.com/embed/LidFOnEStOg'),
(3, 3, 'Pre-Listing Checklists', '<h3>Pre-Listing Checklists</h3><p>The Pre-Listing Checklists are essential to list your home with 100% accuracy. Our Listing Department has dozens of checklists with dozens of items on each checklist dedicated to making the listing of your home our&nbsp;top priority.</p>\n\n<p><strong>Here are just a few of the checklist tasks our Listing Department completes:</strong></p>\n\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:550px\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:center\">Take Measurements</td>\n			<td style=\"text-align:center\">Take Pictures</td>\n			<td style=\"text-align:center\">Install Lock Box</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Make Copies of Keys</td>\n			<td style=\"text-align:center\">Return Original Keys</td>\n			<td style=\"text-align:center\">Test Key Copies</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Create Offline MLS</td>\n			<td style=\"text-align:center\">Create Visual Tour</td>\n			<td style=\"text-align:center\">Schedule Sign Installation</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Create Feature Sheet</td>\n			<td style=\"text-align:center\">Secure Domain Name</td>\n			<td style=\"text-align:center\">Set Picture Appointment</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Enter Listing Info in CRMs</td>\n			<td style=\"text-align:center\">Confirm Showing Instructions</td>\n			<td style=\"text-align:center\">Assign Key Number</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Forward Domain Name</td>\n			<td style=\"text-align:center\">Attach Docs to MLS Listing</td>\n			<td style=\"text-align:center\">Confirm Sign Preferences</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Schedule Broker Caravan</td>\n			<td style=\"text-align:center\">Create Draft Feature Sheets</td>\n			<td style=\"text-align:center\">Make Listing Live</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">Enter HOA/MGT Co Info</td>\n			<td style=\"text-align:center\">Download Property Pictures</td>\n			<td style=\"text-align:center\">Download GIS Map</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n', 'https://www.youtube.com/embed/dAVSYhzNt1w'),
(4, 4, 'Sign Installation', '<h3>Sign Installation</h3><p>During the Sign Installation Step, our sign guy, Louis, will install a sign on your property in the location you chose.&nbsp;</p>\n', 'https://www.youtube.com/embed/5yVqW963Qzc'),
(5, 5, 'Feature Sheets', '<h3>Feature Sheets</h3><p>Our Marketing and Listing Specialists are currently designing your Feature Sheets and Marketing Materials. Upon completion, the feature sheet drafts will be sent to you for your review for accuracy.&nbsp;</p>\n', 'https://www.youtube.com/embed/EjXM43CeUKA'),
(6, 6, 'Open Houses', '<h3>Open Houses</h3><p>Congratulations! Your property is live on MLS and is being seen by all the local realtors! It is just a matter of time before your property sells! We are currently scheduling open houses for buyers and their agents to stop by and check out the interior of your property.&nbsp;</p>\n\n<p><img alt=\"\" src=\"https://images-na.ssl-images-amazon.com/images/I/71wDZ-6tXZL._AC_UL320_SR276,320_.jpg\" style=\"height:151px; width:130px\" /></p>\n', 'https://www.youtube.com/embed/AdyzC0TwwVs'),
(7, 7, 'You Received an Offer', '<h3>You Received an Offer</h3><p>Congratulations! You received an offer on your listing! Should you choose to accept the offer, your file will be transferred over to Pam Garcia at our Closing Department, who will handle the rest of your transaction.&nbsp;</p>\n\n<p><img alt=\"\" src=\"https://rdcnewsadvice.wpengine.com/wp-content/uploads/2013/12/real_estate_purchase_offer.jpg\" style=\"height:260px; width:400px\" /></p>\n', 'https://www.youtube.com/embed/TIK4CiEMdIA');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `seller_cell` varchar(255) NOT NULL,
  `seller_sms` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `seller_id`, `seller_name`, `seller_cell`, `seller_sms`) VALUES
(84, 94, 'George Hughes', '(978)886-8404', NULL),
(85, 85, 'Ho Sung Byun', '(914)413-3050', NULL),
(86, 86, 'Cathy', '(978)123-4567', 'on'),
(87, 87, 'Erwin', '978 - 815 - 6900', 'on'),
(90, 90, 'Adam', '(845) 737-4879', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `last_date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pass`, `last_date`, `status`) VALUES
(1, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '2017-08-05', 'admin'),
(2, 'manager@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', '2017-05-21', 'manager'),
(4, 'johnson@gmail.com', '79ab945544e5bc017a2317b6146ed3aa', '2017-05-21', 'seller'),
(5, 'EFrahlich@AndoverHomes.com', '6ed61d4b80bb0f81937b32418e98adca', '2017-05-21', 'agent'),
(65, 'james@gmail.com', '1ff8a7b5dc7a7d1f0ed65aaa29c04b1e', '2017-05-25', 'seller'),
(66, 'mike@gmail.com', '73278a4a86960eeb576a8fd4c9ec6997', '2017-05-25', 'seller'),
(67, 'guten@tag.com', '67d16d00201083a2b118dd5128dd6f59', '2017-05-25', 'seller'),
(68, 'email@gmail.com', 'e00da03b685a0dd18fb6a08af0923de0', '2017-05-27', 'seller'),
(69, 'Lillian@AndoverHomes.com', '0b8aff0438617c055eb55f0ba5d226fa', '2017-05-30', 'agent'),
(70, 'WAltavilla@AndoverHomes.com', '82161242827b703e6acf9c726942a1e4', '2017-05-30', 'agent'),
(71, 'ccim@AndoverHomes.com', '2a38a4a9316c49e5a833517c45d31070', '2017-05-30', 'agent'),
(72, 'CEggerts@AndoverHomes.com', 'b337e84de8752b27eda3a12363109e80', '2017-05-30', 'agent'),
(73, 'Ana@AndoverHomes.com', '8d34201a5b85900908db6cae92723617', '2017-05-30', 'agent'),
(74, 'MHurchik@AndoverHomes.com', '303ed4c69846ab36c2904d3ba8573050', '2017-05-30', 'agent'),
(75, 'TKoss@AndoverHomes.com', '90794e3b050f815354e3e29e977a88ab', '2017-05-30', 'agent'),
(76, 'MMaciulis@AndoverHomes.com', '6cdd60ea0045eb7a6ec44c54d29ed402', '2017-05-30', 'agent'),
(77, 'AMansi@AndoverHomes.com', 'cfecdb276f634854f3ef915e2e980c31', '2017-05-30', 'agent'),
(78, 'TMartel@AndoverHomes.com', '2bb232c0b13c774965ef8558f0fbd615', '2017-05-30', 'agent'),
(79, 'KMyers@AndoverHomes.com', '437d7d1d97917cd627a34a6a0fb41136', '2017-05-30', 'agent'),
(80, 'TRichards@AndoverHomes.com', '41ae36ecb9b3eee609d05b90c14222fb', '2017-05-30', 'agent'),
(81, 'CSantiago@AndoverHomes.com', 'c6e19e830859f2cb9f7c8f8cacb8d2a6', '2017-05-30', 'agent'),
(82, 'ZSun@AndoverHomes.com', '49182f81e6a13cf5eaa496d51fea6406', '2017-05-30', 'agent'),
(83, 'MZhou@AndoverHomes.com', 'a5cdd4aa0048b187f7182f1b9ce7a6a7', '2017-05-30', 'agent'),
(85, 'hosung.byun@gmail.com', 'efe937780e95574250dabe07151bdc23', '2017-05-30', 'seller'),
(86, 'clshimberg@hotmail.com', '0deb1c54814305ca9ad266f53bc82511', '2017-05-30', 'seller'),
(87, 'erwin@gmail.com', '8d7d8ee069cb0cbbf816bbb65d56947e', '2017-06-28', 'seller'),
(88, 'test@test.com', 'bf8229696f7a3bb4700cfddef19fa23f', '2017-06-23', 'seller'),
(90, 'adam@gmail.com', 'fc3cf452d3da8402bebb765225ce8c0e', '2017-08-02', 'seller'),
(94, 'george@gmail.com', '4e0928de075538c593fbdabb0c5ef2c3', '2017-08-04', 'seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `closing_steps`
--
ALTER TABLE `closing_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_gallery`
--
ALTER TABLE `listing_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_pdfs`
--
ALTER TABLE `listing_pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_pics`
--
ALTER TABLE `listing_pics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_steps`
--
ALTER TABLE `listing_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `closing_steps`
--
ALTER TABLE `closing_steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `listing_gallery`
--
ALTER TABLE `listing_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `listing_pdfs`
--
ALTER TABLE `listing_pdfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `listing_pics`
--
ALTER TABLE `listing_pics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `listing_steps`
--
ALTER TABLE `listing_steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
