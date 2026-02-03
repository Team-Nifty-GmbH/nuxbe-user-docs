# Auftragsarten

Nuxbe unterscheidet verschiedene Auftragsarten, die jeweils spezifische Funktionen und Eigenschaften mitbringen. Alle Auftragsarten teilen sich die gemeinsamen Grundfunktionen wie Positionen, Texte, Zustände und Rabatte, die im übergeordneten Kapitel [Aufträge](../0-index.md) beschrieben sind.

Auf den folgenden Seiten erfahren Sie, was die einzelnen Auftragsarten auszeichnet und wie Sie diese im Arbeitsalltag einsetzen.

## Übersicht der Auftragsarten

| Auftragsart | Beschreibung | Seite |
|---|---|---|
| **Angebot** | Unverbindliches Angebot an einen Kunden; kann in einen Auftrag umgewandelt werden | [Angebote](1-angebote.md) |
| **Auftrag** | Bestätigter Kundenauftrag; zentrales Element für Lieferung, Rechnungsstellung und Folgebelege | [Aufträge](2-auftraege.md) |
| **Gutschrift** | Korrekturbeleg zu einer bestehenden Rechnung, z. B. bei Reklamation oder Teilgutschrift | [Gutschriften](3-gutschriften.md) |
| **Abonnement** | Wiederkehrender Auftrag mit automatischer Belegstellung in konfigurierbaren Intervallen | [Abonnements](4-abonnements.md) |
| **Retoure** | Rücksendung von Waren durch den Kunden; wird aus einem bestehenden Auftrag erstellt | [Retouren](5-retouren.md) |
| **Einkauf** | Bestellung bei einem Lieferanten | [Einkauf](6-einkauf.md) |
| **Einkaufs-Abonnement** | Wiederkehrender Einkauf bei einem Lieferanten mit automatischer Belegstellung | [Einkaufs-Abonnements](7-einkaufs-abonnements.md) |
| **Split-Auftrag** | Teilauftrag, der aus einem bestehenden Auftrag heraus erstellt wird (z. B. Teillieferung) | [Split-Aufträge](8-split-auftraege.md) |

## Verkauf und Einkauf

Jede Auftragsart hat einen sogenannten **Multiplikator**, der bestimmt, ob Beträge positiv (Einnahme) oder negativ (Ausgabe/Gutschrift) verbucht werden.

| Typ | Auftragsarten | Multiplikator | Bedeutung |
|---|---|---|---|
| **Verkauf** | Angebot, Auftrag, Abonnement, Split-Auftrag | +1 | Einnahme -- Beträge werden als positiver Umsatz gewertet |
| **Gutschrift / Retoure** | Gutschrift, Retoure | -1 | Korrektur -- Beträge werden als negativer Umsatz gewertet |
| **Einkauf** | Einkauf, Einkaufs-Abonnement | -1 | Ausgabe -- Beträge werden als Kosten gewertet |

> **Hinweis:** Der Multiplikator wird in den [Einstellungen > Auftragsarten](../../14-einstellungen/11-auftragsarten.md) pro Auftragsart festgelegt und beeinflusst die Berechnung von Salden und Statistiken.

## Gemeinsame Funktionen

Alle Auftragsarten teilen sich folgende Funktionen, die in den übergeordneten Seiten dieses Kapitels beschrieben sind:

- **Positionen** -- Produkte und Dienstleistungen als Zeilen im Auftrag ([Auftragspositionen](../3-auftragspositionen.md))
- **Texte** -- Kopf- und Fußtexte auf Belegen ([Auftragsdetails](../2-auftrag-detail.md))
- **Zustände** -- Auftrags-, Zahlungs- und Lieferstatus ([Auftragsdetails](../2-auftrag-detail.md))
- **Rabatte** -- Auftragsrabatte in Prozent oder als fester Betrag ([Auftragsdetails](../2-auftrag-detail.md))
- **Drucklayouts** -- PDF-Erstellung (Rechnung, Angebot, Auftragsbestätigung, Lieferschein)
- **Belegkette** -- Verknüpfung zwischen zusammengehörigen Aufträgen

## Weiterführende Themen

- [Aufträge verwalten](../1-auftraege-verwalten.md) -- Auftragsliste, Suche und Filter
- [Auftragsdetails](../2-auftrag-detail.md) -- Allgemeine Detailansicht
- [Einstellungen > Auftragsarten](../../14-einstellungen/11-auftragsarten.md) -- Auftragsarten und Nummernkreise konfigurieren
