Projet MVC de la cave de l'UTT

==========================
etape1
==========================

contient les sources disponible sur elearning
tous les fichiers sont localisés dans le répertoire racine.

==========================
etape2
==========================

Exercice 2 du TP
1) Construction de l'arborescence du projet
2)ajout d'un fichier config.php dans le même répertoire que le routeur
2a)
contient les parametres pour la connexion à la base 
modification du fichier SModel.php pour récupérer les parametres. Mettre global dans la méthode

2b)
contient le réportoire $root du projet. A modifier
Permet de paramettre les includes et les requires
C'est quand même une grosse galère
Pour l'annee prochaine on utilisera les namespaces
 
2c) les fragments sont dans un répertoire fragment dans le répertoire view 
il est aussi possible de supprimer cette notion de fragment et de les transformer en view ....


3) toutes les vues faissaient appel aux fragment head et foot
modification, maitenant c'est le routeur qui fait les includes
permet de simplifier les vues
  
4) ControllerVins renommé en Controller

5) le point d'entrée de l'application est le fichier index.php (qui appelle le routeur)

==========================
etape3
==========================

1) Ajout des fonctionalités pour le producteur
2) ajout de la nouvelle barre de menu : FragmentMenuCave (Merci Séverine)
Il faut modifer ce fichier pour ajouter les nouvelles fonctions pour producteur


REMARQUE IMPORTANTE
Pour faire la suppression d'un VIN ou d'un producteur, il faut qu'il ne soit pas impliqué dans un tuple de la table RECOLTES
Donc j'ai fait des suppression sur les vins ou les producteurs que j'avais créés

==========================
etape4
==========================

1) Modification du routeur. Nouveaux fichier routeur2.php
Prise en compte de 3 paramètres maintenant
controller
action
params 

2) implique de changer FragmentMenuCave avec appel de routeur2.php et de mettre les 3 parametres

3) implique de changer tous les formulaires du projet pour rajouter les champs cachés controller et action

4) permet de passer un paramettre "target" dans les formulaires de recherche de la liste des id (de vin et de producteur)
ce parametre target permet d'indiquer quelle fonction statique du controller traitera le formulaire
ainsi le formulaire viewVinIdForm peut maintenant servir pour un select et pour un delete (2 valeurs possibles pour target)

5) decoupage du controller en 2 controllers : ControllerVin et ControllerProducteur

6) Le routeur est resté un script php et pas une classe car c'est le point d'entrée du projet. voir barre des menus.
Pour l'année prochaine faire une classe Dispatcher avec méthodes static pour la traduction des URI en appel de fonctions statiques
Utilisation de $_SERVER['REQUEST_URI']

Utilisation d'URI du type 

router2.php/vin/read/23
router2.php/vin/read/target2
....

