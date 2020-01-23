-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 08:24 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'PHP'),
(2, 'Python'),
(3, 'CSS'),
(4, 'Django'),
(6, 'Laravel');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category_id`, `title`, `body`, `image`, `author`, `tags`, `date`) VALUES
(11, 2, 'python ', '<p><span>Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace</span></p>\r\n<p><span>Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace</span></p>\r\n<p><span>Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace</span></p>', 'uploads/40b12748c6.png', 'Ismail', 'python', '2020-01-23 06:29:17'),
(14, 1, 'PHP 8 is Here', '<p>PHP 8, the new major PHP version, is expected to be released by the end of 2020. It\'s in very active development right now, so things are likely to change a lot in the upcoming months.</p>\r\n<p>In this post I\'ll keep an up-to-date list of what\'s expected to come: new features, performance improvements and breaking changes. Because PHP 8 is a new major version, there\'s a higher chance of your code breaking. If you\'ve kept up to date with the latest releases though, the upgrade shouldn\'t be too hard, since most breaking changes were deprecated before in the 7.* versions.</p>\r\n<p>Besides breaking changes, PHP 8 also brings some nice new features such as&nbsp;the JIT compiler&nbsp;and&nbsp;union types; and there\'s more to come!</p>', 'uploads/5700c13715.jpg', 'Ismail', 'php', '2020-01-23 07:05:43'),
(15, 1, 'What\'s new in PHP 8', '<p class=\"ui_qtext_para u-ltr u-text-align--start\">There is a phenomenal growth in the PHP language and is still going strong. PHP started its life as PHP/F1 and it has gone through several major upgrades to its&nbsp;<span class=\"qlink_container\">each version update</span>. The latest version of PHP is PHP 7.3 and its next major version we are expecting is PHP 8, its release date is not yet scheduled. As of now, there is no clear information about the new features that will be added in PHP 8, but there is a strong expectation for the addition of Just-in-Time (JIT) compilation in PHP 8. This is because the team has been concentrating on the implementation of JIT again and there should be some encouraging results.</p>\r\n<p class=\"ui_qtext_para u-ltr u-text-align--start\">This PHP JIT support is strongly believed to have the potential of further increasing the performance of PHP on top of the notable performances strides resulted already during P<span class=\"qlink_container\">HP 7 releases</span>, but the performance benefits of JIT will primarily support the CPU-bound code paths. So, the JIT compiler is perceived as the next major improvement for accelerating better performance out of PHP.</p>\r\n<p class=\"ui_qtext_para u-ltr u-text-align--start\">If you want to&nbsp;<span class=\"qlink_container\">hire PHP developers</span>&nbsp;who are well versed in all the latest upgrades of the platform, reach out the Clarion technologies.</p>', 'uploads/115647aeeb.jpg', 'Ismail Hossain', 'php', '2020-01-23 07:08:30'),
(16, 2, 'Python in Web development', '<p><span>How does&nbsp;</span><strong>Python</strong><span>&nbsp;fit into&nbsp;</span><strong>web development</strong><span>?&nbsp;</span><strong>Python</strong><span>&nbsp;can be used to build server-side&nbsp;</span><strong>web</strong><span>&nbsp;applications. ... However, most&nbsp;</span><strong>Python</strong><span>&nbsp;developers write their&nbsp;</span><strong>web</strong><span>&nbsp;applications using a combination of&nbsp;</span><strong>Python</strong><span>&nbsp;and JavaScript.&nbsp;</span><strong>Python</strong><span>&nbsp;is executed on the server side while JavaScript is downloaded to the client and run by the&nbsp;</span><strong>web</strong><span>&nbsp;browser.</span></p>\r\n<p><span>How does&nbsp;</span><strong>Python</strong><span>&nbsp;fit into&nbsp;</span><strong>web development</strong><span>?&nbsp;</span><strong>Python</strong><span>&nbsp;can be used to build server-side&nbsp;</span><strong>web</strong><span>&nbsp;applications. ... However, most&nbsp;</span><strong>Python</strong><span>&nbsp;developers write their&nbsp;</span><strong>web</strong><span>&nbsp;applications using a combination of&nbsp;</span><strong>Python</strong><span>&nbsp;and JavaScript.&nbsp;</span><strong>Python</strong><span>&nbsp;is executed on the server side while JavaScript is downloaded to the client and run by the&nbsp;</span><strong>web</strong><span>&nbsp;browser.</span></p>\r\n<p><span>How does&nbsp;</span><strong>Python</strong><span>&nbsp;fit into&nbsp;</span><strong>web development</strong><span>?&nbsp;</span><strong>Python</strong><span>&nbsp;can be used to build server-side&nbsp;</span><strong>web</strong><span>&nbsp;applications. ... However, most&nbsp;</span><strong>Python</strong><span>&nbsp;developers write their&nbsp;</span><strong>web</strong><span>&nbsp;applications using a combination of&nbsp;</span><strong>Python</strong><span>&nbsp;and JavaScript.&nbsp;</span><strong>Python</strong><span>&nbsp;is executed on the server side while JavaScript is downloaded to the client and run by the&nbsp;</span><strong>web</strong><span>&nbsp;browser.</span></p>', 'uploads/c4411e0d08.jpg', 'Ismail Hossain', 'python', '2020-01-23 07:10:52'),
(17, 2, 'python programming', '<p><span>Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace</span></p>\r\n<p><span>Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace</span></p>\r\n<p><span>Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace</span></p>', 'uploads/d64d680a7f.jpg', 'Ismail Hossain', 'python', '2020-01-23 07:13:39'),
(18, 6, 'Laravel ', '<p><span>Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model&ndash;view&ndash;controller architectural pattern and based on Symfony.</span></p>\r\n<p><span>Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model&ndash;view&ndash;controller architectural pattern and based on Symfony.</span></p>\r\n<p><span>Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model&ndash;view&ndash;controller architectural pattern and based on Symfony.</span></p>', 'uploads/d66b65b627.png', 'Ismail Hossain', 'laravel', '2020-01-23 07:16:49'),
(19, 4, 'Django', '<p><span>Django is a Python-based free and open-source web framework, which follows the model-template-view architectural pattern. It is maintained by the Django Software Foundation, an independent organization established as a 501 non-profit. Django\'s primary goal is to ease the creation of complex, database-driven websites.</span></p>\r\n<p><span>Django is a Python-based free and open-source web framework, which follows the model-template-view architectural pattern. It is maintained by the Django Software Foundation, an independent organization established as a 501 non-profit. Django\'s primary goal is to ease the creation of complex, database-driven websites.</span></p>', 'uploads/b2ea31d031.jpg', 'Ismail Hossain', 'django', '2020-01-23 07:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
