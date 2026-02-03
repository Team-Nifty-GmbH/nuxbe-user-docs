# Benachrichtigungen

Benachrichtigungseinstellungen legen fest, über welche Kanäle das System Sie über Ereignisse informiert. Sie können für jeden Benachrichtigungstyp individuell festlegen, ob und wie Sie benachrichtigt werden möchten.

## Übersicht

1. Navigieren Sie zu **Einstellungen > Kommunikation > Benachrichtigungen**.

   ![Benachrichtigungen konfigurieren](../screenshots/92-einstellungen-benachrichtigungen.png)

2. Die Übersicht zeigt eine Matrix aus Benachrichtigungstypen und verfügbaren Kanälen. Für jeden Typ können Sie die gewünschten Kanäle aktivieren.

## Verfügbare Benachrichtigungskanäle

Das System unterstützt verschiedene Kanäle für den Versand von Benachrichtigungen:

- **Datenbank** - Benachrichtigungen erscheinen im Benachrichtigungscenter der Anwendung
- **E-Mail** - Versand per E-Mail an Ihre Benutzer-E-Mail-Adresse
- **Broadcast** - Echtzeit-Benachrichtigungen im Browser (WebSockets)
- **Push** - Push-Benachrichtigungen auf mobilen Geräten
- **Mobil** - Benachrichtigungen in der mobilen App

## Benachrichtigungstypen

Typische Benachrichtigungen im System:

### Aufträge und Rechnungen
- **Neuer Auftrag** - Wenn ein neuer Auftrag erstellt wurde
- **Auftrag storniert** - Wenn ein Auftrag storniert wurde
- **Zahlung eingegangen** - Wenn eine Zahlung einem Auftrag zugeordnet wurde

### Kontakte
- **Neuer Kontakt** - Wenn ein neuer Kontakt angelegt wurde
- **Kontakt aktualisiert** - Wenn Kontaktdaten geändert wurden

### Tickets
- **Neues Ticket** - Wenn ein neues Ticket erstellt wurde
- **Ticket zugewiesen** - Wenn Ihnen ein Ticket zugewiesen wurde
- **Ticket-Kommentar** - Wenn ein Kommentar zu einem Ticket hinzugefügt wurde

### System
- **Fehlermeldung** - Wenn ein Systemfehler aufgetreten ist
- **Importvorgang abgeschlossen** - Wenn ein Datenimport fertiggestellt wurde

## Benachrichtigungen konfigurieren

1. Suchen Sie in der Liste den gewünschten Benachrichtigungstyp.
2. Aktivieren Sie die Kanäle, über die Sie benachrichtigt werden möchten:
   - Klicken Sie auf die Checkbox in der entsprechenden Spalte
   - Sie können mehrere Kanäle gleichzeitig aktivieren
3. Deaktivieren Sie Kanäle, die Sie nicht nutzen möchten.
4. Klicken Sie auf **Speichern**, um die Änderungen zu übernehmen.

## Empfohlene Einstellungen

Für einen ausgewogenen Informationsfluss empfehlen wir:

### Wichtige Ereignisse (mehrere Kanäle)
- **Neues Ticket zugewiesen:** Datenbank + E-Mail + Push
- **Zahlung eingegangen:** Datenbank + E-Mail
- **Systemfehler:** Datenbank + E-Mail

### Informative Ereignisse (Datenbank)
- **Neuer Kontakt:** Nur Datenbank
- **Auftrag aktualisiert:** Nur Datenbank

### Weniger wichtige Ereignisse (optional)
- **Kontakt aktualisiert:** Deaktiviert oder nur Datenbank

## Benachrichtigungen pro Benutzer

Die Benachrichtigungseinstellungen können individuell pro Benutzer konfiguriert werden. Jeder Benutzer kann in seinen persönlichen Einstellungen festlegen, welche Benachrichtigungen er erhalten möchte.

## Benachrichtigungen deaktivieren

Wenn Sie bestimmte Benachrichtigungen nicht erhalten möchten:

1. Deaktivieren Sie alle Kanäle für den entsprechenden Benachrichtigungstyp.
2. Klicken Sie auf **Speichern**.

Sie erhalten dann keine Benachrichtigungen mehr für diesen Typ.

> **Tipp:** Broadcast-Benachrichtigungen erscheinen in Echtzeit, während Sie im System arbeiten. E-Mail-Benachrichtigungen sind nützlich, wenn Sie nicht ständig im System eingeloggt sind. Push-Benachrichtigungen auf mobilen Geräten erfordern die Installation der mobilen App und entsprechende Berechtigungen.

> **Hinweis:** Zu viele Benachrichtigungen können störend wirken. Aktivieren Sie nur die Kanäle, die für Ihren Arbeitsablauf wirklich wichtig sind. Broadcast-Benachrichtigungen erfordern eine aktive WebSocket-Verbindung. Push-Benachrichtigungen müssen im Browser oder der mobilen App zugelassen werden. Die Datenbank speichert alle Benachrichtigungen unabhängig von den Kanaleinstellungen für spätere Einsicht.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [E-Mail-Konten](26-mail-konten.md) - E-Mail-Konten konfigurieren
- [E-Mail-Vorlagen](25-email-vorlagen.md) - E-Mail-Vorlagen verwalten
