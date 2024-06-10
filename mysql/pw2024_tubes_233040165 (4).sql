-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2024 at 03:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040165`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id_movie` int NOT NULL,
  `judul_movie` varchar(200) NOT NULL,
  `tayang` date DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `director` varchar(200) NOT NULL,
  `gambar_film` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `trailer` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id_movie`, `judul_movie`, `tayang`, `description`, `director`, `gambar_film`, `trailer`) VALUES
(46, 'Quantumania', '2023-02-17', 'In the film, which officially kicks off phase 5 of the Marvel Cinematic Universe, Super-Hero partners Scott Lang and Hope Van Dyne return to continue their adventures as Ant-Man and the Wasp. Together, with Hope&#039;s parents Hank Pym and Janet Van Dyne, the family finds themselves exploring the Quantum Realm, interacting with strange new creatures and embarking on an adventure that will push them beyond the limits of what they thought was possible. Jonathan Majors joins the adventure as Kang.', 'Peyton Reed', '1.jpg', 'https://youtu.be/ZlNFpri-Y40?si=R1_Eo6umWFPwCnew'),
(48, 'Guardian of the Galaxy Volume 3', '2023-05-05', 'In Marvel Studios &quot;Guardians of the Galaxy Vol. 3&quot; our beloved band of misfits are looking a bit different these days. Peter Quill, still reeling from the loss of Gamora, must rally his team around him to defend the universe along with protecting one of their own. A mission that, if not completed successfully, could quite possibly lead to the end of the Guardians as we know them.', 'James Gunn', '6665c438b1012.jpg', 'https://youtu.be/JqcncLPi9zw?si=FWAwjzIsqWIvcU0d'),
(49, 'Wakanda Forever', '2022-11-11', 'Queen Ramonda (Angela Bassett), Shuri (Letitia Wright), M’Baku (Winston Duke), Okoye (Danai Gurira) and the Dora Milaje (including Florence Kasumba), fight to protect their nation from intervening world powers in the wake of King T’Challa’s death. As the Wakandans strive to embrace their next chapter, the heroes must band together with the help of War Dog Nakia (Lupita Nyong’o) and Everett Ross (Martin Freeman) and forge a new path for the kingdom of Wakanda.', 'Ryan Coogler', '6665c4dca3f51.jpg', 'https://youtu.be/_Z3QKkl1WyM?si=4uDRk2nZqMwlKoC_'),
(50, 'Thor Love and Thunder', '2022-08-08', 'Marvel Studios’ “Thor: Love and Thunder” finds the God of Thunder on a journey unlike anything he’s ever faced—one of self-discovery. But his efforts are interrupted by a galactic killer known as Gorr the God Butcher, who seeks the extinction of the gods. To combat the threat, Thor enlists the help of King Valkyrie, Korg and ex-girlfriend Jane Foster, who—to Thor’s surprise—inexplicably wields his magical hammer, Mjolnir, as the Mighty Thor.', 'Taika Waititi', '6665c63b83e54.jpg', 'https://youtu.be/tgB1wUcmbbw?si=pcd2XnSdCYZlkRG4'),
(51, 'Captain Marvel', '2019-08-05', 'Set in the 1990s, Marvel Studios&#039; &quot;Captain Marvel&quot; is an all-new adventure from a previously unseen period in the history of the Marvel Cinematic Universe that follows the journey of Carol Danvers as she becomes one of the universe&#039;s most powerful heroes. While a galactic war between two alien races reaches Earth, Danvers finds herself and a small cadre of allies at the center of the maelstrom.', 'Anna Boden, Ryan Fleck', '6665c81764f34.jpg', 'https://youtu.be/eh_qPcQoFK0?si=lArH0mEqnMd7TOHr'),
(52, 'Avengers Endgame', '2019-02-26', 'The grave course of events set in motion by Thanos that wiped out half the universe and fractured the Avengers ranks compels the remaining Avengers to take one final stand in Marvel Studios&#039; grand conclusion to twenty-two films, &quot;Avengers: Endgame.&quot;', 'Anthony Russo, Joe Russo', '6665c95249362.jpg', 'https://youtu.be/TcMBFSGVi1c?si=IXvPKsiXy5XxD1Vl'),
(53, 'Venom', '2018-10-05', 'Eddie Brock (Tom Hardy) is a broken man after he loses everything including his job and fiancée. Just when his life is at its lowest, he becomes host to an alien symbiote which results in extraordinary superpowers—transforming him into Venom. Will these powers be enough for this new lethal protector to defeat great evil forces, especially against the far stronger and more weaponized symbiote rival, Riot?', 'Ruben Fleischer', '6665d744558e0.jpg', 'https://youtu.be/u9Mv98Gr5pY?si=0WjVqpqk-ETxaW8K'),
(54, 'Deadpool', '2017-02-12', 'Based upon Marvel Comics’ most unconventional anti-hero, DEADPOOL tells the origin story of former Special Forces operative turned mercenary Wade Wilson, who after being subjected to a rogue experiment that leaves him with accelerated healing powers, adopts the alter ego Deadpool. Armed with his new abilities and a dark, twisted sense of humor, Deadpool hunts down the man who nearly destroyed his life.', 'Tim Miller', '6665d7e714816.jpg', 'https://youtu.be/ONHBaC-pfsk?si=Q7KHerNJ98nkXEHA'),
(55, 'X-MEN Apocalypse', '2016-05-27', 'Upon awakening after thousands of years, Apocalypse is disillusioned with the world as he finds it and recruits a team of powerful mutants, including a disheartened Magneto (Michael Fassbender), to cleanse mankind and create a new world order, over which he will reign. As the fate of the Earth hangs in the balance, Raven (Jennifer Lawrence) with the help of Professor X (James McAvoy) must lead a team of young X-Men to stop their greatest nemesis and save mankind from complete destruction.', 'Bryan Singer', '9.jpg', 'https://youtu.be/PfBVIHgQbYk?si=H2ndYIAex5Omb2N1'),
(58, 'Doctor Strange in the Multiverse of Madness', '2023-02-17', 'Marvel Studios&#039; &quot;Doctor Strange in the Multiverse of Madness&quot;—a thrilling ride through the Multiverse with Doctor Strange, his trusted friend Wong and Wanda Maximoff, aka Scarlet Witch. &quot;Doctor Strange in the Multiverse of Madness&quot; opens in U.S. theaters on May 6, 2022.', 'Sam Raimi', '10.jpg', 'https://youtu.be/Rt_UqUm38BI?si=VXftr4EyQM5hqOiR'),
(59, 'The Amazing Spider-man', '2012-07-03', 'A teenage Peter Parker grapples with both high school and amazing super-human crises as his alter-ego Spider-Man.', 'Marc Webb', '11.jpg', 'https://youtu.be/upwf8RsyNqQ?si=nvZa5ck5GF2Xzhl9'),
(60, 'LOGAN', '2017-03-03', 'In the near future, a weary Logan cares for an ailing Professor X in a hide out on the Mexican border. But Logan&#039;s attempts to hide from the world and his legacy are up-ended when a young mutant arrives, being pursued by dark forces.', 'James Mangold', '12.jpg', 'https://youtu.be/Div0iP65aZo?si=VmmhTaVlmjSqCEi0');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int NOT NULL,
  `nama_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(0, 'user'),
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `gambar`, `username`, `email`, `password`, `id_role`) VALUES
(5, 'default.png', 'admin', 'biagi@gmail.com', '$2y$10$IPQJUrW7GLpsTLP7NElVkO2AuCAxEVDklgqJWjE.l/Cag8usk2dGq', 1),
(7, 'default.png', 'fajar', 'fajar@gmail.com', '$2y$10$VK4ich1ZRsJLhGi.1GYza.pg56phAewBuCcSIDzEd76WdNN/X74na', 0),
(9, 'default.png', 'desi', 'desihafita@gmail.com', '$2y$10$0agiwr9A6UeY68lm3Tk/c.1hLcWpQJIgaiChwhPutyZ4Rxr55SppK', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id_movie`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id_movie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
