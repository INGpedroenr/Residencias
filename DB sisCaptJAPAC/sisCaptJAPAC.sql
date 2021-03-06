-- MySQL Script generated by MySQL Workbench
-- Wed Jun 21 15:19:07 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema dbSisCaptJAPAC
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dbSisCaptJAPAC
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbSisCaptJAPAC` DEFAULT CHARACTER SET utf8 ;
USE `dbSisCaptJAPAC` ;

-- -----------------------------------------------------
-- Table `dbSisCaptJAPAC`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbSisCaptJAPAC`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido` VARCHAR(50) NOT NULL,
  `departamento` VARCHAR(50) NULL,
  `puesto` VARCHAR(50) NULL,
  `correo_electronico` VARCHAR(50) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbSisCaptJAPAC`.`establecimiento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbSisCaptJAPAC`.`establecimiento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre_establecimiento` VARCHAR(100) NOT NULL,
  `razon_social` VARCHAR(100) NOT NULL,
  `rfc` VARCHAR(25) NOT NULL,
  `actividad` VARCHAR(30) NOT NULL,
  `calle` VARCHAR(100) NOT NULL,
  `num_exterior` INT NULL,
  `num_interior` VARCHAR(7) NULL,
  `colonia` VARCHAR(100) NOT NULL,
  `codigo_postal` INT NOT NULL,
  `telefono` INT NOT NULL,
  `num_medidor` INT NULL,
  `cuenta` INT NULL,
  `correo_electronico` VARCHAR(50) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbSisCaptJAPAC`.`visita_inspeccion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbSisCaptJAPAC`.`visita_inspeccion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numvisita_inspeccion` VARCHAR(25) NOT NULL,
  `fechavisita_inspeccion` DATETIME NOT NULL,
  `num_oficioVI` VARCHAR(30) NOT NULL,
  `descargas` INT NULL,
  `trampa_gya` TINYINT NULL,
  `trampa_sst` TINYINT NULL,
  `num_permiso` VARCHAR(25) NULL,
  `fechaemision_permiso` DATETIME NULL,
  `status` INT NULL,
  `observacion` VARCHAR(500) NULL,
  `empresa_nueva` TINYINT NULL,
  `establecimiento_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_visitaInspeccion_establecimiento_idx` (`establecimiento_id` ASC),
  CONSTRAINT `fk_visitaInspeccion_establecimiento`
    FOREIGN KEY (`establecimiento_id`)
    REFERENCES `dbSisCaptJAPAC`.`establecimiento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbSisCaptJAPAC`.`inicio_procedimiento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbSisCaptJAPAC`.`inicio_procedimiento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `laboratorio` VARCHAR(30) NOT NULL,
  `dbo` DECIMAL(11,2) NOT NULL,
  `sst` DECIMAL(11,2) NOT NULL,
  `gya` DECIMAL(11,2) NOT NULL,
  `num_oficioIP` VARCHAR(30) NOT NULL,
  `fecha_eleboracion` DATETIME NULL,
  `fecha_recibidoIP` DATETIME NULL,
  `establecimiento_id` INT NOT NULL,
  `visita_inspeccion_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_inicoProcedimiento_establecimiento_idx` (`establecimiento_id` ASC),
  INDEX `fk_inicioProcedimiento_visitaInspeccion_idx` (`visita_inspeccion_id` ASC),
  CONSTRAINT `fk_inicioProcedimiento_establecimiento`
    FOREIGN KEY (`establecimiento_id`)
    REFERENCES `dbSisCaptJAPAC`.`establecimiento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inicioProcedimiento_visitaInspeccion`
    FOREIGN KEY (`visita_inspeccion_id`)
    REFERENCES `dbSisCaptJAPAC`.`visita_inspeccion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbSisCaptJAPAC`.`resultados_lab_externos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbSisCaptJAPAC`.`resultados_lab_externos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fechaentrega_estudios` DATETIME NULL,
  `descargasRLE` INT NULL,
  `laboratorio` VARCHAR(30) NULL,
  `dbo_RLE` DECIMAL(11,2) NOT NULL,
  `sst_RLE` DECIMAL(11,2) NOT NULL,
  `gya_RLE` DECIMAL(11,2) NOT NULL,
  `status` INT NULL,
  `establecimiento_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_resultadosLabExternos_establecimiento_idx` (`establecimiento_id` ASC),
  CONSTRAINT `fk_resultadosLabExternos_establecimiento`
    FOREIGN KEY (`establecimiento_id`)
    REFERENCES `dbSisCaptJAPAC`.`establecimiento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbSisCaptJAPAC`.`ip_lab_externos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbSisCaptJAPAC`.`ip_lab_externos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `num_oficioIPLE` VARCHAR(30) NOT NULL,
  `fecha_elaboracioIPLE` DATETIME NULL,
  `fecha_recibido_oficioIPLE` DATETIME NULL,
  `resultados_lab_externos_id` INT NOT NULL,
  `calculoindice_incumplimiento_id` INT NOT NULL,
  `establecimiento_id` INT NOT NULL,
  `resolutivo_administrativo_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_ipLabExternos_resutadoLabExternos_idx` (`resultados_lab_externos_id` ASC),
  INDEX `fk_ipLabExernos_calculoIndiceIncumplimiento_idx` (`calculoindice_incumplimiento_id` ASC),
  INDEX `fk_ipLabExternos_establecimiento_idx` (`establecimiento_id` ASC),
  INDEX `fk_ipLabExternos_resolutivoAdministrativo_idx` (`resolutivo_administrativo_id` ASC),
  CONSTRAINT `fk_ipLabExternos_resutadoLabExternos`
    FOREIGN KEY (`resultados_lab_externos_id`)
    REFERENCES `dbSisCaptJAPAC`.`resultados_lab_externos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ipLabExernos_calculoIndiceIncumplimiento`
    FOREIGN KEY (`calculoindice_incumplimiento_id`)
    REFERENCES `dbSisCaptJAPAC`.`calculoindice_incumplimiento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ipLabExternos_establecimiento`
    FOREIGN KEY (`establecimiento_id`)
    REFERENCES `dbSisCaptJAPAC`.`establecimiento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ipLabExternos_resolutivoAdministrativo`
    FOREIGN KEY (`resolutivo_administrativo_id`)
    REFERENCES `dbSisCaptJAPAC`.`resolutivo_administrativo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbSisCaptJAPAC`.`calculoindice_incumplimiento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbSisCaptJAPAC`.`calculoindice_incumplimiento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha_muestreo` DATETIME NOT NULL,
  `gastomedio_diario` DECIMAL(11,2) NOT NULL,
  `volumen_mes` DECIMAL(11,2) NULL,
  `valorbasico_incumplido` DECIMAL(11,2) NULL,
  `cuotapeso_sobrekg` DECIMAL(11,2) NULL,
  `carga_contaminante` DECIMAL(11,2) NULL,
  `monto_pagar` DECIMAL(11,2) NULL,
  `dbo_lmp` DECIMAL(11,2) NULL,
  `sst_lmp` DECIMAL(11,2) NULL,
  `gya_lmp` DECIMAL(11,2) NULL,
  `establecimiento_id` INT NOT NULL,
  `inicio_procedimiento_id` INT NOT NULL,
  `ip_lab_externos_ip` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_calculoIndiceIncumplimiento_establecimiento_idx` (`establecimiento_id` ASC),
  INDEX `fk_calculoIndiceIncumplimiento_inicioProcedimiento_idx` (`inicio_procedimiento_id` ASC),
  INDEX `fk_calculoIndiceIncumplimiento_ipLabExternos_idx` (`ip_lab_externos_ip` ASC),
  CONSTRAINT `fk_calculoIndiceIncumplimiento_establecimiento`
    FOREIGN KEY (`establecimiento_id`)
    REFERENCES `dbSisCaptJAPAC`.`establecimiento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_calculoIndiceIncumplimiento_inicioProcedimiento`
    FOREIGN KEY (`inicio_procedimiento_id`)
    REFERENCES `dbSisCaptJAPAC`.`inicio_procedimiento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_calculoIndiceIncumplimiento_ipLabExternos`
    FOREIGN KEY (`ip_lab_externos_ip`)
    REFERENCES `dbSisCaptJAPAC`.`ip_lab_externos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbSisCaptJAPAC`.`resolutivo_administrativo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbSisCaptJAPAC`.`resolutivo_administrativo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha_programacion` DATETIME NULL,
  `num_oficioRA` VARCHAR(30) NULL,
  `fecha_resoltivo` DATETIME NULL,
  `fecha_recibidoRA` DATETIME NULL,
  `num_meses_cobrar` DECIMAL(11,2) NULL,
  `establecimiento_id` INT NOT NULL,
  `visita_inspeccion_id` INT NOT NULL,
  `inicio_procedimiento_id` INT NOT NULL,
  `calculoindice_incumplimiento_id` INT NOT NULL,
  `ip_lab_externos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_resolutivoAdministrativo_establecimiento_idx` (`establecimiento_id` ASC),
  INDEX `fk_resolutivoAdministrativo_idx` (`visita_inspeccion_id` ASC),
  INDEX `fk_resolutivoAdministrativo_inicioProcedimiento_idx` (`inicio_procedimiento_id` ASC),
  INDEX `fk_resolutivoAdministrativo_calculoIndiceIncumplimiento_idx` (`calculoindice_incumplimiento_id` ASC),
  INDEX `fk_resolutivoAdministrativo_idx1` (`ip_lab_externos_id` ASC),
  CONSTRAINT `fk_resolutivoAdministrativo_establecimiento`
    FOREIGN KEY (`establecimiento_id`)
    REFERENCES `dbSisCaptJAPAC`.`establecimiento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resolutivoAdministrativo_visitaInspeccion`
    FOREIGN KEY (`visita_inspeccion_id`)
    REFERENCES `dbSisCaptJAPAC`.`visita_inspeccion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resolutivoAdministrativo_inicioProcedimiento`
    FOREIGN KEY (`inicio_procedimiento_id`)
    REFERENCES `dbSisCaptJAPAC`.`inicio_procedimiento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resolutivoAdministrativo_calculoIndiceIncumplimiento`
    FOREIGN KEY (`calculoindice_incumplimiento_id`)
    REFERENCES `dbSisCaptJAPAC`.`calculoindice_incumplimiento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resolutivoAdministrativo`
    FOREIGN KEY (`ip_lab_externos_id`)
    REFERENCES `dbSisCaptJAPAC`.`ip_lab_externos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbSisCaptJAPAC`.`inspecciones_informales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbSisCaptJAPAC`.`inspecciones_informales` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha_inspecciones_informales` DATETIME NOT NULL,
  `numfolio_infraccion` INT NOT NULL,
  `nombre_establecimiento` VARCHAR(100) NOT NULL,
  `calle` VARCHAR(100) NOT NULL,
  `num_exterior` INT NULL,
  `num_interior` VARCHAR(7) NULL,
  `colonia` VARCHAR(100) NOT NULL,
  `codigo_postal` INT NOT NULL,
  `actividad` VARCHAR(30) NOT NULL,
  `cuenta` INT NULL,
  `num_medidor` INT NULL,
  `señas_particulares` VARCHAR(100) NOT NULL,
  `hora` VARCHAR(25) NOT NULL,
  `nombre_inspector` VARCHAR(100) NOT NULL,
  `num_inspector` INT NOT NULL,
  `motivo_infraccion` VARCHAR(100) NOT NULL,
  `observacion` VARCHAR(500) NULL,
  `elaboro` VARCHAR(50) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbSisCaptJAPAC`.`inspecciones_formales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbSisCaptJAPAC`.`inspecciones_formales` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `establecimiento_id` INT NOT NULL,
  `visita_inspeccion_id` INT NOT NULL,
  `incio_procedimiento_id` INT NOT NULL,
  `resolutivo_administrativo_id` INT NOT NULL,
  `calculoindice_incumplimiento_id` INT NOT NULL,
  `resultados_lab_externos_id` INT NOT NULL,
  `ip_lab_externos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_inspeccionFormales_vistaInspeccion_idx` (`visita_inspeccion_id` ASC),
  INDEX `fk_inspeccionesFormales_establecimientos_idx` (`establecimiento_id` ASC),
  INDEX `fk_inspeccionesFormales_inicioProcedimiento_idx` (`incio_procedimiento_id` ASC),
  INDEX `fk_inspeccionesFormales_resoltivoAdministrativo_idx` (`resolutivo_administrativo_id` ASC),
  INDEX `fk_inspeccionesFormales_calculoIndiceIncumplimiento_idx` (`calculoindice_incumplimiento_id` ASC),
  INDEX `fk_inspeccionesFormales_resultadoLabExternos_idx` (`resultados_lab_externos_id` ASC),
  INDEX `fk_inspeccionesFormales_inicioProcedimientoLabExternos_idx` (`ip_lab_externos_id` ASC),
  CONSTRAINT `fk_inspeccionesFormales_vistaInspeccion`
    FOREIGN KEY (`visita_inspeccion_id`)
    REFERENCES `dbSisCaptJAPAC`.`visita_inspeccion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inspeccionesFormales_establecimientos`
    FOREIGN KEY (`establecimiento_id`)
    REFERENCES `dbSisCaptJAPAC`.`establecimiento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inspeccionesFormales_inicioProcedimiento`
    FOREIGN KEY (`incio_procedimiento_id`)
    REFERENCES `dbSisCaptJAPAC`.`inicio_procedimiento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inspeccionesFormales_resoltivoAdministrativo`
    FOREIGN KEY (`resolutivo_administrativo_id`)
    REFERENCES `dbSisCaptJAPAC`.`resolutivo_administrativo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inspeccionesFormales_calculoIndiceIncumplimiento`
    FOREIGN KEY (`calculoindice_incumplimiento_id`)
    REFERENCES `dbSisCaptJAPAC`.`calculoindice_incumplimiento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inspeccionesFormales_resultadoLabExternos`
    FOREIGN KEY (`resultados_lab_externos_id`)
    REFERENCES `dbSisCaptJAPAC`.`resultados_lab_externos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inspeccionesFormales_inicioProcedimientoLabExternos`
    FOREIGN KEY (`ip_lab_externos_id`)
    REFERENCES `dbSisCaptJAPAC`.`ip_lab_externos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
