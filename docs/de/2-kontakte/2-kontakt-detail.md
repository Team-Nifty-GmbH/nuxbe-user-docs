# Kontaktdetails

In der Detailansicht sehen und bearbeiten Sie alle Informationen zu einem einzelnen Kontakt. Die Ansicht ist in einen Kopfbereich und mehrere Tabs unterteilt.

## Detailansicht öffnen

1. Navigieren Sie zur [Kontaktliste](1-kontakte-verwalten.md).
2. Klicken Sie auf den gewünschten Kontakt in der Tabelle.

   ![Detailansicht eines Kontakts](../screenshots/07-kontakt-detail.png)

## Kopfbereich

Am oberen Rand der Detailansicht finden Sie die wichtigsten Informationen auf einen Blick:

- **Avatar** - Profilbild des Kontakts. Klicken Sie darauf, um ein Bild hochzuladen oder zu ändern.
- **Name** - Firmenname oder Personenname, prominent dargestellt
- **Kundennummer** - Eindeutige Identifikationsnummer
- **Debitorennummer** - Nummer für die Debitorenbuchhaltung
- **Kreditorennummer** - Nummer für die Kreditorenbuchhaltung (bei Lieferanten)

Im Kopfbereich befinden sich auch die Aktionsschaltflächen:

- **Speichern** - Übernimmt alle vorgenommenen Änderungen
- **Löschen** - Entfernt den Kontakt nach Bestätigung

## Tab: Allgemein

Der Tab **Allgemein** enthält die Stammdaten und Einstellungen des Kontakts.

### Mandant und Zuordnung

- **Mandant** - Wählen Sie den Mandanten aus, dem dieser Kontakt zugeordnet ist. Dies ist relevant, wenn Sie mehrere Unternehmen in Nuxbe verwalten.

### Zahlungseinstellungen

- **Zahlungsart** - Standard-Zahlungsart für neue Aufträge dieses Kontakts (z. B. Überweisung, Lastschrift, Kreditkarte). Die Auswahl erfolgt über ein Dropdown-Menü. Die verfügbaren Zahlungsarten werden in den [Einstellungen > Zahlungsarten](../14-einstellungen/12-zahlungsarten.md) konfiguriert.
- **Zahlungsziel** - Standard-Zahlungsziel in Tagen für neue Aufträge. Geben Sie die Anzahl der Tage ein, die dem Kontakt für die Bezahlung gewährt werden.

### Preise und Rabatte

- **Preisliste** - Weisen Sie dem Kontakt eine Preisliste zu. Beim Erstellen neuer Aufträge werden automatisch die Preise aus dieser Liste verwendet. Die Preislisten verwalten Sie unter [Einstellungen > Preislisten](../14-einstellungen/15-preislisten.md).
- **Rabattgruppe** - Ordnen Sie den Kontakt einer Rabattgruppe zu. Die Rabattgruppe bestimmt, welche automatischen Rabatte bei der Auftragsanlage greifen. Die Rabattgruppen konfigurieren Sie unter [Einstellungen > Rabattgruppen](../14-einstellungen/13-rabattgruppen.md).

### Klassifizierung

- **Kontaktherkunft** - Erfassen Sie, woher der Kontakt stammt (z. B. Webseite, Messe, Empfehlung, Kaltakquise). Die verfügbaren Herkünfte werden in den Einstellungen gepflegt.
- **Branche** - Ordnen Sie den Kontakt einer Branche zu. Die Branchen verwalten Sie unter [Einstellungen > Branchen](../14-einstellungen/9-branchen.md).
- **Kategorien** - Weisen Sie dem Kontakt eine oder mehrere Kategorien zu. Die Auswahl erfolgt als Mehrfachauswahl. Kategorien dienen der flexiblen Gruppierung und können in den [Einstellungen > Kategorien](../14-einstellungen/1-kategorien.md) angelegt werden.
- **Tags** - Vergeben Sie freie Schlagwörter, um den Kontakt zusätzlich zu kennzeichnen. Tags ermöglichen eine schnelle Filterung in der Kontaktliste. Die Tags verwalten Sie unter [Einstellungen > Tags](../14-einstellungen/6-tags.md).

## Tab: Adressen

Der Tab **Adressen** zeigt eine Tabelle aller hinterlegten Adressen des Kontakts.

Jede Adresse enthält die folgenden Informationen:

- Adresstyp (z. B. Hauptadresse, Lieferadresse, Rechnungsadresse)
- Firma
- Straße und Hausnummer
- PLZ und Ort
- Land

Sie können Adressen hinzufügen, bearbeiten und löschen. Eine ausführliche Beschreibung finden Sie unter [Adressen verwalten](3-adressen.md).

## Tab: Aufträge

Der Tab **Aufträge** listet alle Aufträge auf, die mit diesem Kontakt verknüpft sind. Die Tabelle zeigt:

- **Auftragsnummer** - Eindeutige Nummer des Auftrags
- **Auftragsart** - Typ des Auftrags (z. B. Angebot, Auftrag, Rechnung, Gutschrift)
- **Beträge** - Netto- und Bruttobeträge
- **Datum** - Erstellungs- und Fälligkeitsdatum
- **Status** - Aktueller Bearbeitungsstatus

Klicken Sie auf einen Auftrag, um dessen [Detailansicht](../4-auftraege/2-auftrag-detail.md) zu öffnen.

## Tab: Leads

Der Tab **Leads** zeigt alle Verkaufschancen, die mit diesem Kontakt verknüpft sind. Leads geben Ihnen einen Überblick über laufende Verkaufsprozesse.

Klicken Sie auf einen Lead, um dessen [Detailansicht](../3-verkauf/2-lead-detail.md) zu öffnen. Neue Leads können über das Modul [Verkauf > Leads](../3-verkauf/0-index.md) angelegt und diesem Kontakt zugeordnet werden.

## Tab: Kommunikation

Der Tab **Kommunikation** verwaltet alle Kontaktmöglichkeiten wie E-Mail-Adressen, Telefonnummern, Mobilnummern, Faxnummern und Webseiten.

Eine ausführliche Beschreibung finden Sie unter [Kommunikation verwalten](4-kommunikation.md).

## Tab: Projekte

Der Tab **Projekte** zeigt alle Projekte, die diesem Kontakt zugeordnet sind. Die Tabelle listet Projektname, Status und weitere Details auf.

Klicken Sie auf ein Projekt, um dessen [Detailansicht](../10-projekte/2-projekt-detail.md) zu öffnen.

## Tab: Anhänge

Im Tab **Anhänge** verwalten Sie Dateien, die diesem Kontakt zugeordnet sind, z. B. Verträge, Korrespondenz oder sonstige Dokumente.

### Datei hochladen

1. Klicken Sie auf **Hochladen** im Anhänge-Tab.
2. Wählen Sie eine oder mehrere Dateien aus.
3. Die Dateien werden hochgeladen und in der Liste angezeigt.

### Datei herunterladen

Klicken Sie auf den Dateinamen, um die Datei herunterzuladen.

### Datei löschen

Klicken Sie auf **Löschen** neben der gewünschten Datei und bestätigen Sie den Vorgang.

## Tab: Tickets

Der Tab **Tickets** zeigt alle Support-Tickets, die diesem Kontakt zugeordnet sind. Die Tabelle listet Ticketnummer, Betreff, Status und Erstellungsdatum auf.

Klicken Sie auf ein Ticket, um dessen [Detailansicht](../9-tickets/2-ticket-detail.md) zu öffnen.

## Tab: Arbeitszeiten

Der Tab **Arbeitszeiten** zeigt alle erfassten Arbeitszeiten, die für diesen Kontakt gebucht wurden. Dies ist hilfreich, um den Zeitaufwand pro Kontakt nachzuvollziehen.

Die Tabelle listet Datum, Mitarbeiter, Dauer und Beschreibung der jeweiligen Arbeitszeiteinträge auf.

## Tab: Buchhaltung

Der Tab **Buchhaltung** enthält alle finanzrelevanten Daten des Kontakts.

### Bankverbindungen

In diesem Bereich hinterlegen Sie die Bankdaten des Kontakts:

- **IBAN** - Internationale Bankkontonummer
- **BIC** - Bank Identifier Code (SWIFT-Code)
- **Bankname** - Name der Bank
- **Kontoinhaber** - Name des Kontoinhabers

Sie können mehrere Bankverbindungen hinterlegen. Klicken Sie auf **Neu**, um eine neue Bankverbindung hinzuzufügen.

### Kreditlimit

Legen Sie ein Kreditlimit fest, um den maximalen offenen Rechnungsbetrag für diesen Kontakt zu begrenzen. Wird das Limit erreicht, werden Sie bei der Auftragsanlage darauf hingewiesen.

### Skontoeinstellungen

Hinterlegen Sie Skontokonditionen für diesen Kontakt:

- **Skontofrist** - Anzahl der Tage, innerhalb derer Skonto gewährt wird
- **Skontoprozent** - Prozentsatz des gewährten Skontos

## Tab: Statistiken

Der Tab **Statistiken** bietet eine grafische Auswertung der Geschäftsbeziehung mit diesem Kontakt.

### Umsatzdiagramme

Diagramme zeigen den Umsatzverlauf über verschiedene Zeiträume. So erkennen Sie Trends und saisonale Schwankungen auf einen Blick.

### Auftragsstatistiken

Kennzahlen zu Aufträgen geben Auskunft über:

- Anzahl der Aufträge nach Auftragsart
- Gesamtumsatz
- Durchschnittlicher Auftragswert

## Kontakt bearbeiten

1. Ändern Sie die gewünschten Felder direkt in der Detailansicht.
2. Wechseln Sie bei Bedarf zwischen den Tabs, um verschiedene Bereiche zu bearbeiten.
3. Klicken Sie auf **Speichern**, um alle Änderungen zu übernehmen.

## Weiterführende Themen

- [Kontakte verwalten](1-kontakte-verwalten.md) - Zurück zur Kontaktliste
- [Adressen](3-adressen.md) - Adressen dieses Kontakts verwalten
- [Kommunikation](4-kommunikation.md) - Kontaktmöglichkeiten verwalten
- [Aufträge](../4-auftraege/0-index.md) - Aufträge für diesen Kontakt erstellen
- [Buchhaltung](../5-buchhaltung/0-index.md) - Transaktionen und Zahlungen verwalten
