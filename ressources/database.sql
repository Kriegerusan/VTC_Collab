/* création database si inexistante */
CREATE DATABASE IF NOT EXISTS `if0_36696451_vtc` DEFAULT CHARACTER
SET
    latin1 COLLATE latin1_swedish_ci;

USE `if0_36696451_vtc`;

/* création tables */
CREATE TABLE
    `association` (
        `id` int (11) NOT NULL,
        `conducteur` int (11) NOT NULL,
        `vehicule` int (11) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE
    `conducteur` (
        `id` int (11) NOT NULL,
        `photo` varchar(50) DEFAULT NULL,
        `prenom` varchar(50) NOT NULL,
        `nom` varchar(50) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE
    `vehicule` (
        `id` int (11) NOT NULL,
        `photo` varchar(100) DEFAULT NULL,
        `marque` varchar(50) NOT NULL,
        `modele` varchar(50) NOT NULL,
        `couleur` varchar(50) NOT NULL,
        `immatriculation` varchar(10) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

ALTER TABLE `association` ADD PRIMARY KEY (`id`),
ADD KEY `conduc` (`conducteur`),
ADD KEY `vehicule` (`vehicule`);

ALTER TABLE `conducteur` ADD PRIMARY KEY (`id`);

ALTER TABLE `vehicule` ADD PRIMARY KEY (`id`);

ALTER TABLE `association` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `conducteur` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `vehicule` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `association` ADD CONSTRAINT `conduc` FOREIGN KEY (`conducteur`) REFERENCES `conducteur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `vehicule` FOREIGN KEY (`vehicule`) REFERENCES `vehicule` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;