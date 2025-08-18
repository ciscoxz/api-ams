create table alunos (
    id int primary key auto_increment,
    aluno varchar(200) not null,
    ra varchar(8) not null,
    matriculado bit default 1
);
create table materias (
    id int primary key auto_increment,
    materia varchar(60) not null,
    disponivel bit default 1
);
create table notas(
    id int primary key auto_increment,
    id_materia int,
    id_aluno int,
    constraint fk_notas_alunos foreing key (id_aluno) references alunos (id),
    constraint fk_notas_materias foreing key (id_materias) references meterias(id)
);