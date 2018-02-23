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
SELECT idauteur,nom,prenom FROM auteur
	ORDER BY nom ASC;