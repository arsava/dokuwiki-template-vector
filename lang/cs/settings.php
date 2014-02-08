<?php

/**
 * Czech language for the Config Manager
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
 * @author David Roesel <http://david.roesel.cz/>
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//user pages
$lang["vector_userpage"]    = "Používat uživatelské stránky?";
$lang["vector_userpage_ns"] = "Pokud ano, používat tento ':jmenný prostor:' jako kořenový adresář:";

//discussion pages
$lang["vector_discuss"]    = "Používat diskusní taby/stránky?";
$lang["vector_discuss_ns"] = "Pokud ano, používat tento ':jmenný prostor:' jako kořenový adresář pro diskuse:";

//site notice
$lang["vector_sitenotice"]          = "Zobrazovat globální upozornění?";
$lang["vector_sitenotice_location"] = "Pokud ano, použít jako globální upozornění tuto stránku:";

//navigation
$lang["vector_navigation"]          = "Zobrazovat navigaci?";
$lang["vector_navigation_location"] = "Pokud ano, použít jako navigaci následující stránku:";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "Zobrazovat 'tisk/export' sekci?";
$lang["vector_exportbox_default"]  = "Pokud ano, používat původní 'tisk/export' sekci?";
$lang["vector_exportbox_location"] = "Pokud ne tu původní, potom používat následující stránku jako 'tisk/export' sekci:";

//toolbox
$lang["vector_toolbox"]          = "Zobrazovat nástroje?";
$lang["vector_toolbox_default"]  = "Pokud ano, používat původní nástroje?";
$lang["vector_toolbox_location"] = "Pokud ne ty původní, potom používat následující stránku jako nástroje:";

//custom copyright notice
$lang["vector_copyright"]          = "Zobrazovat informace o autorských právech?";
$lang["vector_copyright_default"]  = "Pokud ano, používat původní informace o autorských právech?";
$lang["vector_copyright_location"] = "Pokud ne ty původní, potom používat následující stránku jako informace o autorských právech:";

//donation link/button
$lang["vector_donate"]          = "Zobrazovat možnost \"Přispět\"?";
$lang["vector_donate_url"]      = "Pokud ne ten původní, potom tento odkaz:";

//TOC
$lang["vector_toc_position"] = "Pozice obsahu:";

//other stuff
$lang["vector_mediamanager_embedded"] = "Zobrazovat mediamanger vložený v běžném layoutu?";
$lang["vector_breadcrumbs_position"]  = "Pozice aktuální cesty (breadcrumbs) (je-li tato funkce povolena):";
$lang["vector_youarehere_position"]   = "Pozice navigace 'Jste tady' (je-li tato funkce povolena):";
$lang["vector_cite_author"]           = "Jméno autora při použití 'Citovat tento článek':";
$lang["vector_loaduserjs"]            = "Nahrávat 'vector/user/user.js'?";
$lang["vector_closedwiki"]            = "Je wiki zavřená (většina odkazů/tabů/boxů nebude vidět do přihlášení)?";

