<?php

/**
 * Dutch language for the Config Manager
 * by Theo Klein (14/06/2010)
 *
 * If your language is not/only partially translated or you found an error/typo,
 * have a look at the following files:
 * - "/lib/tpl/vector/lang/<your lang>/lang.php"
 * - "/lib/tpl/vector/lang/<your lang>/settings.php"
 * If they are not existing, copy and translate the English ones (hint: looking
 * at <http://[your lang].wikipedia.org> might be helpful). And don't forget to
 * mail the translation to me,
 * Andreas Haerter <development@andreas-haerter.com>. Thanks :-D.
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Theo Klein
 * @link http://andreas-haerter.com/projects/dokuwiki-template-vector
 * @link http://www.dokuwiki.org/template:vector
 * @link http://www.dokuwiki.org/config:lang
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//discussion pages
$lang["vector_discuss"]    = "Gebruik discussie pagina's en tabs?";
$lang["vector_discuss_ns"] = "Indien ja, gebruik de volgende ':namespace:' als root voor discussies:";

//site notice
$lang["vector_sitenotice"]          = "Toon notificatie door de gehele site?";
$lang["vector_sitenotice_location"] = "Indien ja, gebruik de volgende wiki pagina als notificatie:";

//navigation
$lang["vector_navigation"]          = "Toon navigatie?";
$lang["vector_navigation_location"] = "Indien ja, gebruik de volgende wiki pagina als navigatie:";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "Toon 'Afdrukken/exporteren' box?";
$lang["vector_exportbox_default"]  = "Indien ja, gebruik de standaard 'Afdrukken/exporteren' box?";
$lang["vector_exportbox_location"] = "Indien niet standaard, gebruik de volgende wikipagina als 'Afdrukken/exporteren' box locatie:";

//toolbox
$lang["vector_toolbox"]          = "Toon hulpmiddelen?";
$lang["vector_toolbox_default"]  = "Indien ja, gebruik de standaard hulpmiddelen?";
$lang["vector_toolbox_location"] = "Indien niet standaard, gebruik de volgende wikipagina als 'hulpmiddelen' locatie:";

//custom copyright notice
$lang["vector_copyright"]          = "Toon copyright notificatie?";
$lang["vector_copyright_default"]  = "Indien ja, gebruik de standaard copyright notificatie?";
$lang["vector_copyright_location"] = "Wanneer de standaard niet gebruikt wordt, gebruik de volgende wiki pagina als copyright notificatie:";

//donation link/button
$lang["vector_donate"]          = "Toon donatie button?";
$lang["vector_donate_default"]  = "Indien ja, gebruik de standaard donatie URL?";
$lang["vector_donate_url"]      = "Indien niet standaard, gebruik de volgende URL voor donaties:";

//TOC
$lang["vector_toc_position"] = "Positionering van de inhoudopgave";

//other stuff
$lang["vector_mediamanager_embedded"] = "Toon de mediamanger geintegreerd in de normale layout?";
$lang["vector_breadcrumbs_position"]  = "Positie van broodkruimel navigatie (indien ingeschakeld):";
$lang["vector_youarehere_position"]   = "Positie van 'U bent hier' navigatie (indien ingeschakeld):";
$lang["vector_cite_author"]           = "Naam van de auteur in 'Citeer dit artikel':";
$lang["vector_loaduserjs"]            = "Laad 'vector/user/user.js'?";
