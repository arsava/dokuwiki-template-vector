<?php

/**
 * German language (informal, "Du") for the Config Manager
 *
 * If your language is not/only partially translated or you found an error/typo,
 * have a look at the following files:
 * - /lib/tpl/vector/lang/<your lang>/lang.php
 * - /lib/tpl/vector/lang/<your lang>/settings.php
 * If they are not existing, copy and translate the English ones (hint: looking
 * at <http://[your lang].wikipedia.org> might be helpful).
 *
 * Don't forget to mail your translation to ARSAVA <dokuwiki@dev.arsava.com>.
 * Thanks! :-D
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//user pages
$lang["vector_userpage"]    = "Benutzerseiten benutzen?";
$lang["vector_userpage_ns"] = "Falls ja, folgenden ':namensraum:' als Wurzel für Benutzerseiten nutzen:";

//discussion pages
$lang["vector_discuss"]    = "Diskussions-Tabs/Seiten benutzen?";
$lang["vector_discuss_ns"] = "Falls ja, folgenden ':namensraum:' als Wurzel für Diskussionen nutzen:";

//site notice
$lang["vector_sitenotice"]           = "Seitenübergreifenden Hinweis einblenden?";
$lang["vector_sitenotice_location"]  = "Falls ja, folgende wiki-Seite als Hinweis verwenden:";
$lang["vector_sitenotice_translate"] = "Falls ja und <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation-Plugin</a> verfügbar: sprachspezifische Seiten-Hinweis(e) laden?<br />Die wiki-Seite des/der übersetzten Seiten-Hinweis(e) lautet [Wert von 'vector_sitenotice_location']_[iso-sprach-code] (z.B. ':wiki:site_notice_en').";

//navigation
$lang["vector_navigation"]           = "Navigation anzeigen?";
$lang["vector_navigation_location"]  = "Falls ja, folgende wiki-Seite als Navigation verwenden:";
$lang["vector_navigation_translate"] = "Falls ja und <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation-Plugin</a> verfügbar: sprachspezifische Navigation laden?<br />Die wiki-Seite der übersetzten Navigation(en) lautet [Wert von 'vector_navigation_location']_[iso-sprach-code] (z.B. ':wiki:navigation_en').";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "'Drucken/exportieren'-Box anzeigen?";
$lang["vector_exportbox_default"]  = "Falls ja, Standard-'Drucken/exportieren'-Box nutzen?";
$lang["vector_exportbox_location"] = "Falls nicht die Standard-'Drucken/exportieren'-Box, folgende wiki-Seite als Toolbox verwenden:";

//toolbox
$lang["vector_toolbox"]               = "Toolbox/Werkzeuge anzeigen?";
$lang["vector_toolbox_default"]       = "Falls ja, Standard-Toolbox nutzen?";
$lang["vector_toolbox_location"]      = "Falls nicht die Standard-Toolbox, folgende wiki-Seite als Toolbox verwenden:";

//qr code box
$lang["vector_qrcodebox"] = "Box mit QR-Code der aktuellen Wiki-Seiten-URL anzeigen (für einfache Übertragung der URL auf Mobiltelefone)?";

//custom copyright notice
$lang["vector_copyright"]           = "Copyright-Hinweis einblenden?";
$lang["vector_copyright_default"]   = "Falls ja, Standard-Copyright-Hinweis nutzen?";
$lang["vector_copyright_location"]  = "Falls nicht den Standard-Copyright-Hinweis, folgende wiki-Seite als Copyright-Hinweis verwenden:";
$lang["vector_copyright_translate"] = "Falls nicht den Standard-Copyright-Hinweis und <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation-Plugin</a> verfügbar: sprachspezifische Copyright-Hinweis(e) laden?<br />Die wiki-Seite des/der übersetzten Copyright-Hinweis(e) lautet [Wert von 'vector_copyright_location']_[iso-sprach-code] (z.B. ':wiki:copyright_en').";

//donation link/button
$lang["vector_donate"]     = "'Spenden'-Link/button anzeigen?";
$lang["vector_donate_url"] = "Folgende URL als Spendenziel benutzen:";

//TOC
$lang["vector_toc_position"] = "Position des Inhaltsverzeichnisses";

//other stuff
$lang["vector_breadcrumbs_position"]  = "Position der breadcrumb-Navigation (sofern aktiviert):";
$lang["vector_youarehere_position"]   = "Position der 'Sie befinden sich hier'-Navigation (sofern aktiviert):";
$lang["vector_cite_author"]           = "Zu nutzender Autorenname in 'Artikel zitieren':";
$lang["vector_loaduserjs"]            = "Datei 'vector/user/user.js' laden?";
$lang["vector_closedwiki"]            = "Nicht-öffentliches Wiki (die meisten Links/Tabs/Boxen werden versteckt bis man sich einloggt)?";

