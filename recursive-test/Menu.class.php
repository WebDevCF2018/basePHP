<?php

class Menu
{
    // Attribut
    private $db;
    private $datas;
    private $sortie;
    private $level=0;
    private $idNow=0;

    // public constructor
    public function __construct(PDO $dbase)
    {
        $this->setDb($dbase);
        $this->setDatas($this->recupAll());
    }

    private function recupAll(){
        $recup = $this->db->query("SELECT * FROM categs;");
        return $recup->fetchAll(PDO::FETCH_ASSOC);
    }


    public function createMenu()
    {
        $this->setSortie("<ul>");

        foreach ($this->getDatas() as $values) {

            if (is_array($values)) {

                // recursive
                $this->createMenu($values);

            } else {
                // item <li></li>
                $this->setSortie("<li>" . $values . "</li>");
            }
        }
        // last close ul
        $this->setSortie("</ul>");
    }

    // public getter
    public function getSortie()
    {
        return $this->sortie;
    }


    private function setSortie(string $str)
    {
        // concatenation of sortie
        $this->sortie .= $str;
    }

    private function getDb()
    {
        return $this->db;
    }

    private function setDb($db)
    {
        $this->db = $db;
    }

    private function getDatas()
    {
        return $this->datas;
    }

    private function setDatas($datas)
    {
        $this->datas = $datas;
    }

    private function getLevel()
    {
        return $this->level;
    }

    private function setLevel($level)
    {
        $this->level = $level;
    }

    private function getIdNow()
    {
        return $this->idNow;
    }

    private function setIdNow($idNow)
    {
        $this->idNow = $idNow;
    }


}