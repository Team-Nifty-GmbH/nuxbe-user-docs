# Order Types

Manage the different order types such as quotes, orders, invoices and credit notes. Each type has its own number ranges, print templates and workflow settings.

## Open Order Types

1. Navigate to **Settings > Orders > Order Types**.

   ![Order types list](../screenshots/93-settings-order-types.png)

2. The table shows all order types with the following columns:
   - **Name** - Order type name
   - **Description** - Purpose of the order type
   - **Order Category** - Category grouping (e.g. Order, Credit Note, Purchase)
   - **Print Templates** - Assigned print templates
   - **ID** - Internal identifier

## Create an Order Type

1. Click **New**.
2. Enter a name, description and select the order category.
3. Configure number ranges and assign print templates.
4. Click **Save**.

## Edit or Delete

- Click **Edit** to modify an existing order type.
- Click **Delete** to remove an order type.

## Tenant Assignment

Each order type is assigned to a specific tenant. This has the following implications:

- When **creating** a new order, only order types belonging to the selected tenant are available.
- When **duplicating** an order, only order types from the same tenant as the original order can be selected.
- The order type's tenant assignment cannot be changed after creation.

> **Note:** If you cannot select a particular order type when duplicating an order, check under **Settings > Orders > Order Types** whether the desired order type is assigned to the correct tenant.

## Related Topics

- [Orders](../4-orders/0-index.md) - Manage orders
- [Settings](0-index.md) - Back to the settings overview
