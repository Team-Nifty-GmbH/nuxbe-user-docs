# Logging Communication

In the **Communication** tab of a contact -- or directly on an address, an order, a ticket or a purchase invoice -- you record manually which emails, letters or phone calls took place. These entries are documentation only: they send nothing, they record what already happened.

> **Note:** Do not confuse this tab with the similarly named **Communication** tab on the address detail page, where you maintain [contact channels](4-communication.md) (email, phone, mobile) as permanent properties. This tab is about **individual events**, the other one about **permanent address data**.

## When to Use It

- You spoke to a customer on the phone and want to record what was agreed.
- You sent a letter and want it documented, including an uploaded PDF copy.
- You sent an email outside Nuxbe (from Outlook, for example) and still want the event in the customer history.
- Incoming emails synchronised automatically through the [mail account connection](../14-settings/26-mail-accounts.md) also end up in this list.

## Opening the Tab

1. Open the [detail view](2-contact-detail.md) of a contact.
2. Click the **Communication** tab.

<!-- Screenshot: communication tab with the list of existing entries -->

The table shows all logged events with these columns:

- **Date** -- when the event took place
- **From** -- sender (for emails the address; for letters and calls empty or filled in manually)
- **To** -- recipient
- **Subject** -- a short line on what the event was about
- **Text** -- preview of the content

The **search field** at the top filters by keywords in subject or content.

## Creating an Entry

1. Click **+ New** at the top right.

<!-- Screenshot: New button highlighted -->

2. A form opens with the following fields.

<!-- Screenshot: form for creating a communication entry -->

3. **Communication type** -- choose what you are logging:

<!-- Screenshot: dropdown with the options Email, Letter, Phone call -->

   - **Email** -- for outgoing mails, or incoming ones you want documented
   - **Letter** -- for postal mail
   - **Phone call** -- for calls, incoming or outgoing

4. **Model** and **Record** -- these two fields link the entry to further records. By default the record you opened the form from (the contact, for example) is already assigned. You can link more, for instance: *this call also belongs to order X and ticket Y*.

   1. Under **Model** choose the record type (order, address, ticket, purchase invoice, lead, SEPA mandate).
   2. Under **Record** choose the specific entry of that type.
   3. The green **+** next to the fields adds further links, so one communication entry points at several records.

   > **Note:** Multiple links are one of the main strengths of this tab. A single phone call in which two orders were discussed appears in the communication history of **both** orders **and** on the contact, from one entry.

5. **Subject** -- a short, meaningful line. For emails the mail subject; for calls a keyword such as *"complaint about delivery date"*.

6. **Content** -- the actual text. The editor supports formatting, lists, links and images. For calls a free call report, for letters often a reference to the uploaded PDF.

7. **Tags** -- optional. If you have set up [tags](../14-settings/6-tags.md), add something like *complaint* or *acquisition* here to search for it later.

8. **Files** -- drag files into the field at the bottom or click the upload area. Attachments are stored directly on the entry.

9. Click **Save**. The entry appears in the list immediately, and at the same time in the communication tab of every record you linked as a model.

## Important: There Are **No** Templates

Unlike sending mail from an order or an invoice, this tab uses **no** [email templates](../14-settings/25-email-templates.md). It is a pure documentation function. If you word a letter the same way again and again, you have to paste the text in manually or copy it from an external source.

> **Tip:** To send standardised correspondence automatically, use the mail function in the record itself (order, invoice) -- templates are available there. The content sent is logged in the communication tab **automatically**.

## Editing or Deleting an Entry

Click a row in the list to open the entry. You can change content, attachments and links, or delete the entry. **Careful:** deleting removes the entry from the communication tabs of all linked records, not only from the current one.

## Where Else Your Entries Appear

A communication entry does not live on the contact alone. If you linked further models in step 4, you also see the same entry:

- in the **Communication** tab of the linked order
- in the **Communication** tab of the linked ticket
- in the **Communication** tab of the linked purchase invoice
- in the global [communication overview](../1-getting-started/2-navigation.md) under **Contacts > Communications**, if it is enabled in your tenant

That way the history stays visible in the right place, whether you approach it from the customer, the order or the ticket.
