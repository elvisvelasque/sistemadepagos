-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 09:50 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bilal`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(1, 'noel.titus', '2016-10-24 09:12:05', 'Add Class Form 6'),
(2, 'noel.titus', '2016-10-24 09:12:58', 'Edit Class Form 6'),
(3, 'noel.titus', '2016-10-24 09:15:07', 'Add Student aaa bbb'),
(4, 'noel.titus', '2016-10-24 09:15:36', 'Updated Student aaa bbb'),
(5, 'noel.titus', '2016-10-24 09:17:50', 'Add Student buel bol'),
(6, 'noel.titus', '2016-10-24 09:23:17', 'Add User abdul.hemedy');

-- --------------------------------------------------------

--
-- Table structure for table `aprjun`
--

CREATE TABLE `enero` (
  `enero_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `febrero` (
  `febrero_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `marzo` (
  `marzo_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `abril` (
  `abril_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `mayo` (
  `mayo_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `junio` (
  `junio_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `julio` (
  `julio_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `agosto` (
  `agosto_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `setiembre` (
  `setiembre_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `octubre` (
  `octubre_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `noviembre` (
  `noviembre_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `diciembre` (
  `diciembre_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aprjun`


-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `fee` int(20) NOT NULL,
  `row` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(12, '3 INIC', 'INICIAL', 150,1);

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(13, '4 INIC', 'INICIAL', 150,2);

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(14, '5 INIC', 'INICIAL', 150,3);

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(1, '1RO PRIM', 'PRIMARIA', 250,4);

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(2, '2DO PRIM', 'PRIMARIA', 250,5);

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(3, '3RO PRIM', 'PRIMARIA', 250,6);

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(4, '4TO PRIM', 'PRIMARIA', 250,7);

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(5, '5TO PRIM', 'PRIMARIA', 250,8);

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(6, '6TO PRIM', 'PRIMARIA', 250,9);

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(7, '1RO SEC', 'SECUNDARIA', 250,10);

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(8, '2DO SEC', 'SECUNDARIA', 250,11);

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(9, '3RO SEC', 'SECUNDARIA', 250,12);

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(10, '4TO SEC', 'SECUNDARIA', 250,13);

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`,`row`) VALUES
(11, '5TO SEC', 'SECUNDARIA', 250,14);


-- --------------------------------------------------------
--
-- Table structure for table `payment_made`
--

CREATE TABLE `payment_made` (
  `pay_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `period` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_of_payment` date NOT NULL,
  `receipt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_made`

-- --------------------------------------------------------
-- Creando tablas
CREATE TABLE `TODO_PAGOS` (
  `todo_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `TODO_PAGOS` (`todo_id`, `student_id`, `month`, `estado`) VALUES
(1, 1, 'marzo', '1'),
(2, 1, 'abril', '1'),
(3, 1, 'mayo', '1'),
(4, 1, 'junio', '1'),
(5, 1, 'julio', '1'),
(6, 1, 'agosto', '1'),
(7, 1, 'setiembre', '1'),
(8, 1, 'octubre', '1'),
(9, 1, 'noviembre', '1'),
(10, 1, 'diciembre', '1'),
(11, 2, 'marzo', '1'),
(12, 2, 'abril', '1'),
(13, 2, 'mayo', '1'),
(14, 2, 'junio', '1'),
(15, 2, 'julio', '1'),
(16, 2, 'agosto', '1'),
(17, 2, 'setiembre', '1'),
(18, 2, 'octubre', '1'),
(19, 2, 'noviembre', '1'),
(20, 2, 'diciembre', '1');



CREATE TABLE `ULTIMO_DIA_MES` (
  `udm_id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `ultimo_dia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ULTIMO_DIA_MES` (`udm_id`, `month`, `ultimo_dia`) VALUES
(1,'marzo', '2018-03-31'),
(2,'abril', '2018-04-30'),
(3,'mayo', '2018-05-31'),
(4,'junio', '2018-06-30'),
(5,'julio', '2018-07-31'),
(6,'agosto', '2018-08-31'),
(7, 'setiembre', '2018-09-30'),
(8,'octubre', '2018-10-31'),
(9,'noviembre', '2018-11-30'),
(10,'diciembre', '2018-12-31');
--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30),
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `gfirstname` varchar(25) NOT NULL,
  `gmiddlename` varchar(25) NOT NULL,
  `glastname` varchar(25) NOT NULL,
  `rship` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `transport` varchar(60) NOT NULL,
  `route` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `firstname`, `middlename`, `lastname`, `gender`, `dob`, `address`, `class`, `gfirstname`, `gmiddlename`, `glastname`, `rship`, `tel`, `status`, `transport`, `route`) VALUES
(1, 'ALEX', 'FERNANDO', 'VELASQUE ESPINOZA', 'Masculino', '2001-10-25', 'Mz A2 Lt 16', '1RO PRIM', 'LUCIA', 'ROSA', 'PANDO JIMENEZ', 'MAMA', '0789554433', 'paying', 'no', 'kijichi'),
(2, 'JUANITA', 'MARIA', 'SALAZAR GOMEZ', 'Femenino', '2000-10-25', 'Mz A2 Lt 15', '2dO PRIM', 'RITA', 'FRIDA', 'TRUJILLO PEREZ', 'MAMA', '0789554433', 'paying', 'no', 'kijichi');

-- -------------------------------------------------------


-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `status`) VALUES
(3, 'noel.titus', '54321', 'noel', 'titus', 'administrator'),
(4, 'admin', 'admin123', 'admin', 'admin', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `login_date` varchar(50) NOT NULL,
  `logout_date` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`) VALUES
(1, 'noel.titus', '2016-10-24 09:10:07', '2016-10-24 09:23:20', 3),
(2, 'noel.titus', '2016-10-24 09:11:10', '2016-10-24 09:23:20', 3),
(3, 'noel.titus', '2016-10-24 09:23:04', '2016-10-24 09:23:20', 3);
--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for month table 
--
ALTER TABLE `enero`
  ADD PRIMARY KEY (`enero_id`);
ALTER TABLE `febrero`
  ADD PRIMARY KEY (`febrero_id`);
ALTER TABLE `marzo`
  ADD PRIMARY KEY (`marzo_id`);
ALTER TABLE `abril`
  ADD PRIMARY KEY (`abril_id`);
ALTER TABLE `mayo`
  ADD PRIMARY KEY (`mayo_id`);
ALTER TABLE `junio`
  ADD PRIMARY KEY (`junio_id`);
ALTER TABLE `julio`
  ADD PRIMARY KEY (`julio_id`);
ALTER TABLE `agosto`
  ADD PRIMARY KEY (`agosto_id`);
ALTER TABLE `setiembre`
  ADD PRIMARY KEY (`setiembre_id`);
ALTER TABLE `octubre`
  ADD PRIMARY KEY (`octubre_id`);
ALTER TABLE `noviembre`
  ADD PRIMARY KEY (`noviembre_id`);
ALTER TABLE `diciembre`
  ADD PRIMARY KEY (`diciembre_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `payment_made`
--
ALTER TABLE `payment_made`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

ALTER TABLE `todo_pagos`
  ADD PRIMARY KEY (`todo_id`);

ALTER TABLE `ULTIMO_DIA_MES`
  ADD PRIMARY KEY (`udm_id`);

--
-- AUTO_INCREMENT for dumped tables
--
ALTER TABLE `todo_pagos`
  MODIFY `todo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `aprjun`
--
ALTER TABLE `enero`
  MODIFY `enero_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `febrero`
  MODIFY `febrero_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `janmar`
--
ALTER TABLE `abril`
  MODIFY `abril_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `julsep`
--
ALTER TABLE `marzo`
  MODIFY `marzo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `octdec`
--
ALTER TABLE `mayo`
  MODIFY `mayo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `junio`
  MODIFY `junio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `julio`
  MODIFY `julio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `agosto`
  MODIFY `agosto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `setiembre`
  MODIFY `setiembre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `octubre`
  MODIFY `octubre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `noviembre`
  MODIFY `noviembre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `diciembre`
  MODIFY `diciembre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment_made`
--
ALTER TABLE `payment_made`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
insert into `marzo` (`student_id`,`class`,`class_fee`,`status`,`status_fee`,`fee`) values
(1,'1RO PRIM','250','paying','250','0'),
(2,'2DO PRIM','250','paying','250','0');

insert into `abril` (`student_id`,`class`,`class_fee`,`status`,`status_fee`,`fee`) values
(1,'1RO PRIM','250','paying','250','0'),
(2,'2DO PRIM','250','paying','250','0');

insert into `mayo` (`student_id`,`class`,`class_fee`,`status`,`status_fee`,`fee`) values
(1,'1RO PRIM','250','paying','250','0'),
(2,'2DO PRIM','250','paying','250','0');

insert into `junio` (`student_id`,`class`,`class_fee`,`status`,`status_fee`,`fee`) values
(1,'1RO PRIM','250','paying','250','0'),
(2,'2DO PRIM','250','paying','250','0');

insert into `julio` (`student_id`,`class`,`class_fee`,`status`,`status_fee`,`fee`) values
(1,'1RO PRIM','250','paying','250','0'),
(2,'2DO PRIM','250','paying','250','0');

insert into `agosto` (`student_id`,`class`,`class_fee`,`status`,`status_fee`,`fee`) values
(1,'1RO PRIM','250','paying','250','0'),
(2,'2DO PRIM','250','paying','250','0');

insert into `setiembre` (`student_id`,`class`,`class_fee`,`status`,`status_fee`,`fee`) values
(1,'1RO PRIM','250','paying','250','0'),
(2,'2DO PRIM','250','paying','250','0');

insert into `octubre` (`student_id`,`class`,`class_fee`,`status`,`status_fee`,`fee`) values
(1,'1RO PRIM','250','paying','250','0'),
(2,'2DO PRIM','250','paying','250','0');

insert into `noviembre` (`student_id`,`class`,`class_fee`,`status`,`status_fee`,`fee`) values
(1,'1RO PRIM','250','paying','250','0'),
(2,'2DO PRIM','250','paying','250','0');

insert into `diciembre` (`student_id`,`class`,`class_fee`,`status`,`status_fee`,`fee`) values
(1,'1RO PRIM','250','paying','250','0'),
(2,'2DO PRIM','250','paying','250','0');
