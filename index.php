<?php

require 'core/Router.php';

$routes = require 'routes.php';

$router = new Router();

$router->define($routes);

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->redirect($uri);
