CREATE DATABASE mes_jeux;

USE mes_jeux;

CREATE TABLE possession (
    pos_oid INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titre varchar(50),
    genre varchar(50),
    description varchar(500),
    année int(20),
    auteur varchar(50),
    note int(20),
    studio varchar(50)
    
);