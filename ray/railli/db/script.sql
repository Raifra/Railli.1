drop database if exists railli;
create database railli;
use railli;

create table usuario (
	cpf varchar(20) primary key,
    nome varchar(100) not null,
    email varchar(100) not null unique,
    senha varchar(30) not null,
    estado varchar(30) not null
);

create table produto (
	id int auto_increment primary key,
    nome varchar(100) not null,
    preco float not null,
    descricao text not null
);

insert into usuario values
("10079345654", "admin", "admin@gmail.com", "000", "MG");

insert into produto values
(default, "ROUPA INFANTIL RAILLI", 123.00, "sla vei fds");

select * from usuario;