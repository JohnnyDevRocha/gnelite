<?php
namespace src\Controllers;

use src\Core\Controller;
use src\Models\companyModel;

class homeController extends Controller
{
    function __construct()
    {
        parent::__construct("Views/home/");
    }

    function index() : void
    {
        if($_SESSION["user"]){
            $bd = (new companyModel)->search();

            print $this->renderView("index.html", [
                "userComp" => var_dump($bd) 
            ]);

        }else{

        }
    }
}