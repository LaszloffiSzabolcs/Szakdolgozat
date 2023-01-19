-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Jan 19. 10:00
-- Kiszolgáló verziója: 10.4.24-MariaDB
-- PHP verzió: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `etterem_belepes`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `dolgozo`
--

CREATE TABLE `dolgozo` (
  `Dolg_id` int(11) NOT NULL,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `telefonszam` char(15) COLLATE utf8_hungarian_ci NOT NULL,
  `Rang_id` int(11) NOT NULL,
  `Poz_id` int(11) NOT NULL,
  `Felh_id` int(11) NOT NULL,
  `Stat_id` int(11) NOT NULL,
  `Musz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `dolgozo`
--

INSERT INTO `dolgozo` (`Dolg_id`, `nev`, `telefonszam`, `Rang_id`, `Poz_id`, `Felh_id`, `Stat_id`, `Musz_id`) VALUES
(1, 'Szeksz Elek', '066942069', 2, 4, 2, 1, 1),
(3, 'Admin', '0000000', 1, 4, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalo`
--

CREATE TABLE `felhasznalo` (
  `Felh_id` int(11) NOT NULL,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `jelszo` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `felhasznalo`
--

INSERT INTO `felhasznalo` (`Felh_id`, `nev`, `jelszo`) VALUES
(1, 'Admin', 'Admin'),
(2, 'SzekszElek', '123456');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `muszak`
--

CREATE TABLE `muszak` (
  `Musz_id` int(11) NOT NULL,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `ido` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `muszak`
--

INSERT INTO `muszak` (`Musz_id`, `nev`, `ido`) VALUES
(1, 'Reggeli műszak', '6:00-14:00'),
(2, 'Délutáni műszak', '14:00-22:00'),
(3, 'Esti műszak', '22:00-6:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `pozicio`
--

CREATE TABLE `pozicio` (
  `Poz_id` int(11) NOT NULL,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `pozicio`
--

INSERT INTO `pozicio` (`Poz_id`, `nev`) VALUES
(1, 'Étterem vezető'),
(2, 'Műszakvezető'),
(3, 'Műszakvezető helyettes'),
(4, 'Éttermi dolgozó');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rangok`
--

CREATE TABLE `rangok` (
  `Rang_id` int(11) NOT NULL,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `rangok`
--

INSERT INTO `rangok` (`Rang_id`, `nev`) VALUES
(1, 'Admin'),
(2, 'Felhasználó');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `statusz`
--

CREATE TABLE `statusz` (
  `Stat_id` int(11) NOT NULL,
  `nev` varchar(255) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `statusz`
--

INSERT INTO `statusz` (`Stat_id`, `nev`) VALUES
(1, 'Dolgozik'),
(2, 'Beteg'),
(3, 'GYES'),
(4, 'Szabadság'),
(5, 'Pihenőnap');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `dolgozo`
--
ALTER TABLE `dolgozo`
  ADD PRIMARY KEY (`Dolg_id`),
  ADD KEY `Dolgozó_fk0` (`Rang_id`),
  ADD KEY `Dolgozó_fk1` (`Poz_id`),
  ADD KEY `Dolgozó_fk2` (`Felh_id`),
  ADD KEY `Dolgozó_fk3` (`Stat_id`),
  ADD KEY `Dolgozó_fk4` (`Musz_id`);

--
-- A tábla indexei `felhasznalo`
--
ALTER TABLE `felhasznalo`
  ADD PRIMARY KEY (`Felh_id`);

--
-- A tábla indexei `muszak`
--
ALTER TABLE `muszak`
  ADD PRIMARY KEY (`Musz_id`);

--
-- A tábla indexei `pozicio`
--
ALTER TABLE `pozicio`
  ADD PRIMARY KEY (`Poz_id`);

--
-- A tábla indexei `rangok`
--
ALTER TABLE `rangok`
  ADD PRIMARY KEY (`Rang_id`);

--
-- A tábla indexei `statusz`
--
ALTER TABLE `statusz`
  ADD PRIMARY KEY (`Stat_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `dolgozo`
--
ALTER TABLE `dolgozo`
  MODIFY `Dolg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `felhasznalo`
--
ALTER TABLE `felhasznalo`
  MODIFY `Felh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT a táblához `muszak`
--
ALTER TABLE `muszak`
  MODIFY `Musz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `pozicio`
--
ALTER TABLE `pozicio`
  MODIFY `Poz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `rangok`
--
ALTER TABLE `rangok`
  MODIFY `Rang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT a táblához `statusz`
--
ALTER TABLE `statusz`
  MODIFY `Stat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `dolgozo`
--
ALTER TABLE `dolgozo`
  ADD CONSTRAINT `Dolgozó_fk0` FOREIGN KEY (`Rang_id`) REFERENCES `rangok` (`Rang_id`),
  ADD CONSTRAINT `Dolgozó_fk1` FOREIGN KEY (`Poz_id`) REFERENCES `pozicio` (`Poz_id`),
  ADD CONSTRAINT `Dolgozó_fk2` FOREIGN KEY (`Felh_id`) REFERENCES `felhasznalo` (`Felh_id`),
  ADD CONSTRAINT `Dolgozó_fk3` FOREIGN KEY (`Stat_id`) REFERENCES `statusz` (`Stat_id`),
  ADD CONSTRAINT `Dolgozó_fk4` FOREIGN KEY (`Musz_id`) REFERENCES `muszak` (`Musz_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
