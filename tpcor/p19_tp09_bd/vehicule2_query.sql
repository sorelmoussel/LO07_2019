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

