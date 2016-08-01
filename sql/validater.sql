DROP DATABASE IF EXISTS validater;

#test database validater
CREATE DATABASE churchs_validater;

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
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Rosendo', 'Galindo', 'GalindoRosendo', 'rgalindo@papajohnspizza.mx', 'password');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Laredo', 'LDO1', 'churchs@churchs.mx', '536_xah12');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Laredo', 'LDO2', 'churchs@churchs.mx', '536_ybi23');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Laredo', 'LDO3', 'churchs@churchs.mx', '536_zcj34');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Laredo', 'LDO5', 'churchs@churchs.mx', '536_adk45');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Laredo', 'LDO6', 'churchs@churchs.mx', '536_bel56');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Laredo', 'LDO7', 'churchs@churchs.mx', '536_cfm67');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Laredo', 'LDO8', 'churchs@churchs.mx', '536_dgn78');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Piedras Negras', 'PNG1', 'churchs@churchs.mx',  '764_eho89');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Reynosa', 'REY1', 'churchs@churchs.mx', '739_fip90');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Reynosa', 'REY2', 'churchs@churchs.mx', '739_gjq01');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Reynosa', 'REY3', 'churchs@churchs.mx', '739_hkr12');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Reynosa', 'REY4', 'churchs@churchs.mx', '739_ils23');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Reynosa', 'REY5', 'churchs@churchs.mx', '739_jmt34');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Reynosa', 'REY6', 'churchs@churchs.mx', '739_knu45');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Reynosa', 'REY7', 'churchs@churchs.mx', '739_lov56');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Reynosa', 'REY8', 'churchs@churchs.mx', '739_mpw67');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Matamoros', 'MAT1', 'churchs@churchs.mx', '628_nqx78');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Matamoros', 'MAT2', 'churchs@churchs.mx', '628_ory89');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Matamoros', 'MAT3', 'churchs@churchs.mx', '628_psz90');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Matamoros', 'MAT4', 'churchs@churchs.mx', '628_qta01');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Matamoros', 'MAT6', 'churchs@churchs.mx', '628_rub12');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Matamoros', 'MAT7', 'churchs@churchs.mx', '628_svc23');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Rio Bravo', 'RBR1', 'churchs@churchs.mx', '727_twd34');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Miguel Aleman', 'MAL1', 'churchs@churchs.mx', '625_uxe45');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Juarez', 'JRZ1', 'churchs@churchs.mx', '579_vyf56');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Juarez', 'JRZ3', 'churchs@churchs.mx', '579_wzg67');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Juarez', 'JRZ4', 'churchs@churchs.mx', '579_xah78');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Juarez', 'JRZ6', 'churchs@churchs.mx', '579_ybi89');
INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia) VALUES ('Churchs', 'Juarez', 'JRZ8', 'churchs@churchs.mx', '579_zcj90');
