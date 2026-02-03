# Produktdetails

In der Detailansicht sehen und bearbeiten Sie alle Informationen zu einem einzelnen Produkt. Die Ansicht ist in mehrere Tabs unterteilt, die jeweils einen bestimmten Aspekt des Produkts abdecken.

## Detailansicht öffnen

1. Navigieren Sie zur [Produktliste](1-produkte-verwalten.md).
2. Klicken Sie auf das gewünschte Produkt in der Tabelle.

   ![Detailansicht eines Produkts](../screenshots/55-produkt-detail.png)

## Tab: Allgemein

Im Tab **Allgemein** pflegen Sie die Stammdaten und grundlegenden Eigenschaften des Produkts.

### Stammdaten

- **Produktnummer** -- Eindeutige Artikelnummer (automatisch vergeben oder manuell eingetragen)
- **Name** -- Bezeichnung des Produkts
- **Beschreibung** -- Ausführliche Produktbeschreibung im Richtext-Editor mit Formatierungsmöglichkeiten (Fettschrift, Listen, Links etc.)

### Attribute

Im Abschnitt **Attribute** legen Sie weitere Eigenschaften fest:

- **Ist aktiv** -- Produkt ist im System verwendbar und wird in Auswahllisten angezeigt
- **Ist hervorgehoben** -- Produkt wird besonders hervorgehoben dargestellt (z. B. im Webshop)
- **Ist NOS** -- Never-Out-of-Stock-Kennzeichnung: Das Produkt wird als immer verfügbar behandelt
- **In Webshop exportieren** -- Produkt wird in den angebundenen Webshop übertragen
- **Ist Dienstleistung** -- Kennzeichnung als Dienstleistung statt physischem Produkt (kein Lagerbestand erforderlich)

### Zusätzliche Felder

- **EAN** -- European Article Number (Barcode) für die Identifikation im Handel
- **Zolltarifnummer** -- Nummer für den internationalen Zollverkehr
- **Hersteller-Produktnummer** -- Artikelnummer des Herstellers (MPN)
- **Maßeinheit** -- Einheit für die Mengenangabe (z. B. Stück, Liter, Kilogramm). Maßeinheiten werden in den [Einstellungen](../14-einstellungen/37-einheiten.md) konfiguriert.

### Kategorien und Tags

Ordnen Sie dem Produkt eine oder mehrere Kategorien und Tags zu, um den Katalog zu strukturieren und die Auffindbarkeit zu verbessern:

- **Kategorien** -- Hierarchische Einordnung des Produkts (z. B. Elektronik > Computer > Laptops)
- **Tags** -- Freie Schlagwörter für zusätzliche Gruppierungen und schnelle Filterung

### Lieferant

Weisen Sie dem Produkt einen Lieferanten zu, um Einkaufs- und Beschaffungsinformationen zu hinterlegen.

## Tab: Varianten

Im Tab **Varianten** verwalten Sie verschiedene Ausprägungen eines Produkts, z. B. unterschiedliche Größen, Farben oder Materialien.

- Varianten basieren auf **Produktoptionsgruppen**, die in den [Einstellungen](../14-einstellungen/38-produktoptionsgruppen.md) konfiguriert werden. Eine Optionsgruppe definiert die möglichen Ausprägungen (z. B. Optionsgruppe "Farbe" mit den Werten "Rot", "Blau", "Grün").
- Jede Variante wird als eigenständiges Produkt im System geführt und ist mit dem übergeordneten Hauptprodukt verknüpft.
- Varianten können eigene Preise, Lagerbestände und Seriennummern haben.
- Beim Anlegen einer Variante werden die Stammdaten des Hauptprodukts übernommen und können anschließend individuell angepasst werden.

### Variante anlegen

1. Wechseln Sie in den Tab **Varianten**.
2. Wählen Sie die gewünschte Optionsgruppe und den Wert aus.
3. Klicken Sie auf **Hinzufügen**.
4. Die neue Variante erscheint in der Liste und kann über einen Klick geöffnet werden.

## Tab: Preise

Im Tab **Preise** hinterlegen Sie die Verkaufspreise des Produkts. Das System unterstützt mehrere Preislisten und Staffelpreise.

### Spalten der Preistabelle

- **Preisliste** -- Name der Preisliste, für die der Preis gilt
- **Preis** -- Der Verkaufspreis in der Währung der Preisliste
- **Staffelmenge** -- Ab welcher Bestellmenge dieser Preis greift

### Staffelpreise (Mengenrabatte)

Staffelpreise ermöglichen es, bei höheren Bestellmengen günstigere Preise anzubieten:

- Für jede Preisliste können Sie mehrere Preisstufen mit unterschiedlichen Mindestmengen hinterlegen.
- Beispiel: Ab 1 Stück 10,00 EUR, ab 10 Stück 9,00 EUR, ab 100 Stück 7,50 EUR.
- Das System wählt automatisch den passenden Staffelpreis anhand der Bestellmenge im Auftrag.

### Preis hinzufügen

1. Klicken Sie im Tab **Preise** auf **Hinzufügen**.
2. Wählen Sie die **Preisliste**, für die der Preis gelten soll.
3. Geben Sie den **Preis** ein.
4. Optional: Geben Sie eine **Staffelmenge** ein, wenn es sich um einen Mengenrabatt handelt.
5. Klicken Sie auf **Speichern**.

### Kundenspezifische Preise

Kundenspezifische Preise werden über die Zuweisung von Preislisten an Kontakte gesteuert. Wenn einem Kontakt eine bestimmte Preisliste zugeordnet ist, erhält dieser automatisch die Preise aus dieser Liste.

## Tab: Lagerbestand

Im Tab **Lagerbestand** sehen Sie die aktuellen Bestände des Produkts in allen konfigurierten Lagern.

### Spalten der Bestandstabelle

- **Lager** -- Name des Lagerorts
- **Menge** -- Gesamtbestand im Lager
- **Reserviert** -- Bereits für Aufträge reservierte Menge
- **Verfügbar** -- Frei verfügbare Menge (Gesamtbestand abzüglich Reservierungen)

### Lagerbewegungen

Unterhalb der Bestandsübersicht finden Sie die Historie der Lagerbewegungen, die alle Zu- und Abgänge chronologisch auflistet.

> **Hinweis:** Lagerorte werden in den [Einstellungen](../14-einstellungen/41-lager.md) konfiguriert. Für Dienstleistungen (Eigenschaft "Ist Dienstleistung") wird kein Lagerbestand geführt.

## Tab: Medien

Im Tab **Medien** verwalten Sie Bilder, Dokumente und sonstige Dateien, die dem Produkt zugeordnet sind.

- **Hochladen** -- Ziehen Sie Dateien per Drag & Drop in den Bereich oder klicken Sie auf **Hochladen**, um Dateien auszuwählen.
- **Sortieren** -- Ordnen Sie die Medien per Drag & Drop in der gewünschten Reihenfolge an.
- **Hauptbild** -- Das erste Bild in der Reihenfolge wird als Hauptbild verwendet, z. B. in der Produktliste und im Webshop.
- **Löschen** -- Entfernen Sie einzelne Medien über das Kontextmenü.

## Tab: Cross-Selling

Im Tab **Cross-Selling** verknüpfen Sie verwandte Produkte, die dem Kunden als Empfehlung angezeigt werden können (z. B. im Webshop oder bei der Auftragserfassung).

- **Hinzufügen** -- Klicken Sie auf **Hinzufügen** und wählen Sie das verwandte Produkt aus.
- **Entfernen** -- Klicken Sie auf das Löschsymbol, um eine Verknüpfung aufzuheben.

Cross-Selling-Verknüpfungen sind bidirektional: Wenn Produkt A mit Produkt B verknüpft wird, erscheint die Verknüpfung auch bei Produkt B.

## Tab: Bundleprodukte

Im Tab **Bundleprodukte** definieren Sie ein Produkt als Bündelprodukt, das aus mehreren Einzelprodukten besteht.

- Ein Bundleprodukt fasst mehrere Produkte zu einem verkaufsfähigen Paket zusammen.
- Für jede Komponente geben Sie das Produkt und die enthaltene Menge an.
- Beim Verkauf eines Bundleprodukts werden die Lagerbestände der Einzelkomponenten entsprechend reduziert.

### Komponente hinzufügen

1. Klicken Sie im Tab **Bundleprodukte** auf **Hinzufügen**.
2. Wählen Sie das Produkt aus, das als Komponente dienen soll.
3. Geben Sie die **Menge** ein, die im Bundle enthalten ist.
4. Klicken Sie auf **Speichern**.

## Tab: Aktivitäten

Im Tab **Aktivitäten** sehen Sie den Verlauf aller Änderungen und Aktionen, die an diesem Produkt durchgeführt wurden:

- Erstellung des Produkts
- Änderungen an Stammdaten, Preisen, Attributen
- Änderungen an Varianten, Lagerbeständen und Zuordnungen

Jeder Eintrag zeigt den Zeitpunkt, den Benutzer und die Art der Änderung.

## Produkt bearbeiten

1. Klicken Sie auf **Bearbeiten** oben rechts, um den Bearbeitungsmodus zu aktivieren.
2. Ändern Sie die gewünschten Felder in den jeweiligen Tabs.
3. Klicken Sie auf **Speichern**, um die Änderungen zu übernehmen.

## Produkt löschen

1. Klicken Sie auf **Löschen** oben rechts.
2. Bestätigen Sie die Löschung im Bestätigungsdialog.

> **Hinweis:** Produkte, die bereits in Aufträgen verwendet werden, können nicht gelöscht werden. Setzen Sie das Produkt stattdessen auf **Inaktiv**.

## Weiterführende Themen

- [Produkte verwalten](1-produkte-verwalten.md) -- Zurück zur Produktliste
- [Seriennummern](2-seriennummern.md) -- Seriennummern zu diesem Produkt verwalten
- [Aufträge](../4-auftraege/0-index.md) -- Produkt in Aufträgen verwenden
- [Preislisten](../14-einstellungen/15-preislisten.md) -- Preislisten konfigurieren
- [Produktoptionsgruppen](../14-einstellungen/38-produktoptionsgruppen.md) -- Optionsgruppen für Varianten verwalten
- [Lager](../14-einstellungen/41-lager.md) -- Lagerorte konfigurieren
