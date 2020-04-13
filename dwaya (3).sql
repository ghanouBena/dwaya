-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 09 Mai 2018 à 12:31
-- Version du serveur :  5.6.24
-- Version de PHP :  5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dwaya`
--

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE IF NOT EXISTS `commune` (
  `idcommune` int(11) NOT NULL,
  `nom_commune` varchar(45) NOT NULL,
  `idwilaya` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commune`
--

INSERT INTO `commune` (`idcommune`, `nom_commune`, `idwilaya`) VALUES
(1, 'medea', 1),
(2, 'ouazra', 1);

-- --------------------------------------------------------

--
-- Structure de la table `disponiblite`
--

CREATE TABLE IF NOT EXISTS `disponiblite` (
  `idmedicament` int(11) NOT NULL,
  `id_ph` int(11) NOT NULL,
  `quantite` int(10) NOT NULL,
  `prix_med` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `disponiblite`
--

INSERT INTO `disponiblite` (`idmedicament`, `id_ph`, `quantite`, `prix_med`) VALUES
(1, 2, 0, 230),
(2, 2, 6, 150),
(3, 2, 11, 110);

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `idfiles` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `idmessage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `files`
--

INSERT INTO `files` (`idfiles`, `url`, `idmessage`) VALUES
(1, 'data/uploads/messages/IP_addressing_3.jpg', 4),
(2, 'data/uploads/messages/home-solution-wifi-devices-network-184281306-57f795863df78c690f36336d.jpg', 5),
(3, 'data/uploads/messages/Macam-macam-Topologi-Jaringan-Komputer.jpg', 5),
(4, 'data/uploads/messages/pharmaciedbb.PNG', 6),
(5, 'data/uploads/messages/doctorf1.png', 8);

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE IF NOT EXISTS `medicament` (
  `idmedicament` int(11) NOT NULL,
  `nom_medicament` varchar(100) NOT NULL,
  `labo_medicament` varchar(100) NOT NULL,
  `idtype` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `medicament`
--

INSERT INTO `medicament` (`idmedicament`, `nom_medicament`, `labo_medicament`, `idtype`) VALUES
(1, 'parecetamol', 'saidal', 1),
(2, 'pharm', 'saidal', 1),
(3, 'colofinal', 'saidal', 1);

-- --------------------------------------------------------

--
-- Structure de la table `medicament_has_ordonnance`
--

CREATE TABLE IF NOT EXISTS `medicament_has_ordonnance` (
  `idmedicament` int(11) NOT NULL,
  `idordonnance` int(11) NOT NULL,
  `quantite` int(3) NOT NULL,
  `description` varchar(255) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `quantite_reste` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `medicament_has_ordonnance`
--

INSERT INTO `medicament_has_ordonnance` (`idmedicament`, `idordonnance`, `quantite`, `description`, `etat`, `quantite_reste`) VALUES
(1, 10, 3, 'wahda sbah wahda flil hh', 1, 0),
(1, 11, 2, 'fdgfqsgdcvsfhgtf', 0, 2),
(1, 12, 2, 'fdgfqsgdcvsfhgtf', 0, 1),
(2, 10, 3, 'apres 1/2', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `idmessage` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `toId` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `time_sent` datetime DEFAULT NULL,
  `opened` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`idmessage`, `formId`, `toId`, `subject`, `message`, `time_sent`, `opened`) VALUES
(1, 1, 4, 'vbv', 'dsgv ssgsfdswv ', '2018-05-04 15:28:10', 0),
(2, 4, 1, 'analyse', 'rani dert les analyse', '2018-05-04 16:01:52', 0),
(3, 4, 1, 'analyse', 'rani dert les analyse', '2018-05-04 16:02:58', 1),
(4, 4, 1, 'analyse', 'hado homa les analyses', '2018-05-04 16:07:17', 1),
(5, 1, 4, 'analyse', 'hadouma autre analyes', '2018-05-04 16:20:27', 1),
(6, 2, 4, 'medicament', 'i find your medicament', '2018-05-04 18:36:14', 1),
(7, 4, 2, 'medicament', 'thank you very much', '2018-05-04 18:37:34', 1),
(8, 1, 4, 'Ordonnance', 'this is your ordonnance', '2018-05-04 20:18:19', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ordonnance`
--

CREATE TABLE IF NOT EXISTS `ordonnance` (
  `idordonnance` int(11) NOT NULL,
  `code_ordonnance` varchar(20) NOT NULL,
  `details` text CHARACTER SET utf8 NOT NULL,
  `data_ordonnance` date NOT NULL,
  `data_achet_ord` date DEFAULT NULL,
  `id_med` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `valide_par` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ordonnance`
--

INSERT INTO `ordonnance` (`idordonnance`, `code_ordonnance`, `details`, `data_ordonnance`, `data_achet_ord`, `id_med`, `id_patient`, `valide_par`) VALUES
(10, '2018-04-4QYSjK', 'fhghdfjdhtjfnb', '2018-04-27', '2018-04-28', 1, 4, 2),
(11, '2018-04-j9q6Rj', 'fdhjdghk;fjml;hkj', '2018-04-27', NULL, 1, 4, NULL),
(12, '2018-04-FHeJZS', 'fdhjdghk;fjml;hkj', '2018-04-27', NULL, 1, 4, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `quartie`
--

CREATE TABLE IF NOT EXISTS `quartie` (
  `idquartie` int(11) NOT NULL,
  `nom_quartie` varchar(45) NOT NULL,
  `idcommune` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `quartie`
--

INSERT INTO `quartie` (`idquartie`, `nom_quartie`, `idcommune`) VALUES
(1, 'ain arais', 1),
(2, 'marja chkir', 1);

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
  `idspecialite` int(11) NOT NULL,
  `nom_sep` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`idspecialite`, `nom_sep`) VALUES
(1, 'Dentiste'),
(2, 'Pediatre'),
(3, 'Gynécologue'),
(4, 'Radiologue'),
(5, 'Psychologue'),
(6, 'Angiologue'),
(7, 'Cardiologue'),
(8, 'Dermatologue'),
(9, 'Diabétologue'),
(10, 'Gastro-enérologue'),
(11, 'Gynécologue-obstétricien'),
(12, 'Neurologue');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `idtype` int(11) NOT NULL,
  `nom_type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`idtype`, `nom_type`) VALUES
(1, 'Antibiotiques');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(11) NOT NULL,
  `nom_user` varchar(45) DEFAULT NULL,
  `prenom_user` varchar(45) DEFAULT NULL,
  `sexe` varchar(6) DEFAULT NULL,
  `data_nais` date NOT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(100) NOT NULL,
  `tel_user` varchar(20) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `url_pic` varchar(255) DEFAULT NULL,
  `code_confirme` varchar(10) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `accept` tinyint(1) NOT NULL,
  `niveau` int(2) NOT NULL,
  `complete` tinyint(1) NOT NULL,
  `idquartie` int(11) DEFAULT NULL,
  `idspecialite` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idusers`, `nom_user`, `prenom_user`, `sexe`, `data_nais`, `add_user`, `email_user`, `tel_user`, `username`, `password`, `url_pic`, `code_confirme`, `active`, `accept`, `niveau`, `complete`, `idquartie`, `idspecialite`) VALUES
(1, 'benabderrahmane', 'abdelghani', 'Men', '2018-04-03', 'ain arais 35', 'ghanoumahbol@gmail.com', '0664665473', 'abdelghani', 'ghanou123', 'data/uploads/doctors/puppy-1.jpg', 'fziwFFjZ', 1, 1, 3, 1, 1, 1),
(2, 'bena', 'abdelghani', 'Men', '1993-08-09', 'ain arais ', 'abdelghanibenabderrahmane1@gmail.com', '0776880079', 'abdelghani12', 'ghanou123', 'data/uploads/doctors/random-avatar7.jpg', 'fziwFFjZ', 1, 1, 2, 1, 1, NULL),
(4, 'benabderrahmane', 'youcef', 'Men', '1995-08-28', 'ain arais 35', 'youcefbena16@gmail.com', '0776462532', 'youcef', 'youcef123', 'data/uploads/patients/avatar5.jpg', 'vaEgf2K7', 1, 1, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `wilaya`
--

CREATE TABLE IF NOT EXISTS `wilaya` (
  `idwilaya` int(11) NOT NULL,
  `nom_wilaya` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `wilaya`
--

INSERT INTO `wilaya` (`idwilaya`, `nom_wilaya`) VALUES
(1, 'medea'),
(2, 'alger'),
(3, 'blida'),
(4, 'oran');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`idcommune`,`idwilaya`), ADD KEY `fk_commune_wilaya1_idx` (`idwilaya`);

--
-- Index pour la table `disponiblite`
--
ALTER TABLE `disponiblite`
  ADD PRIMARY KEY (`idmedicament`,`id_ph`), ADD KEY `fk_medicament_has_users_users1_idx` (`id_ph`), ADD KEY `fk_medicament_has_users_medicament1_idx` (`idmedicament`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`idfiles`,`idmessage`), ADD KEY `fk_files_message1_idx` (`idmessage`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`idmedicament`,`idtype`), ADD KEY `fk_medicament_type1_idx` (`idtype`);

--
-- Index pour la table `medicament_has_ordonnance`
--
ALTER TABLE `medicament_has_ordonnance`
  ADD PRIMARY KEY (`idmedicament`,`idordonnance`), ADD KEY `fk_medicament_has_ordonnance1_ordonnance1_idx` (`idordonnance`), ADD KEY `fk_medicament_has_ordonnance1_medicament1_idx` (`idmedicament`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idmessage`,`formId`,`toId`), ADD KEY `fk_message_users1_idx` (`formId`), ADD KEY `fk_message_users2_idx` (`toId`);

--
-- Index pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD PRIMARY KEY (`idordonnance`,`id_med`,`id_patient`), ADD UNIQUE KEY `code_ordonnance` (`code_ordonnance`), ADD KEY `fk_ordonnance_users1_idx` (`id_med`), ADD KEY `fk_ordonnance_users2_idx` (`id_patient`), ADD KEY `fk_ordonnance_users3_idx` (`valide_par`);

--
-- Index pour la table `quartie`
--
ALTER TABLE `quartie`
  ADD PRIMARY KEY (`idquartie`,`idcommune`), ADD KEY `fk_quartie_commune1_idx` (`idcommune`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`idspecialite`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idtype`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`), ADD UNIQUE KEY `username_UNIQUE` (`username`), ADD UNIQUE KEY `email_user_UNIQUE` (`email_user`), ADD KEY `fk_users_quartie1_idx` (`idquartie`), ADD KEY `fk_users_specialite1_idx` (`idspecialite`);

--
-- Index pour la table `wilaya`
--
ALTER TABLE `wilaya`
  ADD PRIMARY KEY (`idwilaya`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commune`
--
ALTER TABLE `commune`
  MODIFY `idcommune` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `idfiles` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `idmedicament` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  MODIFY `idordonnance` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `quartie`
--
ALTER TABLE `quartie`
  MODIFY `idquartie` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `idspecialite` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `idtype` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `wilaya`
--
ALTER TABLE `wilaya`
  MODIFY `idwilaya` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commune`
--
ALTER TABLE `commune`
ADD CONSTRAINT `fk_commune_wilaya1` FOREIGN KEY (`idwilaya`) REFERENCES `wilaya` (`idwilaya`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `disponiblite`
--
ALTER TABLE `disponiblite`
ADD CONSTRAINT `fk_medicament_has_users_medicament1` FOREIGN KEY (`idmedicament`) REFERENCES `medicament` (`idmedicament`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_medicament_has_users_users1` FOREIGN KEY (`id_ph`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `files`
--
ALTER TABLE `files`
ADD CONSTRAINT `fk_files_message1` FOREIGN KEY (`idmessage`) REFERENCES `message` (`idmessage`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `medicament`
--
ALTER TABLE `medicament`
ADD CONSTRAINT `fk_medicament_type1` FOREIGN KEY (`idtype`) REFERENCES `type` (`idtype`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `medicament_has_ordonnance`
--
ALTER TABLE `medicament_has_ordonnance`
ADD CONSTRAINT `fk_medicament_has_ordonnance1_medicament1` FOREIGN KEY (`idmedicament`) REFERENCES `medicament` (`idmedicament`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_medicament_has_ordonnance1_ordonnance1` FOREIGN KEY (`idordonnance`) REFERENCES `ordonnance` (`idordonnance`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
ADD CONSTRAINT `fk_message_users1` FOREIGN KEY (`formId`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_message_users2` FOREIGN KEY (`toId`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
ADD CONSTRAINT `fk_ordonnance_users1` FOREIGN KEY (`id_med`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ordonnance_users2` FOREIGN KEY (`id_patient`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ordonnance_users3` FOREIGN KEY (`valide_par`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `quartie`
--
ALTER TABLE `quartie`
ADD CONSTRAINT `fk_quartie_commune1` FOREIGN KEY (`idcommune`) REFERENCES `commune` (`idcommune`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `fk_users_quartie1` FOREIGN KEY (`idquartie`) REFERENCES `quartie` (`idquartie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_specialite1` FOREIGN KEY (`idspecialite`) REFERENCES `specialite` (`idspecialite`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
