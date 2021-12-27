-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;


-- -----------------------------------------------------
-- Table `mydb`.`carrera`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`carrera` (
  `idcarrera` INT NOT NULL AUTO_INCREMENT,
  `nomCarrera` VARCHAR(45) NULL,
  PRIMARY KEY (`idcarrera`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`roles` (
  `idroles` INT NOT NULL AUTO_INCREMENT,
  `nomRol` VARCHAR(45) NOT NULL,
PRIMARY KEY (`idroles`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `contraseña` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL UNIQUE,
  `telefono` VARCHAR(45) NULL,
  `nivelEducativo` VARCHAR(45) NULL,
  `cargo` VARCHAR(45) NULL,
  `carrera_idcarrera` INT NOT NULL,
  `roles_idroles` INT NULL,
  `usuHabilitado` INT NULL,
  PRIMARY KEY (`idusuario`),
  CONSTRAINT `fk_usuario_carrera1`
    FOREIGN KEY (`carrera_idcarrera`)
    REFERENCES `mydb`.`carrera` (`idcarrera`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_roles1`
    FOREIGN KEY (`roles_idroles`)
    REFERENCES `mydb`.`roles` (`idroles`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`institucion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`institucion` (
  `idinstitucion` INT NOT NULL AUTO_INCREMENT,
  `instNombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idinstitucion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`institucion_has_carrera`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`institucion_has_carrera` (
  `institucion_idinstitucion` INT NOT NULL,
  `carrera_idcarrera` INT NOT NULL,
  PRIMARY KEY (`institucion_idinstitucion`, `carrera_idcarrera`),
  CONSTRAINT `fk_institucion_has_carrera_institucion1`
    FOREIGN KEY (`institucion_idinstitucion`)
    REFERENCES `mydb`.`institucion` (`idinstitucion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_institucion_has_carrera_carrera1`
    FOREIGN KEY (`carrera_idcarrera`)
    REFERENCES `mydb`.`carrera` (`idcarrera`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`mensaje`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`mensaje` (
  `idmensaje` INT NOT NULL AUTO_INCREMENT,
  `contenido` VARCHAR(45) NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idmensaje`),
  CONSTRAINT `fk_mensaje_usuario2`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `mydb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cursos` (
  `idcursos` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idcursos`),
  CONSTRAINT `fk_cursos_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `mydb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`temas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`temas` (
  `idtemas` INT NOT NULL AUTO_INCREMENT,
  `nomTema` VARCHAR(45) NOT NULL,
  `linkROnline` VARCHAR(45) NULL,
  `colab` VARCHAR(45) NULL,
  `linkGit` VARCHAR(45) NULL,
  `cursos_idcursos` INT NOT NULL,
  `pdf` VARCHAR(2000) NULL,
  PRIMARY KEY (`idtemas`),
  CONSTRAINT `fk_temas_cursos1`
    FOREIGN KEY (`cursos_idcursos`)
    REFERENCES `mydb`.`cursos` (`idcursos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pdfEstado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pdfEstado` (
  `idpdfEstado` INT NOT NULL AUTO_INCREMENT,
  `pdfEstado` VARCHAR(45) NOT NULL,
  `pdfGuardado` VARCHAR(45) NOT NULL,
  `temas_idtemas` INT NOT NULL,
  PRIMARY KEY (`idpdfEstado`),
  CONSTRAINT `fk_pdfEstado_temas1`
    FOREIGN KEY (`temas_idtemas`)
    REFERENCES `mydb`.`temas` (`idtemas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO roles (nomRol) VALUES ('Desactivado');
INSERT INTO roles (nomRol) VALUES ('admin');
INSERT INTO roles (nomRol) VALUES ('creador');
INSERT INTO roles (nomRol) VALUES ('usuario');

INSERT INTO carrera (nomCarrera) VALUES ('Ingenieria En Sistemas');
INSERT INTO carrera (nomCarrera) VALUES ('Ingenieria Pesquera');
INSERT INTO carrera (nomCarrera) VALUES ('Ingenieria Electronica');

INSERT INTO usuario (nombre, apellido, contraseña, correo, telefono, nivelEducativo, cargo, carrera_idcarrera, roles_idroles, usuHabilitado)
VALUES ('Cesar', 'Rodriguez', '123', 'cesar@gmail.com', '3023145126', 'Superior', 'Estudiante', 1, 2, 1);

INSERT INTO usuario (nombre, apellido, contraseña, correo, telefono, nivelEducativo, cargo, carrera_idcarrera, roles_idroles, usuHabilitado)
VALUES ('Cristian', 'Foronda', '123', 'cris@gmail.com', '3023145126', 'Superior', 'Estudiante', 1, 1, 0);

INSERT INTO cursos (nombre, usuario_idusuario)
VALUES ('Acuicultura', 1);

INSERT INTO cursos (nombre, usuario_idusuario)
VALUES ('Robocop', 1);

INSERT INTO cursos (nombre, usuario_idusuario)
VALUES ('Quimica', 2);

INSERT INTO temas (nomTema,linkROnline, colab, linkGit, cursos_idcursos)
VALUES ('Anatomia del pez', 'https://tusnalgas.com', 'https://tuvagina.com', 'https://tamarindoseco.com', 1);

INSERT INTO temas (nomTema,linkROnline, colab, linkGit, cursos_idcursos)
VALUES ('hOLA MUNDO', 'https://tusnalgas.com', 'https://tuvagina.com', 'https://tamarindoseco.com', 2);

SELECT * FROM usuario 
INNER JOIN cursos ON usuario.idusuario = cursos.usuario_idusuario
LEFT JOIN temas ON cursos.idcursos = temas.cursos_idcursos WHERE usuario.idusuario = 2 AND cursos.usuario_idusuario = 2;

SELECT idusuario FROM usuario WHERE correo = 'cesar@gmail.com';

SELECT cursos.idcursos, temas.nomTema, temas.linkROnline, temas.colab, temas.linkGit FROM cursos
INNER JOIN temas ON cursos.idcursos = temas.idtemas;

SELECT * FROM cursos
INNER JOIN temas ON cursos.idcursos = temas.idtemas;

SELECT * FROM cursos;

SELECT COUNT(*) FROM usuario;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
