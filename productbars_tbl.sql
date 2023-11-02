CREATE DATABASE barsjohn;
CREATE TABLE productbars_john(
    id_prod int(11) AUTO_INCREMENT PRIMARY KEY,
    nome_prod varchar(60) not null,
    descricao_prod text not null,
    imagem_prod text not null,
    preco_prod decimal(10, 2) not null,
);