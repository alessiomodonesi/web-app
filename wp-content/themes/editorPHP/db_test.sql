-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 11, 2023 alle 12:34
-- Versione del server: 10.4.27-MariaDB
-- Versione PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `objects`
--

CREATE TABLE `objects` (
  `ID` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `first_name` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `last_name` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `position` varchar(29) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(28) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `office` varchar(13) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `extn` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `objects`
--

INSERT INTO `objects` (`ID`, `first_name`, `last_name`, `position`, `email`, `office`, `extn`, `age`, `salary`, `start_date`) VALUES
('row_1', 'Tiger', 'Nixon', 'System Architect', 't.nixon@datatables.net', 'Edinburgh', 5421, 61, 320800, '2011-04-25 00:00:00'),
('row_10', 'Sonya', 'Frost', 'Software Engineer', 's.frost@datatables.net', 'Edinburgh', 1667, 23, 103600, '2008-12-13 00:00:00'),
('row_11', 'Jena', 'Gaines', 'Office Manager', 'j.gaines@datatables.net', 'London', 3814, 30, 90560, '2008-12-19 00:00:00'),
('row_12', 'Quinn', 'Flynn', 'Support Lead', 'q.flynn@datatables.net', 'Edinburgh', 9497, 22, 342000, '2013-03-03 00:00:00'),
('row_13', 'Charde', 'Marshall', 'Regional Director', 'c.marshall@datatables.net', 'San Francisco', 6741, 36, 470600, '2008-10-16 00:00:00'),
('row_14', 'Haley', 'Kennedy', 'Senior Marketing Designer', 'h.kennedy@datatables.net', 'London', 3597, 43, 313500, '2012-12-18 00:00:00'),
('row_15', 'Tatyana', 'Fitzpatrick', 'Regional Director', 't.fitzpatrick@datatables.net', 'London', 1965, 19, 385750, '2010-03-17 00:00:00'),
('row_16', 'Michael', 'Silva', 'Marketing Designer', 'm.silva@datatables.net', 'London', 1581, 66, 198500, '2012-11-27 00:00:00'),
('row_17', 'Paul', 'Byrd', 'Chief Financial Officer (CFO)', 'p.byrd@datatables.net', 'New York', 3059, 64, 725000, '2010-06-09 00:00:00'),
('row_18', 'Gloria', 'Little', 'Systems Administrator', 'g.little@datatables.net', 'New York', 1721, 59, 237500, '2009-04-10 00:00:00'),
('row_19', 'Bradley', 'Greer', 'Software Engineer', 'b.greer@datatables.net', 'London', 2558, 41, 132000, '2012-10-13 00:00:00'),
('row_2', 'Garrett', 'Winters', 'Accountant', 'g.winters@datatables.net', 'Tokyo', 8422, 63, 170750, '2011-07-25 00:00:00'),
('row_20', 'Dai', 'Rios', 'Personnel Lead', 'd.rios@datatables.net', 'Edinburgh', 2290, 35, 217500, '2012-09-26 00:00:00'),
('row_21', 'Jenette', 'Caldwell', 'Development Lead', 'j.caldwell@datatables.net', 'New York', 1937, 30, 345000, '2011-09-03 00:00:00'),
('row_22', 'Yuri', 'Berry', 'Chief Marketing Officer (CMO)', 'y.berry@datatables.net', 'New York', 6154, 40, 675000, '2009-06-25 00:00:00'),
('row_23', 'Caesar', 'Vance', 'Pre-Sales Support', 'c.vance@datatables.net', 'New York', 8330, 21, 106450, '2011-12-12 00:00:00'),
('row_24', 'Doris', 'Wilder', 'Sales Assistant', 'd.wilder@datatables.net', 'Sydney', 3023, 23, 85600, '2010-09-20 00:00:00'),
('row_25', 'Angelica', 'Ramos', 'Chief Executive Officer (CEO)', 'a.ramos@datatables.net', 'London', 5797, 47, 1200000, '2009-10-09 00:00:00'),
('row_26', 'Gavin', 'Joyce', 'Developer', 'g.joyce@datatables.net', 'Edinburgh', 8822, 42, 92575, '2010-12-22 00:00:00'),
('row_27', 'Jennifer', 'Chang', 'Regional Director', 'j.chang@datatables.net', 'Singapore', 9239, 28, 357650, '2010-11-14 00:00:00'),
('row_28', 'Brenden', 'Wagner', 'Software Engineer', 'b.wagner@datatables.net', 'San Francisco', 1314, 28, 206850, '2011-06-07 00:00:00'),
('row_29', 'Fiona', 'Green', 'Chief Operating Officer (COO)', 'f.green@datatables.net', 'San Francisco', 2947, 48, 850000, '2010-03-11 00:00:00'),
('row_3', 'Ashton', 'Cox', 'Junior Technical Author', 'a.cox@datatables.net', 'San Francisco', 1562, 66, 86000, '2009-01-12 00:00:00'),
('row_30', 'Shou', 'Itou', 'Regional Marketing', 's.itou@datatables.net', 'Tokyo', 8899, 20, 163000, '2011-08-14 00:00:00'),
('row_31', 'Michelle', 'House', 'Integration Specialist', 'm.house@datatables.net', 'Sydney', 2769, 37, 95400, '2011-06-02 00:00:00'),
('row_32', 'Suki', 'Burks', 'Developer', 's.burks@datatables.net', 'London', 6832, 53, 114500, '2009-10-22 00:00:00'),
('row_33', 'Prescott', 'Bartlett', 'Technical Author', 'p.bartlett@datatables.net', 'London', 3606, 27, 145000, '2011-05-07 00:00:00'),
('row_34', 'Gavin', 'Cortez', 'Team Leader', 'g.cortez@datatables.net', 'San Francisco', 2860, 22, 235500, '2008-10-26 00:00:00'),
('row_35', 'Martena', 'Mccray', 'Post-Sales support', 'm.mccray@datatables.net', 'Edinburgh', 8240, 46, 324050, '2011-03-09 00:00:00'),
('row_36', 'Unity', 'Butler', 'Marketing Designer', 'u.butler@datatables.net', 'San Francisco', 5384, 47, 85675, '2009-12-09 00:00:00'),
('row_37', 'Howard', 'Hatfield', 'Office Manager', 'h.hatfield@datatables.net', 'San Francisco', 7031, 51, 164500, '2008-12-16 00:00:00'),
('row_38', 'Hope', 'Fuentes', 'Secretary', 'h.fuentes@datatables.net', 'San Francisco', 6318, 41, 109850, '2010-02-12 00:00:00'),
('row_39', 'Vivian', 'Harrell', 'Financial Controller', 'v.harrell@datatables.net', 'San Francisco', 9422, 62, 452500, '2009-02-14 00:00:00'),
('row_4', 'Cedric', 'Kelly', 'Senior Javascript Developer', 'c.kelly@datatables.net', 'Edinburgh', 6224, 22, 433060, '2012-03-29 00:00:00'),
('row_40', 'Timothy', 'Mooney', 'Office Manager', 't.mooney@datatables.net', 'London', 7580, 37, 136200, '2008-12-11 00:00:00'),
('row_41', 'Jackson', 'Bradshaw', 'Director', 'j.bradshaw@datatables.net', 'New York', 1042, 65, 645750, '2008-09-26 00:00:00'),
('row_42', 'Olivia', 'Liang', 'Support Engineer', 'o.liang@datatables.net', 'Singapore', 2120, 64, 234500, '2011-02-03 00:00:00'),
('row_43', 'Bruno', 'Nash', 'Software Engineer', 'b.nash@datatables.net', 'London', 6222, 38, 163500, '2011-05-03 00:00:00'),
('row_44', 'Sakura', 'Yamamoto', 'Support Engineer', 's.yamamoto@datatables.net', 'Tokyo', 9383, 37, 139575, '2009-08-19 00:00:00'),
('row_45', 'Thor', 'Walton', 'Developer', 't.walton@datatables.net', 'New York', 8327, 61, 98540, '2013-08-11 00:00:00'),
('row_46', 'Finn', 'Camacho', 'Support Engineer', 'f.camacho@datatables.net', 'San Francisco', 2927, 47, 87500, '2009-07-07 00:00:00'),
('row_47', 'Serge', 'Baldwin', 'Data Coordinator', 's.baldwin@datatables.net', 'Singapore', 8352, 64, 138575, '2012-04-09 00:00:00'),
('row_48', 'Zenaida', 'Frank', 'Software Engineer', 'z.frank@datatables.net', 'New York', 7439, 63, 125250, '2010-01-04 00:00:00'),
('row_49', 'Zorita', 'Serrano', 'Software Engineer', 'z.serrano@datatables.net', 'San Francisco', 4389, 56, 115000, '2012-06-01 00:00:00'),
('row_5', 'Airi', 'Satou', 'Accountant', 'a.satou@datatables.net', 'Tokyo', 5407, 33, 162700, '2008-11-28 00:00:00'),
('row_50', 'Jennifer', 'Acosta', 'Junior Javascript Developer', 'j.acosta@datatables.net', 'Edinburgh', 3431, 43, 75650, '2013-02-01 00:00:00'),
('row_51', 'Cara', 'Stevens', 'Sales Assistant', 'c.stevens@datatables.net', 'New York', 3990, 46, 145600, '2011-12-06 00:00:00'),
('row_52', 'Hermione', 'Butler', 'Regional Director', 'h.butler@datatables.net', 'London', 1016, 47, 356250, '2011-03-21 00:00:00'),
('row_53', 'Lael', 'Greer', 'Systems Administrator', 'l.greer@datatables.net', 'London', 6733, 21, 103500, '2009-02-27 00:00:00'),
('row_54', 'Jonas', 'Alexander', 'Developer', 'j.alexander@datatables.net', 'San Francisco', 8196, 30, 86500, '2010-07-14 00:00:00'),
('row_55', 'Shad', 'Decker', 'Regional Director', 's.decker@datatables.net', 'Edinburgh', 6373, 51, 183000, '2008-11-13 00:00:00'),
('row_56', 'Michael', 'Bruce', 'Javascript Developer', 'm.bruce@datatables.net', 'Singapore', 5384, 29, 183000, '2011-06-27 00:00:00'),
('row_57', 'Donna', 'Snider', 'Customer Support', 'd.snider@datatables.net', 'New York', 4226, 27, 112000, '2011-01-25 00:00:00'),
('row_6', 'Brielle', 'Williamson', 'Integration Specialist', 'b.williamson@datatables.net', 'New York', 4804, 61, 372000, '2012-12-02 00:00:00'),
('row_7', 'Herrod', 'Chandler', 'Sales Assistant', 'h.chandler@datatables.net', 'San Francisco', 9608, 59, 137500, '2012-08-06 00:00:00'),
('row_8', 'Rhona', 'Davidson', 'Integration Specialist', 'r.davidson@datatables.net', 'Tokyo', 6200, 55, 327900, '2010-10-14 00:00:00'),
('row_9', 'Colleen', 'Hurst', 'Javascript Developer', 'c.hurst@datatables.net', 'San Francisco', 2360, 39, 205500, '2009-09-15 00:00:00');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `objects`
--
ALTER TABLE `objects`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
