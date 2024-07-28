<?php
namespace src\Controllers;

use src\Core\Controller;
use src\Models\companyModel;

class loginController extends Controller
{
    function __construct()
    {
        parent::__construct("Views/Register/");
    }

    function index() : void
    {
        print $this->renderView("login.html", [
        ]);

    }

    function store() : void
    {
        
    }
}