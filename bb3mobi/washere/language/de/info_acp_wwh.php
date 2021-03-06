<?php
/**
*
* Nv who was here extension for the phpBB Forum Software package.
*
* @copyright (c) 2013 nickvergessen <http://www.flying-bits.org> - 2015 Anvar <http://apwa.ru> - 2018 LukeWCS <https://www.wcsaga.org>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Lang_iso     : de
* Lang_ver     : 1.5.0
* Lang_author  : LukeWCS
* Lang_tab_size: 4
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//
$lang = array_merge($lang, array(
	// navigation
	'WWH_TITLE'						=> 'Wer war da?',
	'WWH_CONFIG'					=> 'Einstellungen',
	// config head
	'WWH_CONFIG_TITLE'				=> 'Wer war da? (%s)',
	'WWH_INSTALLED' 				=> 'Installierte Version: %s',
	'WWH_MOD_SUPPORT'				=> '(Diskussion: <a href="https://www.phpbb.de/community/viewtopic.php?f=149&t=241976">Thema auf phpbb.de</a>)',
	// config section 1
	'WWH_SECTION_PERMISSIONS'		=> 'Berechtigungen',
	'WWH_USE_PERMISSIONS'			=> 'Benutze das Berechtigungssystem von phpBB',
	'WWH_USE_PERMISSIONS_EXP'		=> 'Ermöglicht es, für jede Benutzergruppe getrennt festlegen zu können, welchen Umfang die Anzeige haben soll. Die Rechte können wie folgt angepasst werden: “BERECHTIGUNGEN » Gruppenrechte » [Benutzergruppe] » Benutzer-Berechtigungen » Erweiterte Berechtigungen » Profil”.',
	// config section 2
	'WWH_SECTION_DISP_1'			=> 'Anzeige Einstellungen 1',
	'WWH_DISP_FOR_GUESTS'			=> 'Anzeige für Gäste',
	'WWH_DISP_FOR_GUESTS_EXP'		=> 'Legt fest, was Gäste sehen können. “Statistik” zeigt nur die anonymen Zahlen und “Nichts” schaltet die WWH-Anzeige für Gäste komplett aus.',
	'WWH_DISP_FOR_GUESTS_1'			=> 'Mitglieder und Statistik',
	'WWH_DISP_FOR_GUESTS_0'			=> 'Statistik',
	'WWH_DISP_FOR_GUESTS_2'			=> 'Nichts',
	'WWH_DISP_BOTS'					=> 'Zeige Bots',
	'WWH_DISP_BOTS_EXP'				=> 'Einige Benutzer werden sich fragen was Bots sind und sie fürchten.',
	'WWH_DISP_BOTS_1'				=> 'Mit den Benutzern',
	'WWH_DISP_BOTS_2'				=> 'In einer eigenen Zeile',
	'WWH_DISP_BOTS_0'				=> 'Nein',
	'WWH_DISP_BOTS_ONLY_ADMIN'		=> 'Zeige die Bot-Namen nur Administratoren',
	'WWH_DISP_BOTS_ONLY_ADMIN_EXP'	=> 'Nur Administratoren können die Namen der Bots sehen. Die Anzahl der Bots wird weiterhin allen angezeigt.',
	'WWH_DISP_GUESTS'				=> 'Zeige Gäste',
	'WWH_DISP_GUESTS_EXP'			=> 'Die Anzahl der Gäste wird angezeigt.',
	'WWH_DISP_HIDDEN'				=> 'Zeige unsichtbare Benutzer',
	'WWH_DISP_HIDDEN_EXP'			=> 'In der Benutzerliste werden auch unsichtbare Benutzer angezeigt. (Benötigt Berechtigung, wie bei “Wer ist online?”.)',
	'WWH_DISP_TIME'					=> 'Zeige die Zeit von Benutzern',
	'WWH_DISP_TIME_EXP'				=> '“Bei überfahren” zeigt zusätzlich ein Zeitsymbol an, mit dem die Zeiten auch direkt eingeblendet werden können. Hilfreich bei Smartphones und Tablet-PCs. (Allen Benutzern zeigen oder niemandem, keine spezielle Funktion für Administratoren.)',
	'WWH_DISP_TIME_1'				=> 'Hinter dem Namen',
	'WWH_DISP_TIME_2'				=> 'Bei überfahren',
	'WWH_DISP_TIME_0'				=> 'Nein',
	'WWH_DISP_TIME_BOTS'			=> 'Zeige die Zeit von Bots',
	'WWH_DISP_TIME_FORMAT'			=> 'Zeit-Format',
	'WWH_DISP_TIME_FORMAT_EXP'		=> 'Das Format entspricht der Syntax der PHP-Funktion <a href="http://www.php.net/date">date()</a>.',
	'WWH_DISP_IP'					=> 'Zeige die Benutzer-IP',
	'WWH_DISP_IP_EXP'				=> 'Die IP wird hinter der Zeit angezeigt. (Nur für Benutzer mit administrativen Rechten, wie bei “Wer ist online?”.)',
	// config section 3
	'WWH_SECTION_DISP_2'			=> 'Anzeige Einstellungen 2',
	'WWH_VERSION'					=> 'Anzeige der Besucher von ...',
	'WWH_VERSION_EXP'				=> 'Anzeige der Besucher von heute (Seit 00:00 Forum Zeitzone), oder des Zeitraums der bei der nächsten Einstellung festgelegt wird.',
	'WWH_VERSION1'					=> 'Heute',
	'WWH_VERSION2'					=> 'Zeitraum',
	'WWH_SORT_BY'					=> 'Sortiere Benutzer nach',
	'WWH_SORT_BY_EXP'				=> 'Damit wird die Reihenfolge festgelegt, in der die Benutzer angezeigt werden.',
	'WWH_SORT_BY_0'					=> 'Benutzername A -> Z',
	'WWH_SORT_BY_1'					=> 'Benutzername Z -> A',
	'WWH_SORT_BY_2'					=> 'Zeit des Besuchs aufsteigend',
	'WWH_SORT_BY_3'					=> 'Zeit des Besuchs absteigend',
	'WWH_SORT_BY_4'					=> 'Benutzer-ID aufsteigend',
	'WWH_SORT_BY_5'					=> 'Benutzer-ID absteigend',
	'WWH_RECORD'					=> 'Besucherrekord',
	'WWH_RECORD_EXP'				=> 'Zeige und speichere den Besucherrekord.',
	'WWH_RECORD_TIMESTAMP'			=> 'Datums-Format für den Besucherrekord',
	'WWH_DISP_TEMPLATE_POS'			=> 'Position der Anzeige',
	'WWH_DISP_TEMPLATE_POS_EXP'		=> 'Legt fest, wo die WWH-Anzeige im Online/Statistik-Bereich positioniert werden soll. “Oben” ist die Position über diesem Bereich und “Unten” entsprechend die Position darunter.',
	'WWH_DISP_TEMPLATE_POS_0'		=> 'Oben',
	'WWH_DISP_TEMPLATE_POS_2'		=> 'Vor Geburtstage',
	'WWH_DISP_TEMPLATE_POS_1'		=> 'Unten',
	// config section 4	
	'WWH_SECTION_OTHERS'			=> 'Sonstiges',
	'WWH_USE_ONLINE_TIME'			=> 'Aktualisiere mit der Zeitspanne für die Online-Anzeige',
	'WWH_USE_ONLINE_TIME_EXP'		=> 'Wenn aktiviert, dann wird für das Intervall der Aktualisierung die folgende Einstellung verwendet: “ALLGEMEIN » SERVER-KONFIGURATION » Serverlast » Allgemeine Einstellungen » Zeitspanne für die Online-Anzeige”. Das entspricht dem Standardverhalten von WWH.',
	'WWH_CACHE_TIME'				=> 'Intervall der Aktualisierung',
	'WWH_CACHE_TIME_EXP'			=> 'Das Intervall bestimmt, wie oft die Anzeige der Statistik und Benutzerliste aktualisiert wird.',
	'WWH_API_MODE'					=> 'API-Modus',
	'WWH_API_MODE_EXP'				=> 'Damit wird die Anzeige von WWH deaktiviert und es werden lediglich die Template-Variablen erzeugt. Dieser Modus ist für Foren gedacht, bei denen WWH bereits durch andere Erweiterungen (z.B. “Stat Block”) dargestellt wird.',
	'WWH_CLEAR_UP'					=> 'Bei gelöschten Benutzern automatisch bereinigen',
	'WWH_CLEAR_UP_EXP'				=> 'Wenn Benutzerkonten gelöscht werden, dann wird auch sofort die Tabelle und Anzeige von WWH bereinigt.',
	'WWH_DISP_TEMPLATE_POS_ALL'		=> 'Zeige alle Template-Positionen gleichzeitig',	
	'WWH_DISP_TEMPLATE_POS_ALL_EXP'	=> 'WWH wird auf allen Positionen gleichzeitig angezeigt. Das dient nur zum Testen und sollte im Normalbetrieb deaktiviert sein.',
	// config section 5
	'WWH_SECTION_RESET'				=> 'Zurücksetzen',
	'WWH_DEFAULTS'					=> 'Einstellungen zurücksetzen',
	'WWH_DEFAULTS_EXP'				=> 'Setzt alle Einstellungen dieser Seite auf den Installationsstandard von WWH zurück. (Hat keine Auswirkung auf “Besucherrekord zurücksetzen”)',
	'WWH_DEFAULTS_BUTTON'			=> 'Standard',
	'WWH_RESET'						=> 'Besucherrekord zurücksetzen',
	'WWH_RESET_EXP'					=> 'Setzt Zeit und Zähler für den Besucherrekord zurück.',
	// config messages
	'WWH_SAVED_SETTINGS'			=> 'Wer war da: Einstellungen erfolgreich gespeichert.',
	'WWH_RESET_TRUE'				=> 'Wer war da: Wenn du diese Seite speicherst, wird der Besucherrekord zurückgesetzt.', // \n is the beginning of a new line
));
