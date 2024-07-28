<?php

use Pecee\SimpleRouter\SimpleRouter as router;



router::setDefaultNamespace('src\Controllers');

try{

    router::get(BASE_URL, "homeController@index");

    router::group(['namespace' => 'Register'], function () {
        router::get(BASE_URL, "loginController@index");
        router::post(BASE_URL, "loginController@store");

        router::get(BASE_URL, "registerController@index");
        router::post(BASE_URL, "registerController@store");
    });
    



    router::start();

}catch(Exception $e)
{
    print $e;
}