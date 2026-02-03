# Auftragsdetails

In der Detailansicht sehen Sie alle Informationen zu einem einzelnen Auftrag und können diesen vollständig bearbeiten. Die Ansicht ist in ein Drei-Spalten-Layout gegliedert, das Ihnen einen schnellen Überblick über alle relevanten Daten gibt.

## Detailansicht öffnen

1. Navigieren Sie zur [Auftragsliste](1-auftraege-verwalten.md).
2. Klicken Sie auf den gewünschten Auftrag.

   ![Detailansicht eines Auftrags](../screenshots/09-auftrag-detail.png)

## Linke Spalte (Sidebar)

Die linke Spalte zeigt übergeordnete Informationen und Aktionen zum Auftrag:

- **Auftragsart** - Anzeige der Auftragsart als Badge (z. B. Angebot, Rechnung, Auftrag)
- **Status** - Aktueller Bearbeitungsstatus des Auftrags
- **Aktionsschaltflächen** - Speichern, Löschen, Drucken und weitere Aktionen (siehe Abschnitt [Aktionen](#aktionen))
- **Metadaten** - Zusätzliche Informationen wie Erstelldatum und letztes Änderungsdatum

## Mittlerer Bereich (Hauptinhalt)

Der mittlere Bereich enthält die Kerndaten des Auftrags, aufgeteilt in die Abschnitte Kopfdaten, Positionen und Texte.

### Kopfdaten

Die Kopfdaten umfassen alle übergeordneten Informationen zum Auftrag:

| Feld | Beschreibung |
|---|---|
| **Auftragsnummer** | Automatisch vergebene, eindeutige Nummer des Auftrags |
| **Kommission** | Freies Textfeld für eine interne Referenz oder Kommissionsnummer |
| **Rechnungsnummer** | Rechnungsnummer (wird bei Rechnungen und Gutschriften automatisch vergeben) |
| **Kontakt** | Verknüpfter Kunde oder Lieferant; per Klick gelangen Sie direkt zum Kontakt |
| **Rechnungsadresse** | Adresse für die Rechnungsstellung; aus den hinterlegten Adressen des Kontakts wählbar |
| **Lieferadresse** | Adresse für die Lieferung; kann von der Rechnungsadresse abweichen |
| **Zahlungsart** | Vereinbarte Zahlungsart (z. B. Überweisung, Lastschrift, Kreditkarte) |
| **Zahlungsziel** | Zahlungsfrist in Tagen |
| **Bestelldatum** | Datum der Bestellung |
| **Lieferdatum** | Geplantes oder tatsächliches Lieferdatum |
| **Kopfrabatt** | Prozentualer Rabatt, der auf alle Positionen des Auftrags angewendet wird |

> **Hinweis:** Wenn Sie den Kontakt auswählen oder ändern, werden die Rechnungs- und Lieferadresse sowie die Zahlungseinstellungen automatisch aus den Stammdaten des Kontakts übernommen. Sie können diese Werte anschließend manuell anpassen.

### Positionen

Unterhalb der Kopfdaten finden Sie die **Positionen** des Auftrags -- die einzelnen Zeilen mit Produkten, Dienstleistungen oder freien Texten. Eine ausführliche Beschreibung der Positionsverwaltung finden Sie unter [Auftragspositionen](3-auftragspositionen.md).

### Texte

Im Bereich **Texte** können Sie Kopf- und Fußtexte hinterlegen, die auf den generierten Belegen (z. B. Angebots-PDF, Rechnung) erscheinen:

- **Kopftext** - Wird oberhalb der Positionstabelle auf dem Beleg dargestellt (z. B. Einleitungstext, Bezugnahme auf ein Gespräch)
- **Fußtext** - Wird unterhalb der Positionstabelle auf dem Beleg dargestellt (z. B. Lieferbedingungen, Hinweise)

## Rechte Spalte

Die rechte Spalte zeigt eine Zusammenfassung der Beträge sowie verknüpfte Dokumente:

### Betragsübersicht

| Feld | Beschreibung |
|---|---|
| **Netto** | Gesamtbetrag aller Positionen ohne Mehrwertsteuer |
| **MwSt** | Summe der Mehrwertsteuerbeträge |
| **Brutto** | Gesamtbetrag inklusive Mehrwertsteuer |
| **Saldo** | Offener Restbetrag (Brutto abzüglich bereits geleisteter Zahlungen) |

### Verknüpfte Dokumente

Hier sehen Sie alle Aufträge, die mit dem aktuellen Auftrag in einer Belegkette verknüpft sind. Beispiele:

- Das **Angebot**, aus dem der Auftrag erstellt wurde
- Die **Rechnung**, die aus dem Auftrag generiert wurde
- Eine **Gutschrift**, die zu einer Rechnung erstellt wurde

Klicken Sie auf ein verknüpftes Dokument, um direkt zu dessen Detailansicht zu navigieren.

## Aktionen

Je nach Auftragsart und Status stehen verschiedene Aktionen zur Verfügung:

| Aktion | Beschreibung |
|---|---|
| **Speichern** | Übernimmt alle Änderungen am Auftrag |
| **Löschen** | Löscht den Auftrag (nur möglich, wenn keine Folgebelege existieren) |
| **Drucken / PDF** | Erstellt ein PDF-Dokument des Auftrags (Angebot, Rechnung, Lieferschein etc.) |
| **Duplizieren** | Erstellt eine Kopie des Auftrags mit allen Kopfdaten und Positionen |
| **Auftrag erstellen** | Erzeugt aus einem Angebot einen bestätigten Auftrag |
| **Rechnung erstellen** | Generiert aus einem Auftrag eine Rechnung |
| **Lieferschein** | Erstellt einen Lieferschein auf Basis der Auftragspositionen |
| **Zeitplan** | Nur bei Abonnements: Öffnet die Zeitplan-Konfiguration für wiederkehrende Belege |
| **Kündigung** | Nur bei Abonnements: Startet den Kündigungsprozess |

> **Hinweis:** Nicht alle Aktionen sind zu jeder Zeit verfügbar. Die Anzeige passt sich dem aktuellen Status und der Auftragsart an. Die einzelnen Auftragsarten und ihre spezifischen Funktionen sind unter [Auftragsarten](5-auftragsarten/0-index.md) dokumentiert.

## Auftrag bearbeiten

1. Ändern Sie die gewünschten Felder in der Detailansicht.
2. Klicken Sie auf **Speichern**, um die Änderungen zu übernehmen.

## Folgebeleg erstellen

Um aus einem bestehenden Auftrag einen Folgebeleg zu erstellen:

1. Öffnen Sie den Auftrag in der Detailansicht.
2. Klicken Sie auf die gewünschte Aktion (z. B. **Rechnung erstellen**).
3. Der neue Beleg wird mit den Daten des bestehenden Auftrags erstellt und in der Belegkette verknüpft.
4. Sie werden zur Detailansicht des neuen Belegs weitergeleitet.

## Weiterführende Themen

- [Aufträge verwalten](1-auftraege-verwalten.md) - Zurück zur Auftragsliste
- [Auftragspositionen](3-auftragspositionen.md) - Positionen bearbeiten und hinzufügen
- [Kontakte](../2-kontakte/0-index.md) - Verknüpften Kontakt bearbeiten
- [Buchhaltung](../5-buchhaltung/0-index.md) - Zahlungen und Transaktionen verwalten
- [Einstellungen > Auftragsarten](../14-einstellungen/11-auftragsarten.md) - Auftragsarten und Nummernkreise konfigurieren
- [Einstellungen > Zahlungsarten](../14-einstellungen/12-zahlungsarten.md) - Zahlungsarten einrichten
