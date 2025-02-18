<?php

declare(strict_types=1);

/**
 * |------
 * | ! Generated code !
 * | Altering this code will result in changes being overwritten |
 * |-------------------------------------------------------------|.
 */

namespace Paddle\SDK\Notifications\Entities\Shared;

class TaxRatesUsed
{
    public function __construct(
        public string $taxRate,
        public Totals $totals,
    ) {
    }

    public static function from(array $data): self
    {
        return new self(
            $data['tax_rate'],
            Totals::from($data['totals']),
        );
    }
}
