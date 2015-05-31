-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2015 at 03:31 AM
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
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cat_id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'BREAKFAST'),
(2, 'LUNCH'),
(3, 'DINNER'),
(4, 'PASTRY'),
(5, 'BEVERAGES');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
`dish_id` int(10) NOT NULL,
  `dish_name` varchar(150) NOT NULL,
  `dish_cat` int(11) NOT NULL,
  `dish_key` varchar(100) NOT NULL,
  `dish_num_serving` int(20) DEFAULT NULL,
  `dish_cook_time` varchar(50) DEFAULT NULL,
  `dish_ingredients` mediumtext NOT NULL,
  `dish_steps` mediumtext NOT NULL,
  `votes` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`dish_id`, `dish_name`, `dish_cat`, `dish_key`, `dish_num_serving`, `dish_cook_time`, `dish_ingredients`, `dish_steps`, `votes`) VALUES
(2, 'Warm Brussels Sprout Salad with Hazelnuts and Cranberries', 2, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 4),
(3, '1Tasty Tuna Burgers', 2, 'tuna', 4, '15mins', '1 can tuna, drained', 'Combine tuna, egg, bread crumbs, onion, celery, red bell pepper, mayonnaise, hot chili sauce, chili sauce, dill, salt, pepper, hot pepper sauce and Worcestershire sauce. Mix well. Shape into 4 patties (mixture will be very soft and delicate). Refrigerate for 30 minutes to make the patties easier to handle, if desired.', 1),
(4, 'Sausage Crescent Rolls', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(5, 'Baked Pancakes', 5, 'egg', 2, '30mins', '3 tablespoons butter', 'Preheat oven to 425 degrees F', 0),
(6, 'Tuna and Chicken', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(7, 'Hazelnuts and Cranberries', 1, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 2),
(8, 'lunchGarlic-Lemon Double Stuffed Chicken', 2, 'chicken', 8, '50mins', 'oil, for greasing pan', 'Preheat oven to 350 degrees F. Lightly coat a large, shallow baking dish with oil.', 1),
(9, 'Warm Brussels Sprout Salad with Hazelnuts and Cranberries', 2, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 0),
(10, 'Tasty Tuna Burgers', 3, 'tuna', 4, '30mins', '1 can tuna, drained', 'Combine tuna, egg, bread crumbs, onion, celery, red bell pepper, mayonnaise, hot chili sauce, chili sauce, dill, salt, pepper, hot pepper sauce and Worcestershire sauce. Mix well. Shape into 4 patties (mixture will be very soft and delicate). Refrigerate for 30 minutes to make the patties easier to handle, if desired.', 0),
(11, 'Sausage Crescent Rolls', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(12, 'Baked Pancakes', 5, 'egg', 2, '30mins', '3 tablespoons butter', 'Preheat oven to 425 degrees F', 0),
(13, 'Tuna and Chicken', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(15, 'Warm Brussels Sprout Salad with Hazelnuts and Cranberries', 2, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 0),
(17, 'Sausage Crescent Rolls', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(18, 'Baked Pancakes', 5, 'egg', 2, '30mins', '3 tablespoons butter', 'Preheat oven to 425 degrees F', 0),
(19, 'Tuna and Chicken', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(21, 'Warm Brussels Sprout Salad with Hazelnuts and Cranberries', 2, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 0),
(22, 'Tasty Tuna Burgers', 3, 'tuna', 4, '30mins', '1 can tuna, drained', 'Combine tuna, egg, bread crumbs, onion, celery, red bell pepper, mayonnaise, hot chili sauce, chili sauce, dill, salt, pepper, hot pepper sauce and Worcestershire sauce. Mix well. Shape into 4 patties (mixture will be very soft and delicate). Refrigerate for 30 minutes to make the patties easier to handle, if desired.', 0),
(23, 'Sausage Crescent Rolls', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(25, 'Tuna and Chicken', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(26, 'Hazelnuts and Cranberries', 1, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 0),
(27, 'Warm Brussels Sprout Salad with Hazelnuts and Cranberries', 2, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 0),
(28, 'Tasty Tuna Burgers', 3, 'tuna', 4, '30mins', '1 can tuna, drained', 'Combine tuna, egg, bread crumbs, onion, celery, red bell pepper, mayonnaise, hot chili sauce, chili sauce, dill, salt, pepper, hot pepper sauce and Worcestershire sauce. Mix well. Shape into 4 patties (mixture will be very soft and delicate). Refrigerate for 30 minutes to make the patties easier to handle, if desired.', 0),
(29, 'Sausage Crescent Rolls', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(30, 'Baked Pancakes', 5, 'egg', 2, '30mins', '3 tablespoons butter', 'Preheat oven to 425 degrees F', 0),
(31, 'Tuna and Chicken', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(33, 'Warm Brussels Sprout Salad with Hazelnuts and Cranberries', 2, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 0),
(34, 'Tasty Tuna Burgers', 3, 'tuna', 4, '30mins', '1 can tuna, drained', 'Combine tuna, egg, bread crumbs, onion, celery, red bell pepper, mayonnaise, hot chili sauce, chili sauce, dill, salt, pepper, hot pepper sauce and Worcestershire sauce. Mix well. Shape into 4 patties (mixture will be very soft and delicate). Refrigerate for 30 minutes to make the patties easier to handle, if desired.', 0),
(35, 'Sausage Crescent Rolls', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(36, 'Baked Pancakes', 5, 'egg', 2, '30mins', '3 tablespoons butter', 'Preheat oven to 425 degrees F', 0),
(37, 'Tuna and Chicken', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(39, 'Garlic-Lemon Double Stuffed Chicken', 1, 'chicken', 8, '50mins', 'oil, for greasing pan', 'Preheat oven to 350 degrees F. Lightly coat a large, shallow baking dish with oil.', 0),
(40, 'Warm Brussels Sprout Salad with Hazelnuts and Cranberries', 2, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 0),
(41, 'Tasty Tuna Burgers', 3, 'tuna', 4, '30mins', '1 can tuna, drained', 'Combine tuna, egg, bread crumbs, onion, celery, red bell pepper, mayonnaise, hot chili sauce, chili sauce, dill, salt, pepper, hot pepper sauce and Worcestershire sauce. Mix well. Shape into 4 patties (mixture will be very soft and delicate). Refrigerate for 30 minutes to make the patties easier to handle, if desired.', 0),
(42, 'Sausage Crescent Rolls', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(43, 'Baked Pancakes', 5, 'egg', 2, '30mins', '3 tablespoons butter', 'Preheat oven to 425 degrees F', 0),
(44, 'Tuna and Chicken', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(46, 'Garlic-Lemon Double Stuffed Chicken', 1, 'chicken', 8, '50mins', 'oil, for greasing pan', 'Preheat oven to 350 degrees F. Lightly coat a large, shallow baking dish with oil.', 0),
(47, 'Warm Brussels Sprout Salad with Hazelnuts and Cranberries', 2, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 0),
(48, 'Tasty Tuna Burgers', 3, 'tuna', 4, '30mins', '1 can tuna, drained', 'Combine tuna, egg, bread crumbs, onion, celery, red bell pepper, mayonnaise, hot chili sauce, chili sauce, dill, salt, pepper, hot pepper sauce and Worcestershire sauce. Mix well. Shape into 4 patties (mixture will be very soft and delicate). Refrigerate for 30 minutes to make the patties easier to handle, if desired.', 0),
(49, 'Sausage Crescent Rolls', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(50, 'Baked Pancakes', 5, 'egg', 2, '30mins', '3 tablespoons butter', 'Preheat oven to 425 degrees F', 0),
(51, 'Tuna and Chicken', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(53, 'Warm Brussels Sprout Salad with Hazelnuts and Cranberries', 2, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 0),
(54, 'Tasty Tuna Burgers', 3, 'tuna', 4, '30mins', '1 can tuna, drained', 'Combine tuna, egg, bread crumbs, onion, celery, red bell pepper, mayonnaise, hot chili sauce, chili sauce, dill, salt, pepper, hot pepper sauce and Worcestershire sauce. Mix well. Shape into 4 patties (mixture will be very soft and delicate). Refrigerate for 30 minutes to make the patties easier to handle, if desired.', 0),
(55, 'Sausage Crescent Rolls', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(56, 'Baked Pancakes', 5, 'egg', 2, '30mins', '3 tablespoons butter', 'Preheat oven to 425 degrees F', 0),
(57, 'Tuna and Chicken', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(59, 'Warm Brussels Sprout Salad with Hazelnuts and Cranberries', 2, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 0),
(63, 'Tuna and Chicken', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(65, 'Warm Brussels Sprout Salad with Hazelnuts and Cranberries', 2, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 0),
(71, 'Warm Brussels Sprout Salad with Hazelnuts and Cranberries', 2, 'Sprout', 6, '50mins', '1 pound Brussels sprouts, trimmed and quartered', 'Preheat oven to 425 degrees F', 0),
(73, 'Sausage Crescent Rolls', 4, 'Sausage', 20, '50mins', '1 pound fresh, ground spicy pork sausage', 'Preheat oven to 350 degrees F', 0),
(77, 'sdf', 1, 'asdf', 0, 'sdf', 'sdf', 'sd', 1),
(78, 'recipe name', 1, 'ingred', 8, '20min', 'whywhywhyingredients blah', '1.step\r\n2.step\r\n3.step', NULL),
(79, 'mylunch_yummy', 2, 'salmon', 1, '5min', 'many', 'simple', NULL),
(80, 'name for lunch', 2, 'argula', 2, '15mins', 'argula, baby spinach, pecan, cheese, balsamic vinegar', '1.rinse them\r\n2.mix them\r\n3. sauce with balsamic', NULL),
(81, 'test0412', 5, 'key', 3, '30', 'ddd', 'sssssimple', NULL),
(82, 'dinner test0412', 4, 'beef', 7, '1.5 hours', 'beef, anchovi, garlic, onion, herbs, salt', '1.step1\r\n2.step2\r\n3. step3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `top_recipes`
--

CREATE TABLE IF NOT EXISTS `top_recipes` (
  `dish_id` int(10) NOT NULL,
  `display_yes_no` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `top_recipes`
--

INSERT INTO `top_recipes` (`dish_id`, `display_yes_no`) VALUES
(4, 'N'),
(3, 'N');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
 ADD PRIMARY KEY (`dish_id`), ADD KEY `dish_cat` (`dish_cat`);

--
-- Indexes for table `top_recipes`
--
ALTER TABLE `top_recipes`
 ADD KEY `dish_id` (`dish_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
MODIFY `dish_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `top_recipes`
--
ALTER TABLE `top_recipes`
ADD CONSTRAINT `top_recipes_ibfk_1` FOREIGN KEY (`dish_id`) REFERENCES `recipes` (`dish_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
