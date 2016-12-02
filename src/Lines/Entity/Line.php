<?php
namespace App\Lines\Entity;

class Line
{
    protected $idStop;
    protected $idLine;
    protected $numLine;
    protected $nameLine;


    public function __construct($idStop, $idLine, $numLine,$nameLine)
    {
        $this->idStop = $idStop;
        $this->idLine = $idLine;
        $this->numLine = $numLine;
        $this->nameLine = $nameLine;
    }
}