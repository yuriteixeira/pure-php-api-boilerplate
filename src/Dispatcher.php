<?php 

namespace PurePhpApi;

class Dispatcher 
{
    private $container;

    public function __construct(DependencyInjectionContainer $container)
    {
        $this->container = $container;
    }

    public function dispatch($uri, $method)
    {
        $map = [
            'GET /' => 'ping',
            'GET /ping' => 'ping',
        ];

        $route = "$method $uri";
        $match = $service = isset($map[$route]) ? $map[$route] : null;
        if (!$match) throw new Exception\NoMatchingRoute();

        $command = $this->container->get($service);
        return $command;
    }
}
