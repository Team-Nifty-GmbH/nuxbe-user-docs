# Payment Reminder Texts

Manage the email subjects and texts used for each payment reminder level.

## Open Payment Reminder Texts

1. Navigate to **Settings > Accounting > Payment Reminder Texts**.

   ![Payment reminder texts list](../screenshots/94-settings-payment-reminder-texts.png)

2. The table shows all reminder texts with the following columns:
   - **Reminder Level** - Level number (1, 2, 3)
   - **Reminder Subject** - Email subject line template
   - **Email Template** - Assigned email template, required for the reminder run

## Create a Reminder Text

1. Click **New**.
2. Set the reminder level and compose the subject and body using available placeholders.
3. Select an **Email Template**. Without an assigned template the reminder run cannot send a reminder for this level by email.
4. Click **Save**.

> **Important:** The reminder run only sends a reminder when a reminder text exists for the required level **and** that text has an email template assigned. If either is missing, the affected invoice stays in the reminder run and is listed with the corresponding reason. The reminder text provides the content of the printed reminder letter, the email template provides the body of the reminder email.

## Reminder Levels

The reminder run uses the reminder text whose level matches the next due level exactly. If no reminder text exists for that level, the invoice is not reminded and is listed in the reminder run with the corresponding note. Create a reminder text for every level you actually use.

## Edit or Delete

- Click **Edit** to modify an existing reminder text.
- Click **Delete** to remove a reminder text.

## Related Topics

- [Reminders](../5-accounting/2-reminders.md) - View sent reminders
- [Settings](0-index.md) - Back to the settings overview
