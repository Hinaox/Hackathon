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

create table categorie(
  idcategorie int not null auto_increment primary key,
  nom varchar(30)
);

create table article(
  idarticle int not null auto_increment primary key,
  titre varchar(200) not null,
  iduser int,
  idadmin int,
  texte longtext,
  photo varchar(100),
  video varchar(100),
  etat varchar(100),
  daty date,
  visites int(10),
  categories varchar(200),
  FOREIGN KEY (iduser) references user(iduser),
  FOREIGN KEY (idadmin) references admin(idadmin)
);

create table livre(
  idlivre int not null auto_increment primary key,
  titre varchar(200) not null,
  description text,
  auteur varchar(100),
  daty date,
  etat varchar(100),
  fichier varchar(100),
  visites int(10),
  categories varchar(200)
);



-- create table livrejoincat(
--   idcategorie int,
--   idlivre int,
--   FOREIGN KEY (idcategorie) references categorie(idcategorie),
--   FOREIGN KEY (idlivre) references livre(idlivre)
-- );

-- create table articlejoincat(
--   idarticle int,
--   idlivre int,
--   FOREIGN KEY (idarticle) references article(idarticle),
--   FOREIGN KEY (idlivre) references livre(idlivre)
-- );

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


insert into article values(NULL,"Ifaramalemy sy Ikotobekibo, ny tantara tsy mety maty malagasy",NULL,NULL,"27 martsa 2020 Taloha, rehefa nilentika ny masoandro, ny tanora 
na ny antitra dia nivory nanodidina ny kitay hazo izay namboarina nahandro sakafo hariva. Eo an-tokotanin'ny trano dia mipetraka amin'ny tany daholo ny olona, ​​matetika ny 
ankizy mipetraka eo ambony tsihy, mba hihainoana 'angano', tantara iray. Dadabe na nenibe (raibe na renibe) no tompon'ity fotoana fitantarana mahafaly atolotra ny rehetra ity.
Na ny mpifanila vodirindrina aminao aza dia asaina amin'ity 'takariva amorom-patana' ity izay natao hiresahana amorom-patana. Fampitandremana! Tsy afon-kitso io. Mety eto ny 
afo handrahoana ny sakafo. Na manao 'afo kitay' isika, na kitay hazo, na amin'ny alàlan'ny afon'afo.Amin'izao fotoana izao, any ambanivohitra lavitra dia mbola manolotra ireo 
fotoana ifampizarana ireo ny mponina sasany. Satria tsy misaraka amin'ny rindrina ireo trano na indraindray fefy aza, dia mety hiampita ny tokotanin-dRabe i Rakoto raha tsy 
adika ho fandikan-dalàna ity fihetsika ity. Ny angano malagasy dia vita amin'ny fomba mihoapampana, fomba iray hanabeazan'ny zokiolona ny fahendrena amin'ny taranany. Ity misy
iray amin'ireo tantara malaza indrindra ho an'ny ankizy madinika: Ifaramalemy sy Ikotobekibo. Taloha dia nisy mpivady nanan-janaka maro. Ny zandriny dia potiky ny kibo , ka izany
no nahatonga ny solon'anarana Ikotobekibo , ary ny zandriny nalemy tongotra, ka izany no nanaovany ny anarany hoe Ifaramalemy. Tsy afaka nanao na inona na inona ireto roalahy 
farany, ka namoy fo ny ray aman-dreniny. Farany, ity farany dia nanana hevitra ny hanary ireo zanany tsy ilaina amin'ny alevina velona. Taty aoriana dia nanomboka nihady lavaka 
izy ireo. Nanontany azy ireo ny evony hoe hampiasa inona ilay lavaka, ary hoy ny valin-tenin'izy mivady: 'Ho masaka ny akondro!' '. Soa ihany fa tsy ela dia fantatr'i Ifara sy 
Ikoto zokiny fa ny zandriny dia halevina velona. Nalahelo sy very hevitra izy ireo ary nanambara ny fikasan'ny ray aman-dreniny tamin'i Ifara sy Ikoto ny ampitso. Hoy ny zandriny
tamin izy ireo: 'Raha izany no izy dia handositra izahay sao matahotra ho faty alohan'ny fotoana!' . Nanaiky ny fanapaha-kevitr'izy ireo izy ireo rehefa onena azy ireo. Ary noho
izany, raha lasa i Ifaramalemy sy Ikotobekibo, nihetsiketsika tamin'ny tehina ilay rahavavy ary nijaly sempotra noho ny kibony ilay rahavavy noho ny kibony be. Nafana dia mafana
ka samy nitsemboka be izy roa nandritra ny dia. Nahatsiaro reraka be i Ikoto. Rehefa nandeha lavitra izy ireo dia nitomany Ikoto, satria tsy afaka nanohy ny diany izy. Hoy i Ifara 
taminy: 'Mandrosoa, zandry. Hitondra anao any an-damosiko aho mandra-pahaverinao ny herinao! Ary nentiny tany an-damosiny teny amin'ny lemaka iray manontolo izy. Reraka be izy nitondra
ny zandriny lahy nalemy tongotra. Rehefa afaka telo andro ny dia an-tongotra dia nahita lemaka mahafinaritra izy ireo ary nijanona tao mba hiala sasatra. Noraisina tsara anefa ilay toerana
ka nanapa-kevitra ny hanangana trano bongo kely any izy ireo avy amin'ny ravina, sampana an'ny tany. Rehefa naorina ny trano bongo, dia samy nipetraka tao izy ireo. Ikoto taty aoriana dia 
nanjary tompon'ny fihazana ary isaky ny miverina izy dia manafatra ny rahavavavavavaviny hoe 'Ifara, apetaho ny lehibe!' Ary nesoriny ihany rehefa vitany ny nihinana izay nenjehiny. Tena 
nampalahelo an'i Ifara izany.","ifaramalemy.png",NULL,"valide","2021/12/01",12,"tantara");

insert into article values(NULL,"titre",NULL,NULL,"texte'bbb'bbbbbb","photo.jpg","video.mp4","valide","2021/12/01",12,"categorie");


insert into article values(NULL,"Ny antsitrika sy ny sambo ao amin'ny Vondronosy Mitsio",NULL,NULL,
"Midira an-tsambo Schooner Nofy Be (ilay nofinofy lehibe) hanao dia lavitra tsy hay hadinoina any afovoan'i Mipik Archipelago. Ireto nosy kely tsy fantatra, any avaratry ny nosy 
nalaza any Nosy Be , dia feno moron-dranomasina paradisa sy lagoons , zavamaniry sy zavamaniry maniry sy maitso ary toerana fisitrihana mahafinaritra.
Ity fijanonana ity dia ahafahantsika manao antsitrika 14 amin'ny toerana miavaka: Le Grand Mitsio , Nosy Lava , Nosy Tsarabanjina , Nosy Sakatia ... 
Ankafizo ny milomano eo amin'ireo sokatra an-dranomasina sy trondro maro loko, mandeha milomano mangina eo ambonin'ireo haran-dranomasina mahafinaritra ianao, andramo ny Trondro vao
tratra, mihaona amin'ireo olona Vezo izay mandrafitra ny ekipanay sy ny Sakalava monina ireto nosy kely ireto ary mamelona ireo ranomasina ireo amin'ny lakana sy ny doho nentin-drazana.
Traikefa tokana sy mafana, amin'ny gadona onja, rivotra ary fisondrotana.",
"photo.jpg","video.mp4","valide","2021/12/01",12,"faritra");

insert into article values(NULL,"Ao amin'ny sambo Nofy Be, Fandehanana avy any Ifaty mankany Morondava",NULL,NULL,
"texte'bbb'bbbbbb",
"photo.jpg","video.mp4","valide","2021/12/01",12,"categorie");
