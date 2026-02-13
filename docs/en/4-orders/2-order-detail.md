# Order Details

The detail view shows all information for a single order and lets you edit it in full. The layout is split into three columns that give you a quick overview of all relevant data.

## Open the Detail View

1. Navigate to the [order list](1-manage-orders.md).
2. Click on the desired order.

   ![Detail view of an order](../screenshots/09-order-detail.png)

## Left Column (Sidebar)

The left column displays high-level information and actions for the order:

- **Order Type** - Shown as a badge (e.g. Quote, Invoice, Order)
- **Status** - Current processing status of the order
- **Action Buttons** - Save, Delete, Print and other actions (see [Actions](#actions))
- **Metadata** - Additional information such as creation date and last modified date

## Middle Area (Main Content)

The middle area contains the core data of the order, divided into the sections Header Data, Positions and Texts.

### Header Data

The header data covers all top-level information for the order:

| Field | Description |
|---|---|
| **Order Number** | Automatically assigned, unique number of the order |
| **Commission** | Free text field for an internal reference or commission number |
| **Invoice Number** | Invoice number (assigned automatically for invoices and credit notes) |
| **Contact** | Linked customer or supplier; click to go directly to the contact |
| **Billing Address** | Address used for invoicing; selectable from the addresses stored under the contact |
| **Delivery Address** | Address used for delivery; can differ from the billing address |
| **Payment Type** | Agreed payment method (e.g. bank transfer, direct debit, credit card) |
| **Payment Terms** | Payment deadline in days |
| **Order Date** | Date of the order |
| **Delivery Date** | Planned or actual delivery date |
| **Header Discount** | Percentage discount applied to all positions of the order |

### Selecting the Billing Address

When creating or editing an order you can select the billing address from all addresses stored under the linked contact. Click the **Billing Address** dropdown to see every available address for that contact. By default the contact's main address is suggested, but you can choose a different address at any time.

This is especially important when a contact has multiple locations or departments that should receive invoices separately. Each order can have its own billing address. That address determines where documents such as invoices and payment reminders are sent.

Changing the billing address on an order does not affect the contact's default address. The change only applies to that particular order.

> **Example:** Your customer "Sample Ltd" has a headquarters in London and a branch office in Manchester. Simply select the appropriate address in the **Billing Address** field when creating each order.

> **Note:** The automatic email sending of payment reminders preferably uses the email address of the **billing address selected here on the order**. If no email is stored there, the system falls back to the contact's billing address and then to the main address. Make sure a valid email address is stored on the billing address. For more details, see [Reminders](../5-accounting/2-reminders.md).

### Payment Reminder

The **Payment Reminder Next Date** field controls when the next payment reminder is due for this order. The system checks this date during the automatic reminder run. If the date has been reached and the invoice is still unpaid, a reminder is generated automatically.

You can set or adjust this date manually to delay or bring forward a reminder. Leave the field empty to use the default values from the stored payment terms.

> **Note:** When you select or change the contact, the billing address, delivery address and payment settings are automatically populated from the contact's master data. You can then adjust these values manually.

### Positions

Below the header data you will find the **Positions** of the order -- the individual line items containing products, services or free texts. For a detailed description of position management see [Order Positions](3-order-positions.md).

### Texts

In the **Texts** section you can enter header and footer texts that appear on the generated documents (e.g. quote PDF, invoice):

- **Header Text** - Displayed above the positions table on the document (e.g. introductory text, reference to a conversation)
- **Footer Text** - Displayed below the positions table on the document (e.g. delivery terms, notices)

## Right Column

The right column shows an amount summary and linked documents:

### Amount Summary

| Field | Description |
|---|---|
| **Net** | Total of all positions excluding VAT |
| **VAT** | Sum of all VAT amounts |
| **Gross** | Total including VAT |
| **Balance** | Outstanding amount (gross minus payments already received) |

### Related Documents

Here you can see all orders linked to the current order in a document chain. Examples:

- The **quote** from which the order was created
- The **invoice** generated from the order
- A **credit note** created for an invoice

Click a linked document to navigate directly to its detail view.

## Actions

Depending on the order type and status, different actions are available:

| Action | Description |
|---|---|
| **Save** | Apply all changes to the order |
| **Delete** | Delete the order (only possible when no follow-up documents exist) |
| **Print / PDF** | Generate a PDF document of the order (quote, invoice, delivery note, etc.) |
| **Duplicate** | Create a copy of the order with all header data and positions |
| **Create Order** | Convert a quote into a confirmed order |
| **Create Invoice** | Generate an invoice from an order |
| **Delivery Note** | Create a delivery note based on the order positions |
| **Schedule** | Subscriptions only: open the schedule configuration for recurring documents |
| **Cancellation** | Subscriptions only: start the cancellation process |

> **Note:** Not all actions are available at all times. The display adapts to the current status and order type. The individual order types and their specific features are documented under [Order Types](5-order-types/0-index.md).

## Edit an Order

1. Change the desired fields in the detail view.
2. Click **Save** to apply the changes.

## Create Follow-up Document

To create a follow-up document from an existing order:

1. Open the order in the detail view.
2. Click the desired action (e.g. **Create Invoice**).
3. The new document is created with the data from the existing order and linked in the document chain.
4. You are redirected to the detail view of the new document.

## Related Topics

- [Manage Orders](1-manage-orders.md) - Back to the order list
- [Order Positions](3-order-positions.md) - Edit and add positions
- [Contacts](../2-contacts/0-index.md) - Edit the linked contact
- [Accounting](../5-accounting/0-index.md) - Manage payments and transactions
- [Settings > Order Types](../14-settings/11-order-types.md) - Configure order types and number ranges
- [Settings > Payment Types](../14-settings/12-payment-types.md) - Set up payment methods
