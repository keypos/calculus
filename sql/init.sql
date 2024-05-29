DROP DATABASE IF EXISTS 12ipt;
CREATE DATABASE 12ipt;

DROP USER IF EXISTS 'tubm01';
CREATE USER 'tubm01' 
IDENTIFIED BY 'tubm01';

GRANT INSERT, UPDATE, DELETE,SELECT ON 12ipt.* TO tubm01;

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