<?php

/**
 * Catalan language for the Config Manager
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
 * @author Albert Gasset Romo <albert.gasset@gmail.com>
 * @link http://andreas-haerter.com/projects/dokuwiki-template-vector
 * @link http://www.dokuwiki.org/template:vector
 * @link http://www.dokuwiki.org/config:lang
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//user pages
$lang["vector_userpage"]    = "Habilita les pàgines d'usuari";
$lang["vector_userpage_ns"] = "Espai arrel de les pàgines d'usauri";

//discussion pages
$lang["vector_discuss"]    = "Habilita les discussions";
$lang["vector_discuss_ns"] = "Espai arrel de les discussions";

//site notice
$lang["vector_sitenotice"]          = "Mostra l'avís del lloc";
$lang["vector_sitenotice_location"] = "Pàgina de l'avís del lloc";

//navigation
$lang["vector_navigation"]          = "Mostra la navegació";
$lang["vector_navigation_location"] = "Pàgina de la navegació";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "Mostra el quadre 'imprimeix/exporta'";
$lang["vector_exportbox_default"]  = "Quadre 'imprimeix/exporta' predeterminat";
$lang["vector_exportbox_location"] = "Pàgina del quadre 'imprimeix/exporta'";

//toolbox
$lang["vector_toolbox"]          = "Mostra el quadre d'eines";
$lang["vector_toolbox_default"]  = "Quadre d'eines predeterminat";
$lang["vector_toolbox_location"] = "Pàgina del quadre d'eines";

//custom copyright notice
$lang["vector_copyright"]          = "Mostra l'avís de drets d'autor";
$lang["vector_copyright_default"]  = "Avís de drets d'autor predeterminat";
$lang["vector_copyright_location"] = "Pàgina de l'avís de drets d'autor";

//donation link/button
$lang["vector_donate"]          = "Mostra l'enllaç/botó de donacions";
$lang["vector_donate_default"]  = "URL de donacions predeterminat";
$lang["vector_donate_url"]      = "URL de donacions:";

//TOC
$lang["vector_toc_position"] = "Posició de la taule de continguts";

//other stuff
$lang["vector_breadcrumbs_position"]  = "Posició del camí de navegació";
$lang["vector_youarehere_position"]   = "Posició de la navegació 'sou aquí'";
$lang["vector_cite_author"]           = "Nom de l'autor a 'cita aquest article'";
$lang["vector_loaduserjs"]            = "Carrega 'vector/user/user.js'";
$lang["vector_closedwiki"]            = "Wiki tancada (la majoria d'enllaços/pestanyes/quadres s'amaguen fins que l'usuari entri)";

