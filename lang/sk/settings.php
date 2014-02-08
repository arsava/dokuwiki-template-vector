<?php

/**
 * Slovak language for the Config Manager
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
 * @author Peter Bezemek
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//user pages
$lang["vector_userpage"]    = "Používať Stránky Používateľa?";
$lang["vector_userpage_ns"] = "Ak áno, použite nasledujúci ':namespace:' ako koreňový adresár pre používateľské stránky:";

//discussion pages
$lang["vector_discuss"]    = "Používať záložku/stránky Diskusia?";
$lang["vector_discuss_ns"] = "Ak áno, použite nasledujúci ':namespace:' ako koreňový adresár pre používateľské stránky:";

//site notice
$lang["vector_sitenotice"]          = "Zobrazovať všeobecnú informáciu (na všetkých stránkach)?";
$lang["vector_sitenotice_location"] = "Ak áno, pre definíciu všeobecnej informácie použite nasledujúcu wiki stránku:";

//navigation
$lang["vector_navigation"]           = "Zobrazovať navigáciu?";
$lang["vector_navigation_location"]  = "Ak áno, pre definíciu navigácie použite nasledujúcu wiki stránku:";
$lang["vector_navigation_translate"] = "Ak áno a <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> je nainštalovaný: použiť navigáciu špecifickú pre daný jazyk?<br />Wiki stránka pre preloženú navigáciu je [hodnota pre 'vector_navigation_location']_[iso kód jazyka] (napr. ':wiki:navigation_sk').";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "Zobrazovať 'tlač/export'?";
$lang["vector_exportbox_default"]  = "Ak áno, používať základné nastavenie pre 'tlač/export'?";
$lang["vector_exportbox_location"] = "Ak nie základné, používať pre definíciu funkcie 'tlač/export' nasledujúce umiestnenie:";

//toolbox
$lang["vector_toolbox"]          = "Zobrazovať nástroje?";
$lang["vector_toolbox_default"]  = "Ak áno, používať základné nastavenie pre nástroje?";
$lang["vector_toolbox_location"] = "Ak nie základné, používať pre definíciu funkcie Nástroje nasledujúce umiestnenie:";

//custom copyright notice
$lang["vector_copyright"]          = "Zobrazovať správu o copyrighte?";
$lang["vector_copyright_default"]  = "Ak áno, používať základné nastavenie pre copyright?";
$lang["vector_copyright_location"] = "Ak nie základné, používať pre definíciu copyrightu nasledujúce umiestnenie:";

//donation link/button
$lang["vector_donate"]          = "Zobrazovať odkaz/tlačidlo pre dary/dotácie?";
$lang["vector_donate_url"]      = "Ak nie základné, používať pre dary nasledujúce URL:";

//TOC
$lang["vector_toc_position"] = "Pozícia Obsahu";

//other stuff
$lang["vector_breadcrumbs_position"]  = "Pozícia omrvinkovej navigácie (ak je povolená):";
$lang["vector_youarehere_position"]   = "Pozícia navigácie 'Nachádzate sa tu' (ak je povolená):";
$lang["vector_cite_author"]           = "Meno autora v 'Citujte tento Článok':";
$lang["vector_loaduserjs"]            = "Nahrať 'vector/user/user.js'?";
$lang["vector_closedwiki"]            = "Uzamknutá wiki (väčšina odkazov/záložiek/nástrojov je skrytá, až kým sa používateľ neprihlási)?";

