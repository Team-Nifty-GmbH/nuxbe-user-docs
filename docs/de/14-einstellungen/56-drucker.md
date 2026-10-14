# Drucker

In der Druckerverwaltung sehen Sie alle Drucker, die über eine Printer Bridge an die Anwendung angebunden sind, und legen fest, welche davon in den Auswahllisten erscheinen.

## Wie ein Drucker in die Anwendung kommt

Drucker werden in der Anwendung nicht von Hand angelegt. Sie kommen von der **Printer Bridge**, einem kleinen Programm auf einem Rechner in Ihrem Netz (zum Beispiel einem Mini PC oder Raspberry Pi), auf dem der Druckdienst **CUPS** läuft.

- Jede Druckerwarteschlange in CUPS wird zu einem Drucker in der Anwendung.
- Die Bridge prüft in festen Abständen (Standard: alle 5 Minuten), welche Warteschlangen es gibt. Neue Warteschlangen legt sie als Drucker an, geänderte aktualisiert sie, entfernte löscht sie.
- Die Papierformate eines Druckers stammen aus seinem Treiber in CUPS. In der Anwendung lassen sie sich nicht bearbeiten.
- Alle Drucker einer Bridge tragen deren Instanznamen als **Spooler**.

Daraus folgt:

- **Drucker hinzufügen:** Warteschlange in CUPS auf dem Bridge Rechner anlegen. Drucker, die sich im Netz selbst anmelden (treiberlos über IPP), legt CUPS meist automatisch an. Etikettendrucker und ältere Geräte brauchen einen Treiber auf dem Bridge Rechner.
- **Fehlendes Papierformat:** Das Format muss im Treiber des Druckers in CUPS ergänzt werden. Nach der nächsten Prüfung durch die Bridge steht es in der Auswahl.
- **Drucker tauschen:** In CUPS die Adresse der bestehenden Warteschlange auf das neue Gerät ändern. Der Drucker behält so in der Anwendung seinen Alias und seine Benutzerzuweisungen. Eine neue Warteschlange wird dagegen zu einem neuen Drucker ohne Zuweisungen.
- **Drucker entfernen:** Warteschlange in CUPS löschen. Wird nur der Drucker in der Anwendung gelöscht, legt die Bridge ihn bei der nächsten Prüfung wieder an. Soll ein Drucker nur nicht mehr angeboten werden, schalten Sie ihn unsichtbar.

## Navigation

1. Navigieren Sie zu **Einstellungen > System > Drucker**.

   ![Drucker verwalten](../screenshots/100-einstellungen-drucker.png)

2. Die Tabelle zeigt alle Drucker aller Bridges.

### Spalten der Drucker-Liste

- **Name:** Name der Warteschlange, wie CUPS ihn meldet
- **Alias:** Ein sprechender Name, den Sie selbst vergeben
- **Spooler:** Instanzname der Bridge, von der der Drucker kommt
- **Standort:** Standort aus CUPS
- **Modell:** Hersteller und Modell aus dem Treiber
- **Aktiv:** Ob der Drucker aktiv ist
- **Sichtbar:** Ob der Drucker in den Auswahllisten erscheint

## Drucker bearbeiten

1. Klicken Sie in der Zeile des Druckers auf **Bearbeiten**.
2. Ändern Sie den **Alias** oder schalten Sie **Sichtbar** um.
3. Klicken Sie auf **Speichern**.

Mehr lässt sich an einem Drucker in der Anwendung nicht einstellen, alles andere kommt aus CUPS.

## Drucker löschen

Klicken Sie in der Zeile des Druckers auf **Löschen** und bestätigen Sie. Solange die Warteschlange in CUPS noch existiert, legt die Bridge den Drucker bei der nächsten Prüfung wieder an.

## Drucker Benutzern zuweisen

Beim Drucken bietet die Anwendung jedem Benutzer nur die Drucker an, die ihm zugewiesen sind. Die Zuweisung erfolgt am Benutzer, nicht am Drucker:

1. Navigieren Sie zu **Einstellungen > Benutzer & Rechte > Benutzer** und öffnen Sie den Benutzer.
2. Wählen Sie im Feld **Drucker** alle Drucker, die der Benutzer verwenden soll. Mehrere sind möglich.
3. Wählen Sie darunter den **Standarddrucker** und die **Standardgröße**. Beide sind im Druckdialog vorausgewählt.
4. Speichern Sie den Benutzer.

> **Hinweis:** Im Feld **Drucker** erscheinen nur Drucker, die aktiv und sichtbar sind. Blenden Sie Drucker, die nicht gebraucht werden, deshalb zuerst aus und weisen Sie danach zu.

## Bridge-Konfiguration generieren

Für die Verbindung zwischen der Anwendung und der Bridge benötigen Sie eine Konfiguration:

1. Klicken Sie auf **Bridge-Konfiguration generieren**.
2. Geben Sie einen eindeutigen **Instanznamen** ein (zum Beispiel "Hauptstandort-Drucker"). Er wird zum Spooler aller Drucker dieser Bridge.
3. Passen Sie bei Bedarf die Prüfintervalle für Drucker und Druckaufträge, den API Port und die WebSocket Option an.
4. Klicken Sie auf **Konfiguration generieren** und kopieren Sie das Ergebnis in die Konfiguration der Bridge.

Die Konfiguration enthält einen API Token für die Anmeldung der Bridge. Gibt es zum Instanznamen schon einen Token, fragt die Anwendung vor dem Neuerzeugen nach. Ein neuer Token macht den alten ungültig, die Bridge muss dann die neue Konfiguration bekommen.

> **Sicherheit:** Der Token ermöglicht Zugriff auf das Drucksystem. Behandeln Sie die Konfiguration vertraulich.

## Spooler löschen

Um eine Bridge samt aller ihrer Drucker zu entfernen:

1. Klicken Sie auf **Spooler löschen**.
2. Wählen Sie den Spooler aus.
3. Bestätigen Sie den Löschvorgang.

> **Warnung:** Diese Aktion löscht alle Drucker dieses Spoolers und macht den zugehörigen API Token ungültig.

## Fehlerbehebung

### Drucker erscheint nicht in der Liste

1. Gibt es in CUPS auf dem Bridge Rechner eine Warteschlange für den Drucker?
2. Läuft die Bridge? Neue Warteschlangen erscheinen erst nach der nächsten Prüfung.

### Drucker erscheint nicht beim Benutzer oder im Druckdialog

1. Ist der Drucker aktiv und sichtbar?
2. Ist er dem Benutzer unter **Einstellungen > Benutzer & Rechte > Benutzer** zugewiesen?

### Gewünschtes Papierformat fehlt

Das Format fehlt im Treiber des Druckers in CUPS. Es muss dort ergänzt werden, in der Anwendung lässt es sich nicht anlegen.

### Druckaufträge bleiben offen

1. Bridge läuft nicht oder erreicht die Anwendung nicht
2. Drucker ist ausgeschaltet oder vom Bridge Rechner aus nicht erreichbar
3. Warteschlange in CUPS ist angehalten

Den Status einzelner Aufträge sehen Sie unter [Druckaufträge](55-druckauftraege.md).

## Wichtige Hinweise

> **Hinweis:** Ohne laufende Printer Bridge können keine Druckaufträge verarbeitet werden.

> **Berechtigungen:** Bearbeiten, Löschen und Benutzerzuweisungen sind über Rechte steuerbar und können damit auch Rollen außerhalb der Administration erlaubt werden.

> **Tipp:** Vergeben Sie sprechende Aliasse, damit Benutzer den richtigen Drucker leicht finden.

## Weiterführende Themen

- [Einstellungen](0-index.md) - Zurück zur Einstellungsübersicht
- [Druckaufträge](55-druckauftraege.md) - Druckaufträge ansehen und verwalten
- [Benutzer](16-benutzer.md) - Benutzer verwalten
