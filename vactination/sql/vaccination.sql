-- noinspection SqlNoDataSourceInspectionForFile
drop database if exists vaccination;
create database vaccination;
use vaccination;

drop table if exists vaccin;
create table vaccin
(
    idvaccin int(5) not null auto_increment,
    designation varchar(50),
    dosage varchar(50),
    rappel varchar(50),
    c_indication text,
    laboratoire varchar(50),
    primary key (idvaccin)
);

drop table if exists personne;
create table personne
(
    idpersonne int(5) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    adresse varchar(50),
    age int(3),
    email varchar(50) unique,
    mdp varchar(50),
    role varchar(50),
    primary key (idpersonne)
);

drop table if exists centre;
create table centre
(
    idcentre int(5) not null auto_increment,
    nom varchar(50),
    adresse varchar(100),
    typecentre varchar(50),
    telephone varchar(20),
    primary key (idcentre)
);

drop table if exists vaccination;
create table vaccination
(
    idvaccination int(5) not null auto_increment,
    date_vaccin date,
    rapport text,
    idcentre int(5) not null,
    idvaccin int(5) not null,
    idpersonne int(5) not null,
    primary key (idvaccination),
    foreign key (idcentre) references centre(idcentre),
    foreign key (idvaccin) references vaccin(idvaccin),
    foreign key (idpersonne) references personne(idpersonne)
);
