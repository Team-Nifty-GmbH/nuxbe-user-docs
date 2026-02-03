# E-Mail-Vorlagen

E-Mail-Vorlagen definieren das Layout und den Inhalt automatisch versendeter E-Mails. Sie können Vorlagen für verschiedene Ereignisse anlegen und mit Platzhaltern arbeiten, die dynamisch durch Daten ersetzt werden.

## Übersicht

1. Navigieren Sie zu **Einstellungen > Kommunikation > E-Mail-Vorlagen**.

   ![E-Mail-Vorlagen verwalten](../screenshots/80-einstellungen-email-vorlagen.png)

2. Die Tabelle zeigt alle E-Mail-Vorlagen mit folgenden Spalten:
   - **Name** - Bezeichnung der Vorlage
   - **Modelltyp** - Zugehöriges Modul oder Ereignis
   - **Betreff** - E-Mail-Betreffzeile
   - **Textvorschau** - Auszug aus dem E-Mail-Inhalt

## E-Mail-Vorlage anlegen

1. Klicken Sie auf **Neu**.
2. Geben Sie einen **Namen** für die Vorlage ein (z. B. "Auftragsbestätigung", "Rechnung", "Willkommens-E-Mail").
3. Wählen Sie den **Modelltyp** aus. Dieser bestimmt, bei welchem Ereignis die Vorlage verwendet wird:
   - **Auftrag** - Für Auftragsbestätigungen
   - **Rechnung** - Für Rechnungsversand
   - **Mahnung** - Für Mahnschreiben
   - **Kontakt** - Für Kontakt-Benachrichtigungen
4. Tragen Sie den **Betreff** ein (z. B. "Ihre Bestellung bei Musterfirma").
5. Optional: Geben Sie **An (To)**, **CC** und **BCC** als E-Mail-Adressen ein (mehrere durch Komma getrennt).
6. Verfassen Sie den **HTML-Inhalt** im Editor. Nutzen Sie HTML-Formatierung für ansprechende E-Mails.
7. Optional: Fügen Sie einen **Text-Inhalt** hinzu für E-Mail-Clients ohne HTML-Unterstützung.
8. Optional: Laden Sie **Anhänge** hoch, die automatisch jeder E-Mail beigefügt werden sollen (z. B. AGBs, Kataloge).
9. Klicken Sie auf **Speichern**.

## E-Mail-Vorlage bearbeiten

1. Klicken Sie auf eine E-Mail-Vorlage in der Liste.
2. Nehmen Sie die gewünschten Änderungen vor.
3. Klicken Sie auf **Speichern**.

## Platzhalter verwenden

E-Mail-Vorlagen unterstützen Platzhalter, die beim Versand durch echte Daten ersetzt werden. Die verfügbaren Platzhalter hängen vom Modelltyp ab.

### Häufige Platzhalter

Für Aufträge und Rechnungen:
- `{{ order.invoice_number }}` - Rechnungsnummer
- `{{ order.invoice_date }}` - Rechnungsdatum
- `{{ order.total }}` - Gesamtbetrag
- `{{ contact.name }}` - Kundenname
- `{{ contact.email }}` - Kunden-E-Mail
- `{{ address.street }}` - Straße der Rechnungsadresse

Für Kontakte:
- `{{ contact.first_name }}` - Vorname
- `{{ contact.last_name }}` - Nachname
- `{{ user.name }}` - Name des zuständigen Benutzers

## Beispiel-Vorlage für Auftragsbestätigung

**Betreff:** Ihre Bestellung {{ order.invoice_number }}

**HTML-Inhalt:**
```html
<p>Sehr geehrte/r {{ contact.name }},</p>

<p>vielen Dank für Ihre Bestellung vom {{ order.invoice_date }}.</p>

<p>Wir haben Ihren Auftrag mit der Nummer <strong>{{ order.invoice_number }}</strong>
erhalten und werden ihn schnellstmöglich bearbeiten.</p>

<p>Gesamtbetrag: <strong>{{ order.total }} EUR</strong></p>

<p>Mit freundlichen Grüßen<br>
Ihr Team</p>
```

## E-Mail-Vorlage löschen

E-Mail-Vorlagen können jederzeit gelöscht werden. Klicken Sie auf **Löschen** im Bearbeitungsformular.

> **Tipp:** Testen Sie neue E-Mail-Vorlagen zunächst mit Test-E-Mails an sich selbst, bevor Sie sie produktiv einsetzen. Achten Sie auf korrekte Platzhalter-Syntax. Nutzen Sie den HTML-Editor für professionelle Formatierung mit Firmenlogo und Corporate Design.

> **Hinweis:** E-Mail-Vorlagen mit Anhängen können die Dateigröße erheblich erhöhen. Prüfen Sie, ob Anhänge wirklich bei jeder E-Mail mitgesendet werden sollen. Die Platzhalter-Syntax kann je nach System-Version variieren. Bei Problemen prüfen Sie die verfügbaren Variablen für den jeweiligen Modelltyp.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [E-Mail](../11-e-mail/0-index.md) - E-Mail-Modul verwenden
- [E-Mail-Konten](26-mail-konten.md) - E-Mail-Konten konfigurieren
- [Mahntexte](23-mahntexte.md) - Mahntexte verwalten
