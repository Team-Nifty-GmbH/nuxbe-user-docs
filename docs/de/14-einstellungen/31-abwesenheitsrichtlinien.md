# Abwesenheitsrichtlinien

Unter **Einstellungen > Personalwesen > Abwesenheitsrichtlinien** konfigurieren Sie die Regeln und Bedingungen für Abwesenheitsanträge. Richtlinien definieren Vorlaufzeiten, maximale Zeiträume, Dokumentationspflichten und weitere Anforderungen.

## Übersicht

1. Navigieren Sie zu **Einstellungen > Personalwesen > Abwesenheitsrichtlinien**.

   ![Abwesenheitsrichtlinien](../screenshots/68-einstellungen-abwesenheitsrichtlinien.png)

2. Die Übersicht zeigt alle Richtlinien mit folgenden Informationen:
   - **Name** - Bezeichnung der Richtlinie
   - **Maximale aufeinanderfolgende Tage** - Längste erlaubte Abwesenheitsdauer
   - **Mindestvorlauf** - Erforderliche Vorlaufzeit in Tagen
   - **Status** - Aktiv oder inaktiv

## Richtlinie anlegen

1. Klicken Sie auf **Neu**.
2. Füllen Sie die Pflichtfelder aus:
   - **Name** - Geben Sie eine aussagekräftige Bezeichnung ein (z. B. "Standard-Urlaubsrichtlinie")
3. Konfigurieren Sie die Regeln:
   - **Maximale aufeinanderfolgende Tage** - Legen Sie fest, wie viele Tage am Stück maximal beantragt werden dürfen
   - **Mindestvorlauf (Tage)** - Geben Sie an, wie viele Tage im Voraus die Abwesenheit beantragt werden muss
   - **Dokumentationspflicht ab (Tage)** - Ab wie vielen Tagen eine Dokumentation erforderlich ist (z. B. Attest ab dem 3. Krankheitstag)
4. Legen Sie die Anforderungen fest:
   - **Begründung erforderlich** - Aktivieren Sie dies, wenn der Mitarbeiter eine Begründung angeben muss
   - **Vertretung erforderlich** - Aktivieren Sie dies, wenn eine Vertretung benannt werden muss
   - **Vertretung kann ausgewählt werden** - Aktivieren Sie dies, wenn der Mitarbeiter selbst eine Vertretung auswählen darf
   - **Dokumentation erforderlich** - Aktivieren Sie dies, wenn Nachweise (z. B. Atteste) hochgeladen werden müssen
   - **Aktiv** - Legen Sie fest, ob die Richtlinie aktiv ist
5. Klicken Sie auf **Speichern**.

## Richtlinie bearbeiten

1. Klicken Sie auf eine Richtlinie in der Liste.
2. Passen Sie die gewünschten Einstellungen an.
3. Klicken Sie auf **Speichern**.

## Richtlinie löschen

1. Klicken Sie auf eine Richtlinie in der Liste.
2. Klicken Sie auf **Löschen**.
3. Bestätigen Sie den Löschvorgang.

## Verknüpfung mit Abwesenheitsarten

Abwesenheitsrichtlinien werden über die Abwesenheitsarten mit Anträgen verknüpft. Wenn Sie eine Richtlinie bearbeiten, wirkt sich dies auf alle zugeordneten Abwesenheitsarten aus.

## Validierung von Anträgen

Bei der Beantragung einer Abwesenheit prüft das System automatisch:
- Ob die Mindestvorlaufzeit eingehalten wurde
- Ob die maximale Anzahl aufeinanderfolgender Tage überschritten wird
- Ob eine Begründung, Vertretung oder Dokumentation erforderlich ist

Wenn eine Bedingung nicht erfüllt ist, erhält der Mitarbeiter eine entsprechende Fehlermeldung.

## Beispiele für Richtlinien

**Urlaubs-Richtlinie:**
- Mindestvorlauf: 14 Tage
- Maximale aufeinanderfolgende Tage: 30 Tage
- Vertretung erforderlich: Ja

**Krankheits-Richtlinie:**
- Mindestvorlauf: 0 Tage
- Dokumentationspflicht ab: 3 Tage
- Dokumentation erforderlich: Ja

**Sonderurlaubs-Richtlinie:**
- Mindestvorlauf: 7 Tage
- Begründung erforderlich: Ja
- Maximale aufeinanderfolgende Tage: 5 Tage

> **Hinweis:** Richtlinien sollten vor dem Löschen aus allen Abwesenheitsarten entfernt werden. Inaktive Richtlinien werden bei der Validierung nicht mehr berücksichtigt.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [Abwesenheitsanträge](../7-personalwesen/6-abwesenheitsantraege.md) - Abwesenheiten beantragen
