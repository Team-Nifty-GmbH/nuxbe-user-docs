# Editor Variables

In various places in Nuxbe you can insert dynamic variables into text fields. When a document is created -- an invoice or a payment reminder, for example -- the variables are replaced automatically with the actual values. That lets you write template texts which adapt to the case at hand when they are printed.

## Inserting a Variable

Text fields that support editor variables show a variable button in the editor toolbar.

<!-- Screenshot: editor toolbar with the variable button -->

1. Place the cursor where the variable should go.
2. Click the **variable button** in the toolbar.
3. A dropdown lists every variable available for this text field.

<!-- Screenshot: dropdown with the available variables -->

4. Click the variable you want.
5. The variable appears as a highlighted element in the text.

## Available Variables

Which variables you can choose from depends on the area you are editing in. The dropdown always lists exactly the ones available in that context. General variables such as the current date or the signed-in user are available in every text field.

> **Note:** Variables are replaced with real values only when the document is created. In the editor you see the name of the variable, not its value. If no value exists for a variable, no invoice number has been assigned yet for example, the spot stays empty in the finished document.

## Where Editor Variables Are Available

| Area | Text field | Description |
|---|---|---|
| [Order types](../14-settings/11-order-types.md) | **Header**, **Footer** | Texts appearing on every document of this order type |
| [VAT rates](../14-settings/20-vat-rates.md) | **Footer text** | Text shown on documents with this tax rate |
| [Payment reminder texts](../14-settings/23-payment-reminder-texts.md) | **Reminder text** | Text for reminder letters of the respective level |
| [Subscription settings](../14-settings/14-subscription-settings.md) | **Cancellation text** | Text for cancellation confirmations |
| [Email templates](../14-settings/25-email-templates.md) | **HTML content** | Content of automatically sent emails |
| Order | **Header text**, **Footer text** | Individual texts per order, printed on the document |

## Example

A **footer text** for a zero-rated VAT rate could look like this:

```
Tax-exempt intra-community supply under section 4 no. 1b in conjunction with section 6a UStG.
VAT ID of the recipient: [VAT ID of the contact]
```

`[VAT ID of the contact]` sits in the editor as a highlighted variable. When the invoice is created it is replaced with the VAT ID of that customer.

## Related Topics

- [Order Types](../14-settings/11-order-types.md) — Headers and footers for document types
- [VAT Rates](../14-settings/20-vat-rates.md) — Footer texts for tax rates
- [Payment Reminder Texts](../14-settings/23-payment-reminder-texts.md) — Texts for reminder letters
- [Email Templates](../14-settings/25-email-templates.md) — Templates for automatic emails
