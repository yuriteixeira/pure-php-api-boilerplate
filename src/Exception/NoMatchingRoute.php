<?php

namespace PurePhpApi\Exception;

class NoMatchingRoute extends \Exception
{
    protected $code = 404;
}
