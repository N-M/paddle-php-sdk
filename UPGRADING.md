# Upgrading

All breaking changes prior to v1 will be documented in this file to assist with upgrading. 

## v0.3.0

This version introduces several breaking changes. 

- Renamed classes to align with naming conventions

`AdjustmentsAdjustmentCollection` => `AdjustmentCollection`
`TotalAdjustments` => `AdjustmentTotals`
`StatusAdjustment` => `AdjustmentStatus`
`StatusTransaction` => `TransactionStatus`
`StatusPaymentAttempt` => `PaymentAttemptStatus`

Any usages of the previous class names should be refactored accordingly to avoid a class not found error.

- Refactored out duplicate entities where both `<Entity>` and `<Entity>WithIncludes` existed

Any typing on the following classes should be updated accordingly: 

`\Paddle\SDK\Entities\CustomerWithIncludes` => `\Paddle\SDK\Entities\Customer`
`\Paddle\SDK\Entities\PriceWithIncludes` => `\Paddle\SDK\Entities\Price`
`\Paddle\SDK\Entities\ProductWithIncludes` => `\Paddle\SDK\Entities\Product`
`\Paddle\SDK\Entities\SubscriptionWithIncludes` => `\Paddle\SDK\Entities\Subscription`
`\Paddle\SDK\Entities\TransactionWithIncludes` => `\Paddle\SDK\Entities\Transaction`
`\Paddle\SDK\Entities\TransactionWithIncludes` => `\Paddle\SDK\Entities\Transaction`
`\Paddle\SDK\Entities\Collections\CustomerIncludesCollection` => `\Paddle\SDK\Entities\Collections\CustomerCollection`
`\Paddle\SDK\Entities\Collections\PriceWithIncludesCollection` => `\Paddle\SDK\Entities\Collections\PriceCollection`
`\Paddle\SDK\Entities\Collections\ProductWithIncludesCollection` => `\Paddle\SDK\Entities\Collections\ProductCollection`
`\Paddle\SDK\Entities\Collections\SubscriptionWithIncludesCollection` => `\Paddle\SDK\Entities\Collections\SubscriptionCollection`
`\Paddle\SDK\Entities\Collections\TransactionWithIncludesCollection` => `\Paddle\SDK\Entities\Collections\TransactionCollection`

- Report entity objects were renamed for better consistency with the SDK and prevent confusion. 

Any typing on the following classes should be updated accordingly: 

`\Paddle\SDK\Entities\Report\ReportFilters` => `\Paddle\SDK\Entities\Report\ReportFilter`
`\Paddle\SDK\Entities\Report\ReportName` => `\Paddle\SDK\Entities\Report\ReportFilterName`
`\Paddle\SDK\Entities\Report\ReportOperator` => `\Paddle\SDK\Entities\Report\ReportFilterOperator`

- Adjustment and Subscription Preview Adjustment objects were refactored for consistency

Any typing of the following classes should be updated accordingly:

`\Paddle\SDK\Entities\Adjustment\AdjustmentItemTotals` => `\Paddle\SDK\Entities\Adjustment\AdjustmentItem`
`\Paddle\SDK\Entities\Adjustment\AdjustmentProration` => `\Paddle\SDK\Entities\Shared\AdjustmentProration`
`\Paddle\SDK\Entities\Adjustment\AdjustmentTimePeriod` => `\Paddle\SDK\Entities\Shared\AdjustmentTimePeriod`
`\Paddle\SDK\Entities\Adjustment\AdjustmentType` => `\Paddle\SDK\Entities\Shared\AdjustmentType`
`\Paddle\SDK\Entities\Subscription\SubscriptionProration` => `\Paddle\SDK\Entities\Shared\AdjustmentProration`
`\Paddle\SDK\Entities\Transaction\TransactionAdjustment` => `Paddle\SDK\Entities\Adjustment`

- Conflicting request object `AdjustmentItem` has moved into the Operations namespace 

The type has changed when creating an Adjustment using the `CreateAdjustment` operation. To create an Adjustment you must now use the `\Paddle\SDK\Resources\Adjustments\Operations\Create\AdjustmentItem` instance for `items`.

- Core entities (classes implementing `Entity`) are marked @internal and constructors are `protected`

Any direct usage of these classes is not supported functionality by the SDK and has been removed to reduce the surface area for breaking changes.

## v0.2.0

This version includes a breaking change to the naming of operations. Prior to this version operations were commonly named `<type>Operation`, e.g. `CreateOperation` which posed problems when using more than one resource such as when creating a product and price. The new naming convention includes the resource to prevent the need of aliasing in these circumstances. e.g. `CreatePrice` and `CreateProduct`. 

To upgrade to `0.2.0` from any earlier version you will need to refactor your use of operations to use the new names. These follow a common pattern that can be seen below:

`Paddle\SDK\Resources\Prices\Operations\CreateOperation` => `Paddle\SDK\Resources\Prices\Operations\CreatePrice` 
`Paddle\SDK\Resources\Prices\Operations\UpdateOperation` => `Paddle\SDK\Resources\Prices\Operations\UpdatePrice` 
`Paddle\SDK\Resources\Prices\Operations\ListOperation` => `Paddle\SDK\Resources\Prices\Operations\ListPrices`

There are also some operations that are unique, these are detailed below:

`Paddle\SDK\Resources\PricingPreviews\Operations\PreviewPricesOperation` => `Paddle\SDK\Resources\PricingPreviews\Operations\PreviewPrice`
`\Paddle\SDK\Resources\Transactions\Operations\PreviewOperation` => `\Paddle\SDK\Resources\Transactions\Operations\PreviewTransaction`
`\Paddle\SDK\Resources\Subscriptions\Operations\CancelOperation` => `\Paddle\SDK\Resources\Subscriptions\Operations\CancelSubscription`
`\Paddle\SDK\Resources\Subscriptions\Operations\CreateOneTimeChargeOperation` => `\Paddle\SDK\Resources\Subscriptions\Operations\CreateOneTimeCharge`
`\Paddle\SDK\Resources\Subscriptions\Operations\PauseOperation` => `\Paddle\SDK\Resources\Subscriptions\Operations\PauseSubscription`
`\Paddle\SDK\Resources\Subscriptions\Operations\PreviewOneTimeChargeOperation` => `\Paddle\SDK\Resources\Subscriptions\Operations\PreviewOneTimeCharge`
`\Paddle\SDK\Resources\Subscriptions\Operations\PreviewUpdateOperation` => `\Paddle\SDK\Resources\Subscriptions\Operations\PreviewUpdateSubscription`
`\Paddle\SDK\Resources\Subscriptions\Operations\ResumeOperation` => `\Paddle\SDK\Resources\Subscriptions\Operations\ResumeSubscription`
