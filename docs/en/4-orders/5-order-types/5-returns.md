# Returns

A return represents the physical return of goods by the customer. It is always created in reference to an existing order or invoice and contains negative amounts. Like credit notes, returns cannot be created as standalone documents -- they are always linked to an original document.

## Difference from Credit Notes

Returns and [Credit Notes](3-credit-notes.md) are both correction documents with negative amounts. The difference lies in their purpose:

| | Return | Credit Note |
|---|---|---|
| **Purpose** | Physical return of goods | Financial correction |
| **Goods flow** | Goods come back to warehouse | No goods movement |
| **Typical reason** | Customer sends goods back | Incorrect invoice, price reduction |

> **Note:** In practice, a return is often created first (goods come back), followed by a [Credit Note](3-credit-notes.md) (financial correction).

## When Is a Return Needed?

Typical use cases for returns:

- **Wrong delivery** - The customer received the wrong product and sends it back.
- **Defective goods** - The delivered product is damaged or does not work.
- **Withdrawal** - The customer exercises their right of withdrawal.
- **Partial return** - The customer sends back only part of the ordered goods.

## Creating a Return

A return is always created from an existing order that already has an invoice number.

### Step 1: Open the Original Document

1. Navigate to **Orders** and open the order for which the return should be created.
2. The order must already have an invoice number.

### Step 2: Create the Return

1. Click **Create Return** in the sidebar.

   ![Creating a return from the sidebar](../../screenshots/161-return-create.png)

2. Nuxbe automatically creates a new document of the type **Return**.
3. The data from the original document is carried over:
   - Contact and address
   - Positions and prices
   - Payment terms

> **Note:** The link to the original document is established automatically. You do not need to set it manually.

### Step 3: Adjust Positions and Quantities

After creation, adjust the positions of the return to match the goods actually being returned.

- **Full return** - All positions and quantities remain as in the original document.
- **Partial return** - Reduce quantities to the actual number of items being returned. Example: The customer ordered 5 units but is returning only 2. Set the quantity to 2.

The amounts in a return are always **negative** (with a minus sign).

![Return detail view with adjusted quantities](../../screenshots/162-return-detail.png)

### Step 4: Save

Click **Save** to store the return.

## Approval Workflow

Returns go through an approval workflow before they become valid.

1. **Assign approver** - Select the person who should review and approve the return in the **Approver** field.
2. **Review** - The approver reviews the return for correctness. Ideally, this happens after the returned goods have been received.
3. **Confirmation** - The approver sets the confirmation checkbox to approve the return.

> **Note:** Approval should only be given after the goods have actually been received and inspected.

## Link to the Original Document

Every return is automatically linked to the original order. You can find this link in two places:

- **In the return** - In the right column under **Related Documents**, you can see the original order.
- **In the original order** - The return appears under **Related Documents**.

## Typical Return Workflow

A complete return process typically looks like this:

1. **Customer reports a return** - The customer communicates that they wish to return goods.
2. **Create the return** - You create the return from the original order and adjust the quantities.
3. **Wait for goods receipt** - The returned goods arrive.
4. **Inspect goods** - The goods are checked for completeness and condition.
5. **Approve the return** - The approver confirms the return after successful inspection.
6. **Create a credit note** - If needed, you then create a [Credit Note](3-credit-notes.md) for the financial correction.

> **Note:** Not every return automatically leads to a credit note. A product exchange may take place without the customer receiving a refund.

## Frequently Asked Questions

### Can I create a return without an original document?

No. A return can only be created from an existing order that already has an invoice number.

### What happens after the return is approved?

After approval, the return is finalized. If the customer should receive a financial refund, create a [Credit Note](3-credit-notes.md) from the original order as the next step.

### Can I change the quantities of a return after creation?

Yes, as long as the return has not been approved yet. After approval, changes are no longer possible.

### What is the difference between a return and a credit note?

A return represents the physical return of goods. A [Credit Note](3-credit-notes.md) is a purely financial correction. They are often used together: the return for the goods flow, the credit note for the refund.

## Related Topics

- [Credit Notes](3-credit-notes.md) - Financial corrections
- [Manage Orders](../1-manage-orders.md) - Order list and filters
- [Order Details](../2-order-detail.md) - General order details
- [Order Positions](../3-order-positions.md) - Edit positions
- [Order Types](../../14-settings/11-order-types.md) - Configure order types
