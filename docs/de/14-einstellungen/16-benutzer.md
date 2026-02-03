# Benutzer

In der Benutzerverwaltung legen Sie Benutzerkonten an, weisen Rollen und Berechtigungen zu und verwalten den Zugriff auf das System.

## Übersicht

1. Navigieren Sie zu **Einstellungen > Benutzer & Rechte > Benutzer**.

   ![Benutzer verwalten](../screenshots/117-einstellungen-benutzer.png)

2. Die Tabelle zeigt alle registrierten Benutzer mit folgenden Spalten:
   - **Name** - Vor- und Nachname des Benutzers
   - **E-Mail-Adresse** - Login-E-Mail und Kontaktadresse
   - **Status** - Ob der Benutzer aktiv ist
   - **Rollen** - Zugewiesene Berechtigungsrollen
   - **Sprache** - Bevorzugte Systemsprache

## Neuen Benutzer anlegen

1. Klicken Sie auf **Neu**.
2. Füllen Sie das Formular aus:

   **Basis-Informationen:**
   - **Vorname** - Vorname des Benutzers
   - **Nachname** - Nachname des Benutzers
   - **E-Mail** - E-Mail-Adresse für Login und Benachrichtigungen
   - **Passwort** - Sicheres Passwort (mindestens 8 Zeichen)
   - **Passwort bestätigen** - Wiederholung zur Bestätigung
   - **Ist aktiv** - Aktivieren Sie den Benutzer für den Zugriff

   **Systemeinstellungen:**
   - **Sprache** - Bevorzugte Sprache der Benutzeroberfläche
   - **Zeitzone** - Zeitzone für Datums- und Zeitangaben
   - **Währung** - Bevorzugte Währung für Anzeigen
   - **Dark Mode** - Aktiviert dunkles Farbschema
   - **Farbe** - Persönliche Farbe für Kalender und Markierungen

   **Berechtigungen:**
   - **Rollen** - Wählen Sie eine oder mehrere Rollen aus
   - **Mandanten** - Zugriff auf bestimmte Mandanten
   - **Übergeordneter Benutzer** - Optional eine Hierarchieebene

   **Kontakt-Zuordnung:**
   - **Verknüpfter Kontakt** - Optional Zuordnung zu einem Kundenkontakt
   - **Standort** - Arbeitsstelle des Benutzers

   **Kommunikation:**
   - **Telefon** - Dienstliche Telefonnummer
   - **Mobiltelefon** - Handynummer
   - **E-Mail-Konten** - Zugeordnete E-Mail-Postfächer
   - **Standard-E-Mail-Konto** - Vorausgewähltes Konto für Versand

   **Drucker:**
   - **Drucker** - Zugewiesene Drucker für direkten Ausdruck

3. Klicken Sie auf **Speichern**.

## Benutzer bearbeiten

1. Klicken Sie auf einen Benutzer in der Liste.
2. Sie gelangen zur Detailansicht mit mehreren Tabs:
   - **Allgemein** - Stammdaten und Systemeinstellungen
   - **Berechtigungen** - Rollen und spezifische Rechte
   - **E-Mail-Konten** - Verknüpfte Postfächer
   - **Kalender** - Kalendereinstellungen
   - **Dashboard** - Widget-Konfiguration
3. Nehmen Sie die gewünschten Änderungen vor.
4. Klicken Sie auf **Speichern**.

## Passwort ändern

### Als Administrator:
1. Öffnen Sie den Benutzer.
2. Navigieren Sie zum Tab **Allgemein**.
3. Geben Sie ein neues Passwort ein.
4. Bestätigen Sie das Passwort.
5. Klicken Sie auf **Speichern**.

### Als Benutzer selbst:
Benutzer können ihr eigenes Passwort über ihr Profil ändern.

## Benutzer deaktivieren

Anstatt Benutzer zu löschen, sollten Sie diese deaktivieren:

1. Öffnen Sie den Benutzer.
2. Deaktivieren Sie die Option **Ist aktiv**.
3. Klicken Sie auf **Speichern**.

Deaktivierte Benutzer können sich nicht mehr anmelden, bleiben aber in der Historie erhalten.

## Benutzer löschen

1. Öffnen Sie den Benutzer.
2. Klicken Sie auf **Löschen**.
3. Bestätigen Sie die Sicherheitsabfrage.

> **Hinweis:** Benutzer mit zugeordneten Datensätzen (Aufträge, Tickets, etc.) werden nur als gelöscht markiert und bleiben für Audit-Zwecke erhalten.

## Besonderheiten

### Rollen-Zuweisung

Benutzer erhalten ihre Berechtigungen primär über Rollen. Ein Benutzer kann mehrere Rollen haben, die Berechtigungen werden dann kombiniert. Siehe [Berechtigungen](17-berechtigungen.md) für Details.

### E-Mail-Integration

Benutzer können mehrere E-Mail-Konten verwalten. Das Standard-Konto wird für ausgehende E-Mails verwendet. E-Mails können direkt aus dem System versendet und empfangen werden.

### Kalender-Integration

Jeder Benutzer hat einen persönlichen Kalender. Termine können freigegeben und mit Kollegen synchronisiert werden.

### Dashboard-Widgets

Benutzer können ihr Dashboard individuell gestalten. Widgets zeigen wichtige Kennzahlen, offene Aufgaben oder aktuelle Vorgänge an.

### Benutzer-Hierarchie

Über den übergeordneten Benutzer können Sie Hierarchien abbilden. Dies ist nützlich für Genehmigungsprozesse und Berichtswege.

> **Wichtig:** Vergeben Sie Berechtigungen restriktiv nach dem Prinzip der minimalen Rechte. Jeder Benutzer sollte nur die Rechte haben, die er für seine Arbeit benötigt.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [Berechtigungen](17-berechtigungen.md) - Rollen und Rechte verwalten
- [API-Tokens](18-api-tokens.md) - Technische Zugänge einrichten
