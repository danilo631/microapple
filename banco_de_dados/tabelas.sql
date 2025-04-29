-- SQLBook: Code
CREATE DATABASE microapple_sgi;
USE microapple_sgi;

-- Desenvolvimento de Software/Hardware
CREATE TABLE desenvolvimento_software_hardware (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50) NOT NULL,
    versao VARCHAR(50) NOT NULL,
    equipe_desenvolvimento TEXT NOT NULL
);

-- Controle de Qualidade de Tecnologia
CREATE TABLE controle_qualidade_tecnologia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento INT NOT NULL,
    teste_funcionalidade VARCHAR(100),
    teste_usabilidade VARCHAR(100),
    FOREIGN KEY (id_desenvolvimento) REFERENCES desenvolvimento_software_hardware(id)
);

-- Logística e Distribuição de Tecnologia
CREATE TABLE logistica_distribuicao_tecnologia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento INT NOT NULL,
    destino VARCHAR(100),
    metodo_envio VARCHAR(50),
    FOREIGN KEY (id_desenvolvimento) REFERENCES desenvolvimento_software_hardware(id)
);

-- Logs
CREATE TABLE log_desenvolvimento_software_hardware (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento_software_hardware INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(100),
    FOREIGN KEY (id_desenvolvimento_software_hardware) REFERENCES desenvolvimento_software_hardware(id)
);

CREATE TABLE log_controle_qualidade_tecnologia (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    id_controle_qualidade_tecnologia INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(100),
    FOREIGN KEY (id_controle_qualidade_tecnologia) REFERENCES controle_qualidade_tecnologia(id)
);

CREATE TABLE log_logistica_distribuicao_tecnologia (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    id_logistica_distribuicao_tecnologia INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(100),
    FOREIGN KEY (id_logistica_distribuicao_tecnologia) REFERENCES logistica_distribuicao_tecnologia(id)
);
-- SQLBook: Code
CREATE DATABASE microapple_sgi;
USE microapple_sgi;

-- Desenvolvimento de Software/Hardware
CREATE TABLE desenvolvimento_software_hardware (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50) NOT NULL,
    versao VARCHAR(50) NOT NULL,
    equipe_desenvolvimento TEXT NOT NULL
);

-- Controle de Qualidade de Tecnologia
CREATE TABLE controle_qualidade_tecnologia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento INT NOT NULL,
    teste_funcionalidade VARCHAR(100),
    teste_usabilidade VARCHAR(100),
    FOREIGN KEY (id_desenvolvimento) REFERENCES desenvolvimento_software_hardware(id)
);

-- Logística e Distribuição de Tecnologia
CREATE TABLE logistica_distribuicao_tecnologia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento INT NOT NULL,
    destino VARCHAR(100),
    metodo_envio VARCHAR(50),
    FOREIGN KEY (id_desenvolvimento) REFERENCES desenvolvimento_software_hardware(id)
);

-- Logs
CREATE TABLE log_desenvolvimento_software_hardware (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento_software_hardware INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(100),
    FOREIGN KEY (id_desenvolvimento_software_hardware) REFERENCES desenvolvimento_software_hardware(id)
);

CREATE TABLE log_controle_qualidade_tecnologia (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    id_controle_qualidade_tecnologia INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(100),
    FOREIGN KEY (id_controle_qualidade_tecnologia) REFERENCES controle_qualidade_tecnologia(id)
);

CREATE TABLE log_logistica_distribuicao_tecnologia (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    id_logistica_distribuicao_tecnologia INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(100),
    FOREIGN KEY (id_logistica_distribuicao_tecnologia) REFERENCES logistica_distribuicao_tecnologia(id)
);
-- SQLBook: Code
CREATE DATABASE microapple_sgi;
USE microapple_sgi;

-- Desenvolvimento de Software/Hardware
CREATE TABLE desenvolvimento_software_hardware (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50) NOT NULL,
    versao VARCHAR(50) NOT NULL,
    equipe_desenvolvimento TEXT NOT NULL
);

-- Controle de Qualidade de Tecnologia
CREATE TABLE controle_qualidade_tecnologia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento INT NOT NULL,
    teste_funcionalidade VARCHAR(100),
    teste_usabilidade VARCHAR(100),
    FOREIGN KEY (id_desenvolvimento) REFERENCES desenvolvimento_software_hardware(id)
);

-- Logística e Distribuição de Tecnologia
CREATE TABLE logistica_distribuicao_tecnologia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento INT NOT NULL,
    destino VARCHAR(100),
    metodo_envio VARCHAR(50),
    FOREIGN KEY (id_desenvolvimento) REFERENCES desenvolvimento_software_hardware(id)
);

-- Logs
CREATE TABLE log_desenvolvimento_software_hardware (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento_software_hardware INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(100),
    FOREIGN KEY (id_desenvolvimento_software_hardware) REFERENCES desenvolvimento_software_hardware(id)
);

CREATE TABLE log_controle_qualidade_tecnologia (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    id_controle_qualidade_tecnologia INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(100),
    FOREIGN KEY (id_controle_qualidade_tecnologia) REFERENCES controle_qualidade_tecnologia(id)
);

CREATE TABLE log_logistica_distribuicao_tecnologia (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    id_logistica_distribuicao_tecnologia INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(100),
    FOREIGN KEY (id_logistica_distribuicao_tecnologia) REFERENCES logistica_distribuicao_tecnologia(id)
);
-- SQLBook: Code
CREATE DATABASE microapple_sgi;
USE microapple_sgi;

-- Desenvolvimento de Software/Hardware
CREATE TABLE desenvolvimento_software_hardware (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50) NOT NULL,
    versao VARCHAR(50) NOT NULL,
    equipe_desenvolvimento TEXT NOT NULL
);

-- Controle de Qualidade de Tecnologia
CREATE TABLE controle_qualidade_tecnologia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento INT NOT NULL,
    teste_funcionalidade VARCHAR(100),
    teste_usabilidade VARCHAR(100),
    FOREIGN KEY (id_desenvolvimento) REFERENCES desenvolvimento_software_hardware(id)
);

-- Logística e Distribuição de Tecnologia
CREATE TABLE logistica_distribuicao_tecnologia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento INT NOT NULL,
    destino VARCHAR(100),
    metodo_envio VARCHAR(50),
    FOREIGN KEY (id_desenvolvimento) REFERENCES desenvolvimento_software_hardware(id)
);

-- Logs
CREATE TABLE log_desenvolvimento_software_hardware (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    id_desenvolvimento_software_hardware INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(100),
    FOREIGN KEY (id_desenvolvimento_software_hardware) REFERENCES desenvolvimento_software_hardware(id)
);

CREATE TABLE log_controle_qualidade_tecnologia (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    id_controle_qualidade_tecnologia INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(100),
    FOREIGN KEY (id_controle_qualidade_tecnologia) REFERENCES controle_qualidade_tecnologia(id)
);

CREATE TABLE log_logistica_distribuicao_tecnologia (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    id_logistica_distribuicao_tecnologia INT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    acao_realizada VARCHAR(100),
    FOREIGN KEY (id_logistica_distribuicao_tecnologia) REFERENCES logistica_distribuicao_tecnologia(id)
);
-- SQLBook: Code
