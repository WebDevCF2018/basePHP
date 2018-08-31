<?php

class Menu
{
    // Attribut
    private $db;
    private $datas;
    private $sortie;
    private $level=0;
    private $parent=0;
    private $idNow=0;

    // public constructor
    public function __construct(PDO $dbase)
    {
        $this->setDb($dbase);
        $this->setDatas($this->recupAll());
        $this->createMenu();
    }

    private function recupAll(){
        $recup = $this->db->query("SELECT * FROM categs ORDER BY niveau ASC;");
        return $recup->fetchAll(PDO::FETCH_ASSOC);
    }


    public function createMenu()
    {
        $this->setSortie("<ul>");

        foreach ($this->getDatas() as $values) {

            $this->setIdNow($values['id']);
            $this->setLevel($values['niveau']);

            $this->setSortie("<li>");

            if($this->getParent()<$this->getLevel()) {
                $this->setLevel($this->getIdNow());
                $this->setSortie("<ul>");
                $this->setSortie($this->createMenu());
                $this->setParent($this->getLevel());
            }else {
        $this->setSortie($values['titre']);
                $this->setParent($this->getLevel());

                $this->setSortie("</ul>");

            }

        }
        $this->setSortie("<li>");
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

    public function getDatas()
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

    public function getParent()
    {
        return $this->parent;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
    }


}