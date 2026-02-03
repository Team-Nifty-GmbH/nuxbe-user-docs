# Buchhaltung

Im Modul **Buchhaltung** verwalten Sie alle finanziellen Abläufe Ihres Unternehmens. Dazu gehören die Erfassung und Zuordnung von Banktransaktionen, die Verwaltung von Eingangsrechnungen mit KI-gestützter Belegverarbeitung, das Mahnwesen für überfällige Rechnungen, die Provisionsverwaltung sowie die Abwicklung von Zahlungen über SEPA-Lastschriften und -Überweisungen.

## Übersicht

Navigieren Sie über die Sidebar zu **Buchhaltung**. Das Untermenü enthält folgende Bereiche:

- **Provisionen** - Provisionsverwaltung für Vertriebsmitarbeiter mit Zuordnung zu Aufträgen und Abrechnungsstatus
- **Mahnungen** - Mahnwesen für offene Rechnungen mit konfigurierbaren Mahnstufen, automatischem Mahnlauf und Versand per E-Mail oder PDF
- **Eingangsrechnungen** - Erfassung und Verwaltung von Lieferantenrechnungen mit KI/OCR-Erkennung, Genehmigungsworkflow und Buchung auf Sachkonten
- **Transaktionen** - Banktransaktionen und Kontobewegungen, die automatisch über HBCI/FinTS importiert werden
- **Transaktionszuordnungen** - Zuordnung von Banktransaktionen zu Aufträgen und Rechnungen mit Vorschlägen auf Basis von Verwendungszweck und Betrag
- **Lastschriften** - SEPA-Lastschrifteinzüge für offene Rechnungen erstellen und verwalten
- **Überweisungen** - SEPA-Überweisungen an Lieferanten erstellen und verwalten
- **Zahlungsläufe** - Mehrere Lastschriften oder Überweisungen zu einem Sammellauf zusammenfassen und als SEPA-XML-Datei für den Bankupload exportieren

## Zusammenspiel der Bereiche

Die Bereiche der Buchhaltung greifen eng ineinander:

1. **Transaktionen** werden automatisch von der Bank importiert und erscheinen in der Transaktionsliste.
2. Über **Transaktionszuordnungen** werden diese Transaktionen den passenden Aufträgen und Rechnungen zugeordnet.
3. **Eingangsrechnungen** von Lieferanten werden erfasst, geprüft und verbucht.
4. Für offene Kundenrechnungen können **Lastschriften** erstellt werden, für offene Lieferantenrechnungen **Überweisungen**.
5. Mehrere Lastschriften oder Überweisungen werden in einem **Zahlungslauf** zusammengefasst und als SEPA-Datei exportiert.
6. Überfällige Rechnungen werden über das **Mahnwesen** automatisch gemahnt.
7. **Provisionen** für Vertriebsmitarbeiter werden auf Basis der abgeschlossenen Aufträge berechnet und abgerechnet.

## Seiten in diesem Kapitel

- [Provisionen](1-provisionen.md) - Provisionsabrechnungen für Vertriebsmitarbeiter verwalten
- [Mahnungen](2-mahnungen.md) - Mahnwesen für offene Rechnungen mit Mahnstufen und automatischem Mahnlauf
- [Eingangsrechnungen](3-eingangsrechnungen.md) - Lieferantenrechnungen mit KI/OCR erfassen und verbuchen
- [Transaktionen](4-transaktionen.md) - Banktransaktionen anzeigen und durchsuchen
- [Transaktionszuordnungen](5-transaktionszuordnungen.md) - Transaktionen Aufträgen zuordnen
- [Lastschriften](6-lastschriften.md) - SEPA-Lastschrifteinzüge verwalten
- [Überweisungen](7-ueberweisungen.md) - SEPA-Überweisungen verwalten
- [Zahlungsläufe](8-zahlungslaeufe.md) - Sammelzahlungen verarbeiten und SEPA-Dateien exportieren
- [Zahlungslauf-Vorschau](9-zahlungslauf-vorschau.md) - Zahlungen vor dem Ausführen prüfen und auswählen

## Weiterführende Themen

- [Aufträge](../4-auftraege/0-index.md) - Aufträge und Rechnungen erstellen
- [Kontakte](../2-kontakte/0-index.md) - Kunden- und Lieferantendaten verwalten
- [Einstellungen > Zahlungsarten](../14-einstellungen/12-zahlungsarten.md) - Zahlungsarten konfigurieren
