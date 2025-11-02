-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2016 at 09:10 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `dressdetails`
--

CREATE TABLE `dressdetails` (
  `dressid` int(25) NOT NULL,
  `dressname` varchar(65) NOT NULL,
  `folder` varchar(20) NOT NULL,
  `dressimage` varchar(30) NOT NULL,
  `dressprice` int(10) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `ordereddate` date NOT NULL,
  `updateddate` date NOT NULL,
  `tab_id` int(11) NOT NULL,
  `div_id` int(11) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dressdetails`
--

INSERT INTO `dressdetails` (`dressid`, `dressname`, `folder`, `dressimage`, `dressprice`, `details`, `ordereddate`, `updateddate`, `tab_id`, `div_id`, `quantity`, `status`) VALUES
(1, 'Georgette Semistitched Salwar', 'images', 'dress7.jpg', 2000, 'It is long, below the knee,Silk fabric material,is in fashion too.\nThe style and shape of the kurta is very jazzy look. \nNeck shape is depth.', '2016-10-01', '0000-00-00', 0, 0, '0', 'not available'),
(2, 'Party Wear dress', 'images', 'dress3.jpg', 1500, 'Soft layers of black chiffon cascade down this elegant Sangria dress. The delicate layers of chiffon drape from the neckline to the flowing handkerchief hem to give this elegant slip dress a romantic look. The wide collar at the high neckline of this cocktail dress is embellished with contrasting beads in an intricate pattern that will garner many compliments', '2016-10-05', '0000-00-00', 0, 0, '3', 'available'),
(3, 'Party Wear Kurti fabric', 'images', 'dress14.jpg', 3000, 'Sangria presents this blue Anarkali kurta that highlights a dreamy silhouette and colourful print details making it the perfect definition of elegance and grace. It also features pink taping details and a mandarin collar that gives it a boost of style. This kurta can be teamed with a pink churidar and a pair of golden sandals.', '2016-10-05', '0000-00-00', 0, 0, '4', 'available'),
(4, 'Embroidered Salwar Suit', 'images', 'dress4.jpg', 2500, 'Split Salwar is the new fashion. Chiku red dress combination can win hearts will stick ouy. The dress will look more stylish and elegan after paired with high heels.', '2016-10-05', '0000-00-00', 0, 0, '4', 'available'),
(5, 'Party Wear Black Piece', 'images', 'dress5.jpg', 3500, 'This lace fit and flare mini dress by Lipsy is perfect for your next cocktail party. This short sleeve dress has tons of femininity, with elegant lace features. Pair this dress with your favourite black high heels and you will be all set for the night.', '2016-10-05', '0000-00-00', 1, 0, '4', 'available'),
(6, 'Casual Orange Suit', 'images', 'dress15.jpg', 1500, 'A charming coral color and ruffled faux-wrap skirt sweeten a crisp crepe dress darted at the bust.', '2016-10-05', '0000-00-00', 1, 0, '4', 'available'),
(7, 'Levis Mens Shirt', 'images', 'dress6.jpg', 4000, 'This stylish dress shirt features a woven herringbone pattern in blue. Designed with a French front, it''s cut with a spread collar for a trend-forward appeal.', '2016-10-05', '0000-00-00', 1, 0, '4', 'available'),
(8, 'Mufti Mens Wear', 'images', 'dress9.jpg', 5000, 'Featuring French cuffs and a smooth twill weave, this Pronto Uomo dress shirt exudes sharp modern style. The non-iron treatment defies wrinkles for a crisp, flawless look all day.', '2016-10-05', '0000-00-00', 1, 0, '4', 'available'),
(9, 'Mens Casual Wear', 'images', 'dress10.jpg', 2000, 'Slim fitting and stylish, this Calvin Klein dress shirt features a flexible collar for comfort, and a non-iron treatment for a crisp neat look all day.', '2016-10-05', '0000-00-00', 2, 0, '4', 'available'),
(10, 'Vanhuessen Mens Shirt', 'images', 'dress11.jpg', 1800, 'Made with AWEAR-TECH 37.5 technology this non-iron cotton-blend performance shirt features fabric that is triggered by your body temperature to either warm or cool itself depending on the situation.', '2016-10-05', '0000-00-00', 2, 0, '4', 'available'),
(11, 'Louis Philip Mens Casual', 'images', 'dress12.jpg', 1500, 'This slim fit dress shirt from Awearness by Kenneth Cole has a subtle, smooth sheen in a solid navy hue. Its on-trend styling features a point collar, and non-iron cotton for a crisp neat look all day.', '2016-10-05', '0000-00-00', 2, 0, '4', 'available'),
(12, 'Mens Formal Shirt', 'images', 'dress13.jpg', 2000, 'Made of soft, non-iron cotton, this spread-collar dress shirt has a fitted silhouette and non-breakable buttons. The non-iron treatment defies wrinkles for a crisp, flawless look all day.', '2016-10-05', '0000-00-00', 2, 0, '4', 'available'),
(13, 'Amar Sofas', 'images', 'fur1.jpg', 20000, 'This sofa style is designed for comfort.  Its signature design element is a back comprised of pillows separate from the frame.The reason for this design is to create a softer, more cushioned sofa with large cushions that aren’t taught within the frame of the sofa.', '2016-10-05', '0000-00-00', 0, 1, '4', 'available'),
(14, 'Sony Headphone', 'images', 'headphone.jpg', 3000, 'Modern large sectional sofa with accent pillows and ottoman.Hardwood frame with faux leather base upholstery and soft microfiber fabric.This sofa features a reversible chaise providing L/R configuration', '2016-10-05', '0000-00-00', 0, 1, '2', 'available'),
(15, 'Classical Sofas', 'images', 'sofa2.jpg', 15000, 'This design features in-built cushions, geometric shapes and comes in a host of different colours. A feat in experimental design, the bench seat was inspired by Op Art''s use of colour and geometric forms.', '2016-10-05', '0000-00-00', 0, 1, '4', 'available'),
(16, 'Royal Sofas', 'images', 'sofa3.jpg', 30000, ' The chesterfield sofa is known for its quilted or tufted style.Some have the tufted design on only the back and arms while others include it on the seating bench section as well. ', '2016-10-05', '2016-10-14', 0, 1, '4', 'available'),
(17, 'Philips SH390', 'images', 'headphone.jpg', 1200, 'This style of sofa is all about minimalist design and clean lines.  There are many varieties of this style of sofa.  It’s designed to look good and be comfortable – the result is it’s not the most comfortable furniture, but in coupled with the right home design, it can look fabulous.', '2016-10-05', '0000-00-00', 1, 1, '4', 'available'),
(18, 'Scull Candy J567', 'images', 'headphone.jpg', 2500, 'Created from a vintage cast iron bath and upholstered in fabric of your choice, this ultra-cool piece of furniture was recycled by designers at Reestore. Perfect for those of you who fancy something different and have a spare two grand knocking around.', '2016-10-05', '0000-00-00', 1, 1, '4', 'available'),
(19, 'JBL 800M', 'images', 'headphone4.jpg', 1000, 'Made of 100% organic cotton. Features a percale weave. A percale weave is noticeably denser and wears well over time.', '2016-10-05', '0000-00-00', 1, 1, '4', 'available'),
(20, 'IBall Power Beats', 'images', 'headphone2.jpg', 1500, 'This well polished mahogany table not only goes well with this classic room but as you can see, it’s made to handle a crowd without taking up too much space. Wide table legs and a classic design is brought to a modern era with clever use of deep slate gray seating that is an elegant touch to the dining space.', '2016-10-05', '0000-00-00', 1, 1, '4', 'available'),
(21, ' Royal curtains', 'images', 'cur1.jpg', 1000, 'A Stylish window curtain by Welspun Snapshot. These curtains are adorned with intricate patterns.', '2016-10-05', '0000-00-00', 2, 1, '4', 'available'),
(22, 'Cereamic cup set', 'images', 'coffee1.jpg', 700, ' Mughal Hand Painting From Khurja', '2016-10-05', '0000-00-00', 2, 1, '4', 'available'),
(23, 'Modern Sofas', 'images', 'sofa2.jpg', 35000, 'Switched (Hocking novel) Switched is the first book of the young adult paranormal literature series the Trylle Trilogy. It follows the story of Wendy Everly as she meets Finn Holmes, who informs her of her inherited royal status and true identity as a member of the Trylle.', '2016-10-05', '0000-00-00', 2, 1, '4', 'available'),
(24, 'Royal Set', 'images', 'bed2.jpg', 40000, 'Junior Cricket Set is made out of High Quality Material. It Comes in Size.5 with whole items of Cricket Includes Junior Cricket Bat Size No.5, Batting Pad Boys Size, Batting Glove Boys Size, Thigh Pad, Elbow Guard, Abdominal Guard, Cricket helmet & Shoulder Bag', '2016-10-05', '0000-00-00', 2, 1, '4', 'available'),
(25, 'iphone5s', 'images', 'iphone1.jpg', 42000, 'The Apple iPhone 5s is a single SIM (GSM) smartphone that accepts a Nano-SIM. Connectivity options include Wi-Fi, GPS, Bluetooth, 4G (with support for Band 40 used by some LTE networks in India). Sensors on the phone include Proximity sensor, Ambient light sensor, Accelerometer, and Gyroscope.', '2016-10-05', '0000-00-00', 0, 2, '4', 'available'),
(26, 'iphone6s', 'images', 'iphone2.jpg', 65000, 'The Apple iPhone 6s is powered by A9 processor and it comes with 2GB of RAM. The phone packs 16GB of internal storage cannot be expanded. ... Sensors on the phone include Proximity sensor, Ambient light sensor, Accelerometer, and Gyroscope.', '2016-10-05', '0000-00-00', 0, 2, '3', 'available'),
(27, 'iphone7s', 'images', 'iphone3.jpg', 75000, 'Wide colour display (P3) 625 cd/m2, max brightness (typical), Dual-domain pixels for wide viewing angles, Fingerprint-resistant, oleophobic coating Support for display of multiple languages and characters simultaneously, Display Zoom Reachability', '2016-10-05', '0000-00-00', 0, 2, '4', 'available'),
(28, 'flipcover', 'images', 'iphone6.jpg', 1000, 'Edge to Edge Designs, Ultra Lightweight Rich, premium look for your phone, Life Long Print, Precise fit with easy access to buttons, 6 Month Warrany on the design', '2016-10-05', '0000-00-00', 0, 2, '4', 'available'),
(29, 'lenovo vibe k5 note', 'images', 'l2.jpg', 12000, 'Lenovo Vibe K5 Note 4GB Brief Description. The phone is 8.49-mm thin , and tips the scale at 152 grams. The phone is powered by a 1.8 GHz Octa core Mediatek MT6755 Helio P10 processor and it comes with 4 GB of RAM.', '2016-10-05', '0000-00-00', 1, 2, '4', 'available'),
(30, 'flipcover', 'images', 'f.jpg', 500, 'The Samsung Galaxy S 6 S-view Flip Cover Protects Your Screen When It Is Not In Use And Is Easily Flipped Open For Full Access To The Screen. When Closed, The S-view Cover Offers Instant Access To Critical Features Through A Unique Window Interface, Thanks To The Samsung Id Chip. View The Home Screen To Check The Time, Weather And Other Status Items. Accept Or Reject Incoming Calls With Just A Swipe, Or Reject Calls With A Preset Message. ', '2016-10-05', '0000-00-00', 1, 2, '4', 'available'),
(31, 'Oppo', 'images', 'appo.jpg', 800, 'The Oppo N1 is a single SIM (GSM) smartphone that accepts a Micro-SIM. Connectivity options include Wi-Fi, GPS, Bluetooth, NFC. Sensors on the phone include Proximity sensor, Ambient light sensor, Accelerometer, and Gyroscope. ', '2016-10-05', '0000-00-00', 1, 2, '4', 'available'),
(32, 'Samsung j7', 'images', 'gadget2.jpg', 15000, 'The Samsung Galaxy J7 is powered by 1.5GHz octa-core Samsung Exynos 7580 processor and it comes with 1.5GB of RAM. The phone packs 16GB of internal storage that can be expanded up to 128GB via a microSD card. Sensors on the phone include Proximity sensor, Accelerometer.', '2016-10-05', '0000-00-00', 1, 2, '4', 'available'),
(33, 'whirlpool', 'images', 'w1.jpg', 10000, 'With stylish design as well as smart features, this range of whirlpool semi-automatic washing machines offers you a convenient washing experience. The range comes with 6.2 to 8.2 kg capacity which provides you ample space to load lots of clothes.', '2016-10-05', '0000-00-00', 2, 2, '4', 'available'),
(34, 'godrej', 'images', 'split.jpg', 20000, 'Series	5-Star Model	GSC 24 APZ 5 RWOU Condenser	Copper Cooling capacity (Watts)	6000 Power Input (WATTS)	1714 ISEER	3.50 IDU (WXDXH) CM	110 x 23.5 x 33 ODU (WXDXH) CM	80 x 30 x 69 IDU Net WEight - Kg	16 ODU Net WEight - Kg	45 Refrigerant	R410A', '2016-10-05', '0000-00-00', 2, 2, '4', 'available'),
(35, 'Prestige', 'images', 'oven.jpg', 4000, 'Prestige oven toaster griller comes with advanced feature that let you prepare delicious pizzas, oil free rotis and parathas, bake cakes, grill vegetables and meat to perfection. No doubt, it is a prefect accessory for your contemporary kitchen.', '2016-10-05', '0000-00-00', 2, 2, '4', 'available'),
(36, 'Sony plasma', 'images', '7.jpg', 10000, 'The Sony plasma TVs have always had excellent color reproduction and vibrancy. Colors on this display were rich and soothing and the brightness level was excellent on this plasma. Sony has corrected the "washed out, faded" image appearance of the previous 42" plasma 42B1U with the new and improved scan converter. Contrast has been significantly improved as well to an unspecified (by Sony) level.', '2016-10-05', '0000-00-00', 2, 2, '4', 'available'),
(46, 'jeans', 'images', '3.jpg', 1000, 'asss ', '0000-00-00', '0000-00-00', 0, 3, '2', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `user_id` int(11) NOT NULL,
  `accountno` varchar(11) NOT NULL,
  `cvv` varchar(4) NOT NULL,
  `balance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`user_id`, `accountno`, `cvv`, `balance`) VALUES
(1, '', '', ''),
(2, 'ac1234ab1', '293', '50000'),
(3, 'ac1234ab2', '134', '56000'),
(4, 'acc1234ab3', '123', '0');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin_mst`
--

CREATE TABLE `t_admin_mst` (
  `row_id` int(10) NOT NULL,
  `adm_username` varchar(20) NOT NULL,
  `adm_password` varchar(10) NOT NULL,
  `adm_email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_admin_mst`
--

INSERT INTO `t_admin_mst` (`row_id`, `adm_username`, `adm_password`, `adm_email`) VALUES
(1, 'pavani', '123', 'pavani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `order_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `quantity_available` int(11) NOT NULL,
  `accountno` varchar(11) NOT NULL,
  `cvv` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`order_no`, `user_id`, `product_id`, `order_date`, `quantity_available`, `accountno`, `cvv`) VALUES
(21, 1, 1, '2016-10-11', 2, '34567893893', '893'),
(22, 1, 1, '2016-10-11', 1, '34567893893', '893'),
(27, 1, 2, '2016-10-12', 4, '4567892', '234'),
(28, 1, 14, '2016-10-12', 3, 'acc1234ab3', '123'),
(29, 1, 1, '2016-10-12', 0, '34567893893', '893'),
(30, 1, 2, '2016-10-12', 0, '4567892', '234'),
(31, 1, 4, '2016-10-12', 3, '345678921', '921'),
(32, 1, 14, '2016-10-14', 2, 'acc1234ab3', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `mobile`) VALUES
(1, 'pinky', 'pinky@gmail.com', '283618c6db1d5d08b828e0c6548f882f', '9638286013'),
(2, 'himaja', 'himaja@gmail.com', '33f706919c29aee6169be6a90cc30066', '9662936576');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`) VALUES
(1, 1, 4),
(6, 1, 3),
(12, 1, 11),
(15, 1, 13),
(17, 1, 16),
(18, 1, 4),
(19, 1, 4),
(20, 1, 4),
(21, 1, 14),
(22, 1, 4),
(23, 1, 4),
(24, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dressdetails`
--
ALTER TABLE `dressdetails`
  ADD PRIMARY KEY (`dressid`);

--
-- Indexes for table `t_admin_mst`
--
ALTER TABLE `t_admin_mst`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dressdetails`
--
ALTER TABLE `dressdetails`
  MODIFY `dressid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `t_admin_mst`
--
ALTER TABLE `t_admin_mst`
  MODIFY `row_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
