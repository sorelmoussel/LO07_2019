-- =====================================================================
-- ===== vendredi 16 novembre 2018
-- ===== Correction des requetes sql sur la base des vins
-- =====================================================================

-- TP LO07 bases de données

-- 1. Affichez les informations contenues dans la relation vin.
select * from vin;

-- 2. Donner la liste ordonnée des crus.
select cru
from vin
order by cru;

-- 3. Donner la liste ordonnée des crus sans les doublons.
select distinct cru
from vin
order by cru;

-- 4. Donnez la liste des vins de 1980 ordonnés par degré.
select *
from vin
where annee = 1980
order by degre;

-- 5. Donner la liste des vins dont le degré est compris entre 11° et 12°.
select * 
from vin
where degre between 11.0 and 12.0;

-- 6. Quel est le degré moyen des crus ?
select avg(degre)
from vin;

-- 7. Quel est le plus fort degré des vins.
select max(degre)
from vin;

-- 8. Quels sont les crus (ordonnés par degré et année) de degré supérieur au degré moyen des crus ?
select cru
from vin
where degre > (select avg(degre) from vin)
order by degre, annee;

-- 9. Donnez la liste des régions de production de vins.
select region from producteur;

-- 10. Donner la liste par ordre alphabétique des noms et des prénoms des producteurs de vins
-- n'appartenant pas aux régions suivantes : Corse, Beaujolais, Bourgogne et Rhône.

select nom, prenom
from producteur
where region not in ('Corse', 'Beaujolais', 'Bourgogne', 'Rhone')
order by nom ASC, prenom DESC;

-- 11. Quel est le nombre de récoltes ?

select count(*)
from recolte;

-- 12. Quelle est la quantité de vin produite de degré > 12 ?

select SUM(quantite)
from vin as V, recolte as R
where R.vin_ID = V.ID and V.degre > 12

-- 13. Quels sont les noms des producteurs du cru 'Etoile', 
-- leurs régions et les quantités de vins récoltés ?

select P.nom, P.region, R.quantite
from vin as V, producteur as P, recolte as R
where R.vin_ID = V.ID and R.producteur_ID = P.ID and cru = 'Etoile';

-- 14. Quelle est la liste des crus récoltés en 1979 ordonnée par numéro de producteur ?

select cru, P.id, quantite
from vin as V, producteur as P, recolte as R
where R.vin_ID = V.ID and R.producteur_ID = P.ID and annee = 1979
order by P.id;


-- 15. Donner la liste ordonnée des crus et la quantité par cru ?

select cru, SUM(quantite)
from vin as V, recolte R
where R.vin_ID = V.ID
group by cru
order by cru

-- 16. Quelles sont les quantités de vin produites par région ? 

select region, SUM(quantite)
from producteur as P, recolte as R
where R.producteur_ID = P.ID
group by region;

-- 17. Donner la liste des noms et des prénoms des producteurs produisant
-- au moins trois crus.

select p.nom, p.prenom, count(distinct v.cru)
from vin v, producteur p, recolte r
where v.id=r.vin_id and r.producteur_id = p.id
group by p.id
having count(distinct v.cru) >= 3;

-- 18. Combien y-a-t-il de producteurs de vin par région dans les régions Savoie et Jura ?

select region, count(id)
from producteur
where region in ('Savoie', 'Jura')
group by region;


-- 19. Retrouver toutes les paires de producteurs habitant la même région. Les tuples du résultat seront de
-- la forme id1, nom1, id2, nom2, région. La présence d'un tuple avec id1 et id2 interdit la présence d'un
-- tuple avec id2 et id1.

select P1.id, P1.nom, P2.id, P2.nom, P1.region, P2.region
from producteur as P1, producteur as P2
where P1.region = P2.region and P1.id < P2.id


-- 20 nombre de tuples dans le produit cartésien des tables vin et récolte ?

select count(*) 
from vin, recolte;

-- >> reponse : 67 165

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

-- =====================================================================
-- ===== vehicule1_insert
-- =====================================================================

insert into proprietaire1 values (100, 'marc', 'lemercier', 'Troyes');
insert into proprietaire1 values (200, 'alain', 'ploix', 'Chalons');	
insert into proprietaire1 values (300, 'guillaume', 'doyen', 'Nancy');

insert into voiture1 values ('123 AF 10', 'renault', 'clio', 'vert', 100);
insert into voiture1 values ('345 FDE 75', 'citroen', 'ax', 'bleu', 200);
insert into voiture1 values ('657 DE 88', 'peugoet', '404', 'rouge', 300);
insert into voiture1 values ('89 GT 10', 'renault', 'twingo', 'bleu', 100);

-- =====================================================================
-- ===== vehicule1_query
-- =====================================================================

-- Liste des voitures
select * from voiture1;

-- Liste des proprietaires
select * from proprietaire1;

-- liste des voitures avec leur proprietaire

select *
from voiture1 as V, proprietaire1 as P
where V.proprietaire1_id = P.id;


-- nombre de voiture par proprietaire
select count(*), id, nom, prenom
from voiture1 as V, proprietaire1 as P
where V.proprietaire1_id = P.id
group by id;

-- =====================================================================
-- ===== vehicule2_create
-- =====================================================================

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

-- =====================================================================
-- ===== vehicule2_insert
-- =====================================================================

insert into proprietaire2 values (100, 'marc', 'lemercier', 'Troyes');
insert into proprietaire2 values (200, 'alain', 'ploix', 'Chalons');	
insert into proprietaire2 values (300, 'guillaume', 'doyen', 'Nancy');


insert into voiture2 values ('123 AF 10', 'renault', 'clio', 'vert');
insert into voiture2 values ('345 FDE 75', 'citroen', 'ax', 'bleu');
insert into voiture2 values ('657 DE 88', 'peugoet', '404', 'rouge');
insert into voiture2 values ('89 GT 10', 'renault', 'twingo', 'bleu');


insert into possede2 values (100, '123 AF 10');
insert into possede2 values (200, '345 FDE 75');
insert into possede2 values (300, '657 DE 88');
insert into possede2 values (100, '89 GT 10');
insert into possede2 values (200, '89 GT 10');

-- =====================================================================
-- ===== vehicule2_query
-- =====================================================================

-- liste des proprietaires par voiture 

select *
from proprietaire2 P, voiture2 V, possede2 PO
where PO.p_id = P.id and PO.v_noplaque = v.no_plaque
order by no_plaque;

-- les proprietaires de la voiture 89 GT 10

select *
from proprietaire2 P, voiture2 V, possede2 PO
where PO.p_id = P.id and PO.v_noplaque = v.no_plaque and v.no_plaque = '89 GT 10';

