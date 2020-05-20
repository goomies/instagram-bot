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
     * @Route("/bot", name="bot")
     */
    public function bot(ParameterBagInterface $parameterBagInterface)
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

        // Wait for the search bar to load on Instagram home page
        $client->waitFor("//input[@placeholder=\"Rechercher\"]");

        // Get search bar
        $crawler = $client->getCrawler();
        $searchbar = $crawler->filterXPath("//input[@placeholder=\"Rechercher\"]");

        // Search Hashtag #music
        $searchbar->sendKeys('#music');

        // Wait for the results to load
        $client->waitFor('//*[@id="react-root"]/section/nav/div[2]/div/div/div[2]/div[2]/div[2]');

        // Open Hashtag page
        $hashtag = $crawler->filterXPath("//span[contains(text(), '#music')]");
        $hashtag->click();

        // Wait for the Hashtag page to load
        $client->waitFor('//*[@id="react-root"]/section/main/header/div[2]/div[1]/div[1]/h1');

        // Open post
        $post = $crawler->filterXPath('//*[@id="react-root"]/section/main/article/div[1]/div/div/div[1]/div[1]/a');
        $post->click();

        // Wait for the post to load
        $client->waitFor('/html/body/div[4]/div[2]/div/article/header/div[2]/div[1]/div[1]/a');

        // Open profile
        $profile = $crawler->filterXPath('/html/body/div[4]/div[2]/div/article/header/div[2]/div[1]/div[1]/a');
        $profile->click();

        // Wait for the profile to load
        $client->waitFor('//*[@id="react-root"]/section/main/div/header/section/div[1]/h2');

        // Get profile followers number
        $profileFollowers = $crawler->filterXPath('//*[@id="react-root"]/section/main/div/header/section/ul/li[2]/a/span')->attr('title');
        $profileFollowers = str_replace(' ', '', $profileFollowers);
        $profileFollowers = intval($profileFollowers);

        // Check if profile got more than 100 followers
        if ($profileFollowers >= 100) {
            // Follow profile
            $followProfile = $crawler->filterXPath("//button[contains(text(), 'S’abonner')]");
            $followProfile->click();
        } else {
            dump($profileFollowers);
            die;
        }

        // Wait for the contact button to load
        $client->waitFor("//button[contains(text(), 'Contacter')]");

        // Click contact button
        $contactProfile = $crawler->filterXPath("//button[contains(text(), 'Contacter')]");
        $contactProfile->click();

        sleep(4);

        // Take screenshot
        $client->takeScreenshot('screen.png');
    }
}
