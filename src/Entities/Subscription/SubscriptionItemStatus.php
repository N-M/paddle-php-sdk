<?php

declare(strict_types=1);

/**
 * |------
 * | ! Generated code !
 * | Altering this code will result in changes being overwritten |
 * |-------------------------------------------------------------|.
 */

namespace Paddle\SDK\Entities\Subscription;

use Paddle\SDK\PaddleEnum;

/**
 * @method static SubscriptionItemStatus Active()
 * @method static SubscriptionItemStatus Inactive()
 * @method static SubscriptionItemStatus Trialing()
 */
class SubscriptionItemStatus extends PaddleEnum
{
    private const Active = 'active';
    private const Inactive = 'inactive';
    private const Trialing = 'trialing';
}
