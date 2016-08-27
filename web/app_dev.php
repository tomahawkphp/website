<?php

use Tomahawk\HttpCore\Request;
use Symfony\Component\Debug\Debug;

/*
 * TomahawkPHP front controller.
 * Dev environment.
 */
if (!in_array(@$_SERVER['REMOTE_ADDR'], array(
    '10.0.2.2',
))) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}


/**
 * @var Composer\Autoload\ClassLoader $loader
 */

$loader = require_once __DIR__ . '/../app/autoload.php';
require_once __DIR__.'/../app/AppKernel.php';

Debug::enable();

$kernel = new AppKernel('dev', true);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
