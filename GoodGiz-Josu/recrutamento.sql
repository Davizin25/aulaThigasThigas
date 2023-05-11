create database goodgiz;
use cadastro;

create table aluno(
	aluno_codigo varchar(10) primary key auto_increment,
	aluno_nome varchar(40),
	aluno_endereco varchar(20),
	aluno_telefone varchar(10),
	aluno_cidade varchar(100),
	aluno_estado varchar(100)
);

select * from pessoa, jogador where pessoa_jogadorid = jogador_id;