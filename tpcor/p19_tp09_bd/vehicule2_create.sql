create table if not exists proprietaire2 (
 id integer not null,
 nom varchar(30) not null,
 prenom varchar(30) not null, 
 ville varchar(30) not null,
 primary key (id)
);

create table if not exists voiture2 (
 no_plaque varchar(10) not null,
 marque varchar(20) not null,
 modele varchar(20) not null,
 couleur varchar(20),
 primary key (no_plaque)
);

 -- modifications pour faire le lien avec les propriétaires
create table possede2 (
 p_id integer,
 v_noplaque varchar(10),
 primary key (p_id, v_noplaque),
 foreign key (p_id) references proprietaire2 (id),
 foreign key (v_noplaque) references voiture2 (no_plaque)
);