<?php

namespace TwigTinker;
require_once 'vendor/autoload.php';

$x = new TwigStuff();
$info = [
  'template' => 'hi.twig',
  'data' => [
    'name' => 'Evan',
  ],
];
$y = $x->render($info);
echo $y;
