<?php

namespace TwigTinker;

class TwigStuff {
  private $twig;
  public $timesUsed = 0;

  public function __construct()
  {
    $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../templates');
    $this->twig = new \Twig_Environment($loader);
  }

  public function render($info) {
    $template = $this->twig->load($info['template']);
    $html = $template->render($info['data']);
    $this->timesUsed++;
    return $html;
  }
}
