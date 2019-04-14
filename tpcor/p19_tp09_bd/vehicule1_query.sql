
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