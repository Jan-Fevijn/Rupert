CREATE SCHEMA `gip` ;
use `gip`;
CREATE TABLE `soortticket` (
  `idsoortTicket` INT NOT NULL AUTO_INCREMENT,
  `soortTicketNaam` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idsoortTicket`));
  
  CREATE TABLE `leerkracht` (
  `idLeerkracht` INT NOT NULL AUTO_INCREMENT,
  `LeerkrachtNaam` VARCHAR(45) NOT NULL,
  `LeerkrachtEmail` VARCHAR(45) NOT NULL,
  `LeerkrachtWachtwoord` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`idLeerkracht`));
  
  CREATE TABLE `ticket` (
  `idticket` INT NOT NULL AUTO_INCREMENT,
  `ticketSoort` INT NOT NULL,
  `leerkracht` INT NOT NULL,
  `beschrijvingTicket` VARCHAR(4500) NOT NULL,
  `afgehandelt` TINYINT NULL DEFAULT 0,
  PRIMARY KEY (`idticket`));
    

    
    
    
    
    
    
    
    
INSERT INTO `leerkracht` (`LeerkrachtNaam`, `LeerkrachtEmail`, `LeerkrachtWachtwoord`) VALUES ('dees', 'dees@atheneumjanfevijn.be', '0cc175b9c0f1b6a831c399e269772661');
INSERT INTO `leerkracht` (`LeerkrachtNaam`, `LeerkrachtEmail`, `LeerkrachtWachtwoord`) VALUES ('des', 'des@atheneumjanfevijn.be', '0cc175b9c0f1b6a831c399e269772661');

INSERT INTO `soortticket` (`soortTicketNaam`) VALUES ('Kapotte media (muis, toetsenbord...)');
INSERT INTO `soortticket` (`soortTicketNaam`) VALUES ('Geen internet op een pc');
INSERT INTO `soortticket` (`soortTicketNaam`) VALUES ('Ontbrekende media (muis, toetsenbord...)');

INSERT INTO `ticket` (`ticketSoort`, `leerkracht`, `beschrijvingTicket`, `afgehandelt`) VALUES ('1', '1', 'example', '1');
INSERT INTO `ticket` (`ticketSoort`, `leerkracht`, `beschrijvingTicket`, `afgehandelt`) VALUES ('2', '2', 'example', '0');
INSERT INTO `ticket` (`ticketSoort`, `leerkracht`, `beschrijvingTicket`, `afgehandelt`) VALUES ('3', '1', 'test', '0');