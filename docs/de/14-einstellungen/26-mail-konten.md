# E-Mail-Konten

E-Mail-Konten verbinden das System mit Ihren E-Mail-Postfächern. Sie konfigurieren hier sowohl den Empfang (IMAP) als auch den Versand (SMTP) von E-Mails direkt aus der Anwendung.

## Übersicht

1. Navigieren Sie zu **Einstellungen > Kommunikation > E-Mail-Konten**.

   ![E-Mail-Konten verwalten](../screenshots/91-einstellungen-mail-konten.png)

2. Die Tabelle zeigt alle konfigurierten E-Mail-Konten mit folgenden Spalten:
   - **Name** - Bezeichnung des E-Mail-Kontos
   - **E-Mail-Adresse** - Vollständige E-Mail-Adresse
   - **Protokoll** - IMAP oder POP3
   - **Host** - IMAP-Server-Adresse
   - **SMTP-Host** - SMTP-Server-Adresse

## E-Mail-Konto anlegen

### Grundeinstellungen

1. Klicken Sie auf **Neu**.
2. Geben Sie einen **Namen** ein (z. B. "Firmen-E-Mail", "Support", "Info").
3. Tragen Sie die **E-Mail-Adresse** ein (z. B. info@musterfirma.de).

### IMAP-Einstellungen (E-Mail-Empfang)

4. Wählen Sie das **Protokoll** aus (Standard: IMAP).
5. Geben Sie den **Host** ein (z. B. imap.gmail.com, mail.ihr-hoster.de).
6. Tragen Sie den **Port** ein (Standard: 993 für SSL/TLS).
7. Wählen Sie die **Verschlüsselung** aus (SSL/TLS oder STARTTLS).
8. Geben Sie das **Passwort** für das E-Mail-Konto ein.
9. Aktivieren Sie **Hat gültiges Zertifikat**, wenn der Server ein vertrauenswürdiges SSL-Zertifikat verwendet.
10. Optional: Aktivieren Sie **Hat OAuth**, wenn OAuth-Authentifizierung verwendet wird (z. B. für Gmail).
11. Optional: Aktivieren Sie **Automatische Zuweisung**, wenn eingehende E-Mails automatisch Kontakten zugeordnet werden sollen.

### SMTP-Einstellungen (E-Mail-Versand)

12. Wählen Sie den **SMTP-Mailer** aus (Standard: smtp).
13. Geben Sie die **SMTP-E-Mail-Adresse** ein (oft identisch mit der Empfangsadresse).
14. Optional: Tragen Sie einen **Absendernamen** ein (z. B. "Musterfirma Support").
15. Optional: Geben Sie eine **Antwort-an-Adresse** ein, falls Antworten an eine andere Adresse gehen sollen.
16. Geben Sie den **SMTP-Host** ein (z. B. smtp.gmail.com).
17. Tragen Sie den **SMTP-Port** ein (Standard: 587 für STARTTLS, 465 für SSL).
18. Wählen Sie die **SMTP-Verschlüsselung** aus.
19. Optional: Geben Sie **SMTP-Benutzername** ein, falls abweichend von der E-Mail-Adresse.
20. Geben Sie das **SMTP-Passwort** ein.
21. Klicken Sie auf **Speichern**.

## E-Mail-Konto testen

Nach dem Speichern können Sie die Verbindung testen:

1. Klicken Sie auf **IMAP-Verbindung testen**, um den E-Mail-Empfang zu prüfen.
2. Klicken Sie auf **Test-E-Mail senden**, um den Versand zu testen. Die E-Mail wird an Ihre Benutzer-E-Mail-Adresse gesendet.

## E-Mail-Konto bearbeiten

1. Klicken Sie auf ein E-Mail-Konto in der Liste.
2. Nehmen Sie die gewünschten Änderungen vor.
3. Klicken Sie auf **Speichern**.

## E-Mail-Konto löschen

E-Mail-Konten können gelöscht werden, wenn keine E-Mails mehr damit verknüpft sind. Klicken Sie auf **Löschen** im Bearbeitungsformular.

## Beispielkonfigurationen

### Gmail
- **IMAP-Host:** imap.gmail.com, Port 993, SSL
- **SMTP-Host:** smtp.gmail.com, Port 587, STARTTLS
- **Hinweis:** Verwenden Sie App-Passwörter statt Ihres Gmail-Passworts

### Microsoft 365 / Outlook
- **IMAP-Host:** outlook.office365.com, Port 993, SSL
- **SMTP-Host:** smtp.office365.com, Port 587, STARTTLS

### Eigener Server (cPanel/Plesk)
- **IMAP-Host:** mail.ihredomain.de, Port 993, SSL
- **SMTP-Host:** mail.ihredomain.de, Port 465, SSL
- Zugangsdaten erhalten Sie von Ihrem Hoster

> **Tipp:** Die Ordnerstruktur des E-Mail-Kontos wird automatisch synchronisiert. Neue E-Mails können direkt in der Anwendung gelesen und versendet werden. Aktivieren Sie die automatische Zuweisung nur, wenn Sie sicher sind, dass eingehende E-Mails korrekt zugeordnet werden können.

> **Hinweis:** Passwörter werden verschlüsselt in der Datenbank gespeichert. Stellen Sie sicher, dass die Serveradressen und Ports korrekt sind. Bei Gmail und anderen Anbietern mit Zwei-Faktor-Authentifizierung müssen Sie spezielle App-Passwörter erstellen. Die Verschlüsselung (SSL/TLS) ist dringend empfohlen für sichere Verbindungen.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [E-Mail](../11-e-mail/0-index.md) - E-Mail-Modul verwenden
- [E-Mail-Vorlagen](25-email-vorlagen.md) - E-Mail-Vorlagen verwalten
