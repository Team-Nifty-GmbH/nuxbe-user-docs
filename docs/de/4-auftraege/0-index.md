# Aufträge

Im Modul **Aufträge** verwalten Sie den gesamten Auftragszyklus -- von der Angebotserstellung über die Auftragsbestätigung und Rechnungsstellung bis hin zu Gutschriften und Retouren. Aufträge sind das zentrale Element der Warenwirtschaft und verbinden Kontakte, Produkte und Buchhaltung miteinander.

## Übersicht

Navigieren Sie über die Sidebar zu **Aufträge**. Sie sehen eine tabellarische Übersicht aller Aufträge, die über Reiter nach Auftragsart gefiltert werden kann.

![Auftragsliste mit allen Auftragsarten](../screenshots/08-auftraege-liste.png)

## Auftragsarten

Nuxbe unterstützt verschiedene Auftragsarten, die jeweils einen eigenen Nummernkreis und spezifische Funktionen besitzen:

| Auftragsart | Beschreibung |
|---|---|
| **Angebot** | Unverbindliches Angebot an einen Kunden; kann in einen Auftrag umgewandelt werden |
| **Auftrag** | Bestätigung eines Kundenauftrags; Basis für Lieferung und Rechnungsstellung |
| **Rechnung** | Abrechnung gegenüber dem Kunden; wird aus einem Auftrag generiert |
| **Gutschrift** | Korrekturbeleg für eine bestehende Rechnung (z. B. bei Reklamation) |
| **Abonnement** | Wiederkehrender Auftrag, der in regelmäßigen Intervallen automatisch abgerechnet wird |
| **Retoure** | Rücksendung von Waren durch den Kunden |
| **Einkauf** | Bestellung bei einem Lieferanten |

> **Hinweis:** Die verfügbaren Auftragsarten und deren Nummernkreise können in den [Einstellungen > Auftragsarten](../14-einstellungen/11-auftragsarten.md) konfiguriert werden.

## Auftragszyklus

Ein typischer Auftragszyklus sieht wie folgt aus:

1. **Angebot erstellen** - Ein Angebot wird für den Kunden erstellt und versendet.
2. **Auftrag generieren** - Nach Annahme des Angebots wird daraus ein Auftrag erstellt.
3. **Positionen pflegen** - Produkte und Dienstleistungen werden als Positionen hinzugefügt.
4. **Rechnung erstellen** - Aus dem Auftrag wird eine Rechnung generiert.
5. **Zahlung erfassen** - Eingehende Zahlungen werden in der Buchhaltung zugeordnet.

## Detailansicht

Klicken Sie auf einen Auftrag, um die Detailansicht zu öffnen.

![Detailansicht eines Auftrags](../screenshots/09-auftrag-detail.png)

Die Detailansicht gliedert sich in ein Drei-Spalten-Layout:

| Bereich | Inhalt |
|---|---|
| **Linke Spalte (Sidebar)** | Auftragsart, Status, Aktionsschaltflächen und Metadaten |
| **Mittlerer Bereich** | Kopfdaten, Positionen und Texte |
| **Rechte Spalte** | Betragsüberblick (Netto, MwSt, Brutto, Saldo) und verknüpfte Dokumente |

## SEPA-Unterstützung

Für den Zahlungsverkehr unterstützt Nuxbe SEPA-Lastschriften und SEPA-Überweisungen. Die entsprechenden Funktionen finden Sie im Modul [Buchhaltung](../5-buchhaltung/0-index.md).

## Seiten in diesem Kapitel

- [Aufträge verwalten](1-auftraege-verwalten.md) - Auftragsliste, Suche und Filter
- [Auftragsdetails](2-auftrag-detail.md) - Detailansicht eines Auftrags mit Drei-Spalten-Layout
- [Auftragspositionen](3-auftragspositionen.md) - Positionen innerhalb eines Auftrags verwalten
- [Auftragspositionen-Liste](4-auftragspositionen-liste.md) - Alle Positionen auftragsübergreifend durchsuchen

## Weiterführende Themen

- [Kontakte](../2-kontakte/0-index.md) - Kunden und Lieferanten verwalten
- [Verkauf](../3-verkauf/0-index.md) - Leads und Vertriebspipeline
- [Produkte](../6-produkte/0-index.md) - Produkte für Auftragspositionen
- [Buchhaltung](../5-buchhaltung/0-index.md) - Transaktionen und Zahlungszuordnungen
- [Einstellungen > Auftragsarten](../14-einstellungen/11-auftragsarten.md) - Auftragsarten und Nummernkreise konfigurieren
- [Einstellungen > Zahlungsarten](../14-einstellungen/12-zahlungsarten.md) - Zahlungsarten einrichten
- [Einstellungen > Preislisten](../14-einstellungen/15-preislisten.md) - Preislisten verwalten
