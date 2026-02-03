# Eingangsrechnungen

Im Bereich **Eingangsrechnungen** erfassen und verwalten Sie Rechnungen von Lieferanten. Das System unterstützt den automatischen Upload von Belegdokumenten mit KI/OCR-Erkennung, einen Genehmigungsworkflow sowie die positionsweise Buchung auf Sachkonten mit korrekter Mehrwertsteuerbehandlung.

## Übersicht

1. Navigieren Sie zu **Buchhaltung > Eingangsrechnungen**.

   ![Eingangsrechnungsliste](../screenshots/27-eingangsrechnungen-liste.png)

2. Die Tabelle zeigt alle erfassten Eingangsrechnungen mit folgenden Spalten:
   - **Lieferant** - Name des Lieferanten bzw. Rechnungsstellers
   - **Rechnungsnummer** - Rechnungsnummer des Lieferanten
   - **Rechnungsdatum** - Datum der Rechnung
   - **Nettobetrag** - Rechnungsbetrag ohne Mehrwertsteuer
   - **Bruttobetrag** - Rechnungsbetrag inklusive Mehrwertsteuer
   - **Status** - Aktueller Bearbeitungsstatus der Eingangsrechnung

## Status-Workflow

Eingangsrechnungen durchlaufen einen definierten Workflow:

| Status | Bedeutung |
|---|---|
| **Neu** | Die Rechnung wurde hochgeladen oder manuell angelegt, aber noch nicht geprüft |
| **In Prüfung** | Die Rechnungsdaten werden geprüft und ggf. korrigiert |
| **Genehmigt** | Die Rechnung wurde geprüft und zur Verbuchung freigegeben |
| **Verbucht** | Die Rechnung wurde in der Buchhaltung verbucht |

## Neue Eingangsrechnung erfassen

### Dokument hochladen mit KI/OCR-Erkennung

1. Klicken Sie auf **Neu**.
2. Laden Sie das Rechnungsdokument hoch (PDF oder Bilddatei).
3. Das System verarbeitet den Beleg automatisch per KI/OCR und extrahiert die folgenden Daten:
   - **Lieferant** - Name und Anschrift des Rechnungsstellers
   - **Rechnungsnummer** - Rechnungsnummer auf dem Beleg
   - **Rechnungsdatum** - Datum der Rechnung
   - **Betrag** - Netto- und Bruttobetrag
4. Prüfen Sie die automatisch erkannten Daten und korrigieren Sie diese bei Bedarf manuell.
5. Klicken Sie auf **Speichern**.

> **Hinweis:** Die KI/OCR-Erkennung liefert in den meisten Fällen korrekte Ergebnisse. Dennoch sollten Sie die extrahierten Daten immer mit dem Originaldokument abgleichen und bei Abweichungen manuell korrigieren.

### Manuelle Erfassung

Falls Sie die Daten ohne Dokumentenupload erfassen möchten:

1. Klicken Sie auf **Neu**.
2. Ordnen Sie die Rechnung einem **Lieferanten** (Kontakt) zu.
3. Geben Sie **Rechnungsnummer**, **Rechnungsdatum**, **Betrag** und weitere Daten manuell ein.
4. Klicken Sie auf **Speichern**.

## Eingangsrechnung bearbeiten

Klicken Sie auf eine Eingangsrechnung in der Liste, um die Detailansicht zu öffnen. In der Detailansicht sehen Sie links den hochgeladenen Beleg im Medien-Viewer und rechts das Erfassungsformular. So können Sie das Originaldokument direkt neben den erfassten Daten prüfen.

### Positionen und Sachkonten

Jede Eingangsrechnung kann eine oder mehrere Positionen enthalten. Für jede Position können Sie Folgendes festlegen:

- **Sachkonto (Ledger Account)** - Das Buchungskonto, auf dem die Position verbucht werden soll
- **Betrag** - Der Nettobetrag der Position
- **Mehrwertsteuersatz** - Der anzuwendende MwSt.-Satz (z. B. 19 %, 7 % oder 0 %)
- **Beschreibung** - Eine optionale Beschreibung der Position

Durch die positionsweise Buchung können Sie eine Eingangsrechnung auf mehrere Sachkonten aufteilen, beispielsweise wenn eine Rechnung sowohl Büromaterial als auch Reisekosten enthält.

## Eingangsrechnung verarbeiten

1. Öffnen Sie eine Eingangsrechnung mit dem Status **Neu** oder **In Prüfung**.
2. Prüfen Sie die Kopfdaten (Lieferant, Rechnungsnummer, Datum, Betrag).
3. Prüfen und ergänzen Sie die Positionen mit den korrekten Sachkonten und Mehrwertsteuersätzen.
4. Klicken Sie auf **Verarbeiten**, um die Rechnung in der Buchhaltung zu verbuchen.

### Alle neuen Rechnungen auf einmal verarbeiten

Wenn Sie mehrere neue Eingangsrechnungen auf einmal verarbeiten möchten, können Sie die Funktion **Alle neuen verarbeiten** verwenden. Das System verarbeitet dann alle Eingangsrechnungen mit dem Status **Neu** in einem Durchlauf. Voraussetzung ist, dass alle erforderlichen Daten (Lieferant, Sachkonten, Beträge) vollständig erfasst sind.

## Weiterführende Themen

- [Buchhaltung](0-index.md) - Zurück zur Buchhaltungsübersicht
- [Kontakte](../2-kontakte/0-index.md) - Lieferantendaten verwalten
- [Überweisungen](7-ueberweisungen.md) - Überweisungen an Lieferanten erstellen
- [Zahlungsläufe](8-zahlungslaeufe.md) - Sammelüberweisungen für Eingangsrechnungen
