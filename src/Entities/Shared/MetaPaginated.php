<?php

declare(strict_types=1);

/**
 * |------
 * | ! Generated code !
 * | Altering this code will result in changes being overwritten |
 * |-------------------------------------------------------------|.
 */

namespace Paddle\SDK\Entities\Shared;

class MetaPaginated
{
    public function __construct(
        public string $requestId,
        public Pagination $pagination,
    ) {
    }
}
