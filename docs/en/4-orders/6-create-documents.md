# Creating Further Documents from a Document

In Nuxbe a **follow-up document** commonly grows out of a **source document**: a quote becomes an order, an order becomes a partial order or a return, an invoice becomes a credit note. This page shows the standard way to do that.

> **Note:** Which documents are available to you, and whether extra steps or mandatory fields apply, depends on the configuration of your tenant. Your administrator can create and enable custom [order types](../14-settings/11-order-types.md). The steps described here are the **factory standard workflow** and may be extended with your own steps.

## The Idea of a Follow-Up Document

A follow-up document always stays linked to the document it grew out of. In the source document the **Related processes** tab lists every follow-up document created from it. The follow-up document itself carries a link back to its parent.

This link serves several purposes:

- Positions, address, payment terms and other data of the source document are prefilled in the follow-up document, so you do not enter anything twice.
- You can trace the connection in lists, statistics and search at any time.
- Posting or cancelling a follow-up document acts on the source document accordingly, for example by resetting the open remaining quantity in the source order correctly.

## Creating an Order from a Quote

When a customer accepts your quote, you turn it into the order that delivery and invoicing build on.

1. Open the **quote** in the order list.
2. At the bottom right of the order positions area, click **Create partial order**.

   > **Note:** Despite the name *partial order*, this button creates every kind of follow-up document -- a complete order, a genuine partial order with only some positions, and special cases such as a return or a credit note, depending on the **order type** you choose.

3. You land on the **Create partial order** page.

<!-- Screenshot: form for creating a follow-up document from a source order -->

4. Under **Select order type** choose the follow-up type. The list contains only order types configured in your tenant as permitted follow-ups for the source type. A quote typically offers *order* and *partial order*; an order additionally offers *return* and *credit note*.

5. Choose the **positions** to carry over from the **Available positions** list on the left. You have several options:

   - **Select individually:** tick the box in the row of a position. The position moves to **Selected positions** on the right.
   - **Take all:** click **Take all** to carry over every position with its full quantity -- the standard case when a quote becomes the complete order.
   - **Take all with a percentage:** enter `50`, for example, then click **Take all**. Every position is carried over at half its quantity, which is handy for down payments or partial deliveries.

6. Check the **selected positions** on the right. To drop a position after all, untick it again.

7. Click **Create partial order** at the bottom right (the button text adapts to the chosen order type).

<!-- Screenshot: confirmation button for creating the follow-up document -->

8. You are taken straight into the new follow-up document. The header shows the link back to the source quote ("Parent order: [number]"). From here you work with it normally: adjust address, delivery date and other fields, add positions, print or send it.

> **Tip:** You can create any number of follow-up documents from one **quote**. If a customer first calls off half of the offered services and the rest later, make two separate orders from the same quote -- the quote stays open until you close it manually.

## Creating a Partial Order from an Order

For large orders delivered or processed in stages, create one partial order per stage. The source order remains as the parent document and lists every partial order under **Related processes**.

The procedure is the same as above:

1. Open the source order and click **Create partial order**.
2. In the **Select order type** dropdown choose **Partial order** (or the variant named for it in your tenant).
3. Select only the positions delivered or invoiced in this stage.
4. Use the percentage if you are invoicing a 30 % down payment, for example.
5. Click **Create partial order**.

> **Note:** The remaining quantity of the positions stays open in the source order until you create further partial orders or mark the source order as done manually.

## Creating a Return

When a customer sends goods back, create a return from the original order or invoice.

1. Open the order the return belongs to.
2. Click **Create partial order**.
3. Under **Order type** choose **Return** (or the return order type named in your tenant).
4. Select only the positions being sent back, with a reduced quantity if only part of them returns.
5. Click **Create return**.

The return is created as a separate document referencing the original order. You work with it like any other order: document the goods receipt, create a credit note.

> **Note:** Whether the return increases stock automatically or whether you do that by hand depends on the configuration of your [order types](../14-settings/11-order-types.md). Ask your administrator if in doubt.

## Creating a Credit Note

A credit note corrects an invoice that has already been issued. It is usually created from the **invoice**, not from an order.

1. Open the **invoice** the credit note belongs to.
2. Click **Create partial order**.
3. Under **Order type** choose **Credit note**.
4. Select the positions to be credited, at full quantity or reduced for a partial credit note.
5. Click **Create credit note**.

The credit note carries its own document number and references the original invoice. Accounting posts it correctly against the invoice, and the **Related processes** tab of the invoice now links the credit note.

> **Note:** If the invoice has already been paid, the credit note does not decide by itself whether the money goes back to the customer. You arrange that through [Accounting > Transfers](../5-accounting/7-transfers.md) or a refund through your payment provider.

## Related Processes in the Source Document

Whichever follow-up document you created, it is visible in the source document right away:

1. Open the source document.
2. Switch to the **Related processes** tab.
3. You see every follow-up document created from it with type, number, date and status.

A click on an entry takes you straight into the follow-up document.

## When the "Create partial order" Button Is Missing

Several support tickets have been about the **Create partial order** button no longer being shown. Usually one of these applies:

- **The document is locked.** As soon as an order or invoice reaches a final state (*paid*, *posted*, *completed*), it is locked for editing, and creating follow-up documents from it is blocked as well. Lift the lock if you can, or choose a different source document.
- **The order type has no follow-up documents.** Special order types, especially custom ones, may have no follow-up configuration. Your administrator handles that case.
- **You lack the permission.** Creating follow-up documents can be controlled per order type. If colleagues see the button and you do not, ask your administrator for the permission.

## What Next?

- General order handling: [Order Details](2-order-detail.md)
- Configuring order types and their transitions: [Settings > Order Types](../14-settings/11-order-types.md)
- Specifics of the individual order types (quotes, subscriptions, purchasing and so on): [Order Types](5-order-types/0-index.md)
