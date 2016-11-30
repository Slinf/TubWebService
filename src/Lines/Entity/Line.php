<?php
namespace App\Lines\Entity;

class Line
{
    protected $idArret;
    protected $nomArret;
    protected $numLigne;
    protected $nomLigne;
    protected $latitude;
    protected $longitude;

    public function __construct($idArret, $nomArret, $numLigne, $nomLigne, $latitude, $longitude)
    {
        $this->idArret = $idArret;
        $this->nomArret = $nomArret;
        $this->numLigne = $numLigne;
        $this->nomLigne = $nomLigne;
        $this->latitude = $latitude;
        $this->longitude=$longitude;
    }
}