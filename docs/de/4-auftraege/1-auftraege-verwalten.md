# Aufträge verwalten

In der Auftragsliste sehen Sie alle Aufträge, Rechnungen, Angebote und weitere Auftragsarten auf einen Blick. Von hier aus können Sie neue Aufträge anlegen, bestehende filtern und direkt in die Detailansicht wechseln.

## Auftragsliste öffnen

1. Klicken Sie in der Sidebar auf **Aufträge**.

   ![Auftragsliste mit allen Auftragsarten](../screenshots/08-auftraege-liste.png)

2. Die Tabelle zeigt alle Aufträge mit folgenden Spalten:

   | Spalte | Beschreibung |
   |---|---|
   | **Auftragsnummer** | Eindeutige, automatisch vergebene Nummer des Auftrags |
   | **Auftragsart** | Typ des Auftrags (z. B. Angebot, Auftrag, Rechnung, Gutschrift) |
   | **Kontakt** | Zugehöriger Kunde oder Lieferant |
   | **Rechnungsnummer** | Rechnungsnummer (nur bei Rechnungen und Gutschriften) |
   | **Nettosumme** | Gesamtbetrag ohne Mehrwertsteuer |
   | **Bruttosumme** | Gesamtbetrag inklusive Mehrwertsteuer |
   | **Saldo** | Offener Restbetrag des Auftrags (relevant bei Rechnungen) |
   | **Lieferdatum** | Geplantes oder tatsächliches Lieferdatum |
   | **Erstellt am** | Datum, an dem der Auftrag angelegt wurde |

## Nach Auftragsart filtern

Oberhalb der Tabelle befinden sich **Reiter**, mit denen Sie die Anzeige auf eine bestimmte Auftragsart einschränken können:

- **Alle** - Zeigt sämtliche Aufträge unabhängig vom Typ
- **Angebote** - Nur Angebote
- **Aufträge** - Nur bestätigte Aufträge
- **Rechnungen** - Nur Rechnungen
- **Gutschriften** - Nur Gutschriften
- **Abonnements** - Nur wiederkehrende Aufträge
- **Retouren** - Nur Retouren
- **Einkauf** - Nur Einkaufsaufträge

Klicken Sie auf den gewünschten Reiter, um die Liste entsprechend zu filtern.

## Aufträge suchen

Nutzen Sie das Suchfeld oberhalb der Tabelle, um Aufträge nach Auftragsnummer, Rechnungsnummer, Kontaktname oder anderen Kriterien zu finden. Die Ergebnisse werden in Echtzeit aktualisiert.

## Filter verwenden

### Spaltenfilter

Verwenden Sie die Filterzeile unterhalb der Spaltenüberschriften, um gezielt nach Werten in einzelnen Spalten zu filtern. So können Sie beispielsweise nur Aufträge eines bestimmten Kontakts oder mit einem bestimmten Saldo anzeigen lassen.

### Gespeicherte Filter

1. Klicken Sie auf **Gespeicherte Filter**, um häufig verwendete Filtereinstellungen aufzurufen.
2. Wählen Sie einen vordefinierten Filter aus oder erstellen Sie einen neuen, indem Sie die gewünschten Filterbedingungen einstellen und speichern.

Gespeicherte Filter eignen sich besonders für wiederkehrende Abfragen wie z. B. "Offene Rechnungen der letzten 30 Tage" oder "Alle Angebote in Verhandlung".

## Neuen Auftrag erstellen

1. Klicken Sie auf die Schaltfläche **Neu** oben rechts.
2. Wählen Sie die **Auftragsart** (Angebot, Auftrag, Rechnung etc.).
3. Wählen Sie den **Kontakt** -- die Rechnungs- und Lieferadresse werden automatisch aus den hinterlegten Adressen des Kontakts übernommen.
4. Füllen Sie die weiteren Kopfdaten aus (Zahlungsart, Zahlungsziel, Lieferdatum etc.).
5. Klicken Sie auf **Speichern**, um den Auftrag anzulegen.

> **Tipp:** Nachdem der Auftrag gespeichert wurde, können Sie in der [Detailansicht](2-auftrag-detail.md) Positionen hinzufügen und den Auftrag weiter bearbeiten.

## Mehrere Aufträge gleichzeitig bearbeiten (Sammelaktionen)

In der Auftragsliste können Sie mehrere Aufträge gleichzeitig auswählen und Sammelaktionen ausführen.

### Aufträge auswählen

1. Aktivieren Sie die Kontrollkästchen in der ersten Spalte der Tabelle, um einzelne Aufträge zu markieren.
2. Optional: Verwenden Sie das Kontrollkästchen in der Kopfzeile, um alle sichtbaren Aufträge auf einmal auszuwählen.

### Sammelversand per E-Mail

1. Wählen Sie die gewünschten Aufträge aus.
2. Klicken Sie auf die Schaltfläche **E-Mail senden** in der Aktionsleiste oberhalb der Tabelle.
3. Für jeden ausgewählten Auftrag wird ein PDF mit dem jeweiligen Drucklayout erstellt und per E-Mail an den hinterlegten Kontakt versendet.
4. Der Versand wird für jeden Auftrag einzeln im Tab **Kommunikation** der jeweiligen Detailansicht protokolliert.

> **Tipp:** Sammelversand eignet sich besonders für monatliche Rechnungsläufe, bei denen viele Rechnungen gleichzeitig versendet werden sollen.

### Sammeldruck

1. Wählen Sie die gewünschten Aufträge aus.
2. Klicken Sie auf **Drucken** in der Aktionsleiste.
3. Wählen Sie das gewünschte Drucklayout.
4. Die PDFs werden für alle ausgewählten Aufträge erzeugt.

## Auftrag duplizieren

Um einen bestehenden Auftrag als Vorlage zu nutzen:

1. Öffnen Sie den gewünschten Auftrag in der [Detailansicht](2-auftrag-detail.md).
2. Klicken Sie auf **Duplizieren**.
3. Ein neuer Auftrag wird mit denselben Kopfdaten und Positionen erstellt.
4. Passen Sie die Daten nach Bedarf an und klicken Sie auf **Speichern**.

## Weiterführende Themen

- [Auftragsdetails](2-auftrag-detail.md) - Einzelnen Auftrag im Detail ansehen und bearbeiten
- [Auftragspositionen](3-auftragspositionen.md) - Positionen innerhalb eines Auftrags verwalten
- [Auftragspositionen-Liste](4-auftragspositionen-liste.md) - Positionen auftragsübergreifend durchsuchen
- [Einstellungen > Auftragsarten](../14-einstellungen/11-auftragsarten.md) - Auftragsarten konfigurieren
