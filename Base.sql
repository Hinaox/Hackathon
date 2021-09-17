drop database hackathon;
create database hackathon;
use hackathon;

create table admin(
  idadmin int not null auto_increment primary key,
  nom varchar(50),
  login varchar(100) not null,
  mdp varchar(100)
);
insert into admin values(null,"Hiaro Nathanael","Nathanael@gmail.com",sha1('mdp'));

create table user(
  iduser int not null auto_increment primary key,
  login varchar(100) not null,
  nom varchar(100),
  prenom varchar(100),
  mdp varchar(100)
);
insert into user values(null,"Rakoto@gmail.com","Rakoto","Maurice",sha1('mdp'));

create table categorie(
  idcategorie int not null auto_increment primary key,
  nom varchar(30),
  icone varchar(100)
);

create table contenu(
  idcontenu int not null auto_increment primary key,
  daty date,
  titre varchar(200) not null,
  categories varchar(200),
  typee varchar(70),
  texte longtext,
  photo varchar(100),
  video varchar(100),
  audio varchar(100),
  pdf varchar(100),
  etat varchar(100),
  visites int(10),
  prix float,
  iduser int,
  idadmin int,
  auteur varchar(100),
  FOREIGN KEY (iduser) references user(iduser),
  FOREIGN KEY (idadmin) references admin(idadmin)
);

create table geolocalisation(
  idcontenu int,
  latitude float,
  longitude float,
  FOREIGN KEY (idcontenu) references contenu(idcontenu)
);

create view article as select idcontenu,daty,titre,categories,texte,photo,visites,prix,iduser,idadmin from contenu where typee='article' and etat='done';
create view video as select idcontenu,daty,titre,categories,texte,photo,video,visites,prix,iduser,idadmin from contenu where typee='video' and etat='done';
create view audio as select idcontenu,daty,titre,categories,texte,photo,visites,prix,iduser,idadmin from contenu where typee='audio' and etat='done';
create view livre as select idcontenu,daty,titre,categories,texte,photo,visites,prix,pdf,iduser,idadmin,auteur from contenu where typee='livre' and etat='done';


create view allArticle as select idcontenu,daty,titre,categories,texte,photo,visites,prix,iduser,idadmin,etat from contenu where typee='article';
create view allVideo as select idcontenu,daty,titre,categories,texte,photo,video,visites,prix,iduser,idadmin,etat from contenu where typee='video';
create view allAudio as select idcontenu,daty,titre,categories,texte,photo,visites,prix,iduser,idadmin,etat from contenu where typee='audio';
create view allLivre as select idcontenu,daty,titre,categories,texte,photo,visites,prix,pdf,iduser,idadmin,auteur,etat from contenu where typee='livre';

insert into admin values(null,'admin1','admin1',sha1('mdp'));

insert into user values(null,'user1','Princia','Dysan',sha1('mdp'));

insert into categorie values(null,"zava-maniry","fas fa-leaf");
insert into categorie values(null,"biby","fas fa-paw");
insert into categorie values(null,"tantara","fas fa-landmark");
insert into categorie values(null,"harena an-kibon ny tany","fas fa-gem");
insert into categorie values(null,"toerana","fas fa-map-marked-alt");
insert into categorie values(null,"fomba sy vakoka","fas fa-scroll");
insert into categorie values(null,"isan-karazany","fas fa-ellipsis-h");

--type livre--
insert into contenu values(NULL,CURRENT_DATE(),"Madagasikara","toerana","livre",
"Nosy goavana i Madagasikara ary firenena miorina any amin'ny morontsiraka atsimo atsinanan'i Afrika. Misy karazana biby an'arivony toy ny lemurs, ala, torapasika sy harambato.
Eo akaikin'ny renivohitra mahomby, Antananarivo, dia i Ambohimanga, andiana lapam-panjakana sy fasana, ary koa ny Lalambe Migodanan'i Baobabs, lalana maloto mifamatotra amin'ny
hazo goavana efa an-jato taonany maro"
,"madagascar",NULL,NULL,"madagascar.pdf","done",21,7000,NULL,NULL,"Paul Bernard");

insert into contenu values(NULL,CURRENT_DATE(),"Maki","toerana","livre",
"texte texte texte texte"
,"default",NULL,NULL,"madagascar.pdf","done",21,7000,NULL,NULL,"Toky Mpanoratra");

insert into contenu values(NULL,CURRENT_DATE(),"Lovako","toerana","livre",
"texte texte texte texte"
,"default",NULL,NULL,"madagascar.pdf","done",21,7000,NULL,NULL,"Mr Lova");


insert into contenu values(NULL,CURRENT_DATE(),"Lavakombarika","toerana","livre",
"texte texte texte texte"
,"default",NULL,NULL,"madagascar.pdf","done",21,7000,NULL,NULL,"Clarisse RATSIFANDRIAMANANA");


insert into contenu values(NULL,CURRENT_DATE(),"Ho avy ny maraina","toerana","livre",
"texte texte texte texte"
,"default",NULL,NULL,"madagascar.pdf","done",21,0,NULL,NULL,"Esther RANDRIAMAMONJY");


insert into contenu values(NULL,CURRENT_DATE(),"Ifaramalemy sy Ikotobekibo, ny tantara tsy mety maty malagasy","tantara","article",
"27 martsa 2020 Taloha, rehefa nilentika ny masoandro, ny tanora
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
nanjary tompon'ny fihazana ary isaky ny miverina izy dia manafatra ny rahavaviny hoe 'Ifara, apetaho ny lehibe!' Ary nesoriny ihany rehefa vitany ny nihinana izay nenjehiny. Tena
nampalahelo an'i Ifara izany.",
"ifaramalemy",NULL,NULL,NULL,"done",21,0,NULL,NULL,NULL);


insert into contenu values(NULL,CURRENT_DATE(),"Avy any Diego Suarez ka hatrany Nosy Be","toerana sy faritra","article",
"Herinandro hahitana ny Avaratry Madagascar: Diego-Suarez sy Nosy Be. Midira miaraka aminay amin'ny
fitsangatsanganana ataon'olombelona tsy hay hadinoina , ao am-pon'ny toetra tsy manam - paharoa sy malala-tanana  : hazo sy orkide endemika, Tsingy, biby hafahafa, morontsiraka ary ranomasina
turkise misy ranomasina mahagaga.
Ao Antsiranana (aka Diego Suarez) dia mahita zana-tohotra feno kodiarana Renault 4L sy trano milahatra izahay. Izahay dia mandray ny lalana mankeny amin'ny Valan-javaboary Montagne d'Ambre,
malaza noho ny harena botany: hazo rofia; ramy, orkide… Lemurs, chameleons, uroplates ary biby hafa misy endemika dia monina ao anaty ala ihany koa.
Manohy ny dianay izahay eo afovoan'ny faritr'i Diana , izay misy ihany koa ny Tsingy miavaka , toy ny Tsingy Mena sy ny Ankarana Tsingy , onenan'ireo lemur, mongoose, ramanavy ary vorondolo.
Avy eo dia miainga ho any Ankify izahay , tanàna amoron-tsiraka ary ny fiandohan'ny dia an-tsambo mankany Nosy Be . Ny làlana mankany Ankify dia manome antsika santionany amin'ny 'nosy misy
ranomanitra' , mifanila amin'ny tanimboly ylang-ylang, kafe ary kakaô.
Ao Nosy Be 'Big Island' dia ahitantsika kolontsaina maro kokoa amin'ny fary, kanelina, kafe, dipoavatra, ylang-ylang ... Nosy Be dia manan-karena amin'ny harena an-tany sy an-dranomasina,
amin'ny kolontsaina sy ny asa-tanana. Ankoatry ny morontsirak'ireo paradisa, tsy dia be olona loatra na dia eo aza ny lazan'izy ireo, hetsika maro no azo atao: fisitrihana scuba, snorkeling,
fahitana ny nosy amin'ny dhow na lakana nentim - paharazana , fijerena trozona amin'ny vanim-potoana, fitsangantsanganana an-tongotra amin'ny bisikileta na bisikileta… A sombin-paradisa kely
 ho an'ny fianakaviana manontolo."
,"nosybe",NULL,NULL,NULL,"done",21,0,NULL,NULL,NULL);


insert into contenu values(NULL,CURRENT_DATE(),"Ny antsitrika sy ny sambo ao amin'ny Vondronosy Mitsio","toerana sy faritra","article",
"Midira an-tsambo Schooner Nofy Be (ilay nofinofy lehibe) hanao dia lavitra tsy hay hadinoina any afovoan'i Mipik Archipelago. Ireto nosy kely tsy fantatra, any avaratry ny nosy
nalaza any Nosy Be , dia feno moron-dranomasina paradisa sy lagoons , zavamaniry sy zavamaniry maniry sy maitso ary toerana fisitrihana mahafinaritra.
Ity fijanonana ity dia ahafahantsika manao antsitrika 14 amin'ny toerana miavaka: Le Grand Mitsio , Nosy Lava , Nosy Tsarabanjina , Nosy Sakatia ...
Ankafizo ny milomano eo amin'ireo sokatra an-dranomasina sy trondro maro loko, mandeha milomano mangina eo ambonin'ireo haran-dranomasina mahafinaritra ianao, andramo ny Trondro vao
tratra, mihaona amin'ireo olona Vezo izay mandrafitra ny ekipanay sy ny Sakalava monina ireto nosy kely ireto ary mamelona ireo ranomasina ireo amin'ny lakana sy ny doho nentin-drazana.
Traikefa tokana sy mafana, amin'ny gadona onja, rivotra ary fisondrotana.",
"mitsio",NULL,NULL,NULL,"done",12,0,NULL,NULL,NULL);


insert into contenu values(NULL,CURRENT_DATE(),"Ao amin'ny sambo Nofy Be, fandehanana avy any Ifaty mankany Morondava","toerana sy faritra","article",
"Miroso amin'ny dia mandritra ny androm-piainana iray, miakatra amin'ilay Schooner Nofy Be (ilay 'Big Dream'). Miala amin'i amoron'ny ranomasina tanàna Ifaty , any avaratr'i Toliara,
ho any Morondava sy ny zato taona Baobab , nandalo Salary , ny tsara tarehy Baie des mpamono , Andavadoaka , ny farihy sy ny vato harana, Morombe sy ny baobaba ala tavoahangy ,
ary Belo -sur-mer.
Entin'ny rivotra, miaraka amin'ny ekipazy Vezo (mpanjono avy any atsimo) ary iray amin'ny tompon'ny schooner, dia miakatra amin'ny làlambe Mozambika mankany amin'ny gadona fitetezana
sy fivoriana izahay. Hitanay ny fomba fiainan'ny foko any atsimon'i Madagasikara , ary indrindra ireo mpifindra monina Vezo. Ny jono, ny snorkeling, ny mozika, ny sakafo matsiro, ny
filentehan'ny masoandro, dia hiainanao ny dia mahagaga, tsy hay hadinoina ...
Ny fotoam-pitetezana dia eo ho eo ary miankina amin'ny lalana sy ny herin'ny rivotra. Ny programa dia miankina amin'ny toetr'andro sy, mazava ho azy, araka ny fanirianao.
","ifaty",NULL,NULL,NULL,"done",12,0,NULL,NULL,NULL);


insert into contenu values(NULL,CURRENT_DATE(),"Fitsangantsanganana sy fitetezana an-tanety Sakalava","toerana sy faritra","article",
"Majunga, ny nosy Radama ary ny nosy ranomanitra, Nosy Be
Alao an-tsaina, ny hiran'ny onjan'ny  fantsakan'i Mozambika , 300 km ny morontsiraka saika virjiny, renirano maitso mandehandeha eny an-tongotry ny havoana mavo, baobab mavokely,
tanimbary volamena, lemana maso manga, gana gana, polyboroids marolafy… an hakitroky ny fiainana tsy mampino izay mitondra antsika toy ny amin'ny fiandohan'ny fotoana.
Alao sary an-tsaina ny lalana kely manatevin-daharana ny tanàna kely mifamezivezy, fihaonana amin'ny olona kirihitra, endrika malemy paika, fihomehezan'ireo ankizy ary fihaonana
tsy manam-potoana ...
Alao sary an-tsaina ny fitetezana moramora, eo ambanin'ny tadin'ny tady sy ny tadin'ny hazo mavesatra, sambo landihazo matevina eo ambanin'ny tokotany midadasika, ny toerana azo
tratrarina, ranomasina misy turquoise, rano mena na volontany, morontsiraka fasika misy karazany.
Eo anelanelan'ny tany sy ny ranomasina, ny fahafinaretan'ny jono sy ny voankazo amin'ity fahalala-tanana ity dia hiaina traikefa nahafinaritra sy tsy azo faritana isika. Ho fanampin'ny
fahasamihafana tsy mampino an'ity faritra tsy dia fantatra ity dia hahatsapa ny halalin'ny olona iray isika; ho mpanararaotra sy be vola isika, hahita ny fiainana ..
","sakalava",NULL,NULL,NULL,"done",12,0,NULL,NULL,NULL);

insert into contenu values(NULL,CURRENT_DATE(),"Fahagagana amin'ny Avaratra: Diego Bays, Tsingy de l'Ankarana ary ny Nosy volkanika Nosy Komba","toerana sy faritra","article",
"Ity dia ity dia hitarika anao hahita ny avaratry Madagascar , ny faritra Antsiranana (fantatra amin'ny hoe Diego Suarez) ary ny archipelagos manodidina ny nosy Nosy Be.
Mizaha amin'ny fomba hafa ireo zoro paradisa ao amin'ny Nosy Lehibe ireo , mihaona amin'ny mponina sy ny karazana endemika izay miaro ny valan-javaboany, miaina ny fofona manitra
sy ny fambolena kakao, milentika ao anaty rano mangarahara amoron-tsiraka miaraka amoron-dranomasina tsara, matory amin'ny toeram-ponenana mahafinaritra mandritra ny dia ...
Fijanonana manome aina , miaraka amin'ny fianakaviana, mpivady na namana.
Mialà eto Antananarivo dia tadiavo ireo zoro miafina eto an-drenivohitra Madagaskar, izay feno karazan- javakanto isan-karazany. Mankanesa any Avaratra sy Diego Suarez , alohan'ny
hanararaotana feno ny faritra 3 Bays , izay toerana malaza ho an'ny Kitesurfing sy Windsurfing ihany koa.
Avy eo, mankanesa any an-tampon'ny Montagne des Français, izay, voahodidin'ny baobabs , chameleons ary lemur, dia azonao atao ny mankafy ny fomba fijery ny Bay of Diego iray
manontolo sy ny mofo mamy misy azy, Nosy Lonjo .
Zahao ny valan-javaboary Montagne d'Ambre , mitsangatsangana eo anelanelan'ny fananganana vatosokay mahaliana ao Tsingy de l'Ankarana ao anaty toerana toy ny nofinofy, alohan'ny
handehanana mankany amin'ny nosy paradisa Nosy Komba hijanonana amoron-dranomasina. Eto indray, fiakarana, fahitana ny Miandry anao ny kolontsaina eo an-toerana sy ny
fitsangantsanganana an-dranomasina, hahafahanao miaina fanitrihana ao amin'ny firenena Sakalava",
"tsingy",NULL,NULL,NULL,"done",12,0,NULL,NULL,NULL);


insert into contenu values(NULL,CURRENT_DATE(),"Fitsangatsanganana an-tanindrazana avy any Morondava mankany Majunga","toerana sy faritra","article",
"Ity dia avy any Morondava , tanànan'ny baobabs ity , dia mitondra antsika mandritra ny 10 andro fitetezana an-tsambo mankany Goélette Nofy Be (ilay 'Big Dream'), mankany amin'ny
tanànan'ny Majunga , seranan-tsambo faharoan'i Madagascar ary misy akony fanjanahan-tany, Arabo sy Indiana.
Mandeha an-tsambo eo afovoan'i Archipelago Barren izahay , izay misy amoron- tsiraka kely sy fasika 9, any amin'ny faritr'i Melaky . Voarara efa ela ny fanamboarana ny lovantsofina
ao an-toerana, ireo mpanjono Vezo dia nanorim-ponenana tao tsy ho ela.
Niverina tsikelikely tany avaratra sy ny faritra Boeny izahay avy eo , nitety ny vavan'ny renirano Manongosa , ny Cape Saint André izay akaiky indrindra an'i Afrika, ary koa ny
Valan-javaboary Baly Bay , ary ireo karazan- tsokatra isan-karazany tandindonin-doza .
Ho an'ny gadon-drivotra, miaraka amina ekipazy Vezo (mpanjono avy any atsimo) sy iray amin'ny tompon'ny schooner izay novolavolainay tao amin'ny Channel Mozambique.
Fotoana madio hizarana sy fihaonana amin'ity foko avy any atsimon'i Madagasikara ity . Ny jono, ny snorkeling, ny mozika, ny sakafo matsiro, ny filentehan'ny masoandro,
hiaina fitsangatsanganana mahagaga… tsy hadino…
Ny fotoam-pitetezana dia eo ho eo ary miankina amin'ny lalana sy ny herin'ny rivotra. Ny programa dia miankina amin'ny toetr'andro sy, mazava ho azy, araka ny fanirianao.
Ity fitsangantsanganana an-tampon'ny Morondava sy Majunga ity dia mitaky sidina lava ary mety iharan'ny toetr'andro somary misavoritaka ihany koa . Mety kokoa amin'ny olona zatra
miondrana an-tsambo noho izany fa tsy mora voan'ny ranomasina.
Ity zotra fitetezana ity dia azo atao amin'ny lafiny hafa ihany koa, ao anatin'ny 12 andro fitetezana an'i Majunga mankany Morondava . Ny vanim-potoana mahasoa dia ny faran'ny
volana novambra / fanombohan'ny desambra , mankanisa anay raha mila fanazavana fanampiny.",
"majunga",NULL,NULL,NULL,"done",12,0,NULL,NULL,NULL);


insert into contenu values(NULL,CURRENT_DATE(),"Radama II","tantara","article",
"Radama II , teraka tamin'ny 23 septambra 1829 ary maty teo 11 mai 1863, dia mpanjaka malagasy . Nanjaka tamin'ny fanjakan'i Madagascar izy tamin'ny 1861 ka hatramin'ny 1863.
Ity vanim-potoana ity dia nanamarika ny fihodinan'ny diplaomatika eropeana ny eropeana. Mpanjaka francophile , nefa izy dia voampanga ho 'mivarotra tanindrazana' ary maty
novonoin'ny mpanohana politika mahaleo tena kokoa.",
"radamaII",NULL,NULL,NULL,"done",12,0,NULL,NULL,NULL);

insert into contenu values(NULL,CURRENT_DATE(),"Ranavalona I","tantara","article",
"Ranavalona I re , teraka tamin'ny taona 1788 ary maty tamin'ny16 aogositra 1861, dia mpanjakavavy madagasikara iray avy any amin'ny faritra avon'ny nosy (any Imerina ).
Nanjaka tamin'ny fanjakan'i Madagascar izy tamin'ny 1828 ka hatramin'ny 1861 .
Ny anaran'i Mavo (na Ramavo) no nanondroana azy voalohany ary avy eo Rabodonandrianampoinimerina (izay midika hoe 'ilay zazavavy kely hendry Andrianampoinimerina'), momba ny
dadatoany, Andrianampoinimerina dadatoany . Tonga mpanjakavavin'i Madagascar izy taorian'ny fahafatesan'ny vadiny sy ny zanak'olo-mpiray tam-po aminy Radama I st . Izy io koa dia
tendren'ny lohatenin'ny Ranavalo-Manjaka I re('Fanjakan'i Ranavalona'). Ity vanim-potoana ity dia nanamarika ny fisarahana lavitra ny Eoropeana. Raha heverina ho mpanjaka tsy
refesi-mandidy izy, dia mbola mijanona ho mpanam-pahefana omena sehatra iray, izay mbola loharanom-baovao ao amin'ny eritreritra nasionalista mahaleo tena.",
"ranavalonaI",NULL,NULL,NULL,"done",12,0,NULL,NULL,NULL);


insert into contenu values(NULL,CURRENT_DATE(),"Andrianampoinimerina","tantara","article",
"Andrianampoinimerina , teraka Imboasalama tamin'ny taona 1745 ary maty tamin'ny 1810 , no mpitondra voalohany tao amin'ny fanjakan'ny Emyrna natambatra , afovoan'i Madagasikara,
ary avy eo dia neken'ny ankamaroan'ny fanjakana malagasy ho toy ny suzerain . Nanjaka tamin'ny 1787 ka hatramin'ny 1810 izy . Ny zanany lahy, Prince Ilaidama dia nalahatra ho
Radama I er , nandimby azy ary nahavita ny asany ary lasa mpanjaka voalohany teto Madagascar.",
"andrianampoinimerina",NULL,NULL,NULL,"done",12,0,NULL,NULL,NULL);

insert into contenu values(NULL,CURRENT_DATE(),"Bois de rose","tantara","article",
"Ny anarana hoe raozy dia entina ilazana ireo hazo fofona isan-karazany ampiasaina amin'ny ranomasimbe,hatramin'ny hazo mavokely na mavokely ampiasaina amin'ny kabinetra.
Amin'ny ranomasimbe,avy amin'ny hazon'ny fianakaviana Lauraceaeny menaka raozy, teratany avy anyAmazonia sy Goiana: Aniba rosaeodora,izay mahatonga azy ho karazam-biby tandindonin-doza1. Avy amin'ny hazo mareva - doko sy mavo mavo ka hatramin'ny loko varahina no tena ahazoana azy io, nefa azo amboarina koa ny faritra rehetra ao amin'ilay zavamaniry. Tany Guyane frantsay no nisian'io karazam - biby io, tamin'ny fiandohan'ny taonjato faha - 20. Voaaro amin'nyIUCN ireo karazam - biby ireo, satria tsy fahita firy.
Ao amin'ny kabinetra,ny anarana hoe 'raozy' dia mifanaraka amin'ny anarana hoe 'raozy', ankoatra ny zavatra hafa, ho an'ireo hazon'ny Dalbergia Dalbergia Dalbergia variabilis (na Dalbergia fahasorenana),nampiasaina betsaka tamin'ny taonjato fahavalo ambin'ny folo tao amin'ny marquetry. Taty aoriana dia nolazaina fa noho ny fanitarana (sy ny fanararaotana ny fiteny) tamin'ny karazana Dalbergia,ao amin'ny fianakaviana fabaceae. Indrindra fa:
Dalbergia maritima,antsoina ihany koa hoe raozy na 'raozy sandoka' an'i Madagasikara
Dalbergia sissoo,ilay 'raozy' aoatsinanan'i India.
Ny fampiharana ny voambolana 'raozy' dia avy amin'ny teny Anglisy hoe raozy nanondro ny fianakaviana raozy izay ahitana karazana Dalbergia maro, izay tsy mitovy amin'ny raozy ny endriny amin'ny ankapobeny, nefa koa noho ny fahasarotana amin'ny famantarana mazava tsara ireo karazam-biby nampiasaina tamin'ny taonjato fahavalo ambin'ny folo.",
"bdr",NULL,NULL,NULL,"done",12,0,NULL,NULL,NULL);


insert into contenu values(NULL,CURRENT_DATE(),"Madagasikara","tantara","article",
"Nosy goavana i Madagasikara ary firenena miorina any amin'ny morontsiraka atsimo atsinanan'i Afrika. Misy karazana biby an'arivony toy ny lemurs, ala, torapasika sy harambato.
Eo akaikin'ny renivohitra mahomby, Antananarivo, dia i Ambohimanga, andiana lapam-panjakana sy fasana, ary koa ny Lalambe Migodanan'i Baobabs, lalana maloto mifamatotra amin'ny hazo
goavana efa an-jato taonany maro",
"madagascar",NULL,NULL,NULL,"done",12,0,NULL,NULL,NULL);


insert into contenu values(NULL,CURRENT_DATE(),"Ny famorana","fomba sy vakoka","article",
"Fomba fanao nentim-paharazana ao Madagasikara ny famorana ary mandray endrika samihafa miankina amin'ny faritra. Ao amin'ny Haut-Plateaux,ao Imerina, dia ampiharina amin'ny ririnina izany, izany hoe eo anelanelan'ny volana Mey sy Aogositra, tsirairay avy. Antsoina hoe famorana na didimpoitra izy io.1. Any atsimon'ny nosy, atao iraisana izany ary antsoina hoe tambahoaka ao Atsimo-Atsinanana sy savatse eo anivon'ny Ambolavaha ao Atsimo-Andrefana. Ny kelikely,izay atao isaky ny fito taona, dia mampiakatra ny fety izay mety haharitra iray volana."
,"famorana",NULL,NULL,null,"done",11,0,NULL,NULL,NULL);


insert into contenu values(NULL,CURRENT_DATE(),"Ny famadihana","fomba sy vakoka","article",
  "Fomba amam-panaohita any amin'ny faritra sasany eto Madagasikara ny famadihana,na ny fiovan'ny maty, anisan'izany ny faritra Avon'i Highlands. Na dia toa tara loatra aza izany tao amin'ilay nosy (angamba taorian'ny taonjato fahafito ambin'ny folo), farafaharatsiny amin'ny endriny ankehitriny, ny gadihana1 dia fanitarana ny fomba amam-panao talohan'ny fandevenana 'fandevenana indroa' niely talohan'ny andro maoderina tany Azia Atsimo Atsinanana, ary koa tany Ejipta fahiny,hatramin'ny tany Akaikin'i Atsinanana fahiny (tanyIsraely fahiny, babylona na teo anivon'ireo zoroastiana tany Persia) sy Gresy fahiny."
  ,"famadihana",NULL,NULL,null,"done",21,0,NULL,NULL,NULL);

insert into contenu values(NULL,CURRENT_DATE(),"Jasmin de Madagascar","zava-maniry","article","
Jasmin de Madagascar dia zavamaniry teratany eto Madagasikara. Izy io dia
matetika amidy ho fihaingona zaridaina satria izy dia anisan'ny zava-maniry
manankarena indrindra sy mora hambolena ary mora kolokoloina.","jasmin",NULL,NULL,NULL,"done",12,0,NULL,NULL,NULL);

insert into contenu values(NULL,CURRENT_DATE(),"Vanille de Madagascar","zava-maniry","article",
"Vanille de Madagascar dia zava-manitra teratany eto Madagasikara, hita bebe kokoa any faritra SAVA sy manerana ny Diego;
ampiasaina mba hanalefaka ny kakao hanesorana ilay tsiro mangidy. Misy karazany 3 ny vanille : vanille Tahitensis, vanille planifolia, vanille pompona; ary ahitana ihany koa vanille diha izay atao hoe vanille du cerado.",
"vanille","vanille.mp4",NULL,NULL,"done",15,8000,NULL,NULL,NULL);

insert into contenu values(NULL,CURRENT_DATE(),"Afindrafindrao Malagasy","fomba sy vakoka","article",
"18 ny foko misy eto Madagasikara ary samy manana ny fomba ara-mozikany avy izy ireo. Fa ny dihy afindrafindrao dia malaza tokoa manerana an'i Madagasikara satria manome fahafinaretana tokoa ity gadona mozika ity.
Anisan'ny kolon-tsaina Malagasy tokoa ny afindrafindrao, izany hoe mozika nentim-paharazana izy io. Ny gadona afindrafindrao dia azo avy amin'ny
fampivondronan'ny mozika Basesa sy mozika eoropeana ary ampiasaina hanomboana sy hanafana lanonana. Ny afindrafindrao dia
fandihan'olon-droa, ny vehivavy eo aloha de lahy ao aorina, mifanao aloha sy aoriana lavalava ary mifampitantana ny olon-droa ary ny sandry sy tongotra mande avia sy havanana. Izany dihy izany dia maneho firaisan-kina
sy fiaraha-mientana ny vahoaka tsirairay ao amin'ny foko samihafa eto Madagasikara","afindrafindrao","afindrafindrao.mp4",NULL,
NULL,"done",20,0,NULL,NULL,NULL);


insert into contenu values(NULL,CURRENT_DATE(),"Mitaraina ny tany","toerana","livre",
"texte texte texte texte"
,NULL,NULL,NULL,"madagascar.pdf","done",21,7000,NULL,NULL,"Andry Andraina");


insert into contenu values(NULL,CURRENT_DATE(),"Titre","Categorie","type",
"descri descri descri "
,"photo","video","audio","pdf","done/no",12,7000,NULL,NULL,NULL);
