/*
base de datos de bloopets
@autor: jhony guaman - jandry navarrete
@fecha: 30/03/2016
*/

create database bloopets_desarrollo;
use bloopets_desarrollo;


DROP TABLE IF EXISTS humans;
create table humans(
	id		int(11)	 not null auto_increment primary key,
	correo	varchar(50) not null unique,
	clave	varchar(50)	not null,
	nombres	varchar(50) not null,
	apellidos varchar(50) not null
);

DROP TABLE IF EXISTS comunidades;
create table comunidades(
	id		int(11) not null auto_increment primary key,
	nombComunidad	varchar(50) not null,
	descripcion		varchar(100)
);


DROP TABLE IF EXISTS perfiles;
create table perfiles(
	id		int(11) not null auto_increment primary key,
	correo	 	varchar(50) not null,
	telefono 	varchar(10),
	direccion	varchar(50),
	ciudad		varchar(50),
	pais		varchar(50),
	fotoPerfil	varchar(60),
	INDEX(correo),
	foreign key(correo) references humans(correo)
);


DROP TABLE IF EXISTS mascotas;
create table mascotas(
	id		int(11)	not null auto_increment primary key,
	correo	varchar(50) not null,
	idComunidad	int(11) not null,
	nombre 	varchar(50) not null,
	raza	varchar(50) not null,
	sexo	varchar(20) not null,
	edad	int(11),
	color	varchar(25),
	chip	varchar(50),
	joby	varchar(60),
	comidadFavorita	varchar(30),
	crias	varchar(10),
	pedigri	varchar(30),
	INDEX(correo,idComunidad),
	foreign key(correo) references humans(correo),
	foreign key(idComunidad) references comunidades(id)

);	




/*INSERCIONES A LAA TABLA COMUNIDAD*/

insert into comunidades(nombComunidad) values("perros");
insert into comunidades(nombComunidad) values("gatos");
insert into comunidades(nombComunidad) values("loro");
