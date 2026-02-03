# Mahneinstellungen

Die Mahneinstellungen legen fest, wann und wie Mahnungen erstellt werden. Sie konfigurieren hier die zeitlichen Abstände zwischen den Mahnstufen sowie die Mahngebühren.

## Übersicht

1. Navigieren Sie zu **Einstellungen > Buchhaltung > Mahneinstellungen**.

   ![Mahneinstellungen](../screenshots/105-einstellungen-mahneinstellungen.png)

2. Die Seite zeigt Einstellungsfelder für die Mahnfristen und Gebühren.

## Mahnfristen konfigurieren

Mahnfristen bestimmen, wann eine Mahnung fällig wird. Die Berechnung erfolgt ab dem Fälligkeitsdatum der Rechnung.

### Zahlungsziel

**Standard-Zahlungsziel in Tagen** - Anzahl der Tage nach Rechnungsdatum, bis die Zahlung fällig ist (Standard: 14 Tage). Dieses Zahlungsziel wird verwendet, wenn beim Auftrag kein abweichendes Zahlungsziel hinterlegt ist.

### Mahnfristen pro Stufe

Für jede Mahnstufe können Sie individuelle Fristen festlegen:

- **Frist für Mahnstufe 1** - Tage nach Fälligkeit bis zur ersten Mahnung (z. B. 7 Tage)
- **Frist für Mahnstufe 2** - Tage nach erster Mahnung bis zur zweiten Mahnung (z. B. 14 Tage)
- **Frist für Mahnstufe 3** - Tage nach zweiter Mahnung bis zur dritten Mahnung (z. B. 14 Tage)

## Mahngebühren festlegen

Mahngebühren werden dem offenen Betrag hinzugefügt und können pro Mahnstufe unterschiedlich hoch sein.

- **Gebühr Mahnstufe 1** - Betrag in Euro (z. B. 5,00 EUR)
- **Gebühr Mahnstufe 2** - Betrag in Euro (z. B. 10,00 EUR)
- **Gebühr Mahnstufe 3** - Betrag in Euro (z. B. 15,00 EUR)

### Verzugszinsen

**Verzugszinssatz** - Jährlicher Zinssatz für Zahlungsverzug in Prozent (z. B. 9,00 % über Basiszinssatz). Verzugszinsen werden ab Fälligkeit berechnet und auf der Mahnung ausgewiesen.

## Einstellungen anpassen

1. Tragen Sie die gewünschten Werte in die entsprechenden Felder ein.
2. Klicken Sie auf **Speichern**, um die Änderungen zu übernehmen.

## Beispielkonfiguration

Ein typisches Mahnwesen könnte so aussehen:

- **Zahlungsziel:** 14 Tage
- **Mahnstufe 1:** 7 Tage nach Fälligkeit, keine Gebühr (freundliche Erinnerung)
- **Mahnstufe 2:** 14 Tage nach Stufe 1, 5,00 EUR Gebühr
- **Mahnstufe 3:** 14 Tage nach Stufe 2, 10,00 EUR Gebühr
- **Verzugszinsen:** 9,00 % p.a.

## Zeitlicher Ablauf

Bei obiger Konfiguration ergibt sich folgender Ablauf für eine Rechnung vom 01.01.:

1. **Rechnungsdatum:** 01.01.
2. **Fälligkeit:** 15.01. (14 Tage Zahlungsziel)
3. **1. Mahnung fällig:** 22.01. (7 Tage nach Fälligkeit)
4. **2. Mahnung fällig:** 05.02. (14 Tage nach 1. Mahnung)
5. **3. Mahnung fällig:** 19.02. (14 Tage nach 2. Mahnung)

> **Hinweis:** Mahngebühren und Verzugszinsen unterliegen gesetzlichen Regelungen. Informieren Sie sich über zulässige Höchstbeträge in Ihrem Land. Überhöhte Gebühren können unwirksam sein. Die Mahnfristen sollten angemessen sein und dem Schuldner ausreichend Zeit zur Zahlung geben. Diese Einstellungen gelten als Standard für alle Aufträge, können aber bei einzelnen Aufträgen individuell angepasst werden.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [Mahnungen](../5-buchhaltung/2-mahnungen.md) - Mahnungen verwalten
- [Mahntexte](23-mahntexte.md) - Mahntexte verwalten
- [Buchhaltungseinstellungen](22-buchhaltungseinstellungen.md) - Automatischen Mahnversand konfigurieren
