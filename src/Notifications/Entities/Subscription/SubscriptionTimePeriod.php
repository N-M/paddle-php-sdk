<?php

declare(strict_types=1);

/**
 * |------
 * | ! Generated code !
 * | Altering this code will result in changes being overwritten |
 * |-------------------------------------------------------------|.
 */

namespace Paddle\SDK\Notifications\Entities\Subscription;

use Paddle\SDK\Notifications\Entities\DateTime;

class SubscriptionTimePeriod
{
    public function __construct(
        public \DateTimeInterface $startsAt,
        public \DateTimeInterface $endsAt,
    ) {
    }

    public static function from(array $data): self
    {
        return new self(
            DateTime::from($data['starts_at']),
            DateTime::from($data['ends_at']),
        );
    }
}
