<?php

declare(strict_types=1);

/**
 * |------
 * | ! Generated code !
 * | Altering this code will result in changes being overwritten |
 * |-------------------------------------------------------------|.
 */

namespace Paddle\SDK\Entities\Discount;

use Paddle\SDK\PaddleEnum;

/**
 * @method static DiscountStatus Active()
 * @method static DiscountStatus Archived()
 * @method static DiscountStatus Expired()
 * @method static DiscountStatus Used()
 */
class DiscountStatus extends PaddleEnum
{
    private const Active = 'active';
    private const Archived = 'archived';
    private const Expired = 'expired';
    private const Used = 'used';
}
