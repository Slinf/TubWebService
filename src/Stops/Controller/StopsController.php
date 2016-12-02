<?php
namespace App\Stops\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
class StopsController
{
    public function GetStops(Request $request, Application $app)
    {   
       //Appel fonction qui effectue la requête
        $StopsBusList = $app['repository.stop']->BusStops();
        return json_encode(array('stops' => $StopsBusList));
    }
}