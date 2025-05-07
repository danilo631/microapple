CREATE DATABASE IF NOT EXISTS micro_apple;

USE micro_apple;

CREATE TABLE IF NOT EXISTS desenvolvimento_software_hardware(
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(255),
    VERSAO VARCHAR(255),
    equipe_desenvolvimento TEXT
);

CREATE TABLE IF NOT EXISTS controle_qualidade_tecnologia(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento INT,
    teste_funcionalidade VARCHAR (255),
    teste_usabilidade VARCHAR (255),
    FOREIGN KEY (id_desenvolvimento) REFERENCES desenvolvimento_software_hardware(id)
);

CREATE TABLE IF NOT EXISTS logistica_distribuicao_tecnologia(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento INT,
    destino VARCHAR(255),
    metodo_envio VARCHAR(255),
    FOREIGN KEY (id_desenvolvimento) REFERENCES desenvolvimento_software_hardware(id)
);

CREATE TABLE IF NOT EXISTS log_desenvolvimento_software_hardware (
    id_log INT PRIMARY KEY,
    id_desenvolvimento_software_hardware INT,
    timestamp DATETIME NOT NULL,
    acao_realizada VARCHAR(255),
    FOREIGN KEY (id_desenvolvimento_software_hardware) REFERENCES desenvolvimento_software_hardware(id)
);

CREATE TABLE IF NOT EXISTS log_controle_qualidade_tecnologia (
    id_log INT PRIMARY KEY,
    id_controle_qualidade_tecnologia INT,
    timestamp DATETIME NOT NULL,
    acao_realizada VARCHAR(255),
    FOREIGN KEY (id_controle_qualidade_tecnologia) REFERENCES controle_qualidade_tecnologia(id)
);

CREATE TABLE IF NOT EXISTS log_logistica_distribuicao_tecnologia (
    id_log INT PRIMARY KEY,
    id_logistica_distribuicao_tecnologia INT,
    timestamp DATETIME NOT NULL,
    acao_realizada VARCHAR(255),
    FOREIGN KEY (id_logistica_distribuicao_tecnologia) REFERENCES logistica_distribuicao_tecnologia(id)
);
