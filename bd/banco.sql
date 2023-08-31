
CREATE TABLE `cont_base`.`cadastro` (`id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(40) NOT NULL , `sobrenome` VARCHAR(40) NOT NULL , `senha` VARCHAR(20) NOT NULL ,
 `email` VARCHAR(140) NOT NULL , `cargo` VARCHAR(40) NOT NULL , `estabelecimento` VARCHAR(40) NOT NULL , `telefone` INT(20) NOT NULL , `created` DATETIME NULL , `modified`
  DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

--tabela para arquivos PDF, FOTOS e outros

  CREATE TABLE `cont_base`.`arquivos` ( `id` INT NOT NULL AUTO_INCREMENT , `arquivo` VARCHAR(220) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

  ALTER TABLE `cadastro` ADD `documento` VARCHAR(220) NOT NULL ;