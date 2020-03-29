<?php /** @noinspection PhpUnusedPrivateFieldInspection */

namespace Gusdecool\EnvatoSDK\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static self RELEVANCE()
 * @method static self RATING()
 * @method static self SALES()
 * @method static self PRICE()
 * @method static self DATE()
 * @method static self UPDATED()
 * @method static self CATEGORY()
 * @method static self NAME()
 * @method static self TRENDING()
 * @method static self FEATURED_UNTIL()
 */
final class SortEnum extends Enum
{
    private const RELEVANCE = 'relevance';
    private const RATING = 'rating';
    private const SALES = 'sales';
    private const PRICE = 'price';
    private const DATE = 'date';
    private const UPDATED = 'updated';
    private const CATEGORY = 'category';
    private const NAME = 'name';
    private const TRENDING = 'trending';
    private const FEATURED_UNTIL = 'FEATURED_UNTIL';
}
