<?php

declare(strict_types=1);

/**
 * |------
 * | ! Generated code !
 * | Altering this code will result in changes being overwritten |
 * |-------------------------------------------------------------|.
 */

namespace Paddle\SDK\Entities\Shared;

use Paddle\SDK\PaddleEnum;

/**
 * @method static AdjustmentType Full()
 * @method static AdjustmentType Partial()
 * @method static AdjustmentType Tax()
 * @method static AdjustmentType Proration()
 */
class AdjustmentType extends PaddleEnum
{
    private const Full = 'full';
    private const Partial = 'partial';
    private const Tax = 'tax';
    private const Proration = 'proration';
}
