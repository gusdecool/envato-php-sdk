<?php

/** @noinspection PhpUnused */

namespace Gusdecool\EnvatoSDK\JmsExtension;

use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;

/**
 * JMS Serializer extension to handle Envato data type.
 */
final class TypeHandler implements SubscribingHandlerInterface
{

    /**
     * @return array
     */
    public static function getSubscribingMethods()
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => 'EnvatoAttribute',
                'method' => 'deserializeAttribute',
            ],
        ];
    }

    /** @noinspection PhpUnusedParameterInspection */
    public function deserializeAttribute(
        JsonDeserializationVisitor $visitor,
        $data,
        array $type,
        Context $context
    ) {
        return $data;
    }
}
