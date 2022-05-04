<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="app_test")
     */
    public function index(): Response
    {
        $name = "Bonjour Rudy";
        date_default_timezone_set('Europe/Paris');
        $date = date('d-m-y h:i:s');
        $nomRoute = "Tu est sur la route test";
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'name' => $name,
            'date' => "Nous sommes le $date",
            'route' => $nomRoute,
        ]);
    }

    /**
     * @Route("/route-param/{nom}", name="route_param")
     */
    public function routeParam(String $nom): Response
    {
        
        return $this->render('test/route-param.html.twig', [
            "nom" => $nom
        ]);
    }
}
