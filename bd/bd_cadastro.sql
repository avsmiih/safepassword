CREATE DATABASE IF NOT EXISTS cadastro
default character set utf8
default collate utf8_general_ci;

CREATE TABLE IF NOT EXISTS usuarios (
id int NOT NULL AUTO_INCREMENT,
`user` varchar(50) NOT NULL UNIQUE,
senha varchar(256) NOT NULL,
primary key (id)
) DEFAULT CHARSET = utf8; 

insert into usuarios
(user, senha)
values
('admin',sha2('123456789',256));

select * from usuarios;

desc usuarios;

select senha from usuarios;