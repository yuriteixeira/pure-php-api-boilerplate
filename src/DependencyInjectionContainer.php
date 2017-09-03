<?php

namespace PurePhpApi;

class DependencyInjectionContainer
{
    private $definitions = [];
    private $instances = [];

    public function __construct($server, $get, $post, $cookie, $session, $config)
    {
        $this->definitions['ping'] = function() {
            return new Command\Ping();
        };
    }

    public function get($id)
    {
        if (!isset($this->definitions[$id])) {
            throw new Exception\DependencyNotFound();
        }

        if (!array_key_exists($id, $this->instances)) {
            $this->instances[$id] = $this->definitions[$id]();
        }

        return $this->instances[$id];
    }
}
