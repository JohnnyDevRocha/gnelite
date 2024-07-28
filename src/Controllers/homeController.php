<?php

namespace src\Controllers;

use src\Core\Controller;

class homeController extends Controller
{
    function __construct()
    {
        parent::__construct("Views/home/");
    }

    function index() : void
    {
        print $this->renderView("index.html", [

        ]);
    }
}