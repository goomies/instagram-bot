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
     * @Route("/bot-login", name="bot_login")
     */
    public function botLogin(Request $request, ParameterBagInterface $parameterBagInterface)
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

        // Wait for the notification pop-up
        sleep(4);

        $client->takeScreenshot('screen.png');
    }
}
