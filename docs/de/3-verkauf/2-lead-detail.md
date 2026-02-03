# Lead-Details

In der Detailansicht sehen Sie alle Informationen zu einem einzelnen Lead und können diesen bearbeiten, durch die Pipeline bewegen oder in einen Auftrag umwandeln.

## Detailansicht öffnen

1. Navigieren Sie zur [Leadliste](1-leads-verwalten.md).
2. Klicken Sie auf den gewünschten Lead in der Tabelle.

   ![Detailansicht eines Leads](../screenshots/23-lead-detail.png)

## Bereiche der Detailansicht

### Statuspipeline

Am oberen Rand der Detailansicht wird die Vertriebspipeline als visuelle Fortschrittsanzeige dargestellt. Sie sehen alle verfügbaren Stufen und können den Status des Leads direkt ändern, indem Sie auf die gewünschte Stufe klicken.

Die Standardstufen sind: **Neu**, **Qualifiziert**, **Angebot**, **Verhandlung**, **Gewonnen** und **Verloren**.

### Stammdaten

Die folgenden Felder stehen zur Bearbeitung zur Verfügung:

| Feld | Beschreibung |
|---|---|
| **Name** | Bezeichnung des Leads (Pflichtfeld) |
| **Kontakt** | Verknüpfter Kontakt aus der Kontaktverwaltung; per Klick gelangen Sie direkt zum Kontakt |
| **Adresse** | Adresse des verknüpften Kontakts |
| **Verantwortlicher** | Zugewiesener Vertriebsmitarbeiter, der diesen Lead betreut |
| **Erwarteter Umsatz** | Geschätzter Auftragswert in der Standardwährung |
| **Erwartetes Abschlussdatum** | Geplantes Datum für den Abschluss des Leads |
| **Verlustgrund** | Wird sichtbar, wenn der Lead auf **Verloren** gesetzt wird (siehe unten) |

### Aktivitäten und Kommentare

Im unteren Bereich der Detailansicht finden Sie den Aktivitätsverlauf. Hier werden alle Interaktionen und Notizen zum Lead chronologisch aufgelistet:

- **Kommentare** - Hinterlassen Sie interne Notizen zum aktuellen Stand, zu Gesprächen oder nächsten Schritten.
- **Änderungsverlauf** - Statusänderungen und Bearbeitungen werden automatisch protokolliert.

Um einen neuen Kommentar hinzuzufügen, geben Sie Ihren Text im Eingabefeld ein und klicken Sie auf **Senden**.

## Lead bearbeiten

1. Ändern Sie die gewünschten Felder direkt in der Detailansicht.
2. Klicken Sie auf **Speichern**, um die Änderungen zu übernehmen.

## Lead-Status ändern

### Vorwärts durch die Pipeline

1. Klicken Sie in der Pipelineansicht auf die nächste Stufe (z. B. von **Qualifiziert** auf **Angebot**).
2. Der Status wird sofort aktualisiert.
3. Klicken Sie auf **Speichern**, um die Änderung zu sichern.

Alternativ können Sie den Status auch über das Dropdown-Feld **Status** in den Stammdaten ändern.

### Lead als Gewonnen markieren

Wenn Sie den Status auf **Gewonnen** setzen, wird die Option angeboten, direkt einen Auftrag aus dem Lead zu erstellen (siehe nächster Abschnitt).

### Lead als Verloren markieren

1. Setzen Sie den Status auf **Verloren**.
2. Es erscheint das Feld **Verlustgrund**, in dem Sie den Grund für den Verlust auswählen oder eingeben können.
3. Klicken Sie auf **Speichern**.

> **Hinweis:** Die verfügbaren Verlustgründe können in den [Einstellungen > Lead-Verlustgründe](../14-einstellungen/45-lead-verlustgruende.md) gepflegt werden.

## Auftrag aus Lead erstellen

Wenn ein Lead den Status **Gewonnen** erreicht hat, können Sie direkt einen Auftrag daraus erstellen:

1. Setzen Sie den Lead-Status auf **Gewonnen**.
2. Klicken Sie auf die Schaltfläche **Auftrag erstellen**.
3. Die Daten des Leads (Kontakt, Adresse, erwarteter Umsatz) werden automatisch in den neuen Auftrag übernommen.
4. Sie werden zur [Auftragsdetailansicht](../4-auftraege/2-auftrag-detail.md) weitergeleitet, wo Sie den Auftrag vervollständigen können.

Nach der Konvertierung bleibt der Lead erhalten und zeigt eine Verknüpfung zum erstellten Auftrag an. So ist die Herkunft des Auftrags jederzeit nachvollziehbar.

## Weiterführende Themen

- [Leads verwalten](1-leads-verwalten.md) - Zurück zur Leadliste
- [Aufträge](../4-auftraege/0-index.md) - Auftrag aus Lead erstellen und verwalten
- [Kontakte](../2-kontakte/0-index.md) - Verknüpften Kontakt bearbeiten
- [Einstellungen > Lead-Status](../14-einstellungen/44-lead-status.md) - Statuspipeline konfigurieren
- [Einstellungen > Lead-Verlustgründe](../14-einstellungen/45-lead-verlustgruende.md) - Verlustgründe pflegen
