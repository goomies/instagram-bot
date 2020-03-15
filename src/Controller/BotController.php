<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Panther\Client;

class BotController extends AbstractController
{
    /**
     * @Route("/bot", name="bot")
     */
    public function bot()
    {   
        $client = Client::createChromeClient();
        
        $client->request('GET', 'https://api-platform.com'); // Yes, this website is 100% written in JavaScript
        
        // $client->clickLink('Support');
        
        // Wait for an element to be rendered
        // $crawler = $client->waitFor('.support');
        
        // echo $crawler->filter('.support')->text();
        $client->takeScreenshot('screen.png'); // Yeah, screenshot!
    }

}