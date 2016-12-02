<?php
namespace App\Stops\Entity;

class Stop
{
    protected $idArret;
    protected $nomArret;
    protected $latitude;
    protected $longitude;

    public function __construct($idArret, $nomArret, $latitude, $longitude)
    {
        $this->idArret = $idArret;
        $this->nomArret = $nomArret;
        $this->latitude = $latitude;
        $this->longitude=$longitude;
    }
}