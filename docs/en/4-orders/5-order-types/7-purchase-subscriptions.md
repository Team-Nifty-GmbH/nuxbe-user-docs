# Purchase Subscriptions (Recurring Purchase Orders)

A purchase subscription is a recurring purchase order. It combines the features of a [Purchase](6-purchases.md) (supplier perspective, approval workflow, payment terms) with an automatic schedule that creates follow-up documents at regular intervals. Typical use cases include monthly cloud costs, quarterly maintenance contracts with suppliers, or annual license fees.

## Differences from Sales Subscriptions

The purchase subscription shares the schedule mechanism with the [sales subscription](4-subscriptions.md), but differs in several important ways:

| Feature | Sales Subscription | Purchase Subscription |
|---|---|---|
| **Perspective** | You bill the customer | You order from the supplier |
| **Multiplier** | +1 (revenue) | -1 (expense) |
| **Approval Workflow** | Not available | Approver and confirmation required |
| **Payment Terms** | Payment target for the customer | Payment target, discount period, discount percentage |
| **Auto Print/Send** | Available | Not available |
| **Cancellation Function** | Available (via sidebar button) | Not available |
| **Print Layouts** | Invoice, Quote, Order Confirmation, Delivery Note | Supplier Order only |

## Creating a Purchase Subscription

### Step 1: Create a New Order

1. Navigate to **Orders**.
2. Click **New**.
3. Select **Purchase Subscription** as the **Order Type**.
4. Select the **Contact** (supplier).
5. Fill in the header data.
6. Click **Save**.

### Step 2: Positions and Purchase Data

Add the recurring positions and configure the purchase-specific fields:

- Assign an **Approver** (required)
- Enter **Payment Terms** (payment target, discount)
- Add **Positions** (products or services)

Details on these fields can be found in the [Purchases](6-purchases.md) documentation.

### Step 3: Set Up the Schedule

After saving the order, you will see the **Schedule** button (blue clock icon) in the sidebar. Click it to open the schedule dialog.

![Schedule for purchase subscription](../../screenshots/167-purchase-sub-schedule.png)

The schedule offers the same options as the sales subscription:

- **Order Type** for the follow-up document
- **Repeat** (daily, weekly, monthly, quarterly, yearly, etc.)
- **Due At** (start date for the first execution)
- **End Condition** (never, end date, or number of recurrences)
- **Is Active** (enable or disable the schedule)

A detailed description of all schedule options can be found under [Subscriptions](4-subscriptions.md).

> **Note:** Unlike the sales subscription, the purchase subscription does **not** include auto print and email sending. Since you are the buyer and not the invoicing party, automatic sending to the supplier is not applicable.

## Approval Applies to Subscriptions Too

The purchase approval workflow is retained for purchase subscriptions. The assigned approver must confirm the order before it is considered approved. This applies to both the original subscription order and the automatically created follow-up documents.

## Practical Example: Monthly Cloud Costs

A company uses cloud hosting services for 499.00 EUR per month.

- **Order Type:** Purchase Subscription
- **Contact:** Cloud hosting provider
- **Positions:** "Cloud Hosting Business" -- 1 unit -- 499.00 EUR/month
- **Approver:** IT Manager
- **Repeat:** Monthly On the 1st
- **Due At:** March 1, 2025
- **End:** Never
- **Payment Target:** 14 days
- **Discount:** 2% for payment within 7 days

**Result:** On the 1st of every month, Nuxbe automatically creates a new purchase document for the cloud costs. The IT Manager reviews and confirms the document.

## Related Topics

- [Purchases](6-purchases.md) -- Purchase orders in detail
- [Subscriptions](4-subscriptions.md) -- General schedule explanation and all options
- [Manage Orders](../1-manage-orders.md) -- Order list and filters
- [Order Details](../2-order-detail.md) -- General order details
- [Order Types](../../14-settings/11-order-types.md) -- Configure order types
