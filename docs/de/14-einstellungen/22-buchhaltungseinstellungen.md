# Buchhaltungseinstellungen

Die Buchhaltungseinstellungen steuern grundlegende Automatismen und Verhaltensweisen im Buchhaltungsmodul. Hier legen Sie fest, wie das System mit Transaktionszuordnungen und Mahnungen umgeht.

## Übersicht

1. Navigieren Sie zu **Einstellungen > Buchhaltung > Buchhaltungseinstellungen**.

   ![Buchhaltungseinstellungen](../screenshots/70-einstellungen-buchhaltungseinstellungen.png)

2. Die Seite zeigt verschiedene Einstellungsoptionen für die Buchhaltung.

## Verfügbare Einstellungen

### Automatische Transaktionszuordnung

**Automatisch sichere Transaktionszuordnungen akzeptieren** - Wenn aktiviert, werden Transaktionen automatisch als akzeptiert markiert, sobald das System eine eindeutige Zuordnung zu einem Auftrag findet. Dies spart Zeit bei der manuellen Prüfung offensichtlicher Zahlungseingänge.

Voraussetzungen für automatische Akzeptanz:
- Betrag der Transaktion stimmt exakt mit offener Rechnungssumme überein
- Rechnungsnummer oder eindeutige Referenz im Verwendungszweck
- Keine Konflikte mit anderen offenen Aufträgen

### Automatischer Mahnversand

**Automatisch Mahnungen versenden** - Aktivieren Sie diese Option, damit das System fällige Mahnungen automatisch per E-Mail versendet. Die Mahnläufe werden täglich durchgeführt und prüfen alle Aufträge mit überschrittenem Zahlungsziel.

Voraussetzungen für automatischen Versand:
- Zahlungsziel ist überschritten
- Mahnstufe und Mahnfristen sind konfiguriert
- E-Mail-Adresse des Kunden ist hinterlegt
- Mahntexte für entsprechende Stufe sind angelegt

## Einstellungen anpassen

1. Aktivieren oder deaktivieren Sie die gewünschten Optionen durch Umschalten der Schalter.
2. Klicken Sie auf **Speichern**, um die Änderungen zu übernehmen.

## Empfohlene Einstellungen

Für einen effizienten Buchhaltungsworkflow empfehlen wir:

- **Automatische Transaktionszuordnung aktivieren** - Bei hohem Zahlungsaufkommen und eindeutigen Referenzen
- **Automatischer Mahnversand prüfen** - Nur aktivieren, wenn Mahntexte geprüft und Prozesse etabliert sind

> **Hinweis:** Die automatische Transaktionszuordnung kann bei unklaren Zahlungseingängen zu Fehlzuordnungen führen. Prüfen Sie regelmäßig die automatisch zugeordneten Transaktionen. Der automatische Mahnversand sollte erst nach gründlicher Prüfung der Mahntexte und Einstellungen aktiviert werden, da Mahnungen rechtliche Konsequenzen haben können.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [Buchhaltung](../5-buchhaltung/0-index.md) - Buchhaltungsmodul verwenden
- [Transaktionen](../5-buchhaltung/4-transaktionen.md) - Transaktionszuordnung verwalten
- [Mahneinstellungen](24-mahneinstellungen.md) - Mahnwesen konfigurieren
- [Mahntexte](23-mahntexte.md) - Mahntexte verwalten
