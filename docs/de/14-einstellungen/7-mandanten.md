# Mandanten

Unter **Einstellungen > Allgemein > Mandanten** verwalten Sie Ihre Firmendaten und Mandanteninformationen. Ein Mandant repräsentiert eine rechtliche Einheit oder ein Unternehmen innerhalb des Systems und enthält alle relevanten Firmendaten für Rechnungen, Angebote und offizielle Dokumente.

## Übersicht

1. Navigieren Sie zu **Einstellungen > Allgemein > Mandanten**.

   ![Mandanten verwalten](../screenshots/112-einstellungen-mandanten.png)

2. Die Übersicht zeigt alle angelegten Mandanten mit folgenden Spalten:
   - **Name** - Firmenname
   - **Mandanten-Code** - Eindeutiger Kurzcode
   - **Stadt** - Firmensitz
   - **Land** - Zugeordnetes Land
   - **Aktiv** - Status des Mandanten

## Mandant anlegen

1. Klicken Sie auf **Neu**.
2. Füllen Sie die folgenden Felder aus:

### Grunddaten
   - **Name** - Vollständiger Firmenname
   - **Mandanten-Code** - Eindeutiger Kurzcode (z. B. "HAUPT", "DE01")
   - **Geschäftsführer** - Name des Geschäftsführers
   - **Land** - Wählen Sie das Land des Firmensitzes

### Adressdaten
   - **Straße** - Straße und Hausnummer
   - **Postleitzahl** - PLZ des Firmensitzes
   - **Stadt** - Ort des Firmensitzes

### Kontaktdaten
   - **Telefon** - Haupttelefonnummer
   - **Fax** - Faxnummer (optional)
   - **E-Mail** - Haupt-E-Mail-Adresse
   - **Website** - Firmenwebsite (optional)

### Steuerinformationen
   - **Steuernummer** - Steuernummer des Unternehmens
   - **USt-IdNr.** - Umsatzsteuer-Identifikationsnummer
   - **Gläubiger-ID** - SEPA-Gläubiger-Identifikationsnummer für Lastschriften

### SEPA-Texte
   - **SEPA-Text Basis** - Mandatstext für SEPA-Basislastschriften
   - **SEPA-Text B2B** - Mandatstext für SEPA-Firmenlastschriften

### Bankverbindungen
   - **Bankverbindungen** - Wählen Sie eine oder mehrere [Bankverbindungen](21-bankverbindungen.md) aus, die auf Rechnungen und anderen Dokumenten dieses Mandanten angezeigt werden sollen. Die Bankverbindungen müssen zuvor unter [Einstellungen > Buchhaltung > Bankverbindungen](21-bankverbindungen.md) angelegt worden sein.

> **Wichtig:** Damit Bankverbindungen auf Rechnungen erscheinen, müssen sie hier dem Mandanten zugeordnet werden. Das alleinige Anlegen unter Bankverbindungen reicht nicht aus.

### Weitere Einstellungen
   - **Öffnungszeiten** - JSON-Struktur für Geschäftszeiten (optional)
   - **AGB** - Allgemeine Geschäftsbedingungen (Langtext)
   - **Standard** - Markiert diesen Mandanten als Standardmandanten
   - **Aktiv** - Setzen Sie den Status des Mandanten

3. Klicken Sie auf **Speichern**.

## Mandant bearbeiten

1. Klicken Sie auf einen Mandanten in der Liste.
2. Ändern Sie die gewünschten Felder.
3. Klicken Sie auf **Speichern**.

## Logo hochladen

Jeder Mandant kann zwei Logos haben:
- **Hauptlogo:** Für Dokumente und Druckausgaben
- **Kleines Logo:** Für E-Mails und Bildschirmdarstellung

1. Öffnen Sie den Mandanten.
2. Klicken Sie auf **Logo hochladen** oder **Kleines Logo hochladen**.
3. Wählen Sie die Bilddatei (PNG, JPG).
4. Das Logo wird automatisch gespeichert.

## Mandant löschen

1. Klicken Sie auf einen Mandanten in der Liste.
2. Klicken Sie auf **Löschen**.
3. Bestätigen Sie die Löschung.

## Multi-Mandanten-Fähigkeit

Das System unterstützt mehrere Mandanten gleichzeitig. Dies ermöglicht:
- Verwaltung mehrerer Firmen in einem System
- Getrennte Buchungen und Belege pro Mandant
- Unterschiedliche Steuernummern und rechtliche Daten
- Separate Logos und Geschäftsbedingungen

> **Hinweis:** Der als Standard markierte Mandant wird automatisch bei der Erstellung neuer Dokumente vorausgewählt. Mandanten mit bestehenden Belegen können nicht gelöscht werden. Die SEPA-Gläubiger-ID ist erforderlich für SEPA-Lastschriften.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [Bankverbindungen](21-bankverbindungen.md) - Bankverbindungen anlegen und verwalten
- [Länder](2-laender.md) - Länderverwaltung
- [Rechnungen](../10-rechnungen/0-index.md) - Rechnungen mit Mandantendaten
- [Angebote](../8-angebote/0-index.md) - Angebote mit Mandantendaten
