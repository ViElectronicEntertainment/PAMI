CREATE TABLE `Usuario` (
	`ID` VARCHAR(255) NOT NULL,
	`Nombre` varchar NOT NULL,
	`Email` varchar NOT NULL,
	`Celular` varchar(10) NOT NULL,
	`Rango` varchar NOT NULL,
	`Pts Acumulados` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `Proyecto` (
	`IDProyecto` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`Nombre` varchar NOT NULL,
	`Fecha Inicio` DATE NOT NULL,
	`Fecha Fin` DATE NOT NULL,
	`Estado` varchar NOT NULL,
	`Responsable` VARCHAR(255) NOT NULL,
	`Puntos` VARCHAR(255) NOT NULL
);

CREATE TABLE `Tarea` (
	`IDTarea` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`Nombre` varchar NOT NULL,
	`Fecha Inicio` DATE NOT NULL,
	`Fecha Fin` DATE NOT NULL,
	`Estado` varchar NOT NULL,
	`Puntos` VARCHAR(255) NOT NULL,
	`Proyecto asignado` BINARY NOT NULL
);

CREATE TABLE `Nivel` (
	`Rango` varchar NOT NULL,
	`Pts` VARCHAR(255) NOT NULL
);

ALTER TABLE `Usuario` ADD CONSTRAINT `Usuario_fk0` FOREIGN KEY (`Rango`) REFERENCES `Nivel`(`Rango`);

ALTER TABLE `Proyecto` ADD CONSTRAINT `Proyecto_fk0` FOREIGN KEY (`Responsable`) REFERENCES `Usuario`(`ID`);

ALTER TABLE `Proyecto` ADD CONSTRAINT `Proyecto_fk1` FOREIGN KEY (`Puntos`) REFERENCES `Usuario`(`Pts Acumulados`);

ALTER TABLE `Tarea` ADD CONSTRAINT `Tarea_fk0` FOREIGN KEY (`Puntos`) REFERENCES `Usuario`(`Pts Acumulados`);

ALTER TABLE `Tarea` ADD CONSTRAINT `Tarea_fk1` FOREIGN KEY (`Proyecto asignado`) REFERENCES `Proyecto`(`IDProyecto`);

