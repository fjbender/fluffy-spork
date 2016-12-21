<?php

namespace TestPlugin;

use GuzzleHttp\Psr7\ServerRequest;
use Monolog\Logger;

require_once 'vendor/autoload.php';

class TestPlugin
{
    /** @var Logger */
    protected $logger;

    public function __construct()
    {
        $this->logger = new Logger('TestPluginLogger');
    }

    /**
     * @param ServerRequest $someParameter
     * @return array
     */
    public function doSomething(ServerRequest $someParameter)
    {
        $this->logger->log('something', 'something else');
	// let's just return some stuff
        return $someParameter->getHeader('X-Forwarded-For');
    }
}
