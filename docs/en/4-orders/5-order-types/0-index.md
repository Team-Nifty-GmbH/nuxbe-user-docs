# Order Types

Nuxbe supports several order types, each with specific features and behavior. All order types share common functionality such as positions, texts, states, and discounts, which are documented in the parent chapter [Orders](../0-index.md).

The following pages describe what makes each order type unique and how to use them in your daily workflow.

## Order Types Overview

| Order Type | Description | Page |
|---|---|---|
| **Quote** | Non-binding offer to a customer; can be converted into an order | [Quotes](1-quotes.md) |
| **Order** | Confirmed customer order; central element for delivery, invoicing, and follow-up documents | [Orders](2-orders.md) |
| **Credit Note** | Correction document for an existing invoice, e.g. for complaints or partial refunds | [Credit Notes](3-credit-notes.md) |
| **Subscription** | Recurring order with automatic document creation at configurable intervals | [Subscriptions](4-subscriptions.md) |
| **Return** | Customer return of goods; created from an existing order | [Returns](5-returns.md) |
| **Purchase** | Order placed with a supplier | [Purchases](6-purchases.md) |
| **Purchase Subscription** | Recurring purchase from a supplier with automatic document creation | [Purchase Subscriptions](7-purchase-subscriptions.md) |
| **Split Order** | Partial order created from an existing order (e.g. partial delivery) | [Split Orders](8-split-orders.md) |

## Sales and Purchases

Each order type has a **multiplier** that determines whether amounts are recorded as positive (revenue) or negative (expense/credit).

| Type | Order Types | Multiplier | Meaning |
|---|---|---|---|
| **Sales** | Quote, Order, Subscription, Split Order | +1 | Revenue -- amounts count as positive income |
| **Credit / Return** | Credit Note, Return | -1 | Correction -- amounts count as negative income |
| **Purchase** | Purchase, Purchase Subscription | -1 | Expense -- amounts count as costs |

> **Note:** The multiplier is configured per order type in [Settings > Order Types](../../14-settings/11-order-types.md) and affects balance calculations and statistics.

## Shared Features

All order types share the following features, documented in the parent pages of this chapter:

- **Positions** -- Products and services as line items in the order ([Order Positions](../3-order-positions.md))
- **Texts** -- Header and footer texts on documents ([Order Details](../2-order-detail.md))
- **States** -- Order state, payment state, and delivery state ([Order Details](../2-order-detail.md))
- **Discounts** -- Order-level discounts as percentage or fixed amount ([Order Details](../2-order-detail.md))
- **Print Layouts** -- PDF generation (Invoice, Quote, Order Confirmation, Delivery Note)
- **Document Chain** -- Links between related orders

## Related Topics

- [Manage Orders](../1-manage-orders.md) -- Order list, search, and filters
- [Order Details](../2-order-detail.md) -- General detail view
- [Settings > Order Types](../../14-settings/11-order-types.md) -- Configure order types and number ranges
