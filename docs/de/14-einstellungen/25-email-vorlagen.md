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
3. Wählen Sie den **Modelltyp** aus. Dieser bestimmt, bei welchem Ereignis die Vorlage verwendet wird und welche Platzhalter verfügbar sind:
   - **Auftrag** - Für Auftragsbestätigungen
   - **Rechnung** - Für Rechnungsversand
   - **Mahnung** - Für Mahnschreiben
   - **Kontakt** - Für Kontakt-Benachrichtigungen

   > **Wichtig:** Der Modelltyp kann nur beim Erstellen einer Vorlage festgelegt werden. Nachträgliches Ändern ist nicht möglich. Wenn Sie den Modelltyp ändern müssen, legen Sie eine neue Vorlage an.

4. Tragen Sie den **Betreff** ein (z. B. "Ihre Bestellung bei Musterfirma"). Im Betreff können ebenfalls Platzhalter verwendet werden.
5. Optional: Geben Sie **CC** und **BCC** als E-Mail-Adressen ein (mehrere durch Komma getrennt). Diese Felder sind optional und können leer gelassen werden.
6. Verfassen Sie den **HTML-Inhalt** im Editor. Nutzen Sie HTML-Formatierung für ansprechende E-Mails.
7. Optional: Fügen Sie einen **Text-Inhalt** hinzu für E-Mail-Clients ohne HTML-Unterstützung.
8. Optional: Laden Sie **Anhänge** hoch, die automatisch jeder E-Mail beigefügt werden sollen (z. B. AGBs, Kataloge).
9. Klicken Sie auf **Speichern**.

## E-Mail-Vorlage bearbeiten

1. Klicken Sie auf eine E-Mail-Vorlage in der Liste.
2. Nehmen Sie die gewünschten Änderungen vor.
3. Klicken Sie auf **Speichern**.

## Platzhalter verwenden

E-Mail-Vorlagen unterstützen Platzhalter, die beim Versand durch echte Daten ersetzt werden. Die verfügbaren Platzhalter hängen vom gewählten Modelltyp ab.

### Platzhalter einfügen

Im HTML-Editor können Sie Platzhalter über das **(x)**-Symbol in der Werkzeugleiste einfügen:

1. Positionieren Sie den Cursor an der gewünschten Stelle im Text.
2. Klicken Sie auf das **(x)**-Symbol in der Editor-Werkzeugleiste.
3. Es öffnet sich ein Dropdown mit allen verfügbaren Platzhaltern für den gewählten Modelltyp.
4. Wählen Sie den gewünschten Platzhalter aus. Er wird an der Cursorposition eingefügt.

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

## Mehrsprachige E-Mail-Vorlagen

Nuxbe unterstützt E-Mail-Vorlagen in mehreren Sprachen. So können Sie sicherstellen, dass Ihre Kunden E-Mails in ihrer bevorzugten Sprache erhalten.

### Wie die Sprachauswahl funktioniert

Das System wählt die passende E-Mail-Vorlage automatisch anhand der Sprache des Auftrags aus:

1. Jeder Auftrag hat eine **Sprache**, die automatisch von der Adresse des Kunden übernommen wird.
2. Die Sprache der Adresse wird in den [Adressdaten](../5-kontakte/2-kontakt-detail.md) festgelegt.
3. Wenn ein Dokument (z. B. eine Rechnung) per E-Mail versendet wird, sucht das System nach einer E-Mail-Vorlage, die zum **Modelltyp** (z. B. Rechnung) und zur **Sprache** des Auftrags passt.
4. Wird eine passende Vorlage in der Sprache des Auftrags gefunden, wird diese verwendet.
5. Wird **keine** passende Vorlage in der Sprache des Auftrags gefunden, wird die **Standard-Vorlage** (in der Standardsprache, meist Deutsch) verwendet.

### Mehrsprachige Vorlagen anlegen

Um eine E-Mail-Vorlage in mehreren Sprachen anzubieten, gehen Sie wie folgt vor:

1. Erstellen Sie zunächst die Vorlage in der **Standardsprache** (z. B. Deutsch) wie im Abschnitt "E-Mail-Vorlage anlegen" beschrieben.
2. Erstellen Sie dann eine **weitere Vorlage** mit demselben Modelltyp, aber in einer anderen Sprache.
3. Achten Sie darauf, bei der zweiten Vorlage die korrekte **Sprache** auszuwählen.
4. Übersetzen Sie den Betreff und den Inhalt vollständig in die Zielsprache.
5. Die Platzhalter (z. B. `{{ order.invoice_number }}`) bleiben in allen Sprachen identisch -- nur der Text drumherum wird übersetzt.

> **Tipp:** Benennen Sie Ihre Vorlagen eindeutig, damit Sie sie leicht unterscheiden können. Beispiele:
> - "Rechnung (DE)" und "Invoice (EN)"
> - "Auftragsbestätigung (DE)" und "Order Confirmation (EN)"
> - "Mahnung (DE)" und "Payment Reminder (EN)"

> **Wichtig:** Erstellen Sie mindestens eine deutsche und eine englische Version jeder wichtigen E-Mail-Vorlage, wenn Sie internationale Kunden haben. Vergessen Sie nicht, auch den **Betreff** zu übersetzen, da dieser das Erste ist, was der Empfänger sieht.

> **Hinweis:** Die Spracheinstellung der Adresse hat weitreichende Auswirkungen. Sie beeinflusst nicht nur die E-Mail-Vorlage, sondern auch die Sprache der Dokumente (Rechnungen, Angebote etc.). Stellen Sie sicher, dass die Sprache bei allen Adressen korrekt gepflegt ist. Mehr dazu finden Sie in der Dokumentation zu [Sprachen](5-sprachen.md).

## E-Mail-Vorlage testen

Bevor Sie eine neue oder geänderte E-Mail-Vorlage produktiv einsetzen, sollten Sie sie unbedingt testen. Fehlerhafte Vorlagen können bei Kunden einen unprofessionellen Eindruck hinterlassen.

### Test durchführen -- Schritt für Schritt

1. Erstellen Sie einen **Testauftrag** mit einer Auftragsart, die zur Vorlage passt (z. B. eine Testrechnung für eine Rechnungsvorlage).
2. Verwenden Sie als Kundenadresse eine Adresse mit **Ihrer eigenen E-Mail-Adresse**, damit die Test-E-Mail an Sie geht.
3. Erstellen Sie das Dokument (z. B. die Rechnung) für den Testauftrag.
4. Versenden Sie das Dokument per E-Mail.
5. Überprüfen Sie die empfangene E-Mail auf:
   - **Betreff:** Sind alle Platzhalter korrekt ersetzt worden?
   - **Inhalt:** Stimmt die Formatierung? Sind alle Texte korrekt?
   - **Platzhalter:** Werden alle dynamischen Werte korrekt angezeigt?
   - **Anhänge:** Ist das Dokument-PDF angehängt? Sind zusätzliche Anhänge (z. B. AGB) vorhanden?
   - **Layout:** Sieht die E-Mail auf verschiedenen Geräten (Desktop, Smartphone) ordentlich aus?
6. Korrigieren Sie die Vorlage bei Bedarf und testen Sie erneut.

### Häufige Probleme beim Testen

| Problem | Ursache | Lösung |
|---------|---------|--------|
| Platzhalter wird als leerer Text angezeigt | Der Platzhalter existiert, aber der Wert ist im Testauftrag nicht gefüllt | Füllen Sie alle relevanten Felder im Testauftrag aus |
| Platzhalter wird als Rohtext angezeigt (z. B. `{{ order.invoice_number }}`) | Falscher Platzhalter-Name oder Syntaxfehler | Überprüfen Sie die Schreibweise und fügen Sie den Platzhalter über das (x)-Symbol im Editor ein |
| HTML-Code ist in der E-Mail sichtbar | Fehlerhafte HTML-Struktur im Editor | Überprüfen Sie den HTML-Quellcode im Editor und korrigieren Sie offene oder fehlerhafte Tags |
| Formatierung sieht anders aus als im Editor | E-Mail-Clients interpretieren HTML unterschiedlich | Verwenden Sie einfache Formatierungen (Fettschrift, Listen, Absätze) und vermeiden Sie aufwendige CSS-Styles |
| Anhang fehlt | Anhang wurde nicht hochgeladen oder Dateigröße überschritten | Überprüfen Sie den Anhang-Bereich in der Vorlage |

> **Tipp:** Testen Sie Ihre E-Mails in verschiedenen E-Mail-Programmen (z. B. Outlook, Gmail, Apple Mail), da diese HTML-E-Mails unterschiedlich darstellen können.

## Anhänge in E-Mail-Vorlagen

Sie können E-Mail-Vorlagen mit statischen Anhängen versehen, die bei jedem Versand automatisch mitgesendet werden.

### Automatisch angehängtes Dokument-PDF

Wenn Sie ein Dokument (z. B. eine Rechnung, ein Angebot oder eine Auftragsbestätigung) per E-Mail versenden, wird das **Dokument-PDF automatisch als Anhang** beigefügt. Sie müssen das PDF **nicht** manuell als Vorlagen-Anhang hinzufügen. Dieses Verhalten ist fest eingebaut und kann nicht deaktiviert werden.

### Zusätzliche statische Anhänge

Neben dem automatisch angehängten Dokument-PDF können Sie in der Vorlage **zusätzliche Dateien** als Anhänge hinterlegen. Diese werden bei **jedem Versand** automatisch mitgesendet. Typische Anwendungsfälle:

- **Allgemeine Geschäftsbedingungen (AGB)** -- Werden z. B. bei Auftragsbestätigungen immer mitgesendet
- **Produktkataloge** -- Können z. B. bei Angeboten mitgesendet werden
- **Preislisten** -- Für spezifische Vorlagen, die eine aktuelle Preisliste enthalten sollen
- **Zertifikate oder Qualitätsnachweise** -- Bei Lieferscheinen oder Auftragsbestätigungen
- **Datenschutzerklärung** -- Bei Willkommens-E-Mails oder Erstbestellungen

### Anhänge hinzufügen

1. Öffnen Sie die E-Mail-Vorlage zur Bearbeitung.
2. Scrollen Sie zum Bereich **Anhänge** unterhalb des HTML-Editors.
3. Klicken Sie auf **Hochladen** oder ziehen Sie Dateien per Drag & Drop in den Anhang-Bereich.
4. Die hochgeladene Datei erscheint in der Anhang-Liste.
5. Klicken Sie auf **Speichern**.

### Anhänge entfernen

1. Öffnen Sie die E-Mail-Vorlage zur Bearbeitung.
2. Suchen Sie den Anhang in der Anhang-Liste.
3. Klicken Sie auf das **Lösch-Symbol** neben dem Anhang.
4. Klicken Sie auf **Speichern**.

> **Wichtig:** Beachten Sie die Dateigröße Ihrer Anhänge. Jeder Anhang erhöht die Größe der gesendeten E-Mail. Viele E-Mail-Server haben Größenbeschränkungen (oft 10-25 MB pro E-Mail). Wenn Sie große Dateien senden müssen, überlegen Sie, ob Sie stattdessen einen Download-Link im E-Mail-Text verwenden können.

> **Hinweis:** Die statischen Anhänge kommen **zusätzlich** zum automatisch angehängten Dokument-PDF. Rechnen Sie also die Größe des Dokument-PDFs zu den statischen Anhängen hinzu, um die Gesamtgröße der E-Mail abzuschätzen.

> **Tipp:** Wenn Sie Anhänge wie AGB aktualisieren, denken Sie daran, die alte Datei in **allen betroffenen Vorlagen** zu ersetzen. Laden Sie die neue Version hoch und entfernen Sie die alte.

## E-Mail-Vorlage löschen

E-Mail-Vorlagen können jederzeit gelöscht werden. Klicken Sie auf **Löschen** im Bearbeitungsformular.

> **Tipp:** Testen Sie neue E-Mail-Vorlagen zunächst mit Test-E-Mails an sich selbst, bevor Sie sie produktiv einsetzen. Achten Sie auf korrekte Platzhalter-Syntax. Nutzen Sie den HTML-Editor für professionelle Formatierung mit Firmenlogo und Corporate Design.

> **Hinweis:** E-Mail-Vorlagen mit Anhängen können die Dateigröße erheblich erhöhen. Prüfen Sie, ob Anhänge wirklich bei jeder E-Mail mitgesendet werden sollen. Die Platzhalter-Syntax kann je nach System-Version variieren. Bei Problemen prüfen Sie die verfügbaren Variablen für den jeweiligen Modelltyp.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [E-Mail](../11-e-mail/0-index.md) - E-Mail-Modul verwenden
- [E-Mail-Konten](26-mail-konten.md) - E-Mail-Konten konfigurieren
- [Mahntexte](23-mahntexte.md) - Mahntexte verwalten
- [Sprachen](5-sprachen.md) - Sprachen verwalten
