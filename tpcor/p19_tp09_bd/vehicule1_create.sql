-- =====================================================================
-- ===== vehicule1_create
-- =====================================================================


create table if not exists proprietaire1 (
 id integer not null,
 nom varchar(30) not null,
 prenom varchar(30) not null, 
 ville varchar(30) not null,
 primary key (id)
);

create table if not exists voiture1 (
 no_plaque varchar(10) not null,
 marque varchar(20) not null,
 modele varchar(20) not null,
 couleur varchar(20),
 primary key (no_plaque)
);

 -- modification pour faire le lien avec le propriétaire
alter table voiture1 add column proprietaire1_id integer;
alter table voiture1 add constraint voiture1_fk foreign key (proprietaire1_id) references proprietaire1(id);
