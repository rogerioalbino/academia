CREATE DATABASE academia;

USE academia; 

CREATE TABLE IF NOT EXISTS funcionario (
		id int(11) NOT NULL AUTO_INCREMENT,
		codigo varchar(255),
		nome varchar(255),
		email varchar(255),
		endereço varchar(255),
		bairro varchar(255),
		cidade varchar(255),
		cep varchar(255),
		uf varchar(255),
		telefone varchar(255), 
		celular varchar(255),
		sexo varchar(255),
		cpf varchar(255),
		rg varchar(255),
		cref varchar(255)


		PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


CREATE TABLE IF NOT EXISTS aluno (
		id int(11) NOT NULL AUTO_INCREMENT,
		matricula varchar(255),
		nome varchar(255),
		email varchar(255),
		endereço varchar(255),
		bairro varchar(255),
		cidade varchar(255),
		cep varchar(255),
		uf varchar(255),
		telefone varchar(255), 
		celular varchar(255),
		sexo varchar(255),
		cpf varchar(255),
		rg varchar(255)

		PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

