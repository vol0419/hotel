
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `adresy` (
  `id_adresy` int(11) NOT NULL,
  `miasto` varchar(50) NOT NULL,
  `ulica` varchar(50) NOT NULL,
  `numer` varchar(10) NOT NULL,
  `kod_pocztowy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `adresy` (`id_adresy`, `miasto`, `ulica`, `numer`, `kod_pocztowy`) VALUES
(1, 'Hotelandia', 'Miejska', '21', 121212),
(3, 'Wawa', 'Majowa', '32', 5111);

CREATE TABLE `goscie` (
  `id_goscie` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `pesel` bigint(11) NOT NULL,
  `telefon` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `goscie` (`id_goscie`, `imie`, `nazwisko`, `pesel`, `telefon`) VALUES
(1, 'Adam', 'Zaręba', 90121299338, 732722422),
(2, 'Maciej', 'Zawiszewski', 74070173841, 645422755),
(5, 'John', 'Snow', 33333333333, 444444444),
(6, 'ssss', 'ssss', 12342134, 123423412);

CREATE TABLE `hotele` (
  `id_hotele` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `adresID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hotele` (`id_hotele`, `nazwa`, `adresID`) VALUES
(1, 'Hotel Maeve', 1);

CREATE TABLE `pokoje` (
  `id_pokoje` int(11) NOT NULL,
  `nr` int(11) NOT NULL,
  `max_osob` int(11) NOT NULL,
  `cena_za_dobe` float NOT NULL,
  `typ` varchar(50) NOT NULL,
  `udogodnieniaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `pokoje` (`id_pokoje`, `nr`, `max_osob`, `cena_za_dobe`, `typ`, `udogodnieniaID`) VALUES
(1, 1, 2, 80, '2-osobowy standard', 1),
(2, 2, 2, 100, '2-osobowy superior', 2),
(3, 3, 5, 200, '5-osobowy superior', 1);

CREATE TABLE `pracownicy` (
  `idpracownicy` int(11) NOT NULL,
  `imie` varchar(45) DEFAULT NULL,
  `nazwisko` varchar(45) DEFAULT NULL,
  `pesel` bigint(11) DEFAULT NULL,
  `telefon` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `pracownicy` (`idpracownicy`, `imie`, `nazwisko`, `pesel`, `telefon`) VALUES
(1, 'Anna', 'Zaręba', 80329303932, 644722344),
(2, 'Zenon', 'Wilczyński', 75040980384, 544701380),
(3, 'dada', 'dadad', 111, 424);

CREATE TABLE `rezerwacje` (
  `id_rezerwacje` int(11) NOT NULL,
  `goscID` int(11) NOT NULL,
  `pokojID` int(11) NOT NULL,
  `data_przyjazdu` date NOT NULL,
  `data_wyjazdu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `rezerwacje` (`id_rezerwacje`, `goscID`, `pokojID`, `data_przyjazdu`, `data_wyjazdu`) VALUES
(1, 1, 2, '2017-05-18', '2017-05-20'),
(2, 2, 1, '2017-06-01', '2017-06-07');

CREATE TABLE `udogodnienia` (
  `id_udogodnienia` int(11) NOT NULL,
  `kuchnia` tinyint(4) NOT NULL,
  `balkon` tinyint(4) NOT NULL,
  `duze_lozko` tinyint(4) NOT NULL,
  `telewizor` tinyint(4) NOT NULL,
  `wifi` tinyint(4) NOT NULL,
  `lazienka` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `udogodnienia` (`id_udogodnienia`, `kuchnia`, `balkon`, `duze_lozko`, `telewizor`, `wifi`, `lazienka`) VALUES
(1, 1, 1, 1, 1, 1, 1),
(2, 0, 0, 1, 1, 1, 1);

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

INSERT INTO `users` (`id_users`, `login`, `password`) VALUES
(1, 'admin', 'admin'),
(5, 'MarcinWolski', 'user');

ALTER TABLE `adresy`
  ADD PRIMARY KEY (`id_adresy`);

ALTER TABLE `goscie`
  ADD PRIMARY KEY (`id_goscie`);

ALTER TABLE `hotele`
  ADD PRIMARY KEY (`id_hotele`),
  ADD KEY `adresID` (`adresID`);

ALTER TABLE `pokoje`
  ADD PRIMARY KEY (`id_pokoje`),
  ADD KEY `udogodnieniaID` (`udogodnieniaID`);

ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`idpracownicy`);

ALTER TABLE `rezerwacje`
  ADD PRIMARY KEY (`id_rezerwacje`),
  ADD KEY `goscID` (`goscID`),
  ADD KEY `pokojID` (`pokojID`);

ALTER TABLE `udogodnienia`
  ADD PRIMARY KEY (`id_udogodnienia`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

ALTER TABLE `adresy`
  MODIFY `id_adresy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `goscie`
  MODIFY `id_goscie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `hotele`
  MODIFY `id_hotele` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `pokoje`
  MODIFY `id_pokoje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `pracownicy`
  MODIFY `idpracownicy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `rezerwacje`
  MODIFY `id_rezerwacje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `udogodnienia`
  MODIFY `id_udogodnienia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `hotele`
  ADD CONSTRAINT `hotele_ibfk_1` FOREIGN KEY (`adresID`) REFERENCES `adresy` (`id_adresy`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `pokoje`
  ADD CONSTRAINT `pokoje_ibfk_1` FOREIGN KEY (`udogodnieniaID`) REFERENCES `udogodnienia` (`id_udogodnienia`);

ALTER TABLE `rezerwacje`
  ADD CONSTRAINT `rezerwacje_ibfk_1` FOREIGN KEY (`goscID`) REFERENCES `goscie` (`id_goscie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rezerwacje_ibfk_2` FOREIGN KEY (`pokojID`) REFERENCES `pokoje` (`id_pokoje`) ON DELETE NO ACTION ON UPDATE NO ACTION;
