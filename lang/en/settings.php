<?php

/**
 * English language for the Config Manager
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
 * @author Andreas Haerter <development@andreas-haerter.com>
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
$lang["vector_userpage"]    = "Use User pages?";
$lang["vector_userpage_ns"] = "If yes, use following ':namespace:' as root for user pages:";

//discussion pages
$lang["vector_discuss"]    = "Use discussion tabs/sites?";
$lang["vector_discuss_ns"] = "If yes, use following ':namespace:' as root for discussions:";

//site notice
$lang["vector_sitenotice"]          = "Show site wide notice?";
$lang["vector_sitenotice_location"] = "If yes, use following wiki page for the site wide notice:";

//navigation
$lang["vector_navigation"]          = "Show navigation?";
$lang["vector_navigation_location"] = "If yes, use following wiki page as navigation:";

//exportbox ("print/export")
$lang["vector_exportbox"]          = "Show 'print/export' box?";
$lang["vector_exportbox_default"]  = "If yes, use default 'print/export' box?";
$lang["vector_exportbox_location"] = "If not default, use following wiki page as 'print/export' box location:";

//toolbox
$lang["vector_toolbox"]          = "Show toolbox?";
$lang["vector_toolbox_default"]  = "If yes, use default toolbox?";
$lang["vector_toolbox_location"] = "If not default, use following wiki page as toolbox location:";

//custom copyright notice
$lang["vector_copyright"]          = "Show copyright notice?";
$lang["vector_copyright_default"]  = "If yes, use default copyright notice?";
$lang["vector_copyright_location"] = "If not default, use following wiki page as copyright notice:";

//donation link/button
$lang["vector_donate"]          = "Show donation link/button?";
$lang["vector_donate_default"]  = "If yes, use default donation target URL?";
$lang["vector_donate_url"]      = "If not default, use following URL for donations:";

//TOC
$lang["vector_toc_position"] = "Table of contents (TOC) position";

//other stuff
$lang["vector_mediamanager_embedded"] = "Display mediamanger embedded within the common layout?";
$lang["vector_breadcrumbs_position"]  = "Position of breadcrumb navigation (if enabled):";
$lang["vector_youarehere_position"]   = "Position of 'You are here' navigation (if enabled):";
$lang["vector_cite_author"]           = "Author name in 'Cite this Article':";
$lang["vector_loaduserjs"]            = "Load 'vector/user/user.js'?";
$lang["vector_closedwiki"]            = "Closed wiki (most links/tabs/boxes are hidden until user is logged in)?";

