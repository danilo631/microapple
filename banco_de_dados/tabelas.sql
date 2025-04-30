-- SQLBook: Code
CREATE DATABASE IF NOT EXISTS micro_apple;

USE micro_apple;

CREATE TABLE desenvolvimento_software_hardware (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(255) NOT NULL,
    versao VARCHAR(255) NOT NULL,
    equipe_desenvolvimento TEXT
);

CREATE TABLE controle_qualidade_tecnologia (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_desenvolvimento INT,
    teste_funcionalidade VARCHAR(255),
    teste_usabilidade VARCHAR(255),
    FOREIGN KEY (id_desenvolvimento) REFERENCES desenvolvimento_software_hardware(id)
);

CREATE TABLE logistica_distribuicao_tecnologia (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_desenvolvimento INT,
    destino VARCHAR(255),
    metodo_envio VARCHAR(255),
    FOREIGN KEY (id_desenvolvimento) REFERENCES desenvolvimento_software_hardware(id)
);

CREATE TABLE log_desenvolvimento_software_hardware (
    id_log INT PRIMARY KEY AUTO_INCREMENT,
    id_desenvolvimento_software_hardware INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(255),
    FOREIGN KEY (id_desenvolvimento_software_hardware) REFERENCES desenvolvimento_software_hardware(id)
);

CREATE TABLE log_controle_qualidade_tecnologia (
    id_log INT PRIMARY KEY AUTO_INCREMENT,
    id_controle_qualidade_tecnologia INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(255),
    FOREIGN KEY (id_controle_qualidade_tecnologia) REFERENCES controle_qualidade_tecnologia(id)
);

CREATE TABLE log_logistica_distribuicao_tecnologia (
    id_log INT PRIMARY KEY AUTO_INCREMENT,
    id_logistica_distribuicao_tecnologia INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(255),
    FOREIGN KEY (id_logistica_distribuicao_tecnologia) REFERENCES logistica_distribuicao_tecnologia(id)
);

DELIMITER $$

CREATE TRIGGER after_insert_desenvolvimento_software_hardware
AFTER INSERT ON desenvolvimento_software_hardware
FOR EACH ROW
BEGIN
    DECLARE acao VARCHAR(255);

    SET acao = 'INSERT';
    INSERT INTO log_desenvolvimento_software_hardware (id_desenvolvimento_software_hardware, acao_realizada)
    VALUES (NEW.id, CONCAT('Ação: ', acao, ' no produto com ID: ', NEW.id));
END $$

DELIMITER ;
DELIMITER $$

CREATE TRIGGER after_update_desenvolvimento_software_hardware
AFTER UPDATE ON desenvolvimento_software_hardware
FOR EACH ROW
BEGIN
    DECLARE acao VARCHAR(255);

    SET acao = 'UPDATE';
    INSERT INTO log_desenvolvimento_software_hardware (id_desenvolvimento_software_hardware, acao_realizada)
    VALUES (NEW.id, CONCAT('Ação: ', acao, ' no produto com ID: ', OLD.id, ' para o ID: ', NEW.id));
END $$

DELIMITER ;
DELIMITER $$

CREATE TRIGGER after_delete_desenvolvimento_software_hardware
AFTER DELETE ON desenvolvimento_software_hardware
FOR EACH ROW
BEGIN
    DECLARE acao VARCHAR(255);

    SET acao = 'DELETE';
    INSERT INTO log_desenvolvimento_software_hardware (id_desenvolvimento_software_hardware, acao_realizada)
    VALUES (OLD.id, CONCAT('Ação: ', acao, ' no produto com ID: ', OLD.id));
END $$

DELIMITER ;
DELIMITER $$

CREATE TRIGGER after_insert_controle_qualidade_tecnologia
AFTER INSERT ON controle_qualidade_tecnologia
FOR EACH ROW
BEGIN
    DECLARE acao VARCHAR(255);

    SET acao = 'INSERT';
    INSERT INTO log_controle_qualidade_tecnologia (id_controle_qualidade_tecnologia, acao_realizada)
    VALUES (NEW.id, CONCAT('Ação: ', acao, ' no controle de qualidade com ID: ', NEW.id));
END $$

DELIMITER ;
DELIMITER $$

CREATE TRIGGER after_update_controle_qualidade_tecnologia
AFTER UPDATE ON controle_qualidade_tecnologia
FOR EACH ROW
BEGIN
    DECLARE acao VARCHAR(255);

    SET acao = 'UPDATE';
    INSERT INTO log_controle_qualidade_tecnologia (id_controle_qualidade_tecnologia, acao_realizada)
    VALUES (NEW.id, CONCAT('Ação: ', acao, ' no controle de qualidade com ID: ', OLD.id, ' para o ID: ', NEW.id));
END $$

DELIMITER ;
DELIMITER $$

CREATE TRIGGER after_delete_controle_qualidade_tecnologia
AFTER DELETE ON controle_qualidade_tecnologia
FOR EACH ROW
BEGIN
    DECLARE acao VARCHAR(255);

    SET acao = 'DELETE';
    INSERT INTO log_controle_qualidade_tecnologia (id_controle_qualidade_tecnologia, acao_realizada)
    VALUES (OLD.id, CONCAT('Ação: ', acao, ' no controle de qualidade com ID: ', OLD.id));
END $$

DELIMITER ;
DELIMITER $$

CREATE TRIGGER after_insert_logistica_distribuicao_tecnologia
AFTER INSERT ON logistica_distribuicao_tecnologia
FOR EACH ROW
BEGIN
    DECLARE acao VARCHAR(255);

    SET acao = 'INSERT';
    INSERT INTO log_logistica_distribuicao_tecnologia (id_logistica_distribuicao_tecnologia, acao_realizada)
    VALUES (NEW.id, CONCAT('Ação: ', acao, ' na logística de distribuição com ID: ', NEW.id));
END $$

DELIMITER ;
DELIMITER $$

CREATE TRIGGER after_update_logistica_distribuicao_tecnologia
AFTER UPDATE ON logistica_distribuicao_tecnologia
FOR EACH ROW
BEGIN
    DECLARE acao VARCHAR(255);

    SET acao = 'UPDATE';
    INSERT INTO log_logistica_distribuicao_tecnologia (id_logistica_distribuicao_tecnologia, acao_realizada)
    VALUES (NEW.id, CONCAT('Ação: ', acao, ' na logística de distribuição com ID: ', OLD.id, ' para o ID: ', NEW.id));
END $$

DELIMITER ;
DELIMITER $$

CREATE TRIGGER after_delete_logistica_distribuicao_tecnologia
AFTER DELETE ON logistica_distribuicao_tecnologia
FOR EACH ROW
BEGIN
    DECLARE acao VARCHAR(255);

    SET acao = 'DELETE';
    INSERT INTO log_logistica_distribuicao_tecnologia (id_logistica_distribuicao_tecnologia, acao_realizada)
    VALUES (OLD.id, CONCAT('Ação: ', acao, ' na logística de distribuição com ID: ', OLD.id));
END $$

DELIMITER ;



