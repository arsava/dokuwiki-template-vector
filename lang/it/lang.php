<?php

/**
 * Italian language for the "vector" DokuWiki template
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
 * @author Luigi Micco <l.micco@tiscali.it>
 * @link http://andreas-haerter.com/projects/dokuwiki-template-vector
 * @link http://www.dokuwiki.org/template:vector
 * @link http://www.dokuwiki.org/config:lang
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//tabs
$lang["vector_article"] = "Articolo";
$lang["vector_discussion"] = "Discussione";
$lang["vector_read"] = "Leggi";
$lang["vector_edit"] = "Modifica";
$lang["vector_create"] = "Crea";
$lang["vector_userpage"] = "Pagina utente";
$lang["vector_specialpage"] = "Pagine spaciali";
$lang["vector_mytalk"] = "Le mie discussioni";
$lang["vector_exportodt"] = "Esporta: ODT";
$lang["vector_exportpdf"] = "Esporta: PDF";
$lang["vector_sendmail"] = "Segnala via mail";
$lang["vector_translations"] = "Altre lingue";

//headlines for the different bars
$lang["vector_views"] = "Viste";
$lang["vector_personnaltools"] = "Strumenti personali";
$lang["vector_navigation"] = "Navigazione";
$lang["vector_toolbox"] = "Strumenti";
$lang["vector_exportbox"] = "Stampa/Esporta";
$lang["vector_inotherlanguages"] = "Altre lingue";
$lang["vector_search"] = "Cerca";

//buttons
$lang["vector_btn_go"] = "Vai";
$lang["vector_btn_search"] = "Cerca";
$lang["vector_btn_search_title"] = "Ricerca questo testo";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "Versione stampabile";
$lang["vector_exportbxdef_downloadodt"] = "Esporta come ODT";
$lang["vector_exportbxdef_downloadpdf"] = "Esporta come PDF";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "Pagine che puntano qui";
$lang["vector_toolbxdef_upload"] = "Carica file";
$lang["vector_toolbxdef_siteindex"] = "Indice del sito";
$lang["vector_toolboxdef_permanent"] = "Link permanente";
$lang["vector_toolboxdef_cite"] = "Cita questo articolo";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "Dettagli bibliografici per";
$lang["vector_cite_pagename"] = "Nome pagina";
$lang["vector_cite_author"] = "Autore";
$lang["vector_cite_publisher"] = "Editore";
$lang["vector_cite_dateofrev"] = "Data dell'ultima revisione";
$lang["vector_cite_dateretrieved"] = "Data della citazione";
$lang["vector_cite_permurl"] = "Link permanente";
$lang["vector_cite_pageversionid"] = "ID della revisione";
$lang["vector_cite_citationstyles"] = "Stili di citazione per";
$lang["vector_cite_checkstandards"] = "Usate la versione che risponde meglio ai vostri bisogni.";
$lang["vector_cite_latexusepackagehint"] = "Quando viene usato il package url di LaTeX ('\usepackage{url}' all'inizio del documento), che in genere da' indirizzi web formattati in modo migliore, e' preferibile usare il seguente codice:";
$lang["vector_cite_retrieved"] = "Retrieved";
$lang["vector_cite_in"] = "In";
$lang["vector_cite_from"] = "da";
$lang["vector_cite_accessed"] = "Accessed";
$lang["vector_cite_cited"] = "Cited";
$lang["vector_lastvisited"] = "Ultima visita";
$lang["vector_cite_availableat"] = "Disponibile su";
$lang["vector_cite_discussionpages"] = "Pagina delle discussioni";
$lang["vector_cite_markup"] = "Markup";
$lang["vector_cite_result"] = "Risultato";
$lang["vector_cite_thisversion"] = "questa versione";

//other
$lang["vector_accessdenied"] = "Accesso negato";
$lang["vector_fillplaceholder"] = "Sostituisci questo segnaposto";
$lang["vector_donate"] = "Dona";
$lang["vector_mdtemplatefordw"] = "stile vector per DokuWiki";
$lang["vector_recentchanges"] = "Modifiche recenti";
