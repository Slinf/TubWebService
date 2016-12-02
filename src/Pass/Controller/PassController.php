<?php
namespace App\Pass\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class PassController
{
    public function GetAllPass(Request $request, Application $app)
    {   
       //Appel fonction qui effectue la requête
       $PassList = $app['repository.pass']->AllPass();
       return json_encode(array('pass' => $PassList));
    }
}