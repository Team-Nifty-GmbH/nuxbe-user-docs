# Communication

In the **Communication** tab you manage all contact methods for a contact. These include email addresses, phone numbers, mobile numbers, fax numbers and websites. The data stored here is automatically used when creating orders, sending emails and in other areas of Nuxbe.

## View Communication

1. Open the [detail view](2-contact-detail.md) of a contact.
2. Switch to the **Communication** tab.

   ![Communication list of a contact](../screenshots/22-communication-list.png)

3. The table shows all stored contact methods with the following columns:
   - **Type** - Type of contact method
   - **Value** - The actual contact information (e.g. the email address or phone number)

## Available Types

The following types are available for contact methods:

| Type | Description | Example |
|---|---|---|
| **Email** | Email address | info@samplecompany.com |
| **Phone** | Landline number | +44 20 1234567 |
| **Mobile** | Mobile phone number | +44 7700 123456 |
| **Fax** | Fax number | +44 20 1234568 |
| **Website** | Web address | www.samplecompany.com |
| **Other** | Additional contact data | e.g. social media profiles |

## Primary Contact Option

For each type, one contact option can be marked as primary. The primary email address is used, for example, as the default recipient when sending invoices or quotes. The primary phone number appears as the first number in the overview.

## Contact Options at Contact and Address Level

Contact options can be maintained at two levels:

- **Contact level** - General contact data that applies to the entire contact (e.g. the central company phone number)
- **Address level** - Contact data assigned to a specific address (e.g. the direct line of a branch office)

You manage the contact options at the address level directly within the respective address. For more information, see [Addresses](3-addresses.md).

### Which Level Is Used?

When creating an order, the contact options of the selected billing address are used. If there is no suitable contact option at that level, the system falls back to the contact options at the contact level.

When sending emails, the primary email address of the respective level is suggested. You can manually adjust the recipient address before sending.

## Requirement for Payment Reminder Email Sending

The automatic sending of payment reminders preferably uses the email address of the **order's billing address**. If no email is stored there, the system checks the **contact's billing address** (`Contact > Billing Address`). If no billing address is stored on the contact, the **main address** of the contact is used. If no email address exists at any of the three levels, no payment reminder can be sent by email.

> **Important:** Make sure the billing address on the order or at least the main address of the contact has a valid email address. For more information, see [Addresses](3-addresses.md) and [Reminders](../5-accounting/2-reminders.md).

For more information on the dunning process, see [Reminders](../5-accounting/2-reminders.md).

## Add a New Entry

1. Click **New** in the communication tab.
2. Select the **Type** from the dropdown (e.g. Email, Phone, Mobile, Fax, Website).
3. Enter the **Value** (e.g. the email address or phone number).
4. Click **Save**.

The new entry then appears in the communication list.

## Edit an Entry

1. Click on the desired entry in the table.
2. Change the type or value.
3. Click **Save**.

## Delete an Entry

1. Click **Delete** next to the desired entry.
2. Confirm the deletion in the displayed dialog.

## Automatic Usage

The contact methods stored here are automatically used in the following areas:

- **Order creation** - The email address of the billing address is suggested as the recipient for document delivery.
- **Email sending** - When creating an email from Nuxbe, the primary email address of the contact is pre-filled.
- **Contact list** - The primary contact data is displayed in the overview.
- **Payment reminders** - Reminders are preferably sent to the email address of the **order's billing address**. Fallback: contact's billing address, then main address.

## Related Topics

- [Contact Details](2-contact-detail.md) - Back to the contact detail view
- [Addresses](3-addresses.md) - Manage addresses and their contact options
- [Email](../11-email/0-index.md) - Send emails directly from Nuxbe
- [Reminders](../5-accounting/2-reminders.md) - Payment reminders and dunning
