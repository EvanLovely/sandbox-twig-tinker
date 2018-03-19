<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use TwigTinker\TwigStuff;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

// request body
$content = json_decode($request->getContent(), true);

$twig = new TwigStuff();
$results = $twig->render($content);
$response = new Response(
  $results,
  Response::HTTP_OK,
  [ 'content-type' => 'text/html']
);

$response->send();
