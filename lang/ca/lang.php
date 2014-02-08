<?php

/**
 * Catalan language for the "vector" DokuWiki template
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
 * @author Albert Gasset Romo <albert.gasset@gmail.com>
 * @link https://www.dokuwiki.org/template:vector
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//tabs, personal tools and special links
$lang["vector_article"] = "Pàgina";
$lang["vector_discussion"] = "Discussió";
$lang["vector_read"] = "Llegeix";
$lang["vector_edit"] = "Edita";
$lang["vector_create"] = "Crea";
$lang["vector_userpage"] = "Pàgina d'usuari";
$lang["vector_specialpage"] = "Pàgines especials";
$lang["vector_mytalk"] = "Discussió";
$lang["vector_exportodt"] = "Exporta a ODT";
$lang["vector_exportpdf"] = "Exporta a PDF";
$lang["vector_subscribens"] = "Subscriu als canvis de l'espai"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "Cancel·la subscripció a l'espai";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "Llengües";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "Navegació";
$lang["vector_toolbox"] = "Eines";
$lang["vector_exportbox"] = "Exportació";
$lang["vector_qrcodebox"] = "Codi QR";
$lang["vector_inotherlanguages"] = "Llengües";
$lang["vector_printexport"] = "Exportació";
$lang["vector_personnaltools"] = "Eines personals";

//buttons
$lang["vector_btn_go"] = "Vés";
$lang["vector_btn_search"] = "Cerca";
$lang["vector_btn_search_title"] = "Cerca aquest text";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "Versió per a impressió";
$lang["vector_exportbxdef_downloadodt"] = "Baixa en format ODT";
$lang["vector_exportbxdef_downloadpdf"] = "Baixa en format PDF";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "Què hi enllaça";
$lang["vector_toolbxdef_upload"] = "Gestor de fitxers";
$lang["vector_toolbxdef_siteindex"] = "Mapa del lloc";
$lang["vector_toolboxdef_permanent"] = "Enllaç permanent";
$lang["vector_toolboxdef_cite"] = "Cita aquesta pàgina";

//qr code box
$lang["vector_qrcodebox_qrcode"] = "Codi QR";
$lang["vector_qrcodebox_genforcurrentpage"] = "generat per a la pàgina actual";
$lang["vector_qrcodebox_urlofcurrentpage"] = "Pàgina actual en codi QR (per accedir fàcilment des de mòbils)";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "Detalls bibliogràfics per a";
$lang["vector_cite_pagename"] = "Nom de la pàgina";
$lang["vector_cite_author"] = "Autor";
$lang["vector_cite_publisher"] = "Editorial";
$lang["vector_cite_dateofrev"] = "Data d'aquesta revisió";
$lang["vector_cite_dateretrieved"] = "Data de recuperació";
$lang["vector_cite_permurl"] = "URL permanent";
$lang["vector_cite_pageversionid"] = "ID de la versió de la pàgina";
$lang["vector_cite_citationstyles"] = "Estils de cita per a";
$lang["vector_cite_checkstandards"] = "Si us plau, recordeu de comprar el vostre manual d'estil, guia de normes o directrius de l'instructor per a la sintaxi exacta per a les vostres necessitats.";
$lang["vector_cite_latexusepackagehint"] = "Si feu servir el paquet de LaTeX url (\usepackage{url} en algun lloc del preàmbul), que tendeix a donar un format més agradable a les adreces web, potser preferiu el següent";
$lang["vector_cite_retrieved"] = "Recuperat";
$lang["vector_cite_from"] = "de";
$lang["vector_cite_in"] = "A";
$lang["vector_cite_accessed"] = "Accecit";
$lang["vector_cite_cited"] = "Citat";
$lang["vector_cite_lastvisited"] = "Visitat";
$lang["vector_cite_availableat"] = "Disponible a";
$lang["vector_cite_discussionpages"] = "Pàgines de discussió de la DokuWiki";
$lang["vector_cite_markup"] = "Etiquetage";
$lang["vector_cite_result"] = "Resultat";
$lang["vector_cite_thisversion"] = "aquesta versió";

//other
$lang["vector_search"] = "Cerca";
$lang["vector_accessdenied"] = "Accés denegat";
$lang["vector_fillplaceholder"] = "Si us plau, ompliu aquest text variable";
$lang["vector_donate"] = "Fes una donació";
$lang["vector_mdtemplatefordw"] = "Plantilla vector per a DokuWiki";
$lang["vector_recentchanges"] = "Canvis recents";
