create database webapp_db;

use webapp_db;

create table usuarios(
    id int not null auto_increment PRIMARY KEY,
    nome varchar(255) not null,
    email varchar(255) not null,
    senha varchar(32) not null

)