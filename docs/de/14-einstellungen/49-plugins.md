# Plugins

Die Plugin-Verwaltung ermöglicht es Ihnen, Erweiterungen zu installieren, zu aktivieren, zu deaktivieren und zu aktualisieren. Plugins erweitern die Funktionalität der Anwendung um zusätzliche Module und Integrationen.

## Navigation

1. Navigieren Sie zu **Einstellungen > System > Plugins**.

   ![Plugins verwalten](../screenshots/97-einstellungen-plugins.png)

2. Die Seite zeigt eine Liste aller verfügbaren Plugins mit deren Status und Versionsinformationen.

## Übersicht

Die Plugin-Übersicht zeigt alle installierten und verfügbaren Plugins in einer Tabelle.

### Spalten der Plugin-Liste

- **Name** - Der Name des Plugins
- **Beschreibung** - Eine kurze Beschreibung der Funktionalität
- **Version** - Die aktuell installierte Version
- **Autor** - Der Entwickler oder Hersteller des Plugins
- **Status** - Ob das Plugin aktiv oder inaktiv ist
- **Verfügbare Updates** - Zeigt an, ob eine neuere Version verfügbar ist

### Plugin-Status

Plugins können verschiedene Status haben:

- **Aktiv** - Das Plugin ist installiert und aktiv
- **Inaktiv** - Das Plugin ist installiert, aber deaktiviert
- **Verfügbar** - Das Plugin kann installiert werden
- **Update verfügbar** - Eine neuere Version ist verfügbar

## Plugin aktivieren oder deaktivieren

Sie können Plugins aktivieren oder deaktivieren, ohne diese zu deinstallieren.

1. Suchen Sie das gewünschte Plugin in der Liste.
2. Klicken Sie auf den Umschalter in der Spalte **Status**.
3. Das Plugin wird aktiviert oder deaktiviert.

> **Hinweis:** Nach dem Aktivieren oder Deaktivieren eines Plugins wird empfohlen, die Seite zu aktualisieren oder sich neu anzumelden, damit alle Änderungen wirksam werden.

Deaktivierte Plugins bleiben installiert, ihre Funktionen sind jedoch nicht verfügbar. Die Daten des Plugins bleiben erhalten.

## Plugin installieren

Sie können neue Plugins aus dem Plugin-Verzeichnis oder als Datei installieren.

### Installation aus dem Verzeichnis

1. Geben Sie in das Suchfeld einen Suchbegriff ein.
2. Die Liste zeigt verfügbare Plugins, die Ihren Kriterien entsprechen.
3. Klicken Sie bei dem gewünschten Plugin auf **Installieren**.
4. Warten Sie, bis der Installationsprozess abgeschlossen ist.
5. Das Plugin wird automatisch aktiviert.

### Installation durch Datei-Upload

1. Klicken Sie auf **Plugin hochladen**.
2. Wählen Sie eine Plugin-Datei (ZIP-Archiv) von Ihrem Computer aus.
3. Klicken Sie auf **Hochladen und installieren**.
4. Das Plugin wird extrahiert, installiert und aktiviert.

> **Warnung:** Laden Sie nur Plugins aus vertrauenswürdigen Quellen hoch. Bösartige Plugins können Ihre Anwendung und Daten gefährden.

## Plugin aktualisieren

Wenn Updates für installierte Plugins verfügbar sind, werden diese in der Liste angezeigt.

### Einzelnes Plugin aktualisieren

1. Klicken Sie bei einem Plugin mit verfügbarem Update auf **Update anzeigen**.
2. Prüfen Sie die Änderungen in der neuen Version (Changelog).
3. Klicken Sie auf **Aktualisieren**, um die neue Version zu installieren.
4. Warten Sie, bis der Update-Prozess abgeschlossen ist.

### Alle Plugins aktualisieren

1. Klicken Sie auf **Auf Updates prüfen**, um nach neuen Versionen zu suchen.
2. Wenn Updates verfügbar sind, klicken Sie auf **Alle aktualisieren**.
3. Alle verfügbaren Updates werden nacheinander installiert.

> **Tipp:** Erstellen Sie vor größeren Updates ein Backup Ihrer Datenbank, um im Fehlerfall wiederherstellen zu können.

## Plugin deinstallieren

Wenn Sie ein Plugin nicht mehr benötigen, können Sie es vollständig entfernen.

1. Klicken Sie bei dem gewünschten Plugin auf **Mehr**.
2. Klicken Sie im erscheinenden Dialog auf **Deinstallieren**.
3. Wählen Sie, ob Plugin-Daten (Tabellen, Konfigurationen) ebenfalls gelöscht werden sollen:
   - **Mit Rollback** - Alle Plugin-Daten werden gelöscht (empfohlen)
   - **Ohne Rollback** - Plugin-Code wird entfernt, Daten bleiben erhalten
4. Bestätigen Sie die Deinstallation.

> **Warnung:** Die Deinstallation mit Rollback löscht alle vom Plugin erstellten Daten unwiderruflich. Erstellen Sie vorher ein Backup, wenn Sie die Daten möglicherweise später wiederherstellen möchten.

## Plugin-Details ansehen

1. Klicken Sie bei einem Plugin auf **Mehr**.
2. Ein Dialog öffnet sich mit detaillierten Informationen:
   - Vollständige Beschreibung
   - Versionsverlauf
   - Abhängigkeiten
   - Lizenzinformationen
   - README-Datei (wenn vorhanden)
3. Bei einigen Plugins können Sie hier auch spezifische Einstellungen vornehmen.

## Plugin-Einstellungen

Manche Plugins bieten eigene Konfigurationsseiten.

1. Klicken Sie bei einem Plugin mit Einstellungsseite auf **Einstellungen**.
2. Es öffnet sich ein Dialog oder eine neue Seite mit den Plugin-spezifischen Optionen.
3. Nehmen Sie die gewünschten Änderungen vor.
4. Klicken Sie auf **Speichern**.

## Wichtige Hinweise

> **Hinweis:** Einige Plugins benötigen Datenbankmigrationen. Diese werden automatisch während der Installation ausgeführt.

> **Warnung:** Das Deaktivieren eines Plugins kann dazu führen, dass bestimmte Funktionen in der Anwendung nicht mehr verfügbar sind. Prüfen Sie Abhängigkeiten, bevor Sie wichtige Plugins deaktivieren.

> **Sicherheit:** Installieren Sie nur Plugins von vertrauenswürdigen Entwicklern. Plugins haben vollen Zugriff auf Ihre Anwendung und Datenbank.

> **Performance:** Zu viele aktive Plugins können die Performance beeinträchtigen. Deaktivieren Sie Plugins, die Sie nicht benötigen.

> **Tipp:** Nach der Installation einiger Plugins ist eine Aktualisierung der Seite oder eine Neuanmeldung erforderlich, damit Menüeinträge und neue Funktionen sichtbar werden.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [Systemeinstellungen](48-system.md) - Erweiterte Systemkonfiguration
