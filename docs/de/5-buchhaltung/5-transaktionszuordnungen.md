# Transaktionszuordnungen

Im Bereich **Transaktionszuordnungen** ordnen Sie Banktransaktionen den zugehörigen Aufträgen und Rechnungen zu. Das System schlägt auf Basis von Verwendungszweck, Betrag und Kundendaten passende Zuordnungen vor. Eine Transaktion kann auch auf mehrere Aufträge aufgeteilt werden.

## Übersicht

1. Navigieren Sie zu **Buchhaltung > Transaktionszuordnungen**.

   ![Transaktionszuordnungen](../screenshots/28-transaktionszuordnung-liste.png)

2. Die Tabelle zeigt alle Zuordnungen zwischen Transaktionen und Aufträgen mit folgenden Spalten:
   - **Transaktion** - Angaben zur Banktransaktion (Betrag, Datum, Verwendungszweck)
   - **Auftrag** - Der zugeordnete Auftrag bzw. die zugeordnete Rechnung
   - **Betrag** - Der zugeordnete Betrag (kann bei Teilzuordnungen vom Gesamtbetrag der Transaktion abweichen)
   - **Zuordnungsstatus** - Ob die Zuordnung akzeptiert oder noch zu prüfen ist

## Zuordnungsstatus

| Status | Bedeutung |
|---|---|
| **Akzeptiert** | Die Zuordnung wurde geprüft und als korrekt bestätigt |
| **Nicht akzeptiert** | Die Zuordnung wurde vorgeschlagen oder erstellt, muss aber noch geprüft werden |

## Transaktion manuell zuordnen

1. Suchen Sie die gewünschte Transaktion in der Liste der nicht zugeordneten Transaktionen.
2. Klicken Sie auf **Zuordnen**.
3. Suchen Sie den passenden Auftrag oder die passende Rechnung.
4. Geben Sie den zuzuordnenden Betrag ein.
5. Bestätigen Sie die Zuordnung.

## Eine Transaktion auf mehrere Aufträge aufteilen

Es kommt häufig vor, dass ein Kunde mehrere offene Rechnungen mit einer einzigen Überweisung begleicht. In diesem Fall können Sie eine Transaktion mehreren Aufträgen zuordnen:

1. Ordnen Sie den ersten Auftrag mit dem entsprechenden Teilbetrag zu.
2. Ordnen Sie weitere Aufträge mit den jeweiligen Teilbeträgen zu.
3. Die Summe aller Teilbeträge sollte dem Gesamtbetrag der Transaktion entsprechen.

> **Hinweis:** Achten Sie darauf, dass die Summe der zugeordneten Beträge den Transaktionsbetrag nicht übersteigt.

## Offene Transaktionen anzeigen

Über die Filterfunktion können Sie sich gezielt alle Transaktionen anzeigen lassen, die noch keinem Auftrag zugeordnet sind. So behalten Sie den Überblick, welche Zahlungseingänge noch bearbeitet werden müssen.

## Tipps für die korrekte Zuordnung

Die Zuordnung von Transaktionen zu Aufträgen erfordert Sorgfalt. Beachten Sie folgende Punkte:

- **Verwendungszweck prüfen** - Vergleichen Sie den Verwendungszweck der Transaktion mit der Rechnungsnummer des Auftrags. Häufig enthält der Verwendungszweck die Rechnungsnummer oder Teile davon. Beachten Sie, dass Kunden die Rechnungsnummer gelegentlich fehlerhaft oder unvollständig angeben.
- **Betrag vergleichen** - Der Transaktionsbetrag sollte mit dem offenen Saldo des Auftrags übereinstimmen. Bei Sammelüberweisungen addieren sich die offenen Beträge mehrerer Rechnungen.
- **Saldo beachten** - Das Feld **Saldo** am Auftrag zeigt den noch offenen Restbetrag an. Ein Saldo von 0 bedeutet, dass der Auftrag vollständig bezahlt ist.
- **Zahlungsart berücksichtigen** - Bei Lastschriften und Kreditkartenzahlungen liegt das Transaktionsdatum in der Regel nahe am Rechnungsdatum. Bei Überweisungen kann es einige Tage bis Wochen abweichen.
- **IBAN vergleichen** - Prüfen Sie die Gegenpartei-IBAN der Transaktion mit den hinterlegten Bankverbindungen des Kontakts.

## Weiterführende Themen

- [Transaktionen](4-transaktionen.md) - Transaktionsliste anzeigen
- [Aufträge](../4-auftraege/0-index.md) - Zugehörige Aufträge einsehen
- [Buchhaltung](0-index.md) - Zurück zur Buchhaltungsübersicht
