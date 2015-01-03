<?php

use Symfony\Component\HttpFoundation\Request;

error_reporting(-1);
ini_set('display_errors', 'Off');
define('TOMAHAWKPHP_START', time());

require_once __DIR__ . '/../app/autoload.php';
require_once __DIR__.'/../app/AppKernel.php';

$kernel = new AppKernel('prod', false);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);