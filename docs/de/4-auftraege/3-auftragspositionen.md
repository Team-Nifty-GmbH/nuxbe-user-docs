# Auftragspositionen

Auftragspositionen sind die einzelnen Zeilen innerhalb eines Auftrags. Jede Position beschreibt ein Produkt, eine Dienstleistung oder einen freien Text mit den zugehörigen Mengen- und Preisangaben. In diesem Abschnitt erfahren Sie, wie Sie Positionen hinzufügen, bearbeiten, sortieren und löschen.

## Positionen anzeigen

1. Öffnen Sie die [Detailansicht](2-auftrag-detail.md) eines Auftrags.
2. Die Positionen werden im Bereich **Positionen** unterhalb der Kopfdaten angezeigt.

   ![Auftragspositionen in der Detailansicht](../screenshots/24-auftragspositionen-liste.png)

## Positionsfelder

Jede Position verfügt über die folgenden Felder:

| Feld | Beschreibung |
|---|---|
| **Produktnummer** | Artikelnummer aus dem Produktkatalog (leer bei Freitextpositionen) |
| **Name** | Bezeichnung der Position |
| **Beschreibung** | Ausführlicher Beschreibungstext, der auf dem Beleg erscheint |
| **Menge** | Stückzahl oder Menge der Position |
| **Einzelpreis** | Preis pro Einheit (netto) |
| **Rabatt** | Positionsbezogener Rabatt in Prozent |
| **MwSt-Satz** | Geltender Mehrwertsteuersatz für diese Position |
| **Gesamtpreis** | Berechneter Gesamtbetrag der Position (Menge x Einzelpreis abzüglich Rabatt) |

## Positionsarten

Nuxbe unterstützt verschiedene Arten von Positionen:

### Produktposition

Eine Standardposition, die auf einem Produkt aus dem Katalog basiert. Beim Hinzufügen eines Produkts werden Name, Beschreibung, Einzelpreis und MwSt-Satz automatisch aus dem Produktkatalog übernommen.

### Manuelle Position

Eine Position ohne Verknüpfung zu einem Produkt. Sie geben Name, Beschreibung, Menge und Preis manuell ein. Manuelle Positionen eignen sich für individuelle Dienstleistungen oder einmalige Posten, die nicht im Katalog geführt werden.

### Kommentar / Block (Textposition)

Eine reine Textzeile ohne Preis- oder Mengenangaben. Diese Position wird über die Checkbox **Kommentar / Block** beim Anlegen aktiviert. Sie dient als Zwischenüberschrift, Trennzeile oder ergänzender Hinweis innerhalb der Positionsliste. Kommentar-/Block-Positionen erscheinen auf dem Beleg, werden aber nicht in die Betragsberechnung einbezogen. Optional können Unterpositionen zugeordnet werden, um Positionen in Gruppen zusammenzufassen.

### Alternative Position

Eine Position, die als **Alternative** gekennzeichnet ist. Sie zeigt dem Kunden eine optionale Variante an, die nicht automatisch in die Gesamtsumme einfließt. Alternativen eignen sich z. B. für Angebote, bei denen der Kunde zwischen verschiedenen Optionen wählen kann.

### Bundle-Position

Eine Position, die Teil eines Produktbündels ist. Bundle-Positionen werden automatisch erstellt, wenn ein Bündelprodukt zum Auftrag hinzugefügt wird. Sie sind nicht direkt bearbeitbar und zeigen die einzelnen Bestandteile des Bündels an.

## Neue Position hinzufügen

Unterhalb der Positionsliste finden Sie zwei Buttons zum Hinzufügen neuer Positionen:

- **Schnell hinzufügen** - Für schnelles Anlegen mit Produktsuche direkt in der Tabelle
- **Detailiert hinzufügen** - Öffnet ein ausführliches Formular mit allen Feldern

### Aus dem Produktkatalog

1. Klicken Sie auf **Detailiert hinzufügen** unterhalb der Positionsliste.
2. Wählen Sie ein **Produkt** über das Suchfeld aus. Beim Tippen werden passende Produkte aus dem Katalog vorgeschlagen.
3. Name, Beschreibung, Einzelpreis und MwSt-Satz werden automatisch übernommen.
4. Passen Sie bei Bedarf die **Menge** an.
5. Klicken Sie auf **Speichern**.

> **Tipp:** Der Einzelpreis wird automatisch anhand der dem Kontakt zugewiesenen [Preisliste](../14-einstellungen/15-preislisten.md) ermittelt. Sie können den Preis manuell überschreiben.

Alternativ können Sie über **Schnell hinzufügen** ein Produkt direkt in der Tabelle suchen und mit einem Klick hinzufügen.

### Als manuelle Position

1. Klicken Sie auf **Detailiert hinzufügen**.
2. Lassen Sie das Produktfeld leer und geben Sie stattdessen **Name**, **Beschreibung**, **Menge**, **Einzelpreis** und **MwSt-Satz** manuell ein.
3. Klicken Sie auf **Speichern**.

### Als Kommentar / Block (Textposition)

Eine Kommentar-/Block-Position eignet sich z. B. für Zwischenüberschriften wie „Ausgeführt am 22.10.2025" oder ergänzende Hinweise ohne Preis. Optional können Sie Unterpositionen zuordnen, um Positionen in Gruppen zusammenzufassen.

1. Klicken Sie auf **Detailiert hinzufügen**.
2. Aktivieren Sie die Checkbox **Kommentar / Block**. Die Preis- und Mengenfelder werden ausgeblendet.
3. Geben Sie im Feld **Name** den gewünschten Text ein.
4. Klicken Sie auf **Speichern**.

Per **Drag & Drop** können Sie die Position anschließend an die gewünschte Stelle in der Positionsliste verschieben.

### Als Alternative

Eine Alternativposition zeigt dem Kunden eine optionale Variante, die nicht in die Gesamtsumme einfließt.

1. Klicken Sie auf **Detailiert hinzufügen**.
2. Wählen Sie optional ein **Produkt** oder geben Sie die Daten manuell ein.
3. Aktivieren Sie die Checkbox **Alternative**.
4. Klicken Sie auf **Speichern**.

## Hierarchische Positionen

Positionen können hierarchisch strukturiert werden, indem Unterpositionen einer übergeordneten Position zugeordnet werden. Dies eignet sich zum Beispiel für:

- **Baugruppen** - Eine übergeordnete Position (z. B. "Serverinstallation") mit mehreren Unterpositionen (Hardware, Software, Arbeitszeit)
- **Paketangebote** - Ein Gesamtpaket mit einzelnen Bestandteilen
- **Gruppierte Darstellung** - Logische Gruppierung auf dem Beleg für bessere Übersichtlichkeit

Die übergeordnete Position dient dabei als Klammer und kann einen eigenen Preis haben oder lediglich die Summe der Unterpositionen darstellen.

## Positionen sortieren

Die Reihenfolge der Positionen kann per **Drag & Drop** angepasst werden. Ziehen Sie eine Position an die gewünschte Stelle in der Liste. Die neue Reihenfolge wird auf dem generierten Beleg (PDF) übernommen.

## Position bearbeiten

1. Klicken Sie auf die gewünschte Position in der Tabelle.
2. Ändern Sie die gewünschten Felder (Menge, Preis, Beschreibung etc.).
3. Klicken Sie auf **Speichern**.

Der Gesamtpreis und die Auftragssumme werden automatisch neu berechnet.

## Position löschen

1. Klicken Sie auf das **Löschen**-Symbol neben der Position.
2. Bestätigen Sie die Löschung im Bestätigungsdialog.

Die Auftragssumme wird nach dem Löschen automatisch aktualisiert.

## Automatische Preisberechnung

Die Preisermittlung für Produktpositionen erfolgt automatisch anhand folgender Kriterien:

- **Preisliste** - Die dem Kontakt zugewiesene Preisliste bestimmt den Grundpreis
- **Rabattgruppe** - Falls dem Kontakt eine Rabattgruppe zugeordnet ist, wird der Rabatt automatisch angewendet
- **Kopfrabatt** - Der in den Kopfdaten hinterlegte prozentuale Rabatt wird zusätzlich berücksichtigt

Sie können automatisch ermittelte Preise und Rabatte jederzeit manuell überschreiben.

## Weiterführende Themen

- [Auftragsdetails](2-auftrag-detail.md) - Zurück zur Auftragsdetailansicht
- [Auftragspositionen-Liste](4-auftragspositionen-liste.md) - Alle Positionen auftragsübergreifend durchsuchen
- [Produkte](../6-produkte/0-index.md) - Produktkatalog verwalten
- [Einstellungen > Preislisten](../14-einstellungen/15-preislisten.md) - Preislisten einrichten
- [Einstellungen > Rabattgruppen](../14-einstellungen/13-rabattgruppen.md) - Rabattgruppen verwalten
- [Einstellungen > MwSt-Sätze](../14-einstellungen/20-mwst-saetze.md) - Mehrwertsteuersätze konfigurieren
