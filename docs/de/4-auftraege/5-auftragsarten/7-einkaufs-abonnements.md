# Einkaufs-Abonnements (wiederkehrende Einkaufsaufträge)

Ein Einkaufs-Abonnement ist ein wiederkehrender Einkaufsauftrag. Es kombiniert die Funktionen des [Einkaufs](6-einkauf.md) (Lieferantenperspektive, Freigabe-Workflow, Zahlungsbedingungen) mit einem automatischen Zeitplan, der in regelmäßigen Abständen neue Folgebelege erzeugt. Typische Anwendungsfälle sind monatliche Cloud-Kosten, quartalweise Wartungsverträge mit Lieferanten oder jährliche Lizenzgebühren.

## Unterschied zum Verkaufs-Abonnement

Das Einkaufs-Abonnement teilt sich den Zeitplan-Mechanismus mit dem [Verkaufs-Abonnement](4-abonnements.md), unterscheidet sich aber in einigen wichtigen Punkten:

| Merkmal | Verkaufs-Abonnement | Einkaufs-Abonnement |
|---|---|---|
| **Perspektive** | Sie stellen dem Kunden in Rechnung | Sie bestellen beim Lieferanten |
| **Multiplikator** | +1 (Einnahme) | -1 (Ausgabe) |
| **Freigabe-Workflow** | Nicht vorhanden | Genehmiger und Bestätigung erforderlich |
| **Zahlungsbedingungen** | Zahlungsziel für den Kunden | Zahlungsziel, Skonto-Frist, Skonto-Prozentsatz |
| **Automatischer Druck/Versand** | Verfügbar | Nicht verfügbar |
| **Kündigungsfunktion** | Verfügbar (über Sidebar-Button) | Nicht verfügbar |
| **Drucklayouts** | Rechnung, Angebot, Auftragsbestätigung, Lieferschein | Nur Lieferantenbestellung |

## Einkaufs-Abonnement erstellen

### Schritt 1: Neuen Auftrag anlegen

1. Navigieren Sie zu **Aufträge**.
2. Klicken Sie auf **Neu**.
3. Wählen Sie als **Auftragsart** den Typ **Einkaufs-Abonnement**.
4. Wählen Sie den **Kontakt** (Lieferant).
5. Füllen Sie die Kopfdaten aus.
6. Klicken Sie auf **Speichern**.

### Schritt 2: Positionen und Einkaufsdaten

Fügen Sie die wiederkehrenden Positionen hinzu und konfigurieren Sie die Einkaufs-spezifischen Felder:

- **Genehmiger** zuweisen (Pflichtfeld)
- **Zahlungsbedingungen** eintragen (Zahlungsziel, Skonto)
- **Positionen** hinzufügen (Produkte oder Dienstleistungen)

Details zu diesen Feldern finden Sie in der Dokumentation zum [Einkauf](6-einkauf.md).

### Schritt 3: Zeitplan einrichten

Nachdem der Auftrag gespeichert wurde, sehen Sie in der Sidebar den **Zeitplan**-Button (blaues Uhr-Symbol). Klicken Sie darauf, um das Zeitplan-Fenster zu öffnen.

![Zeitplan für Einkaufs-Abonnement](../../screenshots/167-einkaufs-abo-zeitplan.png)

Der Zeitplan bietet die gleichen Optionen wie beim Verkaufs-Abonnement:

- **Auftragsart** für den Folgebeleg
- **Wiederholung** (täglich, wöchentlich, monatlich, quartalsweise, jährlich usw.)
- **Fällig am** (Startdatum für die erste Ausführung)
- **Ende-Bedingung** (nie, Enddatum oder Anzahl Wiederholungen)
- **Aktiv** (Zeitplan ein- oder ausschalten)

Eine ausführliche Beschreibung aller Zeitplan-Optionen finden Sie unter [Abonnements](4-abonnements.md).

> **Hinweis:** Im Gegensatz zum Verkaufs-Abonnement gibt es beim Einkaufs-Abonnement **keinen automatischen Druck und E-Mail-Versand**. Da Sie der Besteller sind und nicht der Rechnungssteller, ist ein automatischer Versand an den Lieferanten nicht vorgesehen.

## Freigabe auch bei Abonnements

Der Freigabe-Workflow des Einkaufs bleibt auch beim Einkaufs-Abonnement erhalten. Der zugewiesene Genehmiger muss die Bestellung bestätigen, bevor sie als freigegeben gilt. Das gilt sowohl für den ursprünglichen Abonnement-Auftrag als auch für die automatisch erstellten Folgebelege.

## Praxisbeispiel: Monatliche Cloud-Kosten

Ein Unternehmen bezieht Cloud-Hosting-Dienste für 499,00 EUR pro Monat.

- **Auftragsart:** Einkaufs-Abonnement
- **Kontakt:** Cloud-Hosting-Anbieter
- **Positionen:** "Cloud Hosting Business" -- 1 Stück -- 499,00 EUR/Monat
- **Genehmiger:** IT-Leiter
- **Wiederholung:** Monatlich am 1.
- **Fällig am:** 1. März 2025
- **Ende:** Nie
- **Zahlungsziel:** 14 Tage
- **Skonto:** 2 % bei Zahlung innerhalb von 7 Tagen

**Ergebnis:** Am 1. jedes Monats erstellt Nuxbe automatisch einen neuen Einkaufsbeleg für die Cloud-Kosten. Der IT-Leiter prüft und bestätigt den Beleg.

## Weiterführende Themen

- [Einkauf](6-einkauf.md) -- Einkaufsaufträge im Detail
- [Abonnements](4-abonnements.md) -- Allgemeine Zeitplan-Erklärung und alle Optionen
- [Aufträge verwalten](../1-auftraege-verwalten.md) -- Auftragsliste und Filter
- [Auftragsdetails](../2-auftrag-detail.md) -- Allgemeine Auftragsdetails
- [Auftragsarten](../../14-einstellungen/11-auftragsarten.md) -- Auftragsarten konfigurieren
