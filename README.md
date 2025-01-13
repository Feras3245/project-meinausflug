Here's the German translation of your text:

---

# Demo-Webanwendung für ein Reisebüro

Dieses Projekt ist eine Demo einer Webanwendung für ein Reisebüro, die auf dem MVC-Designmuster basiert und zur Erkundung des Symfony-Frameworks entwickelt wurde. Es dient als praktisches Lernprojekt für mich, einen Softwareentwickler, der vom Java-Ökosystem zur Full-Stack-Webentwicklung mit PHP wechselt.

## Projektstatus

Das Projekt befindet sich in einem sehr frühen Entwicklungsstadium. Derzeit gibt es nur eine definierte Route, die zum `main/index`-Controller führt. Es wurden noch keine Modelle erstellt, da die Einrichtung der MySQL-Datenbank erst nach der Fertigstellung aller Views beginnen wird.

### Aktueller Fokus

Der Hauptfokus liegt derzeit auf dem Aufbau der Views. Die Anwendung verwendet die Twig-Templating-Engine in Verbindung mit UX-Twig-Components, um HTML-Templates serverseitig dynamisch zu rendern.

## Abhängigkeiten

Die folgenden Abhängigkeiten werden verwendet, um das Projekt abzuschließen:

### PHP-Abhängigkeiten
1. **Doctrine**: Für objekt-relationales Mapping und Datenpersistenz.
2. **Symfony Translations**: Zur Unterstützung der englischen und deutschen Sprache.
3. **UX-Twig-Components**: Zur Erstellung wiederverwendbarer Komponenten (z. B. Buttons, Navigationsleiste, Menü).
4. **Twig**: Für HTML-Templating.
5. **Symfony Security Bundle**: Zur Implementierung von Authentifizierungs- und Autorisierungsfunktionen.
6. **Symfony Profiler**: Entwicklungswerkzeug für Leistungsprofilierung und Fehlersuche.

### JavaScript-Abhängigkeiten
1. **jQuery**
2. **jQuery UI**
3. **OpenLayers**: Zum Anzeigen interaktiver OpenStreetMap-Ansichten.
4. **SwiperJS**: Zur Erstellung hardwarebeschleunigter Diashows und Slider.

## Projektverzeichnisstruktur

Nachfolgend finden Sie eine Übersicht über die Verzeichnisstruktur des Projekts:

### Hauptverzeichnisse
- **assets**: Enthält Medien und Webassets wie CSS-, JavaScript-Dateien, Bilder und Icons.
- **config**: Enthält Symfony YAML-Konfigurationsdateien.
- **locales**: Speichert Übersetzungszuordnungsdateien für Englisch und Deutsch.
- **src**: Das Hauptverzeichnis der Anwendung.

### `src`-Unterverzeichnisse
- **Controllers**: Enthält Controller, in denen Routen definiert sind, um auf verschiedene HTTP-Anfragen zu reagieren.
- **Entity**: Wird die Doctrine-Modelle für die Datenverarbeitung enthalten.
- **Views**: Beinhaltet alle UX-Twig-Components und Twig-Templates.


## Demo
![demo](https://github.com/Feras3245/project-meinausflug/blob/02ea75344e3cb9aa225302e89857823689e948f8/compressed.gif)
