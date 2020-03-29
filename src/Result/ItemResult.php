<?php

namespace Gusdecool\EnvatoSDK\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * @see https://build.envato.com/api#search_GET_search_item_json
 *
 * @Serializer\ExclusionPolicy("all")
 *
 * TODO complete the possible attributes
 */
final class ItemResult
{

    /**
     * item id
     *
     * @var int
     *
     * @Serializer\Expose()
     * @Serializer\Type("int")
     * @Serializer\Groups({"default"})
     */
    private int $id;

    /**
     * item name
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     * @Serializer\Groups({"default"})
     */
    private string $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
