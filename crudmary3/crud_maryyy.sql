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
    
 create table usuarios (
	id_usuario int primary key auto_increment,
    nome varchar(150) not null,
    senha varchar(250) not null,
    email varchar(150) not null unique,
    usuario varchar(150) not null unique,
    tentativas int default 0
);

insert into usuarios (nome, senha, email)
values 
	('Maria', '123456', 'maria.mendes@gmail.com');
    
create table logs (
	id_log int primary key auto_increment,
    acao varchar(150) not null,
    usuario varchar(150) not null,
	id_usuario int not null,
    foreign key (id_usuario)
    references usuarios (id_usuario),
    data_hora datetime default current_timestamp not null
);

insert into usuarios (nome, senha, email)
values 
	('Maria Alice', '67', 'maria.gds@gmail.com');
 
select * from usuarios;

alter table usuarios
add column bloqueado tinyint default 0;

    
