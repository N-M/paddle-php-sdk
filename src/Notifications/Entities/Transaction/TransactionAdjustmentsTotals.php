<?php

declare(strict_types=1);

/**
 * |------
 * | ! Generated code !
 * | Altering this code will result in changes being overwritten |
 * |-------------------------------------------------------------|.
 */

namespace Paddle\SDK\Notifications\Entities\Transaction;

use Paddle\SDK\Notifications\Entities\Shared\CurrencyCode;

class TransactionAdjustmentsTotals
{
    public function __construct(
        public string $subtotal,
        public string $tax,
        public string $total,
        public string $fee,
        public string $earnings,
        public TransactionBreakdown $breakdown,
        public CurrencyCode $currencyCode,
    ) {
    }

    public static function from(array $data): self
    {
        return new self(
            $data['subtotal'],
            $data['tax'],
            $data['total'],
            $data['fee'],
            $data['earnings'],
            TransactionBreakdown::from($data['breakdown']),
            CurrencyCode::from($data['currency_code']),
        );
    }
}
