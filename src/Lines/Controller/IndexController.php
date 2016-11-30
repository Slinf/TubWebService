<?php
namespace App\Lines\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
class IndexController
{
    public function BusStop(Request $request, Application $app)
    {   
       //Appel fonction qui effectue la requête
       $LinesBusList = $app['repository.line']->getById(1);
       $AllLinesBus = $app['repository.line']->getAll();
       
       return json_encode($AllLinesBus);
       return json_encode($LinesBusList);
    }
}