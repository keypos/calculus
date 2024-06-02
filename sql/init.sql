DROP DATABASE IF EXISTS 12ipt;
CREATE DATABASE 12ipt;

DROP USER IF EXISTS 'TUBM01';
CREATE USER 'TUBM01' 
IDENTIFIED BY 'TUBM01';

GRANT INSERT, UPDATE, DELETE,SELECT ON 12ipt.* TO TUBM01;

USE 12ipt;
DROP TABLE IF EXISTS users;
CREATE TABLE users (
    PRIMARY KEY(user_name),
    user_name VARCHAR(64) NOT NULL,
    first_name VARCHAR(64) NOT NULL,
    last_name VARCHAR(64) NOT NULL,
    password VARCHAR(64) NOT NULL
);

INSERT INTO users
    (user_name, first_name, last_name, password)
VALUES
    ('aident','aiden','tubman','Password123'),
    ('admin','john','doe','admin')