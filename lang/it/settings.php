<?php

/**
 * Italian language for the Config Manager
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

//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//discussion pages
$lang["vector_discuss"]    = "Usare linguetta discussioni?";
$lang["vector_discuss_ns"] = "Se si, usa questo ':namespace:' come radice per le discussioni:";

//site notice
$lang["vector_sitenotice"]          = "Mostra annunci generali?";
$lang["vector_sitenotice_location"] = "Se si, usa la seguente pagina wiki come annuncio:";

//navigation
$lang["vector_navigation"]          = "Mostra pannello di navigazione?";
$lang["vector_navigation_location"] = "Se si, usa la seguente pagina wiki come pannello di navigazione:";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "Mostrat pannello 'stampa/esporta'";
$lang["vector_exportbox_default"]  = "Se si, usa il pannello predefinito 'stampa/esporta'?";
$lang["vector_exportbox_location"] = "Se non usi il predefinito, usa la seguente pagina wiki come pannello 'stampa/esporta':";

//toolbox
$lang["vector_toolbox"]               = "Mostra pannello strumenti?";
$lang["vector_toolbox_default"]       = "Se si, usa il pannello predefinito?";
$lang["vector_toolbox_location"]      = "Se non usi il predefinito, usa la seguente pagina wiki come pannello degli strumenti:";
$lang["vector_toolbox_default_print"] = "Se utilizzi il pannello predefinito, mostra link per versione stampabile?";

//custom copyright notice
$lang["vector_copyright"]          = "Mostra avviso di copyright?";
$lang["vector_copyright_default"]  = "Se si, usa l'avviso di copyright predefinito?";
$lang["vector_copyright_location"] = "Se non usi il predefinito, usa la seguente pagina wiki come avviso di copyright:";

//search form
$lang["vector_search"] = "Mostra casella di ricerca?";

//donation link/button
$lang["vector_donate"]          = "Mostra link/pulsante per le donazioni?";
$lang["vector_donate_default"]  = "Se si, usa l'indirizzo URL predefinito?";
$lang["vector_donate_url"]      = "Se non predefinito, usa il seguente indirizzo URL per le donazioni:";

//TOC
$lang["vector_toc_position"] = "Posizione indice dei contenuti";

//other stuff
$lang["vector_mediamanager_embedded"] = "Visualizzare mediamanager incluso nello schema dello stile?";
$lang["vector_breadcrumbs_position"]  = "Posizione del pannello breadcrumb (se abilitato):";
$lang["vector_youarehere_position"]   = "Posizione del pannello 'Tu sei qui' (se abilitato):";
$lang["vector_cite_author"]           = "Nome autore in 'Cita questo articolo':";
$lang["vector_loaduserjs"]            = "Carica 'vector/user/user.js'?";
