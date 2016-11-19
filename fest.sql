-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2016 at 04:50 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fest`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `event` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `rules` varchar(500) NOT NULL,
  `des` varchar(400) NOT NULL,
  `otherAtt` varchar(50) NOT NULL,
  `other` varchar(3000) NOT NULL,
  `prize` varchar(30) NOT NULL,
  `regfee` varchar(20) NOT NULL,
  `regdate` varchar(30) NOT NULL,
  `timing` varchar(30) NOT NULL,
  `img` varchar(30) NOT NULL,
  `day` varchar(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event`, `name`, `sname`, `contact`, `rules`, `des`, `otherAtt`, `other`, `prize`, `regfee`, `regdate`, `timing`, `img`, `day`, `status`) VALUES
(1, 'TECHNICAL', 'PROJECT & MODEL EXHIBITION ', 'Mr. Shivam', '9857726303', '1. Models and Projects should be  necessary from Technical fields only.<br>\r\n2. Models and Projects not be made from Thermocol or Paper (except Pharmacy) <br> 3. Models and Projects will not be considered for Evaluation if Report is missing. <br>\r\n 4. Maximum 3 members in a Team are Allowed to present their models & projects.', 'This event include all working and non working models. Participates should carry a working or non-working model along with a Report of Maximum 15 pages. Report should be on A4 size pages. Candidates also give precise presentation on their Models if needed.  ', 'Judging Criteria:', '1. Questioning related to Project.<br>\r\n2. Contents of the report\r\n3. Importance of Projects and Models in day to day life and suitability with environment. <br>\r\n4. Creativity and user friendly nature of model and project.', '-TBA-', 'Free of cost', 'Till 25th April', '11:00 Am to 5:00 Pm', 'project', '1', 'Open'),
(2, 'TECHNICAL', 'QUIZ', 'Mr. Ankur', '9459766633', '1. A team should be 3 members only. <br>\r\n2. Use the Electronic media is not allowed.<br>\r\n3. Replacement of any participants of a team is not allowed after registration. <br>\r\n4. The discussion of coordinators will be final and will not be subject to any change.<br>\r\n5. Questions will be in the form of MCQ. True/False Statements, Specific Answer type. ', 'It is a team event and questions will be related to <b>General Science & Technology</b>. Participants have to Register in a Team. This event will be common to all Engg. branches.', 'Quiz Rounds:', '<b>Initial Screening:</b><br>\r\nIn case of more then 5 teams register Initial Screening will be done.<br>\r\n<b>Round 1:</b><br>\r\n1. 3 questions from each team and answering time will be 30 seconds with Passover question to the teams.<br>\r\n2. Team discussion is allowed.<br>\r\n<b>Round 2:</b><br>\r\n1. Paper work (A short MCQ Test of 15 questions in 10 mins.).<br>\r\n2. Team discussion is allowed.<br>\r\nElimination of teams will took place and top 5 will progress to final rounds.<br>\r\nIn the case of time between teams for the 5 questions will be asked for final selection between teams for the five questions will be asked for final selection.<br><br>\r\n\r\n<b>Final Round:</b><br>\r\n<b>Round 1:</b><br>\r\n1. 3 question will be asked from each team. if they are unable to answer it will be pass to next team and in the case of no answer from teams it will be passed to the audience.<br>\r\n2. 10 marks for correct answers and minus 5 for each wrong answer.<br>\r\n3. Answering team will be only 30 second.<br>\r\n4. Team discussion is allowed.<br>\r\n<b>Round 2: Rapid Fire Round</b><br>\r\n1. Each team will be asked 5 question one after another.<br>\r\n2. 10 marks for correct answer and minus 5 for every wrong answer.<br>\r\n3. Answering time will the only 5 seconds.<br>\r\n4. If a team cannot answer they can call for a pass for next question the question will not be passed over the next team.<br>\r\n\r\nIn the case of a tie between teams for the 5 questions will be asked from Tied team only for final results \r\n\r\n', '', 'Free of cost', 'Till 25th April', '10:00 Am TO 12:00 Pm', 'Quiz', '2', 'Open'),
(3, 'TECHNICAL', 'SOFT CORNER', 'Mr. Pawan', '9459695499', '', 'This event consists various competition to be performed on <b>softwares</b>. Participants has to use their skills and knowledge of softwares to solve a problem assigned to them in given time period. It consists of:<br>\r\n1. Web designing contest (2 members only) for CSE<br>\r\n2. Designing Contest in AutoCAD for ME,AE,CE.<br>', 'Rules & Judging Criteria:', '1. Time limit<br>\r\n2. Design Accuracy<br>\r\n3. Shortest method used<br>\r\n4. In case of copy from other members, both will be cancelled\r\n', '-TBA-', 'Free of cost', 'Till 25th April', '2:00  pm  to 4:30 pm', 'code', '2', 'Open'),
(5, 'TECHNICAL', 'TECH CRUNCH - Engine Quest', 'Mr. Akshay Verma', '9625010361', '1. Team of only 2 members is Allowed<br>\r\n2. Replacement of any participants of a team is not allowed after registration.<br>\r\n3. The Decisions of coordinators will be Final and will not be subject to any change.', 'This will be a Team event. This event consists of a Quiz Competition on Auto Engine. Participants can Register till 1 day\r\nbefore start of event.\r\n', 'Rounds :', '<b>Round 1</b><br>\r\n1. 3 Questions from each team will be asked with Passover to the teams. Answering time will be 30 seconds.<br>\r\n2. Team Discussion is allowed.<br>\r\n<b>Round 2</b><br>\r\n1. Paper Work ( Short MCQ objective Test of 10 mins.)<br>\r\n2. Team discussion is allowed<br>\r\nElimination of Teams will took place and top 3 will proceed to Round 3<br>\r\n<b>Round 3</b><br>\r\n1. Rapid Fire Round ; 5 questions from each team will be asked and 5 seconds will be answering Time<br>\r\n2. Team discussion is allowed<br>\r\n3. Calculators are not Allowed<br>\r\n', '-TBA-', 'Free of cost', 'Till 1 day before start', '10:00 pm  to 12:00 am', 'engine', '2', 'Open'),
(7, 'TECHNICAL', 'TECH CRUNCH - Mind Sweeper', 'Mr. Akshay Verma', '9625010361', '1. Eligible branches: ME, AE, CSE, ECE, EE<br>\r\n2. Use of electronic media is not allowed.<br>\r\n3. Team of amx 3 members only<br>\r\n4. Decision of coordinates will be final and will not be subject to any change.\r\n', 'This is a team event in which participants practical knowledge and command on hardware concept will be tested. Participant have to assemble the assemble hardware components.\r\n', 'Judgement Criteria:', '1. Time limit<br>\r\n2. Accuracy<br>\r\nIn the case of tie a new challenge will be final and will not be subject to any change.', '-TBA-', 'Free of cost', 'Till 1 day before start', '10:00 pm  to 12:00 am', 'mind', '2', 'Open'),
(10, 'TECHNICAL', 'TECHNOVISION', 'Mr. Pushpraj', '8628863515', '1. Maximum 15 slides.<br>\r\n2. Maximum time allowed for presentation will be 10 minutes.<br>\r\n3. Decision of coordinates will be final and will not be subject to any change.\r\n', 'This is a single member event. Participants have to prepare a Power Point Presentation (PPT) explaining contribution of their respective branches of Engineers towards Green India. Participants have to give a brief presentation at the day of event ', 'Judgement Criteria:', '1. Presentation at any given theme in a better way<br>\r\n2. Way of presenting the presentation<br>\r\n3. Research Data, images and videos used in presentation ', '-TBA-', 'Free of cost', 'Till 1 day before start', '2:00 pm  to 04:30 pm', 'pres', '1', 'Open'),
(11, 'TECHNICAL', 'INNOVATION CORNER', 'Mr. Shivam', '9459264457', '1. The Decisions of coordinators will be Final and will not be subject to any change.<br>\r\n2. Max 2 members in a team will be allowed.<br>\r\n3. Use of mobile phones is not Allowed.<br>\r\n4. Eligible Branches ME, AE, CE, EEE, CSE, ECE.', 'This will be a Team Event. This event will test the Creativity and knowledge of Participants. Participants can register till One\r\nDay Before Start of Event. This event consists of various activities\r\n', 'Events:', '1. Mobile App Challenge<br>\r\n2. Debug Challenge<br>\r\n3. Bridge Designing Contest<br>\r\n4. Mach Art\r\n', '-TBA-', 'Free of cost', 'Till 1day before start', '02:00 pm to 04:30 pm', 'junkyard', '2', 'Open'),
(12, 'CULTURAL', 'FOLK DANCE COMPETITION', 'Manisha', '8679109286', '1. Bhangra (Maximum 10 Members)<br>\r\n2. Natti (Maximum 12 Members)<br>\r\n3. Gidda (Maximum 10 Members)', '-', 'Duration', 'Time Limit - 12-15min for Natti<br>\r\n10-12min for Bhangra and Giddha', '-TBA-', 'Free of cost', 'till 28th April', '02:00 pm  to 4:30 pm', 'folk', '1', 'Open'),
(13, 'CULTURAL', 'Solo Dane Competition', 'Purnima', '98826922682', '1. Maximum time 5 min.<br>\r\n', '-', '', '', '-TBA-', 'Free of cost', 'till 29th April', '11:00 Am to 12:00 Pm', 'solo', '2', 'Open'),
(14, 'CULTURAL', 'Theme Parade', 'Karnika', '7831991599', '1. 12-16 members in each group.<br>\r\n2. Maximum 10-15 min will be given to particular group.<br>\r\n3. Participants should have proper dress code according to their theme presentation.', '-', '', '', '-TBA-', 'Free of cost', 'till 28th April', '5:30 Pm to 8:00 Pm', 'theamprade', '1', 'Open'),
(15, 'CULTURAL', 'Folk Song Competition', 'Vandana', '-', '1. Maximum time 4 min.<br>\r\n2. Participants must bring instrument/instrumental music with self to perform.', '-', '', '', '-TBA-', '-', 'till 29th April', '11:00Am to 12:00Pm', 'groupsong', '2', 'Open'),
(16, 'CULTURAL', 'Skit Competition', 'Kiran', '9882800202', '1. Maximum Timing 12-14 min. <br>\r\n', '-', '', '', '-TBA-', 'Free of cost', 'till 29th April', '2 :00 pm to  4:30 pm', 'skit', '2', 'Open'),
(17, 'CULTURAL', 'Battle of Bands', 'Ankesh', '-', 'Maximum 3 members.', '-', '', '', '-TBA-', 'Free of cost', 'till 29th April', '05:00 pm - 08:00 pm', 'rap', '2', 'Open'),
(18, 'CULTURAL', 'Dj Night', '-', '', 'N/A\r\n', 'Dj Night', '', '', 'N/A', 'Free of cost', 'N/A', '09:00 pm onwards', 'djnight', '2', 'Open'),
(19, 'FINE ART AND GAMES', 'Egg Catching', 'Radhika', '9418194457', '1. One person will throws the egg and other has to catches it.<br>\r\n2. 2 persons at one time. After every catch distance between two persons simultaneously increased till egg is broken.<br>two chances will be given.', '-', '', '', '-TBA-', 'Free of cost', 'till 28th April', '2:00 pm to 4:30pm', 'egg_catching', '1', 'Open'),
(20, 'FINE ART AND GAMES', 'Slow Bike Racing', 'Ashwani Kumar', '-', '1. 3 members in one slot<br>\r\n2. Allotted time 10 min<br>\r\n3. 2 chances will be given to reach the finish line.\r\n', 'Max time taken by person to reach at destination will be winner.', '', '', '-TBA-', 'Free of cost', 'till 28th April', '12:30 pm to 02:00 pm', 'slow_biking', '1', 'Open'),
(21, 'FINE ART AND GAMES', 'Tug Of War', 'Punita', '9882698620', '1. Maximum 7 members in each team.<br>\r\n2. Maximum Time allotted 5 min.', '-', '', '', '-TBA-', 'Free of cost', 'till 29th April', '11:00 Am to 12:00 Pm', 'tug', '2', 'Open'),
(22, 'FINE ART AND GAMES', 'Three Leg Race', 'Dharna', '-', 'Maximum 2 members.', '-', '', '', '-TBA-', 'free of cost', 'till 28th April', '2:00 pm to 4:30 pm', 'leg', '2', 'Open'),
(23, 'FINE ART AND GAMES', 'Dream World', 'Rachna', '-', 'Two members will participate in one team<br>\r\nTime give is 29 min.', 'Make something creative using sand', '', '', '-TBA-', 'Free of cost', 'till 29th April', '11:00 Am to 5:00 Pm', 'dream', '2', 'Open'),
(24, 'FINE ART AND GAMES', 'Nail Arts', 'Kirandeep', '-', 'Two members can be in one team<br>\r\nTime - 15 min.', 'Just don''t paint the nails make it an art', '', '', '-TBA-', 'Free of cost', 'till 29th April', '11:00 Am to 5:00 Pm', 'nail', '2', 'Open'),
(25, 'FINE ART AND GAMES', 'News Paper Art', 'Raju', '-', '-', 'Make creative structure using Newspaper in given time limit', '', '', '-TBA-', 'free of cost', 'till 28th April', '2:00 Pm to 4:00 Pm', 'paperart', '', 'Open'),
(26, 'FINE ART AND GAMES', 'Face Painting', 'Yograj', '-', '1. Two members in one team.<br>\r\n', 'Use the face as canvas and make it a piece of art', '', '', '-TBA-', 'Free of cost', 'till 28th April', '2:00 Pm to 4:00 Pm', 'facepaint', '1', 'Open'),
(27, 'FINE ART AND GAMES', 'Bottle Painting', 'Vijay', '-', 'One member in one team<br>\r\ntime - 15 min', 'This time use a bottle as canvas and paint it to make a masterpiece', '', '', '-TBA-', 'Free of cost', 'till 29th April', '10:00am to 12:00pm', 'bottle_painting', '2', 'Open'),
(28, 'FINE ART AND GAMES', 'Hair Dressing', '-', '-', 'Time 30 minutes', '-', '', '', '-TBA-', 'free of cost', 'till 28th April', '2:00 Pm to 4:00 Pm', 'hair', '1', 'Open'),
(29, 'FINE ART AND GAMES', 'Mehandi Competition', '-', '-', 'Time 25 minutes.', '-', '', '', '-TBA-', 'free of cost', 'till 28th April', '2:00 Pm to 4:00Pm', 'mehandi', '1', 'Open'),
(30, 'FINE ART AND GAMES', 'Paper Dance', 'Sapna', '-', '1. Dance till your feet fix in the folded paper. <br>\r\n2. Five pairs can be participate at a time.<br>\r\n3. The couples till winners is paper announced. ', 'Newspaper Dance is a game for dancing companions. Once the song stops, the partners should step on the piece of newspaper and avoid touching the ground.', '', '', '-TBA-', 'free of cost', 'till 29th April ', '2:00 Pm to 4:30 Pm', 'paper', '2', 'Open'),
(32, 'TECHNICAL', 'INNOVATION CORNER - Mobile App Challange', 'Mr. Shivam ', '9459264457', '1. Team consists of only two members.<br>\r\n2. Presentation time allowed maximum 10 minutes.<br>\r\n3. The decision of coordinators will be final and will not be subject to any change.\r\n', 'The team event which consist of designing a mobile app and a presentation explaining their app. Participants can register than one day before start of the event.\r\n', 'Judging Criteria: ', 'Judges will give marks on the basis of usefulness, creativity and friendly user interface of application', '-TBA-', 'Free of cost', 'Till 1 day before start', '2:00 pm  to 4:30 pm', 'mac', '2', 'Open'),
(33, 'TECHNICAL', 'INNOVATION CORNER - Debug Challange', 'Mr. Shivam', '9459264457', '1. Maximum 3 Members per team<br>\r\n2. One Member Compulsory From 3rd year<br>\r\n3. Use of Mobile hones are not allowed<br>\r\n4. Decision of coordinates will be final and will bot subject to any change.', 'It will be a team event. In this event participants have to detect errors in a given problem of circuits in allowed time period.', 'Judgement Criteria:', '1. Time limit<br>\r\n2. Total errors detected accurately.<br>\r\n3. In case of tie another new challenge will be imposed for Tied contestants only.', '-TBA-', 'Free of cost', 'Till 1 day before start', '2:00 pm  to 4:30 pm', 'debug', '2', 'Open'),
(34, 'TECHNICAL', 'INNOVATION CORNER - Bridge Designing Contest', 'Mr. Shivam', '9459264457', '1. A team of 2 members<br>\r\n2. Use of electronic media is not allowed.<br>\r\n3. Decision of coordinates will be final and will not be subject to any change.', 'The event consist of constructing a bridge on the spot using waste material like ice cream sticks and wires.', 'Judgement Criteria:', '1. Team whose bridge will be with standing maximum load will be declared winner.<br>\r\n2. In case of a Tie, least time taken and minimum material used for construction of bridge will be taken into consideration.', '-TBA-', 'Free of cost', 'Till 1 day before start', '2:00 pm  to 4:30 pm', 'bridge', '2', 'Open'),
(35, 'TECHNICAL', 'INNOVATION CORNER - Mach Art', 'Mr. Shivam', '9459264457', '1. A team of only 2 members is allowed.<br>\r\n2. Use of mobile phones is no allowed.<br>\r\n3. The Decisions of coordinators will be Final and will not be subject to any change.<br>\r\n4. Eligible Branches ME+AE.<br>\r\n', 'This will be a team event. Participants have to Complete a assigned Task on Lathe Machine. Participants have to register till\r\nlast 1 day before start ', 'Judgement Criteria:', '1. Time Limit<br>\r\n2. Dimensional Accuracy of Final Job<br>\r\n3. Best Finishing<br>\r\n4. Shortest Method Used<br>', '-TBA-', 'Free of cost', 'Till 1 day before start', '2:00 pm  to 4:30 pm', 'mach', '2', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `mainevents`
--

CREATE TABLE IF NOT EXISTS `mainevents` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `event` varchar(20) NOT NULL,
  `shead` varchar(30) NOT NULL,
  `thead` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `rulebook` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mainevents`
--

INSERT INTO `mainevents` (`id`, `event`, `shead`, `thead`, `contact`, `rulebook`) VALUES
(1, 'TECHNICAL', 'Mr. Yashpal (9459782257)', 'Er. Manider Bagga (8894255154)', 'Mr. Rajinder (9459428973)', 'tech_rule_book.pdf'),
(2, 'CULTURAL', 'Ms. Manisha (8679109286)', 'Mr. Naveen', 'Ms. Karnika (7831991599)', ''),
(3, 'FINE ART AND GAMES', 'Ms. Shefali', 'Mr. Pankaj', 'Ms. Kirandeep', '');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `queri` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `email`, `contact`, `queri`, `status`) VALUES
(1, 'shubham', 'shubham80621@gmail.c', '9888201905', 'mnhsdfhgvsadjhfgadsfgasjkg', 'seen'),
(12, 'Kamal Kant', 'kkchaudhary11@gmail.', '0898817775', 'very good', 'seen');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
  `regno` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `cname` varchar(60) NOT NULL,
  `year` varchar(10) NOT NULL,
  `cadd` varchar(100) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `event` varchar(40) NOT NULL,
  `rtype` varchar(20) NOT NULL,
  `members` varchar(200) NOT NULL,
  `fee` varchar(20) NOT NULL,
  `verified` varchar(10) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1001 ;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`regno`, `name`, `cname`, `year`, `cadd`, `mail`, `phone`, `event`, `rtype`, `members`, `fee`, `verified`) VALUES
(1000, 'Anyonmous', 'this record is for testing purpose (do not delete this)', '', 'this record is for testing purpose', 'test@test.com', '0000000000', 'na', '', '', 'free', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pwrd` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pwrd`, `name`) VALUES
(1, 'admin', 'master'),
(2, '123', 'jerry');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
