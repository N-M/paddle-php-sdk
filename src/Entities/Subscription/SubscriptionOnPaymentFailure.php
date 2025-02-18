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
 * @method static SubscriptionOnPaymentFailure PreventChange()
 * @method static SubscriptionOnPaymentFailure ApplyChange()
 */
class SubscriptionOnPaymentFailure extends PaddleEnum
{
    private const PreventChange = 'prevent_change';
    private const ApplyChange = 'apply_change';
}
