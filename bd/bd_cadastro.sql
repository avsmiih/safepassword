CREATE DATABASE IF NOT EXISTS cadastro
default character set utf8
default collate utf8_general_ci;

CREATE TABLE IF NOT EXISTS usuarios (
id int NOT NULL AUTO_INCREMENT,
`user` varchar(50) NOT NULL UNIQUE,
senha varchar(256) NOT NULL,
primary key (id)
) DEFAULT CHARSET = utf8mb3; 

INSERT INTO usuarios
(user, senha)
VALUES
('admin',sha2('123456789',256));

SELECT * FROM usuarios;

DESC usuarios;

SELECT senha FROM usuarios;

ALTER TABLE usuarios
ADD token varchar(256) NOT NULL;

ALTER TABLE usuarios
ADD UNIQUE (token);

ALTER TABLE usuarios
MODIFY token VARCHAR(256) NULL;