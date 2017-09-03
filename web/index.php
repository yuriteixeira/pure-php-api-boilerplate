<?php

require __DIR__ . '/../autoloader.php';

use PurePhpApi\Exception;
use PurePhpApi\Dispatcher;
use PurePhpApi\DependencyInjectionContainer;

try {

    $config = include __DIR__ . '/../config.php' ?: [];
    $container = new DependencyInjectionContainer($_SERVER, $_GET, $_POST, $_COOKIE, $_SESSION, $config);
    $dispatcher = new Dispatcher($container);
    $command = $dispatcher->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
    $response = $command->execute();

} catch (Exception\NoMatchingRoute $e) {

    $statusMsg = $e->getMessage() ?: 'WAT?';
    $statusCode = $e->getCode();

} catch (\Exception $e) {

    $statusMsg = $e->getMessage() ?: 'No soup for you!';
    $statusCode = $e->getCode() ?: 500;

} finally {

    header("HTTP/1.1 $statusCode $statusMsg");
    header('Content-Type: application/json');
    echo json_encode($response);
}
