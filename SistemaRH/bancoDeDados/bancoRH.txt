create database if not exists banco_rh;
use banco_rh;

create table if not exists administrador(
	idAdm int primary key auto_increment not null,
    login varchar(45) not null unique default 'admim',
    senha varchar(45) not null default '12345'
)default charset = utf8;

insert into administrador (login,senha) values ('admim',12345);

describe administrador;
select * from administrador;

create table if not exists cadastravaga(
	idVaga int primary key auto_increment not null,
    nomeVaga varchar(45) not null unique, -- Nao pode ter duas vagas com o mesmo nome
    descricaoVaga varchar(1000) not null,
    escolaridadeMinima varchar(45) not null,
    preRequisitos varchar(1000) not null
) default charset = utf8;

select * from cadastravaga;

describe vagaDeEmprego;

create table if not exists candidato(
	idCandidato int primary key auto_increment not null,
    vagaId int not null,
    nome varchar(45) not null,
    endereco varchar(45) not null,
    estado varchar(45) not null,
    nacionalidade varchar(45) not null default 'Brasileiro',
    telefone varchar(45) not null,
    email varchar(45) not null,
    formacaoAcademica varchar(45) not null,
    ultimaExperiencia varchar(45) not null,
    informacoesExtras varchar(100) not null,
    foto varchar(100) not null
) default charset = utf8;

describe candidato;
select * from candidato;
select *,cadastravaga.nomeVaga from candidato,cadastravaga where cadastravaga.idVaga = candidato.vagaId order by candidato.nome;