-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 12:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE `basic_info` (
  `meal_id` int(11) NOT NULL,
  `recipe_name` varchar(100) NOT NULL,
  `img_url` varchar(250) NOT NULL,
  `prep_time` varchar(35) NOT NULL,
  `cook_time` varchar(35) NOT NULL,
  `total_time` varchar(11) NOT NULL,
  `servings` varchar(40) NOT NULL,
  `descript` varchar(1000) NOT NULL,
  `nutrition` varchar(500) NOT NULL,
  `notes` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_info`
--

INSERT INTO `basic_info` (`meal_id`, `recipe_name`, `img_url`, `prep_time`, `cook_time`, `total_time`, `servings`, `descript`, `nutrition`, `notes`) VALUES
(1, 'Roast Beef Sandwich', 'https://images.ctfassets.net/o19mhvm9a2cm/1RXJlPm27qSBvlckqm0ePl/34df50c716ad9552452ca54213e7d089/Website_RB.png', '5 mins', '5 mins', '10 mins', '1', 'A roast beef sandwich.', '250 calories', 'This is some notes that only i will see.'),
(5, 'Shit Sandwich', 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F44%2F2022%2F03%2F01%2Fcucumber-sandwich.jpg&q=60', '5 mins', '5 mins', '10 mins', '4', 'shitty titties', 'a sandwich', 'stuff here'),
(27, 'Creamy One Pot Pasta with Zucchini', 'https://www.simplyrecipes.com/thmb/CKi9MTVHfH2ucEHoMmsaYfUHxeY=/720x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/Simply-Recipes-Creamy-One-Pot-Pasta-with-Zucchini-LEAD-8-98d788600d4e4344a02785ad486aeba8.jpg', '5 mins', '25 mins', '30 mins', '6 to 8 ser', 'This 30-minute creamy pasta with jammy zucchini is your answer to peak summer weeknight cooking. ', '266 calories. 17g fat. 23g carbs. 6g protein.', 'none'),
(28, 'Fresh Corn Pasta', 'https://www.simplyrecipes.com/thmb/tWq_ctuTITlijUsIxOA4afikpxI=/720x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/Simply-Recipes-Creamy-Corn-Pasta_LEAD-2-52076d113d4f4fa2bdb656513f31c070.jpg', '15 mins', '15 mins', '30 mins', '2 to 3 servings', 'Sweet corn is front and center in this quick and easy recipe. Made with fresh corn, cream, garlic, and Parmesan, this simple creamy corn pasta is a weeknight win. ', '523 calories. 30g fat. 50g carbs. 14g protein.', NULL),
(29, 'Cedar Plank Salmon', 'https://www.simplyrecipes.com/thmb/jy2-QhFH_3SKUhWvkVhaP2FWI4Y=/720x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/Simply-Recipes-Cedar-Plank-Salmon-LEAD-07-efeefee21faa4f74b83105233f7d5d3b.jpg', '30 mins', '30 mins', '60 mins', '4 servings', 'Try this easy cedar plank salmon and you’ll understand why it’s the best way to grill fish!', '468 calories. 28g fat. 0g carbs. 50g protein.', '');

-- --------------------------------------------------------

--
-- Table structure for table `category_types`
--

CREATE TABLE `category_types` (
  `category_id` bigint(10) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_types`
--

INSERT INTO `category_types` (`category_id`, `category`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Dinner'),
(4, 'Snacks and Appetizers'),
(5, 'Chicken'),
(6, 'Beef'),
(7, 'Pork'),
(8, 'Seafood'),
(9, 'Vegetarian'),
(10, 'Side Dishes'),
(11, 'Desserts'),
(12, 'Drinks'),
(13, 'Soup, Stew, and Chili'),
(14, 'Barbeque'),
(15, 'Healthy'),
(16, 'Pasta and Noodles'),
(17, 'Salads'),
(18, 'American'),
(19, 'Asian'),
(20, 'European'),
(21, 'Mediterranean'),
(22, 'Indian'),
(23, 'Mexican');

-- --------------------------------------------------------

--
-- Table structure for table `directions`
--

CREATE TABLE `directions` (
  `id` bigint(20) NOT NULL,
  `meal_id` bigint(20) NOT NULL,
  `direction` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `directions`
--

INSERT INTO `directions` (`id`, `meal_id`, `direction`) VALUES
(1, 1, 'Set bread slices next to each other. Apply Mayo to one side, and mustard to the other.'),
(2, 1, 'Place lettuce down first. Place a slice of cheese on top of the lettuce. Place roast beef on top of the cheese. Place two slices of onion on top of the meat. Place two slices of tomatoes on next.'),
(3, 1, 'Place the slice of bread that does not have any sandwich materials on it on top of the bread with materials on it. Cut in half, and enjoy.'),
(21, 27, ' Cook the zucchini:   Heat the oil in a large heavy-bottomed pot or Dutch oven over medium-high heat. Add the zucchini and season with 1 teaspoon salt and 1/2 teaspoon black pepper. Cook the zucchini, stirring occasionally, until it expels liquid, the liquid cooks off, and the zucchini caramelizes into a jam-like, spreadable consistency, 10 to 12 minutes.   If you start to notice any browning at the bottom of your pot, reduce the heat to medium. Once jammy, transfer the zucchini into a medium bowl and set it aside.'),
(22, 27, ' Cook the pasta:   In the same pot (don’t worry about wiping off any browned bits or pieces of zucchini that might be left in the pot), add 3 1/4 cups water and bring it to a boil over high heat. Season the water with the remaining 1 1/2 teaspoons salt.   Once water is boiling, add the pasta and cream cheese, and reduce the heat to medium-high. Break up the cream cheese with the back of a wooden spoon to disperse throughout. It’s okay if the pasta isn’t completely submerged in liquid. Cook, stirring frequently until the pasta is al dente and liquid is reduced and creamy, 11 to 13 minutes. If all the moisture cooks off and the pasta is still undercooked, add a splash of water.'),
(23, 27, ' Add the zucchini back in:   Add the cooked zucchini, lemon zest, and lemon juice and cook until warmed through, 2 minutes. Add a splash of water to create a thin, glossy sauce, if needed. Season to taste with salt and pepper, if needed. Divide between bowls and top with toasted walnuts. Serve.  Though it’s best enjoyed immediately, you can always refrigerate leftovers in an airtight container for up to 3 days and reheat it in the microwave or in a saucepan with a splash of water. '),
(24, 28, 'Cook the pasta:\r\n\r\nBring a large pot of water to a boil over high heat and season generously with salt. Add the pasta, stir, and cook until al dente according to the package directions. Reserve a cup of pasta water just before draining. '),
(25, 28, 'Meanwhile, remove the corn form the cob:\r\n\r\nShuck the corn, discarding the husks and removing as much of the silks as possible.\r\n\r\nSet a large, shallow bowl in the sink. Hold a shucked ear of corn by the stalk end and position it upright with the tapered end steadied against the bottom of the bowl. Use a large knife to shave the corn kernels from the cob, working in long strips down towards the bottom of the bowl. \r\n\r\nOnce all the kernels are removed, run the back of the knife down the entire ear using the same motion. This will remove any creamy juice left behind on the cob which gives the pasta lots of flavor. Repeat with the remaining ears of corn. '),
(26, 28, 'Make the sauce:\r\n\r\nIn a large skillet, heat the olive oil over medium heat. Once hot, add the shallot and sauté until translucent, 1 to 2 minutes. Add the garlic and cook until fragrant, about 30 seconds.\r\n\r\nAdd the corn and their juices, 1/2 teaspoon salt, and the red pepper flakes. Stir. Add the white wine and simmer until most of it has cooked off, about 2 minutes.\r\n\r\nAdd the cream and bring to a low simmer, reducing the heat as needed. Cook until thickened, about 3 minutes. '),
(27, 28, 'Finish the sauce and toss with the pasta:\r\n\r\nAdd the Parmesan to the sauce a little at a time, stirring each time to ensure it melts. Add the parsley, reserving a small handful for garnish. Add the lemon juice and stir to combine.\r\n\r\nAdd the drained pasta and 1/3 cup of reserved pasta water to the sauce. Increase the heat to medium and toss continuously until all of the pasta is coated and the sauce is clinging to the pasta. If needed, add more pasta water, a tablespoon or so at a time, and keep tossing until you have a creamy sauce. '),
(28, 28, 'Garnish and serve:\r\n\r\nTaste the pasta, adding more salt and red pepper flakes, if needed. Spoon onto plates or into bowls and top with the remaining parsley. Serve immediately.\r\n\r\nThis pasta is best eaten fresh, but leftovers will keep in an airtight container for up to 3 days. Reheat gently in the microwave or in a nonstick skillet, adding a splash or 2 of water or cream to loosen the sauce. '),
(29, 29, 'Soak the cedar planks: \r\n\r\nSoak the cedar planks in water for at least 30 minutes. '),
(30, 29, 'Prepare the grill for two-zone cooking at medium heat, 350º to 450º F:\r\n\r\nFor a charcoal grill: Light the coals and once they ash over, place them on one half of the grill. Leave the other half without coals. \r\n\r\nFor a gas grill: Only light half of the burners set to medium heat, 350°F, and keep the other side off. '),
(31, 29, 'Grill the plank: \r\n\r\nTo maximize the scent of the cedar plank, grill it (without the salmon) over direct heat—right above the lit coals or burners—until grill marked and it starts to smolder, about one minute. Remove from the grill. '),
(32, 29, 'Prepare the salmon:\r\n\r\nPlace each salmon filet, skin side-down, on the marked side of the cedar plank. Evenly season the tops with lemon zest, dill, salt, and black pepper. '),
(33, 29, 'Grill the salmon: \r\n\r\nGrill the planked salmon over direct heat—right above the lit coals or burners—with the grill lid down, until the plank starts to smolder, 10 to 15 minutes. Then, slide the plank to indirect heat—where there is no coal, or the burners are turned off—and continue to cook with the grill lid on. \r\n\r\nBe sure to keep the lid on as much as possible throughout the cooking process. Cook until the salmon turns opaque and easily flakes with a fork or until the internal temperature of the salmon reads 135º F with an instant read thermometer. '),
(34, 29, 'Serve the salmon: \r\n\r\nTransfer the planked salmon onto a heatproof tray or platter, and serve. \r\n\r\nLeftovers will keep for 3 to 4 days in the fridge. I do not recommend freezing cooked salmon. Leftovers are great for making salmon cakes or to top salads!  ');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` bigint(20) NOT NULL,
  `meal_id` bigint(20) NOT NULL,
  `ingredient` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `meal_id`, `ingredient`) VALUES
(1, 1, '1 lb of roast beef'),
(2, 1, '1 loaf of bread'),
(3, 1, 'a bag of poo'),
(43, 27, '1/4 cup olive oil'),
(44, 27, '4 large or 5 medium zucchini, coarsely grated'),
(45, 27, '2 1/2 teaspoons kosher salt'),
(46, 27, '1/2 teaspoon ground black pepper'),
(47, 27, '3 1/4 cups of water'),
(48, 27, '1 lb dry rigatoni or penne pasta'),
(49, 27, '6 oz cream cheese, softened'),
(50, 27, '1 lemon, zested and juiced (about 2 tablespoons juice)'),
(51, 27, '1/4 cup chopped toasted walnuts'),
(52, 28, '8 ounces dry pasta, such as rigatoni, farfalle, or conchiglie '),
(53, 28, '3 ears fresh sweet corn '),
(54, 28, '2 tablespoons olive oil '),
(55, 28, '1 large shallot, finely chopped'),
(56, 28, '2 cloves garlic, minced'),
(57, 28, '3/4 teaspoon kosher salt, plus more for the pasta water and to taste'),
(58, 28, '1/4 teaspoon crushed red pepper flakes, or to taste'),
(59, 28, '1/4 cup dry white wine '),
(60, 28, '1/2 cup heavy cream'),
(61, 28, '1/2 cup freshly grated Parmesan cheese'),
(62, 28, '1 tablespoon fresh lemon juice'),
(63, 29, '4 (8-ounce) salmon filets, skin on '),
(64, 29, '2 teaspoons fresh lemon zest'),
(65, 29, '2 teaspoons chopped fresh dill'),
(66, 29, '1 teaspoon kosher salt'),
(67, 29, '1/2 teaspoon ground black pepper'),
(68, 29, '1 to 2 cedar wood grilling planks');

-- --------------------------------------------------------

--
-- Table structure for table `meal_categories`
--

CREATE TABLE `meal_categories` (
  `id` bigint(20) NOT NULL,
  `meal_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal_categories`
--

INSERT INTO `meal_categories` (`id`, `meal_id`, `category_id`) VALUES
(21, 27, 3),
(22, 27, 16),
(23, 28, 3),
(24, 28, 9),
(25, 28, 16),
(26, 29, 3),
(27, 29, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_info`
--
ALTER TABLE `basic_info`
  ADD PRIMARY KEY (`meal_id`);

--
-- Indexes for table `category_types`
--
ALTER TABLE `category_types`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_categories`
--
ALTER TABLE `meal_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_info`
--
ALTER TABLE `basic_info`
  MODIFY `meal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `category_types`
--
ALTER TABLE `category_types`
  MODIFY `category_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `directions`
--
ALTER TABLE `directions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `meal_categories`
--
ALTER TABLE `meal_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
