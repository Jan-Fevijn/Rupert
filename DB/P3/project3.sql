drop database if exists project3; 
create database if not exists project3;

use project3;
CREATE TABLE `soortbrood` (
  idSoortBrood INT NOT NULL AUTO_INCREMENT,
  naamBrood VARCHAR(20) NOT NULL,
   img LONGBLOB NULL,
  PRIMARY KEY (idsoortBrood));


CREATE TABLE `klant` (
  idKlant INT NOT NULL AUTO_INCREMENT,
  codeKlant int NOT NULL,
  saldo int NOT NULL,
  naam varchar(50),
  PRIMARY KEY (idKlant));

ALTER TABLE `project3`.`klant` 
ADD UNIQUE INDEX `klantcode` (`codeKlant` ASC);
;

CREATE TABLE `locatieBrood` (
  idLocatieBrood INT NOT NULL AUTO_INCREMENT,
  idSoortBrood int NOT NULL,
  locatieCode int NOT NULL, 
  hoeveelheid int NOT NULL,
  PRIMARY KEY (idLocatieBrood));
  
  CREATE TABLE `bestelling` (
  
  idBestelling INT NOT NULL AUTO_INCREMENT,
  codeKlant INT NOT NULL,
  idSoortBrood INT NOT NULL,
  idLocatieBrood INT NOT NULL,
  datumBestelling date NOT NULL,
  FOREIGN KEY (`idSoortBrood`)
  REFERENCES `project3`.`soortbrood` (`idSoortBrood`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
  FOREIGN KEY (`idLocatieBrood`)
  REFERENCES `project3`.`locatiebrood` (`idLocatieBrood`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
  FOREIGN KEY (`codeKlant`)
  REFERENCES `project3`.`klant` (`codeKlant`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
  PRIMARY KEY (idBestelling));

ALTER TABLE `project3`.`bestelling` ADD INDEX `locatiebrood_idx` (`idLocatieBrood` ASC),
ADD INDEX `soortbrood_idx` (`idSoortBrood` ASC);



ALTER TABLE `project3`.`bestelling` 
ADD INDEX `bestelling_ibfk_3_idx` (`codeKlant` ASC);
;

INSERT INTO `project3`.`klant` (`codeKlant`, `saldo`, `naam`) VALUES ('123', '12', 'Naam');

INSERT INTO `project3`.`soortbrood` (`naamBrood`) VALUES ('Bruin brood');

INSERT INTO `project3`.`locatiebrood` (`idSoortBrood`, `locatieCode`, `hoeveelheid`) VALUES ('2', '1', '7');

INSERT INTO `project3`.`bestelling` (`codeKlant`, `idSoortBrood`, `idLocatieBrood`, `datumBestelling`) VALUES ('123', '1', '1', '20200422');