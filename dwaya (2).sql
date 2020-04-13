-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 16 Avril 2018 à 09:20
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commune`
--

INSERT INTO `commune` (`idcommune`, `nom_commune`, `idwilaya`) VALUES
(1, 'medea', 1);

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

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE IF NOT EXISTS `medicament` (
  `idmedicament` int(11) NOT NULL,
  `nom_medicament` varchar(100) NOT NULL,
  `labo_medicament` varchar(100) NOT NULL,
  `idtype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medicament_has_ordonnance`
--

CREATE TABLE IF NOT EXISTS `medicament_has_ordonnance` (
  `idmedicament` int(11) NOT NULL,
  `idordonnance` int(11) NOT NULL,
  `quantite` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ordonnance`
--

CREATE TABLE IF NOT EXISTS `ordonnance` (
  `idordonnance` int(11) NOT NULL,
  `num_ordonnance` int(11) NOT NULL,
  `data_ordonnance` date NOT NULL,
  `data_achet_ord` date DEFAULT NULL,
  `id_med` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `valide_par` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `quartie`
--

CREATE TABLE IF NOT EXISTS `quartie` (
  `idquartie` int(11) NOT NULL,
  `nom_quartie` varchar(45) NOT NULL,
  `idcommune` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `quartie`
--

INSERT INTO `quartie` (`idquartie`, `nom_quartie`, `idcommune`) VALUES
(1, 'ain arais', 1);

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
  `idspecialite` int(11) NOT NULL,
  `nom_sep` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`idspecialite`, `nom_sep`) VALUES
(1, 'Dentiste');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `idtype` int(11) NOT NULL,
  `nom_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idusers`, `nom_user`, `prenom_user`, `sexe`, `data_nais`, `add_user`, `email_user`, `tel_user`, `username`, `password`, `url_pic`, `code_confirme`, `active`, `accept`, `niveau`, `complete`, `idquartie`, `idspecialite`) VALUES
(1, 'benabderrahmane', 'abdelghani', 'Men', '2018-04-03', 'ain arais 35', 'ghanoumahbol@gmail.com', '0664665473', 'abdelghani', 'ghanou123', '/data/uploads/doctors/puppy-1.jpg', 'fziwFFjZ', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `wilaya`
--

CREATE TABLE IF NOT EXISTS `wilaya` (
  `idwilaya` int(11) NOT NULL,
  `nom_wilaya` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `wilaya`
--

INSERT INTO `wilaya` (`idwilaya`, `nom_wilaya`) VALUES
(1, 'medea');

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
-- Index pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD PRIMARY KEY (`idordonnance`,`id_med`,`id_patient`), ADD KEY `fk_ordonnance_users1_idx` (`id_med`), ADD KEY `fk_ordonnance_users2_idx` (`id_patient`), ADD KEY `fk_ordonnance_users3_idx` (`valide_par`);

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
  MODIFY `idcommune` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `idmedicament` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  MODIFY `idordonnance` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `quartie`
--
ALTER TABLE `quartie`
  MODIFY `idquartie` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `idspecialite` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `idtype` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `wilaya`
--
ALTER TABLE `wilaya`
  MODIFY `idwilaya` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
