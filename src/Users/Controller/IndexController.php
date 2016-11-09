<?php
namespace App\Users\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
class IndexController
{
    public function listAction(Request $request, Application $app)
    {
        $users = $app['repository.user']->getAll();
        return $app['twig']->render('users.list.html.twig', array('users' => $users));
    }
    public function deleteAction(Request $request, Application $app)
    {
        $parameters = $request->attributes->all();
        $app['repository.user']->delete($parameters['id']);
        return $app->redirect($app['url_generator']->generate('users.list'));
    }
    public function editAction(Request $request, Application $app)
    {
        $parameters = $request->attributes->all();
        $user = $app['repository.user']->getById($parameters['id']);
        return $app['twig']->render('users.form.html.twig', array('user' => $user));
    }
    public function saveAction(Request $request, Application $app)
    {
        $parameters = $request->request->all();
        if (isset ($parameters['id'])) {
            $user = $app['repository.user']->update($parameters);
        } else {
            $user = $app['repository.user']->insert($parameters);
        }
        return $app->redirect($app['url_generator']->generate('users.list'));
    }
    public function newAction(Request $request, Application $app)
    {
        return $app['twig']->render('users.form.html.twig');
    }


    public function BusStop(Request $request, Application $app)
    {
       
       //Appel fonction qui effectue la requête
       //$arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
       $bus = $app['repository.user']->getAllLigne();
       return json_encode($bus);
        echo json_encode($bus);
    }
}