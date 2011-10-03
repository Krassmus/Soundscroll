									Soundscroll
									-----------

Wenn Du dies hier liest, bist Du entweder ein besonders ausgefuchster Computernerd, 
der wei�, was er tut, oder Du bist besonders verzweifelt. In jedem Fall willst Du
selbst Musik per Tastendruck einspielen, am besten �ber eine Webseite oder eben
per Programm auf Deinem Computer. Ich werde diese Anleitung kurz halten.


Fall 1 - Du bist ein Nerd und wei�t, was Du tust:
Reden wir nicht um den hei�en Brei herum. Dieses Tool ist opensource (GPL 2)
und kann einfach von Dir verwendet werden. Du brauchst einen Webserver mit PHP.
Datenbanken werden noch nicht einmal verwendet. Stattdessen sucht sich das
Programm selbstst�ndig die .ogg-Dateien aus den Verzeichnissen music/<a-z> zusammen.
Also lautet die Installationsanleitung: pack dies iirgendwohin, sodass Dein Webserver 
mit PHP die index.php und playlist.php erreichen kann, stell ein paar .ogg-Musikdateien
in die Musikverzeichnisse und ab geht die Luzie.


Fall 2 - Du bist Verzweifelt und willst die harte Tour fahren:
Fangen wir vorne an: dies ist kein normales Computerprogramm sondern eine Webseite.
Klar, Webseiten haben meistens die Endung .html, diese aber nicht. Sie ist eine 
PHP-Webseite, die braucht PHP. (unterbrich mich, wenn ich Dich langweile und lies ein paar
Zeilen weiter unten weiter.) Was ist PHP? Das ist eine Skriptsprache, die vom Server
ausgewertet wird, um dynamische Inhalte an den Mann (also den Benutzer) zu bringen.
Muss Dich nicht weiter k�mmern bis auf ein Problem: Du brauchst einen Webserver, der PHP 
hat. Klassische dynamische Webseiten brauchen noch Datenbanken wie MySQL und so einen Quatsch.
Diese ist aber nicht so kompliziert, deswegen vergessen wir das mit den Datenbanken ganz 
schnell wieder.

Okay, weiter geht es. Webserver kann man mieten f�r etwas Geld oder aber man kann einen
auf den eigenen Computer installieren. Auf Mac OSX und Linux-Systemen ist meistens ein 
Webserver schon irgendwie installiert (aber nat�rlich nicht f�r das ganze Web frei gegeben).
Jetzt f�ngt die dreckige Arbeit an. Du brauchst einen Webserver und er muss einigerma�en 
laufen!
BABAMMM! (Blitzgewitter im Hintergrund zu sehen)
F�r Windows, wie ich es nutze, muss der noch installiert werden, was am besten mit XAMPP geht.
Was soll das wieder sein? Das ist genau das, was Du brauchst: eine .exe-Datei, die mit einem 
Klick und etwas Wartezeit den Webserver installiert. Den installierst Du sch�n nach 
c:\xampp und kopierst danach dieses Tool als gesamtes Verzeichnis nach c:\xampp\htdocs.
Jetzt musst Du nur noch sicher stellen, dass der Webserver funktioniert. �ffne dazu einen 
beliebigen Webbrowser und tippe in die Adresszeile (wenn Du nicht einmal wei�t, was die
Adresszeile ist, fang einfach an zu weinen und frag den Computernerd in Deiner Umgebung, ob
er Dir helfen kann):
localhost
Sic! Genau das muss man da eingeben. Nur localhost. Eine wenig informative Infoseite sollte da
auftauchen. Aber ganz wichtig ist: es sollte nicht eine "die Seite wurde nicht gefunden" 
Meldung auftauchen. Das w�re schei�e.
Wenn das klappt, tippe in die Adresszeile ein:
localhost/soundscroll
oder auch
localhost/Soundscroll
Kann einen Unterschied machen. Der zweite Teil sollte einfach der Name des Verzeichnisses
unter c:\xampp\htdocs\soundscroll sein.
Damit sollte die Seite zu sehen sein, die das Tool ist. An sich funktioniert es schon; Du 
brauchst aber noch Musik. Ohne Musik kann man leider nichts h�ren, auch wenn die Seite 
schon funktioniert.
Musik sollte nicht als MP3-Dateien vorliegen, sondern in OGG-Dateien. Warum das? Weil OGG 
von mehr Browsern erkannt wird, denn Mediaplayer f�r MP3 kosten immer noch Lizenzgeb�hren,
die an das Frauenhoferinstitut zu entrichten sind. Davon sieht der Nutzer meistens nichts.
Aber f�r uns Programmierer ist die Angelegenheit nervig. Also akzeptiere einfach erst einmal,
dass es nur mit OGG-Dateien geht. Musikdateien kann man aber mit dem kostenlosen Tool
Audacity (http://audacity.sourceforge.net/) als OGG-Datei exportieren und bekommt so genau das,
was man will. Diese neuen Musikdateien geh�ren in das Verzeichnis
c\xampp\htdocs\soundscroll\music\d
f�r eine Musikdatei, die mit dem Buchstaben d angespielt werden soll. Du kann in der 
Adresse das letzte d nat�rlich auch ersetzen durch ein a f�r Musik, die hinter dem A liegt
und so weiter.
Und das war es auch schon!

Worauf Du um himmelswillen aufpassen solltest: wenn Du einen Webserver mietest, der im 
Internet frei zug�nglich ist, lade niemals Deinen Herr Der Ringe Soundtrack in dieses Tool.
Das ist sowas von illegal. Was Du mit Deinem Webserver auf Deinem eigenen Computer anstellst,
ist wiederum ein anderes Blatt. Da kein anderer v�llig Fremder darauf zugreifen kann, kannst
Du dort auch Herr der Ringe und Gladiator und, was Du willst, hochladen. Aber auf frei 
zug�nglichen Webservern immer nur freie Musik, die nicht bei iTunes Geld kostet. Derartige
Musik gibt es nicht? Doch, die gibt es. Ich habe viel Musik von www.jamendo.de zusammen gesucht.
Die ist unter CreativeCommons lizensiert und kann daher von jedem privaten (nichtkommerziellen)
Menschen kostenlos verwendet werden.

So long, ich hoffe, ich konnte helfen.

Rasmus Fuhse