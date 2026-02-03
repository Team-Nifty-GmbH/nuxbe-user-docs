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
   - **Kopfzeile** - Optionaler Text für die Dokumentenkopfzeile
   - **Fußzeile** - Optionaler Text für die Dokumentenfußzeile
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

### Nummernkreise

Jede Auftragsart kann einen eigenen Nummernkreis verwenden. Dies wird über die zugeordnete Nummernserie gesteuert, die ein Präfix und eine fortlaufende Nummer definiert.

### Folgebelege

Manche Auftragsarten können automatisch Folgebelege erzeugen. Beispielsweise kann aus einem Auftrag automatisch ein Lieferschein oder eine Rechnung generiert werden.

### Lagerbuchungen

Bei aktivierter Lagerbuchung werden bei Dokumenterstellung automatisch die Lagerbestände angepasst. Dies ist typischerweise für Lieferscheine und Rechnungen relevant.

> **Wichtig:** Ändern Sie Auftragsarten-Einstellungen nur mit Bedacht. Änderungen können sich auf bestehende Workflows und Automatisierungen auswirken.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [Aufträge](../4-auftraege/0-index.md) - Aufträge verwalten
- [Zahlungsarten](12-zahlungsarten.md) - Zahlungskonditionen definieren
