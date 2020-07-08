<?php

/** @noinspection PhpUnused */

namespace Gusdecool\EnvatoSDK\Result\Sub;

class StatsAggregation
{
    /**
     * The count of items for this aggregation
     */
    public ?int $count;

    /**
     * The minimum value for this aggregation
     */
    public ?float $min;

    /**
     * The maximum value for this aggregation
     */
    public ?float $max;

    /**
     * The average value for this aggregation
     */
    public ?float $avg;

    /**
     * The total value for this aggregation
     */
    public ?float $sum;
}
