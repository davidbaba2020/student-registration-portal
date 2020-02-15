-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2020 at 10:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `200levelcourses`
--

CREATE TABLE `200levelcourses` (
  `200L_id` int(50) NOT NULL,
  `studid` int(50) NOT NULL,
  `Reg_No` varchar(100) NOT NULL,
  `jambno` varchar(50) NOT NULL,
  `reg_date` date NOT NULL,
  `200first_sem_course1` varchar(100) NOT NULL,
  `200first_sem_course2` varchar(100) NOT NULL,
  `200first_sem_course3` varchar(100) NOT NULL,
  `200first_sem_course4` varchar(100) NOT NULL,
  `200first_sem_course5` varchar(100) NOT NULL,
  `200first_sem_course6` varchar(100) NOT NULL,
  `200first_sem_course7` varchar(100) NOT NULL,
  `200first_sem_course8` varchar(100) NOT NULL,
  `200first_sem_course9` varchar(100) NOT NULL,
  `200first_sem_course10` varchar(100) NOT NULL,
  `200Second_sem_course1` varchar(100) NOT NULL,
  `200Second_sem_course2` varchar(100) NOT NULL,
  `200Second_sem_course3` varchar(100) NOT NULL,
  `200Second_sem_course4` varchar(100) NOT NULL,
  `200Second_sem_course5` varchar(100) NOT NULL,
  `200Second_sem_course6` varchar(100) NOT NULL,
  `200Second_sem_course7` varchar(100) NOT NULL,
  `200Second_sem_course8` varchar(100) NOT NULL,
  `200Second_sem_course9` varchar(100) NOT NULL,
  `200Second_sem_course10` varchar(100) NOT NULL,
  `STATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `200levelcourses`
--

INSERT INTO `200levelcourses` (`200L_id`, `studid`, `Reg_No`, `jambno`, `reg_date`, `200first_sem_course1`, `200first_sem_course2`, `200first_sem_course3`, `200first_sem_course4`, `200first_sem_course5`, `200first_sem_course6`, `200first_sem_course7`, `200first_sem_course8`, `200first_sem_course9`, `200first_sem_course10`, `200Second_sem_course1`, `200Second_sem_course2`, `200Second_sem_course3`, `200Second_sem_course4`, `200Second_sem_course5`, `200Second_sem_course6`, `200Second_sem_course7`, `200Second_sem_course8`, `200Second_sem_course9`, `200Second_sem_course10`, `STATUS`) VALUES
(1, 3, '2017/003/D/GM/06', '23547487ZN', '2019-05-08', 'BIO 201 Genetics and Evolution 3CU', 'BOT 201 Review of Plant Kingdom 4CU', 'ECO 202 The Environs and World Ecosystem 3CU', 'EDU 211 Introduction to Educational Psychology 3CU', 'BOT 201 Review of Plant Kingdom 4CU', 'EDU 211 Introduction to Educational Psychology 3CU', '', '', '', '', 'GNS 202 African History and Culture 2CU', 'GNS 202 African History and Culture 2CU', 'ZOO 201 Review of Animal Kingdomï¿½ 4CU', '', '', '', '', '', '', '', 'REGISTERED'),
(2, 2, '2015/002/D/GM/06', '125243677VD', '2019-05-12', 'CSE 211ï¿½ Introduction to Computer\r\nOperationï¿½ 2 CU', 'CSE 221ï¿½ Introduction to Database Management and Programmingï¿½ 4 CU', 'EDU 201ï¿½ Classroom Observationï¿½ 2CU', 'EDU 211 Introduction to Educational Psychologyï¿½ 3 CU', 'GNS 101ï¿½ Use of English Language 1 (For DE Candidates)ï¿½ 2CU', 'MATH211ï¿½ Linear Algebra 3CU', '', '', '', '', 'CSE 222 Computer and Societyï¿½ 3CU', 'CSE 232ï¿½ Computer Programmingï¿½ 4 CU', '', 'GNS 202Â   African History and Cultureï¿½2CU', 'MATH221ï¿½ Linear Algebra 2 3 CU', 'SCI 231 Integrated ScienceÂ 3CU', '', '', '', '', 'REGISTERED'),
(3, 4, '2014/004/D/GM/06', '123456ET', '2019-05-13', 'EDU 211		Intro to Education Psychology		3 CU', 'EDU 221		Foundation of Education 1		3 CU', 'GNS 101		Use of English Language 1 (For DE Candidates)		2 CU', 'MATH211  Linear Algebra 1    3CU', 'MATH 213		Analysis 1		3 CU', 'SED 201	  Classroom Observation		1 CU', 'ST 281			Descriptive Statistics		3 CU', 'SCI231	Integrated Science	3 CU', '', '', 'EDU222	  Foundation of Education2	3 CU', 'GNS202	African History and Culture	2CU', '', 'MATH 221	Linear Algebra2	  3 CU', 'MATH223 	Analysis 2	3CU', 'ST 281			Descriptive Statistics		3 CU', '', '', '', '', 'REGISTERED');

-- --------------------------------------------------------

--
-- Table structure for table `300levelcourses`
--

CREATE TABLE `300levelcourses` (
  `300L_id` int(50) NOT NULL,
  `200levelid` int(50) NOT NULL,
  `Reg_No` varchar(100) NOT NULL,
  `jambno` varchar(50) NOT NULL,
  `reg_date` date NOT NULL,
  `300first_sem_course1` varchar(100) NOT NULL,
  `300first_sem_course2` varchar(100) NOT NULL,
  `300first_sem_course3` varchar(100) NOT NULL,
  `300first_sem_course4` varchar(100) NOT NULL,
  `300first_sem_course5` varchar(100) NOT NULL,
  `300first_sem_course6` varchar(100) NOT NULL,
  `300first_sem_course7` varchar(100) NOT NULL,
  `300first_sem_course8` varchar(100) NOT NULL,
  `300first_sem_course9` varchar(100) NOT NULL,
  `300first_sem_course10` varchar(100) NOT NULL,
  `300Second_sem_course1` varchar(100) NOT NULL,
  `300Second_sem_course2` varchar(100) NOT NULL,
  `300Second_sem_course3` varchar(100) NOT NULL,
  `300Second_sem_course4` varchar(100) NOT NULL,
  `300Second_sem_course5` varchar(100) NOT NULL,
  `300Second_sem_course6` varchar(100) NOT NULL,
  `300Second_sem_course7` varchar(100) NOT NULL,
  `300Second_sem_course8` varchar(100) NOT NULL,
  `300Second_sem_course9` varchar(100) NOT NULL,
  `300Second_sem_course10` varchar(100) NOT NULL,
  `400fisrt_semester_course1` varchar(100) NOT NULL,
  `400Second_semester_course2` varchar(100) NOT NULL,
  `cregdate400Level` date NOT NULL,
  `STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `300levelcourses`
--

INSERT INTO `300levelcourses` (`300L_id`, `200levelid`, `Reg_No`, `jambno`, `reg_date`, `300first_sem_course1`, `300first_sem_course2`, `300first_sem_course3`, `300first_sem_course4`, `300first_sem_course5`, `300first_sem_course6`, `300first_sem_course7`, `300first_sem_course8`, `300first_sem_course9`, `300first_sem_course10`, `300Second_sem_course1`, `300Second_sem_course2`, `300Second_sem_course3`, `300Second_sem_course4`, `300Second_sem_course5`, `300Second_sem_course6`, `300Second_sem_course7`, `300Second_sem_course8`, `300Second_sem_course9`, `300Second_sem_course10`, `400fisrt_semester_course1`, `400Second_semester_course2`, `cregdate400Level`, `STATUS`) VALUES
(1, 0, '2017/003/D/GM/06', '23547487ZN', '2019-05-09', 'BOT 301 Plant Physiologyï¿½ 3CU', 'BOT 301 Plant Physiologyï¿½ 3CU', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'IT', 'Teaching Practice', '2019-12-05', 'REGISTERED'),
(3, 2, '2015/002/D/GM/06', '125243677VD', '2019-05-12', 'CS 331ï¿½ Data Structureï¿½ 3CU', 'CSE 333 Using Computer in Education 3CU', 'EDU 311 Adolescent Psychology 3CU', 'GNS 301ï¿½ Science, Technology and Societyï¿½ 2CU', 'MATH 223ï¿½ Analysis 2 3CU', 'SED 350ï¿½Science Methodï¿½ 3 CU', '', '', '', '', 'CS 342ï¿½ Organization of Programming Language 3CU', 'CS 343 System Analysis and Designï¿½ 4CU', 'EDU 341ï¿½ Princ. Of Curr. Dev. in Sci. and Mathematics 3 CU', 'EDU 362ï¿½ EducationalTechnology 3 CU', 'GNS 302ï¿½ Entrepreneurship Studies 2 CU', 'MATH213ï¿½ Analysis 1ï¿½ 3CU', '', '', '', '', 'IT', 'Teaching Practice', '2019-12-05', 'REGISTERED'),
(6, 3, '2014/004/D/GM/06', '123456ET', '2019-05-13', 'EDU 311	Adolescent Psychology		3 CU', 'GNS 301	Science, Technology & Society		1 CU', 'MATH 321	Abstract Algebra 2	3 CU', 'MATH311	Abstract Algebra 1	3CU', 'SED 361	ICT in Education		3 CU', 'ST 371		Probability Theory 1	3 CU', '', '', '', '', 'EDU 362	Educational Technology		3 CU', 'MATH 322	Topology 1		3 CU', 'MATH 323	Complex Analysis 1	3 CU', 'MATH312	Analysis 3		3 CU', 'MATH337	Numerical Analysis 1	3 CU', 'SED 350	Science Method	3 CU', '', '', '', '', 'IT', 'Teaching Practice', '0000-00-00', 'REGISTERED');

-- --------------------------------------------------------

--
-- Table structure for table `500levelcourses`
--

CREATE TABLE `500levelcourses` (
  `500L_id` int(50) NOT NULL,
  `300levelid` int(50) NOT NULL,
  `Reg_No` varchar(100) NOT NULL,
  `jambno` varchar(50) NOT NULL,
  `Reg_date` date NOT NULL,
  `500first_sem_course1` varchar(100) NOT NULL,
  `500first_sem_course2` varchar(100) NOT NULL,
  `500first_sem_course3` varchar(100) NOT NULL,
  `500first_sem_course4` varchar(100) NOT NULL,
  `500first_sem_course5` varchar(100) NOT NULL,
  `500first_sem_course6` varchar(100) NOT NULL,
  `500first_sem_course7` varchar(100) NOT NULL,
  `500first_sem_course8` varchar(100) NOT NULL,
  `500first_sem_course9` varchar(100) NOT NULL,
  `500first_sem_course10` varchar(100) NOT NULL,
  `500Second_sem_course1` varchar(100) NOT NULL,
  `500Second_sem_course2` varchar(100) NOT NULL,
  `500Second_sem_course3` varchar(100) NOT NULL,
  `500Second_sem_course4` varchar(100) NOT NULL,
  `500Second_sem_course5` varchar(100) NOT NULL,
  `500Second_sem_course6` varchar(100) NOT NULL,
  `500Second_sem_course7` varchar(100) NOT NULL,
  `500Second_sem_course8` varchar(100) NOT NULL,
  `500Second_sem_course9` varchar(100) NOT NULL,
  `500Second_sem_course10` varchar(100) NOT NULL,
  `STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `500levelcourses`
--

INSERT INTO `500levelcourses` (`500L_id`, `300levelid`, `Reg_No`, `jambno`, `Reg_date`, `500first_sem_course1`, `500first_sem_course2`, `500first_sem_course3`, `500first_sem_course4`, `500first_sem_course5`, `500first_sem_course6`, `500first_sem_course7`, `500first_sem_course8`, `500first_sem_course9`, `500first_sem_course10`, `500Second_sem_course1`, `500Second_sem_course2`, `500Second_sem_course3`, `500Second_sem_course4`, `500Second_sem_course5`, `500Second_sem_course6`, `500Second_sem_course7`, `500Second_sem_course8`, `500Second_sem_course9`, `500Second_sem_course10`, `STATUS`) VALUES
(1, 3, '2015/002/D/GM/06', '125243677VD', '2019-05-12', 'CS 541ï¿½ Intro to Operating System and Principlesï¿½ 3 CU', 'CSE 531 Design Analysis Algorithms 3 CU', 'EDU 571 Education Administration and Planningï¿½3 CU', 'EDU 581ï¿½Measurement and Evaluat in Sci. and Math Educ 3 CU', 'CSE 533ï¿½ Translation of Programming Language 3 CU', '', '', '', '', '', 'CS 542ï¿½Database Managementï¿½ 3 CU', 'CSE 535 Data Communication and Network 3CU', 'EDU 572 Guidance and Counseling 3 CU', 'SED 509 Final Year Project 6CU', '', '', '', '', '', '', 'REGISTERED'),
(6, 6, '2014/004/D/GM/06', '123456ET', '2019-05-13', 'EDU 500ï¿½Teaching Practice 4CU', 'Elective in Mathï¿½3CU', 'MATH 521      Number Theory    3CU', 'Minor Subject Biology/Chemistry/Computer/PhysicsÂ Â Â 3CU', '', '', '', '', '', '', 'Guidance Counselling 3CU', 'MATH 522    Partial Differential Equation  3CU', 'MATH 523	Functional Analysis	3CU', 'SCI597/EDU 572 W/shop in sen. Sec sch. Maths ', '', '', '', '', '', '', 'REGISTERED');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userAdmin` varchar(256) NOT NULL,
  `emailAdmin` varchar(256) NOT NULL,
  `passAdmin` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userAdmin`, `emailAdmin`, `passAdmin`) VALUES
(19, 'baba', 'baba@gmail.com', '1234abcd'),
(21, 'david', 'davidbaba@ymail.com', '12345'),
(23, 'Master', 'master@admin.web', '12345'),
(25, '', '', ''),
(26, 'Abubakar', 'abubakar@yahoo.com', '123456'),
(27, 'bEN cRUISE', 'ben@hahoo.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `admittedstudents`
--

CREATE TABLE `admittedstudents` (
  `id` int(11) NOT NULL,
  `studentSurename` text NOT NULL,
  `othername` text NOT NULL,
  `studentname` varchar(256) NOT NULL,
  `jambno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admittedstudents`
--

INSERT INTO `admittedstudents` (`id`, `studentSurename`, `othername`, `studentname`, `jambno`) VALUES
(76, 'Musa', 'Hammed', 'Ibrahim', '12345867MI'),
(77, 'Baba', 'Salifu', 'David', '24680135DB'),
(86, 'Ibrahim', '', 'Bitrus', '124363447456BI'),
(87, 'Abubakar', '', 'Bello', '876755484AB'),
(88, 'Teman', '', 'Esther', '123456ET'),
(89, 'Muazu', 'Jero', 'Mamman', '997354474MM'),
(90, 'Mohammed', 'Manu', 'Zainab', '23547487ZN'),
(91, 'Musterpha', '', 'Abubakr', '125373635MA'),
(92, 'Abu', '', ' Manu', '1234'),
(93, 'Vandis ', '', 'Maraima', '125243677VD'),
(94, 'Musa', 'Buzuzu', 'Maina', '12345MB'),
(95, 'UZO', 'CHUKWU', 'DAVID', '102935UC');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courses_id` int(11) NOT NULL,
  `courses_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `level_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courses_id`, `courses_name`, `level_id`, `status`) VALUES
(1, 'MATH211  Linear Algebra 1    3CU', 1, 1),
(2, 'MATH222	Mathematics Methods 2     3CU', 1, 1),
(3, 'MATH223 	Analysis 2	3CU', 1, 1),
(4, 'MATH 212		Mathematics Methods 1	   3 CU', 1, 1),
(5, 'MATH 213		Analysis 1		3 CU', 1, 1),
(6, 'EDU 211		Intro to Education Psychology		3 CU', 1, 1),
(7, 'EDU 221		Foundation of Education 1		3 CU', 1, 1),
(8, 'GNS 201		Information Science			2 CU', 1, 1),
(9, 'GNS 101		Use of English Language 1 (For DE Candidates)		2 CU', 1, 1),
(10, 'Minor Subject 		Biology/ Chemistry/Computer/ Physics			2 CU', 1, 1),
(11, 'ST 281			Descriptive Statistics		3 CU', 1, 1),
(12, 'ST 271	Introductory Statistics	4CU', 1, 1),
(13, 'MATH 221	Linear Algebra2	  3 CU', 1, 1),
(14, 'SED 201	  Classroom Observation		1 CU', 1, 1),
(15, 'SCI231	Integrated Science	3 CU', 1, 1),
(16, 'EDU222	  Foundation of Education2	3 CU', 1, 1),
(17, 'GNS202	African History and Culture	2CU', 1, 1),
(18, 'GNS222	Peace and Conflict Resolution Studies	 2CU', 1, 1),
(19, 'MATH311	Abstract Algebra 1	3CU', 2, 1),
(20, 'MATH312	Analysis 3		3 CU', 2, 1),
(21, 'MATH337	Numerical Analysis 1	3 CU', 2, 1),
(22, 'ST 371		Probability Theory 1	3 CU', 2, 1),
(23, 'SED 361	ICT in Education		3 CU', 2, 1),
(24, 'SED 383	Research methods & Statistics in Education	3 CU', 2, 1),
(25, 'EDU 311	Adolescent Psychology		3 CU', 2, 1),
(26, 'GNS 301	Science, Technology & Society		1 CU', 2, 1),
(27, 'MATH 321	Abstract Algebra 2	3 CU', 2, 1),
(28, 'MATH 323	Complex Analysis 1	3 CU', 2, 1),
(29, 'MATH 322	Topology 1		3 CU', 2, 1),
(30, 'GNS 301	Science, Technology & Society		1 CU', 2, 1),
(31, 'MATH 321	Abstract Algebra 2	3 CU', 2, 1),
(32, 'MATH 323	Complex Analysis 1	3 CU', 2, 1),
(33, 'MATH 322	Topology 1		3 CU', 2, 1),
(34, 'SED 341	Prin. of Curriculum Dev. in Science and Math.	3 CU', 2, 1),
(35, 'SED 350	Science Method	3 CU', 2, 1),
(36, 'SED 353	Methods of Teaching Mathematics	3 CU', 2, 1),
(37, 'EDU 362	Educational Technology		3 CU', 2, 1),
(38, 'GNS 302	Entrepreneurship Studies	2 CU', 2, 1),
(39, 'Minor Subjects	Biology/Chemistry/Computer/Physics		2 CU', 2, 1),
(40, 'MATH 521      Number Theory    3CU', 4, 1),
(41, 'MATH 523	Functional Analysis	3CU', 4, 1),
(42, 'MATH 522    Partial Differential Equation  3CU', 4, 1),
(43, 'SCI597/EDU 572 W/shop in sen. Sec sch. Maths ', 4, 1),
(44, 'EDU 500 Teaching Practice 4CU', 4, 1),
(45, 'Elective in Math 3CU', 4, 1),
(46, 'Minor Subject Biology/Chemistry/Computer/PhysicsÂ Â Â 3CU', 4, 1),
(47, 'Guidance Counselling 3CU', 4, 1),
(48, 'MATH211  Linear Algebra 3CU', 6, 1),
(49, 'CSE 232  Computer Programming  4 CU', 6, 1),
(50, 'CSE 211  Introduction to Computer\r\nOperation  2 CU', 6, 1),
(51, 'CSE 221  Introduction to Database Management and Programming  4 CU', 6, 1),
(52, 'EDU 211 Introduction to Educational Psychology  3 CU', 6, 1),
(53, 'EDU 221  Foundation of Education 1  3 CU', 6, 1),
(54, 'GNS 201  Information Science  2 CU', 6, 1),
(55, 'GNS 101  Use of English Language 1 (For DE Candidates)  2CU', 6, 1),
(56, 'MATH221  Linear Algebra 2 3 CU', 6, 1),
(57, 'CSE 222 Computer and Society  3CU', 6, 1),
(58, 'CSE 222 Computer and Society  3CU', 6, 1),
(59, 'EDU 201  Classroom Observation  2CU', 6, 1),
(60, 'EDU 222  Foundation of Education 2 3CU', 6, 1),
(61, 'SCI 231 Integrated ScienceÂ 3CU', 6, 1),
(62, 'GNS 222 Peace and Conflict Resolution Studies 2CU', 6, 1),
(63, 'GNS 102Â  Â Use of English Language 2 (For DE Candidates)Â Â Â 2 CU', 6, 1),
(64, 'GNS 202Â   African History and Culture 2CU', 6, 1),
(65, 'MATH213  Analysis 1  3CU', 7, 1),
(66, 'CS 331  Data Structure  3CU', 7, 1),
(67, 'CSE 334 Computer Programming Language  2CU', 7, 1),
(68, 'CSE 333 Using Computer in Education 3CU', 7, 1),
(69, 'SED 361  Algorithms and Complexity Analysis  3CU', 7, 1),
(70, 'EDU 311 Adolescent Psychology 3CU', 7, 1),
(71, 'SED 383 Research methods and Statistics in Education  3CU', 7, 1),
(72, 'GNS 301  Science, Technology and Society  2CU', 7, 1),
(73, 'MATH 223  Analysis 2 3CU', 7, 1),
(74, 'CS 342  Organization of Programming Language 3CU', 7, 1),
(75, 'CS 343 System Analysis and Design  4CU', 7, 1),
(76, 'CSE 355 Method of Teaching Computer Science 3CU', 7, 1),
(77, 'CSE 345 Introduction to Computer System  3 CU', 7, 1),
(78, 'SED 350 Science Method  3 CU', 7, 1),
(79, 'EDU 341  Princ. Of Curr. Dev. in Sci. and Mathematics 3 CU', 7, 1),
(80, 'EDU 362  EducationalTechnology 3 CU', 7, 1),
(81, 'GNS 302  Entrepreneurship Studies 2 CU', 7, 1),
(82, 'CSE 533  Translation of Programming Language 3 CU', 9, 1),
(83, 'CSE 535 Data Communication and Network 3CU', 9, 1),
(84, 'CSE 531 Design Analysis Algorithms 3 CU', 9, 1),
(85, 'EDU 571 Education Administration and Planning 3 CU', 9, 1),
(86, 'EDU 581 Measurement and Evaluat in Sci. and Math Educ 3 CU', 9, 1),
(87, 'SED 509  Project in Science Education', 9, 1),
(88, 'CS 542 Database Management  3 CU', 9, 1),
(89, 'CS 541  Intro to Operating System and Principles  3 CU', 9, 1),
(90, 'CSE 543 Introduction to Computer Architecture 3 CU', 9, 1),
(91, 'CSE 547 Advance Programming Language 3 CU', 9, 1),
(92, 'EDU 572 Guidance and Counseling 3 CU', 9, 1),
(93, 'SED 509 Final Year Project 6CU', 9, 1),
(94, 'PHY 202 Intermediate Mechanics 4CU', 22, 1),
(95, 'PHY222 Heat and Thermodynamics 3CU', 22, 1),
(96, 'PHY 202 Intermediate Mechanics 4 CU', 22, 1),
(97, 'PHY 271 Basic Experimental Physics  1 CU', 22, 1),
(98, 'PHY222 Heat and Thermodynamics 3CU', 22, 1),
(99, 'MTH 211 Linear Algebra 1  3 CU', 22, 1),
(100, 'PHY 271 Basic Experimental Physics3 1 CU', 22, 1),
(101, 'GNS 201 Information Science 2 CU', 22, 1),
(102, 'MTH 211 Linear Algebra 1 3 CU', 22, 1),
(103, 'EDU 211 Intro to Educational Psychology  3 CU', 22, 1),
(104, 'GNS 201 Information Science 2 CU', 22, 1),
(105, 'EDU 223 Foundation of Education 2  3CU', 22, 1),
(106, 'EDU 211 Intro to Educational Psychology  3CU', 22, 1),
(107, 'SED 256 History and Philosophy of Physics Education 2CU', 22, 1),
(108, 'EDU 22 Foundationof Education 2 3CU', 22, 1),
(109, 'GNS 101 Use of English Language 1 (For DE Candidates) 2 CU', 22, 1),
(110, 'SED 256 History and Philosophy of Physics Education 2 CU', 22, 1),
(111, 'PHY212 Interaction,fields and Waves  4CU', 22, 1),
(112, 'GNS 101 Use of English Language 1 (For DE Candidates) 2CU', 22, 1),
(113, 'PHY242 Atomic Physics 1 4CU', 22, 1),
(114, 'PHY212 Interaction,fields and Waves  4CU', 22, 1),
(115, 'PHY 272  Basic Experimental Physics 4CU', 22, 1),
(116, 'PHY242 Atomic Physics 1 4CU', 22, 1),
(117, 'MTH221 Linear Algebra 2 CU', 22, 1),
(118, 'PHY 272 Basic Experimental Physics 4CU', 22, 1),
(119, 'EDU 222 Foundation of Education2 3 CU', 22, 1),
(120, 'MTH221 Linear Algebra 2CU', 22, 1),
(121, 'SED 256 History and Philosophy of Physics Education', 22, 1),
(122, 'EDU 222 Foundation of Education 2  3 CU', 22, 1),
(123, 'GNS 202  African History and Culture 2 CU', 22, 1),
(124, 'SED 256 History and Philosophy of Physics Education 2CU', 22, 1),
(125, 'GNS 102 Use of English Language 2 (For DE Candidates) 2CU', 22, 1),
(126, 'GNS 202 African History and Culture 2CU', 22, 1),
(127, 'GNS 222 Peace and Conflict Resolution Studies 2CU', 22, 1),
(128, 'GNS 102 Use of English Language 2 (For DE Candidates) 2CU', 22, 1),
(129, 'GNS 222 Peace and Conflict Resolution Studies 2CU', 22, 1),
(130, 'PHY 303 Analytical Mechanics 4CU', 23, 1),
(131, 'PHY313 Optics 3CU', 23, 1),
(132, 'PHY 371  Basic Experimental Physics 5 2CU', 23, 1),
(133, 'PHY 352 Electronics  3CU', 23, 1),
(134, 'SED 363 ICT in Education 3CU', 23, 1),
(135, 'EDU 383  Research Method and Statistics in Education 3CU', 23, 1),
(136, 'EDU 311 Adolescent Psychology 3CU', 23, 1),
(137, 'EDU 301 Microteaching 2CU', 23, 1),
(138, 'GNS 301 Science, Technology & Society 2CU', 23, 1),
(139, 'PHY 333 Quantum Mechanics 1 4CU', 23, 1),
(140, 'PHY 355 Solid State Physics 1 3CU', 23, 1),
(141, 'PHY 352 Nuclear and Particle Physics 1 3CU', 23, 1),
(142, 'EDU 341 Principles of Curr. Devt. in Sci. and Maths 3CU', 23, 1),
(143, 'EDU 322 Comparative Education 3CU', 23, 1),
(144, 'EDU 362 Educational Technology 3CU', 23, 1),
(145, 'SED 354 Method in Teaching Physics 3CU', 23, 1),
(146, 'ME 303 Workshop Practice/Machine Shop  1CU', 23, 1),
(147, 'GNS 302  Entrepreneur Studies 2CU', 23, 1),
(148, 'PHY 514 Classic Electrodynamics 4CU', 25, 1),
(149, 'PHY 522 Statistical Physics 4CU', 25, 1),
(150, 'PHY533 Quantum Mechanics 2 3CU', 25, 1),
(151, 'SED 581 Measurement and Evaluation  3CU', 25, 1),
(152, 'EDU 571 Educational Administration 3CU', 25, 1),
(153, 'SCI 591/ 592 Workshop in Primary Sch/JSS ITS 3CU', 25, 1),
(154, 'PHY 572 Basic Experimental Physics 6 2CU', 25, 1),
(155, 'PHY 551 Solid State Physics 2 4CU', 25, 1),
(156, 'PHY 554 Electronics 2 4CU', 25, 1),
(157, 'PHY 561 Nuclear and Particle Physics 2 4CU', 25, 1),
(158, 'EDU 572 Guidance and Counseling 3CU', 25, 1),
(159, 'SED 509 Project in Science Education 6CU', 25, 1),
(160, 'ME 307  Workshop Practice 2 1CU', 25, 1),
(161, 'CHE 201 Introductory Chemistry 2 5CU', 10, 1),
(162, 'CHM 241 Physical Chemistry 1 4CU', 10, 1),
(163, 'EDU 221 Foundation of Education 1 3CU', 10, 1),
(164, 'EDU 211 Introductory to teaching Profession 3CU', 10, 1),
(165, 'PHY 212 Heat and Termodynamics 3CU', 10, 1),
(166, 'GNS 201 Information Science 2CU', 10, 1),
(167, 'GNS 101 Use of English Language (For DE Candidates) 2CU', 10, 1),
(168, 'MINOR  3CU', 10, 1),
(169, 'CHM 221 Inorganic Chemistry 1 3CU', 10, 1),
(170, 'CHM 231 Organic Chemistry 1 3CU', 10, 1),
(171, 'CHM 232 Spectroscopy 3CU', 10, 1),
(172, 'EDU 222 Foundation of Education 2 3CU', 10, 1),
(173, 'GNS 202 Nigerian Peoples and Culture 2CU', 10, 1),
(174, 'GNS 222 Peace and Conflict Resolution Studies 2CU', 10, 1),
(175, 'GNS 102 Use of English Language 2 (For DE Candidates)2  2CU', 10, 1),
(176, 'CHM321 Inorganic Chemistry 2 3CU', 11, 1),
(177, 'CHM331 Organic Chemistry 2 3CU', 11, 1),
(178, 'CHE 351 Process Science 3CU', 11, 1),
(179, 'EDU 311 Adolescent Psychology 3CU', 11, 1),
(180, 'SED 363 ICT in Education  3CU', 11, 1),
(181, 'EDU 383 Research Methods and Statistics in Education 3CU', 11, 1),
(182, 'GNS 301 Science,Technology and Society 2CU', 11, 1),
(183, 'CHM 332 Organic Chemistry 3 3CU', 11, 1),
(184, 'CHM 322 Inorganic Chemistry 3  3CU', 11, 1),
(185, 'CHM 301 Chemical Literature 1CU', 11, 1),
(186, 'CHM 311 Analytical Chemistry  3CU', 11, 1),
(187, 'EDU 341 Prin. Of Curr. Dev. in Sci. and Mathematics 3CU', 11, 1),
(188, 'EDU 362 Education Technology  3CU', 11, 1),
(189, 'SED 352 Method of Teaching Chemistry 3CU', 11, 1),
(190, 'GNS 302 Entrepreneur Studies 2CU', 11, 1),
(191, 'SED 350 Science Methods 3CU', 11, 1),
(192, 'CHM 532 Physical Organic Chemistry 3CU', 13, 1),
(193, 'CHM 511 Instrumental Analytical Methods  4CU', 13, 1),
(194, 'CHM 521 Nuclear and Radiation Chemistry 3CU', 13, 1),
(195, 'CHM 522 Structure and Coordinator Chemistry 3CU', 13, 1),
(196, 'EDU 571 Education Administration  3CU', 13, 1),
(197, 'EDU 509 Research Project 0 CU', 13, 1),
(198, 'EDU 581 Measurement and Evaluation 3CU', 13, 1),
(199, 'CHM 535 Natural Product 3CU', 13, 1),
(200, 'CHM 533 Organic Synthesis 3CU', 13, 1),
(201, 'CHM 543 Reaction Kinetics 3CU', 13, 1),
(202, 'CHM 554 Environmental Chemistry 3CU', 13, 1),
(203, 'SED 509 Final Year Research Project 6CU', 13, 1),
(204, 'SCI 595 Workshop in SSS Chemistry   3CU', 13, 1),
(205, 'EDU 572 Guidance and Counseling 3CU', 13, 1),
(206, 'BIO 201 Genetics and Evolution 3CU', 14, 1),
(207, 'ECO 201 Principles of Ecology 3CU', 14, 1),
(208, 'MCB 201 General Microbiology 3CU', 14, 1),
(209, 'EDU 211 Introduction to Educational Psychology 3CU', 14, 1),
(210, 'EDU 221 Foundation of Education 1 3CU', 14, 1),
(211, 'GNS 201 Information Science 2CU', 14, 1),
(212, 'GNS 101 Use of English Language 1 2CU', 14, 1),
(213, 'BIO 202 Quantitative Method in Biology  3CU', 14, 1),
(214, 'BOT 201 Review of Plant Kingdom 4CU', 14, 1),
(215, 'ZOO 201 Review of Animal Kingdom  4CU', 14, 1),
(216, 'EDU 222 Foundation of Education 2 3CU', 14, 1),
(217, 'GNS 102 Use of English Language 2 (For DE Candidates) 2CU', 14, 1),
(218, 'GNS 202 African History and Culture 2CU', 14, 1),
(219, 'GNS 222 Peace and Conflict Resolution studies 2CU', 14, 1),
(220, 'ECO 202 The Environs and World Ecosystem 3CU', 14, 1),
(221, 'SCI 231 Integrated Science  3CU', 14, 1),
(222, 'SED 201 Classroom Observation 2CU', 14, 1),
(223, 'BIO 301 Quantitative Method in Biology 2 3CU', 15, 1),
(224, 'BOT 301 Plant Physiology  3CU', 15, 1),
(225, 'EDU 311 Adolescent Psychology 3CU', 15, 1),
(226, 'EDU 383 Research Methods and Statistics Education  3CU', 15, 1),
(227, 'ZOO 301 Animal Psychology 3CU', 15, 1),
(228, 'SED 363 ICT in Education 3CU', 15, 1),
(229, 'GNS 301 Science,Technology and Society 2CU', 15, 1),
(230, 'SED 361  3CU', 15, 1),
(231, 'ZOO 303 Parasitic Protozoan 3 CU', 15, 1),
(232, 'BIO 302 Histology  3CU', 15, 1),
(233, 'EDU341 Prin. Of Curr. Dev. in Sci. and Mathematics  3CU', 15, 1),
(234, 'EDU 362 Education Technology 3CU', 15, 1),
(235, 'SED 351 Methods in Teaching Biology 3CU', 15, 1),
(236, 'GNS 302 Entrepreneurship Studies 2CU', 15, 1),
(237, 'SED 350 Science Methods 3CU', 15, 1),
(238, 'BIO 504 Advanced Cytogenetic 3CU', 17, 1),
(239, 'BIO 507 Hydrobiology 3CU', 17, 1),
(240, 'EDU 581 Measurement and Evaluation  3CU', 17, 1),
(241, 'EDU 571 Administration and Supervision in Education 3CU', 17, 1),
(242, 'ZOO 501 Parasitic Helminthes 3CU', 17, 1),
(243, 'ECO 502 Population Process  3CU', 17, 1),
(244, 'BOT 511 Plant Anatomy and Physiology 3CU', 17, 1),
(245, 'ECO 505 Environmental Conservation 3CU', 17, 1),
(246, 'ZOO 503 Reproductive Biology 3CU', 17, 1),
(247, 'EDU 572 Guidance and Counseling  3CU', 17, 1),
(248, 'SCI 596 Workshop in SSS Biology 3CU', 17, 1),
(249, 'SED 509 Final Year Project 6CU', 17, 1),
(250, 'BOT 503 Nigerian Vegetation  3CU', 17, 1),
(251, 'ECO 504 Soil Ecosystem 3 CU', 17, 1),
(252, 'GNS 201 Information Science 2 CU', 18, 1),
(253, 'EDU 211 Introduction to Educational Psychology 3CU', 18, 1),
(254, 'EDU221 Foundation of Education 1 3 CU', 18, 1),
(255, 'SED 201 Classroom Observation in Science 2CU', 18, 1),
(256, 'ISC 231 Feeding in Plants and Lower Animals 4 CU', 18, 1),
(257, 'ISC 211 Health Problems 1 4CU', 18, 1),
(258, 'GNS 101 Use of English Language 1 2CU', 18, 1),
(259, 'Â EDU 222 Foundation of Education 2 3 CU', 18, 1),
(260, 'GNS 202 African History & Culture 2CU', 18, 1),
(261, 'ISC 212 Human Body (Function & System) 4CU', 18, 1),
(262, 'ISC 232 Feeding in Higher Animals  4CU', 18, 1),
(263, 'ISC 222 Health Problems 2 4CU', 18, 1),
(264, 'ISC 214 General Science 3CU', 18, 1),
(265, 'GNS 222 Peace and Conflict Resolution Studies 2CU', 18, 1),
(266, 'GNS 102 Use of English Language 2 2CU', 18, 1),
(267, 'EDU 311 Adolescent Psychology 3CU', 19, 1),
(268, 'SED 361 Use of Computer in Science Education 3CU', 19, 1),
(269, 'SED383 Research Methodology 3CU', 19, 1),
(270, 'ISC311 Human Growth & Development (Reproduction) 4CU', 19, 1),
(271, 'ISC 331 Matter in Energy 1  4CU', 19, 1),
(272, 'SED 341 Principles of Curr. Dev. in Sci. and Maths 3CU', 19, 1),
(273, 'SED350 Science Methods  3CU', 19, 1),
(274, 'SED 355 Methods of Teaching Integrated science 3CU', 19, 1),
(275, 'ISC 321 Resources from living components 3CU', 19, 1),
(276, 'ISC332 Matter and\r\nEnergy 3CU', 19, 1),
(277, 'GNS 302 Entrepreneurial Studies 2 CU', 19, 1),
(278, 'GNS 301 Science, Technology and Society  2CU', 19, 1),
(279, 'SED 509 Research ProjecT 3CU', 21, 1),
(280, 'EDU 571 Educational Administration  3CU', 21, 1),
(281, 'SED 581 Measurement and Evaluation in Science 3CU', 21, 1),
(282, 'ISC 531 Human Growth & Development2 (Genetics) 4CU', 21, 1),
(283, 'ISC 511 EnvironmentÂ \r\nSanitation and Pollutants 4CU', 21, 1),
(284, 'ISC 561 Energy saving Devices 4CU', 21, 1),
(285, 'EDU 572 Guidance and Counseling 3CU', 21, 1),
(286, 'SCI 592 Workshop in\r\nJunior Sec. Sch. Integrated Science 3CU', 21, 1),
(287, 'SED 509 Research Project 3CU', 21, 1),
(288, 'ISC 532 Living Things and their Habitat 4 CU', 21, 1),
(289, 'ISC 512  Natural Phenomena and Scientific Problems 4CU', 21, 1),
(290, 'ISC514 Man, Space and Weather 4 CU', 21, 1),
(292, 'Teaching Practice', 8, 1),
(293, 'Teaching Practice', 24, 1),
(294, 'Teaching Practice', 12, 1),
(295, 'Teaching Practice', 16, 1),
(296, 'Teaching Practice', 20, 1),
(303, 'Teaching Practice', 3, 1),
(327, 'Teaching Practice', 16, 1),
(328, 'Teaching Practice', 24, 1),
(329, 'Teaching Practice', 3, 1),
(330, 'Teaching Practice', 20, 1),
(331, 'Teaching Practice', 12, 1),
(332, 'Teaching Practice', 8, 1),
(333, 'Teaching Practice', 16, 1),
(334, 'Teaching Practice', 24, 1),
(335, 'Teaching Practice', 20, 1),
(336, 'Teaching Practice', 12, 1),
(337, 'Teaching Practice', 16, 1),
(338, 'Teaching Practice', 20, 1),
(339, 'Teaching Practice', 3, 1),
(340, 'Teaching Practice', 8, 1),
(341, 'Teaching Practice', 24, 1),
(342, 'Teaching Practice', 12, 1),
(343, 'Teaching Practice', 16, 1),
(344, 'Teaching Practice', 20, 1),
(345, 'Teaching Practice', 3, 1),
(346, 'Teaching Practice', 8, 1),
(347, 'Teaching Practice', 24, 1),
(348, 'Teaching Practice', 12, 1),
(349, 'Teaching Practice', 16, 1),
(350, 'Teaching Practice', 20, 1),
(351, 'Teaching Practice', 3, 1),
(352, 'Teaching Practice', 8, 1),
(353, 'Teaching Practice', 24, 1),
(354, 'Teaching Practice', 12, 1),
(355, 'Teaching Practice', 16, 1),
(356, 'Teaching Practice', 20, 1),
(357, 'Teaching Practice', 3, 1),
(358, 'Teaching Practice', 8, 1),
(359, 'Teaching Practice', 24, 1),
(360, 'Teaching Practice', 12, 1),
(361, 'Teaching Practice', 16, 1),
(362, 'Teaching Practice', 3, 1),
(363, 'Teaching Practice', 20, 1),
(364, 'Teaching Practice', 8, 1),
(365, 'Teaching Practice', 24, 1),
(366, 'Teaching Practice', 3, 1),
(367, 'Teaching Practice', 12, 1),
(368, 'Teaching Practice', 8, 1),
(369, 'Teaching Practice', 16, 1),
(370, 'Teaching Practice', 24, 1),
(371, 'Teaching Practice', 20, 1),
(372, 'Teaching Practice', 12, 1),
(373, 'Teaching Practice', 3, 1),
(374, 'Teaching Practice', 16, 1),
(375, 'Teaching Practice', 8, 1),
(376, 'Teaching Practice', 24, 1),
(377, 'Teaching Practice', 20, 1),
(378, 'Teaching Practice', 12, 1),
(379, 'Teaching Practice', 16, 1),
(380, 'Teaching Practice', 20, 1),
(381, 'Teaching Practice', 3, 1),
(382, 'Teaching Practice', 8, 1),
(383, 'Teaching Practice', 24, 1),
(384, 'Teaching Practice', 12, 1),
(385, 'Teaching Practice', 16, 1),
(386, 'Teaching Practice', 20, 1),
(387, 'Teaching Practice', 3, 1),
(388, 'Teaching Practice', 8, 1),
(389, 'Teaching Practice', 24, 1),
(390, 'Teaching Practice', 12, 1),
(391, 'Teaching Practice', 16, 1),
(392, 'Teaching Practice', 3, 1),
(393, 'Teaching Practice', 20, 1),
(394, 'Teaching Practice', 8, 1),
(395, 'Teaching Practice', 24, 1),
(396, 'Teaching Practice', 12, 1),
(397, 'Teaching Practice', 3, 1),
(398, 'Teaching Practice', 16, 1),
(399, 'Teaching Practice', 8, 1),
(400, 'Teaching Practice', 20, 1),
(401, 'Teaching Practice', 24, 1),
(402, 'Teaching Practice', 12, 1),
(403, 'Teaching Practice', 16, 1),
(404, 'Teaching Practice', 20, 1),
(405, 'Teaching Practice', 3, 1),
(406, 'Teaching Practice', 24, 1),
(407, 'Teaching Practice', 12, 1),
(408, 'Teaching Practice', 16, 1),
(409, 'Teaching Practice', 20, 1),
(410, 'Teaching Practice', 3, 1),
(411, 'Teaching Practice', 24, 1),
(412, 'Teaching Practice', 12, 1),
(413, 'Teaching Practice', 16, 1),
(414, 'Teaching Practice', 20, 1),
(415, 'Teaching Practice', 3, 1),
(416, 'Teaching Practice', 24, 1),
(417, 'Teaching Practice', 12, 1),
(418, 'Teaching Practice', 16, 1),
(419, 'Teaching Practice', 20, 1),
(420, 'Teaching Practice', 3, 1),
(421, 'Teaching Practice', 16, 1),
(422, 'Teaching Practice', 20, 1),
(423, 'Teaching Practice', 3, 1),
(424, 'Teaching Practice', 3, 1),
(425, 'Teaching Practice', 3, 1),
(426, 'Teaching Practice', 8, 1),
(427, 'Teaching Practice', 24, 1),
(428, 'Teaching Practice', 12, 1),
(429, 'Teaching Practice', 16, 1),
(430, 'Teaching Practice', 20, 1),
(431, 'IT', 3, 1),
(432, 'IT', 8, 1),
(433, 'IT', 24, 1),
(434, 'IT', 12, 1),
(435, 'IT', 16, 1),
(436, 'IT', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `departement_id` int(11) NOT NULL,
  `departement_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`departement_id`, `departement_name`, `status`) VALUES
(1, 'Mathematics Department', 1),
(2, 'Computer Science  Department ', 1),
(3, 'Chemistry Department', 1),
(4, 'Biology Department ', 1),
(5, 'Integrated Science  Department ', 1),
(6, 'Physics Department ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `epin300level`
--

CREATE TABLE `epin300level` (
  `ppid` int(11) NOT NULL,
  `epin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epin300level`
--

INSERT INTO `epin300level` (`ppid`, `epin`) VALUES
(1, '123ab'),
(4, '22133VC'),
(5, '30023BG'),
(2, '321ba'),
(3, '5654GF');

-- --------------------------------------------------------

--
-- Table structure for table `epin400level`
--

CREATE TABLE `epin400level` (
  `ppid` int(11) NOT NULL,
  `epin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epin400level`
--

INSERT INTO `epin400level` (`ppid`, `epin`) VALUES
(1, '2468cf'),
(2, '4321da'),
(3, '23456av'),
(4, '54321qw'),
(5, '40012AB');

-- --------------------------------------------------------

--
-- Table structure for table `epin500level`
--

CREATE TABLE `epin500level` (
  `ppid` int(11) NOT NULL,
  `epin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epin500level`
--

INSERT INTO `epin500level` (`ppid`, `epin`) VALUES
(1, '123abcd'),
(2, '246bdf'),
(3, '22222sd'),
(4, '4567fr'),
(5, '50041CB');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `level_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `departement_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_name`, `departement_id`, `status`) VALUES
(1, '200 Level', 1, 1),
(2, '300 Level', 1, 1),
(3, '400 Level', 1, 1),
(4, '500 Level', 1, 1),
(6, '200 Level', 2, 1),
(7, '300 Level', 2, 1),
(8, '400 Level', 2, 1),
(9, '500 Level', 2, 1),
(10, '200 Level', 3, 1),
(11, '300 Level', 3, 1),
(12, '400 Level', 3, 1),
(13, '500 Level', 3, 1),
(14, '200 Level', 4, 1),
(15, '300 Level', 4, 1),
(16, '400 Level', 4, 1),
(17, '500 Level', 4, 1),
(18, '200 Level', 5, 1),
(19, '300 Level', 5, 1),
(20, '400 Level', 5, 1),
(21, '500 Level', 5, 1),
(22, '200 Level', 6, 1),
(23, '300 Level', 6, 1),
(24, '400 Level', 6, 1),
(25, '500 Level', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payementpin`
--

CREATE TABLE `payementpin` (
  `ppid` int(50) NOT NULL,
  `epin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payementpin`
--

INSERT INTO `payementpin` (`ppid`, `epin`) VALUES
(3, '1232643ferd'),
(1, '12345abcd'),
(4, '123seegf67'),
(7, '200123GB'),
(5, '23567ds'),
(2, '2468ace'),
(6, '432123fd');

-- --------------------------------------------------------

--
-- Table structure for table `studentinformation`
--

CREATE TABLE `studentinformation` (
  `studentid` int(50) NOT NULL,
  `imgupload` varchar(256) NOT NULL,
  `jambno` varchar(11) NOT NULL,
  `Reg Number` varchar(100) NOT NULL,
  `emailstudent` varchar(256) NOT NULL,
  `signature` varchar(256) NOT NULL,
  `surname` varchar(256) NOT NULL,
  `othernames` varchar(256) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `maritalstatus` varchar(256) NOT NULL,
  `dateofbirth` date NOT NULL,
  `nationality` varchar(256) NOT NULL,
  `stateoforigin` varchar(256) NOT NULL,
  `lga` varchar(256) NOT NULL,
  `phonestudentno1` varchar(11) NOT NULL,
  `phonestudentno2` varchar(11) NOT NULL,
  `permanentaddress` varchar(256) NOT NULL,
  `postaladdress` varchar(256) NOT NULL,
  `nextofkinname1` varchar(50) NOT NULL,
  `addressphonenxtofkin1` varchar(256) NOT NULL,
  `nextofkinname2` varchar(50) NOT NULL,
  `addressphonenxtofkin2` varchar(256) NOT NULL,
  `primschname` varchar(100) NOT NULL,
  `primstartyear` varchar(100) NOT NULL,
  `primfinishyear` varchar(100) NOT NULL,
  `secschname` varchar(100) NOT NULL,
  `secstartyear` int(100) NOT NULL,
  `secfinishyear` int(100) NOT NULL,
  `olevelexamname` varchar(256) NOT NULL,
  `olsubject1` varchar(50) NOT NULL,
  `olsubject2` varchar(50) NOT NULL,
  `olsubject3` varchar(50) NOT NULL,
  `olsubject4` varchar(50) NOT NULL,
  `olsubject5` varchar(50) NOT NULL,
  `olgrade1` varchar(50) NOT NULL,
  `olgrade2` varchar(50) NOT NULL,
  `olgrade3` varchar(50) NOT NULL,
  `olgrade4` varchar(50) NOT NULL,
  `olgrade5` varchar(50) NOT NULL,
  `highestqualification` varchar(100) NOT NULL,
  `highestschname` varchar(100) NOT NULL,
  `highestqualificationyearobtained` varchar(50) NOT NULL,
  `hqsubject1` varchar(50) NOT NULL,
  `hqsubject2` varchar(50) NOT NULL,
  `hqsubject3` varchar(50) NOT NULL,
  `hqsubject4` varchar(50) NOT NULL,
  `hqgrade1` varchar(50) NOT NULL,
  `hqgrade2` varchar(50) NOT NULL,
  `hqgrade3` varchar(50) NOT NULL,
  `hqgrade4` varchar(50) NOT NULL,
  `currentschcourseofstudy` varchar(100) NOT NULL,
  `currentschschool` varchar(100) NOT NULL,
  `currentschlevel` varchar(50) NOT NULL,
  `currentschdepart` varchar(50) NOT NULL,
  `currentschyearadmited` varchar(50) NOT NULL,
  `currentschcourseduration` varchar(50) NOT NULL,
  `currentyearreg` varchar(100) NOT NULL,
  `dateregistered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinformation`
--

INSERT INTO `studentinformation` (`studentid`, `imgupload`, `jambno`, `Reg Number`, `emailstudent`, `signature`, `surname`, `othernames`, `sex`, `maritalstatus`, `dateofbirth`, `nationality`, `stateoforigin`, `lga`, `phonestudentno1`, `phonestudentno2`, `permanentaddress`, `postaladdress`, `nextofkinname1`, `addressphonenxtofkin1`, `nextofkinname2`, `addressphonenxtofkin2`, `primschname`, `primstartyear`, `primfinishyear`, `secschname`, `secstartyear`, `secfinishyear`, `olevelexamname`, `olsubject1`, `olsubject2`, `olsubject3`, `olsubject4`, `olsubject5`, `olgrade1`, `olgrade2`, `olgrade3`, `olgrade4`, `olgrade5`, `highestqualification`, `highestschname`, `highestqualificationyearobtained`, `hqsubject1`, `hqsubject2`, `hqsubject3`, `hqsubject4`, `hqgrade1`, `hqgrade2`, `hqgrade3`, `hqgrade4`, `currentschcourseofstudy`, `currentschschool`, `currentschlevel`, `currentschdepart`, `currentschyearadmited`, `currentschcourseduration`, `currentyearreg`, `dateregistered`) VALUES
(2, '../image/uploads5c45bf646d2b18.46267594.jpg', '1234db', '', 'davacom@gmail.com', '', 'Baba', 'Dane', 'Male', 'Single', '1986-12-01', 'Nigerian', 'Anambra', 'Gombe', '09098789876', '0807688657', ' eeeeeeeeeeeeeeeeeeee', ' eeeeeeeeeeeeeeeee', 'eeeeeeeeeeeee', ' fffffffff', 'hhhhhhh', 'fffffffffff', 'Aska Prim. Sch', '2011', '2098', 'ddddddddddddddddd', 200, 7331, 'dffffffffffffffffffffffffffffff', 'Chemistry', 'Credit, C4', 'Physics', 'Good, B2', 'Chemistry', 'Pass, D7', 'Biology', 'Credit, C6', 'Geography', 'Credit, C5', 'dddd', 'FCET GOMBE', '555555', 'dddddddddddddd', 'dISTINCTION', 'Mathematics', 'Credit', 'fffffffffffffffffffff', 'jhjjjjjjjjjjjjjjjjjj', '8888888888888888888', 'yyyyyyyyyyyyy', 'B. Tech Computer Science Edu.', 'School of Science', '200 Level', 'Mathematics Departement', '2013', '4', '0', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `studentinformation1`
--

CREATE TABLE `studentinformation1` (
  `studentid` int(50) NOT NULL,
  `studemail` varchar(256) NOT NULL,
  `studimg` varchar(256) NOT NULL,
  `studsignature` varchar(100) NOT NULL,
  `jambno` varchar(50) NOT NULL,
  `psd` varchar(50) NOT NULL,
  `sname` text NOT NULL,
  `name` text NOT NULL,
  `othername` text NOT NULL,
  `sex` text NOT NULL,
  `mstatus` text NOT NULL,
  `dob` date NOT NULL,
  `nationality` text NOT NULL,
  `stateoorigin` text NOT NULL,
  `lga` text NOT NULL,
  `phone1` int(20) NOT NULL,
  `phone2` int(20) NOT NULL,
  `permaddress` varchar(256) NOT NULL,
  `postaddress` varchar(256) NOT NULL,
  `kinname1` text NOT NULL,
  `kinaddnnum1` varchar(256) NOT NULL,
  `kinname2` text NOT NULL,
  `kinaddnnum2` varchar(256) NOT NULL,
  `ccstudy` text NOT NULL,
  `cschool` text NOT NULL,
  `clevel` varchar(100) NOT NULL,
  `cdepartement` text NOT NULL,
  `yadmited` int(20) NOT NULL,
  `cduration` int(20) NOT NULL,
  `cyregistered` int(20) NOT NULL,
  `cdate` date NOT NULL,
  `regno` varchar(20) NOT NULL,
  `primaryschoolname` text NOT NULL,
  `primaryStartyear` int(20) NOT NULL,
  `primaryfinishyear` int(20) NOT NULL,
  `secondaryname` text NOT NULL,
  `secondarystart` int(20) NOT NULL,
  `secondaryfinish` int(20) NOT NULL,
  `olschoolname` varchar(100) NOT NULL,
  `olsubject1` text NOT NULL,
  `olgrade1` varchar(20) NOT NULL,
  `olsubject2` text NOT NULL,
  `olgrade2` varchar(20) NOT NULL,
  `olsubject3` text NOT NULL,
  `olgrade3` varchar(20) NOT NULL,
  `olsubject4` text NOT NULL,
  `olgrade4` varchar(20) NOT NULL,
  `olsubject5` text NOT NULL,
  `olgrade5` varchar(20) NOT NULL,
  `hqualification` varchar(50) NOT NULL,
  `hqinstitutionname` text NOT NULL,
  `hqyobtained` varchar(100) NOT NULL,
  `alsubject1` text NOT NULL,
  `algrade1` varchar(20) NOT NULL,
  `alsubject2` text NOT NULL,
  `algrade2` varchar(20) NOT NULL,
  `alsubject3` text NOT NULL,
  `algrade3` varchar(20) NOT NULL,
  `alsubject4` text NOT NULL,
  `algrade4` varchar(20) NOT NULL,
  `cbiodataregdate` date NOT NULL,
  `epin` varchar(100) NOT NULL,
  `epin300Level` varchar(20) NOT NULL,
  `epin400Level` varchar(20) NOT NULL,
  `epin500Level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinformation1`
--

INSERT INTO `studentinformation1` (`studentid`, `studemail`, `studimg`, `studsignature`, `jambno`, `psd`, `sname`, `name`, `othername`, `sex`, `mstatus`, `dob`, `nationality`, `stateoorigin`, `lga`, `phone1`, `phone2`, `permaddress`, `postaddress`, `kinname1`, `kinaddnnum1`, `kinname2`, `kinaddnnum2`, `ccstudy`, `cschool`, `clevel`, `cdepartement`, `yadmited`, `cduration`, `cyregistered`, `cdate`, `regno`, `primaryschoolname`, `primaryStartyear`, `primaryfinishyear`, `secondaryname`, `secondarystart`, `secondaryfinish`, `olschoolname`, `olsubject1`, `olgrade1`, `olsubject2`, `olgrade2`, `olsubject3`, `olgrade3`, `olsubject4`, `olgrade4`, `olsubject5`, `olgrade5`, `hqualification`, `hqinstitutionname`, `hqyobtained`, `alsubject1`, `algrade1`, `alsubject2`, `algrade2`, `alsubject3`, `algrade3`, `alsubject4`, `algrade4`, `cbiodataregdate`, `epin`, `epin300Level`, `epin400Level`, `epin500Level`) VALUES
(1, 'abu@gmail.com', 'passport/5cc4b9b40f3fb6.09958413.jpeg', '', '1234', '12345', 'Abu', 'Manu', 'Banu', 'Male', 'Single', '2015-02-12', '', 'Delta', 'kumo', 2147483647, 48976545, ' Gombe', 'Gombe ', 'Musa', 'kjhdckuhschuvhk  ', 'Baba', 'uhil;dj;ibjilvrjilvrtehil ', 'B. Tech Mathematics Edu.', 'School of Science', '200 Level', 'Mathematics Dept', 2013, 4, 2019, '0000-00-00', '0', '', 0, 0, '', 0, 0, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '23567ds', '', '', ''),
(2, 'vandisal@yahoo.com', 'passport/5cc5767575cdb1.78759029.jpeg', 'signature/5cc6b6d37d70b5.95844742.png', '125243677VD', '123abc', 'Vandis', 'Maraima', 'Modi', 'Male', 'Single', '1988-02-13', '', 'Ebonyi', 'Omar', 999494949, 2020200220, ' Everton Desney USA', 'Morial pox 234 Abuja ', 'Mc Tonny', ' Mustajdhd 7464647884', 'Eznol Musack', 'jhhdbdbd wjjd', 'B. Tech Computer Science Edu.', 'School of Science', '200 Level', 'Computer Science Dept', 2015, 5, 2019, '0000-00-00', '2015/002/D/GM/06', 'Highland', 19901, 2002, 'Command', 1990, 2017, '0', 'Mathematics', 'Good, B2', 'English', 'Credit, C5', 'Physics', 'Pass, D7', 'Chemistry', 'Credit, C5', 'English', 'Credit, C4', 'NCE', 'POLY BAUCHI', '2016', 'cOMPUTER', 'Distinction', '', '', '', '', '', '', '0000-00-00', '2468ace', '123ab', '2468cf', '123abcd'),
(3, 'zainab2019@gmail.com', 'passport/5cd01177075784.72438400.jpeg', 'signature/5cd012c46e9139.00206456.jpg', '23547487ZN', '54321', 'Mohammed', 'Zainab', 'Manu', 'Female', 'Married', '1999-09-03', 'Nigeria', 'Niger', 'Zango Kataf', 2147483647, 2147483647, ' No. II behind Zenith Bank Gombe, Gombe State', ' No. II behind Zenith Bank P. O. B 34233Gombe, Gombe State L.G.A, PLATEAU STATE', 'Ahmed Mohammmed', '  No. II behind Zenith Bank Gombe, Gombe State/0985787655', 'Hussaini Mohammed', '  No. II behind Zenith Bank Gombe, Gombe State/0985787655', 'B. Tech Integrated Science Edu.', 'School of Science', '200 Level', 'Integrated Science Dept', 2017, 5, 2019, '2019-05-06', '2017/003/D/GM/06', 'Gongola Primary School Jos, Plateau State.', 2000, 2006, 'Central Sec. School Gombe, Gombe State', 2007, 2012, 'WAEC', 'Mathematics', 'Good, B3', 'Chemistry', 'Credit, C5', 'English', 'Credit, C6', 'Biology', 'Credit, C5', 'Int. Science', 'Excellent, A1', 'OND', 'Kagoro College Kaduna', '2014', 'Biology', 'Credit', '', '', '', '', '', '', '2019-05-06', '1232643ferd', '321ba', '', ''),
(4, 'esther@gmail.com', 'passport/5cd8917ff006e4.09681100.jpeg', 'signature/5cd8926dcd5157.04981659.png', '123456ET', 'eeeee', 'Teman', 'Esther', '', 'Female', 'Married', '1985-01-01', 'Nigerian', 'Gombe', 'Kumo', 2147483647, 98087999, 'Ankwan Millioniarers ', 'Federal Lowcost POBox, 260 ', 'Musa Maina', 'Opp NNPC Deprt, Maiduguri Road ', 'Bilson Jackson', 'FaDAMA 3 aGRIC ROAD, gOMBE', 'B. Tech Mathematics Edu.', 'School of Science', '200 Level', 'Mathematics Dept', 2014, 5, 2019, '2019-05-12', '2014/004/D/GM/06', 'Kumo Nur & Primary School Gombe', 1990, 1996, 'Gndunawa Primary School', 1996, 2002, 'WAEC', 'Mathematics', 'Credit, C5', 'English', 'Pass, D7', 'Chemistry', 'Credit, C4', 'Physics', 'Good, B2', 'Int. Science', 'Excellent, A1', 'NCE', 'FCET potiskum', '2006', 'Mathematics', 'Credit', 'Computer', 'Pass', '', '', '', '', '2019-05-12', '123seegf67', '22133VC', '54321qw', '4567fr'),
(5, 'musabuz@gmail.com', 'passport/5cdc5681c0f5d5.48695108.', '', '12345MB', '1234', 'Musa', 'Maina', 'Buzuzu', 'Male', 'Single', '1990-03-12', 'Nigerian', 'Borno', 'Kulko', 2147483647, 5564476, ' fbbnbf hhhhhhhhhhhhhhhh', ' eeeeeeeeeeee ddddddddddddddd', 'Abu Nuna', 'kjdkhdhfdhjfh hfjhfj ', 'Bala Kalu', 'khdjfgfbfb jghdhdbfdn', 'B. Tech Chemistry Edu.', 'School of Science', '200 Level', 'Chemistry Dept', 2016, 4, 2019, '2019-05-15', '', '', 0, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(6, 'MYBESTY4LIFE@GMAIL.COM', 'passport/5ce7125e40e187.83554969.jpeg', '', '102935UC', '1980ugonna', 'uzo', 'david', 'chukwu', 'Male', 'Married', '1990-09-11', 'Nigerian', 'Gombe', 'gombe', 2147483647, 2147483647, ' nbxmnmxnzx', ' ', ',mnamsdAS', ' JAHDJahskJAS', 'IAUSHIuas', 'AJHSKjask', 'B. Tech Computer Science Edu.', 'School of Science', '200 Level', 'Computer Science Dept', 2013, 4, 2019, '2019-05-23', '', '', 0, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `idstudentlogin` int(11) NOT NULL,
  `studentemail` varchar(255) NOT NULL,
  `passwordstudent` varchar(255) NOT NULL,
  `jambno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`idstudentlogin`, `studentemail`, `passwordstudent`, `jambno`) VALUES
(1, 'davacom@gmail.com', '1234abcd', '2468db'),
(2, 'timoty2019@yahoo.com', '12345', '123456789TY'),
(3, 'David2019@gmail.com', '1234', '123456789dc'),
(20, 'abu@gmail.com', '12345', '1234'),
(21, 'vandisal@yahoo.com', '123abc', '125243677VD'),
(28, 'zainab2019@gmail.com', '54321', '23547487ZN'),
(29, 'esther@gmail.com', 'eeeee', '123456ET'),
(30, 'musabuz@gmail.com', '1234', '12345MB'),
(31, 'MYBESTY4LIFE@GMAIL.COM', '1980ugonna', '102935UC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `200levelcourses`
--
ALTER TABLE `200levelcourses`
  ADD PRIMARY KEY (`200L_id`),
  ADD KEY `studentid` (`studid`);

--
-- Indexes for table `300levelcourses`
--
ALTER TABLE `300levelcourses`
  ADD PRIMARY KEY (`300L_id`),
  ADD KEY `200levelid` (`200levelid`);

--
-- Indexes for table `500levelcourses`
--
ALTER TABLE `500levelcourses`
  ADD PRIMARY KEY (`500L_id`),
  ADD UNIQUE KEY `500L_id` (`500L_id`),
  ADD KEY `300levelid` (`300levelid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admittedstudents`
--
ALTER TABLE `admittedstudents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jambno` (`jambno`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courses_id`);

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`departement_id`);

--
-- Indexes for table `epin300level`
--
ALTER TABLE `epin300level`
  ADD PRIMARY KEY (`ppid`),
  ADD UNIQUE KEY `epin` (`epin`);

--
-- Indexes for table `epin400level`
--
ALTER TABLE `epin400level`
  ADD PRIMARY KEY (`ppid`);

--
-- Indexes for table `epin500level`
--
ALTER TABLE `epin500level`
  ADD PRIMARY KEY (`ppid`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `payementpin`
--
ALTER TABLE `payementpin`
  ADD PRIMARY KEY (`ppid`),
  ADD UNIQUE KEY `pin` (`epin`);

--
-- Indexes for table `studentinformation`
--
ALTER TABLE `studentinformation`
  ADD PRIMARY KEY (`studentid`),
  ADD UNIQUE KEY `jambno` (`jambno`),
  ADD UNIQUE KEY `email` (`emailstudent`),
  ADD UNIQUE KEY `Reg Number` (`Reg Number`);

--
-- Indexes for table `studentinformation1`
--
ALTER TABLE `studentinformation1`
  ADD PRIMARY KEY (`studentid`),
  ADD UNIQUE KEY `jambno` (`jambno`),
  ADD UNIQUE KEY `studemail` (`studemail`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`idstudentlogin`),
  ADD UNIQUE KEY `usernamestudent` (`studentemail`),
  ADD UNIQUE KEY `jambno` (`jambno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `200levelcourses`
--
ALTER TABLE `200levelcourses`
  MODIFY `200L_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `300levelcourses`
--
ALTER TABLE `300levelcourses`
  MODIFY `300L_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `500levelcourses`
--
ALTER TABLE `500levelcourses`
  MODIFY `500L_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `admittedstudents`
--
ALTER TABLE `admittedstudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=437;

--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `departement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `epin300level`
--
ALTER TABLE `epin300level`
  MODIFY `ppid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `epin400level`
--
ALTER TABLE `epin400level`
  MODIFY `ppid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `epin500level`
--
ALTER TABLE `epin500level`
  MODIFY `ppid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payementpin`
--
ALTER TABLE `payementpin`
  MODIFY `ppid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `studentinformation`
--
ALTER TABLE `studentinformation`
  MODIFY `studentid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentinformation1`
--
ALTER TABLE `studentinformation1`
  MODIFY `studentid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
  MODIFY `idstudentlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
