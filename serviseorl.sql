-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 28 Juin 2019 à 23:54
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `serviseorl`
--

-- --------------------------------------------------------

--
-- Structure de la table `annee`
--

CREATE TABLE `annee` (
  `annee_id` int(10) NOT NULL,
  `annee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annee`
--

INSERT INTO `annee` (`annee_id`, `annee`) VALUES
(1, '1er annee'),
(2, '2em annee'),
(3, '3em annee'),
(4, '4em annee');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `cour_id` int(10) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `module_fk` int(10) NOT NULL,
  `fichier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`cour_id`, `nom`, `module_fk`, `fichier`) VALUES
(13, 'intro to crypto', 16, 'TD1etud.pdf'),
(14, 'hello', 4, 'received_314459709459611.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `docteur`
--

CREATE TABLE `docteur` (
  `doc_id` int(4) NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Pathologie` varchar(255) CHARACTER SET utf8 NOT NULL,
  `numero` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) NOT NULL,
  `motpass` varchar(100) NOT NULL,
  `confirme` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `docteur`
--

INSERT INTO `docteur` (`doc_id`, `nom`, `prenom`, `Pathologie`, `numero`, `email`, `motpass`, `confirme`) VALUES
(1, 'kharoubi', 'kharoubi', 'ORL generale, Chirurgie cervico-faciale, Cancerologie ORL, Troubles de la deglutition, Otoneurochirurgie et chirurgie de la base du crane, Chirurgie endocrinienne, ORL pediatrique', '02336588', 'kharoubi@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(2, 'mohemed', 'mohemed', 'ORL generale, Chirurgie cervico-faciale, Cancerologie ORL, Troubles de la deglutition, Otoneurochirurgie et chirurgie de la base du crane, Chirurgie endocrinienne, ORL pediatrique', '12345678', 'azerty@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(3, 'mostafa', 'mostafa', 'ORL generale, Chirurgie cervico-faciale, Cancerologie ORL, Chirurgie endocrinienne, ORL pediatrique', '1123356', 'mostafa@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0),
(4, 'salima', 'salima', 'ORL generale, Chirurgie cervico-faciale, Cancerologie ORL, Chirurgie endocrinienne, ORL pediatrique', '125562', 'salima@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0);

-- --------------------------------------------------------

--
-- Structure de la table `dossier malade`
--

CREATE TABLE `dossier malade` (
  `numdossier` int(5) NOT NULL,
  `nompat` varchar(100) CHARACTER SET utf8 NOT NULL,
  `prenompat` varchar(100) CHARACTER SET utf8 NOT NULL,
  `profession` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateNaissPat` date NOT NULL,
  `lieuDeNaiss` varchar(100) CHARACTER SET utf8 NOT NULL,
  `domicile` varchar(100) CHARACTER SET utf8 NOT NULL,
  `salle` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Lit` int(11) NOT NULL,
  `Entre` date NOT NULL,
  `Sortie` date NOT NULL,
  `numPatient` int(10) NOT NULL,
  `sexe` varchar(20) CHARACTER SET utf8 NOT NULL,
  `telPAT` int(11) NOT NULL,
  `processus` text CHARACTER SET utf8 NOT NULL,
  `adressepar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `traitementSubis` text CHARACTER SET utf8 NOT NULL,
  `serviceDUprofesseur` varchar(255) CHARACTER SET utf8 NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `dossier malade`
--

INSERT INTO `dossier malade` (`numdossier`, `nompat`, `prenompat`, `profession`, `dateNaissPat`, `lieuDeNaiss`, `domicile`, `salle`, `Lit`, `Entre`, `Sortie`, `numPatient`, `sexe`, `telPAT`, `processus`, `adressepar`, `traitementSubis`, `serviceDUprofesseur`, `images`) VALUES
(1, 'patient01', 'patient01', 'patient01patient01', '1999-12-02', 'drdr', 'drdr', '12', 1, '2019-01-02', '2019-12-02', 1233456, 'masculin', 222133665, ' ', 'mohemed', ' ', 'kharoubi', ''),
(2, 'patient11', 'patient11', 'patient01patient01', '1999-12-02', 'drdr', 'drdr', '12', 1, '2019-01-02', '2019-12-02', 1233456, 'masculin', 222133665, ' ', 'mohemed', ' ', 'kharoubi', ''),
(21, 'patient102', 'patient102', 'orlorlorlorl', '1999-03-05', 'drdz', 'drdz', '15', 1, '2019-02-03', '2019-12-01', 231156, 'F', 665554488, ' orlorlorlorlorlorlorlorlorlorlorlorl', 'mohemed', ' orlorlorlorlorlorlorlorl', 'kharoubi', ' '),
(3, 'patient02', 'patient02', 'patient02patient02patient02', '1999-02-02', 'drfr', 'drfr', '12', 25, '2019-02-12', '2019-02-28', 123456, 'masculin', 66889955, ' patient02patient02patient02', 'mohemed', ' patient02patient02patient02', 'kharoubi', ''),
(4, 'patient05', 'patient05', 'patient05patient05patient05', '1999-02-02', 'drrrrdr', 'drrrrdr', '12', 12, '2018-02-02', '2019-02-02', 328, 'masculin', 665998874, ' patient05patient05patient05patient05', 'mohemed', ' patient05patient05patient05', 'kharoubi', ''),
(5, 'patient06', 'patient06', 'patient05patient05patient05', '1999-02-02', 'drrrrdr', 'drrrrdr', '1', 2, '2018-02-02', '2019-02-02', 328, 'masculin', 665998874, ' patient05patient05patient05patient05', 'mohemed', ' patient05patient05patient05', 'kharoubi', ''),
(7, 'patient20', 'patient20', 'patient20patient20', '1999-02-02', 'annaba', 'drdr', '1', 2, '2018-02-02', '2019-02-02', 12356, 'masculin', 665889236, ' 2019/02/02 patient20patient2012', 'mostafa', ' patient20patient20patient20patient20', 'kharoubi', ''),
(9, 'mehdi', 'mehdi', 'mehdimehdimehdi', '1999-01-01', 'mehdidlkf', 'efklezf', '12', 12, '2019-01-01', '2020-01-01', 23, 'm', 2222553, '   mehdimehdidkvef  ', 'mohemed', ' \r\n \r\n lekrfgzvmehdidefkz', 'kharoubi', ''),
(19, 'med', 'med', 'medmed', '1999-02-05', 'drfrdz', 'meddrde', '12', 5, '2018-02-05', '2019-02-05', 22256, 'f', 668554495, '   fffolh  ', 'mohemed', '  roririf\r\n \r\n', 'kharoubi', ' '),
(28, 'doma', 'doma', 'domadomadoma', '1989-12-12', 'annaba', 'annaba', '12', 1, '2018-05-20', '2019-02-20', 2236, 'Masculin', 336, '      domadoma     ', 'mohemed', ' \r\ndomadomadoma', 'kharoubi', ' '),
(24, 'patient112', 'patient112', 'patient112kharoubi', '1959-02-12', 'drfrsz', 'dfrezd', '12', 2, '2012-12-12', '2016-12-12', 112, 'Masculin', 336655, '  patient112kharoubipatient112kharoubi ', 'mohemed', ' \r\n patient112kharoubipatient112kharoubi', 'kharoubi', ' ');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `nomimage` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `nom`, `nomimage`) VALUES
(2, 'doma', 'Penguins.jpg'),
(5, 'doma', 'Desert.jpg'),
(6, 'patient112', 'gris.jpg'),
(7, 'mehdi', 'images (1).jpg'),
(8, 'mehdi', 'images.jpg'),
(9, 'doma', 'rsm.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `infirmiere`
--

CREATE TABLE `infirmiere` (
  `inf_id` int(15) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `numero` int(50) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `motpass` varchar(100) NOT NULL,
  `confirme` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `infirmiere`
--

INSERT INTO `infirmiere` (`inf_id`, `nom`, `prenom`, `numero`, `doc_id`, `email`, `motpass`, `confirme`) VALUES
(2, 'salima', 'salima', 12354, 3, 'salima@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `numrdv` int(4) NOT NULL,
  `nompat` varchar(100) NOT NULL,
  `prenompat` varchar(100) NOT NULL,
  `daterdv` date NOT NULL,
  `doc_id_fk` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rendez_vous`
--

INSERT INTO `rendez_vous` (`numrdv`, `nompat`, `prenompat`, `daterdv`, `doc_id_fk`) VALUES
(4, 'patient01', 'prenompatient01', '2019-12-25', 2),
(5, 'fedjre', 'fedjr', '2020-12-12', 2),
(6, 'patient1', 'patient1', '2019-02-12', 3),
(7, 'patient10', 'patient10', '2019-06-12', 2),
(8, 'patient01', 'patient01', '2019-02-24', 1),
(9, 'patient02', 'patient02', '2019-02-14', 1),
(10, 'mehdi', 'mehdi', '2019-05-12', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `mdp` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`mdp`) VALUES
('123');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annee`
--
ALTER TABLE `annee`
  ADD PRIMARY KEY (`annee_id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`cour_id`),
  ADD KEY `module_fk` (`module_fk`);

--
-- Index pour la table `docteur`
--
ALTER TABLE `docteur`
  ADD PRIMARY KEY (`doc_id`);

--
-- Index pour la table `dossier malade`
--
ALTER TABLE `dossier malade`
  ADD PRIMARY KEY (`numdossier`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infirmiere`
--
ALTER TABLE `infirmiere`
  ADD PRIMARY KEY (`inf_id`),
  ADD KEY `doc_id` (`doc_id`);

--
-- Index pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`numrdv`),
  ADD KEY `doc_id` (`doc_id_fk`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annee`
--
ALTER TABLE `annee`
  MODIFY `annee_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `cour_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `docteur`
--
ALTER TABLE `docteur`
  MODIFY `doc_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `dossier malade`
--
ALTER TABLE `dossier malade`
  MODIFY `numdossier` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `infirmiere`
--
ALTER TABLE `infirmiere`
  MODIFY `inf_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `numrdv` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD CONSTRAINT `rendez_vous_ibfk_1` FOREIGN KEY (`doc_id_fk`) REFERENCES `docteur` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
