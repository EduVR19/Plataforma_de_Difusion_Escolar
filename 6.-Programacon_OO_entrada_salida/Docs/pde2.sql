create database pde;
use pde;

create table alumno (id_alumno int auto_increment, 
	nombre varchar(150), 
	a_paterno varchar(150), 
	a_materno varchar(150), 
	sexo varchar(150), 
	fecha_nac varchar(150), 
	lugar_nac varchar(150), 
	curp varchar(150), 
	domicilio varchar(150), 
	telefono varchar(150), 
	primary key(id_alumno));
ALTER TABLE alumno CONVERT TO CHARACTER SET utf8;
