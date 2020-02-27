<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        $response = new JsonResponse();
        $response->setData([
            'message' => 'Hello World!'
        ]);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}
