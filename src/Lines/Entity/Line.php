<?php
namespace App\Lines\Entity;

class Line
{
    protected $idArret;
    protected $idLigne;
    protected $numLigne;
    protected $nomLigne;


    public function __construct($idArret, $idLigne, $numLigne,$nomLigne)
    {
        $this->idArret = $idArret;
        $this->idLigne = $idLigne;
        $this->numLigne = $numLigne;
        $this->nomLigne = $nomLigne;
    }
}