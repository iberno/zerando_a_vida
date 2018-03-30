<?php

$router->get('', 'controllers/index.php');
$router->post('task', 'controllers/add-task.php');
$router->get('about', 'controllers/about.php');
$router->get('contact', 'controllers/contact.php'); 
$router->post('names', 'controllers/user.php');