<?php
namespace App\Stops\Entity;

class Stop
{
    protected $idStop;
    protected $nameStop;
    protected $latitude;
    protected $longitude;

    public function __construct($idStop, $nameStop, $latitude, $longitude)
    {
        $this->idStop = $idStop;
        $this->nameStop = $nameStop;
        $this->latitude = $latitude;
        $this->longitude=$longitude;
    }
}