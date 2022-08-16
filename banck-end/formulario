create database  formulario;

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `no_pessoa` varchar(30) NOT NULL,
  `ds_sobrenome` varchar(30) NOT NULL,
  `ds_email` varchar(50) NOT NULL,
  `co_tipo_pessoa` char(2) NOT NULL,
  `ds_cpf` varchar(11) NOT NULL,
  `ds_cnpj` varchar(14) DEFAULT NULL,
  `nu_cep` varchar(8) NOT NULL,
  `ds_logradouro` varchar(200) NOT NULL,
  `ds_bairro` varchar(50) NOT NULL,
  `ds_cidade` varchar(50) NOT NULL,
  `co_uf` char(2) NOT NULL,
  `ds_telefone` varchar(11) NOT NULL,
  `ds_numero` int(11) DEFAULT NULL,
  `co_sexo` varchar(1) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `sexo_id_sexo` int(11) NOT NULL,
  `tipo_pessoas_id_tipo_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id_pessoa`,`sexo_id_sexo`,`tipo_pessoas_id_tipo_pessoa`),
  KEY `fk_pessoa_sexo_idx` (`sexo_id_sexo`),
  KEY `fk_pessoa_tipo_pessoas1_idx` (`tipo_pessoas_id_tipo_pessoa`),
  CONSTRAINT `fk_pessoa_sexo` FOREIGN KEY (`sexo_id_sexo`) REFERENCES `sexo` (`id_sexo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pessoa_tipo_pessoas1` FOREIGN KEY (`tipo_pessoas_id_tipo_pessoa`) REFERENCES `tipo_pessoas` (`id_tipo_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `sexo` (
  `id_sexo` int(11) NOT NULL,
  `no_sexo` varchar(30) NOT NULL,
  PRIMARY KEY (`id_sexo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tipo_pessoas` (
  `id_tipo_pessoa` int(11) NOT NULL,
  `no_tipo_pessoa` varchar(30) NOT NULL,
  PRIMARY KEY (`id_tipo_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
