# Überweisungen

Im Bereich **Überweisungen** erstellen und verwalten Sie SEPA-Überweisungen an Lieferanten. Überweisungen werden typischerweise aus Eingangsrechnungen heraus erstellt, um offene Lieferantenrechnungen zu begleichen.

## Übersicht

1. Navigieren Sie zu **Buchhaltung > Überweisung**.

   ![Überweisungsliste](../screenshots/30-ueberweisungen-liste.png)

2. Die Tabelle zeigt alle geplanten und durchgeführten Überweisungen mit folgenden Spalten:
   - **Empfänger** - Name des Zahlungsempfängers (Lieferant)
   - **IBAN** - IBAN des Empfängerkontos
   - **Betrag** - Überweisungsbetrag
   - **Verwendungszweck** - Verwendungszweck der Überweisung (z. B. Rechnungsnummer des Lieferanten)
   - **Status** - Aktueller Status der Überweisung

## Überweisung erstellen

### Einzelne Überweisung

1. Klicken Sie auf **Neu**.
2. Wählen Sie den Empfänger (Lieferant/Kontakt) aus.
3. Geben Sie den Betrag und den Verwendungszweck ein.
4. Prüfen Sie die IBAN des Empfängers.
5. Klicken Sie auf **Speichern**.

### Überweisungen aus Eingangsrechnungen erstellen

Der übliche Weg ist die Erstellung von Überweisungen direkt aus verarbeiteten Eingangsrechnungen. Dabei werden Empfänger, Betrag und Verwendungszweck automatisch aus der Eingangsrechnung übernommen.

### Überweisungen im Stapel erstellen

Bei mehreren offenen Lieferantenrechnungen können Sie die Überweisungen im Stapel erstellen. Das System erzeugt dann für jede ausgewählte Eingangsrechnung automatisch eine Überweisung mit den korrekten Daten.

## Überweisungen in einem Zahlungslauf zusammenfassen

Einzelne Überweisungen werden in der Regel nicht einzeln an die Bank übermittelt, sondern in einem **Zahlungslauf** zusammengefasst. Siehe [Zahlungsläufe](8-zahlungslaeufe.md) für weitere Informationen.

## Weiterführende Themen

- [Buchhaltung](0-index.md) - Zurück zur Buchhaltungsübersicht
- [Zahlungsläufe](8-zahlungslaeufe.md) - Sammelzahlungen verarbeiten und SEPA-Datei exportieren
- [Eingangsrechnungen](3-eingangsrechnungen.md) - Lieferantenrechnungen erfassen und verarbeiten
- [Kontakte](../2-kontakte/0-index.md) - Lieferantendaten und Bankverbindungen verwalten
