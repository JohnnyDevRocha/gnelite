<?php

use Pecee\SimpleRouter\SimpleRouter as router;



router::setDefaultNamespace('src\Controllers');

try{

    router::get(BASE_URL, "homeController@index");

    router::group(['namespace' => 'Register'], function () {
        router::get(BASE_URL.'/login', "loginController@index");
        router::post(BASE_URL.'login', "loginController@store");

        router::get(BASE_URL.'register', "registerController@index");
        router::post(BASE_URL.'register', "registerController@store");
    });
    



    router::start();

}catch(Exception $e)
{
    print $e;
}