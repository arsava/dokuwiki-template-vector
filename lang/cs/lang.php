<?php

/**
 * Czech language for the "vector" DokuWiki template
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

//tabs, personal tools and special links
$lang["vector_article"] = "Článek";
$lang["vector_discussion"] = "Diskuse";
$lang["vector_read"] = "Číst";
$lang["vector_edit"] = "Upravit";
$lang["vector_create"] = "Vytvořit";
$lang["vector_userpage"] = "Uživatelská stránka";
$lang["vector_specialpage"] = "Speciální stránky";
$lang["vector_mytalk"] = "Můj pokec";
$lang["vector_exportodt"] = "Export: ODT";
$lang["vector_exportpdf"] = "Export: PDF";
$lang["vector_subscribens"] = "Odebírat NS změny"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "Přestat odebírat NS změny";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "Jazyky";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "Navigace";
$lang["vector_toolbox"] = "Nástroje";
$lang["vector_exportbox"] = "Tisk/export";
$lang["vector_inotherlanguages"] = "Jazyky";
$lang["vector_printexport"] = "Vytisknout/exportovat";
$lang["vector_personnaltools"] = "Osobní nástroje";

//buttons
$lang["vector_btn_go"] = "Přejít";
$lang["vector_btn_search"] = "Hledat";
$lang["vector_btn_search_title"] = "Hledat tento text";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "Verze k tisku";
$lang["vector_exportbxdef_downloadodt"] = "Stáhnout jako ODT";
$lang["vector_exportbxdef_downloadpdf"] = "Stáhnout jako PDF";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "Stránky odkazující sem";
$lang["vector_toolbxdef_upload"] = "Nahrát soubor";
$lang["vector_toolbxdef_siteindex"] = "Hlavní stránka";
$lang["vector_toolboxdef_permanent"] = "Trvalý odkaz";
$lang["vector_toolboxdef_cite"] = "Citovat tuto stránku";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "Bibliografické údaje";
$lang["vector_cite_pagename"] = "Název stránky";
$lang["vector_cite_author"] = "Autor";
$lang["vector_cite_publisher"] = "Vydavatel";
$lang["vector_cite_dateofrev"] = "Datum této verze";
$lang["vector_cite_dateretrieved"] = "Vytažené datum"; //not sure about the actual implementation
$lang["vector_cite_permurl"] = "Trvalý odkaz";
$lang["vector_cite_pageversionid"] = "ID verze stránky";
$lang["vector_cite_citationstyles"] = "Styly citací pro";
$lang["vector_cite_checkstandards"] = "Nezpomeňte si zkontrolovat, který z následujících stylů přesně odpovídá formátu, vyžadovanému vaším zadávajícím/odborným vedoucím.";
$lang["vector_cite_latexusepackagehint"] = "Při používání odkazů na LaTeX balíky (\usepackage{url} někde v preambuli), které často dávají hezčí adresy, by se vám mohlo hodit následující";
$lang["vector_cite_retrieved"] = "Vytaženo";
$lang["vector_cite_from"] = "od";
$lang["vector_cite_in"] = "V";
$lang["vector_cite_accessed"] = "Zobrazeno"; //or "Přistoupeno k", but a complete reformulation would be necessary
$lang["vector_cite_cited"] = "Citováno";
$lang["vector_cite_lastvisited"] = "Naposledy navštíveno";
$lang["vector_cite_availableat"] = "Dostupné na";
$lang["vector_cite_discussionpages"] = "DokuWiki diskuse";
$lang["vector_cite_markup"] = "Markup"; //no suitable translation as far as I know, perhaps "Značkovací jazyk"/"Značkování"
$lang["vector_cite_result"] = "Výsledek";
$lang["vector_cite_thisversion"] = "tato verze";

//other
$lang["vector_search"] = "Hledat";
$lang["vector_accessdenied"] = "Nepovolený přístup";
$lang["vector_fillplaceholder"] = "Vyplňte prosím toto umístění";
$lang["vector_donate"] = "Přispět";
$lang["vector_mdtemplatefordw"] = "téma vector pro systém DokuWiki";
$lang["vector_recentchanges"] = "Poslední změny";

