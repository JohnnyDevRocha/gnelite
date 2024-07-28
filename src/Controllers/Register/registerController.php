<?php
namespace src\Controllers\Register;

use src\Core\Controller;
use src\Models\companyModel;

class registerController extends Controller
{
    function __construct()
    {
        parent::__construct("Views/Register/");
    }

    function index() : void
    {
        print $this->renderView("register.html", [
        ]);
    }

    function store() : void
    {

    }
}