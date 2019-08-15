-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 02:27 PM
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
-- Database: `newblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogposts`
--

CREATE TABLE `blogposts` (
  `ID` int(20) NOT NULL,
  `blogtitle` varchar(255) NOT NULL,
  `blogposts` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogposts`
--

INSERT INTO `blogposts` (`ID`, `blogtitle`, `blogposts`) VALUES
(1, 'Kyrie Irving Get\'s His own movie', 'Five-time NBA all-star Kyrie Irving gets his own movie title Uncle Drew. The movie is based on his off season alter ego Uncle Drew. For everyone one who loves basketball and loves Kyrie Irving and his handles, then this movie is for you. The movie will be distributed by Lionsgate Movies.\r\n\r\nSynopsis: After draining his life savings to enter a team in the Rucker Classic street ball tournament in Harlem, Dax (Lil Rel Howery) is dealt a series of unfortunate setbacks, including losing his team to his longtime rival (Nick Kroll). Desperate to win the tournament and the cash prize, Dax stumbles upon the man, the myth, the legend UNCLE DREW (NBA All-Star Kyrie Irving) and convinces him to return to the court one more time. .\r\n\r\nStarring: Kyrie Irving , Shaquille O Neal , Nate Robinson, Reggie Miller, Lisa Leslie\r\n\r\nDirector: Charles Stone III\r\n\r\nGenre: Comedy\r\n\r\nRating: PG-13\r\n\r\nRelease Date: 29 June, 2018\r\n\r\nWatch trailer here'),
(2, 'Kevin Durant Gets His Own Series', 'We just recently found out that NBA star Kevin Durant will be getting his own series titled  â€œSwaggerâ€. The series will be based on his early life and career.  It was found out that the series would be developed by Apple.\r\n\r\nThe series will be produced by Brian Grazer and Ron Howardâ€™s Imagine Television along with Durantâ€™s Thirty Five Media. Durant and Grazer will executive produce, along with Imagineâ€™s Francie Calfo and Thirty Five Mediaâ€™s Rich Kleiman\r\n\r\nKevin Durant currently plays the â€œsmall forwardâ€ position  for the Golden State Warriors and has won numerous accolades throughout his basketball career. In addition to being a two-time Olympic gold medalist, he has previously won the NBAâ€™s Most Valuable Player award, been named NBA Rookie of the Year, and is a nine-time NBA All Star.\r\n'),
(4, 'MR BEAN RETURNS TO THE BIG SCREEN', 'Its been quite a while since weâ€™ve seen a movie from Rowan Atkinson a.k.a Mr Bean. For me his last movie I saw was Johnny English Reborn, where he went all James Bond like and saved the world. I am telling you now that the wait his over as he will be starring as Johnny English in the sequel of the 2011 movie â€œJohnny English rebornâ€ which is titled â€œJohnny English 3â€³.\r\n\r\nStarring:  Rowan Atkinson, Olga Kurylenko, Jake Lacy, Ben Miller\r\n\r\nDirector: David Kerr\r\n\r\nGenre: Action, Adventure and Comedy\r\n\r\nRating: PG-13\r\n\r\nRelease Date: 12 October, 2018'),
(5, 'THORâ€™S NEW WEAPON', 'Since the destruction of Thorâ€™s trustee hammer â€œMjolnirâ€ in Thor: Ragnarok, there has been many questions as to how Thor will focus his powers. This was clearly stated by Odin in Ragnarok that he only needed Mjolnir to focus his powers, not the source of his powers.\r\n\r\nRecently, there has been several rumors that Thor will be getting a new weapon, which he will forge with the help of the Guardians of the Galaxy. Though all the rumors point to Thor wielding his old battle axe from the comics â€œJanbjornâ€. The new toy from Marvel appears to suggest that Thor wields the Ultimate version of Mjolnir â€“ a half-hammer, half-axe (somewhat of a combination of Janbjorn and Stormbreaker) that Thor used on Earth-1610.\r\n\r\nFor those that doesnâ€™t know what Janbjorn or Ultimate Mjolnir is, here you go:\r\n\r\nJarnbjorn was the Dwarven-forged battle axe wielded by Thor. Thor used this axe long before obtaining Mjolnir. In the 9th Century, unable to lift Mjolnir despite many attempts, Thor used J'),
(6, 'MOVIE SEQUELS YOU SHOULD WATCH THIS YEAR', '\r\nJust like the year 2017 was all about reboots, this year there will be a lot of sequels and prequels coming out while some are out already. Here is a list of the ones you should try to see this year, Iâ€™ll try not to add the ones that are out already.\r\n\r\nIncredibles 2 (PG) 13 July\r\n\r\nAvengers: Infinity War (PG-13) 27 April\r\n\r\nHotel Transylvania 3(PG) 27 July\r\n\r\nAnt Man and The Wasp(PG-13) 28 August\r\n\r\nMission : Impossible-Fall Out(PG-13) 27 July\r\n\r\nX men: Dark Phoenix (PG-13) 2 November\r\n\r\nDead Pool 2(R) 16 May\r\n\r\nJurassic World: Fallen Kingdom (R) 6 June\r\n\r\nThe Predator(R) 3 August 2018\r\n\r\nCreed II (PG-13) 21 November\r\n\r\nWreck it Ralph: Ralph Breaks The Internet(PG) 28 November\r\n\r\nFantastic Beasts : The Crimes of Grindelwald(PG-13) 16 November\r\n\r\nPacific Rim Uprising (PG-13)\r\n\r\nGoosebumps: Horrorland (R) 19 October\r\n\r\nThe Equalizer 2\r\n\r\nOceanâ€™s 8 (PG-13) 22 June\r\n\r\nJohnny English 3 (PG-13) 12 October'),
(7, 'MOVIES TO WATCH THIS WEEK.', 'Like I always say, there is a movie for everyone. Irrespective of the age, size, skin tone or gender. So if you are looking for a movie to watch with your loved ones this valentine week. I say to you, look no further just check the one that best suits you below.\r\n\r\nYou can start your valentine by getting your kids or younger ones hooked up on some adventure with Tadeo Jones in Tad the lost Explorer and the Secret of King Midas\r\n\r\nThen you can now start your love journey with a lil romcom by joining Ope in The Royal Hibiscus Hotel as she tries to save her familyâ€™s hotel.\r\n\r\nThen move onto more romance in Fifty Shades Freed as Anastasia and Christian gets married, of course there is still drama in it as Jack Hyde still threatens there relationship.\r\n\r\nAnd if your lover isnâ€™t into romcom or drama then try a lil action for a change in Den of Thieves as the gang tries to rob a Federal Reserve Bank or check out the story of the armyâ€™s special forces deployed to Afghanistan after 9/11 i'),
(10, 'My New Phone', 'I just got a new iPhone X, it seems different when I use it considering the fact that I used to use a Samsung S7 edge phone. I think this is because the operating systems are quite different.');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`) VALUES
(1, 'Olaniyi', 'inhuman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
