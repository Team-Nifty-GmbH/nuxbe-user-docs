# Purchases (Supplier Orders)

A purchase order represents an order placed with a supplier. Unlike most other order types, you are viewing the supplier side rather than the customer side. You order goods or services and record the supplier's incoming invoice. Amounts in purchase orders are treated as costs (negative multiplier).

## Change of Perspective: Purchase vs. Sales

In a sales order, you are the supplier and your customer is the recipient. In a purchase, the perspective is reversed:

- **You** are the buyer.
- **Your supplier** issues the invoice.
- Amounts are **expenses**, not revenue.
- There is no margin or profit calculation in the summary.

## Creating a Purchase Order

### Step 1: Create a New Order

1. Navigate to **Orders**.
2. Click **New**.
3. Select **Purchase** as the **Order Type**.

   ![Creating a purchase order](../../screenshots/163-purchase-create.png)

4. Select the **Contact** (supplier).
5. Fill in the header data.
6. Click **Save**.

### Step 2: Add Positions

Add the products or services you want to order from the supplier.

1. Click **Add Position**.
2. Select a product or enter free text.
3. Set quantity and price.
4. Repeat for all positions.
5. Click **Save**.

## Approval Workflow (Four-Eyes Principle)

The purchase order includes an approval workflow that ensures orders are reviewed and approved before being placed. This protects against unauthorized or incorrect orders and serves as budget control.

![Approval workflow in the purchase order](../../screenshots/164-purchase-approval.png)

### Assigning an Approver

In the state section of the purchase order, you will find the **Approver** field. Select the person authorized to approve this order.

- This is a **required field** -- without an approver, the purchase order cannot be completed.
- Choose someone with the appropriate authority (e.g. department head, procurement manager, or executive).

### Confirmation by the Approver

The **Confirmed** checkbox can **only** be activated by the assigned approver. No other user can check this box.

The process works as follows:

1. You create the purchase order and assign an approver.
2. The approver opens the order and reviews the positions, quantities, and prices.
3. If everything is correct, the approver checks the **Confirmed** box.
4. Only after confirmation can the order be considered approved.

> **Note:** The four-eyes principle ensures that at least two people are involved in every purchase. This reduces errors and prevents unauthorized spending.

## Payment Terms

In the state section, you will find three fields for the supplier's payment terms. This information typically comes from the supplier's invoice or agreed conditions.

![Payment terms in the purchase order](../../screenshots/165-purchase-payment-terms.png)

### Payment Target

The **Payment Target** field specifies within how many days the supplier's invoice must be paid.

### Discount Payment Target

The **Discount Payment Target** field specifies within how many days payment must be made to receive the early payment discount.

### Discount Percentage

The **Discount** field specifies the discount percentage granted for early payment. The value ranges from 0.01% to 99.99%.

> **Example:** Your supplier offers 30-day payment terms and a 2% discount for payment within 10 days. Enter: Payment Target = 30, Discount Payment Target = 10, Discount = 2.00%.

## Supplier Invoice Data

In the dates section of the purchase order, you will find additional fields not present in sales orders. Here you record the data from your supplier's invoice.

### Invoice Number

Enter the **supplier's invoice number** here. This field is editable as long as the order is not locked.

### Invoice Date

Enter the **supplier's invoice date** here. This field is required as long as the order is not locked.

### Performance Period

The **Performance Period Start** and **Performance Period End** fields indicate the period during which the service was provided. Both fields are required as long as the order is not locked.

### Additional Fields

- **Order Date** -- The date you placed the order.
- **Commission** -- An optional reference field for internal purposes.

## Invoice Preview

If a supplier invoice document has been attached to your purchase order, you can preview it directly within the order. The **Invoice Preview** section displays the document in an embedded viewer.

![Invoice preview of the supplier invoice](../../screenshots/166-purchase-invoice-preview.png)

Click **View** to open the full invoice in a larger window.

## Differences from Sales Orders

| Feature | Sales Order | Purchase Order |
|---|---|---|
| **Perspective** | You sell to the customer | You order from the supplier |
| **Multiplier** | +1 (revenue) | -1 (expense) |
| **Margin/Profit** | Shown in summary | Not available |
| **Approver** | Not available | Required field |
| **Invoice Data** | Assigned automatically | Entered manually from supplier document |
| **Invoice Preview** | Not available | Embedded supplier invoice preview |
| **Print Layouts** | Invoice, Quote, Order Confirmation, Delivery Note | Supplier Order only |

## Practical Example: Ordering Office Equipment

1. Create a purchase order with the order type **Purchase**.
2. Select your office furniture supplier as the contact.
3. Add the positions (e.g. 5 desks, 5 office chairs).
4. Assign your department head as the **Approver**.
5. The department head reviews and checks the **Confirmed** box.
6. When the supplier's invoice arrives, enter the invoice number, invoice date, and performance period.
7. Check the payment terms and take advantage of early payment discounts if available.

## Related Topics

- [Purchase Subscriptions](7-purchase-subscriptions.md) -- Recurring purchase orders
- [Manage Orders](../1-manage-orders.md) -- Order list and filters
- [Order Details](../2-order-detail.md) -- General order details
- [Order Positions](../3-order-positions.md) -- Edit positions
- [Order Types](../../14-settings/11-order-types.md) -- Configure order types
