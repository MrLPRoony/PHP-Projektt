<?php
	$website_title   = "Test Website";
	$website_charest = "UTF-8";
	$website_pages   = "pages";
	
// die Konstanten auslagern in eigene Datei
// die dann per require_once ('config.php'); 
// geladen wird.
 
// Damit alle Fehler angezeigt werden
error_reporting(E_ALL);
 
// Zum Aufbau der Verbindung zur Datenbank
// die Daten erhalten Sie von Ihrem Provider
define ( 'MYSQL_HOST',      'localhost' );
 
// bei XAMPP ist der MYSQL_Benutzer: root
define ( 'MYSQL_BENUTZER',  'Rene' );
define ( 'MYSQL_KENNWORT',  '123456' );
// für unser Bsp. nennen wir die DB adressverwaltung
define ( 'MYSQL_DATENBANK', 'schueler' );
?>