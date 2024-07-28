<?php

use Pecee\SimpleRouter\SimpleRouter as router;



router::setDefaultNamespace('src\Controllers');

try{

router::get(BASE_URL, "homeController@index");

router::start();

}catch(Exception $e)
{
    print $e;
}