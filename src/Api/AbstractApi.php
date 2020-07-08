<?php

namespace Gusdecool\EnvatoSDK\Api;

use Gusdecool\EnvatoSDK\Utility\SerializerBuilder;
use GuzzleHttp\ClientInterface;
use JMS\Serializer\SerializerInterface;

abstract class AbstractApi
{

    private SerializerInterface $serializer;
    private ClientInterface $client;

    public function __construct(ClientInterface $client)
    {
        $this->serializer = SerializerBuilder::build();
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

    /**
     * Serialize a data into array
     *
     * @param mixed $instance
     * @return array
     */
    final protected function toArray($instance): array
    {
        return $this->serializer->toArray($instance);
    }

    /**
     * Serialize a data into JSON string
     *
     * @param mixed $instance any instance class that can be serialized
     * @return string
     */
    final protected function serialize($instance): string
    {
        return $this->serializer->serialize($instance, 'json');
    }

    /**
     * Deserialize a data
     *
     * @param string $data JSON string
     * @param string $type data type
     * @return mixed
     */
    final protected function deserialize(string $data, string $type)
    {
        return $this->serializer->deserialize($data, $type, 'json');
    }
}
