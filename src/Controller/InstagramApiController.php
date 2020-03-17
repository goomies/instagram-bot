<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InstagramApiController extends AbstractController
{
    /**
     * @Route("/instagram/api", name="instagram_api")
     */
    public function index()
    {
        return $this->render('instagram_api/index.html.twig', [
            'controller_name' => 'InstagramApiController',
        ]);
    }
}
