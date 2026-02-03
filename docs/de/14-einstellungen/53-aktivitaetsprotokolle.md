# Aktivitätsprotokolle

Die Aktivitätsprotokolle dokumentieren alle wichtigen Benutzeraktivitäten in der Anwendung. Diese Audit-Trail-Funktion ermöglicht die Nachverfolgung von Änderungen und dient der Transparenz und Compliance.

## Navigation

1. Navigieren Sie zu **Einstellungen > System > Aktivitätsprotokolle**.

   ![Aktivitätsprotokolle](../screenshots/71-einstellungen-aktivitaetsprotokolle.png)

2. Die Tabelle zeigt alle protokollierten Aktivitäten chronologisch sortiert.

## Übersicht

Die Aktivitätsprotokolle erfassen automatisch wichtige Benutzeraktionen.

### Spalten der Protokoll-Liste

- **Zeitpunkt** - Wann die Aktivität stattfand (Datum und Uhrzeit)
- **Benutzer** - Wer die Aktion durchgeführt hat
- **Beschreibung** - Was gemacht wurde (z.B. "Rechnung erstellt", "Kunde bearbeitet")
- **Typ** - Die Art der Aktion (erstellt, aktualisiert, gelöscht, etc.)
- **Betroffenes Objekt** - Auf welchen Datensatz sich die Aktion bezieht
- **Eigenschaften** - Zusätzliche Details oder geänderte Werte
- **IP-Adresse** - Von welcher IP-Adresse die Aktion kam

## Protokollierte Aktivitäten

Die Anwendung protokolliert folgende Aktivitätstypen:

### Erstellen (created)

Wird protokolliert, wenn neue Datensätze angelegt werden:
- Neue Kunden, Lieferanten, Kontakte
- Neue Angebote, Aufträge, Rechnungen
- Neue Produkte, Artikel
- Neue Benutzer, Rollen, Berechtigungen

### Aktualisieren (updated)

Wird protokolliert, wenn bestehende Datensätze geändert werden:
- Änderungen an Kundendaten
- Statusänderungen bei Aufträgen
- Preisänderungen bei Produkten
- Bearbeitung von Stammdaten

### Löschen (deleted)

Wird protokolliert, wenn Datensätze gelöscht werden:
- Gelöschte Kontakte oder Adressen
- Stornierte Aufträge oder Angebote
- Entfernte Benutzer oder Rollen
- Gelöschte Produkte oder Artikel

### Wiederherstellen (restored)

Wird protokolliert, wenn gelöschte Datensätze wiederhergestellt werden:
- Wiederherstellung aus dem Papierkorb
- Rücknahme von Löschungen

### Anmelden (login)

Protokolliert erfolgreiche Benutzeranmeldungen:
- Zeitpunkt der Anmeldung
- Verwendetes Gerät und Browser
- IP-Adresse

### Abmelden (logout)

Protokolliert Benutzerabmeldungen und Session-Beendigungen.

## Aktivität-Details anzeigen

Um vollständige Informationen zu einer Aktivität zu sehen:

1. Klicken Sie in der Liste auf **Details anzeigen** oder auf die Zeile der Aktivität.
2. Ein Dialog öffnet sich mit erweiterten Informationen:
   - **Vollständige Beschreibung** - Detaillierte Erklärung der Aktion
   - **Vorherige Werte** - Die Werte vor der Änderung
   - **Neue Werte** - Die Werte nach der Änderung
   - **Geänderte Felder** - Welche Eigenschaften konkret geändert wurden
   - **Zusätzlicher Kontext** - Weitere relevante Informationen
3. Klicken Sie auf **Schließen**, um den Dialog zu schließen.

Die Änderungshistorie zeigt genau, welche Felder von welchen Werten auf welche neuen Werte geändert wurden.

## Aktivitäten filtern

Bei umfangreichen Protokollen können Sie die Anzeige einschränken:

### Nach Benutzer filtern

1. Verwenden Sie das Feld **Benutzer** oberhalb der Tabelle.
2. Wählen Sie einen oder mehrere Benutzer aus.
3. Die Liste zeigt nur Aktivitäten dieser Benutzer.

### Nach Zeitraum filtern

1. Verwenden Sie die Felder **Von** und **Bis**.
2. Wählen Sie Start- und Enddatum.
3. Optional: Wählen Sie auch die Uhrzeit.
4. Die Liste zeigt nur Aktivitäten aus diesem Zeitraum.

### Nach Aktivitätstyp filtern

1. Verwenden Sie das Feld **Typ**.
2. Wählen Sie eine oder mehrere Aktionsarten (erstellt, aktualisiert, gelöscht).
3. Die Liste zeigt nur passende Aktivitäten.

### Nach Objekt filtern

1. Verwenden Sie das Feld **Modul** oder **Objekttyp**.
2. Wählen Sie einen Bereich (z.B. Kunden, Rechnungen, Produkte).
3. Die Liste zeigt nur Aktivitäten zu diesem Objekttyp.

### Textsuche

1. Verwenden Sie das Suchfeld.
2. Geben Sie einen Suchbegriff ein (z.B. Kundennummer, Produktname).
3. Die Liste zeigt alle Aktivitäten, die den Begriff enthalten.

Sie können mehrere Filter gleichzeitig verwenden, um sehr spezifische Aktivitäten zu finden.

## Aktivitäten exportieren

Sie können Aktivitätsprotokolle für externe Analysen exportieren:

1. Wenden Sie die gewünschten Filter an.
2. Klicken Sie auf **Exportieren**.
3. Wählen Sie ein Format (CSV, Excel, PDF).
4. Die gefilterten Daten werden heruntergeladen.

Exporte enthalten alle sichtbaren Spalten und Details der Aktivitäten.

## Protokoll-Aufbewahrung

Aktivitätsprotokolle werden standardmäßig unbegrenzt gespeichert. Aus Datenschutz- und Performance-Gründen können Sie eine automatische Bereinigung konfigurieren:

1. Navigieren Sie zu **Einstellungen > System > Kerneinstellungen**.
2. Setzen Sie **Protokoll-Aufbewahrungsdauer** (z.B. 365 Tage).
3. Klicken Sie auf **Speichern**.

Ältere Protokolle werden dann automatisch gelöscht.

> **Compliance:** Beachten Sie gesetzliche Aufbewahrungsfristen für Audit-Logs in Ihrer Branche, bevor Sie eine automatische Löschung aktivieren.

## Verwendungszwecke

Aktivitätsprotokolle sind nützlich für:

### Sicherheit und Compliance

- Nachweis, wer wann welche Änderungen vorgenommen hat
- Erfüllung von Audit-Anforderungen
- Nachvollziehbarkeit für Datenschutz-Compliance (DSGVO)

### Fehlersuche

- Nachvollziehen, wann ein Datensatz geändert wurde
- Identifizieren, wer eine fehlerhafte Änderung vorgenommen hat
- Verstehen, welche Schritte zu einem Problem geführt haben

### Qualitätssicherung

- Überwachung der Benutzeraktivitäten
- Erkennung ungewöhnlicher Muster
- Schulungsbedarf identifizieren

### Konfliktlösung

- Klärung bei Uneinigkeiten über Änderungen
- Beweis für durchgeführte oder nicht durchgeführte Aktionen
- Wiederherstellung versehentlich gelöschter Informationen

## Datenschutz

> **Datenschutz:** Aktivitätsprotokolle enthalten personenbezogene Daten (Benutzer, IP-Adressen). Behandeln Sie diese Informationen vertraulich und gewähren Sie nur befugten Personen Zugriff.

Zugriff auf Aktivitätsprotokolle sollte auf folgende Personengruppen beschränkt sein:
- Systemadministratoren
- Compliance-Beauftragte
- Datenschutzbeauftragte
- Geschäftsleitung (bei Bedarf)

## Wichtige Hinweise

> **Hinweis:** Nicht alle Aktionen werden protokolliert. Lesezugriffe (z.B. Ansehen von Datensätzen) werden aus Performance-Gründen normalerweise nicht erfasst.

> **Automatisch:** Die Protokollierung erfolgt vollautomatisch. Benutzer können ihre eigenen Aktivitäten nicht verbergen oder löschen.

> **Tipp:** Nutzen Sie die Exportfunktion, um regelmäßige Berichte für Compliance-Zwecke zu erstellen.

> **Performance:** Bei sehr großen Datenmengen kann die Anzeige verzögert sein. Verwenden Sie Filter, um die Datenmenge zu reduzieren.

> **Unveränderlich:** Aktivitätsprotokolle können nicht nachträglich bearbeitet werden. Sie sind schreibgeschützt, um Manipulationen zu verhindern.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [Protokolle](54-protokolle.md) - System- und Fehlerprotokolle
- [Benutzer](../14-einstellungen/39-benutzer.md) - Benutzerverwaltung
- [Berechtigungen](../14-einstellungen/40-berechtigungen.md) - Zugriffskontrolle
