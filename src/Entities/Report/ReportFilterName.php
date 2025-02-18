<?php

declare(strict_types=1);

/**
 * |------
 * | ! Generated code !
 * | Altering this code will result in changes being overwritten |
 * |-------------------------------------------------------------|.
 */

namespace Paddle\SDK\Entities\Report;

use Paddle\SDK\PaddleEnum;

/**
 * @method static ReportFilterName Action()
 * @method static ReportFilterName CollectionMode()
 * @method static ReportFilterName CurrencyCode()
 * @method static ReportFilterName Origin()
 * @method static ReportFilterName Status()
 * @method static ReportFilterName UpdatedAt()
 */
class ReportFilterName extends PaddleEnum
{
    private const Action = 'action';
    private const CollectionMode = 'collection_mode';
    private const CurrencyCode = 'currency_code';
    private const Origin = 'origin';
    private const Status = 'status';
    private const UpdatedAt = 'updated_at';
}
