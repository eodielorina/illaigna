-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 24 août 2020 à 07:51
-- Version du serveur :  5.5.65-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `stage_illaigna_v2_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `ID_EVENEMENT` int(11) NOT NULL,
  `NOM_EVENEMENT` varchar(100) NOT NULL,
  `DATE_EVENEMENT` date NOT NULL,
  `DATE_EVENEMENT_FIN` date NOT NULL,
  `DESCRIPTION` varchar(1000) NOT NULL,
  `PHOTOS` text NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `TYPE_EVENEMENT` varchar(100) NOT NULL,
  `Lieu` varchar(250) NOT NULL,
  `Tarif` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`ID_EVENEMENT`, `NOM_EVENEMENT`, `DATE_EVENEMENT`, `DATE_EVENEMENT_FIN`, `DESCRIPTION`, `PHOTOS`, `ID_UTILISATEUR`, `TYPE_EVENEMENT`, `Lieu`, `Tarif`) VALUES
(93, 'jirofo', '2020-07-29', '2020-07-29', 'teste fotsiny aloha\r\n', 'images/3.png', 1, 'Sondage d\'éléction', 'fenerive', '2000ar'),
(95, 'consequat.', '2020-04-01', '2020-07-28', 'Duis aute irure dolor in reprehenderit in voluptate velit esse Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'images/1.jpeg', 1, 'Sondage d\'éléction', 'barikadimy', '20000ar'),
(103, 'vanille', '2020-07-23', '2020-07-29', 'sunt in culpa qui officia deserunt mollit anim id est laborum.sunt in culpa qui officia ', 'images/2.jpeg', 1, 'Sondage d\'éléction', 'Tana', '10000ar'),
(107, 'Baleine', '2020-07-23', '2020-07-29', 'sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/6.jpeg', 1, 'Sondage d\'éléction', 'anjoma', '20000ar'),
(124, 'chef chantier', '2020-07-24', '2020-07-29', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'images/7.jpeg', 1, 'Sondage d\'éléction', 'salazamay', '2000ar'),
(133, 'soa', '2020-07-28', '2020-07-29', 'csdfsdffsdf', 'images/5.png', 1, 'Festival', 'barikadimy', '20000ar'),
(134, 'cdsfdf', '2020-07-28', '2020-07-30', 'dfgfdgf', 'images/4.png', 1, 'Sondage d\'éléction', 'fdgshg', 'fdghfhgh'),
(136, '', '2020-06-23', '2020-07-24', '', 'images/pic.jpg', 1, 'Festival', '', ''),
(137, '', '2020-07-15', '2020-07-16', '', 'images/pic.jpg', 1, 'Sondage d\'éléction', '', ''),
(138, '', '2020-07-22', '2020-07-24', '', 'images/Penguins.jpg', 1, 'Sondage d\'éléction', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `garde`
--

CREATE TABLE `garde` (
  `ID_GARDE` int(11) NOT NULL,
  `ID_PHARMACIE` int(11) NOT NULL,
  `Date_debut` date NOT NULL,
  `Date_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `garde`
--

INSERT INTO `garde` (`ID_GARDE`, `ID_PHARMACIE`, `Date_debut`, `Date_fin`) VALUES
(650, 37, '2020-07-23', '2020-07-16'),
(651, 34, '2020-07-16', '2020-07-19'),
(652, 38, '2020-07-24', '2020-07-25'),
(653, 38, '2020-07-18', '2020-07-19'),
(654, 38, '2020-07-20', '2020-07-22'),
(655, 37, '2020-07-19', '2020-07-20'),
(658, 34, '2020-07-22', '2020-07-28'),
(660, 37, '2020-08-01', '2020-08-08'),
(664, 39, '2020-07-26', '2020-07-26'),
(665, 34, '2020-07-25', '2020-07-27'),
(667, 57, '2020-05-02', '2020-05-09'),
(668, 57, '2020-06-13', '2020-06-20'),
(669, 57, '2020-08-01', '2020-08-08'),
(670, 57, '2020-09-19', '2020-09-26'),
(672, 44, '2020-06-12', '2020-07-27'),
(673, 52, '2020-05-30', '2020-06-06'),
(674, 57, '2020-07-28', '2020-07-30'),
(675, 52, '2020-09-05', '2020-09-12'),
(676, 52, '2020-10-24', '2020-10-31'),
(678, 46, '2020-07-01', '2020-07-02'),
(679, 40, '2020-07-23', '2020-07-30'),
(680, 53, '2019-12-01', '2019-12-02'),
(681, 53, '2019-12-13', '2020-01-15');

-- --------------------------------------------------------

--
-- Structure de la table `infopratique`
--

CREATE TABLE `infopratique` (
  `ID_INFOP` int(11) NOT NULL,
  `NUM_TELEPHONE` varchar(1000) NOT NULL,
  `ADRESSE` varchar(100) NOT NULL,
  `PHOTOS` text NOT NULL,
  `ID_SERVICE` int(11) NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `infopratique`
--

INSERT INTO `infopratique` (`ID_INFOP`, `NUM_TELEPHONE`, `ADRESSE`, `PHOTOS`, `ID_SERVICE`, `ID_UTILISATEUR`) VALUES
(31, '03467890678', 'Tanamakoa', 'images/Chrysanthemum.jpg', 26, 1),
(32, '0324567890', '			TanambaoV', 'images/pic.jpg', 26, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pharmacie_de_garde`
--

CREATE TABLE `pharmacie_de_garde` (
  `ID_PHARMACIE` int(11) NOT NULL,
  `NOM_PHARMACIE` varchar(100) NOT NULL,
  `NUMERO_PHARMACIE` varchar(1000) NOT NULL,
  `ADRESSE_PHARMACIE` varchar(100) NOT NULL,
  `DATE_GARDE` date NOT NULL,
  `DATE_GARDE_FIN` date NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pharmacie_de_garde`
--

INSERT INTO `pharmacie_de_garde` (`ID_PHARMACIE`, `NOM_PHARMACIE`, `NUMERO_PHARMACIE`, `ADRESSE_PHARMACIE`, `DATE_GARDE`, `DATE_GARDE_FIN`, `ID_UTILISATEUR`) VALUES
(40, 'Vonjy', '53 321 20', 'Lot 273 F Parcelle 21/21Ambolomadinika, Route MELVILLE', '0000-00-00', '0000-00-00', 1),
(41, 'LAHADY', '53 325 31', 'Boulevard Joffre', '0000-00-00', '0000-00-00', 1),
(42, 'De L\'EST', '53 337 84', 'B.P. 35 Tanambao V Boulevard d\'Andevoranto', '0000-00-00', '0000-00-00', 1),
(43, 'JOYCIA', '53 338 98', 'Lot A 150 Batiment Franzhenngs', '0000-00-00', '0000-00-00', 1),
(44, 'MAHATSARA', '53 313 50 / 53 339 12', '1753, rue d\'Arcole Tanambao II Toamasina', '0000-00-00', '0000-00-00', 1),
(45, 'MIRINDRA', '53 307 63', 'Lot 193 Béryl rose, Boulevard d\'Andevoranto', '0000-00-00', '0000-00-00', 1),
(46, 'CENTRALE DE L\'EST', '53 307 63', 'Lot 2816 Tanamborozano Ouest', '0000-00-00', '0000-00-00', 1),
(47, 'BAZAR BE', '53 334 07', 'Place du marché-Bazar Be Toamasina', '0000-00-00', '0000-00-00', 1),
(48, 'NY ANTSIKA', '53 326 86', 'IMM Trano Soa Boulevard de la Fidélité, Bazar kely', '0000-00-00', '0000-00-00', 1),
(49, 'ANJARA', '53 323 64', 'Villa Nirinarisoa Tanamakoa', '0000-00-00', '0000-00-00', 1),
(50, 'TSARASANDRY', '53 336 40', 'Immeuble ny Havana, Boulevard de l\'OUA', '0000-00-00', '0000-00-00', 1),
(51, 'ANLIA SARL', '53 323 77', '26, rue de Lattre de Tassigny', '0000-00-00', '0000-00-00', 1),
(52, 'ANDRY', '53 312 00', '132 Boulevard de la Victoire - Propriété Jimmy Bazar Kely', '0000-00-00', '0000-00-00', 1),
(53, 'VALISOA', '', 'Lot Q 20B Mangarano, route de Barikadimy', '0000-00-00', '0000-00-00', 1),
(54, 'SOA SARL', '53 327 67 / 034 01 02450', '20, rue des Hova - Bazar be - BP 266', '0000-00-00', '0000-00-00', 1),
(55, 'NAHASY', '53 352 81 / 032 07 77266', 'Villa Borelly IIT n° 1846 Boulevard Joffre', '0000-00-00', '0000-00-00', 1),
(56, 'SOAVINA SARL', '53 911 24', 'Lot 115 Parcelle 14/33 Morafeno', '0000-00-00', '0000-00-00', 1),
(57, 'AMBININTSOA Sarl', '23454565', 'Boulevard de l\'OUA', '0000-00-00', '0000-00-00', 1),
(58, 'ELYSELE', '', 'Villa Harenamamy Lot 33 Boulevard de l\'Ivondro Parcelle 32/33 Anjoma', '0000-00-00', '0000-00-00', 1),
(59, 'DESTIN', '', 'Lot 150 ter, Parcelle 14/32 Ambohijafy', '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `public`
--

CREATE TABLE `public` (
  `ID_PUBLIC` int(11) NOT NULL,
  `TYPE_PAPIER` varchar(100) NOT NULL,
  `ID_SERVICE` int(11) NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `DEMARCHE` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `public`
--

INSERT INTO `public` (`ID_PUBLIC`, `TYPE_PAPIER`, `ID_SERVICE`, `ID_UTILISATEUR`, `DEMARCHE`) VALUES
(316, 'Certificat de résidence', 40, 1, '3 photocopies ,   2 photos + CIN '),
(318, 'Acte de Mariage', 23, 1, '3 photocopies  +   2 photos + CIN '),
(325, 'Copie intégrale acte de naissance', 40, 1, 'CIN'),
(326, 'Acte de Mariage', 56, 1, '3 photocopies ,   2 photos + CIN '),
(327, 'Certificat de résidence', 57, 1, 'CIN');

-- --------------------------------------------------------

--
-- Structure de la table `rubriques`
--

CREATE TABLE `rubriques` (
  `idrub` int(11) NOT NULL,
  `rubriques` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rubriques`
--

INSERT INTO `rubriques` (`idrub`, `rubriques`) VALUES
(1, 'Public'),
(2, 'Les evenements de Tamatave'),
(3, 'Numero urgence'),
(4, 'Infos pratique');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `ID_SERVICE` int(11) NOT NULL,
  `NOM_SERVICE` varchar(100) NOT NULL,
  `CODE_SERVICE` varchar(100) NOT NULL,
  `TYPE` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`ID_SERVICE`, `NOM_SERVICE`, `CODE_SERVICE`, `TYPE`) VALUES
(23, 'commune', 'Public', 'Service'),
(26, 'Copérative de voyages', 'Infos pratique', 'Service'),
(27, 'Hotel', 'Infos pratique', 'Service'),
(28, 'FIP', 'Numero urgence', 'Service'),
(29, 'Hopital Manarapenitra', 'Numero urgence', 'Service'),
(30, 'Santé', 'Numero urgence', 'Type'),
(34, 'Pompiers', 'Numero urgence', 'Service'),
(36, 'Région', 'Public', 'Service'),
(38, 'Vacances', 'Infos pratique', 'Service'),
(40, 'Arrondissement TANAMBAO V', 'Public', 'Service'),
(43, 'Coopérative', 'Infos pratique', 'Type'),
(45, 'Coopérative', 'Infos pratique', 'Type'),
(46, 'Festival', 'Les evenements de Tamatave', 'Type'),
(52, 'Force de l’ordre', 'Numero urgence', 'Type'),
(53, 'Acte de Mariage', 'Public', 'Type'),
(54, 'Acte de naissance', 'Public', 'Type'),
(55, 'Certificat de résidence', 'Public', 'Type'),
(56, 'Tribunal', 'Public', 'Service'),
(57, 'Fokontany', 'Public', 'Service'),
(59, 'porte ouverte', 'Les evenements de Tamatave', 'Type'),
(60, 'Sondage d’élection', 'Les evenements de Tamatave', 'Type'),
(61, 'Spectacle', 'Les evenements de Tamatave', 'Type'),
(62, 'Soirée', 'Les evenements de Tamatave', 'Type'),
(63, 'urgence', 'Numero urgence', 'Type');

-- --------------------------------------------------------

--
-- Structure de la table `urgence`
--

CREATE TABLE `urgence` (
  `ID_URGENCE` int(11) NOT NULL,
  `TYPE_SERVICE` varchar(100) NOT NULL,
  `NUM_PHONE` varchar(1000) NOT NULL,
  `ID_SERVICE` int(11) NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `urgence`
--

INSERT INTO `urgence` (`ID_URGENCE`, `TYPE_SERVICE`, `NUM_PHONE`, `ID_SERVICE`, `ID_UTILISATEUR`) VALUES
(48, 'Force de l’ordre', '			    0328911111', 28, 1),
(50, 'urgence', '			    			039876543', 34, 1),
(54, 'Santé', '0343344556', 29, 1),
(56, 'urgence', '0321245678', 34, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID_UTILISATEUR` int(11) NOT NULL,
  `NOM` varchar(50) NOT NULL,
  `PSEUDO` varchar(50) NOT NULL,
  `MDP` varchar(200) NOT NULL,
  `DROIT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_UTILISATEUR`, `NOM`, `PSEUDO`, `MDP`, `DROIT`) VALUES
(1, 'lorina', 'lorina', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrateur'),
(6, 'ornella', 'ornella', '891bda2603ac73b25d3ab6dbabc5a98c', 'Utilisateur'),
(10, 'rasoa', 'rasoa', '32e0b3d7381b93fc8bf744f6f99b3f07', 'Utilisateur'),
(13, 'julia', 'julia', 'c2e285cb33cecdbeb83d2189e983a8c0', 'Administrateur'),
(15, 'saholy', 'saholy', '827ccb0eea8a706c4c34a16891f84e7b', 'Utilisateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`ID_EVENEMENT`),
  ADD KEY `FK_Evenement_Utilisateur` (`ID_UTILISATEUR`);

--
-- Index pour la table `garde`
--
ALTER TABLE `garde`
  ADD PRIMARY KEY (`ID_GARDE`),
  ADD KEY `ID_PHARMACIE` (`ID_PHARMACIE`);

--
-- Index pour la table `infopratique`
--
ALTER TABLE `infopratique`
  ADD PRIMARY KEY (`ID_INFOP`),
  ADD KEY `FK_InfoPratique_services` (`ID_SERVICE`),
  ADD KEY `FK_InfoPratique_Utilisateur0` (`ID_UTILISATEUR`);

--
-- Index pour la table `pharmacie_de_garde`
--
ALTER TABLE `pharmacie_de_garde`
  ADD PRIMARY KEY (`ID_PHARMACIE`),
  ADD KEY `FK_Pharmacie_de_garde_Utilisateur` (`ID_UTILISATEUR`);

--
-- Index pour la table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`ID_PUBLIC`),
  ADD KEY `FK_Public_services` (`ID_SERVICE`),
  ADD KEY `FK_Public_Utilisateur0` (`ID_UTILISATEUR`);

--
-- Index pour la table `rubriques`
--
ALTER TABLE `rubriques`
  ADD PRIMARY KEY (`idrub`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID_SERVICE`);

--
-- Index pour la table `urgence`
--
ALTER TABLE `urgence`
  ADD PRIMARY KEY (`ID_URGENCE`),
  ADD KEY `FK_Urgence_services` (`ID_SERVICE`),
  ADD KEY `FK_Urgence_Utilisateur0` (`ID_UTILISATEUR`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_UTILISATEUR`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `ID_EVENEMENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT pour la table `garde`
--
ALTER TABLE `garde`
  MODIFY `ID_GARDE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=682;

--
-- AUTO_INCREMENT pour la table `infopratique`
--
ALTER TABLE `infopratique`
  MODIFY `ID_INFOP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `pharmacie_de_garde`
--
ALTER TABLE `pharmacie_de_garde`
  MODIFY `ID_PHARMACIE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `public`
--
ALTER TABLE `public`
  MODIFY `ID_PUBLIC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT pour la table `rubriques`
--
ALTER TABLE `rubriques`
  MODIFY `idrub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `ID_SERVICE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pour la table `urgence`
--
ALTER TABLE `urgence`
  MODIFY `ID_URGENCE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID_UTILISATEUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `FK_Evenement_Utilisateur` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `utilisateur` (`ID_UTILISATEUR`);

--
-- Contraintes pour la table `infopratique`
--
ALTER TABLE `infopratique`
  ADD CONSTRAINT `FK_InfoPratique_Utilisateur0` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `utilisateur` (`ID_UTILISATEUR`),
  ADD CONSTRAINT `FK_InfoPratique_services` FOREIGN KEY (`ID_SERVICE`) REFERENCES `services` (`ID_SERVICE`);

--
-- Contraintes pour la table `pharmacie_de_garde`
--
ALTER TABLE `pharmacie_de_garde`
  ADD CONSTRAINT `FK_Pharmacie_de_garde_Utilisateur` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `utilisateur` (`ID_UTILISATEUR`);

--
-- Contraintes pour la table `public`
--
ALTER TABLE `public`
  ADD CONSTRAINT `FK_Public_Utilisateur0` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `utilisateur` (`ID_UTILISATEUR`),
  ADD CONSTRAINT `FK_Public_services` FOREIGN KEY (`ID_SERVICE`) REFERENCES `services` (`ID_SERVICE`);

--
-- Contraintes pour la table `urgence`
--
ALTER TABLE `urgence`
  ADD CONSTRAINT `FK_Urgence_Utilisateur0` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `utilisateur` (`ID_UTILISATEUR`),
  ADD CONSTRAINT `FK_Urgence_services` FOREIGN KEY (`ID_SERVICE`) REFERENCES `services` (`ID_SERVICE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
