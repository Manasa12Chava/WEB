-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 30, 2018 at 03:53 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `register1`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(256) NOT NULL,
  `birthday` varchar(256) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` text NOT NULL,
  `usn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `birthday`, `gender`, `email`, `phone`, `usn`) VALUES
('test2', '01/10/2018', 'Other', 'test1@gmail.com', '1234567890', '1PE15CS033');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register` ADD FULLTEXT KEY `phone` (`phone`);
