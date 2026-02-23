# Auftragsarten

Auftragsarten definieren die verschiedenen Dokumenttypen im System wie Angebot, Auftrag, Rechnung oder Gutschrift. Jede Auftragsart verfügt über eigene Nummernkreise, Druckvorlagen und Verhaltenseinstellungen.

## Übersicht

1. Navigieren Sie zu **Einstellungen > Aufträge > Auftragsarten**.

   ![Auftragsarten verwalten](../screenshots/93-einstellungen-auftragsarten.png)

2. Die Tabelle zeigt alle Auftragsarten mit folgenden Spalten:
   - **Name** - Bezeichnung der Auftragsart
   - **Typ** - Art des Dokuments (Angebot, Auftrag, Rechnung, etc.)
   - **Status** - Ob die Auftragsart aktiv ist
   - **Beschreibung** - Optional eine Erläuterung

## Auftragsart anlegen

1. Klicken Sie auf **Neu**.
2. Füllen Sie das Formular aus:
   - **Name** - Geben Sie eine aussagekräftige Bezeichnung ein (z.B. "Kundenrechnung", "Lieferantengutschrift")
   - **Mandant** - Wählen Sie den zugehörigen Mandanten aus
   - **Typ** - Wählen Sie den Dokumenttyp (Angebot, Auftrag, Lieferschein, Rechnung, Gutschrift, etc.)
   - **Beschreibung** - Optional eine erklärende Beschreibung
   - **E-Mail-Vorlage** - Wählen Sie eine Vorlage für automatische E-Mails
   - **Kopfzeile** - Optionaler Text für die Dokumentenkopfzeile. Unterstützt [Editor-Variablen](../1-erste-schritte/6-editor-variablen.md).
   - **Fußzeile** - Optionaler Text für die Dokumentenfußzeile. Unterstützt [Editor-Variablen](../1-erste-schritte/6-editor-variablen.md).
   - **Drucklayouts** - Wählen Sie die zu verwendenden Druckvorlagen
   - **Lagerbuchung Drucklayouts** - Layouts für Lagerbuchungen nach Dokumenterstellung
   - **Lagerreservierung Drucklayouts** - Layouts für Lagerreservierungen
   - **Ist aktiv** - Aktivieren Sie die Auftragsart zur Nutzung
   - **Ist versteckt** - Verbergen Sie die Auftragsart in Übersichten
   - **In Sidebar sichtbar** - Zeigen Sie die Auftragsart in der Navigation an
3. Klicken Sie auf **Speichern**.

## Auftragsart bearbeiten

1. Klicken Sie auf eine Auftragsart in der Liste.
2. Passen Sie die gewünschten Einstellungen an.
3. Klicken Sie auf **Speichern**.

## Auftragsart löschen

1. Klicken Sie auf eine Auftragsart in der Liste.
2. Klicken Sie auf **Löschen**.
3. Bestätigen Sie die Sicherheitsabfrage.

> **Hinweis:** Auftragsarten mit zugeordneten Aufträgen können nicht gelöscht werden. Diese werden lediglich als gelöscht markiert und bleiben für historische Daten erhalten.

## Besonderheiten

### Mandantenzuordnung

Jede Auftragsart ist einem bestimmten Mandanten zugeordnet. Diese Zuordnung hat folgende Auswirkungen:

- Beim **Erstellen** eines neuen Auftrags werden nur Auftragsarten angeboten, die zum gewählten Mandanten gehören.
- Beim **Duplizieren** eines Auftrags können nur Auftragsarten des gleichen Mandanten wie der Originalauftrag gewählt werden.
- Die Auftragsart kann nachträglich nicht auf eine andere Mandantenzuordnung geändert werden.

> **Hinweis:** Wenn Sie beim Duplizieren eine bestimmte Auftragsart nicht auswählen können, prüfen Sie unter **Einstellungen > Aufträge > Auftragsarten**, ob die gewünschte Auftragsart dem richtigen Mandanten zugeordnet ist.

### Nummernkreise

Jede Auftragsart kann einen eigenen Nummernkreis verwenden. Dies wird über die zugeordnete Nummernserie gesteuert, die ein Präfix und eine fortlaufende Nummer definiert.

### Folgebelege

Manche Auftragsarten können automatisch Folgebelege erzeugen. Beispielsweise kann aus einem Auftrag automatisch ein Lieferschein oder eine Rechnung generiert werden.

### Lagerbuchungen

Bei aktivierter Lagerbuchung werden bei Dokumenterstellung automatisch die Lagerbestände angepasst. Dies ist typischerweise für Lieferscheine und Rechnungen relevant.

> **Wichtig:** Ändern Sie Auftragsarten-Einstellungen nur mit Bedacht. Änderungen können sich auf bestehende Workflows und Automatisierungen auswirken.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [Editor-Variablen](../1-erste-schritte/6-editor-variablen.md) - Dynamische Variablen in Kopf- und Fußzeilen verwenden
- [Aufträge](../4-auftraege/0-index.md) - Aufträge verwalten
- [Zahlungsarten](12-zahlungsarten.md) - Zahlungskonditionen definieren
