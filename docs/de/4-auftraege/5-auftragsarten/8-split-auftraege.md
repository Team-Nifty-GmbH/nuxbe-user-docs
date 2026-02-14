# Split-Aufträge (Teilaufträge)

Ein Split-Auftrag ist ein Teilauftrag, der aus einem bestehenden Elternauftrag heraus erstellt wird. Er ermöglicht es, einen größeren Auftrag in mehrere Teillieferungen oder Teilrechnungen aufzuteilen, die unabhängig voneinander abgerechnet werden können. Der Elternauftrag bleibt dabei als übergeordnetes Element bestehen und verknüpft alle Splits miteinander.

## Wann nutzt man Split-Aufträge?

Split-Aufträge sind in folgenden Situationen hilfreich:

- **Teillieferungen** -- Eine große Bestellung wird in mehreren Lieferungen geliefert. Für jede Lieferung wird ein eigener Split-Auftrag mit den tatsächlich gelieferten Mengen erstellt.
- **Teilrechnungen** -- Der Kunde möchte nicht eine Gesamtrechnung erhalten, sondern mehrere kleinere Rechnungen über Teilbeträge.
- **Projektmeilensteine** -- Ein Projekt wird in Phasen abgerechnet. Für jede abgeschlossene Phase wird ein Split-Auftrag mit den entsprechenden Positionen erstellt.
- **Sukzessive Abrechnung** -- Dienstleistungen werden laufend erbracht und in Abständen abgerechnet.

## Split-Auftrag erstellen

### Voraussetzung

Ein Split-Auftrag kann nur erstellt werden, wenn der Elternauftrag **noch keine Rechnungsnummer** hat. Sobald eine Rechnungsnummer vergeben wurde, ist die Split-Funktion nicht mehr verfügbar.

### Schritt 1: Elternauftrag öffnen

1. Navigieren Sie zu **Aufträge** und öffnen Sie den Auftrag, der aufgeteilt werden soll.
2. Stellen Sie sicher, dass der Auftrag noch keine Rechnungsnummer hat.

### Schritt 2: Split-Auftrag anlegen

1. Klicken Sie in der Sidebar auf **Teilauftrag erstellen**.

   ![Split-Auftrag erstellen über die Sidebar](../../screenshots/168-split-auftrag-erstellen.png)

2. Nuxbe erstellt automatisch einen neuen Beleg vom Typ **Teilauftrag**.
3. Die Daten aus dem Elternauftrag werden übernommen:
   - Kontakt und Adresse
   - Positionen und Preise
   - Zahlungsbedingungen und Texte

### Schritt 3: Positionen anpassen

Nach dem Erstellen passen Sie die Positionen für diese Teillieferung oder Teilrechnung an.

- **Mengen reduzieren** -- Setzen Sie die Mengen auf die tatsächlich gelieferte oder abzurechnende Menge.
- **Positionen entfernen** -- Entfernen Sie Positionen, die in diesem Split nicht enthalten sind.
- **Preise beibehalten** -- Die Einzelpreise bleiben in der Regel unverändert. Nur die Mengen werden angepasst.

> **Hinweis:** Sie können beliebig viele Split-Aufträge aus einem Elternauftrag erstellen. Jeder Split enthält nur den Anteil, der in dieser Teillieferung abgerechnet wird.

## Betragsübersicht verstehen

Split-Aufträge verfügen über eine erweiterte Betragsübersicht, die zeigt, wie sich die Teilbeträge zum Gesamtbetrag zusammensetzen.

![Betragsübersicht eines Split-Auftrags](../../screenshots/169-split-betragsuebersicht.png)

### Teilbetrag netto (dieser Split-Auftrag)

Der Nettobetrag des aktuell geöffneten Split-Auftrags. Das ist der Betrag, der mit diesem Teilauftrag abgerechnet wird.

### Split-Aufträge netto (restliche Splits)

Die Summe der Nettobeträge aller anderen Split-Aufträge, die zum gleichen Elternauftrag gehören. Dieser Wert zeigt, wie viel bereits über andere Splits abgerechnet wurde oder wird.

### Summe netto (Gesamtsumme)

Die Gesamtsumme aller Split-Aufträge zusammen. Dieser Wert sollte dem ursprünglichen Gesamtbetrag des Elternauftrags entsprechen, wenn alle Positionen vollständig auf die Splits verteilt wurden.

> **Beispiel:** Ein Elternauftrag über 10.000,00 EUR netto wird in drei Splits aufgeteilt:
> - Split 1: 3.500,00 EUR (Lieferung Phase 1)
> - Split 2: 4.000,00 EUR (Lieferung Phase 2)
> - Split 3: 2.500,00 EUR (Lieferung Phase 3)
>
> Wenn Sie Split 2 öffnen, sehen Sie:
> - Teilbetrag netto: 4.000,00 EUR
> - Split-Aufträge netto: 6.000,00 EUR (Split 1 + Split 3)
> - Summe netto: 10.000,00 EUR

## Schlussrechnung

Wenn alle Split-Aufträge eine Rechnungsnummer erhalten haben, kann am Elternauftrag eine **Schlussrechnung** erstellt werden.

![Schlussrechnung erstellen](../../screenshots/170-endrechnung.png)

### Was ist die Schlussrechnung?

Die Schlussrechnung ist ein zusammenfassender Beleg, der alle Teilrechnungen referenziert. Sie dient als Abschlussdokument für den gesamten Auftrag und enthält:

- Einen Verweis auf alle Teilrechnungen (Split-Aufträge)
- Die Gesamtsumme aller Teilrechnungen
- Eventuelle Korrekturen oder Anpassungen

### Voraussetzung für die Schlussrechnung

Die Schlussrechnung kann erst erstellt werden, wenn **alle** Split-Aufträge eine Rechnungsnummer haben. Solange noch ein Split-Auftrag ohne Rechnungsnummer existiert, ist die Funktion nicht verfügbar.

## Praxisbeispiel: Büroausstattung in drei Lieferungen

Ein Kunde bestellt Büroausstattung im Gesamtwert von 15.000,00 EUR. Die Lieferung erfolgt in drei Teilen:

**Elternauftrag:** Büroausstattung komplett -- 15.000,00 EUR

**Split 1 -- Schreibtische (Lieferung in Woche 1):**
- 10 Schreibtische à 450,00 EUR = 4.500,00 EUR
- Rechnungsnummer wird nach Lieferung vergeben

**Split 2 -- Stühle und Zubehör (Lieferung in Woche 3):**
- 10 Bürostühle à 380,00 EUR = 3.800,00 EUR
- 10 Monitorarme à 89,00 EUR = 890,00 EUR
- Gesamt: 4.690,00 EUR

**Split 3 -- Restliche Ausstattung (Lieferung in Woche 5):**
- 5 Aktenschränke à 620,00 EUR = 3.100,00 EUR
- 10 Schreibtischlampen à 271,00 EUR = 2.710,00 EUR
- Gesamt: 5.810,00 EUR

Nachdem alle drei Splits eine Rechnungsnummer haben, wird die Schlussrechnung über 15.000,00 EUR erstellt.

## Häufige Fragen

### Kann ich nachträglich weitere Split-Aufträge hinzufügen?

Ja, solange der Elternauftrag noch keine Rechnungsnummer hat. Sie können jederzeit weitere Splits erstellen.

### Was passiert, wenn die Summe der Splits nicht dem Elternauftrag entspricht?

Nuxbe erzwingt keine exakte Übereinstimmung. Die Betragsübersicht zeigt Ihnen die aktuelle Verteilung, damit Sie Abweichungen erkennen und korrigieren können.

### Kann ich einen Split-Auftrag löschen?

Ja, solange der Split-Auftrag noch keine Rechnungsnummer hat.

## Weiterführende Themen

- [Aufträge verwalten](../1-auftraege-verwalten.md) -- Auftragsliste und Filter
- [Auftragsdetails](../2-auftrag-detail.md) -- Allgemeine Auftragsdetails
- [Auftragspositionen](../3-auftragspositionen.md) -- Positionen bearbeiten
- [Auftragsarten](../../14-einstellungen/11-auftragsarten.md) -- Auftragsarten konfigurieren
