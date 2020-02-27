<?php

namespace Makineza\Controller\Traits;

use Twig\Environment;

trait RenderTrait
{
    
    private $twig;
    
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
    
    public function render($path, array $parameters)
    {
        echo $this->twig->render($path, $parameters);
    }
}