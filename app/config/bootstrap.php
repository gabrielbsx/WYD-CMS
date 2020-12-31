<?php
use DI\Container;
use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require __DIR__ . '/../../vendor/autoload.php';

$container = new Container;

$settings = require __DIR__ . '/settings.php';
$settings($container);

AppFactory::setContainer($container);
$app = AppFactory::create();

$middleware = require __DIR__ . '/middleware.php';
$middleware($app);

require __DIR__ . '/../helpers/config.php';

require __DIR__ . '/routes.php';

$app->run();