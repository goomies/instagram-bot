<?php

namespace App\Controller;

use Symfony\Component\Panther\Client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class BotController extends AbstractController
{
    /**
     * @Route("/bot", name="bot_inddex")
     */
    public function botIndex()
    {
        return $this->render('bot/index.html.twig');
    }

    /**
     * @Route("/mybot", name="mybot")
     */
    public function mybot(Request $request, ParameterBagInterface $parameterBagInterface)
    {
        // Execute Chrome client
        $client = Client::createChromeClient();

        // HTTP request
        $client->request('GET', 'https://www.instagram.com');

        // Define username and password
        $form['username'] = $parameterBagInterface->get('app-instagram-username');
        $form['password'] = $parameterBagInterface->get('app-instagram-password');
        
        // Wait for the input form element to load
        $client->waitFor("//input[@name=\"username\"]");

        // Submit connexion form
        $client->submitForm('Connexion', [
            'username' => $form['username'],
            'password' => $form['password'],
        ]);

        // Wait for search bar to load on Instagram home page
        $client->waitFor("//input[@placeholder=\"Rechercher\"]");
        
        // Get search bar
        $crawler = $client->getCrawler();
        $searchbar = $crawler->filterXPath("//input[@placeholder=\"Rechercher\"]");

        // Search Hashtag
        $searchbar->sendKeys('#music');
        $client->waitFor('//*[@id="react-root"]/section/nav/div[2]/div/div/div[2]/div[2]/div[2]');

        // Open Hashtag page
        $music = $crawler->filterXPath("//span[contains(text(), '#music')]");
        $music->click();
        $client->waitFor('//*[@id="react-root"]/section/main/header/div[2]/div[1]/div[1]/h1');

        // Take screenshot
        $client->takeScreenshot('screen.png');
    }
}
