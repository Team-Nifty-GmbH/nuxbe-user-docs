# Collective Orders

A collective order is used to combine several existing orders from the same customer into a single order. This is the typical basis for a collective invoice. Instead of issuing a separate invoice for each order, you conveniently bundle all open items (e.g., at the end of the month) into a single document.

## When should I use a collective order?

- Your customer orders regularly and only wants to receive a single, bundled invoice at the end of the month.
- You have delivered several open orders and now want to invoice them together to reduce administrative effort.

## Prerequisites

For orders to be combined into a collective order, they must meet certain criteria. The system only allows orders that:
- have the status of a regular **Order**,
- do not yet have an **invoice number** (meaning they have not yet been invoiced),
- have **no sub-orders** (children),
- have a **net value greater than 0**.

## Creating a collective order

The collective order is generated directly from the order list:

### Step 1: Select orders
1. Navigate to **Orders** in the list view.
2. Using the checkboxes on the left side, select at least **two orders** that you want to combine.
3. Once you have selected multiple orders, the **Create Collective Order** button will appear in the action menu.

### Step 2: Trigger generation
1. Click on **Create Collective Order**.
2. A dialog box opens. The system automatically groups all selected orders based on their **Invoice Address**. (If you accidentally selected orders from different customers, the system automatically creates a separate collective order for each invoice address).
3. Before creating the collective order, you must select both the collective order type and the split order type.
4. Confirm the creation.

## What happens in the background?

As soon as the collective order is generated, Nuxbe automatically performs the following steps to keep your accounting and document chain clean:

1. **Structure positions:** All positions of the original orders are copied into the collective order. The system automatically creates a text position as a heading for each original order (e.g., *"Order ORD-12345"*). All corresponding items are grouped under this heading.
2. **Combine discounts:** Any header-level discounts from the original orders are recalculated and applied to the individual positions in the collective order to ensure the final price is exactly right.
3. **Lock original orders:** The original orders are **locked** (`is_locked`) and cannot be modified afterwards.
4. **Link document chain:** The original orders automatically become "Split Orders" (sub-orders) of the new collective order. Their open balance is set to 0, since the payment claim has now been transferred to the collective order.

## Detail view and invoicing

When you open the newly created collective order, you will see the neat grouping by original orders in the **Positions** tab.

In the right column (under **Linked Documents** / Document Chain), you will see all the individual orders that have been incorporated into this collective order.

**Sending a collective invoice:**
To complete the process, click on **Create Documents** in the right column, choose the **Invoice** layout, and send the generated PDF to your customer. The incoming payment will then be booked directly to this collective order.

## Related Topics

- [Manage Orders](../1-manage-orders.md) -- Filter and select orders in the list
- [Order Details](../2-order-detail.md) -- General detail view
- [Settings > Order Types](../../14-settings/11-order-types.md) -- Configure number ranges and settings
