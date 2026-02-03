# Mahnungen

Im Bereich **Mahnungen** verwalten Sie das Mahnwesen für offene Rechnungen. Das System unterstützt mehrere Mahnstufen mit konfigurierbaren Texten und Gebühren sowie einen automatischen Mahnlauf, der überfällige Rechnungen erkennt und Mahnungen erzeugt.

## Übersicht

1. Navigieren Sie zu **Buchhaltung > Mahnungen**.

   ![Mahnungsliste](../screenshots/26-mahnungen-liste.png)

2. Die Tabelle zeigt alle Mahnungen mit folgenden Spalten:
   - **Kontakt** - Name des Kunden, der gemahnt wird
   - **Rechnungsnummer** - Nummer der überfälligen Rechnung
   - **Rechnungsdatum** - Datum der ursprünglichen Rechnung
   - **Offener Betrag** - Noch ausstehender Rechnungsbetrag
   - **Mahnstufe** - Aktuelle Stufe der Mahnung (1. Mahnung, 2. Mahnung, 3. Mahnung)
   - **Letzte Mahnung** - Datum, an dem die letzte Mahnung versendet wurde

## Mahnstufen

Das Mahnwesen arbeitet mit konfigurierbaren Mahnstufen. Jede Stufe kann eigene Texte und Gebühren enthalten:

| Mahnstufe | Beschreibung | Typische Frist |
|---|---|---|
| **1. Mahnung** | Freundliche Zahlungserinnerung ohne zusätzliche Gebühren | Nach Ablauf des Zahlungsziels |
| **2. Mahnung** | Nachdrückliche Mahnung, ggf. mit Mahngebühren | Einige Wochen nach der 1. Mahnung |
| **3. Mahnung** | Letzte Mahnung vor weiteren Maßnahmen, mit erhöhten Mahngebühren | Einige Wochen nach der 2. Mahnung |

Die Mahntexte und Mahngebühren je Stufe können Sie in den Einstellungen konfigurieren. So lässt sich der Ton der Mahnungen von einer freundlichen Erinnerung bis hin zu einer nachdrücklichen letzten Aufforderung abstufen.

## Mahnlauf durchführen

Beim automatischen Mahnlauf prüft das System alle offenen Rechnungen und erzeugt Mahnungen für überfällige Positionen:

1. Klicken Sie auf **Mahnlauf starten**.
2. Das System prüft alle offenen Rechnungen, deren Zahlungsziel überschritten ist.
3. Für jede überfällige Rechnung wird automatisch eine Mahnung in der entsprechenden Mahnstufe erzeugt.
4. Prüfen Sie die erzeugten Mahnungen in der Liste.
5. Versenden Sie die Mahnungen per E-Mail oder drucken Sie diese als PDF aus.

> **Hinweis:** Der Mahnlauf berücksichtigt die aktuelle Mahnstufe jeder Rechnung. Wurde bereits eine 1. Mahnung versendet und die Rechnung ist weiterhin offen, wird automatisch die 2. Mahnung erzeugt.

## Mahnungen versenden

Für den Versand stehen Ihnen zwei Wege zur Verfügung:

- **Per E-Mail** - Die Mahnung wird als E-Mail an die hinterlegte Kontaktadresse versendet
- **Als PDF drucken** - Die Mahnung wird als PDF-Dokument erzeugt und kann ausgedruckt und per Post versendet werden

## Aufträge vom Mahnwesen ausschließen

In bestimmten Fällen möchten Sie einzelne Aufträge oder Rechnungen vom automatischen Mahnwesen ausschließen, beispielsweise bei laufenden Reklamationen oder vereinbarten Ratenzahlungen. Dies kann direkt am jeweiligen Auftrag eingestellt werden.

## Mahngebühren

Mahngebühren werden je Mahnstufe konfiguriert und automatisch auf den offenen Betrag aufgeschlagen. Die Höhe der Gebühren können Sie in den Einstellungen für jede Mahnstufe individuell festlegen.

## Weiterführende Themen

- [Buchhaltung](0-index.md) - Zurück zur Buchhaltungsübersicht
- [Aufträge](../4-auftraege/0-index.md) - Zugehörige Rechnungen einsehen
- [Kontakte](../2-kontakte/0-index.md) - Kundendaten und Zahlungsziele verwalten
