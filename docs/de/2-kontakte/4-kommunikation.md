# Kommunikation

Im Tab **Kommunikation** verwalten Sie alle Kontaktmöglichkeiten eines Kontakts. Dazu gehören E-Mail-Adressen, Telefonnummern, Mobilnummern, Faxnummern und Webseiten. Die hier hinterlegten Daten werden bei der Auftragsanlage, beim E-Mail-Versand und in anderen Bereichen von Nuxbe automatisch herangezogen.

## Kommunikation anzeigen

1. Öffnen Sie die [Detailansicht](2-kontakt-detail.md) eines Kontakts.
2. Wechseln Sie zum Tab **Kommunikation**.

   ![Kommunikationsliste eines Kontakts](../screenshots/22-kommunikation-liste.png)

3. Sie sehen eine Tabelle aller hinterlegten Kontaktmöglichkeiten mit folgenden Spalten:
   - **Typ** - Art der Kontaktmöglichkeit
   - **Wert** - Die eigentliche Kontaktinformation (z. B. die E-Mail-Adresse oder Telefonnummer)

## Verfügbare Typen

Folgende Typen stehen für Kontaktmöglichkeiten zur Verfügung:

| Typ | Beschreibung | Beispiel |
|---|---|---|
| **E-Mail** | E-Mail-Adresse | info@musterfirma.de |
| **Telefon** | Festnetznummer | +49 89 123456 |
| **Mobil** | Mobilfunknummer | +49 170 1234567 |
| **Fax** | Faxnummer | +49 89 123457 |
| **Website** | Internetadresse | www.musterfirma.de |
| **Sonstige** | Weitere Kontaktdaten | z. B. Social-Media-Profile |

## Primäre Kontaktmöglichkeit

Für jeden Typ kann eine Kontaktmöglichkeit als primär markiert werden. Die primäre E-Mail-Adresse wird z. B. beim Versand von Rechnungen oder Angeboten als Standard-Empfänger verwendet. Die primäre Telefonnummer erscheint als erste Nummer in der Übersicht.

## Kontaktoptionen auf Kontakt- und Adressebene

Kontaktmöglichkeiten können auf zwei Ebenen gepflegt werden:

- **Kontaktebene** - Allgemeine Kontaktdaten, die für den gesamten Kontakt gelten (z. B. die zentrale Firmennummer)
- **Adressebene** - Kontaktdaten, die einer bestimmten Adresse zugeordnet sind (z. B. die Durchwahl einer Niederlassung)

Die Kontaktoptionen auf Adressebene verwalten Sie direkt in der jeweiligen Adresse. Weitere Informationen finden Sie unter [Adressen](3-adressen.md).

### Welche Ebene wird verwendet?

Bei der Auftragsanlage werden die Kontaktoptionen der ausgewählten Rechnungsadresse herangezogen. Gibt es dort keine passende Kontaktoption, wird auf die Kontaktoptionen der Kontaktebene zurückgegriffen.

Beim E-Mail-Versand wird die primäre E-Mail-Adresse der jeweiligen Ebene vorgeschlagen. Sie können die Empfängeradresse vor dem Versand manuell anpassen.

## Neue Kontaktmöglichkeit hinzufügen

1. Klicken Sie auf **Neu** im Kommunikations-Tab.
2. Wählen Sie den **Typ** aus dem Dropdown (z. B. E-Mail, Telefon, Mobil, Fax, Website).
3. Geben Sie den **Wert** ein (z. B. die E-Mail-Adresse oder Telefonnummer).
4. Klicken Sie auf **Speichern**.

Der neue Eintrag erscheint anschließend in der Kommunikationsliste.

## Kontaktmöglichkeit bearbeiten

1. Klicken Sie auf den gewünschten Eintrag in der Tabelle.
2. Ändern Sie den Typ oder den Wert.
3. Klicken Sie auf **Speichern**.

## Kontaktmöglichkeit löschen

1. Klicken Sie auf **Löschen** neben dem gewünschten Eintrag.
2. Bestätigen Sie den Löschvorgang im angezeigten Dialog.

## Automatische Verwendung

Die hier hinterlegten Kontaktmöglichkeiten werden in folgenden Bereichen automatisch verwendet:

- **Auftragsanlage** - Die E-Mail-Adresse der Rechnungsadresse wird als Empfänger für den Belegversand vorgeschlagen.
- **E-Mail-Versand** - Beim Erstellen einer E-Mail aus Nuxbe wird die primäre E-Mail-Adresse des Kontakts vorausgefüllt.
- **Kontaktliste** - Die primären Kontaktdaten werden in der Übersicht angezeigt.
- **Mahnwesen** - Mahnungen werden bevorzugt an die E-Mail-Adresse der **Rechnungsadresse des Auftrags** versendet. Fallback: Rechnungsadresse des Kontakts, dann Hauptadresse des Kontakts.

### Voraussetzung für den E-Mail-Versand von Mahnungen

Der automatische Mahnversand verwendet bevorzugt die E-Mail-Adresse der **Rechnungsadresse des Auftrags**. Ist dort keine E-Mail hinterlegt, wird die **Rechnungsadresse des Kontakts** (`Kontakt > Rechnungsadresse`) geprüft. Ist auch dort keine E-Mail vorhanden, wird die **Hauptadresse** des Kontakts verwendet. Fehlt an allen drei Adressen eine E-Mail-Adresse, kann keine Mahnung per E-Mail versendet werden.

> **Wichtig:** Stellen Sie sicher, dass an der Rechnungsadresse des Auftrags oder zumindest an der Hauptadresse des Kontakts eine gültige E-Mail-Adresse hinterlegt ist. Weitere Informationen finden Sie unter [Adressen](3-adressen.md) und [Mahnungen](../5-buchhaltung/2-mahnungen.md).

Weitere Informationen zum Mahnwesen finden Sie unter [Mahnungen](../5-buchhaltung/2-mahnungen.md).

## Welche E-Mail-Adresse wird für den automatischen Versand verwendet?

Eine der häufigsten Fragen im Support lautet: _„Mein Kunde bekommt keine E-Mail — woran liegt das?"_ Der Grund ist fast immer, dass die E-Mail-Adresse nicht an der richtigen Stelle hinterlegt ist. Nuxbe verwendet für verschiedene Zwecke **unterschiedliche E-Mail-Adressen** und sucht diese an verschiedenen Stellen. Hier erklären wir genau, wie das funktioniert.

### E-Mail-Adresse für Rechnungen und Belege

Wenn Nuxbe eine Rechnung, eine Auftragsbestätigung, einen Lieferschein oder ein anderes Belegdokument per E-Mail versenden soll, wird die E-Mail-Adresse in folgender Reihenfolge gesucht:

| Schritt | Wo wird gesucht? | Erklärung |
|---|---|---|
| 1 | **E-Mail auf der Rechnungsadresse des Auftrags** | Nuxbe prüft zuerst die E-Mail-Adresse, die direkt an der Adresse hinterlegt ist, die im Auftrag als Rechnungsadresse ausgewählt wurde. Das ist die wichtigste Stelle. |
| 2 | **E-Mail auf der Rechnungsadresse des Kontakts** | Wenn auf der Rechnungsadresse des Auftrags keine E-Mail hinterlegt ist, sucht Nuxbe nach einer Adresse mit dem Adresstyp „Rechnungsadresse" beim Kontakt und prüft dort die E-Mail. |
| 3 | **E-Mail auf der Hauptadresse des Kontakts** | Wenn auch dort keine E-Mail gefunden wird, wird die Hauptadresse (erste Adresse) des Kontakts geprüft. |

> **Wichtig:** Wenn an **keiner** dieser drei Stellen eine E-Mail-Adresse hinterlegt ist, kann das Dokument **nicht** per E-Mail versendet werden. Nuxbe zeigt in diesem Fall einen Fehler an.

### E-Mail-Adresse für Mahnungen

Für Mahnungen und Zahlungserinnerungen gilt **dieselbe Suchkette** wie für Rechnungen:

1. E-Mail auf der Rechnungsadresse des Auftrags
2. E-Mail auf der Rechnungsadresse des Kontakts
3. E-Mail auf der Hauptadresse des Kontakts

Das ist deshalb so, weil Mahnungen sich immer auf einen bestimmten Auftrag (bzw. eine bestimmte Rechnung) beziehen und an denselben Empfänger gehen sollen wie die ursprüngliche Rechnung. Weitere Informationen zum Mahnwesen finden Sie unter [Mahnungen](../5-buchhaltung/2-mahnungen.md).

### E-Mail-Adresse für allgemeine Benachrichtigungen

Für allgemeine Benachrichtigungen und Mitteilungen, die nicht an einen bestimmten Auftrag gebunden sind, verwendet Nuxbe die **primäre E-Mail-Adresse auf Kontaktebene** — also die E-Mail, die im Tab Kommunikation als primär markiert ist.

### Übersicht: Welche E-Mail wird wofür verwendet?

| Zweck | Wo wird die E-Mail gesucht? |
|---|---|
| Rechnungsversand | Rechnungsadresse des Auftrags → Rechnungsadresse des Kontakts → Hauptadresse des Kontakts |
| Mahnungsversand | Rechnungsadresse des Auftrags → Rechnungsadresse des Kontakts → Hauptadresse des Kontakts |
| Angebotsversand | Rechnungsadresse des Auftrags → Rechnungsadresse des Kontakts → Hauptadresse des Kontakts |
| Lieferscheinversand | Rechnungsadresse des Auftrags → Rechnungsadresse des Kontakts → Hauptadresse des Kontakts |
| Allgemeine Benachrichtigungen | Primäre E-Mail auf Kontaktebene (Tab Kommunikation) |

### Häufiges Missverständnis

Viele Anwender tragen eine E-Mail-Adresse nur im Tab **Kommunikation** auf der **Kontaktebene** ein und gehen davon aus, dass diese für den Belegversand verwendet wird. Das ist **nicht** der Fall.

Die E-Mail im Tab Kommunikation auf Kontaktebene wird nur für **allgemeine Benachrichtigungen** verwendet. Für den Versand von Rechnungen, Mahnungen und anderen Belegen wird immer die E-Mail auf der **Adressebene** herangezogen. Hinterlegen Sie die E-Mail-Adresse deshalb immer auch an der jeweiligen **Adresse**. Wie das geht, erfahren Sie unter [E-Mail-Adresse auf Adressebene](3-adressen.md#e-mail-adresse-auf-adressebene-für-den-rechnungsversand).

## Fehlerbehebung: „Mein Kunde erhält keine E-Mails"

Wenn ein Kunde keine E-Mails (Rechnungen, Mahnungen, Angebote usw.) von Nuxbe erhält, prüfen Sie die folgenden Punkte in dieser Reihenfolge:

### Schritt 1: Rechnungsadresse des Auftrags prüfen

1. Öffnen Sie den betroffenen **Auftrag** (z. B. die Rechnung, die nicht zugestellt wurde).
2. Prüfen Sie, welche **Rechnungsadresse** im Auftrag eingetragen ist.
3. Öffnen Sie diese Adresse (klicken Sie auf die Adresse im Auftrag oder navigieren Sie über den Kontakt → Tab Adressen).
4. Prüfen Sie, ob bei dieser Adresse eine **E-Mail-Adresse** in den Kontaktoptionen hinterlegt ist.

**Ergebnis:** Wenn hier eine E-Mail-Adresse hinterlegt ist, sollte der Versand funktionieren. Wenn nicht, weiter mit Schritt 2.

### Schritt 2: Rechnungsadresse des Kontakts prüfen

1. Öffnen Sie den **Kontakt** des Kunden.
2. Wechseln Sie zum Tab **Adressen**.
3. Suchen Sie eine Adresse mit dem Adresstyp **Rechnungsadresse**.
4. Prüfen Sie, ob dort eine **E-Mail-Adresse** hinterlegt ist.

**Ergebnis:** Wenn hier eine E-Mail vorhanden ist, wird diese als Fallback verwendet. Wenn nicht, weiter mit Schritt 3.

### Schritt 3: Hauptadresse des Kontakts prüfen

1. Bleiben Sie im Tab **Adressen** des Kontakts.
2. Öffnen Sie die **erste Adresse** (Hauptadresse).
3. Prüfen Sie, ob dort eine **E-Mail-Adresse** hinterlegt ist.

**Ergebnis:** Wenn hier eine E-Mail vorhanden ist, wird diese als letzter Fallback verwendet. Wenn auch hier keine E-Mail vorhanden ist, kann Nuxbe das Dokument nicht per E-Mail versenden.

### Schritt 4: Kommunikation auf Kontaktebene prüfen

1. Wechseln Sie zum Tab **Kommunikation** des Kontakts.
2. Prüfen Sie, ob dort E-Mail-Einträge vorhanden sind.

> **Hinweis:** Wenn hier eine E-Mail vorhanden ist, aber auf der Adressebene nicht, erklärt das das Problem. Die E-Mail auf Kontaktebene wird **nicht** für den Belegversand verwendet. Übertragen Sie die E-Mail-Adresse auf die passende Adresse (siehe [Adressen](3-adressen.md#e-mail-adresse-auf-adressebene-für-den-rechnungsversand)).

### Schritt 5: Versandhistorie im Auftrag prüfen

1. Öffnen Sie den betroffenen **Auftrag**.
2. Wechseln Sie zum Tab **Kommunikation** oder **Historie** des Auftrags.
3. Prüfen Sie, ob die E-Mail tatsächlich versendet wurde oder ob ein Fehler aufgetreten ist.

Mögliche Ergebnisse:

- **E-Mail wurde versendet:** Die E-Mail wurde gesendet, hat den Empfänger aber möglicherweise nicht erreicht (Spam-Filter, ungültige Adresse). Prüfen Sie, ob die E-Mail-Adresse korrekt geschrieben ist.
- **Fehler beim Versand:** Prüfen Sie die Fehlermeldung. Häufige Ursachen sind: fehlende E-Mail-Adresse, ungültige E-Mail-Adresse oder Probleme mit der E-Mail-Konfiguration.
- **Kein Versandversuch:** Die E-Mail wurde noch nicht versendet. Prüfen Sie, ob der Versand ausgelöst wurde.

### Zusammenfassung der häufigsten Ursachen

| Problem | Lösung |
|---|---|
| E-Mail nur auf Kontaktebene, nicht auf Adressebene | E-Mail auf der Rechnungsadresse hinterlegen |
| E-Mail auf falscher Adresse hinterlegt | E-Mail auf der Adresse hinterlegen, die im Auftrag als Rechnungsadresse ausgewählt ist |
| E-Mail-Adresse hat Tippfehler | E-Mail-Adresse auf der Adresse korrigieren |
| Keine E-Mail-Adresse hinterlegt | E-Mail-Adresse auf der Rechnungsadresse des Auftrags eintragen |
| E-Mail landet im Spam | Empfänger bitten, den Absender auf die Whitelist zu setzen |

## Weiterführende Themen

- [Kontaktdetails](2-kontakt-detail.md) - Zurück zur Kontaktdetailansicht
- [Adressen](3-adressen.md) - Adressen und deren Kontaktoptionen verwalten
- [E-Mail-Adresse auf Adressebene](3-adressen.md#e-mail-adresse-auf-adressebene-für-den-rechnungsversand) - Detaillierte Anleitung zur E-Mail-Einrichtung auf Adressen
- [E-Mail](../11-e-mail/0-index.md) - E-Mails direkt aus Nuxbe versenden
- [Mahnungen](../5-buchhaltung/2-mahnungen.md) - Mahnwesen und Zahlungserinnerungen
