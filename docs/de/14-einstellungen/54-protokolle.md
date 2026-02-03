# System-Protokolle

Die System-Protokolle dokumentieren technische Ereignisse, Fehler und Debug-Informationen der Anwendung. Diese Logs sind essentiell für die Fehlersuche und Systemüberwachung.

## Navigation

1. Navigieren Sie zu **Einstellungen > System > Protokolle**.

   ![System-Protokolle](../screenshots/90-einstellungen-protokolle.png)

2. Die Übersicht zeigt die aktuellen Log-Dateien mit Filteroptionen nach Schweregrad und Zeitraum.

## Übersicht

Die Protokoll-Übersicht zeigt Systemmeldungen in chronologischer Reihenfolge.

### Spalten der Protokoll-Liste

- **Zeitstempel** - Wann das Ereignis auftrat (Datum und Uhrzeit mit Millisekunden)
- **Schweregrad** - Die Wichtigkeit der Meldung (siehe unten)
- **Nachricht** - Eine Beschreibung des Ereignisses
- **Kontext** - Zusätzliche Informationen (Benutzer, URL, Parameter)
- **Umgebung** - In welcher Umgebung das Ereignis auftrat (production, local, etc.)

## Schweregrade

Protokolleinträge werden nach RFC 5424 in acht Schweregrade eingeteilt:

### Emergency (Notfall)

- **Bedeutung** - System ist nicht verwendbar
- **Beispiele** - Vollständiger Systemausfall, kritischer Datenverlust
- **Farbe** - Dunkelrot
- **Aktion** - Sofortige Reaktion erforderlich

### Alert (Alarm)

- **Bedeutung** - Sofortiges Handeln erforderlich
- **Beispiele** - Datenbank offline, kompletter Speicher voll
- **Farbe** - Rot
- **Aktion** - Umgehende Reaktion erforderlich

### Critical (Kritisch)

- **Bedeutung** - Kritische Bedingungen
- **Beispiele** - Wichtige Komponente ausgefallen, schwerwiegender Fehler
- **Farbe** - Orange
- **Aktion** - Schnelle Reaktion erforderlich

### Error (Fehler)

- **Bedeutung** - Fehler, der nicht zum Systemausfall führt
- **Beispiele** - Exception nicht abgefangen, Datenbankfehler, API-Fehler
- **Farbe** - Hellorange
- **Aktion** - Sollte untersucht und behoben werden

### Warning (Warnung)

- **Bedeutung** - Warnmeldung über außergewöhnliche Ereignisse
- **Beispiele** - Veraltete Funktionen, falsche Verwendung von APIs
- **Farbe** - Gelb
- **Aktion** - Beobachten, bei Häufung reagieren

### Notice (Hinweis)

- **Bedeutung** - Normale, aber bedeutsame Ereignisse
- **Beispiele** - Benutzer-Login, Konfigurationsänderungen
- **Farbe** - Blau
- **Aktion** - Informativ, normalerweise keine Aktion erforderlich

### Info (Information)

- **Bedeutung** - Informative Meldungen
- **Beispiele** - Anwendungsstart, Abschluss von Prozessen
- **Farbe** - Grün
- **Aktion** - Nur zur Information

### Debug (Fehlersuche)

- **Bedeutung** - Detaillierte Debug-Informationen
- **Beispiele** - Variablenwerte, Ablaufverfolgung, SQL-Queries
- **Farbe** - Grau
- **Aktion** - Nur bei aktiver Fehlersuche relevant

> **Hinweis:** Debug-Meldungen werden nur protokolliert, wenn der Debug-Modus aktiviert ist. In Produktivumgebungen sollte dieser deaktiviert sein.

## Protokolle filtern

Bei umfangreichen Log-Dateien ist Filtern unerlässlich:

### Nach Schweregrad filtern

1. Verwenden Sie das Auswahlfeld **Schweregrad**.
2. Wählen Sie einen oder mehrere Schweregrade.
3. Die Liste zeigt nur Einträge dieser Schweregrade.

Typische Filter:
- **Nur Fehler und schlimmer** - Emergency, Alert, Critical, Error
- **Nur Warnungen und Hinweise** - Warning, Notice
- **Alle außer Debug** - Für übersichtlichere Produktiv-Logs

### Nach Zeitraum filtern

1. Verwenden Sie die Felder **Von** und **Bis**.
2. Wählen Sie Start- und Enddatum.
3. Optional: Wählen Sie auch die genaue Uhrzeit.
4. Die Liste zeigt nur Einträge aus diesem Zeitraum.

Nützlich bei der Fehlersuche: "Zeige alle Fehler der letzten Stunde" oder "Was geschah am 15. Januar zwischen 14:00 und 15:00 Uhr?"

### Nach Nachricht suchen

1. Verwenden Sie das Suchfeld.
2. Geben Sie einen Suchbegriff ein (z.B. Exception-Name, Dateiname).
3. Die Liste zeigt alle Einträge, die den Begriff enthalten.

Die Suche durchsucht sowohl die Nachricht als auch den Stack-Trace.

### Nach Log-Datei filtern

1. Verwenden Sie das Auswahlfeld **Log-Datei**.
2. Wählen Sie eine spezifische Datei (z.B. laravel.log, queue.log).
3. Die Liste zeigt nur Einträge aus dieser Datei.

Verschiedene Bereiche der Anwendung können in separate Log-Dateien schreiben:
- **laravel.log** - Haupt-Anwendungs-Log
- **queue.log** - Warteschlangen-Jobs
- **mail.log** - E-Mail-Versand
- **api.log** - API-Zugriffe

## Log-Details anzeigen

Für vollständige Fehlerinformationen:

1. Klicken Sie auf einen Protokolleintrag.
2. Ein Dialog öffnet sich mit detaillierten Informationen:
   - **Vollständiger Stack-Trace** - Die komplette Fehlerkette
   - **Datei und Zeile** - Wo der Fehler auftrat
   - **Kontext-Daten** - Request-Parameter, Session-Daten
   - **Benutzer-Informationen** - Welcher Benutzer betroffen war
   - **Server-Informationen** - PHP-Version, Speichernutzung
3. Verwenden Sie die Kopierfunktion, um Fehler zu dokumentieren.

Der Stack-Trace zeigt den vollständigen Aufrufpfad und ermöglicht präzise Fehleranalyse.

## Log-Dateien herunterladen

Sie können Log-Dateien für externe Analyse herunterladen:

1. Klicken Sie auf **Log herunterladen**.
2. Wählen Sie die gewünschte Log-Datei.
3. Die Datei wird als .log-Datei heruntergeladen.

Heruntergeladene Logs können Sie mit Texteditoren oder spezialisierten Log-Analyse-Tools öffnen.

## Log-Dateien löschen

Um alte Logs zu entfernen und Speicherplatz freizugeben:

1. Klicken Sie auf **Logs löschen**.
2. Wählen Sie:
   - **Alte Logs löschen** - Nur Logs älter als X Tage
   - **Alle Logs löschen** - Komplette Log-Dateien leeren
3. Bestätigen Sie den Löschvorgang.

> **Warnung:** Gelöschte Logs können nicht wiederhergestellt werden. Sichern Sie wichtige Logs vor dem Löschen.

## Log-Rotation

Die Anwendung rotiert Log-Dateien automatisch:

- **Täglich** - Jeden Tag wird eine neue Log-Datei angelegt
- **Bei Größe** - Wenn eine Datei zu groß wird, wird sie archiviert
- **Aufbewahrung** - Alte Logs werden nach konfigurierbarer Zeit gelöscht

Archivierte Logs erhalten einen Zeitstempel im Dateinamen, z.B.:
- `laravel-2025-02-01.log`
- `laravel-2025-02-02.log`

## Fehleranalyse

Bei der Analyse von Fehlern sollten Sie:

1. **Zeitpunkt beachten** - Wann trat der Fehler erstmals auf?
2. **Häufigkeit prüfen** - Tritt der Fehler wiederholt auf?
3. **Muster erkennen** - Gibt es Gemeinsamkeiten zwischen Fehlereinträgen?
4. **Stack-Trace lesen** - Wo im Code liegt die Ursache?
5. **Kontext untersuchen** - Was tat der Benutzer, als der Fehler auftrat?

Mehrere gleiche Fehler kurz hintereinander deuten oft auf ein systematisches Problem hin.

## Echtzeit-Log-Anzeige

Für Live-Monitoring:

1. Klicken Sie auf **Echtzeit-Modus**.
2. Neue Log-Einträge erscheinen automatisch.
3. Die Anzeige scrollt automatisch zu neuen Einträgen.
4. Klicken Sie auf **Pausieren**, um die automatische Aktualisierung zu stoppen.

Der Echtzeit-Modus ist ideal, um Probleme live zu beobachten, während Sie Aktionen in der Anwendung ausführen.

## Log-Level konfigurieren

Systemadministratoren können festlegen, welche Schweregrade protokolliert werden:

1. Navigieren Sie zu **Einstellungen > System > Kerneinstellungen**.
2. Setzen Sie **Minimum Log-Level** (z.B. "error" für Produktivsysteme).
3. Klicken Sie auf **Speichern**.

In Produktivumgebungen empfiehlt sich "error" oder "warning", in Entwicklungsumgebungen "debug".

## Wichtige Hinweise

> **Hinweis:** System-Protokolle können sensible Informationen enthalten (Passwörter in Fehlermeldungen, API-Schlüssel). Behandeln Sie Logs vertraulich.

> **Performance:** Sehr umfangreiche Log-Dateien (> 100 MB) können die Anzeige verlangsamen. Verwenden Sie Filter oder laden Sie die Datei herunter.

> **Debug-Modus:** Aktivieren Sie den Debug-Modus nur in Entwicklungsumgebungen. In Produktion würde dieser sensible Daten preisgeben und die Performance beeinträchtigen.

> **Speicherplatz:** Überwachen Sie den Speicherverbrauch von Logs. Große Anwendungen können täglich mehrere GB an Logs erzeugen.

> **Tipp:** Richten Sie eine automatische Log-Rotation und -Bereinigung ein, um den Speicherverbrauch zu kontrollieren.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [Systemeinstellungen](48-system.md) - System-Konfiguration anpassen
- [Aktivitätsprotokolle](53-aktivitaetsprotokolle.md) - Benutzeraktivitäten ansehen
- [Fehlgeschlagene Jobs](52-fehlgeschlagene-jobs.md) - Probleme mit Hintergrundaufgaben
