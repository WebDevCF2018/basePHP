# Séléctionnez tous les champs de "categ"
SELECT * FROM categ;
# Séléctionnez tous les champs de "arti"
SELECT * FROM arti;
# Séléctionnez tous les champs de "categ" plus 'arti.titre' renommé en titre_article si liés à un "arti", il peut y avoir plusieurs X la même catégorie
SELECT categ.*, arti.titre AS titre_article
	FROM categ
		INNER JOIN categ_has_arti
			ON categ.idcateg = categ_has_arti.categ_idcateg
		INNER JOIN arti
			ON categ_has_arti.arti_idarti = arti.idarti;
            
# idem ligne 6, mais avec des alias de nom de table
SELECT c.*, a.titre AS titre_article
	FROM categ c
		INNER JOIN categ_has_arti h
			ON c.idcateg = h.categ_idcateg
		INNER JOIN arti a
			ON h.arti_idarti = a.idarti;
            
# idem ligne 14, mais avec toutes les catégories, même non liées à un article
SELECT c.*, a.titre AS titre_article
	FROM categ c
		LEFT JOIN categ_has_arti h
			ON c.idcateg = h.categ_idcateg
		LEFT JOIN arti a
			ON h.arti_idarti = a.idarti;   
            
# idem ligne 14, mais avec toutes les articles, même non liées à une catégorie
SELECT c.*, a.titre AS titre_article
	FROM categ c
		RIGHT JOIN categ_has_arti h
			ON c.idcateg = h.categ_idcateg
		RIGHT JOIN arti a
			ON h.arti_idarti = a.idarti;            