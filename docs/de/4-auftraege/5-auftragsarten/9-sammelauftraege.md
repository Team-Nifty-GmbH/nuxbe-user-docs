# Sammelaufträge

Ein Sammelauftrag dient dazu, mehrere bestehende Aufträge desselben Kunden in einem einzigen Auftrag zusammenzufassen. Dies ist die typische Grundlage für eine Sammelrechnung. Anstatt dem Kunden für jeden Auftrag eine separate Rechnung zu stellen, bündeln Sie alle offenen Posten (z. B. am Monatsende) bequem in einem Beleg.

## Wann verwende ich einen Sammelauftrag?

- Ihr Kunde bestellt regelmäßig und möchte nur eine gebündelte Rechnung am Monatsende erhalten.
- Sie haben mehrere offene Aufträge geliefert und möchten diese nun gemeinsam abrechnen, um administrativen Aufwand zu reduzieren.

## Voraussetzungen

Damit Aufträge zu einem Sammelauftrag zusammengefasst werden können, müssen sie bestimmte Kriterien erfüllen. Das System lässt nur Aufträge zu, die:
- den Status eines regulären **Auftrags** haben,
- noch **keine Rechnungsnummer** besitzen (also noch nicht abgerechnet sind),
- **keine Unteraufträge** (Children) haben,
- einen **Nettowert größer als 0** aufweisen.

## Sammelauftrag erstellen

Der Sammelauftrag wird direkt aus der Auftragsliste generiert:

### Schritt 1: Aufträge markieren
1. Navigieren Sie zu **Aufträge** in der Listenansicht.
2. Markieren Sie über die Checkboxen auf der linken Seite mindestens **zwei Aufträge**, die Sie zusammenfassen möchten.
3. Sobald Sie mehrere Aufträge markiert haben, erscheint in den Aktionen die Schaltfläche **Sammelauftrag erstellen** (Create Collective Order).

### Schritt 2: Generierung anstoßen
1. Klicken Sie auf **Sammelauftrag erstellen**.
2. Es öffnet sich ein Dialogfenster. Das System fasst hierbei automatisch alle ausgewählten Aufträge anhand ihrer **Rechnungsadresse** (Invoice Address) zusammen. (Haben Sie versehentlich Aufträge verschiedener Kunden markiert, erstellt das System automatisch pro Rechnungsadresse einen eigenen Sammelauftrag).
3. Sie müssen vor der Erstellung des Sammelauftrags noch die Sammelauftragsart und die Teilauftragsart auswählen.
3. Bestätigen Sie die Erstellung.

## Was passiert im Hintergrund?

Sobald der Sammelauftrag generiert wird, führt Nuxbe folgende Schritte automatisch aus, um Ihre Buchhaltung und Belegkette sauber zu halten:

1. **Positionen strukturieren:** Alle Positionen der Ursprungsaufträge werden in den Sammelauftrag kopiert. Dabei erstellt das System für jeden Ursprungsauftrag automatisch eine Text-Position als Überschrift (z. B. *"Auftrag ORD-12345"*). Alle zugehörigen Artikel werden unter dieser Überschrift gruppiert.
2. **Rabatte vereinen:** Eventuelle Kopf-Rabatte der Ursprungsaufträge werden auf die einzelnen Positionen im Sammelauftrag umgerechnet, sodass der Endpreis exakt stimmt.
3. **Ursprungsaufträge sperren:** Die ursprünglichen Aufträge werden **gesperrt** (`is_locked`) und können danach nicht mehr verändert werden.
4. **Belegkette knüpfen:** Die Ursprungsaufträge werden automatisch zu "Split-Aufträgen" (Unteraufträgen) des neuen Sammelauftrags. Ihr offener Saldo (Balance) wird auf 0 gesetzt, da die Zahlungsforderung nun in den Sammelauftrag übergegangen ist.

## Detailansicht und Rechnungsstellung

Wenn Sie den neu erstellten Sammelauftrag öffnen, sehen Sie im Reiter **Positionen** die saubere Gruppierung nach den ursprünglichen Aufträgen.

In der rechten Spalte (unter **Verknüpfte Dokumente** / Belegkette) sehen Sie alle eingeflossenen Einzelaufträge aufgelistet.

**Sammelrechnung versenden:**
Um den Vorgang abzuschließen, klicken Sie in der rechten Spalte auf **Dokumente erstellen**, wählen das Layout **Rechnung** und versenden das generierte PDF an Ihren Kunden. Der Zahlungseingang wird dann direkt auf diesen Sammelauftrag verbucht.

## Weiterführende Themen

- [Aufträge verwalten](../1-auftraege-verwalten.md) – Aufträge in der Liste filtern und markieren
- [Auftragsdetails](../2-auftrag-detail.md) – Allgemeine Detailansicht
- [Auftragsarten konfigurieren](../../14-einstellungen/11-auftragsarten.md) – Nummernkreise und Einstellungen
