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

## Rabatt in Euro statt Prozent

Das Feld **Rabatt** auf einer Auftragsposition ist ausschließlich prozentbasiert. Das bedeutet: Wenn Sie dort „10" eingeben, werden 10 % vom Einzelpreis abgezogen. Es gibt **kein eigenes Feld** für einen Rabatt als festen Euro-Betrag.

### Wie gebe ich einen festen Rabatt in Euro?

Wenn Sie einem Kunden einen festen Rabatt in Euro gewähren möchten (z. B. „50 EUR Nachlass"), fügen Sie eine **separate manuelle Position mit negativem Betrag** hinzu. Diese Position erscheint als eigene Zeile auf dem Beleg.

### Schritt-für-Schritt: Festen Euro-Rabatt hinzufügen

1. Öffnen Sie den Auftrag in der [Detailansicht](2-auftrag-detail.md).
2. Klicken Sie unterhalb der Positionsliste auf **Detailiert hinzufügen**.
3. Lassen Sie das **Produktfeld leer** (es handelt sich um eine manuelle Position).
4. Füllen Sie die Felder wie folgt aus:

| Feld | Wert |
|---|---|
| **Name** | Kundenrabatt (oder eine andere aussagekräftige Bezeichnung) |
| **Beschreibung** | Optional, z. B. „Treuerabatt gemäß Vereinbarung vom 15.01.2025" |
| **Menge** | 1 |
| **Einzelpreis** | -50,00 (negativer Betrag -- beachten Sie das Minuszeichen!) |
| **MwSt-Satz** | Wählen Sie den gleichen MwSt-Satz wie bei den regulären Positionen |

5. Klicken Sie auf **Speichern**.

### Ergebnis auf dem Beleg

Die Rabattposition erscheint als eigene Zeile auf dem PDF-Beleg:

| Position | Bezeichnung | Menge | Einzelpreis | Gesamtpreis |
|---|---|---|---|---|
| 1 | Laptop-Ständer Modell X | 10 | 50,00 EUR | 500,00 EUR |
| 2 | Kundenrabatt | 1 | -50,00 EUR | -50,00 EUR |
| | **Netto-Summe** | | | **450,00 EUR** |

> **Tipp:** Per **Drag & Drop** können Sie die Rabattposition an die gewünschte Stelle in der Positionsliste verschieben -- zum Beispiel direkt unter die Position, auf die sich der Rabatt bezieht. So ist auf dem Beleg klar ersichtlich, welcher Artikel rabattiert wurde.

> **Hinweis:** Beachten Sie, dass ein negativer Einzelpreis auch die MwSt-Berechnung beeinflusst. Der Nettobetrag wird durch den Rabatt reduziert, und entsprechend verringert sich auch der MwSt-Betrag. Das ist buchhalterisch korrekt.

### Unterschied: Positionsrabatt vs. Kopfrabatt vs. manueller Rabatt

Es gibt in Nuxbe drei verschiedene Möglichkeiten, Rabatte zu vergeben. Hier eine Übersicht, damit Sie die richtige Variante wählen:

| Rabattart | Wo eingestellt | Wirkung | Anwendungsfall |
|---|---|---|---|
| **Positionsrabatt** (Prozent) | Feld „Rabatt" auf der einzelnen Position | Prozentsatz wird vom Einzelpreis dieser Position abgezogen | Rabatt auf ein bestimmtes Produkt |
| **Kopfrabatt** (Prozent) | Feld „Kopfrabatt" in den Kopfdaten des Auftrags | Prozentsatz wird auf alle Positionen des Auftrags angewendet | Genereller Rabatt für den gesamten Auftrag |
| **Manueller Rabatt** (Euro) | Eigene Position mit negativem Betrag | Fester Euro-Betrag wird von der Gesamtsumme abgezogen | Fester Rabattbetrag, Gutscheine, Sonderkonditionen |

> **Wichtig:** Positionsrabatt und Kopfrabatt werden **kumulativ** berechnet. Wenn Sie einen Positionsrabatt von 10 % und einen Kopfrabatt von 5 % haben, wird zuerst der Positionsrabatt angewendet und dann der Kopfrabatt auf den reduzierten Betrag.

---

## MwSt-Satz pro Position ändern

Jede Auftragsposition hat ein eigenes Feld **MwSt-Satz**, das den geltenden Mehrwertsteuersatz für genau diese Position bestimmt. Der MwSt-Satz wird standardmäßig aus dem Produkt übernommen, kann aber auf der Position manuell geändert werden.

### Standardverhalten

- Wenn Sie ein **Produkt aus dem Katalog** hinzufügen, wird der im Produkt hinterlegte MwSt-Satz automatisch übernommen.
- Bei einer **manuellen Position** (ohne Produkt) müssen Sie den MwSt-Satz selbst auswählen.

### MwSt-Satz auf einer Position ändern

1. Klicken Sie auf die gewünschte Position in der Positionsliste.
2. Suchen Sie das Feld **MwSt-Satz**.
3. Wählen Sie den gewünschten Steuersatz aus der Dropdown-Liste aus (z. B. 19 %, 7 %, 0 %).
4. Klicken Sie auf **Speichern**.

Die Auftragssumme und die MwSt-Aufschlüsselung in der Betragsübersicht werden automatisch neu berechnet.

### Wann ist das relevant?

Es gibt verschiedene Situationen, in denen unterschiedliche MwSt-Sätze innerhalb eines Auftrags benötigt werden:

- **Gemischte Warengruppen:** Lebensmittel (7 % in Deutschland) und Elektronik (19 %) in einer Rechnung.
- **Steuerbefreite Positionen:** Einzelne Positionen (z. B. Versicherungsleistungen) können steuerfrei sein, während andere besteuert werden.
- **Innergemeinschaftliche Lieferungen:** Bei Lieferungen ins EU-Ausland kann der Steuersatz für bestimmte Positionen auf 0 % gesetzt werden.

> **Tipp:** Wenn der **gesamte Auftrag** steuerfrei sein soll (z. B. bei Lieferungen in ein Drittland), müssen Sie nicht jede Position einzeln ändern. Verwenden Sie stattdessen das Feld **Steuerbefreiung** in der Sidebar des Auftrags. Dieses Feld setzt automatisch alle Positionen auf 0 % MwSt und druckt den Grund der Steuerbefreiung auf den Beleg.

> **Hinweis:** Wenn mehrere MwSt-Sätze in einem Auftrag verwendet werden, zeigt die Betragsübersicht in der rechten Spalte eine **aufgeschlüsselte MwSt-Darstellung** -- also die MwSt-Beträge getrennt nach Steuersatz. Diese Aufschlüsselung erscheint auch auf dem PDF-Beleg.

### Verfügbare MwSt-Sätze konfigurieren

Die Liste der verfügbaren MwSt-Sätze wird zentral in den Einstellungen verwaltet. Wenn ein benötigter Steuersatz fehlt, kann ein Administrator diesen unter [Einstellungen > MwSt-Sätze](../14-einstellungen/20-mwst-saetze.md) hinzufügen.

---

## Beschreibung mit Platzhaltern

Jede Auftragsposition hat ein Feld **Beschreibung**, das auf dem generierten Beleg (PDF) erscheint. Dieses Feld wird beim Hinzufügen eines Produkts automatisch mit der Beschreibung aus dem Produktkatalog befüllt, kann aber auf der Position frei bearbeitet werden.

### Wie Beschreibungen funktionieren

1. **Beim Hinzufügen eines Produkts:** Die Beschreibung wird aus dem Produktkatalog kopiert und in die Position eingefügt.
2. **Auf der Position:** Die Beschreibung ist ab diesem Moment **unabhängig vom Produktkatalog**. Änderungen an der Beschreibung auf der Position wirken sich **nicht** auf den Produktkatalog aus. Umgekehrt wirken sich spätere Änderungen am Produktkatalog **nicht** auf bereits erstellte Positionen aus.
3. **Manuelle Bearbeitung:** Sie können die Beschreibung auf der Position jederzeit frei bearbeiten, kürzen, erweitern oder vollständig umschreiben.

### Platzhalter / dynamische Variablen

Einige Produktbeschreibungen können **Platzhalter** (auch „dynamische Variablen" genannt) enthalten, die beim Erstellen der Position oder beim Generieren des PDF automatisch aufgelöst werden. Mögliche Platzhalter sind:

- **Seriennummern** -- Werden automatisch eingefügt, wenn dem Produkt eine Seriennummer zugeordnet ist.
- **Datumswerte** -- Können automatisch das aktuelle Datum oder ein Lieferdatum einfügen.
- **Kundenspezifische Daten** -- Je nach Konfiguration können Kontaktdaten oder andere auftragsbezogene Informationen eingefügt werden.

> **Hinweis:** Welche Platzhalter verfügbar sind, hängt von der Konfiguration Ihres Systems ab. Wenden Sie sich bei Fragen zu verfügbaren Platzhaltern an Ihren Administrator.

### Beschreibung bearbeiten

1. Klicken Sie auf die gewünschte Position in der Positionsliste.
2. Bearbeiten Sie das Feld **Beschreibung**.
3. Klicken Sie auf **Speichern**.

> **Wichtig:** Die Änderung der Beschreibung auf einer Position hat **keine Rückwirkung** auf den Produktkatalog. Wenn Sie die Beschreibung eines Produkts dauerhaft ändern möchten, müssen Sie dies direkt im [Produktkatalog](../6-produkte/0-index.md) tun. Bereits erstellte Positionen bleiben davon unberührt.

> **Tipp:** Nutzen Sie das Beschreibungsfeld, um auf der Position kundenspezifische Informationen hinzuzufügen, die nicht im Produktkatalog stehen sollen -- z. B. „Konfiguration gemäß Besprechung vom 10.03.2025" oder „Farbe: RAL 7035, matt".

---

## Positionen aus einem anderen Auftrag kopieren

Es gibt in Nuxbe derzeit keine direkte Funktion, um einzelne Positionen von einem Auftrag in einen anderen zu kopieren. Es gibt jedoch zwei praktische Alternativen, um sich das manuelle Neuanlegen zu ersparen.

### Alternative 1: Gesamten Auftrag duplizieren und anpassen

Wenn der neue Auftrag weitgehend die gleichen Positionen enthalten soll wie ein bestehender Auftrag, ist das Duplizieren die schnellste Methode:

1. Öffnen Sie den **bestehenden Auftrag**, dessen Positionen Sie übernehmen möchten.
2. Klicken Sie in der Sidebar auf **Duplizieren**.
3. Nuxbe erstellt eine **Kopie** des Auftrags mit allen Kopfdaten und Positionen.
4. Passen Sie die Kopie nach Bedarf an:
   - Ändern Sie den **Kontakt** (Kunden), falls der neue Auftrag für einen anderen Kunden ist.
   - Entfernen Sie **Positionen**, die nicht benötigt werden.
   - Fügen Sie **neue Positionen** hinzu.
   - Passen Sie **Mengen, Preise** oder andere Felder an.
5. Klicken Sie auf **Speichern**.

> **Tipp:** Das Duplizieren eignet sich besonders gut für wiederkehrende Aufträge, bei denen sich nur wenige Details ändern (z. B. monatliche Wartungsrechnungen, Nachbestellungen usw.).

### Alternative 2: Positionen manuell im neuen Auftrag hinzufügen

Wenn nur wenige Positionen aus einem anderen Auftrag übernommen werden sollen:

1. Öffnen Sie den **bestehenden Auftrag** und notieren Sie sich die relevanten Produktnummern oder Produktnamen.
2. Wechseln Sie zum **neuen Auftrag** (oder erstellen Sie einen neuen).
3. Fügen Sie die gewünschten Produkte über **Schnell hinzufügen** oder **Detailiert hinzufügen** aus dem Produktkatalog hinzu. Name, Beschreibung, Preis und MwSt-Satz werden automatisch übernommen.
4. Passen Sie bei Bedarf Mengen und Preise an.
5. Klicken Sie auf **Speichern**.

> **Hinweis:** Beim manuellen Hinzufügen werden die aktuellen Daten aus dem Produktkatalog und der aktuellen Preisliste des Kunden verwendet -- nicht die Preise aus dem alten Auftrag. Wenn sich die Preise zwischenzeitlich geändert haben, können die Werte abweichen. Prüfen Sie die Preise daher sorgfältig.

---

## Weiterführende Themen

- [Auftragsdetails](2-auftrag-detail.md) - Zurück zur Auftragsdetailansicht
- [Auftragspositionen-Liste](4-auftragspositionen-liste.md) - Alle Positionen auftragsübergreifend durchsuchen
- [Produkte](../6-produkte/0-index.md) - Produktkatalog verwalten
- [Einstellungen > Preislisten](../14-einstellungen/15-preislisten.md) - Preislisten einrichten
- [Einstellungen > Rabattgruppen](../14-einstellungen/13-rabattgruppen.md) - Rabattgruppen verwalten
- [Einstellungen > MwSt-Sätze](../14-einstellungen/20-mwst-saetze.md) - Mehrwertsteuersätze konfigurieren
