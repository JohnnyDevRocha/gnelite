<?php

namespace src\Core;

class Controller {

    private \Twig\Environment $twig; 

    function __construct(string $path)
    {
        $loader = new \Twig\Loader\FilesystemLoader($path);
        $this->twig = new \Twig\Environment($loader);
    }

    function renderView(string $view, array $data)
    {
        return $this->twig->render($view, $data);
    }
}