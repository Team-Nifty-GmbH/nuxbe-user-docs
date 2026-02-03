# Split Orders (Partial Orders)

A split order is a partial order created from an existing parent order. It allows you to divide a larger order into multiple partial deliveries or partial invoices that can be billed independently. The parent order remains as the overarching element and links all splits together.

## When to Use Split Orders

Split orders are useful in the following situations:

- **Partial deliveries** -- A large order is delivered in multiple shipments. A separate split order is created for each delivery with the actually delivered quantities.
- **Partial invoices** -- The customer prefers multiple smaller invoices over a single total invoice.
- **Project milestones** -- A project is billed in phases. A split order is created for each completed phase with the corresponding positions.
- **Progressive billing** -- Services are provided continuously and billed at intervals.

## Creating a Split Order

### Prerequisite

A split order can only be created when the parent order does **not yet have an invoice number**. Once an invoice number has been assigned, the split function is no longer available.

### Step 1: Open the Parent Order

1. Navigate to **Orders** and open the order that should be split.
2. Make sure the order does not yet have an invoice number.

### Step 2: Create the Split Order

1. Click **Create Split Order** in the sidebar.

   ![Creating a split order from the sidebar](../../screenshots/168-split-order-create.png)

2. Nuxbe automatically creates a new document of type **Split Order**.
3. The data from the parent order is carried over:
   - Contact and address
   - Positions and prices
   - Payment terms and texts

### Step 3: Adjust Positions

After creating, adjust the positions for this partial delivery or partial invoice.

- **Reduce quantities** -- Set the quantities to the actually delivered or billable amount.
- **Remove positions** -- Remove positions that are not included in this split.
- **Keep prices** -- Unit prices typically remain unchanged. Only the quantities are adjusted.

> **Note:** You can create any number of split orders from a parent order. Each split contains only the portion that is billed in this partial delivery.

## Understanding the Amount Overview

Split orders include an extended amount overview that shows how the partial amounts add up to the total.

![Amount overview of a split order](../../screenshots/169-split-amount-overview.png)

### Subtotal Net (This Split Order)

The net amount of the currently open split order. This is the amount billed with this partial order.

### Split Orders Net (Remaining Splits)

The sum of net amounts from all other split orders belonging to the same parent order. This value shows how much has already been billed or will be billed through other splits.

### Total Net (Grand Total)

The grand total of all split orders combined. This value should match the original total amount of the parent order when all positions have been fully distributed across the splits.

> **Example:** A parent order of 10,000.00 EUR net is divided into three splits:
> - Split 1: 3,500.00 EUR (Delivery Phase 1)
> - Split 2: 4,000.00 EUR (Delivery Phase 2)
> - Split 3: 2,500.00 EUR (Delivery Phase 3)
>
> When you open Split 2, you see:
> - Subtotal net: 4,000.00 EUR
> - Split orders net: 6,000.00 EUR (Split 1 + Split 3)
> - Total net: 10,000.00 EUR

## Final Invoice

Once all split orders have received an invoice number, a **Final Invoice** can be created from the parent order.

![Creating a final invoice](../../screenshots/170-final-invoice.png)

### What Is the Final Invoice?

The final invoice is a summary document that references all partial invoices. It serves as the closing document for the entire order and contains:

- A reference to all partial invoices (split orders)
- The grand total of all partial invoices
- Any corrections or adjustments

### Prerequisite for the Final Invoice

The final invoice can only be created when **all** split orders have an invoice number. As long as any split order exists without an invoice number, the function is not available.

## Practical Example: Office Equipment in Three Deliveries

A customer orders office equipment totaling 15,000.00 EUR. Delivery takes place in three parts:

**Parent Order:** Complete office equipment -- 15,000.00 EUR

**Split 1 -- Desks (Delivery in Week 1):**
- 10 desks at 450.00 EUR each = 4,500.00 EUR
- Invoice number assigned after delivery

**Split 2 -- Chairs and Accessories (Delivery in Week 3):**
- 10 office chairs at 380.00 EUR each = 3,800.00 EUR
- 10 monitor arms at 89.00 EUR each = 890.00 EUR
- Total: 4,690.00 EUR

**Split 3 -- Remaining Equipment (Delivery in Week 5):**
- 5 filing cabinets at 620.00 EUR each = 3,100.00 EUR
- 10 desk lamps at 271.00 EUR each = 2,710.00 EUR
- Total: 5,810.00 EUR

After all three splits have received an invoice number, the final invoice for 15,000.00 EUR is created.

## Frequently Asked Questions

### Can I add more split orders later?

Yes, as long as the parent order does not yet have an invoice number. You can create additional splits at any time.

### What happens if the split totals do not match the parent order?

Nuxbe does not enforce an exact match. The amount overview shows you the current distribution so you can identify and correct any discrepancies.

### Can I delete a split order?

Yes, as long as the split order does not yet have an invoice number.

## Related Topics

- [Manage Orders](../1-manage-orders.md) -- Order list and filters
- [Order Details](../2-order-detail.md) -- General order details
- [Order Positions](../3-order-positions.md) -- Edit positions
- [Order Types](../../14-settings/11-order-types.md) -- Configure order types
