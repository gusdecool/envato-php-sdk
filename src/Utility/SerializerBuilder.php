<?php

namespace Gusdecool\EnvatoSDK\Utility;

use Gusdecool\EnvatoSDK\JmsExtension\TypeHandler;
use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\SerializerInterface;

final class SerializerBuilder
{

    public static function build(): SerializerInterface
    {
        return \JMS\Serializer\SerializerBuilder::create()
            ->configureHandlers(
                function (HandlerRegistry $registry) {
                    $registry->registerSubscribingHandler(new TypeHandler());
                }
            )
            ->build();
    }
}
