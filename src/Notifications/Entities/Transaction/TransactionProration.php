<?php

declare(strict_types=1);

/**
 * |------
 * | ! Generated code !
 * | Altering this code will result in changes being overwritten |
 * |-------------------------------------------------------------|.
 */

namespace Paddle\SDK\Notifications\Entities\Transaction;

class TransactionProration
{
    public function __construct(
        public string $rate,
        public TransactionTimePeriod|null $billingPeriod,
    ) {
    }

    public static function from(array $data): self
    {
        return new self(
            $data['rate'],
            isset($data['billing_period']) ? TransactionTimePeriod::from($data['billing_period']) : null,
        );
    }
}
