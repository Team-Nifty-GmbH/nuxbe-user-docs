# Orders

The order is the central element of order management in Nuxbe. It represents a confirmed customer order and forms the basis for delivery, invoicing, and all subsequent follow-up documents. From an order, you can create invoices, credit notes, returns, and split orders.

## When to Use an Order

- A customer has accepted a quote and you want to record the purchase as binding.
- You want to create an order directly without a prior quote.
- You need a document as the basis for invoicing and delivery.

## Creating an Order

### From a Quote

If a quote already exists, convert it into an order:

1. Open the quote in the detail view.
2. Click **Replicate**.
3. Select **Order** as the new order type.
4. Review the carried-over data.
5. Click **Save**.

All positions, prices, and contact data are carried over automatically. The new order is linked to the quote in the document chain.

### Creating Directly

1. Navigate to **Orders**.
2. Click **New**.
3. Select **Order** as the **Order Type**.
4. Select the **Contact** (customer).
5. Fill in the header data.
6. Click **Save**.
7. Add positions and save again.

## Detail View

The detail view of an order is the most comprehensive of all order types. It provides access to all features that Nuxbe offers for order management.

![Detail view of an order](../../screenshots/155-order-detail.png)

### Left Column (Sidebar)

The left column contains:

- **Contact** -- The linked customer with a direct link to the contact record
- **Billing Address** -- Address for invoicing
- **Delivery Address** -- Address for delivery (can differ)
- **Additional Addresses** -- Extra addresses (collapsible)
- **Order Information** -- Extended fields (collapsible):
  - Tenant
  - Commission Agent
  - Responsible User
  - Assigned Users
  - Price List
  - Tax Exemption
  - Payment Method
  - Bank Connection (if available)
  - Lead
  - Language
- **States** -- Three separate state dropdowns (see [State Management](#state-management))

### Center Area

The center area contains the main content as tabs:

- **Positions** -- Products and services
- **Attachments** -- Uploaded files
- **Texts** -- Header and footer texts for documents
- **Accounting** -- Booking-related information
- **Comments** -- Internal notes
- **Communications** -- Email correspondence for the order
- **Related Documents** -- Document chain (quotes, invoices, credit notes, etc.)
- **Activities** -- Change log

### Right Column

The right column displays:

- **Action Buttons** -- Create documents, preview, signature link
- **Amount Summary** -- Detailed breakdown of all amounts (see [Amount Summary](#amount-summary))
- **Date Fields** -- Invoice date, performance period, order date, etc. (see [Date Fields](#date-fields))
- **Metadata** -- Created at/by, Updated at/by

## State Management

An order has three independent states. They are displayed as dropdown fields in the left column.

![State management of an order](../../screenshots/158-order-states.png)

### Order State

The order state reflects the general processing status. Typical values include "Open", "In Progress", or "Completed".

### Payment State

The payment state shows the payment status. Typical values include "Open", "Partially Paid", or "Paid".

### Delivery State

The delivery state shows the shipping status. Typical values include "Open", "Partially Delivered", or "Delivered".

> **Note:** The available state values and transitions can be configured in the settings. Not all transitions are possible at all times -- Nuxbe only shows the valid follow-up states.

## Locking an Order

An order can be locked to prevent accidental changes. Locking is typically performed automatically by the system, e.g. when an invoice has been generated. You can also toggle the lock status manually.

![Locking an order](../../screenshots/156-order-lock.png)

### How to Lock or Unlock an Order

1. Click the **lock icon** next to the order number.
2. Nuxbe displays a warning: "Manually locking or unlocking orders can have unexpected side effects."
3. Confirm with **Continue**.

### What Happens When an Order Is Locked?

- Most fields in the detail view are disabled and no longer editable.
- Contact, addresses, price list, and tax exemption can no longer be changed.
- Positions can no longer be added, modified, or removed.
- Limited changes are still possible (e.g. states, comments, certain date fields).
- The **Delete** button is hidden.

> **Note:** Manually unlocking a locked order can cause inconsistencies, e.g. if invoices have already been created. Only use this feature when you are certain about the consequences.

## Creating Follow-Up Documents

From an order, you can create various follow-up documents. The options are available via the **Replicate** button in the top bar.

![Creating follow-up documents from an order](../../screenshots/157-order-follow-ups.png)

### Creating an Invoice

1. Click **Replicate**.
2. Select **Invoice** (or the corresponding invoice order type) as the order type.
3. Review and save the new document.

The invoice carries over all positions and header data from the order. The order is typically locked automatically.

### Creating a Credit Note

1. Click **Replicate**.
2. Select **Credit Note** as the order type.
3. Adjust the positions (e.g. only the items being credited).
4. Save the credit note.

See [Credit Notes](3-credit-notes.md) for more details.

### Creating a Return

1. Click **Replicate**.
2. Select **Return** as the order type.
3. Adjust the positions (e.g. only the items being returned).
4. Save the return.

See [Returns](5-returns.md) for more details.

### Creating a Split Order

Split orders are partial orders that are assigned as child orders to the main order. They are useful for partial deliveries.

1. Click **Replicate**.
2. Select **Split Order** as the order type.
3. Adjust the positions.
4. Save the split order.

See [Split Orders](8-split-orders.md) for more details.

### Creating a Final Invoice

A final invoice is a special document that consolidates all previously created partial or split invoices. This option is only available when at least one split order with its own invoice number exists.

1. Open the parent order.
2. The **Final Invoice** option appears when split orders with invoice numbers exist.
3. The final invoice accounts for all previously billed partial amounts.

## Discount Management

Orders support order-level discounts that are applied to the total amount.

### Adding a Discount

1. Click **Add discount** in the right column (amount summary).
2. Enter a **Name** for the discount (e.g. "Loyalty discount").
3. Enter the **Discount value**.
4. Use the **Is Percentage** toggle to choose between a percentage or a fixed amount.
5. Click **Save**.

### Sorting Discounts

When multiple discounts exist, you can change their order via drag-and-drop. The order affects the calculation: discounts are applied sequentially.

### Removing a Discount

Click the red **X** next to the respective discount to delete it.

> **Note:** Order-level discounts are independent of position-level discounts. Position discounts are applied per line item, while order discounts are applied to the total.

## Amount Summary

The right column shows a detailed breakdown of all amounts:

| Field | Description |
|---|---|
| **Sum net without discount** | Total of all positions before any discounts |
| **Position discounts** | Sum of all position-level discounts (percentage and amount) |
| **Sum net discounted** | Net amount after deducting position discounts |
| **Order discounts** | Individually listed order-level discounts |
| **Total discount** | Sum of all discounts (position + order) |
| **Subtotal net** | Net amount of the main order (without split orders) |
| **Split Orders net** | Net amount of child split orders |
| **Sum net** | Total net amount (main order + split orders) |
| **VAT** | Breakdown of VAT amounts by tax rate |
| **Total Gross** | Total amount including VAT |
| **Balance** | Open remaining amount (gross minus payments) |
| **Balance Due Discount** | Open amount when paying within the early payment discount period |
| **Margin** | Difference between selling price and purchase price |
| **Gross Profit** | Profit after deducting direct costs |

> **Note:** The "Margin" and "Gross Profit" fields are only visible if you have the appropriate permissions.

## Date Fields

The right column contains the following date fields:

| Field | Description |
|---|---|
| **Invoice Date** | Automatically set when an invoice number is assigned. Not manually editable. |
| **Performance/Delivery date** | Start of the performance period |
| **Performance/Delivery date end** | End of the performance period |
| **Order Date** | Date of the customer order |
| **Commission** | Free text field for an internal reference |
| **Payment Reminder Next Date** | Date for the next payment reminder |

## Available Print Layouts

The following print layouts are available for orders:

- **Invoice** -- Standard invoice document
- **Final Invoice** -- Consolidated invoice across all split orders
- **Quote** -- Quote document
- **Order Confirmation** -- Order confirmation document
- **Delivery Note** -- Delivery note for shipping

## Typical Workflow

### Standard Workflow

1. **Create order** -- Directly or from a quote.
2. **Add positions** -- Add products and services.
3. **Set order state** -- e.g. to "In Progress".
4. **Prepare delivery** -- Create delivery note and update delivery state.
5. **Create invoice** -- Generate invoice PDF and send it.
6. **Record payment** -- Update payment state when payment is received.

### Workflow with Partial Deliveries

1. **Create order**.
2. **Create split order** for the first partial delivery.
3. **Create invoice** for the split order.
4. Create additional split orders for further partial deliveries.
5. **Create final invoice** when all deliveries are completed.

## Related Topics

- [Quotes](1-quotes.md) -- The precursor to an order
- [Credit Notes](3-credit-notes.md) -- Correction documents
- [Returns](5-returns.md) -- Customer returns
- [Split Orders](8-split-orders.md) -- Partial orders
- [Order Details](../2-order-detail.md) -- General detail view
- [Order Positions](../3-order-positions.md) -- Edit positions
- [Manage Orders](../1-manage-orders.md) -- Order list and filters
- [Configure Order Types](../../14-settings/11-order-types.md) -- Number ranges and settings
