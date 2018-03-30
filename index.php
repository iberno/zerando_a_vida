<?php
//get (oneself or something) into or out of a situation using existing resources.
$database = require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());