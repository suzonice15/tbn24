-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 02:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbn24`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registered_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `user_phone`, `password`, `status`, `picture`, `registered_date`) VALUES
(13, 'ddd', 'a@gmail.com', '5555555555555', 'c4ca4238a0b923820dcc509a6f75849badmin', 'super-admin', '1600763415.webp', '2020-09-22'),
(14, 'isolutions', 'admin@isolutionsbd.com', '0173830567', '7ece99e593ff5dd200e2b9233d9ba654admin', 'super-admin', '1601210874.webp', '2020-09-27'),
(15, 'Tbn24', 'tbn24@gmail.com', '1(718)808-9000', '81dc9bdb52d04dc20036dbd8313ed055admin', 'super-admin', '1601969312.png', '2020-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `app_seating`
--

CREATE TABLE `app_seating` (
  `app_setting_id` int(11) NOT NULL,
  `app_time_zone` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `google_app_id` varchar(100) DEFAULT NULL,
  `instagram_id` varchar(100) DEFAULT NULL,
  `live_url` varchar(250) DEFAULT NULL,
  `live_url_bd` varchar(250) DEFAULT NULL,
  `program_start_type` varchar(50) DEFAULT NULL,
  `youtube_chanel` varchar(250) DEFAULT NULL,
  `google_map` varchar(500) DEFAULT NULL,
  `contact_address` varchar(200) DEFAULT NULL,
  `contact_phone` varchar(20) DEFAULT NULL,
  `contact_email` varchar(20) DEFAULT NULL,
  `linkedIn` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `ios_app_link` varchar(250) DEFAULT NULL,
  `after_login_alert` int(11) DEFAULT NULL,
  `before_login_alert` int(11) DEFAULT NULL,
  `five_minite_modal_note` varchar(250) DEFAULT NULL,
  `one_hour_modal_note` varchar(250) DEFAULT NULL,
  `bad_comment_word` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_seating`
--

INSERT INTO `app_seating` (`app_setting_id`, `app_time_zone`, `facebook`, `google_app_id`, `instagram_id`, `live_url`, `live_url_bd`, `program_start_type`, `youtube_chanel`, `google_map`, `contact_address`, `contact_phone`, `contact_email`, `linkedIn`, `twitter`, `ios_app_link`, `after_login_alert`, `before_login_alert`, `five_minite_modal_note`, `one_hour_modal_note`, `bad_comment_word`) VALUES
(1, 'America/New_York', 'https://www.facebook.com/tbn24usa', 'https://play.google.com/store/apps/details?id=com.tbn.live', 'https://www.instagram.com/tbn24usa/', 'http://dog.dg21bd.com/TBN243/index.m3u8', 'http://dog.dg21bd.com/TBN242/index.m3u8', 'manualy', 'UCv_oQ-sRZoJdEX4K5fQ6q6w', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.5574698989853!2d-73.90740168483684!3d40.749762043241915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25f1bece75213%3A0x43f4dd9a13836756!2s37-19+57th+St%2C+Flushing%2C+NY+11377%2C+USA!5e0!3m2!1sen!2sbd!4v1495992827453', '37-19, 57th street, woodside,NY-11377 United States', '+1(718)808-9000', 'info@tban24.com', NULL, 'https://twitter.com/', 'https://apps.apple.com/us/app/tbn24/id963111684', 60, 5, 'You must login if you want to see more time . . .', 'Please login again for regular viewing', 'sujon');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_title`, `status`, `created_date`) VALUES
(2, 'Mango', 1, '2020-09-28'),
(3, 'computer', 1, '2020-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `created_data` date NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `comments`, `created_data`, `status`, `name`, `email`) VALUES
(10, 31, 'good tutorial', '2020-10-21', 1, 'mitul', 'suzonice1@gmal.com'),
(12, 31, 'You are good boy', '2020-10-21', 1, 'abdullah', 'abdullah@gmal.com'),
(13, 31, 'You are good boy', '2020-10-21', 1, 'abdullah', 'abdullah@gmal.com'),
(14, 31, 'You are good boy', '2020-10-21', 1, 'abdullah', 'abdullah@gmal.com'),
(15, 31, 'You are good boy', '2020-10-21', 1, 'abdullah  soli', 'abdullah@gmal.com'),
(16, 31, 'You are good boy', '2020-10-21', 1, 'abdullah  soli', 'mdbdullah@gmal.com'),
(17, 31, 'd', '2020-10-21', 1, 'mitul', 'suzonice1@gmal.com'),
(18, 31, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it ov', '2020-10-21', 1, 'whow are your', 'zodumia@gmail.com'),
(19, 31, 'ddd', '2020-10-21', 1, 'mitul', 'suzonice1@gmal.com'),
(20, 31, 'ddd', '2020-10-21', 1, 'mitul', 'suzonice1@gmal.com'),
(21, 31, 'ddd', '2020-10-21', 1, 'mitul', 'suzonice1@gmal.com'),
(22, 31, 'Nice Very Good', '2020-10-21', 1, 'Juel ali', 'juel@gmal.com'),
(24, 31, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section', '2020-10-21', 1, 'Juel ali', 'juel@gmal.com'),
(25, 31, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section', '2020-10-21', 1, 'Juel ali', 'juel@gmal.com'),
(26, 31, 'through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45', '2020-10-21', 1, 'through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45', 'suzonice1@gmal.com'),
(27, 28, 'Your are good boy brother\nro, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '2020-10-21', 1, 'Uzool ali', 'uzool@gmail.com'),
(28, 27, 'what is your name ?', '2020-10-21', 1, 'mitul', 'ddd1@gmal.com'),
(29, 27, 'ssssssss', '2020-10-21', 1, 'ssssssssss', 'suzonice1@gmal.com'),
(30, 27, 'ff', '2020-10-21', 1, 'mitul', 'suzonice1@gmal.com'),
(31, 26, 'ntrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum pas', '2020-10-22', 1, 'Abdul aziz', 'aziz@gmail.com'),
(32, 26, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem I', '2020-10-22', 1, 'mitul', 'suzonice1@gmal.com'),
(33, 26, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem I', '2020-10-22', 1, 'mitul', 'suzonice1@gmal.com'),
(34, 26, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ip bad fack', '2020-10-22', 1, 'mitul', 'suzonice1@gmal.com'),
(39, 26, 'dd', '2020-10-22', 1, 'mitul', 'suzonice1@gmal.com'),
(40, 26, 'fff', '2020-10-22', 1, 'mitul', 'suzonice1@gmal.com'),
(41, 26, 'suzon', '2020-10-22', 1, 'mitul', 'suzonice1@gmal.com'),
(42, 26, 'sujonyyyyyyyyy', '2020-10-22', 1, 'mitul', 'suzonice1@gmal.com');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_subject` varchar(250) NOT NULL,
  `contact_message` text NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `status`, `created_date`) VALUES
(1, 'sujon', 'admin@isolutionsbd.com', 'dd', 'ff', 1, '2020-09-27 00:00:00'),
(2, 'sujon', 'info@isolutionsbd.com', 'fff', 'd', 1, '2020-09-27 00:00:00'),
(3, 'sujon', 'admin@isolutionsbd.com', 'dd', 'dd', 1, '2020-09-27 00:00:00'),
(4, 'shahinul islam', 'suzonice10@gmal.com', 'how  can help you ?', 'I need your help  I need your help I need your help \r\nI need your help  I need your help I need your help \r\nI need your help  I need your help I need your help', 1, '2020-09-27 18:41:12'),
(5, 'mitul', 'suzonice1@gmal.com', 'mmmm', 'ddd', 0, '2020-10-22 15:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `document_id` int(11) NOT NULL,
  `document_title` varchar(200) DEFAULT NULL,
  `document_parmalink` varchar(200) DEFAULT NULL,
  `document_description` text DEFAULT NULL,
  `document_download` varchar(250) DEFAULT NULL,
  `create_date` date NOT NULL DEFAULT current_timestamp(),
  `document_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`document_id`, `document_title`, `document_parmalink`, `document_description`, `document_download`, `create_date`, `document_status`) VALUES
(3, 'Coronavirus Worldometer Section', 'corona', '<h2>Comparisons:</h2>\r\n\r\n<ul>\r\n	<li>Every year an estimated 290,000 to 650,000 people die in the world due to complications from seasonal influenza (flu) viruses. This figure corresponds to 795 to 1,781 deaths per day due to the seasonal flu.</li>\r\n	<li>SARS (November 2002 to July 2003): was a coronavirus that originated from Beijing, China, spread to 29 countries, and resulted in 8,096 people infected with 774 deaths (fatality rate of 9.6%). Considering that SARS ended up infecting 5,237 people in mainland China, Wuhan Coronavirus surpassed SARS on January 29, 2020, when Chinese officials confirmed 5,974 cases of the novel coronavirus (2019-nCoV). One day later, on January 30, 2020 the novel coronavirus cases surpassed even the 8,096 cases worldwide which were the final SARS count in 2003.</li>\r\n	<li>MERS (in 2012) killed 858 people out of the 2,494 infected (fatality rate of 34.4%).</li>\r\n</ul>\r\n\r\n<h2>Coronavirus Worldometer Sections:</h2>', 'https://www.worldometers.info/coronavirus/', '2020-10-15', 1),
(4, 'Lorem Ipsum', 'lorem-ipsum', '<h1>What Are the Different Types of Governments?</h1>\r\n\r\n<p><strong>Different Types of Governments. </strong>Some writers on <a href=\"https://www.politicalscienceview.com/\">Political Science</a> classify the forms of government as the forms of the State. But this is wrong. There can be no forms of the state. All States are alike in their nature and all combine the same essential elements <a href=\"https://www.politicalscienceview.com/the-population-of-the-states/\">population</a>, territory, organization and unity or <a href=\"https://www.politicalscienceview.com/sovereignty/\">sovereignty</a>. Differences in population and territory do not make any difference in their status of Statehood. A distinction is sometimes made between a City State, a nation State, and a world empire. But this distinction has no practical value in <a href=\"https://www.politicalscienceview.com\">Political Science</a>, for the classification of States on the basis of territory and population is a mere historical description, and a fallacy Coming down from Aristotle&rsquo;s time when no distinction was made between the State and government To classify States on the basis of unity or sovereignty is also impossible. All States are sovereign and all sovereign States are equal. It is, therefore, illogical to classify equals.<br />\r\n<iframe frameborder=\"0\" scrolling=\"no\" src=\"https://ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&amp;OneJS=1&amp;Operation=GetAdHtml&amp;MarketPlace=US&amp;source=ss&amp;ref=as_ss_li_til&amp;ad_type=product_link&amp;tracking_id=anisurrups-20&amp;language=en_US&amp;marketplace=amazon&amp;region=US&amp;placement=3319191705&amp;asins=3319191705&amp;linkId=ee96553e9f5e035d0d03310e2e9c800e&amp;show_border=true&amp;link_opens_in_new_window=true\"></iframe></p>\r\n\r\n<p>But States do differ in their organization. The<a href=\"http://www.politicalscienceview.com/the-functions-of-international-organizations/\" rel=\"nofollow noopener noreferrer\" target=\"_blank\"> organization </a>of the State is its government and it is through the instrument of the government that the State formulates, expresses, and realizes its purposes, The purpose of every State is the same, the well being of its people, and the form of government is the expression of the way in which the purpose of the State is to be realized. This involves the problem of determining in whose hands is vested the legal authority of the State, to what extent is actual use made of it, what are the instrumentalists of organs employed in its use, and what rules and procedure are followed by such organs in performing their functions? These differences are wide from State to State and matter a good deal in differentiating the organization of one State from another. The form of government is, therefore, the actual basis of division.</p>\r\n\r\n<h2>Traditional Classifications:</h2>\r\n\r\n<h3>Aristotle&rsquo;s Classification:</h3>\r\n\r\n<p>The traditional classifications of government follow the course Set by <a href=\"https://www.politicalscienceview.com/aristotle-politics-book/\">Aristotle</a>. Aristotle, however, was not original. He borrowed from <a href=\"https://www.politicalscienceview.com/the-republic/\">Plato</a> as Plato had borrowed from Socrates Aristotle based his classification on two principles:</p>\r\n\r\n<p><strong>1. The number of persons who exercise supreme power, that is, the location of sovereignty within the State&nbsp; and</strong></p>\r\n\r\n<p><strong>2. The ends they seek to serve.</strong></p>\r\n\r\n<p>Applying the first, the numerical principle, Aristotle&rsquo;s said, if sovereignty resided in person it is <a href=\"https://en.wikipedia.org/wiki/Monarchy\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">Monarchy,</a> if it resided in a small minority of the population, it is Aristocracy and if it resides in a large proportion of the population, it is Polity. Having said so, Aristotle, then, proceeded to distinguish between the normal and perverted x forms of the State, basing his conclusions on the ends which the rulers sought to serve By a normal State, Aristotle meant one guided and ruled by law and justice. The rules or the rulers in such a State always aim at the good of the community as a whole. By perverted State, he meant, one guided and ruled by the selfish and capricious, without law and without restraint. The ruler or the rulers in such a State were selfish and he or they exercised power vested in them for his or their own benefits rather than for the benefits of the community as a whole</p>\r\n\r\n<p>Monarchy, Aristocracy and Polity were, according to Aristotle, normal forms of the State. In their perverted from they became Tyranny, Oligarchy, and Democracy. Tyranny Was the degenerated form of Monarchy, Oligarchy the degenerated form of Aristocracy and Democracy the degenerated form of Polity. For Aristotle, Monarchy was the best and Tyranny the worst. Tyranny placed in the hands of the king, arbitrary control over the lives and fortunes of the citizens and all affairs of the State were directed to his own good. In Oligarchy, the wealthy few ruled for selfish ends and they used their powers and privileges for the oppression of the common people. Democracy meant rule of the mob and in a democratic State the interests of none were safe as there would be confusion all round.</p>\r\n\r\n<p>Although Aristotle held that Monarchy, the rule of a true and good king, would be the best, yet, at the same time, he recognized certain practical difficulties in attaining the best. He, therefore, concluded that Polity was the best, a democratic form of government with constitutional guarantees, as a student of Political Science would now define it Aristotle pointed out that if Polity were to disintegrate into its perverted form the result would not be so bad as the perverted forms of Monarchy and Aristocracy, namely, Tyranny and Oligarchy.</p>\r\n\r\n<p>Aristotle&rsquo;s classification may be stated in the following tabular form:</p>\r\n\r\n<p><a href=\"http://www.politicalscienceview.com/what-are-the-different-types-of-governments/types-of-government/\"><img alt=\"Different Types of Governments\" src=\"https://i1.wp.com/www.politicalscienceview.com/wp-content/uploads/2018/07/government.jpg?resize=640%2C141\" style=\"height:141px; width:640px\" /></a></p>\r\n\r\n<p>Types of Government</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Two points about this classification deserve attention.</p>\r\n\r\n<p>First, Aristotle draws a clear distinction between aristocracy and Oligarchy, whereas modern usage does not differentiate between the two and we often use them synonymously. Secondly, democracy for Aristotle had not the same meaning as it has for us. He regarded it as a perverted form, a mob rule, whereas we regard democracy as the best form of government The perverted form of democracy, according to the modern use, is mobocracy or ochlocracy. Moreover, modem Sociologists have clearly shown that there is no government of the many All governments are really governments of the few, or, in fact, oligarchies. Nowhere in the world do the people or even a substantial number of them rule. In all States the exercise of government is left to a few hands, while the determination of policy is actually in the hands of a yet smaller minority, the political leaders. The Cabinet in Britain is the supreme directing authority, the magnet of policy as Barker calls it, and it now consists of sixteen or eighteen members. The actual determination, control and direction of cabinet policy rests still in a few hands, the inner cabinet. The Executive power in the United states of America is vested in the President. He has his cabinet, but the role of the cabinet there is simply advisory. The policy flows from the President, though it may be influenced by the advice tendered by the cabinet</p>\r\n\r\n<h4>Cycle of Aristotle&rsquo;s Political Change:</h4>\r\n\r\n<p>Like his teacher Plato, Aristotle, too, subjected his forms of the State to cyclic political changes. Aristotle did not merely classify the various forms of the State He even marked out how in the course of history one form of the State had given place to another. Just as the wheels of a cycle revolve, so do the forms of the State. His cycle of political change starts from monarchy. The first State, he says, was monarchic and the king governed his people with love and justice, dedicating himself to heir service. In course of time, kings forgot their duty to the people With the degeneration of the character and aims of the monarchs, it became Tyranny when government was no longer directed towards the public good. But a tyrannical government could not continue for long.</p>\r\n\r\n<p>The people ultimately revolted and succeeded in overthrowing the rule of the tyrant and replaced it by a government of the few talented persons, who&nbsp; were guided by the ideas of the common good. Aristocracy, a government of the few for the welfare of the people, took the place of monarchy. With the lapse of time, the best few also degenerated. The ideals of public spirit which inspired them in the beginning, disappeared. Aristocracy lapsed into Oligarchy, But the people could not for long tolerate a government the aim of which was the benefit of the ruling class alone. When the opportunity came, citizens as. a whole made a successful revolt against such authority and established a Polity, the supreme power being vested in the hands of a large proportion of the population and it was used by them for the common good. When Polity became perverted it was substituted by Democracy.</p>\r\n\r\n<p>Democracy, according, to Aristotle&rsquo;s terminology, was a rule by the mob which had always been an intolerable confusion. There was neither certainty nor stability. It was at this stage that some powerful warrior statesman, imbued with the spirit of service for the common weal, came to the forefront and took the reign of government in his own hands. Monarchy was, again, established and, thus, revolved Aristotle&rsquo;s cycle of political change. The first governments, says Aristotle,were kingship, probably for this reason, because of old, when cities were small, men of eminent virtue were few. They were made kings because they were benefactors, and benefits can only be bestowed by good men. But When many persons equal in merit arose, no longer enduring the preeminence of one they desired to have a commonwealth and set up a constitution. The ruling class soon deteriorated and enriched themselves out of the public treasury, riches became the path to honor, and so oligarchies naturally grew up. These passed into tyrannies, and tyrannies Into democracies for love of gain in the ruling classes was always tending to diminish their number and so to strengthen the masses, who in the end set upon their number, and so to strengthen the masses, who in the end set upon their masters and established democracies.</p>\r\n\r\n<h3>Criticism of Aristotle&rsquo;s Classification:</h3>\r\n\r\n<p>Such is Aristotle&rsquo;s classification. The cycle of political change given by him is fully corroborated by the history of the Greek City a States in the centuries preceding the Peloponnese war. Recent history, too, provides examples of a similar political progression. The last phase of political anarchy to be suppressed by a military autocracy is a common feature of our own times and it reminds s us of various coups detat, the most recent being one led by General Naguib in Egypt,it Brigadier Kassem in Iraq, General Ayub in Pakistan, Lt.General Ibrahim Abhoud in Sudan, General Daud in Afghanistan. General Zia-ul-Haq in Pakistan, General Ershad in Bangladesh, and many others. In fact, coup detainee has become a normal feature in the African politics and no less in some parts of Asia too.</p>\r\n\r\n<p>In spite of this pragmatic progression, Aristotle&rsquo;s classification has been subjected to Severe criticism. It is argued that his classification is not heated on any scientific principle, as it emphasizes the quantitative rather than qualitative aspect his division is mechanical and not spiritual in character. But this criticism does not hold good. Aristotle ignores the various stages in the development of the political consciousness of the people, but his test is, indeed, ethical and spiritual whether the form of government is Monarchy or Aristocracy or Polity. Aristotle might have differed in his political philosophy from his teacher, yet his, as it was with Plato, true test of a good government was knowledge, spiritual and ethical. The determining factor of his classification lies in the character of the one, or the few or the many. Burgess has rightly said that Aristotle&rsquo;s classification is organic or spiritual rather than numerical.</p>\r\n\r\n<p>But Aristotle&rsquo;s classification does not include and explain modern forms of government like constitutional Monarchy, Unitary, and Federal governments of Parliamentary and Presidential types. The City States of Aristotle, as Seeley says do not fit in with modern country States. Perhaps Aristotle could not conceive, at the time When he flourished, the various forms into which a government might develop. Nor do we use Democracy in the same sense in which Aristotle used it. Aristotle&rsquo;s classification into Monarchies, Aristocracies, and Politics is also not satisfactory according to our forms of division. If we accept his classification, are we to class Great Britain as a Monarchy or a Democracy and how is it to be differentiated from the government of the United States? Finally Aristotle definitely distinguished between Aristocracy and democracy (polity). But the attempt to distinguish between the two is futile in our times, for it is not easy to find out where one ends and the Other begins.</p>\r\n\r\n<h2>Other Classifications:</h2>\r\n\r\n<p>In spite of these defects Aristotle&rsquo;s classification was accepted as fundamental till quite modern times. The modern writers dropped the ethical or qualitative basis and classified governments on the quantitative basis alone. Three fold classification of governments Monarchies, Aristocracies, and Democracies became the generally accepted norm till the end of the World War I, when Democracy merged others, except for subject countries, colonies, dependencies or trust territories and others where dictatorships had been established.</p>\r\n\r\n<p>Among the modern writers Montesquieu proposed a three fold division. Republican, Monarchical and Despotic governments. The Republican government is that in which the people as a body or even a part of the people, possess the sovereign power. Under a Monarchical form of government there is rule by one single person, but he governs only by fixed and established laws. In a Despotic government, on the other hand there is a single person who rules, but without any law, and he conducts everything according to his will and caprice. How long can a particular form of government last? Montesquieu reply is that It depends upon the Persistence in given society of that particular spirit which is characteristic of the form.</p>\r\n\r\n<p>Rousseau divided governments into Monarchies, Aristocracies, and Democracies. He subdivided Aristocracies, into three forms manual, elective, and hereditary. He considered elective Aristocracy as the best and hereditary the worst. Rousseau was a great champion of direct Democracy. He also admitted the existence of mixed forms of government. Bluntschli gives us another classification. He accepted Aristotle&rsquo;s classification as fundamental, but added to it one form of his own. His division was Monarchies, Aristocracies, Democracies and The Theocracy .</p>\r\n\r\n<p>Theocracy is that form of government where the supreme power is attributed to God, or to a god, or to some other superhuman being, i or to an Idea. The men who exercise authority are deputies or vicegerents of God or a god, Theocracy, according to Bluntschli, is a normal form of government, but when it becomes perverted it is known as idolocracy. Such a classification, however, seems quite fallacious. The modem political scientist separates religion from politics and he does not bring God into his division of forms of government. His task is to locate sovereign power and it rests, for all intents and purposes, either in one person or a body of persons. But exceptions still there are as in the case of the Islamic Republic of Iran the Muslim Arab countries, Pakistan and Afghanistan Revival of Muslim fundamentalism aims to establish a government governed by the laws of Islam strictly in conformity to the prescriptions of the Quran. Some traces of&nbsp; democratic institutions may seem to exist, but the structure is entirely theocratic.</p>\r\n\r\n<p>There are other writers who classify States on a historical basis. Von Mohl, a German publicist of the nineteenth century, is prominent out of this school. He distinguishes Patriarchal, Theocratic, Despotic, Classic, Feudal and Constitutional States. He gives other types of government as well and subdivides Classic States into Monarchy, Aristocracy and Democracy. Von Mohl&rsquo;s classification, even on a superficial examination, is forthwith rejected. It is based on no single principle and he does not distinguish between the State and government.</p>\r\n\r\n<h2>Marriot&rsquo;s&nbsp; Classification:</h2>\r\n\r\n<p>J.A.R. Marriot, a political scientist of recent times, classifies Governments on a three fold basis. He accepts Aristotle&rsquo;s classification as fundamental, but regards it as inadequate for modern governments. Marriot&rsquo;s first basis of classification is the distribution of the powers of government. Governments are, accordingly, divided into unitary and federal. In a Unitary Government there is concentration of powers at the center and the provincial governments enjoy only delegated powers as they are the the creation of the central government. In a Federal Government there are two sets of government and authority is divided between these two central and state or provincial governments. Both the parts of government enjoy original powers granted to them by the constitution aid each is autonomous in its own sphere of jurisdiction.</p>\r\n\r\n<p>Marriot&rsquo;s&nbsp; next basis is that of a rigid and a flexible constitution. In the third place, his basis of classification is the relation between the executive and the legislature. When the executive is superior to the legislature, the form of government is Despotic. If the executive is coordinate in power with the legislature, the type of government is Presidential If the executive is subordinate to the legislature, as in the United Kingdom, the form of government is Parliamentary or Cabinet.</p>\r\n\r\n<h2>Leacock&rsquo;s Classification:</h2>\r\n\r\n<p>Stephen Leacock&rsquo;s classification is almost similar to the , one given by Marriot. He, however, does not attempt to include in his classification all the historical forms which have appeared in the evolution of the State. Leacock confines himself to actually existing types of government. His fundamental division is between despotic and democratic types. In a despotic government the sovereign power is concentrated in the hands of one single person who rules according to his will. In a democracy the sovereign power resides in the people or a majority of them. Democratic governments are divided into a Limited Monarchy and a Republic. In a Limited Monarchy the head of government is the king, but his authority is limited, as in the United Kingdom where the King reigns but does not rule. In a Republican government, the executive is , elected by the people for a fixed term of office. Each of these types may assume one of the two forms, Unitary or Federal. A Unitary er a Federal government may either be . Parliamentary or Presidential. Ina Parliamentary government the real executive is responsible to the legislature. In a Non Parliamentary or Presidential type the executive is not responsible to the legislature, as in the United States of America.</p>\r\n\r\n<p>Leacock&rsquo;s classification can best be explained by the following table borrowed from him</p>\r\n\r\n<p>MODERN GOVERNMENTS</p>\r\n\r\n<p><a href=\"http://www.politicalscienceview.com/what-are-the-different-types-of-governments/different-types-of-governments/\"><img alt=\"Modern Government\" src=\"https://i1.wp.com/www.politicalscienceview.com/wp-content/uploads/2018/07/modern-government.jpg?resize=640%2C311\" style=\"height:311px; width:640px\" /></a></p>\r\n\r\n<p>Different Types of Governments</p>\r\n\r\n<p>It is, indeed, extremely difficult to have a proper classification of modern governments. The form of government is the product of numerous factors, historical, geographical, social, economic, and psychological. Some of these factors are comparatively permanent and give a peculiar impress to the institutions in their evolution and functioning. Both Britain and France, for example, have in common a Parliamentary system of government. But the government of Britain is, in ultimate theory, an <a href=\"http://www.politicalscienceview.com/advantages-and-disadvantages-of-monarchy/\" rel=\"noopener noreferrer\" target=\"_blank\">absolute Monarchy</a>, in form a limited constitutional Monarchy, and in actual practice a Democratic Republic. Practice outruns theory in Britain. France, on the other hand, is a country with the form of a Republic, the institutions of a Monarchy, and the spirit of an Empire. There is, in general a tendency for the French citizen to think of politics in intellectual rather than in practical terms, to attach more importance to symbols than to concrete achievements. The result is, as Siegfried says, French politics are often both unrealistic and passionately ideological.</p>\r\n\r\n<p>The United States of America and Canada, two neighboring countries, are Federations. The United States is the classical example of a Federal polity, which brought into existence the union of hitherto sovereign States for purposes of national unity. The component units, of the federation called States, enjoy juridical status and corporate personality and are autonomous, except in a few enumerated subjects which are of common national interest. Subjects which concern the nation as a whole fall within the jun diction of the national , or federal government. Residuary powers, those which neither belong to the federal government nor to the state governments, rest with the constituent states. The fathers of the Canadian Constitution were not wedded to the narrow ideas of a Federation. They adopted Federation as a device for bringing together diverse elements and to solve administrative and economic problems which confronted the country then The Provinces were, accordingly, given certain enumerated powers, leaving the rest, together with some over riding powers, for the Central Government. Lord Haldane would not describe Canada a Federation and Professor Where called it a quasi federal constitution. But in actual practice the unitary elements in Canada have now become obsolete or are being worked&nbsp; in a manner as to nullify the unitary effects. United States, on the other hand, has a federal constitution as well as a federal government, though the process of centralization there is now assuming alarming proportions.</p>\r\n\r\n<p>The Indian Constitution is federal in form, but it sets up a highly centralized structure of government. The unitary tendencies found therein nullify to a great extent the broad features of federalism. And the founding Fathers deliberately did it. B.R. Ambedkar, the Law Minister and the principal architect of the Constitution, himself claimed in the Constituent Assembly that India was a Federation during times of peace, with a unitary system of government during times of war.</p>\r\n\r\n<p>It follows, then, that no two forms can be absolutely identical anymore than two human beings, whatever likeness there may be. And, like a human being, no government remains the same. Change is at work all the time and more so in this atomic age of ours.&nbsp; The needs of man and his environments have become so numerous and complex that no mechanism of government can claim perfection and consequently finality. The atomic age needs revolutionary changes and a dynamic mechanism of government to suit the purposes to be realized. Could anyone visualize a decade or so before that planning would become a democratic plea for the realisation of the well being of men within the framework of a capitalistic structure of society?</p>', 'There are many variations of passages of Lorem Ipsum available', '2020-10-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` int(11) NOT NULL,
  `questions` varchar(250) DEFAULT NULL,
  `answers` varchar(250) DEFAULT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_22_073017_create_programs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(250) DEFAULT NULL,
  `news_body` varchar(500) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_body`, `status`, `create_date`) VALUES
(1, 'dayly news id', 'bangla today', 0, '0000-00-00'),
(2, 'dorkar nai', 'vat kai si', 1, '2020-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `option_id` int(11) NOT NULL,
  `option_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`option_id`, `option_name`, `option_value`) VALUES
(59, 'home_page_category_id', '58,65'),
(60, 'logo', 'https://demo.bestearnidea.com/wp-content/uploads/file/logo-gif.gif'),
(61, 'icon', 'https://sohojbuy.com/public/uploads/logo f.png'),
(62, 'site_title', 'Solehin Online Shopping'),
(63, 'order_image', NULL),
(64, 'phone', '01300884747'),
(65, 'phone_order', '<i class=\"fa fa-phone-square\" style=\"padding-left:20px;color: green;\">   </i> 01300884747 <br>\r\n <i class=\"fa fa-phone-square\" style=\"padding-left:20px;color: green;\"> </i> 01407011239 <br>'),
(66, 'address', '<ul class=\"toggle-footer\" style=\"\">\r\n                            <li class=\"media\">\r\n                                <div class=\"pull-left\">\r\n                      <span class=\"icon fa-stack fa-lg\">\r\n                      <i class=\"fa fa-map-marker fa-stack-1x fa-inverse\"></i>\r\n                      </span>\r\n                                </div>\r\n                                <div class=\"media-body\">\r\n                                    <p>Office no 1417, Level 13, Shah Ali Plaza, Mirpur 10, Dhaka</p>\r\n                                </div>\r\n                            </li>\r\n                            <li class=\"media\">\r\n                                <div class=\"pull-left\">\r\n                      <span class=\"icon fa-stack fa-lg\">\r\n                      <i class=\"fa fa-mobile fa-stack-1x fa-inverse\"></i>\r\n                      </span>\r\n                                </div>\r\n                                <div class=\"media-body\">\r\n                                    <p>01300884747<br>01300884747</p>\r\n                                </div>\r\n                            </li>\r\n                            <li class=\"media\">\r\n                                <div class=\"pull-left\">\r\n                      <span class=\"icon fa-stack fa-lg\">\r\n                      <i class=\"fa fa-envelope fa-stack-1x fa-inverse\"></i>\r\n                      </span>\r\n                                </div>\r\n                                <div class=\"media-body\">\r\n                                    <span><a href=\"#\">support@sohojbuy.com</a></span>\r\n                                </div>\r\n                            </li>\r\n                        </ul>'),
(67, 'admin_email', 'info@sohojbuy.com'),
(68, 'shipping_charge_in_dhaka', '60'),
(69, 'shipping_charge_out_of_dhaka', '120'),
(70, 'footer', NULL),
(71, 'google_map', NULL),
(72, 'copyright', NULL),
(73, 'default_product_terms', NULL),
(74, 'home_cat_section', '1,18,2,102,4,9,16,113,124'),
(75, 'home_seo_title', 'Sohoj Online Shopping'),
(76, 'home_seo_content', NULL),
(77, 'home_seo_keywords', NULL),
(78, 'home_about_title', NULL),
(79, 'home_about_content', NULL),
(80, 'bkash', '01748188268'),
(81, 'facebook', 'https://www.facebook.com/sohojbuyshop'),
(82, 'youtube', 'https://www.youtube.com/channel/UCWA3XLqrBLNItdEXNAcZVSA'),
(83, 'twitter', NULL),
(84, 'linked', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_name`, `page_link`, `page_content`, `created_time`) VALUES
(14, 'About Us', 'about-us', '<p><strong>The voice of Non Resident Bangladeshis</strong><br />\r\nTBN24 is a Bangla language live television channel in North America provides content that is informative, educational, socially responsible, entertaining and comparable with world-class television broadcasters. TBN24 is the first Bangla 24x7 live television channel to produce original content here in the USA. This channel is currently available in US, Canada, Europe, Australia, and Middle-East.TBN24 Television is the for non-resident Bangladeshi living across the globe as well as people whose mother tongue is Bangla.</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:533px; position:absolute; top:98px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '2020-09-23 11:23:40'),
(15, 'documents', 'documents', '<h2>Covid-19 Eviction Moratorium</h2>\r\n\r\n<p><br />\r\nরোগ নিয়ন্ত্রণ ও প্রতিরোধ কেন্দ্র (সিডিসি) একটি অস্থায়ী উচ্ছেদের স্থগিতাদেশ ঘোষণা করেছে ডিসেম্বর 2020 পর্যন্ত । এই নির্বাহী আদেশ, বছরে $99,000 এর চেয়ে কম উপার্জনকারী ব্যক্তি এবং বিবাহিত দম্পতিদের $198,000 ডলারের কম আয়ের ক্ষেত্রে প্রযোজ্য, যারা COVID মহামারীর কারণে ভাড়া বা আবাসন প্রদান করতে অক্ষম হন।<br />\r\nযদি এই পরিস্থিতি আপনার ক্ষেত্রে প্রযোজ্য হয় তাহলে, আমরা একটি চিঠি তৈরি করেছি যা আপনি পূরণ করে, আপনার বাড়িওয়ালাকে সরবরাহ করতে পারেন।<br />\r\nআমাদের পিডিএফ ডাউনলোড করতে নীচের লিঙ্ক এ ক্লিক করুন।</p>', '2020-09-24 11:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `playlist_id` int(11) NOT NULL,
  `playlist_name` varchar(100) NOT NULL,
  `playlist_link` varchar(250) NOT NULL,
  `playlist_status` tinyint(2) DEFAULT NULL,
  `order_by` int(11) DEFAULT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`playlist_id`, `playlist_name`, `playlist_link`, `playlist_status`, `order_by`, `created_date`) VALUES
(4, 'Qurbanir Itishash', 'PLUb--DPKJ7SR2OL-SorX9BM__5nBaZbdK', 1, 1, '2020-09-28'),
(5, 'TBN Entertainment', 'PLUb--DPKJ7SRuR9r_KsSlT-O7-_FY4sFK', 1, 2, '2020-10-18'),
(6, 'Alif Laila Btv 2007', 'PLFgOElKuoOhx9b2NYoSjj3sZJqBDM_Rke', 1, 3, '2020-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `popular_video`
--

CREATE TABLE `popular_video` (
  `id` int(11) NOT NULL,
  `video_name` varchar(525) NOT NULL,
  `video_id` varchar(250) NOT NULL,
  `order_by` int(11) DEFAULT NULL,
  `created_data` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `popular_video`
--

INSERT INTO `popular_video` (`id`, `video_name`, `video_id`, `order_by`, `created_data`) VALUES
(1, 'How to Edit YouTube Video Like Pro With Filmora 9 | Bangla Tutorial For Beginner Part One', 'v_aKYfgqbo84', 2, '2020-10-15'),
(2, 'Wondershare Filmora Full Bangla Tutorial for Beginners | All in One!', 'LI2vA0O9d3g', 57, '2020-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(250) NOT NULL,
  `post_name` varchar(200) NOT NULL,
  `post_picture` varchar(200) NOT NULL,
  `post_description` text NOT NULL,
  `post_created_date` date NOT NULL DEFAULT current_timestamp(),
  `post_status` tinyint(4) NOT NULL DEFAULT 0,
  `post_man` varchar(100) DEFAULT NULL,
  `post_view` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_name`, `post_picture`, `post_description`, `post_created_date`, `post_status`, `post_man`, `post_view`) VALUES
(26, 'করোনা ভাইরাস: নিজেকে আক্রান্ত মনে হলে কী করবেন, কোথায় যাবেন?', 'tbn-analysis--ep-822', '1603250406.jpg', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '2020-10-07', 1, '', 9),
(27, 'ভাইরাসভিডিও  আগ্নেয়াস্ত্রের লাইসেন্স পাওয়া এবং ব্যবহারের যেসব নিয়ম চালু আছে বাংলাদেশে', 'hsc-equivalent-examinations-cancelled-evaluation-to-be-based-on-jsc-ssc-results', '1603250305.jpg', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '2020-10-07', 1, '', 28),
(28, 'ইরাসভিডিও  একালের রবিনহুড? হ্যাকাররা চুরি করা অর্থ কেন দান করছে', 'keepsakes-are-all-she-has', '1603250247.jpg', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '2020-10-07', 1, '', 12),
(29, 'আমেরিকা নির্বাচন ২০২০: পরবর্তী মার্কিন প্রেসিডেন্ট ভারতের জন্য কী করতে পারেন?', 'tbn-analysis--ep-822', '1603250183.jpg', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '2020-10-07', 1, '', 0),
(31, 'বাংলাদেশে নির্বাচন নিয়ে আস্থার সংকট: দায় কার? নির্বাচন কমিশন, নাকি বড় দলগুলোর?', 'man-wather-price-of-wold-', '1603250115.jpg', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '2020-10-07', 1, 'isolutions', 42);

-- --------------------------------------------------------

--
-- Table structure for table `post_category_relation`
--

CREATE TABLE `post_category_relation` (
  `post_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_category_relation`
--

INSERT INTO `post_category_relation` (`post_category_id`, `category_id`, `post_id`) VALUES
(1, 3, 4),
(2, 4, 5),
(3, 3, 5),
(4, 2, 5),
(14, 4, 24),
(15, 3, 24),
(16, 2, 24),
(17, 4, 22),
(18, 3, 22),
(19, 2, 22),
(20, 4, 25),
(21, 3, 25),
(22, 2, 25),
(26, 3, 31),
(27, 2, 31),
(28, 3, 29),
(29, 2, 29);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `program_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `program_name`, `program_details`, `youtube`, `status`, `program_image`, `created_at`, `updated_at`) VALUES
(3, 'TBN24 AM NEWS', 'TBN24 AM NEWS', 'PLUb--DPKJ7SQ8oZGvXSU2dfcwAwj2ibqn', 1, '1600861547.jpg', '2020-09-21 18:00:00', NULL),
(4, 'TBN WELLNESS', 'TBN WELLNESS', 'PLUb--DPKJ7SQkJseUC_NdIFTnjbBrBYMy', 1, '1600861504.jpg', '2020-09-21 18:00:00', NULL),
(5, 'News Flash', 'News Flash', 'PLUb--DPKJ7SQPKZmQXEdWoMTBrxn9OpPc', 1, '1601995919.png', '2020-09-21 18:00:00', NULL),
(6, 'কুরআনের আলো', 'কুরআনের আলো - 7:00 Am', 'PLUb--DPKJ7STucr4Ytztq1wwpMzdae7z6', 1, '1600861349.jpg', '2020-09-22 18:00:00', NULL),
(9, 'গানগুলো মোর মনের খাঁচায়', 'গানগুলো মোর মনের খাঁচায়', 'PLUb--DPKJ7STucr4Ytztq1wwpMzdae7z6', 1, '1601996006.jpg', '2020-10-06 04:00:00', NULL),
(10, 'TBN Analysis', 'অ্যামেরিকায় বসবাসরত প্রবাসী বাংলাদেশীদের অভিবাসন, ট্যাক্স, আইনি সহায়তাসহ নানা বিষয় নিয়ে দর্শকদের সরাসরি প্রশ্নের উত্তর দেন বিশেষজ্ঞরা। সম্প্রচারিত সময়:  সোম থেকে শুক্রবার রাত ১০টা। পুন:প্রচার মঙ্গল থেকে শনিবার সকাল ৯টা। সময়সীমা: ৬০ মিনিট।', 'PLUb--DPKJ7SR5hLOOvZb1p0fxymxExXQY', 1, '1601996132.jpg', '2020-10-06 04:00:00', NULL),
(11, 'TBN24 Mid-Day News', 'দেশ-বিদেশে ঘটে যাওয়া সব শেষ খবর নিয়ে টিবিএন ২৪- এর এই আয়োজন। রয়েছে রাজনীতি, অর্থনীতি, প্রযুক্তি, খেলাধুলা এবং মজারসব ফিচার রিপোর্ট। সম্প্রচারিত সময়:  প্রতিদিন দুপুর ১২টা। ব্যাপ্তি: ৩০ মিনিট', 'PLUb--DPKJ7SQ_xlEpL7doOGDgxjr7GKdV', 1, '1601996255.jpg', '2020-10-06 04:00:00', NULL),
(12, 'বিশ্ব জুড়ে বাংলাদেশ', 'বিশ্ব জুড়ে বাংলাদেশ', 'PLUb--DPKJ7SS79LN0ki99YMuM3EiDFtJE', 1, '1601996314.jpg', '2020-10-06 04:00:00', NULL),
(13, 'গান গল্প', 'গান গল্প', 'PLUb--DPKJ7STAFEzQQHIi2GEBeNBdn4To', 1, '1601996382.jpg', '2020-10-06 04:00:00', NULL),
(14, 'THE VIEWS', 'অ্যামেরিকার সমসাময়িক বিষয় নিয়ে সাজানো টিবিএন ২৪- এর আলোচনা  অনুষ্ঠান। অংশ নেন প্রবাসে প্রতিষ্ঠিত বাংলাদেশিরা। কথা বলেন সমস্যা, সম্ভাবনাসহ নানা দিক নিয়ে। সোম থেকে শুক্রবার রাত ০৭ টা। পুন:প্রচার: মঙ্গল থেকে শনিবার দুপুর ২টা ৫মিনিট। সময়সীমা: ৬০ মিনিট।', 'PLUb--DPKJ7SRT0p_4V7Nrl8ZxV4sI776n', 1, '1601996442.jpg', '2020-10-06 04:00:00', NULL),
(15, 'Election 2020', 'Election 2020', 'PLUb--DPKJ7STTn3XhoD62t4aOEErSJK9Q', 1, '1601996508.jpg', '2020-10-06 04:00:00', NULL),
(16, 'TBN24 Prime Time News', 'দেশ-বিদেশে ঘটে যাওয়া সব শেষ খবর নিয়ে টিবিএন ২৪- এর এই আয়োজন। রয়েছে রাজনীতি, অর্থনীতি, প্রযুক্তি, খেলাধুলা এবং মজারসব ফিচার রিপোর্ট। সম্প্রচারিত সময়: প্রতিদিন রাত ৯টা, ১১টা, ১টা। পুন:প্রচার রাত ৩টা ও ভোর ৬টা। সময়সীমা: ৬০ মিনিট।', 'PLUb--DPKJ7STH5zlG3jAR4Tzu0zfITiuA', 1, '1601996577.jpg', '2020-10-06 04:00:00', NULL),
(17, 'TBN24 রাতের সংবাদ', 'TBN24 রাতের সংবাদ', 'PLUb--DPKJ7SQCalRPMg7DPhLY4dYmo6JZ', 1, '1601996603.jpg', '2020-10-06 04:00:00', NULL),
(18, 'সাপ্তাহিক নাটক - ভালোবাসার কারাগার', 'সাপ্তাহিক নাটক - ভালোবাসার কারাগার', 'PLUb--DPKJ7STucr4Ytztq1wwpMzdae7z6', 1, '1601996691.jpg', '2020-10-06 04:00:00', NULL),
(19, 'সৌম এর গান', 'সৌম এর গান', 'PLUb--DPKJ7SQmkk2Z5hVeHPkFqQQe54q8', 1, '1602396936.jpg', '2020-10-08 04:00:00', NULL),
(20, 'ইসলামিক প্রোগ্রাম- ইতিহাস ও ঐতিহ্য', 'মানব জীবনের ইতিহাস তথা হযরত আদম (আ:) থেকে শুরু করে বর্তমান পর্যন্ত ইসলামের সঠিক ইতিহাস বর্ণনা ও সভ্যতার শুরু থেকে মুসলিমদের অবদানের বিস্তারিত আলোচনা সহ ইতিহাস থেকে শিক্ষাণীয় বিভিন্ন বিষয়ের পর্যালোচনামূলক অনুষ্ঠান। সময়সীমা: ৩০ মিনিট।', 'PLUb--DPKJ7STucr4Ytztq1wwpMzdae7z6', 1, '1602233407.PNG', '2020-10-09 04:00:00', NULL),
(21, 'জীবন কথন', 'জীবন কথন', 'PLUb--DPKJ7SRmrf4_4LExtgS1snj3oliT', 1, '1602233519.PNG', '2020-10-09 04:00:00', NULL),
(22, 'ইসলাম ও জীবন', 'মানব জীবন ঘনিষ্ট নানা বিষয়। ইসলামি জীবন যাপনের সঠিক দিক-নির্দেশনা ও মুসলিম বিশ্বের চলমান ইস্যুর সমাধান নিয়ে কুরআন ও সহীহ সুন্নাহর আলোকে বিশ্লেষণমূলক অনুষ্ঠান। সম্প্রচারিত সময়:  প্রতি মঙ্গল ও বৃহস্পতিবার বিকাল ৪টা ৫ মিনিট। সময়সীমা: ৩০ মিনিট।', 'PLUb--DPKJ7SQC0Odtis4yr2b2Inap519K', 1, '1602317780.jpg', '2020-10-10 04:00:00', NULL),
(23, 'TBN24 স্মৃতির পাতা', 'TBN24 স্মৃতির পাতা', 'PLUb--DPKJ7STucr4Ytztq1wwpMzdae7z6', 1, '1602322680.jpg', '2020-10-10 04:00:00', NULL),
(24, 'চতুস্কোণ', 'চতুস্কোণ', 'PLUb--DPKJ7STucr4Ytztq1wwpMzdae7z6', 1, '1602322744.jpg', '2020-10-10 04:00:00', NULL),
(25, 'সাপ্তাহিক নাটক - বুঝতে হবে', 'বুঝতে হবে - সাপ্তাহিক নাটক', 'PLUb--DPKJ7STucr4Ytztq1wwpMzdae7z6', 1, '1602323181.png', '2020-10-10 04:00:00', NULL),
(26, 'মুক্তিযোদ্ধার কথা', 'মুক্তিযুদ্ধ এবং মুক্তিযোদ্ধাদের নিয়ে বিশেষ অনুষ্ঠান \"মুক্তিযুদ্ধের কথা\"।', 'PLUb--DPKJ7SQhAHqyAhVOXISQABG7pjTM', 1, '1602389309.jpg', '2020-10-11 04:00:00', NULL),
(27, 'সুহৃদ', 'সুহৃদ', 'PLUb--DPKJ7SRgxMJcMiWfLB8ec1dZ5cRa', 1, '1602389946.jpg', '2020-10-11 04:00:00', NULL),
(28, 'এই সপ্তাহের বাংলাদেশ', 'গত এক সপ্তাহে বাংলাদেশে ঘটে যাওয়া উল্লেখযোগ্য ঘটনাগুলোর পর্যালোচনা নিয়ে বিশেষ অনুষ্ঠান \"এই সপ্তাহের বাংলাদেশ\"।', 'PLUb--DPKJ7SQeYl77FsLRBDCjkJH_aDWN', 1, '1602390098.jpg', '2020-10-11 04:00:00', NULL),
(29, 'TBN24 বিশেষ', 'TBN24 বিশেষ', 'PLUb--DPKJ7SQrUgnMb2kuHYaRSwC0MVpC', 1, '1602390223.jpg', '2020-10-11 04:00:00', NULL),
(30, 'আলোচনায় বাংলাদেশ', 'বাংলাদেশের সমসাময়িক বিষয় নিয়ে এ আলোচনা অনুষ্ঠান। আলোচনায় অংশ নেন খ্যাতিমান বিশেষজ্ঞ আলোচকরা। অনুষ্ঠানটি সরাসরি সম্প্রচারিত হয় সোম থেকে শুক্রবার সকাল সকাল ১১টা।', 'PLUb--DPKJ7SRzB1T_ZrsxNQU4t6O-2Eap', 1, '1602396053.jpg', '2020-10-11 04:00:00', NULL),
(31, 'TBN Special', 'TBN Special', 'PLUb--DPKJ7SQ8oZGvXSU2dfcwAwj2ibqn', 1, '1602476407.jpg', '2020-10-12 04:00:00', NULL),
(32, 'সাপ্তাহিক নাটক - College Love', 'সাপ্তাহিক নাটক - College Love', 'PLUb--DPKJ7STucr4Ytztq1wwpMzdae7z6', 1, '1602481534.png', '2020-10-12 04:00:00', NULL),
(33, 'সাপ্তাহিক নাটক -  লাকী নাম্বার ওয়ান', 'সাপ্তাহিক নাটক -  লাকী নাম্বার ওয়ান', 'PLUb--DPKJ7STucr4Ytztq1wwpMzdae7z6', 1, '1602481702.jpg', '2020-10-12 04:00:00', NULL),
(35, 'সাপ্তাহিক নাটক - Mask', 'সাপ্তাহিক নাটক - Mask', 'PLUb--DPKJ7STucr4Ytztq1wwpMzdae7z6', 1, '1602919359.png', '2020-10-13 04:00:00', NULL),
(36, 'সাপ্তাহিক নাটক - সাইকো বয়ফ্রেন্ড', 'সাপ্তাহিক নাটক - সাইকো বয়ফ্রেন্ড', 'PLUb--DPKJ7STucr4Ytztq1wwpMzdae7z6', 1, '1603002801.jpg', '2020-10-17 04:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pulls`
--

CREATE TABLE `pulls` (
  `pull_id` int(11) NOT NULL,
  `pull_question` varchar(200) DEFAULT NULL,
  `pull_expire_time` datetime DEFAULT NULL,
  `pull_status` tinyint(1) DEFAULT NULL,
  `pull_created_date` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pulls`
--

INSERT INTO `pulls` (`pull_id`, `pull_question`, `pull_expire_time`, `pull_status`, `pull_created_date`, `created_at`) VALUES
(12, 'Who will win the  US presidential election   ?', '2020-12-24 00:00:00', 1, '2020-10-05', '2020-10-05'),
(14, NULL, '2020-10-09 00:00:00', NULL, '2020-10-09', '2020-10-09'),
(15, NULL, '2020-10-09 00:00:00', NULL, '2020-10-09', '2020-10-09'),
(16, NULL, '2020-10-09 00:00:00', NULL, '2020-10-09', '2020-10-09'),
(17, NULL, '2020-10-09 00:00:00', NULL, '2020-10-09', '2020-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `pull_add_option`
--

CREATE TABLE `pull_add_option` (
  `pull_add_option_id` int(11) NOT NULL,
  `pull_id` int(11) NOT NULL,
  `option_name` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pull_add_option`
--

INSERT INTO `pull_add_option` (`pull_add_option_id`, `pull_id`, `option_name`, `created_date`) VALUES
(22, 10, 'A', '2020-10-04 16:00:27'),
(23, 10, 'B', '2020-10-04 16:00:27'),
(24, 10, 'C', '2020-10-04 16:00:27'),
(29, 12, 'Donal trump', '2020-10-05 09:29:04'),
(30, 12, 'Joe Biden', '2020-10-05 09:29:04'),
(31, 12, 'No Comment', '2020-10-05 09:29:04'),
(40, 11, 'Bangladesh', '2020-10-05 09:44:17'),
(41, 11, 'Indea', '2020-10-05 09:44:17'),
(42, 11, 'Pakistan', '2020-10-05 09:44:17'),
(43, 11, 'No Comment', '2020-10-05 09:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_id` int(11) NOT NULL,
  `schedule_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `chat_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `schedule_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `program_id`, `schedule_date`, `start_time`, `end_time`, `chat_status`, `created_at`, `updated_at`, `schedule_note`, `day`) VALUES
(25, 15, '2020-10-13', '00:00:00', '00:59:00', 1, '2020-10-12 04:00:00', NULL, NULL, 'Tuesday'),
(26, 17, '2020-10-09', '03:00:00', '03:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(27, 10, '2020-10-09', '02:00:00', '02:59:00', 0, '2020-10-09 04:00:00', NULL, 'Test Schedule', 'Friday'),
(28, 17, '2020-10-09', '01:00:00', '01:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(29, 15, '2020-10-09', '04:00:00', '04:59:00', NULL, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(30, 14, '2020-10-09', '05:00:00', '05:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(31, 17, '2020-10-09', '06:00:00', '06:59:00', NULL, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(32, 6, '2020-10-09', '07:00:00', '07:29:00', NULL, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(33, 9, '2020-10-09', '07:30:00', '07:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(34, 21, '2020-10-09', '08:00:00', '08:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(35, 10, '2020-10-09', '09:00:00', '09:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(36, 5, '2020-10-09', '10:00:00', '10:59:00', 1, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(37, 11, '2020-10-09', '12:00:00', '12:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(38, 12, '2020-10-09', '13:00:00', '13:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(39, 5, '2020-10-09', '14:00:00', '14:05:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(40, 21, '2020-10-09', '14:06:00', '14:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(41, 5, '2020-10-09', '15:00:00', '15:05:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(42, 5, '2020-10-09', '16:00:00', '16:05:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(43, 5, '2020-10-09', '17:00:00', '17:05:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(44, 12, '2020-10-09', '17:06:00', '17:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(45, 5, '2020-10-09', '18:00:00', '18:05:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(46, 20, '2020-10-09', '18:06:00', '18:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(47, 14, '2020-10-09', '19:00:00', '19:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(48, 15, '2020-10-09', '20:00:00', '20:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(49, 16, '2020-10-09', '21:00:00', '21:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(50, 10, '2020-10-09', '22:00:00', '22:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(51, 17, '2020-10-09', '23:00:00', '23:59:00', 1, '2020-10-09 04:00:00', NULL, NULL, 'Friday'),
(52, 15, '2020-10-10', '00:00:00', '00:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(53, 17, '2020-10-10', '01:00:00', '01:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(54, 17, '2020-10-10', '03:00:00', '03:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(55, 15, '2020-10-10', '04:00:00', '04:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(56, 14, '2020-10-10', '05:00:00', '05:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(57, 17, '2020-10-10', '06:00:00', '06:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(58, 6, '2020-10-10', '07:00:00', '07:29:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(59, 9, '2020-10-10', '07:30:00', '07:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(60, 20, '2020-10-10', '08:00:00', '08:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(61, 10, '2020-10-10', '09:00:00', '09:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(62, 3, '2020-10-10', '10:00:00', '10:29:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(63, 11, '2020-10-10', '12:00:00', '12:29:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(64, 15, '2020-10-10', '13:00:00', '13:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(65, 5, '2020-10-10', '14:00:00', '14:05:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(67, 5, '2020-10-10', '15:00:00', '15:05:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(68, 5, '2020-10-10', '16:00:00', '16:05:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(69, 20, '2020-10-10', '14:06:00', '14:59:00', 0, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(70, 15, '2020-10-10', '17:06:00', '17:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(71, 5, '2020-10-10', '18:00:00', '18:05:00', 0, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(72, 22, '2020-10-10', '18:06:00', '18:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(74, 25, '2020-10-10', '19:00:00', '19:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(75, 23, '2020-10-10', '20:00:00', '20:29:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(76, 24, '2020-10-10', '20:30:00', '20:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(77, 16, '2020-10-10', '21:00:00', '21:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(78, 4, '2020-10-10', '22:00:00', '22:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(79, 17, '2020-10-10', '23:00:00', '23:58:00', 0, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(80, 3, '2020-10-10', '10:00:00', '10:29:00', 0, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(82, 31, '2020-10-12', '00:00:00', '00:59:00', 0, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(84, 15, '2020-10-10', '00:00:00', '00:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(85, 23, '2020-10-11', '00:00:00', '00:29:00', 0, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(87, 24, '2020-10-11', '00:30:00', '00:58:00', 0, '2020-10-11 04:00:00', NULL, NULL, 'Sunday'),
(88, 17, '2020-10-11', '01:00:00', '01:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(89, 4, '2020-10-11', '02:00:00', '02:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(90, 17, '2020-10-11', '03:00:00', '03:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(91, 23, '2020-10-11', '04:00:00', '04:30:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(92, 24, '2020-10-11', '04:30:00', '04:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(93, 25, '2020-10-11', '05:00:00', '05:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(94, 17, '2020-10-11', '06:00:00', '06:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(95, 6, '2020-10-11', '07:00:00', '07:29:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(96, 9, '2020-10-11', '07:30:00', '07:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(97, 22, '2020-10-11', '08:00:00', '08:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(98, 4, '2020-10-11', '09:00:00', '09:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(99, 3, '2020-10-11', '10:00:00', '10:30:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(100, 11, '2020-10-11', '12:00:00', '12:30:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(101, 23, '2020-10-11', '13:00:00', '13:29:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(102, 3, '2020-10-11', '12:30:00', '12:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(103, 24, '2020-10-11', '13:30:00', '13:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(104, 5, '2020-10-11', '14:00:00', '14:05:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(105, 22, '2020-10-11', '14:06:00', '14:59:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(106, 5, '2020-10-11', '15:00:00', '15:05:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(107, 5, '2020-10-11', '16:00:00', '16:05:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(108, 5, '2020-10-11', '17:00:00', '17:05:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(109, 23, '2020-10-11', '17:06:00', '17:29:00', NULL, '2020-10-10 04:00:00', NULL, NULL, 'Saturday'),
(110, 24, '2020-10-11', '17:30:00', '17:59:00', NULL, '2020-10-11 04:00:00', NULL, NULL, 'Sunday'),
(112, 5, '2020-10-11', '12:30:00', '13:00:00', 0, '2020-10-11 04:00:00', NULL, NULL, 'Sunday'),
(113, 5, '2020-10-11', '18:00:00', '18:05:00', NULL, '2020-10-11 04:00:00', NULL, NULL, 'Sunday'),
(114, 28, '2020-10-11', '18:06:00', '18:59:00', NULL, '2020-10-11 04:00:00', NULL, NULL, 'Sunday'),
(115, 4, '2020-10-11', '19:00:00', '19:59:00', NULL, '2020-10-11 04:00:00', NULL, NULL, 'Sunday'),
(116, 29, '2020-10-11', '20:00:00', '20:59:00', NULL, '2020-10-11 04:00:00', NULL, NULL, 'Sunday'),
(117, 16, '2020-10-11', '21:00:00', '21:59:00', NULL, '2020-10-11 04:00:00', NULL, NULL, 'Sunday'),
(118, 27, '2020-10-11', '22:00:00', '22:59:00', NULL, '2020-10-11 04:00:00', NULL, NULL, 'Sunday'),
(119, 17, '2020-10-11', '23:00:00', '23:58:00', 0, '2020-10-11 04:00:00', NULL, NULL, 'Sunday'),
(121, 17, '2020-10-12', '01:00:00', '01:59:00', 0, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(123, 27, '2020-10-12', '02:00:00', '02:59:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Monday'),
(124, 17, '2020-10-12', '03:00:00', '03:59:00', 0, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(125, 31, '2020-10-12', '04:00:00', '04:59:00', 0, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(126, 4, '2020-10-12', '05:00:00', '05:59:00', 0, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(127, 17, '2020-10-12', '06:00:00', '06:59:00', 0, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(128, 6, '2020-10-12', '07:00:00', '07:29:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(129, 9, '2020-10-12', '07:30:00', '07:59:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(130, 28, '2020-10-12', '08:00:00', '08:59:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Monday'),
(131, 35, '2020-10-12', '09:00:00', '09:59:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Monday'),
(132, 3, '2020-10-12', '10:00:00', '10:30:00', 0, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(133, 11, '2020-10-12', '12:00:00', '12:59:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(134, 12, '2020-10-12', '13:00:00', '13:59:00', 0, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(135, 5, '2020-10-12', '14:00:00', '14:05:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(136, 32, '2020-10-12', '14:06:00', '14:59:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(137, 5, '2020-10-12', '15:00:00', '15:05:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(138, 5, '2020-10-12', '16:00:00', '16:05:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(139, 5, '2020-10-12', '17:00:00', '17:05:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(140, 12, '2020-10-12', '17:06:00', '17:59:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(141, 14, '2020-10-12', '19:00:00', '19:59:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(142, 15, '2020-10-12', '20:00:00', '20:59:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(143, 16, '2020-10-12', '21:00:00', '21:59:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(144, 10, '2020-10-13', '22:00:00', '22:59:00', 0, '2020-10-12 04:00:00', NULL, NULL, 'Tuesday'),
(145, 17, '2020-10-12', '23:00:00', '23:59:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Monday'),
(146, 17, '2020-10-13', '01:00:00', '01:59:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Tuesday'),
(147, 10, '2020-10-13', '02:00:00', '02:45:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Tuesday'),
(148, 17, '2020-10-13', '03:00:00', '03:59:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Tuesday'),
(149, 15, '2020-10-13', '04:00:00', '04:50:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Tuesday'),
(150, 14, '2020-10-13', '05:00:00', '05:45:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Tuesday'),
(151, 17, '2020-10-13', '06:00:00', '06:59:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Tuesday'),
(152, 6, '2020-10-13', '07:00:00', '07:29:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Tuesday'),
(154, 9, '2020-10-13', '07:30:00', '07:55:00', NULL, '2020-10-12 04:00:00', NULL, NULL, 'Tuesday'),
(155, 35, '2020-10-13', '08:00:00', '08:45:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(156, 10, '2020-10-13', '09:00:00', '09:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(157, 3, '2020-10-13', '10:00:00', '10:35:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(158, 34, '2020-10-13', '11:00:00', '11:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(159, 11, '2020-10-13', '12:00:00', '12:30:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(160, 12, '2020-10-13', '13:00:00', '13:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(161, 5, '2020-10-13', '14:00:00', '14:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(162, 35, '2020-10-13', '14:06:00', '14:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(163, 5, '2020-10-13', '15:00:00', '15:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(164, 34, '2020-10-13', '15:06:00', '15:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(165, 5, '2020-10-13', '16:00:00', '16:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(166, 34, '2020-10-13', '16:06:00', '16:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(167, 5, '2020-10-13', '17:00:00', '17:06:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(168, 12, '2020-10-13', '17:06:00', '17:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(169, 5, '2020-10-13', '18:00:00', '18:06:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(170, 13, '2020-10-13', '18:06:00', '18:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(171, 14, '2020-10-13', '19:00:00', '19:48:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(172, 15, '2020-10-13', '20:00:00', '20:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(173, 16, '2020-10-13', '21:00:00', '21:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(175, 17, '2020-10-13', '23:00:00', '23:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(176, 15, '2020-10-13', '12:00:00', '12:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(177, 15, '2020-10-14', '00:01:00', '00:55:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(178, 17, '2020-10-14', '01:00:00', '01:55:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(179, 10, '2020-10-14', '02:00:00', '02:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(180, 17, '2020-10-14', '03:00:00', '03:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(182, 15, '2020-10-14', '04:00:00', '04:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(183, 14, '2020-10-14', '05:00:00', '05:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(184, 17, '2020-10-14', '06:00:00', '06:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(185, 6, '2020-10-14', '07:00:00', '07:29:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(186, 9, '2020-10-14', '07:30:00', '07:59:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(187, 13, '2020-10-14', '08:00:00', '08:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(188, 10, '2020-10-14', '09:00:00', '09:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(189, 3, '2020-10-14', '10:00:00', '10:32:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(190, 15, '2020-10-14', '11:00:00', '11:45:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(191, 11, '2020-10-14', '12:00:00', '12:35:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(192, 12, '2020-10-14', '13:00:00', '13:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(193, 5, '2020-10-14', '14:00:00', '14:05:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(194, 5, '2020-10-14', '15:00:00', '15:05:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(195, 5, '2020-10-14', '16:00:00', '16:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(196, 5, '2020-10-14', '17:00:00', '17:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(197, 5, '2020-10-14', '18:00:00', '18:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(198, 13, '2020-10-14', '14:06:00', '14:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(199, 15, '2020-10-14', '15:06:00', '15:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(200, 15, '2020-10-14', '16:06:00', '16:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(201, 12, '2020-10-14', '17:06:00', '17:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(202, 26, '2020-10-14', '18:06:00', '18:50:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(203, 4, '2020-10-14', '19:00:00', '19:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(204, 15, '2020-10-14', '20:00:00', '20:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(205, 16, '2020-10-14', '21:00:00', '21:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(206, 10, '2020-10-14', '22:00:00', '22:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(207, 17, '2020-10-14', '23:00:00', '23:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Wednesday'),
(210, 10, '2020-10-12', '22:00:00', '22:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Monday'),
(211, 15, '2020-10-15', '11:00:00', '11:59:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(212, 15, '2020-10-15', '00:01:00', '00:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(213, 17, '2020-10-15', '01:00:00', '01:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(214, 10, '2020-10-15', '02:00:00', '02:59:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(215, 17, '2020-10-15', '03:00:00', '03:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(216, 15, '2020-10-15', '04:00:00', '04:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(217, 4, '2020-10-15', '05:00:00', '05:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(218, 17, '2020-10-15', '06:00:00', '06:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(219, 6, '2020-10-15', '07:00:00', '07:29:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(220, 9, '2020-10-15', '07:30:00', '07:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(221, 26, '2020-10-15', '08:00:00', '08:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(222, 10, '2020-10-15', '09:00:00', '09:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(223, 3, '2020-10-15', '10:00:00', '10:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(224, 15, '2020-10-13', '11:00:00', '11:59:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(225, 11, '2020-10-15', '12:00:00', '12:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(226, 12, '2020-10-15', '13:00:00', '13:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(227, 5, '2020-10-15', '14:00:00', '14:05:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(228, 5, '2020-10-15', '15:00:00', '15:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(229, 5, '2020-10-15', '16:00:00', '16:05:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(230, 5, '2020-10-15', '17:00:00', '17:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(231, 5, '2020-10-15', '18:00:00', '18:05:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(232, 26, '2020-10-15', '14:06:00', '14:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(233, 15, '2020-10-15', '15:06:00', '15:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(234, 15, '2020-10-15', '16:06:00', '16:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(235, 12, '2020-10-15', '17:06:00', '17:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(236, 21, '2020-10-15', '18:06:00', '18:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(237, 14, '2020-10-15', '19:00:00', '19:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(238, 15, '2020-10-15', '20:00:00', '20:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(239, 16, '2020-10-15', '21:00:00', '21:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(240, 10, '2020-10-15', '22:00:00', '22:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(241, 17, '2020-10-15', '23:00:00', '23:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Thursday'),
(242, 15, '2020-10-16', '00:01:00', '00:59:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(243, 17, '2020-10-16', '01:00:00', '01:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(244, 10, '2020-10-16', '02:00:00', '02:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(245, 17, '2020-10-16', '03:00:00', '03:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(246, 15, '2020-10-16', '04:00:00', '04:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(247, 14, '2020-10-16', '05:00:00', '05:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(248, 17, '2020-10-16', '06:00:00', '06:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(249, 6, '2020-10-16', '07:00:00', '07:29:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(250, 9, '2020-10-16', '07:30:00', '07:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(251, 21, '2020-10-16', '08:00:00', '08:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(252, 10, '2020-10-16', '09:00:00', '09:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(253, 3, '2020-10-16', '10:00:00', '10:32:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(254, 15, '2020-10-16', '11:00:00', '11:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(255, 11, '2020-10-16', '12:00:00', '12:35:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(256, 12, '2020-10-16', '13:00:00', '13:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(257, 5, '2020-10-16', '14:00:00', '14:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(258, 5, '2020-10-16', '15:00:00', '15:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(259, 5, '2020-10-16', '16:00:00', '16:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(260, 5, '2020-10-16', '17:00:00', '17:05:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(261, 5, '2020-10-16', '18:00:00', '18:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(262, 21, '2020-10-16', '14:06:00', '14:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(263, 15, '2020-10-16', '15:06:00', '15:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(264, 15, '2020-10-16', '16:06:00', '16:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(265, 12, '2020-10-16', '17:06:00', '17:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(266, 20, '2020-10-16', '18:06:00', '18:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(267, 14, '2020-10-16', '19:00:00', '19:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(268, 15, '2020-10-16', '20:00:00', '20:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(269, 16, '2020-10-16', '21:00:00', '21:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(270, 10, '2020-10-16', '22:00:00', '22:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(271, 17, '2020-10-16', '23:00:00', '23:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Friday'),
(272, 35, '2020-10-12', '18:06:00', '18:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Monday'),
(273, 15, '2020-10-17', '00:01:00', '00:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(274, 17, '2020-10-17', '01:00:00', '01:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(275, 10, '2020-10-17', '02:00:00', '02:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(276, 17, '2020-10-17', '03:00:00', '03:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(277, 15, '2020-10-17', '04:00:00', '04:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(278, 14, '2020-10-17', '05:00:00', '05:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(279, 17, '2020-10-17', '06:00:00', '06:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(280, 6, '2020-10-17', '07:00:00', '07:29:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(281, 9, '2020-10-17', '07:30:00', '07:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(282, 20, '2020-10-17', '08:00:00', '08:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(283, 10, '2020-10-17', '09:00:00', '09:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(284, 3, '2020-10-17', '10:00:00', '10:35:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(285, 15, '2020-10-17', '11:00:00', '11:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(286, 11, '2020-10-17', '12:00:00', '12:35:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(287, 15, '2020-10-17', '13:00:00', '13:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(288, 5, '2020-10-17', '14:00:00', '14:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(289, 20, '2020-10-17', '14:06:00', '14:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(290, 5, '2020-10-17', '15:00:00', '15:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(291, 15, '2020-10-17', '15:06:00', '15:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(292, 15, '2020-10-17', '16:06:00', '16:55:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(293, 5, '2020-10-17', '17:00:00', '17:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(294, 15, '2020-10-17', '17:06:00', '17:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(295, 5, '2020-10-17', '16:00:00', '16:05:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(296, 5, '2020-10-17', '18:00:00', '18:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(297, 22, '2020-10-17', '18:06:00', '18:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(298, 35, '2020-10-17', '19:00:00', '19:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(299, 23, '2020-10-17', '20:00:00', '20:29:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(300, 24, '2020-10-17', '20:30:00', '20:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(301, 16, '2020-10-17', '21:00:00', '21:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(302, 4, '2020-10-17', '22:00:00', '22:48:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(303, 17, '2020-10-17', '23:00:00', '23:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Saturday'),
(304, 23, '2020-10-18', '00:01:00', '00:29:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(305, 24, '2020-10-18', '00:30:00', '00:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(306, 17, '2020-10-18', '01:00:00', '01:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(307, 4, '2020-10-18', '02:00:00', '02:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(308, 17, '2020-10-18', '03:00:00', '03:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(309, 23, '2020-10-18', '04:00:00', '04:29:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(310, 24, '2020-10-18', '04:30:00', '04:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(311, 35, '2020-10-18', '05:00:00', '05:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(312, 17, '2020-10-18', '06:00:00', '06:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(313, 6, '2020-10-18', '07:00:00', '07:29:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(314, 9, '2020-10-18', '07:30:00', '07:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(315, 22, '2020-10-18', '08:00:00', '08:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(316, 4, '2020-10-18', '09:00:00', '09:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(317, 3, '2020-10-18', '10:00:00', '10:33:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(318, 15, '2020-10-18', '11:00:00', '11:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(319, 11, '2020-10-18', '12:00:00', '12:35:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(320, 23, '2020-10-18', '13:00:00', '13:29:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(321, 24, '2020-10-18', '13:30:00', '13:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(322, 5, '2020-10-18', '14:00:00', '14:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(323, 5, '2020-10-18', '15:00:00', '15:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(324, 5, '2020-10-18', '16:00:00', '16:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(325, 5, '2020-10-18', '17:00:00', '17:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(326, 5, '2020-10-18', '18:00:00', '18:05:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(327, 22, '2020-10-18', '14:06:00', '14:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(328, 15, '2020-10-18', '15:06:00', '15:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(329, 15, '2020-10-18', '16:06:00', '16:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(330, 23, '2020-10-18', '17:06:00', '17:29:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(331, 24, '2020-10-18', '17:30:00', '17:55:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(332, 36, '2020-10-18', '18:06:00', '18:50:00', 0, '2020-10-18 04:00:00', NULL, NULL, 'Sunday'),
(333, 4, '2020-10-18', '19:00:00', '19:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(334, 31, '2020-10-18', '20:00:00', '20:50:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(335, 16, '2020-10-18', '21:00:00', '21:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(336, 27, '2020-10-18', '22:00:00', '22:45:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(337, 17, '2020-10-18', '23:00:00', '23:55:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(338, 31, '2020-10-19', '00:00:00', '00:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(339, 17, '2020-10-19', '01:00:00', '01:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(340, 37, '2020-10-19', '02:00:00', '02:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(341, 17, '2020-10-19', '03:00:00', '03:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(342, 31, '2020-10-19', '04:00:00', '04:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(343, 4, '2020-10-19', '05:00:00', '05:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(344, 17, '2020-10-19', '06:00:00', '06:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(345, 6, '2020-10-19', '07:00:00', '07:29:00', NULL, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(346, 9, '2020-10-19', '07:30:00', '07:59:00', NULL, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(347, 36, '2020-10-19', '08:00:00', '08:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(348, 37, '2020-10-19', '09:00:00', '09:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(349, 3, '2020-10-19', '10:00:00', '10:30:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(350, 11, '2020-10-19', '12:00:00', '12:59:00', NULL, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(351, 12, '2020-10-19', '13:00:00', '13:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(352, 5, '2020-10-19', '14:00:00', '14:05:00', NULL, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(353, 36, '2020-10-19', '14:06:00', '14:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(354, 5, '2020-10-19', '15:00:00', '15:05:00', NULL, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(355, 5, '2020-10-19', '16:00:00', '16:05:00', NULL, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(356, 5, '2020-10-19', '17:00:00', '17:05:00', NULL, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(357, 12, '2020-10-19', '17:06:00', '17:59:00', NULL, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(358, 14, '2020-10-19', '19:00:00', '19:59:00', NULL, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(359, 15, '2020-10-19', '20:00:00', '20:59:00', NULL, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(360, 16, '2020-10-19', '21:00:00', '21:59:00', NULL, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(361, 17, '2020-10-19', '23:00:00', '23:59:00', NULL, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(362, 10, '2020-10-19', '22:00:00', '22:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(363, 38, '2020-10-19', '18:30:00', '18:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(364, 15, '2020-10-18', '11:00:00', '11:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Sunday'),
(365, 15, '2020-10-12', '16:06:00', '16:59:00', NULL, '2020-10-13 04:00:00', NULL, NULL, 'Monday'),
(366, 15, '2020-10-13', '16:06:00', '16:59:00', 0, '2020-10-13 04:00:00', NULL, NULL, 'Tuesday'),
(367, 5, '2020-10-19', '18:00:00', '18:05:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Monday'),
(368, 15, '2020-10-20', '00:00:00', '00:59:00', 1, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(369, 10, '2020-10-20', '22:00:00', '22:59:00', 0, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(370, 17, '2020-10-20', '01:00:00', '01:59:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(371, 10, '2020-10-20', '02:00:00', '02:45:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(372, 17, '2020-10-20', '03:00:00', '03:59:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(373, 15, '2020-10-20', '04:00:00', '04:50:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(374, 14, '2020-10-20', '05:00:00', '05:45:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(375, 17, '2020-10-20', '06:00:00', '06:59:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(376, 6, '2020-10-20', '07:00:00', '07:29:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(377, 9, '2020-10-20', '07:30:00', '07:55:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(378, 38, '2020-10-20', '08:30:00', '08:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Tuesday'),
(379, 10, '2020-10-20', '09:00:00', '09:50:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(380, 3, '2020-10-20', '10:00:00', '10:35:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(381, 11, '2020-10-20', '12:00:00', '12:30:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(382, 12, '2020-10-20', '13:00:00', '13:45:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(383, 5, '2020-10-20', '14:00:00', '14:05:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(385, 5, '2020-10-20', '15:00:00', '15:05:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(386, 5, '2020-10-20', '16:00:00', '16:05:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(387, 5, '2020-10-20', '17:00:00', '17:06:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(388, 12, '2020-10-20', '17:06:00', '17:50:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(389, 5, '2020-10-20', '18:00:00', '18:06:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(390, 38, '2020-10-20', '18:30:00', '18:59:00', 0, '2020-10-19 04:00:00', NULL, NULL, 'Tuesday'),
(391, 14, '2020-10-20', '19:00:00', '19:48:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(392, 15, '2020-10-20', '20:00:00', '20:45:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(393, 16, '2020-10-20', '21:00:00', '21:55:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(394, 17, '2020-10-20', '23:00:00', '23:55:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(395, 15, '2020-10-20', '12:00:00', '12:50:00', NULL, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(396, 15, '2020-10-20', '11:00:00', '11:59:00', 0, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(397, 15, '2020-10-20', '16:06:00', '16:59:00', 0, '2020-10-20 04:00:00', NULL, NULL, 'Tuesday'),
(398, 15, '2020-10-21', '00:01:00', '00:55:00', 0, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(399, 17, '2020-10-21', '01:00:00', '01:55:00', 0, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(400, 10, '2020-10-21', '02:00:00', '02:45:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(401, 17, '2020-10-21', '03:00:00', '03:55:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(402, 15, '2020-10-21', '04:00:00', '04:50:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(403, 14, '2020-10-21', '05:00:00', '05:50:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(404, 17, '2020-10-21', '06:00:00', '06:59:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(405, 6, '2020-10-21', '07:00:00', '07:29:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(406, 9, '2020-10-21', '07:30:00', '07:59:00', 0, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(407, 13, '2020-10-21', '08:00:00', '08:59:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(408, 10, '2020-10-21', '09:00:00', '09:59:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(409, 3, '2020-10-21', '10:00:00', '10:32:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(410, 15, '2020-10-21', '11:00:00', '11:45:00', 0, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(411, 11, '2020-10-21', '12:00:00', '12:35:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(412, 12, '2020-10-21', '13:00:00', '13:50:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(413, 5, '2020-10-21', '14:00:00', '14:05:00', 0, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(414, 5, '2020-10-21', '15:00:00', '15:05:00', 0, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(415, 5, '2020-10-21', '16:00:00', '16:05:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(416, 5, '2020-10-21', '17:00:00', '17:05:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(417, 5, '2020-10-21', '18:00:00', '18:05:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(418, 13, '2020-10-21', '14:06:00', '14:50:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(419, 15, '2020-10-21', '15:06:00', '15:50:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(420, 15, '2020-10-21', '16:06:00', '16:50:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(421, 12, '2020-10-21', '17:06:00', '17:50:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(422, 26, '2020-10-21', '18:06:00', '18:50:00', 0, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(423, 4, '2020-10-21', '19:00:00', '19:50:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(424, 15, '2020-10-21', '20:00:00', '20:50:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(425, 16, '2020-10-21', '21:00:00', '21:55:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(426, 10, '2020-10-21', '22:00:00', '22:45:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(427, 17, '2020-10-21', '23:00:00', '23:55:00', NULL, '2020-10-21 04:00:00', NULL, NULL, 'Wednesday'),
(428, 15, '2020-10-22', '11:00:00', '11:59:00', 0, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(429, 15, '2020-10-22', '00:01:00', '00:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(430, 17, '2020-10-22', '01:00:00', '01:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(431, 10, '2020-10-22', '02:00:00', '02:59:00', 0, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(432, 17, '2020-10-22', '03:00:00', '03:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(433, 15, '2020-10-22', '04:00:00', '04:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(434, 4, '2020-10-22', '05:00:00', '05:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(435, 17, '2020-10-22', '06:00:00', '06:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(436, 6, '2020-10-22', '07:00:00', '07:29:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(437, 9, '2020-10-22', '07:30:00', '07:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(438, 26, '2020-10-22', '08:00:00', '08:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(439, 10, '2020-10-22', '09:00:00', '09:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(440, 3, '2020-10-22', '10:00:00', '10:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(441, 11, '2020-10-22', '12:00:00', '12:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(442, 12, '2020-10-22', '13:00:00', '13:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(443, 5, '2020-10-22', '14:00:00', '14:05:00', 0, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(444, 5, '2020-10-22', '15:00:00', '15:05:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(445, 5, '2020-10-22', '16:00:00', '16:05:00', 0, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(446, 5, '2020-10-22', '17:00:00', '17:05:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(447, 5, '2020-10-22', '18:00:00', '18:05:00', 0, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(448, 26, '2020-10-22', '14:06:00', '14:50:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(449, 15, '2020-10-22', '15:06:00', '15:50:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(450, 15, '2020-10-22', '16:06:00', '16:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(451, 12, '2020-10-22', '17:06:00', '17:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(452, 21, '2020-10-22', '18:06:00', '18:50:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(453, 14, '2020-10-22', '19:00:00', '19:45:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(454, 15, '2020-10-22', '20:00:00', '20:45:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(455, 16, '2020-10-22', '21:00:00', '21:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(456, 10, '2020-10-22', '22:00:00', '22:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(457, 17, '2020-10-22', '23:00:00', '23:59:00', NULL, '2020-10-22 04:00:00', NULL, NULL, 'Thursday'),
(458, 15, '2020-10-23', '00:01:00', '00:59:00', 0, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(459, 17, '2020-10-23', '01:00:00', '01:59:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(460, 10, '2020-10-23', '02:00:00', '02:50:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(461, 17, '2020-10-23', '03:00:00', '03:59:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(462, 15, '2020-10-23', '04:00:00', '04:59:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(463, 14, '2020-10-23', '05:00:00', '05:55:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(464, 17, '2020-10-23', '06:00:00', '06:59:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(465, 6, '2020-10-23', '07:00:00', '07:29:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(466, 9, '2020-10-23', '07:30:00', '07:59:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(467, 21, '2020-10-23', '08:00:00', '08:50:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(468, 10, '2020-10-23', '09:00:00', '09:45:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(469, 3, '2020-10-23', '10:00:00', '10:32:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(470, 15, '2020-10-23', '11:00:00', '11:59:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(471, 11, '2020-10-23', '12:00:00', '12:35:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(472, 12, '2020-10-23', '13:00:00', '13:50:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(473, 5, '2020-10-23', '14:00:00', '14:05:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(474, 5, '2020-10-23', '15:00:00', '15:05:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(475, 5, '2020-10-23', '16:00:00', '16:05:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(476, 5, '2020-10-23', '17:00:00', '17:05:00', 0, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(477, 5, '2020-10-23', '18:00:00', '18:05:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(478, 21, '2020-10-23', '14:06:00', '14:50:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(479, 15, '2020-10-23', '15:06:00', '15:50:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(480, 15, '2020-10-23', '16:06:00', '16:50:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(481, 12, '2020-10-23', '17:06:00', '17:50:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(482, 20, '2020-10-23', '18:06:00', '18:50:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(483, 14, '2020-10-23', '19:00:00', '19:50:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(484, 15, '2020-10-23', '20:00:00', '20:45:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(485, 16, '2020-10-23', '21:00:00', '21:55:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(486, 10, '2020-10-23', '22:00:00', '22:45:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(487, 17, '2020-10-23', '23:00:00', '23:55:00', NULL, '2020-10-23 04:00:00', NULL, NULL, 'Friday'),
(488, 15, '2020-10-24', '00:01:00', '00:45:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(489, 17, '2020-10-24', '01:00:00', '01:59:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(490, 10, '2020-10-24', '02:00:00', '02:45:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(491, 17, '2020-10-24', '03:00:00', '03:59:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(492, 15, '2020-10-24', '04:00:00', '04:45:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(493, 14, '2020-10-24', '05:00:00', '05:50:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(494, 17, '2020-10-24', '06:00:00', '06:55:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(495, 6, '2020-10-24', '07:00:00', '07:29:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(496, 9, '2020-10-24', '07:30:00', '07:59:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(497, 20, '2020-10-24', '08:00:00', '08:50:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(498, 10, '2020-10-24', '09:00:00', '09:45:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(499, 3, '2020-10-24', '10:00:00', '10:35:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(500, 15, '2020-10-24', '11:00:00', '11:59:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(501, 11, '2020-10-24', '12:00:00', '12:35:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(502, 15, '2020-10-24', '13:00:00', '13:50:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(503, 5, '2020-10-24', '14:00:00', '14:05:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(504, 20, '2020-10-24', '14:06:00', '14:59:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(505, 5, '2020-10-24', '15:00:00', '15:05:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(506, 15, '2020-10-24', '15:06:00', '15:59:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(507, 15, '2020-10-24', '16:06:00', '16:55:00', 0, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(508, 5, '2020-10-24', '17:00:00', '17:05:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(509, 15, '2020-10-24', '17:06:00', '17:50:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(510, 5, '2020-10-24', '16:00:00', '16:05:00', 0, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(511, 5, '2020-10-24', '18:00:00', '18:05:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(512, 22, '2020-10-24', '18:06:00', '18:50:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(513, 35, '2020-10-24', '19:00:00', '19:45:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(514, 23, '2020-10-24', '20:00:00', '20:29:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(515, 24, '2020-10-24', '20:30:00', '20:50:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(516, 16, '2020-10-24', '21:00:00', '21:55:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(517, 4, '2020-10-24', '22:00:00', '22:48:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday'),
(518, 17, '2020-10-24', '23:00:00', '23:59:00', NULL, '2020-10-24 04:00:00', NULL, NULL, 'Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `sub_comments`
--

CREATE TABLE `sub_comments` (
  `sub_commets_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comments` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_comments`
--

INSERT INTO `sub_comments` (`sub_commets_id`, `post_id`, `comment_id`, `name`, `email`, `comments`, `status`, `created_date`) VALUES
(1, 31, 10, 'mitul', 'suzonice1@gmal.com', 'eeee', 1, '2020-10-21'),
(3, 31, 10, 'tumi ki', 'fgxmdz@G.COM', 'na ami na', 1, '2020-10-21'),
(4, 31, 10, 'mitul', 'suzonice1@gmal.com', 'dd', 1, '2020-10-21'),
(5, 31, 21, 'Jodu mia ki', 'tumi@gmail.com', 'ok vai', 1, '2020-10-21'),
(6, 31, 17, 'milon lai', 'suzonddice1@gmal.com', 'dddf', 1, '2020-10-21'),
(7, 31, 15, 'mitul', 'suzonice1@gmal.com', 'ddddddd', 1, '2020-10-21'),
(8, 31, 14, 'mitul', 'suzonice1@gmal.com', 'ddddddd', 1, '2020-10-21'),
(9, 31, 26, 'Siddur rohman', 'suzossnice1@gmal.com', 'Yes your are good', 1, '2020-10-21'),
(10, 31, 26, 'nai nam', 'sddduzonice1@gmal.com', 'dibo na ami tomake', 1, '2020-10-21'),
(11, 28, 27, 'mitul', 'suzonice1@gmal.com', 'ro, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 1, '2020-10-21'),
(12, 28, 27, 'dryfhmchf', 'fgxmdz@G.COM', 'ro, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.ro, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.ro, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 1, '2020-10-21'),
(13, 28, 27, 'eeeeeeeee', 'suzonice1@gmal.com', 'ro, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 1, '2020-10-21'),
(14, 28, 27, 'mitul', 'suzonice1@gmal.com', 'ddd', 1, '2020-10-21'),
(15, 28, 27, 'mitul', 'suzonice1@gmal.com', 'Your are good boy brother ro, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 1, '2020-10-21'),
(16, 28, 27, 'mitul', 'suzonice1@gmal.com', 'Your are good boy brother ro, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\nss', 1, '2020-10-21'),
(17, 28, 27, 'mitulsss', 'suzonice1@gmal.com', 'eeeeeeeee', 1, '2020-10-21'),
(18, 28, 27, 'mitul', 'suzonice1@gmal.com', 'Your are good boy brother ro, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32. ss', 1, '2020-10-21'),
(19, 28, 27, 'mitul', 'suzonice1@gmal.com', 'dddddddddd', 1, '2020-10-21'),
(20, 28, 27, 'mitul', 'suzonice1@gmal.com', 'dddddddddd', 1, '2020-10-21'),
(21, 28, 27, 'mitul', 'suzonice1@gmal.com', 'dddddddddd', 1, '2020-10-21'),
(22, 28, 27, 'mitul', 'suzonice1@gmal.com', 'dddddddddd', 1, '2020-10-21'),
(23, 28, 27, 'abdul aziz', 'abdulaziz@gmal.com', 'Your are Good', 1, '2020-10-21'),
(24, 28, 27, 'mitul', 'suzonice1@gmal.com', 'ddd', 1, '2020-10-21'),
(25, 28, 27, 'dryfhmchf', 'fgxmdz@G.COM', 'Bolen', 1, '2020-10-21'),
(26, 27, 28, 'mitul', 'suzonice1@gmal.com', 'mitul ali', 1, '2020-10-21'),
(27, 27, 28, 'sujon ali', 'suzonicse1@gmal.com', 'Your are dood', 1, '2020-10-21'),
(28, 27, 29, 'mitul', 'suzonice1@gmal.com', 'dddddd', 1, '2020-10-21'),
(29, 27, 29, 'dryfhmchf', 'fgxmdz@G.COM', 'ddd', 1, '2020-10-21'),
(30, 26, 31, 'Sujon ali', 'suzon@gmail.com', 'Virginia, looked up one of the more obscure Latin words, consectetur, from', 1, '2020-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `continent_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `country`, `city`, `ip`, `continent_name`, `region`, `address`) VALUES
(6, 'sujon', 'info@isolutionsbd.com', '01735887144d', NULL, 'c4ca4238a0b923820dcc509a6f75849b', '16013698873526', '2020-09-29 14:58:07', NULL, 'Bangladesh', 'Dhaka', '103.92.214.8', 'Asia', NULL, NULL),
(9, 'mitul', 'suzonicffe1@gmal.com', '0173874830567', NULL, '8277e0910d750195b448797616e091ad', '16013825281455', '2020-09-29 08:28:48', NULL, 'Bangladesh', 'Dhaka', '103.92.214.8', 'Asia', 'Dhaka Division', 'dibo na'),
(11, 'admin', 'a7dmin@isolutionsbd.com', '015781133188', NULL, 'e10adc3949ba59abbe56e057f20f883e', '16014653143585', '2020-09-30 07:28:34', NULL, 'Bangladesh', 'Dhaka', '103.92.214.11', 'Asia', 'Dhaka Division', NULL),
(12, 'Abdulla Hil Maruf', 'emon5588@gmail.com', '01924388395', NULL, 'e858b6cd03f942f30496cf795c960785', '16019744844231', '2020-10-06 04:54:44', NULL, 'Bangladesh', NULL, '37.111.216.240', 'Asia', NULL, NULL),
(14, 'Sujon Ali', 'suzoniece15@gmail.com', '017383305670', NULL, '6b896ff7ac5c3f2871171ff4d5092dfe', '16021156451116', '2020-10-07 20:07:25', NULL, 'Bangladesh', 'Chittagong', '103.230.106.41', 'Asia', 'Chittagong', NULL),
(15, 'shahinul', 'suzodnice15@gmail.com', '015711331888', NULL, '4d6d955ca289f82e3a6e1f52f40108f3', '16021445032661', '2020-10-08 04:08:23', NULL, 'Bangladesh', 'Dhaka', '103.92.214.0', 'Asia', 'Dhaka Division', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `vote_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `pull_id` int(200) NOT NULL,
  `option_id` int(200) NOT NULL,
  `ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`vote_id`, `create_date`, `pull_id`, `option_id`, `ip`) VALUES
(14, '2020-10-05 09:31:51', 11, 35, '103.92.214.2'),
(15, '2020-10-05 09:32:13', 12, 31, '103.92.214.2'),
(16, '2020-10-05 09:35:57', 11, 32, '37.111.197.129'),
(17, '2020-10-05 09:36:05', 12, 30, '37.111.197.129'),
(18, '2020-10-06 04:55:21', 12, 30, '37.111.216.240'),
(19, '2020-10-06 10:59:43', 12, 30, '61.247.186.90'),
(20, '2020-10-07 06:15:02', 12, 31, '103.92.214.0'),
(21, '2020-10-07 06:15:02', 12, 31, '103.92.214.8'),
(22, '2020-10-07 20:02:08', 12, 31, '103.230.104.58'),
(23, '2020-10-07 20:05:16', 12, 29, '103.62.140.204'),
(24, '2020-10-07 20:05:16', 12, 29, '103.62.140.204'),
(25, '2020-10-07 20:05:50', 12, 29, '103.230.105.29'),
(26, '2020-10-07 20:06:41', 12, 29, '103.230.106.41'),
(27, '2020-10-07 20:06:41', 12, 29, '103.230.106.41'),
(28, '2020-10-08 03:05:32', 12, 29, '37.111.195.7'),
(29, '2020-10-08 03:05:32', 12, 29, '37.111.195.7'),
(30, '2020-10-09 06:09:32', 12, 29, '103.92.214.15'),
(31, '2020-10-09 06:09:32', 12, 29, '103.92.214.15'),
(32, '2020-10-12 02:43:26', 12, 30, '116.193.218.61'),
(33, '2020-10-12 02:43:26', 12, 30, '116.193.218.61'),
(34, '2020-10-18 09:28:06', 12, 31, '::1'),
(35, '2020-10-18 09:28:06', 12, 31, '::1'),
(36, '2020-10-18 14:37:59', 12, 31, '127.0.0.1'),
(37, '2020-10-18 14:37:59', 12, 31, '127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `app_seating`
--
ALTER TABLE `app_seating`
  ADD PRIMARY KEY (`app_setting_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`playlist_id`);

--
-- Indexes for table `popular_video`
--
ALTER TABLE `popular_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_category_relation`
--
ALTER TABLE `post_category_relation`
  ADD PRIMARY KEY (`post_category_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pulls`
--
ALTER TABLE `pulls`
  ADD PRIMARY KEY (`pull_id`);

--
-- Indexes for table `pull_add_option`
--
ALTER TABLE `pull_add_option`
  ADD PRIMARY KEY (`pull_add_option_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_comments`
--
ALTER TABLE `sub_comments`
  ADD PRIMARY KEY (`sub_commets_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `app_seating`
--
ALTER TABLE `app_seating`
  MODIFY `app_setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `playlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `popular_video`
--
ALTER TABLE `popular_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `post_category_relation`
--
ALTER TABLE `post_category_relation`
  MODIFY `post_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pulls`
--
ALTER TABLE `pulls`
  MODIFY `pull_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pull_add_option`
--
ALTER TABLE `pull_add_option`
  MODIFY `pull_add_option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=519;

--
-- AUTO_INCREMENT for table `sub_comments`
--
ALTER TABLE `sub_comments`
  MODIFY `sub_commets_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
