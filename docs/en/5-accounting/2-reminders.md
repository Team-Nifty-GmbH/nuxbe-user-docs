# Reminders

In the **Reminders** section you manage payment reminders for overdue invoices. The system supports multiple reminder levels with configurable texts and fees, as well as an automatic reminder run that detects overdue invoices and generates reminders.

## Overview

1. Navigate to **Accounting > Reminders**.

   ![Reminders list](../screenshots/26-reminders-list.png)

2. The table shows all reminders with the following columns:
   - **Contact** - Name of the customer being reminded
   - **Invoice Number** - Number of the overdue invoice
   - **Invoice Date** - Date of the original invoice
   - **Open Amount** - Outstanding invoice amount
   - **Reminder Level** - Current level of the reminder (1st, 2nd, 3rd reminder)
   - **Last Reminder Date** - Date the most recent reminder was sent

## Reminder Levels

The reminder system works with configurable levels. Each level can have its own texts and fees:

| Level | Description | Typical Timing |
|---|---|---|
| **1st Reminder** | Friendly payment reminder without additional fees | After the payment deadline has passed |
| **2nd Reminder** | Firm reminder, may include reminder fees | A few weeks after the 1st reminder |
| **3rd Reminder** | Final warning before further action, with increased fees | A few weeks after the 2nd reminder |

You can configure the reminder texts and fees per level in the settings. This lets you graduate the tone from a friendly nudge up to an urgent final demand.

## Run Reminder Process

During the automatic reminder run the system checks all open invoices and generates reminders for overdue items:

1. Click **Start Reminder Run**.
2. The system checks all open invoices whose payment deadline has passed.
3. For each overdue invoice a reminder is automatically generated at the appropriate level.
4. Review the generated reminders in the list.
5. Send the reminders by email or print them as PDF.

> **Note:** The reminder run considers the current level of each invoice. If a 1st reminder has already been sent and the invoice is still open, the system automatically generates a 2nd reminder.

## Send Reminders

Two delivery methods are available:

- **By Email** - The reminder is sent as an email to the stored contact address
- **As PDF / Print** - The reminder is generated as a PDF document that can be printed and sent by post

### Which Email Address Receives the Reminder?

The system checks in the following order which email address receives the reminder:

1. **Order's billing address** - If a billing address with an email is stored on the order, that email address is used.
2. **Contact's billing address** - If the order has no billing address (or it has no email), the billing address stored on the contact is used.
3. **Contact's main address** - If no billing address is stored on the contact either, the primary email address of the main address is used.
4. **No email delivery** - If none of the three addresses has an email address, the reminder cannot be sent by email. In this case, only PDF/postal delivery is available.

> **Example:** Your customer "Sample Ltd" has a headquarters in London and a branch office in Manchester. If you select the Manchester address as the billing address on the order and it has an email address, the reminder for that order will be sent to the Manchester address.

## Exclude Orders from Reminders

In certain cases you may want to exclude individual orders or invoices from the automatic reminder process, for example during an ongoing complaint or an agreed instalment plan. This can be configured directly on the respective order.

## Reminder Fees

Reminder fees are configured per level and automatically added to the outstanding amount. You can set the fee amount individually for each level in the settings.

### Requirements for Automatic Reminder Sending

For the system to generate and send a reminder automatically, **all** of the following conditions must be met:

- The invoice must be overdue (payment deadline has passed)
- The **Payment Reminder Next Date** field on the order must be set and the date must have been reached or passed
- At least one of the following addresses must have an email address: the order's billing address, the contact's billing address, or the contact's main address
- The invoice must be locked (invoice number assigned)
- The order must have an open balance (balance is not 0)
- The order must not be excluded from the reminder process

> **Note:** If any of these conditions is not met, no reminder is generated for the affected order.

### Troubleshooting: Reminder Not Created

**Problem:** A reminder is not generated even though the invoice is overdue.

- Check whether at least one of the three addresses (order's billing address, contact's billing address, contact's main address) has an email address
- Check whether the order is excluded from the reminder process
- Check the **Payment Reminder Next Date** field on the order -- is it set and has the date passed?
- Check whether the invoice is locked and has an invoice number

**Problem:** Email dialog does not open after clicking "Continue"

If you select one or more orders, click **Create Payment Reminder**, check the **Email** option and then click **Continue**, but the email compose dialog does not appear, this is typically because the affected contact has no email address on file.

Orders without an email address are automatically skipped when creating payment reminders. If **all** selected orders are affected, the email dialog will not open at all.

Solution:
1. Open the affected [contact](../2-contacts/0-index.md) and navigate to their [addresses](../2-contacts/3-addresses.md).
2. Add an email address to the billing address or the main address.
3. Run the reminder process again.

**Problem:** A reminder was sent to the wrong email address.

- The email goes first to the **order's billing address**, then to the contact's billing address, then to the main address
- To change the recipient address, update the billing address on the [order](../4-orders/2-order-detail.md) or store the correct email address on the desired address

## Related Topics

- [Accounting](0-index.md) - Back to the accounting overview
- [Orders](../4-orders/0-index.md) - View related invoices
- [Order Details](../4-orders/2-order-detail.md) - Set billing address and payment reminder on an order
- [Contacts](../2-contacts/0-index.md) - Manage customer data and payment terms
- [Addresses](../2-contacts/3-addresses.md) - Manage billing addresses and their email addresses
- [Communication](../2-contacts/4-communication.md) - Email addresses at contact and address level
