<?php

declare(strict_types=1);

/**
 * |------
 * | ! Generated code !
 * | Altering this code will result in changes being overwritten |
 * |-------------------------------------------------------------|.
 */

namespace Paddle\SDK\Notifications\Entities;

use Paddle\SDK\Notifications\Entities\Shared\CatalogType;
use Paddle\SDK\Notifications\Entities\Shared\CustomData;
use Paddle\SDK\Notifications\Entities\Shared\ImportMeta;
use Paddle\SDK\Notifications\Entities\Shared\Status;
use Paddle\SDK\Notifications\Entities\Shared\TaxCategory;

class Product implements Entity
{
    /**
     * @internal
     */
    protected function __construct(
        public string $id,
        public string|null $name,
        public string|null $description,
        public CatalogType|null $type,
        public TaxCategory $taxCategory,
        public string|null $imageUrl,
        public CustomData|null $customData,
        public Status $status,
        public \DateTimeInterface|null $createdAt,
        public ImportMeta|null $importMeta,
    ) {
    }

    public static function from(array $data): self
    {
        return new self(
            id: $data['id'],
            name: $data['name'] ?? null,
            description: $data['description'] ?? null,
            type: isset($data['type']) ? CatalogType::from($data['type']) : null,
            taxCategory: TaxCategory::from($data['tax_category']),
            imageUrl: $data['image_url'] ?? null,
            customData: isset($data['custom_data']) ? new CustomData($data['custom_data']) : null,
            status: Status::from($data['status']),
            createdAt: isset($data['created_at']) ? DateTime::from($data['created_at']) : null,
            importMeta: isset($data['import_meta']) ? ImportMeta::from($data['import_meta']) : null,
        );
    }
}
