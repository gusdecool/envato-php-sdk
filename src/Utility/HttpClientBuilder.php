<?php

namespace Gusdecool\EnvatoSDK\Utility;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * Utility to create HTTP ClientInterface
 */
final class HttpClientBuilder
{

    /**
     * Create from personal auth token
     *
     * @param string $token Personal auth token.
     * @return ClientInterface
     */
    public static function personal(string $token): ClientInterface
    {
        return new Client(
            [
                'base_uri' => 'https://api.envato.com',
                'timeout' => 5.0,
                'headers' => [
                    'Authorization' => 'Bearer ' . $token
                ]
            ]
        );
    }
}
