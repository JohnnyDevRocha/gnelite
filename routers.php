<?php

use Pecee\SimpleRouter\SimpleRouter as router;

router::setDefaultNamespace('src\Controllers');

router::get('/', "homeController@index");

router::start();