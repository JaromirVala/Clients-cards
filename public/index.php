<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use ExampleApp\CardIndex;
use ExampleApp\CardBase;
use ExampleApp\CardStatistic;
use FastRoute\RouteCollector;
use Middlewares\FastRoute;
use Middlewares\RequestHandler;
use Narrowspark\HttpEmitter\SapiEmitter;
use Relay\Relay;
use Zend\Diactoros\Response;
use Zend\Diactoros\ServerRequestFactory;
use function DI\create;
use function DI\get;
use function FastRoute\simpleDispatcher;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$database = (object) parse_ini_file(dirname(__DIR__) . '/config/dibi/db.ini',true);
$db = new Dibi\Connection($database->connect);

$containerBuilder = new ContainerBuilder();
$containerBuilder->useAutowiring(false);
$containerBuilder->useAnnotations(false);



$containerBuilder->addDefinitions([
    CardIndex::class => create(CardIndex::class)
        ->constructor(get('Db'), get('Response')),
    'Db' => $db,
    'Response' => function() {
        return new Response();
    },
]);

$containerBuilder->addDefinitions([
    CardBase::class => create(CardBase::class)
        ->constructor(get('Db'), get('Response')),
    'Db' => $db,
    'Response' => function() {
        return new Response();
    },
]);

$containerBuilder->addDefinitions([
    CardStatistic::class => create(CardStatistic::class)
        ->constructor(get('Db'), get('Response')),
    'Db' => $db,
    'Response' => function() {
        return new Response();
    },
]);


/** @noinspection PhpUnhandledExceptionInspection */
$container = $containerBuilder->build();



$routes = simpleDispatcher(function (RouteCollector $r) {
    $r->get('/', CardIndex::class);
    $r->get('/detail', CardBase::class);
    $r->get('/statistiky', CardStatistic::class);
    $r->addRoute('POST', '/client', CardBase::class);
    // add route by Class
});
$middlewareQueue[] = new FastRoute($routes);

$middlewareQueue[] = new RequestHandler($container);

/** @noinspection PhpUnhandledExceptionInspection */
$requestHandler = new Relay($middlewareQueue);
$response = $requestHandler->handle(ServerRequestFactory::fromGlobals());

$emitter = new SapiEmitter();
/** @noinspection PhpVoidFunctionResultUsedInspection */
return $emitter->emit($response);
