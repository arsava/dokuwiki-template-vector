<?php

/**
 * Basque language for the "vector" DokuWiki template
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
 * @author ander
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//tabs, personal tools and special links
$lang["vector_article"] = "Artikulua";
$lang["vector_discussion"] = "Eztabaida";
$lang["vector_read"] = "Irakurri";
$lang["vector_edit"] = "Aldatu";
$lang["vector_create"] = "Sortu";
$lang["vector_userpage"] = "Erabiltzaile Orria";
$lang["vector_specialpage"] = "Orrialde Bereziak";
$lang["vector_mytalk"] = "Nire Eztabaida";
$lang["vector_exportodt"] = "Esportatu: ODT";
$lang["vector_exportpdf"] = "Esportatu: PDF";
$lang["vector_subscribens"] = "Harpidetu NS aldaketetara"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "Kendu NS aldaketetako harpidetza";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "Hizkuntzak";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "Nabigazioa";
$lang["vector_toolbox"] = "Tresnak";
$lang["vector_exportbox"] = "Imprimatu/esportatu";
$lang["vector_inotherlanguages"] = "Hizkuntzak";
$lang["vector_printexport"] = "Imprimatu/esportatu";
$lang["vector_personnaltools"] = "Tresna pertsonalak";

//buttons
$lang["vector_btn_go"] = "Joan";
$lang["vector_btn_search"] = "Bilatu";
$lang["vector_btn_search_title"] = "Bilatu testu hau";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "Imprimatzeko bertsioa";
$lang["vector_exportbxdef_downloadodt"] = "Jaitsi ODT formatuan";
$lang["vector_exportbxdef_downloadpdf"] = "Jaitsi PDF formatuan";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "Orri honetaranzko lotura dutenak";
$lang["vector_toolbxdef_upload"] = "Fitxategia igo";
$lang["vector_toolbxdef_siteindex"] = "Gunearen aurkibidea";
$lang["vector_toolboxdef_permanent"] = "Lotura iraunkorra";
$lang["vector_toolboxdef_cite"] = "Sortu orrialde hau";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "Bibliografiko xehetasunak";
$lang["vector_cite_pagename"] = "Orrialde izena";
$lang["vector_cite_author"] = "Autorea";
$lang["vector_cite_publisher"] = "Argitaratzailea";
$lang["vector_cite_dateofrev"] = "Berrikuspen honen data";
$lang["vector_cite_dateretrieved"] = "Data berreskuratuta";
$lang["vector_cite_permurl"] = "URL iraunkorra";
$lang["vector_cite_pageversionid"] = "Orriaren bertsioaren ID-a";
$lang["vector_cite_citationstyles"] = "Aipatzeko estiloak";
$lang["vector_cite_checkstandards"] = "Gogoan izan zure estilo eskuliburua egiaztatzeao, arau gida edo irakaslearen jarraibideak sintaxia zehatza dela eta zure beharretara egokitzea lortzeko.";
$lang["vector_cite_latexusepackagehint"] = "LaTeX pakete url-a erabiltzean (\ usepackage {url} hitzaurrean nonbait), hobeto formateatutako web helbideak emateko joera duenez, gogokoagoa izan daiteke";
$lang["vector_cite_retrieved"] = "Berreskuratuta";
$lang["vector_cite_from"] = "-tik";
$lang["vector_cite_in"] = "-an";
$lang["vector_cite_accessed"] = "Atzituta";
$lang["vector_cite_cited"] = "Aipatuta";
$lang["vector_cite_lastvisited"] = "Azken bisita";
$lang["vector_cite_availableat"] = "Eskuragarri";
$lang["vector_cite_discussionpages"] = "DokuWiki-ko hitz egiteko orrialdeak";
$lang["vector_cite_markup"] = "Markatu";
$lang["vector_cite_result"] = "Emaitza";
$lang["vector_cite_thisversion"] = "bertsio hau";

//other
$lang["vector_search"] = "Bilatu";
$lang["vector_accessdenied"] = "Sarbidea ukatuta";
$lang["vector_fillplaceholder"] = "Mesedez bete hauek";
$lang["vector_donate"] = "Dohaintza egin";
$lang["vector_mdtemplatefordw"] = "DokuWikirako Vector txantiloia";
$lang["vector_recentchanges"] = "Aldaketa berriak";
