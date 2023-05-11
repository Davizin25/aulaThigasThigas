create database recrutamento;
use recrutamento;

create table jogador(
	jogador_id varchar(10) primary key,
	jogador_nick varchar(40),
	jogador_funcao varchar(20),
	jogador_troca varchar(10),
	jogador_comentario varchar(100)
);

create table pessoa(
	pessoa_nome varchar(40),
	pessoa_sobrenome varchar(40),
	pessoa_idade varchar(3),
	pessoa_genero varchar(10),
	pessoa_whatsapp varchar(11),
	pessoa_satisfacao char(1),
	pessoa_jogadorid varchar(10),
	
	foreign key (pessoa_jogadorid) references jogador(jogador_id)
);

select * from pessoa, jogador where pessoa_jogadorid = jogador_id;