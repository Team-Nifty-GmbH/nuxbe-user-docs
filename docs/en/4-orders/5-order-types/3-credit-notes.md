# Credit Notes

A credit note is a correction document that reduces a customer's outstanding balance. It is always created in reference to an existing order or invoice and contains negative amounts. Credit notes cannot be created as standalone documents -- they are always linked to an original document.

## When Is a Credit Note Needed?

Typical use cases for credit notes:

- **Incorrect invoice** - An invoice was created with the wrong amount or wrong positions.
- **Complaint** - The customer complains about a service or product and receives a partial or full refund.
- **Price reduction** - The customer is retroactively granted a discount.
- **Partial cancellation** - Only part of the original invoice should be cancelled.

> **Note:** A credit note is a purely financial correction. If the customer is returning physical goods, use a [Return](5-returns.md) instead.

## Creating a Credit Note

A credit note is always created from an existing order that already has an invoice number.

### Step 1: Open the Original Document

1. Navigate to **Orders** and open the order for which the credit note should be created.
2. The order must already have an invoice number.

### Step 2: Create the Credit Note

1. Click **Create Credit Note** in the sidebar.

   ![Creating a credit note from the sidebar](../../screenshots/159-credit-note-create.png)

2. Nuxbe automatically creates a new document of the type **Credit Note**.
3. The data from the original document is carried over:
   - Contact and address
   - Positions and prices
   - Payment terms

> **Note:** The link to the original document is established automatically. You do not need to set it manually.

### Step 3: Adjust Positions

After creation, you can adjust the positions of the credit note. This is particularly important for a partial credit note.

- **Full credit note** - All positions and quantities remain as in the original document.
- **Partial credit note** - Remove positions that should not be credited, or reduce quantities.

The amounts in a credit note are always **negative** (with a minus sign). This means: the amount is credited to the customer and reduces their outstanding balance.

![Credit note detail view with negative amounts](../../screenshots/160-credit-note-detail.png)

### Step 4: Save

Click **Save** to store the credit note.

## Approval Workflow

Credit notes go through an approval workflow before they become valid.

1. **Assign approver** - Select the person who should approve the credit note in the **Approver** field.
2. **Review** - The approver reviews the credit note for correctness.
3. **Confirmation** - The approver sets the confirmation checkbox to approve the credit note.

> **Note:** Without approval from the approver, the credit note cannot be finalized. This protects against accidental or unauthorized corrections.

## Link to the Original Document

Every credit note is automatically linked to the original order. You can find this link in two places:

- **In the credit note** - In the right column under **Related Documents**, you can see the original order.
- **In the original order** - The credit note appears under **Related Documents**.

This lets you jump between the two documents at any time.

## Effect on the Balance

When a credit note is created and approved, it has the following effects:

- The **outstanding balance** of the original order is reduced by the credit note amount.
- The credit note is shown as a negative amount in the customer's balance.
- The credit note appears in the document chain of the original order.

> **Note:** The credit note does not modify the original document. Instead, a separate correction document is created that mathematically reduces the outstanding balance.

## Frequently Asked Questions

### Can I create a credit note without an original document?

No. A credit note can only be created from an existing order that already has an invoice number.

### Can I change the amount of a credit note after creation?

Yes, as long as the credit note has not been approved yet. After approval, changes are no longer possible.

### What is the difference between a credit note and a return?

A credit note is a purely financial correction. A [Return](5-returns.md) additionally represents the physical return of goods. In practice, a return is often created first, followed by a credit note.

## Related Topics

- [Returns](5-returns.md) - Customer returns of goods
- [Manage Orders](../1-manage-orders.md) - Order list and filters
- [Order Details](../2-order-detail.md) - General order details
- [Order Positions](../3-order-positions.md) - Edit positions
- [Order Types](../../14-settings/11-order-types.md) - Configure order types
