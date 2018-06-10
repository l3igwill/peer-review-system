-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 06:35 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peer_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `choice_id` int(11) NOT NULL,
  `choice_description` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`choice_id`, `choice_description`) VALUES
(0, 'Ineffective'),
(1, 'Very little of skill completed'),
(2, 'Needs Improvement'),
(3, 'Below average'),
(4, 'Slightly below average'),
(5, 'average'),
(6, 'Slightly above average'),
(7, 'Above average'),
(8, 'good'),
(9, 'Very impressive, almost perfect'),
(10, 'excellent, could not do better');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `survey_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `feedback_given` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(8) NOT NULL,
  `question_description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question_description`, `category_id`) VALUES
(1, 'Quality of code written was appropriate\r\n', 1),
(2, 'The amount of work completed for the semester was appropriate.\r\n', 1),
(3, 'Solution is effective, functional, and user friendly\r\n', 1),
(4, 'Exhibits professional communication with the client\r\n', 2),
(5, 'Speaks professionally\r\n', 2),
(6, 'Writes professionally\r\n', 2),
(7, 'Demonstrates ability to listen effectively\r\n', 2),
(8, 'Uses language appropriate to situation\r\n', 2),
(9, 'Works cooperatively with others/follows team rules and procedures\r\n', 3),
(10, 'Demonstrates respect for others through word and action\r\n', 3),
(11, 'Provides and accepts constructive criticism\r\n', 3),
(12, 'Respects group decisions when they conflict with their own analysis\r\n', 3),
(13, 'Helps others to solve programming issues they encounter\r\n', 3),
(14, 'Attends meetings regularly and punctually\r\n', 4),
(15, 'Assumes responsibility for completing assignments\r\n', 4),
(16, 'Performs assigned tasks\r\n', 4),
(17, 'When individual made a mistake, they owned it and took responsibility for it.  \r\n', 4),
(18, 'Demonstrates willingness to recognize others’ point of view\r\n', 5),
(19, 'Willing to change opinion as circumstances change.  \r\n', 5),
(20, 'Uses appropriate programming tools, equipment, and methods\r\n', 6),
(21, 'Seeks out and uses new tools that would be advantageous to the project.\r\n', 6);

-- --------------------------------------------------------

--
-- Table structure for table `questioncategory`
--

CREATE TABLE `questioncategory` (
  `category_id` int(8) NOT NULL,
  `category_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questioncategory`
--

INSERT INTO `questioncategory` (`category_id`, `category_description`) VALUES
(1, 'Working Productively/Assuring Quality'),
(2, 'Communicating clearly'),
(3, 'Working Cooperatively'),
(4, 'Acting Responsibly/Acting with Integrity'),
(5, 'Thinking Critically and Creatively'),
(6, 'Applying Technology');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(11) NOT NULL,
  `semester_description` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_description`) VALUES
(1, 'Spring 2018');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(8) NOT NULL,
  `student_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`) VALUES
(456080, 'Jason West'),
(12000351, 'Aron Jones'),
(12227032, 'David Johnson'),
(13772706, 'Rebecca Heineck'),
(14513732, 'Jacob Ludwiczak'),
(15078725, 'Preston Morgan'),
(15258424, 'Chad Wolding'),
(15483285, 'Christine Sommers'),
(15514784, 'Taylor Wachowiak'),
(15618953, 'Megan Melville'),
(15766412, 'Takiyo Brytowski'),
(15799848, 'Change Hwn Khang'),
(15952624, 'Dustin Wergin'),
(16021485, 'Sylvan Dyken'),
(16046432, 'Riley Lewellin'),
(16151199, 'Alexis Dumpprope'),
(16180579, 'Isaiah Zdroik'),
(16264806, 'Bryce Menadue'),
(16269525, 'Shawn Biedenbender'),
(16312581, 'Kyle Charneski'),
(16327947, 'Nicholas Flaig'),
(16497896, 'Aaron Weber'),
(16504266, 'Asher Smith'),
(16552132, 'Nicolas Wavruk'),
(16587765, 'Corben Phelps'),
(16590612, 'Matthew Skifton'),
(16591938, 'Bradley Lucksted');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `survey_id` int(8) NOT NULL,
  `student_id` int(8) NOT NULL,
  `student_reviewed` int(8) NOT NULL,
  `team_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surveyquestion`
--

CREATE TABLE `surveyquestion` (
  `survey_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_selection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(8) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `team_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `semester_id`, `team_name`) VALUES
(1, 1, 'Method Overload'),
(2, 1, 'Null Terminators'),
(3, 1, 'Memory Leak'),
(4, 1, 'You cant encapsulate us'),
(5, 1, 'Scrum Lords'),
(6, 1, 'Its a feature Not a bug'),
(7, 1, 'Capture The Campus'),
(8, 1, 'Restaurant Scheduling');

-- --------------------------------------------------------

--
-- Table structure for table `teamstudent`
--

CREATE TABLE `teamstudent` (
  `team_id` int(8) NOT NULL,
  `student_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamstudent`
--

INSERT INTO `teamstudent` (`team_id`, `student_id`) VALUES
(1, 456080),
(1, 14513732),
(1, 16327947),
(1, 16590612),
(2, 15766412),
(2, 16151199),
(2, 16497896),
(3, 16046432),
(3, 16504266),
(3, 16552132),
(4, 15483285),
(4, 15514784),
(4, 16591938),
(5, 12227032),
(5, 16264806),
(6, 15618953),
(6, 16021485),
(6, 16587765),
(7, 13772706),
(7, 15258424),
(7, 16180579),
(7, 16312581),
(8, 12000351),
(8, 15078725),
(8, 15952624),
(8, 16269525);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`choice_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`survey_id`,`category_id`),
  ADD KEY `survey_id` (`survey_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `questioncategory`
--
ALTER TABLE `questioncategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`),
  ADD KEY `survey_id` (`survey_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `student_reviewed` (`student_reviewed`),
  ADD KEY `team_id` (`team_id`) USING BTREE;

--
-- Indexes for table `surveyquestion`
--
ALTER TABLE `surveyquestion`
  ADD PRIMARY KEY (`survey_id`,`question_id`),
  ADD KEY `survey_id` (`survey_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `user_selection` (`user_selection`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `teamstudent`
--
ALTER TABLE `teamstudent`
  ADD PRIMARY KEY (`team_id`,`student_id`),
  ADD KEY `team_id` (`team_id`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `questioncategory`
--
ALTER TABLE `questioncategory`
  MODIFY `category_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `questioncategory` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`survey_id`) REFERENCES `survey` (`survey_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `questioncategory` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `survey_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `survey_ibfk_2` FOREIGN KEY (`student_reviewed`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `survey_ibfk_3` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`);

--
-- Constraints for table `surveyquestion`
--
ALTER TABLE `surveyquestion`
  ADD CONSTRAINT `surveyquestion_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surveyquestion_ibfk_2` FOREIGN KEY (`survey_id`) REFERENCES `survey` (`survey_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surveyquestion_ibfk_3` FOREIGN KEY (`user_selection`) REFERENCES `choice` (`choice_id`);

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`semester_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teamstudent`
--
ALTER TABLE `teamstudent`
  ADD CONSTRAINT `teamstudent_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teamstudent_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
