-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 08:14 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitnepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret_key` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `postby_id` int(6) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_verified` tinyint(1) DEFAULT '0',
  `verifiedby_id` int(6) DEFAULT '1',
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `secret_key`, `remarks`, `postby_id`, `created_at`, `is_verified`, `verifiedby_id`, `updated_at`, `status`) VALUES
(4, 'kriti', 'Prajapati', 'kriti12', 'kritiipraz@gmail.com', 'e77284e8b15558348de001103522dff4', NULL, NULL, 1, '2019-07-24 04:47:59', 1, 1, '2019-08-07 20:36:41', 1),
(5, 'maa', 'maa', 'maa', 'maa@gmail.com', '71a81e2afb8ac1659c61c04c9d638f68', NULL, NULL, 1, '2019-12-11 15:33:55', 0, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `adventure`
--

CREATE TABLE `adventure` (
  `id` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `adventure` varchar(30) NOT NULL,
  `description_adventure` text NOT NULL,
  `image_adventure` longblob NOT NULL,
  `time` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adventure`
--

INSERT INTO `adventure` (`id`, `city`, `adventure`, `description_adventure`, `image_adventure`, `time`) VALUES
(11, 'Pokhara', 'Paragliding', 'Pokhara is renowned worldwide for its mesmerizing paragliding site and without a doubt, makes for one of the best sites to enjoy the thrilling activity of paragliding. Upon taking a flight, you will witness towering mountain range on one side and a beautiful lake on the other. The view from the top will renderyou speechless. Imagine the thrill and excitement while gliding over the lake. To add to this, the glider lands just beside the lake which makes this whole experience more delightful. The Paragliding experience is unforgettable and is one of the most popular things to do in Pokhara.\n Difficulty Level: Easy \n Duration: 25 Minutes Approximately \n Price: Starts from INR 7000', 0x70617261676c6964696e672e6a7067, 1),
(12, 'Pokhara', 'Biking', 'Pokhara mountain bike adventure will show you all the trails which you might not seen before that will truly leave you inspired. However you can also go for the Kathmandu valley which is an equally adventurous spot.\n\r\n	 Pack your bags and get ready for some real adventure on road. Just ride on your bike and explore some of the unexplored places. You can get a chance to view the beautiful sunrises and sunsets which makes the experience even more beautiful for riders.\r\n\n\r\n	Best time to visit: February and April are one of the best.\r\n\n\r\n	Prices: Rs 6000\r\n\n\r\n	Difficulty Level: High, this is indeed a vary dangerous activity and should only be tried after an regress training.', 0x62696b696e672e6a7067, 1),
(13, 'Pokhara', 'Canyoning', 'If you are willing to step beyond the usual and indulge in some serious adventure in Pokhara, Canyoning is the way to go. The activity can be availed in Ghalel Village, just a ride of 1 hour away from Pokhara city center. In this activity, you get to climb down a canyon while a plunging stream of water makes things all the more challenging for you.The site offering this wet and wild adventure I surrounded with untouched forest area. The activity is organized and \r\n	managed by well-trained staff that will ensure you stay safe while confronting your fears of water and height.\r\n\r\n	Difficulty: Moderate\r\n\r\n	Price: Starts from INR 6,200 per person', 0x63616e6f79696e672e6a7067, 1),
(14, 'Pokhara', 'Handgliding', 'Have the thrilling experience of riding a plane yourself, be your own pilot with hand gliding. You can get an opportunity to experience the beautiful mountains and lakes like a free bird. If you have tried this one, we are sure that it will give you a chance to have a look at some of the forbidden places too.Sarangkot is the place for these flights to take off for all the hang gliding experiences. You can simply have a majestic view of monasteries,\r\n	 temples, and mountains.\r\n	Best time to visit: November and December.\r\n	Difficulty Level: High, weather is an important consideration for hang gliding and many professionals say that hang gliding is more about the attitude than the skill sets.\r\n	Prices: Rs 9000. PC: Trek Route', 0x48616e64676c6964696e672e6a7067, 1),
(15, 'Pokhara', 'Paramotor', 'Be the king of the skies and fly like a free bird with Paramotor in Pokhara. You can have the chance to see the magic of the natural mountains and lakes which makes it the best sport of Nepal. It is just the next version of paragliding and is a little tough too.\r\n	Difficulty Level: High, for your safety there is a trained professional who will accompany you.\r\nPrice: If you want a basic 5 day course it will be of Rs 30,000.\r\nBest months: October through May. PC: Adventure Sports Nepal', 0x706172616d6f746f722e6a7067, 1),
(16, 'Pokhara', 'Skydiving', 'Get ready to jump from the height of 13,000 feet to one of the most beautiful landscapes you will ever see. Skydiving is a thrilling experience that will make your heart beat faster and at the same time will leave you amazed while you fly above the clouds and fall into the lap of nature. The whole experience is captured via a GoPro so that you can relive the whole thrilling adventure again. The drop zone is at Pame Lauruk, wide grassland surrounded by hills which is just 11 km northward from the emerald lake Phewa. Skydiving is a wonderful treat that you can give to yourself when you visit Pokhara to keep your adrenaline rushing.\r\nDifficulty: High\r\nDuration: No information\r\nPrice: Tandem jump starts from INR 25,000 whereas solo jump starts from INR 10,500. PC: Skydive High', 0x736b79646976696e672e6a7067, 1),
(17, 'Pokhara', 'Day Hike', 'Escape and get away from the hectic tourist crowd and marvel at the tranquility of nature all around you.This 6 hours hike is recreational and a refreshing change from city life.The hike around Pokhara will offer you scenic views of quaint authentic village lifestyles and sprawling forests.Enjoy the breathtaking beauty of 3 eight-thousand clear lakes, and vast landscapes. Delight in a delicious lunch. Continue hiking and cover a distance of 15 to 20 kms. This tour is a customized tour and can be availed at your convenience. PC: ecotrek', 0x7472656b2e6a7067, 1),
(18, 'Pokhara', 'Kayaking', 'Pokhara is a perfect place to enjoy Kayaking in warm and scenic Seti River. The surrounding aura and the beauty of the valley Pokhara makes the whole experience stunning. Enjoy your day kayaking amidst the green valley, beautiful hills, cascading waterfalls, suspension brides and white sandy beach in the volatile white waters of Seti. This adventurous and exciting ride in the middle of the river will give you the right dose of thrill. During kayaking, you will also come across various species of birds alongside the river. This is a perfect adventure for someone willing to taste some action in the lap of nature.\r\n	Difficulty: Easy to Moderate\r\n	Duration: 90 Minutes\r\n	Price: Starts from INR 4200 . PC: Unsplash', 0x6b6179616b696e672e6a7067, 1),
(19, 'Pokhara', 'Stand Up Paddle-Boarding', 'If you are given a chance to paddle in the ocean all by yourself, wouldnâ€™t it be exciting? Although it takes a little bit of exercising and muscle pull but you wouldnâ€™t realize it as you will be totally absorbed in the amazing adventurous ride.Phewa Tal Lake will be an ideal location to try the enjoying ride of Stand-up paddle boarding.\r\n	Best time to do: May and June is the best time for this sport.\r\nDifficulty Level: High, you might find an initial level difficulty to balance the stand up paddle.\r\nPrices: Rs 4500. PC: Unsplash', 0x70616464656c2e6a7067, 1),
(20, 'Pokhara', 'Zip Flyer', 'Zip Flyer in Pokhara is undeniably one of the most extreme zip lines in the whole wide world. It is the longest, the tallest and the steepest zipline with a length of 1.8km, an incline of 56 degrees and a vertical drop of 600 meters. You will be taking a flight at a speed of 120 km per hour above the verdant vegetation and lush green forest and in front of you will be the snow clad towering mountains of the Himalayas. This adventurous ride will surely give you lifelong memories. It is among the best things to do in Pokhara that one should not miss out on.\r\n	Difficulty: Easy\r\n	Duration: 2 Minutes\r\n	Price: Starts from INR 5200. PC: Unsplash', 0x7a69702e6a7067, 1),
(21, 'Pokhara', 'Trekking', '	Trekking in Pokhara is not just fun but extremely thrilling too. Pokhara has come up with some of the most beautiful treks which has a culmination of both adventure with some jaw dropping and awe inspiring scenic beauties too. The treks are quite beautifully adorned with rich flora and fauna which just adds to the beauty of the trek. Some of the best terrains for trekking would be Ulleri, Ghorepani, Poon Hills, Tadapani and Chomrung are some of the popular choices for trekking.\r\n	Best months to visit: March to June and October to November are some of the best months for trekking.\r\n	Difficulty Level: High, although one has to be physically fit to complete the trek. PC: Pokhara trek ', 0x68696b652e6a7067, 2),
(22, 'Pokhara', 'Trekking from Pokhara to Ghand', 'An embodiment of the true culture of Nepal is reflected in this trek. Ghandruk, one of the most beautiful villages in Nepal opens its arms and welcomes you to a world where you can truly discover the beauty of this small, mountainous, landlocked country. The trek entices you with its rich views and culture. This short trek offers an introduction to trekking and opens you to the exotic beauty of Nepal. The sacred mountain trek is beautiful and takes you through the ornate village of Landruk, while giving you a chance to discover the conservation work being carried out at this place.\r\n	Location: Pokhara.\r\n	Things to keep in mind:This trek is for conservation and eco-friendly people. It is recommended that you donâ€™t bring anything to the trek which can lead to disturbances in the ecology of this place. Carry reusable, recyclable items and sunscreen. PC: HFL.travel', 0x6c616e6472756b2e6a7067, 2),
(23, 'Pokhara', 'Ultralight aircraft', 'Imagine flying in an ultralight aircraft soaring through the clouds and savouring a birdâ€™s eye view of the Pokhara Valley. During the flight, the views of snow clad mountain ranges like Annapurna, Machhapuchchhre, Manaslu, and Dhaulagiri etc. can be witnessed from a close distance which will astonish you. The glimpses of green lush valley, verdant meadows, dense forests, quaint villages of Nepal and the scenic Lake Phewa are a treat for your eyes. This thrilling activity is once in a lifetime experience and you will cherish these moments forever.\r\n	Difficulty: Easy\r\n	Duration: The duration of the flight varies from 15 minutes to 90 minutes depending upon the package you choose.\r\n	Price: Starts from INR 7500 PC: Nepal Travel Adventure', 0x756c7472616c696768742e6a7067, 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `link1` text NOT NULL,
  `link2` text NOT NULL,
  `hits` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `link1`, `link2`, `hits`, `created_at`) VALUES
(1, 'POKHARA', 'attraction1.php', 'attraction2.php', 4, '2019-12-14 04:49:25'),
(2, 'KATHMANDU', 'attraction1.php', 'attraction2.php', 2, '2019-12-14 05:20:29'),
(3, 'DHARAN', 'attraction1.php', 'attraction2.php', 1, '2019-12-14 07:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `id` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hits` bigint(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `image` longblob NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event`, `description`, `image`, `link`) VALUES
(5, 'food', 'Set against the backdrop of the Himalayas, the people of Nepal have many different backgrounds and ethnicities, and this multitude of influences is reflected\r\n within the countryâ€™s cuisine.Nepalise Cuisine combines a range of ingredients, techniques and characteristics from its neighboring countrie,s with its own \r\ngastronomic history.\r\nny time is momo time. Momos are traditional dumplings that can be found in remote tea houses and with equal Ã©lan at high end restaurants. From freshly caught river\r\n fish to dried smoky meats and yak cheese, from freshly grown garden vegetables and herbs to crunchy mountain apples, from home brewed spirits to the beautiful \r\nselection of teas, thereâ€™s a whole lot waiting for your palate to discover.', 0x666f6f642e706e67, 'food.php'),
(6, 'festival', 'Nepal is a diverse country with a varying landscape, rich bio-diversity and diverse culture of the people residing in it. Each community holds their unique cultures \r\nand traditions which they have been following for centuries. Each of them has their own set of beliefs and festivals to celebrate.\r\n\r\nNo wonder Nepal is called the land of festivals. Every day is a day of celebration for one or the other community. The best part of all is oneâ€™s pride in oneâ€™s own \r\nculture and respect for the othersâ€™. This is why these numerous cultures and festivals are harmoniously coexisting in Nepal.', 0x666573746976616c2e706e67, 'festival.php'),
(7, 'mountaineering', 'Since ancient times, people have viewed mountain peaks as towering objects of myth, spiritual inspiration, and romantic beauty.\r\nWith eight of the highest peaks in the world, Nepal has been the focus of some of the most outstanding achievements in the world of mountaineering. For many decades\r\n the persevering icy peaks.From the highest mountains in the world to amazing trekking trails, mountaineers, trekkers and adventurers seek out the Himalayas every year during climbing season.\r\n Nepal also offers some of the best white water adventures â€“ rafting and kayaking on thrilling waters and gentle rapids. Dirt biking, skydiving, Asiaâ€™s second\r\n highest bungee jump, the worldâ€™s highest hotel and high altitude races make the country one of the most sought after destinations for an adrenaline rush.', 0x6d6f756e7461696e2e706e67, 'adventures.php'),
(8, 'jungle safari', 'Chitwan National Park, Bardia National Park along with 11 other national parks in Nepal are rich in different kind of flora and wildlife, birds, such as the rare\r\n great one horned rhinoceros, several species of deer, bear leopard dolphin, crocodile, birds, tiger etc. living in this park in their natural habitat. The parks\r\n are very popular for elephant safari, dugout canoeing, nature walk, bird watching, jungle excursion and visit to the village of local tribes called Tharu.', 0x6164762e706e67, '');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `hotel` varchar(30) NOT NULL,
  `image_hotel` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `city`, `hotel`, `image_hotel`) VALUES
(25, 'pokhara', 'backpacher', 0x6261636b7061636865722e6a7067),
(26, 'pokhara', 'garden', 0x67617264656e2e6a7067),
(27, 'pokhara', 'gaurisankar', 0x676175726973616e6b61722e6a7067),
(28, 'pokhara', 'greenpeacelodge', 0x677265656e70656163656c6f6467652e6a7067),
(29, 'pokhara', 'hotelblossom', 0x686f74656c626c6f6f736d2e6a7067),
(30, 'pokhara', 'kiwi', 0x6b6977692e6a7067),
(31, 'pokhara', 'zaran', 0x7a6172616e2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `description_place` text NOT NULL,
  `image_place` longblob NOT NULL,
  `link_place` text NOT NULL,
  `time` int(30) NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `city`, `place`, `description_place`, `image_place`, `link_place`, `time`, `hits`) VALUES
(12, 'pokhara', 'phewa', 'The second largest lake in Nepal is a thing of beauty indeed. The focal point for any dreamy traveller, the lake is hugged by lush forests from all around. On a clear day, the majestic Annapurna is clearly reflected on the lakeï¿½s mirror surface.Many people walk or cycle around the lakeshore the trek up to the', 0x70686577612e6a7067, 'phewa.php', 1, 0),
(13, 'pokhara', 'davis fall', 'Named after an overzealous Swiss couple who as legend has it, subsequently drowned in its waters, Patale Chhango as the locals call it is a gorgeous waterfall that finds its way through tunnels and crevices. It forms an underground tunnel after reaching the bottom from its height of 500 meters. It runs 100 feet below ground level. Specially thunderous in the monsoons, be prepared for a deafening sound and a roaring cascade if youâ€™re going to visit this in all its glory.', 0x64617669732e6a7067, 'davis.php', 1, 0),
(14, 'pokhara', 'poon hill', 'Breathtaking views and spectacular scenery awaits you when you reach atop Poon Hill. In most countries, Poon Hill would be called a mountain, but here in the Himalayas it is certainly a hill. Poon Hill is one of the most famous viewpoints in the world and in Nepal, it is probably the second most famous viewpoints after Kala Pattar.', 0x706f6f6e2e6a7067, 'poon.php', 2, 0),
(15, 'pokhara', 'mahendra gufa', 'Mahendra cave is one of the most visited tourist attractions of Pokhara. It is located in about 10 minutes drive from the heart of Pokhara city in the place named Batulechaur. The name Mahendra Cave is given after the name of Late King of Nepal Mahendra Bir Bikram Shah Dev. The cave is rich in variety of rocks especially limestone and the rocks sparkle when light strikes on it. The stone that is dripping from the roof and covering the cave floor comes alive under the beams of the flashlights and increases the excitement of this dark adventure.', 0x6d6168656e6472612e6a7067, 'mahendra gufa.php', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `verifiedby_id` (`verifiedby_id`),
  ADD KEY `postby_id` (`postby_id`);

--
-- Indexes for table `adventure`
--
ALTER TABLE `adventure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `adventure`
--
ALTER TABLE `adventure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `count`
--
ALTER TABLE `count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
