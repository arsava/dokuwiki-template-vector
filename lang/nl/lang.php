<?php

/**
 * Dutch language for the "vector" DokuWiki template
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

//tabs, personal tools and special links
$lang["vector_article"] = "Artikel";
$lang["vector_discussion"] = "Overleg";
$lang["vector_read"] = "Lezen";
$lang["vector_edit"] = "Bewerken";
$lang["vector_create"] = "Aanmaken";
$lang["vector_userpage"] = "Gebruikers Pagina";
$lang["vector_specialpage"] = "Speciale Pagina's";
$lang["vector_mytalk"] = "Mijn overleg";
$lang["vector_exportodt"] = "Downloaden als ODT";
$lang["vector_exportpdf"] = "Downloaden als PDF";
$lang["vector_subscribens"] = "Inschrijven folderwijzigingen"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "Uitschrijven folderwijzigingen";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "Talen";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "Navigatie";
$lang["vector_toolbox"] = "Hulpmiddelen";
$lang["vector_exportbox"] = "Afdrukken/exporteren";
$lang["vector_inotherlanguages"] = "In andere talen";
$lang["vector_printexport"] = "Print/exporteer";
$lang["vector_personnaltools"] = "Persoonlijke hulpmiddelen";

//buttons
$lang["vector_btn_go"] = "Ga naar";
$lang["vector_btn_search"] = "Zoek";
$lang["vector_btn_search_title"] = "Zoek naar deze tekst";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "Printbare versie";
$lang["vector_exportbxdef_downloadodt"] = "Download als ODT";
$lang["vector_exportbxdef_downloadpdf"] = "Download als PDF";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "Links naar deze pagina";
$lang["vector_toolbxdef_upload"] = "Upload bestand";
$lang["vector_toolbxdef_siteindex"] = "Site index";
$lang["vector_toolboxdef_permanent"] = "Permanente verwijzing";
$lang["vector_toolboxdef_cite"] = "Deze pagina citeren";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "Bibliografische details voor";
$lang["vector_cite_pagename"] = "Paginanaam";
$lang["vector_cite_author"] = "Auteur";
$lang["vector_cite_publisher"] = "Uitgever";
$lang["vector_cite_dateofrev"] = "Datum van deze revisie";
$lang["vector_cite_dateretrieved"] = "Opgehaald op";
$lang["vector_cite_permurl"] = "Permanente URL";
$lang["vector_cite_pageversionid"] = "Pagina Versie ID";
$lang["vector_cite_citationstyles"] = "Stylen om te verwijzen naar";
$lang["vector_cite_checkstandards"] = "Vergeet niet uw eigen normen of richtlijnen te controleren voor de exacte zinsbouw die voldoet aan uw behoeften.";
$lang["vector_cite_latexusepackagehint"] = "Bij gebruik van URLs in het LaTeX-pakket geeft deze methode veel mooiere opgemaakte webadressen, hint: zoek naar '\usepackage {url} ' in de handleiding'";
$lang["vector_cite_retrieved"] = "Opgehaald op";
$lang["vector_cite_from"] = "van";
$lang["vector_cite_in"] = "In";
$lang["vector_cite_accessed"] = "Op";
$lang["vector_cite_cited"] = "Geciteerd";
$lang["vector_cite_lastvisited"] = "Laatst bezocht op";
$lang["vector_cite_availableat"] = "Beschikbaar op";
$lang["vector_cite_discussionpages"] = "DokuWiki overlegpagina's";
$lang["vector_cite_markup"] = "Opmaak";
$lang["vector_cite_result"] = "Resultaat";
$lang["vector_cite_thisversion"] = "deze versie";

//other
$lang["vector_search"] = "Zoek";
$lang["vector_accessdenied"] = "Toegang gewijgerd";
$lang["vector_fillplaceholder"] = "Vul dit veld in";
$lang["vector_donate"] = "Doneer";
$lang["vector_mdtemplatefordw"] = "vector template voor DokuWiki";
$lang["vector_recentchanges"] = "Recent gewijzigd";

