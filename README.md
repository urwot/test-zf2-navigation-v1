Navigation mit Zend Framework 2
=======================

Einleitung
------------
Dies ist eine einfache Applikation, welche die Verwendung von Zend/Navigation
darstellt. Die Menüpunkte werden in diesem Beispiel aus einer mySQL Datenbank
geladen. 


Installation
------------

Downloaden und entpacken.

Datenbank
------------
Erstelle eine Tabelle mit dem Namen zf2navigation

Der Datenbankdump für mySQL Tabelle liegt in /data/menu.sql


Virtual Host
------------
Erstelle einen virtuellen Host, der auf das public/ Verzeichnis verweist.

Beispiel:

<VirtualHost *:80>
    DocumentRoot "/usr/local/zend/apache2/htdocs/test-zf2-navigation-v1/public"
    ServerAdmin info@dhe.de
    ServerName testzf2navigationv1.dev
	SetEnv APPLICATION_ENV "development"
    <Directory "/usr/local/zend/apache2/htdocs/test-zf2-navigation-v1/public">
        Options Indexes FollowSymLinks
        AllowOverride all
        Order Deny,Allow
        Deny from all
        Allow from 127.0.0.1
    </Directory>
</VirtualHost>