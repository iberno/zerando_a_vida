<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('login', 'PagesController@login');
$router->get('registrar', 'PagesController@registrar');
$router->post('postLogin', 'PagesController@postLogin');

$router->get('users', 'UsersController@index');