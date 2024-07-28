<?php

use Pecee\SimpleRouter\SimpleRouter as router;

router::setDefaultNamespace('src\Controllers');

router::get(BASE_URL, "homeController@index");

router::start();