<?php
namespace App\Users\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
class IndexController
{
    public function BusStop(Request $request, Application $app)
    {   
       //Appel fonction qui effectue la requête
       $LinesBusList = $app['repository.user']->getById(1);
       return json_encode($LinesBusList);
       echo json_encode($LinesBusList);
    }
}