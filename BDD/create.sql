CREATE DATABASE IF NOT EXISTS BD_clients_SAE
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE BD_clients_SAE;

CREATE TABLE IF NOT EXISTS TB_clients_SAE (
    id       INT          NOT NULL AUTO_INCREMENT,
    nom      VARCHAR(100) NOT NULL,
    prenom   VARCHAR(100) NOT NULL,
    email    VARCHAR(255) NOT NULL UNIQUE,
    tel      VARCHAR(20),
    PRIMARY KEY (id)
);
