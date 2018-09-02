<?php

class Menu {

// Attribut
    private $db;
    private $datas;
    private $sortie;

// public constructor
    public function __construct(PDO $dbase) {
        $this->setDb($dbase);
        $this->setDatas($this->recupAll());
        $this->createMenu(0, 0, $this->getDatas());
    }

    private function recupAll() {
        $recup = $this->db->query("SELECT * FROM categs ORDER BY niveau ASC;");
        return $recup->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createMenu($parent, $niveau, $array) {
        /*
         * array (size=4)
          'id' => string '2' (length=1)
          'titre' => string 'Deuxième' (length=9)
          'niveau' => string '0' (length=1)
          'ordre' => null
         */
        $niveau_precedent = 0;
        $this->setSortie("<ul>");

        foreach ($array as $values) {

            if ($values['niveau'] == $parent) {
                if ($values['niveau'] == 0 && $parent == 0) {
                    $this->setSortie("<li>\n");
                }

                if ($parent < $niveau) {
                    $this->setSortie("<ul>");
                }

                if ($values['niveau'] != 0) {
                    $this->setSortie("<li>");
                }

                if ($values['niveau'] == 0) {
                    $this->setSortie("<a href='#'>" . $values['titre'] . "</a>");
                } else {
                    $this->setSortie("<a href='#'>" . $values['titre'] . "</a>");
                }
                $niveau_precedent = $niveau;

                $this->createMenu($values['id'], ($niveau + 1), $array);

                if ($niveau == 0 && $niveau_precedent == 0) {
                    $this->setSortie("</li>\n");
                }
            }
        }
        $this->setSortie("</ul>\n");
    }

// public getter
    public function getSortie() {
        return $this->sortie;
    }

    private function setSortie(string $str) {
// concatenation of sortie
        $this->sortie .= $str;
    }

    private function getDb() {
        return $this->db;
    }

    private function setDb($db) {
        $this->db = $db;
    }

    public function getDatas() {
        return $this->datas;
    }

    private function setDatas($datas) {
        $this->datas = $datas;
    }

}
