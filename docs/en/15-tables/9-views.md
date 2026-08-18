# Switching Views

Some tables can present the same data in more than one view. The table view is available everywhere; further views are offered only where they make sense for the data.

## Switching the View

The available views sit as a small toolbar above the top right corner of the table. If a table offers the table view only, the toolbar is not shown.

<!-- Screenshot: view switcher with the available views above the table -->

A click on an icon switches the view. Your choice belongs to your personal view and is kept the next time you open the table.

| View | Presentation | Suited for |
|---|---|---|
| **Table** | Rows and columns, all column functions available | Analysing, filtering and comparing many records |
| **Grid** | Tiles side by side instead of rows | An overview when only a few fields per record matter |
| **Kanban** | One column per status, records as cards inside | Working on progress, for example tasks in a project |

> **Note:** Search, filters and sorting apply in every view. If you filter in the table view and then switch to Kanban, you see the same selection, only presented differently.

## Kanban

In the Kanban view every column stands for one status. Records appear as cards in the column of their current status.

<!-- Screenshot: Kanban view of the project tasks with one column per status -->

- **Change the status:** Drag a card into another column. The status of the record is saved immediately.
- **Load more:** Every column loads the first cards only. Load the next ones at the end of a column.

> **Note:** Dragging changes real data, not just the display. The same rules apply as when changing the status in the record itself. If you lack the permission, the card jumps back.

By default the task list of a project offers the Kanban view. See [Projects](../10-projects/0-index.md).

## Loading While Scrolling

Instead of paging, tables can load while you scroll. As soon as you reach the end of the loaded rows, the table appends the next block automatically.

You can tell by the **Loading...** button that appears briefly at the bottom. Which of the two variants a table uses depends on the list. For classic page navigation see [Tables](0-index.md).

## Related Topics

- [Customise Columns](3-customise-columns.md) — Show, hide, pin and resize the columns of the table view
- [Grouping](5-grouping.md) — Combine the rows of the table view by a column
- [Projects](../10-projects/0-index.md) — Task list with a Kanban view
