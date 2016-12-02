<?php
namespace App\Pass\Entity;

class Pass
{
    protected $idStop;
    protected $idPass;
    protected $numLine;
    protected $hour;
    protected $PreviousPass;
    protected $NextPass;

    public function __construct($idStop, $idPass, $numLine, $hour, $PreviousPass, $NextPass)
    {
        $this->idStop = $idStop;
        $this->idPass = $idPass;
        $this->numLine = $numLine;
        $this->hour = $hour;
        $this->PreviousPass = $PreviousPass;
        $this->NextPass = $NextPass;
    }
}