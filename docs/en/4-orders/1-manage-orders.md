# Manage Orders

The order list shows all orders, invoices, quotes and other order types.

## Open the Order List

1. Click **Orders** in the sidebar.

   ![Order list with all order types](../screenshots/08-orders-list.png)

2. The table shows all orders with the following columns:
   - **Order Number** - Unique order number
   - **Order Type** - Type (order, invoice, quote, credit note, etc.)
   - **Contact** - Associated customer or supplier
   - **Invoice Number** - Assigned invoice number
   - **Net Amount / Gross Amount** - Order amounts
   - **Created At** - Creation date

## Filter Orders

- Use the **tabs** above the table to filter by order type (e.g. invoices only, quotes only).
- Use the search field to find orders by number, contact or other criteria.
- Click **Saved Filters** for predefined filter sets.

## Create a New Order

1. Click **New** in the top right corner.
2. Select the **Order Type** (quote, order, invoice, etc.).
3. Select the **Contact**.
4. Fill in the remaining fields.
5. Click **Save**.

## Duplicate an Order

To use an existing order as a template:

1. Open the desired order in the [detail view](2-order-detail.md).
2. Click **Duplicate**.
3. A dialog opens where you can select the **Order Type** for the new order. The original order type is preselected by default.
4. Select the desired order type and confirm.
5. A new order is created with the same header data and positions.
6. Adjust the data as needed and click **Save**.

> **Important:** When duplicating, you can only select order types that belong to the **same tenant** as the original order. Order types from other tenants are not available. If you need an order for a different tenant, create a new order via the **New** button instead and select the desired tenant and order type there.

## Related Topics

- [Order Details](2-order-detail.md) - View a single order in detail
- [Order Positions](3-order-positions.md) - Manage positions
