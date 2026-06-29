create database crudmundo;
use crudmundo;

create table continentes (
	id_cont int primary key auto_increment,
    nome varchar(30) not null,
    populacao bigint not null,
    area bigint not null,
    total int not null
);

create table governantes (
	id_gov int primary key auto_increment,
    nome varchar(150) not null,
    partido varchar(150) not null,
    datanasc date not null,
    idade int not null,
    datainicio date not null,
    datafinal date not null
);

create table paises (
	id_paises int primary key auto_increment,
    nome varchar(150) not null,
    id_cont int not null,
    foreign key (id_cont)
    references continentes(id_cont),
    populacao bigint not null,
    area bigint not null,
    idioma varchar(50) not null,
    id_gov int not null,
    foreign key (id_gov)
    references governantes(id_gov),
    regime varchar(50) not null,
    clima varchar(50) not null,
    moeda varchar(50) not null
);

create table cidades (
	id_cidades int primary key auto_increment,
    nome varchar(150) not null,
    populacao bigint not null,
    area bigint not null,
    id_cont int not null,
    foreign key (id_cont)
    references continentes(id_cont), 
    clima varchar(50) not null,
    id_gov int not null,
    foreign key (id_gov)
    references governantes(id_gov),
    datafundacao date not null
);

insert into continentes (nome, populacao, area, total)
values 
	('Ásia', 4800000000, 44580000, 48 ),
	('Oceania', 47000000, 9000000, 14);
    
insert into governantes (nome, partido, datanasc, idade, datainicio, datafinal)
values 
	('','','','','','');
    
insert into cidades (nome, populacao, area, id_cont, clima, id_gov, datafundacao, area)
values 
	('','','','','','','');
    

    