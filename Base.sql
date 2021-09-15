drop database hackathon;
create database hackathon;
use hackathon;

create table adminsup(
 login varchar(100) not null,
 nom varchar(50),
 mdp varchar(100)
);

create table admin(
  idadmin int not null auto_increment primary key,
  login varchar(100) not null,
  mdp varchar(100)
);

create table user(
  iduser int not null auto_increment primary key,
  login varchar(100) not null,
  nom varchar(100),
  prenom varchar(100),
  mdp varchar(100)
);

create table article(
  idarticle int not null auto_increment primary key,
  titre varchar(200) not null,
  iduser int,
  idadmin int,
  texte text,
  photo varchar(100),
  video varchar(100),
  etat varchar(100),
  daty date,
  visites int(10),
  FOREIGN KEY (iduser) references user(iduser),
  FOREIGN KEY (idadmin) references admin(idadmin)
);

create table livre(
  idlivre int not null auto_increment primary key,
  titre varchar(200) not null,
  description text,
  auteur varchar(100),
  daty date,
  fichier varchar(100),
  visites int(10)
);

create table categorie(
  idcategorie int not null auto_increment primary key,
  nom varchar(30)
);

create table livrejoincat(
  idcategorie int,
  idlivre int,
  FOREIGN KEY (idcategorie) references categorie(idcategorie),
  FOREIGN KEY (idlivre) references livre(idlivre)
);

create table articlejoincat(
  idarticle int,
  idlivre int,
  FOREIGN KEY (idarticle) references article(idarticle),
  FOREIGN KEY (idlivre) references livre(idlivre)
);
create table geojoinarticle(
  idgeololisation int not null auto_increment primary key,
  idarticle int,
  FOREIGN KEY (idarticle) references article(idarticle)
);
create table geolocalisation(
  idgeololisation int,
  latitude float,
  logitude float,
  FOREIGN KEY (idgeololisation) references geojoinarticle(idgeololisation)
);
