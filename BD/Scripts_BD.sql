
CREATE SCHEMA IF NOT EXISTS `BD_John` DEFAULT CHARACTER SET utf8 ;
USE `BD_John` ;


CREATE TABLE IF NOT EXISTS `BD_John`.`departamento` (
  `id` INT(11) NOT NULL,
  `descripcion` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `BD_John`.`ciudad` (
  `id` INT(11) NOT NULL,
  `idDepartamento` INT(11) NOT NULL,
  `descripcion` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
    CONSTRAINT `fk_ciudad_departamento`
    FOREIGN KEY (`idDepartamento`)
    REFERENCES `BD_John`.`departamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `BD_John`.`tipoDocumento` (
  `id` INT(11) NOT NULL,
  `descripcion` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `BD_John`.`persona` (
  `id` INT(11) NOT NULL,
  `idTipoDocumento` INT(11) NOT NULL,
  `idCiudad` INT(255) NOT NULL,
  `numero Documento` VARCHAR(20) NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `apellido` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
    CONSTRAINT `idCiudad`
    FOREIGN KEY (`idCiudad`)
    REFERENCES `BD_John`.`ciudad` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idTipoDocumento`
    FOREIGN KEY (`idTipoDocumento`)
    REFERENCES `BD_John`.`tipoDocumento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


