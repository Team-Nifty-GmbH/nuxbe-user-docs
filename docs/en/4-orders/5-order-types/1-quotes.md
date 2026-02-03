# Quotes

A quote is a non-binding cost estimate that you send to a customer. It is the typical precursor to an order. Once the customer accepts the quote, you convert it into a binding order with just a few clicks. All data -- positions, prices, contact details -- is carried over automatically.

## When to Use a Quote

- You want to provide a customer with pricing for products or services before a purchase becomes binding.
- You need a written basis for price negotiations.
- You want to start the order process with a documented proposal phase.

## Creating a Quote

### Step 1: Create a New Order

1. Navigate to **Orders**.
2. Click **New**.
3. Select **Quote** as the **Order Type**.

   ![Selecting the Quote order type](../../screenshots/152-quote-create.png)

4. Select the **Contact** (customer).
5. Fill in the header data (payment type, payment terms, price list, etc.).
6. Click **Save**.

### Step 2: Add Positions

1. Click **Add Position**.
2. Select a product or enter free text.
3. Set quantity and price.
4. Repeat for all desired positions.
5. Click **Save**.

> **Note:** The positions in the quote are fully carried over when converting to an order. Make sure all prices and quantities are correct before sending the quote.

### Step 3: Add Texts (Optional)

In the **Texts** tab, you can add a header text (e.g. "Thank you for your inquiry") and a footer text (e.g. "This quote is valid for 30 days"). These texts appear on the PDF document.

## Detail View of a Quote

The detail view of a quote follows the general [order detail view](../2-order-detail.md). You will find:

![Detail view of a quote](../../screenshots/153-quote-detail.png)

- **Left column** -- Contact, billing address, delivery address, order information, and states
- **Center area** -- Header data, positions, and texts as tabs
- **Right column** -- Action buttons, amount summary (net, VAT, gross, balance), and date fields

The quote offers the same tabs as all other order types: Positions, Attachments, Texts, Accounting, Comments, Communications, Related Documents, and Activities.

## Sending a Quote

1. Open the quote in the detail view.
2. Click **Create Documents** in the right column.
3. Select the **Quote** print layout.
4. Nuxbe generates a PDF that you can download or send directly to the customer via email.

## Converting a Quote to an Order

When the customer accepts the quote, create a binding order from it:

1. Open the quote in the detail view.
2. Click **Replicate**.
3. Select **Order** (or another desired order type) as the new order type.
4. Review the carried-over data and adjust if needed.
5. Click **Save**.

![Converting a quote to an order](../../screenshots/154-quote-to-order.png)

The new order is automatically linked to the original quote in the document chain. You can view this link in the right column under **Related Documents**.

> **Note:** The original quote is preserved and not deleted. This ensures a complete documentation trail of the entire process.

## Duplicating a Quote

You can use an existing quote as a template:

1. Open the desired quote.
2. Click **Replicate**.
3. Select **Quote** as the order type again.
4. Adjust contact, positions, and prices as needed.
5. Save the new quote.

This is especially useful when you regularly create similar quotes.

## Available Print Layouts

The following print layouts are available for quotes:

- **Quote** -- The standard layout for the quote document
- **Order Confirmation** -- If you want to send the quote as an order confirmation
- **Invoice** -- Not typically used for quotes, but technically available
- **Delivery Note** -- Not typically used for quotes, but technically available

## Typical Workflow

A typical quote workflow looks like this:

1. **Create quote** -- Enter positions and prices.
2. **Generate and send PDF** -- Send the quote PDF to the customer.
3. **Wait for response** -- The customer reviews the quote.
4. **Convert quote to order** -- After the customer accepts.
5. **Create invoice** -- An invoice is generated from the order.

## Related Topics

- [Orders](2-orders.md) -- The next step after a quote
- [Order Details](../2-order-detail.md) -- General detail view
- [Order Positions](../3-order-positions.md) -- Edit positions
- [Manage Orders](../1-manage-orders.md) -- Order list and filters
- [Configure Order Types](../../14-settings/11-order-types.md) -- Number ranges and settings
