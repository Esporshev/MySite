SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `ssv_parket` DEFAULT CHARACTER SET utf8 ;
USE `ssv_parket` ;

-- -----------------------------------------------------
-- Table `ssv_parket`.`Vendors`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ssv_parket`.`Vendors` ;

CREATE  TABLE IF NOT EXISTS `ssv_parket`.`Vendors` (
  `idVendors` INT NOT NULL AUTO_INCREMENT ,
  `Name` VARCHAR(330) NOT NULL ,
  `Country` VARCHAR(330) NULL DEFAULT NULL ,
  PRIMARY KEY (`idVendors`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ssv_parket`.`Images`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ssv_parket`.`Images` ;

CREATE  TABLE IF NOT EXISTS `ssv_parket`.`Images` (
  `idImages` INT NOT NULL AUTO_INCREMENT ,
  `Source` VARCHAR(330) NOT NULL ,
  PRIMARY KEY (`idImages`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ssv_parket`.`Pages`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ssv_parket`.`Pages` ;

CREATE  TABLE IF NOT EXISTS `ssv_parket`.`Pages` (
  `idPages` INT NOT NULL AUTO_INCREMENT ,
  `lft` INT NOT NULL ,
  `rgt` INT NOT NULL ,
  `level` INT NOT NULL ,
  `type` INT NULL ,
  `name` VARCHAR(330) NULL DEFAULT NULL ,
  `content` LONGTEXT NULL DEFAULT NULL ,
  `title` VARCHAR(330) NULL DEFAULT NULL ,
  `price` INT NULL DEFAULT NULL ,
  `Vendors_idVendors` INT NOT NULL ,
  `Images_idImages` INT NOT NULL ,
  PRIMARY KEY (`idPages`) ,
  KEY `lft` (`lft`,`rgt`,`level`) ,
  INDEX `fk_Pages_Vendors_idx` (`Vendors_idVendors` ASC) ,
  INDEX `fk_Pages_Images1_idx` (`Images_idImages` ASC) ,
  CONSTRAINT `fk_Pages_Vendors`
    FOREIGN KEY (`Vendors_idVendors` )
    REFERENCES `ssv_parket`.`Vendors` (`idVendors` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pages_Images1`
    FOREIGN KEY (`Images_idImages` )
    REFERENCES `ssv_parket`.`Images` (`idImages` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
