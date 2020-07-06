<?php

namespace Gusdecool\EnvatoSDK\Api;

use GuzzleHttp\ClientInterface;

abstract class AbstractApi
{

    private ClientInterface $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Get HTTP client
     *
     * @return ClientInterface
     */
    final protected function getClient(): ClientInterface
    {
        return $this->client;
    }
}
