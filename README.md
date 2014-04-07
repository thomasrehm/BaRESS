BaRESS
======

Bachelor Thesis written by Thomas Rehm

Course of Study: <a target="_blank" href="http://www.oth-aw.de/studium/bachelorstudiengaenge/medienproduktion_und_technik/allgemeines/">»Medienproduktion und Medientechnik«</a>

University of applied sciences:<a target="_blank" href="http://www.oth-aw.de"> Ostbayerische Technische Hochschule Amberg-Weiden</a>

Bachelor Thesis title:
»Website performance optimization using server side components and responsive web design«

Title (german):
»Optimierung der Website-Performance durch den Einsatz serverseitiger Komponenten und reaktionsfähigem Webdesign«

Abstract (german):
Diese Bachelorarbeit beschäftigt sich mit der Optimierung von Webseiten-Performance und den Herausforderungen, denen Webentwickler gegenüberstehen. Anhand einer Beispiel-Webseite werden diverse Probleme betrachtet, die die Performance mindern. Um diese Probleme möglichst effektiv zu verbessern, werden konkrete Lösungsansätze und Techniken untersucht und umgesetzt. Die Optimierung wird für geräteunabhängige Webseitenaufrufe durchgeführt; im Verlauf der Bachelorarbeit aber speziell im Hinblick auf die Optimierung für mobile Aufrufe.

Examiner: Prof. Dr. Dieter Meiller

======

Die urpsrüngliche Beispiel-Webseite zu dieser Thesis ist unter <a target="_blank" href="http://medinf.haw-aw.de/~rehm/baress/standard">medinf.haw-aw.de/~rehm/baress/standard/</a> zu finden. Sofern dieser Link nicht mehr funktionieren sollte, liegen alle benötigten Dateien in diesem Repository zum Download bereit.

Zum lokalen Betrieb der BaRESS-Webseite wird ein Apache-Webserver mit PHP benötigt. Klonen Sie das Repository und kopieren Sie den gesamten baress-Ordner in Ihr lokales Document Root Verzeichnis des Apache-Webservers. Nun könne Sie die Standart-Variante unter localhost/baress/standard/ erreichen.
Um das RESS-System zum laufen zu bringen, müssen wahrscheinlich in den htaccess-Dateien die korrekten Pfade eingetragen werden. Ebenso muss ein eigener WURFL-Cloud API-Key eingetragen werden, ansonsten funktioniert die Abfrage der WURFL-Tests nicht. Dieser kann <a target="_blank" href="https://scientiamobile.com/cloud/signup/free">>hier<</a> beantragt werden.
In der Datei /baress/ress/_inc/wurfltest.php muss der API-Key in die Variable $config->api_key eingetragen werden.
