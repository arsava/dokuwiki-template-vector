<?php

/**
 * French language for the Config Manager
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
 * @author Julien Revault d'Allonnes <jrevault@gmail.com>
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
$lang["vector_userpage"]    = "Utiliser les pages utilisateurs ?";
$lang["vector_userpage_ns"] = "Si oui, utilisez ':namespace:' comme pages racines :";

//discussion pages
$lang["vector_discuss"]    = "Utiliser les onglets discussion ?";
$lang["vector_discuss_ns"] = "Si oui, utilisez':namespace:' comme pages racines :";

//site notice
$lang["vector_sitenotice"]          = "Afficher la notice du site ?";
$lang["vector_sitenotice_location"] = "Si oui, utilisez la page wiki suivante pour la notice :";

//navigation
$lang["vector_navigation"]          = "Afficher la navigation ?";
$lang["vector_navigation_location"] = "Si oui, utilisez la page wiki suivante pour la navigation :";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "Afficher la boite 'imprimer/exporter' ?";
$lang["vector_exportbox_default"]  = "Si oui, utilisez la boite 'imprimer/exporter' par default ?";
$lang["vector_exportbox_location"] = "Si non, utilisez la page wiki suivante :";

//toolbox
$lang["vector_toolbox"]          = "Afficher la boite à outils ?";
$lang["vector_toolbox_default"]  = "Si oui, utilisez la boite à outils par default ?";
$lang["vector_toolbox_location"] = "Si non, utilisez la page wiki suivante :";

//custom copyright notice
$lang["vector_copyright"]          = "Afficher le copyright en pied de page?";
$lang["vector_copyright_default"]  = "Si oui, utilisez la notice de copyright par default ?";
$lang["vector_copyright_location"] = "Si non, utilisez la page wiki suivante :";

//donation link/button
$lang["vector_donate"]          = "Afficher le lien de dons ?";
$lang["vector_donate_default"]  = "Si oui, utilisez l'URL par default ?";
$lang["vector_donate_url"]      = "Si non, utilisez l'URL suivante our les donations :";

//TOC
$lang["vector_toc_position"] = "Sommaire position";

//other stuff
$lang["vector_mediamanager_embedded"] = "Afficher le media manager embarqué avec le layout commun ?";
$lang["vector_breadcrumbs_position"]  = "Position du fil d'ariane (si actif) :";
$lang["vector_youarehere_position"]   = "Position du 'Vous êtes ici' (si actif) :";
$lang["vector_cite_author"]           = "Nom de l'auteur dans 'Citer cet article' :";
$lang["vector_loaduserjs"]            = "Charger 'vector/user/user.js' ?";
$lang["vector_closedwiki"]            = "Wiki fermé (la plupart des liens/onglets/boites sont masquée sans connexion) ?";

