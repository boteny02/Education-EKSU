-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 01:55 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_name` text COLLATE utf8_unicode_ci NOT NULL,
  `book_author` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `book_category` int(11) NOT NULL,
  `stock_qty` int(11) NOT NULL DEFAULT '0',
  `borrow_qty` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `book_author`, `book_category`, `stock_qty`, `borrow_qty`, `created_at`, `updated_at`) VALUES
(1, 'Girl with the Dragon Tattoo', 'Stieg Larsson', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(2, 'And Then There Were None', 'Agatha Christie', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(3, 'Angels & Demons', 'Dan Brown', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(4, 'Perfume: The Story of a Murderer', 'Patrick Süskind', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(5, 'Rebecca', 'Daphne du Maurier', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(6, 'In Cold Blood', 'Truman Capote', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(7, 'The Lovely Bones', 'Alice Sebold', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(8, 'The Firm \n', 'John Grisham', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(9, 'Shutter Island', 'Dennis Lehane', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(10, 'The Name of the Rose', 'Umberto Eco', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(11, 'Mystic River', 'Dennis Lehane', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(12, 'The Shadow of the Wind', 'Carlos Ruiz Zafón', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(13, 'The Alienist', 'Caleb Carr', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(14, 'Gone Girl', 'Gillian Flynn', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(15, 'The Big Sleep', 'Raymond Chandler', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(16, 'One for the Money', 'Janet Evanovich', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(17, 'The Maltese Falcon', 'Dashiell Hammett', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(18, 'Midnight in the Garden of Good and Evil', 'John Berendt', 1, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(19, 'Memoirs of a Geisha', 'Arthur Golden', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(20, 'Gone with the Wind', 'Margaret Mitchell', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(21, 'The Pillars of the Earth', 'Ken Follett', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(22, 'The Book Thief', 'Markus Zusak', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(23, 'A Tale of Two Cities', 'Charles Dickens', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(24, 'Girl with a Pearl Earring', 'Tracy Chevalier', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(25, 'The Thorn Birds', 'Colleen McCullough', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(26, 'The Clan of the Cave Bear', 'Jean M. Auel', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(27, 'The Name of the Rose', 'Umberto Eco', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(28, 'The Historian', 'Elizabeth Kostova', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(29, 'Snow Flower and the Secret Fan', 'Lisa See', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(30, 'The Scarlet Letter', 'Nathaniel Hawthorne', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(31, 'The Color Purple', 'Alice Walker', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-14 01:14:31'),
(32, 'The Shadow of the Wind', 'Carlos Ruiz Zafón', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(33, 'Lonesome Dove', 'Larry McMurtry', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(34, 'Cold Mountain', 'Charles Frazier', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(35, 'Year of Wonders', 'Geraldine Brooks', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(36, 'The Crucible', 'Arthur Miller', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(37, 'Atonement', 'Ian McEwan', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(38, 'The Alchemist', 'Paulo Coelho', 2, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(39, 'Dark Lover', 'J.R. Ward', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(40, 'Twilight', 'Stephenie Meyer', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(41, 'Halfway to the Grave', 'Jeaniene Frost', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(42, 'Darkfever', 'Karen Marie Moning', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(43, 'Dead Until Dark', 'Charlaine Harris', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(44, 'City of Bones', 'Cassandra Clare', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(45, 'Moon Called', 'Patricia Briggs', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(46, 'Hush, Hush', 'Becca Fitzpatrick', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(47, 'Angels\' Blood', 'Nalini Singh', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(48, 'The Darkest Night', 'Gena Showalter', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(49, 'Magic Bites', 'Ilona Andrews', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(50, 'Slave to Sensation', 'Nalini Singh', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(51, 'Marked', 'P.C. Cast', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(52, 'Kiss of Midnight', 'Lara Adrian', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(53, 'Clockwork Angel', 'Cassandra Clare', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(54, 'Cry Wolf', 'Patricia Briggs', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(55, 'Fallen', 'Lauren Kate', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(56, 'The Warlord Wants Forever', 'Kresley Cole', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(57, 'Bitten', 'Kelley Armstrong', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(58, 'Bloodlines', 'Richelle Mead', 3, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(59, 'Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(60, 'City of Bones', 'Cassandra Clare', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(61, 'Divergent', 'Veronica Roth', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(62, 'The Lightning Thief', 'Rick Riordan', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(63, 'The Hunger Games', 'Suzanne Collins', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(64, 'Twilight', 'Stephenie Meyer', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(65, 'A Game of Thrones', 'George R.R. Martin', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(66, 'Clockwork Angel', 'Cassandra Clare', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(67, 'Vampire Academy', 'Richelle Mead', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(68, 'The Fellowship of the Ring', 'J.R.R. Tolkien', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(69, 'The Lost Hero', 'Rick Riordan', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(70, 'Eragon', 'Christopher Paolini', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(71, 'The Maze Runner', 'James Dashner', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(72, 'The Selection', 'Kiera Cass', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(73, 'Graceling', 'Kristin Cashore', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(74, 'The Golden Compass', 'Philip Pullman', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(75, 'Outlander', 'Diana Gabaldon', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(76, 'Matched', 'Ally Condie', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(77, 'The Red Pyramid', 'Rick Riordan', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(78, 'Dark Lover', 'J.R. Ward', 4, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(79, 'The Shining', 'Stephen King', 5, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(80, 'It', 'Stephen King', 5, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(81, 'Salem\'s Lot', 'Stephen King', 5, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(82, 'Pet Sematary', 'Stephen King', 5, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(83, 'Misery', 'Stephen King', 5, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(84, 'Carrie', 'Stephen King', 5, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(85, 'Dracula', 'Bram Stoker', 5, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(86, 'The Exorcist', 'William Peter Blatty', 5, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(87, 'The Haunting of Hill House', 'Shirley Jackson', 5, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(88, 'The Silence of the Lambs', 'Thomas Harris', 5, 25, 0, '2018-04-16 07:22:22', '2018-04-26 05:30:01'),
(89, 'Jurassic Park', 'Michael Crichton', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-26 05:29:50'),
(90, 'The Hobbit', 'J.R.R. Tolkien', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-26 05:29:31'),
(91, 'The Hunger Games', 'Suzanne Collins', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(92, 'The Fellowship of the Ring', 'J.R.R. Tolkien', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(93, 'The Da Vinci Code', 'Dan Brown', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(94, 'The Bourne Identity', 'Robert Ludlum', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-26 05:29:24'),
(95, 'A Game of Thrones', 'George R.R. Martin', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(96, 'The Return of the King', 'J.R.R. Tolkien', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(97, 'Patriot Games', 'Tom Clancy', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-26 05:29:19'),
(98, 'The Three Musketeers', 'Alexandre Dumas', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(99, 'Ice Station', 'Matthew Reilly', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(100, 'Black Order', 'James Rollins', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-26 05:28:55'),
(101, 'Seven Deadly Wonders', 'Matthew Reilly', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(102, 'World Without End', 'Ken Follett', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-26 05:28:47'),
(103, 'Harry Potter and the Deathly Hallows', 'J.K. Rowling', 6, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(104, 'The Bridges of Constantine', 'Ahlam Mosteghanemi', 7, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(105, 'ثلاثية غرناطة', 'رضوى عاشور', 7, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(106, 'حوار مع صديقي الملحد', 'مصطفى محمود', 7, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(107, 'حول العالم في 200 يوم', 'أنيس منصور', 7, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(108, 'الرحيق المختوم', 'Safiy al-Rahman al-Mubarakfuri', 7, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(109, 'أولاد حارتنا', 'نجيب محفوظ', 7, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(110, 'رحلتي من الشك إلى الإيمان', 'مصطفى محمود', 7, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(111, 'تراب الماس', 'أحمد مراد', 7, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(112, 'الحرافيش', 'Naguib Mahfouz', 7, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(113, 'شيكاجو', 'Alaa Al Aswany', 7, 25, 0, '2018-04-16 07:22:22', '2018-04-14 00:39:47'),
(114, 'منہاج العابدین', 'Al Madinat-ul-Ilmiyah', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(115, 'ধন-ভান্ডারের স্তুপ', 'Ameer-e-Ahl-e-Sunnat', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(116, 'Riyad-us-Saliheen', 'Riyad-us-Saliheen', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(117, 'The End of the World', 'Muhammad Al-Areefi', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(118, 'Real Life Lesson From Quran', 'Muhammad Bilal Lakhani', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(119, 'LOVING OUR PARENTS', 'Abdul Malik Mujahid', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(120, 'Interpretation of Dreams', 'Omar Khayyám', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(121, 'Scientific Miracles in Ocean and Animals', 'Yusuf Al-Hajj Ahmad', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(122, '8 medicine', 'Yusuf Al-Hajj Ahmad', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(123, 'A Treatise on Hijab', 'محمد بن صالح العثيمين', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-16 07:22:22'),
(124, 'Scientific Wonders on Earth & in Space', 'Yusuf Al-Hajj Ahmad', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-06 23:44:36'),
(125, '8 guideline on medicine', 'Yusuf Al-Hajj Ahmad', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-26 05:26:48'),
(126, 'The Muslim Home', 'Darussalam', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-06 23:43:07'),
(127, 'Rizq And Lawful Earnings', 'Darussalam', 8, 25, 0, '2018-04-16 07:22:22', '2018-04-26 05:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Mystery', '2018-04-16 07:22:23', '2018-04-16 07:22:23'),
(2, 'Historical', '2018-04-16 07:22:23', '2018-04-16 07:22:23'),
(3, 'Romance', '2018-04-16 07:22:23', '2018-04-16 07:22:23'),
(4, 'Children', '2018-04-16 07:22:23', '2018-04-16 07:22:23'),
(5, 'Horror', '2018-04-16 07:22:23', '2018-04-16 07:22:23'),
(6, 'Action-Adventure Novels', '2018-04-16 07:22:23', '2018-04-16 07:22:23'),
(7, 'Arabic', '2018-04-16 07:22:23', '2018-04-16 07:22:23'),
(8, 'Islamic', '2018-04-16 07:22:23', '2018-04-16 07:22:23'),
(9, 'Uncategorized', '2018-04-16 07:22:23', '2018-04-16 07:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `issuecounter`
--

CREATE TABLE `issuecounter` (
  `id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `issuecounter`
--

INSERT INTO `issuecounter` (`id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-04-01 04:08:19', '2018-04-01 04:08:19'),
(2, 1, '2018-04-01 04:08:19', '2018-04-01 04:08:19'),
(3, 1, '2018-04-01 04:08:19', '2018-04-01 04:08:19'),
(4, 1, '2018-04-01 04:08:19', '2018-04-01 04:08:19'),
(5, 1, '2018-04-01 04:08:19', '2018-04-01 04:08:19'),
(6, 1, '2018-04-01 04:08:19', '2018-04-01 04:08:19'),
(7, 1, '2018-04-03 04:08:19', '2018-04-03 04:08:19'),
(8, 1, '2018-04-03 04:08:19', '2018-04-03 04:08:19'),
(9, 1, '2018-04-03 04:08:19', '2018-04-03 04:08:19'),
(10, 1, '2018-04-03 04:08:19', '2018-04-03 04:08:19'),
(11, 1, '2018-04-03 04:08:19', '2018-04-03 04:08:19'),
(12, 1, '2018-04-03 04:08:19', '2018-04-03 04:08:19'),
(13, 1, '2018-04-03 04:08:19', '2018-04-03 04:08:19'),
(14, 1, '2018-04-07 04:08:19', '2018-04-03 04:08:19'),
(15, 1, '2018-04-07 04:08:19', '2018-04-03 04:08:19'),
(16, 1, '2018-04-07 04:08:19', '2018-04-03 04:08:19'),
(17, 1, '2018-04-07 04:08:19', '2018-04-03 04:08:19'),
(18, 1, '2018-04-07 04:08:19', '2018-04-03 04:08:19'),
(19, 1, '2018-04-04 04:08:19', '2018-04-03 04:08:19'),
(20, 1, '2018-04-04 04:08:19', '2018-04-03 04:08:19'),
(21, 1, '2018-04-04 04:08:19', '2018-04-03 04:08:19'),
(22, 1, '2018-04-04 04:08:19', '2018-04-03 04:08:19'),
(23, 1, '2018-04-04 04:08:19', '2018-04-03 04:08:19'),
(24, 1, '2018-04-04 04:08:19', '2018-04-03 04:08:19'),
(25, 0, '2018-04-04 04:08:19', '2018-04-03 04:08:19'),
(26, 1, '2018-04-04 04:08:19', '2018-04-03 04:08:19'),
(27, 1, '2018-04-05 04:08:19', '2018-04-03 04:08:19'),
(28, 1, '2018-04-05 04:08:19', '2018-04-03 04:08:19'),
(29, 1, '2018-04-05 04:08:19', '2018-04-03 04:08:19'),
(30, 1, '2018-04-05 04:08:19', '2018-04-03 04:08:19'),
(31, 1, '2018-04-05 04:08:19', '2018-04-03 04:08:19'),
(32, 1, '2018-04-05 04:08:19', '2018-04-03 04:08:19'),
(33, 1, '2018-04-05 04:08:19', '2018-04-03 04:08:19'),
(34, 1, '2018-04-05 04:08:19', '2018-04-03 04:08:19'),
(35, 1, '2018-04-06 04:08:19', '2018-04-03 04:08:19'),
(36, 1, '2018-04-06 04:08:19', '2018-04-03 04:08:19'),
(37, 1, '2018-04-12 04:08:19', '2018-04-03 04:08:19'),
(38, 1, '2018-04-12 04:08:19', '2018-04-03 04:08:19'),
(39, 1, '2018-04-12 04:08:19', '2018-04-03 04:08:19'),
(40, 1, '2018-04-12 04:08:19', '2018-04-03 04:08:19'),
(41, 1, '2018-04-12 04:08:19', '2018-04-03 04:08:19'),
(42, 1, '2018-04-06 04:08:19', '2018-04-03 04:08:19'),
(43, 1, '2018-04-06 04:08:19', '2018-04-03 04:08:19'),
(44, 1, '2018-04-06 04:08:19', '2018-04-03 04:08:19'),
(45, 1, '2018-04-06 04:08:19', '2018-04-03 04:08:19'),
(46, 1, '2018-04-07 04:08:19', '2018-04-03 04:08:19'),
(47, 1, '2018-04-07 04:08:19', '2018-04-03 04:08:19'),
(48, 1, '2018-04-07 04:08:19', '2018-04-03 04:08:19'),
(49, 1, '2018-04-07 04:08:19', '2018-04-03 04:08:19'),
(50, 1, '2018-04-08 04:08:19', '2018-04-03 04:08:19'),
(51, 1, '2018-04-08 04:08:19', '2018-04-03 04:08:19'),
(52, 1, '2018-04-08 04:08:19', '2018-04-03 04:08:19'),
(53, 1, '2018-04-08 04:08:19', '2018-04-03 04:08:19'),
(54, 1, '2018-04-08 04:08:19', '2018-04-03 04:08:19'),
(55, 1, '2018-04-08 04:08:19', '2018-04-03 04:08:19'),
(56, 1, '2018-04-08 04:08:19', '2018-04-03 04:08:19'),
(57, 1, '2018-04-08 04:08:19', '2018-04-03 04:08:19'),
(58, 1, '2018-04-08 04:08:19', '2018-04-03 04:08:19'),
(59, 1, '2018-04-09 04:08:19', '2018-04-03 04:08:19'),
(60, 1, '2018-04-09 04:08:19', '2018-04-03 04:08:19'),
(61, 1, '2018-04-09 04:08:19', '2018-04-03 04:08:19'),
(62, 1, '2018-04-09 04:08:19', '2018-04-03 04:08:19'),
(63, 1, '2018-04-09 04:08:19', '2018-04-03 04:08:19'),
(64, 1, '2018-04-09 04:08:19', '2018-04-03 04:08:19'),
(65, 1, '2018-04-09 04:08:19', '2018-04-03 04:08:19'),
(66, 1, '2018-04-09 04:08:19', '2018-04-03 04:08:19'),
(67, 1, '2018-04-09 04:08:19', '2018-04-03 04:08:19'),
(68, 1, '2018-04-09 04:08:19', '2018-04-03 04:08:19'),
(69, 1, '2018-04-10 04:08:19', '2018-04-03 04:08:19'),
(70, 1, '2018-04-10 04:08:19', '2018-04-03 04:08:19'),
(71, 1, '2018-04-10 04:08:19', '2018-04-03 04:08:19'),
(72, 1, '2018-04-10 04:08:19', '2018-04-03 04:08:19'),
(73, 1, '2018-04-10 04:08:19', '2018-04-03 04:08:19'),
(74, 1, '2018-04-10 04:08:19', '2018-04-03 04:08:19'),
(75, 1, '2018-04-10 04:08:19', '2018-04-03 04:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `issue_qty` int(11) NOT NULL,
  `return_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(10) UNSIGNED NOT NULL,
  `member_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `member_mat_no` int(11) NOT NULL,
  `member_fac` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `member_email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `member_dept` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `member_contact` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_name`, `member_mat_no`, `member_fac`, `member_email`, `member_dept`, `member_contact`, `created_at`, `updated_at`) VALUES
(1, 'Emmanuel Joseph', 168430036, 'Education', 'emmanueljet774@gmail.com', 'Computer Science', 2147483647, '2015-02-14 00:37:48', '2018-04-26 11:11:32'),
(2, 'Micheal Joseph', 168430037, 'Management Science', 'kayodej245@gmail.com', 'Accounting', 2147483647, '2017-03-14 00:37:48', '2018-04-26 11:11:32'),
(3, 'Janet Emmanuel', 168430038, 'Sciences', 'jomotayo45@gmail.com', 'Plant Science', 2147483647, '2017-12-14 00:37:48', '2018-04-26 11:11:32'),
(4, 'Bose Micheal', 168430039, 'Management Science', 'bosem245@gmail.com', 'Accounting', 2147483647, '2017-07-19 00:37:48', '2018-04-26 11:11:32'),
(5, 'Jetech Emmanuel', 168430035, 'Engineering', 'jetechunlimited@gmail.com', 'Computer', 2147483647, '2017-02-14 00:37:48', '2018-04-26 11:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_19_143556_create_books_table', 1),
(4, '2018_01_26_112948_create_issues_table', 1),
(5, '2018_01_26_180653_create_members_table', 1),
(6, '2018_02_12_174739_create_categories_table', 1),
(7, '2018_02_16_200412_create_issue_counter_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@elms.com', '$2y$10$PkDnZHVunVYbVluPOxuez.AUU8fQ5FeZ9UYbHN4TKJwq9Q4DQjcnu', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `issuecounter`
--
ALTER TABLE `issuecounter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `members_member_mat_no_unique` (`member_mat_no`),
  ADD UNIQUE KEY `members_member_email_unique` (`member_email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `issuecounter`
--
ALTER TABLE `issuecounter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
