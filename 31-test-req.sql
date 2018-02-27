# sélectionnez tous les champs et entrées de auteur
SELECT * FROM auteur;
# sélectionnez tous les champs et entrées de livre
SELECT * FROM livre; 
# sélectionnez tous les champs et entrées de image
SELECT * FROM image;
# sélectionnez tous les champs et entrées de livre en y ajoutant le nom et prenom de l'auteur correspondant 
	# ancienne méthode, à éviter
SELECT livre.*, auteur.nom, auteur.prenom 
	FROM livre, auteur
    WHERE livre.auteur_idauteur = auteur.idauteur;
    # pour sépararer la condition (where) de la jointure (join), il est recommandé d'utiliser les INNER, LEFT ou RIGHT JOIN suivi du on
SELECT livre.*, auteur.nom, auteur.prenom 
	FROM livre
		INNER JOIN auteur
        ON livre.auteur_idauteur = auteur.idauteur;
        # WHERE => la condition est séparée de la jointure
# identique mais avec alias (INTERNE !!! alias avec le terme AS non obligatoire qui représente le nom des tables)        
SELECT l.*, a.nom, a.prenom
	FROM livre l
		INNER JOIN auteur a
        ON l.auteur_idauteur = a.idauteur;
# sélectionnez tous les champs et entrées de livre en y ajoutant le nom et prenom de l'auteur correspondant et url venant de image
SELECT l.*, a.nom, a.prenom, i.url
	FROM livre l
		INNER JOIN auteur a 
			ON l.auteur_idauteur = a.idauteur
		INNER JOIN image i
			ON l.idlivre = i.livre_idlivre;

# sélectionnez tous les champs et entrées de livre en y ajoutant le nom et prenom de l'auteur correspondant et url venant de image, même si il n'y a pas d'image (NULL)! Jointure interne avec auteur (Lien entre livre et auteur obligatoire) 
# FROM livre INNER JOIN auteur

# Jointure externe avec image (Lien entre livre et image non obligatoire, le champs url devient null si pas d'image, les livres, se trouvant à gauche dans la liste d'instruction sql seront sélectionnés même sans image)
# FROM livre LEFT JOIN image
SELECT l.*, a.nom, a.prenom, i.url
	FROM livre l
		INNER JOIN auteur a
			ON l.auteur_idauteur = a.idauteur
		LEFT JOIN image i
			ON l.idlivre = i.livre_idlivre;
# sélectionnez le nom, le prenom et l'id de tous les auteurs classés par nom ascendant
SELECT 
    idauteur, nom, prenom
FROM
    auteur
ORDER BY nom ASC;
    
# On prend tous les champs d'"auteur" et le titre de "livre", lorqu'il y a un lien entre eux
SELECT a.*, l.titre
	FROM auteur a
		INNER JOIN livre l
        ON a.idauteur = l.auteur_idauteur;
# idem 50 sauf qu'on veut les auteurs qui n'ont pas écrit de livre aussi
SELECT a.*, l.titre
	FROM auteur a
		LEFT JOIN livre l
        ON a.idauteur = l.auteur_idauteur;
# VictorHugo a écrit 2 livres, on veut en garder qu'un, on utilise le GROUP BY, mais il nous manque un livre!
SELECT a.*, l.titre
	FROM auteur a
		LEFT JOIN livre l
        ON a.idauteur = l.auteur_idauteur
	GROUP BY a.idauteur;

# VictorHugo a écrit 2 livres, on veut en garder qu'un, on utilise le GROUP BY, mais il nous faut également un GROUP_CONTAT pour garder tous les livres de chaque auteur sous forme de liste
SELECT a.*, GROUP_CONCAT(l.titre SEPARATOR "|||") AS titre
	FROM auteur a
		LEFT JOIN livre l
        ON a.idauteur = l.auteur_idauteur
	GROUP BY a.idauteur; 
# idem 67 avec l'idlivre en plus
SELECT  a.*, 
		GROUP_CONCAT(l.idlivre) AS idlivre, 
        GROUP_CONCAT(l.titre SEPARATOR "|||") AS titre
	FROM auteur a
		LEFT JOIN livre l
        ON a.idauteur = l.auteur_idauteur
	GROUP BY a.idauteur;

# sélectionnez tous les champs de "livre" auxquels vous rajoutez "url" venant de "image" - jointure interne ! JOINTURE OBLIGATOIRE
SELECT l.*, i.url
	FROM livre l
		INNER JOIN image i
        ON l.idlivre = i.livre_idlivre;

# sélectionnez tous les champs de "livre" auxquels vous rajoutez "url" venant de "image" - jointure externe ! JOINTURE NON OBLIGATOIRE. Ici les livres apparaîssent même sans images - livre LEFT JOIN image
SELECT l.*, i.url
	FROM livre l
		LEFT JOIN image i
        ON l.idlivre = i.livre_idlivre;

# sélectionnez tous les champs de "livre" auxquels vous rajoutez "pseudo" venant de "auteur" - jointure interne ! JOINTURE OBLIGATOIRE       
SELECT l.*, a.pseudo
	FROM livre l 
		INNER JOIN auteur a 
        ON l.auteur_idauteur = a.idauteur;

# idem 94 mais prendre que les livres parus après 1899 => WHERE puis on prend les 4 premiers caractères SUBSTR(chaine,1,4) (! en MySQL on commence à compter à 1 contrairement à la même fonction en PHP) > 1899
SELECT l.*, a.pseudo
	FROM livre l 
		INNER JOIN auteur a 
        ON l.auteur_idauteur = a.idauteur
	WHERE SUBSTR(l.parution,1,4) > 1899;
        
# sélectionnez tous les champs de "livre" auxquels vous rajoutez "pseudo" venant de "auteur" - jointure externe ! JOINTURE NON OBLIGATOIRE - affiche l'auteur qui n'a pas de livre!          
SELECT l.*, a.pseudo
	FROM livre l 
		RIGHT JOIN auteur a 
        ON l.auteur_idauteur = a.idauteur;

