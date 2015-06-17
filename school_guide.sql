-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 07:53 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_guide`
--

-- --------------------------------------------------------

--
-- Table structure for table `housing`
--

CREATE TABLE IF NOT EXISTS `housing` (
`id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `googlemap` varchar(500) DEFAULT NULL,
  `occupancy_date` date DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `housing`
--

INSERT INTO `housing` (`id`, `title`, `address`, `name`, `tel`, `email`, `googlemap`, `occupancy_date`, `status`, `img`, `description`) VALUES
(1, 'Humber College walking distance 5-10 min. ROOM/ & Bachlor Apt. Avilable.(416-744-8058.) FURNISHED.', ' 261 John Garland Blvd. Etobicoke, Ontario', 'Dell S', '416-744-8058', 'dell_s@gmail.com', NULL, '2015-06-14', '1', NULL, 'Call:-> Dell. (416) 744-8058 or Email: delruba@gmail.com \r\n*2, Lrg rooms available on main floor. (Rent from $500.& up/ + 1 Bachlor.Apt.$700.) \r\n* Free-> WiFi Internet & Utilities Includ.+ Furnished Rm.Chair/Table/Desk/Bed/Bookshelf/Cupboard Inclued.\r\n* Own washrooms, Large kitchen/. Refrigerators/Toster/MicrowaveOven/Stove & Washer/Dryer.\r\n* Lrg new Windows,Very bright home. \r\n * Home is perfectly cared by owner and keep clean home by cleaner.\r\n-> 5/10 min WALK to Humber College/Guelph University and groceries.\r\n-> 24 hour TTC bus stop at door (Wilson 96)\r\n-> NO smoking/Parties/Pets/Drugs.& No over night Visitors\r\n-> Certified by Toronto Fire Department. * (Excellent home for living & studying for Students)'),
(2, 'Furnished master bedroom upstairs in a student house with internet available from July 1st, 2015 ', '101 Mare Crescent Etobicoke,Ontario', 'Asit Basu', '416-675-2662 ', 'asit@gmail.com', NULL, '2015-06-18', '1', NULL, 'One very bright large bedroom with 2 beds, desk and chair available for clean, quiet and serious students – located 5 minutes away from the college and minute away from public transit, across from Woodbine Mall which has big departmental stores with food court and Fortino''s (big chain grocery store). This house has 1 full kitchen, living and dining area, 1.5 bathrooms, laundry, Hi-speed internet. Minute away from free shuttle bus to the college. Walkout to deck and backyard, overlooking Humber Arboretum and ravine. This room has large walk-in closet with large window. Current students are very mature and kept the house very clean. They are very quiet and do not invite people over the weekend. No smoking, no party, no pets and absolutely no overnight guests due to security reasons. Rent will be $700 per month for a single student and $400 per month each for two students. Parking will be extra. Last month deposit required.'),
(3, 'Walking Distance to Humber College Executive Town house 5 bedrooms with 4 bedroom available', 'Queen''s plate drive Etobicoke, Ontario', 'Mariusz Starosta', '657-098-2343', 'mariusz@gmai.com', NULL, '2015-06-30', '1', NULL, '5 bedroom 2000 square feet executive townhouse, Extra clean lovely home,designed for comfortable student living.This home combines function with flair in a spacious and graciously designed home.This townhome features the following, 3.5 baths/large eat-in kitchen/premium appliances/window coverings/laundry room on 2 nd floor w/washer/dryer,central vacuum system/central heat/air conditioning/2 nd private entrance at rear/patio set in a private back yard/a few pcs of furniture on main floor \r\nsuperbly maintained by landlord. Must be seen to be appreciated. '),
(4, '6 Rooms Available in Student Rental House - 1 min walk to Humber College ', '32 Woodsview', 'Gurdev Mahl', '416-786-9740', 'gurdev@gmail.com', NULL, '2015-06-19', '1', NULL, '6 Bedrooms Available in Student Rental House. 3 bedrooms upstairs, 1 on main floor, 2 in basement.\r\n\r\nRent ranges $375 - $550/month - available June 1st 2015\r\n\r\n1 minute walk to Humber College. Close to all major bus routes. Call Gurdev @ 416-786-9740 for more info.'),
(5, 'HOME BACKING OUT TO HUMBER COLLEGE AVAILABLE MAY 1, 2015. 1 MIN WALK TO CAMPUS. LIKE LIVING ON RES ', 'Woodsview Avenue Etobicoke, Ontario', 'Harry Harry', '416-816-2041', 'harry@humber.ca', NULL, '2015-06-28', '1', NULL, 'Whole 4+2 bedroom house available from May 1, 2015 - located less than 1 minute walk to campus. Like living on res.\r\nGroups of students are preferred.\r\n\r\nClean and Spacious House with covered deck in the backyard. The backyard is on Humber College and is right beside the bus stop and the crossing to go to Humber College.\r\n\r\n6 Bedrooms - 4 upstairs and 2 downstairs\r\n3 Washrooms (one on each floor)\r\nFamily Size Kitchen with fridge, stove, oven\r\nEntertainers'' backyard with covered deck\r\nLess than 1 minute WALK to Humber College\r\n\r\nUnlimited Internet, Electricity, Gas, Water, Garbage Removal and Appliances are included.\r\n\r\nPlease email or call 416-816-2041 to arrange a viewing before it is taken.\r\n\r\nOnly responsible group of students who know and trust each other already, currently living together or are wanting to live together like a family. We are renting the whole house, not individual rooms. we charge the full rent and how to split is tenants'' decision, above illustration is for comparison purposes only.\r\n\r\nTo view and rent this great house with awesome location, please email, text or call 416-816-2041.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(8) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `password`) VALUES
(1321, 'Derrick', 'derrick'),
(1322, 'Johnson', 'johnson'),
(1323, 'Jeesoo', 'jeesoo'),
(1324, 'Jaden', 'jaden'),
(1325, 'Tejinder', 'tejinder');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `housing`
--
ALTER TABLE `housing`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `housing`
--
ALTER TABLE `housing`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
