DROP DATABASE IF EXISTS validater;

CREATE DATABASE validater;

USE validater;

CREATE TABLE usuarios
(
idUsuario int auto_increment,
nombre varchar(30),
apellido varchar(30),
username varchar(30),
correoElectronico varchar(30),
contrasenia varchar(15),
primary key(idUsuario)
);

CREATE TABLE registrotickets (
  idregistrotickets INT NOT NULL AUTO_INCREMENT ,
  idUsuario INT NOT NULL ,
  fechacliente DATE NULL ,
  horacliente VARCHAR(5) NULL ,
  fechaticket DATE NULL,
  ticket VARCHAR(25) NULL ,
  importe double NULL,
  folio VARCHAR(20) NULL ,
  estadoFolio varchar(1) NULL,
  sucursal VARCHAR(45) NULL ,
  ip VARCHAR(16) NULL,
  PRIMARY KEY (idregistrotickets) ,
  INDEX fk_usuario_idx (idUsuario ASC)  ,
  CONSTRAINT fk_usuario
    FOREIGN KEY (idUsuario)
    REFERENCES validater.usuarios (idUsuario)
    ON DELETE CASCADE
    ON UPDATE CASCADE);
    
#Registro de usuario
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('$nombre', '$apellido', '$usuario', '$email', '$contr');