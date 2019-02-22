CREATE DATABASE challenge;
USE challenge;

CREATE TABLE spaceships (
    name varchar(40),
    kills int,
    captain varchar(75),
    CONSTRAINT test_pk PRIMARY KEY(name)
);

INSERT INTO spaceships (name, kills, captain) VALUES
('Herminia', 2,'Ruben Dowling'),
('The Javelin', 32,'Asha Stark'),
('Thor', 0,'Jack Rankin'),
('Brotherhood', 5,'Reuben Mccaffrey'),
('Dagger', 4,'Raphael Rodriguez'),
('SSE Twilight', 10,'Ernest Durham'),
('LWSS Rampart', 21,'Austin Scott'),
('SS Roosevelt', 19,'Adnan Lam'),
('HWSS Defiance', 15,'Kyron Amos'),
('Oof ouch owie', 0,'lol it isnt that easy'),
('Win it for the team', 1337,'What can you do with SQL to the system?'),
('LWSS Valhalla', 26,'Derek Drummond');

CREATE USER 'webserver'@'%' IDENTIFIED BY 'PP6L43BZpGUi9zC5oaRTbKQT4XBm';
GRANT ALL ON challenge.* to 'webserver'@'%';

FLUSH PRIVILEGES;
