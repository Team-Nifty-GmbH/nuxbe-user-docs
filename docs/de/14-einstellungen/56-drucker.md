# Drucker

In der Druckerverwaltung konfigurieren Sie alle verfügbaren Drucker für die Anwendung. Hier richten Sie Netzwerkdrucker, lokale Drucker und Druckserver ein.

## Navigation

1. Navigieren Sie zu **Einstellungen > System > Drucker**.

   ![Drucker verwalten](../screenshots/100-einstellungen-drucker.png)

2. Die Tabelle zeigt alle konfigurierten Drucker mit Namen, Standort und Status.

## Übersicht

Die Drucker-Übersicht listet alle für die Anwendung verfügbaren Drucker auf.

### Spalten der Drucker-Liste

- **Name** - Der Name des Druckers
- **Alias** - Ein alternativer, sprechender Name (optional)
- **Spooler** - Der Name des Druckserver-Spoolers
- **Standort** - Physischer Standort des Druckers (z.B. "Lager", "Büro 3. OG")
- **Modell** - Hersteller und Modellbezeichnung
- **Papierformate** - Unterstützte Formate (A4, A5, Letter, etc.)
- **Status** - Ob der Drucker aktiv ist
- **Aktionen** - Verfügbare Aktionen

## Drucker anlegen

So fügen Sie einen neuen Drucker hinzu:

1. Klicken Sie auf **Neu**.
2. Geben Sie im Dialog die erforderlichen Informationen ein:

### Grundeinstellungen

- **Name** - Der technische Name des Druckers (Pflichtfeld)
- **Alias** - Ein benutzerfreundlicher Anzeigename (optional)
- **Spooler-Name** - Der Name des Druckspoolers/Druckservers (Pflichtfeld)

### Standort und Modell

- **Standort** - Wo sich der Drucker physisch befindet (optional)
- **Hersteller und Modell** - Modellbezeichnung (optional, z.B. "HP LaserJet Pro M404dn")

### Papierformate

- **Unterstützte Formate** - Wählen Sie alle Formate, die der Drucker verarbeiten kann:
  - A4 (210 × 297 mm)
  - A5 (148 × 210 mm)
  - Letter (216 × 279 mm)
  - Legal (216 × 356 mm)
  - Benutzerdefinierte Formate

### Status

- **Aktiv** - Aktivieren Sie den Schalter, um den Drucker sofort verfügbar zu machen

3. Klicken Sie auf **Speichern**.

Der neue Drucker erscheint in der Liste und steht für Druckaufträge zur Verfügung.

## Drucker bearbeiten

Um die Einstellungen eines Druckers zu ändern:

1. Klicken Sie in der Druckerliste auf das Bearbeiten-Symbol.
2. Ändern Sie die gewünschten Einstellungen.
3. Klicken Sie auf **Speichern**.

Änderungen werden sofort wirksam und betreffen neue Druckaufträge.

## Drucker aktivieren oder deaktivieren

Sie können Drucker temporär deaktivieren, ohne diese zu löschen:

1. Klicken Sie auf das Bearbeiten-Symbol.
2. Deaktivieren Sie den Schalter **Aktiv**.
3. Klicken Sie auf **Speichern**.

Inaktive Drucker:
- Erscheinen nicht mehr in Drucker-Auswahllisten
- Verarbeiten keine neuen Druckaufträge
- Behalten ihre Konfiguration und Historie

Dies ist nützlich bei:
- Wartungsarbeiten am Drucker
- Temporären Ausfällen
- Testen neuer Druckerkonfigurationen

## Drucker-Spooler

Die Anwendung verwendet einen Spooler-basierten Ansatz für das Drucken:

### Was ist ein Spooler?

Ein Spooler (Print Spooler) ist ein Druckserver-Dienst, der:
- Druckaufträge entgegennimmt
- Diese in einer Warteschlange verwaltet
- Sie an physische Drucker weiterleitet
- Den Status überwacht

### Spooler-Name

Der **Spooler-Name** identifiziert eine Gruppe von Druckern auf einem Druckserver. Mehrere Drucker können denselben Spooler verwenden.

Beispiel:
- Spooler: "Lager-Druckserver"
  - Drucker 1: "Lager-Etikettendrucker"
  - Drucker 2: "Lager-Laserdrucker"
  - Drucker 3: "Versand-Etiketten"

## Bridge-Konfiguration generieren

Für die Verbindung zwischen der Anwendung und physischen Druckern benötigen Sie eine Bridge-Konfiguration:

1. Klicken Sie auf **Bridge-Konfiguration generieren**.
2. Geben Sie einen eindeutigen Namen für die Instanz ein (z.B. "Hauptstandort-Drucker").
3. Optional: Geben Sie eine Beschreibung ein.
4. Klicken Sie auf **Generieren**.
5. Eine Konfigurationsdatei wird heruntergeladen.

Diese Konfigurationsdatei enthält:
- Einen API-Token für die Authentifizierung
- Die URL Ihrer Anwendung
- Spooler-Konfigurationen

> **Sicherheit:** Der generierte Token ermöglicht Zugriff auf das Drucksystem. Behandeln Sie diese Datei vertraulich.

### Bridge installieren

1. Installieren Sie die FluxERP Printer Bridge auf dem Computer, der mit den Druckern verbunden ist.
2. Importieren Sie die generierte Konfigurationsdatei in die Bridge.
3. Die Bridge verbindet sich automatisch mit der Anwendung.
4. Drucker werden synchronisiert und stehen zur Verfügung.

## Spooler löschen

Um einen kompletten Spooler samt aller zugehörigen Drucker zu entfernen:

1. Klicken Sie auf **Spooler löschen**.
2. Wählen Sie den zu löschenden Spooler aus der Liste.
3. Bestätigen Sie den Löschvorgang.

> **Warnung:** Diese Aktion löscht alle Drucker, die diesem Spooler zugeordnet sind, sowie den zugehörigen API-Token. Die Drucker stehen dann nicht mehr zur Verfügung.

Dies ist nützlich, wenn:
- Ein Standort geschlossen wird
- Die Druckserver-Infrastruktur geändert wird
- Eine komplette Neukonfiguration erforderlich ist

## Drucker-Zuordnung

Administratoren können festlegen, welche Benutzer Zugriff auf welche Drucker haben:

### Benutzer zu Drucker zuordnen

1. Klicken Sie bei einem Drucker auf **Benutzer verwalten**.
2. Wählen Sie die Benutzer aus, die diesen Drucker verwenden dürfen.
3. Klicken Sie auf **Speichern**.

Benutzer sehen nur Drucker, für die sie berechtigt sind.

### Standard-Drucker festlegen

Benutzer können in ihrem Profil einen Standard-Drucker festlegen:
1. Navigieren Sie zu **Profil > Einstellungen**.
2. Wählen Sie unter **Standard-Drucker** den bevorzugten Drucker.
3. Dieser wird automatisch vorausgewählt bei Druckaufträgen.

## Drucker-Status überwachen

Die Drucker-Übersicht zeigt den aktuellen Status:

### Online (Aktiv)

- **Bedeutung** - Der Drucker ist betriebsbereit und nimmt Aufträge entgegen
- **Anzeige** - Grünes Badge
- **Hinweis** - Normale Funktion

### Offline (Inaktiv)

- **Bedeutung** - Der Drucker ist deaktiviert oder nicht erreichbar
- **Anzeige** - Rotes Badge
- **Ursachen** - Manuell deaktiviert, Bridge offline, Drucker ausgeschaltet

### Wartung

- **Bedeutung** - Der Drucker befindet sich im Wartungsmodus
- **Anzeige** - Gelbes Badge
- **Hinweis** - Keine neuen Aufträge, wartende Aufträge bleiben in Queue

## Unterstützte Papierformate

Die Anwendung unterstützt folgende Standardformate:

- **A4** - 210 × 297 mm (Standard für Dokumente)
- **A5** - 148 × 210 mm (Halbe A4-Größe)
- **Letter** - 216 × 279 mm (US-Standard)
- **Legal** - 216 × 356 mm (US-Legal)
- **A6** - 105 × 148 mm (Postkartengröße)
- **Roll** - Für Etikettendrucker mit Rollenpapier
- **Custom** - Benutzerdefinierte Größen

Wählen Sie nur Formate aus, die der Drucker physisch verarbeiten kann.

## Fehlerbehebung

### Drucker erscheint nicht in Auswahllisten

Mögliche Ursachen:
1. Drucker ist inaktiv - Aktivieren Sie den Drucker
2. Keine Berechtigung - Prüfen Sie Benutzer-Zuordnungen
3. Kein passendes Papierformat - Prüfen Sie, ob das benötigte Format konfiguriert ist

### Druckaufträge bleiben wartend

Mögliche Ursachen:
1. Bridge ist offline - Starten Sie die Printer Bridge neu
2. Drucker ist ausgeschaltet - Schalten Sie den physischen Drucker ein
3. Netzwerkproblem - Prüfen Sie die Verbindung zwischen Bridge und Drucker
4. Spooler-Fehler - Prüfen Sie die Spooler-Konfiguration

### Token-Fehler

Falls die Bridge sich nicht verbinden kann:
1. Generieren Sie eine neue Bridge-Konfiguration
2. Aktivieren Sie "Token neu generieren"
3. Importieren Sie die neue Konfiguration in die Bridge

> **Hinweis:** Das Regenerieren invalidiert den alten Token. Die Bridge muss neu konfiguriert werden.

## Wichtige Hinweise

> **Hinweis:** Drucker werden über eine separate Bridge-Anwendung angesteuert. Ohne installierte Bridge können keine Druckaufträge verarbeitet werden.

> **Netzwerk:** Stellen Sie sicher, dass die Bridge-Anwendung die konfigurierten Drucker im Netzwerk erreichen kann.

> **Berechtigungen:** Nur Administratoren können Drucker anlegen, bearbeiten und löschen. Die Zuweisung zu Benutzern kann auch von Abteilungsleitern vorgenommen werden.

> **Tipp:** Verwenden Sie aussagekräftige Namen und Standorte, damit Benutzer den richtigen Drucker leicht finden können.

> **Performance:** Viele Drucker mit hohem Druckaufkommen können einen dedizierten Druckserver erfordern. Die Bridge-Anwendung sollte auf einem performanten System laufen.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [Druckaufträge](55-druckauftraege.md) - Druckaufträge ansehen und verwalten
- [Benutzer](../14-einstellungen/39-benutzer.md) - Benutzer verwalten
