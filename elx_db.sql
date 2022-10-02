-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 29, 2018 at 03:17 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elx_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_pins`
--

DROP TABLE IF EXISTS `access_pins`;
CREATE TABLE IF NOT EXISTS `access_pins` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `PINS` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `PINS` (`PINS`)
) ENGINE=InnoDB AUTO_INCREMENT=249 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_pins`
--

INSERT INTO `access_pins` (`ID`, `PINS`) VALUES
(3, '1158525218'),
(1, '1184599784'),
(2, '1316386736');

-- --------------------------------------------------------

--
-- Table structure for table `access_pins2`
--

DROP TABLE IF EXISTS `access_pins2`;
CREATE TABLE IF NOT EXISTS `access_pins2` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `PINS` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `PINS` (`PINS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `ID` int(200) NOT NULL,
  `USERNAME` varchar(200) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'webmaster_username', 'webmaster_password');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_pin`
--

DROP TABLE IF EXISTS `confirm_pin`;
CREATE TABLE IF NOT EXISTS `confirm_pin` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `CONFIRMATION` varchar(200) NOT NULL,
  `REGISTRATION_NO` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm_pin`
--

INSERT INTO `confirm_pin` (`ID`, `CONFIRMATION`, `REGISTRATION_NO`) VALUES
(1, '1111156727', '001'),
(2, '1111457798', '002'),
(3, '1122296351', '008'),
(4, '1133353865', '005'),
(5, '1115964739', '005'),
(6, '1137012333', '0055'),
(7, '1147148387', '0055'),
(8, '1236584696', '001'),
(9, '1208694581', '76'),
(10, '1111156727', '002'),
(11, '1111156727', '001'),
(12, '1234659667', '0055'),
(13, '1185357023', '0055'),
(14, '1137012333', 'ghcghcgh'),
(15, '1137012333', '123'),
(16, '1133353865', ''),
(17, '1115964739', 'b'),
(18, '1115964739', 'b'),
(19, '1115964739', 'b'),
(20, '1115964739', 'b'),
(21, '1115964739', ''),
(22, '1179317358', '002'),
(23, '1122296351', '12'),
(24, '1208694581', '007'),
(25, '1239358198', '0055'),
(26, '1354075340', '200'),
(27, '1354732222', '101'),
(28, '1342643769', '102'),
(29, '1342196724', '103'),
(30, '1335819495', '105'),
(31, '1409299045', '2014001'),
(32, '1408103885', '2014002'),
(33, '1404162593', '2014003'),
(34, '1393543001', '2014005'),
(35, '1111156727', '2014001'),
(36, '1111156727', '001'),
(37, '1111156727', '001'),
(38, '1111156727', '001'),
(39, '1133353865', '2014001'),
(40, '1133353865', '2014001'),
(41, '1133353865', '2014001'),
(42, '1133353865', '2014001'),
(43, '1133353865', '2014001'),
(44, '1115964739', '102'),
(45, '1147148387', '2014030');

-- --------------------------------------------------------

--
-- Table structure for table `result_pri`
--

DROP TABLE IF EXISTS `result_pri`;
CREATE TABLE IF NOT EXISTS `result_pri` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `ADM_NO` varchar(200) NOT NULL,
  `FNAME` varchar(200) NOT NULL,
  `LNAME` varchar(200) NOT NULL,
  `PIN` varchar(200) NOT NULL,
  `CLASS` varchar(200) NOT NULL,
  `SEX` varchar(200) NOT NULL,
  `TERM` varchar(200) NOT NULL,
  `SESSION` varchar(200) NOT NULL,
  `TOTAL_SCORE` varchar(200) NOT NULL,
  `OUT_OFF` varchar(200) NOT NULL,
  `OVERALL_PERCENT` varchar(200) NOT NULL,
  `POSITION` varchar(200) NOT NULL,
  `NO_CLASS` varchar(200) NOT NULL,
  `NO_SUBJECTS` varchar(200) NOT NULL,
  `SCH_OPEN` varchar(200) NOT NULL,
  `SCH_ABS` varchar(200) NOT NULL,
  `TEACHER_RPT` varchar(200) NOT NULL,
  `HM_REMARK` varchar(200) NOT NULL,
  `SCH_RESUME` varchar(200) NOT NULL,
  `INFO` varchar(200) NOT NULL,
  `CRS_1` varchar(200) NOT NULL,
  `CRS_2` varchar(200) NOT NULL,
  `CRS_3` varchar(200) NOT NULL,
  `CRS_E` varchar(200) NOT NULL,
  `CRS_T` varchar(200) NOT NULL,
  `CRS_G` varchar(200) NOT NULL,
  `CRS_RMK` varchar(200) NOT NULL,
  `MATH_1` varchar(200) NOT NULL,
  `MATH_2` varchar(200) NOT NULL,
  `MATH_3` varchar(200) NOT NULL,
  `MATH_E` varchar(200) NOT NULL,
  `MATHS_T` varchar(200) NOT NULL,
  `MATH_G` varchar(200) NOT NULL,
  `MATH_RMK` varchar(200) NOT NULL,
  `BSC_1` varchar(200) NOT NULL,
  `BSC_2` varchar(200) NOT NULL,
  `BSC_3` varchar(200) NOT NULL,
  `BSC_E` varchar(200) NOT NULL,
  `BSC_T` varchar(200) NOT NULL,
  `BSC_G` varchar(200) NOT NULL,
  `BSC_RMK` varchar(200) NOT NULL,
  `ENG_1` varchar(200) NOT NULL,
  `ENG_2` varchar(200) NOT NULL,
  `ENG_3` varchar(200) NOT NULL,
  `ENG_E` varchar(200) NOT NULL,
  `ENG_T` varchar(200) NOT NULL,
  `ENG_G` varchar(200) NOT NULL,
  `ENG_RMK` varchar(200) NOT NULL,
  `WR_1` varchar(200) NOT NULL,
  `WR_2` varchar(200) NOT NULL,
  `WR_3` varchar(200) NOT NULL,
  `WR_E` varchar(200) NOT NULL,
  `WR_T` varchar(200) NOT NULL,
  `WR_G` varchar(200) NOT NULL,
  `WR_RMK` varchar(200) NOT NULL,
  `HAB_1` varchar(200) NOT NULL,
  `HAB_2` varchar(200) NOT NULL,
  `HAB_3` varchar(200) NOT NULL,
  `HAB_E` varchar(200) NOT NULL,
  `HAB_T` varchar(200) NOT NULL,
  `HAB_G` varchar(200) NOT NULL,
  `HAB_RMK` varchar(200) NOT NULL,
  `SOS_1` varchar(200) NOT NULL,
  `SOS_2` varchar(200) NOT NULL,
  `SOS_3` varchar(200) NOT NULL,
  `SOS_E` varchar(200) NOT NULL,
  `SOS_T` varchar(200) NOT NULL,
  `SOS_G` varchar(200) NOT NULL,
  `SOS_RMK` varchar(200) NOT NULL,
  `PHE_1` varchar(200) NOT NULL,
  `PHE_2` varchar(200) NOT NULL,
  `PHE_3` varchar(200) NOT NULL,
  `PHE_E` varchar(200) NOT NULL,
  `PHE_T` varchar(200) NOT NULL,
  `PHE_G` varchar(200) NOT NULL,
  `PHE_RMK` varchar(200) NOT NULL,
  `COMP_1` varchar(200) NOT NULL,
  `COMP_2` varchar(200) NOT NULL,
  `COMP_3` varchar(200) NOT NULL,
  `COMP_E` varchar(200) NOT NULL,
  `COMP_T` varchar(200) NOT NULL,
  `COMP_G` varchar(200) NOT NULL,
  `COMP_RMK` varchar(200) NOT NULL,
  `HE_1` varchar(200) NOT NULL,
  `HE_2` varchar(200) NOT NULL,
  `HE_3` varchar(200) NOT NULL,
  `HE_E` varchar(200) NOT NULL,
  `HE_T` varchar(200) NOT NULL,
  `HE_G` varchar(200) NOT NULL,
  `HE_RMK` varchar(200) NOT NULL,
  `FA_1` varchar(200) NOT NULL,
  `FA_2` varchar(200) NOT NULL,
  `FA_3` varchar(200) NOT NULL,
  `FA_E` varchar(200) NOT NULL,
  `FA_T` varchar(200) NOT NULL,
  `FA_G` varchar(200) NOT NULL,
  `FA_RMK` varchar(200) NOT NULL,
  `AGR_1` varchar(200) NOT NULL,
  `AGR_2` varchar(200) NOT NULL,
  `AGR_3` varchar(200) NOT NULL,
  `AGR_E` varchar(200) NOT NULL,
  `AGR_T` varchar(200) NOT NULL,
  `AGR_G` varchar(200) NOT NULL,
  `AGR_RMK` varchar(200) NOT NULL,
  `VR_1` varchar(200) NOT NULL,
  `VR_2` varchar(200) NOT NULL,
  `VR_3` varchar(200) NOT NULL,
  `VR_E` varchar(200) NOT NULL,
  `VR_T` varchar(200) NOT NULL,
  `VR_G` varchar(200) NOT NULL,
  `VR_RMK` varchar(200) NOT NULL,
  `QR_1` varchar(200) NOT NULL,
  `QR_2` varchar(200) NOT NULL,
  `QR_3` varchar(200) NOT NULL,
  `QR_E` varchar(200) NOT NULL,
  `QR_T` varchar(200) NOT NULL,
  `QR_G` varchar(200) NOT NULL,
  `QR_RMK` varchar(200) NOT NULL,
  `FO_1` varchar(200) NOT NULL,
  `FO_2` varchar(200) NOT NULL,
  `FO_3` varchar(200) NOT NULL,
  `FO_E` varchar(200) NOT NULL,
  `FO_T` varchar(200) NOT NULL,
  `FO_G` varchar(200) NOT NULL,
  `FO_RMK` varchar(200) NOT NULL,
  `FR_1` varchar(200) NOT NULL,
  `FR_2` varchar(200) NOT NULL,
  `FR_3` varchar(200) NOT NULL,
  `FR_E` varchar(200) NOT NULL,
  `FR_T` varchar(200) NOT NULL,
  `FR_G` varchar(200) NOT NULL,
  `FR_RMK` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ADM_NO` (`ADM_NO`,`PIN`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_pri`
--

INSERT INTO `result_pri` (`ID`, `ADM_NO`, `FNAME`, `LNAME`, `PIN`, `CLASS`, `SEX`, `TERM`, `SESSION`, `TOTAL_SCORE`, `OUT_OFF`, `OVERALL_PERCENT`, `POSITION`, `NO_CLASS`, `NO_SUBJECTS`, `SCH_OPEN`, `SCH_ABS`, `TEACHER_RPT`, `HM_REMARK`, `SCH_RESUME`, `INFO`, `CRS_1`, `CRS_2`, `CRS_3`, `CRS_E`, `CRS_T`, `CRS_G`, `CRS_RMK`, `MATH_1`, `MATH_2`, `MATH_3`, `MATH_E`, `MATHS_T`, `MATH_G`, `MATH_RMK`, `BSC_1`, `BSC_2`, `BSC_3`, `BSC_E`, `BSC_T`, `BSC_G`, `BSC_RMK`, `ENG_1`, `ENG_2`, `ENG_3`, `ENG_E`, `ENG_T`, `ENG_G`, `ENG_RMK`, `WR_1`, `WR_2`, `WR_3`, `WR_E`, `WR_T`, `WR_G`, `WR_RMK`, `HAB_1`, `HAB_2`, `HAB_3`, `HAB_E`, `HAB_T`, `HAB_G`, `HAB_RMK`, `SOS_1`, `SOS_2`, `SOS_3`, `SOS_E`, `SOS_T`, `SOS_G`, `SOS_RMK`, `PHE_1`, `PHE_2`, `PHE_3`, `PHE_E`, `PHE_T`, `PHE_G`, `PHE_RMK`, `COMP_1`, `COMP_2`, `COMP_3`, `COMP_E`, `COMP_T`, `COMP_G`, `COMP_RMK`, `HE_1`, `HE_2`, `HE_3`, `HE_E`, `HE_T`, `HE_G`, `HE_RMK`, `FA_1`, `FA_2`, `FA_3`, `FA_E`, `FA_T`, `FA_G`, `FA_RMK`, `AGR_1`, `AGR_2`, `AGR_3`, `AGR_E`, `AGR_T`, `AGR_G`, `AGR_RMK`, `VR_1`, `VR_2`, `VR_3`, `VR_E`, `VR_T`, `VR_G`, `VR_RMK`, `QR_1`, `QR_2`, `QR_3`, `QR_E`, `QR_T`, `QR_G`, `QR_RMK`, `FO_1`, `FO_2`, `FO_3`, `FO_E`, `FO_T`, `FO_G`, `FO_RMK`, `FR_1`, `FR_2`, `FR_3`, `FR_E`, `FR_T`, `FR_G`, `FR_RMK`) VALUES
(1, '004', 'NZEAKA', 'WISDOM  CHIDINDU', '1121694209', 'BASIC 4', 'MALE', 'first', '2017/2018', '635', '1200', '52.916666666667', '', '13', '12', '112', 'NIL', 'GOOD RESULT PUT MORE EFFORT', '', '08/01/2018', '', '10', '7', '', '34', '51', 'C', 'GOOD', '9', '7', '', '18', '34', 'F', 'FAIL', '10', '8', '', '35', '53', 'C', 'GOOD', '10', '9', '', '30', '49', 'D', 'FAIR', '8', '7', '', '35', '50', 'C', 'GOOD', '10', '9', '', '35', '54', 'C', 'GOOD', '15', '9', '', '41', '65', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '12', '9', '', '35', '56', 'C', 'GOOD', '13', '9', '', '47', '69', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '10', '8', '', '35', '53', 'C', 'GOOD', '10', '8', '', '40', '58', 'C', 'GOOD', '10', '8', '', '25', '43', 'D', 'FAIR', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '005', 'OSARO', 'SUCCESS', '1121849307', 'BASIC 5', 'MALE', 'first', '2017/2018', '705', '1200', '58.75', '', '13', '12', '112', 'NIL', 'GOOD RESULT PUT MORE EFFORT', '', '08/01/2018', '', '10', '8', '', '41', '59', 'C', 'GOOD', '16', '7', '', '47', '70', 'A', 'EXCELLENTT', '10', '7', '', '40', '57', 'C', 'GOOD', '8', '8', '', '34', '50', 'C', 'GOOD', '10', '7', '', '35', '52', 'C', 'GOOD', '8', '10', '', '35', '53', 'C', 'GOOD', '13', '7', '', '24', '44', 'D', 'FAIR', '', '', '', '', '', '', '', '11', '9', '', '38', '58', 'C', 'GOOD', '16', '8', '', '45', '69', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '8', '6', '', '37', '51', 'C', 'GOOD', '13', '9', '', '60', '82', 'A', 'EXCELLENTT', '17', '8', '', '35', '60', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '003', 'OSARETIN', 'DESTINY', '1118692624', 'BASIC 4', 'MALE', 'first', '2017/2018', '634', '1100', '57.636363636364', '', '13', '11', '112', 'NIL', 'GOOD RESULT PUT MORE EFFORT', '', '08/01/2018', '', '10', '8', '', '40', '58', 'C', 'GOOD', '9', '7', '', '18', '34', 'F', 'FAIL', '9', '8', '', '35', '52', 'C', 'GOOD', '10', '8', '', '35', '53', 'C', 'GOOD', '8', '7', '', '35', '50', 'C', 'GOOD', '10', '9', '', '25', '44', 'D', 'FAIR', '15', '9', '', '41', '65', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '12', '9', '', '34', '55', 'C', 'GOOD', '13', '9', '', '47', '69', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '10', '8', '', '40', '58', 'C', 'GOOD', '10', '8', '', '35', '53', 'C', 'GOOD', '10', '8', '', '25', '43', 'D', 'FAIR', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '002', 'ODION', 'BEST', '1115964739', 'BASIC 4', 'MALE', 'first', '2017/2018', '751', '1200', '62.583333333333', '', '13', '12', '112', 'NIL', 'VERY GOOD RESULT  KEEP IT UP', '', '08/01/2018', '', '10', '8', '', '33', '51', 'C', 'GOOD', '15', '7', '', '33', '55', 'C', 'GOOD', '15', '8', '', '49', '72', 'A', 'EXCELLENTT', '10', '7', '', '43', '60', 'B', 'VERY GOOD', '7', '8', '', '50', '65', 'B', 'VERY GOOD', '10', '9', '', '36', '55', 'C', 'GOOD', '16', '8', '', '48', '72', 'A', 'EXCELLENTT', '', '', '', '', '', '', '', '13', '9', '', '37', '59', 'C', 'GOOD', '16', '7', '', '41', '64', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '12', '9', '', '53', '74', 'A', 'EXCELLENTT', '14', '8', '', '45', '67', 'B', 'VERY GOOD', '13', '9', '', '35', '57', 'C', 'GOOD', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '2014001', 'DIEGO', 'CHINONSO  KINGSLEY', '1112890166', 'BASIC 4', 'MALE', 'first', '2017/2018', '537', '1200', '44.75', '', '13', '12', '112', '5', 'GOOD RESULT PUT MORE EFFORT', '', '08/01/2018', '', '7', '8', '', '36', '51', 'C', 'GOOD', '14', '7', '', '18', '39', 'F', 'FAIL', '9', '9', '', '41', '59', 'C', 'GOOD', '10', '8', '', '39', '57', 'C', 'GOOD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '15', '7', '', '38', '60', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '10', '6', '', '45', '61', 'B', 'VERY GOOD', '11', '7', '', '41', '59', 'C', 'GOOD', '', '', '', '', '', '', '', '10', '7', '', '31', '48', 'D', 'FAIR', '12', '8', '', '35', '55', 'C', 'GOOD', '5', '8', '', '35', '48', 'D', 'FAIR', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '006', 'OMOREGBEE', 'ETIOSA   ELVIS', '1122296351', 'BASIC 4', 'MALE', 'first', '2017/2018', '705', '1200', '58.75', '', '13', '12', '112', '3', 'GOOD RESULT PUT MORE EFFORT', '', '08/01/2018', '', '11', '7', '', '35', '53', 'C', 'GOOD', '14', '7', '', '21', '42', 'D', 'FAIR', '11', '8', '', '34', '53', 'C', 'GOOD', '8', '7', '', '35', '50', 'C', 'GOOD', '11', '7', '', '47', '65', 'B', 'VERY GOOD', '10', '8', '', '40', '58', 'C', 'GOOD', '18', '8', '', '49', '75', 'A', 'EXCELLENTT', '', '', '', '', '', '', '', '11', '8', '', '43', '62', 'B', 'VERY GOOD', '17', '7', '', '45', '69', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '12', '7', '', '22', '41', 'D', 'FAIR', '15', '8', '', '55', '78', 'A', 'EXCELLENTT', '10', '9', '', '40', '59', 'C', 'GOOD', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '008', 'OVBOKHAN', 'OSASERE   FAITH', '1126137286', 'BASIC 4', 'FEMALE', 'first', '2017/2018', '726', '1200', '60.5', '', '13', '12', '112', 'NIL', 'VERY GOOD RESULT,  YOU CAN DO BETTER ', '', '08/01/2018', '', '10', '7', '', '35', '52', 'C', 'GOOD', '14', '7', '', '26', '47', 'D', 'FAIR', '13', '7', '', '42', '62', 'B', 'VERY GOOD', '13', '7', '', '35', '55', 'C', 'GOOD', '10', '8', '', '42', '60', 'B', 'VERY GOOD', '10', '6', '', '33', '49', 'D', 'FAIR', '18', '8', '', '42', '68', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '11', '7', '', '38', '56', 'C', 'GOOD', '18', '6', '', '53', '77', 'A', 'EXCELLENTT', '', '', '', '', '', '', '', '12', '9', '', '42', '63', 'B', 'VERY GOOD', '16', '8', '', '60', '84', 'A', 'EXCELLENTT', '10', '8', '', '35', '53', 'C', 'GOOD', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '010', 'ROLAND', 'DELIGHT   EBOSETALE', '1133353865', 'BASIC 4', 'FEMALE', 'first', '2017/2018', '855', '1200', '71.25', '', '13', '12', '112', '4', 'AN EXCELLENT RESULT, KEEP IT UP', '', '08/01/2018', '', '12', '8', '', '48', '68', 'B', 'VERY GOOD', '14', '7', '', '43', '64', 'B', 'VERY GOOD', '16', '7', '', '57', '80', 'A', 'EXCELLENTT', '13', '7', '', '43', '63', 'B', 'VERY GOOD', '17', '8', '', '65', '90', 'A', 'EXCELLENTT', '15', '8', '', '34', '57', 'C', 'GOOD', '20', '8', '', '56', '84', 'A', 'EXCELLENTT', '', '', '', '', '', '', '', '14', '7', '', '30', '51', 'C', 'GOOD', '15', '9', '', '57', '81', 'A', 'EXCELLENTT', '', '', '', '', '', '', '', '14', '8', '', '36', '58', 'C', 'GOOD', '18', '6', '', '70', '94', 'A', 'EXCELLENTT', '13', '7', '', '45', '65', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '012', 'ENUKOHA', 'EBUBE   MARVELLOUS', '1138262233', 'BASIC 4', 'MALE', 'first', '2017/2018', '801', '1200', '66.75', '', '13', '12', '112', '1', 'AN EXCELLENT RESULT, KEEP IT UP', '', '08/01/2018', '', '10', '8', '', '53', '71', 'A', 'EXCELLENTT', '14', '7', '', '52', '73', 'A', 'EXCELLENTT', '16', '8', '', '39', '63', 'B', 'VERY GOOD', '10', '7', '', '40', '57', 'C', 'GOOD', '10', '8', '', '45', '63', 'B', 'VERY GOOD', '10', '7', '', '49', '66', 'B', 'VERY GOOD', '16', '6', '', '47', '69', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '11', '7', '', '48', '66', 'B', 'VERY GOOD', '18', '8', '', '51', '77', 'A', 'EXCELLENTT', '', '', '', '', '', '', '', '8', '7', '', '42', '57', 'C', 'GOOD', '11', '9', '', '55', '75', 'A', 'EXCELLENTT', '15', '9', '', '40', '64', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '013', 'OSAGHEA', 'PRISCA', '1138873498', 'BASIC 4', 'FEMALE', 'first', '2017/2018', '695', '1200', '57.916666666667', '', '13', '12', '112', '2', 'GOOD RESULT PUT MORE EFFORT', '', '08/01/2018', '', '10', '8', '', '29', '47', 'D', 'FAIR', '14', '7', '', '18', '39', 'F', 'FAIL', '12', '6', '', '33', '51', 'C', 'GOOD', '10', '6', '', '43', '59', 'C', 'GOOD', '17', '8', '', '35', '60', 'B', 'VERY GOOD', '15', '8', '', '34', '57', 'C', 'GOOD', '15', '8', '', '43', '66', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '10', '8', '', '28', '46', 'D', 'FAIR', '18', '7', '', '60', '85', 'A', 'EXCELLENTT', '', '', '', '', '', '', '', '10', '6', '', '37', '53', 'C', 'GOOD', '15', '8', '', '55', '78', 'A', 'EXCELLENTT', '12', '7', '', '35', '54', 'C', 'GOOD', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '2014015', 'OKEKE', 'CHIMAOBI', '1144110308', 'BASIC 5', 'MALE', 'first', '2017/2018', '662', '1200', '55.166666666667', '', '4', '12', '112', 'NIL', 'GOOD RESULT PUT MORE EFFORT', '', '08/01/2018', '', '10', '7', '', '36', '53', 'C', 'GOOD', '14', '7', '', '41', '62', 'B', 'VERY GOOD', '10', '8', '', '43', '61', 'B', 'VERY GOOD', '11', '7', '', '27', '45', 'D', 'FAIR', '10', '6', '', '35', '51', 'C', 'GOOD', '11', '8', '', '39', '58', 'C', 'GOOD', '16', '7', '', '39', '62', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '11', '9', '', '40', '60', 'B', 'VERY GOOD', '16', '7', '', '44', '67', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '7', '8', '', '25', '40', 'D', 'FAIR', '11', '7', '', '40', '58', 'C', 'GOOD', '12', '8', '', '25', '45', 'D', 'FAIR', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '017', 'DIKE', 'MARTHA', '1144539106', 'BASIC 5', 'FEMALE', 'first', '2017/2018', '653', '1200', '54.416666666667', '', '4', '12', '112', '9', 'GOOD RESULT PUT MORE EFFORT', '', '08/01/2018', '', '10', '8', '', '34', '52', 'C', 'GOOD', '16', '7', '', '45', '68', 'B', 'VERY GOOD', '13', '7', '', '33', '53', 'C', 'GOOD', '8', '7', '', '39', '54', 'C', 'GOOD', '14', '8', '', '35', '57', 'C', 'GOOD', '10', '6', '', '20', '36', 'F', 'FAIL', '12', '8', '', '37', '57', 'C', 'GOOD', '', '', '', '', '', '', '', '14', '6', '', '40', '60', 'B', 'VERY GOOD', '17', '8', '', '43', '68', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '10', '8', '', '25', '43', 'D', 'FAIR', '10', '9', '', '45', '64', 'B', 'VERY GOOD', '8', '8', '', '25', '41', 'D', 'FAIR', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '2014018', 'OGBURIE', 'ONYINYECH', '1145305468', 'BASIC 5', 'FEMALE', 'first', '2017/2018', '833', '1200', '69.416666666667', '', '4', '12', '112', 'NIL', 'VERY GOOD RESULT  KEEP IT UP', '', '08/01/2018', '', '10', '6', '', '64', '80', 'A', 'EXCELLENTT', '16', '7', '', '56', '79', 'A', 'EXCELLENTT', '9', '8', '', '53', '70', 'A', 'EXCELLENTT', '11', '9', '', '44', '64', 'B', 'VERY GOOD', '19', '7', '', '54', '80', 'A', 'EXCELLENTT', '13', '7', '', '47', '67', 'B', 'VERY GOOD', '20', '8', '', '52', '80', 'A', 'EXCELLENTT', '', '', '', '', '', '', '', '16', '6', '', '30', '52', 'C', 'GOOD', '18', '6', '', '48', '72', 'A', 'EXCELLENTT', '', '', '', '', '', '', '', '10', '7', '', '32', '49', 'D', 'FAIR', '19', '7', '', '60', '86', 'A', 'EXCELLENTT', '17', '7', '', '30', '54', 'C', 'GOOD', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '2014016', 'OLELE', 'ANDERSON OSE', '1144356638', 'BASIC 5', 'MALE', 'first', '2017/2018', '789', '1200', '65.75', '', '4', '12', '112', '4', 'GOOD RESULT, YOU CAN DO BETTER', '', '08/01/2018', '', '12', '8', '', '61', '81', 'A', 'EXCELLENT', '16', '7', '', '55', '78', 'A', 'EXCELLENT', '10', '7', '', '46', '63', 'B', 'VERY GOOD', '10', '7', '', '36', '53', 'C', 'GOOD', '10', '7', '', '45', '62', 'B', 'VERY GOOD', '10', '8', '', '32', '50', 'C', 'GOOD', '18', '6', '', '54', '78', 'A', 'EXCELLENT', '', '', '', '', '', '', '', '12', '8', '', '45', '65', 'B', 'VERY GOOD', '13', '7', '', '57', '77', 'A', 'EXCELLENT', '', '', '', '', '', '', '', '13', '6', '', '45', '64', 'B', 'VERY GOOD', '13', '7', '', '35', '55', 'C', 'GOOD', '11', '7', '', '45', '63', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '009', 'EROMOSELE', 'QUINCY', '1129257476', 'BASIC 4', 'FEMALE', 'first', '2017/2018', '637', '1200', '53.083333333333', '', '13', '12', '112', '01', 'GOOD RESULT, KEEP IT UP', '', '', '', '10', '8', '', '39', '57', 'C', 'GOOD', '12', '7', '', '22', '41', 'D', 'FAIR', '10', '8', '', '37', '55', 'C', 'GOOD', '8', '7', '', '37', '52', 'C', 'GOOD', '10', '8', '', '40', '58', 'C', 'GOOD', '8', '7', '', '37', '52', 'C', 'GOOD', '8', '9', '', '30', '47', 'D', 'FAIR', '', '', '', '', '', '', '', '10', '8', '', '45', '63', 'B', 'VERY GOOD', '14', '7', '', '36', '57', 'C', 'GOOD', '', '', '', '', '', '', '', '10', '6', '', '30', '46', 'D', 'FAIR', '15', '7', '', '30', '52', 'C', 'GOOD', '10', '7', '', '40', '57', 'C', 'GOOD', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `result_pri_second`
--

DROP TABLE IF EXISTS `result_pri_second`;
CREATE TABLE IF NOT EXISTS `result_pri_second` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `ADM_NO` varchar(200) NOT NULL,
  `FNAME` varchar(200) NOT NULL,
  `LNAME` varchar(200) NOT NULL,
  `PIN` varchar(200) NOT NULL,
  `CLASS` varchar(200) NOT NULL,
  `SEX` varchar(200) NOT NULL,
  `TERM` varchar(200) NOT NULL,
  `SESSION` varchar(200) NOT NULL,
  `TOTAL_SCORE` varchar(200) NOT NULL,
  `OUT_OFF` varchar(200) NOT NULL,
  `OVERALL_PERCENT` varchar(200) NOT NULL,
  `POSITION` varchar(200) NOT NULL,
  `NO_CLASS` varchar(200) NOT NULL,
  `NO_SUBJECTS` varchar(200) NOT NULL,
  `SCH_OPEN` varchar(200) NOT NULL,
  `SCH_ABS` varchar(200) NOT NULL,
  `TEACHER_RPT` varchar(200) NOT NULL,
  `HM_REMARK` varchar(200) NOT NULL,
  `SCH_RESUME` varchar(200) NOT NULL,
  `INFO` varchar(200) NOT NULL,
  `CRS_1` varchar(200) NOT NULL,
  `CRS_2` varchar(200) NOT NULL,
  `CRS_3` varchar(200) NOT NULL,
  `CRS_E` varchar(200) NOT NULL,
  `CRS_T` varchar(200) NOT NULL,
  `CRS_G` varchar(200) NOT NULL,
  `CRS_RMK` varchar(200) NOT NULL,
  `MATH_1` varchar(200) NOT NULL,
  `MATH_2` varchar(200) NOT NULL,
  `MATH_3` varchar(200) NOT NULL,
  `MATH_E` varchar(200) NOT NULL,
  `MATHS_T` varchar(200) NOT NULL,
  `MATH_G` varchar(200) NOT NULL,
  `MATH_RMK` varchar(200) NOT NULL,
  `BSC_1` varchar(200) NOT NULL,
  `BSC_2` varchar(200) NOT NULL,
  `BSC_3` varchar(200) NOT NULL,
  `BSC_E` varchar(200) NOT NULL,
  `BSC_T` varchar(200) NOT NULL,
  `BSC_G` varchar(200) NOT NULL,
  `BSC_RMK` varchar(200) NOT NULL,
  `ENG_1` varchar(200) NOT NULL,
  `ENG_2` varchar(200) NOT NULL,
  `ENG_3` varchar(200) NOT NULL,
  `ENG_E` varchar(200) NOT NULL,
  `ENG_T` varchar(200) NOT NULL,
  `ENG_G` varchar(200) NOT NULL,
  `ENG_RMK` varchar(200) NOT NULL,
  `WR_1` varchar(200) NOT NULL,
  `WR_2` varchar(200) NOT NULL,
  `WR_3` varchar(200) NOT NULL,
  `WR_E` varchar(200) NOT NULL,
  `WR_T` varchar(200) NOT NULL,
  `WR_G` varchar(200) NOT NULL,
  `WR_RMK` varchar(200) NOT NULL,
  `HAB_1` varchar(200) NOT NULL,
  `HAB_2` varchar(200) NOT NULL,
  `HAB_3` varchar(200) NOT NULL,
  `HAB_E` varchar(200) NOT NULL,
  `HAB_T` varchar(200) NOT NULL,
  `HAB_G` varchar(200) NOT NULL,
  `HAB_RMK` varchar(200) NOT NULL,
  `SOS_1` varchar(200) NOT NULL,
  `SOS_2` varchar(200) NOT NULL,
  `SOS_3` varchar(200) NOT NULL,
  `SOS_E` varchar(200) NOT NULL,
  `SOS_T` varchar(200) NOT NULL,
  `SOS_G` varchar(200) NOT NULL,
  `SOS_RMK` varchar(200) NOT NULL,
  `PHE_1` varchar(200) NOT NULL,
  `PHE_2` varchar(200) NOT NULL,
  `PHE_3` varchar(200) NOT NULL,
  `PHE_E` varchar(200) NOT NULL,
  `PHE_T` varchar(200) NOT NULL,
  `PHE_G` varchar(200) NOT NULL,
  `PHE_RMK` varchar(200) NOT NULL,
  `COMP_1` varchar(200) NOT NULL,
  `COMP_2` varchar(200) NOT NULL,
  `COMP_3` varchar(200) NOT NULL,
  `COMP_E` varchar(200) NOT NULL,
  `COMP_T` varchar(200) NOT NULL,
  `COMP_G` varchar(200) NOT NULL,
  `COMP_RMK` varchar(200) NOT NULL,
  `HE_1` varchar(200) NOT NULL,
  `HE_2` varchar(200) NOT NULL,
  `HE_3` varchar(200) NOT NULL,
  `HE_E` varchar(200) NOT NULL,
  `HE_T` varchar(200) NOT NULL,
  `HE_G` varchar(200) NOT NULL,
  `HE_RMK` varchar(200) NOT NULL,
  `FA_1` varchar(200) NOT NULL,
  `FA_2` varchar(200) NOT NULL,
  `FA_3` varchar(200) NOT NULL,
  `FA_E` varchar(200) NOT NULL,
  `FA_T` varchar(200) NOT NULL,
  `FA_G` varchar(200) NOT NULL,
  `FA_RMK` varchar(200) NOT NULL,
  `AGR_1` varchar(200) NOT NULL,
  `AGR_2` varchar(200) NOT NULL,
  `AGR_3` varchar(200) NOT NULL,
  `AGR_E` varchar(200) NOT NULL,
  `AGR_T` varchar(200) NOT NULL,
  `AGR_G` varchar(200) NOT NULL,
  `AGR_RMK` varchar(200) NOT NULL,
  `VR_1` varchar(200) NOT NULL,
  `VR_2` varchar(200) NOT NULL,
  `VR_3` varchar(200) NOT NULL,
  `VR_E` varchar(200) NOT NULL,
  `VR_T` varchar(200) NOT NULL,
  `VR_G` varchar(200) NOT NULL,
  `VR_RMK` varchar(200) NOT NULL,
  `QR_1` varchar(200) NOT NULL,
  `QR_2` varchar(200) NOT NULL,
  `QR_3` varchar(200) NOT NULL,
  `QR_E` varchar(200) NOT NULL,
  `QR_T` varchar(200) NOT NULL,
  `QR_G` varchar(200) NOT NULL,
  `QR_RMK` varchar(200) NOT NULL,
  `FO_1` varchar(200) NOT NULL,
  `FO_2` varchar(200) NOT NULL,
  `FO_3` varchar(200) NOT NULL,
  `FO_E` varchar(200) NOT NULL,
  `FO_T` varchar(200) NOT NULL,
  `FO_G` varchar(200) NOT NULL,
  `FO_RMK` varchar(200) NOT NULL,
  `FR_1` varchar(200) NOT NULL,
  `FR_2` varchar(200) NOT NULL,
  `FR_3` varchar(200) NOT NULL,
  `FR_E` varchar(200) NOT NULL,
  `FR_T` varchar(200) NOT NULL,
  `FR_G` varchar(200) NOT NULL,
  `FR_RMK` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ADM_NO` (`ADM_NO`,`PIN`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_pri_second`
--

INSERT INTO `result_pri_second` (`ID`, `ADM_NO`, `FNAME`, `LNAME`, `PIN`, `CLASS`, `SEX`, `TERM`, `SESSION`, `TOTAL_SCORE`, `OUT_OFF`, `OVERALL_PERCENT`, `POSITION`, `NO_CLASS`, `NO_SUBJECTS`, `SCH_OPEN`, `SCH_ABS`, `TEACHER_RPT`, `HM_REMARK`, `SCH_RESUME`, `INFO`, `CRS_1`, `CRS_2`, `CRS_3`, `CRS_E`, `CRS_T`, `CRS_G`, `CRS_RMK`, `MATH_1`, `MATH_2`, `MATH_3`, `MATH_E`, `MATHS_T`, `MATH_G`, `MATH_RMK`, `BSC_1`, `BSC_2`, `BSC_3`, `BSC_E`, `BSC_T`, `BSC_G`, `BSC_RMK`, `ENG_1`, `ENG_2`, `ENG_3`, `ENG_E`, `ENG_T`, `ENG_G`, `ENG_RMK`, `WR_1`, `WR_2`, `WR_3`, `WR_E`, `WR_T`, `WR_G`, `WR_RMK`, `HAB_1`, `HAB_2`, `HAB_3`, `HAB_E`, `HAB_T`, `HAB_G`, `HAB_RMK`, `SOS_1`, `SOS_2`, `SOS_3`, `SOS_E`, `SOS_T`, `SOS_G`, `SOS_RMK`, `PHE_1`, `PHE_2`, `PHE_3`, `PHE_E`, `PHE_T`, `PHE_G`, `PHE_RMK`, `COMP_1`, `COMP_2`, `COMP_3`, `COMP_E`, `COMP_T`, `COMP_G`, `COMP_RMK`, `HE_1`, `HE_2`, `HE_3`, `HE_E`, `HE_T`, `HE_G`, `HE_RMK`, `FA_1`, `FA_2`, `FA_3`, `FA_E`, `FA_T`, `FA_G`, `FA_RMK`, `AGR_1`, `AGR_2`, `AGR_3`, `AGR_E`, `AGR_T`, `AGR_G`, `AGR_RMK`, `VR_1`, `VR_2`, `VR_3`, `VR_E`, `VR_T`, `VR_G`, `VR_RMK`, `QR_1`, `QR_2`, `QR_3`, `QR_E`, `QR_T`, `QR_G`, `QR_RMK`, `FO_1`, `FO_2`, `FO_3`, `FO_E`, `FO_T`, `FO_G`, `FO_RMK`, `FR_1`, `FR_2`, `FR_3`, `FR_E`, `FR_T`, `FR_G`, `FR_RMK`) VALUES
(1, '2014001', 'DIEGO', 'CHINONSO  KINGSLEY', '1112890166', 'BASIC 4', 'MALE', 'second', '2017/2018', '69', '100', '69', '', '20', '1', '', '', '', '', '', '', '11', '8', '5', '45', '69', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `result_pri_third`
--

DROP TABLE IF EXISTS `result_pri_third`;
CREATE TABLE IF NOT EXISTS `result_pri_third` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `ADM_NO` varchar(200) NOT NULL,
  `FNAME` varchar(200) NOT NULL,
  `LNAME` varchar(200) NOT NULL,
  `PIN` varchar(200) NOT NULL,
  `CLASS` varchar(200) NOT NULL,
  `SEX` varchar(200) NOT NULL,
  `TERM` varchar(200) NOT NULL,
  `SESSION` varchar(200) NOT NULL,
  `TOTAL_SCORE` varchar(200) NOT NULL,
  `OUT_OFF` varchar(200) NOT NULL,
  `OVERALL_PERCENT` varchar(200) NOT NULL,
  `POSITION` varchar(200) NOT NULL,
  `NO_CLASS` varchar(200) NOT NULL,
  `NO_SUBJECTS` varchar(200) NOT NULL,
  `SCH_OPEN` varchar(200) NOT NULL,
  `SCH_ABS` varchar(200) NOT NULL,
  `TEACHER_RPT` varchar(200) NOT NULL,
  `HM_REMARK` varchar(200) NOT NULL,
  `SCH_RESUME` varchar(200) NOT NULL,
  `INFO` varchar(200) NOT NULL,
  `CRS_1` varchar(200) NOT NULL,
  `CRS_2` varchar(200) NOT NULL,
  `CRS_3` varchar(200) NOT NULL,
  `CRS_E` varchar(200) NOT NULL,
  `CRS_T` varchar(200) NOT NULL,
  `CRS_G` varchar(200) NOT NULL,
  `CRS_RMK` varchar(200) NOT NULL,
  `MATH_1` varchar(200) NOT NULL,
  `MATH_2` varchar(200) NOT NULL,
  `MATH_3` varchar(200) NOT NULL,
  `MATH_E` varchar(200) NOT NULL,
  `MATHS_T` varchar(200) NOT NULL,
  `MATH_G` varchar(200) NOT NULL,
  `MATH_RMK` varchar(200) NOT NULL,
  `BSC_1` varchar(200) NOT NULL,
  `BSC_2` varchar(200) NOT NULL,
  `BSC_3` varchar(200) NOT NULL,
  `BSC_E` varchar(200) NOT NULL,
  `BSC_T` varchar(200) NOT NULL,
  `BSC_G` varchar(200) NOT NULL,
  `BSC_RMK` varchar(200) NOT NULL,
  `ENG_1` varchar(200) NOT NULL,
  `ENG_2` varchar(200) NOT NULL,
  `ENG_3` varchar(200) NOT NULL,
  `ENG_E` varchar(200) NOT NULL,
  `ENG_T` varchar(200) NOT NULL,
  `ENG_G` varchar(200) NOT NULL,
  `ENG_RMK` varchar(200) NOT NULL,
  `WR_1` varchar(200) NOT NULL,
  `WR_2` varchar(200) NOT NULL,
  `WR_3` varchar(200) NOT NULL,
  `WR_E` varchar(200) NOT NULL,
  `WR_T` varchar(200) NOT NULL,
  `WR_G` varchar(200) NOT NULL,
  `WR_RMK` varchar(200) NOT NULL,
  `HAB_1` varchar(200) NOT NULL,
  `HAB_2` varchar(200) NOT NULL,
  `HAB_3` varchar(200) NOT NULL,
  `HAB_E` varchar(200) NOT NULL,
  `HAB_T` varchar(200) NOT NULL,
  `HAB_G` varchar(200) NOT NULL,
  `HAB_RMK` varchar(200) NOT NULL,
  `SOS_1` varchar(200) NOT NULL,
  `SOS_2` varchar(200) NOT NULL,
  `SOS_3` varchar(200) NOT NULL,
  `SOS_E` varchar(200) NOT NULL,
  `SOS_T` varchar(200) NOT NULL,
  `SOS_G` varchar(200) NOT NULL,
  `SOS_RMK` varchar(200) NOT NULL,
  `PHE_1` varchar(200) NOT NULL,
  `PHE_2` varchar(200) NOT NULL,
  `PHE_3` varchar(200) NOT NULL,
  `PHE_E` varchar(200) NOT NULL,
  `PHE_T` varchar(200) NOT NULL,
  `PHE_G` varchar(200) NOT NULL,
  `PHE_RMK` varchar(200) NOT NULL,
  `COMP_1` varchar(200) NOT NULL,
  `COMP_2` varchar(200) NOT NULL,
  `COMP_3` varchar(200) NOT NULL,
  `COMP_E` varchar(200) NOT NULL,
  `COMP_T` varchar(200) NOT NULL,
  `COMP_G` varchar(200) NOT NULL,
  `COMP_RMK` varchar(200) NOT NULL,
  `HE_1` varchar(200) NOT NULL,
  `HE_2` varchar(200) NOT NULL,
  `HE_3` varchar(200) NOT NULL,
  `HE_E` varchar(200) NOT NULL,
  `HE_T` varchar(200) NOT NULL,
  `HE_G` varchar(200) NOT NULL,
  `HE_RMK` varchar(200) NOT NULL,
  `FA_1` varchar(200) NOT NULL,
  `FA_2` varchar(200) NOT NULL,
  `FA_3` varchar(200) NOT NULL,
  `FA_E` varchar(200) NOT NULL,
  `FA_T` varchar(200) NOT NULL,
  `FA_G` varchar(200) NOT NULL,
  `FA_RMK` varchar(200) NOT NULL,
  `AGR_1` varchar(200) NOT NULL,
  `AGR_2` varchar(200) NOT NULL,
  `AGR_3` varchar(200) NOT NULL,
  `AGR_E` varchar(200) NOT NULL,
  `AGR_T` varchar(200) NOT NULL,
  `AGR_G` varchar(200) NOT NULL,
  `AGR_RMK` varchar(200) NOT NULL,
  `VR_1` varchar(200) NOT NULL,
  `VR_2` varchar(200) NOT NULL,
  `VR_3` varchar(200) NOT NULL,
  `VR_E` varchar(200) NOT NULL,
  `VR_T` varchar(200) NOT NULL,
  `VR_G` varchar(200) NOT NULL,
  `VR_RMK` varchar(200) NOT NULL,
  `QR_1` varchar(200) NOT NULL,
  `QR_2` varchar(200) NOT NULL,
  `QR_3` varchar(200) NOT NULL,
  `QR_E` varchar(200) NOT NULL,
  `QR_T` varchar(200) NOT NULL,
  `QR_G` varchar(200) NOT NULL,
  `QR_RMK` varchar(200) NOT NULL,
  `FO_1` varchar(200) NOT NULL,
  `FO_2` varchar(200) NOT NULL,
  `FO_3` varchar(200) NOT NULL,
  `FO_E` varchar(200) NOT NULL,
  `FO_T` varchar(200) NOT NULL,
  `FO_G` varchar(200) NOT NULL,
  `FO_RMK` varchar(200) NOT NULL,
  `FR_1` varchar(200) NOT NULL,
  `FR_2` varchar(200) NOT NULL,
  `FR_3` varchar(200) NOT NULL,
  `FR_E` varchar(200) NOT NULL,
  `FR_T` varchar(200) NOT NULL,
  `FR_G` varchar(200) NOT NULL,
  `FR_RMK` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ADM_NO` (`ADM_NO`,`PIN`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_pri_third`
--

INSERT INTO `result_pri_third` (`ID`, `ADM_NO`, `FNAME`, `LNAME`, `PIN`, `CLASS`, `SEX`, `TERM`, `SESSION`, `TOTAL_SCORE`, `OUT_OFF`, `OVERALL_PERCENT`, `POSITION`, `NO_CLASS`, `NO_SUBJECTS`, `SCH_OPEN`, `SCH_ABS`, `TEACHER_RPT`, `HM_REMARK`, `SCH_RESUME`, `INFO`, `CRS_1`, `CRS_2`, `CRS_3`, `CRS_E`, `CRS_T`, `CRS_G`, `CRS_RMK`, `MATH_1`, `MATH_2`, `MATH_3`, `MATH_E`, `MATHS_T`, `MATH_G`, `MATH_RMK`, `BSC_1`, `BSC_2`, `BSC_3`, `BSC_E`, `BSC_T`, `BSC_G`, `BSC_RMK`, `ENG_1`, `ENG_2`, `ENG_3`, `ENG_E`, `ENG_T`, `ENG_G`, `ENG_RMK`, `WR_1`, `WR_2`, `WR_3`, `WR_E`, `WR_T`, `WR_G`, `WR_RMK`, `HAB_1`, `HAB_2`, `HAB_3`, `HAB_E`, `HAB_T`, `HAB_G`, `HAB_RMK`, `SOS_1`, `SOS_2`, `SOS_3`, `SOS_E`, `SOS_T`, `SOS_G`, `SOS_RMK`, `PHE_1`, `PHE_2`, `PHE_3`, `PHE_E`, `PHE_T`, `PHE_G`, `PHE_RMK`, `COMP_1`, `COMP_2`, `COMP_3`, `COMP_E`, `COMP_T`, `COMP_G`, `COMP_RMK`, `HE_1`, `HE_2`, `HE_3`, `HE_E`, `HE_T`, `HE_G`, `HE_RMK`, `FA_1`, `FA_2`, `FA_3`, `FA_E`, `FA_T`, `FA_G`, `FA_RMK`, `AGR_1`, `AGR_2`, `AGR_3`, `AGR_E`, `AGR_T`, `AGR_G`, `AGR_RMK`, `VR_1`, `VR_2`, `VR_3`, `VR_E`, `VR_T`, `VR_G`, `VR_RMK`, `QR_1`, `QR_2`, `QR_3`, `QR_E`, `QR_T`, `QR_G`, `QR_RMK`, `FO_1`, `FO_2`, `FO_3`, `FO_E`, `FO_T`, `FO_G`, `FO_RMK`, `FR_1`, `FR_2`, `FR_3`, `FR_E`, `FR_T`, `FR_G`, `FR_RMK`) VALUES
(1, '2014116', 'IDAHOSA', 'OZEMWOGIE', '1211823894', 'PRE-SCH2', 'MALE', 'third', '2017/2018', '141', '700', '20.142857142857', '', '', '7', '', '', 'passed', 'satisfactory', '12/05/2018', '', '11', '8', '5', '45', '69', 'B', 'VERY GOOD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '15', '2', '5', '50', '72', 'A', 'EXCELLENT');

-- --------------------------------------------------------

--
-- Table structure for table `result_sec`
--

DROP TABLE IF EXISTS `result_sec`;
CREATE TABLE IF NOT EXISTS `result_sec` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `ADM_NO` varchar(200) NOT NULL,
  `FNAME` varchar(200) NOT NULL,
  `LNAME` varchar(200) NOT NULL,
  `PIN` varchar(200) NOT NULL,
  `CLASS` varchar(200) NOT NULL,
  `SEX` varchar(200) NOT NULL,
  `TERM` varchar(200) NOT NULL,
  `SESSION` varchar(200) NOT NULL,
  `TOTAL_SCORE` varchar(200) NOT NULL,
  `OUT_OFF` varchar(200) NOT NULL,
  `OVERALL_PERCENT` varchar(200) NOT NULL,
  `POSITION` varchar(200) NOT NULL,
  `NO_CLASS` varchar(200) NOT NULL,
  `NO_SUBJECTS` varchar(200) NOT NULL,
  `SCH_OPEN` varchar(200) NOT NULL,
  `SCH_ABS` varchar(200) NOT NULL,
  `TEACHER_RPT` varchar(200) NOT NULL,
  `HM_REMARK` varchar(200) NOT NULL,
  `SCH_RESUME` varchar(200) NOT NULL,
  `INFO` varchar(200) NOT NULL,
  `CRS_1` varchar(200) NOT NULL,
  `CRS_2` varchar(200) NOT NULL,
  `CRS_3` varchar(200) NOT NULL,
  `CRS_E` varchar(200) NOT NULL,
  `CRS_T` varchar(200) NOT NULL,
  `CRS_G` varchar(200) NOT NULL,
  `CRS_RMK` varchar(200) NOT NULL,
  `MATH_1` varchar(200) NOT NULL,
  `MATH_2` varchar(200) NOT NULL,
  `MATH_3` varchar(200) NOT NULL,
  `MATH_E` varchar(200) NOT NULL,
  `MATHS_T` varchar(200) NOT NULL,
  `MATH_G` varchar(200) NOT NULL,
  `MATH_RMK` varchar(200) NOT NULL,
  `BSC_1` varchar(200) NOT NULL,
  `BSC_2` varchar(200) NOT NULL,
  `BSC_3` varchar(200) NOT NULL,
  `BSC_E` varchar(200) NOT NULL,
  `BSC_T` varchar(200) NOT NULL,
  `BSC_G` varchar(200) NOT NULL,
  `BSC_RMK` varchar(200) NOT NULL,
  `ENG_1` varchar(200) NOT NULL,
  `ENG_2` varchar(200) NOT NULL,
  `ENG_3` varchar(200) NOT NULL,
  `ENG_E` varchar(200) NOT NULL,
  `ENG_T` varchar(200) NOT NULL,
  `ENG_G` varchar(200) NOT NULL,
  `ENG_RMK` varchar(200) NOT NULL,
  `WR_1` varchar(200) NOT NULL,
  `WR_2` varchar(200) NOT NULL,
  `WR_3` varchar(200) NOT NULL,
  `WR_E` varchar(200) NOT NULL,
  `WR_T` varchar(200) NOT NULL,
  `WR_G` varchar(200) NOT NULL,
  `WR_RMK` varchar(200) NOT NULL,
  `HAB_1` varchar(200) NOT NULL,
  `HAB_2` varchar(200) NOT NULL,
  `HAB_3` varchar(200) NOT NULL,
  `HAB_E` varchar(200) NOT NULL,
  `HAB_T` varchar(200) NOT NULL,
  `HAB_G` varchar(200) NOT NULL,
  `HAB_RMK` varchar(200) NOT NULL,
  `SOS_1` varchar(200) NOT NULL,
  `SOS_2` varchar(200) NOT NULL,
  `SOS_3` varchar(200) NOT NULL,
  `SOS_E` varchar(200) NOT NULL,
  `SOS_T` varchar(200) NOT NULL,
  `SOS_G` varchar(200) NOT NULL,
  `SOS_RMK` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ADM_NO` (`ADM_NO`,`PIN`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result_sec_second`
--

DROP TABLE IF EXISTS `result_sec_second`;
CREATE TABLE IF NOT EXISTS `result_sec_second` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `ADM_NO` varchar(200) NOT NULL,
  `FNAME` varchar(200) NOT NULL,
  `LNAME` varchar(200) NOT NULL,
  `PIN` varchar(200) NOT NULL,
  `CLASS` varchar(200) NOT NULL,
  `SEX` varchar(200) NOT NULL,
  `TERM` varchar(200) NOT NULL,
  `SESSION` varchar(200) NOT NULL,
  `TOTAL_SCORE` varchar(200) NOT NULL,
  `OUT_OFF` varchar(200) NOT NULL,
  `OVERALL_PERCENT` varchar(200) NOT NULL,
  `POSITION` varchar(200) NOT NULL,
  `NO_CLASS` varchar(200) NOT NULL,
  `NO_SUBJECTS` varchar(200) NOT NULL,
  `SCH_OPEN` varchar(200) NOT NULL,
  `SCH_ABS` varchar(200) NOT NULL,
  `TEACHER_RPT` varchar(200) NOT NULL,
  `HM_REMARK` varchar(200) NOT NULL,
  `SCH_RESUME` varchar(200) NOT NULL,
  `INFO` varchar(200) NOT NULL,
  `CRS_1` varchar(200) NOT NULL,
  `CRS_2` varchar(200) NOT NULL,
  `CRS_3` varchar(200) NOT NULL,
  `CRS_E` varchar(200) NOT NULL,
  `CRS_T` varchar(200) NOT NULL,
  `CRS_G` varchar(200) NOT NULL,
  `CRS_RMK` varchar(200) NOT NULL,
  `MATH_1` varchar(200) NOT NULL,
  `MATH_2` varchar(200) NOT NULL,
  `MATH_3` varchar(200) NOT NULL,
  `MATH_E` varchar(200) NOT NULL,
  `MATHS_T` varchar(200) NOT NULL,
  `MATH_G` varchar(200) NOT NULL,
  `MATH_RMK` varchar(200) NOT NULL,
  `BSC_1` varchar(200) NOT NULL,
  `BSC_2` varchar(200) NOT NULL,
  `BSC_3` varchar(200) NOT NULL,
  `BSC_E` varchar(200) NOT NULL,
  `BSC_T` varchar(200) NOT NULL,
  `BSC_G` varchar(200) NOT NULL,
  `BSC_RMK` varchar(200) NOT NULL,
  `ENG_1` varchar(200) NOT NULL,
  `ENG_2` varchar(200) NOT NULL,
  `ENG_3` varchar(200) NOT NULL,
  `ENG_E` varchar(200) NOT NULL,
  `ENG_T` varchar(200) NOT NULL,
  `ENG_G` varchar(200) NOT NULL,
  `ENG_RMK` varchar(200) NOT NULL,
  `WR_1` varchar(200) NOT NULL,
  `WR_2` varchar(200) NOT NULL,
  `WR_3` varchar(200) NOT NULL,
  `WR_E` varchar(200) NOT NULL,
  `WR_T` varchar(200) NOT NULL,
  `WR_G` varchar(200) NOT NULL,
  `WR_RMK` varchar(200) NOT NULL,
  `HAB_1` varchar(200) NOT NULL,
  `HAB_2` varchar(200) NOT NULL,
  `HAB_3` varchar(200) NOT NULL,
  `HAB_E` varchar(200) NOT NULL,
  `HAB_T` varchar(200) NOT NULL,
  `HAB_G` varchar(200) NOT NULL,
  `HAB_RMK` varchar(200) NOT NULL,
  `SOS_1` varchar(200) NOT NULL,
  `SOS_2` varchar(200) NOT NULL,
  `SOS_3` varchar(200) NOT NULL,
  `SOS_E` varchar(200) NOT NULL,
  `SOS_T` varchar(200) NOT NULL,
  `SOS_G` varchar(200) NOT NULL,
  `SOS_RMK` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ADM_NO` (`ADM_NO`,`PIN`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_sec_second`
--

INSERT INTO `result_sec_second` (`ID`, `ADM_NO`, `FNAME`, `LNAME`, `PIN`, `CLASS`, `SEX`, `TERM`, `SESSION`, `TOTAL_SCORE`, `OUT_OFF`, `OVERALL_PERCENT`, `POSITION`, `NO_CLASS`, `NO_SUBJECTS`, `SCH_OPEN`, `SCH_ABS`, `TEACHER_RPT`, `HM_REMARK`, `SCH_RESUME`, `INFO`, `CRS_1`, `CRS_2`, `CRS_3`, `CRS_E`, `CRS_T`, `CRS_G`, `CRS_RMK`, `MATH_1`, `MATH_2`, `MATH_3`, `MATH_E`, `MATHS_T`, `MATH_G`, `MATH_RMK`, `BSC_1`, `BSC_2`, `BSC_3`, `BSC_E`, `BSC_T`, `BSC_G`, `BSC_RMK`, `ENG_1`, `ENG_2`, `ENG_3`, `ENG_E`, `ENG_T`, `ENG_G`, `ENG_RMK`, `WR_1`, `WR_2`, `WR_3`, `WR_E`, `WR_T`, `WR_G`, `WR_RMK`, `HAB_1`, `HAB_2`, `HAB_3`, `HAB_E`, `HAB_T`, `HAB_G`, `HAB_RMK`, `SOS_1`, `SOS_2`, `SOS_3`, `SOS_E`, `SOS_T`, `SOS_G`, `SOS_RMK`) VALUES
(1, '2014169', 'ROLAND', 'EGHEOSE DIVINE', '1179828266', 'JUNIOR-HIGH-SCH2', 'FEMALE', 'second', '2017/2018', '607', '700', '86.714285714286', '', '8', '7', '114', 'NIL', 'AN EXCELLENT RESULT, KEEP IT UP', 'OUTSTANDING PERFORMANCE.', 'April 23rd, 2018', 'Well organised and proper group management', '19', '10', '10', '56', '95', 'A1', 'EXCELLENTT', '14', '9', '10', '40', '73', 'B2', 'GOOD', '14', '9', '10', '46', '79', 'B2', 'GOOD', '17', '9', '10', '50', '86', 'A1', 'EXCELLENTT', '17', '9', '10', '60', '96', 'A1', 'EXCELLENTT', '17', '10', '10', '53', '90', 'A1', 'EXCELLENTT', '13', '8', '10', '57', '88', 'A1', 'EXCELLENTT'),
(2, '2014173', 'ODION', 'EFOSA KINGSLEY', '1181817159', 'JUNIOR-HIGH-SCH2', 'MALE', 'second', '2017/2018', '610', '700', '87.142857142857', '', '8', '7', '114', 'NIL', 'AN EXCELLENT RESULT, KEEP IT UP', 'OUTSTANDING PERFORMANCE.', 'April 23rd, 2018', '', '18', '10', '10', '58', '96', 'A1', 'EXCELLENTT', '15', '9', '10', '41', '75', 'B2', 'GOOD', '16', '9', '10', '48', '83', 'A1', 'EXCELLENTT', '17', '9', '10', '51', '87', 'A1', 'EXCELLENTT', '17', '9', '10', '60', '96', 'A1', 'EXCELLENTT', '17', '10', '10', '49', '86', 'A1', 'EXCELLENTT', '14', '8', '10', '55', '87', 'A1', 'EXCELLENTT'),
(3, '2014175', 'EDEBOR', 'UWA SILVIA', '1181534335', 'JUNIOR-HIGH-SCH2', 'FEMALE', 'second', '2017/2018', '475', '700', '67.857142857143', '', '8', '7', '114', '10', 'GOOD PERFORMANCE, YOU CAN DO BETTER.', 'GOOD RESULT, YOU CAN DO BETTER.', 'April 23rd, 2018', '', '11', '10', '10', '34', '65', 'C6', 'CREDIT', '11', '7', '10', '33', '61', 'C6', 'CREDIT', '9', '8', '10', '25', '52', 'C6', 'CREDIT', '14', '8', '10', '50', '82', 'A1', 'EXCELLENTT', '11', '9', '10', '55', '85', 'A1', 'EXCELLENTT', '16', '10', '10', '31', '67', 'C6', 'CREDIT', '8', '6', '10', '39', '63', 'C6', 'CREDIT'),
(4, '2014174', 'GODWIN', 'VICTOR', '1182911962', 'JUNIOR-HIGH-SCH2', 'MALE', 'second', '2017/2018', '444', '700', '63.428571428571', '', '8', '7', '114', 'NIL', 'GOOD RESULT PUT MORE EFFORT', 'GOOD RESULT, YOU CAN DO BETTER.', 'April 23rd, 2018', '', '12', '10', '10', '41', '73', 'B2', 'GOOD', '10', '7', '10', '27', '54', 'C6', 'CREDIT', '12', '9', '10', '24', '55', 'C6', 'CREDIT', '12', '7', '10', '41', '70', 'B2', 'GOOD', '11', '9', '10', '45', '75', 'B2', 'GOOD', '8', '10', '10', '29', '57', 'C6', 'CREDIT', '9', '7', '10', '34', '60', 'C6', 'CREDIT'),
(5, '2014167', 'Diego', 'mmesoma  faith', '1179317358', 'JUNIOR-HIGH-SCH2', 'FEMALE', 'second', '2017/2018', '450', '700', '64.285714285714', '', '8', '7', '114', '8', 'VERY GOOD RESULT,  YOU CAN DO BETTER', 'GOOD RESULT, YOU CAN DO BETTER.', 'April 23rd, 2018', '', '13', '10', '10', '38', '71', 'B2', 'GOOD', '13', '8', '10', '39', '70', 'B2', 'GOOD', '10', '8', '10', '24', '52', 'C6', 'CREDIT', '15', '7', '10', '38', '70', 'B2', 'GOOD', '12', '9', '10', '40', '71', 'B2', 'GOOD', '15', '10', '10', '21', '56', 'C6', 'CREDIT', '10', '7', '10', '33', '60', 'C6', 'CREDIT'),
(6, '2014171', 'OMOREGBE', 'FAVOUR OSAZEE VICTORY', '1179883007', 'JUNIOR-HIGH-SCH2', 'MALE', 'second', '2017/2018', '387', '700', '55.285714285714', '', '8', '7', '114', '2', 'POOR RESULT, TRY HARDER NEXT TERM', 'POOR PERFORMANCE.', 'April 23rd, 2018', '', '10', '10', '10', '32', '62', 'C6', 'CREDIT', '9', '6', '10', '15', '40', 'F', 'FAIL', '8', '7', '10', '17', '42', 'F', 'FAIL', '10', '5', '10', '36', '61', 'C6', 'CREDIT', '9', '8', '10', '31', '58', 'C6', 'CREDIT', '16', '10', '10', '26', '62', 'C6', 'CREDIT', '8', '6', '10', '38', '62', 'C6', 'CREDIT'),
(7, '2014168', 'HENRY', 'OFURE PEACE', '1179335605', 'JUNIOR-HIGH-SCH2', 'FEMALE', 'second', '2017/2018', '411', '700', '58.714285714286', '', '8', '7', '114', 'NIL', 'GOOD RESULT, PUT MORE EFFORT', 'FAIR RESULT', 'April 23rd, 2018', '', '7', '10', '10', '31', '58', 'C6', 'CREDIT', '9', '6', '10', '29', '54', 'C6', 'CREDIT', '7', '7', '10', '16', '40', 'F', 'FAIL', '11', '6', '10', '35', '62', 'C6', 'CREDIT', '10', '9', '10', '48', '77', 'B2', 'GOOD', '16', '10', '10', '37', '73', 'B2', 'GOOD', '8', '6', '10', '23', '47', 'F', 'FAIL'),
(8, '2014181', 'NZEAKA', 'CHIOMA BLESSING', '1187482766', 'JUNIOR-HIGH-SCH1', 'FEMALE', 'second', '2017/2018', '465', '700', '66.428571428571', '', '8', '7', '114', '4', 'GOOD PERFORMANCE, YOU CAN DO BETTER.', 'GOOD RESULT, YOU CAN DO BETTER.', 'April 23rd, 2018', '', '13', '10', '10', '26', '59', 'C6', 'CREDIT', '13', '8', '10', '45', '76', 'B2', 'GOOD', '12', '8', '10', '40', '70', 'B2', 'GOOD', '11', '9', '10', '39', '69', 'C6', 'CREDIT', '15', '8', '10', '47', '80', 'A1', 'EXCELLENTT', '7', '10', '10', '29', '56', 'C6', 'CREDIT', '13', '7', '10', '25', '55', 'C6', 'CREDIT'),
(9, '2014176', 'IBEBUIKE', 'MARVELOUS OKECHUKWU', '1185192803', 'JUNIOR-HIGH-SCH1', 'MALE', 'second', '2017/2018', '368', '700', '52.571428571429', '', '11', '7', '114', '4', 'POOR PERFORMANCE, PUT MORE EFFORT NEXT TERM.', 'POOR PERFORMANCE, TRY HARDER NEXT TERM.', 'April 23rd, 2018', '', '5', '10', '10', '11', '36', 'F', 'FAIL', '11', '7', '10', '40', '68', 'C6', 'CREDIT', '9', '7', '10', '25', '51', 'C6', 'CREDIT', '12', '7', '10', '44', '73', 'B2', 'GOOD', '15', '8', '10', '15', '48', 'F', 'FAIL', '4', '10', '10', '17', '41', 'F', 'FAIL', '9', '7', '10', '25', '51', 'C6', 'CREDIT'),
(10, '2014177', 'OBOH', 'PREVAIL OSARUDION', '1185357023', 'JUNIOR-HIGH-SCH1', 'MALE', 'second', '2017/2018', '572', '700', '81.714285714286', '', '11', '7', '114', '2', 'VERY GOOD RESULT  KEEP IT UP', 'EXCELLENT PERFORMANCE.', 'April 23rd, 2018', '', '17', '10', '10', '48', '85', 'A1', 'EXCELLENTT', '17', '8', '10', '49', '84', 'A1', 'EXCELLENTT', '16', '9', '10', '52', '87', 'A1', 'EXCELLENTT', '15', '8', '10', '53', '86', 'A1', 'EXCELLENTT', '16', '8', '10', '48', '82', 'A1', 'EXCELLENTT', '12', '10', '10', '40', '72', 'B2', 'GOOD', '15', '8', '10', '43', '76', 'B2', 'GOOD'),
(11, '2014194', 'ASIRUWA', 'EGHOSA', '1183997642', 'JUNIOR-HIGH-SCH1', 'MALE', 'second', '2017/2018', '504', '700', '72', '', '11', '7', '114', '2', 'GOOD PERFORMANCE', 'GOOD RESULT', 'April 23rd, 2018', '', '14', '10', '10', '31', '65', 'C6', 'CREDIT', '14', '8', '10', '46', '78', 'B2', 'GOOD', '13', '9', '10', '43', '75', 'B2', 'GOOD', '12', '7', '10', '45', '74', 'B2', 'GOOD', '14', '9', '10', '39', '72', 'B2', 'GOOD', '12', '10', '10', '38', '70', 'B2', 'GOOD', '13', '8', '10', '39', '70', 'B2', 'GOOD');

-- --------------------------------------------------------

--
-- Table structure for table `result_sec_third`
--

DROP TABLE IF EXISTS `result_sec_third`;
CREATE TABLE IF NOT EXISTS `result_sec_third` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `ADM_NO` varchar(200) NOT NULL,
  `FNAME` varchar(200) NOT NULL,
  `LNAME` varchar(200) NOT NULL,
  `PIN` varchar(200) NOT NULL,
  `CLASS` varchar(200) NOT NULL,
  `SEX` varchar(200) NOT NULL,
  `TERM` varchar(200) NOT NULL,
  `SESSION` varchar(200) NOT NULL,
  `TOTAL_SCORE` varchar(200) NOT NULL,
  `OUT_OFF` varchar(200) NOT NULL,
  `OVERALL_PERCENT` varchar(200) NOT NULL,
  `POSITION` varchar(200) NOT NULL,
  `NO_CLASS` varchar(200) NOT NULL,
  `NO_SUBJECTS` varchar(200) NOT NULL,
  `SCH_OPEN` varchar(200) NOT NULL,
  `SCH_ABS` varchar(200) NOT NULL,
  `TEACHER_RPT` varchar(200) NOT NULL,
  `HM_REMARK` varchar(200) NOT NULL,
  `SCH_RESUME` varchar(200) NOT NULL,
  `INFO` varchar(200) NOT NULL,
  `CRS_1` varchar(200) NOT NULL,
  `CRS_2` varchar(200) NOT NULL,
  `CRS_3` varchar(200) NOT NULL,
  `CRS_E` varchar(200) NOT NULL,
  `CRS_T` varchar(200) NOT NULL,
  `CRS_G` varchar(200) NOT NULL,
  `CRS_RMK` varchar(200) NOT NULL,
  `MATH_1` varchar(200) NOT NULL,
  `MATH_2` varchar(200) NOT NULL,
  `MATH_3` varchar(200) NOT NULL,
  `MATH_E` varchar(200) NOT NULL,
  `MATHS_T` varchar(200) NOT NULL,
  `MATH_G` varchar(200) NOT NULL,
  `MATH_RMK` varchar(200) NOT NULL,
  `BSC_1` varchar(200) NOT NULL,
  `BSC_2` varchar(200) NOT NULL,
  `BSC_3` varchar(200) NOT NULL,
  `BSC_E` varchar(200) NOT NULL,
  `BSC_T` varchar(200) NOT NULL,
  `BSC_G` varchar(200) NOT NULL,
  `BSC_RMK` varchar(200) NOT NULL,
  `ENG_1` varchar(200) NOT NULL,
  `ENG_2` varchar(200) NOT NULL,
  `ENG_3` varchar(200) NOT NULL,
  `ENG_E` varchar(200) NOT NULL,
  `ENG_T` varchar(200) NOT NULL,
  `ENG_G` varchar(200) NOT NULL,
  `ENG_RMK` varchar(200) NOT NULL,
  `WR_1` varchar(200) NOT NULL,
  `WR_2` varchar(200) NOT NULL,
  `WR_3` varchar(200) NOT NULL,
  `WR_E` varchar(200) NOT NULL,
  `WR_T` varchar(200) NOT NULL,
  `WR_G` varchar(200) NOT NULL,
  `WR_RMK` varchar(200) NOT NULL,
  `HAB_1` varchar(200) NOT NULL,
  `HAB_2` varchar(200) NOT NULL,
  `HAB_3` varchar(200) NOT NULL,
  `HAB_E` varchar(200) NOT NULL,
  `HAB_T` varchar(200) NOT NULL,
  `HAB_G` varchar(200) NOT NULL,
  `HAB_RMK` varchar(200) NOT NULL,
  `SOS_1` varchar(200) NOT NULL,
  `SOS_2` varchar(200) NOT NULL,
  `SOS_3` varchar(200) NOT NULL,
  `SOS_E` varchar(200) NOT NULL,
  `SOS_T` varchar(200) NOT NULL,
  `SOS_G` varchar(200) NOT NULL,
  `SOS_RMK` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ADM_NO` (`ADM_NO`,`PIN`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_sec_third`
--

INSERT INTO `result_sec_third` (`ID`, `ADM_NO`, `FNAME`, `LNAME`, `PIN`, `CLASS`, `SEX`, `TERM`, `SESSION`, `TOTAL_SCORE`, `OUT_OFF`, `OVERALL_PERCENT`, `POSITION`, `NO_CLASS`, `NO_SUBJECTS`, `SCH_OPEN`, `SCH_ABS`, `TEACHER_RPT`, `HM_REMARK`, `SCH_RESUME`, `INFO`, `CRS_1`, `CRS_2`, `CRS_3`, `CRS_E`, `CRS_T`, `CRS_G`, `CRS_RMK`, `MATH_1`, `MATH_2`, `MATH_3`, `MATH_E`, `MATHS_T`, `MATH_G`, `MATH_RMK`, `BSC_1`, `BSC_2`, `BSC_3`, `BSC_E`, `BSC_T`, `BSC_G`, `BSC_RMK`, `ENG_1`, `ENG_2`, `ENG_3`, `ENG_E`, `ENG_T`, `ENG_G`, `ENG_RMK`, `WR_1`, `WR_2`, `WR_3`, `WR_E`, `WR_T`, `WR_G`, `WR_RMK`, `HAB_1`, `HAB_2`, `HAB_3`, `HAB_E`, `HAB_T`, `HAB_G`, `HAB_RMK`, `SOS_1`, `SOS_2`, `SOS_3`, `SOS_E`, `SOS_T`, `SOS_G`, `SOS_RMK`) VALUES
(1, '2014169', 'ROLAND', 'EGHEOSE DIVINE', '1179828266', 'JUNIOR-HIGH-SCH2', 'FEMALE', 'third', '2017/2018', '505', '700', '72.142857142857', '', '20', '7', '120', '5', 'satisfactory', 'satisfactory', '11/09/2018', 'nil', '15', '9', '9', '40', '73', 'B2', 'GOOD', '13', '7', '6', '35', '61', 'C6', 'CREDIT', '19', '10', '10', '50', '89', 'A1', 'EXCELLENTT', '11', '5', '5', '30', '51', 'C6', 'CREDIT', '6', '7', '8', '60', '81', 'A1', 'EXCELLENTT', '5', '7', '9', '55', '76', 'B2', 'GOOD', '16', '8', '6', '44', '74', 'B2', 'GOOD');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

DROP TABLE IF EXISTS `story`;
CREATE TABLE IF NOT EXISTS `story` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `PINS` varchar(200) NOT NULL,
  `REG` varchar(200) NOT NULL,
  `SURNAME` varchar(200) NOT NULL,
  `OTHERNAME` varchar(200) NOT NULL,
  `SEX` varchar(200) NOT NULL,
  `DOB` varchar(200) NOT NULL,
  `GENOTYPE` varchar(200) NOT NULL,
  `AGE` varchar(200) NOT NULL,
  `ACA_SESSION` varchar(200) NOT NULL,
  `PARENT_NAME` varchar(200) NOT NULL,
  `PARENT_MOBILE` varchar(200) NOT NULL,
  `NATIONALITY` varchar(200) NOT NULL,
  `ENTRY_CLASS` varchar(200) NOT NULL,
  `PARENT_ADDRESS` varchar(200) NOT NULL,
  `PARENT_OCCUPATION` varchar(200) NOT NULL,
  `PICS` varchar(200) NOT NULL,
  `ENTRY_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `PINS` (`PINS`),
  UNIQUE KEY `REG` (`REG`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`ID`, `PINS`, `REG`, `SURNAME`, `OTHERNAME`, `SEX`, `DOB`, `GENOTYPE`, `AGE`, `ACA_SESSION`, `PARENT_NAME`, `PARENT_MOBILE`, `NATIONALITY`, `ENTRY_CLASS`, `PARENT_ADDRESS`, `PARENT_OCCUPATION`, `PICS`, `ENTRY_DATE`) VALUES
(1, '1111156727', '2014001', 'HARUNA', 'OLAYEA', 'MALE', '01/13/2009', 'AA', '5', '2017/2018', 'MR. PETUKOWA', '080454546646', 'NIGERIA', 'TODDLER', 'benin city nigeria', 'BUSINESS TYCOON', 'uploads/af.jpg', '2017-06-11 14:05:10'),
(2, '1111457798', '2014002', 'AYENI', 'OLAYEA', 'MALE', '01/13/2009', 'AA', '7', '2017/2018', 'MR. PETUKOWA', '080454546646', 'GHANAIAN', 'CRECHE', 'LAGOS NIGERIA', 'BUSINESS TYCOON', 'uploads/chikepasport.jpg', '2017-06-11 14:07:51'),
(3, '1112351888', '2014003', 'EDO-EMOVON', 'OLAYE', 'FEMALE', '01/25/2015', 'AS', '9', '2017/2018', 'MR. HARUNA', '080', 'GHANAIAN', 'PRE-SCH1', 'KOGI', 'BUSINESS MAN', 'uploads/new.jpg', '2017-06-11 14:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `student_bio`
--

DROP TABLE IF EXISTS `student_bio`;
CREATE TABLE IF NOT EXISTS `student_bio` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `PINS` varchar(200) NOT NULL,
  `REG` varchar(200) NOT NULL,
  `SURNAME` varchar(200) NOT NULL,
  `OTHERNAME` varchar(200) NOT NULL,
  `SEX` varchar(200) NOT NULL,
  `DOB` varchar(200) NOT NULL,
  `GENOTYPE` varchar(200) NOT NULL,
  `AGE` varchar(200) NOT NULL,
  `ACA_SESSION` varchar(200) NOT NULL,
  `PARENT_NAME` varchar(200) NOT NULL,
  `PARENT_MOBILE` varchar(200) NOT NULL,
  `NATIONALITY` varchar(200) NOT NULL,
  `ENTRY_CLASS` varchar(200) NOT NULL,
  `PARENT_ADDRESS` varchar(200) NOT NULL,
  `PARENT_OCCUPATION` varchar(200) NOT NULL,
  `PICS` varchar(200) NOT NULL,
  `ENTRY_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `PINS` (`PINS`),
  UNIQUE KEY `REG` (`REG`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_bio`
--

INSERT INTO `student_bio` (`ID`, `PINS`, `REG`, `SURNAME`, `OTHERNAME`, `SEX`, `DOB`, `GENOTYPE`, `AGE`, `ACA_SESSION`, `PARENT_NAME`, `PARENT_MOBILE`, `NATIONALITY`, `ENTRY_CLASS`, `PARENT_ADDRESS`, `PARENT_OCCUPATION`, `PICS`, `ENTRY_DATE`) VALUES
(1, '1211823894', '2014116', 'IDAHOSA', 'OZEMWOGIE', 'MALE', '13/7/2013', 'AA', '4', '2017/2018', 'OSASIENMEN  IDAHOSA', '07035093923', 'NIGERIAN', 'PRE-SCH2', '1, FAWVIS AVENUE, OFF OSAGIE, LUCKY WAY, BENIN CITY, EDO STATE', 'LAWYER', 'uploads/100.jpg', '2017-10-16 08:59:09'),
(2, '1210929804', '2014051', 'IDAHOSA', 'OSAGIODUWA', 'MALE', '21/6/2011', 'AS', '6', '2017/2018', 'OSASIENMEN  IDAHOSA', '07035093923', 'NIGERIAN', 'BASIC 1', '1, FAWVIS AVENUE, OFF OSAGIE STREET, LUCKY WAY, BENIN CITY, EDO STATE', 'LAWYER', 'uploads/2007.jpg', '2017-10-16 09:05:52'),
(3, '1147257867', '2014020', 'Aduruo', 'chukwusom', 'FEMALE', '2009-05-18', 'AS', '8', '2017/2018', 'Mr okeychukwu Aduruo', '08055470840', 'NIGERIAN', 'BASIC 3', '6, UNITY STREET, OFF UPPER MISSION EXTENSION', 'BUSINESS', 'uploads/CHISOM.jpg', '2017-10-18 09:29:17'),
(5, '1179828266', '2014169', 'ROLAND', 'EGHEOSE DIVINE', 'FEMALE', '23/09/2006', 'AA', '11', '2017/2018', 'IGBITI ROLAND', '08078590177', 'NIGERIAN', 'JUNIOR-HIGH-SCH2', 'AMOWIE AVENUE, OFF BEN IMADE, LUCKY WAY BENIN CITY, EDO STATE', 'CIVIL SERVANT', 'uploads/IMG_20170723_091017.jpg', '2017-10-24 19:28:46'),
(7, '1179317358', '2014167', 'Diego', 'mmesoma  faith', 'FEMALE', '2006-08-16', 'AA', '11', '2017/2018', 'mr/mrs kingsley', '07036614050', 'nigeira', 'JUNIOR-HIGH-SCH2', 'No  6,ewan street, off Utah,upper  mission road', 'whole saler', 'uploads/', '2017-10-31 17:11:07'),
(13, '1256765571', '106', 'AKHIGBE', 'EROMOSELE', 'MALE', '2013-11-06', 'AA', '3', '2017/2018', 'MR. and MRS. AUGUSTINE AKHIGBE', '07054387916      or         08077682907', 'NIGERIAN', 'PRE-SCH2', '8, Osayahrion street, off upper mission extension, Benin City.', 'BUSINESS', 'uploads/', '2017-11-01 18:44:26'),
(14, '1253161843', '101', 'DUMBIRI', 'CHIKA', 'FEMALE', '2012-12-14', 'AA', '4', '2017/2018', 'MR. and MRS. ELUEME DUMBIRI', '08038238102   and     08034860509', 'NIGERIAN', 'PRE-SCH2', '17, Ewa Street, off Upper Mission Extension, Benin City.', 'BUSINESS', 'uploads/', '2017-11-01 18:51:33'),
(15, '1265898055', '185', 'ENWEREM', 'PURITY', 'FEMALE', '2013-11-30', 'AA', '3', '2017/2018', 'MR. and  MRS. MOSES ENWEREM', '08107996933  and   07065203277', 'NIGERIAN', 'PRE-SCH2', '', 'BUSINESS', 'uploads/', '2017-11-01 18:56:21'),
(16, '1231229283', '074', 'ATU-OSAGIE', 'JAMES        ETINOSA', 'MALE', '2012-12-22', 'AA', '4', '2017/2018', 'MR.  and  MRS.  OSCARPEDRO  ATU-OSAGIE', '08055060204    and     07031310564', 'NIGERIAN', 'PRE-SCH3', '15, Oba Erediawa Street, Uteh Quarter, off Upper mission Extension, Benin City.', 'Construtor', 'uploads/', '2017-11-01 19:03:58'),
(17, '1231247530', '075', 'ATU-OSAGIE', 'JEREMIAH     IKPOMWOSA', 'MALE', '2012-12-22', 'AA', '4', '2017/2018', 'MR.  and  MRS.  OSCARPEDRO  ATU-OSAGIE', '08055060204    and     07031310564', 'NIGERIAN', 'PRE-SCH3', '15, Oba Erediawa street, Uteh quarter off upper mission Extension,Benin City', 'Construtor', 'uploads/', '2017-11-01 19:09:47'),
(18, '1233665220', '078', 'ONWUASOANYA', 'DANIEL', 'MALE', '2012-06-28', 'AA', '5', '2017/2018', 'MR.  and    MRS.  UGOCHUKWU  ONWUASOANYA', '08186745852', 'NIGERIAN', 'PRE-SCH3', '10, Christ light church street, off uteh, Benin city', 'BUSINESS', 'uploads/', '2017-11-01 19:19:00'),
(19, '1197126159', '056', 'ONWUASOANYA', 'EMMANUEL', 'MALE', '2011-01-21', 'AA', '6', '2017/2018', 'MR.  and    MRS.  UGOCHUKWU  ONWUASOANYA', '08186745852', 'NIGERIAN', 'BASIC 1', '10, Christ light church street off uteh, Benin City.', 'BUSINESS', 'uploads/', '2017-11-01 19:24:49'),
(20, '1133353865', '010', 'ROLAND', 'DELIGHT   EBOSETALE', 'FEMALE', '2009-05-21', 'AA', '8', '2017/2018', 'MR. and  MRS. ROLAND ITOYA IGBITI', '08078590177', 'NIGERIAN', 'BASIC 4', '5, Amowie Avenue off Unity street off upper mission extension, Benin City.', 'CIVIL SERVANT', 'uploads/', '2017-11-01 19:32:58'),
(21, '1122296351', '006', 'OMOREGBEE', 'ETIOSA   ELVIS', 'MALE', '2005-04-26', 'AS', '13', '2017/2018', 'MR.  and  MRS.  FELIX OMOREGBEE', '08037213916     and     08071222022', 'NIGERIAN', 'BASIC 4', '2, Kadiru street, off Benin Auchi road, Benin city.', 'ELECTRICAL', 'uploads/', '2017-11-01 19:40:33'),
(22, '1118692624', '2014003', 'OSARETIN', 'DESTINY', 'MALE', '2009-01-14', 'AA', '8', '2017/2018', 'MR.  and  MRS. FRIDAY OSARETIN', '09069403069', 'NIGERIAN', 'BASIC 4', '', 'TRADER', 'uploads/', '2017-11-01 19:46:18'),
(23, '1112890166', '2014001', 'DIEGO', 'CHINONSO  KINGSLEY', 'MALE', '2008-04-26', 'AA', '9', '2017/2018', 'MR.  and  MRS. DIEGO', '07036614050', 'NIGERIAN', 'BASIC 4', '27, Unity street, Benin city', 'BUSINESS', 'uploads/', '2017-11-01 19:53:22'),
(25, '1126137286', '008', 'OVBOKHAN', 'OSASERE   FAITH', 'FEMALE', '2009-05-02', 'AA', '8', '2017/2018', 'MR.  and  MRS.  OVBOKHAN', '08053144967,   08187835935', 'NIGERIAN', 'BASIC 4', '29, Amokone street, off upper mission, uteh, Benin city', 'TEACHER', 'uploads/', '2017-11-01 08:08:44'),
(26, '1115964739', '2014002', 'ODION', 'BEST', 'MALE', '2007-11-16', 'AA', '9', '2017/2018', 'MR. and  MRS.  SAMILY ODION', '08056576493', 'NIGERIAN', 'BASIC 4', '41, unity street, off upper mission extension, Benin City.', 'the Nigeria Legion', 'uploads/', '2017-11-01 08:17:57'),
(27, '1138873498', '013', 'OSAGHEA', 'PRISCA', 'FEMALE', '2008-02-26', 'AA', '9', '2017/2018', 'MR. and  MRS.  ISRAEL', '08034251323', 'NIGERIAN', 'BASIC 4', '2, Lucky way place road, Benin city.', 'TRADER', 'uploads/', '2017-11-01 08:28:50'),
(29, '1138262233', '012', 'ENUKOHA', 'EBUBE   MARVELLOUS', 'MALE', '2009-04-07', 'AA', '8', '2017/2018', 'MR.  and  MRS.  MATTHIES  ENUKOHA', '08037833628', 'NIGERIAN', 'BASIC 4', '', 'PASTOR', 'uploads/', '2017-11-01 08:46:43'),
(30, '1144539106', '017', 'DIKE', 'MARTHA', 'FEMALE', '2006-02-14', 'AA', '11', '2017/2018', 'MR. and  MRS.  FRANCIS DIKE', '07051189232', 'NIGERIAN', 'BASIC 5', '', 'CATERING', 'uploads/', '2017-11-01 08:58:17'),
(31, '1145305468', '2014018', 'OGBURIE', 'ONYINYECH', 'FEMALE', '2006-09-24', 'AA', '11', '2017/2018', 'MRS OGBURIE', '08036626103', 'NIGERIAN', 'BASIC 5', '', 'BUSINESS', 'uploads/', '2017-11-01 09:25:52'),
(32, '1192382011', '2014050', 'IBEBUIKE', 'PAUL TOCHUKWU', 'MALE', '2010-07-28', 'AA', '7', '2017/2018', 'LEONARD IBEBUIKE', '08095028474  /  08171156062', 'NIGERIAN', 'BASIC 1', '', 'BUSINESS', 'uploads/', '2017-11-01 09:31:22'),
(33, '1144356638', '2014016', 'OLELE', 'ANDERSON OSE', 'MALE', '2006-10-12', 'AA', '11', '2017/2018', 'MRS PEGGY OLELE', '08030930950  /   08031171833', 'NIGERIAN', 'BASIC 5', '', 'HAIR DRESSES', 'uploads/', '2017-11-01 09:38:44'),
(34, '1144110308', '2014015', 'OKEKE', 'CHIMAOBI', 'MALE', '2011-05-19', 'AA', '7', '2017/2018', 'MRS JULIET', '08036667535', 'NIGERIAN', 'BASIC 5', '', 'BUSINESS', 'uploads/', '2017-11-01 09:43:56'),
(35, '1205200334', '2014061', 'EJE', 'BLESSING', 'FEMALE', '2011-07-27', 'AA', '6', '2017/2018', 'MR. and  MRS. PRECIOUS EJE', '08071215523,    09096150145', 'NIGERIAN', 'BASIC 1', '61, Upper mission extension, Benin City.', 'BUSINESS', 'uploads/', '2017-11-01 09:50:48'),
(36, '1251419281', '098', 'EJE', 'PEACE', 'FEMALE', '2013-03-06', 'AA', '4', '2017/2018', 'MR. and  MRS. PRECIOUS EJE', '08071215523,  09096150145', 'NIGERIAN', 'PRE-SCH2', '61, Upper mission extension. Benin city', 'BUSINESS', 'uploads/', '2017-11-01 09:59:30'),
(37, '1304216172', '136', 'EJE', 'JOCELYN  E.', 'FEMALE', '2014-08-15', 'AA', '3', '2017/2018', 'MR. and  MRS. PRECIOUS EJE', '08071215523,    09096150145', 'NIGERIAN', 'SELECT', '61 Upper mission extension, Benin City.', 'BUSINESS', 'uploads/', '2017-11-01 10:05:17'),
(38, '1305393085', '137', 'ANTHONY', 'ENOGIE, PRINCESS', 'FEMALE', '2015-02-17', 'AA', '2', '2017/2018', 'MR. and  MRS. LUCIOUS ANTHONY', '08011111111', 'NIGERIAN', 'PRE-SCH1', '35, Uteh Road Off Upper Mission Extension, Benin City.', 'BUSINESS', 'uploads/', '2017-11-02 09:03:55'),
(39, '1274729469', '149', 'JOSEPH', 'CHUKWUDI', 'MALE', '2015-04-19', 'AA', '2', '2017/2018', 'MR. and MRS. JOSEPH', '08132882283,  09038611800', 'NIGERIAN', 'TODDLER', '33, Osasebor street off mother Mary way upper mission Extension, Benin City.', 'TRANSPORTER', 'uploads/', '2017-11-02 09:10:07'),
(40, '1200884984', '059', 'AGUEGWU', 'CHIZARAM,  BLESSING', 'FEMALE', '2012-05-13', 'AA', '5', '2017/2018', 'MR. and MRS.  MICHAEL AGUEGWU', '08035353623,   08032957054', 'NIGERIAN', 'BASIC 1', '39, OMOREIGIE STREET OFF UPPER MISSION EXTENSION, BENIN CITY', 'SELF EMPLOYED', 'uploads/', '2017-11-02 09:14:59'),
(41, '1208694581', '064', 'IMADIYI', 'ESOSA,   FAVOUR', 'FEMALE', '2011-09-30', 'AA', '6', '2017/2018', 'MR. and MRS. SABE IMADIYI', '08063801906,  08146018584', 'NIGERIAN', 'BASIC 1', '23, OBA EREDIAWA WAY, BENIN CITY.', 'BUSINESS', 'uploads/', '2017-11-02 09:19:23'),
(42, '1297875436', '131', 'AGUEGWU', 'CHINENYE,   ANNASTACIA', 'FEMALE', '2014-07-06', 'AA', '3', '2017/2018', 'MR. and MRS.  MICHAEL AGUEGWU', '08035353623,   08032957054', 'NIGERIAN', 'PRE-SCH1', '39, OMOREIGIE STREET OFF UPPER MISSION EXTENSION, BENIN CITY.', 'SELF EMPLOYED', 'uploads/', '2017-11-02 09:23:15'),
(43, '1198321319', '058', 'OMOREGBEE', 'DANIEL,   OROBOSA', 'MALE', '2008-07-30', 'AA', '9', '2017/2018', 'MR. and MRS. FELIX OMOREGBEE', '08037213916     and     08071222022', 'NIGERIAN', 'BASIC 1', '2, KADIRU STREET OFF EYAEN BY 2+2, BENIN CITY.', 'BUSINESS, TRADER', 'uploads/', '2017-11-02 09:28:44'),
(44, '1225855623', '072', 'CHIKA', 'CHIMAMANDA,  EMMANUELLA', 'FEMALE', '2012-11-01', 'AA', '5', '2017/2018', 'MR. and MRS. CHINONYE CHIKA', '08035547518, 08066748220', 'NIGERIAN', 'BASIC 1', 'HOUSE 2B ALARI STREET OFF ZICO GAS ADUWAWA, BENIN CITY', 'BUSINESS', 'uploads/', '2017-11-02 09:37:09'),
(45, '1218119013', '067', 'UHUNOMA', 'ANABEL', 'FEMALE', '2012-05-07', 'AA', '5', '2017/2018', 'MR. and MRS. HENRY UHUNOMA', '08051102319,  08093158230', 'NIGERIAN', 'BASIC 1', 'OSARO STREET OFF PALACE ROAD UTEH, BENIN CITY', 'DRIVER', 'uploads/', '2017-11-02 09:41:10'),
(46, '1339441469', '187', 'UHUNOMA', 'ANITA', 'FEMALE', '2015-10-24', 'AA', '2', '2017/2018', 'MR. and MRS. HENRY UHUNOMA', '08051102319,  08093158230', 'NIGERIAN', 'SELECT', 'OSARO STREET, OFF PALACE ROAD UTEH, BENIN CITY', 'DRIVER', 'uploads/', '2017-11-02 09:44:51'),
(47, '1260351052', '111', 'UHUNOMA', 'REX', 'MALE', '2013-10-20', 'AA', '4', '2017/2018', 'MR. and MRS. HENRY UHUNOMA', '08051102319,  08093158230', 'NIGERIAN', 'PRE-SCH2', 'OSARO STREET OFF PALACE ROAD UTEH, BENIN CITY.', 'DRIVER', 'uploads/', '2017-11-02 09:50:22'),
(48, '1338136828', '186', 'CHIDIEBERE', 'SUCCESS,  CHINWENDU', 'FEMALE', '2010-09-27', 'AA', '7', '2017/2018', 'MR. and MRS. CHIDIEBERE  MMADUEKE', '08159426195,  09061711004', 'NIGERIAN', 'BASIC 1', '8, EBOIGBE STREET OFF UTEH, BENIN CITY.', 'BUSINESS', 'uploads/', '2017-11-02 09:56:05'),
(49, '1177994471', '046', 'CHIDIEBERE', 'MIRACLE, IFEANYI', 'MALE', '2013-01-15', 'AA', '4', '2017/2018', 'MR. and MRS. CHIDIEBERE  MMADUEKE', '08159426195,  09061711004', 'NIGERIAN', 'PRE-SCH2', '8, EBOIGBE STREET OFF UTEH, BENIN CITY.', 'BUSINESS', 'uploads/', '2017-11-02 10:00:45'),
(50, '1220919885', '071', 'AMADASUN', 'ITOHAN', 'FEMALE', '2011-11-07', 'AA', '6', '2017/2018', 'MR. and MRS. BRIGHT AMADASUN', '07032113099,  08032105639', 'NIGERIAN', 'BASIC 1', '20, OMOGWE STREET OFF BENIN TECHNICAL COLLEGE ROAD UGBOWO, BENIN CITY', 'DRIVER', 'uploads/', '2017-11-02 10:06:05'),
(51, '1204132900', '060', 'EDOKPOLOR', 'UKI,  SUCCESS', 'FEMALE', '2012-06-12', 'AA', '5', '2017/2018', 'MR. and MRS. E. EDOKPOLOR', '08083070161,  08026183821', 'NIGERIAN', 'BASIC 1', '20, UNITY STREET, UTEH, BENIN CITY.', 'CIVIL SERVANT', 'uploads/', '2017-11-02 10:11:55'),
(52, '1195994862', '054', 'OSARO', 'DIVINE', 'MALE', '2009-10-24', 'AS', '8', '2017/2018', 'MR. and MRS. SUNDAY OSARO', '08092558080', 'NIGERIAN', 'BASIC 1', '35, BEN-IMADE, OFF UPPER MISSION EXTENSION, BENIN CITY.', 'BUSINESS', 'uploads/', '2017-11-02 10:17:00'),
(53, '1242067836', '088', 'OMOZUWA', 'ETINOSA,   SONIA', 'FEMALE', '09/14/2012', 'AA', '5', '2017/2018', 'MR. and MRS. OSAROBO OMOZUWA', '08054384648,  08157822981', 'NIGERIAN', 'PRE-SCH3', '23, Rev-sharp Avenue, off Amakone street, Benin City.', 'BUSINESS', 'uploads/', '2017-11-06 17:56:01'),
(54, '1307573569', '140', 'IRECHUKWU', 'CHIEMERE,  ELIJAH', 'MALE', '04/26/2012', 'AA', '5', '2017/2018', 'MR. and MRS. SOMADINA IRECHUKWU', '08084978853,  08125128732', 'NIGERIAN', 'PRE-SCH1', '5, Osazuwa street, Benin city.', 'BUSINESS', 'uploads/', '2017-11-06 18:04:44'),
(55, '1297984916', '132', 'ANEGBE', 'OSEMUDIAMEN', 'FEMALE', '09/02/2014', 'AA', '3', '2017/2018', 'MR. and MRS. FIDELIS ANEGBE', '08035421612,  07062394131', 'NIGERIAN', 'PRE-SCH1', 'STREET 3, off palace road, uteh, Benin City.', 'CLERGY MAN', 'uploads/', '2017-11-06 18:14:11'),
(56, '1316386736', '147', 'OMORUYI', 'JOSHUA,  OSAGIE', 'MALE', '06/09/2015', 'AA', '7', '2017/2018', 'MR. and MRS. CHRISTOPHER OMORUYI', '08036749040, 07030910675', 'NIGERIAN', 'TODDLER', 'OSAYANRUOH STREET', 'CAR DEALER', 'uploads/', '2017-11-06 18:25:32'),
(57, '1326176102', '158', 'IGBO', 'CHIDERE, MICHAEL', 'MALE', '09/16/2015', 'AA', '2', '2017/2018', 'MR. and MRS. KENNETH IGBO', '07061101801,  08131986662', 'NIGERIAN', 'TODDLER', '1, Irowa street, off lucky way, uteh, Benin city.', 'BUSINESS', 'uploads/', '2017-11-06 18:29:37'),
(58, '1358390690', '183', 'OSAIGBOVO', 'OSAYIMWENSE,  GIFT', 'FEMALE', '06/29/2014', 'AA', '3', '2017/2018', 'MR. and MRS. SATURDAY OSAIGBOVO', '08039133913, 08062358143', 'NIGERIAN', 'PRE-SCH1', '8, Johnny bobo street, uteh quarters, Benin City', 'I.T PERSONNEL', 'uploads/', '2017-11-06 18:37:42'),
(61, '1359567604', '188', 'OSAIGBOVO', 'AIZEYOSABO,  DIVINE', 'MALE', '02/17/2016', 'AA', '1', '2017/2018', 'MR. and MRS. SATURDAY OSAIGBOVO', '08039133913, 08062358143', 'NIGERIAN', 'TODDLER', '8, Johnny bobo street, uteh quarters, Benin city.', 'I.T PERSONNEL', 'uploads/', '2017-11-06 18:47:18'),
(62, '1272804440', '159', 'OKONKWO', 'IKESINACHI,  HENRY', 'MALE', '07/09/2015', 'AA', '2', '2017/2018', 'MR. and MRS. IKECHUKWU OKONKWO', '08035003379,   08145846731', 'NIGERIAN', 'TODDLER', '23, Ewan street, Benin City.', 'BUSINESS', 'uploads/', '2017-11-06 18:53:17'),
(63, '1234814764', '083', 'IRABOR', 'DAVID,  MARK', 'MALE', '07/01/2012', 'AA', '5', '2017/2018', 'MR. and MRS. OSAHON IRABOR', '07064778027, 07039500010', 'NIGERIAN', 'PRE-SCH3', '6, Ogudugu street, Benin City.', 'FARMING', 'uploads/', '2017-11-06 18:59:27'),
(64, '1322736595', '156', 'OGBEMUDIA', 'OGHOSASERE,  JOHANNA', 'FEMALE', '04/18/2015', 'AA', '2', '2017/2018', 'MR. and MRS. OROBOSA J. OGBEMUDIA', '08056514988,  08056496081', 'NIGERIAN', 'TODDLER', '5, Ehighalua street, iwogban quarter, off lucky way, Benin City.', 'BUSINESS', 'uploads/', '2017-11-06 19:06:37'),
(65, '1253170966', '102', 'OGBEMUDIA', 'OSAIVBIE,  JUANITA', 'FEMALE', '04/10/2013', 'AA', '4', '2017/2018', 'MR. and MRS. OROBOSA J. OGBEMUDIA', '08056514988,  08056496081', 'NIGERIAN', 'PRE-SCH2', '5, Ehighalua, street, iwogban quarter, off lucky way, Benin City.', 'BUSINESS', 'uploads/', '2017-11-06 19:14:17'),
(66, '1275140020', '118', 'EMEKA', 'CHINOSO,  STEPHANE', 'MALE', '08/06/2014', 'AA', '3', '2017/2018', 'MR. and MRS. EMEKA', '08039539083, 07032149088', 'NIGERIAN', 'PRE-SCH1', '3, Ewan street, Benin city.', 'BUSINESS', 'uploads/', '2017-11-06 19:23:02'),
(67, '1318147544', '150', 'EMEKA', 'CHINENYEWA,  STEPHANIE', 'FEMALE', '10/18/2015', 'AA', '2', '2017/2018', 'MR. and MRS. EMEKA', '08039539083, 07032149088', 'NIGERIAN', 'TODDLER', '3, Ewan street, Benin city.', 'BUSINESS', 'uploads/', '2017-11-06 19:28:34'),
(68, '1171973052', '041', 'NORUWA', 'FAVOUR,  ALEX', 'FEMALE', '11/04/2009', 'AA', '8', '2017/2018', 'MR. and MRS. ALEX', '09081051296,  07065864797', 'NIGERIAN', 'BASIC 2', '27, Amakone street, off uteh, ikpoba hill, Benin city', 'BUSINESS', 'uploads/', '2017-11-06 19:37:46'),
(69, '1317070988', '148', 'NORUWA', 'MIRACLE,  ALEX', 'FEMALE', '10/29/2015', 'AA', '2', '2017/2018', 'MR. and MRS. ALEX', '09081051296,  07065864797', 'NIGERIAN', 'TODDLER', '27, Amakone street, off uteh ikpoba hill, Benin City.', 'BUSINESS', 'uploads/', '2017-11-06 19:41:37'),
(70, '1147148387', '019', 'ALDOPHOEUS', 'PRECIOUS,  CHIAMAKA', 'FEMALE', '10/29/2011', 'AS', '6', '2017/2018', 'MR. and MRS. PETER ALDOPHOEUS', '08087425326,  07033990823', 'NIGERIAN', 'BASIC 3', 'UNITY', 'WOOD WORK', 'uploads/', '2017-11-06 19:50:28'),
(76, '1153397889', '2014023', 'EZEKIEL', 'PETER', 'MALE', '01/01/2017', 'AA', '8', '2017/2018', 'MRS  ESE EZEKIEL', '08109351366', 'NIGERIAN', 'BASIC 3', '3, OKINRI CLOSE , UTEH BENIN CITY', 'BRICK LAYER', 'uploads/', '2017-11-06 09:08:33'),
(77, '1153799317', '2014024', 'ODIGIE', 'LEGEND', 'MALE', '09/10/2008', 'AA', '9', '2017/2018', 'ISIBOR ODIGIE', '080616308449/08144104975', 'NIGERIAN', 'BASIC 3', '', 'BUSINESS', 'uploads/', '2017-11-06 09:12:39'),
(78, '1194224930', '2014052', 'OBOH', 'OSAGBEMWENRHUE  POSSIBLE', 'MALE', '15/10/2011', 'AA', '6', '2017/2018', 'E.O NOSA', '07069373665/08053212696', 'NIGERIAN', 'BASIC 1', 'AMAKONE STREET, OFF OGIEOBA ROAD UTEH QUARTER', 'CIVIL SERVANT', 'uploads/', '2017-11-06 09:16:54'),
(79, '1207061499', '2014062', 'EJIDIEKE', 'RITA', 'FEMALE', '01/04/2011', 'AA', '6', '2017/2018', 'MRS EJIDIEKE', '08051561885', 'NIGERIAN', 'BASIC 1', '', 'MECHANICAL ENGIEER', 'uploads/', '2017-11-06 09:21:59'),
(80, '1160961156', '2014033', 'EJIDIEKE', 'EMMANUEL CHIKAMSO', 'MALE', '02/04/2009', 'AA', '8', '2017/2018', 'MRS EJIDIEKE', '08051561885', 'NIGERIAN', 'BASIC 2', '', 'MECHANICAL ENGIEER', 'uploads/', '2017-11-06 09:34:34'),
(81, '1321851629', '2014155', 'NOSAKHARE', 'IWINOSA', 'FEMALE', '01/03/2015', 'AA', '2', '2017/2018', 'BRIGHT NOSAKHARE', '08032105639/07032113099', 'NIGERIAN', 'TODDLER', '20, OMOGWE STREET, OFF BENIN TECHNICAL SCHOOL ROAD, BENIN CITY', 'DRIVER', 'uploads/', '2017-11-06 09:43:25'),
(85, '1302993641', '2014135', 'ROLAND', 'EROMOSELE  DOMINION', 'MALE', '21/02/2013', 'AA', '4', '2017/2018', 'MR ROLAND', '08151892968', 'NIGERIAN', 'PRE-SCH1', '5,AMOWIE AVENUE OFF BEN-IMADE, BENIN CITY', 'CIVIL SERVANT', 'uploads/', '2017-11-06 10:42:04'),
(86, '1181534335', '2014175', 'EDEBOR', 'UWA SILVIA', 'FEMALE', '18/08/2005', 'AA', '12', '2017/2018', 'FRIDAY EDEBOR', '07034251825', 'NIGERIAN', 'JUNIOR-HIGH-SCH2', '', 'PASTOR', 'uploads/', '2017-11-06 10:46:06'),
(88, '1187482766', '2014181', 'NZEAKA', 'CHIOMA BLESSING', 'FEMALE', '10/04/2004', 'AA', '13', '2017/2018', 'MR NZEAKA', '07032473736', 'NIGERIAN', 'JUNIOR-HIGH-SCH1', '', 'TRADER', 'uploads/', '2017-11-06 10:54:45'),
(91, '1240589851', '2014087', 'OGBEIFUN', 'OFURE,  SOPHIA', 'FEMALE', '04/01/2013', 'AA', '4', '2017/2018', 'MR. and MRS. EZEKIEL OGBEIFUN', '08075958026,  08165216678', 'NIGERIAN', 'PRE-SCH3', '5, Etinosa street, off upper mission extension, Benin City.', 'BUSINESS', 'uploads/', '2017-11-07 08:28:16'),
(93, '1284299875', '2014124', 'OSAREYE', 'ETINOSA', 'FEMALE', '31/08/2014', 'AA', '3', '2017/2018', 'MRS OSAREYE', '07033751540', 'NIGERIAN', 'PRE-SCH1', '1,KENNETH IGBINOVIA LANE OFF PAULINGO, UPPER MISION EXTENSION', 'CIVIL SERVANT', 'uploads/', '2017-11-07 09:11:01'),
(94, '1286297891', '2014125', 'OSAREYE', 'ESOSA', 'FEMALE', '31/08/2014', 'AA', '3', '2017/2018', 'MRS OSAREYE', '07033751540', 'NIGERIAN', 'PRE-SCH1', '1, KENNETH LAN OFF IGBINOVIA', 'CIVIL SERVANT', 'uploads/', '2017-11-07 09:14:06'),
(95, '1245279259', '2014090', 'OSAREYE', 'ABIEYUWA', 'FEMALE', '10/12/2012', 'AA', '5', '2017/2018', 'MRS OSAREYE', '07033751540', 'NIGERIAN', 'PRE-SCH3', '', 'CIVIL SERVANT', 'uploads/', '2017-11-07 09:17:40'),
(97, '1191159481', '2014049', 'EZEKIEL', 'DANIEL', 'MALE', '07/01/2010', 'AA', '7', '2017/2018', 'MR. and MRS. OKINGI EZEKIEL', '08109351366', 'NIGERIAN', 'BASIC 1', '1, Okingi close, uteh, Benin city.', 'BUILDER', 'uploads/', '2017-11-07 09:32:32'),
(98, '1263398254', '2014113', 'DIEGO', 'EBUBE', 'MALE', '10/14/2012', 'AA', '5', '2017/2018', 'MR. and MRS. KINGSLEY DIEGO', '07036614050', 'NIGERIAN', 'PRE-SCH3', '23, Ewan street, upper mission road, uteh, Benin city.', 'TRADER', 'uploads/', '2017-11-07 09:47:32'),
(99, '1287712012', '2014128', 'EROMOSELE', 'PREVAIL OBEHI', 'FEMALE', '2014-05-22', 'AA', '3', '2017/2018', 'MR BOBBY EROMOSELE', '08091718382', 'NIGERIAN', 'PRE-SCH1', '', 'BUSINESS', 'uploads/', '2017-11-23 15:46:26'),
(103, '1179335605', '2014168', 'HENRY', 'OFURE PEACE', 'FEMALE', '2004-04-09', 'AA', '13', '2017/2018', 'MR AND MRS AKHIME HENRY', '08056736118', 'NIGERIA', 'JUNIOR-HIGH-SCH2', 'UTEH COMMUNITY', 'CIVIL SERVANT', 'uploads/', '2017-11-23 16:27:58'),
(108, '1181817159', '2014173', 'ODION', 'EFOSA KINGSLEY', 'MALE', '2006-01-11', 'AA', '11', '2017/2018', 'MR AND MRS ODION', '08056576493', 'NIGERIAN', 'JUNIOR-HIGH-SCH2', 'UTEH COMMUNITY', 'CIVIL ENGINEER', 'uploads/', '2017-11-23 16:34:39'),
(109, '1182911962', '2014174', 'GODWIN', 'VICTOR', 'MALE', '2005-01-14', 'AA', '12', '2017/2018', 'MR AND MRS GODWIN', '08171231067', 'NIGERIAN', 'JUNIOR-HIGH-SCH2', 'UTEH COMMUNITY', 'BUSINESS', 'uploads/', '2017-11-23 16:38:00'),
(110, '1179883007', '2014171', 'OMOREGBE', 'FAVOUR OSAZEE VICTORY', 'MALE', '2002-04-19', 'AA', '15', '2017/2018', 'MR AND MRA OMOREGBE', '08071222022', 'NIGERIAN', 'JUNIOR-HIGH-SCH2', 'EHEA COMMUNITY', 'ELECTRICAL ENGINEER', 'uploads/', '2017-11-23 16:41:44'),
(113, '1185357023', '2014177', 'OBOH', 'PREVAIL OSARUDION', 'MALE', '2008-08-10', 'AA', '9', '2017/2018', 'MR/MRS OBOH', '09090782343', 'NIGERIAN', 'JUNIOR-HIGH-SCH1', 'UTEH COMMUNITY', 'CIVIL SERVANT', 'uploads/', '2017-11-23 16:57:20'),
(114, '1186324100', '2014178', 'ODARO', 'FAVOUR OBOSA', 'MALE', '2007-06-27', 'AA', '10', '2017/2018', 'BECKY EGBON', '+393510119840', 'NIGERIAN', 'JUNIOR-HIGH-SCH1', 'BEN-IMADE', 'BUSINESS', 'uploads/', '2017-11-23 17:02:39'),
(120, '1183997642', '2014194', 'ASIRUWA', 'MASTER EGHOSA', 'MALE', '2004-06-01', 'SS', '13', '2017/2018', 'MR AND MRS ASIRUWA', '09030195179', 'NIGERIAN', 'JUNIOR-HIGH-SCH1', 'STREET 11, PALACE ROAD', 'BUSINESS', 'uploads/', '2017-11-23 17:14:13'),
(121, '1185192803', '2014176', 'IBEBUIKE', 'MARVELOUS OKECHUKWU', 'MALE', '2003-10-01', 'AA', '14', '2017/2018', 'MR LEONARD IBEBUIKE', '08171156062', 'NIGERIAN', 'JUNIOR-HIGH-SCH1', 'UTEH COMMUNITY', 'BUSINESS', 'uploads/', '2017-11-23 17:17:22'),
(122, '1259383975', '2014154', 'JAMES', 'MUNACHIMSO PECULIAR', 'MALE', '2012-11-14', 'AA', '5', '2017/2018', 'sunday james', '08069307160/08069307160', 'NIGERIAN', 'PRE-SCH3', 'LUCKY WAY ROAD', 'BUSINESS', 'uploads/', '2017-11-23 17:32:13'),
(123, '1233674344', '2014081', 'OKEKE', 'EBUBE', 'MALE', '2012-10-13', 'AA', '5', '2017/2018', 'JULIET OKEKE', '08036667535', 'NIGERIAN', 'PRE-SCH3', 'BEN-IMADE QUATERS', 'BUSINESS', 'uploads/', '2017-11-23 17:52:42'),
(124, '1195274117', '2014053', 'OGBURIE', 'SIMON', 'MALE', '2012-09-26', 'AA', '5', '2017/2018', 'MRS MARYJANE OGBURIE', '08036626103', 'NIGERIAN', 'BASIC 1', 'UTEH COMMUNITY', 'BUSINESS', 'uploads/', '2017-11-23 17:55:55'),
(125, '1277247516', '2014140', 'OSAYANDE', 'PURITY', 'FEMALE', '2014-08-22', 'AA', '3', '2017/2018', 'MR OSAYANDE', '08052052290', 'NIGERIAN', 'PRE-SCH1', 'BEN-IMADE QUARTERS', 'BUSINESS', 'uploads/', '2017-11-23 18:04:00'),
(126, '1308239574', '2014141', 'CHIMAOBI', 'JOSHUA', 'MALE', '2014-02-05', 'AA', '3', '2017/2018', 'MR CHIMAOBI', '08032181259', 'NIGERIAN', 'PRE-SCH1', 'BEN-IMADE QUARTERS', 'BUSINESS', 'uploads/', '2017-11-23 18:07:55'),
(127, '1333201090', '2014162', 'CHIMAOBI', 'DIVINE', 'FEMALE', '2015-10-07', 'AA', '2', '2017/2018', 'MR CHIMAOBI', '08032181259', 'NIGERIAN', 'TODDLER', 'BEN-IMADE QUARTERS', 'BUSINESS', 'uploads/', '2017-11-23 18:12:17'),
(128, '1279665207', '2014121', 'BEN-IMADE', 'PRINCE', 'MALE', '2014-10-10', 'AA', '3', '2017/2018', 'MRS BEN-IMADE', '08037403996', 'NIGERIAN', 'PRE-SCH1', 'BEN-IMADE QUARTERS', 'BUSINESS', 'uploads/', '2017-11-23 18:15:56'),
(129, '1162621607', '2014034', 'Edebor Friday', 'Great osamede', 'MALE', '2009-09-28', 'AA', '8', '2017/2018', 'Pastor Friday Edebor', '08165704020', 'Nigeria', 'BASIC 2', 'No 39 Benimade street off upper mission extension Benincity Edostate', 'Pastor', 'uploads/', '2017-11-27 15:04:44'),
(133, '1158652945', '2014029', 'Alohan', 'Larry', 'MALE', '2008-06-18', 'AA', '9', '2017/2018', 'Mr. and Mrs. Henry Alohan', '08058263645', 'NIGERIAN', 'BASIC 3', '15, Irowa street, off mission Extension, Benin city.', 'Welding', 'uploads/', '2017-11-28 17:31:18'),
(134, '1158525218', '2014028', 'Agbamuchi', 'Kelvin', 'MALE', '2009-01-18', 'AA', '8', '2017/2018', 'Mr. and Mrs. Agbamuchi', '08056534638', 'NIGERIAN', 'BASIC 3', '', 'TRADER', 'uploads/', '2017-11-28 17:36:04'),
(135, '1158205901', '2014026', 'OGBURIE', 'Paul  Chinaza', 'MALE', '2010-02-17', 'AA', '7', '2017/2018', 'Mr. and Mrs. Fidelis Ogburie', '08036626103,    08035038520', 'NIGERIAN', 'BASIC 3', 'unity street, uteh', 'BUSINESS', 'uploads/', '2017-11-28 17:43:36'),
(136, '1158324504', '2014027', 'Aliu', 'Success,    Eshiofe', 'MALE', '2008-07-07', 'AA', '9', '2017/2018', 'Mr. and Mrs. Aliu', '07036565655', 'NIGERIAN', 'BASIC 3', '24 Amakone street, off upper mission road extension, uteh, Benin City.', 'Banker', 'uploads/', '2017-11-28 17:49:15'),
(137, '1160295150', '2014031', 'Odiase', 'Ayewosa', 'MALE', '2007-05-01', 'AA', '10', '2017/2018', 'Mr. and Mrs. Odiase', '07037976102,  08104181316', 'NIGERIAN', 'BASIC 3', 'uteh', 'Banker', 'uploads/', '2017-11-28 17:52:49'),
(139, '1160869922', '2014032', 'IBEBUIKE', 'Anthony,    Izuchukwu', 'MALE', '2006-07-28', 'AA', '11', '2017/2018', 'Mr. and Mrs. Leonard Ibebuike', '08095028474,   080171156062', 'NIGERIAN', 'BASIC 3', 'uteh', 'TRADER', 'uploads/', '2017-11-28 18:13:31'),
(140, '1129257476', '009', 'EROMOSELE', 'QUINCY', 'FEMALE', '2009-11-18', 'AA', '8', '2017/2018', 'MR EROMOSELE', '08091718382', 'Nigeria', 'BASIC 4', 'MOTHER MARY WAY, UPPER MISSION EXTENSION, BENIN CITY', 'NIL', 'uploads/', '2017-12-01 08:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `student_bio_18`
--

DROP TABLE IF EXISTS `student_bio_18`;
CREATE TABLE IF NOT EXISTS `student_bio_18` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `PIN` varchar(255) NOT NULL,
  `REG` varchar(200) NOT NULL,
  `SURNAME` varchar(200) NOT NULL,
  `OTHERNAME` varchar(200) NOT NULL,
  `SEX` varchar(200) NOT NULL,
  `DOB` varchar(200) NOT NULL,
  `GENOTYPE` varchar(200) NOT NULL,
  `AGE` varchar(200) NOT NULL,
  `ACA_SESSION` varchar(200) NOT NULL,
  `PARENT_NAME` varchar(200) NOT NULL,
  `PARENT_MOBILE` varchar(200) NOT NULL,
  `NATIONALITY` varchar(200) NOT NULL,
  `ENTRY_CLASS` varchar(200) NOT NULL,
  `PARENT_ADDRESS` varchar(200) NOT NULL,
  `PARENT_OCCUPATION` varchar(200) NOT NULL,
  `PICS` varchar(200) NOT NULL,
  `ENTRY_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `REG` (`REG`),
  UNIQUE KEY `PIN` (`PIN`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
