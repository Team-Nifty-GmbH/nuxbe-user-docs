# Verkaufsziele

Unter **Einstellungen > Verkauf > Ziele** verwalten Sie die Verkaufsziele für Ihr Team.

Verkaufsziele ermöglichen es, konkrete Leistungsvorgaben für Vertriebsmitarbeiter oder Teams zu definieren und deren Erreichung systematisch zu überwachen. Sie dienen der Motivation, der Leistungsmessung und als Grundlage für Vergütungsmodelle.

## Übersicht

1. Navigieren Sie zu **Einstellungen > Verkauf > Ziele**.

   ![Verkaufsziele verwalten](../screenshots/111-einstellungen-ziele.png)

2. Die Tabelle zeigt alle konfigurierten Verkaufsziele.

### Angezeigte Spalten

- **Name** - Die Bezeichnung des Ziels
- **Zeitraum** - Der Gültigkeitszeitraum (Start- und Enddatum)
- **Zielwert** - Der angestrebte Wert (z. B. Umsatz, Anzahl Abschlüsse)
- **Zugeordnete Mitarbeiter** - Die Personen oder Teams, für die das Ziel gilt

## Verkaufsziel anlegen

Um ein neues Verkaufsziel zu erstellen:

1. Klicken Sie auf die Schaltfläche **Neu**.
2. Geben Sie im Feld **Name** eine aussagekräftige Bezeichnung ein (z. B. "Q1 2025 Umsatzziel").
3. Legen Sie den **Zeitraum** fest:
   - **Startdatum** - Beginn des Zielzeitraums
   - **Enddatum** - Ende des Zielzeitraums
4. Definieren Sie das **Ziel**:
   - **Modelltyp** - Worauf sich das Ziel bezieht (z. B. Aufträge, Umsatz)
   - **Aggregationstyp** - Wie der Wert berechnet wird (Summe, Anzahl, Durchschnitt)
   - **Aggregationsspalte** - Welches Feld aggregiert wird (z. B. Gesamtbetrag)
   - **Zielwert** - Der anzustrebende Wert
5. Wählen Sie die **zugeordneten Mitarbeiter** aus.
6. Legen Sie fest, wie der Zielwert auf die Mitarbeiter verteilt wird:
   - **Gleichmäßig** - Alle erhalten den gleichen Anteil
   - **Prozentual** - Individuelle prozentuale Anteile
   - **Absolut** - Feste Beträge pro Mitarbeiter
7. Klicken Sie auf **Speichern**.

### Felder im Detail

#### Name

Der Name sollte eindeutig sein und Zeitraum sowie Art des Ziels erkennbar machen. Beispiele:

- **Q1 2025 Umsatzziel** - Quartalsbasiertes Umsatzziel
- **Januar Neukundenziel** - Monatliches Ziel für Neukunden
- **Jahresziel 2025** - Jährliches Gesamtziel
- **Produktgruppe A - H1 2025** - Produktspezifisches Halbjahresziel

#### Zeitraum

Der Zeitraum definiert die Gültigkeit des Ziels:

- **Monatsziele** - Z. B. 01.01.2025 bis 31.01.2025
- **Quartalsziele** - Z. B. 01.01.2025 bis 31.03.2025
- **Jahresziele** - Z. B. 01.01.2025 bis 31.12.2025
- **Individuelle Zeiträume** - Beliebige Start- und Enddaten

Das System kann das Ziel automatisch in tägliche Teilziele herunterbrechen, um den Fortschritt granular zu verfolgen.

#### Zieldefinition

##### Modelltyp

Wählen Sie aus, worauf sich das Ziel bezieht:

- **Aufträge** - Umsatz aus Aufträgen
- **Rechnungen** - Rechnungsbeträge
- **Leads** - Anzahl oder Wert von Leads
- **Produkte** - Verkaufte Stückzahlen

##### Aggregationstyp

Definieren Sie, wie der Zielwert berechnet wird:

- **Summe** - Addiert alle Werte (z. B. Gesamtumsatz)
- **Anzahl** - Zählt die Datensätze (z. B. Anzahl Abschlüsse)
- **Durchschnitt** - Berechnet den Mittelwert (z. B. durchschnittlicher Auftragswert)

##### Aggregationsspalte

Wählen Sie das Feld aus, das aggregiert werden soll:

- **total_gross** - Bruttobetrag
- **total_net** - Nettobetrag
- **id** - Für Anzahl-Zählungen
- **Benutzerdefinierte Felder** - Je nach Modelltyp

##### Zielwert

Der anzustrebende Wert in der entsprechenden Einheit:

- Bei Umsatzzielen: Der Betrag in der Systemwährung (z. B. 100000.00)
- Bei Anzahlzielen: Die gewünschte Anzahl (z. U. 50)
- Bei Durchschnittszielen: Der Zieldurchschnitt (z. B. 2500.00)

#### Mitarbeiterzuordnung

##### Einzelne Mitarbeiter

Wählen Sie die Mitarbeiter aus, für die das Ziel gilt:

- Klicken Sie auf **Mitarbeiter hinzufügen**
- Wählen Sie den gewünschten Mitarbeiter
- Legen Sie dessen Anteil am Ziel fest

##### Gruppenziel

Aktivieren Sie **Gruppenziel**, wenn das Ziel für das gesamte Team gemeinsam gilt:

- Alle Mitarbeiter arbeiten auf das gleiche Ziel hin
- Der Fortschritt wird als Summe aller Beiträge berechnet
- Eignet sich für Team-Bonusmodelle

#### Zielverteilung

##### Gleichmäßige Verteilung

Der Zielwert wird gleichmäßig auf alle zugeordneten Mitarbeiter aufgeteilt:

- Bei 100.000 € und 4 Mitarbeitern: Jeder hat ein Ziel von 25.000 €
- Einfach und fair bei gleichen Aufgabenbereichen

##### Prozentuale Verteilung

Jeder Mitarbeiter erhält einen individuellen prozentualen Anteil:

- Mitarbeiter A: 40 % (40.000 €)
- Mitarbeiter B: 30 % (30.000 €)
- Mitarbeiter C: 30 % (30.000 €)
- Berücksichtigt unterschiedliche Rollen oder Arbeitszeiten

##### Absolute Beträge

Jedem Mitarbeiter wird ein fester Zielbetrag zugewiesen:

- Mitarbeiter A: 50.000 €
- Mitarbeiter B: 30.000 €
- Mitarbeiter C: 20.000 €
- Maximale Flexibilität bei der Zielzuweisung

## Verkaufsziel bearbeiten

Um ein bestehendes Verkaufsziel zu ändern:

1. Klicken Sie auf das gewünschte Ziel in der Tabelle.
2. Passen Sie die Felder nach Bedarf an.
3. Klicken Sie auf **Speichern**.

> **Achtung:** Änderungen an bereits laufenden Zielen können die Motivation beeinträchtigen. Kommunizieren Sie Änderungen transparent an die betroffenen Mitarbeiter.

## Verkaufsziel löschen

Verkaufsziele können gelöscht werden, wenn sie nicht mehr benötigt werden:

1. Öffnen Sie das zu löschende Ziel.
2. Klicken Sie auf **Löschen**.
3. Bestätigen Sie den Löschvorgang.

## Zielverfolgung und Auswertung

### Fortschrittsanzeige

Für jedes Ziel wird der aktuelle Fortschritt angezeigt:

- **Aktueller Wert** - Der bisher erreichte Wert
- **Zielwert** - Der angestrebte Wert
- **Erreichungsgrad** - Der prozentuale Fortschritt
- **Verbleibend** - Der noch zu erreichende Wert

Die Anzeige erfolgt sowohl pro Mitarbeiter als auch als Gesamtübersicht.

### Visualisierung

Der Fortschritt wird in verschiedenen Formaten dargestellt:

- **Fortschrittsbalken** - Schneller visueller Überblick
- **Prozentanzeige** - Exakte Fortschrittsangabe
- **Trendlinien** - Entwicklung über den Zeitverlauf
- **Prognose** - Hochrechnung auf Basis des aktuellen Verlaufs

### Dashboard-Integration

Verkaufsziele können im Dashboard angezeigt werden:

- Mitarbeiter sehen ihre eigenen Ziele
- Führungskräfte sehen Teamziele
- Automatische Benachrichtigungen bei Meilensteinen

## Best Practices für Verkaufsziele

### SMART-Prinzip

Ziele sollten SMART formuliert sein:

- **Specific (Spezifisch)** - Klar definiert, was erreicht werden soll
- **Measurable (Messbar)** - Fortschritt kann objektiv gemessen werden
- **Achievable (Erreichbar)** - Realistisch, aber fordernd
- **Relevant (Relevant)** - Unterstützt übergeordnete Unternehmensziele
- **Time-bound (Zeitgebunden)** - Klarer Zeitrahmen definiert

### Angemessene Zielhöhe

- Orientieren Sie sich an historischen Daten
- Berücksichtigen Sie Marktentwicklungen
- Setzen Sie fordernde, aber erreichbare Ziele
- Vermeiden Sie zu häufige Zielanpassungen

### Regelmäßige Überprüfung

- Wöchentliche oder monatliche Fortschrittsreviews
- Frühzeitiges Gegensteuern bei Abweichungen
- Anerkennung von Teilerfolgen
- Analyse der Ursachen bei Zielverfehlungen

### Transparenz und Kommunikation

- Klare Kommunikation der Ziele und deren Bedeutung
- Offenlegung der Berechnungsgrundlagen
- Regelmäßiges Feedback zum Fortschritt
- Faire Bewertung bei Zielerreichung

### Motivation statt Druck

- Ziele als Chance zur Weiterentwicklung kommunizieren
- Positive Verstärkung bei Fortschritten
- Unterstützung anbieten bei Schwierigkeiten
- Erfolge feiern und würdigen

> **Empfehlung:** Verkaufsziele sind ein mächtiges Instrument zur Leistungssteigerung, aber nur wenn sie richtig eingesetzt werden. Achten Sie auf Fairness, Transparenz und realistische Zielsetzungen. Ziele sollten motivieren, nicht demotivieren.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [Verkauf](../3-verkauf/0-index.md) - Verkaufsmodul verwenden
