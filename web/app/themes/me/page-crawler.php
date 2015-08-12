<?php
/*
 * Template Name: Crawler page
 */

use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;

$client = new Client();

$crawler = $client->request('GET', 'http://nois3.it');

echo "<pre>";
var_dump($crawler->filter('storage'));
echo "</pre>";

$response = array(
  'title' => $crawler->filter('title'),
);

// echo json_encode($response);
?>
