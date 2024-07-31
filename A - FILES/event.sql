-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:1111
-- Generation Time: Apr 03, 2024 at 09:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(30) NOT NULL,
  `u_lname` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_contact` bigint(11) NOT NULL,
  `u_adddress` varchar(50) NOT NULL,
  `e_state` varchar(30) NOT NULL,
  `e_city` varchar(30) NOT NULL,
  `e_area` varchar(30) NOT NULL,
  `e_place` varchar(30) NOT NULL,
  `e_date` date NOT NULL,
  `e_time` varchar(20) NOT NULL,
  `e_rprice` int(10) NOT NULL,
  `e_dectype` varchar(20) NOT NULL,
  `e_memnum` varchar(50) NOT NULL,
  `e_decprice` int(20) NOT NULL,
  `e_plan` varchar(50) NOT NULL,
  `e_food` varchar(20) NOT NULL,
  `em_name` varchar(30) NOT NULL,
  `em_email` varchar(50) NOT NULL,
  `em_contact` bigint(11) NOT NULL,
  `em_place` varchar(30) NOT NULL,
  `em_rprice` int(10) NOT NULL,
  `em_dprice` int(10) NOT NULL,
  `em_tprice` int(10) NOT NULL,
  `u_discount` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`u_id`, `u_fname`, `u_lname`, `u_email`, `u_contact`, `u_adddress`, `e_state`, `e_city`, `e_area`, `e_place`, `e_date`, `e_time`, `e_rprice`, `e_dectype`, `e_memnum`, `e_decprice`, `e_plan`, `e_food`, `em_name`, `em_email`, `em_contact`, `em_place`, `em_rprice`, `em_dprice`, `em_tprice`, `u_discount`, `created_at`) VALUES
(131, 'anant', 'soni', 'mranantsoni@gmail.com', 8956239685, 'test 1', 'Gujarat', 'Ahmedabad', 'Bapunagar', 'Bapunagar-Hotel', '2024-04-03', '6:00 To 12:00 AM', 55000, 'Normal', 'Around 100 To 250', 5000, 'Birthday Party', 'Veg', 'Anant Soni', 'anantsoni123@gmail.com', 8140591020, 'B-39 Avadh circle', 55000, 5000, 30000, '5%', '2024-04-02 18:58:43'),
(132, 'anant', 'soni', 'mranantsoni@gmail.com', 8956239685, 'test 2', 'Gujarat', 'Ahmedabad', 'Bapunagar', 'Bapunagar-Hotel', '2024-04-03', '12:00 To 6:00 PM', 55000, 'Normal', 'Around 100 To 250', 5000, 'Birthday Party', 'Veg', 'Anant Soni', 'anantsoni123@gmail.com', 8140591020, 'B-39 Avadh circle', 55000, 5000, 30000, '10%', '2024-04-02 19:03:15'),
(133, 'anant', 'soni', 'mranantsoni@gmail.com', 8956239685, 'test 3', 'Gujarat', 'Ahmedabad', 'Bapunagar', 'Bapunagar-Hotel', '2024-04-03', '6:00 To 12:00 PM', 55000, 'Normal', 'Around 100 To 250', 5000, 'Birthday Party', 'Veg', 'Anant Soni', 'anantsoni123@gmail.com', 8140591020, 'B-39 Avadh circle', 55000, 5000, 30000, '15%', '2024-04-02 19:05:48'),
(134, 'anant', 'soni', 'mranantsoni@gmail.com', 8956239685, 'test 4', 'Gujarat', 'Ahmedabad', 'Bapunagar', 'Bapunagar-Hotel', '2024-04-03', '12:00 To 6:00 AM', 55000, 'Normal', 'Around 100 To 250', 5000, 'Birthday Party', 'Veg', 'Anant Soni', 'anantsoni123@gmail.com', 8140591020, 'B-39 Avadh circle', 55000, 5000, 30000, '20%', '2024-04-02 19:06:31'),
(139, 'anant', 'soni', 'mranantsoni@gmail.com', 8956239685, 'Adajan, Surat', 'Gujarat', 'Surat', 'Adajan', 'Adajan-Hotel', '2024-04-04', '6:00 To 12:00 AM', 59000, 'Medium', 'Around 100 To 250', 5500, 'Birthday Party', 'Veg', 'Pranav Khurana', 'pranavkhurana123@gmail.com', 8114663579, '10J-101 Jovial Jungle Junction', 59000, 5500, 32250, '5%', '2024-04-03 11:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `emp_details`
--

CREATE TABLE `emp_details` (
  `em_id` int(11) NOT NULL,
  `em_name` varchar(30) NOT NULL,
  `em_email` varchar(30) NOT NULL,
  `em_contact` bigint(11) NOT NULL,
  `em_location` varchar(50) NOT NULL,
  `em_no` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `emp_details`
--

INSERT INTO `emp_details` (`em_id`, `em_name`, `em_email`, `em_contact`, `em_location`, `em_no`) VALUES
(1, 'Anant Soni', 'anantsoni123@gmail.com', 8140591020, 'B-39 Avadh circle', 1),
(2, 'Aditya Sharma', 'adityasharma123@gmail.com', 7910220455, 'A-101 Skyview Residences', 2),
(3, 'Akash Patel', 'akashpatel123@gmail.com', 7735210480, '2B-303 Green Grove Apartments', 3),
(4, 'Aman Verma', 'amanverma123@gmail.com', 8901532785, 'C-405 Tranquil Terrace', 4),
(5, 'Amit Singh', 'amitsingh123@gmail.com', 7237059380, 'D-202 Harbor Heights Condos', 5),
(6, 'Aniket Mishra', 'aniketmishra123@gmail.com', 8418745659, '5E-506 Serene Springs Suites', 6),
(7, 'Anirudh Reddy', 'anirudhreddy123@gmail.com', 8740995629, 'F-303 Whispering Pines Retreat', 7),
(8, 'Anuj Kapoor', 'anujkapoor123@gmail.com', 8198341330, 'G-404 Sapphire Sands Residency', 8),
(9, 'Arjun Khanna', 'arjunkhanna123@gmail.com', 8886014977, '8H-707 Meadow Mist Manor', 9),
(10, 'Ashish Joshi', 'ashishjoshi123@gmail.com', 8586957584, 'I-105 Lakeside Haven', 10),
(11, 'Ayush Gupta', 'ayushgupta123@gmail.com', 7957477052, 'J-204 Radiant Ridge Retreat', 11),
(12, 'Bharat Patel', 'bharatkumar123@gmail.com', 7996631115, 'K-303 Enchanted Echo Estates', 12),
(13, 'Chirag Rawat', 'chiragrawat123@gmail.com', 9271970170, 'L-404 Golden Glade Getaway', 13),
(14, 'Deepak Choudhury', 'deepakchoudhury123@gmail.com', 9239152852, '13M-505 Sunset Springs Sanctuary', 14),
(15, 'Devang Desai', 'devangdesai123@gmail.com', 8362002098, 'N-101 Velvet Valley Villas', 15),
(16, 'Dheeraj Yadav', 'dheerajyadav123@gmail.com', 9948097047, 'O-202 Crystal Creek Chalet', 16),
(17, 'Gaurav Malhotra', 'gauravmalhotra123@gmail.com', 9532902638, '16P-303 Majestic Mountain Mansion', 17),
(18, 'Gautam Bhatia', 'gautambhatia123@gmail.com', 7637158601, 'Q-404 Tranquility Towers', 18),
(19, 'Gopal Mehta', 'gopalmehta123@gmail.com', 9247795460, 'R-505 Starlight Springs Suites', 19),
(20, 'Harsh Shah', 'harshshah123@gmail.com', 7367395547, '19S-606 Secret Garden Stay', 20),
(21, 'Himanshu Saini', 'himanshusaini123@gmail.com', 7117817048, 'T-101 Azure Acres Apartments', 21),
(22, 'Ishaan Sharma', 'ishaansharma123@gmail.com', 9666663564, 'U-202 Urban Oasis Residences', 22),
(23, 'Jatin Thakur', 'jatinthakur123@gmail.com', 7238181853, 'V-303 Velvet Vista Villas', 23),
(24, 'Kunal Kapoor', 'kunalkapoor123@gmail.com', 7393243601, 'W-404 Willow Wood Wonderland', 24),
(25, 'Lokesh Sharma', 'lokeshsharma123@gmail.com', 7194671906, '24X-505 Xenon Xanadu Retreat', 25),
(26, 'Manish Agarwal', 'manishagarwal123@gmail.com', 8732053606, 'Y-606 Yonder Yucca Yards', 26),
(27, 'Mayank Arora', 'mayankarora123@gmail.com', 7251091057, '26Z-707 Zenith Zen Gardens', 27),
(28, 'Mohit Jain', 'mohitjain123@gmail.com', 7671712972, '1A-101 Alpha Acre Apartments', 28),
(29, 'Mukesh Kumar', 'mukeshkumar123@gmail.com', 7920140705, '2B-202 Beta Bliss Boutique', 29),
(30, 'Naman Gupta', 'namangupta123@gmail.com', 9860751739, '3C-303 Gamma Grove Getaway', 30),
(31, 'Naresh Yadav', 'nareshyadav123@gmail.com', 8354505780, '4D-404 Delta Dawn Dwellings', 31),
(32, 'Nikhil Ahuja', 'nikhilahuja123@gmail.com', 8110682394, '5E-505 Echo Eden Estates', 32),
(33, 'Omkar Reddy', 'omkarreddy123@gmail.com', 8961319625, '6F-606 Zephyr Zest Zions', 33),
(34, 'Pankaj Verma', 'pankajverma123@gmail.com', 9184279520, '7G-707 Glittering Galaxy Getaway', 34),
(35, 'Parth Patel', 'parthpatel123@gmail.com', 9854686788, '8H-808 Harmony Haven Hall', 35),
(36, 'Pradeep Joshi', 'pradeepjoshi123@gmail.com', 7658979880, '9I-909 Ivory Isle Inn', 36),
(37, 'Pranav Khurana', 'pranavkhurana123@gmail.com', 8114663579, '10J-101 Jovial Jungle Junction', 37),
(38, 'Rahul Mishra', 'rahulmishra123@gmail.com', 7607118288, '11K-202 Kaleidoscope Kingdom', 38),
(39, 'Rajat Sharma', 'rajatsharma123@gmail.com', 8566360729, '12L-303 Luminous Lake Lodge', 39),
(40, 'Rajeev Kumar', 'rajeevkumar123@gmail.com', 8291656230, '13M-404 Mirage Moonlight Manor', 40),
(41, 'Rishi Kapoor', 'rishikapoor123@gmail.com', 7239423088, '14N-505 Nebula Nirvana Nook', 41),
(42, 'Rohit Singh', 'rohitsingh123@gmail.com', 8466045732, '15O-606 Oasis Overlook', 42),
(43, 'Sachin Bansal', 'sachinbansal123@gmail.com', 7325498726, '16P-707 Pristine Peak Plaza', 43),
(44, 'Sameer Sharma', 'sameersharma123@gmail.com', 8377440053, '17Q-808 Quasar Quest Quarters', 44),
(45, 'Sandeep Tiwari', 'sandeeptiwari123@gmail.com', 8948784338, '18R-909 Radiant Rainbow Retreat', 45),
(46, 'Sarthak Gupta', 'sarthakgupta123@gmail.com', 8368662781, '19S-101 Solar Serenity Suites', 46),
(47, 'Shubham Arora', 'shubhamarora123@gmail.com', 8214668645, '20T-202 Twilight Terrace Towers', 47),
(48, 'Siddharth Khanna', 'siddharthkhanna123@gmail.com', 9173734641, '21U-303 Urban Utopia Units', 48),
(49, 'Sumit Choudhury', 'sumitchoudhury123@gmail.com', 9152526662, '22V-404 Vibrant Vista Villas', 49),
(50, 'Sushant Mehta', 'sushantmehta123@gmail.com', 9334001862, '23W-505 Whispering Willow Wonderland', 50),
(51, 'Tarun Malhotra', 'tarunmalhotra123@gmail.com', 8969993928, '24X-606 Xenial Xanadu Expanse', 51),
(52, 'Uday Verma', 'udayverma123@gmail.com', 8361812343, '25Y-707 Yonder Yew Yards', 52),
(53, 'Varun Bhatia', 'varunbhatia123@gmail.com', 7228747436, '26Z-808 Zenith Zen Zephyr', 53),
(54, 'Vicky Patel', 'vickypatel123@gmail.com', 9921954444, '1A-909 Astral Atrium Abode', 54),
(55, 'Vikas Yadav', 'vikasyadav123@gmail.com', 8116697253, '2B-101 Beacon Breeze Boutique', 55),
(56, 'Vishal Thakur', 'vishalthakur123@gmail.com', 9118780087, '3C-202 Celestial Cove Condos', 56),
(57, 'Vivek Choudhury', 'vivekchoudhury123@gmail.com', 7647302899, '4D-303 Dazzling Dawn Dwellings', 57),
(58, 'Yash Saini', 'yashsaini123@gmail.com', 8177594595, '5E-404 Enchanted Echo Enclave', 58),
(59, 'Yuvraj Patel', 'yuvrajkumar123@gmail.com', 8449682385, '6F-505 Fabled Forest Farms', 59),
(60, 'Abhinav Sharma', 'abhinavsharma123@gmail.com', 7450537330, '7G-606 Grand Galaxy Gardens', 60),
(61, 'Adarsh Kapoor', 'adarshkapoor123@gmail.com', 9375996529, '8H-707 Haven Heights Hall', 61),
(62, 'Ajay Singh', 'ajaysingh123@gmail.com', 8101412751, '9I-808 Infinite Isle Inn', 62),
(63, 'Akhil Reddy', 'akhilreddy123@gmail.com', 8667933800, '30J-909 Jubilant Jungle Junction', 63),
(64, 'Amol Joshi', 'amoljoshi123@gmail.com', 9121542084, '31K-101 Keystone Kingdom', 64),
(65, 'Anand Verma', 'anandverma123@gmail.com', 9152130491, '32L-202 Lustrous Lake Lodge', 65),
(66, 'Ankit Agarwal', 'ankitagarwal123@gmail.com', 9653113402, '33M-303 Mystic Moonlight Mansion', 66),
(67, 'Anmol Arora', 'anmolarora123@gmail.com', 8174841358, '34N-404 Nectar Nirvana Niche', 67),
(68, 'Ashwin Kumar', 'ashwinkumar123@gmail.com', 9289857210, '35O-505 Opulent Oasis Overlook', 68),
(69, 'Ayush Thakur', 'ayushthakur123@gmail.com', 8138442859, '36P-606 Panoramic Peak Plaza', 69),
(70, 'Bhavesh Sharma', 'bhaveshsharma123@gmail.com', 9412563503, '37Q-707 Quaint Quest Quarters', 70),
(71, 'Charan Singh', 'charansingh123@gmail.com', 8141082331, '38R-808 Rainbow Retreat Residency', 71),
(72, 'Darshan Patel', 'darshanpatel123@gmail.com', 8714739933, '39S-909 Solar Serenity Suites', 72),
(73, 'Deepesh Verma', 'deepeshverma123@gmail.com', 7404593952, '40T-101 Tranquil Terrace Towers', 73),
(74, 'Divyansh Khanna', 'divyanshkhanna123@gmail.com', 8621095495, '41U-202 Utopian Urban Units', 74),
(75, 'Gagan Malhotra', 'gaganmalhotra123@gmail.com', 9427137684, '42V-303 Velvet Vista Villas', 75),
(76, 'Ganesh Yadav', 'ganeshyadav123@gmail.com', 8431839840, '43W-404 Whispering Willow Wonderland', 76),
(77, 'Gaurav Thakur', 'gauravthakur123@gmail.com', 7339556802, '44X-505 Xenial Xanadu Expanse', 77),
(78, 'Govind Saini', 'govindsaini123@gmail.com', 8304215503, '45Y-606 Yonder Yew Yards', 78),
(79, 'Gurpreet Kapoor', 'gurpreetkapoor123@gmail.com', 9833106289, '46Z-707 Zenith Zen Zephyr', 79),
(80, 'Hitesh Choudhury', 'hiteshchoudhury123@gmail.com', 9611006856, '47A-808 Aurora Atrium Abode', 80),
(81, 'Jagdish Kumar', 'jagdishkumar123@gmail.com', 8991028766, '48B-909 Blissful Breeze Boutique', 81),
(82, 'Jitendra Sharma', 'jitendrasharma123@gmail.com', 8616784730, '49C-101 Celestial Cove Condos', 82),
(83, 'Jugal Bansal', 'jugalbansal123@gmail.com', 8408079046, '50D-202 Dazzling Dawn Dwellings', 83),
(84, 'Kamal Verma', 'kamalverma123@gmail.com', 8511043344, '51E-303 Enchanted Echo Enclave', 84),
(85, 'Karan Khurana', 'karankhurana123@gmail.com', 8643393403, '52F-404 Fabled Forest Farms', 85),
(86, 'Krish Kapoor', 'krishkapoor123@gmail.com', 8650445162, '53G-505 Grand Galaxy Gardens', 86),
(87, 'Kunal Arora', 'kunalarora123@gmail.com', 9675807763, '54H-606 Haven Heights Hall', 87),
(88, 'Lokesh Yadav', 'lokeshyadav123@gmail.com', 9674041717, '55I-707 Infinite Isle Inn', 88),
(89, 'Manish Thakur', 'manishthakur123@gmail.com', 8691591272, '56J-808 Jubilant Jungle Junction', 89),
(90, 'Mayur Bhatia', 'mayurbhatia123@gmail.com', 7647264478, '57K-909 Keystone Kingdom', 90),
(91, 'Mohit Choudhury', 'mohitchoudhury123@gmail.com', 7410250709, '58L-101 Lustrous Lake Lodge', 91),
(92, 'Mukul Sharma', 'mukulsharma123@gmail.com', 8254400360, '59M-202 Mystic Moonlight Mansion', 92),
(93, 'Naveen Kumar', 'naveenkumar123@gmail.com', 8358993859, '60N-303 Nectar Nirvana Niche', 93),
(94, 'Neeraj Patel', 'neerajpatel123@gmail.com', 7744755880, '61O-404 Opulent Oasis Overlook', 94),
(95, 'Nitin Verma', 'nitinverma123@gmail.com', 9810808000, '62P-505 Panoramic Peak Plaza', 95),
(96, 'Parveen Yadav', 'parveenyadav123@gmail.com', 8731608958, '63Q-606 Quaint Quest Quarters', 96),
(97, 'Piyush Gupta', 'piyushgupta123@gmail.com', 9257811294, '64R-707 Rainbow Retreat Residency', 97),
(98, 'Prashant Malhotra', 'prashantmalhotra123@gmail.com', 9730620511, '65S-808 Solar Serenity Suites', 98),
(99, 'Raghav Bansal', 'raghavbansal123@gmail.com', 8260499074, '66T-909 Tranquil Terrace Towers', 99),
(100, 'Rajan Sharma', 'rajansharma123@gmail.com', 7384099160, '67U-101 Utopian Urban Units', 100),
(101, 'Rajeev Thakur', 'rajeevthakur123@gmail.com', 9571493304, '68V-202 Velvet Vista Villas', 101),
(102, 'Rohan Kapoor', 'rohankapoor123@gmail.com', 7362515299, '69W-303 Whispering Willow Wonderland', 102),
(103, 'Rupesh Singh', 'rupeshsingh123@gmail.com', 7330462687, '70X-404 Xenial Xanadu Expanse', 103),
(104, 'Sachin Yadav', 'sachinyadav123@gmail.com', 8496212545, '71Y-505 Yonder Yew Yards', 104),
(105, 'Sameer Bansal', 'sameerbansal123@gmail.com', 8203004491, '72Z-606 Zenith Zen Zephyr', 105),
(106, 'Sandeep Verma', 'sandeepverma123@gmail.com', 9433376558, '73A-707 Aurora Atrium Abode', 106),
(107, 'Sanjay Kumar', 'sanjaykumar123@gmail.com', 9210878328, '74B-808 Blissful Breeze Boutique', 107),
(108, 'Shakti Saini', 'shaktisaini123@gmail.com', 9943280718, '75C-909 Celestial Cove Condos', 108),
(109, 'Shubhankar Arora', 'shubhankararora123@gmail.com', 8335336088, '76D-101 Dazzling Dawn Dwellings', 109),
(110, 'Siddharth Khurana', 'siddharthkhurana123@gmail.com', 9195269274, '77E-202 Enchanted Echo Enclave', 110),
(111, 'Sumeet Choudhury', 'sumeetchoudhury123@gmail.com', 7945345671, '78F-303 Fabled Forest Farms', 111),
(112, 'Sunny Mehta', 'sunnymehta123@gmail.com', 7519225672, '79G-404 Grand Galaxy Gardens', 112),
(113, 'Surya Tiwari', 'suryatiwari123@gmail.com', 7101718225, '80H-505 Haven Heights Hall', 113),
(114, 'Tarun Verma', 'tarunverma123@gmail.com', 8172440414, '81I-606 Infinite Isle Inn', 114),
(115, 'Utkarsh Kapoor', 'utkarshkapoor123@gmail.com', 9931716327, '82J-707 Jubilant Jungle Junction', 115),
(116, 'Varun Yadav', 'varunyadav123@gmail.com', 8759892095, '83K-808 Keystone Kingdom', 116),
(117, 'Vijay Sharma', 'vijaysharma123@gmail.com', 9424362566, '84L-909 Lustrous Lake Lodge', 117),
(118, 'Vikrant Arora', 'vikrantarora123@gmail.com', 9110736757, '85M-101 Mystic Moonlight Mansion', 118),
(119, 'Vishnu Khanna', 'vishnukhanna123@gmail.com', 7499071393, '86N-202 Nectar Nirvana Niche', 119),
(120, 'Vivek Thakur', 'vivekthakur123@gmail.com', 8678114456, '87O-303 Opulent Oasis Overlook', 120),
(121, 'Yogesh Patel', 'yogeshpatel123@gmail.com', 7890363408, '88P-404 Panoramic Peak Plaza', 121),
(122, 'Abhishek Verma', 'abhishekverma123@gmail.com', 7706486818, '89Q-505 Quaint Quest Quarters', 122),
(123, 'Aditya Khurana', 'adityakhurana123@gmail.com', 9325173013, '90R-606 Rainbow Retreat Residency', 123),
(124, 'Akash Arora', 'akasharora123@gmail.com', 8189626044, '91S-707 Solar Serenity Suites', 124),
(125, 'Amar Bansal', 'amarbansal123@gmail.com', 7824289143, '92T-808 Tranquil Terrace Towers', 125),
(126, 'Amit Kapoor', 'amitkapoor123@gmail.com', 7831678607, '93U-909 Utopian Urban Units', 126),
(127, 'Anand Yadav', 'anandyadav123@gmail.com', 7458610585, '94V-101 Velvet Vista Villas', 127),
(128, 'Aniket Sharma', 'aniketsharma123@gmail.com', 9720309982, '95W-202 Whispering Willow Wonderland', 128),
(129, 'Anirudh Thakur', 'anirudhthakur123@gmail.com', 7632577158, '96X-303 Xenial Xanadu Expanse', 129),
(130, 'Anuj Arora', 'anujarora123@gmail.com', 9959194341, '97Y-404 Yonder Yew Yards', 130),
(131, 'Arjun Bansal', 'arjunbansal123@gmail.com', 9348241607, '98Z-505 Zenith Zen Zephyr', 131),
(132, 'Ashish Yadav', 'ashishyadav123@gmail.com', 7153269758, '99A-606 Aurora Atrium Abode', 132),
(133, 'Ayush Arora', 'ayusharora123@gmail.com', 7291546330, '100B-707 Blissful Breeze Boutique', 133),
(134, 'Bharat Verma', 'bharatverma123@gmail.com', 7712191599, '101C-808 Celestial Cove Condos', 134),
(135, 'Chirag Patel', 'chiragpatel123@gmail.com', 7493803324, '102D-909 Dazzling Dawn Dwellings', 135),
(136, 'Deepak Arora', 'deepakarora123@gmail.com', 8810948095, '103E-101 Enchanted Echo Enclave', 136),
(137, 'Devang Patel', 'devangpatel123@gmail.com', 7176262605, '104F-202 Fabled Forest Farms', 137),
(138, 'Dheeraj Thakur', 'dheerajthakur123@gmail.com', 8988266384, '105G-303 Grand Galaxy Gardens', 138),
(139, 'Gaurav Yadav', 'gauravyadav123@gmail.com', 8331121364, '106H-404 Haven Heights Hall', 139),
(140, 'Gautam Malhotra', 'gautammalhotra123@gmail.com', 8152831608, '107I-505 Infinite Isle Inn', 140),
(141, 'Gopal Mehta', 'gopalmehta123@gmail.com', 8103705935, '108J-606 Jubilant Jungle Junction', 141),
(142, 'Harsh Tiwari', 'harshtiwari123@gmail.com', 7527591004, '109K-707 Keystone Kingdom', 142),
(143, 'Himanshu Verma', 'himanshuverma123@gmail.com', 8133759797, '110L-808 Lustrous Lake Lodge', 143),
(144, 'Ishaan Khanna', 'ishaankhanna123@gmail.com', 8671390985, '111M-909 Mystic Moonlight Mansion', 144),
(145, 'Jatin Kapoor', 'jatinkapoor123@gmail.com', 7255362031, '112N-101 Nectar Nirvana Niche', 145),
(146, 'Kunal Bansal', 'kunalbansal123@gmail.com', 7905784229, '113O-202 Opulent Oasis Overlook', 146),
(147, 'Lokesh Yadav', 'lokeshyadav123@gmail.com', 8945917846, '114P-303 Panoramic Peak Plaza', 147),
(148, 'Manish Yadav', 'manishyadav123@gmail.com', 7480415656, '115Q-404 Quaint Quest Quarters', 148),
(149, 'Mayank Thakur', 'mayankthakur123@gmail.com', 8381795356, '116R-505 Rainbow Retreat Residency', 149),
(150, 'Mohit Arora', 'mohitarora123@gmail.com', 8168483054, '117S-606 Solar Serenity Suites', 150);

-- --------------------------------------------------------

--
-- Table structure for table `eu_login`
--

CREATE TABLE `eu_login` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `eu_login`
--

INSERT INTO `eu_login` (`u_id`, `u_email`, `u_password`) VALUES
(2, 'anansoni07@gmail.com', '20406'),
(3, 'mranantsoni@gmail.com', '202020'),
(4, 'mranantsoni@gmail.com', 'aaaaa'),
(5, 'mranantsoni@gmail.com', 'aaabb'),
(6, 'mranantsoni@gmail.com', 'anant@20407'),
(7, 'anantsoni@6317204@gmail.com', '20407'),
(8, 'anansoniss07@gmail.com', '22222'),
(9, 'anansonissff07@gmail.com', 'asasas'),
(10, 'mranantsoncci@gmail.com', 'asasas'),
(12, 'anansonisas07@gmail.com', 'aaaaa'),
(13, 'anansoniss077@gmail.com', '22222'),
(14, 'mranantsoni@gmail.com', 'sssss');

-- --------------------------------------------------------

--
-- Table structure for table `eu_registration`
--

CREATE TABLE `eu_registration` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(30) NOT NULL,
  `u_lname` varchar(30) NOT NULL,
  `u_address` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_contact` bigint(11) NOT NULL,
  `u_password` varchar(30) NOT NULL,
  `u_rptpwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `eu_registration`
--

INSERT INTO `eu_registration` (`u_id`, `u_fname`, `u_lname`, `u_address`, `u_email`, `u_contact`, `u_password`, `u_rptpwd`) VALUES
(3, 'Anant', 'Soni', 'Surat, Gujarat', 'mranantsoni6317204@gmail.com', 8140591020, '204205', '204205'),
(6, 'Anant', 'Soni', 'Surat, Gujarat', 'mrananntsoni@gmail.com', 8956239685, 'vvvvv', 'vvvvv'),
(9, 'John', 'Doe', '123 Main St', 'johndoe@gmail.com', 1234567890, 'password123', 'password123'),
(10, 'Jane', 'Smith', '456 Elm St', 'janesmith@gmail.com', 9876543210, 'securepassword', 'securepassword'),
(11, 'Michael', 'Johnson', '789 Oak St', 'michaeljohnson@gmail.com', 5551234567, 'pass123', 'pass123'),
(12, 'Emily', 'Brown', '101 Pine St', 'emilybrown@gmail.com', 1112223333, '123456', '123456'),
(13, 'David', 'Martinez', '246 Maple St', 'davidmartinez@gmail.com', 9998887777, 'password', 'password'),
(14, 'Sarah', 'Anderson', '369 Birch St', 'sarahanderson@gmail.com', 4445556666, 'abcd1234', 'abcd1234'),
(15, 'Christopher', 'Wilson', '482 Cedar St', 'chriswilson@gmail.com', 7776665555, 'qwerty', 'qwerty'),
(16, 'Amanda', 'Taylor', '573 Walnut St', 'amandataylor@gmail.com', 2223334444, 'letmein', 'letmein'),
(17, 'Matthew', 'Thomas', '684 Spruce St', 'matthewthomas@gmail.com', 8889990000, 'password1', 'password1'),
(18, 'Jessica', 'White', '795 Pine St', 'jessicawhite@gmail.com', 3334445555, 'abc123', 'abc123'),
(19, 'Kevin', 'Harris', '896 Oak St', 'kevinharris@gmail.com', 6667778888, 'passpass', 'passpass'),
(20, 'Samantha', 'Young', '987 Elm St', 'samanthayoung@gmail.com', 1112223333, 'password1234', 'password1234'),
(21, 'Daniel', 'Lee', '1021 Maple St', 'daniellee@gmail.com', 9998887777, 'securepass', 'securepass'),
(22, 'Ashley', 'Garcia', '1132 Birch St', 'ashleygarcia@gmail.com', 4445556666, 'password12345', 'password12345'),
(23, 'Christopher', 'Brown', '1243 Cedar St', 'chrisbrown@gmail.com', 7776665555, 'password!', 'password!'),
(24, 'Lauren', 'Rodriguez', '1354 Walnut St', 'laurenrodriguez@gmail.com', 2223334444, 'password123!', 'password123!'),
(25, 'Ryan', 'Lopez', '1465 Spruce St', 'ryanlopez@gmail.com', 8889990000, '!password', '!password'),
(26, 'Taylor', 'Hernandez', '1576 Pine St', 'taylorhernandez@gmail.com', 3334445555, 'pass123!', 'pass123!'),
(27, 'Brandon', 'Martinez', '1687 Oak St', 'brandonmartinez@gmail.com', 6667778888, 'password@', 'password@'),
(28, 'Eric', 'Miller', '852 Plum St', 'ericmiller@gmail.com', 9876543210, 'ericpass', 'ericpass'),
(29, 'Samantha', 'Harris', '456 Cherry St', 'samanthaharris@gmail.com', 5551234567, 'samppass', 'samppass'),
(30, 'Kyle', 'Martin', '789 Grapefruit St', 'kylemartin@gmail.com', 1112223333, 'kylepass', 'kylepass'),
(31, 'Megan', 'Thompson', '101 Watermelon St', 'meganthompson@gmail.com', 9998887777, 'meganpass', 'meganpass'),
(32, 'Brian', 'Gonzalez', '246 Avocado St', 'briangonzalez@gmail.com', 4445556666, 'brianpass', 'brianpass'),
(33, 'Alyssa', 'Perez', '369 Coconut St', 'alyssaperez@gmail.com', 7776665555, 'alyssapass', 'alyssapass'),
(34, 'Mark', 'Robinson', '789 Papaya St', 'markrobinson@gmail.com', 2223334444, 'markpass', 'markpass'),
(35, 'Courtney', 'Wood', '963 Guava St', 'courtneywood@gmail.com', 8889990000, 'courtneypass', 'courtneypass'),
(36, 'Jeremy', 'Jones', '753 Mango St', 'jeremyjones@gmail.com', 1234567890, 'jeremypass', 'jeremypass'),
(37, 'Christina', 'Allen', '852 Pine St', 'christinaallen@gmail.com', 9876543210, 'christinapass', 'christinapass'),
(38, 'Tyler', 'Carter', '456 Oak St', 'tylercarter@gmail.com', 5551234567, 'tylerpass', 'tylerpass'),
(39, 'Alexis', 'Flores', '789 Maple St', 'alexisflores@gmail.com', 1112223333, 'alexispass', 'alexispass'),
(40, 'Jordan', 'Washington', '101 Cedar St', 'jordanwashington@gmail.com', 9998887777, 'jordanpass', 'jordanpass'),
(41, 'Monica', 'Lee', '246 Elm St', 'monicalee@gmail.com', 4445556666, 'monicapass', 'monicapass'),
(42, 'Jeffrey', 'Hill', '369 Walnut St', 'jeffreyhill@gmail.com', 7776665555, 'jeffreypass', 'jeffreypass'),
(43, 'Natalie', 'Green', '789 Birch St', 'nataliegreen@gmail.com', 2223334444, 'nataliepass', 'nataliepass'),
(44, 'Peter', 'Russell', '963 Spruce St', 'peterrussell@gmail.com', 8889990000, 'peterpass', 'peterpass'),
(45, 'Cassandra', 'Cruz', '753 Oak St', 'cassandracruz@gmail.com', 1234567890, 'casspass', 'casspass'),
(46, 'Derek', 'Hamilton', '852 Elm St', 'derekhamilton@gmail.com', 9876543210, 'derekpass', 'derekpass');

-- --------------------------------------------------------

--
-- Table structure for table `e_area`
--

CREATE TABLE `e_area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(30) NOT NULL,
  `area_no` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `e_area`
--

INSERT INTO `e_area` (`area_id`, `area_name`, `area_no`) VALUES
(1, 'Tawang Town', 1),
(2, 'Zemithang', 1),
(3, 'Bomdila', 1),
(4, 'Sela Pass', 1),
(5, 'Jang', 1),
(6, 'Ganga', 2),
(7, 'Bank Tinali', 2),
(8, 'Naharlagun', 2),
(9, 'Itafort', 2),
(10, 'Zero Point', 2),
(11, 'Alubari', 3),
(12, 'Chongkham', 3),
(13, 'Chowkham', 3),
(14, 'Embong', 3),
(15, 'Kherem', 3),
(16, 'Diyum', 4),
(17, 'Chakma', 4),
(18, 'Danglat', 4),
(19, 'Monmao', 4),
(20, 'Tezu', 4),
(21, 'Diomali', 5),
(22, 'Hukanjuri', 5),
(23, 'Khela', 5),
(24, 'Minthong', 5),
(25, 'Thinsa', 5),
(26, 'Adakula', 6),
(27, 'Baski', 6),
(28, 'Chompi', 6),
(29, 'Darela', 6),
(30, 'Gondeli', 6),
(31, 'Anantapur', 7),
(32, 'Anumpalli', 7),
(33, 'Bethapalli', 7),
(34, 'Kalluru', 7),
(35, 'Kalyam', 7),
(36, 'Alipiri', 8),
(37, 'Tirumala', 8),
(38, 'Chandragiri', 8),
(39, 'Akkarampalle', 8),
(40, 'Balaji Colony', 8),
(41, 'Dokiseela', 9),
(42, 'Garividi', 9),
(43, 'Jamadala', 9),
(44, 'Karlam', 9),
(45, 'Kotipam', 9),
(46, 'Anikepalli', 10),
(47, 'Bandepalli', 10),
(48, 'Kallur', 10),
(49, 'Kandra', 10),
(50, 'Nelaballi', 10),
(51, 'Bapunagar', 11),
(52, 'Behrampura', 11),
(53, 'Jetalpur', 11),
(54, 'Juhapura', 11),
(55, 'Kathwada', 11),
(56, 'Arethi', 12),
(57, 'Kothia', 12),
(58, 'Sherpura', 12),
(59, 'Juhapura', 12),
(60, 'Bangapura', 12),
(61, 'Amroli', 13),
(62, 'Katargam', 13),
(63, 'Adajan', 13),
(64, 'Pal', 13),
(65, 'Vesu', 13),
(66, 'Haripar', 14),
(67, 'Jabalpur', 14),
(68, 'Jetpar', 14),
(69, 'Kankot', 14),
(70, 'Khanpar', 14),
(71, 'Chamla', 15),
(72, 'Sughad', 15),
(73, 'Adalaj', 15),
(74, 'Hathijan', 15),
(75, 'Harsoli', 15),
(76, 'Andheri', 16),
(77, 'Bandra', 16),
(78, 'Kherwadi', 16),
(79, 'Rajawadi', 16),
(80, 'TagoreNagar', 16),
(81, 'Dhanori', 17),
(82, 'PimpriColony', 17),
(83, 'Dhankawadi', 17),
(84, 'Gunjalwadi', 17),
(85, 'Kunjirwadi', 17),
(86, 'Bezonbagh', 18),
(87, 'Dhantoli', 18),
(88, 'Giripeth', 18),
(89, 'Jaitala', 18),
(90, 'Khamla', 18),
(91, 'Aliyabad', 19),
(92, 'Antapur', 19),
(93, 'Astane', 19),
(94, 'Bharam', 19),
(95, 'Bolthan', 19),
(96, 'Mahapoli', 20),
(97, 'Majgaon', 20),
(98, 'Nehroli', 20),
(99, 'Shenwa', 20),
(100, 'Shivale', 20),
(101, 'Asalpura', 21),
(102, 'Awania', 21),
(103, 'Antela', 21),
(104, 'Didawata', 21),
(105, 'Gathwadi', 21),
(106, 'MalviyaNagar', 22),
(107, 'Mansarovar', 22),
(108, 'Jagatpura', 22),
(109, 'PratapNagar', 22),
(110, 'NirmanNagar', 22),
(111, 'SubhashNagar', 23),
(112, 'Sukher', 23),
(113, 'HiranMagri', 23),
(114, 'Bhopalpura', 23),
(115, 'Sisarma', 23),
(116, 'Kayad', 24),
(117, 'Ghooghra', 24),
(118, 'AlwarGate', 24),
(119, 'Makhupura', 24),
(120, 'AdarshNagar', 24),
(121, 'Talwandi', 25),
(122, 'Kunhari', 25),
(123, 'Rangbari', 25),
(124, 'IndraVihar', 25),
(125, 'Nayapura', 25),
(126, 'Bairagarh', 26),
(127, 'Shahpura', 26),
(128, 'Gulmohar', 26),
(129, 'ShaktiNagar', 26),
(130, 'Govindpura', 26),
(131, 'Adhartal', 27),
(132, 'Gorakhpur', 27),
(133, 'MadanMahal', 27),
(134, 'VijayNagar', 27),
(135, 'Shahpura', 27),
(136, 'Palasia', 28),
(137, 'RajendraNagar', 28),
(138, 'SudamaNagar', 28),
(139, 'Pipliyahana', 28),
(140, 'Bhawarkua', 28),
(141, 'Gadarwara', 29),
(142, 'Gotegaon', 29),
(143, 'Sainkheda', 29),
(144, 'Tendukheda', 29),
(145, 'Khirkiya', 29),
(146, 'Mandideep', 30),
(147, 'Ashtam', 30),
(148, 'Bilkisganj', 30),
(149, 'Nasrullaganj', 30),
(150, 'Ichhawar', 30),
(151, 'Kusumpti', 31),
(152, 'SummerHill', 31),
(153, 'LakkarBazaar', 31),
(154, 'Mashobra', 31),
(155, 'Sanjauli', 31),
(156, 'Vashisht', 32),
(157, 'Naggar', 32),
(158, 'Jagatsukh', 32),
(159, 'Model Town', 32),
(160, 'Siyal', 32),
(161, 'Duhad', 33),
(162, 'Kamand', 33),
(163, 'Kushwa', 33),
(164, 'Seobagh', 33),
(165, 'Panihar', 33),
(166, 'Ghumarwin', 34),
(167, 'Namhol', 34),
(168, 'Barmana', 34),
(169, 'Bhadol', 34),
(170, 'Sarkaghat', 34),
(171, 'McLeodGanj', 35),
(172, 'Sidhbari', 35),
(173, 'Dharamkot', 35),
(174, 'Forsyth Ganj', 35),
(175, 'Bhagsunag', 35);

-- --------------------------------------------------------

--
-- Table structure for table `e_city`
--

CREATE TABLE `e_city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `city_no` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `e_city`
--

INSERT INTO `e_city` (`city_id`, `city_name`, `city_no`) VALUES
(1, 'Tawang', 1),
(2, 'Itanagar', 1),
(3, 'Namsai', 1),
(4, 'Lohit', 1),
(5, 'Tirap', 1),
(6, 'Visakhapatnam', 2),
(7, 'Ananthapur', 2),
(8, 'Tirupati', 2),
(9, 'Vizianagaram', 2),
(10, 'Nellore', 2),
(11, 'Ahmedabad', 3),
(12, 'Vadodara', 3),
(13, 'Surat', 3),
(14, 'Rajkot', 3),
(15, 'Gandhinagar', 3),
(16, 'Mumbai', 4),
(17, 'Pune', 4),
(18, 'Nagpur', 4),
(19, 'Nashik', 4),
(20, 'Thane', 4),
(21, 'Jaipur', 5),
(22, 'Jodhpur', 5),
(23, 'Udaipur', 5),
(24, 'Ajmer', 5),
(25, 'Kota', 5),
(26, 'Bhopal', 6),
(27, 'Jabalpur', 6),
(28, 'Indore', 6),
(29, 'Narsingpur', 6),
(30, 'Sehore', 6),
(31, 'Shimla', 7),
(32, 'Manali', 7),
(33, 'Kullu', 7),
(34, 'Bilaspur', 7),
(35, 'Dharamsala', 7);

-- --------------------------------------------------------

--
-- Table structure for table `e_decprice`
--

CREATE TABLE `e_decprice` (
  `decprice_id` int(11) NOT NULL,
  `decprice` int(30) NOT NULL,
  `decprice_no` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `e_decprice`
--

INSERT INTO `e_decprice` (`decprice_id`, `decprice`, `decprice_no`) VALUES
(1, 5000, 1),
(2, 6500, 2),
(3, 9000, 3),
(4, 5000, 4),
(5, 6500, 5),
(6, 8500, 6),
(7, 3500, 7),
(8, 6500, 8),
(9, 9500, 9),
(10, 4500, 10),
(11, 7500, 11),
(12, 9500, 12),
(13, 5500, 13),
(14, 6500, 14),
(15, 8500, 15),
(16, 4500, 16),
(17, 7000, 17),
(18, 9000, 18),
(19, 4500, 19),
(20, 8000, 20),
(21, 9000, 21),
(22, 4500, 22),
(23, 6500, 23),
(24, 9500, 24),
(25, 4500, 25),
(26, 7000, 26),
(27, 8500, 27),
(28, 4500, 28),
(29, 7500, 29),
(30, 8000, 30),
(31, 4500, 31),
(32, 7000, 32),
(33, 9000, 33),
(34, 4500, 34),
(35, 8000, 35),
(36, 9000, 36),
(37, 3000, 37),
(38, 7000, 38),
(39, 9500, 39),
(40, 4500, 40),
(41, 5500, 41),
(42, 8500, 42),
(43, 3500, 43),
(44, 8000, 44),
(45, 9500, 45),
(46, 4500, 46),
(47, 7500, 47),
(48, 8500, 48),
(49, 4000, 49),
(50, 6500, 50),
(51, 8000, 51),
(52, 3500, 52),
(53, 4500, 53),
(54, 9000, 54),
(55, 3500, 55),
(56, 7000, 56),
(57, 8000, 57),
(58, 3500, 58),
(59, 4500, 59),
(60, 8500, 60),
(61, 3500, 61),
(62, 7500, 62),
(63, 9500, 63),
(64, 4500, 64),
(65, 6500, 65),
(66, 8500, 66),
(67, 3500, 67),
(68, 5500, 68),
(69, 8500, 69),
(70, 5500, 70),
(71, 7500, 71),
(72, 8000, 72),
(73, 5500, 73),
(74, 8500, 74),
(75, 9500, 75),
(76, 3500, 76),
(77, 8000, 77),
(78, 8500, 78),
(79, 4500, 79),
(80, 7500, 80),
(81, 8500, 81),
(82, 4500, 82),
(83, 8000, 83),
(84, 9000, 84),
(85, 4500, 85),
(86, 6500, 86),
(87, 7500, 87),
(88, 3500, 88),
(89, 7000, 89),
(90, 8500, 90),
(91, 4500, 91),
(92, 6500, 92),
(93, 8500, 93),
(94, 4500, 94),
(95, 7000, 95),
(96, 6500, 96),
(97, 4500, 97),
(98, 5500, 98),
(99, 6500, 99),
(100, 4500, 100),
(101, 7500, 101),
(102, 8500, 102),
(103, 3500, 103),
(104, 6500, 104),
(105, 7500, 105),
(106, 3500, 106),
(107, 7000, 107),
(108, 9000, 108),
(109, 3500, 109),
(110, 5500, 110),
(111, 8500, 111),
(112, 3500, 112),
(113, 7000, 113),
(114, 8000, 114),
(115, 4500, 115),
(116, 7500, 116),
(117, 8500, 117),
(118, 4500, 118),
(119, 6500, 119),
(120, 8000, 120),
(121, 4500, 121),
(122, 7500, 122),
(123, 9000, 123),
(124, 3500, 124),
(125, 7500, 125),
(126, 9500, 126),
(127, 4500, 127),
(128, 6500, 128),
(129, 8500, 129),
(130, 3500, 130),
(131, 6500, 131),
(132, 8000, 132),
(133, 7000, 133),
(134, 6500, 134),
(135, 9000, 135),
(136, 3500, 136),
(137, 8000, 137),
(138, 9000, 138),
(139, 7500, 139),
(140, 8500, 140),
(141, 9500, 141),
(142, 4500, 142),
(143, 7000, 143),
(144, 8500, 144),
(145, 3500, 145),
(146, 6500, 146),
(147, 8000, 147),
(148, 4500, 148),
(149, 7000, 149),
(150, 9000, 150),
(151, 5000, 151),
(152, 6500, 152),
(153, 9000, 153),
(154, 5000, 154),
(155, 6500, 155),
(156, 8500, 156),
(157, 3500, 157),
(158, 6500, 158),
(159, 9500, 159),
(160, 4500, 160),
(161, 7500, 161),
(162, 9500, 162),
(163, 5500, 163),
(164, 5500, 164),
(165, 8500, 165),
(166, 4500, 166),
(167, 7000, 167),
(168, 9000, 168),
(169, 4500, 169),
(170, 8000, 170),
(171, 9000, 171),
(172, 4500, 172),
(173, 6500, 173),
(174, 9500, 174),
(175, 4500, 175),
(176, 7000, 176),
(177, 8500, 177),
(178, 4500, 178),
(179, 7500, 179),
(180, 8000, 180),
(181, 4500, 181),
(182, 7000, 182),
(183, 9000, 183),
(184, 4500, 184),
(185, 8000, 185),
(186, 9000, 186),
(187, 3000, 187),
(188, 7000, 188),
(189, 9500, 189),
(190, 4500, 190),
(191, 4500, 191),
(192, 8500, 192),
(193, 3500, 193),
(194, 8000, 194),
(195, 9500, 195),
(196, 4500, 196),
(197, 7500, 197),
(198, 8500, 198),
(199, 4000, 199),
(200, 6500, 200),
(201, 8000, 201),
(202, 3500, 202),
(203, 4500, 203),
(204, 9000, 204),
(205, 3500, 205),
(206, 7000, 206),
(207, 8000, 207),
(208, 3500, 208),
(209, 4500, 209),
(210, 8500, 210),
(211, 3500, 211),
(212, 7500, 212),
(213, 9500, 213),
(214, 4500, 214),
(215, 6500, 215),
(216, 8500, 216),
(217, 3500, 217),
(218, 5500, 218),
(219, 8500, 219),
(220, 5500, 220),
(221, 7500, 221),
(222, 8000, 222),
(223, 5500, 223),
(224, 8500, 224),
(225, 9500, 225),
(226, 3500, 226),
(227, 8000, 227),
(228, 8500, 228),
(229, 4500, 229),
(230, 7500, 230),
(231, 8500, 231),
(232, 4500, 232),
(233, 8000, 233),
(234, 9000, 234),
(235, 4500, 235),
(236, 6500, 236),
(237, 7500, 237),
(238, 3500, 238),
(239, 7000, 239),
(240, 8500, 240),
(241, 4500, 241),
(242, 6500, 242),
(243, 8500, 243),
(244, 4500, 244),
(245, 7000, 245),
(246, 6500, 246),
(247, 4500, 247),
(248, 5500, 248),
(249, 6500, 249),
(250, 4500, 250),
(251, 7500, 251),
(252, 8500, 252),
(253, 3500, 253),
(254, 6500, 254),
(255, 7500, 255),
(256, 3500, 256),
(257, 7000, 257),
(258, 9000, 258),
(259, 3500, 259),
(260, 5500, 260),
(261, 8500, 261),
(262, 3500, 262),
(263, 7000, 263),
(264, 8000, 264),
(265, 4500, 265),
(266, 7500, 266),
(267, 8500, 267),
(268, 4500, 268),
(269, 6500, 269),
(270, 8000, 270),
(271, 4500, 271),
(272, 7500, 272),
(273, 9000, 273),
(274, 3500, 274),
(275, 7500, 275),
(276, 9500, 276),
(277, 4500, 277),
(278, 6500, 278),
(279, 8500, 279),
(280, 3500, 280),
(281, 8000, 281),
(282, 8000, 282),
(283, 7000, 283),
(284, 6500, 284),
(285, 9000, 285),
(286, 3500, 286),
(287, 8000, 287),
(288, 9000, 288),
(289, 7500, 289),
(290, 8500, 290),
(291, 9500, 291),
(292, 4500, 292),
(293, 7000, 293),
(294, 8500, 294),
(295, 3500, 295),
(296, 6500, 296),
(297, 8000, 297),
(298, 4500, 298),
(299, 7000, 299),
(300, 9000, 300),
(301, 4500, 301),
(302, 6500, 302),
(303, 9000, 303),
(304, 3500, 304),
(305, 7000, 305),
(306, 8500, 306),
(307, 4500, 307),
(308, 6500, 308),
(309, 8500, 309),
(310, 3500, 310),
(311, 7500, 311),
(312, 9000, 312),
(313, 4500, 313),
(314, 7000, 314),
(315, 9000, 315),
(316, 3500, 316),
(317, 7500, 317),
(318, 9000, 318),
(319, 6500, 319),
(320, 8500, 320),
(321, 9500, 321),
(322, 6500, 322),
(323, 7500, 323),
(324, 9000, 324),
(325, 4500, 325),
(326, 7000, 326),
(327, 9000, 327),
(328, 4000, 328),
(329, 5000, 329),
(330, 9000, 330),
(331, 5000, 331),
(332, 6500, 332),
(333, 9000, 333),
(334, 5000, 334),
(335, 6500, 335),
(336, 8500, 336),
(337, 3500, 337),
(338, 6500, 338),
(339, 9500, 339),
(340, 4500, 340),
(341, 7500, 341),
(342, 9500, 342),
(343, 5500, 343),
(344, 5500, 344),
(345, 8500, 345),
(346, 4500, 346),
(347, 7000, 347),
(348, 9000, 348),
(349, 4500, 349),
(350, 8000, 350),
(351, 9000, 351),
(352, 4500, 352),
(353, 6500, 353),
(354, 9500, 354),
(355, 4500, 355),
(356, 7000, 356),
(357, 8500, 357),
(358, 4500, 358),
(359, 7500, 359),
(360, 8000, 360),
(361, 4500, 361),
(362, 7000, 362),
(363, 9000, 363),
(364, 4500, 364),
(365, 8000, 365),
(366, 9000, 366),
(367, 3000, 367),
(368, 7000, 368),
(369, 9500, 369),
(370, 4500, 370),
(371, 4500, 371),
(372, 8500, 372),
(373, 3500, 373),
(374, 8000, 374),
(375, 9500, 375),
(376, 4500, 376),
(377, 7500, 377),
(378, 8500, 378),
(379, 4000, 379),
(380, 6500, 380),
(381, 8000, 381),
(382, 3500, 382),
(383, 4500, 383),
(384, 9000, 384),
(385, 3500, 385),
(386, 7000, 386),
(387, 8000, 387),
(388, 3500, 388),
(389, 4500, 389),
(390, 8500, 390),
(391, 3500, 391),
(392, 7500, 392),
(393, 9500, 393),
(394, 4500, 394),
(395, 6500, 395),
(396, 8500, 396),
(397, 3500, 397),
(398, 5500, 398),
(399, 8500, 399),
(400, 5500, 400),
(401, 7500, 401),
(402, 8000, 402),
(403, 5500, 403),
(404, 8500, 404),
(405, 8500, 405),
(406, 3500, 406),
(407, 8000, 407),
(408, 8500, 408),
(409, 4500, 409),
(410, 7500, 410),
(411, 8500, 411),
(412, 4500, 412),
(413, 8000, 413),
(414, 9000, 414),
(415, 4500, 415),
(416, 6500, 416),
(417, 7500, 417),
(418, 3500, 418),
(419, 7000, 419),
(420, 8500, 420),
(421, 4500, 421),
(422, 6500, 422),
(423, 8500, 423),
(424, 4500, 424),
(425, 7000, 425),
(426, 6500, 426),
(427, 4500, 427),
(428, 5500, 428),
(429, 6500, 429),
(430, 4500, 430),
(431, 7500, 431),
(432, 8500, 432),
(433, 3500, 433),
(434, 6500, 434),
(435, 7500, 435),
(436, 3500, 436),
(437, 7000, 437),
(438, 9000, 438),
(439, 3500, 439),
(440, 5500, 440),
(441, 8500, 441),
(442, 3500, 442),
(443, 7000, 443),
(444, 8000, 444),
(445, 4500, 445),
(446, 7500, 446),
(447, 8500, 447),
(448, 4500, 448),
(449, 6500, 449),
(450, 6500, 450);

-- --------------------------------------------------------

--
-- Table structure for table `e_dectype`
--

CREATE TABLE `e_dectype` (
  `dectype_id` int(11) NOT NULL,
  `dectype_name` varchar(30) NOT NULL,
  `dectype_no` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `e_dectype`
--

INSERT INTO `e_dectype` (`dectype_id`, `dectype_name`, `dectype_no`) VALUES
(1, 'Normal', 1),
(2, 'Medium', 1),
(3, 'High', 1),
(4, 'Normal', 2),
(5, 'Medium', 2),
(6, 'High', 2),
(7, 'Normal', 3),
(8, 'Medium', 3),
(9, 'High', 3),
(10, 'Normal', 4),
(11, 'Medium', 4),
(12, 'High', 4),
(13, 'Normal', 5),
(14, 'Medium', 5),
(15, 'High', 5),
(16, 'Normal', 6),
(17, 'Medium', 6),
(18, 'High', 6),
(19, 'Normal', 7),
(20, 'Medium', 7),
(21, 'High', 7),
(22, 'Normal', 8),
(23, 'Medium', 8),
(24, 'High', 8),
(25, 'Normal', 9),
(26, 'Medium', 9),
(27, 'High', 9),
(28, 'Normal', 10),
(29, 'Medium', 10),
(30, 'High', 10),
(31, 'Normal', 11),
(32, 'Medium', 11),
(33, 'High', 11),
(34, 'Normal', 12),
(35, 'Medium', 12),
(36, 'High', 12),
(37, 'Normal', 13),
(38, 'Medium', 13),
(39, 'High', 13),
(40, 'Normal', 14),
(41, 'Medium', 14),
(42, 'High', 14),
(43, 'Normal', 15),
(44, 'Medium', 15),
(45, 'High', 15),
(46, 'Normal', 16),
(47, 'Medium', 16),
(48, 'High', 16),
(49, 'Normal', 17),
(50, 'Medium', 17),
(51, 'High', 17),
(52, 'Normal', 18),
(53, 'Medium', 18),
(54, 'High', 18),
(55, 'Normal', 19),
(56, 'Medium', 19),
(57, 'High', 19),
(58, 'Normal', 20),
(59, 'Medium', 20),
(60, 'High', 20),
(61, 'Normal', 21),
(62, 'Medium', 21),
(63, 'High', 21),
(64, 'Normal', 22),
(65, 'Medium', 22),
(66, 'High', 22),
(67, 'Normal', 23),
(68, 'Medium', 23),
(69, 'High', 23),
(70, 'Normal', 24),
(71, 'Medium', 24),
(72, 'High', 24),
(73, 'Normal', 25),
(74, 'Medium', 25),
(75, 'High', 25),
(76, 'Normal', 26),
(77, 'Medium', 26),
(78, 'High', 26),
(79, 'Normal', 27),
(80, 'Medium', 27),
(81, 'High', 27),
(82, 'Normal', 28),
(83, 'Medium', 28),
(84, 'High', 28),
(85, 'Normal', 29),
(86, 'Medium', 29),
(87, 'High', 29),
(88, 'Normal', 30),
(89, 'Medium', 30),
(90, 'High', 30),
(91, 'Normal', 31),
(92, 'Medium', 31),
(93, 'High', 31),
(94, 'Normal', 32),
(95, 'Medium', 32),
(96, 'High', 32),
(97, 'Normal', 33),
(98, 'Medium', 33),
(99, 'High', 33),
(100, 'Normal', 34),
(101, 'Medium', 34),
(102, 'High', 34),
(103, 'Normal', 35),
(104, 'Medium', 35),
(105, 'High', 35),
(106, 'Normal', 36),
(107, 'Medium', 36),
(108, 'High', 36),
(109, 'Normal', 37),
(110, 'Medium', 37),
(111, 'High', 37),
(112, 'Normal', 38),
(113, 'Medium', 38),
(114, 'High', 38),
(115, 'Normal', 39),
(116, 'Medium', 39),
(117, 'High', 39),
(118, 'Normal', 40),
(119, 'Medium', 40),
(120, 'High', 40),
(121, 'Normal', 41),
(122, 'Medium', 41),
(123, 'High', 41),
(124, 'Normal', 42),
(125, 'Medium', 42),
(126, 'High', 42),
(127, 'Normal', 43),
(128, 'Medium', 43),
(129, 'High', 43),
(130, 'Normal', 44),
(131, 'Medium', 44),
(132, 'High', 44),
(133, 'Normal', 45),
(134, 'Medium', 45),
(135, 'High', 45),
(136, 'Normal', 46),
(137, 'Medium', 46),
(138, 'High', 46),
(139, 'Normal', 47),
(140, 'Medium', 47),
(141, 'High', 47),
(142, 'Normal', 48),
(143, 'Medium', 48),
(144, 'High', 48),
(145, 'Normal', 49),
(146, 'Medium', 49),
(147, 'High', 49),
(148, 'Normal', 50),
(149, 'Medium', 50),
(150, 'High', 50),
(151, 'Normal', 51),
(152, 'Medium', 51),
(153, 'High', 51),
(154, 'Normal', 52),
(155, 'Medium', 52),
(156, 'High', 52),
(157, 'Normal', 53),
(158, 'Medium', 53),
(159, 'High', 53),
(160, 'Normal', 54),
(161, 'Medium', 54),
(162, 'High', 54),
(163, 'Normal', 55),
(164, 'Medium', 55),
(165, 'High', 55),
(166, 'Normal', 56),
(167, 'Medium', 56),
(168, 'High', 56),
(169, 'Normal', 57),
(170, 'Medium', 57),
(171, 'High', 57),
(172, 'Normal', 58),
(173, 'Medium', 58),
(174, 'High', 58),
(175, 'Normal', 59),
(176, 'Medium', 59),
(177, 'High', 59),
(178, 'Normal', 60),
(179, 'Medium', 60),
(180, 'High', 60),
(181, 'Normal', 61),
(182, 'Medium', 61),
(183, 'High', 61),
(184, 'Normal', 62),
(185, 'Medium', 62),
(186, 'High', 62),
(187, 'Normal', 63),
(188, 'Medium', 63),
(189, 'High', 63),
(190, 'Normal', 64),
(191, 'Medium', 64),
(192, 'High', 64),
(193, 'Normal', 65),
(194, 'Medium', 65),
(195, 'High', 65),
(196, 'Normal', 66),
(197, 'Medium', 66),
(198, 'High', 66),
(199, 'Normal', 67),
(200, 'Medium', 67),
(201, 'High', 67),
(202, 'Normal', 68),
(203, 'Medium', 68),
(204, 'High', 68),
(205, 'Normal', 69),
(206, 'Medium', 69),
(207, 'High', 69),
(208, 'Normal', 70),
(209, 'Medium', 70),
(210, 'High', 70),
(211, 'Normal', 71),
(212, 'Medium', 71),
(213, 'High', 71),
(214, 'Normal', 72),
(215, 'Medium', 72),
(216, 'High', 72),
(217, 'Normal', 73),
(218, 'Medium', 73),
(219, 'High', 73),
(220, 'Normal', 74),
(221, 'Medium', 74),
(222, 'High', 74),
(223, 'Normal', 75),
(224, 'Medium', 75),
(225, 'High', 75),
(226, 'Normal', 76),
(227, 'Medium', 76),
(228, 'High', 76),
(229, 'Normal', 77),
(230, 'Medium', 77),
(231, 'High', 77),
(232, 'Normal', 78),
(233, 'Medium', 78),
(234, 'High', 78),
(235, 'Normal', 79),
(236, 'Medium', 79),
(237, 'High', 79),
(238, 'Normal', 80),
(239, 'Medium', 80),
(240, 'High', 80),
(241, 'Normal', 81),
(242, 'Medium', 81),
(243, 'High', 81),
(244, 'Normal', 82),
(245, 'Medium', 82),
(246, 'High', 82),
(247, 'Normal', 83),
(248, 'Medium', 83),
(249, 'High', 83),
(250, 'Normal', 84),
(251, 'Medium', 84),
(252, 'High', 84),
(253, 'Normal', 85),
(254, 'Medium', 85),
(255, 'High', 85),
(256, 'Normal', 86),
(257, 'Medium', 86),
(258, 'High', 86),
(259, 'Normal', 87),
(260, 'Medium', 87),
(261, 'High', 87),
(262, 'Normal', 88),
(263, 'Medium', 88),
(264, 'High', 88),
(265, 'Normal', 89),
(266, 'Medium', 89),
(267, 'High', 89),
(268, 'Normal', 90),
(269, 'Medium', 90),
(270, 'High', 90),
(271, 'Normal', 91),
(272, 'Medium', 91),
(273, 'High', 91),
(274, 'Normal', 92),
(275, 'Medium', 92),
(276, 'High', 92),
(277, 'Normal', 93),
(278, 'Medium', 93),
(279, 'High', 93),
(280, 'Normal', 94),
(281, 'Medium', 94),
(282, 'High', 94),
(283, 'Normal', 95),
(284, 'Medium', 95),
(285, 'High', 95),
(286, 'Normal', 96),
(287, 'Medium', 96),
(288, 'High', 96),
(289, 'Normal', 97),
(290, 'Medium', 97),
(291, 'High', 97),
(292, 'Normal', 98),
(293, 'Medium', 98),
(294, 'High', 98),
(295, 'Normal', 99),
(296, 'Medium', 99),
(297, 'High', 99),
(298, 'Normal', 100),
(299, 'Medium', 100),
(300, 'High', 100),
(301, 'Normal', 101),
(302, 'Medium', 101),
(303, 'High', 101),
(304, 'Normal', 102),
(305, 'Medium', 102),
(306, 'High', 102),
(307, 'Normal', 103),
(308, 'Medium', 103),
(309, 'High', 103),
(310, 'Normal', 104),
(311, 'Medium', 104),
(312, 'High', 104),
(313, 'Normal', 105),
(314, 'Medium', 105),
(315, 'High', 105),
(316, 'Normal', 106),
(317, 'Medium', 106),
(318, 'High', 106),
(319, 'Normal', 107),
(320, 'Medium', 107),
(321, 'High', 107),
(322, 'Normal', 108),
(323, 'Medium', 108),
(324, 'High', 108),
(325, 'Normal', 109),
(326, 'Medium', 109),
(327, 'High', 109),
(328, 'Normal', 110),
(329, 'Medium', 110),
(330, 'High', 110),
(331, 'Normal', 111),
(332, 'Medium', 111),
(333, 'High', 111),
(334, 'Normal', 112),
(335, 'Medium', 112),
(336, 'High', 112),
(337, 'Normal', 113),
(338, 'Medium', 113),
(339, 'High', 113),
(340, 'Normal', 114),
(341, 'Medium', 114),
(342, 'High', 114),
(343, 'Normal', 115),
(344, 'Medium', 115),
(345, 'High', 115),
(346, 'Normal', 116),
(347, 'Medium', 116),
(348, 'High', 116),
(349, 'Normal', 117),
(350, 'Medium', 117),
(351, 'High', 117),
(352, 'Normal', 118),
(353, 'Medium', 118),
(354, 'High', 118),
(355, 'Normal', 119),
(356, 'Medium', 119),
(357, 'High', 119),
(358, 'Normal', 120),
(359, 'Medium', 120),
(360, 'High', 120),
(361, 'Normal', 121),
(362, 'Medium', 121),
(363, 'High', 121),
(364, 'Normal', 122),
(365, 'Medium', 122),
(366, 'High', 122),
(367, 'Normal', 123),
(368, 'Medium', 123),
(369, 'High', 123),
(370, 'Normal', 124),
(371, 'Medium', 124),
(372, 'High', 124),
(373, 'Normal', 125),
(374, 'Medium', 125),
(375, 'High', 125),
(376, 'Normal', 126),
(377, 'Medium', 126),
(378, 'High', 126),
(379, 'Normal', 127),
(380, 'Medium', 127),
(381, 'High', 127),
(382, 'Normal', 128),
(383, 'Medium', 128),
(384, 'High', 128),
(385, 'Normal', 129),
(386, 'Medium', 129),
(387, 'High', 129),
(388, 'Normal', 130),
(389, 'Medium', 130),
(390, 'High', 130),
(391, 'Normal', 131),
(392, 'Medium', 131),
(393, 'High', 131),
(394, 'Normal', 132),
(395, 'Medium', 132),
(396, 'High', 132),
(397, 'Normal', 133),
(398, 'Medium', 133),
(399, 'High', 133),
(400, 'Normal', 134),
(401, 'Medium', 134),
(402, 'High', 134),
(403, 'Normal', 135),
(404, 'Medium', 135),
(405, 'High', 135),
(406, 'Normal', 136),
(407, 'Medium', 136),
(408, 'High', 136),
(409, 'Normal', 137),
(410, 'Medium', 137),
(411, 'High', 137),
(412, 'Normal', 138),
(413, 'Medium', 138),
(414, 'High', 138),
(415, 'Normal', 139),
(416, 'Medium', 139),
(417, 'High', 139),
(418, 'Normal', 140),
(419, 'Medium', 140),
(420, 'High', 140),
(421, 'Normal', 141),
(422, 'Medium', 141),
(423, 'High', 141),
(424, 'Normal', 142),
(425, 'Medium', 142),
(426, 'High', 142),
(427, 'Normal', 143),
(428, 'Medium', 143),
(429, 'High', 143),
(430, 'Normal', 144),
(431, 'Medium', 144),
(432, 'High', 144),
(433, 'Normal', 145),
(434, 'Medium', 145),
(435, 'High', 145),
(436, 'Normal', 146),
(437, 'Medium', 146),
(438, 'High', 146),
(439, 'Normal', 147),
(440, 'Medium', 147),
(441, 'High', 147),
(442, 'Normal', 148),
(443, 'Medium', 148),
(444, 'High', 148),
(445, 'Normal', 149),
(446, 'Medium', 149),
(447, 'High', 149),
(448, 'Normal', 150),
(449, 'Medium', 150),
(450, 'High', 150);

-- --------------------------------------------------------

--
-- Table structure for table `e_gallery`
--

CREATE TABLE `e_gallery` (
  `eg_id` int(11) NOT NULL,
  `eg_img` varchar(30) NOT NULL,
  `eg_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `e_gallery`
--

INSERT INTO `e_gallery` (`eg_id`, `eg_img`, `eg_name`) VALUES
(1, 'eg_1.jpg', 'eg_1.JPG'),
(2, 'eg_2.JPG', 'eg_2.JPG'),
(3, 'eg_3.JPG', 'eg_3.JPG'),
(4, 'eg_4.JPG', 'eg_4.JPG'),
(5, 'eg_5.JPG', 'eg_5.JPG'),
(6, 'eg_6.JPG', 'eg_6.JPG'),
(7, 'eg_7.JPG', 'eg_7.JPG'),
(8, 'eg_8.JPG', 'eg_8.JPG'),
(9, 'eg_9.JPG', 'eg_9.JPG'),
(10, 'eg_10.JPG', 'eg_10.JPG'),
(11, 'eg_11.JPG', 'eg_11.JPG'),
(12, 'eg_12.JPG', 'eg_12.JPG'),
(13, 'eg_13.JPG', 'eg_13.JPG'),
(14, 'eg_14.JPG', 'eg_14.JPG'),
(15, 'eg_15.JPG', 'eg_15.JPG'),
(16, 'eg_16.JPG', 'eg_16.JPG'),
(17, 'eg_17.JPG', 'eg_17.JPG'),
(18, 'eg_18.JPG', 'eg_18.JPG'),
(19, 'eg_19.JPG', 'eg_19.JPG'),
(20, 'eg_20.JPG', 'eg_20.JPG'),
(21, 'eg_21.JPG', 'eg_21.JPG'),
(22, 'eg_22.JPG', 'eg_22.JPG'),
(23, 'eg_23.JPG', 'eg_23.JPG'),
(24, 'eg_24.JPG', 'eg_24.JPG'),
(25, 'eg_25.JPG', 'eg_25.JPG'),
(26, 'eg_26.JPG', 'eg_26.JPG'),
(27, 'eg_27.JPG', 'eg_27.JPG'),
(28, 'eg_28.JPG', 'eg_28.JPG'),
(29, 'eg_29.JPG', 'eg_29.JPG'),
(30, 'eg_30.JPG', 'eg_30.JPG'),
(31, 'eg_31.JPG', 'eg_31.JPG'),
(32, 'eg_32.JPG', 'eg_32.JPG'),
(33, 'eg_33.JPG', 'eg_33.JPG'),
(34, 'eg_34.JPG', 'eg_34.JPG'),
(35, 'eg_35.JPG', 'eg_35.JPG'),
(36, 'eg_36.JPG', 'eg_36.JPG'),
(37, 'eg_37.JPG', 'eg_37.JPG'),
(38, 'eg_38.JPG', 'eg_38.JPG'),
(39, 'eg_39.JPG', 'eg_39.JPG'),
(41, 'eg_40.jpg', 'eg_40');

-- --------------------------------------------------------

--
-- Table structure for table `e_message`
--

CREATE TABLE `e_message` (
  `u_id` int(30) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_contact` bigint(11) NOT NULL,
  `u_country` varchar(30) NOT NULL,
  `u_subject` varchar(100) NOT NULL,
  `u_message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `e_message`
--

INSERT INTO `e_message` (`u_id`, `u_name`, `u_email`, `u_contact`, `u_country`, `u_subject`, `u_message`) VALUES
(1, 'Anant soni', 'anantsoni6317204@gmail.com', 8140591020, 'INDIA', 'A - Event Organizers Website ...', 'Created by anant soni.'),
(2, 'Dhruv patel', 'dhruvpatel002@gmail.com', 8486575985, 'INDIA', 'D-Event Organizers Website ...', 'Created by dhruv patel.'),
(3, 'Kenil patel', 'kenilpatel89@gmail.com', 8598687458, 'INDIA', 'K-Event Organizers Website ...', 'Created by kenil patel'),
(4, 'Dev patel', 'devpatel@gmail.com', 7895858964, 'INDIA', 'D-Event Organizers Website ...', 'Created by dev patel'),
(5, 'Anant', 'anantsoni6317204@gmail.com', 8486575982, 'INDIA', 'Event Organizers', 'S'),
(6, 'anant', 'mranantsoni@gmail.com', 8956239685, 'INDIA', 'Event Organizers', 'a-Event is complete'),
(7, 'Anant soni', 'anansoniss07@gmail.com', 8956239685, 'INDIA', 'Event Organizers', 'Event is complete by anant soni'),
(8, 'anant', 'mranantsoni@gmail.com', 8956239685, 'INDIA', 'Event Organizers', 'hello Event Organisers.'),
(9, 'Mary ', 'raveqabat@mailinator.com', 9898989898, 'INDIA', 'Qui dolor corrupti ', 'Fugit voluptate cup'),
(10, 'Thane Hewitt', 'nezy@mailinator.com', 8888888888, 'INDIA', 'Maiores neque dolore', 'Dolor possimus dele'),
(11, 'Quincy Compton', 'gisu@mailinator.com', 8686868686, 'INDIA', 'Do aspernatur consec', 'Non accusamus quibus'),
(12, 'Norman Oconnor', 'tihiwe@mailinator.com', 4848484848, 'INDIA', 'Voluptas aute dolore', 'Reiciendis corporis '),
(13, 'Cooper Gibson', 'bepebo@mailinator.com', 6363636363, 'INDIA', 'Explicabo Amet des', 'Accusamus aliquam om'),
(14, 'August Potts', 'zymen@mailinator.com', 7878787878, 'INDIA', 'Aliquid omnis nobis ', 'Quam voluptatem adi'),
(15, 'Zelenia Sawyer', 'giwejypur@mailinator.com', 9696969696, 'INDIA', 'Ex culpa perferendis', 'Proident nisi dolor');

-- --------------------------------------------------------

--
-- Table structure for table `e_place`
--

CREATE TABLE `e_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(30) NOT NULL,
  `place_no` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `e_place`
--

INSERT INTO `e_place` (`place_id`, `place_name`, `place_no`) VALUES
(1, 'Bapunagar-Hotel', 51),
(2, 'Bapunagar-Farm', 51),
(3, 'Bapunagar-Hall', 51),
(4, 'Behrampura-Hotel', 52),
(5, 'Behrampura-Farm', 52),
(6, 'Behrampura-Hall', 52),
(7, 'Jetalpur-Hotel', 53),
(8, 'Jetalpur-Farm', 53),
(9, 'Jetalpur-Hall', 53),
(10, 'Juhapura-Hotel', 54),
(11, 'Juhapura-Farm', 54),
(12, 'Juhapura-Hall', 54),
(13, 'Kathwada-Hotel', 55),
(14, 'Kathwada-Farm', 55),
(15, 'Kathwada-Hall', 55),
(16, 'Arethi-Hotel', 56),
(17, 'Arethi-Farm', 56),
(18, 'Arethi-Hall', 56),
(19, 'Kothia-Hotel', 57),
(20, 'Kothia-Farm', 57),
(21, 'Kothia-Hall', 57),
(22, 'Sherpura-Hotel', 58),
(23, 'Sherpura-Farm', 58),
(24, 'Sherpura-Hall', 58),
(25, 'Juhapura-Hotel', 59),
(26, 'Juhapura-Farm', 59),
(27, 'Juhapura-Hall', 59),
(28, 'Bangapura-Hotel', 60),
(29, 'Bangapura-Farm', 60),
(30, 'Bangapura-Hall', 60),
(31, 'Amroli-Hotel', 61),
(32, 'Amroli-Farm', 61),
(33, 'Amroli-Hall', 61),
(34, 'Katargam-Hotel', 62),
(35, 'Katargam-Farm', 62),
(36, 'Katargam-Hall', 62),
(37, 'Adajan-Hotel', 63),
(38, 'Adajan-Farm', 63),
(39, 'Adajan-Hall', 63),
(40, 'Pal-Hotel', 64),
(41, 'Pal-Farm', 64),
(42, 'Pal-Hall', 64),
(43, 'Vesu-Hotel', 65),
(44, 'Vesu-Farm', 65),
(45, 'Vesu-Hall', 65),
(46, 'Haripar-Hotel', 66),
(47, 'Haripar-Farm', 66),
(48, 'Haripar-Hall', 66),
(49, 'Jabalpur-Hotel', 67),
(50, 'Jabalpur-Farm', 67),
(51, 'Jabalpur-Hall', 67),
(52, 'Jetpar-Hotel', 68),
(53, 'Jetpar-Farm', 68),
(54, 'Jetpar-Hall', 68),
(55, 'Kankot-Hotel', 69),
(56, 'Kankot-Farm', 69),
(57, 'Kankot-Hall', 69),
(58, 'Khanpar-Hotel', 70),
(59, 'Khanpar-Farm', 70),
(60, 'Khanpar-Hall', 70),
(61, 'Chamla-Hotel', 71),
(62, 'Chamla-Farm', 71),
(63, 'Chamla-Hall', 71),
(64, 'Sughad-Hotel', 72),
(65, 'Sughad-Farm', 72),
(66, 'Sughad-Hall', 72),
(67, 'Adalaj-Hotel', 73),
(68, 'Adalaj-Farm', 73),
(69, 'Adalaj-Hall', 73),
(70, 'Hathijan-Hotel', 74),
(71, 'Hathijan-Farm', 74),
(72, 'Hathijan-Hall', 74),
(73, 'Harsoli-Hotel', 75),
(74, 'Harsoli-Farm', 75),
(75, 'Harsoli-Hall', 75),
(76, 'Asalpura-Hotel', 101),
(77, 'Asalpura-Farm', 101),
(78, 'Asalpura-Hall', 101),
(79, 'Awania-Hotel', 102),
(80, 'Awania-Farm', 102),
(81, 'Awania-Hall', 102),
(82, 'Antela-Hotel', 103),
(83, 'Antela-Farm', 103),
(84, 'Antela-Hall', 103),
(85, 'Didawata-Hotel', 104),
(86, 'Didawata-Farm', 104),
(87, 'Didawata-Hall', 104),
(88, 'Gathwadi-Hotel', 105),
(89, 'Gathwadi-Farm', 105),
(90, 'Gathwadi-Hall', 105),
(91, 'MalviyaNagar-Hotel', 106),
(92, 'MalviyaNagar-Farm', 106),
(93, 'MalviyaNagar-Hall', 106),
(94, 'Mansarovar-Hotel', 107),
(95, 'Mansarovar-Farm', 107),
(96, 'Mansarovar-Hall', 107),
(97, 'Jagatpura-Hotel', 108),
(98, 'Jagatpura-Farm', 108),
(99, 'Jagatpura-Hall', 108),
(100, 'PratapNagar-Hotel', 109),
(101, 'PratapNagar-Farm', 109),
(102, 'PratapNagar-Hall', 109),
(103, 'NirmanNagar-Hotel', 110),
(104, 'NirmanNagar-Farm', 110),
(105, 'NirmanNagar-Hall', 110),
(106, 'SubhashNagar-Hotel', 111),
(107, 'SubhashNagar-Farm', 111),
(108, 'SubhashNagar-Hall', 111),
(109, 'Sukher-Hotel', 112),
(110, 'Sukher-Farm', 112),
(111, 'Sukher-Hall', 112),
(112, 'HiranMagri-Hotel', 113),
(113, 'HiranMagri-Farm', 113),
(114, 'HiranMagri-Hall', 113),
(115, 'Bhopalpura-Hotel', 114),
(116, 'Bhopalpura-Farm', 114),
(117, 'Bhopalpura-Hall', 114),
(118, 'Sisarma-Hotel', 115),
(119, 'Sisarma-Farm', 115),
(120, 'Sisarma-Hall', 115),
(121, 'Kayad-Hotel', 116),
(122, 'Kayad-Farm', 116),
(123, 'Kayad-Hall', 116),
(124, 'Ghooghra-Hotel', 117),
(125, 'Ghooghra-Farm', 117),
(126, 'Ghooghra-Hall', 117),
(127, 'AlwarGate-Hotel', 118),
(128, 'AlwarGate-Farm', 118),
(129, 'AlwarGate-Hall', 118),
(130, 'Makhupura-Hotel', 119),
(131, 'Makhupura-Farm', 119),
(132, 'Makhupura-Hall', 119),
(133, 'AdarshNagar-Hotel', 120),
(134, 'AdarshNagar-Farm', 120),
(135, 'AdarshNagar-Hall', 120),
(136, 'Talwandi-Hotel', 121),
(137, 'Talwandi-Farm', 121),
(138, 'Talwandi-Hall', 121),
(139, 'Kunhari-Hotel', 122),
(140, 'Kunhari-Farm', 122),
(141, 'Kunhari-Hall', 122),
(142, 'Rangbari-Hotel', 123),
(143, 'Rangbari-Farm', 123),
(144, 'Rangbari-Hall', 123),
(145, 'IndraVihar-Hotel', 124),
(146, 'IndraVihar-Farm', 124),
(147, 'IndraVihar-Hall', 124),
(148, 'Nayapura-Hotel', 125),
(149, 'Nayapura-Farm', 125),
(150, 'Nayapura-Hall', 125);

-- --------------------------------------------------------

--
-- Table structure for table `e_rate_or_feedback`
--

CREATE TABLE `e_rate_or_feedback` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_feedback` varchar(100) NOT NULL,
  `u_rate` varchar(30) NOT NULL,
  `approval_status` enum('pending','approved','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `e_rate_or_feedback`
--

INSERT INTO `e_rate_or_feedback` (`u_id`, `u_email`, `u_feedback`, `u_rate`, `approval_status`) VALUES
(200, 'bubakysum@mailinator.com', 'Praesentium repudian', '2.7', 'pending'),
(201, 'wufihedo@mailinator.com', 'Vel irure qui et lab', '4.5', 'approved'),
(202, 'wiviqoz@mailinator.com', 'Ratione laboriosam ', '2.8', 'approved'),
(203, 'fomydolefa@mailinator.com', 'Magni nostrud iste a', '2.3', 'approved'),
(204, 'budukuvih@mailinator.com', 'Iure reprehenderit ', '4.7', 'approved'),
(205, 'pibaxuzu@mailinator.com', 'Necessitatibus accus', '1.7', 'approved'),
(206, 'dylanafoba@mailinator.com', 'Ab culpa sunt magn', '1.6', 'approved'),
(207, 'nuremu@mailinator.com', 'Enim excepteur eum a', '3.5', 'pending'),
(208, 'sigificop@mailinator.com', 'Est sunt temporibu', '1.6', 'pending'),
(209, 'lyzu@mailinator.com', 'Corrupti totam volu', '4.5', 'pending'),
(210, 'cizy@mailinator.com', 'Nulla error aut qui ', '0.5', 'pending'),
(211, 'cytufawux@mailinator.com', 'Repudiandae illo non', '1.5', 'pending'),
(212, 'myfovopy@mailinator.com', 'Officia est nihil do', '3.5', 'pending'),
(213, 'jofura@mailinator.com', 'Mollit inventore und', '4.9', 'pending'),
(214, 'tydyl@mailinator.com', 'Voluptate in culpa ', '1.4', 'pending'),
(215, 'qimejo@mailinator.com', 'Hic eum iste cum ita', '3.1', 'pending'),
(216, 'dibekozap@mailinator.com', 'Qui eu praesentium e', '1.7', 'pending'),
(217, 'lavixy@mailinator.com', 'Atque nobis deserunt', '2.4', 'pending'),
(218, 'pykagulih@mailinator.com', 'Reprehenderit perfer', '4.9', 'pending'),
(219, 'dysuwygy@mailinator.com', 'Reprehenderit aliqu', '1.4', 'pending'),
(220, 'paqadoba@mailinator.com', 'Labore dolores magna', '3.7', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `e_rent`
--

CREATE TABLE `e_rent` (
  `rent_id` int(11) NOT NULL,
  `rent` int(30) NOT NULL,
  `rent_no` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `e_rent`
--

INSERT INTO `e_rent` (`rent_id`, `rent`, `rent_no`) VALUES
(1, 55000, 1),
(2, 95000, 2),
(3, 65000, 3),
(4, 68000, 4),
(5, 75000, 5),
(6, 55000, 6),
(7, 58000, 7),
(8, 75000, 8),
(9, 90000, 9),
(10, 95000, 10),
(11, 55000, 11),
(12, 56000, 12),
(13, 75000, 13),
(14, 57000, 14),
(15, 95000, 15),
(16, 81000, 16),
(17, 65000, 17),
(18, 85000, 18),
(19, 84000, 19),
(20, 95000, 20),
(21, 89000, 21),
(22, 65000, 22),
(23, 79000, 23),
(24, 85000, 24),
(25, 91000, 25),
(26, 56000, 26),
(27, 65000, 27),
(28, 95000, 28),
(29, 85000, 29),
(30, 91000, 30),
(31, 90000, 31),
(32, 65000, 32),
(33, 69000, 33),
(34, 85000, 34),
(35, 95000, 35),
(36, 55000, 36),
(37, 59000, 37),
(38, 75000, 38),
(39, 69000, 39),
(40, 95000, 40),
(41, 55000, 41),
(42, 60000, 42),
(43, 75000, 43),
(44, 85000, 44),
(45, 70000, 45),
(46, 55000, 46),
(47, 80000, 47),
(48, 75000, 48),
(49, 79000, 49),
(50, 95000, 50),
(51, 69000, 51),
(52, 65000, 52),
(53, 75000, 53),
(54, 73000, 54),
(55, 95000, 55),
(56, 61000, 56),
(57, 65000, 57),
(58, 62000, 58),
(59, 85000, 59),
(60, 95000, 60),
(61, 65000, 61),
(62, 65000, 62),
(63, 75000, 63),
(64, 58000, 64),
(65, 95000, 65),
(66, 45000, 66),
(67, 65000, 67),
(68, 69000, 68),
(69, 85000, 69),
(70, 95000, 70),
(71, 55000, 71),
(72, 98000, 72),
(73, 75000, 73),
(74, 59000, 74),
(75, 95000, 75),
(76, 55000, 76),
(77, 98000, 77),
(78, 75000, 78),
(79, 69000, 79),
(80, 95000, 80),
(81, 55000, 81),
(82, 57000, 82),
(83, 75000, 83),
(84, 89000, 84),
(85, 95000, 85),
(86, 55000, 86),
(87, 72000, 87),
(88, 75000, 88),
(89, 78000, 89),
(90, 95000, 90),
(91, 75000, 91),
(92, 65000, 92),
(93, 69000, 93),
(94, 85000, 94),
(95, 95000, 95),
(96, 79000, 96),
(97, 65000, 97),
(98, 95000, 98),
(99, 85000, 99),
(100, 69000, 100),
(101, 59000, 101),
(102, 65000, 102),
(103, 69000, 103),
(104, 85000, 104),
(105, 95000, 105),
(106, 97000, 106),
(107, 65000, 107),
(108, 89000, 108),
(109, 85000, 109),
(110, 81000, 110),
(111, 55000, 111),
(112, 82000, 112),
(113, 75000, 113),
(114, 63000, 114),
(115, 95000, 115),
(116, 55000, 116),
(117, 96000, 117),
(118, 75000, 118),
(119, 97000, 119),
(120, 95000, 120),
(121, 89000, 121),
(122, 65000, 122),
(123, 74000, 123),
(124, 63000, 124),
(125, 95000, 125),
(126, 63000, 126),
(127, 65000, 127),
(128, 59000, 128),
(129, 85000, 129),
(130, 95000, 130),
(131, 55000, 131),
(132, 65000, 132),
(133, 75000, 133),
(134, 85000, 134),
(135, 95000, 135),
(136, 45000, 136),
(137, 56000, 137),
(138, 75000, 138),
(139, 85000, 139),
(140, 95000, 140),
(141, 55000, 141),
(142, 65000, 142),
(143, 98000, 143),
(144, 85000, 144),
(145, 99000, 145),
(146, 55000, 146),
(147, 65000, 147),
(148, 72000, 148),
(149, 85000, 149),
(150, 88000, 150);

-- --------------------------------------------------------

--
-- Table structure for table `e_service`
--

CREATE TABLE `e_service` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `description1` varchar(1000) NOT NULL,
  `description2` varchar(1000) NOT NULL,
  `description3` varchar(1000) NOT NULL,
  `description4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `e_service`
--

INSERT INTO `e_service` (`id`, `image`, `title`, `description`, `description1`, `description2`, `description3`, `description4`) VALUES
(1, 'pic1.jpg', 'MICE', 'Our Event Organizers team doing a MICE event services tailored for seamless event execution, offering meticulous planning, innovative solutions, and a flawless experience for organizers and attendees.', 'Our Meetings service ensures precision in every detail, from intimate corporate gatherings to large-scale conferences. We specialize in crafting environments that foster collaboration, innovation, and networking, setting the stage for impactful discussions and meaningful connections.', 'Conferences demand a delicate balance between information dissemination and engagement. With our expertise, we transform conferences into dynamic forums, seamlessly integrating technology, speakers, and interactive elements to captivate audiences and deliver a lasting impact.', 'Exhibitions are a showcase of innovation and creativity. Our team understands the intricacies of creating visually stunning displays that captivate attendees, ensuring that your brand stands out in the crowded marketplace. From booth design to logistics, we handle it all, ensuring a smooth and successful exhibition experience.', 'With an unwavering commitment to excellence, our MICE-focused approach ensures that every event we organize is a resounding success, leaving a lasting impression on your attendees. Let us turn your vision into reality, and together, we\\\'ll create events that go beyond expectations.'),
(2, 'pic2.jpg', 'Seminar & Conference', 'Elevate your events with our expert Seminar & Conference services, delivering seamless planning and execution for impactful and engaging gatherings that leave a lasting impression.', 'Seminars are a powerful platform for knowledge exchange and networking. At our events, we meticulously curate topics and speakers to provide valuable insights and engage your audience. From selecting the perfect venue to coordinating audio-visual requirements, our comprehensive seminar planning services guarantee a smooth and successful event that leaves a lasting impression on both attendees and speakers alike.', 'Conferences, on the other hand, require a strategic approach to accommodate diverse sessions, keynote presentations, and interactive workshops. Our team of experienced event organizers excels in creating dynamic conference agendas, managing logistics, and fostering an environment conducive to meaningful connections. We understand the importance of a well-executed conference in achieving your organizational goals, and we are committed to delivering an event that exceeds your expectations.', 'With a keen eye for detail and a passion for excellence, our event organizers will work closely with you to understand your objectives, customize event solutions, and bring your vision to life. From conceptualization to post-event evaluation, our end-to-end services ensure a hassle-free and successful experience for both organizers and participants.', 'Partner with us for your seminar and conference needs, and let our expertise transform your events into unforgettable and impactful experiences. Your success is our priority, and we are here to make every moment of your event count.'),
(3, 'pic3.jpg', 'Corporate Event management', 'Our Event Organizers team doing a Offering comprehensive corporate event management services, our team excels in organizing seamless and impactful events, ensuring meticulous planning.', 'we understand the pivotal role that corporate events play in shaping your brand image and fostering meaningful connections. Our seasoned team of event organizers specializes in curating bespoke experiences that transcend expectations and leave a lasting impression.', 'With a keen eye for detail, we meticulously plan and execute every facet of your corporate event, ensuring a flawless and memorable occasion. From conceptualization to post-event analysis, our comprehensive approach encompasses venue selection, strategic event marketing, logistics management, and innovative thematic designs that align with your brand identity.', 'Our commitment to excellence extends to fostering strong vendor relationships, ensuring top-notch catering, cutting-edge audio-visual production, and seamless coordination. We pride ourselves on being adaptable and resourceful, handling every challenge with grace to guarantee a stress-free experience for our clients.', 'Client collaboration is at the heart of our process, as we work closely with you to understand your vision and objectives. Whether it\\\'s a product launch, team-building retreat, or annual conference, we tailor our services to suit the unique needs of your business, aiming to deliver an event that not only meets but exceeds your expectations.'),
(4, 'pic4.jpg', 'Brand Promotion', 'Our Event Organizers team doing a Elevate your brand presence with our expertly curated Brand Promotion Event services, where creativity meets strategy to captivate your audience and leave a lasting impression.', 'Our web page serves as a gateway to a world of possibilities, showcasing the depth and breadth of our event promotion expertise. Navigating through our user-friendly interface, clients discover tailored solutions that align seamlessly with their unique goals. We specialize in creating immersive online experiences that not only captivate audiences but also drive brand recognition. Through engaging content, strategic social media campaigns, and captivating visuals, we elevate brands to new heights, ensuring they stand out in the crowded landscape of events.', 'The cornerstone of our brand promotion strategy is collaboration. We work closely with clients to understand their brand identity, values, and objectives, allowing us to curate campaigns that resonate authentically with their target audience. Our commitment to excellence extends to every facet of the process, from meticulous planning and execution to post-event analysis, ensuring a comprehensive and data-driven approach.', 'The web page serves as a hub for inspiration, featuring case studies that illustrate our prowess in elevating diverse brands across various industries. Whether it a corporate gala, product launch, or community event, our brand promotion services are tailored to suit the unique needs of each project. Our testimonials speak volumes about our ability to exceed expectations, reflecting the satisfaction of clients who have witnessed the transformative impact of our strategic approach.', 'In a digital era where first impressions matter, our web page reflects the modern aesthetics and innovative spirit that define our brand promotion services. '),
(5, 'pic5.jpg', 'Exhibition Management', 'Our Exhibition Management event services empower organizers with seamless coordination, strategic planning, and immersive experiences, ensuring successful execution and elevated.', 'At the heart of our Corporate Exhibition Management services is a commitment to understanding your unique brand identity and business objectives. We tailor each event to reflect your company\\\'s values and engage your target audience effectively. Our collaborative approach involves constant communication with clients, fostering a partnership that guarantees a seamless and stress-free experience from start to finish.', 'Our comprehensive services encompass venue selection, booth design, logistics coordination, multimedia presentations, and post-event analysis. We leverage our extensive network to secure prime locations and negotiate favorable terms to maximize your ROI. Our creative team specializes in crafting visually stunning and interactive booth designs that captivate attendees and leave a lasting impression.', 'Incorporating the latest technological advancements, we integrate virtual elements, augmented reality, and interactive displays to create an immersive experience for visitors. Our commitment to sustainability is evident in our eco-friendly booth designs and energy-efficient practices, ensuring your event aligns with modern corporate responsibility standards.', 'Logistics play a pivotal role in the success of any exhibition, and our dedicated team meticulously manages every aspect, from transportation and set-up to tear-down and post-event storage. We understand that time is of the essence, and our efficient processes guarantee a timely and hassle-free execution, allowing you to focus on engaging with your audience.'),
(6, 'pic6.jpg', 'Bollywood Artist', 'Elevate your event with mesmerizing performances by Bollywood\\\'s top artists, adding a touch of glamour and entertainment. Our event organizer services bring the creating unforgettable moments.', 'Immerse your audience in the magic of Bollywood with our stellar lineup of artists who have left an indelible mark on the global entertainment landscape. From the dazzling dance moves of renowned choreographers to the soul-stirring melodies of playback singers, our Bollywood Artists promise to infuse energy and charisma into your event. Whether you\\\'re hosting a grand gala, a corporate function, or a private celebration, our curated selection of Bollywood talent ensures a memorable and immersive experience for every attendee.', 'Let our experienced event organizers tailor a bespoke entertainment package, seamlessly integrating the allure of Bollywood into your event\\\'s theme and ambiance. Our artists bring not just their talent but also the glamour and charisma that define the Bollywood industry. Witness the charisma of acclaimed actors who have graced the screens with their stellar performances, adding a touch of cinematic brilliance to your event.', 'With our event organizer project services, you have access to a network of Bollywood Artists who are not only professionals in their craft but also passionate about creating unforgettable moments. Elevate your event with the infectious energy of Bollywood dance performances, where every step tells a story and every move captivates the audience. Our singers will serenade your guests with soulful renditions, creating an atmosphere of musical delight that resonates long after the event concludes.', 'Whether you\\\'re seeking the glitz and glamour of Bollywood\\\'s A-list celebrities or the emerging talents that promise to be tomorrow\\\'s stars, our event organizers are dedicated to curating an experience that exceeds your expectations. From red carpet events to themed parties, our Bollywood Artists are ready to transport your audience to the heart of the Indian film industry.'),
(7, 'pic7.jpg', 'Fashion Shows', 'Elevate your brand with our expertly curated Fashion Shows, where runway meets innovation. Our event organizers ensure a seamless blend of style and sophistication, creating memorable experiences that leave a lasting impact.', 'Our team of seasoned professionals meticulously choreographs every detail, from selecting avant-garde venues to orchestrating seamless logistics, ensuring a mesmerizing spectacle that captivates both the fashion elite and enthusiasts alike.', 'Immerse yourself in the world of haute couture as we transform runways into living canvases, where designer\\\'s visions come to life with impeccable precision. Our fashion shows transcend mere apparel exhibitions; they are immersive journeys into the realms of creativity, innovation, and self-expression. From scouting top-tier models to collaborating with renowned designers, our commitment to excellence is unparalleled.', 'With an unwavering dedication to diversity and inclusion, our fashion shows celebrate a spectrum of styles, reflecting the rich tapestry of global fashion. Our events not only showcase established designers but also provide a platform for emerging talents, fostering the growth of the fashion industry. The synergy of music, lighting, and choreography ensures an unparalleled sensory experience, leaving a lasting impression on every attendee.', 'Our Fashion Show services extend beyond the runway, offering comprehensive event management solutions. We handle everything from pre-event promotions to post-show evaluations, guaranteeing a seamless and stress-free experience for our clients. Whether it\\\'s a high-profile fashion week extravaganza or an intimate boutique presentation, we tailor our services to meet the unique needs of each client, ensuring their vision becomes a reality.'),
(8, 'pic8.jpg', 'Virtual Shows', 'Elevate your events with Virtual Shows, a cutting-edge platform offering event organizers seamless solutions for hosting immersive and engaging virtual experiences, redefining the future of event management.', 'Our project services bring to life a revolutionary platform that transcends physical limitations, delivering immersive and unforgettable experiences to audiences worldwide. Virtual Shows offer a dynamic fusion of creativity and technology, enabling organizers to host events that captivate attendees from the comfort of their homes.', 'Our dedicated team of experts ensures seamless integration of high-quality audio and video production, creating a virtual stage that rivals the excitement of live performances. From concerts and conferences to product launches and trade shows, Virtual Shows provide a versatile solution for a myriad of events. The customizable nature of our platform allows organizers to tailor the virtual environment to suit the theme and branding of their event, providing a personalized and memorable experience for attendees.', 'Attendees can enjoy the convenience of accessing Virtual Shows from any location, eliminating geographical constraints and opening up new possibilities for global participation. With interactive features such as live chats, Q&A sessions, and virtual networking spaces, our platform fosters meaningful connections between attendees, speakers, and performers. Real-time analytics and engagement metrics empower organizers with valuable insights, enabling them to fine-tune and enhance future events.', 'Our Virtual Shows platform is designed with user-friendly interfaces, ensuring a smooth and enjoyable experience for both organizers and attendees. Robust security measures are in place to protect the integrity of events, guaranteeing a safe and secure virtual environment. The platform supports a variety of devices, making it accessible to a diverse audience across desktops, tablets, and smartphones.'),
(9, 'pic9.jpg', 'Ring Ceremony', 'A Ring Ceremony is a special event where individuals exchange and wear rings to symbolize commitment and unity. The ceremony typically involves the exchange of vows and the representation of love.', 'we understand that the union of two souls is a momentous occasion that deserves to be celebrated with unparalleled elegance and grace. Our dedicated team of event organizers is here to transform your vision into a breathtaking reality, ensuring that every detail of your Ring Ceremony reflects the love and commitment you share.', 'From conceptualization to execution, we take pride in orchestrating seamless and unforgettable Ring Ceremonies. Our team works closely with you to personalize every aspect, from the choice of venue to the intricate decor that will set the stage for your special day. Whether you envision a traditional ceremony or a contemporary celebration, we have the expertise to curate an event that perfectly captures the essence of your unique love story.', 'Our meticulous planning and attention to detail ensure that you and your guests can relish in the joy of the occasion, leaving the stress of coordination to us. From coordinating vendors to managing the timeline, we handle the logistics with precision, allowing you to focus on the significance of the ceremony.', 'With our Ring Ceremony services, your once-in-a-lifetime moment becomes a timeless memory. Let us be the architects of your love story, crafting an event that not only marks the beginning of your journey together but also leaves an indelible imprint on the hearts of all who attend.'),
(10, 'pic10.jpg', 'Business Meet-Up', 'Elevate your networking game at our Business Meet-Up, where industry leaders converge for dynamic discussions and valuable connections. Unleash the potential of your projects with unparalleled opportunities for collaboration.', 'We specialize in creating tailored agendas that strike the perfect balance between informative sessions and interactive networking opportunities. Whether you\\\'re organizing a conference, seminar, or industry-specific gathering, our team is dedicated to crafting an event that aligns seamlessly with your business objectives.', 'In the digital age, virtual connectivity is just as vital as face-to-face interactions. Our web-based solutions leverage cutting-edge technology to facilitate online business meet-ups, ensuring that geographical constraints do not hinder the growth of your network. Through our user-friendly platforms, participants can engage in real-time discussions, attend virtual workshops, and forge connections with ease.', 'At the core of our Business Meet-Up services is a commitment to fostering a dynamic and inclusive environment. We prioritize attendee experience, offering personalized matchmaking services that connect like-minded professionals, sparking meaningful conversations and potential collaborations. Whether you\\\'re a startup entrepreneur or a seasoned industry leader, our events provide a platform for individuals to exchange ideas, share expertise, and explore new business opportunities.', 'Choose our event organizer project services for your next business meet-up, and let us transform your vision into a seamlessly executed and highly impactful event. Elevate your networking game and watch as your professional connections flourish, and your business reaches new horizons.'),
(11, 'pic11.jpg', 'Birthday Celebration', 'Elevate your special day with our expert event organizers, turning your birthday celebration into an unforgettable experience with seamless planning, creative themes, and personalized touches.', 'we understand that birthdays are not merely milestones but cherished moments that deserve to be celebrated in style. Our expert team of event organizers is dedicated to curating seamless and joyous birthday experiences that will leave a lasting impression on both the celebrant and their guests.', 'Imagine a birthday celebration where every detail is meticulously planned and executed, from the thematic decor that reflects the personality of the guest of honor to the delectable menu that tantalizes taste buds. With our event organizers at the helm, you can relinquish the stress of planning and immerse yourself in the sheer delight of the celebration.', 'We specialize in creating tailor-made experiences, ensuring that each birthday celebration is unique and personalized. Whether it\\\'s an intimate gathering or a grand extravaganza, our team possesses the creativity and organizational prowess to turn your vision into a reality. From conceptualization to execution, we handle it all, leaving you free to savor every moment of the celebration.', 'Our commitment goes beyond just organizing events; we aim to craft memories that linger in the hearts of the celebrants and their guests. Trust us to bring your birthday vision to life, creating a day filled with laughter, love, and unforgettable moments. Celebrate with confidence, celebrate with style ï¿½ choose our Birthday Event Organizer services for an experience that transcends the ordinary.'),
(12, 'pic12.jpg', 'Anniversary Celebration', 'Celebrate milestones with our Anniversary Celebration event services! Elevate your special day with seamless planning and unforgettable experiences tailored by our expert event organizers for Anniversary Celebration.', 'Celebrate your special milestones with unparalleled elegance and seamless execution by choosing our Anniversary Celebration services. we understand the significance of commemorating love, commitment, and enduring partnerships. Our expert event organizers are dedicated to turning your anniversary celebration into a timeless and unforgettable experience.', 'From intimate gatherings to grand soirï¿½es, we tailor our services to suit the unique essence of your relationship. Our meticulous planning ensures every detail is accounted for, allowing you to revel in the joy of your special day without any stress. Whether it\\\'s a romantic dinner for two, a family reunion, or a large-scale party, we pride ourselves on creating atmospheres that reflect your love story and resonate with your guests.', 'Our team of seasoned professionals collaborates with you to curate a personalized theme, select exquisite venues, and coordinate seamless logistics. We prioritize creativity and innovation, infusing every anniversary celebration with a touch of magic. From elegant decor to delectable cuisine, we strive to exceed your expectations, ensuring that your anniversary becomes a cherished memory for years to come.', 'With our Anniversary Celebration services, you can entrust the planning and execution to us, allowing you to focus on savoring the moment with your loved ones. Let us transform your vision into reality and create an anniversary celebration that captures the essence of your journey together. Contact us today to embark on a journey of unparalleled celebration and create memories that will last a lifetime.'),
(13, 'pic13.jpg', 'Christmas Carnival', 'Transform your event into a winter wonderland with our Christmas Carnival services, offering festive decor, holiday entertainment, and unforgettable experiences that will enchant your guests and make your event truly magical.', 'we specialize in bringing your dream Christmas Carnival to life. Our dedicated team of event planners is passionate about creating unforgettable experiences that capture the spirit of the season. From twinkling lights to the merry melodies of carolers, we understand the importance of every detail to make your Christmas Carnival truly spectacular.', 'Immerse your guests in a winter wonderland filled with the warmth of holiday cheer. Our comprehensive event services cover everything from conceptualization to execution, ensuring a seamless and stress-free experience for you. . We pride ourselves on transforming your vision into a reality, exceeding expectations and creating cherished memories for all who attend.', 'we believe in the power of community and celebration. Our team is committed to understanding your unique preferences and tailoring the Christmas Carnival to reflect your individual style and values. Whether you envision a traditional celebration with timeless classics or a modern, cutting-edge experience, we have the expertise to make it happen.', 'Let us take the reins this holiday season, allowing you to savor the festivities and create lasting connections with your guests. From logistics and vendor coordination to entertainment and thematic design, we\\\'ve got every aspect of your Christmas Carnival covered. Choose Your Event for an unparalleled celebration that will leave a lasting imprint of joy and wonder in the hearts of all who attend.'),
(14, 'pic14.jpg', 'Freshers Party', 'Plan an unforgettable Freshers Party with our event organizer project services. From thematic decor to engaging activities, we ensure a vibrant and welcoming atmosphere for new students to kickstart their college journey.', 'Welcome to the realm of unforgettable beginnings! At our event organizing services, we specialize in curating vibrant and spirited Freshers Parties that mark the initiation of a new chapter in the lives of young enthusiasts. Our team of dedicated professionals understands the significance of this milestone event and works tirelessly to ensure it becomes a cherished memory for every participant.', 'Immerse yourself in an atmosphere of jubilant celebration as we bring creativity and innovation to the forefront of your Freshers Party. From selecting the perfect venue to designing captivating themes that resonate with the energy of new beginnings, we meticulously plan every detail to create an event that exceeds expectations. Our goal is to provide a platform where freshers can forge connections, build friendships, and embark on their academic journey with a sense of camaraderie.', 'With our event organizer services, you can expect seamless execution, attention to detail, and a commitment to transforming your vision into a spectacular reality. Whether it\\\'s interactive ice-breaking activities, engaging games, or themed decorations that reflect the spirit of your institution.', 'we tailor our services to align with your unique requirements. Let us craft an unforgettable Freshers Party experience that sets the stage for a memorable academic year. Together, let\\\'s create memories that will be cherished for a lifetime.'),
(15, 'pic15.jpg', 'Annual Party', 'Welcome to our Annual Party Event Organizer Project Services! At our core, we are dedicated to transforming your gatherings into unforgettable experiences. Our team of seasoned event organizers brings a wealth.', 'From conceptualization to execution, we pride ourselves on delivering tailored solutions that align with your vision and exceed your expectations. Our comprehensive range of services encompasses venue selection, theme development, catering, entertainment, and logistical coordination, guaranteeing a seamless and stress-free event for you and your guests.', 'Our web page serves as a gateway to explore the myriad possibilities and services we offer. Navigate through our portfolio showcasing successful past events, testimonials from satisfied clients, and detailed information on our service offerings. We prioritize transparency, ensuring you have all the information you need to make informed decisions about entrusting us with your annual party.', 'What sets us apart is our commitment to innovation and creativity. We understand that each annual party is unique, and we strive to infuse personality and originality into every aspect of the event. Whether you\\\'re envisioning a sophisticated gala, a themed extravaganza, or an intimate gathering, our team is poised to turn your ideas into a reality.', 'At Annual Party Event Organizer Project Services, we believe in turning moments into memories. Let us be the architects of your next unforgettable celebration. Contact us today to embark on a journey of event planning excellence, where your annual party becomes an extraordinary affair that lingers in the hearts and minds of your guests for years to come.');

-- --------------------------------------------------------

--
-- Table structure for table `e_state`
--

CREATE TABLE `e_state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(30) NOT NULL,
  `state_no` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `e_state`
--

INSERT INTO `e_state` (`state_id`, `state_name`, `state_no`) VALUES
(1, 'Arunachal Pradesh', 7),
(2, 'Andhra Pradesh', 7),
(3, 'Gujarat', 7),
(4, 'Maharashtra', 7),
(5, 'Rajasthan', 7),
(6, 'Madhya Pradesh', 7),
(7, 'Himachal Pradesh', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `emp_details`
--
ALTER TABLE `emp_details`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `eu_login`
--
ALTER TABLE `eu_login`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `eu_registration`
--
ALTER TABLE `eu_registration`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `e_area`
--
ALTER TABLE `e_area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `e_city`
--
ALTER TABLE `e_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `e_decprice`
--
ALTER TABLE `e_decprice`
  ADD PRIMARY KEY (`decprice_id`);

--
-- Indexes for table `e_dectype`
--
ALTER TABLE `e_dectype`
  ADD PRIMARY KEY (`dectype_id`);

--
-- Indexes for table `e_gallery`
--
ALTER TABLE `e_gallery`
  ADD PRIMARY KEY (`eg_id`);

--
-- Indexes for table `e_message`
--
ALTER TABLE `e_message`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `e_place`
--
ALTER TABLE `e_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `e_rate_or_feedback`
--
ALTER TABLE `e_rate_or_feedback`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `e_rent`
--
ALTER TABLE `e_rent`
  ADD PRIMARY KEY (`rent_id`);

--
-- Indexes for table `e_service`
--
ALTER TABLE `e_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_state`
--
ALTER TABLE `e_state`
  ADD PRIMARY KEY (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `emp_details`
--
ALTER TABLE `emp_details`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `eu_login`
--
ALTER TABLE `eu_login`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `eu_registration`
--
ALTER TABLE `eu_registration`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `e_area`
--
ALTER TABLE `e_area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `e_city`
--
ALTER TABLE `e_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `e_decprice`
--
ALTER TABLE `e_decprice`
  MODIFY `decprice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;

--
-- AUTO_INCREMENT for table `e_dectype`
--
ALTER TABLE `e_dectype`
  MODIFY `dectype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;

--
-- AUTO_INCREMENT for table `e_gallery`
--
ALTER TABLE `e_gallery`
  MODIFY `eg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `e_message`
--
ALTER TABLE `e_message`
  MODIFY `u_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `e_place`
--
ALTER TABLE `e_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `e_rate_or_feedback`
--
ALTER TABLE `e_rate_or_feedback`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `e_rent`
--
ALTER TABLE `e_rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `e_service`
--
ALTER TABLE `e_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `e_state`
--
ALTER TABLE `e_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
